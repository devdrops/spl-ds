.PHONY: run

MAKEPATH := $(abspath $(lastword $(MAKEFILE_LIST)))
PWD := $(dir $(MAKEPATH))

run:
	docker run -it --rm \
		-v $(PWD):/toolbox \
		-w /toolbox \
		devdrops/php-toolbox \
		php $(COMMAND)

version:
	docker run -it --rm \
                -v $(PWD):/toolbox \
                -w /toolbox \
                devdrops/php-toolbox \
                php -v

