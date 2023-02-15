<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Iphone 13 pro',
            'price' => '600',
            'description' => 'apple Iphone 13 pro, 16gb ram and much more feature',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/SRki6QNZyqTa7nAZ6',

            ],
            [
                'name' => 'Iphone 12',
            'price' => '500',
            'description' => 'apple Iphone 13 pro, 8gb ram and much more feature',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/1GaMEKzJ7nzHL7cG8',

            ],
            [
                'name' => 'samsung galaxy',
            'price' => '800',
            'description' => 'samsung, 16gb ram and much more feature',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/7SvUaBKWTQo5KF6H7',

            ],
            [
                'name' => 'Lg tv',
            'price' => '400',
            'description' => '40 inch led screen',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/NjUVjPfvRBkEK1AC8',

            ],
            [
                'name' => 'hp laptop',
            'price' => '300',
            'description' => 'hp laptop 8gb ram, 14 inch display',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/8UZqMT4XiiQPyvFF7',

            ],
            [
                'name' => 'apple laptop',
            'price' => '600',
            'description' => 'apple mac book air, 16gb ram and much more feature',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/D5AhJQveMD6pt7ZG8',

            ],
        ]);
    }
}