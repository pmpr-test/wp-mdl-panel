<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7b5e6c22             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\162\x65\147\151\163\164\x65\162"; const soawgaqmsgmysyma = "\x72\x65\x73\x65\164\137\160\141\163\x73\167\x6f\162\144"; const igswqqsosoeiociu = "\x66\x6f\x72\147\x6f\x74\x5f\x70\x61\x73\163\x77\x6f\162\144"; const scagkwwiiquocimc = "\x6c\141\163\x74\137\156\x61\155\145"; const kagqiwogmiguosiw = "\146\151\162\x73\164\x5f\156\x61\155\145"; const miqkwqsewyogmsak = "\165\x73\x65\x72\x5f\154\x6f\x67\x69\156"; const iqgqyoowkoeugsck = "\165\163\145\x72\137\160\141\x73\x73\x77\157\162\x64"; const oysqakmiwsaqskce = "\162\x65\160\x65\141\x74\x5f\x70\x61\163\163\x77\157\162\x64"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\141\x75\164\x68"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\154\x6f\147\x6f\x75\164", [$this, "\157\171\167\167\155\167\x77\167\161\x65\165\x69\157\155\x6b\x61"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\162\145\163\x65\x74\x5f\x70\x72\145\137\x64\151\163\160\141\x74\143\150", [$this, "\x79\x77\x73\151\151\x69\x6b\x75\x73\167\x6f\x79\x6f\x77\141\167"])->cecaguuoecmccuse("\144\x65\x74\145\162\155\x69\156\x65\x5f\143\x75\162\162\x65\x6e\164\137\x75\x73\x65\x72", [$this, "\141\x65\x69\143\145\153\141\x73\147\157\153\165\165\x6f\x71\155"]); $this->aqaqisyssqeomwom("\x67\145\x74\x5f\x6a\167\164\x5f\141\x75\x74\x68\x5f\165\x73\x65\x72", [$this, "\x69\x73\x73\163\163\x75\x79\147\171\145\x77\x75\x61\163\x77\x61"])->aqaqisyssqeomwom("\x67\x65\x74\137\x6a\x77\164\x5f\141\x75\164\x68\x5f\x74\157\x6b\145\156", [$this, "\x73\171\x67\145\x65\x71\x67\x77\171\x77\x6d\171\147\x73\171\165"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (!(strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\x2f\x70\x61\x6e\x65\154\x2f\141\x75\164\150\x2f\x76\145\162\x69\146\171"))) { goto iqcogmsguwoikame; } $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() !== "\x6e\x6f\x5f\x61\x75\x74\150\137\x68\x65\x61\144\145\x72") { goto kiwqkcaekqqyuegq; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; goto quwcqmyokicssyew; kiwqkcaekqqyuegq: $this->yauwooaeicgosquo($keccaugmemegoimu); quwcqmyokicssyew: iqcogmsguwoikame: return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\57\147\x65\164\x2d\x66\151\x65\x6c\x64\163", [Constants::wwgusigoaksqmwsm => [$this, "\x75\147\x6d\143\145\x63\x63\x67\x77\141\x61\141\x69\147\x69\x79"]]); $this->register("\57\x6d\x65", [Constants::wwgusigoaksqmwsm => [$this, "\141\x75\x6f\163\171\x69\x73\x75\x61\x6b\x67\165\171\x69\155\167"]]); $this->register("\x2f\x6c\157\x67\151\x6e", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6b\x6b\x6d\153\143\x79\163\x79\x63\x65\x79\151\x77\163\153\161"]]); $this->register("\57\x72\145\147\x69\x73\164\145\162", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6d\x65\157\x77\x63\x75\155\165\x65\151\145\145\143\145\145\x61"]]); $this->register("\57\x6c\157\147\157\165\x74", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\141\151\x61\x6d\147\153\x69\145\167\x77\x61\x6b\157\x65\147\x79"]]); $this->register("\x2f\x76\x65\162\151\146\171", [Constants::wwgusigoaksqmwsm => [$this, "\165\x73\163\x6f\167\153\151\x67\165\x6d\x6f\x61\x6f\x6f\167\x6f"]]); $this->register("\57\143\x68\x61\156\147\145\55\x70\x61\163\x73\167\x6f\162\144", [Constants::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, Constants::wwgusigoaksqmwsm => [$this, "\x61\147\143\x79\167\x6b\x77\141\x6f\161\153\x6b\143\143\147\153"]]); $this->register("\57\162\145\163\145\x74\x2d\160\x61\163\x73\167\x6f\162\144", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\163\161\141\x6f\161\x71\x6f\157\x71\x6f\x77\x75\147\155\x63\167"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { goto ygcsmkuycoagwyou; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\143\x61\156\40\156\x6f\164\40\x66\x6f\165\156\x64\40\x72\x65\161\165\145\x73\164\145\x64\x20\146\151\145\x6c\x64\x73\56", PR__MDL__PANEL), 404); goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto omugkkesagcyagmk; } $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\x6f\x72\x6d\x2d\x63\157\156\x74\x72\157\154\x2d\x73\x6f\x6c\x69\144\40\146\x6f\156\164\x2d\x73\x69\x7a\145\55\150\x34\x20\150\x2d\141\x75\164\157\40\x70\55\65")->gkkgsyeumismsyse("\146\157\x6e\164\55\x73\x69\x7a\145\55\x68\66\x20\x66\x6f\156\x74\x2d\167\x65\x69\147\150\164\x2d\x62\157\x6c\x64\x65\162\40\164\145\x78\164\55\x64\x61\162\x6b"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if (!($ccamueccusigaaio == self::gagkiiqqiysqqgmc)) { goto mosqsmqimqgqoase; } $aiowsaccomcoikus->smcqugueqiumkygs(); mosqsmqimqgqoase: omugkkesagcyagmk: ayyweymyuuiauamo: } yqykqysmiquwoasu: $this->ocksiywmkyaqseou("\x70\141\156\x65\154\x5f\141\x75\164\150\x5f{$ymqmyyeuycgmigyo}\x5f\x66\x69\x65\154\144\163", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); cmqucgoewuyieoyk: } gimmuoqwckiseaik: $keccaugmemegoimu = $ikgwqyuyckaewsow; kqksuugcgsyeoayy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if (!$ikgwqyuyckaewsow) { goto miyqyeiwquwsacsm; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto qkcyqocqqwmqgqww; } $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if (!($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie)) { goto ssoucoucsgccekwe; } $icwicymcioeyeyek = false; goto iggyqogweyosuikc; ssoucoucsgccekwe: $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; qkcyqocqqwmqgqww: qqewoyookaskiuek: } iggyqogweyosuikc: miyqyeiwquwsacsm: return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = Constants::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->gswweykyogmsyawy(__("\105\x6d\x61\x69\154", PR__MDL__PANEL))->kyiucygqsgequoys("\145\155\x61\151\x6c\x40\x61\144\144\x72\x65\163\163\56\143\157\x6d")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [Constants::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\x45\x6d\x61\151\x6c\x20\157\162\40\125\163\145\162\x6e\141\155\x65", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\155\141\x69\x6c\100\141\144\144\x72\145\163\x73\56\x63\x6f\155")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\120\x61\163\x73\x77\x6f\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\x46\x69\x72\x73\164\x6e\x61\x6d\145", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\x4c\x61\x73\164\156\x61\x6d\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\x55\163\145\x72\156\141\155\145", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->gswweykyogmsyawy(__("\x50\141\x73\163\x77\x6f\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\x52\145\x70\145\141\x74\40\120\x61\163\163\167\157\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\160\141\x6e\x65\154\137\141\x75\164\x68\x5f\146\x69\x65\x6c\x64\x73", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { goto wmmggowmigekyoso; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\x65\40\x45\x6d\x61\x69\x6c\40\171\x6f\165\40\145\x6e\164\x65\162\145\144\x20\x69\163\x20\x6e\157\164\40\166\x61\154\x69\144\x2e", PR__MDL__PANEL), 400); goto soqqemyioggmoakg; wmmggowmigekyoso: if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { goto eegqyykygiccaoeo; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4e\x6f\40\165\x73\x65\x72\40\x66\157\x75\x6e\144\40\x77\151\164\150\x20\164\150\151\x73\40\145\x6d\x61\151\154\40\x61\144\x64\x72\145\x73\163\56", PR__MDL__PANEL), 404); goto ywqgcegomwaiuquc; eegqyykygiccaoeo: try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $wgaoewqkwgomoaai) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } ywqgcegomwaiuquc: soqqemyioggmoakg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto kymkucucyeoeikim; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto usquiuuyiyqaeyiu; kymkucucyeoeikim: $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\x75\x72\x72\145\x6e\164"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { goto iekumemscwieugqw; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4d\151\x73\x73\x69\x6e\147\40\x70\x61\162\141\x6d\x65\164\x65\x72\x2e", PR__MDL__PANEL), 400); goto hoeeyiowekaeemko; iekumemscwieugqw: if ($yeacayasgueouoqc === $qqwegysogaocgeww) { goto oqugqwcyomiaaoqu; } if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { goto suswcqoyyqkkquuo; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\156\x74\145\162\x65\144\x20\x63\165\162\x72\145\156\x74\x20\x70\141\163\163\x77\157\x72\144\40\151\163\40\156\x6f\164\x20\x63\157\x72\x72\x65\x63\164\56", PR__MDL__PANEL), 400); goto eeqesooyqagwawae; suswcqoyyqkkquuo: $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\166\x61\154\151\144\141\x74\145\x5f\160\x61\163\163\167\x6f\162\144\x5f\162\x65\163\145\164", $keccaugmemegoimu, $mkucggyaiaukqoce); if ($keccaugmemegoimu->has_errors()) { goto acaqummmoyiemqss; } $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => __("\120\x61\x73\163\x77\157\162\x64\40\143\150\x61\156\x67\x65\144\40\x73\x75\x63\143\x65\x73\163\146\165\x6c\x6c\x79", PR__MDL__PANEL)]; acaqummmoyiemqss: eeqesooyqagwawae: goto foeeqckqsyockkak; oqugqwcyomiaaoqu: $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6e\x74\x65\162\x65\x64\x20\x63\x75\x72\x72\x65\x6e\164\x20\160\x61\x73\163\x77\157\162\x64\40\x61\156\x64\x20\x6e\145\167\x20\x70\141\163\163\x77\x6f\162\144\x20\151\163\40\x73\x61\155\x65\56", PR__MDL__PANEL), 400); foeeqckqsyockkak: hoeeyiowekaeemko: usquiuuyiyqaeyiu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\x41\x63\143\145\x73\163\55\103\x6f\156\x74\162\x6f\154\55\x41\154\x6c\157\x77\55\x48\x65\141\144\x65\x72\163\54\x20\103\157\x6e\x74\x65\x6e\x74\55\124\x79\160\x65\54\40\x41\x75\x74\150\x6f\x72\x69\172\x61\164\151\157\x6e"; header(sprintf("\x41\143\x63\x65\163\x73\55\x43\157\x6e\x74\162\x6f\154\x2d\101\x6c\154\x6f\x77\x2d\x48\145\141\x64\x65\162\x73\72\40\45\x73", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (!is_wp_error($iswcokucwmiosiaq)) { goto qicwaskssogcokgm; } $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; qicwaskssogcokgm: return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { goto giaacoqqqsekcayy; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\x6e\164\x65\x72\145\x64\x20\x76\x61\x6c\x75\x65\163\x20\x69\x73\40\x6e\157\x74\40\166\x61\154\151\144\x2e", PR__MDL__PANEL), 400); goto ewymsmkkiksgwysk; giaacoqqqsekcayy: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { goto cgiscsqwwgqqaeqi; } if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { goto wiysogeqqwgioyka; } $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { goto suqkuqygkkgwyaie; } $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? Constants::qkimqmacosgcwmug : Constants::kuqwimiimiqsimgo; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (is_wp_error($sogksuscggsicmac)) { goto aegysmeecgcgayyw; } $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { goto esuiysskoweawsue; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\145\x72\40\x6e\x6f\x74\x20\146\157\165\156\x64", PR__MDL__PANEL)); goto gaomwagkcciesyqy; esuiysskoweawsue: $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; uqqaiagaeqgqgaiy: } uguigkcmukuouway: $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\x59\x6f\x75\x72\x20\141\143\143\x6f\x75\156\164\40\143\x72\145\x61\164\x65\144\x20\163\165\143\143\145\x73\163\x66\x75\154\x6c\171", PR__MDL__PANEL), $mkucggyaiaukqoce); gaomwagkcciesyqy: aegysmeecgcgayyw: goto soaccwqimeksgwiw; suqkuqygkkgwyaie: $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x61\x73\x73\x77\x6f\x72\144\163\x20\141\x72\x65\40\x6e\157\x74\40\x73\x61\155\x65", PR__MDL__PANEL), 400); soaccwqimeksgwiw: goto skkamseieeusycye; wiysogeqqwgioyka: $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\x65\162\156\141\x6d\x65\40\141\154\x72\145\141\144\171\40\x65\x78\151\x73\164\163\54\x20\160\x6c\x65\141\x73\x65\x20\145\x6e\x74\145\x72\40\x61\x6e\x6f\x74\x68\145\x72\x20\x75\x73\145\162\156\x61\155\145", PR__MDL__PANEL), 400); skkamseieeusycye: goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6d\141\x69\154\x20\x61\x6c\162\145\141\x64\171\x20\145\x78\151\163\x74\x73\x2c\x20\160\x6c\145\141\x73\x65\x20\x74\162\171\40\x46\x6f\162\147\145\x74\40\x50\141\163\163\167\157\x72\x64", PR__MDL__PANEL), 400); syiqkaasoueowwui: ewymsmkkiksgwysk: return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\157\147\x67\145\144\40\x6f\165\164", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto egyyiccaeeiooaua; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\x57\x54\40\x69\x73\40\156\x6f\164\x20\143\157\156\x66\151\x67\165\x72\145\144\40\160\162\157\x70\x65\162\154\171\56", PR__MDL__PANEL), 500); goto scisgsyemmsekgos; egyyiccaeeiooaua: $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, Constants::yuguikokwoymmqem); if ($icwicymcioeyeyek) { goto gkyawqqcmigqgaiq; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\156\164\145\162\145\x64\x20\x76\x61\154\165\145\163\40\151\163\40\x6e\x6f\164\x20\166\x61\154\x69\144\x2e", PR__MDL__PANEL), 400); goto ooeausyowguqicuo; gkyawqqcmigqgaiq: try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { goto cmegwsegsosyqcai; } $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\x70\141\x6e\x65\154\x5f\141\165\x74\150\137\143\157\157\x6b\151\x65\137\145\170\160\x69\x72\141\164\151\x6f\156", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\x69\163\163" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::auqoykcmsiauccao), "\x69\141\164" => $ggmuwmqmcisegoea, "\156\x62\x66" => $ggmuwmqmcisegoea, "\x65\x78\x70" => $wekousyuiguacggm, "\144\141\164\141" => [Constants::meksegaoamowuwoq => [Constants::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq, Constants::uikygkewwaiowmwe => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\167\160\x5f\x6c\157\147\151\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); goto wmywuusgukmmaams; cmegwsegsosyqcai: $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($mkucggyaiaukqoce->get_error_message(), 401); wmywuusgukmmaams: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } ooeausyowguqicuo: scisgsyemmsekgos: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cewmoqyysgsmuiya; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq]; cewmoqyysgsmuiya: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto igooksugieceoege; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::uiwqcumqkgikqyue => [Constants::ciywsqoeiymemsys => 200], Constants::vswoiouoaykswgym => "\141\x75\x74\x68\137\147\145\x74\137\155\x65", "\x61\143\x63\x6f\165\x6e\x74" => []]; igooksugieceoege: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
