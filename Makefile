
all:
	make install 
	make build-front

env:
	cp .env.example .env
	@echo '# !- user -!' >> .env
	@echo UID=$(shell id -u) >> .env
	@echo GID=$(shell id -g) >> .env
	@echo '# !- user -!' >> .env

install:
	env
	composer install
	npm ci

build-front:
	npm run build