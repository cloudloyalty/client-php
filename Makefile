.PHONY: generate test

generate:
	php vendor/bin/jane-openapi generate --config-file=jane-openapi-configuration.php
	rm -rf lib/Generated/{Authentication,Endpoint,Normalizer,Client.php,Runtime}

test:
	@./vendor/bin/phpunit -d date.timezone=Europe/Moscow tests/ --colors=always

# vim: noexpandtab

