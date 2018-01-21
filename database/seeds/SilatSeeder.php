<?php

use Illuminate\Database\Seeder;

class SilatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $a=[
				['tokoh'=>'Haji Ceng Suryana HR','tempat_lahir'=>'garut','tanggal_lahir'=>'1946-05-05'],
				['tokoh'=>'Edwel Yusri Datuak Rajo Gampo Alam','tempat_lahir'=>'bukit tinggi sumatera utara','tanggal_lahir'=>'1963-07-06'],
				['tokoh'=>'Emral Djamal Datuk Rajo Mudo','tempat_lahir'=>'sumatera barat','tanggal_lahir'=>'1944-03-22']
       
        ];
         //memasukan data ke table di database
        DB::table('silats')->insert($a);
    }
}