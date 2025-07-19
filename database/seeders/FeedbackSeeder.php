<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    public function run(): void
    {
        $feedbacks = DB::connection('legacy') // если другая база
        ->table('feedback')
            ->get();

        foreach ($feedbacks as $feedback) {
            DB::table('feedback')->insert([
                'id' => $feedback->id,
                'name' => $feedback->name,
                'phone' => $feedback->phone,
                'message' => $feedback->message,
                'was_read' => (bool) $feedback->was_read,
                'created_at' => $feedback->created_at ?? now(),
                'updated_at' => $feedback->updated_at ?? now(),
                'deleted_at' => $feedback->deleted_at,
            ]);
        }
    }
}
