<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6796c2712d5ab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\162\x65\147\x69\163\x74\145\x72"; const soawgaqmsgmysyma = "\x72\145\163\x65\164\x5f\x70\x61\163\x73\167\157\x72\x64"; const igswqqsosoeiociu = "\146\x6f\x72\x67\157\x74\x5f\160\x61\163\x73\x77\157\x72\x64"; const scagkwwiiquocimc = "\154\141\163\164\137\x6e\141\155\145"; const kagqiwogmiguosiw = "\146\x69\162\163\164\x5f\156\141\x6d\145"; const miqkwqsewyogmsak = "\x75\163\145\x72\x5f\x6c\157\147\x69\156"; const iqgqyoowkoeugsck = "\165\x73\145\x72\x5f\x70\x61\163\x73\x77\157\x72\x64"; const oysqakmiwsaqskce = "\162\x65\160\145\x61\164\x5f\160\x61\163\x73\167\x6f\162\144"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\141\x75\x74\150"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\x5f\154\157\x67\157\x75\164", [$this, "\x6f\171\167\167\155\167\167\167\x71\145\165\x69\157\155\153\141"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\162\145\x73\x65\164\x5f\160\x72\x65\x5f\144\151\x73\160\x61\x74\x63\x68", [$this, "\x79\x77\x73\x69\x69\151\153\165\163\x77\157\171\x6f\167\x61\x77"])->cecaguuoecmccuse("\144\x65\x74\145\162\x6d\151\156\x65\x5f\143\x75\162\162\145\156\x74\x5f\165\x73\x65\x72", [$this, "\x61\x65\151\x63\x65\x6b\x61\163\147\x6f\x6b\165\x75\x6f\x71\155"]); $this->aqaqisyssqeomwom("\x67\x65\x74\137\152\167\164\x5f\x61\x75\x74\x68\x5f\165\x73\145\162", [$this, "\151\163\x73\x73\163\165\x79\147\x79\145\x77\165\141\163\x77\141"])->aqaqisyssqeomwom("\147\x65\164\x5f\x6a\x77\164\137\141\165\x74\x68\137\x74\x6f\153\x65\x6e", [$this, "\x73\x79\147\145\x65\161\147\167\171\x77\155\171\x67\163\171\165"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\57\x70\141\156\145\x6c\x2f\x61\x75\x74\150\x2f\166\145\162\x69\x66\171")) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() !== "\x6e\x6f\137\x61\x75\x74\150\x5f\x68\145\x61\144\145\x72") { $this->yauwooaeicgosquo($keccaugmemegoimu); } else { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; } } return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\57\x67\145\164\55\146\x69\x65\154\144\163", [Constants::wwgusigoaksqmwsm => [$this, "\x75\147\x6d\x63\145\x63\x63\147\x77\141\141\141\151\x67\x69\171"]]); $this->register("\57\x6d\x65", [Constants::wwgusigoaksqmwsm => [$this, "\x61\165\x6f\163\171\151\163\x75\x61\153\147\x75\x79\151\x6d\167"]]); $this->register("\57\154\x6f\x67\x69\x6e", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\153\153\155\153\143\x79\163\171\143\x65\171\151\167\x73\x6b\161"]]); $this->register("\x2f\x72\145\x67\151\163\x74\145\162", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\155\x65\157\x77\x63\x75\155\165\x65\x69\x65\x65\x63\145\145\141"]]); $this->register("\x2f\x6c\x6f\147\x6f\x75\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\141\x69\141\155\147\x6b\x69\145\x77\167\x61\153\x6f\x65\x67\171"]]); $this->register("\57\166\x65\162\x69\x66\171", [Constants::wwgusigoaksqmwsm => [$this, "\165\x73\163\157\167\x6b\x69\147\165\155\157\x61\157\157\x77\x6f"]]); $this->register("\57\x63\x68\141\156\x67\145\55\160\141\163\x73\167\x6f\x72\x64", [Constants::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, Constants::wwgusigoaksqmwsm => [$this, "\x61\x67\x63\x79\x77\153\167\x61\x6f\161\153\153\143\143\x67\x6b"]]); $this->register("\57\x72\145\163\x65\x74\x2d\160\141\163\x73\x77\x6f\x72\144", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\163\161\x61\157\x71\x71\x6f\157\x71\157\x77\x75\x67\155\143\x77"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\157\x72\155\x2d\x63\157\x6e\164\x72\x6f\154\55\x73\157\x6c\151\144\x20\146\x6f\x6e\x74\55\163\x69\172\x65\x2d\150\64\x20\x68\55\141\165\x74\157\40\160\x2d\65")->gkkgsyeumismsyse("\146\157\x6e\x74\55\163\151\x7a\x65\x2d\150\66\x20\x66\157\x6e\x74\x2d\167\145\151\147\150\x74\55\x62\157\154\144\145\162\x20\164\145\x78\x74\x2d\x64\141\162\153"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if ($ccamueccusigaaio == self::gagkiiqqiysqqgmc) { $aiowsaccomcoikus->smcqugueqiumkygs(); } } } $this->ocksiywmkyaqseou("\x70\x61\x6e\x65\x6c\137\x61\x75\164\150\x5f{$ymqmyyeuycgmigyo}\137\x66\151\x65\154\144\163", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); } $keccaugmemegoimu = $ikgwqyuyckaewsow; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x63\141\156\x20\x6e\x6f\x74\x20\146\157\165\x6e\x64\x20\162\x65\x71\165\x65\x73\164\145\144\x20\146\151\x65\x6c\x64\x73\x2e", PR__MDL__PANEL), 404); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if ($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie) { $icwicymcioeyeyek = false; break; } $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; } } } return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = Constants::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->gswweykyogmsyawy(__("\x45\155\x61\151\x6c", PR__MDL__PANEL))->kyiucygqsgequoys("\145\x6d\x61\x69\154\100\141\x64\144\162\145\163\x73\56\x63\x6f\155")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [Constants::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\x45\x6d\141\x69\154\x20\x6f\x72\40\x55\x73\145\x72\156\x61\x6d\145", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\155\x61\151\x6c\100\x61\x64\144\x72\145\x73\x73\x2e\x63\157\x6d")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\120\141\x73\163\167\x6f\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\106\x69\162\x73\x74\x6e\x61\155\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\x4c\141\163\x74\x6e\141\155\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\x55\x73\x65\162\x6e\141\x6d\145", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->gswweykyogmsyawy(__("\120\x61\163\163\x77\157\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\x52\x65\x70\145\x61\164\40\x50\141\x73\163\x77\x6f\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\x70\x61\156\x65\154\137\141\x75\x74\150\137\146\x69\x65\x6c\144\163", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $wgaoewqkwgomoaai) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\116\x6f\x20\x75\x73\145\162\40\x66\157\x75\x6e\x64\40\x77\151\x74\150\40\x74\x68\x69\x73\x20\145\155\x61\151\x6c\40\x61\x64\144\x72\x65\163\x73\56", PR__MDL__PANEL), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\145\x20\105\x6d\141\x69\154\40\x79\157\x75\x20\x65\x6e\x74\145\162\x65\x64\x20\x69\163\x20\156\157\164\40\166\141\x6c\151\x64\56", PR__MDL__PANEL), 400); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\x75\x72\162\x65\156\164"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { if ($yeacayasgueouoqc === $qqwegysogaocgeww) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\x6e\x74\145\x72\x65\144\40\x63\165\162\x72\x65\156\164\40\x70\141\163\x73\x77\x6f\x72\144\x20\141\156\144\x20\x6e\x65\167\x20\160\141\x73\163\x77\157\162\x64\x20\151\x73\40\x73\141\x6d\x65\x2e", PR__MDL__PANEL), 400); } else { if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\x76\141\154\x69\144\x61\164\145\137\160\x61\x73\163\x77\x6f\162\x64\x5f\x72\x65\x73\145\164", $keccaugmemegoimu, $mkucggyaiaukqoce); if (!$keccaugmemegoimu->has_errors()) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => __("\120\x61\163\163\x77\157\x72\144\40\x63\x68\141\156\147\x65\x64\40\x73\165\143\x63\x65\163\x73\146\x75\x6c\x6c\171", PR__MDL__PANEL)]; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\x6e\x74\145\162\x65\x64\40\143\x75\162\x72\x65\156\x74\x20\160\141\x73\x73\x77\x6f\x72\x64\40\x69\163\x20\156\157\x74\40\x63\x6f\162\162\145\x63\164\x2e", PR__MDL__PANEL), 400); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\115\x69\163\163\x69\x6e\x67\x20\160\x61\162\141\155\145\x74\145\x72\x2e", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $mkucggyaiaukqoce; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\x41\x63\143\x65\x73\x73\x2d\103\157\156\x74\162\x6f\x6c\x2d\x41\x6c\x6c\157\167\55\110\x65\141\x64\x65\162\x73\x2c\x20\x43\157\156\x74\x65\156\x74\x2d\x54\x79\x70\145\x2c\40\101\165\x74\x68\x6f\x72\151\172\x61\x74\x69\157\x6e"; header(sprintf("\x41\x63\x63\x65\163\163\55\x43\157\156\164\x72\157\154\x2d\101\x6c\x6c\157\x77\55\x48\145\141\144\x65\162\163\72\x20\x25\163", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (is_wp_error($iswcokucwmiosiaq)) { $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; } return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\x6d\141\151\154\x20\141\x6c\x72\x65\x61\144\x79\x20\x65\170\151\163\x74\x73\x2c\x20\x70\154\x65\x61\x73\x65\40\164\x72\x79\x20\106\x6f\162\147\145\x74\x20\x50\141\x73\x73\x77\x6f\x72\144", PR__MDL__PANEL), 400); } else { if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\145\162\156\x61\x6d\145\x20\141\154\162\x65\x61\144\171\x20\145\x78\x69\x73\x74\163\x2c\40\x70\154\x65\x61\x73\145\x20\145\x6e\164\x65\x72\40\x61\x6e\157\x74\x68\145\x72\40\x75\163\145\x72\x6e\x61\155\145", PR__MDL__PANEL), 400); } else { $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\141\x73\x73\167\157\162\x64\x73\x20\141\162\145\x20\x6e\157\164\x20\x73\x61\155\x65", PR__MDL__PANEL), 400); } else { $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? Constants::qkimqmacosgcwmug : Constants::kuqwimiimiqsimgo; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (!is_wp_error($sogksuscggsicmac)) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { $miemcogcecyqwsea = $ewgmommeawggyaek->igawqaomowicuayw(Constants::kagqiwogmiguosiw, $sogksuscggsicmac); $eqmqoaiqqsgwqgcs = $ewgmommeawggyaek->igawqaomowicuayw(Constants::scagkwwiiquocimc, $sogksuscggsicmac); $fkgqmwkusywysaus = trim($miemcogcecyqwsea . "\40" . $eqmqoaiqqsgwqgcs); if ($fkgqmwkusywysaus) { $mkucggyaiaukqoce->display_name = $fkgqmwkusywysaus; } $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; } $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\131\x6f\165\162\40\x61\x63\143\157\165\x6e\164\40\143\162\x65\141\164\x65\x64\x20\163\x75\x63\x63\x65\163\163\x66\x75\154\154\171", PR__MDL__PANEL), $mkucggyaiaukqoce); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\145\x72\40\x6e\157\x74\40\x66\x6f\165\156\144", PR__MDL__PANEL)); } } } } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\x6e\164\x65\x72\145\x64\x20\166\x61\154\x75\x65\163\x20\151\163\x20\156\157\164\40\166\x61\154\x69\144\x2e", PR__MDL__PANEL), 400); } return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\114\157\x67\x67\x65\x64\40\x6f\165\x74", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, Constants::yuguikokwoymmqem); if ($icwicymcioeyeyek) { try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($mkucggyaiaukqoce->get_error_message(), 401); } else { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\160\x61\x6e\145\x6c\137\x61\165\164\150\137\x63\x6f\x6f\153\x69\x65\x5f\145\x78\x70\x69\x72\x61\x74\151\157\x6e", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\151\x73\x73" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::auqoykcmsiauccao), "\x69\141\164" => $ggmuwmqmcisegoea, "\156\142\x66" => $ggmuwmqmcisegoea, "\145\170\x70" => $wekousyuiguacggm, "\x64\x61\x74\141" => [Constants::meksegaoamowuwoq => [Constants::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq, Constants::uikygkewwaiowmwe => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\x77\x70\137\x6c\157\147\x69\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\x6e\x74\x65\x72\145\x64\40\x76\141\x6c\165\x65\163\40\x69\x73\40\156\x6f\164\40\166\x61\154\x69\x64\56", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\x57\124\x20\x69\163\40\x6e\157\164\40\143\157\156\x66\x69\147\x75\162\145\144\x20\160\162\x6f\160\x65\x72\x6c\x79\x2e", PR__MDL__PANEL), 500); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::uiwqcumqkgikqyue => [Constants::ciywsqoeiymemsys => 200], Constants::vswoiouoaykswgym => "\x61\165\x74\x68\x5f\x67\145\164\137\155\x65", "\x61\x63\x63\157\165\x6e\164" => []]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
