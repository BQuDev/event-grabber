<?php
/**
 * Created by PhpStorm.
 * User: Damith
 * Date: 5/8/2015
 * Time: 12:02 AM
 */


use Faker\Factory as Faker;
class EventTableSeeder extends Seeder {

    public function run()
    {
        DB::table('events')->truncate();

        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            Event::create(array(

            ));



        }
    }

}
