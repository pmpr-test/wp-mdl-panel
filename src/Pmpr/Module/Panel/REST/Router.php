<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6796c2712d5ab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Panel\Data\Route; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\x72\x6f\165\164\145"; parent::__construct(); } public function register_routes() { $this->register("\x2f\154\151\163\164", [Constants::wwgusigoaksqmwsm => [$this, "\143\x69\165\x67\167\x6f\157\x61\163\141\x71\143\171\x77\x61\x73"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $ikamsuaiikaggcga = []; $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\160\141\x6e\x65\154")->qksaqgcokiqamueg("\57")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x75\x73\145\x72")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\125\x73\x65\x72", PR__MDL__PANEL))->saemoowcasogykak(IconInterface::wqqgoiyyqicsycmm)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\x72\x6f\x66\x69\x6c\145")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\x55\163\145\162\x20\x50\x72\x6f\x66\x69\154\145", PR__MDL__PANEL))->saemoowcasogykak(IconInterface::eikwkmckkqcsygys)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\x65\x72\163\157\156\141\154")->wiskakymeaywyeuw(false)->saemoowcasogykak(IconInterface::wqqgoiyyqicsycmm)->gswweykyogmsyawy(__("\120\145\162\x73\157\156\141\154\x20\x49\x6e\x66\157\x72\155\x61\x74\151\x6f\x6e", PR__MDL__PANEL))->gucwmccyimoagwcm(__("\x55\160\144\141\164\145\40\x79\x6f\x75\162\x20\160\x65\162\x73\157\x6e\x61\x6c\x20\x69\x6e\146\x6f\162\x6d\x61\x74\151\x6f\156", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x61\143\143\x6f\x75\156\164")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\125\163\x65\x72\40\101\143\x63\x6f\x75\x6e\x74", PR__MDL__PANEL))->saemoowcasogykak(IconInterface::kswoiismmycqamse)->gucwmccyimoagwcm(__("\123\x65\145\x20\x79\x6f\x75\x72\x20\141\x63\x63\x6f\x75\x6e\x74\40\151\x6e\x66\157\x72\x6d\141\164\x69\x6f\156", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\141\163\x73\167\x6f\x72\x64")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\103\150\141\156\147\x65\40\x50\x61\163\x73\x77\x6f\x72\144", PR__MDL__PANEL))->saemoowcasogykak(IconInterface::mcseyayskyuikaaa)->gucwmccyimoagwcm(__("\x43\150\141\x6e\147\x65\x20\x79\x6f\x75\x72\40\x61\x63\x63\x6f\x75\156\164\x20\160\141\x73\163\167\x6f\x72\x64", PR__MDL__PANEL))))); $ikamsuaiikaggcga[] = $this->ocksiywmkyaqseou("\x70\x61\x6e\x65\x6c\x5f\162\145\163\x74\137\x62\x61\x73\145\137\x72\x6f\165\164\x65", $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); $ikamsuaiikaggcga[] = $this->oeuiuocwuggewqmk("\160\141\156\145\x6c\x5f\x61\165\x74\150")->qksaqgcokiqamueg("\x2f")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x41\165\x74\150\145\x6e\x74\151\143\141\164\x69\x6f\156", PR__MDL__PANEL))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\154\x6f\x67\151\156")->giwmekimakcaawsq("\141\x75\164\x68", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x4c\157\147\151\156\x20\x74\157\40\101\143\143\157\x75\x6e\x74", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\162\145\x67\151\x73\164\x65\x72")->giwmekimakcaawsq("\x61\x75\x74\150", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x52\145\x67\151\163\x74\x65\162\x20\101\x6e\40\x41\143\x63\157\x75\156\164", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x66\x6f\162\147\157\164")->giwmekimakcaawsq("\x61\x75\164\x68", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\106\157\x72\x67\157\x74\x20\x4d\x79\40\120\x61\163\x73\167\x6f\162\144", PR__MDL__PANEL))); $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\156\145\x6c\137\162\x65\x73\x74\x5f\x72\157\x75\x74\x65\163"), $ikamsuaiikaggcga, $this, $mkucggyaiaukqoce); $suuagcecoyuweoqk = []; foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { if ($cociqcumeacycoeq instanceof Route) { $uomewyckeuqoqocu = $cociqcumeacycoeq->sacmkccceuywoqsq(true, [Constants::qgeesceacsmeqacu => $aqmwamyiwgeeymqa, Constants::meksegaoamowuwoq => $mkucggyaiaukqoce]); $suuagcecoyuweoqk[$cociqcumeacycoeq->cisyiemkeykgkomc()] = $uomewyckeuqoqocu; } } return $this->ewmkmmsuiuwmmwoy($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($suuagcecoyuweoqk)); } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
