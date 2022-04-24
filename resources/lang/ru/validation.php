<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | вfollowing language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'в :attribute must be accepted.',
    'active_url' => 'в :attribute is not a valid URL.',
    'after' => 'в :attribute must be a date after :date.',
    'after_or_equal' => 'в :attribute must be a date after or equal to :date.',
    'alpha' => 'в :attribute may only contain letters.',
    'alpha_dash' => 'в :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'в :attribute may only contain letters and numbers.',
    'array' => 'в :attribute must be an array.',
    'before' => 'в :attribute must be a date before :date.',
    'before_or_equal' => 'в :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'в :attribute must be between :min and :max.',
        'file' => 'в :attribute must be between :min and :max kilobytes.',
        'string' => 'в :attribute must be between :min and :max characters.',
        'array' => 'в :attribute must have between :min and :max items.',
    ],
    'boolean' => 'в :attribute field must be true or false.',
    'confirmed' => 'в :attribute подтверждение не совпадает.',
    'date' => 'в :attribute не верная дата.',
    'date_equals' => 'в :attribute must be a date equal to :date.',
    'date_format' => 'в :attribute does not match the format :format.',
    'different' => 'в :attribute and :other must be different.',
    'digits' => 'в :attribute must be :digits digits.',
    'digits_between' => 'в :attribute must be between :min and :max digits.',
    'dimensions' => 'в :attribute has invalid image dimensions.',
    'distinct' => 'в :attribute field has a duplicate value.',
    'email' => 'в :attribute Адрес эл. почты должен быть действительным.',
    'ends_with' => 'в :attribute must end with one of the following: :values.',
    'exists' => 'в selected :attribute является недействительным.',
    'file' => 'в :attribute должен быть файл.',
    'filled' => 'в :attribute field must have a value.',
    'gt' => [
        'numeric' => 'в :attribute must be greater than :value.',
        'file' => 'в :attribute must be greater than :value kilobytes.',
        'string' => 'в :attribute must be greater than :value characters.',
        'array' => 'в :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'в :attribute must be greater than or equal :value.',
        'file' => 'в :attribute must be greater than or equal :value kilobytes.',
        'string' => 'в :attribute must be greater than or equal :value characters.',
        'array' => 'в :attribute must have :value items or more.',
    ],
    'image' => 'в :attribute должно быть изображение.',
    'in' => 'вselected :attribute is invalid.',
    'in_array' => 'в :attribute field does not exist in :other.',
    'integer' => 'в :attribute must be an integer.',
    'ip' => 'в :attribute must be a valid IP address.',
    'ipv4' => 'в :attribute must be a valid IPv4 address.',
    'ipv6' => 'в :attribute must be a valid IPv6 address.',
    'json' => 'в :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'в :attribute must be less than :value.',
        'file' => 'в :attribute must be less than :value kilobytes.',
        'string' => 'в :attribute must be less than :value characters.',
        'array' => 'в :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'в :attribute must be less than or equal :value.',
        'file' => 'в :attribute must be less than or equal :value kilobytes.',
        'string' => 'в :attribute must be less than or equal :value characters.',
        'array' => 'в :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'в :attribute не может быть больше, чем :max.',
        'file' => 'в :attribute may not be greater than :max kilobytes.',
        'string' => 'в :attribute не может быть больше, чем :max персонажи.',
        'array' => 'в :attribute may not have more than :max items.',
    ],
    'mimes' => 'в :attribute must be a file of type: :values.',
    'mimetypes' => 'в :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'в :attribute must be at least :min.',
        'file' => 'в :attribute must be at least :min kilobytes.',
        'string' => 'в :attribute must be at least :min characters.',
        'array' => 'в :attribute must have at least :min items.',
    ],
    'not_in' => 'вselected :attribute is invalid.',
    'not_regex' => 'в :attribute format is invalid.',
    'numeric' => 'в :attribute должен быть числом.',
    'password' => 'в Неверный пароль.',
    'present' => 'в :attribute field must be present.',
    'regex' => 'в :attribute format is invalid.',
    'required' => 'в :attribute Поле, обязательное для заполнения.',
    'required_if' => 'в :attribute field is required when :other is :value.',
    'required_unless' => 'в :attribute field is required unless :other is in :values.',
    'required_with' => 'в :attribute field is required when :values is present.',
    'required_with_all' => 'в :attribute field is required when :values are present.',
    'required_without' => 'в :attribute field is required when :values is not present.',
    'required_without_all' => 'в :attribute field is required when none of :values are present.',
    'same' => 'в :attribute and :other must match.',
    'size' => [
        'numeric' => 'в :attribute must be :size.',
        'file' => 'в :attribute must be :size kilobytes.',
        'string' => 'в :attribute must be :size characters.',
        'array' => 'в :attribute must contain :size items.',
    ],
    'starts_with' => 'в :attribute must start with one of the following: :values.',
    'string' => 'в :attribute must be a string.',
    'timezone' => 'в :attribute must be a valid zone.',
    'unique' => 'в :attribute уже использовано.',
    'uploaded' => 'в :attribute failed to upload.',
    'url' => 'в :attribute format is invalid.',
    'uuid' => 'в :attribute must be a valid UUID.',

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
    | вfollowing language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
