<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec240d1a8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { public function __construct() { $this->rest_base = "\x70\x72\157\x66\x69\154\x65"; parent::__construct(); } public function gomiusgyskywsqai() : ?User { return User::symcgieuakksimmu(); } public function register_routes() { $this->register("\57\165\x70\x64\141\164\x65", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x75\160\144\x61\x74\145"]]); $this->register("\x2f\147\x65\164\55\x66\x69\x65\154\x64\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x75\x67\155\x63\145\x63\143\x67\167\x61\x61\141\151\147\x69\x79"]]); $this->register("\57\x70\162\x65\166\x69\145\x77\163", [Constants::wwgusigoaksqmwsm => [$this, "\x75\155\147\x67\x77\141\167\145\x63\163\x61\x69\143\x65\161\143"]]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto kecwuwwcwokuksyq; } $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (!is_array($wsqkgswwooewwekw)) { goto egasokooagakisiy; } foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); mswsoaimesegiiic: } usqgaogkqgemuima: egasokooagakisiy: kecwuwwcwokuksyq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto eiawsoasmscmqswa; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto ickcmqoiosquugwe; eiawsoasmscmqswa: $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { goto qmiwsequckckoaei; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\145\x67\x6d\x65\x6e\x74\x20\146\x69\145\154\x64\x20\151\163\40\151\163\x20\155\151\x73\163\151\x6e\147", PR__MDL__PANEL), 400); goto goeoymmqqqeeoime; qmiwsequckckoaei: $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (is_wp_error($keccaugmemegoimu)) { goto qgegkeomwscwwiuw; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x72\x6f\x66\x69\x6c\145\x20\165\160\x64\141\164\x65\40\163\x75\x63\x63\145\163\163\x66\x75\x6c\154\x79\x2e", PR__MDL__PANEL)); qgegkeomwscwwiuw: goeoymmqqqeeoime: ickcmqoiosquugwe: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wsqkgswwooewwekw = ["\x61\x63\x63\157\165\156\164" => [$gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\125\x73\145\162\x6e\141\155\x65", PR__MDL__PANEL))->oykaosmaegqwmoga()->kqqqugemmqagucuq()->iygyugseyaqwywyg($gkyciwoiiisgywcs->get($mkucggyaiaukqoce, Constants::miqkwqsewyogmsak)), $gusoaiguqeaommcc->ymuegqgyuagyucws("\162\145\147\x69\x73\164\145\162\145\144")->gswweykyogmsyawy(__("\103\162\145\x61\164\x65\40\x41\x63\143\x6f\x75\156\x74\x20\x44\141\164\145", PR__MDL__PANEL))->oykaosmaegqwmoga()->iygyugseyaqwywyg($this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom(strtotime($gkyciwoiiisgywcs->get($mkucggyaiaukqoce, "\165\163\145\162\137\x72\x65\147\x69\163\x74\145\x72\x65\x64")), $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq()))], "\160\141\x73\x73\167\x6f\x72\144" => [$gusoaiguqeaommcc->ymuegqgyuagyucws("\x63\x75\x72\x72\145\x6e\x74\x5f\x70\141\163\x73\x77\x6f\162\144")->gswweykyogmsyawy(__("\x43\165\x72\x72\145\x6e\164\x20\120\x61\163\163\167\x6f\x72\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws("\x6e\x65\167\x5f\160\141\x73\163\x77\x6f\x72\144")->gswweykyogmsyawy(__("\x4e\145\x77\40\x50\x61\x73\x73\167\x6f\162\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws("\166\145\162\x69\x66\171\137\x70\141\x73\x73\167\157\x72\x64")->gswweykyogmsyawy(__("\x56\145\x72\151\x66\x79\40\x50\x61\x73\x73\x77\157\x72\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], "\x70\145\x72\x73\x6f\156\141\154" => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->ocksiywmkyaqseou("\x70\x61\x6e\x65\x6c\x5f\160\162\x6f\x66\x69\154\145\x5f\x73\x65\147\155\145\x6e\164\x73\137\146\151\145\x6c\x64\163", $wsqkgswwooewwekw); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
