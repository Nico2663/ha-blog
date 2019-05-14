<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Id = 1
        DB::table('users')->insert([
            'name'          => 'Marc Andreessen',
            'email'         => 'marc@andreessen.com',
            'password'      => 'admin123',
            'created_at'    => date("2019-01-01 19:00:00"),
            'updated_at'    => date("2019-01-01 19:00:00"),
        ]);

        // Id = 2
        DB::table('users')->insert([
            'name'          => 'Steve Jobs',
            'email'         => 'steve@apple.com',
            'password'      => 'admin123',
            'created_at'    => date("2019-01-01 19:00:00"),
            'updated_at'    => date("2019-01-01 19:00:00"),
        ]);
        
        // Id = 3
        DB::table('users')->insert([
            'name'          => 'Bill Gates',
            'email'         => 'bill@microsoft.com',
            'password'      => 'admin123',
            'created_at'    => date("2019-01-01 19:00:00"),
            'updated_at'    => date("2019-01-01 19:00:00"),
        ]);

        // Id = 4
        DB::table('users')->insert([
            'name'          => 'Arthur C. Clarke',
            'email'         => 'arthur@clarke.com',
            'password'      => 'admin123',
            'created_at'    => date("2019-01-01 19:00:00"),
            'updated_at'    => date("2019-01-01 19:00:00"),
        ]);

        // Id = 5
        DB::table('users')->insert([
            'name'          => 'Edward Teller',
            'email'         => 'edward@teller.com',
            'password'      => 'admin123',
            'created_at'    => date("2019-01-01 19:00:00"),
            'updated_at'    => date("2019-01-01 19:00:00"),
        ]);

        // Id = 6
        DB::table('users')->insert([
            'name'          => 'Marc Benioff',
            'email'         => 'marc@benioff.com',
            'password'      => 'admin123',
            'created_at'    => date("2019-01-01 19:00:00"),
            'updated_at'    => date("2019-01-01 19:00:00"),
        ]);
    }
}
