<?php
if (preg_match('/\/$/s', $_SERVER['REQUEST_URI'])) {
    include __DIR__ . $_SERVER['REQUEST_URI'] . 'index.php';
}