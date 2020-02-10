#!/bin/sh
php -S localhost:8000 -t . .cli-server.php &
SERVER_ID=$!
python -mwebbrowser http://localhost:8000
wait $SERVER_ID