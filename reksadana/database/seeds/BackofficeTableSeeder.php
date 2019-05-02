<?php

use Illuminate\Database\Seeder;
use App\Backoffice;

class BackofficeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('backoffice')->delete();
    	Backoffice::create(array(
    		'nama' => 'Lina',
    		'jabatan' => 'investment support',
    		'username' => 'lina.investment',
    		'email' => 'lina.lina@bambang-aset.co.id',
    		'password' => Hash::make('PARAHdah@@123'),
    		'status' => 'No',
    	));
    }
}
