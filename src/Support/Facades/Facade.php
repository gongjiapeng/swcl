<?php
namespace Support\Facades;
/**
* 
*/
class Facade
{
	/**
	 * [getInstance description]
	 * @param  [type] $classname [description]
	 * @param  [type] $args      [description]
	 * @return [type]            [description]
	 */
	protected static function getInstance($classname,$args)
	{
		return new $classname($args);
	}
	/**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
	protected static function getFacadeAccessor()
	{
		throw new RuntimeException('Facade does not implement getFacadeAccessor method.');
	}
	/**
     * Handle dynamic, static calls to the object.
     *
     * @param  string  $method
     * @param  array   $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
	public static function __callStatic($method,$args)
	{
		$instance = static::getInstance(static::getFacadeAccessor(),[1,2,3]);
		return call_user_func_array(array($instance,$method),$args);
	} 
}