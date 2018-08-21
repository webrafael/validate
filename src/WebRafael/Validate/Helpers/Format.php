<?php

namespace Validate\Helpers;

class Format
{
    protected static $length = [];
    protected $format;

    static public function getLength($lengths)
	{
        $length = explode(",", $lengths);
        
		foreach($length as $key => $value) {
			$pega  = explode(":", $value);
			if(isset($pega[0])) {
				self::$length[$pega[0]] = $pega[1];
			}
        }
        
		return self::$length;
    }

    static public function subFormat($value)
	{
		$value = explode(":", $value);
		return $value[1];
    }
}