<?php
namespace Db;
class Db
{
	private static $_instance = null;
	private function __construct()
	{

	}
	private function __clone()
	{

	}
	static public function getInstance()
	{
		if(is_null(self::$_instance) || !isset ( self::$_instance ))
		{
			self::$_instance = new self();
		}
		return self::$_instance;
	}
}