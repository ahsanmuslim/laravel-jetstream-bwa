<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::create([
            'todos' => 'Buat landingp page'
        ]);
        Todo::create([
            'todos' => 'Belajar PHP Laravel'
        ]);
        Todo::create([
            'todos' => 'Belajar CSS Tailwinds'
        ]);
    }
}
