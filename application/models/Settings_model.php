<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\x45\x50\101\124\x48") or exit("\x4e\157\40\x64\151\162\145\x63\x74\x20\x73\x63\x72\x69\x70\x74\x20\x61\143\143\145\x73\163\40\141\x6c\x6c\157\x77\x65\144"); class Settings_model extends CI_Model { public function not_admin() { goto quQar; yewWY: $this->db->from("\165\x73\x65\162\163\x20\141"); goto wptSA; ZU_eR: $this->db->where_not_in("\142\56\x67\x72\157\165\160\x5f\151\144", ["\61"]); goto OPkiV; OPkiV: return $this->db->get()->result(); goto ViUUm; wptSA: $this->db->join("\x75\x73\145\x72\163\x5f\147\x72\x6f\165\160\163\40\x62", "\141\x2e\151\x64\x3d\142\56\165\163\145\x72\137\151\144"); goto ZU_eR; quQar: $this->db->select("\x61\56\x69\144"); goto yewWY; ViUUm: } public function truncate($table) { goto tFmwK; Y0xpj: $users = $this->not_admin(); goto MRP8O; ryk_y: $this->db->query("\x53\105\124\40\106\x4f\x52\x45\111\x47\116\x5f\113\105\131\137\103\110\x45\103\113\123\40\x3d\x20\60"); goto ILl01; ILl01: foreach ($table as $tb) { $this->db->truncate($tb); lFM9W: } goto UJtWV; nbBbq: delete_files("\56\x2f\165\x70\x6c\x6f\x61\144\x73\x2f\x62\141\156\x6b\137\163\157\141\x6c\x2f"); goto Y0xpj; MRP8O: foreach ($users as $user) { $this->db->delete("\165\163\x65\x72\163", array("\x69\144" => $user->id)); z7qMH: } goto fPB2_; tFmwK: $this->load->helper("\146\x69\x6c\x65"); goto ryk_y; fPB2_: VUM1p: goto Z7006; UJtWV: bG54C: goto W_JNb; Z7006: return; goto shFuo; W_JNb: $this->db->query("\123\105\124\x20\x46\x4f\122\x45\x49\107\116\137\113\x45\131\137\x43\110\105\x43\113\123\40\x3d\40\61"); goto nbBbq; shFuo: } public function getSetting() { return $this->db->get("\x73\145\x74\164\151\156\x67")->row(); } function toJSON($table) { $query = $this->db->get($table); return json_encode($query->result(), JSON_PRETTY_PRINT); } function rowSize($table) { $query = $this->db->get($table); return $query->num_rows(); } }
