<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Contacts Section Language Lines
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'create' => 'Add New Contact',
        'edit' => 'Edit Contact: <span class="text-success">:name</span>',
        'index' => 'Contacts',
        'list' => 'All contacts',
    ],

    'legend' => [
    ],

    'button' => [
        'create' => 'Add new contact',
    ],

    'alert' => [
        'created' => config('constants.icons.success') . '<strong>:name</strong> contact was successfully created.',
        'deleted' => config('constants.icons.success') . '<strong>:name</strong> contact was successfully deleted.',
        'notFound' => config('constants.icons.info') . 'Contacts were not found.',
        'updated' => config('constants.icons.success') . '<strong>:name</strong> contact was successfully updated.',
    ],

    'tip' => [
        'fax' => 'Separate different facsimile numbers with pipe sign: +38 048 123 45 67 | +38 048 123 45 67',
        'phone' => 'Separate different phone numbers with pipe sign: +38 048 123 45 67 | +38 048 123 45 67',
    ],

    'modal' => [
        'delete' => 'Are you sure you want to delete the contact with ID: :id?',
    ],

];
