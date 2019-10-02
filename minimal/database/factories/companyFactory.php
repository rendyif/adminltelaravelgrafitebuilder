<?php
/*
|--------------------------------------------------------------------------
| Company Factory
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Company::class, function (Faker\Generator $faker) {
    return [
        'id' => '1',
		'name' => 'accusamus',
		'tax' => 'rerum',
		'reg' => 'officia',
		'phone' => 'cupiditate',
    ];
});
