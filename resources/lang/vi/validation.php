<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'numeric' => ':attribute phải là một số.',
    'min' => [
        'numeric' => ':attribute tối thiểu phải là :min.',
        'file' => ':attribute tối thiểu phải là :min kilobytes.',
        'string' => ':attribute tối thiểu phải là :min kí tự.',
        'array' => ':attribute tối thiểu phải là :min mặt hàng.',
    ],
    'max' => [
        'numeric' => ':attribute tối thiểu phải là :min.',
        'file' => ':attribute tối thiểu phải là :min kilobytes.',
        'string' => ':attribute tối thiểu phải là :min kí tự.',
        'array' => ':attribute tối thiểu phải là :min mặt hàng.',
    ],
    'string' => ':attribute phải là kí tự chuỗi.',
    'unique' => ':attribute đã tồn tại.',
    'email' => ':attribute phải là định dạng abc@...',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
