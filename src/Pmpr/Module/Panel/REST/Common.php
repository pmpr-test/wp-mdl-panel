<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6776ec3c4e5fd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if (!$this->eaiyocyuoiwqykkq()) { $this->namespace .= "\57\x70\141\x6e\x65\x6c"; } } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if ($aqmwamyiwgeeymqa instanceof WP_REST_Request) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x48\124\x54\120\x5f\x41\125\x54\x48\117\122\111\x5a\x41\x54\x49\117\116"); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\122\x45\x44\x49\122\105\103\124\137\x48\x54\124\120\137\101\x55\124\x48\x4f\x52\x49\x5a\x41\124\x49\117\116"); } } if (!$mimkcuccekumiiqm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\x54\124\120\137\x41\125\124\110\x4f\122\x49\x5a\101\124\111\x4f\x4e", false); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\122\x45\104\111\122\105\x43\124\137\110\124\124\x50\137\101\x55\124\x48\x4f\x52\x49\132\x41\124\x49\117\x4e", false); } } if ($mimkcuccekumiiqm) { [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\102\x65\x61\x72\x65\162\40\45\x73"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\156\165\x6c\154") { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\110\x53\x32\65\66"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\x75\162\x6c")) { if (isset($osyqkeauyomigiuu->data->user->id)) { $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\x65\x72\40\x49\104\x20\x6e\157\x74\40\x66\157\x75\x6e\144\40\151\156\40\x74\150\x65\40\164\157\x6b\145\156", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\x65\40\151\163\163\x20\x64\157\40\156\157\x74\40\155\x61\x74\x63\x68\x20\x77\x69\x74\150\x20\164\150\151\163\x20\x73\145\x72\x76\145\x72", PR__MDL__PANEL), 401); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4a\x57\x54\40\151\163\x20\156\x6f\x74\x20\143\157\156\146\151\147\165\x72\145\x64\x20\160\x72\157\160\145\x72\154\x79\56", PR__MDL__PANEL), 503); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\x75\164\150\x6f\162\x69\172\141\164\x69\157\x6e\40\150\145\x61\144\145\x72\x20\155\141\154\146\x6f\x72\155\145\x64\56", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\165\164\x68\x6f\x72\x69\x7a\x61\164\x69\157\x6e\x20\150\145\x61\144\145\162\x20\156\157\x74\40\146\157\x75\x6e\x64", PR__MDL__PANEL), 401); } return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if ($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce)) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mkucggyaiaukqoce, 2); $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($mkucggyaiaukqoce); if (!$mkucggyaiaukqoce) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\x65\x72\x20\156\157\164\x20\x66\x6f\x75\x6e\x64", PR__MDL__PANEL), 401); } } return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x53\x45\x43\125\x52\105\137\x41\x55\124\110\x5f\x4b\x45\131", "\141\x75\164\150\x2d\x73\145\x63\x72\145\x74\55\x6b\x65\171"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce); return ["\141\x63\x63\157\x75\x6e\164" => [Constants::eyqgmoumkowegyse => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qykgecyqwasqwoek($yoiguusocukqeayg->eueceegwomaqgqca($mkucggyaiaukqoce, true)), "\162\145\147\151\x73\164\x65\x72\145\144" => $mkucggyaiaukqoce->user_registered, Constants::csiaccacwgeeqwwo => $mkucggyaiaukqoce->user_login], "\160\x65\162\x73\157\156\141\154" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
