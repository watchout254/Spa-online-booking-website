<?php

require_once 'sconnect.php';

$db->exec("CREATE TABLE IF NOT EXISTS up( name VARCHAR, email VARCHAR, id_no int, password VARCHAR, sent_on timestamp, status tinyint)");