<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Section::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->word,
        'slug' => strtolower($faker->word),
        'publication_id' => 1
    ];
});

$factory->define(App\Ad::class, function (Faker\Generator $faker) {
    $name = strtolower($faker->word);
    $image = \Illuminate\Http\UploadedFile::fake()->image($name . '.jpg');

    return [
        'size' => $faker->word,
        'duration' => $faker->word,
        'purchaser' => $faker->company,
        'provider_url' => $faker->url,
        'times_served' => 0,
        'campaign_start' => $faker->date(),
        'campaign_end' => $faker->date()
    ];
});

$factory->state(App\Ad::class, 'withExistingPhoto', function(Faker\Generator $faker){
    $name = strtolower($faker->word);
    $imageUrl = \Illuminate\Http\UploadedFile::fake()->image($name . '.jpg')
        ->storeAs('ads', $name . 'jpg', 'media');

    return [
        'image_url' => '/media' . $imageUrl
    ];
});

$factory->state(App\Ad::class, 'withoutExistingPhoto', function (Faker\Generator $faker){
    $name = strtolower($faker->word);
    $image = \Illuminate\Http\UploadedFile::fake()->image($name . '.jpg');

    return [
        'adFile' => $image
    ];
});

$factory->define(App\Volume::class, function(Faker\Generator $faker){
   return [
       'name' => $faker->numberBetween(0, 50),
       'first_issue_date' => \Carbon\Carbon::now(),
       'period' => 'August 2016 - May 2017',
       'publication' => 'Maneater'
   ];
});

$factory->define(App\Issue::class, function(Faker\Generator $faker){
   return [
       'issue_number' => $faker->numberBetween(0, 50),
       'volume_id' => function(){
           return create('App\Volume')->id;
       }
   ];
});

$factory->define(App\Staffer::class, function(Faker\Generator $faker){
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'is_active' => 1
    ];
});

$factory->define(App\Story::class, function (Faker\Generator $faker) {
    return [
        'slug' => $faker->slug,
        'runsheet_slug' => $faker->slug,
        'title' => $faker->words(5, true),
        'publish_date' => \Carbon\Carbon::now(),
        'cDeck' => $faker->sentence,
        'body' => $faker->paragraphs(5, true),
        'priority' => 10,
        'issue_id' => function(){
            return create('App\Issue')->id;
        },
        'section_id' => function(){
            return create('App\Section')->id;
        },
        'type' => 'online'
    ];
});

$factory->define(App\Photo::class, function (Faker\Generator $faker){
   $name = strtolower($faker->word);
   $path = \Illuminate\Http\UploadedFile::fake()->image($name . '.jpg')
       ->storeAs('images', $name . '.jpg', 'media');

   return [
       'title' => $name,
       'description' => $faker->sentence,
       'dateTaken' => \Carbon\Carbon::now(),
       'location' => '/media' . $path,
       'publish_date' => \Carbon\Carbon::now(),
       'section_id' => function(){
            return create('App\Section')->id;
       },
       'issue_id' => function(){
           return create('App\Issue')->id;
       },
       'staffer_id' => function(){
           return create('App\Staffer')->id;
       }
   ];
});

