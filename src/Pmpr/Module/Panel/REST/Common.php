<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae9148b849             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if ($this->eaiyocyuoiwqykkq()) { goto sukskmcwsoysiuqu; } $this->namespace .= "\57\x70\x61\x6e\x65\x6c"; sukskmcwsoysiuqu: } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if (!$aqmwamyiwgeeymqa instanceof WP_REST_Request) { goto mqccmesakuemceqi; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\110\124\x54\x50\x5f\x41\x55\x54\x48\117\x52\111\132\x41\x54\x49\117\116"); if ($mimkcuccekumiiqm) { goto igymseewwyiocoug; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x52\x45\104\x49\x52\105\103\x54\137\x48\124\x54\120\137\101\x55\x54\110\117\x52\111\132\101\124\111\x4f\116"); igymseewwyiocoug: mqccmesakuemceqi: if ($mimkcuccekumiiqm) { goto twkmiuomimomscew; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\x54\124\x50\137\x41\x55\x54\x48\117\122\111\132\101\x54\x49\117\116", false); if ($mimkcuccekumiiqm) { goto eyiamcekkgkiawqy; } $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\122\x45\x44\x49\x52\x45\x43\x54\137\110\124\x54\120\137\x41\x55\x54\x48\x4f\x52\x49\x5a\x41\124\111\117\116", false); eyiamcekkgkiawqy: twkmiuomimomscew: if ($mimkcuccekumiiqm) { goto oouoqimaaqcmccay; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x75\x74\150\x6f\x72\151\172\141\164\151\x6f\x6e\x20\150\x65\141\x64\x65\x72\40\x6e\x6f\x74\x20\x66\x6f\x75\x6e\144", PR__MDL__PANEL), 401); goto sycygoiaiqqageym; oouoqimaaqcmccay: [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\102\145\x61\162\145\x72\40\x25\x73"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\x6e\x75\154\x6c") { goto siqagquguiemuoku; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\x75\164\x68\x6f\162\x69\172\x61\164\x69\x6f\x6e\40\x68\x65\141\x64\x65\162\x20\x6d\x61\154\146\x6f\x72\155\145\144\56", PR__MDL__PANEL), 401); goto ycakugokkqkuqyiu; siqagquguiemuoku: $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto ieumumsgyguceusy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\127\x54\x20\x69\x73\x20\156\157\x74\40\x63\157\x6e\x66\x69\147\x75\x72\x65\x64\x20\x70\x72\x6f\160\145\x72\x6c\171\x2e", PR__MDL__PANEL), 503); goto coywmiyqgsweuiic; ieumumsgyguceusy: try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\110\x53\62\x35\66"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\165\x72\154")) { goto qcessicwuikwqsis; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\145\x20\x69\163\163\x20\144\157\x20\156\157\164\x20\x6d\x61\x74\x63\x68\40\x77\x69\x74\x68\x20\164\150\151\x73\40\x73\x65\162\x76\x65\162", PR__MDL__PANEL), 401); goto yssscwioiyygssec; qcessicwuikwqsis: if (isset($osyqkeauyomigiuu->data->user->id)) { goto kooskuwkuayiuose; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x73\145\x72\40\111\104\x20\156\157\x74\x20\146\x6f\165\x6e\x64\x20\x69\x6e\x20\164\150\145\40\x74\x6f\x6b\145\x6e", PR__MDL__PANEL), 401); goto qwcegcuowwgiccos; kooskuwkuayiuose: $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; qwcegcuowwgiccos: yssscwioiyygssec: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } coywmiyqgsweuiic: ycakugokkqkuqyiu: sycygoiaiqqageym: return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce))) { goto kciouyuaqkyqomam; } $mkucggyaiaukqoce = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mkucggyaiaukqoce, 2); $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($mkucggyaiaukqoce); if ($mkucggyaiaukqoce) { goto gygawoqywkukmqee; } $mkucggyaiaukqoce = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\145\162\40\x6e\157\x74\x20\x66\157\165\156\x64", PR__MDL__PANEL), 401); gygawoqywkukmqee: kciouyuaqkyqomam: return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x53\105\x43\125\122\105\x5f\x41\125\x54\x48\x5f\x4b\105\x59", "\x61\x75\x74\150\55\x73\x65\143\162\x65\x74\55\x6b\x65\171"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce); return ["\141\143\x63\x6f\x75\x6e\x74" => [Constants::eyqgmoumkowegyse => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qykgecyqwasqwoek($yoiguusocukqeayg->eueceegwomaqgqca($mkucggyaiaukqoce, true)), "\x72\145\x67\x69\x73\164\145\x72\x65\x64" => $mkucggyaiaukqoce->user_registered, Constants::csiaccacwgeeqwwo => $mkucggyaiaukqoce->user_login], "\x70\x65\x72\163\x6f\156\141\x6c" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
