<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class MenuTranslationSeeder extends Seeder
{
    public function run(): void
    {
        $lines = [
            'dashboard'    => [
                'en' => 'Dashboard',
                'ru' => 'Панель управления',
                'uk' => 'Панель керування',
            ],
            'categories'   => [
                'en' => 'Categories',
                'ru' => 'Категории',
                'uk' => 'Категорії',
            ],
            'category'     => [
                'en' => 'Category',
                'ru' => 'Категория',
                'uk' => 'Категорія',
            ],
            'contacts'     => [
                'en' => 'Contacts',
                'ru' => 'Контакты',
                'uk' => 'Контакти',
            ],
            'contact'      => [
                'en' => 'Contact',
                'ru' => 'Контакт',
                'uk' => 'Контакт',
            ],
            'news'         => [
                'en' => 'News',
                'ru' => 'Новости',
                'uk' => 'Новини',
            ],
            'news_single'  => [
                'en' => 'News Item',
                'ru' => 'Новость',
                'uk' => 'Новина',
            ],
            'pages'        => [
                'en' => 'Pages',
                'ru' => 'Страницы',
                'uk' => 'Сторінки',
            ],
            'vacancies'    => [
                'en' => 'Vacancies',
                'ru' => 'Вакансии',
                'uk' => 'Вакансії',
            ],
            'menu'         => [
                'en' => 'Menu',
                'ru' => 'Меню',
                'uk' => 'Меню',
            ],
            'feedback'         => [
                'en' => 'Feedback',
                'ru' => 'Обратная связь',
                'uk' => 'Зворотний зв’язок',
            ],
            'slides'         => [
                'en' => 'Slides',
                'ru' => 'Слайды',
                'uk' => 'Слайди',
            ],
            'services'      => [
                'en' => 'Services',
                'ru' => 'Услуги',
                'uk' => 'Послуги',
            ],
            'users'        => [
                'en' => 'Users',
                'ru' => 'Пользователи',
                'uk' => 'Користувачі',
            ],
            'roles'        => [
                'en' => 'Roles',
                'ru' => 'Роли',
                'uk' => 'Ролі',
            ],
            'permissions'  => [
                'en' => 'Permissions',
                'ru' => 'Права доступа',
                'uk' => 'Права доступу',
            ],
            'general'      => [
                'en' => 'General',
                'ru' => 'Общие',
                'uk' => 'Загальні',
            ],
            'languages'    => [
                'en' => 'Languages',
                'ru' => 'Языки',
                'uk' => 'Мови',
            ],
            'meta_tags'    => [
                'en' => 'Meta Tags',
                'ru' => 'Мета-теги',
                'uk' => 'Мета-теґи',
            ],
            'social_media' => [
                'en' => 'Social Media',
                'ru' => 'Социальные сети',
                'uk' => 'Соціальні мережі',
            ],
            'settings'     => [
                'en' => 'Settings',
                'ru' => 'Настройки',
                'uk' => 'Налаштування',
            ]
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'menu', 'key' => $key],
                ['text' => $translations]
            );
        }

        $lines = [
            'slug_helper' => [
                'en' => 'If this field is left blank the system will automatically generate a string from the default language.',
                'ru' => 'Если это поле оставить пустым, система автоматически сгенерирует строку из языка по умолчанию.',
                'uk' => 'Якщо це поле залишити порожнім, система автоматично згенерує рядок з мови за замовчуванням.',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'general', 'key' => $key],
                ['text' => $translations]
            );
        }

        $lines = [
            'id'            => [
                'en' => 'ID',
                'ru' => 'ID',
                'uk' => 'ID',
            ],
            'address_name'  => [
                'en' => 'Address & Name',
                'ru' => 'Адрес и имя',
                'uk' => 'Адреса та Ім’я',
            ],
            'telephone_fax' => [
                'en' => 'Telephone & Fax',
                'ru' => 'Телефон и факс',
                'uk' => 'Телефон і факс',
            ],
            'email'         => [
                'en' => 'Email',
                'ru' => 'Эл. почта',
                'uk' => 'Електронна пошта',
            ],
            'position'      => [
                'en' => 'Sort Order',
                'ru' => 'Порядок сортировки',
                'uk' => 'Порядок сортування',
            ],
            'active'        => [
                'en' => 'Active',
                'ru' => 'Активен',
                'uk' => 'Активний',
            ],
            'edit_title'    => [
                'en' => 'Edit Contact',
                'ru' => 'Редактировать контакт',
                'uk' => 'Редагувати контакт',
            ],
            'create_title'  => [
                'en' => 'Create Contact',
                'ru' => 'Создать контакт',
                'uk' => 'Створити контакт',
            ],
            'name'          => [
                'en' => 'Name',
                'ru' => 'Имя',
                'uk' => 'Ім’я',
            ],
            'address'       => [
                'en' => 'Address',
                'ru' => 'Адрес',
                'uk' => 'Адреса',
            ],
            'telephone'     => [
                'en' => 'Telephone',
                'ru' => 'Телефон',
                'uk' => 'Телефон',
            ],
            'fax'           => [
                'en' => 'Fax',
                'ru' => 'Факс',
                'uk' => 'Факс',
            ],
            'phone_helper'  => [
                'en' => 'Enter the main phone number',
                'ru' => 'Введите основной номер телефона',
                'uk' => 'Введіть основний номер телефону',
            ],
            'fax_helper'    => [
                'en' => 'Optional: add a fax number',
                'ru' => 'Необязательно: добавьте номер факса',
                'uk' => 'Необов’язково: додайте номер факсу',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'contact', 'key' => $key],
                ['text' => $translations]
            );
        }
        $lines = [
            'id'           => [
                'en' => 'ID',
                'ru' => 'ID',
                'uk' => 'ID',
            ],
            'title'        => [
                'en' => 'Name',
                'ru' => 'Имя',
                'uk' => 'Назва',
            ],
            'edit_title'   => [
                'en' => 'Edit Category',
                'ru' => 'Редактировать категорию',
                'uk' => 'Редагувати категорію',
            ],
            'create_title' => [
                'en' => 'Create Category',
                'ru' => 'Создать категорию',
                'uk' => 'Створити категорію',
            ],
            'slug'         => [
                'en' => 'Slug',
                'ru' => 'Слаг',
                'uk' => 'Слаг',
            ],
            'title_slug'   => [
                'en' => 'Name & Slug',
                'ru' => 'Имя и слаг',
                'uk' => 'Назва і слаг',
            ],
            'position'     => [
                'en' => 'Sort Order',
                'ru' => 'Порядок сортировки',
                'uk' => 'Порядок сортування',
            ],
            'parent'       => [
                'en' => 'Parent category',
                'ru' => 'Родительская категория',
                'uk' => 'Батьківська категорія',
            ],
            'root'         => [
                'en' => 'Root',
                'ru' => 'Корень',
                'uk' => 'Корінь',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'category', 'key' => $key],
                ['text' => $translations]
            );
        }

        $lines = [
            'id'           => [
                'en' => 'ID',
                'ru' => 'ID',
                'uk' => 'ID',
            ],
            'title'        => [
                'en' => 'Title',
                'ru' => 'Заголовок',
                'uk' => 'Заголовок',
            ],
            'slug'         => [
                'en' => 'Slug',
                'ru' => 'Слаг',
                'uk' => 'Слаг',
            ],
            'excerpt'      => [
                'en' => 'Excerpt',
                'ru' => 'Анонс',
                'uk' => 'Анонс',
            ],
            'content'      => [
                'en' => 'Content',
                'ru' => 'Контент',
                'uk' => 'Контент',
            ],
            'edit_title'   => [
                'en' => 'Edit News',
                'ru' => 'Редактировать новость',
                'uk' => 'Редагувати новину',
            ],
            'create_title' => [
                'en' => 'Create News',
                'ru' => 'Создать новость',
                'uk' => 'Створити новину',
            ],
            'published_at' => [
                'en' => 'Published At',
                'ru' => 'Дата публикации',
                'uk' => 'Дата публікації',
            ],
            'thumbnail'    => [
                'en' => 'Thumbnail',
                'ru' => 'Превью',
                'uk' => 'Мініатюра',
            ],
            'title_slug'   => [
                'en' => 'Title & Slug',
                'ru' => 'Заголовок и слаг',
                'uk' => 'Заголовок і слаг',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'news', 'key' => $key],
                ['text' => $translations]
            );
        }

        $lines = [
            'id'           => [
                'en' => 'ID',
                'ru' => 'ID',
                'uk' => 'ID',
            ],
            'title'        => [
                'en' => 'Title',
                'ru' => 'Заголовок',
                'uk' => 'Заголовок',
            ],
            'slug'         => [
                'en' => 'Slug',
                'ru' => 'Слаг',
                'uk' => 'Слаг',
            ],
            'title_slug'   => [
                'en' => 'Title & Slug',
                'ru' => 'Заголовок и слаг',
                'uk' => 'Заголовок і слаг',
            ],
            'category'     => [
                'en' => 'Category',
                'ru' => 'Категория',
                'uk' => 'Категорія',
            ],
            'position'     => [
                'en' => 'Sort Order',
                'ru' => 'Порядок сортировки',
                'uk' => 'Порядок сортування',
            ],
            'excerpt'      => [
                'en' => 'Excerpt',
                'ru' => 'Анонс',
                'uk' => 'Анонс',
            ],
            'content'      => [
                'en' => 'Content',
                'ru' => 'Контент',
                'uk' => 'Контент',
            ],
            'published_at' => [
                'en' => 'Published At',
                'ru' => 'Дата публикации',
                'uk' => 'Дата публікації',
            ],
            'edit_title'   => [
                'en' => 'Edit Page',
                'ru' => 'Редактировать страницу',
                'uk' => 'Редагувати сторінку',
            ],
            'create_title' => [
                'en' => 'Create Page',
                'ru' => 'Создать страницу',
                'uk' => 'Створити сторінку',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'page', 'key' => $key],
                ['text' => $translations]
            );
        }

        $lines = [
            'id'           => [
                'en' => 'ID',
                'ru' => 'ID',
                'uk' => 'ID',
            ],
            'title'        => [
                'en' => 'Title',
                'ru' => 'Заголовок',
                'uk' => 'Заголовок',
            ],
            'slug'         => [
                'en' => 'Slug',
                'ru' => 'Слаг',
                'uk' => 'Слаг',
            ],
            'excerpt'      => [
                'en' => 'Excerpt',
                'ru' => 'Анонс',
                'uk' => 'Анонс',
            ],
            'content'      => [
                'en' => 'Content',
                'ru' => 'Контент',
                'uk' => 'Контент',
            ],
            'published_at' => [
                'en' => 'Published At',
                'ru' => 'Дата публикации',
                'uk' => 'Дата публікації',
            ],
            'position'     => [
                'en' => 'Sort Order',
                'ru' => 'Порядок сортировки',
                'uk' => 'Порядок сортування',
            ],
            'title_slug'   => [
                'en' => 'Title & Slug',
                'ru' => 'Заголовок и слаг',
                'uk' => 'Заголовок і слаг',
            ],

            'edit_title'   => [
                'en' => 'Edit Vacancy',
                'ru' => 'Редактировать вакансию',
                'uk' => 'Редагувати вакансію',
            ],
            'create_title' => [
                'en' => 'Create Vacancy',
                'ru' => 'Создать вакансию',
                'uk' => 'Створити вакансію',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'vacancy', 'key' => $key],
                ['text' => $translations]
            );
        }

        $lines = [
            'name'         => [
                'en' => 'Name',
                'ru' => 'Название',
                'uk' => 'Назва',
            ],
            'code'         => [
                'en' => 'Code',
                'ru' => 'Код',
                'uk' => 'Код',
            ],
            'created_at'   => [
                'en' => 'Created At',
                'ru' => 'Создано',
                'uk' => 'Створено',
            ],
            'updated_at'   => [
                'en' => 'Updated At',
                'ru' => 'Обновлено',
                'uk' => 'Оновлено',
            ],
            'deleted_at'   => [
                'en' => 'Deleted At',
                'ru' => 'Удалено',
                'uk' => 'Видалено',
            ],
            'edit_title'   => [
                'en' => 'Edit Language',
                'ru' => 'Редактировать язык',
                'uk' => 'Редагувати мову',
            ],
            'create_title' => [
                'en' => 'Create Language',
                'ru' => 'Создать язык',
                'uk' => 'Створити мову',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'language', 'key' => $key],
                ['text' => $translations]
            );
        }

        $lines = [
            'id'               => [
                'en' => 'ID',
                'ru' => 'ID',
                'uk' => 'ID',
            ],
            'path'             => [
                'en' => 'Page path',
                'ru' => 'Путь страницы',
                'uk' => 'Шлях сторінки',
            ],
            'title'            => [
                'en' => 'Title',
                'ru' => 'Заголовок',
                'uk' => 'Заголовок',
            ],
            'description'      => [
                'en' => 'Description',
                'ru' => 'Описание',
                'uk' => 'Опис',
            ],
            'keywords'         => [
                'en' => 'Keywords',
                'ru' => 'Ключевые слова',
                'uk' => 'Ключові слова',
            ],
            'title_html'       => [
                'en' => '< Title >',
                'ru' => '< Заголовок >',
                'uk' => '< Заголовок >',
            ],
            'description_html' => [
                'en' => '< Description >',
                'ru' => '< Описание >',
                'uk' => '< Опис >',
            ],

            'edit_title'   => [
                'en' => 'Edit Meta Tag',
                'ru' => 'Редактировать мета-тег',
                'uk' => 'Редагувати мета-теґ',
            ],
            'create_title' => [
                'en' => 'Create Meta Tag',
                'ru' => 'Создать мета-тег',
                'uk' => 'Створити мета-теґ',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'meta_tag', 'key' => $key],
                ['text' => $translations]
            );
        }

        $lines = [
            'title'      => [
                'en' => 'Title',
                'ru' => 'Название',
                'uk' => 'Назва',
            ],
            'link'       => [
                'en' => 'Link',
                'ru' => 'Ссылка',
                'uk' => 'Посилання',
            ],
            'type'       => [
                'en' => 'Type',
                'ru' => 'Тип',
                'uk' => 'Тип',
            ],
            'active'       => [
                'en' => 'Active',
                'ru' => 'Активен',
                'uk' => 'Активний',
            ],
            'type_helper_text' => [
                'en' => 'Select the type of social media',
                'ru' => 'Выберите тип социальной сети',
                'uk' => 'Виберіть тип соціальної мережі',
            ],
            'created_at' => [
                'en' => 'Created Date',
                'ru' => 'Дата создания',
                'uk' => 'Дата створення',
            ],
            'updated_at' => [
                'en' => 'Last Modified Date',
                'ru' => 'Дата изменения',
                'uk' => 'Дата змінення',
            ],

            'edit_title'   => [
                'en' => 'Edit Social Media',
                'ru' => 'Редактировать социальную сеть',
                'uk' => 'Редагувати соціальну мережу',
            ],
            'create_title' => [
                'en' => 'Create Social Media',
                'ru' => 'Создать социальную сеть',
                'uk' => 'Створити соціальну мережу',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'social', 'key' => $key],
                ['text' => $translations]
            );
        }

        $lines = [
            'title'         => [
                'en' => 'Title',
                'ru' => 'Заголовок',
                'uk' => 'Заголовок',
            ],
            'slug'          => [
                'en' => 'Slug',
                'ru' => 'Слаг',
                'uk' => 'Слаг',
            ],
            'excerpt'       => [
                'en' => 'Excerpt',
                'ru' => 'Анонс',
                'uk' => 'Анонс',
            ],
            'description'   => [
                'en' => 'Description',
                'ru' => 'Описание',
                'uk' => 'Опис',
            ],
            'view_template' => [
                'en' => 'View Template',
                'ru' => 'Шаблон',
                'uk' => 'Шаблон',
            ],
            'sort_order'    => [
                'en' => 'Sort Order',
                'ru' => 'Порядок',
                'uk' => 'Сортування',
            ],
            'created_at'    => [
                'en' => 'Created Date',
                'ru' => 'Дата создания',
                'uk' => 'Дата створення',
            ],
            'updated_at'    => [
                'en' => 'Last Modified Date',
                'ru' => 'Дата изменения',
                'uk' => 'Дата змінення',
            ],
            'service_name'  => [
                'en' => 'Title & Slug',
                'ru' => 'Заголовок и слаг',
                'uk' => 'Заголовок і слаг',
            ],
            'edit_title'    => [
                'en' => 'Edit Service',
                'ru' => 'Редактировать услугу',
                'uk' => 'Редагувати послугу',
            ],
            'create_title'  => [
                'en' => 'Create Service',
                'ru' => 'Создать услугу',
                'uk' => 'Створити послугу',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'service', 'key' => $key],
                ['text' => $translations]
            );
        }

        $lines = [
            'title'        => [
                'en' => 'Title',
                'ru' => 'Заголовок',
                'uk' => 'Заголовок',
            ],
            'video_path'   => [
                'en' => 'Video Path',
                'ru' => 'Путь к видео',
                'uk' => 'Шлях до відео',
            ],
            'color'        => [
                'en' => 'Color',
                'ru' => 'Цвет',
                'uk' => 'Колір',
            ],
            'sort_order'   => [
                'en' => 'Sort Order',
                'ru' => 'Порядок',
                'uk' => 'Сортування',
            ],
            'created_at'   => [
                'en' => 'Created Date',
                'ru' => 'Дата создания',
                'uk' => 'Дата створення',
            ],
            'updated_at'   => [
                'en' => 'Last Modified Date',
                'ru' => 'Дата изменения',
                'uk' => 'Дата змінення',
            ],
            'edit_title'   => [
                'en' => 'Edit Slide',
                'ru' => 'Редактировать слайд',
                'uk' => 'Редагувати слайд',
            ],
            'create_title' => [
                'en' => 'Create Slide',
                'ru' => 'Создать слайд',
                'uk' => 'Створити слайд',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'slide', 'key' => $key],
                ['text' => $translations]
            );
        }

        $lines = [
            'name' => [
                'en' => 'Name',
                'ru' => 'Имя',
                'uk' => 'Ім’я',
            ],
            'phone' => [
                'en' => 'Phone',
                'ru' => 'Телефон',
                'uk' => 'Телефон',
            ],
            'message' => [
                'en' => 'Message',
                'ru' => 'Сообщение',
                'uk' => 'Повідомлення',
            ],
            'was_read' => [
                'en' => 'Read',
                'ru' => 'Прочитано',
                'uk' => 'Прочитано',
            ],
        ];

        foreach ($lines as $key => $translations) {
            LanguageLine::updateOrCreate(
                ['group' => 'feedback', 'key' => $key],
                ['text' => $translations]
            );
        }
    }
}

