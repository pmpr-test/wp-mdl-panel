<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc08aabc88             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Panel\Plugin\Plugin; use Pmpr\Module\Panel\Plugin\Woocommerce\Woocommerce; use Pmpr\Module\Panel\REST\REST; class Panel extends ComponentInitiator { const gomekwmqwuwyuugo = "\x70\141\x6e\145\154\x2e\x6a\x73\157\x6e"; const sakykaywcqsiwqgm = "\120\101\x4e\x45\114\137\x43\117\x4e\106\x49\107\137\120\101\x54\x48"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\120\x61\156\x65\154", PR__MDL__PANEL); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { User::symcgieuakksimmu(); REST::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Rewrite::symcgieuakksimmu(); Woocommerce::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x71\x61\x79\x69\x65\x75\x73\x63\x73\x73\x6b\x69\161\x61\x63\x73"]); } public function qayieuscsskiqacs() { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq)) { $wkcwykowmmmwioqs = self::gomekwmqwuwyuugo; $kicoywcqyusguqsa = [Constants::okkqqmwseqscceye, Setting::cuoqwcygqikwequw, Setting::gkmwweisyowgsgii]; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists(trailingslashit($yckucuyiaykemqea) . $wkcwykowmmmwioqs)) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $uiewakwqscemywuo = ["\x66\162\x6f\x6e\x74\137\x75\162\154" => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), "\141\x64\155\x69\x6e\x5f\x75\162\154" => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewcokmoyomeywmkg(), Constants::NAME => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::NAME), Constants::eqkeooqcsscoggia => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::eqkeooqcsscoggia)]; $ykquycoiqesuckco = $this->kmuweyayaqoeqiyw(); if ($ykquycoiqesuckco && ($qiouiwasaauyaaue = $ykquycoiqesuckco->gkwkqmwweiawigae())) { foreach ($qiouiwasaauyaaue as $omqquekswieeogws => $omkysikckkcieckq) { if (in_array($omqquekswieeogws, $kicoywcqyusguqsa, true)) { continue; } switch ($omqquekswieeogws) { case $ykquycoiqesuckco::cuoqwcygqikwequw: case $ykquycoiqesuckco::gkmwweisyowgsgii: if ($weowoqykiyuqcwam = $ykquycoiqesuckco->giiuwsmyumqwwiyq($omqquekswieeogws)) { $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $uiewakwqscemywuo[$omqquekswieeogws] = $gkyciwoiiisgywcs->get($eaeiswmwiqewicoc->uikkssqcoewckces((int) $weowoqykiyuqcwam), 0); $uiewakwqscemywuo["{$omqquekswieeogws}\x5f\x68\164\x6d\154"] = $eaeiswmwiqewicoc->qaeeusqkgwagwaqc($weowoqykiyuqcwam); } break; case $ykquycoiqesuckco::gskyioqkyeoaeiyk: $uiewakwqscemywuo[$omqquekswieeogws] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->eqmcwusgemkccwqc($omkysikckkcieckq); break; default: $uiewakwqscemywuo[$omqquekswieeogws] = $omkysikckkcieckq; } } if ($iiaumsgauuyeqksw->mkdir($yckucuyiaykemqea) && $iiaumsgauuyeqksw->coeoweawgagkycwe($yckucuyiaykemqea)) { $iiaumsgauuyeqksw->mikiwoyomouecayw($yckucuyiaykemqea, $wkcwykowmmmwioqs, $uiewakwqscemywuo); } } } } } }
