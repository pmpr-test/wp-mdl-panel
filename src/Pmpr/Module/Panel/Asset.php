<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc33fd978be             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; class Asset extends Container { const soyyisyeyqyeecog = 'jquery'; const qoeywcokwqacqsya = self::soyyisyeyqyeecog . '-core'; const gioisuaakmsiauug = self::soyyisyeyqyeecog . '-migrate'; public function wigskegsqequoeks() { $this->waqewsckuayqguos('panel_head', [$this, 'oqyeqcgiyqoqoyyw'])->waqewsckuayqguos('panel_footer', [$this, 'ikaaageeuwywokuu']); parent::wigskegsqequoeks(); } public function oqyeqcgiyqoqoyyw() { $aiwcguiecocoyqqi = (array) $this->ocksiywmkyaqseou('panel_styles', []); $aiwcguiecocoyqqi['vue'] = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->aqmcwcyggeiyooyg($this, 'vue.css'); foreach ($aiwcguiecocoyqqi as $aokagokqyuysuksm => $iwywmkygwewiamwm) { $this->mamoksooqisugcuw($aokagokqyuysuksm, $iwywmkygwewiamwm); } } public function ikaaageeuwywokuu() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $mismekckwcmuksik[self::qoeywcokwqacqsya] = $meakksicouekcgoe->okeawskgcssugqkk('jquery-core'); $mismekckwcmuksik[self::gioisuaakmsiauug] = $meakksicouekcgoe->okeawskgcssugqkk('jquery-migrate'); $mismekckwcmuksik['helper'] = $meakksicouekcgoe->aqmcwcyggeiyooyg(pr_get_foundation(), 'helper.js'); $mismekckwcmuksik['multistep'] = $meakksicouekcgoe->aqmcwcyggeiyooyg(pr_get_foundation(), 'multistep.js'); $mismekckwcmuksik['persiantools'] = $meakksicouekcgoe->aqmcwcyggeiyooyg(pr_get_foundation(), 'persiantools.js'); $mismekckwcmuksik = (array) $this->ocksiywmkyaqseou('panel_scripts', $mismekckwcmuksik); $mismekckwcmuksik['vue'] = $meakksicouekcgoe->aqmcwcyggeiyooyg($this, 'vue.js'); $this->ewcsyqaaigkicgse('add_ajax_nonce'); foreach ($mismekckwcmuksik as $aokagokqyuysuksm => $kuoicyiuewoqyaqe) { $this->wwiqacmoasamkoko($aokagokqyuysuksm, $kuoicyiuewoqyaqe); } } public function mamoksooqisugcuw($aokagokqyuysuksm, $iwywmkygwewiamwm) { if ($aokagokqyuysuksm && $iwywmkygwewiamwm) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw('link', ['id' => "panel-style-{$aokagokqyuysuksm}", 'rel' => 'stylesheet', 'href' => $iwywmkygwewiamwm, 'media' => 'all'], true); } } public function wwiqacmoasamkoko($aokagokqyuysuksm, $ogomymegcoacqisg) { if ($aokagokqyuysuksm && $ogomymegcoacqisg) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw('script', ['id' => "panel-script-{$aokagokqyuysuksm}", 'src' => $ogomymegcoacqisg], true); } } }
