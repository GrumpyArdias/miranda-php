<?php
require_once("configBlade.php");
echo $blade->run("index", array("rooms"));
