<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'iPhone 14 User Reviews',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam optio et placeat voluptas, quas non beatae excepturi sit similique molestias minus quibusdam odio nesciunt exercitationem cupiditate',
            'post_detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam optio et placeat voluptas, quas non beatae excepturi sit similique molestias minus quibusdam odio nesciunt exercitationem cupiditate, omnis dignissimos sequi incidunt?',
        ]);
    }
}
