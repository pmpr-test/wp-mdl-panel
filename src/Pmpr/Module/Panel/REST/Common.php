<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679574b2da312             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if (!$this->eaiyocyuoiwqykkq()) { $this->namespace .= "\x2f\x70\x61\156\145\154"; } } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if ($aqmwamyiwgeeymqa instanceof WP_REST_Request) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\110\124\x54\x50\x5f\101\125\x54\x48\x4f\x52\x49\132\x41\x54\x49\117\116"); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x52\x45\104\111\122\105\103\x54\137\110\x54\x54\x50\137\101\125\x54\110\117\122\x49\132\101\124\111\117\x4e"); } } if (!$mimkcuccekumiiqm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\124\x54\x50\137\x41\125\124\110\x4f\122\111\132\x41\124\x49\117\116", false); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\x52\x45\104\111\x52\105\x43\124\x5f\110\x54\124\x50\137\101\x55\x54\110\117\122\x49\x5a\x41\x54\x49\x4f\116", false); } } if ($mimkcuccekumiiqm) { [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\x42\145\x61\x72\145\x72\40\45\x73"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\x6e\x75\154\154") { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\x48\x53\62\65\x36"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\x75\162\x6c")) { if (isset($osyqkeauyomigiuu->data->user->id)) { $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\163\145\x72\x20\x49\x44\x20\x6e\157\x74\40\x66\157\x75\156\x64\x20\151\x6e\40\x74\150\145\x20\164\157\x6b\x65\x6e", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\x20\x69\x73\x73\x20\144\x6f\x20\156\157\x74\x20\x6d\x61\x74\x63\x68\x20\167\151\x74\150\40\164\150\151\163\40\x73\x65\162\166\145\x72", PR__MDL__PANEL), 401); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4a\127\x54\40\151\163\40\x6e\x6f\164\x20\x63\157\156\x66\151\x67\165\162\145\144\x20\x70\x72\157\x70\x65\162\x6c\x79\56", PR__MDL__PANEL), 503); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\x75\164\150\157\162\151\172\141\164\151\x6f\x6e\40\150\145\141\x64\145\x72\40\x6d\141\154\146\x6f\x72\155\145\144\x2e", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x75\x74\x68\x6f\162\x69\x7a\141\164\151\x6f\x6e\40\150\145\x61\144\x65\x72\40\156\x6f\164\x20\146\157\165\156\144", PR__MDL__PANEL), 401); } return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if ($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce)) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce[2] ?? 0); if (!$mkucggyaiaukqoce) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\163\145\162\40\x6e\x6f\x74\40\146\x6f\x75\156\144", PR__MDL__PANEL), 401); } else { if ($aqykuigiuwmmcieu === Constants::gouqcwikiiygyasc) { $mkucggyaiaukqoce = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); } } } return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\123\105\x43\125\x52\105\137\x41\125\124\x48\137\x4b\x45\x59", "\141\165\164\x68\x2d\163\x65\143\162\x65\x74\x2d\x6b\145\171"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce); return ["\141\143\x63\x6f\x75\x6e\164" => [Constants::eyqgmoumkowegyse => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qykgecyqwasqwoek($yoiguusocukqeayg->eueceegwomaqgqca($mkucggyaiaukqoce, true)), "\162\x65\147\151\x73\164\x65\162\145\144" => $mkucggyaiaukqoce->user_registered, Constants::csiaccacwgeeqwwo => $mkucggyaiaukqoce->user_login], "\x70\145\x72\163\157\156\141\154" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
