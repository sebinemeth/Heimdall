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

    'accepted'             => 'A(z) :attribute el kell legyen fogadva.',
    'active_url'           => 'A(z) :attribute nem érvényes URL.',
    'after'                => 'A(z) :attribute :date utáni dátum kell, hogy legyen.',
    'after_or_equal'       => 'A(z) :attribute nem lehet korábbi dátum, mint :date.',
    'alpha'                => 'A(z) :attribute kizárólag betűket tartalmazhat.',
    'alpha_dash'           => 'A(z) :attribute csak betűket, számokat és kötőjelet tartalmazhat.',
    'alpha_num'            => 'A(z) :attribute csak betűket és számokat tartalmazhat.',
    'array'                => 'A(z) :attribute csak tömb típusú lehet.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field must have a value.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'A(z) :attribute nem lehet nagyobb, mint :max Kb.',
        'string'  => 'A(z) :attribute hossza nem lehet több, mint :max karakter.',
        'array'   => 'A(z) :attribute legfeljebb :max elemet kell, hogy tartalmazzon.',
    ],
    'mimes'                => 'A(z) :attribute kizárólag az alábbi fájlformátumok egyike lehet: :values.',
    'mimetypes'            => 'A(z) :attribute kizárólag az alábbi fájlformátumok egyike lehet: :values.',
    'min'                  => [
        'numeric' => 'A(z) :attribute értéke nem lehet kisebb, mint :min.',
        'file'    => 'A(z) :attribute mérete nem lehet kevesebb, mint :min Kb.',
        'string'  => 'A(z) :attribute hossza nem lehet kevesebb, mint :min karakter.',
        'array'   => 'A(z) :attribute legalább :min elemet kell, hogy tartalmazzon.',
    ],
    'not_in'               => 'A kiválasztott :attribute étvénytelen.',
    'numeric'              => 'A(z) :attribute szám kell, hogy legyen.',
    'present'              => 'A(z) :attribute mező kötelező.',
    'regex'                => 'A(z) :attribute formátuma érvénytelen.',
    'required'             => 'A(z) :attribute mező kötelező.',
    'required_if'          => 'A(z) :attribute mező kötelező ha a(z) :other értéke :value.',
    'required_unless'      => 'A(z) :attribute mező kötelező, kivéve ha a(z) :other értéke az alábbiak egyike: :values.',
    'required_with'        => 'A(z) :attribute megadása kötelező, ha a(z) :values érték létezik.',
    'required_with_all'    => 'A(z) :attribute megadása kötelező, ha a(z) :values érték létezik.',
    'required_without'     => 'A(z) :attribute megadása kötelező, ha a(z) :values érték nem létezik.',
    'required_without_all' => 'A(z) :attribute megadása kötelező, ha a következők egyike sem létezik: :values.',
    'same'                 => 'A(z) :attribute és a(z) :other értékének egyeznie kell.',
    'size'                 => [
        'numeric' => 'A(z) :attribute csak :size lehet.',
        'file'    => 'A(z) :attribute csak :size Kb lehet.',
        'string'  => 'A(z) :attribute hossza :size karakter kell legyen.',
        'array'   => 'A(z) :attribute :size elemet kell tartalmazzon.',
    ],
    'string'               => 'A(z) :attribute szöveg kell legyen.',
    'timezone'             => 'A(z) :attribute érvényes zóna kell legyen.',
    'unique'               => 'A(z) :attribute már foglalt.',
    'uploaded'             => 'A(z) :attribute feltöltése sikertelen.',
    'url'                  => 'A(z) :attribute formátuma érvénytelen.',

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
            'rule-name' => 'egyéni üzenet',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
