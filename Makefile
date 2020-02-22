.PHONY: generate test

generate:
	php vendor/bin/jane-openapi generate --config-file=jane-openapi-configuration.php
	rm -rf lib/Generated/Authentication lib/Generated/Endpoint lib/Generated/Normalizer lib/Generated/Client.php

test:
	@./vendor/bin/phpunit tests/ --colors=always

# vim: noexpandtab

