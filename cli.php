<?php

require_once __DIR__ . '/vendor/autoload.php';

use Test\Kennel\Kennel;

$kennel = New Kennel();

$kennel -> helpList();

$kennel -> listen();
