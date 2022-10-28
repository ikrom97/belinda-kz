<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $texts = [
      [
        'slug' => 'about-advantages-title',
        'page' => 'about',
        'text' => 'title',
      ], [
        'slug' => 'about-advantage-1',
        'page' => 'about',
        'text' => 'item',
      ], [
        'slug' => 'about-advantage-2',
        'page' => 'about',
        'text' => 'item',
      ], [
        'slug' => 'about-advantage-3',
        'page' => 'about',
        'text' => 'item',
      ], [
        'slug' => 'about-advantage-4',
        'page' => 'about',
        'text' => 'item',
      ], [
        'slug' => 'about-advantage-5',
        'page' => 'about',
        'text' => 'item',
      ], [
        'slug' => 'about-advantage-6',
        'page' => 'about',
        'text' => 'item',
      ], [
        'slug' => 'about-mission-vision-title',
        'page' => 'about',
        'text' => 'title',
      ], [
        'slug' => 'about-global-presence-title',
        'page' => 'about',
        'text' => 'title',
      ], [
        'slug' => 'products-title',
        'page' => 'products',
        'text' => 'title',
      ], [
        'slug' => 'products-similar-title',
        'page' => 'products',
        'text' => 'title',
      ], [
        'slug' => 'products-popular-title',
        'page' => 'products',
        'text' => 'title',
      ], [
        'slug' => 'carrier-vacancies-title',
        'page' => 'carrier',
        'text' => 'title',
      ], [
        'slug' => 'newslifestyle-title',
        'page' => 'newslifestyle',
        'text' => 'title',
      ], [
        'slug' => 'contacts-global-presence',
        'page' => 'contacts',
        'text' => 'title',
      ],
    ];

    foreach ($texts as $text) {
      Text::create([
        'slug' => $text['slug'],
        'page' => $text['page'],
        'text' => $text['text'],
      ]);
    }
  }
}
