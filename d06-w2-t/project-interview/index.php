<?php

$interviews = array('jordan.html', 'notch.html', 'rowling.html', 'sohn.html', 'wright.html');
include $interviews[rand(0, count($interviews)-1)];

?>