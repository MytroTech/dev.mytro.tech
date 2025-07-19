<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Общие текстовые строки
    |--------------------------------------------------------------------------
    */

    'caption' => [
        'attachmentUploading' => 'Загрузка вложения',
        'avatarCropping' => 'Обрезка аватара',
        'dashboard' => 'Главная',
        'galleryCropping' => 'Обрезка изображения галереи',
        'presentationUploading' => 'Загрузка презентации',
        'summary' => 'Сводка',
        'thumbnailCropping' => 'Обрезка миниатюры',
        'warning' => 'Внимание!',
        'welcome' => 'Добро пожаловать! Войдите в панель управления.',
    ],

    'legend' => [
        'actions' => 'Действия',
        'active' => 'Активность',
        'address' => 'Адрес',
        'addressWithLanguage' => 'Адрес (:language)',
        'avatar' => 'Аватар',
        'attachment' => 'Вложение',
        'attachments' => 'Вложения',
        'category' => 'Категория',
        'content' => 'Содержимое',
        'contentWithLanguage' => 'Содержимое (:language)',
        'createdAt' => 'Дата создания',
        'default' => 'По умолчанию',
        'email' => 'Email',
        'excerpt' => 'Краткое содержание',
        'excerptWithLanguage' => 'Краткое содержание (:language)',
        'fax' => 'Факс',
        'fileToUpload' => 'Файл для загрузки',
        'fileName' => 'Имя файла',
        'gallery' => 'Галерея',
        'galleryPhoto' => 'Изображение галереи',
        'id' => 'ID',
        'message' => 'Сообщение',
        'name' => 'Название',
        'nameWithLanguage' => 'Название (:language)',
        'no' => 'Нет',
        'parent' => 'Родитель',
        'password' => 'Пароль',
        'passwordConfirmation' => 'Подтверждение пароля',
        'passwordChange' => 'Изменить существующий пароль',
        'phone' => 'Телефон',
        'position' => 'Позиция',
        'presentation' => 'Презентация',
        'publishedAt' => 'Дата публикации',
        'remember' => 'Запомнить меня',
        'root' => 'Корневая',
        'slug' => 'Slug',
        'source' => 'Источник',
        'thumbnail' => 'Миниатюра',
        'uploadedFile' => 'Загружаемый файл',
        'yes' => 'Да',
    ],

    'button' => [
        'back' => 'Назад',
        'cancel' => 'Отмена',
        'confirm' => 'Да',
        'close' => 'Закрыть',
        'create' => 'Создать',
        'delete' => 'Удалить',
        'edit' => 'Изменить',
        'login' => 'Войти',
        'logout' => 'Выход',
        'ok' => 'ОК',
        'save' => 'Сохранить изменения',
        'settings' => 'Настройки',
        'upload' => 'Загрузить файл',
        'view' => 'Просмотр',
    ],

    'alert' => [
        'formErrors' => config('constants.icons.error') . 'Пожалуйста, исправьте следующие ошибки:',
        'notPermitted' => config('constants.icons.info') . 'У вас недостаточно прав для выполнения данного действия.',
    ],

    'tip' => [
        'attachment' => '<span class="text-warning">' . config('constants.icons.error') . 'Обратите внимание, что новое изображение заменит текущее. Восстановить старое изображение будет невозможно.</span>',
        'attachments' => '<span class="text-warning">' . config('constants.icons.error') . 'Обратите внимание, что сразу после нажатия кнопки &laquo;X&raquo; файл будет мгновенно удалён без возможности восстановления.</span>',
        'avatar' => '<span class="text-warning">' . config('constants.icons.error') . 'Обратите внимание, что новое изображение заменит текущее. Восстановить старое изображение будет невозможно.</span>',
        'excerpt' => 'Краткий вводный текст.',
        'fileName' => 'Новое имя для загружаемого файла (без расширения).',
        'slug' => 'Если оставить это поле пустым, система автоматически сгенерирует Slug используя значение из поля Название для языка по умолчанию.',
        'thumbnail' => '<span class="text-warning">' . config('constants.icons.error') . 'Обратите внимание, что новое изображение заменит текущее. Восстановить старое изображение будет невозможно.</span>',
        'gallery' => '<span class="text-warning">' . config('constants.icons.error') . 'Обратите внимание, что сразу после нажатия кнопки &laquo;X&raquo; изображение будет мгновенно удалено без возможности восстановления.</span>',
    ],

    'error' => [
        'fileNotFound' => config('constants.icons.error') . 'Файл не найден.',
        'slug' => 'Необходимо указать Название (' . config('settings.activeLanguages')[config('settings.default_language')]->name . '), чтобы создать Slug автоматически или ввести предпочитаемое значение вручную.',
        'translation' => '<span class="text-danger">' . config('constants.icons.error') . ':attribute не задано для языка: :language.</span>',
        'uploading' => 'При загрузке файла возникла ошибка.',
        '403' => [
            'caption' => 'Доступ запрещён',
            'message' => 'К сожалению, у вас недостаточно прав для доступа к этой странице.',
            'button' => 'Вернуться к панели управления',
        ],
        '404' => [
            'caption' => 'Страница не найдена',
            'message' => 'К сожалению, запрошенной страницы не существует.',
            'button' => 'Вернуться к панели управления',
        ],
        '405' => [
            'caption' => 'Метод не поддерживается',
            'message' => 'К сожалению, указанный метод нельзя применить к текущему ресурсу.',
            'button' => 'Вернуться к панели управления',
        ],
        '500' => [
            'caption' => 'Внутренняя ошибка сервера',
            'message' => 'Возникла непредвиденная ошибка. Не беспокойтесь, скоро она будет исправлена.',
            'button' => 'Вернуться к панели управления',
        ],
    ],

    'and' => 'и',

];
