<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtanalisis extends CI_Controller { public function __construct() { goto kezAX; ACESr: $this->form_validation->set_error_delimiters('', ''); goto PwR54; kLstz: $this->load->model("\x43\x62\164\x5f\x6d\157\144\145\154", "\143\142\x74"); goto Hiaiy; kezAX: parent::__construct(); goto uT41a; uT41a: if (!$this->ion_auth->logged_in()) { goto z63a6; } goto oXsih; lCpLZ: $this->load->model("\x44\162\157\x70\x64\157\167\156\x5f\x6d\157\144\145\154", "\x64\x72\157\160\x64\157\x77\x6e"); goto ACESr; oXsih: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\165"))) { goto JSPoz; } goto J8hR6; SuMeE: zoSCy: goto lDYQ_; Hiaiy: $this->load->model("\x4c\157\x67\137\x6d\157\144\145\x6c", "\154\157\x67\147\151\x6e\x67"); goto lCpLZ; yQz_h: $this->load->model("\115\x61\163\x74\x65\x72\x5f\155\157\x64\x65\154", "\155\141\x73\x74\145\x72"); goto RSpYf; S_joY: redirect("\x61\165\x74\150"); goto SuMeE; J8hR6: show_error("\110\x61\156\171\x61\40\101\144\155\151\156\151\x73\x74\162\x61\164\x6f\162\x20\x79\141\x6e\147\x20\144\x69\142\x65\162\x69\x20\150\x61\x6b\40\165\x6e\x74\165\x6b\40\x6d\145\156\x67\x61\153\163\x65\x73\x20\x68\141\x6c\x61\155\141\x6e\x20\151\156\151\54\x20\74\141\x20\150\x72\145\x66\75\42" . base_url("\144\x61\163\x68\142\157\141\162\x64") . "\42\x3e\x4b\145\x6d\x62\141\154\x69\x20\x6b\x65\40\155\x65\x6e\x75\40\141\167\141\154\x3c\x2f\141\x3e", 403, "\101\153\163\x65\163\x20\124\x65\x72\x6c\x61\162\x61\x6e\147"); goto NFH0Z; lDYQ_: $this->load->library(["\x64\141\x74\141\x74\x61\142\154\145\163", "\146\x6f\x72\x6d\x5f\x76\141\x6c\x69\144\x61\164\x69\x6f\x6e"]); goto yQz_h; NFH0Z: JSPoz: goto sbppe; RSpYf: $this->load->model("\104\141\x73\150\x62\x6f\141\162\x64\137\x6d\157\144\145\x6c", "\x64\x61\x73\150\x62\157\x61\x72\x64"); goto kLstz; dQL06: z63a6: goto S_joY; sbppe: goto zoSCy; goto dQL06; PwR54: } public function output_json($data, $encode = true) { goto rCjNj; rCjNj: if (!$encode) { goto YEark; } goto qbZVY; qFXRy: YEark: goto jmorU; jmorU: $this->output->set_content_type("\141\x70\x70\154\x69\x63\141\x74\x69\x6f\156\x2f\x6a\x73\157\x6e")->set_output($data); goto hAI23; qbZVY: $data = json_encode($data); goto qFXRy; hAI23: } public function index() { goto RxaYz; IQjUo: $smt_sel = $smt_sel == null ? $smt->id_smt : $smt_sel; goto mtheX; ATIkD: $data = ["\x75\x73\145\x72" => $user, "\152\165\144\x75\x6c" => "\101\156\141\x6c\151\163\141\x20\123\157\141\x6c", "\x73\165\x62\x6a\165\x64\x75\x6c" => "\x41\x6e\x61\154\151\163\141\x20\123\157\x61\x6c\x20\x55\x6a\x69\141\156", "\x73\145\x74\164\151\x6e\147" => $this->dashboard->getSetting()]; goto Oap8Z; PADoR: $smt = $this->dashboard->getSemesterActive(); goto WZ29M; C0Zwo: KEKo5: goto BvPAt; Oap8Z: $tp = $this->dashboard->getTahunActive(); goto PADoR; Jxkuc: $info = $this->cbt->getJadwalById($jadwal); goto PTICB; If0ba: $this->load->view("\143\142\x74\x2f\x61\x6e\x61\154\151\163\151\163\57\144\x61\164\141"); goto HsrIY; UZrtz: RJR5y: goto al49L; s2zOU: M7LyK: goto x5knk; Ij2nw: $ids = []; goto Mv2oj; NPDsL: $data["\163\155\164\137\x61\143\164\x69\166\x65"] = $smt; goto j4Ofg; FbhUn: if (!($jadwal != null)) { goto VpJSy; } goto Jxkuc; mtheX: $data["\x74\x70\137\163\x65\154\145\143\x74\x65\x64"] = $thn_sel; goto egCjp; WZ29M: $data["\x74\x70"] = $this->dashboard->getTahun(); goto t7OaI; FeqvH: $data["\x73\x6f\x61\x6c\163"] = $all_soals; goto MtsIh; LAoXa: WK0C2: goto ZIwzF; oJYnu: $data["\x6b\157\x64\x65\x6a\x61\x64\167\x61\154"] = $this->dropdown->getAllJadwalGuru($thn_sel, $smt_sel, $guru->id_guru); goto WDgnT; gZLgj: $this->load->view("\143\142\164\x2f\x61\x6e\141\x6c\x69\163\x69\x73\x2f\x64\141\164\141"); goto LMWwI; hwYbv: $data["\x6b\x6f\x64\145\x6a\x61\144\x77\x61\154"] = $this->dropdown->getAllJadwal($thn_sel, $smt_sel); goto KOG7O; tXB_D: $data["\147\165\162\165"] = $guru; goto oJYnu; IQ1h_: $data["\x6a\141\x64\x77\141\154\x5f\x73\x65\154\x65\143\164\145\144"] = $jadwal; goto FbhUn; IhMmO: $all_soals = $this->cbt->getSoalByBank($info->id_bank); goto cg16G; Ps9YK: $smt_sel = $this->input->get("\163\x6d\164"); goto GEZG8; RxaYz: $user = $this->ion_auth->user()->row(); goto ATIkD; MtsIh: $data["\x6e\x69\x6c\141\x69"] = $nilai_pg; goto gjajF; Ra1Ky: if ($this->ion_auth->is_admin()) { goto M7LyK; } goto LAIh6; al49L: $nilai_pg = $this->cbt->getAllNilaiSiswa($jadwal); goto IhMmO; HsrIY: $this->load->view("\137\164\x65\x6d\x70\x6c\141\164\x65\x73\x2f\x64\141\163\150\142\x6f\141\162\144\57\x5f\x66\157\157\164\145\x72"); goto LAoXa; gjajF: VpJSy: goto Ra1Ky; hAxOg: goto WK0C2; goto s2zOU; MAe3a: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto NPDsL; pEXiH: $thn_sel = $this->input->get("\x74\150\156"); goto Ps9YK; cg16G: if (!isset($all_soals[1])) { goto KEKo5; } goto N3y0r; Mv2oj: foreach ($all_jawaban as $jawaban_siswa) { goto VbiZl; P3oNc: $jawabans_siswa[$jawaban_siswa->jenis_soal][$jawaban_siswa->nomor_soal][$jawaban_siswa->id_siswa] = $jawaban_siswa->jawaban_siswa; goto if13j; if13j: W6Ovz: goto VaWEw; VbiZl: array_push($ids, $jawaban_siswa->id_siswa); goto P3oNc; VaWEw: } goto UZrtz; PTICB: $all_jawaban = $this->cbt->getJawabanByBank($info->id_bank); goto zATm8; cq39L: Uhc3o: goto C0Zwo; PDxTu: $nguru[$guru->id_guru] = $guru->nama_guru; goto tXB_D; WDgnT: $this->load->view("\x6d\145\155\x62\x65\x72\x73\57\x67\165\162\x75\x2f\x74\145\155\x70\154\141\x74\145\x73\57\x68\x65\x61\144\x65\162", $data); goto gZLgj; j4Ofg: $jadwal = $this->input->get("\152\141\x64\x77\x61\x6c"); goto pEXiH; BvPAt: $data["\151\156\146\x6f"] = $info; goto FeqvH; zATm8: $jawabans_siswa = []; goto Ij2nw; t7OaI: $data["\x74\160\x5f\141\x63\164\x69\166\145"] = $tp; goto MAe3a; KOG7O: $this->load->view("\137\x74\145\155\160\154\x61\164\145\x73\x2f\x64\x61\163\x68\142\157\x61\x72\x64\57\x5f\150\x65\x61\144\145\162", $data); goto If0ba; LMWwI: $this->load->view("\155\x65\x6d\142\145\162\x73\57\147\x75\x72\165\x2f\164\145\155\160\154\x61\164\x65\x73\x2f\146\157\157\164\x65\162"); goto hAxOg; x5knk: $data["\x70\x72\x6f\x66\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto hwYbv; N3y0r: foreach ($all_soals[1] as $no => $soal) { goto cCTcp; PdT45: $pos_a = 0; goto iGp5A; EddLZ: if (!($cek == 1)) { goto MwBhG; } goto SxshO; Fmrss: k_WG7: goto Tg78L; g0D8g: $soal->benar_bawah = $yng_benar_golonganbawah; goto xY09j; QJ7nh: $salah = $soal->jumlah_salah; goto mfQde; V9_Fp: $benar = $soal->jumlah_benar; goto QJ7nh; Kf6mn: cMow6: goto IrHeM; aPwwb: q0yd5: goto guGNF; Su131: vgUln: goto kj0bB; Dbh32: $soal->daya_pembeda = $daya_pembeda; goto q6PhW; SuISz: $kesukaran = 0; goto ghbbG; yUwp2: $soal->jumlah_benar = 0; goto G89n4; H4FSn: if ($kesukaran >= 0.3) { goto iGoex; } goto Ly2Vb; X_Ha7: $yng_benar_golonganatas = 0; goto zexyp; Ly2Vb: $status_soal = "\x73\165\153\x61\x72"; goto MyD6w; HPfj9: bqfS7: goto e_rRa; Oz52S: mtzxq: goto Dbh32; wbnEU: fvABE: goto yjh30; kj0bB: goto PgdXK; goto Kf6mn; Tg78L: $soal->tingkat_kesukaran = $kesukaran; goto hU7yO; VNcNc: $y = []; goto X_Ha7; Flq8A: foreach ($nilai_pg as $id => $nilai) { goto TpeLf; uim3o: if ($no <= $bagi) { goto voGsj; } goto CeZnL; sgSbq: B7zpt: goto Vra7v; Z12uP: $no++; goto JQwyT; JQwyT: FEy7i: goto LSST4; TpeLf: array_push($y, $nilai->pg_benar); goto GQx3w; UDpWn: voGsj: goto Stl0r; uu0yy: yFBik: goto puamy; GQx3w: if (!isset($jwbn_siswa[$id])) { goto j8jdd; } goto Ouikb; Vra7v: x4mMQ: goto QSWhQ; QSWhQ: j8jdd: goto Z12uP; CeZnL: if (!($siswa_menjawab == $soal->jawaban)) { goto yFBik; } goto Z6nCh; Stl0r: if (!($siswa_menjawab == $soal->jawaban)) { goto B7zpt; } goto GdVs3; Ouikb: $siswa_menjawab = $jwbn_siswa[$id]; goto uim3o; Z6nCh: $yng_benar_golonganbawah++; goto uu0yy; puamy: goto x4mMQ; goto UDpWn; GdVs3: $yng_benar_golonganatas++; goto sgSbq; LSST4: } goto UpaLS; Yt3af: $soal->skor_siswa = []; goto yUwp2; cWd9_: if ($yng_benar_golonganatas != 0 && $yng_benar_golonganbawah == 0) { goto ai5_3; } goto dHmAG; Blo3O: if (!($jml_siswa > 0)) { goto k_WG7; } goto ErXOT; FN5gQ: ZSdG6: goto f7FU9; pziZB: $jwbn_siswa = isset($jawabans_siswa[1][$no]) && isset($jawabans_siswa[1][$no]) ? $jawabans_siswa[1][$no] : []; goto dTxPJ; iGp5A: $pos_b = $bagi; goto VNcNc; VB4LY: oFNjq: goto cbpXR; WHh4O: goto mtzxq; goto NVgSB; UpaLS: jhzrx: goto EkH8O; e_rRa: $soal->status_daya = "\103\165\x6b\x75\x70"; goto Su131; cF_HU: ai5_3: goto itAI7; fch6T: if ($kesukaran >= 0.7) { goto ZSdG6; } goto H4FSn; WRTq1: $soal->status_daya = "\112\145\x6c\145\153"; goto nl7fO; cCTcp: $soal->jawaban_siswa = []; goto Yt3af; Cq5up: $soal->status_valid = $validitas; goto O6ba_; IaySp: goto lwzpW; goto aPwwb; NVgSB: IbGDb: goto RP1N6; q6PhW: if ($daya_pembeda >= 0.7) { goto atKqj; } goto hDUaP; MyD6w: goto oFNjq; goto gHPlM; Rx2g0: lwzpW: goto h6z3g; HKHQz: if ($daya_pembeda >= 0.2) { goto bqfS7; } goto WRTq1; guGNF: $daya_pembeda = 0; goto Rx2g0; zexyp: $yng_benar_golonganbawah = 0; goto HIqd1; WDq9H: $soal->nilai_valid = $pearson; goto qUcA6; gHPlM: iGoex: goto EWPgK; h6z3g: goto TwJkV; goto cF_HU; i7nC_: TwJkV: goto WHh4O; dTxPJ: foreach ($jwbn_siswa as $id => $jawab_siswa) { goto G8d21; Ub2dY: goto osJ0F; goto Y42d3; c9ssI: if ($jawab_siswa == "\x41") { goto ksVXU; } goto Fpubl; Qb8Zu: ksVXU: goto DLImi; ts9an: $soal->jawaban_siswa["\x6a\x61\x77\141\142\137\142"][$id] = $jawab_siswa; goto B6UVU; R4Ndp: goto osJ0F; goto ZvED4; RK75O: $soal->jawaban_siswa["\152\x61\167\x61\142\137\143"][$id] = $jawab_siswa; goto Ub2dY; uKsOr: array_push($x, 0); goto amSYi; Fpubl: if ($jawab_siswa == "\102") { goto GtOQp; } goto jRaZA; KpEl5: TgIPr: goto p1qo1; qOIeq: if ($jawab_siswa == "\x44") { goto qZk5e; } goto g7hjW; ZvED4: doaLD: goto N5HOD; OdnL7: $soal->jumlah_salah++; goto uKsOr; G8d21: $total_siswa++; goto j0YZe; YUmfu: array_push($x, 1); goto JW8bE; xVS7v: $soal->jawaban_siswa["\x6a\141\x77\x61\142\x5f\x64"][$id] = $jawab_siswa; goto R4Ndp; Y42d3: qZk5e: goto xVS7v; m2a86: goto osJ0F; goto Qb8Zu; JW8bE: tDLLl: goto c9ssI; jRaZA: if ($jawab_siswa == "\x43") { goto eBOAl; } goto qOIeq; j0YZe: if ($jawab_siswa == $soal->jawaban) { goto AHX5o; } goto OdnL7; kjIeV: eBOAl: goto RK75O; fcbsU: GtOQp: goto ts9an; amSYi: goto tDLLl; goto Vinvm; Vinvm: AHX5o: goto eokio; j9tT1: osJ0F: goto KpEl5; eokio: $soal->jumlah_benar++; goto YUmfu; N5HOD: $soal->jawaban_siswa["\152\x61\167\x61\142\137\x65"][$id] = $jawab_siswa; goto j9tT1; vklOq: goto osJ0F; goto fcbsU; B6UVU: goto osJ0F; goto kjIeV; g7hjW: if ($jawab_siswa == "\x45") { goto doaLD; } goto m2a86; DLImi: $soal->jawaban_siswa["\152\x61\x77\x61\142\x5f\141"][$id] = $jawab_siswa; goto vklOq; p1qo1: } goto e6YlK; ErXOT: $kesukaran = round($benar / $jml_siswa, 2); goto fch6T; yjh30: PpPvK: goto S5Wch; TGGJz: $soal->benar_atas = $yng_benar_golonganatas; goto g0D8g; SxshO: $jml_siswa--; goto QOkEO; hDUaP: if ($daya_pembeda >= 0.4) { goto cMow6; } goto HKHQz; QOkEO: MwBhG: goto K8l1P; Intun: PgdXK: goto Y1FuH; IrHeM: $soal->status_daya = "\102\x61\x69\x6b"; goto Intun; K8l1P: $bagi = $jml_siswa / 2; goto PdT45; z_z1l: $total_siswa = 0; goto Y2OzJ; EWPgK: $status_soal = "\163\x65\144\x61\156\147"; goto VB4LY; Y2OzJ: $x = []; goto pziZB; cbpXR: goto CHpRK; goto FN5gQ; siwK0: atKqj: goto P0u8I; mfQde: $jml_siswa = $total_siswa; goto SuISz; dHmAG: if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah == 0) { goto q0yd5; } goto di4wT; KjSEx: CHpRK: goto Fmrss; gfUvW: $validitas = $this->nilaiSignifikansi($total_siswa) <= $pearson ? "\x56\141\x6c\151\144" : "\x54\x69\144\x61\x6b\40\x76\141\154\x69\x64"; goto Cq5up; Y1FuH: goto fvABE; goto siwK0; ghbbG: $status_soal = ''; goto Blo3O; nl7fO: goto vgUln; goto HPfj9; HIqd1: $no = 1; goto Flq8A; xY09j: $pearson = $this->pearson($x, $y); goto WDq9H; O6ba_: $bagi_daya = $bagi > 0 ? $bagi : 1; goto nDKsm; itAI7: $daya_pembeda = $yng_benar_golonganatas / $bagi_daya; goto i7nC_; EkH8O: $soal->total_siswa = $total_siswa; goto TGGJz; f7FU9: $status_soal = "\155\165\144\x61\150"; goto KjSEx; DKRwW: $cek = $jml_siswa % 2; goto EddLZ; e6YlK: vA3DL: goto V9_Fp; P0u8I: $soal->status_daya = "\x42\x61\151\153\x20\123\145\x6b\x61\x6c\151"; goto wbnEU; RP1N6: $daya_pembeda = 0 - $yng_benar_golonganbawah / $bagi_daya; goto Oz52S; G89n4: $soal->jumlah_salah = 0; goto z_z1l; hU7yO: $soal->status_kesukaran = $status_soal; goto DKRwW; di4wT: $daya_pembeda = $yng_benar_golonganatas / $bagi_daya - $yng_benar_golonganbawah / $bagi_daya; goto IaySp; nDKsm: if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah != 0) { goto IbGDb; } goto cWd9_; qUcA6: $soal->table_r = $this->nilaiSignifikansi($total_siswa); goto gfUvW; S5Wch: } goto cq39L; LAIh6: $guru = $this->dashboard->getDataGuruByUserId($user->id, $thn_sel, $smt_sel); goto PDxTu; GEZG8: $thn_sel = $thn_sel == null ? $tp->id_tp : $thn_sel; goto IQjUo; egCjp: $data["\x73\x6d\164\x5f\163\x65\x6c\145\143\164\145\x64"] = $smt_sel; goto IQ1h_; ZIwzF: } private function pearson($x, $y) { goto ifspC; DZM89: if (!($b > 0)) { goto fN7Fk; } goto xAVM8; xAVM8: $ret = $a / $b; goto Xba9k; jtGkl: $by += pow($yr, 2); goto neNej; CAVKR: $i++; goto lyn2D; P6Qu1: $yr = $y[$i] - $ys; goto JAWFg; vkvWd: array_pop($y); goto U3YZ4; j4Avs: $x = array_values($x); goto ntabM; D_TIJ: $ret = -1; goto DZM89; S40Zn: $xr = $x[$i] - $xs; goto P6Qu1; BPbLL: T4Ggx: goto yA5bt; YbtAY: return -1; goto NWJRo; E9fcG: A6963: goto ognoe; V7GyP: $ys = array_sum($y) / count($y); goto ve135; ognoe: if (!($cx > $cy)) { goto HXr4U; } goto eQuPu; ve135: $a = 0; goto BJpTx; odnhU: $xs = array_sum($x) / count($x); goto V7GyP; edzYU: goto LGJdF; goto Kl3fE; lFrot: goto LH8g6; goto jZzyH; ru0oV: ziXfN: goto j4Avs; ifspC: $cx = count($x); goto Xv5ug; kOhH8: $i = 0; goto DNumm; RhQdG: if (!(count($x) !== count($y))) { goto ziXfN; } goto L6k21; eJ7SO: LH8g6: goto onQng; neNej: OgMOG: goto CAVKR; dLGk7: HXr4U: goto RhQdG; TwLKr: LGJdF: goto SZdjg; lyn2D: goto za5Rg; goto FX8wt; Xv5ug: $cy = count($y); goto Il0aU; PkPm9: $by = 0; goto kOhH8; WmiIZ: $b = sqrt($bx * $by); goto D_TIJ; PhEfj: $i = 0; goto eJ7SO; JAWFg: $a += $xr * $yr; goto mK_2O; yA5bt: $i++; goto edzYU; L6k21: return -1; goto ru0oV; jZzyH: dZCg3: goto E9fcG; vRRup: return $ret; goto eCOCL; ntabM: $y = array_values($y); goto odnhU; U3YZ4: mnNLK: goto OIFmx; zasHB: if (!($i < count($x))) { goto xTFCz; } goto S40Zn; FX8wt: xTFCz: goto WmiIZ; eQuPu: $d = $cx - $cy; goto C4XH0; DNumm: za5Rg: goto zasHB; onQng: if (!($i < $d)) { goto dZCg3; } goto vkvWd; SZdjg: if (!($i < $d)) { goto tTCnE; } goto Fpxz3; NWJRo: z5Grg: goto KZrtv; Kl3fE: tTCnE: goto dLGk7; C4XH0: $i = 0; goto TwLKr; OIFmx: $i++; goto lFrot; KZrtv: if (!($cx < $cy)) { goto A6963; } goto FOatA; FOatA: $d = $cy - $cx; goto PhEfj; Fpxz3: array_pop($x); goto BPbLL; mK_2O: $bx += pow($xr, 2); goto jtGkl; Xba9k: fN7Fk: goto vRRup; BJpTx: $bx = 0; goto PkPm9; Il0aU: if (!($cx === 0 || $cy === 0)) { goto z5Grg; } goto YbtAY; eCOCL: } public function getNilaiKelas() { goto OlL9g; rDNkR: $jadwal = $this->input->get("\152\141\144\167\141\154"); goto xjpEt; Aeedl: $data["\x69\156\146\x6f"] = $info; goto tZ7wN; kHQr6: $smt = $this->dashboard->getSemesterActive(); goto yjRnE; yjRnE: $info = $this->cbt->getJadwalById($jadwal, $sesi); goto oG3XY; xjpEt: $tp = $this->dashboard->getTahunActive(); goto kHQr6; XFZ2q: $data["\152\x61\x77\x61\x62\x61\x6e"] = $arrDur; goto Aeedl; tZ7wN: $this->output_json($data); goto yOwv2; oG3XY: $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas); goto Nw8qd; mhqqH: ONyeL: goto BoX9e; Nw8qd: $arrDur = []; goto c3vOl; OlL9g: $kelas = $this->input->get("\x6b\145\x6c\141\163"); goto sT22n; c3vOl: foreach ($siswas as $siswa) { goto hbo67; zJ5FM: v90L_: goto gfezM; uYQl7: $jawaban = $this->cbt->getJawabanSiswa($siswa->id_siswa . $jadwal . $info->id_bank . 2 . ($j + 1)); goto o7EDI; SWRtD: $arrJawab_essai[$siswa->id_siswa][] = array("\151\x64\137\152\141\x77\141\x62\141\156" => 0, "\x6a\141\167\141\142\x61\x6e" => '', "\x6a\x61\167\x61\x62\x61\x6e\x5f\142\145\156\x61\162" => '', "\153\x6f\x72\145\x6b\x73\151" => 0); goto sexRc; o1JnF: $i++; goto g3anL; bED3c: qCl5p: goto RxMIo; b4GMR: EpgHR: goto FYG1Z; E_nx3: $i = 0; goto Zy6zM; kKR9E: $arrJawab_pg[$siswa->id_siswa][] = $this->cbt->getJawabanSiswa($siswa->id_siswa . $jadwal . $info->id_bank . 1 . ($i + 1)); goto e8j1A; UXOt_: sl_SF: goto YsUoD; PMmGL: $arrDur[$siswa->id_siswa] = ["\144\165\162" => $this->cbt->getDurasiSiswa($siswa->id_siswa . $jadwal), "\152\141\x77\x61\x62\137\160\x67" => $arrJawab_pg[$siswa->id_siswa], "\x6a\141\167\x61\x62\x5f\x65\x73\163\141\151" => $jawab_essai, "\x6c\157\147" => $this->cbt->getLogUjian($siswa->id_siswa, $jadwal)]; goto b4GMR; hbo67: $arrJawab_pg = []; goto ShegI; kzcPz: goto ibw2J; goto zJ5FM; fUGVY: S8qZD: goto afhnR; RQGLt: if (!($j < $info->tampil_esai)) { goto v90L_; } goto uYQl7; RxMIo: $arrJawab_essai[$siswa->id_siswa][] = $jawaban; goto UXOt_; sexRc: goto sl_SF; goto bED3c; d0qRN: if (!($i < $info->tampil_pg)) { goto S8qZD; } goto kKR9E; ShegI: $arrJawab_essai = []; goto E_nx3; Zy6zM: ke9me: goto d0qRN; afhnR: $j = 0; goto n7_Xk; e8j1A: MYa6_: goto o1JnF; YsUoD: YmB7_: goto i31eE; g3anL: goto ke9me; goto fUGVY; n7_Xk: ibw2J: goto RQGLt; gfezM: $jawab_essai = isset($arrJawab_essai[$siswa->id_siswa]) ? $arrJawab_essai[$siswa->id_siswa] : []; goto PMmGL; i31eE: $j++; goto kzcPz; o7EDI: if ($jawaban != null) { goto qCl5p; } goto SWRtD; FYG1Z: } goto mhqqH; BoX9e: $data["\x73\151\x73\167\141"] = $siswas; goto XFZ2q; sT22n: $sesi = $this->input->get("\x73\x65\163\151"); goto rDNkR; yOwv2: } public function getJadwalUjianByJadwal() { goto QjjU0; FPaHF: $this->output_json($kelases); goto TOaSq; rGTzA: Yf8X5: goto FPaHF; U_OsQ: $info = $this->cbt->getJadwalById($jadwal); goto ykp5z; D69ok: $smt = $this->input->get("\163\155\x74"); goto U_OsQ; QjjU0: $jadwal = $this->input->get("\152\x61\144\x77\x61\x6c"); goto baeCD; ykp5z: $kelas = unserialize($info->bank_kelas); goto vEf2M; wcUCh: foreach ($kelas as $key => $value) { $kelases[$value["\x6b\x65\154\x61\x73\137\151\144"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\153\x65\x6c\x61\163\137\151\144"]); yuam4: } goto rGTzA; vEf2M: $kelases = []; goto wcUCh; baeCD: $tp = $this->input->get("\164\x68\x6e"); goto D69ok; TOaSq: } public function kalkulasi() { goto bx4Q7; Y9MGp: $update = $this->generateNilaiUjian($jadwal); goto wqZws; bx4Q7: $jadwal = $this->input->get("\152\x61\x64\x77\x61\154"); goto Y9MGp; wqZws: $this->output_json($update); goto IQUHT; IQUHT: } public function generateNilaiUjian($jadwal) { goto K8DG7; xQHoR: $bagi_pg2 = $info->tampil_kompleks / 100; goto T12Kz; meOyj: foreach ($siswas as $key => $value) { array_push($ids, $value->id_siswa); Ha30l: } goto bFnMR; tgIyi: foreach ($kelas_bank as $key => $value) { array_push($kelases, $value["\x6b\145\x6c\x61\x73\137\x69\144"]); fUNLw: } goto HIKrp; K8DG7: $info = $this->cbt->getJadwalById($jadwal); goto C_Ry0; kX0E3: return $update; goto eR1Kt; iUB3Y: $insets = []; goto icrQx; C_Ry0: $bagi_pg = $info->tampil_pg / 100; goto zBXNR; z9O47: $kelas_bank = unserialize($info->bank_kelas); goto t_tk1; ORjvV: $bagi_essai = $info->tampil_esai / 100; goto pUheq; YcowR: $siswas = $this->cbt->getSiswaByKelas($info->id_tp, $info->id_smt, $kelases); goto Zev2h; XmbeJ: $soal = []; goto ray6q; t_tk1: $kelases = []; goto tgIyi; pUheq: $bobot_essai = $info->bobot_esai / 100; goto z9O47; HIKrp: flWey: goto YcowR; CzmT1: $jawabans = $this->cbt->getJawabanByBank($info->id_bank); goto XmbeJ; Zev2h: $ids = []; goto meOyj; cQEUV: foreach ($jawabans as $jawaban_siswa) { goto SkS3f; SIVXp: $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar); goto zBQqD; J2_v3: $jawaban_siswa->jawaban_siswa = json_decode(json_encode($jawaban_siswa->jawaban_siswa)); goto VO67f; SkS3f: if (!($jawaban_siswa->jenis_soal == "\x32")) { goto DKglR; } goto moZbk; moZbk: $jawaban_siswa->opsi_a = @unserialize($jawaban_siswa->opsi_a); goto H0wWJ; aGfbD: I5o7q: goto iSDyL; l6Oth: if (!($jawaban_siswa->jenis_soal == "\63")) { goto dpqU1; } goto ztWpU; H0wWJ: $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa); goto SIVXp; V03mn: $jawaban_siswa->jawaban_benar = array_filter($jawaban_siswa->jawaban_benar, "\163\x74\x72\x6c\x65\156"); goto GrJrj; cF8_k: $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar); goto J2_v3; ztWpU: $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa); goto cF8_k; zBQqD: $jawaban_siswa->jawaban_benar = array_map("\x73\x74\x72\x74\157\165\x70\160\145\162", $jawaban_siswa->jawaban_benar); goto V03mn; qhMf_: $jawabans_siswa[$jawaban_siswa->id_siswa][$jawaban_siswa->jenis_soal][] = $jawaban_siswa; goto XrOrg; VO67f: $jawaban_siswa->jawaban_benar = json_decode(json_encode($jawaban_siswa->jawaban_benar)); goto gIgWT; XrOrg: $soal[$jawaban_siswa->jenis_soal][] = $jawaban_siswa; goto aGfbD; gIgWT: dpqU1: goto qhMf_; GrJrj: DKglR: goto l6Oth; iSDyL: } goto LNJjR; T12Kz: $bobot_pg2 = $info->bobot_kompleks / 100; goto r1wbE; r1wbE: $bagi_jodoh = $info->tampil_jodohkan / 100; goto ot3Wx; ot3Wx: $bobot_jodoh = $info->bobot_jodohkan / 100; goto aTdGb; icrQx: foreach ($siswas as $siswa) { goto RW4rI; W0c4p: $input_jod = 0; goto blEnV; jfns_: foreach ($jawaban_pg as $jwb_pg) { goto Sxtjm; xmDXo: p5y_K: goto x37Ha; R4z2d: if (strtoupper($jwb_pg->jawaban_siswa) == strtoupper($jwb_pg->jawaban_benar)) { goto FavNV; } goto RHGa6; RHGa6: $salah_pg += 1; goto CV368; Sxtjm: if (!($jwb_pg != null && $jwb_pg->jawaban_siswa != null)) { goto EjSmH; } goto R4z2d; x37Ha: EjSmH: goto KObnm; bRd4J: $benar_pg += 1; goto xmDXo; CV368: goto p5y_K; goto Vsdv3; Vsdv3: FavNV: goto bRd4J; KObnm: ayu0F: goto w6z8q; w6z8q: } goto laK1O; o1Vqb: $input_es = 0; goto v6LVW; H_cV0: $ada_jawaban_pg2 = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x32"]); goto NxF21; E8HBf: if (!($nilai_input != null && $nilai_input->kompleks_nilai != null)) { goto vPxyJ; } goto lwuNw; NxF21: $ada_jawaban_jodoh = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\63"]); goto eRDJ_; TLQ89: l6GJL: goto fEiwh; Nmt00: $benar_pg = 0; goto cSHbi; rl_HC: iTtKW: goto gPrsx; djf23: o8EYd: goto yQtTj; fBuLM: $benar_jod = 0; goto iFiam; yQtTj: voOZL: goto XmbpI; w2w54: $insert["\160\x67\x5f\x6e\x69\154\x61\x69"] = round($skor_pg, 2); goto ebzyF; EgDwv: $otomatis_pg2 = 0; goto FKAPD; GwR4Z: $s_es = $bagi_essai == 0 ? 0 : $benar_es / $bagi_essai * $bobot_essai; goto o1Vqb; ebzyF: $insert["\153\157\x6d\x70\x6c\145\x6b\x73\137\x6e\x69\x6c\x61\x69"] = round($skor_pg2, 2); goto KPu8f; OejA4: $skor_pg2 = $input_pg2 != 0 ? $input_pg2 : ($otomatis_pg2 == 0 ? $s_pg2 : $skor_koreksi_pg2); goto uRFou; N2vxX: $insert["\145\163\x73\x61\x69\x5f\156\x69\x6c\x61\x69"] = round($skor_es, 2); goto VMimp; EPe8u: $otomatis_es = 0; goto fl5ck; VbCtc: $jawaban_is = $ada_jawaban_isian ? $jawabans_siswa[$siswa->id_siswa]["\x34"] : []; goto YA3jt; v6LVW: if (!($nilai_input != null && $nilai_input->isian_nilai != null)) { goto iTtKW; } goto T_9nq; fgAzf: $insert["\151\x64\x5f\x73\x69\163\x77\x61"] = $siswa->id_siswa; goto eTxkp; gPrsx: $skor_es = $input_es != 0 ? $input_es : ($otomatis_es == 0 ? $s_es : $skor_koreksi_es); goto MCeBk; wMXvo: $otomatis_is = 0; goto JCwBo; MCeBk: $insert["\151\144\x5f\156\x69\154\141\x69"] = $siswa->id_siswa . $jadwal; goto fgAzf; jySgz: $benar_pg2 = 0; goto GFJWg; fEiwh: v6fBp: goto Ihhxs; P7aqa: $skor_koreksi_is = 0.0; goto wMXvo; SQ3ba: $input_is = 0; goto IQ5CK; h9vUF: if (!(count($jawaban_pg2) > 0)) { goto wmstk; } goto UV1nd; V0UZ0: $ada_jawaban_essai = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\65"]); goto ElOIM; E12yp: V0SbR: goto GwR4Z; R5S3s: ThM6v: goto TLQ89; NO29D: $input_pg2 = 0; goto E8HBf; Rydlm: jjobo: goto E12yp; cSHbi: $salah_pg = 0; goto Ie8TG; IQ5CK: if (!($nilai_input != null && $nilai_input->isian_nilai != null)) { goto Y6Nj2; } goto cVyOv; G_xhw: vPxyJ: goto OejA4; xjtYy: Df295: goto W2vN1; VMimp: array_push($insets, $insert); goto bbfQz; oX8is: if (!($info->tampil_jodohkan > 0)) { goto v6fBp; } goto ZPpVq; eTxkp: $insert["\151\x64\137\x6a\x61\x64\x77\141\154"] = $jadwal; goto orDwT; bbfQz: pk3L0: goto AarmM; XmbpI: sJwa7: goto QXaaB; JCwBo: if (!($info->tampil_isian > 0)) { goto sJwa7; } goto pl6Mx; FKAPD: if (!($info->tampil_kompleks > 0)) { goto bSRhL; } goto h9vUF; blEnV: if (!($nilai_input != null && $nilai_input->jodohkan_nilai != null)) { goto MRNzS; } goto LN6qV; cVyOv: $input_is = $nilai_input->isian_nilai; goto bwXFo; GFJWg: $skor_koreksi_pg2 = 0.0; goto EgDwv; sy_3u: $insert["\x69\163\151\x61\x6e\x5f\x6e\x69\154\141\x69"] = round($skor_is, 2); goto N2vxX; laK1O: cuQ5c: goto V17JC; iFiam: $skor_koreksi_jod = 0.0; goto FOYDb; y8XWh: $skor_pg = $bagi_pg == 0 ? 0 : $benar_pg / $bagi_pg * $bobot_pg; goto WqRTB; Ie8TG: if (!($info->tampil_pg > 0)) { goto KpnGp; } goto PbRi7; wwz7T: MRNzS: goto Vek1R; WC1Bv: foreach ($jawaban_jodoh as $num => $jawab_jod) { goto waSS1; IiUGX: foreach ($arrJwbJawab as $p => $ajjs) { goto BgGEp; oDnwN: FDU9L: goto p1GcC; BgGEp: foreach ($ajjs->subtitle as $pp => $ajs) { goto yEPOE; VMS0Y: $item_salah++; goto n4mOt; RzjdC: z_SBH: goto rOQDl; rOQDl: HwC_B: goto KgI1x; n4mOt: goto z_SBH; goto cqdxO; yEPOE: if (in_array($ajs, $arrJwbSoal[$p]->subtitle)) { goto Zm7aa; } goto VMS0Y; cqdxO: Zm7aa: goto DDW2T; DDW2T: $item_benar++; goto RzjdC; KgI1x: } goto Me4wS; Me4wS: g5xuY: goto oDnwN; p1GcC: } goto pNngg; Jrw3K: $headSoal = array_shift($arrSoal); goto SWSW0; v6Bwm: $otomatis_jod = $jawab_jod->nilai_otomatis; goto AX0tm; eQRED: wNaM_: goto FaXf3; thgQD: $arrJwbJawab = []; goto IEFMN; YEW1T: $benar_jod += 1 / $items * $item_benar; goto v6Bwm; jb5s2: $headJawab = array_shift($arrJawab); goto thgQD; nCLLp: $arrJawab = $jawab_jod->jawaban_siswa->jawaban; goto jb5s2; SWSW0: $arrJwbSoal = []; goto QGGsT; waSS1: $skor_koreksi_jod += $jawab_jod->nilai_koreksi; goto JaIZf; FaXf3: $item_benar = 0; goto SP_uo; pNngg: F4Q1h: goto YEW1T; nq2Y9: KOvlv: goto nCLLp; AX0tm: e_ooc: goto euew9; QGGsT: $items = 0; goto iz3Yw; IEFMN: foreach ($arrJawab as $kolJawab) { goto Mec8L; Z48aV: foreach ($kolJawab as $po => $kol) { goto mTdRq; mTdRq: if (!($kol == "\x31")) { goto NSvGp; } goto znUaq; rpRbU: NSvGp: goto cuR3E; znUaq: $sub = $headJawab[$po]; goto T7PxB; T7PxB: $jwbs->subtitle[] = $sub; goto rpRbU; cuR3E: wkLxR: goto n37td; n37td: } goto ymWmW; RMUvk: array_push($arrJwbJawab, $jwbs); goto rPysv; Mec8L: $jwbs = new stdClass(); goto Z48aV; rPysv: ggUQJ: goto vmVPj; ymWmW: Pws69: goto RMUvk; vmVPj: } goto eQRED; JaIZf: $arrSoal = $jawab_jod->jawaban_benar->jawaban; goto Jrw3K; SP_uo: $item_salah = 0; goto IiUGX; iz3Yw: foreach ($arrSoal as $kolSoal) { goto Lh_aa; Lh_aa: $jwb = new stdClass(); goto Y1p62; Y1p62: foreach ($kolSoal as $pos => $kol) { goto J3mN2; oQOMq: $jwb->subtitle[] = $headSoal[$pos]; goto mhh9u; mhh9u: $items++; goto sXG9L; sXG9L: Dy_1M: goto kz0Fr; kz0Fr: gJ4vL: goto RUCOK; J3mN2: if (!($kol == "\61")) { goto Dy_1M; } goto oQOMq; RUCOK: } goto v4mZZ; cuo7h: $jwb->title = array_shift($kolSoal); goto V3qiV; v4mZZ: CHCcF: goto cuo7h; V3qiV: array_push($arrJwbSoal, $jwb); goto gUDy5; gUDy5: UPCUA: goto B2CiP; B2CiP: } goto nq2Y9; euew9: } goto R5S3s; y9YeJ: KpnGp: goto y8XWh; PbRi7: if (!(count($jawaban_pg) > 0)) { goto TwgdE; } goto jfns_; b1Z_X: IkNpu: goto Rydlm; Ihhxs: $s_jod = $bagi_jodoh == 0 ? 0 : $benar_jod / $bagi_jodoh * $bobot_jodoh; goto W0c4p; uFGmi: $skor_koreksi_es = 0.0; goto EPe8u; fl5ck: if (!($info->tampil_esai > 0)) { goto V0SbR; } goto P2IMw; A2lbx: foreach ($jawaban_es as $num => $jawab_es) { goto lJAvD; oPq23: $otomatis_es = $jawab_es->nilai_otomatis; goto LpHws; lJAvD: $skor_koreksi_es += $jawab_es->nilai_koreksi; goto OV9aT; LpHws: C6urh: goto Cs841; aAotz: fKOyu: goto oPq23; OV9aT: $benar = $jawab_es != null && strtolower($jawab_es->jawaban_siswa) == strtolower($jawab_es->jawaban_benar); goto XY__z; izobu: $benar_es++; goto aAotz; XY__z: if (!$benar) { goto fKOyu; } goto izobu; Cs841: } goto b1Z_X; V17JC: TwgdE: goto y9YeJ; WqRTB: $jawaban_pg2 = $ada_jawaban_pg2 ? $jawabans_siswa[$siswa->id_siswa]["\x32"] : []; goto jySgz; QXaaB: $s_is = $bagi_isian == 0 ? 0 : $benar_is / $bagi_isian * $bobot_isian; goto SQ3ba; P2IMw: if (!(count($jawaban_es) > 0)) { goto jjobo; } goto A2lbx; ElOIM: $nilai_input = $this->cbt->getNilaiSiswaByJadwal($jadwal, $siswa->id_siswa); goto lNBR0; WF8oi: $skor_is = $input_is != 0 ? $input_is : ($otomatis_is == 0 ? $s_is : $skor_koreksi_is); goto Mx7mZ; T_9nq: $input_es = $nilai_input->essai_nilai; goto rl_HC; lwuNw: $input_pg2 = $nilai_input->kompleks_nilai; goto G_xhw; bwXFo: Y6Nj2: goto WF8oi; UV1nd: foreach ($jawaban_pg2 as $num => $jawab_pg2) { goto sbBbd; sbBbd: $otomatis_pg2 = $jawab_pg2->nilai_otomatis; goto ihBzy; V_uIi: IxoCa: goto n6Cer; F365O: KjzVo: goto raz8b; oJYE5: foreach ($jawab_pg2->jawaban_siswa as $js) { goto JbUp8; U7wsr: i9fjk: goto WH2cF; FPJgA: Ie5KJ: goto U7wsr; m5QgD: array_push($arr_benar, true); goto FPJgA; JbUp8: if (!in_array($js, $jawab_pg2->jawaban_benar)) { goto Ie5KJ; } goto m5QgD; WH2cF: } goto F365O; raz8b: $benar_pg2 += 1 / count($jawab_pg2->jawaban_benar) * count($arr_benar); goto V_uIi; mYXYC: $arr_benar = []; goto oJYE5; ihBzy: $skor_koreksi_pg2 += $jawab_pg2->nilai_koreksi; goto mYXYC; n6Cer: } goto xjtYy; aaDRC: $s_pg2 = $bagi_pg2 == 0 ? 0 : $benar_pg2 / $bagi_pg2 * $bobot_pg2; goto NO29D; W2vN1: wmstk: goto poelW; RW4rI: $ada_jawaban = isset($jawabans_siswa[$siswa->id_siswa]); goto A6sBz; mCPB1: foreach ($jawaban_is as $num => $jawab_is) { goto Vh54x; n1hrP: $otomatis_is = $jawab_is->nilai_otomatis; goto fcoLj; fk2i7: i8yW6: goto n1hrP; Cu6i4: $benar_is++; goto fk2i7; wvDq9: if (!$benar) { goto i8yW6; } goto Cu6i4; Vh54x: $skor_koreksi_is += $jawab_is->nilai_koreksi; goto k7cj7; fcoLj: MoFLk: goto DWyZD; k7cj7: $benar = $jawab_is != null && strtolower($jawab_is->jawaban_siswa) == strtolower($jawab_is->jawaban_benar); goto wvDq9; DWyZD: } goto djf23; A6sBz: $ada_jawaban_pg = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x31"]); goto H_cV0; FOYDb: $otomatis_jod = 0; goto oX8is; orDwT: $insert["\x70\x67\x5f\142\x65\x6e\141\x72"] = $benar_pg; goto w2w54; YA3jt: $benar_is = 0; goto P7aqa; Vek1R: $skor_jod = $input_jod != 0 ? $input_jod : ($otomatis_jod == 0 ? $s_jod : $skor_koreksi_jod); goto VbCtc; uRFou: $jawaban_jodoh = $ada_jawaban_jodoh ? $jawabans_siswa[$siswa->id_siswa]["\x33"] : []; goto fBuLM; ZPpVq: if (!(count($jawaban_jodoh) > 0)) { goto l6GJL; } goto WC1Bv; KPu8f: $insert["\152\157\x64\157\x68\153\141\156\x5f\x6e\x69\x6c\x61\x69"] = round($skor_jod, 2); goto sy_3u; Astf8: $benar_es = 0; goto uFGmi; Mx7mZ: $jawaban_es = $ada_jawaban_essai ? $jawabans_siswa[$siswa->id_siswa]["\x35"] : []; goto Astf8; LN6qV: $input_jod = $nilai_input->jodohkan_nilai; goto wwz7T; eRDJ_: $ada_jawaban_isian = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x34"]); goto V0UZ0; lNBR0: $jawaban_pg = $ada_jawaban_pg ? $jawabans_siswa[$siswa->id_siswa]["\61"] : []; goto Nmt00; pl6Mx: if (!(count($jawaban_is) > 0)) { goto voOZL; } goto mCPB1; poelW: bSRhL: goto aaDRC; AarmM: } goto sgJWk; gtA3y: $bobot_isian = $info->bobot_isian / 100; goto ORjvV; bFnMR: TZmgO: goto CzmT1; zBXNR: $bobot_pg = $info->bobot_pg / 100; goto xQHoR; aTdGb: $bagi_isian = $info->tampil_isian / 100; goto gtA3y; ray6q: $jawabans_siswa = []; goto cQEUV; tWGSH: $update = $this->db->update_batch("\143\x62\x74\137\156\151\x6c\x61\x69", $insets, "\x69\144\x5f\156\151\x6c\x61\151"); goto kX0E3; sgJWk: BFTwJ: goto tWGSH; LNJjR: GuWvg: goto iUB3Y; eR1Kt: } private function nilaiSignifikansi($jml) { goto TrW6y; dkTXP: if (isset($list[$keys]["\65"])) { goto YN88u; } goto RP7zZ; NZ0BP: YN88u: goto h86kh; TOeCC: anIS1: goto dkTXP; PE_go: if (isset($list[$jml])) { goto x5ALS; } goto M8hI0; Bc_7L: ZNyF6: goto PVCWg; RDHNO: goto Kazht; goto NZ0BP; h86kh: return $list[$keys]["\x35"]; goto dl8Oa; HwSvo: $keys = 4; goto TOeCC; hTO0M: return $list[$jml]["\61"]; goto caxnY; TrW6y: $list = [3 => [5 => 0.997], [1 => 0.999], 4 => [5 => 0.95], [1 => 0.99], 5 => [5 => 0.878], [1 => 0.959], 6 => [5 => 0.8110000000000001], [1 => 0.917], 7 => [5 => 0.754], [1 => 0.874], 8 => [5 => 0.707], [1 => 0.834], 9 => [5 => 0.666], [1 => 0.798], 10 => [5 => 0.632], [1 => 0.765], 11 => [5 => 0.602], [1 => 0.735], 12 => [5 => 0.576], [1 => 0.708], 13 => [5 => 0.553], [1 => 0.6840000000000001], 14 => [5 => 0.532], [1 => 0.661], 15 => [5 => 0.514], [1 => 0.641], 16 => [5 => 0.497], [1 => 0.623], 17 => [5 => 0.482], [1 => 0.606], 18 => [5 => 0.468], [1 => 0.59], 19 => [5 => 0.456], [1 => 0.575], 20 => [5 => 0.444], [1 => 0.5610000000000001], 21 => [5 => 0.433], [1 => 0.549], 22 => [5 => 0.423], [1 => 0.537], 23 => [5 => 0.413], [1 => 0.526], 24 => [5 => 0.404], [1 => 0.515], 25 => [5 => 0.396], [1 => 0.505], 26 => [5 => 0.388], [1 => 0.496], 27 => [5 => 0.381], [1 => 0.487], 28 => [5 => 0.374], [1 => 0.478], 29 => [5 => 0.367], [1 => 0.47], 30 => [5 => 0.361], [1 => 0.463], 31 => [5 => 0.355], [1 => 0.456], 32 => [5 => 0.349], [1 => 0.449], 33 => [5 => 0.344], [1 => 0.442], 34 => [5 => 0.339], [1 => 0.436], 35 => [5 => 0.334], [1 => 0.43], 36 => [5 => 0.329], [1 => 0.424], 37 => [5 => 0.325], [1 => 0.418], 38 => [5 => 0.32], [1 => 0.413], 39 => [5 => 0.316], [1 => 0.408], 40 => [5 => 0.312], [1 => 0.403], 41 => [5 => 0.308], [1 => 0.398], 42 => [5 => 0.304], [1 => 0.393], 43 => [5 => 0.301], [1 => 0.389], 44 => [5 => 0.297], [1 => 0.384], 45 => [5 => 0.294], [1 => 0.38], 46 => [5 => 0.291], [1 => 0.376], 47 => [5 => 0.288], [1 => 0.372], 48 => [5 => 0.284], [1 => 0.368], 49 => [5 => 0.281], [1 => 0.364], 50 => [5 => 0.279], [1 => 0.361], 55 => [5 => 0.266], [1 => 0.345], 60 => [5 => 0.254], [1 => 0.33], 65 => [5 => 0.244], [1 => 0.317], 70 => [5 => 0.235], [1 => 0.306], 75 => [5 => 0.227], [1 => 0.296], 80 => [5 => 0.22], [1 => 0.286], 85 => [5 => 0.213], [1 => 0.278], 90 => [5 => 0.207], [1 => 0.27], 95 => [5 => 0.202], [1 => 0.263], 100 => [5 => 0.195], [1 => 0.256], 125 => [5 => 0.176], [1 => 0.23], 150 => [5 => 0.159], [1 => 0.21], 175 => [5 => 0.149], [1 => 0.194], 200 => [5 => 0.138], [1 => 0.191], 300 => [5 => 0.113], [1 => 0.181], 400 => [5 => 0.098], [1 => 0.148], 500 => [5 => 0.08799999999999999], [1 => 0.128], 600 => [5 => 0.08], [1 => 0.115], 700 => [5 => 0.074], [1 => 0.105], 800 => [5 => 0.07000000000000001], [1 => 0.091], 900 => [5 => 0.065], [1 => 0.08599999999999999], 1000 => [5 => 0.062], [1 => 0.081]]; goto PE_go; M8hI0: $keys = $this->getClosest($jml, array_keys($list)); goto qin3z; dl8Oa: Kazht: goto IuecJ; caxnY: goto uh_sz; goto iouTz; Ms5q7: return $list[$jml]["\x35"]; goto GucAI; iouTz: qebs9: goto Ms5q7; IuecJ: goto ZNyF6; goto wvbbk; GucAI: uh_sz: goto Bc_7L; wvbbk: x5ALS: goto r60WG; RP7zZ: return $list[$keys]["\x31"]; goto RDHNO; qin3z: if (!($keys < 4)) { goto anIS1; } goto HwSvo; r60WG: if (isset($list[$jml]["\65"])) { goto qebs9; } goto hTO0M; PVCWg: } function getClosest($search, $arr) { goto GG2iU; GG2iU: $closest = null; goto JfxpZ; Uc4sC: return $closest; goto vc_ZB; lTw9m: VBXyq: goto Uc4sC; JfxpZ: foreach ($arr as $item) { goto j_I2o; j_I2o: if (!($closest === null || abs($search - $closest) > abs($item - $search))) { goto GMTtx; } goto oXUPX; oXUPX: $closest = $item; goto cEUkj; C3dnD: RZYdy: goto rH7f1; cEUkj: GMTtx: goto C3dnD; rH7f1: } goto lTw9m; vc_ZB: } }
