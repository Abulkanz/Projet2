<?php
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();
$test=array();
$tpl->display('vues/loginVue.tpl');