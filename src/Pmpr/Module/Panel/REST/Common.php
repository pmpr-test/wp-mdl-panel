<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677bb92c09e79             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if (!$this->eaiyocyuoiwqykkq()) { $this->namespace .= "\57\x70\141\x6e\x65\154"; } } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if ($aqmwamyiwgeeymqa instanceof WP_REST_Request) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x48\124\124\120\x5f\x41\125\x54\x48\117\122\111\132\x41\x54\111\117\116"); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\122\105\104\111\x52\x45\103\x54\x5f\x48\124\124\x50\137\101\125\124\x48\117\x52\x49\132\x41\x54\x49\x4f\116"); } } if (!$mimkcuccekumiiqm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\124\124\x50\137\101\x55\124\x48\x4f\122\111\132\x41\x54\111\x4f\116", false); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\x52\x45\x44\x49\122\105\x43\124\137\x48\124\x54\x50\x5f\x41\125\124\110\117\x52\x49\132\x41\124\111\117\x4e", false); } } if ($mimkcuccekumiiqm) { [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\x42\x65\x61\x72\145\x72\40\x25\x73"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\156\x75\154\154") { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\110\x53\x32\65\x36"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\x75\x72\x6c")) { if (isset($osyqkeauyomigiuu->data->user->id)) { $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\x65\162\40\x49\104\40\156\157\x74\40\x66\x6f\x75\156\x64\40\x69\x6e\40\x74\x68\145\x20\164\157\153\145\156", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\145\x20\x69\163\x73\40\x64\x6f\40\156\x6f\164\40\x6d\141\x74\143\x68\x20\x77\x69\164\150\40\x74\150\x69\163\x20\163\145\162\166\145\162", PR__MDL__PANEL), 401); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\x57\124\x20\x69\163\x20\156\x6f\164\x20\143\x6f\x6e\146\x69\147\x75\x72\x65\x64\40\x70\162\157\160\x65\162\154\171\56", PR__MDL__PANEL), 503); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\165\x74\x68\x6f\x72\x69\172\141\164\151\x6f\156\x20\150\145\141\x64\x65\162\x20\x6d\x61\154\146\157\162\155\145\x64\x2e", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\165\x74\x68\157\162\151\x7a\141\x74\x69\x6f\156\40\x68\145\x61\144\x65\162\40\x6e\157\x74\x20\x66\x6f\x75\x6e\144", PR__MDL__PANEL), 401); } return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if ($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce)) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce[2] ?? 0); if (!$mkucggyaiaukqoce) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\163\145\x72\40\156\157\164\40\x66\157\165\x6e\x64", PR__MDL__PANEL), 401); } else { if ($aqykuigiuwmmcieu === Constants::gouqcwikiiygyasc) { $mkucggyaiaukqoce = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); } } } return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x53\105\x43\x55\122\105\x5f\101\125\124\110\137\113\105\x59", "\x61\x75\x74\150\55\163\145\143\x72\145\164\55\x6b\x65\171"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce); return ["\141\x63\x63\x6f\x75\x6e\164" => [Constants::eyqgmoumkowegyse => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qykgecyqwasqwoek($yoiguusocukqeayg->eueceegwomaqgqca($mkucggyaiaukqoce, true)), "\x72\x65\x67\151\x73\x74\x65\162\145\144" => $mkucggyaiaukqoce->user_registered, Constants::csiaccacwgeeqwwo => $mkucggyaiaukqoce->user_login], "\160\145\x72\x73\157\x6e\x61\154" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
