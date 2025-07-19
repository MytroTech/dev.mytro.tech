<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Random\RandomException;

class ServiceSeeder extends Seeder
{
    /**
     * @throws RandomException
     */
    public function run(): void
    {


        $services = [
            [
                'slug' => 'handling-and-storage',
                'title' => [
                    'en' => 'Handling & Storage',
                    'uk' => 'Обробка та зберігання',
                    'ru' => 'Обработка и хранение',
                ],
                'excerpt' => [
                    'en' => 'Efficient logistics handling and warehouse storage.',
                    'uk' => 'Ефективна логістика та складське зберігання.',
                    'ru' => 'Эффективная логистика и складское хранение.',
                ],
                'svg_icon' => 'h-and-s',
                'css_class' => 'h_and_s_ill',
                'align' => 'left',
                'sort_order' => 1,
            ],
            [
                'slug' => 'bulk-cargo-transshipment',
                'title' => [
                    'en' => 'Bulk Cargo Transshipment',
                    'uk' => 'Перевантаження насипних вантажів',
                    'ru' => 'Перевалка навалочных грузов',
                ],
                'excerpt' => [
                    'en' => 'Reliable transshipment of bulk materials at scale.',
                    'uk' => 'Надійне перевантаження сипучих матеріалів.',
                    'ru' => 'Надежная перевалка сыпучих материалов.',
                ],
                'svg_icon' => 'cargo_transhipment',
                'css_class' => 'b_cargo_t_ill lw',
                'align' => 'right',
                'sort_order' => 2,
            ],
            [
                'slug' => 'flexitanks',
                'title' => [
                    'en' => 'Flexitanks',
                    'uk' => 'Флексітанки',
                    'ru' => 'Флекситанки',
                ],
                'excerpt' => [
                    'en' => 'Safe liquid transport using flexitanks.',
                    'uk' => 'Безпечне транспортування рідин у флексітанках.',
                    'ru' => 'Безопасная транспортировка жидкостей во флекситанках.',
                ],
                'svg_icon' => 'fles',
                'css_class' => 'fles_ill',
                'align' => 'left',
                'sort_order' => 3,
            ],
            [
                'slug' => 'quality',
                'title' => [
                    'en' => 'Laboratory & Quality',
                    'uk' => 'Лабораторія та якість',
                    'ru' => 'Лаборатория и качество',
                ],
                'excerpt' => [
                    'en' => 'Advanced lab testing for product quality.',
                    'uk' => 'Сучасне лабораторне тестування якості.',
                    'ru' => 'Современное лабораторное тестирование качества.',
                ],
                'svg_icon' => 'laboratory',
                'css_class' => 'laboratory_ill tal',
                'align' => 'right',
                'sort_order' => 4,
            ],
        ];

        foreach ($services as $data) {
            $gallery = collect(range(1, random_int(2, 5)))->map(function () {
                return 'https://source.unsplash.com/640x480/?nature,water&' . mt_rand();
            })->toArray();
            $data['gallery'] = $gallery;
            Service::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
