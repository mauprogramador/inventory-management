#!/bin/bash

echo -e "\033[33mRunning Sail Up\033[m"
./vendor/bin/sail up -d --build

echo -e "\033[33mWaiting 10secs for MySQL\033[m"
sleep 10

echo -e "\033[33mRunning Migrate\033[m"
docker exec inventory_laravel bash -c "php artisan migrate"

echo -e "\033[33mSeeding the Database\033[m"
docker exec inventory_laravel bash -c "php artisan db:seed"

echo -e "\033[32mDone\033[m"
