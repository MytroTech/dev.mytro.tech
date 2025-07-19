<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PageSeeder extends Seeder
{
    /**
     * @throws \JsonException
     */
    public function run(): void
    {
        Page::updateOrCreate(
            ['slug' => 'about'],
            [
                'title'         => [
                    'en' => 'About Us',
                    'uk' => 'Про компанію',
                    'ru' => 'О компании',
                ],
                'excerpt'       => [
                    'en' => 'Learn more about our mission and values.',
                    'uk' => 'Дізнайтеся більше про нашу місію та цінності.',
                    'ru' => 'Узнайте больше о нашей миссии и ценностях.',
                ],
                'content'       => [
                    'uk' => 'Олір Резорсiз є одним з провідних наливних терміналів України. Термінал — головна ланка в ланцюжку поставок олії між експортерами та споживачами на зарубіжних ринках. Олір Резорсiз надає послуги з приймання, зберігання і відвантаження рослинних олій в експортному та імпортному напрямах в порту «Чорноморськ». Перевалка навальних  вантажів здійснюється через склад підлогового зберігання.',
                    'en' => 'Olir Resources is one of the leading liquid terminals in Ukraine. The terminal is the main link in the supply chain of oil between exporters and consumers in foreign markets. Olir Resources provides services for receiving, storing and shipping vegetable oils in export and import directions at the port of "Chornomorsk". Transshipment of bulk cargo is carried out through the floor storage warehouse.',
                    'ru' => 'Olir Resources является одним из ведущих наливных терминалов Украины. Терминал — главная звено в цепочке поставок масла между экспортерами и потребителями на зарубежных рынках. Olir Resources предоставляет услуги по приему, хранению и отгрузке растительных масел в экспортном и импортном направлениях в порту «Черноморск». Перевалка навальных грузов осуществляется через склад напольного хранения.',
                ],
                'svg_icon'      => 'about',
                'css_class'     => 'about_block',
                'view_template' => 'default',
                'position'      => 1,
                'is_active'     => true,
                'created_by'    => User::query()->first()->id,
                'updated_by'    => User::query()->first()->id,
                'published_at'  => Carbon::now(),
            ]
        );
    }
}
