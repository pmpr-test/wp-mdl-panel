<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677bb92c09e79             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\162\x65\x67\151\163\x74\145\x72"; const soawgaqmsgmysyma = "\162\145\163\145\164\137\160\x61\163\163\x77\x6f\162\x64"; const igswqqsosoeiociu = "\x66\157\x72\x67\x6f\x74\x5f\160\x61\163\163\167\x6f\162\144"; const scagkwwiiquocimc = "\154\x61\163\x74\137\x6e\141\155\x65"; const kagqiwogmiguosiw = "\x66\x69\x72\x73\164\137\x6e\x61\x6d\x65"; const miqkwqsewyogmsak = "\165\163\145\x72\137\154\x6f\147\151\156"; const iqgqyoowkoeugsck = "\x75\x73\145\x72\x5f\160\x61\x73\163\x77\157\x72\144"; const oysqakmiwsaqskce = "\162\145\x70\145\x61\x74\137\160\141\163\x73\x77\157\162\x64"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\141\165\x74\150"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\137\154\x6f\147\x6f\165\x74", [$this, "\157\x79\x77\x77\155\x77\167\x77\161\145\165\x69\157\x6d\153\x61"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\145\163\145\164\x5f\x70\x72\x65\x5f\144\151\x73\160\x61\164\x63\150", [$this, "\171\167\x73\151\151\151\153\x75\163\167\x6f\171\x6f\x77\141\167"])->cecaguuoecmccuse("\144\145\164\x65\x72\x6d\x69\x6e\145\137\143\x75\162\162\145\x6e\x74\x5f\x75\x73\145\162", [$this, "\x61\x65\x69\x63\x65\153\141\163\x67\157\x6b\165\165\157\x71\155"]); $this->aqaqisyssqeomwom("\147\x65\164\137\x6a\x77\164\x5f\x61\165\x74\x68\x5f\165\163\145\162", [$this, "\x69\x73\163\x73\x73\x75\171\147\171\x65\167\165\x61\x73\167\x61"])->aqaqisyssqeomwom("\147\145\164\x5f\x6a\167\164\x5f\141\x75\x74\150\x5f\164\x6f\x6b\145\x6e", [$this, "\163\x79\147\145\x65\161\147\x77\171\167\x6d\171\147\163\x79\x75"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\57\160\x61\x6e\x65\154\x2f\x61\x75\164\x68\x2f\166\x65\162\x69\146\x79")) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() !== "\156\157\x5f\x61\165\x74\150\137\150\x65\x61\x64\145\162") { $this->yauwooaeicgosquo($keccaugmemegoimu); } else { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; } } return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\57\x67\x65\164\x2d\146\x69\145\154\144\163", [Constants::wwgusigoaksqmwsm => [$this, "\165\147\x6d\143\145\143\143\147\x77\141\141\x61\x69\147\151\x79"]]); $this->register("\57\x6d\145", [Constants::wwgusigoaksqmwsm => [$this, "\x61\165\x6f\x73\171\x69\x73\x75\x61\153\x67\x75\x79\151\155\167"]]); $this->register("\x2f\x6c\157\x67\151\x6e", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\153\x6b\x6d\x6b\143\x79\x73\171\x63\x65\171\151\167\x73\x6b\x71"]]); $this->register("\57\162\x65\x67\x69\x73\164\x65\x72", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6d\145\x6f\167\143\x75\x6d\165\x65\151\x65\x65\x63\145\x65\x61"]]); $this->register("\57\154\x6f\147\x6f\x75\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\141\x69\141\155\147\153\151\145\167\x77\141\x6b\157\x65\147\171"]]); $this->register("\57\166\145\162\x69\x66\171", [Constants::wwgusigoaksqmwsm => [$this, "\x75\x73\x73\x6f\167\153\x69\147\x75\155\157\x61\x6f\x6f\167\157"]]); $this->register("\x2f\x63\150\x61\156\x67\145\55\160\141\x73\163\167\x6f\x72\x64", [Constants::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, Constants::wwgusigoaksqmwsm => [$this, "\x61\x67\143\171\167\x6b\167\141\x6f\161\x6b\153\143\143\x67\x6b"]]); $this->register("\57\x72\145\x73\145\x74\x2d\x70\141\x73\163\167\157\162\144", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\163\161\141\157\161\x71\x6f\x6f\x71\157\167\165\x67\155\143\167"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\x6f\162\155\55\143\157\156\x74\x72\157\x6c\x2d\163\x6f\154\x69\x64\40\146\157\156\x74\55\x73\x69\172\145\x2d\x68\x34\x20\x68\x2d\141\x75\x74\x6f\40\x70\x2d\65")->gkkgsyeumismsyse("\146\157\156\164\x2d\x73\151\x7a\145\x2d\150\66\x20\x66\x6f\x6e\x74\55\167\145\151\147\150\164\x2d\142\157\154\x64\x65\x72\40\x74\145\x78\x74\x2d\144\x61\162\153"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if ($ccamueccusigaaio == self::gagkiiqqiysqqgmc) { $aiowsaccomcoikus->smcqugueqiumkygs(); } } } $this->ocksiywmkyaqseou("\x70\x61\156\145\x6c\x5f\141\165\164\150\137{$ymqmyyeuycgmigyo}\137\146\x69\x65\x6c\x64\x73", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); } $keccaugmemegoimu = $ikgwqyuyckaewsow; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x63\x61\x6e\40\x6e\x6f\x74\x20\x66\157\165\x6e\x64\40\x72\145\x71\165\x65\163\164\x65\144\x20\146\x69\145\x6c\x64\163\x2e", PR__MDL__PANEL), 404); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if ($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie) { $icwicymcioeyeyek = false; break; } $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; } } } return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = Constants::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->gswweykyogmsyawy(__("\x45\x6d\x61\x69\x6c", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\155\141\x69\x6c\x40\x61\x64\144\162\145\163\x73\56\143\x6f\x6d")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [Constants::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\105\155\141\x69\154\x20\157\x72\40\x55\x73\x65\162\x6e\x61\155\145", PR__MDL__PANEL))->kyiucygqsgequoys("\145\x6d\x61\151\x6c\100\141\x64\144\162\x65\x73\x73\56\143\157\155")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\120\x61\163\163\167\157\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\x46\151\162\x73\x74\156\x61\x6d\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\114\x61\x73\x74\156\x61\155\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\x55\163\145\x72\156\141\x6d\145", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->gswweykyogmsyawy(__("\120\141\163\x73\x77\157\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\122\x65\160\145\141\x74\40\120\141\x73\x73\167\157\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\x70\x61\156\x65\x6c\137\x61\x75\164\150\x5f\146\151\145\x6c\144\x73", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $wgaoewqkwgomoaai) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4e\x6f\40\165\163\145\x72\40\x66\x6f\165\x6e\144\x20\167\151\164\x68\40\164\x68\x69\163\40\x65\x6d\x61\151\154\40\x61\144\144\162\x65\163\x73\x2e", PR__MDL__PANEL), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\145\x20\x45\155\x61\151\x6c\40\171\157\165\40\x65\x6e\x74\145\x72\x65\x64\40\151\163\40\156\x6f\x74\40\166\141\154\151\144\x2e", PR__MDL__PANEL), 400); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\x75\x72\162\x65\156\x74"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { if ($yeacayasgueouoqc === $qqwegysogaocgeww) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6e\x74\145\x72\145\144\x20\143\165\162\x72\145\156\164\x20\x70\141\163\x73\x77\157\162\144\40\141\156\x64\40\x6e\x65\167\x20\x70\141\163\163\x77\157\162\x64\x20\x69\x73\40\163\141\155\x65\x2e", PR__MDL__PANEL), 400); } else { if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\x76\x61\x6c\151\x64\141\x74\145\137\160\141\x73\163\167\x6f\162\x64\137\162\145\x73\145\164", $keccaugmemegoimu, $mkucggyaiaukqoce); if (!$keccaugmemegoimu->has_errors()) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => __("\x50\141\163\x73\x77\157\x72\x64\40\143\150\x61\x6e\147\145\144\x20\163\165\x63\143\x65\x73\163\x66\165\154\154\x79", PR__MDL__PANEL)]; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\156\164\145\x72\x65\144\x20\143\x75\x72\x72\145\x6e\164\x20\160\x61\163\163\x77\157\x72\144\x20\151\x73\x20\x6e\157\164\x20\x63\157\x72\162\x65\x63\164\x2e", PR__MDL__PANEL), 400); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4d\151\163\163\x69\156\147\x20\160\x61\162\141\155\x65\164\145\x72\56", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $mkucggyaiaukqoce; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\101\x63\143\x65\x73\x73\x2d\x43\x6f\156\x74\162\x6f\154\55\x41\154\x6c\157\x77\55\x48\145\x61\144\x65\x72\x73\x2c\40\103\x6f\x6e\164\145\x6e\x74\55\124\x79\x70\145\54\40\x41\165\x74\x68\x6f\x72\151\172\x61\164\151\157\156"; header(sprintf("\x41\x63\x63\145\x73\163\55\103\157\x6e\x74\x72\157\x6c\x2d\x41\x6c\x6c\157\167\x2d\110\x65\x61\x64\145\x72\163\72\x20\x25\x73", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (is_wp_error($iswcokucwmiosiaq)) { $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; } return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6d\x61\x69\154\x20\x61\x6c\162\x65\141\x64\171\x20\145\x78\x69\163\x74\163\54\x20\x70\x6c\145\x61\x73\145\x20\x74\x72\x79\40\106\x6f\x72\147\145\x74\x20\x50\141\163\x73\x77\x6f\x72\x64", PR__MDL__PANEL), 400); } else { if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\145\162\x6e\x61\x6d\x65\x20\141\154\x72\145\141\144\x79\x20\x65\x78\151\x73\164\163\x2c\40\x70\x6c\x65\x61\x73\145\x20\145\x6e\164\x65\162\40\141\156\157\164\150\145\x72\x20\165\163\x65\162\156\x61\155\145", PR__MDL__PANEL), 400); } else { $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x61\163\x73\167\157\x72\x64\163\x20\141\162\145\x20\x6e\157\164\x20\163\141\x6d\x65", PR__MDL__PANEL), 400); } else { $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? Constants::qkimqmacosgcwmug : Constants::kuqwimiimiqsimgo; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (!is_wp_error($sogksuscggsicmac)) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; } $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\x59\x6f\165\x72\x20\x61\x63\x63\x6f\x75\x6e\x74\x20\x63\x72\x65\141\x74\145\x64\x20\x73\x75\143\x63\x65\x73\163\x66\x75\154\x6c\171", PR__MDL__PANEL), $mkucggyaiaukqoce); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\163\145\x72\40\156\157\x74\40\x66\x6f\x75\x6e\144", PR__MDL__PANEL)); } } } } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\156\x74\x65\x72\x65\144\40\166\x61\154\x75\145\x73\x20\151\163\x20\156\157\164\40\x76\141\154\x69\144\x2e", PR__MDL__PANEL), 400); } return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\114\x6f\x67\x67\145\x64\40\x6f\165\164", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, Constants::yuguikokwoymmqem); if ($icwicymcioeyeyek) { try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($mkucggyaiaukqoce->get_error_message(), 401); } else { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\160\141\x6e\145\154\137\x61\165\164\150\137\x63\x6f\157\153\151\145\137\x65\170\160\x69\x72\141\164\x69\157\x6e", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\151\163\163" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::auqoykcmsiauccao), "\151\x61\164" => $ggmuwmqmcisegoea, "\x6e\x62\146" => $ggmuwmqmcisegoea, "\145\170\160" => $wekousyuiguacggm, "\x64\141\x74\141" => [Constants::meksegaoamowuwoq => [Constants::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq, Constants::uikygkewwaiowmwe => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\167\160\137\x6c\157\x67\151\156", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6e\x74\x65\162\x65\144\x20\x76\x61\154\165\x65\x73\40\151\x73\x20\156\157\164\x20\x76\x61\154\151\x64\x2e", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\127\124\x20\x69\163\40\x6e\x6f\x74\x20\143\157\156\146\x69\x67\x75\x72\x65\144\x20\160\x72\157\160\x65\162\154\171\x2e", PR__MDL__PANEL), 500); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::uiwqcumqkgikqyue => [Constants::ciywsqoeiymemsys => 200], Constants::vswoiouoaykswgym => "\141\x75\164\150\137\147\145\x74\137\x6d\x65", "\141\143\143\x6f\x75\156\x74" => []]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
