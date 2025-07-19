<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Vacancies Section Language Lines
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Add New Vacancy',
        'edit' => 'Edit Vacancy: <span class="text-success">:name</span>',
        'index' => 'Vacancies',
        'list' => 'All vacancies',
    ],

    'legend' => [
    ],

    'button' => [
        'create' => 'Add new vacancy',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . '<strong>:name</strong> vacancy was successfully created.',
        'deleted' => config('constants.icons.success') . '<strong>:name</strong> vacancy was successfully deleted.',
        'notFound' => config('constants.icons.info') . 'Vacancies were not found.',
        'updated' => config('constants.icons.success') . '<strong>:name</strong> vacancy was successfully updated.',
    ],

    'modal' => [
        'delete' => 'Are you sure you want to delete the vacancy with ID: :id?',
    ],

];
