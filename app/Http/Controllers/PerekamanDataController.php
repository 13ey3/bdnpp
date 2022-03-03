<?php

namespace App\Http\Controllers;

use App\Http\Traits\NopTrait;
use App\Http\Traits\ResponseDatagrid;
use App\Models\Perekaman\BangunanObjek;
use App\Models\Perekaman\DataObjek;
use App\Models\Perekaman\Fasilitas;
use App\Models\Perekaman\KomponenKhusus;
use App\Models\Perekaman\Langit;
use App\Models\Perekaman\MaterialDindingDalam;
use App\Models\Perekaman\MaterialDindingLuar;
use App\Models\Perekaman\PelapisDindingDalam;
use App\Models\Perekaman\PelapisDindingLuar;
use App\Models\Perekaman\PelapisLantai;
use App\Models\Setting\ItemResource;
use App\Models\Setting\RefJpb;
use Illuminate\Http\Request;
use DB;

class PerekamanDataController extends Controller
{
    use NopTrait, ResponseDatagrid;

    public function index()
    {
        return view('perekaman.index', [
            'jpbs' => RefJpb::where('kd_jpb', '!=', '01')->orderBy('kd_jpb')->get()
        ]);
    }

    public function create()
    {
        $data = [
            'jpbs' => RefJpb::where('kd_jpb', '!=', '01')->orderBy('kd_jpb')->get(),
            'materi_dinding_dlm' => config('konstant.MDD'),
            'materi_dinding_luar' => config('konstant.MDL'),
            'pelapis_dinding_dlm' => config('konstant.PDD'),
            'pelapis_dinding_luar' => config('konstant.PDL'),
            'langit_langit' => config('konstant.LANGIT'),
            'floors' => config('konstant.LANATAI'),
            'pendingin' => ItemResource::getPendingin(),
        ];

        return view('perekaman.create', $data);
    }

