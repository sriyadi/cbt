<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtnomorpeserta extends CI_Controller { public function __construct() { goto PPz7x; vLvFg: redirect("\x61\165\x74\150"); goto emW03; lKXPc: $this->load->model("\x44\x72\157\x70\144\x6f\x77\x6e\137\x6d\x6f\144\145\x6c", "\144\x72\157\x70\144\x6f\x77\156"); goto w8Oa7; emW03: vfIUw: goto hYlXS; w3p0R: show_error("\x48\x61\156\x79\x61\40\101\x64\155\x69\x6e\x69\x73\164\x72\141\164\157\162\40\171\x61\156\147\40\144\x69\x62\145\x72\151\40\150\141\153\x20\x75\x6e\x74\x75\153\40\155\145\x6e\147\141\x6b\163\145\x73\x20\150\141\x6c\141\155\x61\156\x20\x69\156\151\54\x20\74\141\40\150\162\145\x66\75\x22" . base_url("\x64\141\x73\x68\x62\x6f\x61\x72\144") . "\42\76\113\x65\155\x62\141\x6c\151\x20\x6b\145\x20\x6d\145\156\x75\40\x61\167\x61\154\74\57\141\76", 403, "\101\153\163\145\163\40\x54\x65\x72\154\x61\162\x61\x6e\x67"); goto teJTL; shHPu: mSr89: goto vLvFg; j0V2p: goto vfIUw; goto shHPu; M3uR6: if ($this->ion_auth->is_admin()) { goto P7CZU; } goto w3p0R; teJTL: P7CZU: goto j0V2p; pFYDJ: $this->load->library("\165\160\x6c\157\141\x64"); goto USg07; JNfUy: if (!$this->ion_auth->logged_in()) { goto mSr89; } goto M3uR6; mCGIa: $this->load->model("\104\x61\x73\150\142\x6f\x61\x72\144\x5f\155\x6f\144\145\x6c", "\x64\141\163\150\x62\157\x61\x72\144"); goto oUR3o; hYlXS: $this->load->library(["\144\141\x74\141\164\x61\142\x6c\x65\163", "\146\157\162\155\x5f\x76\141\154\151\144\x61\164\x69\157\x6e"]); goto pFYDJ; w8Oa7: $this->form_validation->set_error_delimiters('', ''); goto RyhJo; PPz7x: parent::__construct(); goto JNfUy; oUR3o: $this->load->model("\x43\x62\164\x5f\155\x6f\144\x65\154", "\143\142\x74"); goto lKXPc; USg07: $this->load->model("\x4d\141\163\164\x65\x72\137\x6d\157\144\x65\154", "\155\x61\163\x74\x65\162"); goto mCGIa; RyhJo: } public function output_json($data, $encode = true) { goto fXiw7; Fa7L1: $this->output->set_content_type("\141\x70\x70\154\151\x63\141\164\151\157\x6e\x2f\x6a\x73\x6f\156")->set_output($data); goto XJU2c; vUxfH: nelC4: goto Fa7L1; GxWWB: $data = json_encode($data); goto vUxfH; fXiw7: if (!$encode) { goto nelC4; } goto GxWWB; XJU2c: } public function index() { goto SltNH; LF_Mu: $data = ["\165\x73\x65\162" => $user, "\x6a\x75\144\165\154" => "\x4e\x6f\155\x6f\x72\x20\x50\145\x73\x65\162\x74\141", "\163\x75\x62\152\x75\144\165\x6c" => "\107\x65\x6e\145\162\141\164\145\40\116\157\x6d\x6f\162\40\x50\x65\163\145\x72\x74\141\x20\x55\152\x69\x61\156", "\x70\162\x6f\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto Vaiu2; Vaiu2: $tp = $this->dashboard->getTahunActive(); goto o6Bi0; v9kNY: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto AvK7l; SltNH: $user = $this->ion_auth->user()->row(); goto LF_Mu; lOzYk: $this->load->view("\x63\x62\x74\x2f\x6e\157\155\x6f\162\x70\x65\163\x65\x72\x74\x61\57\x64\x61\x74\x61"); goto VBRPS; eTdEA: $this->load->view("\x5f\x74\145\x6d\160\x6c\141\164\x65\163\x2f\x64\x61\163\150\142\x6f\141\162\x64\57\137\x68\145\141\144\145\162", $data); goto lOzYk; juBcx: $data["\x6b\x65\x6c\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto Fghr7; AvK7l: $data["\163\155\164\137\x61\x63\x74\x69\166\x65"] = $smt; goto BuKET; o6Bi0: $smt = $this->dashboard->getSemesterActive(); goto fNi5v; i_PeD: $data["\164\x70\x5f\x61\x63\164\151\x76\x65"] = $tp; goto v9kNY; ChDjc: $data["\163\145\x73\151"] = $this->dropdown->getAllSesi(); goto eTdEA; Fghr7: $data["\x72\x75\x61\156\147"] = $this->dropdown->getAllRuang(); goto ChDjc; BuKET: $data["\152\141\144\167\141\154"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto juBcx; fNi5v: $data["\164\160"] = $this->dashboard->getTahun(); goto i_PeD; VBRPS: $this->load->view("\x5f\164\145\x6d\160\154\x61\x74\145\163\57\x64\x61\x73\150\x62\x6f\x61\162\x64\x2f\x5f\x66\157\x6f\x74\145\162"); goto bm7nW; bm7nW: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function saveNomor() { goto PVytk; qnkwe: foreach ($input as $in) { goto kxyII; hdunc: $update = false; goto ZiFgD; tYipc: $update = $this->db->replace("\143\x62\x74\x5f\156\157\x6d\157\162\137\160\x65\x73\145\162\x74\141", $insert); goto VpVzD; ZiFgD: jkwYu: goto SwAZX; Mb2B4: xS9t0: goto hdunc; SwAZX: XC3Qb: goto JJYZg; VpVzD: goto jkwYu; goto Mb2B4; ipPgf: if ($nomorAda != null && $nomorAda->nomor_peserta == $in->nomor && $nomorAda->id_siswa != $in->id) { goto xS9t0; } goto JDVgR; JDVgR: $insert = ["\x69\144\137\156\x6f\x6d\157\162" => $in->id . $tp->id_tp, "\151\144\x5f\163\x69\x73\167\x61" => $in->id, "\151\144\137\x74\160" => $tp->id_tp, "\156\x6f\155\x6f\162\137\x70\x65\x73\x65\162\164\141" => $in->nomor]; goto tYipc; kxyII: $nomorAda = isset($arrNomor[$in->id]) ? $arrNomor[$in->id] : null; goto ipPgf; JJYZg: } goto O9Yqc; r0XBi: $tp = $this->dashboard->getTahunActive(); goto V3N5t; PVytk: $input = json_decode($this->input->post("\x73\x69\x73\x77\x61", true)); goto cpK2L; V3N5t: $update = false; goto qnkwe; O9Yqc: KN432: goto ReZa4; cpK2L: $arrNomor = $this->cbt->getAllNomorPeserta(); goto r0XBi; ReZa4: $this->output_json($update); goto mUZwR; mUZwR: } public function resetNomor() { goto ahJlC; fs6VG: CrhVm: goto SoLfB; mW3Ts: $smt = $this->dashboard->getSemesterActive(); goto q3XHt; SoLfB: $res["\163\164\141\164\x75\163"] = $update; goto qqKMz; rNJsa: foreach ($siswas as $siswa) { goto UyDWl; UyDWl: $insert = ["\151\144\x5f\x6e\157\155\157\x72" => $siswa->id_siswa . $tp->id_tp, "\x69\x64\137\x73\x69\163\167\x61" => $siswa->id_siswa, "\151\x64\137\164\x70" => $tp->id_tp, "\156\x6f\x6d\x6f\x72\x5f\x70\x65\x73\x65\x72\x74\x61" => '']; goto Yxbek; GRJGb: C4MW8: goto hn0i0; Yxbek: $update = $this->db->replace("\x63\142\x74\137\156\x6f\x6d\157\x72\137\160\145\163\x65\x72\164\141", $insert); goto GRJGb; hn0i0: } goto fs6VG; q3XHt: $siswas = $this->cbt->getSiswaByKelasArray($tp->id_tp, $smt->id_smt, $input); goto rNJsa; ahJlC: $input = json_decode($this->input->get("\x6b\x65\154\141\163", true)); goto fNZp6; fNZp6: $tp = $this->dashboard->getTahunActive(); goto mW3Ts; qqKMz: $this->output_json($res); goto DIodp; DIodp: } public function getSiswaKelas($arr_kelas) { goto s5PoS; ReYtL: $kelas = json_decode(urldecode($arr_kelas)); goto bEkbp; leFp5: $this->output_json($data); goto tU1B8; k3piW: $data["\163\x69\x73\167\x61"] = $siswas; goto y_s2t; bEkbp: $siswas = $this->cbt->getSiswaByKelasArray($tp->id_tp, $smt->id_smt, $kelas); goto tIrz1; s5PoS: $tp = $this->dashboard->getTahunActive(); goto YOGrJ; y_s2t: $data["\x6e\157\x6d\157\162"] = $arrNomor; goto leFp5; tIrz1: $arrNomor = $this->cbt->getAllNomorPeserta(); goto k3piW; YOGrJ: $smt = $this->dashboard->getSemesterActive(); goto ReYtL; tU1B8: } }
