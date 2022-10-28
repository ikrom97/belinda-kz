<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $contents = [
      [
        'slug' => 'home-info',
        'page' => 'home',
        'content' => '',
      ], [
        'slug' => 'home-about',
        'page' => 'home',
        'content' => '',
      ], [
        'slug' => 'home-product',
        'page' => 'home',
        'content' => '',
      ], [
        'slug' => 'home-carrier',
        'page' => 'home',
        'content' => '',
      ], [
        'slug' => 'home-news',
        'page' => 'home',
        'content' => '',
      ], [
        'slug' => 'home-history',
        'page' => 'home',
        'content' => '',
      ], [
        'slug' => 'home-lifestyle',
        'page' => 'home',
        'content' => '',
      ], [
        'slug' => 'home-attention',
        'page' => 'home',
        'content' => '',
      ], [
        'slug' => 'contacts-block',
        'page' => null,
        'content' => '',
      ], [
        'slug' => 'about-belinda',
        'page' => 'about',
        'content' => '',
      ], [
        'slug' => 'about-products',
        'page' => 'about',
        'content' => '',
      ], [
        'slug' => 'about-news',
        'page' => 'about',
        'content' => '',
      ], [
        'slug' => 'about-principles',
        'page' => 'about',
        'content' => '',
      ], [
        'slug' => 'about-mission-vision-1',
        'page' => 'about',
        'content' => '',
      ], [
        'slug' => 'about-mission-vision-2',
        'page' => 'about',
        'content' => '',
      ], [
        'slug' => 'about-mission-vision-3',
        'page' => 'about',
        'content' => '',
      ], [
        'slug' => 'products-belinda',
        'page' => 'products',
        'content' => '',
      ], [
        'slug' => 'carrier-product',
        'page' => 'carrier',
        'content' => '',
      ],
    ];

    foreach ($contents as $content) {
      Content::create([
        'slug' => $content['slug'],
        'page' => $content['page'],
        'content' => $content['content'],
      ]);
    }
  }
}
