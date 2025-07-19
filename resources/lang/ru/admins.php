<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Текстовые строки раздела Администраторы
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Добавление нового администратора',
        'edit' => 'Редактирование администратора: <span class="text-success">:name</span>',
        'index' => 'Администраторы',
        'list' => 'Все администраторы',
    ],

    'legend' => [
        'name' => 'Имя',
    ],

    'button' => [
        'create' => 'Добавить нового администратора',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . 'Администратор <strong>:name</strong> был добавлен успешно.',
        'deleted' => config('constants.icons.success') . 'Администратор <strong>:name</strong> был успешно удалён.',
        'notFound' => config('constants.icons.info') . 'Администраторы не найдены.',
        'updated' => config('constants.icons.success') . 'Администратор <strong>:name</strong> был успешно отредактирован.',
    ],

    'modal' => [
        'delete' => 'Вы уверены, что хотите удалить администратора с ID: :id?',
    ],

];
