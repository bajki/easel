<?php

use Illuminate\Database\Seeder;

/*
|--------------------------------------------------------------------------
| Initial User Seed Data
|--------------------------------------------------------------------------
|
| Here you may set the user information details for the application
| administrator. Don't worry, you can always edit these
| details within the application.
|
*/

class UsersTableSeeder extends Seeder
{
    /**
     * Run the User model database seed.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users');
        $users->truncate();

        $users->insert([
            /*
            |--------------------------------------------------------------------------
            | Summary
            |--------------------------------------------------------------------------
            */
            'bio'          => 'A short description of yourself is a great way for people to get to know you!',

            /*
            |--------------------------------------------------------------------------
            | Basic Information
            |--------------------------------------------------------------------------
            */
            'first_name'   => 'Canvas',
            'last_name'    => 'Administrator',
            'display_name' => 'Admin',
            'job'          => 'Web Developer',
            'gender'       => 'Male',
            'birthday'     => date('Y-m-d'),
            'relationship' => 'Married',

            /*
            |--------------------------------------------------------------------------
            | Contact Information
            |--------------------------------------------------------------------------
            */
            'phone'        => '(000) 111-0000',
            'email'        => 'admin@' . seoUrl(config('blog.title')) . '.com',
            'social_media' => json_encode([
                'twitter'  => 'https://twitter.com/' . seoUrl(config('blog.title')),
                'facebook' => 'https://facebook.com/' . seoUrl(config('blog.title')),
                'github'   => 'https://github.com/' . seoUrl(config('blog.title')),
            ]),
            'address'      => '1200 Canvas Way',
            'city'         => 'Birmingham',
            'country'      => 'UK',

            /*
            |--------------------------------------------------------------------------
            | Misc Information
            |--------------------------------------------------------------------------
            */
            'url'          => 'www.' . seoUrl(config('blog.title')) . '.com',
            'password'     => bcrypt('password'),

            /*
            |--------------------------------------------------------------------------
            | Timestamps
            |--------------------------------------------------------------------------
            */
            'created_at'   => Carbon\Carbon::now(),
            'updated_at'   => Carbon\Carbon::now()
        ]);
    }
}
