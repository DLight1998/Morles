#!/bin/sh
php -S localhost:8000 -t public .htrouter.php &
SERVER_ID=$!
python -mwebbrowser http://localhost:8000
wait $SERVER_ID