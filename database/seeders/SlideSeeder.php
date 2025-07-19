<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    public function run(): void
    {
        $colors = ['#ef7b22', '#e95224', '#0a5993', '#1c95c0'];

        $slides = [
            1 => [
                'title' => [
                    'en' => '12.2 meters draft',
                    'uk' => 'Осадка 12,2 метра',
                    'ru' => 'Осадка 12,2 метра',
                ],
                'content' => [
                    'en' => 'Convenient terminal location, flexible scheduling',
                    'uk' => 'Зручне розташування терміналу, гнучке планування',
                    'ru' => 'Удобное расположение терминала, гибкое планирование',
                ],
            ],
            2 => [
                'title' => [
                    'en' => '1 mln mt per year –  <br>oil transshipment capacity',
                    'uk' => '1 млн тонн на рік – <br>потужність перевалки нафти',
                    'ru' => '1 млн тонн в год – <br>мощность перевалки нефти',
                ],
                'content' => [
                    'en' => 'Quality control for cholesterol, hexane, sediments',
                    'uk' => 'Контроль якості на&nbsp;холестерин, гексан, седименти',
                    'ru' => 'Контроль качества на&nbsp;холестерол, гексан, седименты',
                ],
            ],
            3 => [
                'title' => [
                    'en' => 'Bulk products transshipment',
                    'uk' => 'Перевалка навалювальних вантажів',
                    'ru' => 'Перевалка навалочных грузов',
                ],
                'content' => [
                    'en' => 'Cooperation with global market leaders',
                    'uk' => 'Співпраця з&nbsp;лідерами глобального ринку',
                    'ru' => 'Сотрудничество с&nbsp;лидерами глобального рынка',
                ],
            ],
            4 => [
                'title' => [
                    'en' => 'Top 3 <br>vegoil terminal in Ukraine',
                    'uk' => 'Топ-3 <br>термінал з перевалки рослинної олії в Україні',
                    'ru' => 'Топ-3 <br>терминал по перевалке растительного масла в Украине',
                ],
                'content' => [
                    'en' => 'Up to $8/mt logistics bonus at sea',
                    'uk' => 'Додаткова премія до&nbsp;$8/мт на&nbsp;морській логістиці',
                    'ru' => 'Дополнительная премия до&nbsp;$8/мт на&nbsp;морской логистике',
                ],
            ],
        ];

        foreach ($slides as $i => $slide) {
            Slide::create([
                'sort_order' => $i,
                'title' => $slide['title'],
                'content' => $slide['content'],
                'video_path' => "frontend/movies/slide{$i}.mp4",
                'color' => $colors[$i - 1],
                'is_active' => true,
            ]);
        }
    }
}
