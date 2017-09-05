<?php
namespace Validator;
/**
* author jiapeng.gong
*/
class Verification
{
	/**
     * The files under validation.
     *
     * @var array
     */
    protected $files = [];
	/**
     * The Translator implementation.
     *
     * @var 
     */
    protected $translator;
    /**
     * The message bag instance.
     *
     * @var \Support\MessageBag
     */
    protected $messages;
    /**
     * Create a new Validator instance.
     *
     * @param  array  $data
     * @param  array  $rules
     * @param  array  $messages
     * @param  array  $customAttributes
     * @return void
     */
    public function __construct(array $data, array $rules, array $messages = [], array $customAttributes = [])
    {
        $this->translator = $this->getTranslator();
        $this->customMessages = $messages;
        $this->data = $this->parseData($data);
        $this->customAttributes = $customAttributes;
        $this->initialRules = $rules;

        //$this->setRules($rules);
    }
    protected function getTranslator()
    {
    	return "123123";
    }
     /**
     * Parse the data and hydrate the files array.
     *
     * @param  array   $data
     * @param  string  $arrayKey
     * @return array
     */
    protected function parseData(array $data, $arrayKey = null)
    {
        if (is_null($arrayKey)) {
            $this->files = [];
        }

        foreach ($data as $key => $value)
        {
            $key = ($arrayKey) ? "$arrayKey.$key" : $key;

            // If this value is an instance of the HttpFoundation File class we will
            // remove it from the data array and add it to the files array, which
            // we use to conveniently separate out these files from other data.
            if ($value instanceof File)
            {
                $this->files[$key] = $value;

                unset($data[$key]);
            } 
            elseif (is_array($value))
            {
                $this->parseData($value, $key);
            }
        }
        return $data;
    }


}