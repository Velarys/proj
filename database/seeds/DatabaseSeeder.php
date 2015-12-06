<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        
        DB::table('education')->delete();
        Education::create(
            ['edu_id' => '0', 'edu_level' => 'None'],
            ['edu_id' => '1', 'edu_level' => 'Preschool'],
            ['edu_id' => '2', 'edu_level' => 'Elementary'],
            ['edu_id' => '3', 'edu_level' => 'High school'],
            ['edu_id' => '4', 'edu_level' => 'College']
        );
        
        DB::table('completed')->delete();
        Completed::create(
            ['id_completed' => '0', 'author' => 'Patient'],
            ['id_completed' => '1', 'author' => 'Caregiver'],
            ['id_completed' => '2', 'author' => 'Caregiver-assisted']
        );
        
        DB::table('admin')->delete();
        Admin::create(
            ['id_admin' => '0', 'email' => 'admin@mea.com', 'password' => 'pass']
        );

        Model::reguard();
    }
}

/*
class EduationTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('education')->delete();
        Education::create(['edu_id' => '0', 'edu_level' => 'None'],
                          ['edu_id' => '1', 'edu_level' => 'Preschool'],
                          ['edu_id' => '2', 'edu_level' => 'Elementary'],
                          ['edu_id' => '3', 'edu_level' => 'High school'],
                          ['edu_id' => '4', 'edu_level' => 'College']);
    }
}

class CompletedTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('completed')->delete();
        Completed::create(['id_completed' => '0', 'author' => 'Patient'],
                          ['id_completed' => '1', 'author' => 'Caregiver'],
                          ['id_completed' => '2', 'author' => 'Caregiver-assisted']);
    }
}

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin')->delete();
        Admin::create(['id_admin' => '0', 'email' => 'admin@mea.com', 'password' => 'pass']);
    }
}
*/