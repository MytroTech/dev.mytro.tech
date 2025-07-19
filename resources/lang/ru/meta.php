<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Текстовые строки раздела Мета теги
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Добавление записи мета тегов',
        'edit' => 'Редактирование записи мета тегов: <span class="text-success">:name</span>',
        'index' => 'Мета теги',
        'list' => 'Все записи',
    ],

    'legend' => [
        'description' => '&lt; Description &gt;',
        'descriptionWithLanguage' => '&lt; Description &gt; (:language)',
        'keywords' => '&lt; Keywords &gt;',
        'keywordsWithLanguage' => '&lt; Keywords &gt; (:language)',
        'path' => 'Адрес страницы',
        'title' => '&lt; Title &gt;',
        'titleWithLanguage' => '&lt; Title &gt; (:language)',
    ],

    'button' => [
        'create' => 'Добавить новую запись',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . 'Новая запись мета тегов <strong>:name</strong> была добавлена успешно.',
        'deleted' => config('constants.icons.success') . 'Запись мета тегов <strong>:name</strong> была успешно удалена.',
        'notFound' => config('constants.icons.info') . 'Записи мета тегов не найдены.',
        'updated' => config('constants.icons.success') . 'Запись мета тегов <strong>:name</strong> была успешно отредактирована.',
    ],

    'tip' => [
        'path' => 'Относительный адрес страницы, без домена.',
    ],

    'modal' => [
        'delete' => 'Вы уверены, что хотите удалить запись с ID: :id?',
    ],

];
