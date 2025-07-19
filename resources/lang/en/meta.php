<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Meta Section Language Lines
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Add Meta Tags Entry',
        'edit' => 'Edit Meta Tags Entry: <span class="text-success">:name</span>',
        'index' => 'Meta Tags',
        'list' => 'All entries',
    ],

    'legend' => [
        'description' => '&lt; Description &gt;',
        'descriptionWithLanguage' => '&lt; Description &gt; (:language)',
        'keywords' => '&lt; Keywords &gt;',
        'keywordsWithLanguage' => '&lt; Keywords &gt; (:language)',
        'path' => 'Page path',
        'title' => '&lt; Title &gt;',
        'titleWithLanguage' => '&lt; Title &gt; (:language)',
    ],

    'button' => [
        'create' => 'Add new entry',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . '<strong>:name</strong> meta tags entry was successfully created.',
        'deleted' => config('constants.icons.success') . '<strong>:name</strong> meta tags entry was successfully deleted.',
        'notFound' => config('constants.icons.info') . 'Meta tags entries were not found.',
        'updated' => config('constants.icons.success') . '<strong>:name</strong> meta tags entry was successfully updated.',
    ],

    'tip' => [
        'path' => 'Page relative path, without domain.',
    ],

    'modal' => [
        'delete' => 'Are you sure you want to delete the meta tag entry with ID: :id?',
    ],

];
