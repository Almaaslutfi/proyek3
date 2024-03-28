<?php
namespace Database\Seeders;
use Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // echo "berhasil";
        echo "Jumlah fake user:\n ";
        $input = fopen("php://stdin","r");
        $pilih = trim(fgets($input));
        $users = [];
        $faker = Faker\Factory::create();
        for($i=0;$i<$pilih;$i++){
        $data[$i] = [
                'first_name' => $faker->name,
                'last_name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'username' => $faker->unique()->userName,
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ];
        }
        DB::table('users')->insert($data);
        echo "berhasil membuat ".$pilih." user\n\n";
    }
}