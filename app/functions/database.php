<?php

function connect() {
    $pdo = new \PDO("mysql:host=localhost;dbname=fullstack;charset=utf-8", 'php', '123456');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $pdo;
}

function create() {

}

function update() {

}

function find() {

}

function delete() {

}