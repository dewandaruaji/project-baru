<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
		
        $limit = 20;
		
		for($i = 1; $i<$limit; $i++){
			DB::table('tabel_barangs')->insert([
				'nama_barang' => "barang".$i,
				'stok' => $faker->numberBetween(1,100),
				'harga' => $faker->numberBetween(100,1000),
				'expired_date' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+3 years', $timezone=null),
				'tanggal_produksi' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone=null),
			]);
		}    }
}
