<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\123\105\x50\101\124\x48") or exit("\x4e\x6f\40\144\151\x72\145\x63\x74\x20\163\x63\162\151\160\x74\40\141\x63\x63\145\163\163\x20\x61\154\x6c\157\167\145\x64"); class HasilUjian extends CI_Controller { public function __construct() { goto nz9mp; sVJIc: $this->load->model("\125\x6a\151\141\x6e\x5f\x6d\x6f\x64\145\154", "\x75\x6a\x69\141\x6e"); goto fSq25; a7m_2: bMaZw: goto HBJk9; BqR9R: redirect("\141\165\164\150"); goto a7m_2; tHOWG: if ($this->ion_auth->logged_in()) { goto bMaZw; } goto BqR9R; fSq25: $this->user = $this->ion_auth->user()->row(); goto LltGJ; KvWId: $this->load->model("\115\x61\x73\x74\x65\162\137\x6d\x6f\x64\x65\x6c", "\155\x61\163\x74\x65\162"); goto sVJIc; nz9mp: parent::__construct(); goto tHOWG; HBJk9: $this->load->library(["\144\141\164\x61\164\141\x62\x6c\145\163"]); goto KvWId; LltGJ: } public function output_json($data, $encode = true) { goto qz6AT; SmnDr: $data = json_encode($data); goto PotUN; qz6AT: if (!$encode) { goto dtByN; } goto SmnDr; gffRM: $this->output->set_content_type("\141\x70\x70\x6c\x69\143\141\x74\151\x6f\156\57\152\x73\157\x6e")->set_output($data); goto C4vWA; PotUN: dtByN: goto gffRM; C4vWA: } public function data() { goto fWm24; uQbix: gHqSb: goto Wv1d0; xh1zj: if (!$this->ion_auth->in_group("\147\165\x72\x75")) { goto gHqSb; } goto nGptl; Wv1d0: $this->output_json($this->ujian->getHasilUjian($nip_guru), false); goto isndA; fWm24: $nip_guru = null; goto xh1zj; nGptl: $nip_guru = $this->user->username; goto uQbix; isndA: } public function NilaiMhs($id) { $this->output_json($this->ujian->HslUjianById($id, true), false); } public function index() { goto lUECK; q3Wf6: $this->load->view("\137\x74\x65\155\160\154\141\x74\x65\163\x2f\144\x61\x73\150\x62\157\141\x72\x64\x2f\x5f\150\x65\141\144\145\162\56\160\150\x70", $data); goto g8wdV; lUECK: $data = ["\165\163\145\x72" => $this->user, "\x6a\165\144\x75\x6c" => "\125\x6a\151\141\x6e", "\163\165\x62\152\x75\144\x75\154" => "\x48\x61\x73\151\x6c\x20\125\x6a\x69\x61\x6e"]; goto q3Wf6; g8wdV: $this->load->view("\x75\x6a\x69\x61\156\x2f\150\141\163\x69\154"); goto S_LRa; S_LRa: $this->load->view("\137\164\x65\x6d\160\x6c\x61\x74\x65\163\x2f\x64\141\163\x68\x62\157\141\162\x64\57\x5f\146\x6f\157\x74\145\162\x2e\160\150\160"); goto fqKzq; fqKzq: } public function detail($id) { goto wHGBS; gJzP_: $nilai = $this->ujian->bandingNilai($id); goto sqBCT; ohyic: $this->load->view("\165\152\x69\x61\x6e\x2f\x64\x65\164\141\151\154\x5f\150\141\x73\151\x6c"); goto nDOqe; sqBCT: $data = ["\x75\163\145\162" => $this->user, "\x6a\x75\x64\x75\x6c" => "\x55\x6a\x69\x61\x6e", "\163\x75\142\152\x75\x64\165\x6c" => "\104\x65\164\141\x69\154\40\110\141\163\151\x6c\40\125\152\151\x61\x6e", "\165\152\151\x61\x6e" => $ujian, "\156\151\x6c\x61\x69" => $nilai]; goto ytwoB; wHGBS: $ujian = $this->ujian->getUjianById($id); goto gJzP_; ytwoB: $this->load->view("\x5f\164\x65\155\160\x6c\x61\164\x65\x73\x2f\144\141\163\150\x62\157\141\x72\144\x2f\x5f\x68\145\141\x64\x65\162\x2e\x70\150\x70", $data); goto ohyic; nDOqe: $this->load->view("\x5f\164\145\155\x70\154\141\x74\145\163\x2f\x64\x61\x73\150\x62\x6f\141\x72\144\x2f\x5f\146\157\x6f\x74\145\x72\56\x70\x68\160"); goto elPaZ; elPaZ: } public function cetak($id) { goto CvqGP; nLVzh: $hasil = $this->ujian->HslUjian($id, $mhs->id_siswa)->row(); goto e2d9A; rhDhB: $data = ["\165\152\151\x61\x6e" => $ujian, "\150\141\x73\151\x6c" => $hasil, "\155\150\163" => $mhs]; goto KklOn; KklOn: $this->load->view("\165\x6a\x69\x61\x6e\57\143\x65\164\x61\x6b", $data); goto DwN56; e2d9A: $ujian = $this->ujian->getUjianById($id); goto rhDhB; CvqGP: $mhs = $this->ujian->getIdMahasiswa($this->user->username); goto nLVzh; DwN56: } public function cetak_detail($id) { goto LvTdh; ku8y3: $data = ["\165\152\x69\141\x6e" => $ujian, "\156\151\x6c\x61\x69" => $nilai, "\150\141\163\x69\x6c" => $hasil]; goto Kxn0g; LvTdh: $ujian = $this->ujian->getUjianById($id); goto DHEzx; Oy2BP: $hasil = $this->ujian->HslUjianById($id)->result(); goto ku8y3; DHEzx: $nilai = $this->ujian->bandingNilai($id); goto Oy2BP; Kxn0g: $this->load->view("\165\152\151\x61\x6e\57\143\145\x74\x61\x6b\137\144\x65\164\x61\151\154", $data); goto dx_g_; dx_g_: } }
