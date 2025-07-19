<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Global Language Lines
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'attachmentUploading' => 'Attachment uploading',
        'avatarCropping' => 'Avatar image cropping',
        'dashboard' => 'Dashboard',
        'galleryCropping' => 'Gallery image cropping',
        'presentationUploading' => 'Presentation uploading',
        'summary' => 'Summary',
        'thumbnailCropping' => 'Thumbnail cropping',
        'warning' => 'Warning!',
        'welcome' => 'Welcome! Sign in to access the admin panel.',
    ],

    'legend' => [
        'actions' => 'Actions',
        'active' => 'Active',
        'address' => 'Address',
        'addressWithLanguage' => 'Address (:language)',
        'attachment' => 'Attachment',
        'attachments' => 'Attachments',
        'avatar' => 'Avatar',
        'category' => 'Category',
        'content' => 'Content',
        'contentWithLanguage' => 'Content (:language)',
        'createdAt' => 'Created at',
        'default' => 'Default',
        'email' => 'Email',
        'excerpt' => 'Excerpt',
        'excerptWithLanguage' => 'Excerpt (:language)',
        'fax' => 'Fax',
        'fileToUpload' => 'File to upload',
        'fileName' => 'File name',
        'gallery' => 'Gallery',
        'galleryPhoto' => 'Gallery photo',
        'id' => 'ID',
        'message' => 'Message',
        'name' => 'Name',
        'nameWithLanguage' => 'Name (:language)',
        'no' => 'No',
        'parent' => 'Parent',
        'password' => 'Password',
        'passwordConfirmation' => 'Password confirmation',
        'passwordChange' => 'Change an existing password',
        'phone' => 'Telephone',
        'position' => 'Position',
        'presentation' => 'Presentation',
        'publishedAt' => 'Published at',
        'remember' => 'Remember me',
        'root' => 'Root',
        'slug' => 'Slug',
        'source' => 'Source',
        'thumbnail' => 'Thumbnail',
        'uploadedFile' => 'Uploaded file',
        'yes' => 'Yes',
    ],

    'button' => [
        'back' => 'Back',
        'cancel' => 'Cancel',
        'confirm' => 'Yes',
        'close' => 'Close',
        'create' => 'Submit',
        'delete' => 'Delete',
        'edit' => 'Edit',
        'login' => 'Login',
        'logout' => 'Logout',
        'ok' => 'OK',
        'save' => 'Save changes',
        'settings' => 'Settings',
        'upload' => 'Upload file',
        'view' => 'View',
    ],

    'alert' => [
        'formErrors' => config('constants.icons.error') . 'Please fix the following input errors:',
        'notPermitted' => config('constants.icons.info') . 'You have no permissions to perform this action.',
    ],

    'tip' => [
        'attachment' => '<span class="text-warning">' . config('constants.icons.error') . 'Note that the new file will replace the existing one and you will not be able to restore the previous.</span>',
        'attachments' => '<span class="text-warning">' . config('constants.icons.error') . 'Note that once the &laquo;X&raquo; button pressed the file will be instantly deleted and you will not be able to restore it.</span>',
        'avatar' => '<span class="text-warning">' . config('constants.icons.error') . 'Note that the new image will replace the existing one and you will not be able to restore the previous.</span>',
        'excerpt' => 'A short introduction text.',
        'fileName' => 'The brand new name for the uploaded file (without extension).',
        'slug' => 'If this field is left blank the system will automatically generate a string from the default language.',
        'thumbnail' => '<span class="text-warning">' . config('constants.icons.error') . 'Note that the new image will replace the existing one and you will not be able to restore the previous.</span>',
        'gallery' => '<span class="text-warning">' . config('constants.icons.error') . 'Note that once the &laquo;X&raquo; button pressed the image will be instantly deleted and you will not be able to restore it.</span>',
    ],

    'error' => [
        'fileNotFound' => config('constants.icons.error') . 'File not found.',
        'slug' => 'You must specify a Name (' . config('settings.activeLanguages')[config('settings.default_language')]->name . ') to create slug automatically or specify a custom slug manually.',
        'translation' => '<span class="text-danger">' . config('constants.icons.error') . 'Undefined :attribute for :language language.</span>',
        'uploading' => 'Something went wrong while uploading the file.',
        '403' => [
            'caption' => 'Forbidden error',
            'message' => 'Sorry, you don\'t have permission to access on this server.',
            'button' => 'Go to dashboard',
        ],
        '404' => [
            'caption' => 'Page not found',
            'message' => 'Sorry, but the page you were trying to view does not exist.',
            'button' => 'Go to dashboard',
        ],
        '405' => [
            'caption' => 'Method not allowed',
            'message' => 'Sorry, but a request method is not supported for the requested resource.',
            'button' => 'Go to dashboard',
        ],
        '500' => [
            'caption' => 'Internal server error',
            'message' => 'Sorry something went wrong. Don\'t worry, we will fix it soon.',
            'button' => 'Go to dashboard',
        ],
    ],

    'and' => '&amp;',

];
