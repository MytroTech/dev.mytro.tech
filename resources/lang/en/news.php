<?php

return [

    /*
    |--------------------------------------------------------------------------
    | News Section Language Lines
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Add News Article',
        'edit' => 'Edit News Article: <span class="text-success">:name</span>',
        'index' => 'News',
        'list' => 'All news',
    ],

    'legend' => [
    ],

    'button' => [
        'create' => 'Add news article',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . '<strong>:name</strong> news article was successfully created.',
        'deleted' => config('constants.icons.success') . '<strong>:name</strong> news article was successfully deleted.',
        'notFound' => config('constants.icons.info') . 'News articles were not found.',
        'updated' => config('constants.icons.success') . '<strong>:name</strong> news article was successfully updated.',
    ],

    'modal' => [
        'delete' => 'Are you sure you want to delete the news article with ID: :id?',
    ],

];
