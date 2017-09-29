.PHONY: run

run:
	@docker run -it --rm \
		-v $(CURDIR):/toolbox \
		-w /toolbox \
		devdrops/php-toolbox:latest \
		php $(COMMAND)

version:
	@docker run -it --rm \
		-v $(CURDIR):/toolbox \
		-w /toolbox \
		devdrops/php-toolbox:latest \
		php -v