    public function store(Request $request)
    {
        $nop = $this->nopToArray($request->nop);
        // dd($request);
        try {
            $in_dataobjek = [
                'kd_prov' => $nop['kd_prov'],
                'kd_dati' => $nop['kd_dati'],
                'kd_kecamatan' => $nop['kd_kecamatan'],
                'kd_kelurahan' => $nop['kd_kelurahan'],
                'kd_blok' => $nop['kd_blok'],
                'no_urut' => $nop['no_urut'],
                'kd_jenis' => $nop['kd_jns'],
                'nama_wp' => $request->nama_wp,
                'jalan_op' => $request->jalan_op,
                'no_jalan_op' => $request->no_jalan_op,
                'rt_op' => $request->rt_op,
                'rw_op' => $request->rw_op,
                'jml_bng' => $request->jml_bng
            ];

            $dataObjek = DataObjek::create($in_dataobjek);

            $in_bangunan_objek = [
                'objek_id' => $dataObjek->id,
                'user_id' => auth()->user()->id,
                'no_bng' => $request->no_bng,
                'kd_jpb' => $request->kd_jpb,
                'kondisi' => $request->kondisi,
                'thn_bangun' => $request->thn_bangun,
                'thn_renov' => is_null($request->thn_renov) ? '0' : '$request->thn_renov',
                'jml_lantai' => $request->jml_lantai,
                'jml_basement' => is_null($request->jml_basement) ? '0' : $request->jml_basement,
                'luas_bng' => $request->luas_bng,
                'luas_bng_lain' => is_null($request->luas_bng_lain) ? '0' : $request->luas_bng_lain,
                'luas_basement' => is_null($request->luas_basement) ? '0' : $request->luas_basement,
                'jenis_struktur' => $request->jenis_struktur,
                'atap' => $request->jenis_atap
            ];

            $dataBangunan = BangunanObjek::create($in_bangunan_objek);

            $in_mdd = [
                'bangunan_id' => $dataBangunan->id,
                'gyp_imp' => isset($request->mdd_gyp_imp) ? '1' : '0',
                'gyp_imp_str' => isset($request->mdd_gyp_imp_struktur) ? '1' : '0',
                'gyp_imp_bsm' => isset($request->mdd_gyp_imp_basement) ? '1' : '0',
                'gyp_lkl' => isset($request) ? '1' : '0',
                'gyp_lkl_str' => isset($request->mdd_gyp_lkl_struktur) ? '1' : '0',
                'gyp_lkl_bsm' => isset($request->mdd_gyp_lkl_basement) ? '1' : '0',
                'plywood' => isset($request->mdd_plywood) ? '1' : '0',
                'plywood_str' => isset($request->mdd_plywood_struktur) ? '1' : '0',
                'plywood_bsm' => isset($request->mdd_plywood_basement) ? '1' : '0',
                'triplex' => isset($request->mdd_triplex) ? '1' : '0',
                'triplex_str' => isset($request->mdd_triplex_struktur) ? '1' : '0',
                'triplex_bsm' => isset($request->mdd_triplex_basement) ? '1' : '0',
                'batu' => isset($request->mdd_batu) ? '1' : '0',
                'batu_str' => isset($request->mdd_batu_struktur) ? '1' : '0',
                'batu_bsm' => isset($request->mdd_batu_basement) ? '1' : '0'
            ];

            $dataMdd = MaterialDindingDalam::create($in_mdd);

            $in_mdl = [
                'bangunan_id' => $dataBangunan->id,
                'batu' => isset($request->mdl_batu) ? '1' : '0',
                'batu_lantai' => is_null($request->lantai_mdl_batu) ? 0 : $request->lantai_mdl_batu,
                'kaca' => isset($request->mdl_kaca) ? '1' : '0',
                'kaca_lantai' => is_null($request->lantai_mdl_kaca) ? 0 : $request->lantai_mdl_kaca,
                'celcon' => isset($request->mdl_celcon) ? '1' : '0',
                'celcon_lantai' => is_null($request->lantai_mdl_celcon) ? 0 : $request->lantai_mdl_celcon,
                'beton' => isset($request->mdl_beton) ? '1' : '0',
                'beton_lantai' => is_null($request->lantai_mdl_beton) ? 0 : $request->lantai_mdl_beton,
                'seng' => isset($request->mdl_seng) ? '1' : '0',
                'seng_lantai' => is_null($request->lantai_mdl_seng) ? 0 : $request->lantai_mdl_seng,
                'kayu' => isset($request->mdl_kayu) ? '1' : '0',
                'kayu_lantai' => is_null($request->lantai_mdl_kayu) ? 0 : $request->lantai_mdl_kayu
            ];

            $dataMdd = MaterialDindingLuar::create($in_mdl);

            $in_pdd = [
                'bangunan_id' => $dataBangunan->id,
                'kaca_imp' => isset($request->pdd_kaca_imp) ? '1' : '0',
                'kaca_imp_str' => isset($request->pdd_kaca_imp_struktur) ? '1' : '0',
                'kaca_imp_bsm' => isset($request->pdd_kaca_imp_basement) ? '1' : '0',
                'kaca_imp_lantai' => is_null($request->lantai_pdd_kaca_imp) ? 0 : $request->lantai_pdd_kaca_imp,
                'kaca_lkl' => isset($request->pdd_kaca_lkl) ? '1' : '0',
                'kaca_lkl_str' => isset($request->pdd_kaca_lkl_struktur) ? '1' : '0',
                'kaca_lkl_bsm' => isset($request->pdd_kaca_lkl_basement) ? '1' : '0',
                'kaca_lkl_lantai' => is_null($request->lantai_pdd_kaca_lkl) ? 0 : $request->lantai_pdd_kaca_lkl,
                'wallpap' => isset($request->pdd_wallpap) ? '1' : '0',
                'wallpap_str' => isset($request->pdd_wallpap_struktur) ? '1' : '0',
                'wallpap_bsm' => isset($request->pdd_wallpap_basement) ? '1' : '0',
                'wallpap_lantai' => is_null($request->lantai_pdd_wallpap) ? 0 : $request->lantai_pdd_wallpap,
                'cat' => isset($request->pdd_cat) ? '1' : '0',
                'cat_str' => isset($request->pdd_cat_struktur) ? '1' : '0',
                'cat_bsm' => isset($request->pdd_cat_basement) ? '1' : '0',
                'cat_lantai' => is_null($request->lantai_pdd_cat) ? 0 : $request->lantai_pdd_cat,
                'granit_imp' => isset($request->pdd_granit_imp) ? '1' : '0',
                'granit_imp_str' => isset($request->pdd_granit_imp_struktur) ? '1' : '0',
                'granit_imp_bsm' => isset($request->pdd_granit_imp_basement) ? '1' : '0',
                'granit_imp_lantai' => is_null($request->lantai_pdd_granit_imp) ? 0 : $request->lantai_pdd_granit_imp,
                'granit_lkl' => isset($request->pdd_granit_lkl) ? '1' : '0',
                'granit_lkl_str' => isset($request->pdd_granit_lkl_struktur) ? '1' : '0',
                'granit_lkl_bsm' => isset($request->pdd_granit_lkl_basement) ? '1' : '0',
                'granit_lkl_lantai' => is_null($request->lantai_pdd_granit_lkl) ? 0 : $request->lantai_pdd_granit_lkl,
                'marmer_imp' => isset($request->pdd_marmer_imp) ? '1' : '0',
                'marmer_imp_str' => isset($request->pdd_marmer_imp_struktur) ? '1' : '0',
                'marmer_imp_bsm' => isset($request->pdd_marmer_imp_basement) ? '1' : '0',
                'marmer_imp_lantai' => is_null($request->lantai_pdd_marmer_imp) ? 0 : $request->lantai_pdd_marmer_imp,
                'marmer_lkl' => isset($request->pdd_marmer_lkl) ? '1' : '0',
                'marmer_lkl_str' => isset($request->pdd_marmer_lkl_struktur) ? '1' : '0',
                'marmer_lkl_bsm' => isset($request->pdd_marmer_lkl_basement) ? '1' : '0',
                'marmer_lkl_lantai' => is_null($request->lantai_pdd_marmer_lkl) ? 0 : $request->lantai_pdd_marmer_lkl,
                'keramik' => isset($request->pdd_keramik) ? '1' : '0',
                'keramik_str' => isset($request->pdd_keramik_struktur) ? '1' : '0',
                'keramik_bsm' => isset($request->pdd_keramik_basement) ? '1' : '0',
                'keramik_lantai' => is_null($request->lantai_pdd_keramik) ? 0 : $request->lantai_pdd_keramik
            ];

            $dataPdd = PelapisDindingDalam::create($in_pdd);

            $in_pdl = [
                'bangunan_id' => $dataBangunan->id,
                'kaca_imp' => isset($request->pdl_kaca_imp) ? '1' : '0',
                'kaca_imp_lantai' => is_null($request->lantai_pdl_kaca_imp) ? 0 : $request->lantai_pdl_kaca_imp,
                'kaca_lkl' => isset($request->pdl_kaca_lkl) ? '1' : '0',
                'kaca_lkl_lantai' => is_null($request->lantai_pdl_kaca_lkl) ? 0 : $request->lantai_pdl_kaca_lkl,
                'cat' => isset($request->pdl_cat) ? '1' : '0',
                'cat_lantai' => is_null($request->lantai_pdl_cat) ? 0 : $request->lantai_pdl_cat,
                'granit_imp' => isset($request->pdl_granit_imp) ? '1' : '0',
                'granit_imp_lantai' => is_null($request->lantai_pdl_granit_imp) ? 0 : $request->lantai_pdl_granit_imp,
                'granit_lkl' => isset($request->pdl_granit_lkl) ? '1' : '0',
                'granit_lkl_lantai' => is_null($request->lantai_pdl_granit_lkl) ? 0 : $request->lantai_pdl_granit_lkl,
                'marmer_imp' => isset($request->pdl_marmer_imp) ? '1' : '0',
                'marmer_imp_lantai' => is_null($request->lantai_pdl_marmer_imp) ? 0 : $request->lantai_pdl_marmer_imp,
                'marmer_lkl' => isset($request->pdl_marmer_lkl) ? '1' : '0',
                'marmer_lkl_lantai' => is_null($request->lantai_pdl_marmer_lkl) ? 0 : $request->lantai_pdl_marmer_lkl,
                'kramik_lkl' => isset($request->pdl_keramik) ? '1' : '0',
                'kramik_lkl_lantai' => is_null($request->lantai_pdl_keramik) ? 0 : $request->lantai_pdl_keramik,
            ];

            $dataPdl = PelapisDindingLuar::create($in_pdl);

            $in_langit = [
                'bangunan_id' => $dataBangunan->id,
                'gypsum' => isset($request->lgt_gypsum) ? '1' : '0',
                'gypsum_str' => isset($request->lgt_gypsum_struktur) ? '1' : '0',
                'gypsum_bsm' => isset($request->lgt_gypsum_basement) ? '1' : '0',
                'gypsum_lantai' => is_null($request->lantai_lgt_gypsum) ? 0 : $request->lantai_lgt_gypsum,
                'akustik' => isset($request->lgt_akustik) ? '1' : '0',
                'akustik_str' => isset($request->lgt_akustik_struktur) ? '1' : '0',
                'akustik_bsm' => isset($request->lgt_akustik_basement) ? '1' : '0',
                'akustik_lantai' => is_null($request->lantai_pdl_kaca_lkl) ? 0 : $request->lantai_pdl_kaca_lkl,
                'asbes' => isset($request->lgt_asbes) ? '1' : '0',
                'asbes_str' => isset($request->lgt_asbes_struktur) ? '1' : '0',
                'asbes_bsm' => isset($request->lgt_asbes_basement) ? '1' : '0',
                'asbes_lantai' => is_null($request->lantai_pdl_kaca_lkl) ? 0 : $request->lantai_pdl_kaca_lkl,
                'triplek' => isset($request->lgt_triplek) ? '1' : '0',
                'triplek_str' => isset($request->lgt_triplek_struktur) ? '1' : '0',
                'triplek_bsm' => isset($request->lgt_triplek_basement) ? '1' : '0',
                'triplek_lantai' => is_null($request->lantai_pdl_kaca_lkl) ? 0 : $request->lantai_pdl_kaca_lkl,
            ];

            $dataLangit = Langit::create($in_langit);

            $in_pl = [
                'bangunan_id' => $dataBangunan->id,
                'granit_imp' => isset($request->pl_granit_imp) ? '1' : '0',
                'granit_imp_str' => isset($request->pl_granit_imp_struktur) ? '1' : '0',
                'granit_imp_bsm' => isset($request->pl_granit_imp_basement) ? '1' : '0',
                'granit_imp_lantai' => is_null($request->lantai_pl_granit_imp) ? 0 : $request->lantai_pl_granit_imp,
                'granit_lkl' => isset($request->pl_granit_lkl) ? '1' : '0',
                'granit_lkl_str' => isset($request->pl_granit_lkl_struktur) ? '1' : '0',
                'granit_lkl_bsm' => isset($request->pl_granit_lkl_basement) ? '1' : '0',
                'granit_lkl_lantai' => is_null($request->lantai_pl_granit_lkl) ? 0 : $request->lantai_pl_granit_lkl,
                'marmer_imp' => isset($request->pl_marmer_imp) ? '1' : '0',
                'marmer_imp_str' => isset($request->pl_marmer_imp_struktur) ? '1' : '0',
                'marmer_imp_bsm' => isset($request->pl_marmer_imp_basement) ? '1' : '0',
                'marmer_imp_lantai' => is_null($request->lantai_pl_marmer_imp) ? 0 : $request->lantai_pl_marmer_imp,
                'marmer_lkl' => isset($request->pl_marmer_lkl) ? '1' : '0',
                'marmer_lkl_str' => isset($request->pl_marmer_lkl_struktur) ? '1' : '0',
                'marmer_lkl_bsm' => isset($request->pl_marmer_lkl_basement) ? '1' : '0',
                'marmer_lkl_lantai' => is_null($request->lantai_pl_marmer_lkl) ? 0 : $request->lantai_pl_marmer_lkl,
                'kramik' => isset($request->pl_keramik) ? '1' : '0',
                'kramik_str' => isset($request->pl_keramik_struktur) ? '1' : '0',
                'kramik_bsm' => isset($request->pl_keramik_basement) ? '1' : '0',
                'kramik_lantai' => is_null($request->lantai_pl_keramik) ? 0 : $request->lantai_pl_keramik,
                'vynil' => isset($request->pl_vynil) ? '1' : '0',
                'vynil_str' => isset($request->pl_vynil_struktur) ? '1' : '0',
                'vynil_bsm' => isset($request->pl_vynil_basement) ? '1' : '0',
                'vynil_lantai' => is_null($request->lantai_pl_vynil) ? 0 : $request->lantai_pl_vynil,
                'karpet_imp' => isset($request->pl_karpet_imp) ? '1' : '0',
                'karpet_imp_str' => isset($request->pl_karpet_imp_struktur) ? '1' : '0',
                'karpet_imp_bsm' => isset($request->pl_karpet_imp_basement) ? '1' : '0',
                'karpet_imp_lantai' => is_null($request->lantai_pl_karpet_imp) ? 0 : $request->lantai_pl_karpet_imp,
                'karpet_lkl' => isset($request->pl_karpet_lkl) ? '1' : '0',
                'karpet_lkl_str' => isset($request->pl_karpet_lkl_struktur) ? '1' : '0',
                'karpet_lkl_bsm' => isset($request->pl_karpet_lkl_basement) ? '1' : '0',
                'karpet_lkl_lantai' => is_null($request->lantai_pl_karpet_lkl) ? 0 : $request->lantai_pl_karpet_lkl,
                'kayu' => isset($request->pl_kayu) ? '1' : '0',
                'kayu_str' => isset($request->pl_kayu_struktur) ? '1' : '0',
                'kayu_bsm' => isset($request->pl_kayu_basement) ? '1' : '0',
                'kayu_lantai' => is_null($request->lantai_pl_kayu) ? 0 : $request->lantai_pl_kayu,
                'ubinpc' => isset($request->pl_ubinpc) ? '1' : '0',
                'ubinpc_str' => isset($request->pl_ubinpc_struktur) ? '1' : '0',
                'ubinpc_bsm' => isset($request->pl_ubinpc_basement) ? '1' : '0',
                'ubinpc_lantai' => is_null($request->lantai_pl_ubinpc) ? 0 : $request->lantai_pl_ubinpc,
                'semen' => isset($request->pl_semen) ? '1' : '0',
                'semen_str' => isset($request->pl_semen_struktur) ? '1' : '0',
                'semen_bsm' => isset($request->pl_semen_basement) ? '1' : '0',
                'semen_lantai' => is_null($request->lantai_pl_semen) ? 0 : $request->lantai_pl_semen
            ];

            $dataPl = PelapisLantai::create($in_pl);

            $in_fasilitas = [
                'bangunan_id' => $dataBangunan->id,
                'ac_split' => is_null($request->ac_split_jml) ? 0 : $request->ac_split_jml,
                'ac_split_pk' => is_null($request->ac_split_pk) ? 0 : $request->ac_split_pk,
                'ac_window' => is_null($request->ac_window_jml) ? 0 : $request->ac_window_jml,
                'ac_window_pk' => is_null($request->ac_window_pk) ? 0 : $request->ac_window_pk,
                'ac_floor' => is_null($request->ac_floor_jml) ? 0 : $request->ac_floor_jml,
                'ac_floor_pk' => is_null($request->ac_floor_pk) ? 0 : $request->ac_floor_pk,
                'ac_central' => isset($request->ac_central) ? '1' : '0',
                'lift_oranag' => is_null($request->lift_oranag) ? 0 : $request->lift_penumpang,
                'lift_barang' => is_null($request->lift_barang) ? 0 : $request->lift_barang,
                'eskalator_kecil' => is_null($request->eskalator_kecil) ? 0 : $request->eskalator_kecil,
                'eskalator_besar' => is_null($request->eskalator_besar) ? 0 : $request->eskalator_besar,
                'pagar1' => is_null($request->pagar_1) ? '0' : $request->pagar_1,
                'pagar1_panajang' => is_null($request->pjg_pagar_1) ? 0 : $request->pjg_pagar_1,
                'pagar1_tinggi' => is_null($request->tinggi_pagar_1) ? 0 : $request->tinggi_pagar_1,
                'pagar2' => is_null($request->pagar_2) ? '0' : $request->pagar_2,
                'pagar2_panajang' => is_null($request->pjg_pagar_2) ? 0 : $request->pjg_pagar_2,
                'pagar2_tinggi' => is_null($request->tinggi_pagar_2) ? 0 : $request->tinggi_pagar_2,
                'pagar3' => is_null($request->pagar_3) ? '0' : $request->pagar_3,
                'pagar3_panajang' => is_null($request->pjg_pagar_3) ? 0 : $request->pjg_pagar_3,
                'pagar3_tinggi' => is_null($request->tinggi_pagar_3) ? 0 : $request->tinggi_pagar_3,
                'genset' => is_null($request->ukuran_genset) ? 0 : $request->ukuran_genset,
                'daya_listrik' => is_null($request->daya_listrik) ? 0 : $request->daya_listrik,
                'air_panas' => $request->air_panas ? 1 : 0,
                'pengolah_limbah' => $request->pengolah_limbah ? 1 : 0,
                'sumur' => is_null($request->sumur) ? 0 : $request->sumur,
                'reservoir' => $request->reservoir ? 1 : 0,
                'hydrant' => isset($request->hydrant) ? '1' : '0',
                'springkler' => isset($request->springkler) ? '1' : '0',
                'alaram' => isset($request->alaram) ? '1' : '0',
                'interkom' => isset($request->interkom) ? '1' : '0',
                'penangkal_petir' => $request->penangkal_petir ? 1 : 0,
                'jml_pabx' => is_null($request->pabx) ? 0 : $request->pabx,
                'sound_system' => $request->sound_system ? 1 : 0,
                'interkom_luas' => (!is_null($request->jmlh_luas_interkom) && isset($request->luas_intrkom)) ? $request->jmlh_luas_interkom : 0,
                'interkom_jml' => (!is_null($request->jmlh_luas_interkom) && isset($request->lantai_interkom)) ? $request->jmlh_luas_interkom : 0,
                'matv_luas' => (!is_null($request->jmlh_luas_matv) && isset($request->luas_matv)) ? $request->jmlh_luas_matv : 0,
                'matv_jml' => (!is_null($request->jmlh_luas_matv) && isset($request->lantai_matv)) ? $request->jmlh_luas_matv : 0,
                'cctv_luas' => (!is_null($request->jmlh_luas_cctv) && isset($request->luas_cctv)) ? $request->jmlh_luas_cctv : 0,
                'cctv_jml' => (!is_null($request->jmlh_luas_cctv) && isset($request->lantai_cctv)) ? $request->jmlh_luas_cctv : 0,
                'kolam_luas' => is_null($request->luas_kolam) ? 0 : $request->luas_kolam,
                'kolam_akhir' => is_null($request->luas_kolam) ? 0 : $request->kolam_akhir,
                'tenis_lampu_beton' => is_null($request->beton_tenis_lampu) ? 0 : $request->beton_tenis_lampu,
                'tenis_tanpalampu_beton' => is_null($request->beton_tenis_tanpalampu) ? 0 : $request->beton_tenis_tanpalampu,
                'tenis_lampu_aspal' => is_null($request->aspal_tenis_lampu) ? 0 : $request->aspal_tenis_lampu,
                'tenis_tanpalampu_aspal' => is_null($request->aspal_tenis_tanpalampu) ? 0 : $request->aspal_tenis_tanpalampu,
                'tenis_lampu_tanah' => is_null($request->liat_tenis_lampu) ? 0 : $request->liat_tenis_lampu,
                'tenis_tanpalampu_tanah' => is_null($request->liat_tenis_tanpalampu) ? 0 : $request->liat_tenis_tanpalampu,
                'hal_ringan' => is_null($request->perkerasang_ringan) ? 0 : $request->perkerasang_ringan,
                'hal_sedang' => is_null($request->perkerasan_sedang) ? 0 : $request->perkerasan_sedang,
                'hal_keras' => is_null($request->perkerasan_keras) ? 0 : $request->perkerasan_keras,
            ];

            $dataFasilitas = Fasilitas::create($in_fasilitas);

            $in_komp_khusus = [
                'bangunan_id' => $dataBangunan->id,
                'tinggi_kolom' => is_null($request->tinggi_kolom) ? 0 : $request->tinggi_kolom,
                'lebar_bentang' => is_null($request->lebar_bentang) ? 0 : $request->lebar_bentang,
                'luas_mezanin' => is_null($request->luas_mezanin) ? 0 : $request->luas_mezanin,
                'daya_lantai' => is_null($request->daya_lantai) ? 0 : $request->daya_lantai,
                'jml_kanopi' => is_null($request->jml_kanopi) ? 0 : $request->jml_kanopi,
                'posisi_tank' => is_null($request->posisi_tank) ? '0' : $request->posisi_tank,
                'kapasitas_tank' => is_null($request->kapasitas_tank) ? 0 : $request->kapasitas_tank,
            ];

            $dataKomponenKhusus = KomponenKhusus::create($in_komp_khusus);
        } catch (\Throwable $th) {
            dd($th);
        }

        return redirect('perekaman-data');
    }

