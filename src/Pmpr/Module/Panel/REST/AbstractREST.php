<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795528925f36             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model; use WP_REST_Request; abstract class AbstractREST extends Common { public function __construct() { $this->abstract = true; parent::__construct(); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($this->issssuygyewuaswa($aqmwamyiwgeeymqa)); } public function agqsmkyeogkaeaww(WP_REST_Request $aqmwamyiwgeeymqa, ?Model $meywaqqsugaoeyys, array $uoomaookgsyciacm = [], $siykeiywomwwuoiw = null, array $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if ($meywaqqsugaoeyys) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa)); $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); $sogksuscggsicmac = $meywaqqsugaoeyys->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, $ywmkwiwkosakssii); } return $sogksuscggsicmac; } public function wigcmmuseymwogeg($mkomwsiykqigmqca, $meqocwsecsywiiqs = null) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->oiucukewkckkwiqc($mkomwsiykqigmqca, Constants::ismwwqmwgmqqocke); if ($meqocwsecsywiiqs) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($meqocwsecsywiiqs, $iwywmkygwewiamwm); } return $iwywmkygwewiamwm; } }
