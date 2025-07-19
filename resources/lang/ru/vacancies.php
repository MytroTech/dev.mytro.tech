<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Текстовые строки раздела Вакансии
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Добавление новой вакансии',
        'edit' => 'Редактирование вакансии: <span class="text-success">:name</span>',
        'index' => 'Вакансии',
        'list' => 'Все вакансии',
    ],

    'legend' => [
    ],

    'button' => [
        'create' => 'Добавить новую вакансию',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . 'Вакансия <strong>:name</strong> была добавлена успешно.',
        'deleted' => config('constants.icons.success') . 'Вакансия <strong>:name</strong> была успешно удалена.',
        'notFound' => config('constants.icons.info') . 'Вакансии не найдены.',
        'updated' => config('constants.icons.success') . 'Вакансия <strong>:name</strong> была успешно отредактирована.',
    ],

    'modal' => [
        'delete' => 'Вы уверены, что хотите удалить вакансию с ID: :id?',
    ],

];
