<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'type' => 'book',
            'title' => 'War and Peace',
            'firstname' => 'Leo',
            'lastname' => 'Tolstoy',
            'price' => '21',
            'pgdur' => '800'
        ]);
        Product::create([
            'type' => 'book',
            'title' => 'Song of Solomon',
            'firstname' => 'Toni',
            'lastname' => 'Morrison',
            'price' => '16',
            'pgdur' => '600'
        ]);
        Product::create([
            'type' => 'book',
            'title' => 'Roar',
            'firstname' => 'Katty',
            'lastname' => 'Perry',
            'price' => '12',
            'pgdur' => '180'
        ]);
        Product::create([
            'type' => 'book',
            'title' => 'Ulysses',
            'firstname' => 'James',
            'lastname' => 'Joyce',
            'price' => '17',
            'pgdur' => '900'
        ]);
        Product::create([
            'type' => 'book',
            'title' => 'Blank Space',
            'firstname' => 'Taylor',
            'lastname' => 'Swift',
            'price' => '11',
            'pgdur' => '120'
        ]);
    }
}
