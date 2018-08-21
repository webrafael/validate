<?php

namespace Validate\Services;

use Validate\Services\RangeValidate;

class ValidateServices extends RangeValidate
{
    static protected function service(array $inputs)
    {
        foreach($inputs ?? [] as $key => $value) {
			$result[$key] = parent::splitServices($value);
		}
        return $result;
    }

    static public function is_valid(array $inputs)
    {
        return self::service($inputs);
    }    
}