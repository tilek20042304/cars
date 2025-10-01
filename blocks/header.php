<?php

const DB_HOST = 'localhost';
const DB_USER = 'tilek';
const DB_PASS = 'MyS3cur3P@ss!';

const DB_NAME = 'test_auto_project';

function getDB(): bool|mysqli
{
    return mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}
