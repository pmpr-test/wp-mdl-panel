<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677bb92c09e79             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\Data; use Pmpr\Common\Foundation\Data\Data; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ToArrayTrait; use Pmpr\Module\Panel\Panel; class Route extends Data { use ToArrayTrait; protected $parent = null; protected $redirect = false; protected ?array $meta = []; protected int $priority = 1; protected ?string $key = null; protected bool $enable = true; protected ?string $link = null; protected ?string $name = null; protected ?string $icon = null; protected ?string $path = null; protected bool $divider = false; protected ?string $title = null; protected ?array $children = []; protected bool $showInMenu = true; protected ?string $component = null; protected ?string $description = null; public function __construct(string $uusmaiomayssaecw = null) { $this->key = $uusmaiomayssaecw; $this->qksaqgcokiqamueg($uusmaiomayssaecw); } public function cisyiemkeykgkomc() : ?string { return $this->key; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qmgcisuuikgmqcsu() : ?string { return $this->link; } public function qoowicksguscqyks(?string $iwywmkygwewiamwm) : self { $this->faioisokmmaeimoo(); $this->link = $iwywmkygwewiamwm; return $this; } public function wywmmeyauqkeskeq(bool $oqkgomucoyswikgk) : self { $this->enable = $oqkgomucoyswikgk; return $this; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self { $this->giwmekimakcaawsq(Constants::eqkeooqcsscoggia, $ukwokcuqauuosmoo); $this->description = $ukwokcuqauuosmoo; return $this; } public function faioisokmmaeimoo($ioakuqckwescecsy = true) : self { if ($ioakuqckwescecsy) { $this->redirect = true; } else { $this->giwmekimakcaawsq(Constants::yquayuasseumiiii, true); } return $this; } public function esccuisocaaouywi($gwqgmkqcgwwmweom) : self { $this->redirect = $gwqgmkqcgwwmweom; return $this; } public function yqeeiukmseiyuici() : array { $gwqgmkqcgwwmweom = []; $okcscwesammossuq = $this->mmoaikqueyiwcesm(); if (!empty($okcscwesammossuq)) { $wcgsoqmmciswkmiq = reset($okcscwesammossuq); if ($wcgsoqmmciswkmiq instanceof Route && !$wcgsoqmmciswkmiq->cqyswgsawqcqagee()) { $gwqgmkqcgwwmweom = [Constants::NAME => $wcgsoqmmciswkmiq->eyeeaqcaaugamymu()]; } } return $gwqgmkqcgwwmweom; } public function eyeeaqcaaugamymu() : ?string { $aiieyweysaukqemc = $this->cisyiemkeykgkomc(); $omwmuycmeqcqokom = $this->ygqycmmkoiuocoia(); if ($omwmuycmeqcqokom instanceof Route) { $egcmyoygeaayoowa = $omwmuycmeqcqokom->eyeeaqcaaugamymu(); $aiieyweysaukqemc = "{$egcmyoygeaayoowa}\137{$aiieyweysaukqemc}"; } return $aiieyweysaukqemc; } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->meta[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function gwckcieqcmsaysow($uusmaiomayssaecw) : bool { return isset($this->meta[$uusmaiomayssaecw]); } public function kygqaqiwaucqacqm() : bool { return $this->showInMenu; } public function wiskakymeaywyeuw(bool $cyiwaggmwimigmcc) : self { $this->showInMenu = $cyiwaggmwimigmcc; return $this; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { $this->parent = $omwmuycmeqcqokom; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function cqusmgskowmesgcg() : ?string { return $this->component; } public function askmmuauqcuuqsea(?string $wksoawcgagcgoask) : self { $this->component = $wksoawcgagcgoask; return $this; } public function cqyswgsawqcqagee() : bool { return $this->divider; } public function gckcwqgiewywsgeq() : self { $this->divider = true; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); $this->giwmekimakcaawsq(Constants::qgqyauaqwqmqseim, $this->eyamqkqiykagecsw()); return $this; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qksaqgcokiqamueg(?string $mkomwsiykqigmqca) : self { $this->path = $mkomwsiykqigmqca; return $this; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->giwmekimakcaawsq(Constants::qescuiwgsyuikume, $meqocwsecsywiiqs); $this->title = $meqocwsecsywiiqs; return $this; } public function mmoaikqueyiwcesm() : ?array { return $this->children; } public function kkisyguyosoyymqs() : bool { return !empty($this->mmoaikqueyiwcesm()); } public function pmouaioykaoceyag(Route $wcgsoqmmciswkmiq) : self { $wcgsoqmmciswkmiq->mmuyuqussqkgkega($this); $this->children[$wcgsoqmmciswkmiq->cisyiemkeykgkomc()] = $wcgsoqmmciswkmiq; return $this; } public function eswyoccyuiyiqkco(array $okcscwesammossuq) : Route { foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $this->pmouaioykaoceyag($wcgsoqmmciswkmiq); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->name = $this->eyeeaqcaaugamymu(); if ($this->cqyswgsawqcqagee()) { $this->qksaqgcokiqamueg(''); } else { if (!$this->cqusmgskowmesgcg() && !$this->qmgcisuuikgmqcsu()) { $this->askmmuauqcuuqsea(ucfirst($this->caokeucsksukesyo()->owgcciayoweymuws()->qoqowykumameucwa($this->aakmagwggmkoiiyu()))); } } $gwqgmkqcgwwmweom = $this->redirect; if (is_bool($gwqgmkqcgwwmweom) && $gwqgmkqcgwwmweom) { $this->redirect = $this->yqeeiukmseiyuici(); } else { if ($this->gwckcieqcmsaysow(Constants::yquayuasseumiiii)) { $this->giwmekimakcaawsq(Constants::yquayuasseumiiii, $this->yqeeiukmseiyuici()); } } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mkucggyaiaukqoce = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::meksegaoamowuwoq); $aqmwamyiwgeeymqa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qgeesceacsmeqacu); $okcscwesammossuq = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\160\141\x6e\x65\x6c\137\162\x6f\x75\x74\x65\137{$this->cisyiemkeykgkomc()}\x5f\143\150\x69\154\x64\x72\x65\x6e", $this->mmoaikqueyiwcesm(), $mkucggyaiaukqoce, $aqmwamyiwgeeymqa); if ($okcscwesammossuq) { $sacmkccceuywoqsq = []; foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { if ($wcgsoqmmciswkmiq instanceof self) { $wcgsoqmmciswkmiq->mmuyuqussqkgkega($this); $sacmkccceuywoqsq[$wcgsoqmmciswkmiq->cisyiemkeykgkomc()] = $wcgsoqmmciswkmiq->sacmkccceuywoqsq(true, $ywmkwiwkosakssii); } } $this->children = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($sacmkccceuywoqsq); } if ($this->ygqycmmkoiuocoia() instanceof self) { $this->mmuyuqussqkgkega($this->ygqycmmkoiuocoia()->cisyiemkeykgkomc()); } } }
