conf:
	@sudo apt-get install php7.2 php7.2-mbstring php7.2-mysql php7.2-intl php7.2-xml composer
	@composer install --no-scripts
	@cp .env.example .env
	@php artisan key:generate
	@sudo apt-get install mysql-server-5.7
	@$(MAKE) bd-conf
	php artisan serve

composer:
	@composer install --no-scripts
	@cp .env.example .env
	@php artisan key:generate
	@$(MAKE) bd-conf
	php artisan serve

Windows:
	composer install --no-scripts
	copy .env.example .env
	php artisan key:generate

erickson:
	@git config user.email "erickson.rinho@hotmail.com"
	@git config user.name "Erickson"

kevin:
	@git config user.name "kevinsousa"
	@git config user.email "kevinsmoura@hotmail.com"

jhonny:
	@git config user.email "jhonnyfarias87@gmail.com"
	@git config user.name "jhonnyfreitas1"

geovane:
	@git config user.email "geovanejose240899@gmail.com"
	@git config user.name "geovanejose"

bd-conf:
	@mysql -u root -p --execute="drop database if exists web; create database web; drop user if exists 'web'; create user 'web' identified by 'web'; grant all privileges on web.* to 'web';"
	@sed -i 's/DB_DATABASE.*/DB_DATABASE=web/' .env
	@sed -i 's/DB_USERNAME.*/DB_USERNAME=web/' .env
	@sed -i 's/DB_PASSWORD.*/DB_PASSWORD=web/' .env	
	php artisan migrate:refresh --seed