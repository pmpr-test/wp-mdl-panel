<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6786e8587a1f9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Panel\Plugin\Plugin; use Pmpr\Module\Panel\Plugin\Woocommerce\Woocommerce; use Pmpr\Module\Panel\REST\REST; class Panel extends ComponentInitiator { const gomekwmqwuwyuugo = "\x70\141\x6e\x65\x6c\56\152\x73\157\156"; const sakykaywcqsiwqgm = "\x50\x41\x4e\x45\114\x5f\x43\x4f\x4e\x46\x49\107\137\120\101\x54\x48"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\120\x61\156\x65\x6c", PR__MDL__PANEL); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { User::symcgieuakksimmu(); REST::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Rewrite::symcgieuakksimmu(); Woocommerce::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x71\x61\x79\x69\x65\165\x73\x63\163\163\153\151\x71\141\x63\163"]); } public function qayieuscsskiqacs() { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq)) { $wkcwykowmmmwioqs = self::gomekwmqwuwyuugo; $kicoywcqyusguqsa = [ Constants::okkqqmwseqscceye, ]; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists(trailingslashit($yckucuyiaykemqea) . $wkcwykowmmmwioqs)) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $uiewakwqscemywuo = ["\146\x72\x6f\x6e\164\x5f\165\x72\x6c" => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), "\141\144\155\151\x6e\137\165\x72\x6c" => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewcokmoyomeywmkg(), Constants::NAME => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::NAME), Constants::eqkeooqcsscoggia => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::eqkeooqcsscoggia)]; $ykquycoiqesuckco = $this->kmuweyayaqoeqiyw(); if ($ykquycoiqesuckco && ($qiouiwasaauyaaue = $ykquycoiqesuckco->gkwkqmwweiawigae())) { foreach ($qiouiwasaauyaaue as $omqquekswieeogws => $omkysikckkcieckq) { if (in_array($omqquekswieeogws, $kicoywcqyusguqsa, true)) { continue; } switch ($omqquekswieeogws) { case $ykquycoiqesuckco::cuoqwcygqikwequw: case $ykquycoiqesuckco::gkmwweisyowgsgii: if ($weowoqykiyuqcwam = $ykquycoiqesuckco->giiuwsmyumqwwiyq($omqquekswieeogws)) { $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $uiewakwqscemywuo[$omqquekswieeogws] = $gkyciwoiiisgywcs->get($eaeiswmwiqewicoc->uikkssqcoewckces((int) $weowoqykiyuqcwam), 0); $uiewakwqscemywuo["{$omqquekswieeogws}\137\x68\x74\155\154"] = $eaeiswmwiqewicoc->qaeeusqkgwagwaqc($weowoqykiyuqcwam); } break; case $ykquycoiqesuckco::gskyioqkyeoaeiyk: $uiewakwqscemywuo[$omqquekswieeogws] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->eqmcwusgemkccwqc($omkysikckkcieckq); break; default: $uiewakwqscemywuo[$omqquekswieeogws] = $omkysikckkcieckq; } } if ($iiaumsgauuyeqksw->mkdir($yckucuyiaykemqea) && $iiaumsgauuyeqksw->coeoweawgagkycwe($yckucuyiaykemqea)) { $iiaumsgauuyeqksw->mikiwoyomouecayw($yckucuyiaykemqea, $wkcwykowmmmwioqs, $uiewakwqscemywuo); } } } } } }
