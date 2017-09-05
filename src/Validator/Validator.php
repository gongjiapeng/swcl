<?php
namespace Validator;
use Validator\Verification;
/**
* 
*/
class Validator 
{
	/**
     * The Verification resolver instance.
     *
     * @var Closure
     */
    protected $resolver;
   
	/**
	 * [make description]
	 * @param  array  $data             [description]
	 * @param  array  $rules            [description]
	 * @param  array  $messages         [description]
	 * @param  array  $customAttributes [description]
	 * @return [type]                   [description]
	 */
    public function make(array $data, array $rules, array $messages = [], array $customAttributes = [])
    {
    	$validator = $this->resolve($data, $rules, $messages, $customAttributes);

        return $validator;
    }
    /**
     * Resolve a new Validator instance.
     *
     * @param  array  $data
     * @param  array  $rules
     * @param  array  $messages
     * @param  array  $customAttributes
     * @return \Validator\Verification
     */
    protected function resolve(array $data, array $rules, array $messages, array $customAttributes)
    {
    	if (is_null($this->resolver)) {
           	$validator = new Verification($data, $rules, $messages, $customAttributes);
           //	echo '<pre>';print_r($validator);exit;
           	$this->resolver($validator);
           	return $validator;
        }
        return call_user_func($this->resolver, $data, $rules, $messages, $customAttributes);
    }
    /**
     * Set the Validator instance resolver.
     *
     * @param  \Closure  $resolver
     * @return void
     */
    public function resolver(Verification $resolver)
    {
        $this->resolver = $resolver;
    }
}