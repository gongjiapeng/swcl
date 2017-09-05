<?php
use CreateImage\QrcodeImage\QrcodeImage;
require_once __DIR__ . '/../../autoLoad.php';

require_once(__DIR__.'/Data.php');
$params = $config['mould'];

$path =  __DIR__;
$filename = 'qrcode';

$QrcodeImage  = new QrcodeImage($path,$filename);
echo  '<pre>';print_r($QrcodeImage);exit;


