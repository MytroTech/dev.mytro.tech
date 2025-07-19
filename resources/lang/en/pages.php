<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pages Section Language Lines
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Add New Page',
        'edit' => 'Edit Page: <span class="text-success">:name</span>',
        'index' => 'Pages',
        'list' => 'All pages',
    ],

    'legend' => [
        'category' => 'Category',
        'root' => 'No category',
    ],

    'button' => [
        'create' => 'Add new page',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . '<strong>:name</strong> page was successfully created.',
        'deleted' => config('constants.icons.success') . '<strong>:name</strong> page was successfully deleted.',
        'notFound' => config('constants.icons.info') . 'Pages were not found.',
        'updated' => config('constants.icons.success') . '<strong>:name</strong> page was successfully updated.',
    ],

    'modal' => [
        'delete' => 'Are you sure you want to delete the page with ID: :id?',
    ],

];
