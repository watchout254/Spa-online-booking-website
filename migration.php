<?php

require_once 'connect.php';

$db->exec("CREATE TABLE IF NOT EXISTS spa(id SERIAL, name tinytext, email tinytext,subject tinytext, message tinytext, sent_on timestamp, status tinyint)");