<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679775ba40dc4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Exception; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Header; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Media; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Error; class User extends Container { const cigcassgekcaiigg = "\137\166\145\162\151\146\151\x65\x64"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\145\x74\137\x61\x76\141\164\141\162\x5f\144\x61\164\x61", [$this, "\157\x71\x73\x6d\171\165\x77\167\147\157\x69\x79\x61\163\x65\x75"], 999, 2); $this->aqaqisyssqeomwom("\x70\x61\x6e\145\154\137\x75\x73\x65\162\x5f\147\145\x74\x5f\146\x69\x65\x6c\144\163", [$this, "\165\x67\155\143\x65\143\x63\x67\x77\x61\x61\141\x69\x67\x69\171"], 10, 2); parent::kgquecmsgcouyaya(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x73\150\x6f\x77\x5f\165\163\145\162\137\160\x72\x6f\x66\x69\154\145", [$this, "\141\167\x6b\161\153\161\141\x75\x77\167\165\161\x67\145\x77\x75"])->qcsmikeggeemccuu("\145\x64\x69\164\137\165\163\145\162\x5f\x70\162\x6f\146\x69\154\145", [$this, "\x61\x77\153\x71\153\x71\x61\165\x77\x77\165\161\x67\145\167\165"])->qcsmikeggeemccuu("\x70\145\x72\x73\x6f\156\x61\154\137\157\160\164\151\157\x6e\x73\137\x75\x70\144\x61\x74\145", [$this, "\x6d\163\x79\163\x67\x71\x65\145\167\x6b\161\147\x73\143\x77\145"])->qcsmikeggeemccuu("\145\x64\151\x74\137\165\163\145\x72\137\x70\x72\x6f\146\151\x6c\x65\137\165\160\144\x61\164\x65", [$this, "\155\x73\x79\163\147\x71\145\x65\167\x6b\x71\147\x73\143\x77\x65"]); parent::wigskegsqequoeks(); } public function msysgqeewkqgscwe($mkucggyaiaukqoce) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([Constants::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; if ($eiicaiwgqkgsekce->ayueggmoqeeukqmq($aokagokqyuysuksm) === Constants::ON) { $eqgoocgaqwqcimie = 1; } else { $eqgoocgaqwqcimie = 0; } $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); } } } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce, Constants::mgsccwumkcawaqcy => Constants::kqeokggqcsesmqco]); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($aokagokqyuysuksm, ''); if ($eqgoocgaqwqcimie) { $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); } else { $yoiguusocukqeayg->smqukgcyacswysqa($aokagokqyuysuksm, $mkucggyaiaukqoce); } } } } } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { $uiyqiwmskuuaiayw = []; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header) { if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { $omuyquqsuicwkeic = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; $ieqeegkcmgkmoiyq = $this->caokeucsksukesyo()->wmkogisswkckmeua()->wcwmusaouiqaqeww($omuyquqsuicwkeic); $ieqeegkcmgkmoiyq->iygyugseyaqwywyg($this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($omuyquqsuicwkeic, $mkucggyaiaukqoce) ? Constants::ON : Constants::OFF); $eqgoocgaqwqcimie = $aiowsaccomcoikus->qooeaookuemoqecm(); $wwgucssaecqekuek = ["\x63\x6c\141\163\x73" => "\x6d\x74\x2d\62"]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($aiowsaccomcoikus instanceof Media) { $wwgucssaecqekuek["\x73\162\x63"] = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->mgaeeqsgeoukeokc($eqgoocgaqwqcimie); $wwgucssaecqekuek[Constants::qomookamaskuoswk] = 120; $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\x73\x73", "\x69\155\147\x2d\146\x6c\165\151\x64"); $mcqieaigyeeyaksm = $swqimwqeweekeusq->qgsekwygcgawekeq("\x69\x6d\147", $wwgucssaecqekuek); $eqgoocgaqwqcimie = $swqimwqeweekeusq->yuawgssgauywkiia($mcqieaigyeeyaksm, $eqgoocgaqwqcimie, ["\x74\141\x72\x67\x65\x74" => "\x5f\142\x6c\141\156\153"]); } else { $eqgoocgaqwqcimie = $swqimwqeweekeusq->ciuuiyckmsygceis($eqgoocgaqwqcimie, $wwgucssaecqekuek); } $uiyqiwmskuuaiayw[] = [Constants::gouqcwikiiygyasc => $omuyquqsuicwkeic, Constants::gsqoooskigukokks => $ieqeegkcmgkmoiyq->render(), Constants::ciyoccqkiamemcmm => sprintf(__("\x56\x61\154\x75\x65\x20\x6f\x66\40\x25\x73\x3a\40\45\x73", PR__MDL__PANEL), $aiowsaccomcoikus->qcgakseyaikigqco(), $eqgoocgaqwqcimie), Constants::uissasisiuymwsmu => sprintf(__("\126\145\x72\151\x66\171\40\x25\163", PR__MDL__PANEL), $aiowsaccomcoikus->qcgakseyaikigqco())]; } } } } $yoagueksskqiewiq = []; $gmeiukgosesecyee = $this->ugmceccgwaaaigiy([], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce, Constants::mgsccwumkcawaqcy => Constants::kqeokggqcsesmqco]); foreach ($gmeiukgosesecyee as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ssigsiuwyemcwmys = $this->oocoemuigcmgeymo($aiowsaccomcoikus); if ($ssigsiuwyemcwmys) { $ssigsiuwyemcwmys->qigsyyqgewgskemg("\x77\x2d\155\x64\55\x35\x30\x20\167\x2d\x6c\x67\55\62\65"); $ssigsiuwyemcwmys->iygyugseyaqwywyg($aiowsaccomcoikus->qooeaookuemoqecm()); $ssigsiuwyemcwmys->gswweykyogmsyawy(''); $yoagueksskqiewiq[] = [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::gsqoooskigukokks => $ssigsiuwyemcwmys->render(), Constants::uissasisiuymwsmu => $aiowsaccomcoikus->qcgakseyaikigqco()]; } } } if ($yoagueksskqiewiq) { echo $this->iuygowkemiiwqmiw("\x70\162\x6f\146\x69\154\145", [Constants::qescuiwgsyuikume => __("\111\156\x66\157\x72\x6d\x61\164\x69\x6f\x6e\40\x56\145\162\x69\x66\x69\143\x61\x74\151\x6f\156", PR__MDL__PANEL), Constants::ymckmcsiymwqucoq => $yoagueksskqiewiq, "\166\x65\162\x69\146\x69\x63\x61\x74\x69\x6f\156\x73" => $uiyqiwmskuuaiayw, "\x76\x65\162\x69\x66\x69\x63\141\164\x69\x6f\156\x73\137\x74\x69\164\154\145" => __("\126\x65\162\151\146\151\141\142\154\x65\x20\146\151\x65\x6c\144\x73", PR__MDL__PANEL)]); } } public function oocoemuigcmgeymo($aiowsaccomcoikus) { $sqeykgyoooqysmca = $aiowsaccomcoikus->waecsyqmwascmqoa(Constants::squoamkioomemiyi); $aiowsaccomcoikus->wmiseqaieauskweu(); $siquossayskcwkea = $aiowsaccomcoikus->sacmkccceuywoqsq() + [Constants::squoamkioomemiyi => $sqeykgyoooqysmca]; return $this->caokeucsksukesyo()->wmkogisswkckmeua()->ocegoqcckecwgays($siquossayskcwkea); } public function aqqaucmcssiayceu() : array { $sogksuscggsicmac = []; $mcgmicqwgaaqqqcw = $this->weysguygiseoukqw(Setting::qaoqekkamwkyqcsi, []); $mcgmicqwgaaqqqcw = $this->ocksiywmkyaqseou("\x70\x61\x6e\x65\x6c\x5f\x75\163\145\x72\x5f\x70\162\x65\x76\x69\145\x77\163", $mcgmicqwgaaqqqcw); if ($mcgmicqwgaaqqqcw) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [Constants::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($aiowsaccomcoikus instanceof Field && in_array($aokagokqyuysuksm, $mcgmicqwgaaqqqcw, true)) { $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->qcgakseyaikigqco(); } } } return $sogksuscggsicmac; } public function oqsmyuwwgoiyaseu($ywmkwiwkosakssii, $sqwmoeogqwooeukc) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->mikwgiscckkeomia($sqwmoeogqwooeukc); if ($yoiguusocukqeayg->is($mkucggyaiaukqoce) && ($mowgokyeuymuwiew = $this->iqqqmsismuacmaqo($sqwmoeogqwooeukc, Constants::meweoeakkqyiwuyy))) { $ywmkwiwkosakssii[Constants::auqoykcmsiauccao] = $mowgokyeuymuwiew; } return $ywmkwiwkosakssii; } public function iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ogomymegcoacqisg = $yoiguusocukqeayg->igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ogomymegcoacqisg)) { $ogomymegcoacqisg = $this->quyeyqecsuasocgs($yoiguusocukqeayg->igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce)); } return $ogomymegcoacqisg; } public function quyeyqecsuasocgs($aiooqyausygaasqm) { $ogomymegcoacqisg = null; if ($aiooqyausygaasqm) { $ogomymegcoacqisg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->caokeucsksukesyo()->iqsmaqoiukeasukw()->uikkssqcoewckces((int) $aiooqyausygaasqm), 0); } return $ogomymegcoacqisg; } public function uwucmiyokwcakwga($mkucggyaiaukqoce, $icwicymcioeyeyek, $ikgwqyuyckaewsow = []) { $sogksuscggsicmac = $this->muukeaaskkiceykc($icwicymcioeyeyek, $ikgwqyuyckaewsow); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ecukkacusqswqoem = false; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header) { if (!$aiowsaccomcoikus->iokkueaqiswaewyq() || !$aiowsaccomcoikus->wowamsaiqwikqoqa()) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm); try { $this->ewcsyqaaigkicgse("\x70\x61\156\145\154\137\165\x73\x65\x72\137\x73\141\x76\145\137\x66\151\x65\x6c\144", $aiowsaccomcoikus, $euwkouuykmaieusi); $this->ewcsyqaaigkicgse("\160\x61\x6e\145\154\137\x75\x73\x65\x72\x5f\x73\141\x76\x65\137\146\151\145\x6c\144\137{$aokagokqyuysuksm}", $euwkouuykmaieusi, $aiowsaccomcoikus); switch ($aokagokqyuysuksm) { case Constants::meweoeakkqyiwuyy: case Constants::kmyciqicaqsgiwga: if ($euwkouuykmaieusi && !$cwaqscoiqkokyase->wmcwegoisyeeosqu($euwkouuykmaieusi)) { $aiooqyausygaasqm = $this->caokeucsksukesyo()->iuekyyeesukysksy()->lausiwamsokkqguo($euwkouuykmaieusi); if (!is_wp_error($aiooqyausygaasqm)) { $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, $aiooqyausygaasqm, $ycoeoaakqyskgykq); $ecukkacusqswqoem = true; } else { $sogksuscggsicmac[Constants::imkacwmiuiykyuim] = $aiooqyausygaasqm->get_error_message(); } } break; case Constants::ccyqsqcgksyckkcm: case Constants::gmyemowoaqyoqwme: case Constants::scagkwwiiquocimc: case Constants::kagqiwogmiguosiw: case Constants::akoagooquksouwka: $mkucggyaiaukqoce->{$aokagokqyuysuksm} = esc_sql($euwkouuykmaieusi); $ecukkacusqswqoem = true; break; default: if ($aokagokqyuysuksm === Constants::iuwkkyuoyukacwwy && !$cwaqscoiqkokyase->iuceiykuqcqkwsoa($euwkouuykmaieusi) || $aokagokqyuysuksm === Constants::uymswsomcyoqsegc && !$cwaqscoiqkokyase->qawecuimqqcqwgsw($euwkouuykmaieusi)) { $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw(sprintf(__("\45\x73\x20\x69\163\x20\156\x6f\x74\40\x61\x20\x76\x61\154\x69\x64\x20\45\x73", PR__MDL__PANEL), $euwkouuykmaieusi, $aiowsaccomcoikus->qcgakseyaikigqco())); } else { $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, esc_attr($euwkouuykmaieusi), $ycoeoaakqyskgykq); } break; } } catch (Exception $wgaoewqkwgomoaai) { $aagguieukukuysce = $this->caokeucsksukesyo()->euekiyuksecoccus(); $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(sprintf("\x25\x73\x3c\x62\x72\x3e\x25\163", __("\146\x61\151\154\x65\x64\40\x75\160\x64\141\164\x65\x20\x70\x72\x6f\x66\151\x6c\145\x3a", PR__MDL__PANEL), $aagguieukukuysce->skauuuoqcaiseuks($wgaoewqkwgomoaai)), 400); } } } } if ($ecukkacusqswqoem) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->update($mkucggyaiaukqoce); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\145\162\145\x20\151\x73\x20\156\x6f\164\150\x69\x6e\147\x20\x66\157\x72\40\x75\160\x64\x61\164\145", PR__MDL__PANEL), 400); } } return $sogksuscggsicmac; } public function muukeaaskkiceykc($eyagkkkqkwcuygso, $ikgwqyuyckaewsow) { $sogksuscggsicmac = true; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $okguqgiiewywyoaq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = $gkyciwoiiisgywcs->get($eyagkkkqkwcuygso, $aokagokqyuysuksm); if (!$euwkouuykmaieusi && $aiowsaccomcoikus->msmiagueogcsucgc()) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x25\x73\x20\x69\x73\x20\x61\40\x72\x65\x71\x75\151\162\x65\x20\146\x69\x65\154\x64", PR__MDL__PANEL), $aiowsaccomcoikus->qcgakseyaikigqco()), 400); break; } else { $sogksuscggsicmac = $this->ocksiywmkyaqseou("\x70\141\156\x65\x6c\x5f\x70\x72\157\x66\151\154\x65\137\166\141\154\151\144\x61\164\x69\x6f\x6e\x5f\151\156\x70\x75\x74", true, $aiowsaccomcoikus, $euwkouuykmaieusi); if (!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac) { switch ($aokagokqyuysuksm) { case Constants::ccyqsqcgksyckkcm: if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($euwkouuykmaieusi)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\x20\x55\x72\154\x20\x79\x6f\165\x20\145\156\164\145\x72\145\x64\x20\x69\163\x20\x6e\x6f\x74\40\x76\141\x6c\151\x64", PR__MDL__PANEL), 400); } break; case Constants::akoagooquksouwka: if (!$okguqgiiewywyoaq->qkgmsqgmwoamekyk($euwkouuykmaieusi)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\145\40\x45\155\x61\151\x6c\x20\x79\x6f\165\40\x65\x6e\x74\x65\x72\x65\144\x20\151\163\40\x6e\157\164\40\166\x61\x6c\151\144", PR__MDL__PANEL), 400); } break; } } } } } return $sogksuscggsicmac; } public function ugmceccgwaaaigiy($ikgwqyuyckaewsow = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [ Constants::meksegaoamowuwoq => null, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::mgsccwumkcawaqcy => Constants::ALL, Constants::ackcaikowcokggsc => [], Constants::wacsysugayaeayag => true, ]); switch ($ywmkwiwkosakssii[Constants::mgsccwumkcawaqcy]) { case Constants::kqeokggqcsesmqco: $ikgwqyuyckaewsow = $this->cgaksokgcmycgmeo(); break; case Constants::ALL: default: $ikgwqyuyckaewsow = array_merge($this->ibaymmaeyoceumgw(), $this->cgaksokgcmycgmeo()); break; } $mkucggyaiaukqoce = $ywmkwiwkosakssii[Constants::meksegaoamowuwoq]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou("\160\141\x6e\145\x6c\137\160\162\x6f\x66\151\x6c\145\x5f\x70\x65\x72\163\157\156\x61\154\137\146\x69\145\154\x64\x73", $ikgwqyuyckaewsow, $mkucggyaiaukqoce); $kmogksmigykusaem = $ywmkwiwkosakssii[Constants::wacsysugayaeayag]; $okaqsamoiqqumygk = []; $yyeuwosgwymeocco = []; $gcygmsqykaykyyim = []; if ($kmogksmigykusaem) { $okaqsamoiqqumygk = $this->weysguygiseoukqw(Setting::gyogiiwkqowygoes, $okaqsamoiqqumygk); $yyeuwosgwymeocco = $this->weysguygiseoukqw(Setting::kioockukciugewka, $yyeuwosgwymeocco); $gcygmsqykaykyyim = $this->weysguygiseoukqw(Setting::sweqwcsqywoaomyg, $gcygmsqykaykyyim); } $sogksuscggsicmac = []; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $kwcqeacwucqmwmcw = null; $gsyeosaccwkauuyu = []; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $muocgugcqiewywag = true; if (!$ooiewiwkegguusum || in_array($aokagokqyuysuksm, $ooiewiwkegguusum, true)) { $aiowsaccomcoikus = $this->ocksiywmkyaqseou("\160\141\156\145\x6c\137\x70\x72\157\x66\x69\154\145\137{$aokagokqyuysuksm}\137\x66\x69\145\x6c\144", $aiowsaccomcoikus, $mkucggyaiaukqoce); switch ($ywmkwiwkosakssii[Constants::aisguagukaewucii]) { case Constants::ckmqoekmugkggeym: if ($kmogksmigykusaem) { if (in_array($aokagokqyuysuksm, $yyeuwosgwymeocco, true)) { $muocgugcqiewywag = false; } else { if (!$aiowsaccomcoikus instanceof Header) { $gsyeosaccwkauuyu[$aokagokqyuysuksm] = $momcykaoccoymeig; if (in_array($aokagokqyuysuksm, $okaqsamoiqqumygk, true)) { $aiowsaccomcoikus->eumecwmqmukqgyea(); } if (in_array($aokagokqyuysuksm, $gcygmsqykaykyyim, true)) { $aiowsaccomcoikus->uqiyecacqiyeaqqo(); if ($yoiguusocukqeayg->igawqaomowicuayw($aokagokqyuysuksm . self::cigcassgekcaiigg, $mkucggyaiaukqoce)) { $aiowsaccomcoikus->cekywgkuyuckekeg(); } } if ($mkucggyaiaukqoce) { $aiowsaccomcoikus->iygyugseyaqwywyg($this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $aokagokqyuysuksm, false)); } } } if ($aiowsaccomcoikus instanceof Header) { if (isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]) && !$gsyeosaccwkauuyu) { unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); } $gsyeosaccwkauuyu = []; $kwcqeacwucqmwmcw = $momcykaoccoymeig; } } if ($muocgugcqiewywag) { $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus; } break; case Constants::emgcgiseaoouacge: default: if (!$aiowsaccomcoikus instanceof Header) { $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->qcgakseyaikigqco(); } break; } } } } if ($kmogksmigykusaem && !$gsyeosaccwkauuyu && isset($sogksuscggsicmac[$kwcqeacwucqmwmcw])) { unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); } return $sogksuscggsicmac; } public function ibaymmaeyoceumgw() : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); return [$gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__("\x55\x73\145\162\40\111\156\146\x6f", PR__MDL__PANEL)), $gusoaiguqeaommcc->quaegkgkucwyeiqg(Constants::meweoeakkqyiwuyy)->gswweykyogmsyawy(__("\x46\x61\x63\x65\40\x50\x69\x63\164\165\x72\145", PR__MDL__PANEL))->scmsukieucuekmki()->wsacuksekeaemucu(204800), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\106\151\162\163\164\40\116\141\155\x65", PR__MDL__PANEL))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::scagkwwiiquocimc)->gswweykyogmsyawy(__("\114\x61\163\x74\40\116\x61\155\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::gmyemowoaqyoqwme)->gswweykyogmsyawy(__("\116\x69\143\x6b\x20\116\141\x6d\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__("\x43\x6f\156\164\141\x63\x74\x20\111\156\146\x6f", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akoagooquksouwka)->gswweykyogmsyawy(__("\105\x6d\141\x69\x6c", PR__MDL__PANEL))->saemoowcasogykak(IconInterface::yeegwaaeowmycesi)->mkiaygiogeeyogqm(), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::ccyqsqcgksyckkcm)->gswweykyogmsyawy(__("\x57\145\x62\163\x69\x74\145", PR__MDL__PANEL))->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->xkgcwkwsqysqamic()]; } public function cgaksokgcmycgmeo() : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::uymswsomcyoqsegc)->gswweykyogmsyawy(__("\x4d\157\142\x69\154\145", PR__MDL__PANEL))->smigkcmumwkgamkk()->saemoowcasogykak(IconInterface::iacqisugsscswegy), $gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__("\x41\144\x64\162\145\x73\x73\x20\111\x6e\x66\x6f\x72\155\x61\x74\x69\157\x6e", PR__MDL__PANEL)), $gusoaiguqeaommcc->uouyygwcgsmygaee(Constants::iiysuomqoogiagwe)->gswweykyogmsyawy(__("\101\144\144\162\x65\163\x73", PR__MDL__PANEL))->qsecygiycssgacqs(2), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::gwiayggcmggiwoua)->gswweykyogmsyawy(__("\x50\157\x73\x74\x61\154\x20\103\x6f\144\145", PR__MDL__PANEL))->kqqqugemmqagucuq(), $gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__("\x56\x65\162\151\x66\x69\143\141\x74\x69\157\x6e\40\111\156\146\x6f\162\x6d\x61\164\x69\157\x6e", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::iuwkkyuoyukacwwy)->gswweykyogmsyawy(__("\116\141\164\x69\157\156\x61\154\x20\103\x6f\x64\x65", PR__MDL__PANEL))->igmaewykumgwoaoy("\x6d\141\x78\x6c\x65\x6e\x67\164\x68", 10)->kqqqugemmqagucuq()->suaookwiwycuwmuk("\x6e\x61\164\151\157\x6e\141\154\x2d\143\157\144\145"), $gusoaiguqeaommcc->quaegkgkucwyeiqg(Constants::kmyciqicaqsgiwga)->gswweykyogmsyawy(__("\116\141\164\151\157\156\141\154\40\103\x61\x72\x64", PR__MDL__PANEL))->ycueqsmmommygueu()->wsacuksekeaemucu(204800)]; return (array) $this->ocksiywmkyaqseou("\x70\141\156\145\154\137\165\x73\145\x72\x5f\143\165\163\x74\157\155\x5f\146\151\x65\154\144\x73", $ikgwqyuyckaewsow); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yyimiwcuegayoskq = []; $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce, Constants::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header) { $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $yyimiwcuegayoskq[$uusmaiomayssaecw] = $this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw); } } return $yyimiwcuegayoskq; } private function ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { if (Constants::uwycywkimsycqwcy === $mgkceomocowocqyo && in_array($uusmaiomayssaecw, [Constants::meweoeakkqyiwuyy, Constants::kmyciqicaqsgiwga], true)) { $eqgoocgaqwqcimie = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw); } else { if (isset($mkucggyaiaukqoce->{$uusmaiomayssaecw})) { $eqgoocgaqwqcimie = $mkucggyaiaukqoce->{$uusmaiomayssaecw}; } else { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); } } return $eqgoocgaqwqcimie; } }
