.PHONY: generate test

generate:
	php vendor/bin/jane-openapi generate --config-file=jane-openapi-configuration.php
	@rm -rf lib/Generated/Authentication/
	@rm -rf lib/Generated/Endpoint/
	@rm -rf lib/Generated/Normalizer/
	@rm -rf lib/Generated/Client.php
	@rm -rf lib/Generated/Runtime/

test:
	@./vendor/bin/phpunit -d date.timezone=Europe/Moscow tests/ --colors=always

# vim: noexpandtab

