<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'El software se está comiendo al mundo',
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
            'user_id' => 1, // Marc Andreessen
            'image' => 'drone_900x400.jpg',
            'created_at' => date("2019-02-28 19:00:00"),
            'updated_at' => date("2019-02-28 19:00:00"),
        ]);

        DB::table('posts')->insert([
            'title' => 'Stay hungry, stay foolish',
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
            'user_id' => 2, // Steve Jobs
            'image' => 'notebook_900x400.jpg',
            'created_at' => date("2019-02-27 19:00:00"),
            'updated_at' => date("2019-02-27 19:00:00"),
        ]);

        DB::table('posts')->insert([
            'title' => 'El software es una gran combinación entre arte e ingeniería',
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
            'user_id' => 3, // Bill Gates
            'image' => 'phone_900x400.jpg',
            'created_at' => date("2019-02-09 19:00:00"),
            'updated_at' => date("2019-02-09 19:00:00"),
        ]);
        
        DB::table('posts')->insert([
            'title' => 'Any sufficiently advanced technology is indistinguishable from magic',
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
            'user_id' => 4, // Arthur C. Clarke
            'image' => '900x400.png',
            'created_at' => date("2019-02-08 19:00:00"),
            'updated_at' => date("2019-02-08 19:00:00"),
        ]);

        DB::table('posts')->insert([
            'title' => 'The science of today is the technology of tomorrow',
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
            'user_id' => 5, // Edward Teller
            'image' => '900x400.png',
            'created_at' => date("2019-01-01 00:00:00"),
            'updated_at' => date("2019-01-01 00:00:00"),
        ]);

        DB::table('posts')->insert([
            'title' => 'The only constant in the technology industry is change',
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
            'user_id' => 6, // Marc Benioff
            'image' => '900x400.png',
            'created_at' => date("2019-01-04 08:00:00"),
            'updated_at' => date("2019-01-04 08:00:00"),
        ]);

        DB::table('posts')->insert([
            'title' => 'The advance of technology is based on making it fit in so that you don\'t really even notice it',
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
            'user_id' => 3, // Bill Gates
            'image' => '900x400.png',
            'created_at' => date("2019-01-06 08:00:00"),
            'updated_at' => date("2019-01-06 08:00:00"),
        ]);

    }
}
