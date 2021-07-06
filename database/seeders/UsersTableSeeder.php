<?php

namespace Database\Seeders;
// use App\User;
use App\Models\User;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt('password');
        $user->account_id = 3;
        $user->save();
    }
}
