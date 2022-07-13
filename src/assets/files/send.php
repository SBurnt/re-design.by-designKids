<?php

$childname = $_POST['child'];
$parentname = $_POST['parent'];
$usertel = $_POST['tel'];
$childage = $_POST['age'];
$typeCourse = $_POST['type'];

echo ' childname ' . $childname;
echo ' childage ' .  $childage;
echo ' parentname ' .  $parentname;
echo ' usertel ' .  $usertel;
echo ' typeCourse ' .  $typeCourse;

// require_once __DIR__ . "/telegram.php"; // Send to Telegram
