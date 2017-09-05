<?php
namespace Support\Facades;
use Validator\Validator as va;
/**
* 
*/
class Validator extends Facade
{
	 /**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
    protected static function getFacadeAccessor()
    {
        return va::class;
    }
}