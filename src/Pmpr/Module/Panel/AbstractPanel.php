<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678a99b4a53cb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\REST\RESTRegister; use Pmpr\Module\Panel\Data\Route; abstract class AbstractPanel extends RESTRegister { protected ?string $name = null; protected ?bool $checkAuth = false; protected ?string $parent = "\160\x61\156\x65\x6c"; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function ygqycmmkoiuocoia() : ?string { return $this->parent; } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\160\x61\156\x65\x6c\137\163\x63\x72\151\x70\164\163", [$this, "\167\x71\x71\143\x6b\153\155\x71\141\x6b\151\x71\165\171\x63\163"])->aqaqisyssqeomwom("\160\x61\156\x65\154\137\164\x72\x61\156\163\x6c\141\164\x69\157\156\x73", [$this, "\x77\x75\x6f\167\x6f\155\163\x61\x67\x6f\x71\153\155\141\151\157"])->aqaqisyssqeomwom("\x70\141\x6e\x65\154\137\162\x6f\165\x74\x65\x5f{$this->ygqycmmkoiuocoia()}\x5f\x63\150\151\x6c\x64\162\x65\x6e", [$this, "\143\155\x75\x67\x71\145\147\147\x6d\167\x71\x69\151\x65\171\155"], 10, 2); parent::kgquecmsgcouyaya(); } public function sqwgomwcqysewuks($mkucggyaiaukqoce) : array { return []; } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } public function yaegyqkcqwowauga() : array { return []; } public function cmugqeggmwqiieym($okcscwesammossuq, $mkucggyaiaukqoce) : array { if ($this->checkAuth && is_wp_error($mkucggyaiaukqoce)) { return $okcscwesammossuq; } $ikamsuaiikaggcga = $this->sqwgomwcqysewuks($mkucggyaiaukqoce); if ($ikamsuaiikaggcga) { $okcscwesammossuq = array_merge($okcscwesammossuq, $ikamsuaiikaggcga); } return $okcscwesammossuq; } public function wqqckkmqakiquycs($mismekckwcmuksik = []) : array { $mismekckwcmuksik[$this->aakmagwggmkoiiyu()] = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->aqmcwcyggeiyooyg($this, "\x70\x61\156\145\x6c\x2e\x6a\163"); return $mismekckwcmuksik; } public final function wuowomsagoqkmaio($qsmicgaymwwckcsa = []) : array { $uwomkgseoiegeume = $this->yaegyqkcqwowauga(); if ($uwomkgseoiegeume) { $qsmicgaymwwckcsa = array_merge($qsmicgaymwwckcsa, $uwomkgseoiegeume); } return $qsmicgaymwwckcsa; } }
