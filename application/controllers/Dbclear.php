<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\123\x45\x50\101\124\110") or exit("\116\157\40\144\x69\162\145\143\164\x20\163\x63\162\x69\x70\164\x20\x61\143\x63\x65\x73\163\40\x61\x6c\x6c\x6f\x77\145\x64"); class Dbclear extends CI_Controller { public function __construct() { goto fJ9_a; XsANO: goto AgAFq; goto q0Rse; nZ5iM: eyF6M: goto XsANO; ywG5H: $this->load->helper("\x64\x69\x72\x65\x63\164\x6f\x72\171"); goto aOwLU; aqrsl: AgAFq: goto r90k5; fJ9_a: parent::__construct(); goto P2ujN; q0Rse: SfUre: goto em3qz; N9xD0: if ($this->ion_auth->is_admin()) { goto eyF6M; } goto VjHyG; Ucszq: $this->load->dbforge(); goto JrOnA; VjHyG: show_error("\110\141\156\171\141\x20\101\144\x6d\151\156\x20\171\x61\156\x67\x20\142\x6f\154\145\150\40\155\145\156\147\x61\x6b\x73\x65\x73\40\x68\x61\154\x61\155\141\x6e\x20\x69\156\x69", 403, "\101\153\163\145\x73\40\x64\x69\x6c\x61\162\x61\156\147"); goto nZ5iM; r90k5: $this->load->library("\165\x70\x6c\157\x61\144"); goto Ucszq; em3qz: redirect("\141\165\164\150"); goto aqrsl; JrOnA: $this->load->model("\x53\145\164\164\151\156\x67\x73\137\x6d\157\144\x65\154", "\x73\x65\x74\164\x69\x6e\147\x73"); goto Sh0Fm; P2ujN: if (!$this->ion_auth->logged_in()) { goto SfUre; } goto N9xD0; Sh0Fm: $this->load->model("\104\x61\x73\150\x62\x6f\x61\x72\144\x5f\x6d\157\144\145\154", "\x64\141\x73\150\x62\x6f\x61\x72\x64"); goto ywG5H; aOwLU: } public function output_json($data, $encode = true) { goto dp9ti; dp9ti: if (!$encode) { goto dw_M1; } goto ukFAw; YZzw8: $this->output->set_content_type("\141\160\160\154\x69\143\141\164\151\x6f\x6e\x2f\x6a\x73\x6f\x6e")->set_output($data); goto En5bm; ukFAw: $data = json_encode($data); goto jl6yr; jl6yr: dw_M1: goto YZzw8; En5bm: } public function index() { goto cvM2m; Zhxno: $this->load->view("\x5f\x74\145\155\160\154\141\164\145\163\57\x64\x61\x73\x68\x62\x6f\x61\162\144\57\137\146\157\157\164\145\162"); goto j2lrb; tkz_A: foreach ($tables as $table) { goto k4jUo; jaHLR: if (in_array($table, $excludes)) { goto bUP5P; } goto w9KZh; Ol6XE: uTQHL: goto P3Zts; d3te_: $this->dbforge->drop_table($table, true); goto YBTy_; nCLDk: goto uTQHL; goto ucVrM; w9KZh: if ($table == "\142\x75\x6b\165\137\156\151\x6c\x61\x69") { goto nWCNf; } goto d3te_; boIJ3: if (!($nums == 0)) { goto nz2Fk; } goto PE9TU; P3Zts: LdCv8: goto okmXX; Cf611: $data_tables[$table_info["\x6b\145\x74"]][] = $table_info; goto hMSf7; YBTy_: goto q8FFN; goto Ra4Qo; E_wRy: $table_info = ["\153\145\164" => $this->keterangan()[$table], "\x73\151\172\145" => $this->settings->rowSize($table), "\x74\141\142\154\145" => $table, "\x6e\x61\x6d\x65" => ucwords($name)]; goto Cf611; nifnN: $nums = $this->db->get("\142\x75\x6b\x75\x5f\156\151\154\x61\151")->num_rows(); goto boIJ3; d3TI9: if (in_array($table, $excludes)) { goto Zq1YB; } goto ydq3l; k4jUo: if (isset($json[$table])) { goto ylgbf; } goto jaHLR; PE9TU: $this->dbforge->drop_table("\142\165\153\x75\137\156\151\x6c\141\151", true); goto XCH92; XCH92: nz2Fk: goto qGcDx; hMSf7: Zq1YB: goto Ol6XE; Ra4Qo: nWCNf: goto nifnN; ydq3l: $name = str_replace("\137", "\40", $table); goto E_wRy; qGcDx: q8FFN: goto qP_YI; ucVrM: ylgbf: goto d3TI9; qP_YI: bUP5P: goto nCLDk; okmXX: } goto Fdu0K; n0U86: $data["\163\155\164"] = $this->dashboard->getSemester(); goto TSawQ; DTADp: $user = $this->ion_auth->user()->row(); goto Q91oz; fhj46: $this->load->view("\137\x74\x65\155\x70\154\141\164\x65\x73\57\144\141\163\150\142\x6f\x61\162\144\x2f\x5f\x68\x65\141\x64\145\162", $data); goto rzGLS; rzGLS: $this->load->view("\x73\x65\x74\x74\151\x6e\x67\57\155\x61\x6e\141\x67\x65"); goto Zhxno; TpPZW: $json = (array) $json; goto DTADp; gmePU: $data["\x74\x70"] = $this->dashboard->getTahun(); goto lDbuv; dmUTY: $tables = $this->db->list_tables(); goto tkz_A; cvM2m: $json = file_get_contents("\56\x2f\141\163\x73\x65\x74\163\x2f\141\x70\x70\57\x64\142\57\144\x61\x74\141\x62\x61\163\x65\56\152\163\x6f\156"); goto EgMZt; Q91oz: $data = ["\165\163\145\162" => $user, "\x6a\165\144\165\x6c" => "\102\145\162\163\x69\x68\x6b\141\156\x20\x44\141\164\141", "\x73\x75\x62\x6a\x75\144\165\x6c" => "\110\x61\x70\165\163\40\x44\x61\164\141", "\160\x72\x6f\146\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\x74\151\x6e\x67" => $this->dashboard->getSetting()]; goto gmePU; SHopo: $excludes = ["\x62\165\x6b\165\x5f\151\x6e\144\165\x6b", "\x61\160\x69\x5f\163\145\164\x74\x69\x6e\147", "\141\160\x69\137\164\157\153\x65\x6e", "\142\165\154\x61\x6e", "\150\141\162\x69", "\163\x65\164\x74\151\156\x67", "\143\142\x74\137\152\x65\156\151\x73", "\x63\142\164\137\x72\x75\x61\x6e\147", "\143\142\164\137\x73\145\x73\151", "\143\142\x74\137\164\x6f\x6b\x65\x6e", "\x6c\x65\x76\145\x6c\x5f\x67\x75\162\x75", "\x6c\145\x76\x65\154\137\x6b\x65\x6c\141\x73", "\x6d\x61\x73\x74\145\162\137\x74\x70", "\x6d\x61\x73\164\145\162\x5f\x73\155\164", "\155\141\163\x74\x65\162\x5f\150\141\162\151\x5f\x65\x66\145\153\x74\x69\146", "\165\x73\x65\x72\x73", "\x67\x72\x6f\165\160\163", "\165\163\x65\x72\x73\137\147\162\x6f\165\160\x73", "\154\x6f\x67\x69\156\137\141\164\x74\x65\155\x70\x74\x73", "\x75\163\x65\x72\163\x5f\x70\162\x6f\146\151\154\145", "\x72\x61\x70\157\162\137\x61\144\x6d\151\156\137\163\145\164\x74\151\156\x67", "\x72\x75\x6e\156\x69\156\147\137\164\x65\x78\164"]; goto pDdlF; Fdu0K: pDPTP: goto G0CNg; TSawQ: $data["\x73\x6d\164\x5f\x61\143\164\151\x76\x65"] = $this->dashboard->getSemesterActive(); goto SHopo; pDdlF: $data_tables = []; goto dmUTY; G0CNg: $data["\x74\141\x62\154\145\163"] = $data_tables; goto fhj46; EgMZt: $json = json_decode($json); goto TpPZW; lDbuv: $data["\x74\160\x5f\x61\143\164\151\166\x65"] = $this->dashboard->getTahunActive(); goto n0U86; j2lrb: } public function hapusTable() { goto rZO6h; feO4X: write_file("\x2e\57\142\141\143\153\165\160\163\x2f\142\x61\143\153\x75\x70\x5f" . $table . "\x5f" . date("\131\x5f\x6d\x5f\144\x5f\x48\137\x69\137\x73") . "\56\163\161\154", $backup); goto cTbaq; Hv5fa: $this->load->dbutil(); goto tdykc; rZO6h: $table = $this->input->post("\164\141\142\x6c\145", true); goto Hv5fa; iHMZB: $this->load->helper("\x66\x69\154\145"); goto feO4X; w0jmH: $backup = $this->dbutil->backup(array($prefs)); goto iHMZB; tdykc: $prefs = ["\x74\x61\x62\x6c\145\163" => array($table), "\x69\x67\156\157\162\145" => array(), "\146\157\x72\155\141\164" => "\x74\x78\x74", "\146\151\154\x65\156\141\155\145" => $table . "\x2e\163\x71\154", "\141\144\144\137\144\x72\x6f\x70" => TRUE, "\x61\144\x64\137\151\156\x73\x65\x72\x74" => TRUE, "\156\145\167\x6c\x69\x6e\145" => "\12"]; goto w0jmH; cTbaq: $this->db->truncate($table); goto BqsBp; BqsBp: $this->output_json(["\x74\x79\x70\x65" => "\x64\x61\x74\x61\142\x61\x73\x65", "\x6d\145\x73\x73\141\x67\145" => "\104\141\164\141\x62\141\x73\x65\40\142\145\x72\150\x61\x73\151\x6c\x20\144\151\150\141\x70\x75\x73"]); goto pU81f; pU81f: } public function truncate() { goto n48lz; mjDE9: $this->output_json(["\x73\164\141\164\165\x73" => true]); goto ZncR3; gsuG5: $this->settings->truncate($tables); goto mjDE9; n48lz: $tables = $this->db->list_tables(); goto gsuG5; ZncR3: } private function keterangan() { $data = ["\141\160\151\x5f\x73\145\164\x74\x69\156\x67" => "\61", "\x61\x70\x69\137\x74\157\x6b\145\x6e" => "\x31", "\142\165\153\x75\x5f\x69\x6e\x64\165\x6b" => "\x31", "\x62\165\154\x61\156" => "\x30", "\x63\x62\164\x5f\x62\x61\x6e\153\x5f\x73\x6f\141\154" => "\x32", "\x63\142\x74\x5f\x64\x75\x72\141\163\151\137\x73\151\x73\x77\x61" => "\x32", "\143\x62\164\x5f\x6a\141\x64\167\141\x6c" => "\62", "\143\x62\164\137\152\x61\x64\x77\x61\x6c\x5f\165\x6a\151\x61\x6e" => "\x32", "\x63\x62\x74\x5f\x6a\x65\156\151\x73" => "\x30", "\x63\142\x74\137\153\145\x6c\141\163\137\162\165\141\x6e\147" => "\x32", "\143\x62\x74\137\x6b\157\160\137\141\142\163\x65\x6e\x73\151" => "\61", "\x63\142\164\x5f\153\157\x70\x5f\142\145\x72\151\164\x61" => "\61", "\143\142\164\137\153\157\160\137\153\x61\x72\164\x75" => "\x31", "\x63\142\164\137\156\x69\154\141\x69" => "\62", "\x63\x62\164\x5f\x6e\x6f\x6d\157\x72\x5f\x70\145\x73\x65\162\164\141" => "\x32", "\143\x62\164\137\x70\x65\156\x67\x61\167\141\163" => "\62", "\x63\x62\x74\137\162\145\153\141\160" => "\x32", "\x63\x62\164\137\162\145\x6b\x61\160\137\156\x69\154\141\x69" => "\x32", "\143\142\164\137\162\x75\141\156\x67" => "\x31", "\143\142\164\x5f\163\x65\163\x69" => "\61", "\x63\142\164\x5f\x73\x65\x73\151\137\163\151\x73\167\141" => "\62", "\x63\x62\164\x5f\x73\157\x61\x6c" => "\62", "\x63\142\164\137\163\x6f\x61\x6c\137\x73\x69\x73\167\x61" => "\x32", "\x63\x62\x74\137\164\x6f\x6b\x65\156" => "\x31", "\147\162\x6f\x75\160\163" => "\x30", "\x68\141\x72\151" => "\x30", "\x6a\x61\x62\x61\164\141\x6e\137\147\x75\x72\165" => "\61", "\x6b\145\x6c\141\163\x5f\x63\x61\164\141\164\141\156\137\155\141\160\x65\154" => "\62", "\x6b\145\154\141\163\137\143\x61\164\x61\164\x61\156\x5f\x77\x61\x6c\x69" => "\x32", "\x6b\145\154\141\x73\137\x65\x6b\x73\164\x72\141" => "\61", "\x6b\x65\154\141\x73\x5f\x6a\141\144\x77\x61\x6c\137\153\x62\x6d" => "\x32", "\153\x65\154\x61\163\137\152\x61\144\x77\x61\x6c\x5f\155\141\160\x65\154" => "\62", "\x6b\x65\154\x61\163\x5f\x6a\x61\x64\167\141\x6c\x5f\155\141\164\x65\162\x69" => "\62", "\x6b\x65\x6c\141\163\137\x6a\x61\x64\x77\141\x6c\x5f\164\x75\147\141\x73" => "\x32", "\x6b\145\154\x61\x73\x5f\155\141\x74\145\162\151" => "\x32", "\x6b\145\x6c\x61\163\137\x73\x69\x73\167\x61" => "\x32", "\x6b\145\x6c\x61\163\x5f\x73\164\x72\165\153\x74\165\162" => "\x32", "\153\145\154\141\163\137\164\165\147\x61\163" => "\x32", "\154\x65\166\145\x6c\x5f\x67\165\162\165" => "\x30", "\154\x65\166\145\154\x5f\x6b\x65\154\x61\163" => "\60", "\154\x6f\x67" => "\62", "\x6c\x6f\147\151\156\137\x61\x74\164\145\155\x70\164\x73" => "\60", "\x6c\x6f\147\x5f\x6d\141\164\145\162\151" => "\62", "\x6c\157\x67\x5f\164\165\147\x61\163" => "\62", "\x6c\157\x67\137\165\x6a\x69\x61\x6e" => "\62", "\155\141\x73\x74\145\162\x5f\x65\x6b\163\164\162\141" => "\61", "\155\x61\x73\164\x65\162\x5f\147\165\162\165" => "\61", "\155\x61\163\x74\x65\x72\x5f\x68\x61\x72\x69\137\145\146\145\x6b\164\151\x66" => "\61", "\x6d\x61\x73\164\x65\x72\137\152\165\162\165\163\x61\x6e" => "\61", "\155\141\163\x74\x65\x72\137\x6b\x65\154\x61\163" => "\x31", "\155\x61\163\x74\145\x72\137\153\x65\154\157\155\160\x6f\153\137\x6d\x61\160\x65\154" => "\61", "\x6d\141\x73\x74\x65\x72\137\155\x61\x70\x65\x6c" => "\61", "\155\141\163\164\x65\x72\x5f\x73\151\x73\167\141" => "\x31", "\x6d\x61\163\x74\145\x72\x5f\x73\x6d\x74" => "\x30", "\155\x61\x73\164\145\162\137\164\160" => "\x30", "\x70\157\163\x74" => "\x32", "\160\x6f\163\x74\137\143\157\x6d\155\145\156\x74\163" => "\x32", "\x70\157\163\x74\137\162\x65\160\154\x79" => "\x32", "\162\141\x70\157\x72\x5f\141\144\155\151\156\x5f\163\x65\x74\x74\x69\x6e\x67" => "\61", "\162\x61\x70\157\162\x5f\x63\141\x74\x61\x74\141\156\x5f\x77\x61\154\151" => "\61", "\x72\x61\160\157\162\137\144\141\x74\x61\x5f\x63\x61\x74\141\164\x61\x6e" => "\x31", "\x72\x61\x70\x6f\x72\137\x64\x61\164\x61\137\146\x69\163\151\x6b" => "\61", "\162\141\x70\157\x72\137\x64\141\164\x61\137\163\x69\153\141\x70" => "\61", "\x72\x61\x70\157\162\137\x66\151\x73\x69\153" => "\61", "\162\x61\x70\x6f\162\x5f\153\x69\153\x64" => "\x31", "\x72\x61\160\x6f\162\137\153\153\x6d" => "\x31", "\162\141\x70\x6f\x72\x5f\x6e\141\x69\x6b" => "\x31", "\162\x61\x70\157\x72\137\156\x69\x6c\x61\x69\137\x61\x6b\x68\151\x72" => "\x31", "\162\141\160\x6f\162\137\156\x69\x6c\141\x69\137\145\x6b\x73\164\x72\x61" => "\x31", "\x72\141\x70\x6f\162\137\x6e\x69\154\141\x69\137\x68\141\x72\151\141\x6e" => "\x31", "\x72\141\160\x6f\x72\x5f\x6e\151\x6c\x61\x69\137\160\x74\x73" => "\61", "\162\x61\160\157\162\x5f\x6e\x69\x6c\x61\x69\137\x73\x69\x6b\x61\x70" => "\x31", "\x72\141\x70\157\162\137\x70\x72\x65\163\164\141\163\151" => "\61", "\162\165\x6e\x6e\151\156\x67\x5f\164\145\170\x74" => "\x31", "\163\145\x74\x74\x69\156\x67" => "\x31", "\x75\x73\145\162\163" => "\x30", "\x75\163\x65\x72\163\x5f\147\162\x6f\x75\160\x73" => "\60", "\x75\163\145\x72\x73\137\x70\x72\x6f\x66\151\154\x65" => "\x30"]; return $data; } }
