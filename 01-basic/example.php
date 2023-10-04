<?php

declare(strict_types=1);

if (@!include __DIR__ . '/../vendor/autoload.php') {
	echo 'Install Latte using `composer install`';
	exit(1);
}

// Initialize the Latte engine
$latte = new Latte\Engine;

// Set the temporary directory for compiled templates
$latte->setTempDirectory(__DIR__ . '/temp');

// Enable auto-refresh for development mode. It recompiles templates on every request.
$latte->setautoRefresh();

// Render the index.latte template
$latte->render(__DIR__ . '/templates/index.latte');
