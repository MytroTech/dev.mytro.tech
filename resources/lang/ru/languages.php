<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Текстовые строки раздела Языки
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Добавление нового языка',
        'edit' => 'Редактирование языка: <span class="text-success">:name</span>',
        'index' => 'Языки',
        'list' => 'Все языки',
    ],

    'legend' => [
        'code' => 'Код страны',
    ],

    'button' => [
        'create' => 'Добавить новый язык',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . '<strong>:name</strong> был добавлен успешно.',
        'default' => config('constants.icons.info') . 'Невозможно удалить язык выбранный по умолчанию.',
        'deleted' => config('constants.icons.success') . '<strong>:name</strong> был успешно удалён.',
        'notFound' => config('constants.icons.info') . 'Языки не найдены.',
        'updated' => config('constants.icons.success') . '<strong>:name</strong> был успешно отредактирован.',
    ],

    'modal' => [
        'delete' => 'Вы уверены, что хотите удалить язык :name?',
    ],

];
