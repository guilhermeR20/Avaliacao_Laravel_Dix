<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datenow = Carbon::now();
        DB::table('users')->insert([
            ['id'=>2,'name'=>'admin','isAdmin'=>True,'email'=>'admin@gmail.com','password'=>bcrypt('admin'),'created_at'=>$datenow,'updated_at'=>$datenow],
        ]);
    }
}