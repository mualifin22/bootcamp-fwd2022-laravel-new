<?php

namespace Database\Seeders;

use App\Models\MasterData\TypeUser;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creat data here
        $type_user = [
            [
                'name' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name' => 'Dokter',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name' => 'Pasien',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // this array will be insert into table 'type_user'
        TypeUser::insert($type_user);
    }
}
