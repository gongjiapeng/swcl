<?php
use Support\Facades\Validator;
//use Validator\Validator;
require_once __DIR__ . '/../../autoLoad.php';


//$Validator  = new Validator();
//$check = [['test'],['require'],['必填']];
$a = Validator::make(
		['test'],
		['require'],
		['必填']
		);


