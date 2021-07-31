<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Master Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('admins')->insert([
            'email' => 'support@trickitworld@gmail.com',
            'phone_en' => '+8801835061968',
            'phone_ban' => '+৮৮০১৮৩৫০৬১৯৬৮',

        ]);

        DB::table('categories')->insert([
            'image' => 'upload/default/tech_news.jpg',
            'name_en' => 'TECH NEWS',
            'name_ban' => 'টেক নিউস',
            'description_en' => 'Old router cluttering up your drawers? Here how to repurpose your old router and save some money instead of throwing it away!',
            'description_ban' => 'পুরানো রাউটার আপনার ড্রয়ার আপ cluttering? আপনার পুরানো রাউটারটিকে কীভাবে পুনর্নির্মাণ করতে হবে এবং এটি ফেলে দেওয়ার পরিবর্তে কিছু অর্থ সঞ্চয় করা যায় তা এখানে!',
            'slug_en' => 'tech-news',
            'slug_ban' => 'টেক-নিউস',
            'status' => 1,

        ]);

        DB::table('products')->insert([
            'thambnail_image' => 'upload/default/thambnail_image.jpg',
            'banner_image' => 'upload/default/banner_image.jpg',
            'name_en' => 'T12 Useful Ways to Reuse an Old Router Dont Throw It Away!)',
            'name_ban' => 'একটি পুরানো রাউটার পুনরায় ব্যবহার করার 12 কার্যকর উপায় (এটি ফেলে দেবেন না!)',
            'slug_en' => 't12-useful-ways-to-reuse-an-old-router-dont-throw-it-away',
            'slug_ban' => 'একটি-পুরানো-রাউটার-পুনরায়-ব্যবহার-করার-12-কার্যকর-উপায়-এটি-ফেলে-দেবেন-না',
            'category_id' => '1',
            'short_description_en' => 'Old router cluttering up your drawers? Here how to repurpose your old router and save some money instead of throwing it away!',
            'short_description_ban' => 'পুরানো রাউটার আপনার ড্রয়ার আপ cluttering? আপনার পুরানো রাউটারটিকে কীভাবে পুনর্নির্মাণ করতে হবে এবং এটি ফেলে দেওয়ার পরিবর্তে কিছু অর্থ সঞ্চয় করা যায় তা এখানে!',
            'long_description_en' => 'Reckon its time for a new router? Maybe your new Internet Service Provider (ISP) has sent one out, or you simply fancy an upgrade.',
            'long_description_ban' => 'রেকন এটি একটি নতুন রাউটার জন্য সময়? হতে পারে আপনার নতুন ইন্টারনেট পরিষেবা সরবরাহকারী (আইএসপি) এটি প্রেরণ করেছে, বা আপনি কেবল একটি আপগ্রেড করতে চান। যেভাবেই হোক, আপনি একটি সমস্যার মুখোমুখি হয়েছেন',
            'view_count' => 1,
            'status' => 1,

        ]);
    }
}
