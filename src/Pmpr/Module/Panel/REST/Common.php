<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ff6abc852             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if (!$this->eaiyocyuoiwqykkq()) { $this->namespace .= "\57\x70\141\x6e\145\154"; } } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if ($aqmwamyiwgeeymqa instanceof WP_REST_Request) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x48\124\124\x50\x5f\101\125\x54\x48\x4f\122\111\x5a\101\x54\111\117\x4e"); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\122\105\104\111\x52\105\103\124\x5f\x48\x54\124\x50\x5f\x41\125\x54\110\x4f\122\111\132\101\124\111\x4f\x4e"); } } if (!$mimkcuccekumiiqm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\124\x54\x50\x5f\101\125\x54\110\117\x52\111\132\x41\124\111\117\x4e", false); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\x52\105\104\111\122\105\103\124\137\110\x54\x54\120\x5f\101\125\124\110\117\122\x49\x5a\x41\124\111\117\116", false); } } if ($mimkcuccekumiiqm) { [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\102\x65\x61\x72\145\x72\40\x25\163"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\x6e\x75\x6c\154") { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\110\x53\62\x35\66"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\165\162\154")) { if (isset($osyqkeauyomigiuu->data->user->id)) { $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\x65\x72\40\111\x44\x20\156\x6f\164\x20\x66\x6f\165\x6e\144\40\151\156\x20\164\x68\x65\x20\x74\x6f\153\145\x6e", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\x65\40\151\163\x73\x20\144\x6f\x20\x6e\157\x74\40\x6d\x61\x74\143\150\x20\167\x69\x74\150\40\164\150\x69\163\40\163\x65\162\x76\145\162", PR__MDL__PANEL), 401); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\127\124\40\151\x73\40\156\x6f\x74\40\x63\157\x6e\x66\x69\147\x75\162\145\x64\x20\160\x72\x6f\x70\x65\x72\154\x79\56", PR__MDL__PANEL), 503); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\165\x74\x68\157\x72\x69\172\141\164\151\x6f\x6e\x20\x68\x65\x61\x64\x65\162\40\155\141\x6c\146\x6f\162\x6d\x65\x64\56", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\165\164\150\157\162\151\172\141\x74\x69\157\156\x20\x68\x65\x61\x64\145\162\40\156\x6f\164\x20\146\157\165\156\144", PR__MDL__PANEL), 401); } return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if ($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce)) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce[2] ?? 0); if (!$mkucggyaiaukqoce) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\163\145\x72\40\x6e\x6f\x74\x20\x66\x6f\165\x6e\x64", PR__MDL__PANEL), 401); } else { if ($aqykuigiuwmmcieu === Constants::gouqcwikiiygyasc) { $mkucggyaiaukqoce = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); } } } return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\123\x45\103\125\122\105\x5f\x41\x55\x54\110\137\x4b\x45\131", "\x61\x75\x74\x68\x2d\163\145\143\x72\x65\x74\x2d\x6b\x65\171"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce); return ["\x61\143\143\x6f\x75\156\164" => [Constants::eyqgmoumkowegyse => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qykgecyqwasqwoek($yoiguusocukqeayg->eueceegwomaqgqca($mkucggyaiaukqoce, true)), "\x72\x65\147\x69\x73\x74\145\x72\145\x64" => $mkucggyaiaukqoce->user_registered, Constants::csiaccacwgeeqwwo => $mkucggyaiaukqoce->user_login], "\160\145\162\x73\157\x6e\x61\154" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