    public function getDT(Request $request)
    {
        $data = DB::table('bangunan_objek')
            ->join('data_objek', 'bangunan_objek.objek_id', '=', 'data_objek.id')
            ->join('ref_jpb', 'bangunan_objek.kd_jpb', '=', 'ref_jpb.kd_jpb')
            ->select('bangunan_objek.*', 'data_objek.*', 'nama_jpb');

        $data = $data->paginate($request['pagination']['pageSize'], ['*'], 'page', $request['pagination']['pageNumber'] + 1);

        $dataArr = [];
        foreach ($data as $v) {

            $nop = $this->nopToString(
                $v->kd_prov,
                $v->kd_dati,
                $v->kd_kecamatan,
                $v->kd_kelurahan,
                $v->kd_blok,
                $v->no_urut,
                $v->kd_jenis
            );

            $btnEdit = auth()->user()->can('perekaman-edit')
                ? '<a href="' . url('pembayaran/add', $v->id) . '" class="btn btn-warning btn-sm" title="Edit">Edit</a>'
                : ' ';
            $btnDelete = auth()->user()->can('perekaman-edit')
                ? ' <a href="' . url('pembayaran/add', $v->id) . '" class="btn btn-danger btn-sm" title="Edit">Delete</a>'
                : ' ';

            $dataArr[] = [
                'nama_wp' => $v->nama_wp,
                'nop' => $nop,
                'jpb' => $v->kd_jpb . '-' . $v->nama_jpb,
                'aksi' => $btnEdit . $btnDelete,
            ];
        }

        $response = $this->datagridResponse($dataArr, $data);

        return response()->json($response, 200);
    }

    // public function destroy($id)
    // {

    // }
}
