docker-up:
	docker-compose up -d

docker-down:
	docker-compose down

docker-build: perm
	docker-compose up --build -d

assets-install:
	docker-compose exec node yarn install

assets-dev:
	docker-compose exec node yarn run dev

assets-watch:
	docker-compose exec node yarn run watch

test:
	@docker-compose exec php-cli vendor/bin/phpunit

perm:
	sudo chown ${USER}:${USER} bootstrap/cache -R
	sudo chown ${USER}:${USER} storage -R
	if [ -d "node_modules" ]; then sudo chown ${USER}:${USER} node_modules -R; fi
	if [ -d "public/build" ]; then sudo chown ${USER}:${USER} public/build -R; fi
