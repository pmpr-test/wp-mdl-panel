<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6786e8587a1f9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\162\x65\147\x69\x73\164\145\162"; const soawgaqmsgmysyma = "\162\145\x73\x65\164\x5f\160\x61\x73\163\167\157\162\x64"; const igswqqsosoeiociu = "\146\157\x72\147\157\164\x5f\160\141\163\163\x77\x6f\x72\x64"; const scagkwwiiquocimc = "\154\x61\163\x74\137\156\x61\x6d\145"; const kagqiwogmiguosiw = "\146\151\162\x73\x74\x5f\156\x61\155\145"; const miqkwqsewyogmsak = "\x75\x73\x65\162\137\x6c\157\147\x69\x6e"; const iqgqyoowkoeugsck = "\165\163\x65\162\x5f\x70\x61\163\x73\x77\157\x72\x64"; const oysqakmiwsaqskce = "\x72\x65\160\x65\x61\x74\137\x70\141\x73\x73\167\157\x72\x64"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\141\165\164\x68"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\154\157\x67\x6f\x75\164", [$this, "\x6f\x79\x77\167\x6d\167\167\167\161\145\x75\x69\x6f\x6d\153\141"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\x65\x73\x65\x74\x5f\x70\162\145\x5f\x64\151\163\160\x61\164\x63\150", [$this, "\171\167\163\x69\x69\151\153\165\x73\167\x6f\171\157\x77\x61\x77"])->cecaguuoecmccuse("\144\145\x74\x65\x72\155\x69\x6e\145\137\x63\x75\x72\x72\145\156\164\x5f\165\x73\x65\162", [$this, "\x61\x65\151\x63\x65\153\x61\163\147\x6f\x6b\x75\165\157\x71\x6d"]); $this->aqaqisyssqeomwom("\147\145\x74\x5f\152\x77\164\137\141\165\x74\150\x5f\x75\163\x65\162", [$this, "\x69\x73\x73\x73\163\165\171\147\x79\x65\167\x75\x61\163\167\x61"])->aqaqisyssqeomwom("\147\145\164\x5f\152\167\x74\x5f\x61\x75\164\x68\137\164\157\153\145\x6e", [$this, "\x73\x79\147\x65\145\161\147\x77\x79\x77\x6d\171\147\x73\x79\x75"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\x2f\160\141\x6e\x65\154\x2f\x61\x75\x74\150\x2f\x76\145\162\x69\x66\171")) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() !== "\x6e\157\137\x61\165\164\150\x5f\x68\145\141\144\145\x72") { $this->yauwooaeicgosquo($keccaugmemegoimu); } else { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; } } return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\57\x67\x65\x74\55\146\151\145\154\x64\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x75\x67\x6d\x63\145\143\143\x67\167\x61\141\x61\151\x67\x69\x79"]]); $this->register("\x2f\155\x65", [Constants::wwgusigoaksqmwsm => [$this, "\x61\x75\x6f\x73\x79\x69\163\165\141\153\x67\x75\171\151\155\167"]]); $this->register("\x2f\x6c\x6f\x67\151\x6e", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\153\x6b\x6d\153\143\171\x73\x79\143\x65\x79\151\x77\x73\153\161"]]); $this->register("\57\x72\x65\x67\151\x73\x74\145\162", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6d\145\157\167\143\165\x6d\165\145\151\145\145\143\145\x65\x61"]]); $this->register("\x2f\x6c\x6f\x67\157\x75\x74", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\141\x69\x61\155\147\153\x69\145\167\167\x61\153\x6f\x65\147\171"]]); $this->register("\57\x76\x65\x72\151\146\x79", [Constants::wwgusigoaksqmwsm => [$this, "\x75\163\x73\x6f\x77\153\151\147\x75\x6d\x6f\x61\157\x6f\167\x6f"]]); $this->register("\57\x63\x68\x61\156\x67\145\x2d\160\x61\163\x73\167\x6f\x72\x64", [Constants::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, Constants::wwgusigoaksqmwsm => [$this, "\141\x67\143\171\x77\x6b\167\141\157\161\153\x6b\143\143\147\x6b"]]); $this->register("\57\x72\x65\x73\145\x74\55\x70\141\163\163\167\157\162\x64", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x73\161\141\x6f\161\x71\157\157\161\157\x77\165\x67\x6d\143\x77"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\146\x6f\x72\x6d\x2d\143\x6f\x6e\164\162\x6f\154\x2d\x73\x6f\154\x69\144\40\x66\157\156\x74\x2d\x73\151\x7a\x65\x2d\x68\x34\x20\150\55\x61\165\x74\x6f\40\x70\x2d\65")->gkkgsyeumismsyse("\146\157\156\164\55\x73\151\x7a\145\55\150\x36\x20\146\x6f\x6e\164\x2d\167\145\151\147\x68\x74\x2d\142\157\154\144\145\x72\40\164\x65\170\x74\55\144\141\x72\x6b"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if ($ccamueccusigaaio == self::gagkiiqqiysqqgmc) { $aiowsaccomcoikus->smcqugueqiumkygs(); } } } $this->ocksiywmkyaqseou("\x70\141\156\x65\x6c\x5f\141\165\164\x68\137{$ymqmyyeuycgmigyo}\x5f\146\151\145\154\144\x73", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); } $keccaugmemegoimu = $ikgwqyuyckaewsow; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x63\x61\x6e\40\x6e\157\x74\40\146\x6f\165\156\144\40\162\x65\161\x75\145\x73\x74\145\x64\x20\x66\151\x65\154\x64\x73\x2e", PR__MDL__PANEL), 404); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if ($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie) { $icwicymcioeyeyek = false; break; } $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; } } } return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = Constants::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->gswweykyogmsyawy(__("\105\x6d\x61\x69\154", PR__MDL__PANEL))->kyiucygqsgequoys("\145\x6d\141\151\154\100\x61\144\144\162\x65\163\163\56\143\x6f\155")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [Constants::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\105\155\141\151\154\x20\x6f\x72\x20\125\163\145\162\x6e\141\155\x65", PR__MDL__PANEL))->kyiucygqsgequoys("\145\155\x61\x69\x6c\100\141\144\x64\162\145\163\163\x2e\143\x6f\155")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\x50\x61\163\x73\x77\157\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\106\x69\x72\x73\x74\156\x61\155\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\x4c\141\x73\x74\156\141\155\145", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\x55\x73\x65\162\x6e\x61\x6d\x65", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->gswweykyogmsyawy(__("\120\x61\x73\163\x77\x6f\x72\x64", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\122\145\160\x65\x61\164\x20\x50\141\x73\x73\167\157\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\x70\141\x6e\x65\x6c\137\x61\x75\164\x68\137\x66\151\145\154\x64\x73", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $wgaoewqkwgomoaai) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4e\157\40\x75\x73\x65\x72\x20\x66\157\165\156\x64\40\x77\151\164\x68\40\x74\150\151\163\x20\x65\x6d\x61\x69\154\40\x61\144\x64\x72\145\x73\163\56", PR__MDL__PANEL), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\x65\x20\105\x6d\x61\151\154\x20\x79\x6f\165\x20\145\x6e\x74\145\x72\145\x64\40\x69\163\x20\x6e\x6f\x74\x20\166\141\x6c\151\144\56", PR__MDL__PANEL), 400); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\165\162\162\145\156\164"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { if ($yeacayasgueouoqc === $qqwegysogaocgeww) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\156\164\145\162\145\144\40\x63\x75\x72\162\145\x6e\x74\x20\160\x61\163\x73\167\x6f\x72\x64\40\141\156\x64\x20\156\x65\167\x20\x70\141\163\163\167\x6f\162\x64\40\151\x73\x20\163\x61\x6d\145\56", PR__MDL__PANEL), 400); } else { if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\166\141\x6c\151\144\141\164\145\x5f\x70\141\x73\x73\167\x6f\162\144\x5f\162\145\163\145\x74", $keccaugmemegoimu, $mkucggyaiaukqoce); if (!$keccaugmemegoimu->has_errors()) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => __("\120\141\163\x73\167\157\x72\x64\x20\x63\150\141\156\x67\x65\x64\x20\x73\x75\143\x63\145\x73\x73\146\165\x6c\x6c\171", PR__MDL__PANEL)]; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\156\x74\x65\162\145\144\x20\143\x75\x72\162\x65\156\x74\x20\x70\x61\x73\x73\167\157\162\x64\40\151\x73\40\156\157\x74\x20\x63\x6f\x72\x72\x65\143\164\x2e", PR__MDL__PANEL), 400); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\115\151\x73\163\151\x6e\x67\x20\160\x61\x72\141\155\x65\x74\145\162\x2e", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $mkucggyaiaukqoce; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\101\x63\x63\x65\x73\x73\x2d\103\x6f\x6e\164\x72\x6f\x6c\x2d\101\154\x6c\x6f\x77\x2d\110\145\x61\144\145\x72\x73\54\40\103\x6f\156\x74\x65\156\x74\55\124\171\x70\145\x2c\x20\101\165\164\150\157\162\151\x7a\x61\x74\151\157\156"; header(sprintf("\x41\143\143\x65\163\163\x2d\103\x6f\156\x74\162\157\x6c\x2d\101\154\154\157\167\x2d\x48\x65\141\x64\145\162\163\x3a\x20\45\163", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (is_wp_error($iswcokucwmiosiaq)) { $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; } return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\155\x61\151\x6c\x20\x61\x6c\x72\x65\x61\x64\171\x20\x65\x78\x69\x73\x74\x73\x2c\x20\x70\154\145\141\x73\x65\x20\164\162\x79\40\106\157\162\147\145\x74\x20\120\x61\163\163\x77\x6f\x72\x64", PR__MDL__PANEL), 400); } else { if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\145\162\156\x61\155\145\40\141\154\162\x65\x61\x64\171\40\x65\170\x69\x73\x74\163\54\40\x70\154\x65\141\x73\x65\x20\145\x6e\164\145\x72\40\x61\156\x6f\x74\150\145\x72\40\165\163\145\162\x6e\x61\x6d\x65", PR__MDL__PANEL), 400); } else { $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x61\163\x73\167\x6f\162\x64\163\40\141\162\145\x20\x6e\x6f\x74\40\x73\x61\x6d\x65", PR__MDL__PANEL), 400); } else { $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? Constants::qkimqmacosgcwmug : Constants::kuqwimiimiqsimgo; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (!is_wp_error($sogksuscggsicmac)) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; } $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\x59\157\x75\162\40\141\143\143\157\x75\x6e\164\x20\x63\162\145\141\x74\145\144\x20\x73\165\x63\x63\145\x73\163\x66\165\x6c\x6c\171", PR__MDL__PANEL), $mkucggyaiaukqoce); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\x65\162\x20\x6e\157\x74\x20\146\157\x75\x6e\144", PR__MDL__PANEL)); } } } } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\156\x74\145\162\145\144\x20\x76\x61\154\x75\x65\x73\x20\151\x73\x20\x6e\x6f\164\40\x76\x61\154\x69\144\56", PR__MDL__PANEL), 400); } return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\114\x6f\x67\x67\x65\144\x20\157\165\x74", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, Constants::yuguikokwoymmqem); if ($icwicymcioeyeyek) { try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($mkucggyaiaukqoce->get_error_message(), 401); } else { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\160\x61\156\145\154\137\141\x75\164\150\x5f\143\x6f\x6f\153\x69\x65\x5f\x65\170\x70\x69\162\141\164\x69\157\156", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\x69\x73\x73" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::auqoykcmsiauccao), "\x69\141\x74" => $ggmuwmqmcisegoea, "\156\142\x66" => $ggmuwmqmcisegoea, "\145\170\x70" => $wekousyuiguacggm, "\x64\x61\x74\x61" => [Constants::meksegaoamowuwoq => [Constants::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq, Constants::uikygkewwaiowmwe => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\167\x70\137\154\x6f\147\x69\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\156\x74\x65\x72\145\144\x20\166\x61\x6c\x75\x65\x73\40\x69\163\40\156\x6f\x74\x20\166\x61\x6c\x69\x64\56", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\x57\124\x20\151\x73\40\156\x6f\164\40\143\157\156\146\x69\147\x75\x72\145\x64\40\160\x72\157\160\x65\162\154\x79\56", PR__MDL__PANEL), 500); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::uiwqcumqkgikqyue => [Constants::ciywsqoeiymemsys => 200], Constants::vswoiouoaykswgym => "\141\x75\x74\150\137\147\145\x74\x5f\155\145", "\141\143\143\x6f\165\156\164" => []]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
