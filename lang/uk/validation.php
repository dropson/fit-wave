<?php

return [

    'required' => 'Поле :attribute є обов’язковим.',
    'email' => 'Поле :attribute повинно бути дійсною електронною адресою.',
    'unique' => 'Поле :attribute вже використовується.',
    'confirmed' => 'Поле :attribute не співпадає з підтвердженням.',
    'min' => [
        'string' => 'Поле :attribute повинно містити щонайменше :min символів.',
    ],
    'max' => [
        'string' => 'Поле :attribute не може містити більше ніж :max символів.',
    ],

    'attributes' => [
        'name' => 'ім’я',
        'email' => 'електронна адреса',
        'password' => 'пароль',
        'password_confirmation' => 'підтвердження пароля',
    ],


];
