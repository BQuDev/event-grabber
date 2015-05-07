<?php

use Faker\Factory as Faker;
class KeywordTableSeeder extends Seeder {

    public function run()
    {
        DB::table('keywords')->truncate();

        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            Keyword::create(array(
                'name' =>$faker->text,
                'description'=>$faker->text
        ));

        }
    }

}