<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ffe1d1750             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\x72\145\147\x69\163\164\145\162"; const soawgaqmsgmysyma = "\162\x65\163\145\x74\137\160\x61\163\x73\167\x6f\x72\144"; const igswqqsosoeiociu = "\146\x6f\x72\x67\x6f\x74\137\x70\x61\163\x73\x77\x6f\162\x64"; const scagkwwiiquocimc = "\154\x61\163\x74\x5f\x6e\141\x6d\x65"; const kagqiwogmiguosiw = "\146\151\x72\163\x74\x5f\x6e\x61\155\145"; const miqkwqsewyogmsak = "\165\x73\x65\x72\137\154\x6f\147\x69\156"; const iqgqyoowkoeugsck = "\x75\163\145\x72\137\x70\141\x73\x73\x77\157\162\144"; const oysqakmiwsaqskce = "\162\x65\x70\x65\141\x74\x5f\160\141\163\x73\167\157\162\144"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\x61\x75\x74\x68"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\x5f\154\157\x67\157\165\164", [$this, "\157\171\x77\167\x6d\x77\167\x77\161\145\x75\151\157\x6d\153\x61"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\162\145\163\145\x74\x5f\160\162\145\137\144\x69\x73\160\x61\164\x63\x68", [$this, "\171\167\163\x69\151\x69\153\165\163\167\157\x79\157\x77\141\167"])->cecaguuoecmccuse("\144\x65\164\x65\162\x6d\x69\x6e\145\x5f\x63\x75\162\162\145\x6e\x74\x5f\x75\x73\x65\x72", [$this, "\x61\x65\x69\143\145\153\141\163\147\157\x6b\x75\x75\157\x71\155"]); $this->aqaqisyssqeomwom("\x67\x65\164\137\x6a\167\x74\137\x61\x75\164\150\137\165\163\145\162", [$this, "\x69\x73\163\x73\x73\165\x79\147\171\x65\167\165\x61\x73\x77\141"])->aqaqisyssqeomwom("\147\145\164\137\x6a\x77\x74\x5f\141\165\x74\x68\x5f\164\157\153\145\156", [$this, "\163\x79\x67\x65\145\161\147\x77\x79\167\x6d\x79\147\x73\x79\x75"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\x2f\x70\141\x6e\x65\x6c\57\141\x75\x74\150\x2f\x76\x65\x72\x69\146\x79")) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() !== "\x6e\157\x5f\141\x75\x74\150\x5f\150\145\141\x64\145\x72") { $this->yauwooaeicgosquo($keccaugmemegoimu); } else { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; } } return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\57\x67\145\x74\55\x66\151\x65\154\144\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x75\147\155\x63\x65\x63\x63\147\167\x61\141\x61\x69\147\x69\171"]]); $this->register("\57\155\x65", [Constants::wwgusigoaksqmwsm => [$this, "\141\x75\157\x73\171\x69\x73\165\141\153\147\x75\x79\x69\155\167"]]); $this->register("\57\154\157\147\x69\156", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\153\x6b\155\x6b\x63\x79\163\x79\x63\x65\171\151\x77\x73\153\x71"]]); $this->register("\x2f\x72\145\147\x69\163\164\145\162", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\155\145\x6f\x77\x63\x75\x6d\165\145\x69\145\x65\143\145\145\x61"]]); $this->register("\57\154\157\x67\157\165\x74", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\141\151\x61\155\147\x6b\x69\x65\167\x77\x61\153\x6f\145\147\x79"]]); $this->register("\x2f\x76\145\162\x69\146\x79", [Constants::wwgusigoaksqmwsm => [$this, "\x75\x73\163\157\167\153\x69\147\x75\155\x6f\141\157\157\167\x6f"]]); $this->register("\x2f\x63\x68\141\x6e\x67\x65\x2d\x70\141\163\x73\x77\157\162\144", [Constants::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, Constants::wwgusigoaksqmwsm => [$this, "\141\x67\143\x79\x77\153\x77\x61\x6f\161\153\x6b\x63\143\147\153"]]); $this->register("\57\x72\x65\x73\x65\x74\55\160\x61\x73\x73\167\157\162\144", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\163\161\141\157\161\161\x6f\157\161\157\167\165\x67\x6d\143\x77"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\157\x72\x6d\x2d\143\157\156\164\x72\x6f\154\55\x73\x6f\154\151\x64\x20\x66\157\x6e\x74\55\x73\x69\x7a\145\55\x68\x34\40\150\55\141\165\x74\x6f\x20\x70\55\x35")->gkkgsyeumismsyse("\146\157\156\164\55\163\x69\x7a\x65\x2d\x68\x36\40\146\157\x6e\164\55\167\x65\151\147\x68\x74\x2d\142\157\x6c\144\145\162\x20\164\x65\170\164\x2d\144\x61\162\x6b"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if ($ccamueccusigaaio == self::gagkiiqqiysqqgmc) { $aiowsaccomcoikus->smcqugueqiumkygs(); } } } $this->ocksiywmkyaqseou("\x70\141\x6e\x65\x6c\x5f\x61\165\x74\x68\x5f{$ymqmyyeuycgmigyo}\137\146\151\x65\x6c\144\163", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); } $keccaugmemegoimu = $ikgwqyuyckaewsow; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x63\141\156\40\156\157\164\40\x66\157\165\156\x64\x20\x72\x65\161\165\x65\x73\x74\145\144\x20\146\x69\x65\154\x64\163\56", PR__MDL__PANEL), 404); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if ($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie) { $icwicymcioeyeyek = false; break; } $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; } } } return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = Constants::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->gswweykyogmsyawy(__("\105\x6d\141\151\154", PR__MDL__PANEL))->kyiucygqsgequoys("\145\155\141\x69\154\x40\x61\x64\144\162\145\x73\x73\56\143\157\x6d")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [Constants::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\105\155\x61\x69\154\x20\157\x72\x20\x55\163\145\x72\x6e\141\155\145", PR__MDL__PANEL))->kyiucygqsgequoys("\145\155\141\151\x6c\100\x61\x64\x64\x72\145\x73\163\x2e\143\x6f\155")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\x50\x61\163\x73\x77\x6f\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\106\x69\x72\x73\164\156\141\x6d\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\114\141\163\x74\x6e\141\155\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\125\163\x65\x72\156\141\x6d\145", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->gswweykyogmsyawy(__("\x50\141\163\x73\167\157\162\144", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\122\145\x70\x65\141\x74\40\120\x61\163\163\167\x6f\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\160\141\x6e\x65\x6c\x5f\x61\165\x74\150\x5f\146\x69\x65\154\144\x73", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $wgaoewqkwgomoaai) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\116\x6f\x20\x75\x73\145\x72\x20\x66\157\165\156\144\x20\167\x69\164\x68\40\164\150\151\163\40\145\x6d\x61\151\x6c\x20\x61\x64\144\162\145\163\163\x2e", PR__MDL__PANEL), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\x65\40\x45\x6d\x61\151\x6c\40\x79\157\165\x20\145\156\x74\x65\162\x65\144\x20\151\163\x20\156\x6f\x74\40\x76\141\154\x69\x64\56", PR__MDL__PANEL), 400); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\x75\x72\162\145\156\164"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { if ($yeacayasgueouoqc === $qqwegysogaocgeww) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\156\164\145\162\145\x64\x20\x63\x75\x72\x72\x65\156\x74\40\x70\141\x73\163\167\157\162\144\x20\x61\156\x64\x20\156\145\167\x20\x70\x61\x73\163\x77\x6f\162\144\40\x69\x73\40\x73\141\155\145\x2e", PR__MDL__PANEL), 400); } else { if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\166\x61\154\151\x64\141\x74\145\137\160\x61\x73\163\x77\157\162\144\x5f\162\x65\163\145\x74", $keccaugmemegoimu, $mkucggyaiaukqoce); if (!$keccaugmemegoimu->has_errors()) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => __("\x50\x61\163\x73\x77\157\x72\144\x20\x63\x68\141\x6e\x67\x65\x64\x20\163\x75\x63\x63\145\x73\x73\x66\x75\x6c\x6c\x79", PR__MDL__PANEL)]; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\x6e\164\x65\x72\x65\x64\40\143\165\x72\x72\x65\156\164\40\x70\x61\x73\x73\167\157\x72\144\x20\151\x73\40\156\x6f\164\x20\x63\x6f\x72\162\145\143\164\56", PR__MDL__PANEL), 400); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\115\151\x73\163\151\156\x67\x20\160\x61\x72\141\x6d\145\164\145\x72\56", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $mkucggyaiaukqoce; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\101\143\x63\145\163\x73\55\103\157\x6e\164\162\x6f\x6c\x2d\101\x6c\154\157\167\55\110\145\141\144\145\x72\x73\x2c\40\103\157\x6e\x74\x65\x6e\x74\x2d\124\x79\160\145\54\x20\x41\165\x74\x68\x6f\x72\151\x7a\141\164\x69\x6f\x6e"; header(sprintf("\x41\143\x63\x65\x73\x73\x2d\103\x6f\156\x74\x72\157\x6c\55\101\154\x6c\157\x77\x2d\110\145\x61\144\x65\x72\x73\72\40\x25\x73", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (is_wp_error($iswcokucwmiosiaq)) { $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; } return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\155\x61\151\x6c\x20\141\154\x72\145\x61\144\x79\40\145\170\x69\x73\164\x73\x2c\x20\160\x6c\145\141\163\x65\40\164\162\171\40\x46\x6f\162\147\x65\x74\40\x50\x61\163\163\167\157\x72\x64", PR__MDL__PANEL), 400); } else { if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\145\162\x6e\x61\x6d\x65\x20\x61\154\162\x65\141\144\x79\40\x65\170\151\163\164\x73\x2c\x20\160\x6c\x65\141\163\x65\40\145\x6e\164\x65\x72\40\x61\156\157\x74\x68\x65\x72\40\x75\x73\145\162\x6e\x61\x6d\145", PR__MDL__PANEL), 400); } else { $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\141\x73\163\167\x6f\162\144\x73\40\x61\162\145\40\x6e\157\x74\40\163\141\155\145", PR__MDL__PANEL), 400); } else { $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? Constants::qkimqmacosgcwmug : Constants::kuqwimiimiqsimgo; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (!is_wp_error($sogksuscggsicmac)) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { $miemcogcecyqwsea = $ewgmommeawggyaek->igawqaomowicuayw(Constants::kagqiwogmiguosiw, $sogksuscggsicmac); $eqmqoaiqqsgwqgcs = $ewgmommeawggyaek->igawqaomowicuayw(Constants::scagkwwiiquocimc, $sogksuscggsicmac); $fkgqmwkusywysaus = trim($miemcogcecyqwsea . "\40" . $eqmqoaiqqsgwqgcs); if ($fkgqmwkusywysaus) { $mkucggyaiaukqoce->display_name = $fkgqmwkusywysaus; } $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; } $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\131\157\165\162\40\x61\x63\143\157\x75\156\164\x20\x63\x72\x65\x61\164\145\144\40\163\x75\143\143\x65\x73\x73\146\165\x6c\x6c\171", PR__MDL__PANEL), $mkucggyaiaukqoce); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\145\162\40\156\157\164\40\x66\157\x75\156\x64", PR__MDL__PANEL)); } } } } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6e\x74\145\x72\x65\144\x20\x76\x61\154\x75\x65\163\40\x69\x73\40\x6e\157\x74\x20\x76\x61\154\151\144\56", PR__MDL__PANEL), 400); } return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\157\x67\x67\145\x64\x20\x6f\x75\164", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, Constants::yuguikokwoymmqem); if ($icwicymcioeyeyek) { try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($mkucggyaiaukqoce->get_error_message(), 401); } else { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\160\x61\x6e\x65\154\x5f\141\165\164\150\137\x63\x6f\x6f\153\x69\x65\x5f\x65\170\x70\x69\162\x61\164\151\157\x6e", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\151\163\163" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::auqoykcmsiauccao), "\151\x61\164" => $ggmuwmqmcisegoea, "\156\x62\146" => $ggmuwmqmcisegoea, "\x65\x78\160" => $wekousyuiguacggm, "\144\141\164\141" => [Constants::meksegaoamowuwoq => [Constants::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq, Constants::uikygkewwaiowmwe => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\167\160\x5f\154\157\x67\x69\156", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\156\164\145\162\145\144\x20\166\141\154\x75\x65\x73\x20\x69\163\40\x6e\157\164\40\166\x61\154\151\x64\56", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4a\x57\124\40\151\x73\40\x6e\x6f\x74\40\x63\x6f\x6e\146\x69\147\x75\162\145\144\40\160\162\157\160\145\x72\x6c\171\56", PR__MDL__PANEL), 500); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::uiwqcumqkgikqyue => [Constants::ciywsqoeiymemsys => 200], Constants::vswoiouoaykswgym => "\x61\165\x74\x68\x5f\x67\x65\164\137\x6d\145", "\141\143\x63\157\x75\156\x74" => []]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
