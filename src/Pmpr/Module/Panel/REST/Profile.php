<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4bd891f2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { public function __construct() { $this->rest_base = 'profile'; parent::__construct(); } public function gomiusgyskywsqai() : ?User { return User::symcgieuakksimmu(); } public function register_routes() { $this->register('/update', [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, 'update']]); $this->register('/get-fields', [Constants::wwgusigoaksqmwsm => [$this, 'ugmceccgwaaaigiy']]); $this->register('/previews', [Constants::wwgusigoaksqmwsm => [$this, 'umggwawecsaiceqc']]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (is_array($wsqkgswwooewwekw)) { foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__('Profile update successfully.', PR__MDL__PANEL)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Segment field is is missing', PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $mkucggyaiaukqoce; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wsqkgswwooewwekw = ['account' => [$gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__('Username', PR__MDL__PANEL))->oykaosmaegqwmoga(true, true)->kqqqugemmqagucuq()->iygyugseyaqwywyg($gkyciwoiiisgywcs->get($mkucggyaiaukqoce, Constants::miqkwqsewyogmsak)), $gusoaiguqeaommcc->ymuegqgyuagyucws('registered')->gswweykyogmsyawy(__('Create Account Date', PR__MDL__PANEL))->oykaosmaegqwmoga(true, true)->iygyugseyaqwywyg($this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom(strtotime($gkyciwoiiisgywcs->get($mkucggyaiaukqoce, 'user_registered')), $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq()))], 'password' => [$gusoaiguqeaommcc->ymuegqgyuagyucws('current_password')->gswweykyogmsyawy(__('Current Password', PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws('new_password')->gswweykyogmsyawy(__('New Password', PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws('verify_password')->gswweykyogmsyawy(__('Verify Password', PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], 'personal' => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->ocksiywmkyaqseou('panel_profile_segments_fields', $wsqkgswwooewwekw); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
