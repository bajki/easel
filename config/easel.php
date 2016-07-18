<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Blog Meta Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the blog meta tags for your application.
    | These will be used for web scraping and open graph tags
    | on sites such as Facebook and Twitter.
    |
    */
    'name'            => 'Easel',
    'title'           => 'Easel',
    'subtitle'        => 'Minimal Blogging Package',
    'description'     => 'Blogging package for laravel apps',
    'author'          => 'Talv Bansal',

    /*
    |--------------------------------------------------------------------------
    | Blog Post Configuration
    |--------------------------------------------------------------------------
    |
    | Pretty self-explanatory here. Indicate how many posts you would like
    | to appear on each page. If you are using Disqus, provide the
    | identifier here or in your .env
    |
    */
    'posts_per_page'  => 6,
    'disqus_name' => env('DISQUS_NAME', 'YOUR_UNIQUE_SHORTNAME'),

    /*
    |--------------------------------------------------------------------------
    | Uploads Configuration
    |--------------------------------------------------------------------------
    |
    | Specify what type of storage you would like for your application. Just
    | as a reminder, your uploads directory MUST be writable by the
    | web server for the uploading to function properly.
    |
    | Supported: "local"
    |
    */
    'uploads'         => [
        'storage'       => 'public',
        'webpath'       => '/storage/',
    ],


    /*
    |--------------------------------------------------------------------------
    |
    |--------------------------------------------------------------------------
    |
    | This option points to a folder that you can store templates for your
    | blog posts. Each file within that folder will be included in the
    | drop down box on the layout section of the post editor page.
    | If the given path doesn't exist then only the default
    | layout will be shown.
    |
    */
    'layouts' => [
        'default' => 'vendor.easel.frontend.blog.post',
        'posts'   => env('POST_LAYOUTS', 'layouts.posts'),
    ]

];
