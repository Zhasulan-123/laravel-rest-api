
## Установка Laravel

1 sudo docker-compose up --build

2 sudo docker-compose up -d

3 sudo docker-compose run --rm apache composer update

4 sudo cp .env.example .env

5 sudo chmod -R 777 ./*

6 sudo docker-compose run --rm apache php artisan key:generate

7 sudo docker-compose run --rm apache php artisan migrate

8 sudo docker-compose run --rm apache phpunit

9 phpmyadmin http://localhost:8000
   
   username: root
   password: qwe

10 apache http://localhost:8020 Laravel

