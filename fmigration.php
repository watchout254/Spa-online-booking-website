<?php

require_once 'fconnect.php';

$db->exec("CREATE TABLE IF NOT EXISTS faqs(subject tinytext, message tinytext, sent_on timestamp, status tinyint)");