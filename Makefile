.PHONY: generate

generate:
	php vendor/bin/jane-openapi generate --config-file=jane-openapi-configuration.php
	rm -rf lib/Generated/Endpoint lib/Generated/Normalizer lib/Generated/Client.php

# vim: noexpandtab

