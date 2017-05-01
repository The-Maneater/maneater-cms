<?php

use Illuminate\Database\Seeder;
use App\Flatpage;

class FlatpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flatpage::create([
           'title' => 'About',
            'path' => 'about',
            'publication_id' => 1,
            'content' => file_get_contents(storage_path('/flatpage_initial/about.php'))
        ]);

        Flatpage::create([
            'title' => 'Accuracy',
            'path' => 'about/accuracy',
            'publication_id' => 1,
            'content' => file_get_contents(storage_path('/flatpage_initial/accuracy.php'))
        ]);

        Flatpage::create([
            'title' => 'Advertising',
            'path' => 'about/advertising',
            'publication_id' => 1,
            'content' => file_get_contents(storage_path('/flatpage_initial/advertising.php'))
        ]);

        Flatpage::create([
            'title' => 'Contact',
            'path' => 'about/contact',
            'publication_id' => 1,
            'content' => file_get_contents(storage_path('/flatpage_initial/contact.php'))
        ]);

        Flatpage::create([
            'title' => 'Order Photo',
            'path' => 'about/order-photo',
            'publication_id' => 1,
            'content' => file_get_contents(storage_path('/flatpage_initial/order-photo.php'))
        ]);

        Flatpage::create([
            'title' => 'Scholarships',
            'path' => 'about/scholarships',
            'publication_id' => 1,
            'content' => file_get_contents(storage_path('/flatpage_initial/scholarships.php'))
        ]);

        Flatpage::create([
            'title' => 'Stylebook',
            'path' => 'reporters/info_pages/maneater-stylebook',
            'publication_id' => 1,
            'content' => file_get_contents(storage_path('/flatpage_initial/stylebook.php'))
        ]);

        Flatpage::create([
            'title' => 'Colophon',
            'path' => 'about/colophon',
            'publication_id' => 1,
            'content' => file_get_contents(storage_path('/flatpage_initial/colophon.php'))
        ]);
    }
}
