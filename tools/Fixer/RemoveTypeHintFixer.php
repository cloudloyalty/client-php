<?php

namespace Tools\Fixer;

use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\Tokenizer\Analyzer\FunctionsAnalyzer;
use PhpCsFixer\Tokenizer\CT;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;

/**
 * @internal
 */
class RemoveTypeHintFixer implements FixerInterface
{
    private static $bannedArgumentTypes = [
        'bool',
        'callable',
        'int',
        'iterable',
        'float',
        'mixed',
        'numeric',
        'object',
        'resource',
        'self',
        'string',
        'void',
    ];

    public function getName()
    {
        return 'CL/remove_type_hint';
    }

    public function getPriority()
    {
        return 0;
    }

    public function isRisky()
    {
        return true;
    }

    public function isCandidate(Tokens $tokens)
    {
        return $tokens->isTokenKindFound(T_FUNCTION);
    }

    public function supports(\SplFileInfo $file)
    {
        return true;
    }

    public function fix(\SplFileInfo $file, Tokens $tokens)
    {
        $functionsAnalyzer = new FunctionsAnalyzer();

        for ($index = $tokens->count() - 1; $index >= 0; --$index) {
            $token = $tokens[$index];

            if ($token->getId() !== T_FUNCTION) {
                continue;
            }

            $arguments = $functionsAnalyzer->getFunctionArguments($tokens, $index);

            // Remove argument type hints
            $defaultNullUntilEnd = false;
            $appendIndex = 0;
            foreach ($arguments as $argumentInfo) {
                $ta = $argumentInfo->getTypeAnalysis();
                if ($ta) {
                    // Remove ?
                    if ($ta->isNullable()) {
                        $tokens->removeTrailingWhitespace($ta->getStartIndex());
                        $tokens->clearTokenAndMergeSurroundingWhitespace($ta->getStartIndex());
                        $defaultNullUntilEnd = true;
                    }

                    // Remove type hint
                    if (in_array($ta->getName(), self::$bannedArgumentTypes)) {
                        $tokens->clearRange($ta->getStartIndex(), $ta->getEndIndex());
                        $ws = $ta->getEndIndex() + 1;
                        while ($tokens[$ws]->isWhitespace()) {
                            $tokens->clearAt($ws);
                            $ws++;
                        }
                    }
                }

                // Append = null for nullable arguments
                if ($defaultNullUntilEnd && !$argumentInfo->hasDefault()) {
                    $newTokens = [
                        new Token([T_WHITESPACE, ' ']),
                        new Token('='),
                        new Token([T_WHITESPACE, ' ']),
                        new Token([T_STRING, 'null']),
                    ];
                    $tokens->insertAt($argumentInfo->getNameIndex() + 1 + $appendIndex, $newTokens);
                    $appendIndex += 4;
                }
            }

            // Remove return type hint
            $ta = $functionsAnalyzer->getFunctionReturnType($tokens, $index);
            if ($ta) {
                $tokens->clearRange($ta->getStartIndex(), $ta->getEndIndex());
                $ws = $ta->getStartIndex() - 1;
                while ($tokens[$ws] && ($tokens[$ws]->isWhitespace() || $tokens[$ws]->getId() == CT::T_TYPE_COLON)) {
                    $tokens->clearAt($ws);
                    $ws--;
                }
            }
        }
    }
}