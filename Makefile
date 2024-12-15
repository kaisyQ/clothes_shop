env:
	cp .env.example .env
	@echo '# !- user -!' >> .env
	@echo UID=$(shell id -u) >> .env
	@echo GID=$(shell id -g) >> .env
	@echo '# !- user -!' >> .env


build:
	env
