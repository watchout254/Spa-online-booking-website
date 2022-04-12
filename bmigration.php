<?php

require_once 'connect.php';

$db->exec("CREATE TABLE IF NOT EXISTS online(name tinytext, email tinytext, number tinytext, date tinytext, 
time tinytext, service tinytext, sent_on timestamp, status tinyint)");