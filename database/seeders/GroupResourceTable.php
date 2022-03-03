<?php

namespace Database\Seeders;

use App\Models\Setting\ItemResource;
use Illuminate\Database\Seeder;

class GroupResourceTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $resources = array(
        ['1', '01',	'00',	'00',	'UPAH PEKERJA'],
        ['1', '02',	'00',	'00',	'BATU DAN SEJENISNYA'],
        ['1', '03',	'00',	'00',	'TIANG PANCANG'],
        ['1', '04',	'00',	'00',	'SEMEN/READY MIX/ADMIXTURE'],
        ['1', '05',	'00',	'00',	'BESI/BAJA/ALUMINIUM'],
        ['1', '06',	'00',	'00',	'KAYU DAN SEJENISNYA'],
        ['1', '07',	'00',	'00',	'DINDING/LANTAI/PLAFOND'],
        ['1', '08',	'00',	'00',	'ATAP'],
        ['1', '09',	'00',	'00',	'CAT DAN SEJENISNYA'],
        ['1', '10',	'00',	'00',	'WATERPROVE'],
        ['1', '11',	'00',	'00',	'PERANCAH'],
        ['1', '01',	'01',	'00',	'KEPALA TUKANG CAT'],
        ['1', '02',	'01',	'00',	'BATA TRAS BEKISTING (HOLLOW BRICK)'],
        ['1', '03',	'01',	'00',	'TIANG PANCANG UK.40x40 CM PANJANG 17 s/d 18 M'],
        ['1', '04',	'01',	'00',	'ADMIXTURE (SUPER CEMENT EXTRA)'],
        ['1', '05',	'01',	'00',	'BAJA WF 300.150.65.9'],
        ['1', '06',	'01',	'00',	'KAYU/PAPAN KRUING (4/6,5/7,3/4,6/12,2/3,2/20)'],
        ['1', '07',	'01',	'00',	"AKUSTIK TYPE SERIES 5000 2'x4'x1/2"],
        ['1', '08',	'01',	'00',	'ASBES SEMEN GELOMBANG 210x108x0,5 cm'],
        ['1', '09',	'01',	'00',	'CAT TEMBOK SETARA ICI/DULUX'],
        ['1', '10',	'01',	'00',	'PEREKAT'],
        ['1', '11',	'01',	'00',	'PERANCAH KOLOM (VERTICAL FRAME)'],
        ['1', '01',	'02',	'00',	'KEPALA TUKANG KAYU'],
        ['1', '02',	'02',	'00',	'BATU BATA MERAH UK.21x10.5x4.5'],
        ['1', '04',	'02',	'00',	'FLOORHARDENER'],
        ['1', '05',	'02',	'00',	'BAJA C.150.25.2,5'],
        ['1', '06',	'02',	'00',	'KAYU KAMPER (2/3,6/7,4/6,3/4,6/12,2/20,8/12)'],
        ['1', '07',	'02',	'00',	'ASBES SEMEN'],
        ['1', '08',	'02',	'00',	'GENTENG FOSSANO, MARIDIONAL NATURAL'],
        ['1', '09',	'02',	'00',	'MENI BESI'],
        ['1', '10',	'02',	'00',	'WATERPROVING'],
        ['1', '11',	'02',	'00',	'PERANCAH SHEARWALL (BEKISTING PERRY)'],
        ['1', '01',	'03',	'00',	'KEPALA TUKANG BATU'],
        ['1', '02',	'03',	'00',	'BATU KALI'],
        ['1', '04',	'03',	'00',	'PC ABU-ABU'],
        ['1', '05',	'03',	'00',	'BESI BETON POLOS'],
        ['1', '06',	'03',	'00',	'PLYWOOD SUNGKAI 4ftx8ft, 18mm, 2 MUKA'],
        ['1', '07',	'03',	'00',   'CELCON JAYA 59x19x10 cm'],
        ['1',	'08',	'03',	'00',	'GENTENG FOSSANO, MARIDIONAL GLASUUR STD'],
        ['1',	'09',	'03',	'00',	'PAMUR TEMBOK'],
        ['1',	'10',	'03',	'00',	'WATERSTOP'],
        ['1',	'11',	'03',	'00',	'PERANCAH BALOK'],
        ['1',	'01',	'04',	'00',	'MANDOR'],
        ['1',	'02',	'04',	'00',	'PASIR BETON'],
        ['1',	'04',	'04',	'00',	'SLUMP 10'],
        ['1',	'05',	'04',	'00',	'BESI BETON ULIR'],
        ['1',	'06',	'04',	'00',	'LIST KAYU KAMPER'],
        ['1',	'07',	'04',	'00',	'GRANITO GUP B950 PATRICIA 40x40 POLISHED MCP'],
        ['1',	'08',	'04',	'00',	'GENTENG PRESS BETON'],
        ['1',	'11',	'04',	'00',	'SCAFFOLDING'],
        ['1',	'11',	'04',	'01',	'MAIN FRAME 1219x1930 mf 1219'],
        ['1',	'11',	'04',	'02',	'LEADER FRAME 1219x1200mm mf1212'],
        ['1',	'11',	'04',	'03',	'BEAM FRAME 1219x500mm bf 1205'],
        ['1',	'11',	'04',	'04',	'HORIZONTAL FRAME 1050x1829mm HF 1018'],
        ['1',	'11',	'04',	'05',	'BASE JACK 400mm, bj 40'],
        ['1',	'11',	'04',	'06',	'HEAD JACK 400mm, bj 60'],
        ['1',	'11',	'04',	'07',	'BASE PLATE 42 BP 42'],
        ['1',	'11',	'04',	'08',	'HEAD PLATE 42 HP 42'],
        ['1',	'11',	'04',	'09',	'JOINT PLATE 42 JP 42'],
        ['1',	'11',	'04',	'10',	'ARMLOCK (BERMACAM-MACAM UKURAN)'],
        ['1',	'11',	'04',	'11',	'CROSS BRACE (BERMACAM-MACAM UKURAN)'],
        ['1',	'11',	'04',	'12',	'PIPE SUPPORT 400,2755-400mm, Ps. 2740'],
        ['1',	'01',	'05',	'00',	'PEKERJA'],
        ['1',	'02',	'05',	'00',	'PASIR PASANG'],
        ['1',	'05',	'05',	'00',	'PLAT BAJA HITAM 4'],
        ['1',	'06',	'05',	'00',	'PROFIL KAYU KAMPER 5x5 cm'],
        ['1',	'07',	'05',	'00',	'GRANITO GRUP A810 AMINAH 40x40 POLISHED MCP'],
        ['1',	'08',	'05',	'00',	'GENTENG NOK'],
        ['1',	'01',	'06',	'00',	'TUKANG BESI'],
        ['1',	'02',	'06',	'00',	'SPLIT'],
        ['1',	'05',	'06',	'00',	'KAWAT BETON'],
        ['1',	'06',	'06',	'00',	'TRIPLEX 4ftx8ftx9mm'],
        ['1',	'07',	'06',	'00',	'GRANIT IMPPORT BALMORAL GREEN'],
        ['1',	'08',	'06',	'00',	'SENG GELOMBANG 180x90x0.5'],
        ['1',	'01',	'07',	'00',	'TUKANG KACA'],
        ['1',	'02',	'07',	'00',	'PAVING BLOK ABU-ABU TIPE 4.6 UKR.6x10,5x2'],
        ['1',	'05',	'07',	'00',	'PAKU SEGALA UKURAN (RATA-RATA)'],
        ['1',	'06',	'07',	'00',	'TRIPLEX 4ftx8ftx12mm/15mm'],
        ['1',	'07',	'07',	'00',	'GYPSUM IMPORT JAYABOARD METAL FURRING 9mm'],
        ['1',	'08',	'07',	'00',	'SIRAP 57x7 cm TEBAL 2-3mm'],
        ['1',	'01',	'08',	'00',	'TUKANG WALLPAPER'],
        ['1',	'05',	'08',	'00',	'SENG GELOMBANG 180x90x0,05'],
        ['1',	'07',	'08',	'00',	'GYPSUM IMPORT JAYABOARD METAL FURRING 13mm'],
        ['1',	'01',	'09',	'00',	'TUKANG CAT'],
        ['1',	'05',	'09',	'00',	'ALUMINIUM ATAP SWG 29(0.35mm) 1m, PROFILE:A,B,C,D'],
        ['1',	'07',	'09',	'00',	'KACA TEMPERED GLASS MAGITEMP 10" NON STD 3408x2134mm STOPSOL'],
        ['1',	'01',	'10',	'00',	'TUKANG KAYU'],
        ['1',	'07',	'10',	'00',	'KACA TEMPERED GLASS MAGITEMP 15" NON STD 3048x2134mm CLEAR'],
        ['1',	'01',	'11',	'00',	'TUKANG BATU'],
        ['1',	'07',	'11',	'00',	'KACA TEMPERED GLASS MAGITEMP 19" NON STD 3048x2134mm CLEAR'],
        ['1',	'01',	'12',	'00',	'TUKANG GALI'],
        ['1',	'07',	'12',	'00',	'KACA PANAZAP BRONZE/BLUE/GREEN/GREY 12mm'],
        ['1',	'07',	'13',	'00',	'KACA ASAHIMAS FLOAT GLASS POLOS/CLEAR 12mm'],
        ['1',	'07',	'14',	'00',	'KARPET IMPORT OPENING NIGHT (CUT PILE L=3.66m)'],
        ['1',	'07',	'15',	'00',	'KARPET LOKAL LONG LIVE (L=4.0m)'],
        ['1',	'07',	'16',	'00',	'LANTAI KAYU (FACY FLOOR) MOZAIK JATI (HH) 8x335x33'],
        ['1',	'07',	'17',	'00',	'KERAMIK MASTERINA PLAINT STD 40x40 M2S'],
        ['1',	'07',	'18',	'00',	'MARMER ALAM LOKAL TEBAL 15-18mm CREAMA 400x600mm'],
        ['1',	'07',	'19',	'00',	'MARMER IMPORT CREAMA MARFIL'],
        ['1',	'07',	'20',	'00',	'UBIN PC ABU-ABU RATA/BATA 20x20x2 cm'],
        ['1',	'07',	'21',	'00',	'WALL PAPER APHRODITE'],
        ['1',	'07',	'22',	'00',	'VINIL 30x30 TEBAL 1.6'],
        ['1',	'07',	'23',	'00',	'UBIN TERASO'],
        ['2',	'01',	'00',	'00',	'AC (AIR CONDITIONER)'],
        ['2',	'02',	'00',	'00',	'LIFT'],
        ['2',	'03',	'00',	'00',	'ESCALATOR'],
        ['2',	'04',	'00',	'00',	'GONDOLA'],
        ['2',	'05',	'00',	'00',	'PAGAR'],
        ['2',	'06',	'00',	'00',	'PROTEKSI API'],
        ['2',	'07',	'00',	'00',	'GENSET'],
        ['2',	'08',	'00',	'00',	'PABX'],
        ['2',	'09',	'00',	'00',	'SUMUR ARTESIS'],
        ['2',	'10',	'00',	'00',	'AIR PANAS'],
        ['2',	'11',	'00',	'00',	'LISTRIK'],
        ['2',	'12',	'00',	'00',	'PLUMBING'],
        ['2',	'13',	'00',	'00',	'PENANGKAL PETIR'],
        ['2',	'14',	'00',	'00',	'PENGOLAHAN LIMBAH'],
        ['2',	'15',	'00',	'00',	'TATA SUARA'],
        ['2',	'16',	'00',	'00',	'VIDEO INTERKOM'],
        ['2',	'17',	'00',	'00',	'TV (TELEVITION)'],
        ['2',	'01',	'01',	'00',	'AC SPLIT DAYA 2 PK'],
        ['2',	'02',	'01',	'01',	'PASSENGER LIFT, 1600 Kg'],
        ['2',	'02',	'01',	'00',	'LIFT'],
        ['2',	'02',	'01',	'02',	'SERVICE LIFT, 1800 Kg'],
        ['2',	'03',	'01',	'00',	'TYPE GS - EN 1200 x R.4000'],
        ['2',	'04',	'01',	'00',	'GONDOLA'],
        ['2',	'05',	'01',	'00',	'PAGAR BATAKO, HARGA BATAKO'],
        ['2',	'06',	'01',	'00',	'HYDRANT & SPRINGKLER'],
        ['2',	'06',	'01',	'01',	'FIRE PUMP'],
        ['2',	'06',	'01',	'02',	'PANEL POMPA'],
        ['2',	'06',	'01',	'03',	'CONDUIT'],
        ['2',	'06',	'01',	'04',	'VALVE DAN ASESORIS HYDRANT'],
        ['2',	'06',	'01',	'05',	'VALVE DAN ASESORIS SPRINGKLER'],
        ['2',	'06',	'01',	'06',	'PERPIPAAN FIRE HYDRANT'],
        ['2',	'06',	'01',	'07',	'PERPIPAAN SPRINGKLER'],
        ['2',	'06',	'01',	'08',	'PIPA RISER & RYTEM'],
        ['2',	'07',	'01',	'00',	'GENSET KAP. 100 KVA'],
        ['2',	'08',	'01',	'00',	'MAIN DISTRIBUTION FRAME TELEPON'],
        ['2',	'09',	'01',	'00',	'SCREEN (STAINLESS STEEL)'],
        ['2',	'10',	'01',	'00',	'BOILER (KAP. 860 Kg/jam)'],
        ['2',	'11',	'01',	'00',	'PANEL MVMDP 5 CUICIBLE'],
        ['2',	'12',	'01',	'00',	'POMPA AIR BERSIH'],
        ['2',	'13',	'01',	'00',	'TITIK PENANGKAL PETIR (EF)'],
        ['2',	'14',	'01',	'00',	'SEWAGE TREATMENT PLANT'],
        ['2',	'15',	'01',	'00',	'SELECTOR SWITCH'],
        ['2',	'16',	'01',	'00',	'KABEL NYM DALAM PVC UNTUK DETEKTOR'],
        ['2',	'17',	'01',	'00',	'M.A.T.V'],
        ['2',	'17',	'01',	'01',	'KABEL COAXIAL INDUK'],
        ['2',	'17',	'01',	'02',	'KEBEL COAXIAL ANAK'],
        ['2',	'17',	'01',	'03',	'CABINET RACK'],
        ['2',	'17',	'01',	'04',	'MATERIAL BANTU'],
        ['2',	'17',	'01',	'05',	'KABEL TRAY DENGAN ASESORIS'],
        ['2',	'01',	'02',	'00',	'AC WINDOW DAYA 2 PK'],
        ['2',	'02',	'02',	'00',	'EQUIPMENT'],
        ['2',	'02',	'02',	'01',	'INSTALASI DAYA PENUNJANG'],
        ['2',	'02',	'02',	'02',	'DUMP WEATHER 3/3'],
        ['2',	'02',	'02',	'03',	'ARD'],
        ['2',	'02',	'02',	'04',	'SUPERVISORY PANEL'],
        ['2',	'02',	'02',	'05',	'TEST/COM'],
        ['2',	'02',	'02',	'06',	'CAR 1600 Kg'],
        ['2',	'02',	'02',	'07',	'CAR 1800 Kg'],
        ['2',	'02',	'02',	'08',	'< 5'],
        ['2',	'02',	'02',	'09',	'5 - < 10'],
        ['2',	'02',	'02',	'10',	'10 - < 20'],
        ['2',	'02',	'02',	'11',	'> 20'],
        ['2',	'03',	'02',	'00',	'TYPE GS - EN 1200 x R.4500'],
        ['2',	'05',	'02',	'00',	'PAGAR BATA, HARGA BATU BATA'],
        ['2',	'06',	'02',	'00',	'ALARM KEBAKARAN'],
        ['2',	'06',	'02',	'01',	'MASTER CONTROL PANEL'],
        ['2',	'06',	'02',	'02',	'KABEL FEEDER (UNIT LENGKAP)'],
        ['2',	'06',	'02',	'03',	'KABEL LADDER'],
        ['2',	'06',	'02',	'04',	'DETEKTOR UNIT LENGKAP'],
        ['2',	'06',	'02',	'05',	'INSTALASI BEL LENGKAP'],
        ['2',	'07',	'02',	'00',	'DAILY TANK'],
        ['2',	'08',	'02',	'00',	'KEY-TEL LENGKAP'],
        ['2',	'09',	'02',	'00',	'PERPIPAAN'],
        ['2',	'10',	'02',	'00',	'POMPA AIR PANAS'],
        ['2',	'11',	'02',	'00',	'TRANSFORMATOR LENGKAP'],
        ['2',	'12',	'02',	'00',	'POMPA BOOSTER'],
        ['2',	'13',	'02',	'00',	'KABEL CO-AXIAL'],
        ['2',	'14',	'02',	'00',	'AJAR DIFUSER'],
        ['2',	'15',	'02',	'00',	'MAIN DISTRIBUTION FRAME'],
        ['2',	'16',	'02',	'00',	'JUNCTION BOX'],
        ['2',	'17',	'02',	'00',	'C.C.T.V'],
        ['2',	'17',	'02',	'01',	'KABEL FEEDER, SET LENGKAP'],
        ['2',	'17',	'02',	'02',	'FLEXIBLE COAXIAL CABLE, SET LENGKAP'],
        ['2',	'01',	'03',	'00',	'AC FLOOR DAYA 2 PK'],
        ['2',	'03',	'03',	'00',	'TYPE GS - EN 1200 x R.5000'],
        ['2',	'05',	'03',	'00',	'PAGAR BETON PRACETAK, HARGA PAGAR BETON PRACETAK T'],
        ['2',	'05',	'03',	'01',	'200'],
        ['2',	'05',	'03',	'02',	'220'],
        ['2',	'05',	'03',	'03',	'240'],
        ['2',	'05',	'03',	'04',	'250'],
        ['2',	'05',	'03',	'05',	'280'],
        ['2',	'05',	'03',	'06',	'300'],
        ['2',	'06',	'03',	'00',	'INTERCOM KEBAKARAN'],
        ['2',	'06',	'03',	'01',	'MAIN DISTRIBUTION INTERCOM KEBAKARAN'],
        ['2',	'06',	'03',	'02',	'MASTER CONTROL INTERCOM KEBAKARAN'],
        ['2',	'06',	'03',	'03',	'INTERKOM KEBAKARAN'],
        ['2',	'07',	'03',	'00',	'RADIATOR SILENCE'],
        ['2',	'08',	'03',	'00',	'KABEL FEEDER LENGKAP'],
        ['2',	'09',	'03',	'00',	'BAK KONTROL'],
        ['2',	'10',	'03',	'00',	'TANGKI AIR (KAP. 2000 lt)'],
        ['2',	'11',	'03',	'00',	'PANEL PUTR 1'],
        ['2',	'12',	'03',	'00',	'TANGKI ATAP AIR BERSIH'],
        ['2',	'13',	'03',	'00',	'TITIK GROUNDING ELEKTRODE'],
        ['2',	'14',	'03',	'00',	'COMMINUTOR (DGN. REDUCTION)'],
        ['2',	'15',	'03',	'00',	'KABEL FEEDER TATA SUARA LENGKAP'],
        ['2',	'16',	'03',	'00',	'RATE OF RISE (ROR) HEAD DETECTOR'],
        ['2',	'01',	'04',	'00',	'AC CENTRAL'],
        ['2',	'01',	'04',	'01',	'CENTRIFUGAL CHILLER'],
        ['2',	'01',	'04',	'02',	'AUTOTRANSFORMER STATER'],
        ['2',	'01',	'04',	'03',	'COOLING TOWER CAPACITY 550 TR'],
        ['2',	'01',	'04',	'04',	'CONDENSOR WATER PUMP'],
        ['2',	'01',	'04',	'05',	'CHILLER WATER PUMP'],
        ['2',	'01',	'04',	'06',	'AHU (AIR HANDLING UNIT)'],
        ['2',	'01',	'04',	'07',	'DUCTING CHILLER SYSTEM MENGGUNAKAN ISOLASI'],
        ['2',	'01',	'04',	'08',	'PANEL CHILLER, PUMP DAN COOLING TOWER'],
        ['2',	'01',	'04',	'09',	'PANEL AHU'],
        ['2',	'01',	'04',	'10',	'KABEL POWER UNTUK AHU DARI PANEL AHU KE AHU'],
        ['2',	'01',	'04',	'11',	'EF, SF'],
        ['2',	'01',	'04',	'12',	'AC SPLIT DUCT TYPE CAP. 50000 BTUH LENGKAP DNG. PE'],
        ['2',	'01',	'04',	'13',	'PANEL AC'],
        ['2',	'01',	'04',	'14',	'KABEL POWER'],
        ['2',	'01',	'04',	'15',	'DUCTING SUPPLY'],
        ['2',	'01',	'04',	'16',	'PERLENGKAPAN LAIN'],
        ['2',	'01',	'04',	'17',	'MANAGEMENT MODUL (UNTUK CONNECTING BAS)'],
        ['2',	'01',	'04',	'20',	'0.5'],
        ['2',	'01',	'04',	'21',	'1'],
        ['2',	'01',	'04',	'22',	'1.5'],
        ['2',	'01',	'04',	'23',	'2'],
        ['2',	'01',	'04',	'24',	'2.5'],
        ['2',	'01',	'04',	'25',	'3'],
        ['2',	'01',	'04',	'26',	'5'],
        ['2',	'01',	'04',	'27',	'10'],
        ['2',	'01',	'04',	'28',	'15'],
        ['2',	'01',	'04',	'29',	'20'],
        ['2',	'01',	'04',	'30',	'25'],
        ['2',	'01',	'04',	'31',	'30'],
        ['2',	'01',	'04',	'18',	'VENTILATION SYSTEM (DUCTING TANPA ISOLASI)'],
        ['2',	'01',	'04',	'19',	'PEKERJAAN DIFUSER, GRILE DAN DAMPER'],
        ['2',	'01',	'04',	'32',	'PARALEL CONTROL PANEL'],
        ['2',	'01',	'04',	'33',	'CABEL CONTROL THERMOSTAT, MOTOR VALVE, FLOW SWITCH NYMHY 4x0.75 mm2'],
        ['2',	'01',	'04',	'34',	'EF, SF'],
        ['2',	'01',	'04',	'35',	'KABEL-KABEL NYY'],
        ['2',	'01',	'04',	'36',	'AC SHOP-HOUSE'],
        ['2',	'01',	'04',	'37',	'PANEL AC'],
        ['2',	'01',	'04',	'38',	'PERPIPAAN'],
        ['2',	'01',	'04',	'39',	'THERMOSTAT LENGKAP'],
        ['2',	'03',	'04',	'01',	'ESCALATOR : LEBAR < 0.8 m'],
        ['2',	'03',	'04',	'02',	'ESCALATOR : LEBAR > 0.8 m'],
        ['2',	'05',	'04',	'00',	"PAGAR BESI, HARGA PAGAR BESI TINGGI 1 m PER M'"],
        ['2',	'05',	'04',	'01',	'100'],
        ['2',	'05',	'04',	'02',	'150'],
        ['2',	'05',	'04',	'03',	'200'],
        ['2',	'05',	'04',	'04',	'250'],
        ['2',	'05',	'04',	'05',	'300'],
        ['2',	'06',	'04',	'01',	'JOCKEY PUMP'],
        ['2',	'06',	'04',	'02',	'FIRE PUMP'],
        ['2',	'06',	'04',	'03',	'PRESSURE TANK'],
        ['2',	'06',	'04',	'05',	'KABEL-KABEL'],
        ['2',	'06',	'04',	'06',	'DRAIN TEST'],
        ['2',	'06',	'04',	'07',	'MAIN DISTRIBUTOR FRAME'],
        ['2',	'06',	'04',	'08',	'MASTER GENERAL ALARM'],
        ['2',	'06',	'04',	'09',	'JUCTION BOX FIRE ALARM'],
        ['2',	'06',	'04',	'10',	'DETEKTOR UNIT LENGKAP'],
        ['2',	'06',	'04',	'11',	'ALARAM BEL'],
        ['2',	'06',	'04',	'12',	'TITIK PANGKAL MANUAL'],
        ['2',	'06',	'04',	'13',	'INSTALASI BEL LENGKAP'],
        ['2',	'07',	'04',	'00',	'TESTING & COMMISIONING'],
        ['2',	'08',	'04',	'00',	'KABEL ITC LENGKAP'],
        ['2',	'09',	'04',	'00',	'MOBILISASI/DEMOBILISASI'],
        ['2',	'10',	'04',	'00',	'PLATE HEAD EXCHANGER'],
        ['2',	'11',	'04',	'00',	'PANEL CAPASITOR BANK P'],
        ['2',	'12',	'04',	'00',	'POMPA SUMPIT/SUMP PUMP'],
        ['2',	'14',	'04',	'00',	'BAR SCREEN KASAR (DNG. DEMTERING RAMP & TRANSFER G'],
        ['2',	'15',	'04',	'00',	'KABEL TRAY'],
        ['2',	'16',	'04',	'00',	'GAS DETECTOR'],
        ['2',	'01',	'05',	'01',	'JPB2 - KANTOR'],
        ['2',	'01',	'05',	'02',	'JPB7 - HOTEL'],
        ['2',	'01',	'05',	'03',	'BIAYA PER M2 KAMAR'],
        ['2',	'01',	'05',	'04',	'BIAYA PER M2 RUANGAN LAIN'],
        ['2',	'01',	'05',	'05',	'BIAYA PER M2 RUANGAN APARTEMEN'],
        ['2',	'01',	'05',	'06',	'JPB4 - PUSAT PERBELANJAAN'],
        ['2',	'01',	'05',	'07',	'RUMAH SAKIT'],
        ['2',	'01',	'05',	'08',	'JPB13 - APARTEMEN'],
        ['2',	'01',	'05',	'09',	'BANGUNAN LAIN'],
        ['2',	'01',	'05',	'10',	'BIAYA PER M2'],
        ['2',	'05',	'05',	'00',	'PAGAR BRC, HARGA PAGAR BRC TINGGI 1m PER M'],
        ['2',	'07',	'05',	'00',	'PANEL KONTROL GENSET DAN AMF'],
        ['2',	'08',	'05',	'00',	'IDF - TEL'],
        ['2',	'09',	'05',	'00',	'PERIZINAN PDAM DAN GEOLOGI'],
        ['2',	'10',	'05',	'00',	'WATER SOFTENER (KAP 12lt/m)'],
        ['2',	'11',	'05',	'00',	'PANEL'],
        ['2',	'12',	'05',	'00',	'SUBMERSIBLE SEWAGE PUMP'],
        ['2',	'13',	'05',	'00',	'KABEL KONTROL NYM'],
        ['2',	'14',	'05',	'00',	'BAR SCREEN HALUS (DNG. DEMTERING RAMP & TRANSTER G'],
        ['2',	'15',	'05',	'00',	'JUNCTION BOX TATA SUARA'],
        ['2',	'16',	'05',	'00',	'ELEKTRIK LOCK KONTROL PANEL'],
        ['2',	'05',	'06',	'00',	'PAGAR BATAKO'],
        ['2',	'05',	'06',	'01',	'BATAKO'],
        ['2',	'05',	'06',	'02',	'KOLOM BETON'],
        ['2',	'05',	'06',	'03',	'MATERIAL/ALAT'],
        ['2',	'05',	'06',	'04',	'UPAH'],
        ['2',	'07',	'06',	'00',	'SYSTEM PEREDAM'],
        ['2',	'08',	'06',	'00',	'MATERIAL BANTU'],
        ['2',	'09',	'06',	'00',	'VALVE SET LENGKAP'],
        ['2',	'10',	'06',	'00',	'STORAGE PUMP (KAP 15 m3)'],
        ['2',	'11',	'06',	'00',	'INSTALASI PENERANGAN'],
        ['2',	'12',	'06',	'00',	'PT-P DNG. KOMPONEN LENGKAP'],
        ['2',	'14',	'06',	'00',	'GATE FLOW CONTROL FLOAT'],
        ['2',	'15',	'06',	'00',	'CEILING SPEAKER'],
        ['2',	'16',	'06',	'00',	'DOOR ENTRANCE UNIT'],
        ['2',	'07',	'07',	'00',	'SALURAN GAS BUANG'],
        ['2',	'08',	'07',	'00',	'TESTING & COMMISIONING'],
        ['2',	'09',	'07',	'00',	'INSTALASI PANEL BOX AND WATER LEVEL'],
        ['2',	'10',	'07',	'00',	'ALAT UKUR'],
        ['2',	'11',	'07',	'00',	'ARMATUR SET'],
        ['2',	'12',	'07',	'00',	'GATE VALVE'],
        ['2',	'14',	'07',	'00',	'SURFACE SKIMMER (DNG. VERTIKAL ADJUSTER)'],
        ['2',	'15',	'07',	'00',	'INSTALASI PERLENGKAPAN SPEAKER'],
        ['2',	'16',	'07',	'00',	'KABEL SET LENGKAP'],
        ['2',	'07',	'08',	'00',	'PEMIPAAN BAHAN BAKAR'],
        ['2',	'08',	'08',	'00',	'IJIN PENYAMBUNGAN KE PERUMTEL'],
        ['2',	'09',	'08',	'00',	'MATERIAL BANTU, TESTING, COMMISIONING'],
        ['2',	'10',	'08',	'00',	'ELECTRIC PUMP ( KAP 20 LT/M )'],
        ['2',	'11',	'08',	'00',	'GROUNDING SYSTEM UNTUK MVMDP'],
        ['2',	'12',	'08',	'00',	'PRESSURE TANK'],
        ['2',	'14',	'08',	'00',	'SLUDGE RECIRCULITON'],
        ['2',	'16',	'08',	'00',	'FIXED DETECTOR'],
        ['2',	'07',	'09',	'00',	'ALAT BANTU'],
        ['2',	'10',	'09',	'00',	'WATER LEVEL CONTROL LENGKAP'],
        ['2',	'11',	'09',	'00',	'GROUNDING SYSTEM UNTUK PUTR DAN PT CAP BANK'],
        ['2',	'12',	'09',	'00',	'WATER LEVEL CONTROL LENGKAP'],
        ['2',	'14',	'09',	'00',	'CHIOLIFIER (DNG. REDUCTION GEAR TRAINS)'],
        ['2',	'07',	'10',	'01',	'KAPASITAS < 100 KVA'],
        ['2',	'07',	'10',	'02',	'KAPASITAS 100 - < 250 KVA'],
        ['2',	'07',	'10',	'03',	'KAPASITAS 250 - < 500 KVA'],
        ['2',	'07',	'10',	'04',	'KAPASITAS >= 500 KVA'],
        ['2',	'10',	'10',	'00',	'HAND PUMP ( KAP 8 LT/M )'],
        ['2',	'11',	'10',	'00',	'BANK CONTROL'],
        ['2',	'12',	'10',	'00',	'PT PAB KE PAB/DAW'],
        ['2',	'14',	'10',	'00',	'METRING PUMP (CHEMICAL PUMP)'],
        ['2',	'10',	'11',	'00',	'DAILY TANK ( KAP 500 LT )'],
        ['2',	'11',	'11',	'00',	'KABEL LEDDER (RUANG TRAFO DAN RUANG PANEL)'],
        ['2',	'12',	'11',	'00',	'CHECK VALVE'],
        ['2',	'14',	'11',	'00',	'EFLUENT PUMP (DNG. MANIFOLD N/R)'],
        ['2',	'10',	'12',	'00',	'TABUNG GAS ( KAP 50 KG )'],
        ['2',	'11',	'12',	'00',	'BIAYA PENYAMBUNGAN LISTRIK PLN'],
        ['2',	'12',	'12',	'00',	'ASESORIS PLUMBING SITE'],
        ['2',	'14',	'12',	'00',	'PLATE SETTLER'],
        ['2',	'10',	'13',	'00',	'SALURAN GAS BUANG'],
        ['2',	'12',	'13',	'00',	'ASESORIS PLUMBING AIR HUJAN'],
        ['2',	'14',	'13',	'00',	'PANEL CONTROL STP'],
        ['2',	'10',	'14',	'00',	'MATERIAL BANTU'],
        ['2',	'12',	'14',	'00',	'STAINER'],
        ['2',	'14',	'14',	'00',	'VENTILATING VAN'],
        ['2',	'10',	'15',	'00',	'PERPIPAAN AIR PANAS'],
        ['2',	'12',	'15',	'00',	'FOOT VALVE'],
        ['2',	'14',	'15',	'00',	'FILTER FEED PUMP'],
        ['2',	'10',	'16',	'00',	'JPB2'],
        ['2',	'12',	'16',	'00',	'FLEXIBLE JOINT'],
        ['2',	'14',	'16',	'00',	'SAND FILTER'],
        ['2',	'10',	'17',	'00',	'JPB4'],
        ['2',	'12',	'17',	'00',	'PRESUARE GAUGE'],
        ['2',	'14',	'17',	'00',	'CARBON FILTER'],
        ['2',	'10',	'18',	'00',	'JPB5'],
        ['2',	'12',	'18',	'00',	'WATER LEVEL SWITCH'],
        ['2',	'14',	'18',	'00',	'PERPIPAAN DAN FITTING'],
        ['2',	'10',	'19',	'00',	'JPB7'],
        ['2',	'12',	'19',	'00',	'PRESUARE SWITCH'],
        ['2',	'14',	'19',	'00',	'PERKABELAN LENGKAP'],
        ['2',	'10',	'20',	'00',	'JPB12'],
        ['2',	'12',	'20',	'00',	'FLOATER'],
        ['2',	'14',	'20',	'00',	'INSTALASI TITIK LAMPU DLM HIP CONDUIT'],
        ['2',	'10',	'21',	'00',	'JPB13'],
        ['2',	'12',	'21',	'00',	'MATERIAL BANTU'],
        ['2',	'14',	'21',	'00',	'LAMPU TL 1x36 W TYPE WATER'],
        ['2',	'12',	'22',	'00',	'WATER HEATER'],
        ['2',	'14',	'22',	'00',	'FANCET/KRAN AIR'],
        ['2',	'12',	'23',	'00',	'TESTING & COMMISIONING'],
        ['2',	'12',	'24',	'00',	'PERPIPAAN AIR BERSIH'],
        ['2',	'12',	'25',	'00',	'PERPIPAAN AIR KOTOR'],
        ['2',	'12',	'26',	'00',	'PERPIPAAN AIR VENT'],
        ['2',	'12',	'27',	'00',	'PERPIPAAN AIR BERSIH DLM SHAFT'],
        ['2',	'12',	'28',	'00',	'PERPIPAAN AIR KOTOR DLM SHAFT'],
        ['2',	'12',	'29',	'00',	'PIPA UTAMA DLM SHAFT'],
        ['2',	'12',	'30',	'00',	'PIPA AIR VENT DLM SHAFT'],
        ['3',	'01',	'00',	'00',	'MATERIAL DINDING DALAM'],
        ['3',	'02',	'00',	'00',	'MATERIAL DINDING LUAR'],
        ['3',	'03',	'00',	'00',	'FINISHING DINDING DALAM'],
        ['3',	'04',	'00',	'00',	'FINISHING DINDING LUAR'],
        ['3',	'05',	'00',	'00',	'PENUTUP LANGIT-LANGIT'],
        ['3',	'06',	'00',	'00',	'ATAP'],
        ['3',	'07',	'00',	'00',	'PENUTUP LANTAI'],
        ['3',	'01',	'01',	'00',	'PASANGAN DINDING 1/2 BATU (1:3)'],
        ['3',	'02',	'01',	'00',	'PASANGAN DINDING 1/2 BATU (1:3)'],
        ['3',	'03',	'01',	'00',	'PLESTERAN+ACIAN DINDING (1:3)'],
        ['3',	'04',	'01',	'00',	'GRANIT IMPORT'],
        ['3',	'05',	'01',	'00',	'GYPSUM'],
        ['3',	'06',	'01',	'00',	'ATAP BETON'],
        ['3',	'06',	'01',	'01',	'PEMBESIAN'],
        ['3',	'06',	'01',	'02',	'PENGECORAN'],
        ['3',	'07',	'01',	'00',	'GRANIT IMPORT'],
        ['3',	'01',	'02',	'00',	'GYPSUM IMPORT'],
        ['3',	'02',	'02',	'00',	'KACA IMPORT'],
        ['3',	'03',	'02',	'00',	'KACA IMPORT'],
        ['3',	'04',	'02',	'00',	'MARMER IMPORT'],
        ['3',	'05',	'02',	'00',	'AKUSTIK'],
        ['3',	'06',	'02',	'00',	'ATAP ASBES SEMEN GELOMBANG'],
        ['3',	'07',	'02',	'00',	'MARMER IMPORT'],
        ['3',	'01',	'03',	'00',	'GYPSUM LOKAL'],
        ['3',	'02',	'03',	'00',	'PASANGAN CELCON'],
        ['3',	'03',	'03',	'00',	'KACA LOKAL'],
        ['3',	'04',	'03',	'00',	'KACA IMPORT'],
        ['3',	'05',	'03',	'00',	'ASBES SEMEN'],
        ['3',	'06',	'03',	'00',	'ATAP GENTENG FOSSANO'],
        ['3',	'07',	'03',	'00',	'MARMER LOKAL'],
        ['3',	'01',	'04',	'00',	'PLYWOOD'],
        ['3',	'02',	'04',	'00',	'BETON PRA CETAK'],
        ['3',	'02',	'04',	'01',	'BEKISTING'],
        ['3',	'02',	'04',	'02',	'PEMBESIAN'],
        ['3',	'02',	'04',	'03',	'PENGECORAN'],
        ['3',	'03',	'04',	'00',	'FINISHING DINDING DALAM WALLPAPER'],
        ['3',	'04',	'04',	'00',	'MARMER LOKAL'],
        ['3',	'05',	'04',	'00',	'TRIPLEK (CAT)'],
        ['3',	'06',	'04',	'00',	'ATAP GENTENG PRESS BETON'],
        ['3',	'07',	'04',	'00',	'GRANIT LOKAL'],
        ['3',	'01',	'05',	'00',	'TRIPLEX'],
        ['3',	'02',	'05',	'00',	'DINDING SENG'],
        ['3',	'03',	'05',	'00',	'FINISHING DINDING DALAM CAT'],
        ['3',	'04',	'05',	'00',	'GRANIT LOKAL'],
        ['3',	'06',	'05',	'00',	'ATAP SENG GELOMBANG'],
        ['3',	'07',	'05',	'00',	'PASANGAN KERAMIK LOKAL'],
        ['3',	'02',	'06',	'00',	'DINDING KAYU'],
        ['3',	'04',	'06',	'00',	'KERAMIK LOKAL 40x40'],
        ['3',	'06',	'06',	'00',	'ATAP SIRAP'],
        ['3',	'03',	'07',	'00',	'GRANIT IMPORT'],
        ['3',	'06',	'07',	'00',	'ATAP GENTENG BIASA'],
        ['3',	'03',	'08',	'00',	'MARMER IMPORT'],
        ['3',	'07',	'08',	'00',	'VYNIL'],
        ['3',	'03',	'09',	'00',	'MARMER LOKAL'],
        ['3',	'04',	'09',	'00',	'KACA LOKAL'],
        ['3',	'07',	'09',	'00',	'KARPET IMPORT (CUT PILE L=3.66m)'],
        ['3',	'03',	'10',	'00',	'GRANIT LOKAL'],
        ['3',	'04',	'10',	'00',	'FINISHING DINDING LUAR CAT'],
        ['3',	'07',	'10',	'00',	'KARPET LOKAL (L=4.0m)'],
        ['3',	'03',	'11',	'00',	'KERAMIK LOKAL 40x40'],
        ['3',	'07',	'11',	'00',	'LANTAI KAYU (FACY FLOOR)'],
        ['3',	'07',	'12',	'00',	'PASANGAN UBIN PC ABU-ABU'],
        ['3',	'07',	'14',	'00',	'LANTAI SEMEN'],
        ['4',	'01',	'00',	'00',	'PEKERJAAN PERSIAPAN'],
        ['4',	'02',	'00',	'00',	'PEKERJAAN SUB STRUKTUR'],
        ['4',	'03',	'00',	'00',	'PEKERJAAN SUPER STRUKTUR'],
        ['4',	'01',	'01',	'00',	'PAGAR PEMBATAS'],
        ['4',	'02',	'01',	'00',	'TIANG PANCANG'],
        ['4',	'03',	'01',	'00',	'PLAT LANTAI'],
        ['4',	'03',	'01',	'01',	'BEKISTING'],
        ['4',	'03',	'01',	'02',	'PEMBESIAN'],
        ['4',	'03',	'01',	'03',	'PENGECORAN'],
        ['4',	'01',	'02',	'00',	'PERALATAN SITE'],
        ['4',	'02',	'02',	'00',	'PENGGALIAN (EXCAVATION)'],
        ['4',	'03',	'02',	'00',	'BALOK LANTAI'],
        ['4',	'03',	'02',	'01',	'BEKISTING'],
        ['4',	'03',	'02',	'02',	'PEMBESIAN'],
        ['4',	'03',	'02',	'03',	'PENGECORAN'],
        ['4',	'01',	'03',	'00',	'LAIN-LAIN'],
        ['4',	'01',	'03',	'01',	'DIREKSI KEET 24m2 ATAP SENG'],
        ['4',	'01',	'03',	'02',	'AIR KERJA'],
        ['4',	'01',	'03',	'03',	'LISTRIK KERJA'],
        ['4',	'01',	'03',	'04',	'MOB DAN DEMOB PERALATAN'],
        ['4',	'01',	'03',	'05',	'PEMBERSIHAN LAPANGAN'],
        ['4',	'01',	'03',	'06',	'DEWATERING'],
        ['4',	'02',	'03',	'00',	'PEMOTONGAN TIANG PANCANG'],
        ['4',	'03',	'03',	'00',	'KOLOM'],
        ['4',	'03',	'03',	'01',	'BEKISTING'],
        ['4',	'03',	'03',	'02',	'PEMBESIAN'],
        ['4',	'03',	'03',	'03',	'PENGECORAN'],
        ['4',	'01',	'04',	'00',	'PEMASANGAN BOUWPLANK'],
        ['4',	'02',	'04',	'00',	'PILE CAP'],
        ['4',	'02',	'04',	'01',	'PENGGALIAN'],
        ['4',	'02',	'04',	'02',	'URUGAN PASIR'],
        ['4',	'02',	'04',	'03',	'LANTAI KERJA TEBAL 15mm'],
        ['4',	'02',	'04',	'04',	'BEKISTING'],
        ['4',	'02',	'04',	'05',	'WATERPROOVING'],
        ['4',	'02',	'04',	'06',	'PEMBESIAN'],
        ['4',	'02',	'04',	'07',	'PENGECORAN K-350'],
        ['4',	'02',	'04',	'08',	'PONDASI BATU KALI'],
        ['4',	'03',	'04',	'00',	'SHEAR WALL'],
        ['4',	'03',	'04',	'01',	'BEKISTING'],
        ['4',	'03',	'04',	'02',	'PEMBESIAN'],
        ['4',	'03',	'04',	'03',	'PENGECORAN'],
        ['4',	'02',	'05',	'00',	'TIE BEAM'],
        ['4',	'02',	'05',	'01',	'PENGGALIAN'],
        ['4',	'02',	'05',	'02',	'URUGAN PASIR'],
        ['4',	'02',	'05',	'03',	'LANTAI KERJA'],
        ['4',	'02',	'05',	'04',	'BEKISTING'],
        ['4',	'02',	'05',	'05',	'WATERPROOVING'],
        ['4',	'02',	'05',	'06',	'PEMBESIAN'],
        ['4',	'02',	'05',	'07',	'PENGECORAN'],
        ['4',	'03',	'05',	'00',	'TANGGA'],
        ['4',	'03',	'05',	'01',	'BEKISTING'],
        ['4',	'03',	'05',	'02',	'PEMBESIAN'],
        ['4',	'03',	'05',	'03',	'PENGECORAN'],
        ['4',	'02',	'06',	'00',	'RETAINING WALL'],
        ['4',	'02',	'06',	'01',	'BEKISTING'],
        ['4',	'02',	'06',	'02',	'WATERPROOVING'],
        ['4',	'02',	'06',	'03',	'PEMBESIAN'],
        ['4',	'02',	'06',	'04',	'PENGECORAN'],
        ['4',	'02',	'07',	'00',	'LANTAI BASEMEN'],
        ['4',	'02',	'07',	'01',	'URUGAN PASIR'],
        ['4',	'02',	'07',	'02',	'LANTAI KERJA'],
        ['4',	'02',	'07',	'03',	'BEKISTING'],
        ['4',	'02',	'07',	'04',	'WATERPROOVING'],
        ['4',	'02',	'07',	'05',	'PEMBESIAN'],
        ['4',	'02',	'07',	'06',	'PENGECORAN'],
        ['4',	'02',	'08',	'00',	'KOLOM BASEMEN'],
        ['4',	'02',	'08',	'01',	'BEKISTING'],
        ['4',	'02',	'08',	'02',	'PEMBESIAN'],
        ['4',	'02',	'08',	'03',	'PENGECORAN'],
        ['4',	'02',	'09',	'00',	'SHEAR WALL'],
        ['4',	'02',	'09',	'01',	'BEKISTING'],
        ['4',	'02',	'09',	'02',	'PEMBESIAN'],
        ['4',	'02',	'09',	'03',	'PENGECORAN'],
        ['4',	'02',	'10',	'00',	'TANGGA BASEMEN'],
        ['4',	'02',	'10',	'01',	'BEKISTING'],
        ['4',	'02',	'10',	'02',	'PEMBESIAN'],
        ['4',	'02',	'10',	'03',	'PENGECORAN'],
        ['4',	'02',	'11',	'00',	'DISPOSAL'],
        ['4',	'02',	'12',	'00',	'BACKFILLING'],
        ['7',	'01',	'00',	'00',	'PEKERJAAN PERSIAPAN'],
        ['7',	'02',	'00',	'00',	'PEKERJAAN SUB STRUKTUR'],
        ['7',	'03',	'00',	'00',	'PEKERJAAN SUPER STRUKTUR (KONSTRUKSI BETON)'],
        ['7',	'04',	'00',	'00',	'KONSTRUKSI KAYU'],
        ['7',	'01',	'01',	'00',	'Pagar Pembatas'],
        ['7',	'02',	'01',	'00',	'Fondasi Plat'],
        ['7',	'02',	'01',	'01',	'Penggalian (excavation)'],
        ['7',	'02',	'01',	'02',	'Urugan Pasir'],
        ['7',	'02',	'01',	'03',	'Lantai Kerja Tebal 15 mm'],
        ['7',	'02',	'01',	'04',	'Bekisting'],
        ['7',	'02',	'01',	'05',	'Pembesian'],
        ['7',	'02',	'01',	'06',	'Pengecoran'],
        ['7',	'02',	'01',	'07',	'Backfilling'],
        ['7',	'03',	'01',	'00',	'Kolom'],
        ['7',	'03',	'01',	'01',	'Bekisting'],
        ['7',	'03',	'01',	'02',	'Pembesian'],
        ['7',	'03',	'01',	'03',	'Pengecoran'],
        ['7',	'04',	'01',	'00',	'Kolom'],
        ['7',	'01',	'02',	'00',	'Pemasangan Bouwplank'],
        ['7',	'02',	'02',	'00',	'Fondasi Batu Kali'],
        ['7',	'02',	'02',	'01',	'Penggalian (excavation)'],
        ['7',	'02',	'02',	'02',	'Urugan Pasir'],
        ['7',	'02',	'02',	'03',	'Lantai Kerja Tebal 15 mm'],
        ['7',	'02',	'02',	'04',	'Pondasi Batu Kali'],
        ['7',	'02',	'02',	'05',	'Backfilling'],
        ['7',	'03',	'02',	'00',	'Ring Balk'],
        ['7',	'03',	'02',	'01',	'Bekisting'],
        ['7',	'03',	'02',	'02',	'Pembesian'],
        ['7',	'03',	'02',	'03',	'Pengecoran'],
        ['7',	'04',	'02',	'00',	'Ring Balk'],
        ['7',	'01',	'03',	'00',	'Pembersihan'],
        ['7',	'02',	'03',	'00',	'Sloof'],
        ['7',	'02',	'03',	'01',	'Bekisting'],
        ['7',	'02',	'03',	'02',	'Pembesian'],
        ['7',	'02',	'03',	'03',	'Pengecoran'],
        ['7',	'03',	'03',	'00',	'Tangga'],
        ['7',	'03',	'03',	'01',	'Bekisting'],
        ['7',	'03',	'03',	'02',	'Pembesian'],
        ['7',	'03',	'03',	'03',	'Pengecoran'],
        ['7',	'04',	'03',	'00',	'Tangga'],
        ['7',	'03',	'04',	'00',	'Plat Lantai'],
        ['7',	'03',	'04',	'01',	'Bekisting'],
        ['7',	'03',	'04',	'02',	'Pembesian'],
        ['7',	'03',	'04',	'03',	'Pengecoran'],
        ['7',	'04',	'04',	'00',	'Plat Lantai'],
        ['9',	'40',	'00',	'00',	'AIR CONDITIONING (AC)'],
        ['9',	'41',	'00',	'00',	'LIFT'],
        ['9',	'42',	'00',	'00',	'ESCALATOR'],
        ['9',	'43',	'00',	'00',	'PAGAR'],
        ['9',	'44',	'00',	'00',	'PROTEKSI API'],
        ['9',	'45',	'00',	'00',	'GENSET'],
        ['9',	'46',	'00',	'00',	'PABX'],
        ['9',	'47',	'00',	'00',	'SUMUR ARTESIS'],
        ['9',	'48',	'00',	'00',	'AIR PANAS'],
        ['9',	'49',	'00',	'00',	'LISTRIK'],
        ['9',	'51',	'00',	'00',	'PENANGKAL PETIR'],
        ['9',	'52',	'00',	'00',	'PENGOLAHAN LIMBAH'],
        ['9',	'53',	'00',	'00',	'TATA SUARA'],
        ['9',	'54',	'00',	'00',	'VIDEO INTERKOM'],
        ['9',	'55',	'00',	'00',	'TELEVISI (TV)'],
        ['9',	'40',	'01',	'00',	'AC Split'],
        ['9',	'40',	'01',	'02',	'Daya 1 PK'],
        ['9',	'40',	'01',	'03',	'Daya 1,5 PK'],
        ['9',	'40',	'01',	'04',	'Daya 2 PK'],
        ['9',	'40',	'01',	'05',	'Daya 2,5 PK'],
        ['9',	'40',	'01',	'06',	'Daya 3 PK'],
        ['9',	'41',	'01',	'00',	'Passenger Lift'],
        ['9',	'41',	'01',	'01',	'< 5 Lantai'],
        ['9',	'41',	'01',	'02',	'5 - < 10 Lantai'],
        ['9',	'41',	'01',	'03',	'10 - < 20 Lantai'],
        ['9',	'41',	'01',	'04',	'> 20 Lantai'],
        ['9',	'42',	'01',	'00',	'Lebar < 0,8 m'],
        ['9',	'43',	'01',	'00',	'Pagar Batako'],
        ['9',	'43',	'01',	'01',	'Tinggi s/d 1 m'],
        ['9',	'43',	'01',	'02',	'Tinggi > 1 m s/d 1,5 m'],
        ['9',	'43',	'01',	'03',	'Tinggi > 1,5 m s/d 2 m'],
        ['9',	'43',	'01',	'04',	'Tinggi > 2 m s/d 2,5 m'],
        ['9',	'43',	'01',	'05',	'Tinggi > 2,5 m s/d 3 m'],
        ['9',	'44',	'01',	'00',	'Hydrant'],
        ['9',	'45',	'01',	'00',	'< 100'],
        ['9',	'46',	'01',	'00',	'Biaya Sistem PABX'],
        ['9',	'47',	'01',	'00',	'Biaya Sumur Artesis'],
        ['9',	'49',	'01',	'00',	'JPB 1'],
        ['9',	'51',	'01',	'00',	'Biaya Sistem Penangkal Petir'],
        ['9',	'53',	'01',	'00',	'Biaya Sistem Tata Suara'],
        ['9',	'54',	'01',	'00',	'Biaya Sistem Video Interkom'],
        ['9',	'55',	'01',	'00',	'M.A.T.V'],
        ['9',	'40',	'02',	'00',	'AC Window'],
        ['9',	'40',	'02',	'01',	'Daya 0,5 PK'],
        ['9',	'40',	'02',	'02',	'Daya 1 PK'],
        ['9',	'40',	'02',	'03',	'Daya 1,5 PK'],
        ['9',	'40',	'02',	'04',	'Daya 2 PK'],
        ['9',	'41',	'02',	'00',	'Service Lift'],
        ['9',	'41',	'02',	'01',	'< 5 Lantai'],
        ['9',	'41',	'02',	'02',	'5 - < 10 Lantai'],
        ['9',	'41',	'02',	'03',	'10 - < 20 Lantai'],
        ['9',	'41',	'02',	'04',	'> 20 Lantai'],
        ['9',	'42',	'02',	'00',	'Lebar > 0,8 m'],
        ['9',	'43',	'02',	'01',	'Tinggi s/d 1 m'],
        ['9',	'43',	'02',	'02',	'Tinggi > 1 m s/d 1,5 m'],
        ['9',	'43',	'02',	'03',	'Tinggi > 1,5 m s/d 2 m'],
        ['9',	'43',	'02',	'04',	'Tinggi > 2 m s/d 1 m'],
        ['9',	'43',	'02',	'05',	'Tinggi > 2,5 m s/d 3 m'],
        ['9',	'43',	'02',	'00',	'Pagar Bata'],
        ['9',	'44',	'02',	'00',	'Sprinkler'],
        ['9',	'45',	'02',	'00',	'100 - < 250'],
        ['9',	'48',	'02',	'00',	'JPB 2'],
        ['9',	'49',	'02',	'00',	'JPB 2, 9, 16'],
        ['9',	'52',	'02',	'00',	'JPB 2, 16'],
        ['9',	'55',	'02',	'00',	'C.C.T.V'],
        ['9',	'40',	'03',	'00',	'AC Floor'],
        ['9',	'40',	'03',	'04',	'Daya 2 PK'],
        ['9',	'40',	'03',	'05',	'Daya 2,5 PK'],
        ['9',	'40',	'03',	'06',	'Daya 3 PK'],
        ['9',	'40',	'03',	'07',	'Daya 5 PK'],
        ['9',	'40',	'03',	'08',	'Daya 10 PK'],
        ['9',	'40',	'03',	'09',	'Daya 15 PK'],
        ['9',	'40',	'03',	'10',	'Daya 20 PK'],
        ['9',	'40',	'03',	'11',	'Daya 25 PK'],
        ['9',	'40',	'03',	'12',	'Daya 30 PK'],
        ['9',	'43',	'03',	'01',	'Tinggi 2 m'],
        ['9',	'43',	'03',	'02',	'Tinggi 2,2 m'],
        ['9',	'43',	'03',	'03',	'Tinggi 2,4 m'],
        ['9',	'43',	'03',	'04',	'Tinggi 2,5 m'],
        ['9',	'43',	'03',	'05',	'Tinggi 2,8 m'],
        ['9',	'43',	'03',	'06',	'Tinggi 3 m'],
        ['9',	'43',	'03',	'00',	'Pagar Beton Pracetak'],
        ['9',	'44',	'03',	'00',	'Alarm'],
        ['9',	'45',	'03',	'00',	'250 - < 500'],
        ['9',	'49',	'03',	'00',	'JPB 3, 8'],
        ['9',	'40',	'04',	'00',	'AC Central'],
        ['9',	'40',	'04',	'01',	'JPB 2'],
        ['9',	'40',	'04',	'03',	'JPB 7 Kamar'],
        ['9',	'40',	'04',	'04',	'JPB 7 Ruangan Lain'],
        ['9',	'40',	'04',	'05',	'JPB 4'],
        ['9',	'40',	'04',	'07',	'JPB 5 Kamar'],
        ['9',	'40',	'04',	'08',	'JPB 5 Ruangan Lain'],
        ['9',	'40',	'04',	'10',	'JPB 13 Ruang Apartemen'],
        ['9',	'40',	'04',	'11',	'JPB 13 Ruang Lain'],
        ['9',	'40',	'04',	'13',	'Bangunan Lain'],
        ['9',	'43',	'04',	'01',	'Tinggi s/d 1 m'],
        ['9',	'43',	'04',	'02',	'Tinggi > 1 m s/d 1,5 m'],
        ['9',	'43',	'04',	'03',	'Tinggi > 1,5 m s/d 2 m'],
        ['9',	'43',	'04',	'04',	'Tinggi > 2 m s/d 2,5 m'],
        ['9',	'43',	'04',	'05',	'Tinggi > 2,5 m s/d 3 m'],
        ['9',	'43',	'04',	'00',	'Pagar Besi'],
        ['9',	'44',	'04',	'00',	'Intercom'],
        ['9',	'45',	'04',	'00',	'>= 500'],
        ['9',	'48',	'04',	'00',	'JPB 4'],
        ['9',	'49',	'04',	'00',	'JPB 4, 6, 14'],
        ['9',	'52',	'04',	'00',	'JPB 3, 4, 8'],
        ['9',	'43',	'05',	'01',	'Tinggi s/d 1 m'],
        ['9',	'43',	'05',	'02',	'Tinggi > 1 m s/d 1,5 m'],
        ['9',	'43',	'05',	'03',	'Tinggi > 1,5 m s/d 2 m'],
        ['9',	'43',	'05',	'04',	'Tinggi > 2 m s/d 2,5 m'],
        ['9',	'43',	'05',	'05',	'Tinggi > 2,5 m s/d 3 m'],
        ['9',	'43',	'05',	'00',	'Pagar BRC'],
        ['9',	'48',	'05',	'00',	'JPB 5'],
        ['9',	'52',	'05',	'00',	'JPB 5'],
        ['9',	'48',	'07',	'00',	'JPB 7'],
        ['9',	'49',	'07',	'00',	'JPB 7'],
        ['9',	'52',	'07',	'00',	'JPB 7'],
        ['9',	'48',	'12',	'00',	'JPB 12'],
        ['9',	'52',	'12',	'00',	'JPB 12'],
        ['9',	'48',	'13',	'00',	'JPB 13'],
        ['9',	'49',	'13',	'00',	'JPB 5, 13'],
        ['9',	'52',	'13',	'00',	'JPB 13']
    );
    public function run()
    {

        foreach ($this->resources as $v) {
            ItemResource::create([
                'kd_jenis_pekerjaan' => $v[0],
                'kd_group_resource' => $v[1],
                'kd_spek' => $v[2],
                'kd_det_pek' => $v[3],
                'nama_item_resource' => $v[4]
            ]);
        }
    }
}
