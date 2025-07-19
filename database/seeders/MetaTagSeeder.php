<?php

namespace Database\Seeders;

use App\Models\MetaTag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MetaTagSeeder extends Seeder
{
    public function run(): void
    {
        MetaTag::updateOrCreate(
            ['path' => '*'],
            [
                'title' => [
                    'en' => 'Olir Resources',
                    'ru' => 'Olir Ресурсы',
                    'uk' => 'Olir Ресурси',
                ],
                'description' => [
                    'en' => 'Olir Resources is one of the leading liquid terminals in Ukraine. The terminal is the main link in the oil supply chain between exporters and consumers in foreign markets.',
                    'ru' => 'Olir Resources — один из ведущих наливных терминалов в Украине. Основное звено цепи поставок между экспортёрами и покупателями за рубежом.',
                    'uk' => 'Olir Resources — один із провідних наливних терміналів в Україні. Основна ланка ланцюга постачання між експортерами та іноземними споживачами.',
                ],
                'keywords' => [
                    'en' => 'Olir Resources, oil terminal Ukraine, liquid terminal Chernomorsk, vegetable oil export',
                    'ru' => 'Olir Resources, наливной терминал Украина, терминал в Черноморске, экспорт растительного масла',
                    'uk' => 'Olir Resources, наливний термінал Україна, термінал у Чорноморську, експорт рослинної олії',
                ],
                'created_by'    => User::query()->first()->id,
                'updated_by'    => User::query()->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    }}
