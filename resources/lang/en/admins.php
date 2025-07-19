<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admins Section Language Lines
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Add New Administrator',
        'edit' => 'Edit Administrator: <span class="text-success">:name</span>',
        'index' => 'Administrators',
        'list' => 'All administrators',
    ],

    'legend' => [
        'name' => 'Name',
    ],

    'button' => [
        'create' => 'Add new administrator',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . 'Administrator <strong>:name</strong> was successfully created.',
        'deleted' => config('constants.icons.success') . 'Administrator <strong>:name</strong> was successfully deleted.',
        'notFound' => config('constants.icons.info') . 'Administrators were not found.',
        'updated' => config('constants.icons.success') . 'Administrator <strong>:name</strong> was successfully updated.',
    ],

    'modal' => [
        'delete' => 'Are you sure you want to delete the administrator with ID: :id?',
    ],

];
