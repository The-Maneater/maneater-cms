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
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Ad::class, function (Faker\Generator $faker) {
    return [
        'size' => $faker->word,
        'duration' => $faker->word,
        'purchaser' => $faker->company,
        'image_url' => $faker->imageUrl(),
        'provider_url' => $faker->url,
        'times_served' => 0,
        'campaign_start' => $faker->date(),
        'campaign_end' => $faker->date()
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
        'section_id' => 1,
        'issue_id' => 1
    ];
});