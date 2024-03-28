<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        echo "1: User\n2: Role\n3: Admin\nPilih ";
        $input = fopen("php://stdin","r");
        $pilih = trim(fgets($input));
        echo "\n";
        if($pilih == 1){
            $this->call(UsersTableSeeder::class);
        }else if($pilih == 2){
            echo "1: Auto Create\n2: Manual Create\nPilih ";
            $input = fopen("php://stdin","r");
            $pilih = trim(fgets($input));
            
            if($pilih == 1){
                $this->call(RoleSeeder::class);
            }elseif($pilih == 2){
                $this->call(RoleCreateSeeder::class);
            }else{
                return;
            }
        }else if($pilih == 3){
            $this->call(AdminSeeder::class);
        }else{
            echo "pilih yang sesuai!\n";
            $this->call(DatabaseSeeder::class);
        }
    }
}
