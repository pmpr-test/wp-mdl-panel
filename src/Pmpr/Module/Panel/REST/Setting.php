<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16668d8ab0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Panel\Panel; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Setting extends Common { public function __construct() { $this->rest_base = Constants::wksqmcukwwqwyuuc; parent::__construct(); } public function register_routes() { $this->register('/get-configs', [Constants::wwgusigoaksqmwsm => [$this, 'tkgawykgecmsaeis']]); $this->register('/get-translations', [Constants::wwgusigoaksqmwsm => [$this, 'yaegyqkcqwowauga']]); } public function tkgawykgecmsaeis(WP_REST_Request $aqmwamyiwgeeymqa) { $uiewakwqscemywuo = []; $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $yckucuyiaykemqea = $yyauwyaeewsickwk->cmaecekuqkwmemms('PR_THE_CONFIG_PATH'); if ($yckucuyiaykemqea) { if ($uiewakwqscemywuo = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi(trailingslashit($yckucuyiaykemqea) . Panel::gomekwmqwuwyuugo)) { $uiewakwqscemywuo = $yyauwyaeewsickwk->queuakuqucciemcc($uiewakwqscemywuo); } } return $this->ewmkmmsuiuwmmwoy($uiewakwqscemywuo); } public function yaegyqkcqwowauga(WP_REST_Request $aqmwamyiwgeeymqa) { $qsmicgaymwwckcsa = ['logout' => [Constants::TEXT => __('Are you sure you want to logout?', PR__MDL__PANEL), Constants::qescuiwgsyuikume => __('Logout', PR__MDL__PANEL)], 'no' => __('No!', PR__MDL__PANEL), 'yes' => __('Yes!', PR__MDL__PANEL), 'loading' => __('Loading...', PR__MDL__PANEL), 'api_key' => __('API Key', PR__MDL__PANEL), 'welcome' => __('Welcome!', PR__MDL__PANEL), 'my_profile' => __('My Profile', PR__MDL__PANEL), 'processing' => __('Processing', PR__MDL__PANEL), 'admin_panel' => __('Admin Panel', PR__MDL__PANEL), 'form_not_changed' => __('Nothing is change to save.', PR__MDL__PANEL), 'not_found_record' => __('There is no record yet.', PR__MDL__PANEL), 'action' => ['add' => __('Add', PR__MDL__PANEL), 'save' => __('Save Changes', PR__MDL__PANEL), 'list' => __('List', PR__MDL__PANEL), 'edit' => __('Edit', PR__MDL__PANEL), 'show' => __('Show', PR__MDL__PANEL), 'next' => __('Next', PR__MDL__PANEL), 'prev' => __('Previous', PR__MDL__PANEL), 'apply' => __('Apply', PR__MDL__PANEL), 'verify' => __('Verify', PR__MDL__PANEL), 'cancel' => __('Cancel', PR__MDL__PANEL), 'submit' => __('Submit', PR__MDL__PANEL), 'delete' => __('Delete', PR__MDL__PANEL), 'details' => __('Details', PR__MDL__PANEL), 'next_step' => __('Next Step', PR__MDL__PANEL)], 'error' => ['file_size' => __('Sorry, The file size you uploaded is larger than required.', PR__MDL__PANEL), 'refresh_page' => __('Sorry, Something wrong, please refresh page and try again.', PR__MDL__PANEL), 'file_reader_not_supported' => __('Sorry, FileReader API not supported', PR__MDL__PANEL)], 'modal' => ['button' => ['deny' => __('Cancel', PR__MDL__PANEL), 'confirm' => __('OK', PR__MDL__PANEL)]], 'auth' => ['login' => __('Login', PR__MDL__PANEL), 'welcome' => __('Welcome to %s', PR__MDL__PANEL), 'sign_in' => __('Sign in', PR__MDL__PANEL), 'sign_out' => __('Sign out', PR__MDL__PANEL), 'new_here' => __('Don\'t have an account?', PR__MDL__PANEL), 'create_acc' => __('Create an account', PR__MDL__PANEL), 'google_sign_in' => __('Sign in with Google', PR__MDL__PANEL), 'title' => ['auth' => __('Authentication', PR__MDL__PANEL), 'login' => __('Login to Account', PR__MDL__PANEL), 'forgot' => __('Forgot Your Password?', PR__MDL__PANEL), 'register' => __('Register Account', PR__MDL__PANEL)], 'desc' => ['forgot' => __('Enter your email to reset your password', PR__MDL__PANEL), 'register' => __('Enter your details to create your account', PR__MDL__PANEL)]], 'form' => ['field' => ['email' => __('Email', PR__MDL__PANEL), 'fullname' => __('Fullname', PR__MDL__PANEL), 'password' => __('Password', PR__MDL__PANEL), 'username' => __('Username', PR__MDL__PANEL), 'confirm_pass' => __('Confirm password', PR__MDL__PANEL), 'media' => ['action' => ['upload' => __('Upload Media', PR__MDL__PANEL), 'remove' => __('Remove Media', PR__MDL__PANEL)]], 'collection' => ['action' => ['add' => __('Add', PR__MDL__PANEL), 'remove' => __('Remove', PR__MDL__PANEL)]], 'verify' => ['pending' => __('Pending', PR__MDL__PANEL), 'verified' => __('Verified', PR__MDL__PANEL)], 'upload' => [Constants::qescuiwgsyuikume => __('Drag and drop to upload content!', PR__MDL__PANEL), Constants::qsskmqwcucisywqy => __('..or click to select a file from your computer', PR__MDL__PANEL)]], 'input' => ['email' => __('Email', PR__MDL__PANEL), 'fullname' => __('Fullname', PR__MDL__PANEL), 'password' => __('Password', PR__MDL__PANEL), 'username' => __('Username', PR__MDL__PANEL), 'confirm_pass' => __('Confirm password', PR__MDL__PANEL), 'avatar' => ['action' => ['upload' => __('Upload Image', PR__MDL__PANEL), 'remove' => __('Remove Image', PR__MDL__PANEL)]], 'verify' => ['pending' => __('Pending', PR__MDL__PANEL), 'verified' => __('Verified', PR__MDL__PANEL)], 'upload' => [Constants::qescuiwgsyuikume => __('Drag and drop to upload content!', PR__MDL__PANEL), Constants::qsskmqwcucisywqy => __('..or click to select a file from your computer', PR__MDL__PANEL)]], 'invalid_data' => ['text' => __('Please, provide correct data', PR__MDL__PANEL), 'title' => __('Invalid Data', PR__MDL__PANEL), 'invalid' => __('Entered value is not a valid %s', PR__MDL__PANEL), 'required' => __('Field %s is require and can\'t be empty', PR__MDL__PANEL), 'validation' => __('The entered data is not valid, please enter the correct value according to the displayed errors.', PR__MDL__PANEL), 'password' => ['same' => __('The current password and old password cannot be the same as each other', PR__MDL__PANEL), 'not_same' => __('The password and its confirm are not the same', PR__MDL__PANEL)]], 'auth' => ['forget_password' => __('Forget Password', PR__MDL__PANEL)]], 'column' => [Constants::auqoykcmsiauccao => __('Url', PR__MDL__PANEL), Constants::squoamkioomemiyi => __('Type', PR__MDL__PANEL), Constants::NAME => __('Name', PR__MDL__PANEL), Constants::kumuoysauoagaiiy => __('Date', PR__MDL__PANEL), Constants::meksegaoamowuwoq => __('User', PR__MDL__PANEL), Constants::qescuiwgsyuikume => __('Title', PR__MDL__PANEL), Constants::acymsykymkiewqsy => __('Price', PR__MDL__PANEL), Constants::ciywsqoeiymemsys => __('Status', PR__MDL__PANEL), Constants::iwascisiiokuackw => __('Author', PR__MDL__PANEL), Constants::oguseymmyyoyaako => __('Product', PR__MDL__PANEL), Constants::myikkigscysoykgy => __('Actions', PR__MDL__PANEL), Constants::CREATED_AT => __('Created At', PR__MDL__PANEL), Constants::ucmueuwwcmocgmig => __('Capability', PR__MDL__PANEL), Constants::agamkomsaiquemks => __('Published At', PR__MDL__PANEL)], 'validation' => ['invalid' => __('%s is not valid', PR__MDL__PANEL), 'required' => __('%s is required', PR__MDL__PANEL), 'min_length' => __('%s minimum length is %s', PR__MDL__PANEL)], 'pagination' => ['info' => __('Displaying %s to %s of %s items', PR__MDL__PANEL)], 'treeselect' => [Constants::cgiswgcumueqgcmw => __('and %s more', PR__MDL__PANEL), Constants::moacsmsigegyweoc => __('Select an option', PR__MDL__PANEL), 'search' => __('Type to search...', PR__MDL__PANEL), 'loading' => __('Loading...', PR__MDL__PANEL), 'clear_all' => __('Clear all', PR__MDL__PANEL), 'no_options' => __('No options available.', PR__MDL__PANEL), 'no_results' => __('No results found...', PR__MDL__PANEL), 'clear_value' => __('Clear value', PR__MDL__PANEL), 'no_children' => __('No sub-options.', PR__MDL__PANEL), 'retry' => [Constants::TEXT => __('Retry?', PR__MDL__PANEL), Constants::qescuiwgsyuikume => __('Click to retry', PR__MDL__PANEL)]]]; $qsmicgaymwwckcsa = (array) $this->ocksiywmkyaqseou('panel_translations', $qsmicgaymwwckcsa); return $this->ewmkmmsuiuwmmwoy($qsmicgaymwwckcsa); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $gwgucoaaqcwwciqq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), PHP_URL_HOST); $wqacieugygwemeua = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); return $gwgucoaaqcwwciqq === $wqacieugygwemeua && parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa); } }
