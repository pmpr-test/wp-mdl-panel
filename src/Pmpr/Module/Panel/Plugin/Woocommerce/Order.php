<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4bd891f2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\Plugin\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Panel\Container; use WP_REST_Response; class Order extends Container { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_rest_prepare_shop_order_object', [$this, 'ekuykcasmcmywewi'], 3); parent::kgquecmsgcouyaya(); } public function ekuykcasmcmywewi(WP_REST_Response $keccaugmemegoimu, $mksyucucyswaukig, $aqmwamyiwgeeymqa) : WP_REST_Response { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); $icwicymcioeyeyek = $keccaugmemegoimu->get_data(); $mckqcgygckkuiiuc = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, 'line_items'); if (is_array($mckqcgygckkuiiuc)) { $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); foreach ($mckqcgygckkuiiuc as $momcykaoccoymeig => $igqsaukqcqscimok) { $product = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, 'product_id'); $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($wgkqagumoowawogg->usieywkaugusugwm($product)); $icwicymcioeyeyek['line_items'][$momcykaoccoymeig][Constants::mkousmkiawwousws] = $gkyciwoiiisgywcs->get($mcqieaigyeeyaksm, 0); } } $iueymcwwscwqkiyq = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::ciywsqoeiymemsys); if ($iueymcwwscwqkiyq) { $icwicymcioeyeyek['status_title'] = $this->uwkmaywceaaaigwo()->mmmcswscsiecscwg()->isamiwuouuqooysq($iueymcwwscwqkiyq); } if ($umwqusowiqmyseom = $aqauykcugwiqkumq->get($gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::gouqcwikiiygyasc))) { $icwicymcioeyeyek['total_price'] = html_entity_decode(strip_tags($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($umwqusowiqmyseom->get_total(), ['currency' => $umwqusowiqmyseom->get_currency()]))); if ($mckqcgygckkuiiuc) { $gaeqamemwmwsyukm = count($mckqcgygckkuiiuc); $icwicymcioeyeyek['price_subtext'] = sprintf(_n('for %s item', 'for %s items', $gaeqamemwmwsyukm, 'woocommerce'), $gaeqamemwmwsyukm); } $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $kwkmegesqkqwyska = $aqauykcugwiqkumq->sgmwueyyuciacmye($umwqusowiqmyseom); $icwicymcioeyeyek['date'] = $cgceoyqmmwumqyqa->eokiemeewccmcaqo($kwkmegesqkqwyska, $uuwwyaeymswgsgsi->uyomwmskouyyqyyq()); $cqgoimumaewouews = $cgceoyqmmwumqyqa->eokiemeewccmcaqo($kwkmegesqkqwyska, $uuwwyaeymswgsgsi->isiuiegyqiomccsw()); $icwicymcioeyeyek['time'] = sprintf(__('At %s', PR__MDL__PANEL), $cqgoimumaewouews); } $keccaugmemegoimu->set_data($icwicymcioeyeyek); return $keccaugmemegoimu; } }
