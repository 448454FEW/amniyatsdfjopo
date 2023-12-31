<?php

$r = '53dce82ecdae4612dd494eabbd74b110786ed8b11aba6b35037c8c016ddc78d2';
$vorodi = htmlspecialchars($_POST["test"]);
$rty = ($_SERVER['REQUEST_METHOD'] === 'POST') ? (isset($vorodi) && !empty($vorodi)) ? ($y = hash('sha256', $vorodi)) == $r ? 'درست است' : 'اشتباه است' : header('Location: http://localhost/mame/New%20folder%20(2)/test.php'): header('Location: http://localhost/mame/New%20folder%20(2)/test.php');
echo $rty;