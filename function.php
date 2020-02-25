<?php

$config['db_host'] = 'localhost';
$config['db_user'] = 'root';
$config['db_pass'] = '';
$config['db_name'] = 'dropdown';


$mysqli = new mysqli($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name']);
