<?php require_once './blade/BladeOne.php';
require_once './blade/BladeOneCache.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
