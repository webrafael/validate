<?php

namespace Validate\Services;

use Validate\Helpers\Format;

class RangeValidate
{
    protected static $split_services = [];

    public function required()
    {

    }

    public function maxLength()
    {

    }

    public function optional()
    {

    }

    static public function splitServices($inputs)
    {
        $split = explode("|", $inputs);
        foreach ($split as $key => $value) {
			if(preg_match_all('/max|min/', $value, $result)) {
				$maxlength = Format::getLength($value);
				if($maxlength) {
					self::$split_services[$key]['maxlength'] = $maxlength;
				}
			} elseif(preg_match_all('/data/', $value, $result)) {
				self::$split_services[$key]['data'] = Format::subFormat($value);
			} elseif(preg_match_all('/format/', $value, $result)) {
				self::$split_services[$key]['format'] = Format::subFormat($value);
			} elseif(preg_match_all('/mail\:true/', $value, $result)) {
				self::$split_services[$key]['mail'] = Format::subFormat($value);
			} else {
				self::$split_services[$key] = $value;
			}
        }
        
		return self::$split_services;
    }
}