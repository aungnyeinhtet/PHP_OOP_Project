<?php
include("../vendor/autoload.php");

use Faker\Factory as Faker;
use Libs\Database\MYSQL;
use Libs\Database\UsersTable;

$faker = Faker::create();
$table = new UsersTable(new MYSQL());


if ($table) {
    echo "Database Connection Successfully. \n";
    for ($i = 0; $i < 100; $i++) {
        $data = [
            'name' => $faker->name,
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'password' => md5("password"),
            'role_id' => $i < 5 ? rand(1, 5) : 1
        ];

        $table->insert($data);
    }
    echo "Done! Populating users table.\n";
}
