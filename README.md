## Introdução

  

Repositório...

  

## Instalação

Procedimento para instalação é a mesmo para instalar o laravel

- Rodar os comandos para permissão do storage

	-  `sudo chmod -R ug+rwx storage bootstrap/cache`

	-  `sudo chgrp -R www-data storage bootstrap/cache`

- Instalar as dependências
	- `docker-compose exec php-fpm composer install`
	- Configurar o env com as informações do container do docker
	- `docker-compose exec php-fpm php artisan migrate`
    - Instalação das pacotes node `npm install`
