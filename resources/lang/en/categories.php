<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Categories Section Language Lines
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Add New Category',
        'edit' => 'Edit Category: <span class="text-success">:name</span>',
        'index' => 'Categories',
        'list' => 'All categories',
    ],

    'legend' => [
        'parent' => 'Parent category',
        'root' => 'Root category',
    ],

    'button' => [
        'create' => 'Add new category',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . '<strong>:name</strong> category was successfully created.',
        'deleted' => config('constants.icons.success') . '<strong>:name</strong> category was successfully deleted.',
        'notFound' => config('constants.icons.info') . 'Categories were not found.',
        'updated' => config('constants.icons.success') . '<strong>:name</strong> category was successfully updated.',
    ],

    'modal' => [
        'delete' => 'Are you sure you want to delete the category with ID: :id?',
    ],

];
