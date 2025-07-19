<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Текстовые строки раздела Категории
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Создание новой категории',
        'edit' => 'Редактирование категории: <span class="text-success">:name</span>',
        'index' => 'Категории',
        'list' => 'Все категории',
    ],

    'legend' => [
        'parent' => 'Родительская категория',
        'root' => 'Корневая категория',
    ],

    'button' => [
        'create' => 'Создать новую категорию',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . 'Категория <strong>:name</strong> была создана успешно.',
        'deleted' => config('constants.icons.success') . 'Категория <strong>:name</strong> была успешно удалена.',
        'notFound' => config('constants.icons.info') . 'Категории не найдены.',
        'updated' => config('constants.icons.success') . 'Категория <strong>:name</strong> была успешно отредактирована.',
    ],

    'modal' => [
        'delete' => 'Вы уверены, что хотите удалить категорию с ID: :id?',
    ],

];
