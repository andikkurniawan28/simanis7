<?php

use App\Gudang;
use App\MataUang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $mata_uangs = [
            ["kode" => "IDR", "kurs" => 1, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
            ["kode" => "IDR", "kurs" => 2, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
            ["kode" => "IDR", "kurs" => 3, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
            ["kode" => "IDR", "kurs" => 4, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
            ["kode" => "IDR", "kurs" => 5, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
            ["kode" => "IDR", "kurs" => 6, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
            ["kode" => "IDR", "kurs" => 7, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
            ["kode" => "IDR", "kurs" => 8, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
            ["kode" => "IDR", "kurs" => 9, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
            ["kode" => "IDR", "kurs" => 10, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
            ["kode" => "IDR", "kurs" => 11, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
            ["kode" => "IDR", "kurs" => 12, "keterangan" => NULL, "tanggal" => date("Y-m-d") ],
        ];
        MataUang::insert($mata_uangs);

        $gudangs = [
            ["kode" => "A", "keterangan" => "Gudang A", "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => "B", "keterangan" => "Gudang B", "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => "C", "keterangan" => "Gudang C", "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => "D", "keterangan" => "Gudang D", "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
        ];
        Gudang::insert($gudangs);
    }
}
