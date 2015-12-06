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
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

/*
$education = factory(App\Education::class)->create(
    ['edu_id' => '0', 'edu_level' => 'None'],
    ['edu_id' => '1', 'edu_level' => 'Preschool'],
    ['edu_id' => '2', 'edu_level' => 'Elementary'],
    ['edu_id' => '3', 'edu_level' => 'High school'],
    ['edu_id' => '4', 'edu_level' => 'College']
);

$completed = factory(App\Completed::class)->create(
    ['id_completed' => '0', 'author' => 'Patient'],
    ['id_completed' => '1', 'author' => 'Caregiver'],
    ['id_completed' => '2', 'author' => 'Caregiver-assisted']
);

$admin = factory(App\Admin::class)->create([
    'id_admin' => '0', 
    'email' => 'admin@mea.com', 
    'password' => 'pass'
]);
*/