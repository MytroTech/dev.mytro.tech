<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Текстовые строки раздела Настройки
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'general' => 'Общие',
        'index' => 'Общие настройки',
    ],

    'legend' => [
        'default_language' => 'Язык по умолчанию',
        'default_meta_description' => '< Description > по умолчанию',
        'default_meta_keywords' => '< Keywords > по умолчанию',
        'default_meta_title' => '< Title > по умолчанию',
        'feedback_email' => 'Email обратной связи',
        'presentation' => 'Презентация',
    ],

    'alert' => [
        'notFound' => config('constants.icons.info') . 'Настройки не найдены.',
        'updated' => config('constants.icons.success') . '<strong>Настройки</strong> успешно изменены.',
    ],

    'tip' => [
        'feedback_email' => 'Этот Email адрес будет использован в качестве получателя при отправке запросов из формы обратной связи.',
    ],

];
