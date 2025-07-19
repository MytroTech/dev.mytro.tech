<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    public function run(): void
    {
        $contacts = DB::connection('legacy') // или просто ->table('contacts') если в одной базе
        ->table('contacts')
            ->get();

        foreach ($contacts as $contact) {
            DB::table('contacts')->insert([
                'title' => $contact->email ?: 'Contact ' . $contact->id,
                'address' => 'No address specified', // потому что в старой таблице не было адреса
                'phone' => $contact->phone,
                'fax' => $contact->fax,
                'email' => $contact->email,
                'position' => $contact->position ?? 0,
                'is_active' => (int)($contact->is_active ?? 1),
                'created_by' => $contact->created_by ?? 1,
                'updated_by' => $contact->updated_by ?? 1,
                'created_at' => $contact->created_at ?? now(),
                'updated_at' => $contact->updated_at ?? now(),
                'deleted_at' => $contact->deleted_at,
            ]);
        }
    }
}
