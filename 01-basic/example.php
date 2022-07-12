<?php

declare(strict_types=1);

if (@!include __DIR__ . '/../vendor/autoload.php') {
	echo 'Install Latte using `composer install`';
	exit(1);
}


$latte = new Latte\Engine;
$latte->setTempDirectory(__DIR__ . '/temp');
$latte->setautoRefresh();

$latte->render(__DIR__ . '/templates/index.latte');
