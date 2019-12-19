<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        'class_attributes_separation' => [
            'elements' => [
                'const',
                'method',
                'property'
            ]
        ],
        'yoda_style' => false,
        'align_multiline_comment' => [
            'comment_type' => 'all_multiline',
        ],
        'self_accessor' => true,
        'array_syntax' => [
            'syntax' => 'short'
        ],
        'concat_space' => [
            'spacing' => 'one'
        ],
        'declare_strict_types' => true,
        'header_comment' => [
            'header' => <<<EOH
This file has been auto generated by Jane,

Do no edit it directly.
EOH
            ,
        ],
    ]);