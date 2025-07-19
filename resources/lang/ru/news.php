<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Текстовые строки раздела Новости
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Добавление новости',
        'edit' => 'Редактирование новости: <span class="text-success">:name</span>',
        'index' => 'Новости',
        'list' => 'Все новости',
    ],

    'legend' => [
    ],

    'button' => [
        'create' => 'Добавить новость',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . 'Новость <strong>:name</strong> была добавлена успешно.',
        'deleted' => config('constants.icons.success') . 'Новость <strong>:name</strong> была успешно удалена.',
        'notFound' => config('constants.icons.info') . 'Новости не найдены.',
        'updated' => config('constants.icons.success') . 'Новость <strong>:name</strong> была успешно отредактирована.',
    ],

    'modal' => [
        'delete' => 'Вы уверены, что хотите удалить новость с ID: :id?',
    ],

];
