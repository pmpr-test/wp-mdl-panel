<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67803815d22b5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\REST\RESTRegister; use Pmpr\Module\Panel\Data\Route; abstract class AbstractPanel extends RESTRegister { protected ?string $name = null; protected ?bool $checkAuth = false; protected ?string $parent = "\160\x61\x6e\x65\154"; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function ygqycmmkoiuocoia() : ?string { return $this->parent; } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x70\141\156\145\x6c\137\x73\143\x72\151\160\x74\x73", [$this, "\167\161\x71\143\153\x6b\155\161\x61\153\x69\x71\x75\x79\x63\x73"])->aqaqisyssqeomwom("\x70\141\x6e\145\154\x5f\164\x72\x61\x6e\x73\x6c\141\x74\x69\x6f\x6e\163", [$this, "\x77\165\x6f\x77\x6f\x6d\x73\141\147\x6f\161\x6b\x6d\x61\x69\157"])->aqaqisyssqeomwom("\x70\141\156\145\154\137\162\x6f\165\x74\145\x5f{$this->ygqycmmkoiuocoia()}\x5f\143\150\151\x6c\144\x72\145\156", [$this, "\143\155\165\147\x71\145\147\147\155\x77\x71\x69\x69\145\x79\x6d"], 10, 2); parent::kgquecmsgcouyaya(); } public function sqwgomwcqysewuks() : array { return []; } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } public function yaegyqkcqwowauga() : array { return []; } public function cmugqeggmwqiieym($okcscwesammossuq, $mkucggyaiaukqoce) : array { if ($this->checkAuth && is_wp_error($mkucggyaiaukqoce)) { return $okcscwesammossuq; } $ikamsuaiikaggcga = $this->sqwgomwcqysewuks(); if ($ikamsuaiikaggcga) { $okcscwesammossuq = array_merge($okcscwesammossuq, $ikamsuaiikaggcga); } return $okcscwesammossuq; } public function wqqckkmqakiquycs($mismekckwcmuksik = []) : array { $mismekckwcmuksik[$this->aakmagwggmkoiiyu()] = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->aqmcwcyggeiyooyg($this, "\160\x61\156\x65\x6c\x2e\152\163"); return $mismekckwcmuksik; } public final function wuowomsagoqkmaio($qsmicgaymwwckcsa = []) : array { $uwomkgseoiegeume = $this->yaegyqkcqwowauga(); if ($uwomkgseoiegeume) { $qsmicgaymwwckcsa = array_merge($qsmicgaymwwckcsa, $uwomkgseoiegeume); } return $qsmicgaymwwckcsa; } }
