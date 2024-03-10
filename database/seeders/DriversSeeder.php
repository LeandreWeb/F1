<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DriversSeeder extends Seeder
{

    /**
     * Run the database seeds.
     * 
     * Status
     * - active
     * - out
     * - reserve
     * - injured
     * - retired
     */
    public function run(): void
    {
        $drivers = [];

        $drivers[] = [
            "id" => 16,
            "FirstName" => "Charles",
            "LastName" => "Leclerc",
            "country_id" => 7,
            "Number" => 16,
            "status" => 'active',
            'socials_id' => 4416
        ];
        $drivers[] = [
            "id" => 55,
            "FirstName" => "Carlos",
            "LastName" => "Sainz",
            "country_id" => 8,
            "Number" => 55,
            "status" => 'active',
            'socials_id' => 4455

        ];
        $drivers[] = [
            "id" => 1,
            "FirstName" => "Max",
            "LastName" => "Verstappen",
            "country_id" => 14,
            "Number" => 1,
            "status" => 'active',
            'socials_id' => 4401

        ];
        $drivers[] = [
            "id" => 11,
            "FirstName" => "Sergio",
            "LastName" => "Perez",
            "country_id" => 18,
            "Number" => 11,
            "status" => 'active',
            'socials_id' => 4411

        ];
        $drivers[] = [
            "id" => 14,
            "FirstName" => "Fernando",
            "LastName" => "Alonso",
            "country_id" => 8,
            "Number" => 14,
            "status" => 'active',
            'socials_id' => 4414

        ];
        $drivers[] = [
            "id" => 18,
            "FirstName" => "Lance",
            "LastName" => "Stroll",
            "country_id" => 9,
            "Number" => 18,
            "status" => 'active',
            'socials_id' => 4418

        ];
        $drivers[] = [
            "id" => 44,
            "FirstName" => "Lewis",
            "LastName" => "Hamilton",
            "country_id" => 11,
            "Number" => 44,
            "status" => 'active',
            'socials_id' => 4444

        ];
        $drivers[] = [
            "id" => 63,
            "FirstName" => "George",
            "LastName" => "Russell",
            "country_id" => 11,
            "Number" => 63,
            "status" => 'active',
            'socials_id' => 4463

        ];
        $drivers[] = [
            "id" => 77,
            "FirstName" => "Valtteri",
            "LastName" => "Bottas",
            "country_id" => 21,
            "Number" => 77,
            "status" => 'active',
            'socials_id' => 4477

        ];
        $drivers[] = [
            "id" => 24,
            "FirstName" => "Zhou",
            "LastName" => "Guanyu",
            "country_id" => 26,
            "Number" => 24,
            "status" => 'active',
            'socials_id' => 4424

        ];
        $drivers[] = [
            "id" => 10,
            "FirstName" => "Pierre",
            "LastName" => "Gasly",
            "country_id" => 22,
            "Number" => 10,
            "status" => 'active',
            'socials_id' => 4410

        ];
        $drivers[] = [
            "id" => 31,
            "FirstName" => "Esteban",
            "LastName" => "Ocon",
            "country_id" => 22,
            "Number" => 31,
            "status" => 'active',
            'socials_id' => 4431

        ];
        $drivers[] = [
            "id" => 23,
            "FirstName" => "Alexander",
            "LastName" => "Albon",
            "country_id" => 24,
            "Number" => 23,
            "status" => 'active',
            'socials_id' => 4423

        ];
        $drivers[] = [
            "id" => 2,
            "FirstName" => "Logan",
            "LastName" => "Sargeant",
            "country_id" => 5,
            "Number" => 2,
            "status" => 'active',
            'socials_id' => 4402

        ];
        $drivers[] = [
            "id" => 22,
            "FirstName" => "Yuki",
            "LastName" => "Tsunoda",
            "country_id" => 16,
            "Number" => 22,
            "status" => 'active',
            'socials_id' => 4422

        ];
        $drivers[] = [
            "id" => 21,
            "FirstName" => "Nyck",
            "LastName" => "De Vries",
            "country_id" => 14,
            "Number" => 21,
            "status" => 'out',
            'socials_id' => 4421

        ];
        $drivers[] = [
            "id" => 27,
            "FirstName" => "Nico",
            "LastName" => "Hulkenberg",
            "country_id" => 25,
            "Number" => 27,
            "status" => 'active',
            'socials_id' => 4427

        ];
        $drivers[] = [
            "id" => 20,
            "FirstName" => "Kevin",
            "LastName" => "Magnussen",
            "country_id" => 23,
            "Number" => 20,
            "status" => 'active',
            'socials_id' => 4420

        ];
        $drivers[] = [
            "id" => 4,
            "FirstName" => "Lando",
            "LastName" => "Norris",
            "country_id" => 11,
            "Number" => 4,
            "status" => 'active',
            'socials_id' => 4404

        ];
        $drivers[] = [
            "id" => 81,
            "FirstName" => "Oscar",
            "LastName" => "Piastry",
            "country_id" => 3,
            "Number" => 81,
            "status" => 'active',
            'socials_id' => 4481
        ];
        $drivers[] = [
            "id" => 3,
            "FirstName" => "Daniel",
            "LastName" => "Ricciardo",
            "country_id" => 3,
            "Number" => 3,
            "status" => 'active',
            'socials_id' => 4403
        ];
        $drivers[] = [
            "id" => 40,
            "FirstName" => "Liam",
            "LastName" => "Lawson",
            "country_id" => 3,
            "Number" => 40,
            "status" => 'reserve',
            'socials_id' => 4440
        ];
        $drivers[] = [
            "id" => 38,
            "FirstName" => "Oliver",
            "LastName" => "Bearman",
            "country_id" => 11,
            "Number" => 38,
            "status" => 'reserve',
            'socials_id' => 4440
        ];


        Db::table("drivers")->delete();
        Db::table("drivers")->insert($drivers);
    }
}
