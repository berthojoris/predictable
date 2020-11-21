<?php

namespace Database\Seeders;

use App\Models\Rumus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertIsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rumus::create([
            'type' => 'AS'
        ]);

        Rumus::create([
            'type' => 'KEPALA'
        ]);

        $rumus = Rumus::whereType('AS')->first();
        $asID = $rumus->id;

        collect([
            '3579',
            '4579',
            '2589',
            '2357',
            '3487',
            '0359',
            '4578',
            '3679',
            '0234',
            '0489'
        ])->each(function ($item, $key) use ($asID) {
            $nomor = $key + 1;
            DB::table('isis')->insert([
                'rumus_id' => $asID,
                'kode' => ($nomor == 10) ? 0 : $nomor,
                'nomor' => $item
            ]);
        });

        $kepala = Rumus::whereType('KEPALA')->first();
        $kepalaID = $kepala->id;

        collect([
            '046',
            '356',
            '126',
            '128',
            '026',
            '168',
            '135',
            '458',
            '179',
            '146'
        ])->each(function ($item, $key) use ($kepalaID) {
            $nomor = $key + 1;
            DB::table('isis')->insert([
                'rumus_id' => $kepalaID,
                'kode' => ($nomor == 10) ? 0 : $nomor,
                'nomor' => $item
            ]);
        });
    }
}
