<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name'=>'anhijou',
            'email'=>'anhijou.@gmail.com',
            'address'=>'tanger'
        ]);
        Company::create([
            'name'=>'anhijou2',
            'email'=>'anhijou.@gmail.com2',
            'address'=>'tanger2'
        ]);
    }
}
