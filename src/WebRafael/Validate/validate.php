<?php

namespace Validate;

use Validate\Services\ValidateServices;

class Validate
{
    /**
     * $inputs
     *
     * @var array
     * @access private
     */
    private static $inputs;
    
    /**
     * $old
     *
     * @var string
     * @access private
     */
    private $old;
    
    /**
     * $field
     *
     * @var string
     * @access private
     */
    private $field;
    
    /**
     * $verify
     *
     * @var boolean
     * @access private
     */
    private $verify;
    
    /**
     * $all
     *
     * @var array
     * @access private
     */
    private $all;
    
    /**
     * $messages
     *
     * @var string
     * @access private
     */
    private $messages;
    
    /**
     * $json
     *
     * @var json
     * @access private
     */
    private $json;
    
    /**
     * $toArray
     *
     * @var array
     * @access private
     */
    private $toArray;
    
    /**
     * $object
     *
     * @var object
     * @access private
     */
    private $object;

    private static $_instance = null;

    private function __construct () { }


    static public function inputs(array $inputs)
    {
        self::$inputs = ValidateServices::is_valid($inputs);

        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        // return self::$_instance;
        return self::$inputs;
    }
    
    public function old(string $input = null)
    {
        return $input;
    }

    public function field(string $name = null) :string
    {
        return $name;
    }

    public function verify() :bool
    {
        return true;
    }

    public function all() :array
    {
        return [];
    }

    public function messages() :string
    {
        return 'retornando string';
    }

    public function json()
    {
        return json_encode(['type' => 'json']);
    }

    public function toArray() :array
    {
        return ['to' => 'array'];
    }

    public function obj() :object
    {
        return (object) ['to' => 'array'];
    }

}