<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
           ['label' => 'Main', 'slug' => 'index', 'url' => '/', 'order' => 1],
           ['label' => 'About', 'slug' => 'about', 'url' => '/about', 'order' => 2],
           ['label' => 'Services', 'slug' => 'services', 'url' => '/services', 'order' => 3],
    ]);
    }
}
