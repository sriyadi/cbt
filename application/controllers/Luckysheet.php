<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\x45\x50\101\124\110") or exit("\x4e\x6f\40\144\151\162\x65\x63\x74\40\163\x63\162\151\160\x74\x20\x61\143\x63\145\163\x73\40\x61\x6c\154\x6f\x77\145\144"); class Luckysheet extends CI_Controller { public function __construct() { goto cxf_J; pWe68: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\162\165"))) { goto DXo6N; } goto W94jm; eTU63: $this->load->model("\104\x61\163\150\142\x6f\141\x72\144\x5f\155\x6f\x64\x65\154", "\x64\x61\x73\x68\142\157\x61\x72\x64"); goto jyVeu; W94jm: show_error("\110\x61\156\x79\141\40\101\144\155\151\x6e\151\x73\x74\162\141\x74\x6f\x72\40\x79\141\156\x67\40\x64\151\142\145\162\151\40\x68\141\x6b\40\x75\156\164\165\x6b\x20\x6d\145\x6e\x67\141\153\x73\x65\163\40\x68\x61\x6c\141\x6d\x61\156\x20\151\x6e\151\x2c\x20\x3c\141\40\150\x72\145\146\x3d\42" . base_url("\x64\x61\163\150\x62\157\141\162\144") . "\x22\x3e\x4b\x65\x6d\x62\141\x6c\151\40\x6b\x65\40\155\x65\x6e\x75\40\x61\167\141\x6c\74\x2f\141\x3e", 403, "\x41\153\x73\145\163\x20\124\145\162\x6c\141\x72\x61\x6e\147"); goto NF8PC; bFyyl: $this->load->model("\104\162\x6f\160\x64\x6f\x77\156\x5f\x6d\x6f\144\145\x6c", "\x64\162\157\x70\x64\157\167\156"); goto aZdoy; aZdoy: $this->load->model("\x4d\x61\x73\x74\145\162\x5f\155\x6f\x64\145\154", "\155\141\x73\164\x65\162"); goto ZYxmp; wxT9N: $this->load->library(["\x64\141\164\x61\164\141\142\x6c\x65\163", "\x66\157\x72\x6d\137\166\141\154\151\x64\x61\164\151\157\x6e"]); goto eTU63; ZYxmp: $this->form_validation->set_error_delimiters('', ''); goto DxmzM; cxf_J: parent::__construct(); goto mG1S9; b_Swi: goto OuDkR; goto rpQIT; I5pGx: redirect("\141\165\x74\150"); goto O2afA; rpQIT: aL3jD: goto I5pGx; mG1S9: if (!$this->ion_auth->logged_in()) { goto aL3jD; } goto pWe68; NF8PC: DXo6N: goto b_Swi; n0OyN: $this->load->model("\x4b\145\154\x61\x73\x5f\155\x6f\144\x65\154", "\x6b\145\154\141\x73"); goto bFyyl; jyVeu: $this->load->model("\x52\x61\160\157\162\137\x6d\157\144\x65\154", "\x72\x61\x70\x6f\x72"); goto n0OyN; O2afA: OuDkR: goto wxT9N; DxmzM: } public function output_json($data, $encode = true) { goto LHJxb; WecJB: $this->output->set_content_type("\x61\x70\160\154\x69\x63\x61\x74\151\157\x6e\x2f\x6a\163\157\156")->set_output($data); goto zKR3z; GP4CS: gc_kt: goto WecJB; LHJxb: if (!$encode) { goto gc_kt; } goto T1IzI; T1IzI: $data = json_encode($data); goto GP4CS; zKR3z: } public function index() { goto LGAz2; pjLe6: $this->load->view("\155\x65\x6d\142\145\x72\163\57\147\x75\x72\x75\x2f\x74\x65\x6d\160\x6c\141\164\x65\163\57\x66\157\157\164\x65\x72"); goto RfyPO; RrudA: $tp = $this->dashboard->getTahunActive(); goto YKXAK; I6_Cx: $data["\164\x70"] = $this->dashboard->getTahun(); goto oG9UE; UjX9C: $data["\x67\165\x72\x75"] = $guru; goto ZLLNA; rPAih: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto UjX9C; Mjgjm: $this->load->view("\x6d\145\x6d\142\x65\x72\163\x2f\x67\x75\162\165\x2f\x6c\165\143\153\171\x76\151\x65\x77"); goto pjLe6; oG9UE: $data["\164\160\137\141\x63\164\151\x76\x65"] = $tp; goto uIC5F; uIC5F: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto ThVM2; ZLLNA: $this->load->view("\x6d\145\x6d\142\x65\162\x73\x2f\x67\165\162\x75\x2f\x74\x65\x6d\x70\x6c\x61\x74\x65\163\x2f\150\145\141\144\x65\162", $data); goto Mjgjm; hnfVq: $data = ["\x75\x73\145\162" => $user, "\x6a\x75\x64\x75\154" => "\125\x73\x65\x72\40\115\x61\x6e\x61\x67\145\x6d\x65\x6e\x74", "\x73\x75\142\x6a\x75\x64\x75\x6c" => "\104\141\x74\141\x20\125\x73\x65\x72\40\123\x69\163\x77\x61", "\x73\145\164\x74\x69\156\x67" => $this->dashboard->getSetting()]; goto RrudA; YKXAK: $smt = $this->dashboard->getSemesterActive(); goto I6_Cx; ThVM2: $data["\x73\x6d\164\x5f\x61\143\164\x69\166\145"] = $smt; goto rPAih; LGAz2: $user = $this->ion_auth->user()->row(); goto hnfVq; RfyPO: } }
