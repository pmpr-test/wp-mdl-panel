<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038c93dafa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if (!$this->eaiyocyuoiwqykkq()) { $this->namespace .= "\x2f\160\141\156\x65\154"; } } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if ($aqmwamyiwgeeymqa instanceof WP_REST_Request) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\110\x54\x54\120\x5f\x41\x55\x54\110\117\122\111\132\101\x54\x49\117\116"); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\122\x45\x44\111\x52\105\x43\124\x5f\x48\124\124\120\x5f\101\x55\124\x48\x4f\x52\111\132\101\x54\x49\x4f\116"); } } if (!$mimkcuccekumiiqm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\x54\124\120\x5f\101\x55\x54\110\x4f\x52\x49\x5a\101\x54\111\117\x4e", false); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\122\x45\104\111\122\105\x43\x54\x5f\110\124\x54\120\x5f\x41\125\124\x48\x4f\x52\x49\132\x41\x54\x49\117\116", false); } } if ($mimkcuccekumiiqm) { [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\102\x65\141\162\145\x72\x20\45\x73"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\x6e\x75\x6c\154") { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\110\x53\x32\x35\66"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\165\162\x6c")) { if (isset($osyqkeauyomigiuu->data->user->id)) { $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\145\162\40\111\104\x20\156\x6f\164\x20\x66\157\165\156\x64\x20\x69\156\40\x74\x68\145\x20\164\157\153\145\156", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\x65\40\x69\x73\163\40\144\x6f\40\x6e\x6f\164\x20\x6d\141\164\143\150\40\x77\x69\x74\x68\x20\164\150\151\x73\x20\163\x65\x72\166\145\162", PR__MDL__PANEL), 401); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4a\127\x54\40\x69\x73\40\x6e\x6f\164\40\x63\157\156\146\x69\x67\x75\162\x65\x64\40\160\162\x6f\160\145\162\x6c\171\56", PR__MDL__PANEL), 503); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\165\164\150\157\162\x69\172\x61\164\151\x6f\156\x20\x68\x65\141\144\x65\162\x20\x6d\x61\x6c\146\157\x72\x6d\145\144\x2e", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\x75\x74\x68\157\162\x69\x7a\141\x74\x69\x6f\156\x20\150\145\141\x64\x65\162\x20\x6e\x6f\164\x20\146\x6f\x75\x6e\x64", PR__MDL__PANEL), 401); } return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if ($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce)) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce[2] ?? 0); if (!$mkucggyaiaukqoce) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x73\x65\162\x20\156\x6f\x74\x20\146\157\x75\156\x64", PR__MDL__PANEL), 401); } else { if ($aqykuigiuwmmcieu === Constants::gouqcwikiiygyasc) { $mkucggyaiaukqoce = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); } } } return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x53\105\103\125\122\x45\137\x41\125\x54\x48\137\x4b\x45\131", "\141\165\164\150\55\163\145\x63\162\145\164\55\x6b\x65\x79"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce); return ["\x61\x63\143\157\x75\156\164" => [Constants::eyqgmoumkowegyse => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qykgecyqwasqwoek($yoiguusocukqeayg->eueceegwomaqgqca($mkucggyaiaukqoce, true)), "\162\145\x67\151\163\x74\x65\162\145\x64" => $mkucggyaiaukqoce->user_registered, Constants::csiaccacwgeeqwwo => $mkucggyaiaukqoce->user_login], "\160\145\162\x73\x6f\156\x61\x6c" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
