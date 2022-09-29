<?php

require_once "data/Manager2.php";

$manager = new Managers("carl","Manager");

$manager->sayHello("mark");

$vp = new VicePresidents("michael");

$vp->sayHello();