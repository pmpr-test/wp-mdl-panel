<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ffe1d1750             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\REST\RESTRegister; use Pmpr\Module\Panel\Data\Route; abstract class AbstractPanel extends RESTRegister { protected ?string $name = null; protected ?bool $checkAuth = false; protected ?string $parent = "\x70\x61\156\145\154"; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function ygqycmmkoiuocoia() : ?string { return $this->parent; } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x70\x61\156\145\154\137\163\143\x72\x69\160\x74\163", [$this, "\167\161\x71\143\x6b\x6b\x6d\161\141\153\151\x71\165\171\143\163"])->aqaqisyssqeomwom("\x70\x61\x6e\x65\154\137\x74\162\141\x6e\x73\x6c\x61\x74\x69\157\156\163", [$this, "\x77\x75\157\x77\x6f\155\x73\141\x67\x6f\161\153\x6d\141\151\157"])->aqaqisyssqeomwom("\x70\x61\x6e\145\x6c\137\162\x6f\165\x74\145\x5f{$this->ygqycmmkoiuocoia()}\x5f\143\150\151\154\x64\x72\145\156", [$this, "\143\155\165\x67\x71\145\x67\x67\x6d\x77\161\151\151\x65\x79\x6d"], 10, 2); parent::kgquecmsgcouyaya(); } public function sqwgomwcqysewuks($mkucggyaiaukqoce) : array { return []; } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } public function yaegyqkcqwowauga() : array { return []; } public function cmugqeggmwqiieym($okcscwesammossuq, $mkucggyaiaukqoce) : array { if ($this->checkAuth && is_wp_error($mkucggyaiaukqoce)) { return $okcscwesammossuq; } $ikamsuaiikaggcga = $this->sqwgomwcqysewuks($mkucggyaiaukqoce); if ($ikamsuaiikaggcga) { $okcscwesammossuq = array_merge($okcscwesammossuq, $ikamsuaiikaggcga); } return $okcscwesammossuq; } public function wqqckkmqakiquycs($mismekckwcmuksik = []) : array { $mismekckwcmuksik[$this->aakmagwggmkoiiyu()] = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->aqmcwcyggeiyooyg($this, "\160\x61\x6e\x65\154\x2e\152\x73"); return $mismekckwcmuksik; } public final function wuowomsagoqkmaio($qsmicgaymwwckcsa = []) : array { $uwomkgseoiegeume = $this->yaegyqkcqwowauga(); if ($uwomkgseoiegeume) { $qsmicgaymwwckcsa = array_merge($qsmicgaymwwckcsa, $uwomkgseoiegeume); } return $qsmicgaymwwckcsa; } }
