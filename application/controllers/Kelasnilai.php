<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasnilai extends CI_Controller { public function __construct() { goto d36Cg; DcIKW: redirect("\141\165\x74\150"); goto ehBVC; kxCjq: $this->load->model("\115\141\163\164\x65\x72\137\155\x6f\x64\145\x6c", "\x6d\x61\x73\164\x65\x72"); goto rVXIQ; ehBVC: FOBNm: goto JLR32; rsMzQ: goto FOBNm; goto EeZ76; mlhWu: $this->form_validation->set_error_delimiters('', ''); goto g10vf; qVlZw: wytsp: goto rsMzQ; XGjTn: if (!$this->ion_auth->logged_in()) { goto aPrhJ; } goto kZ7me; JLR32: $this->load->library(["\x64\x61\164\x61\164\x61\142\x6c\145\x73", "\x66\157\162\x6d\x5f\x76\x61\154\151\144\141\164\151\157\x6e"]); goto kxCjq; Z54_N: show_error("\x48\x61\x6e\x79\x61\40\101\144\x6d\x69\x6e\x69\163\x74\162\x61\x74\157\x72\x20\171\141\x6e\x67\x20\x64\151\x62\x65\162\151\40\150\x61\153\40\165\156\164\x75\x6b\x20\155\145\156\x67\141\x6b\163\145\163\x20\x68\x61\154\141\155\x61\156\40\151\x6e\151\x2c\40\74\x61\40\150\x72\x65\x66\75\x22" . base_url("\144\x61\x73\x68\x62\157\141\162\144") . "\42\76\x4b\x65\155\x62\141\154\151\x20\x6b\x65\x20\155\x65\x6e\x75\x20\141\167\141\154\x3c\x2f\x61\x3e", 403, "\x41\x6b\x73\145\163\x20\124\145\162\154\141\162\x61\156\x67"); goto qVlZw; escmY: $this->load->model("\113\x65\x6c\x61\x73\137\x6d\x6f\x64\145\154", "\153\145\x6c\x61\163"); goto mlhWu; rVXIQ: $this->load->model("\104\x61\x73\150\x62\x6f\x61\x72\144\x5f\x6d\157\144\145\154", "\x64\x61\163\x68\142\157\x61\x72\144"); goto p6A9T; EeZ76: aPrhJ: goto DcIKW; d36Cg: parent::__construct(); goto XGjTn; p6A9T: $this->load->model("\x44\x72\x6f\x70\144\157\167\x6e\x5f\155\157\x64\x65\154", "\x64\162\157\x70\x64\157\167\156"); goto escmY; kZ7me: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\x75"))) { goto wytsp; } goto Z54_N; g10vf: } public function output_json($data, $encode = true) { goto BK_Sc; MD8MR: $data = json_encode($data); goto SXjr9; l_NXb: $this->output->set_content_type("\141\160\x70\x6c\151\x63\141\x74\x69\157\x6e\x2f\152\163\157\x6e")->set_output($data); goto HWXbz; SXjr9: C4CjQ: goto l_NXb; BK_Sc: if (!$encode) { goto C4CjQ; } goto MD8MR; HWXbz: } public function index() { goto ZUdAt; KXsWW: $data["\x69\144\137\147\165\x72\x75"] = $guru->id_guru; goto PiA1O; Q3PnX: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto XK_u4; Ryxbg: XEIPK: goto TaL22; wCRjV: lV8wA: goto hEblp; lnJOr: goto lV8wA; goto C8Apt; yRTzd: $data["\155\x61\160\145\154"] = $arrMapel; goto ShFU6; REf04: $data["\147\x75\162\x75"] = $guru; goto KXsWW; wNnJx: $data["\153\145\154\x61\x73"] = count($arrId) > 0 ? $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId) : []; goto NtsEx; wrphe: $data["\x6b\145\154\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto h3BFU; DsGPg: $tp = $this->dashboard->getTahunActive(); goto QYbiq; lOw1k: u07B4: goto yRTzd; h3WZX: $this->load->view("\x6b\x65\x6c\141\x73\x2f\156\151\154\x61\x69\x2f\144\x61\x74\x61"); goto HzqWi; g9TMP: $this->load->view("\x5f\x74\145\155\x70\154\x61\x74\x65\x73\x2f\144\141\x73\x68\x62\x6f\x61\x72\x64\x2f\x5f\x66\157\157\164\145\162"); goto wCRjV; ShFU6: $data["\141\x72\162\x6b\x65\x6c\x61\163"] = $arrKelas; goto wNnJx; TaL22: LyTxu: goto UoCtC; NtsEx: $this->load->view("\155\145\155\x62\145\162\163\57\x67\x75\x72\165\57\164\145\x6d\x70\154\141\164\x65\163\57\150\145\x61\x64\x65\162", $data); goto h3WZX; vJFpr: QK3f7: goto lOw1k; PiA1O: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto Q3PnX; Sn13S: if (!($mapel != null)) { goto u07B4; } goto Oaw2I; MvYUt: $data = ["\165\163\x65\x72" => $user, "\x6a\x75\x64\165\154" => "\x53\164\141\x74\x75\x73\x20\123\151\163\167\x61", "\x73\x75\x62\152\x75\144\165\154" => "\104\x61\x74\141\x20\123\164\x61\x74\165\x73\x20\x53\151\x73\167\141", "\163\x65\164\164\x69\x6e\x67" => $this->dashboard->getSetting()]; goto DsGPg; HzqWi: $this->load->view("\x6d\x65\155\142\145\162\x73\57\x67\x75\162\165\x2f\x74\x65\x6d\x70\154\x61\164\x65\x73\57\146\x6f\x6f\164\x65\x72"); goto lnJOr; M7UVQ: $this->load->view("\153\145\154\141\163\57\x6e\x69\154\141\151\x2f\144\x61\164\141"); goto g9TMP; F2QrD: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto DOfxQ; h3BFU: $this->load->view("\137\x74\145\x6d\160\154\141\164\145\163\57\144\141\x73\150\x62\157\x61\162\144\57\137\150\145\141\x64\x65\162", $data); goto M7UVQ; T4F6L: $arrKelas = []; goto SOVMo; ZUdAt: $user = $this->ion_auth->user()->row(); goto MvYUt; MvDf9: $data["\163\155\164\137\141\143\x74\151\166\x65"] = $smt; goto QW_Fg; SOVMo: if (!($mapel != null)) { goto LyTxu; } goto EoQ5v; C8Apt: n2Zb7: goto CE2_r; QW_Fg: if ($this->ion_auth->is_admin()) { goto n2Zb7; } goto F2QrD; XK_u4: $arrMapel = []; goto T4F6L; DOfxQ: $nguru[$guru->id_guru] = $guru->nama_guru; goto REf04; a7t2w: $data["\x74\x70"] = $this->dashboard->getTahun(); goto SoQec; Oaw2I: foreach ($mapel[0]->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); QN5cS: } goto vJFpr; SoQec: $data["\164\160\137\x61\x63\164\151\166\145"] = $tp; goto Sr2gT; xwrhH: $data["\x6d\x61\160\145\x6c"] = $this->dropdown->getAllMapel(); goto wrphe; UoCtC: $arrId = []; goto Sn13S; Sr2gT: $data["\163\155\164"] = $this->dashboard->getSemester(); goto MvDf9; CE2_r: $data["\160\162\157\146\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto xwrhH; EoQ5v: foreach ($mapel as $m) { goto Cf692; CxqJb: bUo_3: goto SGsgG; Cf692: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto FZoor; FZoor: foreach ($m->kelas_mapel as $kls) { $arrKelas[$m->id_mapel][] = ["\151\x64\137\x6b\x65\154\x61\163" => $kls->kelas, "\156\x61\155\x61\137\153\145\154\x61\x73" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)]; uC9Q_: } goto mZoDS; mZoDS: EvHA4: goto CxqJb; SGsgG: } goto Ryxbg; QYbiq: $smt = $this->dashboard->getSemesterActive(); goto a7t2w; hEblp: } public function loadNilaiMapel() { goto Wv6oY; t8VB1: $tahun = $this->input->get("\164\141\150\165\156"); goto Ui3gr; c1vmP: $namaHari = ["\115\x69\156\147\147\165", "\x53\x65\156\x69\156", "\123\x65\154\141\x73\141", "\x52\x61\x62\x75", "\x4b\141\155\x69\x73", "\112\165\155\141\x74", "\x53\141\142\164\x75"]; goto mmvUs; dFNqh: $log = []; goto BvRFn; KFa67: $siswa = $this->kelas->getKelasSiswa($kelas, $tahun, $smt); goto nJ1JQ; Lds3h: $jadwal_per_bulan = []; goto PLEGx; UwL_9: KC6W_: goto tFtwo; IiYt6: $cols = 0; goto AEe4v; TH2kF: $arrBulan = ["\x30\61", "\60\x32", "\x30\63", "\60\64", "\60\x35", "\60\66"]; goto OncWD; KQROf: X87v_: goto QxU2l; BvRFn: if (count($siswa) > 0 && count($jadwal_per_bulan) > 0) { goto KC6W_; } goto XyVmc; yJj76: SiM1n: goto T6t6q; tFtwo: foreach ($siswa as $s) { $log[$s->id_siswa] = ["\156\141\x6d\141" => $s->nama, "\156\x69\163" => $s->nis, "\153\145\154\141\163" => $s->nama_kelas, "\156\x69\154\x61\151\x5f\x6d\x61\x74\145\x72\151" => isset($log_siswa[1][$s->id_siswa]) ? $log_siswa[1][$s->id_siswa] : [], "\156\x69\x6c\141\151\x5f\x74\165\147\x61\163" => isset($log_siswa[2][$s->id_siswa]) ? $log_siswa[2][$s->id_siswa] : []]; lNj1i: } goto ubm34; xtyKj: $log_siswa = $this->kelas->getRekapMateriSemester(); goto Lds3h; ubm34: MQT5a: goto hmQrZ; Ui3gr: $smt = $this->input->get("\x73\x6d\x74"); goto E6nh0; Wv6oY: $kelas = $this->input->get("\x6b\145\x6c\141\163"); goto mriqQ; W2NuL: $this->output_json($data); goto NOUuf; nJ1JQ: if ($smt == "\61") { goto X87v_; } goto TH2kF; JR_FX: $log_materi = []; goto IiYt6; mriqQ: $mapel = $this->input->get("\x6d\x61\160\x65\154"); goto t8VB1; QxU2l: $arrBulan = ["\x30\x37", "\60\70", "\60\71", "\x31\60", "\x31\61", "\x31\x32"]; goto yJj76; mmvUs: $infos = $this->kelas->getJadwalMapelByMapel($kelas, $mapel, $tahun, $smt); goto xtyKj; E6nh0: $stahun = $this->input->get("\163\164\141\x68\x75\x6e"); goto KFa67; T6t6q: $namaBulan = ['', "\x4a\x61\156\165\x61\162\151", "\x46\145\142\162\165\141\x72\x69", "\115\141\162\145\164", "\x41\160\162\151\154", "\115\x65\x69", "\112\x75\x6e\x69", "\x4a\x75\x6c\x69", "\101\x67\x75\163\x74\x75\163", "\x53\145\160\x74\145\x6d\x62\x65\x72", "\x4f\153\164\x6f\x62\145\x72", "\x4e\157\x70\145\155\x62\x65\x72", "\x44\145\163\145\155\x62\145\x72"]; goto c1vmP; PLEGx: $jadwal_materi = []; goto JR_FX; SLV9u: CSNv3: goto W2NuL; QI1FL: FT90o: goto dFNqh; OncWD: goto SiM1n; goto KQROf; XyVmc: $data["\155\x61\160\x65\x6c\163"] = []; goto Sfseq; hmQrZ: $data = ["\154\157\147" => $log, "\155\141\164\x65\x72\x69" => $jadwal_materi, "\142\165\x6c\141\x6e\x73" => $arrBulan, "\155\141\x70\145\x6c\x73" => $jadwal_per_bulan, "\x6e\151\x6c\141\151" => $log_siswa, "\x63\157\154\163" => $cols]; goto SLV9u; Sfseq: goto CSNv3; goto UwL_9; AEe4v: foreach ($arrBulan as $bulan) { goto FhOv7; J0qL9: WnkcS: goto cJhiE; FhOv7: foreach ($infos as $info) { goto FaSsS; FaSsS: $jadwal_per_bulan[$info->id_hari][$info->jam_ke] = $info; goto ueOX3; ueOX3: $dates = $this->total_hari($info->id_hari, $bulan, $stahun); goto D09J9; D09J9: $mtr = null; goto HfmsN; bZvMu: KAlRI: goto GG0zp; kNRMl: n63t3: goto bZvMu; iwo3C: foreach ($dates as $date) { goto FTR5o; swBbT: $jadwal_materi[$b][$t][$info->jam_ke][1] = $mtr; goto uiddX; D0BDs: $t = $d[2]; goto KGvGf; PgmzI: $cols++; goto oKvmu; FTR5o: $d = explode("\x2d", $date); goto GZ2b9; KGvGf: $jj = $this->kelas->getAllMateriByTgl($kelas, $date, [$mapel]); goto OTnly; GZ2b9: $b = $d[1]; goto D0BDs; OTnly: $mtr = isset($jj[$mapel]) && isset($jj[$mapel][$info->jam_ke]) && isset($jj[$mapel][$info->jam_ke][1]) ? $jj[$mapel][$info->jam_ke][1] : null; goto deIsW; deIsW: $tgs = isset($jj[$mapel]) && isset($jj[$mapel][$info->jam_ke]) && isset($jj[$mapel][$info->jam_ke][2]) ? $jj[$mapel][$info->jam_ke][2] : null; goto swBbT; oKvmu: WQCx2: goto O8El6; uiddX: $jadwal_materi[$b][$t][$info->jam_ke][2] = $tgs; goto PgmzI; O8El6: } goto kNRMl; HfmsN: $tgs = null; goto iwo3C; GG0zp: } goto J0qL9; cJhiE: kJ4DM: goto Kxv8j; Kxv8j: } goto QI1FL; NOUuf: } function total_hari($id_day, $bulan, $taun) { goto UARuF; UGHv_: $days++; goto Mw2j9; DSXZO: GoDPQ: goto skd3b; UARuF: $days = 0; goto ZEDms; JE36d: tv1XE: goto IhL0o; skd3b: hgr7c: goto bVf6A; IhL0o: if (!($i < $total_days)) { goto sCTDq; } goto fvaht; fvaht: if (!(date("\x4e", strtotime($taun . "\x2d" . $bulan . "\x2d" . $i)) == $idday)) { goto GoDPQ; } goto UGHv_; qhNGZ: sCTDq: goto IJSer; Mw2j9: array_push($dates, date("\x59\x2d\155\x2d\x64", strtotime($taun . "\55" . $bulan . "\x2d" . $i))); goto DSXZO; bVf6A: $i++; goto MZj8d; ZEDms: $dates = []; goto apJLU; NPYCw: $i = 1; goto JE36d; apJLU: $total_days = cal_days_in_month(CAL_GREGORIAN, $bulan, $taun); goto irkat; MZj8d: goto tv1XE; goto qhNGZ; IJSer: return $dates; goto vAjZn; irkat: $idday = $id_day == "\x37" ? 0 : $id_day; goto NPYCw; vAjZn: } }
