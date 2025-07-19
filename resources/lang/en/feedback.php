<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Feedback Section Language Lines
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'feedback' => 'Feedback',
        'index' => 'Feedback Requests',
        'list' => 'All requests',
        'show' => 'Feedback Request: <span class="text-success">:name</span>',
    ],

    'legend' => [
    ],

    'button' => [
        'new' => 'New Feedback Requests',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . '<strong>:name</strong> feedback request was successfully created.',
        'deleted' => config('constants.icons.success') . '<strong>:name</strong> feedback request was successfully deleted.',
        'notFound' => config('constants.icons.info') . 'Feedback requests were not found.',
        'wasRead' => config('constants.icons.success') . 'This request was successfully marked as read.',
    ],

    'modal' => [
        'delete' => 'Are you sure you want to delete the feedback request with ID: :id?',
    ],

];
