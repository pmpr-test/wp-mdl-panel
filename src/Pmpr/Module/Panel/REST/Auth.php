<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abcdd88370b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\x72\x65\147\151\163\x74\145\x72"; const soawgaqmsgmysyma = "\162\145\163\x65\x74\137\x70\141\x73\x73\167\157\x72\144"; const igswqqsosoeiociu = "\146\157\x72\147\157\x74\137\x70\141\x73\163\167\157\162\144"; const scagkwwiiquocimc = "\x6c\141\163\x74\x5f\x6e\x61\x6d\x65"; const kagqiwogmiguosiw = "\x66\x69\162\x73\164\x5f\x6e\x61\155\145"; const miqkwqsewyogmsak = "\165\x73\x65\162\137\154\157\x67\151\156"; const iqgqyoowkoeugsck = "\165\163\x65\162\x5f\160\141\x73\163\167\157\162\x64"; const oysqakmiwsaqskce = "\162\145\160\145\x61\164\x5f\x70\x61\163\163\x77\x6f\x72\144"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\141\165\x74\x68"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\x5f\x6c\x6f\147\157\x75\x74", [$this, "\157\x79\x77\x77\155\167\167\167\x71\145\165\x69\x6f\x6d\153\x61"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\162\145\x73\x65\164\x5f\x70\162\x65\137\144\x69\163\160\141\164\x63\150", [$this, "\171\167\163\151\151\151\x6b\x75\x73\x77\x6f\x79\x6f\167\141\x77"])->cecaguuoecmccuse("\144\145\164\x65\x72\155\151\x6e\145\137\143\165\162\x72\145\156\x74\x5f\165\163\x65\162", [$this, "\x61\145\x69\x63\x65\x6b\x61\163\147\x6f\153\165\165\x6f\161\x6d"]); $this->aqaqisyssqeomwom("\147\145\164\137\x6a\x77\x74\x5f\x61\x75\164\x68\x5f\165\x73\x65\162", [$this, "\x69\163\163\x73\163\165\171\147\x79\x65\x77\165\141\163\x77\141"])->aqaqisyssqeomwom("\147\x65\164\x5f\x6a\x77\164\x5f\141\165\164\x68\137\x74\157\153\x65\x6e", [$this, "\x73\171\147\145\145\161\x67\167\171\167\155\171\147\163\x79\165"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\57\160\141\x6e\x65\154\x2f\141\x75\x74\x68\x2f\x76\145\x72\x69\x66\x79")) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() !== "\x6e\x6f\137\x61\x75\x74\x68\137\x68\145\141\144\x65\x72") { $this->yauwooaeicgosquo($keccaugmemegoimu); } else { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; } } return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\x2f\147\145\x74\55\146\151\145\x6c\x64\163", [Constants::wwgusigoaksqmwsm => [$this, "\165\x67\155\143\145\143\x63\147\167\x61\x61\x61\x69\x67\151\171"]]); $this->register("\x2f\155\145", [Constants::wwgusigoaksqmwsm => [$this, "\x61\165\157\x73\x79\x69\x73\165\141\x6b\147\165\171\151\x6d\x77"]]); $this->register("\x2f\154\x6f\x67\x69\156", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6b\x6b\x6d\153\x63\x79\x73\x79\143\x65\171\x69\167\x73\153\161"]]); $this->register("\x2f\x72\x65\x67\x69\163\164\145\162", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\155\145\157\167\143\x75\155\x75\145\x69\145\x65\x63\145\145\x61"]]); $this->register("\57\x6c\157\x67\157\x75\x74", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\141\151\x61\x6d\x67\x6b\151\145\167\167\141\x6b\x6f\x65\x67\171"]]); $this->register("\x2f\166\145\162\151\146\x79", [Constants::wwgusigoaksqmwsm => [$this, "\165\163\163\157\x77\x6b\151\x67\165\x6d\x6f\141\157\157\x77\x6f"]]); $this->register("\x2f\x63\x68\x61\x6e\x67\x65\55\x70\141\x73\x73\167\x6f\162\x64", [Constants::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, Constants::wwgusigoaksqmwsm => [$this, "\x61\x67\x63\x79\x77\153\x77\141\x6f\161\153\x6b\143\143\147\153"]]); $this->register("\57\x72\145\163\145\x74\55\x70\x61\163\163\167\157\162\144", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\163\161\x61\x6f\x71\x71\x6f\x6f\x71\157\x77\x75\x67\x6d\143\x77"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\x6f\x72\x6d\55\143\x6f\x6e\x74\162\157\x6c\x2d\x73\x6f\154\151\144\40\146\157\x6e\164\x2d\163\x69\172\145\x2d\150\x34\40\x68\55\x61\x75\164\x6f\40\x70\55\x35")->gkkgsyeumismsyse("\x66\157\156\x74\x2d\x73\x69\x7a\x65\55\x68\66\40\x66\157\156\164\55\167\x65\151\x67\x68\x74\x2d\x62\x6f\154\144\x65\x72\x20\x74\x65\170\x74\x2d\144\141\x72\x6b"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if ($ccamueccusigaaio == self::gagkiiqqiysqqgmc) { $aiowsaccomcoikus->smcqugueqiumkygs(); } } } $this->ocksiywmkyaqseou("\x70\141\x6e\145\154\137\141\x75\164\150\x5f{$ymqmyyeuycgmigyo}\x5f\146\x69\x65\154\x64\x73", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); } $keccaugmemegoimu = $ikgwqyuyckaewsow; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x63\x61\x6e\x20\156\157\164\x20\x66\157\x75\156\144\x20\x72\145\161\x75\145\163\164\x65\x64\x20\146\151\145\154\x64\163\x2e", PR__MDL__PANEL), 404); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if ($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie) { $icwicymcioeyeyek = false; break; } $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; } } } return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = Constants::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->gswweykyogmsyawy(__("\105\x6d\x61\151\x6c", PR__MDL__PANEL))->kyiucygqsgequoys("\145\155\x61\151\x6c\100\141\144\144\162\145\163\163\56\143\x6f\x6d")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [Constants::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\105\x6d\141\151\x6c\x20\x6f\x72\40\x55\x73\145\x72\x6e\x61\155\145", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\x6d\x61\x69\154\100\x61\x64\x64\162\x65\x73\163\x2e\x63\157\x6d")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\x50\x61\x73\163\167\157\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\x46\x69\x72\163\164\x6e\141\x6d\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\x4c\x61\x73\164\156\x61\x6d\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\x55\163\x65\x72\x6e\x61\155\145", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->gswweykyogmsyawy(__("\x50\x61\163\x73\x77\157\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\122\x65\160\x65\x61\x74\40\120\141\x73\163\x77\x6f\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\160\141\x6e\x65\154\x5f\x61\x75\164\x68\137\146\151\145\154\144\x73", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $wgaoewqkwgomoaai) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4e\x6f\40\165\x73\145\162\x20\x66\157\165\x6e\144\40\167\151\164\x68\40\x74\x68\x69\x73\x20\145\155\141\151\x6c\40\x61\144\144\x72\145\163\163\56", PR__MDL__PANEL), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\x65\x20\x45\155\141\x69\154\x20\171\x6f\x75\x20\x65\156\x74\x65\162\145\x64\x20\151\163\40\156\157\164\x20\166\141\154\x69\x64\x2e", PR__MDL__PANEL), 400); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\x75\x72\162\x65\156\x74"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { if ($yeacayasgueouoqc === $qqwegysogaocgeww) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\x6e\164\x65\162\145\x64\40\x63\x75\x72\x72\x65\156\x74\x20\x70\141\163\x73\167\x6f\162\144\40\x61\156\x64\40\156\x65\x77\x20\160\x61\163\x73\x77\x6f\x72\144\40\151\x73\x20\163\141\155\145\x2e", PR__MDL__PANEL), 400); } else { if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\x76\141\x6c\151\144\x61\164\x65\137\x70\141\x73\163\167\157\162\x64\137\x72\x65\163\x65\x74", $keccaugmemegoimu, $mkucggyaiaukqoce); if (!$keccaugmemegoimu->has_errors()) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => __("\120\141\163\163\167\x6f\162\x64\40\143\x68\141\x6e\x67\x65\x64\x20\163\165\x63\x63\145\x73\163\x66\x75\x6c\x6c\171", PR__MDL__PANEL)]; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6e\x74\x65\162\x65\144\40\x63\x75\x72\x72\145\156\164\40\x70\x61\x73\x73\x77\157\162\x64\40\x69\x73\x20\x6e\x6f\164\x20\x63\x6f\162\162\x65\x63\x74\x2e", PR__MDL__PANEL), 400); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\115\151\163\163\x69\x6e\x67\x20\x70\x61\x72\141\x6d\145\164\x65\x72\56", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $mkucggyaiaukqoce; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\x41\143\143\x65\163\x73\x2d\x43\157\x6e\x74\162\157\x6c\x2d\x41\x6c\x6c\x6f\x77\55\110\x65\141\144\145\x72\x73\54\x20\x43\157\156\x74\145\x6e\164\55\124\x79\x70\145\x2c\40\x41\x75\164\150\x6f\162\151\x7a\x61\164\151\x6f\156"; header(sprintf("\101\143\143\145\163\x73\55\x43\x6f\x6e\x74\162\157\154\x2d\x41\x6c\154\x6f\167\55\x48\145\141\x64\x65\x72\x73\72\x20\45\x73", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (is_wp_error($iswcokucwmiosiaq)) { $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; } return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\155\141\151\154\x20\141\154\x72\145\x61\x64\171\40\x65\x78\x69\163\x74\x73\54\x20\x70\154\145\x61\163\145\x20\164\x72\171\x20\x46\157\162\147\x65\x74\40\x50\141\163\x73\x77\x6f\162\144", PR__MDL__PANEL), 400); } else { if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\145\x72\156\141\155\x65\40\141\154\x72\145\x61\144\171\40\145\170\151\x73\164\163\x2c\x20\x70\x6c\145\x61\x73\x65\x20\x65\156\x74\x65\x72\x20\141\156\x6f\164\x68\x65\162\x20\165\163\x65\x72\x6e\141\155\x65", PR__MDL__PANEL), 400); } else { $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x61\x73\x73\167\x6f\x72\x64\x73\x20\x61\162\x65\40\x6e\x6f\164\x20\x73\x61\x6d\145", PR__MDL__PANEL), 400); } else { $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? Constants::qkimqmacosgcwmug : Constants::kuqwimiimiqsimgo; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (!is_wp_error($sogksuscggsicmac)) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { $miemcogcecyqwsea = $ewgmommeawggyaek->igawqaomowicuayw(Constants::kagqiwogmiguosiw, $sogksuscggsicmac); $eqmqoaiqqsgwqgcs = $ewgmommeawggyaek->igawqaomowicuayw(Constants::scagkwwiiquocimc, $sogksuscggsicmac); $fkgqmwkusywysaus = trim($miemcogcecyqwsea . "\x20" . $eqmqoaiqqsgwqgcs); if ($fkgqmwkusywysaus) { $mkucggyaiaukqoce->display_name = $fkgqmwkusywysaus; } $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; } $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\131\157\165\x72\x20\x61\x63\143\x6f\x75\x6e\x74\40\143\x72\145\141\164\x65\x64\x20\x73\165\x63\143\x65\163\x73\x66\x75\154\154\171", PR__MDL__PANEL), $mkucggyaiaukqoce); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\x65\x72\40\x6e\x6f\164\x20\146\157\165\156\144", PR__MDL__PANEL)); } } } } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6e\x74\x65\x72\x65\144\x20\x76\141\x6c\165\145\x73\40\x69\x73\40\x6e\x6f\164\40\x76\x61\154\x69\144\x2e", PR__MDL__PANEL), 400); } return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\157\x67\x67\x65\x64\40\x6f\165\164", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, Constants::yuguikokwoymmqem); if ($icwicymcioeyeyek) { try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($mkucggyaiaukqoce->get_error_message(), 401); } else { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\x70\141\x6e\145\154\137\x61\165\164\x68\x5f\x63\157\x6f\x6b\151\x65\137\x65\170\160\x69\x72\x61\x74\x69\157\156", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\151\163\x73" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::auqoykcmsiauccao), "\x69\x61\x74" => $ggmuwmqmcisegoea, "\x6e\x62\x66" => $ggmuwmqmcisegoea, "\x65\x78\x70" => $wekousyuiguacggm, "\144\x61\164\x61" => [Constants::meksegaoamowuwoq => [Constants::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq, Constants::uikygkewwaiowmwe => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\167\x70\x5f\154\157\147\x69\156", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6e\x74\145\x72\x65\x64\40\166\141\154\x75\x65\163\x20\x69\163\40\156\x6f\x74\40\x76\141\154\151\x64\56", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\127\124\40\x69\x73\x20\156\157\164\40\143\157\156\146\151\147\165\162\x65\144\40\160\162\157\x70\x65\x72\x6c\171\56", PR__MDL__PANEL), 500); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::uiwqcumqkgikqyue => [Constants::ciywsqoeiymemsys => 200], Constants::vswoiouoaykswgym => "\x61\x75\x74\150\x5f\x67\145\164\x5f\155\145", "\141\x63\x63\157\x75\156\x74" => []]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
