<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class CdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'type' => 'cd',
            'title' => 'Shake It Off',
            'firstname' => 'Taylor',
            'lastname' => 'Swift',
            'price' => '11',
            'pgdur' => '120'
        ]);
        Product::create([
            'type' => 'cd',
            'title' => 'Uptown Funk',
            'firstname' => 'Bruno',
            'lastname' => 'Mars',
            'price' => '18',
            'pgdur' => '330'
        ]);
        Product::create([
            'type' => 'cd',
            'title' => 'All About That Bass',
            'firstname' => 'Meghan',
            'lastname' => 'Trainor',
            'price' => '15',
            'pgdur' => '120'
        ]);
        Product::create([
            'type' => 'cd',
            'title' => 'See You Again',
            'firstname' => 'Charlie',
            'lastname' => 'Puth',
            'price' => '18',
            'pgdur' => '320'
        ]);
        Product::create([
            'type' => 'cd',
            'title' => 'Chandelier',
            'firstname' => 'Sia',
            'lastname' => '',
            'price' => '19',
            'pgdur' => '400'
        ]);
    }
}
