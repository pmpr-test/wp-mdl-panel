<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6791535e52f05             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\x72\145\147\151\163\164\x65\162"; const soawgaqmsgmysyma = "\162\145\163\x65\164\x5f\x70\x61\x73\163\x77\x6f\162\144"; const igswqqsosoeiociu = "\x66\157\x72\x67\x6f\164\x5f\x70\141\163\163\167\x6f\x72\144"; const scagkwwiiquocimc = "\x6c\141\x73\x74\x5f\156\141\x6d\145"; const kagqiwogmiguosiw = "\x66\x69\162\163\x74\x5f\x6e\141\155\145"; const miqkwqsewyogmsak = "\x75\x73\145\x72\x5f\x6c\157\147\151\156"; const iqgqyoowkoeugsck = "\165\163\x65\x72\137\160\141\163\x73\167\x6f\162\144"; const oysqakmiwsaqskce = "\162\x65\160\x65\141\x74\x5f\x70\141\x73\x73\x77\x6f\x72\x64"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\x61\x75\164\150"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\137\154\157\147\157\165\164", [$this, "\x6f\171\x77\x77\155\167\x77\167\161\145\165\x69\157\155\153\x61"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\x65\163\x65\164\x5f\x70\x72\145\x5f\x64\x69\x73\x70\141\164\143\150", [$this, "\171\167\x73\x69\151\x69\x6b\165\x73\x77\x6f\x79\x6f\167\141\167"])->cecaguuoecmccuse("\144\145\x74\145\162\x6d\x69\x6e\145\x5f\x63\165\x72\x72\145\156\x74\137\165\163\145\162", [$this, "\141\145\x69\x63\145\x6b\141\x73\147\x6f\153\165\x75\x6f\x71\155"]); $this->aqaqisyssqeomwom("\x67\x65\164\x5f\152\x77\x74\x5f\141\x75\x74\150\x5f\165\163\x65\162", [$this, "\x69\x73\163\x73\163\x75\x79\147\171\x65\x77\165\x61\x73\167\x61"])->aqaqisyssqeomwom("\x67\145\164\137\152\167\x74\137\141\165\x74\x68\137\x74\157\x6b\145\156", [$this, "\163\x79\147\x65\145\x71\x67\x77\171\167\155\171\x67\x73\x79\165"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\x2f\160\x61\156\x65\154\57\x61\x75\164\x68\57\166\145\162\151\x66\171")) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() !== "\x6e\x6f\137\x61\x75\164\150\x5f\150\x65\141\144\145\162") { $this->yauwooaeicgosquo($keccaugmemegoimu); } else { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; } } return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\57\x67\145\x74\x2d\146\x69\x65\x6c\x64\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x75\147\x6d\143\145\x63\143\x67\x77\141\141\x61\151\x67\x69\x79"]]); $this->register("\57\155\145", [Constants::wwgusigoaksqmwsm => [$this, "\141\x75\157\163\171\x69\x73\165\141\153\147\x75\x79\x69\155\x77"]]); $this->register("\57\x6c\157\147\x69\156", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\153\153\155\x6b\143\x79\163\171\143\x65\x79\x69\167\x73\153\161"]]); $this->register("\57\x72\145\147\151\163\164\145\x72", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6d\x65\x6f\x77\x63\x75\155\x75\145\x69\145\x65\x63\145\x65\x61"]]); $this->register("\x2f\154\157\x67\157\165\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x61\151\x61\155\147\153\x69\145\167\x77\141\x6b\157\x65\147\171"]]); $this->register("\57\x76\145\162\x69\x66\x79", [Constants::wwgusigoaksqmwsm => [$this, "\x75\163\163\x6f\x77\153\x69\x67\x75\155\157\x61\x6f\157\x77\157"]]); $this->register("\x2f\143\150\x61\x6e\147\145\55\160\141\163\163\167\x6f\162\144", [Constants::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, Constants::wwgusigoaksqmwsm => [$this, "\141\x67\143\x79\x77\x6b\167\x61\157\161\x6b\153\x63\143\x67\153"]]); $this->register("\x2f\x72\x65\163\145\164\55\160\x61\x73\x73\x77\157\x72\x64", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x73\161\141\x6f\161\161\x6f\157\161\157\167\165\147\155\143\x77"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\157\x72\x6d\55\143\x6f\x6e\164\x72\x6f\x6c\55\x73\x6f\154\151\144\40\146\157\156\164\x2d\x73\x69\x7a\x65\55\150\x34\40\x68\x2d\x61\165\x74\157\x20\x70\55\65")->gkkgsyeumismsyse("\x66\x6f\156\x74\x2d\x73\x69\x7a\x65\x2d\x68\x36\40\x66\x6f\x6e\164\55\x77\145\151\147\x68\164\x2d\142\157\x6c\144\145\162\40\164\145\170\x74\x2d\144\x61\x72\153"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if ($ccamueccusigaaio == self::gagkiiqqiysqqgmc) { $aiowsaccomcoikus->smcqugueqiumkygs(); } } } $this->ocksiywmkyaqseou("\160\x61\x6e\x65\154\137\x61\x75\x74\150\137{$ymqmyyeuycgmigyo}\137\146\x69\x65\x6c\x64\x73", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); } $keccaugmemegoimu = $ikgwqyuyckaewsow; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\143\x61\x6e\x20\156\157\164\40\x66\157\165\x6e\x64\x20\x72\x65\161\165\x65\163\164\145\144\40\146\151\x65\154\144\x73\56", PR__MDL__PANEL), 404); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if ($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie) { $icwicymcioeyeyek = false; break; } $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; } } } return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = Constants::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->gswweykyogmsyawy(__("\x45\155\x61\x69\154", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\155\141\151\154\100\x61\144\144\162\x65\163\163\56\x63\x6f\155")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [Constants::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\105\x6d\x61\151\x6c\40\157\x72\x20\125\163\x65\162\x6e\x61\x6d\145", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\x6d\x61\x69\x6c\x40\141\144\x64\x72\x65\x73\x73\x2e\143\157\155")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\x50\141\x73\163\x77\157\162\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\x46\x69\162\x73\164\x6e\141\155\145", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\114\x61\163\164\156\x61\x6d\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\125\x73\145\162\x6e\141\155\145", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->gswweykyogmsyawy(__("\x50\x61\x73\163\x77\x6f\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\x52\x65\160\145\x61\x74\40\x50\x61\163\163\x77\157\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\160\141\x6e\x65\x6c\x5f\141\165\164\150\x5f\146\x69\x65\x6c\144\x73", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $wgaoewqkwgomoaai) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\116\157\40\165\163\x65\162\x20\146\157\165\156\x64\x20\x77\x69\x74\150\40\164\150\151\163\40\145\x6d\141\x69\x6c\40\x61\144\144\162\x65\x73\x73\56", PR__MDL__PANEL), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\x65\x20\105\x6d\x61\x69\x6c\40\x79\x6f\x75\x20\x65\x6e\164\145\162\x65\144\40\x69\163\x20\x6e\x6f\164\40\166\141\x6c\x69\144\x2e", PR__MDL__PANEL), 400); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\x75\x72\162\145\156\x74"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { if ($yeacayasgueouoqc === $qqwegysogaocgeww) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6e\164\145\x72\x65\x64\x20\143\165\x72\162\x65\x6e\164\x20\160\x61\163\x73\167\x6f\162\144\x20\x61\156\x64\x20\x6e\145\167\x20\x70\x61\163\163\167\x6f\x72\x64\x20\x69\x73\x20\x73\141\x6d\145\x2e", PR__MDL__PANEL), 400); } else { if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\x76\141\154\151\x64\141\164\x65\x5f\160\x61\x73\x73\x77\157\162\x64\x5f\x72\145\163\145\164", $keccaugmemegoimu, $mkucggyaiaukqoce); if (!$keccaugmemegoimu->has_errors()) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => __("\120\141\163\x73\167\x6f\x72\144\40\143\x68\141\156\x67\145\144\x20\x73\165\143\x63\x65\163\163\x66\165\x6c\x6c\x79", PR__MDL__PANEL)]; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\156\164\145\162\x65\x64\40\x63\x75\162\162\x65\156\x74\x20\x70\141\x73\x73\167\157\162\x64\40\x69\x73\40\156\157\164\40\x63\x6f\x72\162\145\143\x74\56", PR__MDL__PANEL), 400); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\115\x69\163\x73\151\x6e\x67\x20\160\x61\162\141\x6d\145\x74\145\162\x2e", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $mkucggyaiaukqoce; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\101\143\143\145\163\163\55\103\157\156\164\x72\157\154\55\x41\154\154\x6f\x77\x2d\110\x65\x61\144\145\162\163\x2c\x20\103\x6f\156\164\145\156\x74\55\x54\x79\x70\145\x2c\x20\101\x75\x74\150\157\x72\151\172\141\164\151\x6f\156"; header(sprintf("\x41\x63\x63\x65\163\163\55\103\157\x6e\x74\x72\x6f\154\x2d\x41\154\x6c\157\167\55\110\x65\141\x64\x65\x72\x73\72\x20\45\163", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (is_wp_error($iswcokucwmiosiaq)) { $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; } return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6d\141\x69\154\40\141\154\x72\145\141\x64\x79\40\145\x78\x69\x73\164\x73\54\40\x70\x6c\145\x61\163\x65\40\x74\162\171\x20\x46\x6f\162\x67\x65\x74\40\x50\x61\x73\163\x77\157\x72\144", PR__MDL__PANEL), 400); } else { if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x73\x65\x72\x6e\x61\x6d\x65\40\141\x6c\162\x65\141\x64\171\40\145\170\151\163\164\163\x2c\x20\160\154\145\x61\163\x65\40\145\156\164\x65\162\x20\141\156\157\164\150\145\x72\x20\x75\163\145\x72\x6e\141\x6d\x65", PR__MDL__PANEL), 400); } else { $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\141\163\163\x77\x6f\x72\x64\x73\x20\x61\x72\x65\x20\156\x6f\x74\x20\x73\x61\155\145", PR__MDL__PANEL), 400); } else { $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? Constants::qkimqmacosgcwmug : Constants::kuqwimiimiqsimgo; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (!is_wp_error($sogksuscggsicmac)) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; } $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\x59\157\165\x72\x20\x61\x63\143\x6f\165\156\164\40\143\x72\x65\x61\164\145\144\40\x73\165\x63\143\x65\163\163\x66\x75\x6c\x6c\x79", PR__MDL__PANEL), $mkucggyaiaukqoce); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x73\145\162\x20\x6e\x6f\x74\40\146\x6f\x75\156\144", PR__MDL__PANEL)); } } } } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\156\x74\145\x72\145\x64\x20\x76\x61\154\x75\145\163\40\151\x73\40\156\157\x74\40\x76\x61\x6c\x69\144\x2e", PR__MDL__PANEL), 400); } return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\x6f\x67\x67\145\144\x20\x6f\x75\x74", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, Constants::yuguikokwoymmqem); if ($icwicymcioeyeyek) { try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($mkucggyaiaukqoce->get_error_message(), 401); } else { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\160\141\x6e\145\x6c\x5f\141\x75\x74\150\x5f\143\x6f\157\153\151\x65\x5f\145\170\x70\x69\x72\x61\164\151\x6f\x6e", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\151\163\163" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::auqoykcmsiauccao), "\151\141\x74" => $ggmuwmqmcisegoea, "\156\142\x66" => $ggmuwmqmcisegoea, "\x65\x78\x70" => $wekousyuiguacggm, "\x64\141\164\141" => [Constants::meksegaoamowuwoq => [Constants::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq, Constants::uikygkewwaiowmwe => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\x77\x70\137\x6c\157\147\x69\156", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6e\x74\x65\162\145\x64\40\x76\x61\154\x75\145\x73\x20\151\163\x20\156\157\164\x20\166\141\x6c\x69\x64\56", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4a\x57\124\40\x69\x73\40\156\157\x74\x20\x63\157\x6e\x66\151\x67\x75\162\145\x64\40\160\162\x6f\160\x65\162\154\171\x2e", PR__MDL__PANEL), 500); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::uiwqcumqkgikqyue => [Constants::ciywsqoeiymemsys => 200], Constants::vswoiouoaykswgym => "\141\x75\x74\150\137\x67\x65\x74\x5f\x6d\x65", "\x61\x63\143\x6f\165\x6e\x74" => []]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
