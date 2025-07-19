<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Текстовые строки раздела Обратная связь
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'feedback' => 'Обратная связь',
        'index' => 'Запросы обратной связи',
        'list' => 'Все запросы',
        'show' => 'Запрос обратной связи: <span class="text-success">:name</span>',
    ],

    'legend' => [
    ],

    'button' => [
        'new' => 'Новые запросы обратной связи',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . '<strong>:name</strong> feedback request was successfully created.',
        'deleted' => config('constants.icons.success') . 'Запрос обратной связи <strong>:name</strong> был успешно удалён.',
        'notFound' => config('constants.icons.info') . 'Запросы обратной связи не найдены.',
        'wasRead' => config('constants.icons.success') . 'Этот запрос обратной связи был помечен, как прочитанный.',
    ],

    'modal' => [
        'delete' => 'Вы уверены, что хотите удалить запрос обратной связи с ID: :id?',
    ],

];
