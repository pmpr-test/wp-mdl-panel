<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7b5e6c22             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\ORM\DB\Model; use WP_REST_Request; abstract class AbstractREST extends Common { public function __construct() { $this->abstract = true; parent::__construct(); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($this->issssuygyewuaswa($aqmwamyiwgeeymqa)); } public function agqsmkyeogkaeaww(WP_REST_Request $aqmwamyiwgeeymqa, ?Model $meywaqqsugaoeyys, array $uoomaookgsyciacm = [], $siykeiywomwwuoiw = null, array $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if (!$meywaqqsugaoeyys) { goto qmeoaqmsuseueqiy; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa)); $siykeiywomwwuoiw = $meywaqqsugaoeyys->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); $sogksuscggsicmac = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, $ywmkwiwkosakssii); qmeoaqmsuseueqiy: return $sogksuscggsicmac; } public function wigcmmuseymwogeg($mkomwsiykqigmqca, $meqocwsecsywiiqs = null) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->oiucukewkckkwiqc($mkomwsiykqigmqca, self::ismwwqmwgmqqocke); if (!$meqocwsecsywiiqs) { goto ygkcacsyyckescqs; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($meqocwsecsywiiqs, $iwywmkygwewiamwm); ygkcacsyyckescqs: return $iwywmkygwewiamwm; } }
