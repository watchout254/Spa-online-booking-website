<?php

require_once 'lconnect.php';

$db->exec("CREATE TABLE IF NOT EXISTS man(email VARCHAR, password VARCHAR, sent_on timestamp, status tinyint)");