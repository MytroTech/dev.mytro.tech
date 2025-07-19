<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * @throws \JsonException
     */
    public function run(): void
    {
        // Берем старые записи новостей
        $legacyNews = DB::connection('legacy')->table('news')->get();

        // Берем все переводы по новостям
        $translations = DB::connection('legacy')
            ->table('news_translations')
            ->whereIn('news_id', $legacyNews->pluck('id'))
            ->whereIn('attribute', ['name', 'excerpt', 'content'])
            ->get()
            ->groupBy(['news_id', 'attribute']);

        $rows = [];

        foreach ($legacyNews as $item) {
            $titleLangs = [];
            $excerptLangs = [];
            $contentLangs = [];

            foreach (['name' => &$titleLangs, 'excerpt' => &$excerptLangs, 'content' => &$contentLangs] as $attr => &$target) {
                if (isset($translations[$item->id][$attr])) {
                    foreach ($translations[$item->id][$attr] as $translation) {
                        $lang = $this->mapLanguageIdToCode($translation->language_id);
                        if ($lang) {
                            $target[$lang] = $translation->value;
                        }
                    }
                }
            }

            $rows[] = [
                'id'           => $item->id,
                'title'        => json_encode($titleLangs, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE),
                'slug'         => $item->slug,
                'thumbnail'    => $item->thumbnail,
                'excerpt'      => json_encode($excerptLangs, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE),
                'content'      => json_encode($contentLangs, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE),
                'created_by'   => $item->created_by ?? 1,
                'updated_by'   => $item->updated_by ?? 1,
                'published_at' => $item->published_at,
                'created_at'   => $item->created_at,
                'updated_at'   => $item->updated_at,
                'deleted_at'   => $item->deleted_at,
            ];
        }

        // Вставляем пачками
        foreach (array_chunk($rows, 300) as $chunk) {
            DB::table('news')->insert($chunk);
        }
    }

    private function mapLanguageIdToCode(int $id): ?string
    {
        return match ($id) {
            1 => 'en',
            2 => 'ru',
            3 => 'uk',
            default => null,
        };
    }
}
