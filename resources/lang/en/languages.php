<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Languages Section Language Lines
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Add New Language',
        'edit' => 'Edit Language: <span class="text-success">:name</span>',
        'index' => 'Languages',
        'list' => 'All languages',
    ],

    'legend' => [
        'code' => 'Country code',
    ],

    'button' => [
        'create' => 'Add new language',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . '<strong>:name</strong> was successfully created.',
        'default' => config('constants.icons.info') . 'The default language can not be deleted.',
        'deleted' => config('constants.icons.success') . '<strong>:name</strong> was successfully deleted.',
        'notFound' => config('constants.icons.info') . 'Languages were not found.',
        'updated' => config('constants.icons.success') . '<strong>:name</strong> was successfully updated.',
    ],

    'modal' => [
        'delete' => 'Are you sure you want to delete the :name language?',
    ],

];
