<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Текстовые строки раздела Страницы
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Создание новой страницы',
        'edit' => 'Редактирование страницы: <span class="text-success">:name</span>',
        'index' => 'Страницы',
        'list' => 'Все страницы',
    ],

    'legend' => [
        'category' => 'Категория',
        'root' => 'Без категории',
    ],

    'button' => [
        'create' => 'Создать новую страницу',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . 'Страница <strong>:name</strong> была создана успешно.',
        'deleted' => config('constants.icons.success') . 'Страница <strong>:name</strong> была успешно удалена.',
        'notFound' => config('constants.icons.info') . 'Страницы не найдены.',
        'updated' => config('constants.icons.success') . 'Страница <strong>:name</strong> была успешно изменена.',
    ],

    'modal' => [
        'delete' => 'Вы уверены, что хотите удалить страницу с ID: :id?',
    ],

];
