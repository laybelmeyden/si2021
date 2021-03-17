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

    'accept' => ':attribute attribute должен содержать accept.',
    'active_url' => ':attribute не является допустимым URL.',
    'after' => ':attribute attribute должен содержать дату после: date.',
    'after_or_equal' => ':attribute должен содержать дату после или равную: date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, дефисы и символы подчеркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен содержать массив.',
    'before' => ':attribute attribute должен содержать дату до: date.',
    'before_or_equal' => ':attribute должен содержать дату до или равную: date.',
    'between' => [
        'numeric' => ':attribute должен содержать между :min и :max.',
        'file' => ':attribute должен содержать между :min и :max килобайт.',
        'string' => ':attribute должен содержать между :min и :max символов.',
        'array' => ':attribute должен иметь от :min до :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно содержать true или false.',
    'confirmed' => 'Подтверждение :attribute не совпадает.',
    'date' => ':attribute не является допустимой датой.',
    'date_equals' => ':attribute должен содержать дату, равную: date.',
    'date_format' => ':attribute не соответствует формату: format.',
    'different' => ':attribute и: other должны содержать разные.',
    'digits' => ':attribute должен содержать: digits digits.',
    'digits_between' => ':attribute должен содержать между :min и :max цифрами.',
    'sizes' => ':attribute имеет недопустимые размеры изображения.',
    'Different' => 'Поле :attribute имеет повторяющееся значение.',
    'email' => ':attribute attribute должен содержать действительный адрес электронной почты.',
    'end_with' => ':attribute должен заканчиваться одним из следующих:: значения.',
    'exists' => 'Атрибут selected: недействителен.',
    'file' => ':attribute должен содержать файл.',
    'fill' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute атрибут должен содержать больше, чем:value.',
        'file' => ':attribute должен содержать больше, чем:value в килобайтах.',
        'string' => ':attribute attribute должен содержать больше, чем:value символов.',
        'array' => ':attribute должен содержать более: значений элементов.',
    ],
    'gte' => [
        'numeric' => ':attribute должен содержать больше или равно:value.',
        'file' => ':attribute должен содержать больше или равно:value в килобайтах.',
        'string' => ':attribute должен содержать больше или равно:value символов.',
        'array' => ':attribute должен иметь: элементы значения или более.',
    ],
    'image' => ':attribute attribute должен содержать изображение.',
    'in' => 'Атрибут selected: недействителен.',
    'in_array' => 'Поле :attribute не существует в: other.',
    'integer' => ':attribute должен содержать целое число.',
    'ip' => ':attribute должен содержать действительный IP-адрес.',
    'ipv4' => ':attribute должен содержать действительный адрес IPv4.',
    'ipv6' => ':attribute должен содержать действительный адрес IPv6.',
    'json' => ':attribute должен содержать допустимую строку JSON.',
    'lt' => [
        'numeric' => ':attribute attribute должен содержать меньше: value.',
        'file' => ':attribute атрибут должен содержать меньше, чем:value в килобайтах.',
        'string' => ':attribute должен содержать меньше, чем:value символов.',
        'array' => ':attribute должен содержать меньше: значений элементов.',
    ],
    'lte' => [
        'numeric' => ':attribute должен содержать меньше или равно:value.',
        'file' => ':attribute должен содержать меньше или равно:value в килобайтах.',
        'string' => ':attribute должен содержать меньше или равно:value символов.',
        'array' => ':attribute не может содержать более: значений элементов.',
    ],
    'max' => [
        'numeric' => ':attribute не может быть больше, чем :max.',
        'file' => ':attribute не может быть больше :max килобайт.',
        'string' => ':attribute не может быть больше, чем :max символов.',
        'array' => ':attribute не может содержать более :max элементов.',
    ],
    'mimes' => ':attribute должен содержать файл типа:: values.',
    'mimetypes' => ':attribute должен содержать файл типа:: values.',
    'min' => [
        'numeric' => ':attribute attribute должен содержать как минимум :min.',
        'file' => ':attribute должен содержать не менее: мин. килобайт.',
        'string' => ':attribute должен содержать минимум :min символов.',
        'array' => ':attribute должен содержать как минимум :min элементов.',
    ],
    'not_in' => 'Атрибут selected: недействителен.',
    'not_regex' => 'Недействительный формат: атрибута.',
    'numeric' => ':атрибут должен содержать число. ',
    'password' => 'неверен.',
    'present' => 'Поле :attribute должно содержать present.',
    'regex' => 'Недействительный формат: attribute.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Поле :attribute необходимо, когда: other is: value.',
    'required_unless' => 'Поле :attribute является обязательным, если: other не находится в: values.',
    'required_with' => 'Поле :attribute обязательно, если присутствует: values.',
    'required_with_all' => 'Поле :attribute необходимо, если: значения присутствуют.',
    'required_without' => 'Поле :attribute является обязательным, если: values отсутствует.',
    'required_without_all' => 'Поле :attribute   является обязательным, если нет ни одного из :values.',
    'same' => ':attribute и :other должен соответствовать',
    'size' => [
        'numeric' => ':attribute должен содержать :size.',
        'file' => ':attribute должен содержать :size kilobytes.',
        'string' => ':attribute должен содержать :size символов.',
        'array' => ':attribute должен содержать :size items.',
    ],
    'starts_with' => ':attribute должен начинаться с одного из следующих: :values.',
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должна быть действующая зона',
    'unique' => ':attribute уже принято.',
    'uploaded' => ':attribute не удалось загрузить.',
    'url' => ':attribute формат недействителен.',
    'uuid' => ':attribute должен быть действительный UUID.',

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
