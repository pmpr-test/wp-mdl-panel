<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839cb2df8a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\Plugin\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Panel\Container; use Pmpr\Module\Panel\REST\Router; use Pmpr\Module\Panel\Data\Route; use Pmpr\Module\Panel\Rewrite; class Woocommerce extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu('plugins_loaded', [$this, 'icwcgmcoimqeigye']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('page_link', [$this, 'gmmweowwogsyigsk'], 999, 2)->cecaguuoecmccuse('woocommerce_get_myaccount_page_permalink', [$this, 'ggyisowykggmugua'], 999)->cecaguuoecmccuse('woocommerce_get_endpoint_url', [$this, 'myeqoqkmwiceeiym'], 999, 4); $this->aqaqisyssqeomwom('panel_rest_base_route', [$this, 'hgoogsioymoqawig'], 20, 2); parent::kgquecmsgcouyaya(); } public function gmmweowwogsyigsk($migiiksoiymissge, $post) { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->icsokmyykmuweoco('myaccount', $post)) { $migiiksoiymissge = $this->ggyisowykggmugua($migiiksoiymissge, 'dashboard'); } return $migiiksoiymissge; } public function myeqoqkmwiceeiym($eeamcawaiqocomwy, $kgccggmwkeukkkci, $eqgoocgaqwqcimie, $migiiksoiymissge) : ?string { return $this->ggyisowykggmugua($eeamcawaiqocomwy, $kgccggmwkeukkkci); } public function ggyisowykggmugua($eeamcawaiqocomwy, $kgccggmwkeukkkci = null) : ?string { $mkomwsiykqigmqca = ''; switch ($kgccggmwkeukkkci) { case 'customer-logout': $mkomwsiykqigmqca = '/logout'; break; case 'myaccount': case 'dashboard': $mkomwsiykqigmqca = '/user/profile'; break; case 'orders': case 'downloads': $mkomwsiykqigmqca = "/store/{$kgccggmwkeukkkci}"; break; } if ($mkomwsiykqigmqca) { $eeamcawaiqocomwy = Rewrite::symcgieuakksimmu()->uwmueckkyiscecgi($mkomwsiykqigmqca); } return $eeamcawaiqocomwy; } public function yeyiguyegmmyusea() { if ($this->ayseokmqycoqaigc()) { $omkysikckkcieckq = 'woocommerce_api_enabled'; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if ($qkqgcaykemoiecma->get($omkysikckkcieckq) === Constants::ioyokcgwaowoqskk) { $qkqgcaykemoiecma->update($omkysikckkcieckq, Constants::wiquocqckkqkmayo); } } } public function hgoogsioymoqawig($muasmqouwqweaqmw, $okgcoqimeqqkemsa) { return $muasmqouwqweaqmw; if ($this->ayseokmqycoqaigc()) { if ($muasmqouwqweaqmw instanceof Route && $okgcoqimeqqkemsa instanceof Router) { $muasmqouwqweaqmw->pmouaioykaoceyag($okgcoqimeqqkemsa->oeuiuocwuggewqmk('store')->gswweykyogmsyawy(__('Store', PR__MDL__PANEL))->faioisokmmaeimoo()->jyumyyugiwwiqomk(45)->saemoowcasogykak(IconInterface::wcwemqwsuckqusee)->pmouaioykaoceyag($okgcoqimeqqkemsa->oeuiuocwuggewqmk('orders')->gswweykyogmsyawy(__('My Orders', PR__MDL__PANEL))->saemoowcasogykak(IconInterface::isyeukwaimicwaio)->gucwmccyimoagwcm(__('List of your product orders.', PR__MDL__PANEL)))->pmouaioykaoceyag($okgcoqimeqqkemsa->oeuiuocwuggewqmk('downloads')->gswweykyogmsyawy(__('My Downloads', PR__MDL__PANEL))->saemoowcasogykak(IconInterface::msyqysqykouywsua)->gucwmccyimoagwcm(__('List of your downloaded products.', PR__MDL__PANEL)))); } } return $muasmqouwqweaqmw; } public function icwcgmcoimqeigye() { if ($this->ayseokmqycoqaigc()) { Auth::symcgieuakksimmu(); Order::symcgieuakksimmu(); Download::symcgieuakksimmu(); } } public function ayseokmqycoqaigc() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai(); } }
