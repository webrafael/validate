<?php

use Validate\Validate;

include_once "../vendor/autoload.php";

print_r(Validate::inputs([
    'nome' => ['name' => 'Nome', 'validate' => 'required|min:6,max:120'],
    'cpf' => 'required|cpf'
]));
