<?php

use App\Pot;
use App\Usaha;
use App\Gudang;
use App\Satuan;
use App\Termin;
use App\Wilayah;
use App\Golongan;
use App\MataUang;
use App\Salesman;
use App\SubGolongan;
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
            ["kode" => "IDR", "kurs" => 1, "keterangan" => NULL, "tgl" => "2012-07-31" ],
            ["kode" => "USD", "kurs" => 9000, "keterangan" => NULL, "tgl" => "2012-07-31" ],
            ["kode" => "IDR", "kurs" => 9000, "keterangan" => NULL, "tgl" => "2013-01-01" ],
            ["kode" => "USD", "kurs" => 9700, "keterangan" => NULL, "tgl" => "2013-01-01" ],
            ["kode" => "USD", "kurs" => 12200, "keterangan" => NULL, "tgl" => "2013-12-20" ],
            ["kode" => "IDR", "kurs" => 1, "keterangan" => NULL, "tgl" => "2022-08-27" ],
            ["kode" => "IDR", "kurs" => 1, "keterangan" => NULL, "tgl" => "2023-06-21" ],
            ["kode" => "USD", "kurs" => 15000, "keterangan" => NULL, "tgl" => "2023-06-21" ],
            ["kode" => "USD", "kurs" => 15001, "keterangan" => NULL, "tgl" => "2023-06-20" ],
        ];
        MataUang::insert($mata_uangs);

        $gudangs = [
            ["kode" => strtoupper("pwd"), "keterangan" => strtoupper("pwd"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("lwg"), "keterangan" => strtoupper("lawang"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("kl"), "keterangan" => strtoupper("koleksi"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("ttr"), "keterangan" => strtoupper("tutur"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("lab"), "keterangan" => strtoupper("laboratorium pwd"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("sby"), "keterangan" => strtoupper("surabaya"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("ra1"), "keterangan" => strtoupper("ra1"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("ra2"), "keterangan" => strtoupper("ra2"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("pwa"), "keterangan" => strtoupper("pwd a"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("pwb"), "keterangan" => strtoupper("pwd b"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("pwc"), "keterangan" => strtoupper("pwd c"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("pwe"), "keterangan" => strtoupper("pwd e"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("pwf"), "keterangan" => strtoupper("pwd f"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("pwg"), "keterangan" => strtoupper("pwd g"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("pwh"), "keterangan" => strtoupper("pwd h"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("prd"), "keterangan" => strtoupper("pwd d"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("tta"), "keterangan" => strtoupper("tutur a"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("ttb"), "keterangan" => strtoupper("tutur b"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("ttc"), "keterangan" => strtoupper("tutur c"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("ttd"), "keterangan" => strtoupper("tutur d"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("ra3"), "keterangan" => strtoupper("ra 3"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("ra4"), "keterangan" => strtoupper("ra 4"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("ra5"), "keterangan" => strtoupper("ra 5"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("ra6"), "keterangan" => strtoupper("ra 6"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
            ["kode" => strtoupper("ra7"), "keterangan" => strtoupper("ra 7"), "omzet" => NULL, "jual" => NULL, "kodesc" => NULL],
        ];
        Gudang::insert($gudangs);

        $pots = [
            ["kode" => "-", "keterangan" => "-"],
            ["kode" => "3", "keterangan" => "3,5"],
            ["kode" => "1", "keterangan" => "1,5 - 1,7"],
            ["kode" => "2", "keterangan" => "2,5"],
            ["kode" => "4", "keterangan" => "4,5"],
            ["kode" => "K", "keterangan" => "KOMPOT"],
            ["kode" => "P", "keterangan" => "PAKIS"],
            ["kode" => "POT", "keterangan" => "POT"],
            ["kode" => "3.0", "keterangan" => "3,0"],
        ];
        Pot::insert($pots);

        $golongans = [
            ["kode" =>"AGL", "keterangan" =>"AGLAONEMA", "ppn" => 1.10],
            ["kode" =>"ANTH", "keterangan" =>"ANTHURIUM", "ppn" => 1.10],
            ["kode" =>"APT", "keterangan" =>"ANGGREK POTONG", "ppn" => 1.10],
            ["kode" =>"BBT", "keterangan" =>"BIBIT", "ppn" => 1.10],
            ["kode" =>"BKS", "keterangan" =>"BAKTERISIDA", "ppn" => 11.00],
            ["kode" =>"BS", "keterangan" =>"BULBOPHYLUM SPECIES", "ppn" => 1.10],
            ["kode" =>"BTL", "keterangan" =>"BOTOLAN/FLASK", "ppn" => 1.10],
            ["kode" =>"C", "keterangan" =>"COELOGYNE", "ppn" => 1.10],
            ["kode" =>"CM01", "keterangan" =>"CYMBIDIUM 1.5", "ppn" => 1.10],
            ["kode" =>"CM02", "keterangan" =>"CYMBIDIUM 2.5", "ppn" => 1.10],
            ["kode" =>"CM03", "keterangan" =>"CYMBIDIUM 3.5", "ppn" => 1.10],
            ["kode" =>"CMP", "keterangan" =>"CYMBIDIUM POT", "ppn" => 1.10],
            ["kode" =>"CMS", "keterangan" =>"CYMBIDIUM SPECIES", "ppn" => 1.10],
            ["kode" =>"CS", "keterangan" =>"COLOGYNE SPECIES", "ppn" => 1.10],
            ["kode" =>"CTL", "keterangan" =>"CATALEYA", "ppn" => 1.10],
            ["kode" =>"CTL1", "keterangan" =>"CATALEYA 1.5", "ppn" => 1.10],
            ["kode" =>"CTL2", "keterangan" =>"CATALEYA 2.5", "ppn" => 1.10],
            ["kode" =>"CTL3", "keterangan" =>"CATALEYA 3.5", "ppn" => 1.10],
            ["kode" =>"CTLK", "keterangan" =>"CATALEYA KOMPOT", "ppn" => 1.10],
            ["kode" =>"CTLP", "keterangan" =>"CATALEYA POT", "ppn" => 1.10],
            ["kode" =>"CYMB", "keterangan" =>"CYMBIDIUM", "ppn" => 1.10],
            ["kode" =>"DM", "keterangan" =>"DENDROBIUM HYBRID/CLONING", "ppn" => 1.10],
            ["kode" =>"DM01", "keterangan" =>"DENDROBIUM 1.5", "ppn" => 1.10],
            ["kode" =>"DM02", "keterangan" =>"DENDROBIUM 2.5", "ppn" => 1.10],
            ["kode" =>"DM03", "keterangan" =>"DENDROBIUM 3.5", "ppn" => 1.10],
            ["kode" =>"DM0K", "keterangan" =>"DENDROBIUM KOMPOT", "ppn" => 1.10],
            ["kode" =>"DMP", "keterangan" =>"DENDROBIUM HYBRID/CLONING POT", "ppn" => 1.10],
            ["kode" =>"DS", "keterangan" =>"DENDROBIUM SPECIES", "ppn" => 1.10],
            ["kode" =>"DS01", "keterangan" =>"DENDROBIUM SPECIES 1.5", "ppn" => 1.10],
            ["kode" =>"DS02", "keterangan" =>"DENDROBIUM SPECIES 2.5", "ppn" => 1.10],
            ["kode" =>"DS03", "keterangan" =>"DENDROBIUM SPECIES 3.5", "ppn" => 1.10],
            ["kode" =>"DS0K", "keterangan" =>"DENDROBIUM SPECIES KOMPOT", "ppn" => 1.10],
            ["kode" =>"DSP", "keterangan" =>"DENDROBIUM SPESIES POT", "ppn" => 1.10],
            ["kode" =>"ETC", "keterangan" =>"ETC", "ppn" => 11.00],
            ["kode" =>"FGS", "keterangan" =>"FUNGISIDA", "ppn" => 11.00],
            ["kode" =>"GHE", "keterangan" =>"GREEN HOUSE EQP", "ppn" => 11.00],
            ["kode" =>"IRS", "keterangan" =>"IRIGASI SYSTEM", "ppn" => 11.00],
            ["kode" =>"ISC", "keterangan" =>"INSECTISIDA", "ppn" => 11.00],
            ["kode" =>"MKRN", "keterangan" =>"MOKARANA", "ppn" => 1.10],
            ["kode" =>"N", "keterangan" =>"NEPENTHES", "ppn" => 1.10],
            ["kode" =>"ON01", "keterangan" =>"ONCDIUM 1.5", "ppn" => 1.10],
            ["kode" =>"ON02", "keterangan" =>"ONCDIUM 2.5", "ppn" => 1.10],
            ["kode" =>"ON03", "keterangan" =>"ONCDIUM 3.5", "ppn" => 1.10],
            ["kode" =>"ONC", "keterangan" =>"ONCIDIUM", "ppn" => 1.10],
            ["kode" =>"ONPOT", "keterangan" =>"ONCIDIUM POT", "ppn" => 1.10],
            ["kode" =>"OS", "keterangan" =>"OTHER SPECIES", "ppn" => 1.10],
            ["kode" =>"PAPH", "keterangan" =>"PAPHIOPEDILUM", "ppn" => 1.10],
            ["kode" =>"PAY", "keterangan" =>"POT ANYAM", "ppn" => 11.00],
            ["kode" =>"PCF", "keterangan" =>"POT COCO FIBER", "ppn" => 11.00],
            ["kode" =>"PCP", "keterangan" =>"POT COCO PEAT", "ppn" => 11.00],
            ["kode" =>"PDC", "keterangan" =>"POT DUCO", "ppn" => 11.00],
            ["kode" =>"PH", "keterangan" =>"PHALAENOPSIS", "ppn" => 1.10],
            ["kode" =>"PH01", "keterangan" =>"PHALAENOPSIS 1.5-1.7", "ppn" => 1.10],
            ["kode" =>"PH02", "keterangan" =>"PHALAENOPSIS 2.5", "ppn" => 1.10],
            ["kode" =>"PH03", "keterangan" =>"PHALAENOPSIS 3.0 / 3.5", "ppn" => 1.10],
            ["kode" =>"PH04", "keterangan" =>"PHALAENOPSIS 4.5", "ppn" => 1.10],
            ["kode" =>"PH0K", "keterangan" =>"PHALAENOPSIS KOMPOT", "ppn" => 1.10],
            ["kode" =>"PH0P", "keterangan" =>"PHALAENOPSIS POT", "ppn" => 1.10],
            ["kode" =>"PKK", "keterangan" =>"POT KERAMIK", "ppn" => 11.00],
            ["kode" =>"PKY", "keterangan" =>"POT KAYU", "ppn" => 11.00],
            ["kode" =>"PP02", "keterangan" =>"PAPHIOPEDILUM 2.5", "ppn" => 1.10],
            ["kode" =>"PP03", "keterangan" =>"PAPHIOPEDILUM 3.5", "ppn" => 1.10],
            ["kode" =>"PPK", "keterangan" =>"PUPUK", "ppn" => 11.00],
            ["kode" =>"PPL", "keterangan" =>"POT PLASTIK", "ppn" => 11.00],
            ["kode" =>"PPS", "keterangan" =>"POT PAKIS", "ppn" => 11.00],
            ["kode" =>"PS", "keterangan" =>"PHALAENOPSIS SPECIES", "ppn" => 1.10],
            ["kode" =>"PS01", "keterangan" =>"PHAL. SPECIES 1.5", "ppn" => 1.10],
            ["kode" =>"PS02", "keterangan" =>"PHAL. SPECIES 2.5", "ppn" => 1.10],
            ["kode" =>"PS03", "keterangan" =>"PHAL. SPECIES 3.5", "ppn" => 1.10],
            ["kode" =>"PS0K", "keterangan" =>"PHAL. SPESIES KOMPOT", "ppn" => 1.10],
            ["kode" =>"PTL", "keterangan" =>"POT TANAH LIAT", "ppn" => 11.00],
            ["kode" =>"PUV", "keterangan" =>"PLASTIC ULTRA VIOLET", "ppn" => 11.00],
            ["kode" =>"RHN", "keterangan" =>"RHYNCHOSTYLIS", "ppn" => 1.10],
            ["kode" =>"SPR", "keterangan" =>"SPRAYER", "ppn" => 11.00],
            ["kode" =>"TRY", "keterangan" =>"TRAY", "ppn" => 11.00],
            ["kode" =>"VND", "keterangan" =>"VANDA", "ppn" => 1.10],
            ["kode" =>"VS", "keterangan" =>"VANDA SPECIES", "ppn" => 1.10],
            ["kode" =>"WRG", "keterangan" =>"WARING", "ppn" => 11.00],
            ["kode" =>"ZH", "keterangan" =>"ZYGOPETHALUM", "ppn" => 1.10],
        ];
        Golongan::insert($golongans);

        $sub_golongans = [
            [ "kode" => "CHL", "keterangan" => "CHILE" ],
            [ "kode" => "CHN", "keterangan" => "CHN" ],
            [ "kode" => "IRJ", "keterangan" => "IRIAN JAYA" ],
            [ "kode" => "JWA", "keterangan" => "JAWA" ],
            [ "kode" => "KLM", "keterangan" => "KALIMANTAN" ],
            [ "kode" => "LKL", "keterangan" => "LOKAL" ],
            [ "kode" => "MLK", "keterangan" => "MALUKU" ],
            [ "kode" => "NZL", "keterangan" => "NEW ZEALAND" ],
            [ "kode" => "SLW", "keterangan" => "SULAWESI" ],
        ];
        SubGolongan::insert($sub_golongans);

        $satuans = [
            [ "kode" => "BALL", "keterangan" => "BALL"],
            [ "kode" => "BIJI", "keterangan" => "BIJI"],
            [ "kode" => "BKS", "keterangan" => "BKS"],
            [ "kode" => "BOX", "keterangan" => "BOX"],
            [ "kode" => "BTL", "keterangan" => "BTL"],
            [ "kode" => "DOS", "keterangan" => "DOS"],
            [ "kode" => "GL", "keterangan" => "GL"],
            [ "kode" => "KG", "keterangan" => "KG"],
            [ "kode" => "KLG", "keterangan" => "KLG"],
            [ "kode" => "KMP", "keterangan" => "KMP"],
            [ "kode" => "KOTAK", "keterangan" => "KOTAK"],
            [ "kode" => "KUNTUM", "keterangan" => "KUNTUM"],
            [ "kode" => "LEMBAR", "keterangan" => "LEMBAR"],
            [ "kode" => "M", "keterangan" => "M"],
            [ "kode" => "METER", "keterangan" => "METER"],
            [ "kode" => "PACK", "keterangan" => "PACK"],
            [ "kode" => "PCS", "keterangan" => "PCS"],
            [ "kode" => "PH", "keterangan" => "PH"],
            [ "kode" => "PHN", "keterangan" => "PHN"],
            [ "kode" => "POT", "keterangan" => "POT"],
            [ "kode" => "ROLL", "keterangan" => "ROLL"],
            [ "kode" => "SET", "keterangan" => "SET"],
            [ "kode" => "TGK", "keterangan" => "TGK"],
            [ "kode" => "TWN", "keterangan" => "TWN"],
            [ "kode" => "UNIT", "keterangan" => "UNIT"],
        ];
        Satuan::insert($satuans);

        $salesmen = [
            [ "kode" => "HK", "nama" => "HARTO KOLOPAKING", "alamat" => "JL. PUNGKUR ARGO NO.1 , LAWANG", "telepon" => "0341-426181"],
            [ "kode" => "SS", "nama" => "SANLY SUNJOTO", "alamat" => "JL. PUNGKUR ARGO NO.1 , LAWANG", "telepon" => "081- 23035631"],
            [ "kode" => "TL", "nama" => "TIFFANY LIEM", "alamat" => "JL. PUNGKUR ARGO NO.1 , LAWANG", "telepon" => "0341-426181"],
        ];
        Salesman::insert($salesmen);

        // $termins = [
        //     [ "kode" => "0", "keterangan" => "TUNAI", "lama" => 0	],
        //     [ "kode" => "3", "keterangan" => "3 HARI", "lama" => 3	],
        //     [ "kode" => "7", "keterangan" => "7 HARI", "lama" => 7	],
        //     [ "kode" => "14", "keterangan" => "14 HARI", "lama" => 14	],
        //     [ "kode" => "30", "keterangan" => "30 HARI", "lama" => 30	],
        //     [ "kode" => "45", "keterangan" => "45 HARI / 1.5 BULAN", "lama" => 45	],
        //     [ "kode" => "60", "keterangan" => "60 HARI", "lama" => 60	],

        // ];
        // Termin::insert($termins);

        // $wilayahs = [
        //     [ "kode" => "ABN", "keterangan" => "AMBON"],
        //     [ "kode" => "BAL", "keterangan" => "BALI"],
        //     [ "kode" => "BDN", "keterangan" => "BANDUNG"],
        //     [ "kode" => "BGR", "keterangan" => "BOGOR"],
        //     [ "kode" => "BJN", "keterangan" => "BOJONEGORO"],
        //     [ "kode" => "BJR", "keterangan" => "BANJARMASIN"],
        //     [ "kode" => "BKL", "keterangan" => "BENGKULU"],
        //     [ "kode" => "BKS", "keterangan" => "BEKASI"],
        //     [ "kode" => "BLP", "keterangan" => "BALIKPAPAN"],
        //     [ "kode" => "BLT", "keterangan" => "BLITAR"],
        //     [ "kode" => "BTN", "keterangan" => "BANTEN"],
        //     [ "kode" => "BYW", "keterangan" => "BANYUWANGI"],
        //     [ "kode" => "CHINA", "keterangan" => "CHINA"],
        //     [ "kode" => "CHL", "keterangan" => "CHILE"],
        //     [ "kode" => "DALIAN", "keterangan" => "DALIAN"],
        //     [ "kode" => "GRS", "keterangan" => "GRESIK"],
        //     [ "kode" => "HKG", "keterangan" => "HONGKONG"],
        //     [ "kode" => "IRJ", "keterangan" => "IRIAN JAYA"],
        //     [ "kode" => "JBN", "keterangan" => "JOMBANG"],
        //     [ "kode" => "JKT", "keterangan" => "JAKARTA"],
        //     [ "kode" => "JMB", "keterangan" => "JEMBER"],
        //     [ "kode" => "JWB", "keterangan" => "JAWA BARAT"],
        //     [ "kode" => "JWT", "keterangan" => "JAWA TENGAH"],
        //     [ "kode" => "KDR", "keterangan" => "KEDIRI"],
        //     [ "kode" => "KLM", "keterangan" => "KALIMANTAN"],
        //     [ "kode" => "KRN", "keterangan" => "KRIAN"],
        //     [ "kode" => "KTN", "keterangan" => "KERTOSONO"],
        //     [ "kode" => "LMG", "keterangan" => "LAMONGAN"],
        //     [ "kode" => "LMJ", "keterangan" => "LUMAJANG"],
        //     [ "kode" => "LMP", "keterangan" => "LAMPUNG"],
        //     [ "kode" => "LPN", "keterangan" => "LAMPUNG"],
        //     [ "kode" => "LWG", "keterangan" => "LAWANG"],
        //     [ "kode" => "MDN", "keterangan" => "MADIUN"],
        //     [ "kode" => "MDR", "keterangan" => "MADURA"],
        //     [ "kode" => "MJK", "keterangan" => "MOJOKERTO"],
        //     [ "kode" => "MKS", "keterangan" => "MAKASSAR"],
        //     [ "kode" => "MLG", "keterangan" => "MALANG"],
        //     [ "kode" => "NGJ", "keterangan" => "NGANJUK"],
        //     [ "kode" => "NTB", "keterangan" => "NUSA TENGGARA BARAT"],
        //     [ "kode" => "NTT", "keterangan" => "NUSA TENGGARA TIMUR"],
        //     [ "kode" => "PAR", "keterangan" => "PARE"],
        //     [ "kode" => "PDN", "keterangan" => "PADANG"],
        //     [ "kode" => "PKB", "keterangan" => "PEKANBARU"],
        //     [ "kode" => "PLM", "keterangan" => "PALEMBANG"],
        //     [ "kode" => "PND", "keterangan" => "PANDAAN"],
        //     [ "kode" => "PNG", "keterangan" => "PONOROGO"],
        //     [ "kode" => "PRB", "keterangan" => "PROBOLINGGO"],
        //     [ "kode" => "PSR", "keterangan" => "PASURUAN"],
        //     [ "kode" => "PTN", "keterangan" => "PONTIANAK"],
        //     [ "kode" => "SBW", "keterangan" => "SUMBAWA"],
        //     [ "kode" => "SBY", "keterangan" => "SURABAYA"],
        //     [ "kode" => "SDJ", "keterangan" => "SIDOARJO"],
        //     [ "kode" => "SLW", "keterangan" => "SULAWESI"],
        //     [ "kode" => "SMR", "keterangan" => "SEMARANG"],
        //     [ "kode" => "SMT", "keterangan" => "SUMATERA"],
        //     [ "kode" => "SOL", "keterangan" => "SOLO"],
        //     [ "kode" => "SPJ", "keterangan" => "SEPANJANG"],
        //     [ "kode" => "STB", "keterangan" => "SITUBONDO"],
        //     [ "kode" => "TBN", "keterangan" => "TUBAN"],
        //     [ "kode" => "TGL", "keterangan" => "TULUNGAGUNG"],
        //     [ "kode" => "TGN", "keterangan" => "TANGERANG"],
        //     [ "kode" => "THL", "keterangan" => "THAILAND"],
        //     [ "kode" => "TLG", "keterangan" => "TULUNGAGUNG"],
        //     [ "kode" => "TWN", "keterangan" => "TAIWAN"],
        //     [ "kode" => "WGP", "keterangan" => "WAINGAPU"],
        // ];
        // Wilayah::insert($wilayahs);

        // $usahas = [
        //     [ "kode" => "BKL", "keterangan" => "BENGKEL"],
        //     [ "kode" => "CV", "keterangan" => "PERSEKUTUAN COMANDITER"],
        //     [ "kode" => "HBY", "keterangan" => "HOBBY"],
        //     [ "kode" => "KBN", "keterangan" => "KEBUN"],
        //     [ "kode" => "KOP", "keterangan" => "KOPERASI"],
        //     [ "kode" => "LTD", "keterangan" => "TRADING"],
        //     [ "kode" => "PCT", "keterangan" => "PERCETAKAN"],
        //     [ "kode" => "PEM", "keterangan" => "PEMERINTAH"],
        //     [ "kode" => "PSO", "keterangan" => "PERSEORANGAN"],
        //     [ "kode" => "PT", "keterangan" => "PERSEROAN TERBATAS"],
        //     [ "kode" => "SKL", "keterangan" => "SEKOLAHAN"],
        //     [ "kode" => "SMK", "keterangan" => "SEKOLAH MENENGAH KEJURUAN"],
        //     [ "kode" => "UD", "keterangan" => "USAHA DAGANG"],
        //     [ "kode" => "UNV", "keterangan" => "UNIVERSITAS"],
        // ];
        // Usaha::insert($usahas);
    }
}
