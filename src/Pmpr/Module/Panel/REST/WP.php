<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3f702008             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class WP extends Common { public function __construct() { $this->rest_base = 'wp'; parent::__construct(); } public function register_routes() { $this->register('/get-attachment', [Constants::wwgusigoaksqmwsm => [$this, 'iqsmaqoiukeasukw']]); } public function iqsmaqoiukeasukw(WP_REST_Request $aqmwamyiwgeeymqa) { $aqykuigiuwmmcieu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::aisguagukaewucii); $cwgqkcumeaswoscu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::cqycgsyykemiygou); if ($aqykuigiuwmmcieu && $cwgqkcumeaswoscu) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aiooqyausygaasqm = $seumokooiykcomco->get($cwgqkcumeaswoscu, Constants::ckmqoekmugkggeym, true); if ($aiooqyausygaasqm) { $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $qecqsmowoqmwgagu = $eaeiswmwiqewicoc->qecqsmowoqmwgagu($aiooqyausygaasqm); switch ($aqykuigiuwmmcieu) { case 'src': case Constants::auqoykcmsiauccao: if ($qecqsmowoqmwgagu) { $keccaugmemegoimu = $eaeiswmwiqewicoc->iaykyouimqoikagg($cwgqkcumeaswoscu); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Your requested attachment is not a image and it\'s no possible to get attachment src.', PR__MDL__PANEL)); } break; default: $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Your requested output is not valid.', PR__MDL__PANEL)); break; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Requested attachment not found.', PR__MDL__PANEL)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
