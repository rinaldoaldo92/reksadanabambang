<?php

use Illuminate\Database\Seeder;
use App\Nasabah;

class NasabahTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	DB::table('nasabah')->delete();
    	Nasabah::create(array(
    		'nama' => 'Rudi Hermawan',
    		'username' => 'rudi.coba',
    		'email' => 'rudiher99@gmail.com',
    		'password' => Hash::make('PARAHdah@@123'),
    		'status' => 'No',
    	));
    }
}
