<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert(
            [
                [
                    'name' => 'Syaifudin Alkatiri',
                    'nim' => '2016470057',
                    'email' => '2016470057' . '@gmail.com',
                ],
                [
                    'name' => "Wibi",
                    'nim' => '2016470063',
                    'email' => '2016470063' . '@gmail.com',
                ],

            ]
        );
    }
}
