<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'about-us',
           'view'=>'simple',
            'title'=>'О нас',
            'content'=>file_get_contents(__DIR__.'//../../../html/aboutUs.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'adresses',
            'view'=>'simple',
            'title'=>'Юридические адреса',
            'content'=>file_get_contents(__DIR__.'//../../../html/adresses.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'bughgalters',
            'view'=>'simple',
            'title'=>'Бухгалтерские услуги',
            'content'=>file_get_contents(__DIR__.'//../../../html/bughgalters.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'catalog',
            'view'=>'simple',
            'title'=>'Каталог товаров',
            'content'=>file_get_contents(__DIR__.'/../../../html/catalog.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'contacts',
            'view'=>'simple',
            'title'=>'Контакты',
            'content'=>file_get_contents(__DIR__.'/../../../html/contacts.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'feedback',
            'view'=>'simple',
            'title'=>'Оставить отзыв',
            'content'=>file_get_contents(__DIR__.'/../../../html/feedback.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'home',
            'view'=>'simple',
            'title'=>'Главная',
            'content'=>file_get_contents(__DIR__.'/../../../html/index.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'licvidation',
            'view'=>'simple',
            'title'=>'Ликвидация фирм',
            'content'=>file_get_contents(__DIR__.'/../../../html/licvidation.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'login-page',
            'view'=>'simple',
            'title'=>'Авторизация',
            'content'=>file_get_contents(__DIR__.'/../../../html/loginPage.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'main-page',
            'view'=>'simple',
            'title'=>'Главная',
            'content'=>file_get_contents(__DIR__.'/../../../html/mainPage.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'news',
            'view'=>'simple',
            'title'=>'Новости и статьи',
            'content'=>file_get_contents(__DIR__.'/../../../html/news.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'offshors',
            'view'=>'simple',
            'title'=>'Оффшоры',
            'content'=>file_get_contents(__DIR__.'/../../../html/offshors.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'product',
            'view'=>'simple',
            'title'=>'Товар',
            'content'=>file_get_contents(__DIR__.'/../../../html/one_item.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'personal-cabinet',
            'view'=>'simple',
            'title'=>'Личный кабинет',
            'content'=>file_get_contents(__DIR__.'/../../../html/personalCabinet.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'price',
            'view'=>'simple',
            'title'=>'Каталог товаров',
            'content'=>file_get_contents(__DIR__.'/../../../html/price.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'registration',
            'view'=>'simple',
            'title'=>'Регистрация фирм',
            'content'=>file_get_contents(__DIR__.'/../../../html/registration.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'account-registration',
            'view'=>'simple',
            'title'=>'Регистрация',
            'content'=>file_get_contents(__DIR__.'/../../../html/registration_Account.html')
        ]);
        \App\Models\StaticPage::factory()->create([
            'urlname'=>'staff',
            'view'=>'simple',
            'title'=>'Персонал',
            'content'=>file_get_contents(__DIR__.'/../../../html/staff.html')
        ]);
    }
}
