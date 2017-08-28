<?php
namespace Ioc;
class Di
{
	private $_service = [];
	public function set($name, $definition)
    {
        $this->_service[$name] = $definition;
    }
	public function get($name)
	{
		if(isset($this->_service[$name]))
		{
			$definition = $this->service[$name];
		}
		else
		{
			 throw new Exception("Service '" . name . "' wasn't found in the dependency injection container");
		}
		if(is_object($this->_service[$name]))
		{
			$instance = call_user_func($definition);
		}
		return $instance;
	}
}
