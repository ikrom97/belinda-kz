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
    $contents = array(
      array('id' => '1', 'slug' => 'home-info', 'page' => 'home', 'content' => '<h2><span style="color: rgb(255, 255, 255);">«Здоровье - вечная ценность<span style="color: rgb(255, 255, 255);">»</span></span><br></h2><p><span style="color: rgb(255, 255, 255);">«Belinda» — одна из самых молодых компаний в мире международной фармакологии, которая была основана в 2001 году, но активно и успешно развивается с каждым днем, завоевывая доверие и уважение своих партнеров, а также привлекая новых. Основной целью и стратегией компании является разработка новых и эффективных методов лечения различных заболеваний.Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов.</span><br></p><p><span style="color: rgb(255, 255, 255);"><span style="color: rgb(255, 255, 255);">«Belinda» открывает свои двери для всех желающих приобрести международный опыт в области фармацевтики. Мы сторонники высокой кадровой политики компании, направленной на развитие команды амбициозных и талантливых профессионалов. Наша цель – создать комфортные и хорошие условия труда для всех и для каждого сотрудника.</span><br></span></p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:19:28'),
      array('id' => '2', 'slug' => 'home-about', 'page' => 'home', 'content' => '<h3>О нас</h3><p>Узнать больше</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:35:31'),
      array('id' => '3', 'slug' => 'home-product', 'page' => 'home', 'content' => '<h3>Наши продукты</h3><p>Узнать больше о</p><p>наших продуктах</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:38:26'),
      array('id' => '4', 'slug' => 'home-carrier', 'page' => 'home', 'content' => '<h3>Карьера</h3><p>Вакансии и</p><p>работа в компании</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:36:26'),
      array('id' => '5', 'slug' => 'home-news', 'page' => 'home', 'content' => '<h3>Новости компании</h3><p>Самая популярная</p><p>новость компании</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:44:14'),
      array('id' => '6', 'slug' => 'home-history', 'page' => 'home', 'content' => '', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:09:25'),
      array('id' => '7', 'slug' => 'home-lifestyle', 'page' => 'home', 'content' => '<h3><span style="color: rgb(232, 234, 237);">Образ жизни</span><br></h3><p><span style="color: rgb(232, 234, 237);">Самая популярная статья об образе жизни</span><br></p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:24:50'),
      array('id' => '8', 'slug' => 'home-attention', 'page' => 'home', 'content' => '<h3>Внимание</h3><p><span style="color: rgb(66, 74, 82);">Информация, представленная на этом сайте, не должна использоваться для самодиагностики и лечения и не может служить заменой очной консультации с доктором.</span><br></p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:38:52'),
      array('id' => '9', 'slug' => 'contacts-block', 'page' => NULL, 'content' => '<h3>КОНТАКТЫ</h3><p>ТОО "Нео Лайф", 050010, Республика Казахстан, г. Алматы, Медеуский район, мкр. Кок-Тобе, ул. Розы Баглановой, д. №83А<br></p><p><a target="_blank"><br></a></p><p>Тел: +7 (727) 271-80-78</p><p>&nbsp; &nbsp; &nbsp; &nbsp; +7 (727) 371-53-31</p><p>E-mail: info@belinda.kz</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:44:43'),
      array('id' => '10', 'slug' => 'about-belinda', 'page' => 'about', 'content' => '<h2>О BELINDA</h2><p>«Belinda» — одна из самых молодых компаний в мире международной фармакологии, которая была основана в 2001 году, но активно и успешно развивается с каждым днем, завоевывая доверие и уважение своих партнеров, а также привлекая новых.</p><p>Основной целью и стратегией компании является разработка новых и эффективных методов лечения различных заболеваний.</p><p>Мы котируемся на рынках Европы, Азии и стран СНГ. На данный момент мы сотрудничаем с более чем 75 агентами и партнерами из 9 разных стран. Наша компания также активно занимается продвижением фармацевтической продукции в сфере маркетинга. Мы стремимся к лучшему, сохраняя качество и высокие стандарты.</p><p>Таким образом, с большим потенциалом в области медицины, которая создает новые лекарства. Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов. Также мы следим за развитием фармацевтического рынка, достижениями в лечении различных заболеваний, а также новыми направлениями.</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:56:30'),
      array('id' => '11', 'slug' => 'about-products', 'page' => 'about', 'content' => '<h3>Наши продукты</h3><p>Узнайте больше о</p><p>наших продуктах</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:57:29'),
      array('id' => '12', 'slug' => 'about-news', 'page' => 'about', 'content' => '<h3>Новости компании</h3><p><span style="color: rgb(232, 234, 237);">Актуальные и полезные новости компании</span><br></p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:58:23'),
      array('id' => '13', 'slug' => 'about-principles', 'page' => 'about', 'content' => '<h2>НАШИ ПРИНЦИПЫ</h2><h3>ПРИНЦИПЫ НАШЕЙ РАБОТЫ:</h3><p>Профессионализм команды;Обмен опытом и своими знаниями;Инновации, импровизация и поиск оптимальных решений;Проведение непрерывного обучения сотрудников компании;Достижение максимальных результатов в кратчайшие сроки;Оптимальное использование ресурсов;</p><h3>ПАРТНЕРСТВО:</h3><p>Понимание и доверие партнеров;Оптимальное решение в достижении взаимовыгодного результата;</p><h3>ОБЯЗАННОСТЬ:</h3><p>Соблюдение принципов работы;За качество товара потребителю;За выполнение всех обязательств перед партнерами;</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 18:58:49'),
      array('id' => '14', 'slug' => 'about-mission-vision-1', 'page' => 'about', 'content' => '<h3>ВИДЕНИЕ</h3><p>Девиз нашей компании – доступность, а главное качество лекарственных средств, которые являются основой наших продаж. За время существования нашей компании мы зарекомендовали себя как надежный партнер и создали дистрибьюторскую сеть фармацевтической продукции.</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 19:04:51'),
      array('id' => '15', 'slug' => 'about-mission-vision-2', 'page' => 'about', 'content' => '<h3>МИССИЯ</h3><p>Установление высоких стандартов качества, безопасности и доступности лекарственных средств для различных категорий населения независимо от уровня их доходов и Содействие процветанию здорового общества путем обеспечения пациентов качественными, безопасными и доступными лекарственными средствами.</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 19:05:56'),
      array('id' => '16', 'slug' => 'about-mission-vision-3', 'page' => 'about', 'content' => '<h3>ЦЕЛЬ</h3><p>Основной целью нашей компании является соответствие всем требованиям современного фармацевтического рынка, совершенствование методов современного лечения, медицинских услуг и производства необходимых лекарственных средств.</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 19:06:06'),
      array('id' => '17', 'slug' => 'products-belinda', 'page' => 'products', 'content' => '<h2>ПРОДУКТЫ БЕЛИНДА</h2><p>Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов.</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 19:10:02'),
      array('id' => '18', 'slug' => 'carrier-product', 'page' => 'carrier', 'content' => '<h2>ПРОДУКТЫ БЕЛИНДА</h2><p>Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов.</p>', 'created_at' => '2022-09-14 18:09:25', 'updated_at' => '2022-09-14 19:14:47')
    );

    foreach ($contents as $content) {
      Content::create([
        'slug' => $content['slug'],
        'page' => $content['page'],
        'content' => $content['content'],
      ]);
    }
  }
}
