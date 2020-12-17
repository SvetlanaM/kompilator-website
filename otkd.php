<!DOCTYPE html>
<html lang="cs">

<head>
    <?php include "header.html" ?>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Případová studie - Mobilní aplikace Od Tater k Dunaji</title>
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kompilator.cz/otkd.php">
    <meta property="og:title" content="Případová studie - Mobilní aplikace Od Tater k Dunaji">
    <meta property=" og:description" content="Postup při vývoji a návrhu mobilní aplikace pro běžecké štafetové závody na Slovensku.">
    <meta property="og:image" content="https://www.kompilator.cz/img/meta_otkd.png">
    <meta property="og:site_name" content="Případová studie" />
    <meta property=" og:type" content="article" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://kompilator.cz/otkd.php">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="https://kompilator.cz/otkd.php">
    <meta property="twitter:title" content="Případová studie - Mobilní aplikace Od Tater k Dunaji">
    <meta property=" twitter:description" content="Postup při vývoji a návrhu mobilní aplikace pro běžecké štafetové závody na Slovensku.">
    <meta property="twitter:image" content="https://www.kompilator.cz/img/meta_otkd.png">

    <meta name="title" content="Případová studie - Mobilní aplikace Od Tater k Dunaji">
    <meta name=" description" content="Postup při vývoji a návrhu mobilní aplikace pro běžecké štafetové závody na Slovensku.">
    <meta name="author" content="Kompilátor s. r. o.">
    <meta name="format-detection" content="telephone=yes">
    <meta name="seznam-wmt" content="7EXe6O8iBq0WvVggTh3fhgBa0M5VlTs1" />
    <meta name="keywords" content="studie, mobilní aplikace, od tatier k dunaju, gps, tracking, real-time">
</head>

<body class="bg-white gray">
    <!-- navigation menu -->

    <?php include "menu.html" ?>

    <!-- section banner -->
    <section id="banner" class="banner">
        <div class="container-fluid pl-md-5 pr-md-5">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <h1 class="purple fw-500 banner-title">Ještě o kilometr lepší zážitek ze závodů</h1>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-7 mt-40 d-flex">
                    <p>OD TATIER K DUNAJU je 345 km dlouhý štafetový běh družstev. 6 nebo 9 až 12-členné týmy vystartují z Jasné v Nízkých Tatrách v sobotu dopoledne, běží non-stop dnem i nocí a v neděli odpoledne doběhnou do cíle závodu na nábřeží Dunaje v Bratislavě.
                    </p>
                </div>
                <div class="col-lg-4 d-flex banner-study-logo">
                    <img src="img/logos/otkd.svg" class="img-fluid" alt="Logo závodů Od Tatier k Dunaju" />
                </div>
            </div>
        </div>
    </section>

    <!-- section problem -->
    <section id="section-problem" class="section-problem">
        <div class="container-fluid pr-md-5 pl-md-5">
            <div class="row section-problem-main">
                <div class="col-lg-12">
                    <p class="case-study-title fw-450">1. Vznik nápadu a potřeby klienta
                    </p>
                </div>
                <div class="flex-box">
                    <div class="col-lg-6">
                        <p>
                            Na startu byl nápad nebo potřeba, kterou jsme diskutovali s klientem Milošem. Jelikož sami běháme, prvotní impuls přišel z naší strany.<br /><br />
                            Následně jsme možnosti konzultovali s Milošem a obohatili návrh o jeho problémy, loňské zkušenosti s závodem a postřehy běžců, které sesbíral za poslední 4 roky.
                        </p>
                        <div class="problem-icons d-flex mt-40">
                            <div class="problem-icons-item d-flex justify-content-between">
                                <img src="img/svg/obstacle.svg" alt="Závody Od Tatier k Dunaju sa konají 1x ročně" />
                                <div>Závody 1x za rok</div>
                            </div>
                            <div class="problem-icons-item d-flex justify-content-between">
                                <img src="img/svg/runner.svg" alt="Závodů Od Tatier k Dunaju sa ročně účastní okolo 2000 běžců" />
                                <div>2000 běžců</div>
                            </div>
                            <div class="problem-icons-item d-flex justify-content-between">
                                <img src="img/svg/collaboration.svg" alt="Za organizací závodu Od Tatier k Dunaju stojí 7 měsíců práce mnoha dobrovolníků" />
                                <div>Mnoho měs. organizace</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 ml-auto quote-box d-flex-inline">
                        <p class="quote">
                            ”Potrebujeme vytvoriť aplikáciu, ktorá bude funkčná a nezaťaží web. Bežci a rovnako aj my, sa na ňu môžeme spoľahnúť.”
                        </p>
                        <div class="quote-user d-flex mt-40">
                            <picture>
                                <source srcset="img/milos.webp 1x" type="image/webp">
                                <img src="img/milos.png" class="milos" alt="Miloš Zágoršek - organizátor závodů Od Tatier k Dunaju" />
                            </picture>
                            <div class="quote-user-item">
                                <div class="fw-450">Miloš Zágoršek</div>
                                <div>organizátor závodů</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section idea -->
    <section class="section-idea no-gutters" id="section-idea">
        <div class="container-fluid pr-md-5 pl-md-5">
            <div class="row">
                <div class="col-lg-6 idea-bg">
                </div>
                <div class="col-lg-5 d-flex-inline ml-auto idea-box">
                    <p class="case-study-title fw-450">2. Naše nápady + workshop s klientem</p>
                    <p>
                        V dalším kroku jsme s týmem vyhotovili seznam nápadů včetně problémů, kategorizovaných podle důležitosti. Vytvořili jsme ucelenou formu, příběh a návaznost na reálné potřeby.
                    </p>
                    <p class="case-study-hashtag fw-purple">#designthinking #ideas #why #problems #newangle</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section analyse -->
    <section class="section-analyse" id="section-analyse">
        <div class="container-fluid pl-md-5">
            <div class="row">
                <div class="col-lg-12">
                    <p class="case-study-title fw-450">3. Analýza požadavků a vydefinování cílových skupin</p>
                </div>
            </div>
            <div class="third-box d-flex row">
                <div class="col-lg-6">
                    Dalším a důležitým krokem je analýza vybraných nápadů z pohledu byznysu, marketingu, technické realizace a časové náročnosti.<br /><br />
                    Funkce jsou vydefinované na základě potřeby každého člena námi určené cílové skupiny, zahrnující jeho požadavky. Zároveň je třeba myslet na big-picture a všechny funkce společně poskládat do logického celku.
                </div>
                <div class="analyse-icons col-lg-5 d-flex ml-auto">
                    <div class="analyse-icons-item d-flex">
                        <img src="img/svg/runner.svg" alt="Bežci na závodu sa střídají ve štafetě po 6ti" />
                        <div>Běžci na závodech</div>
                    </div>
                    <div class="analyse-icons-item d-flex">
                        <img src="img/svg/capitan.svg" alt="Kapitán týmu má na starosti organizaci" />
                        <div>Kapitán týmu</div>
                    </div>
                    <div class="analyse-icons-item d-flex">
                        <img src="img/svg/collaboration.svg" alt="Organizátori během 2 dní koordinují závody na trati" />
                        <div>Organizátoři závodů</div>
                    </div>
                    <div class="analyse-icons-item d-flex">
                        <img src="img/svg/fans.svg" alt="Fanoušci sledují své známé z domova z různých koutů světa" />
                        <div>Fanoušci doma</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section options -->
    <section id="section-options" class="section-options">
        <div class="container-fluid pr-md-5 pl-md-5">
            <div class="row section-box d-flex">
                <div class="col-lg-6 idea-box">
                    <p class="case-study-title fw-450">4. Možnosti realizace a hlavní cíle projektu</p>
                    <ul class="case-study-list list-unstyled list-dont">
                        <li>+ Technická realizace projektu</li>
                        <li>+ Analýza konkurence</li>
                        <li>+ Rozpočtové možnosti vs. přínos projektu</li>
                        <li>+ Byznys analýza a přínosy pro organizaci</li>
                        <li>+ Přínosy pro uživatele</li>
                    </ul>
                    <div class="bigger-info d-flex">
                        <div class="text-uppercase fw-450">NÁSKOK PŘED KONKURENCÍ</div>
                        <div class="text-uppercase fw-450">SNÍŽENÍ ZATĚŽE NA EXISTUJÍCÍ WEB</div>
                    </div>
                </div>
                <div class="col-lg-5 idea-box brand-box d-flex ml-auto">
                    <div class="row">
                        <div class="col-md-12 case-study-title fw-450">5. Vizuální identita a brand</div>
                        <div class="col-md-8 col-lg-8 d-flex">Vycházeli jsme z existujícího brandu a designu závodů OTKD, který je dán a definován na trhu již více než 4 roky a ten jsme následně rozšířili.
                        </div>
                        <div class="col-md-4 col-lg-4 analyse-otkd-logo">
                            <picture>
                                <source srcset="img/logo_otkd_black.webp 1x" type="image/webp">
                                <img src="img/logo_otkd_black.png" class="img-fluid" alt="Logo závodů Od Tatier k Dunaju" />
                            </picture>
                        </div>
                    </div>
                    <div class="no-gutters">
                        <div class="case-study-title fw-450 col-lg-12">Partner projektu</div>
                        <picture>
                            <source srcset="img/logo_vub.webp 1x" type="image/webp">
                            <img src="img/logo_vub.png" class="analyse-otkd-logo col-lg-8" alt="Logo partnera projektu Od Tatier k Dunaju - VÚB banka" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section data -->
    <section id="section-data" class="section-data">
        <div class="container-fluid pr-md-5 pl-md-5">
            <div class="row">
                <div class="col-md-12">
                    <p class="case-study-title fw-450">6. Datová analýza a vyhodnocení jako vstupní podklad</p>
                    <p>Abychom aplikaci nestavěli pouze na našich domněnkách, podívali jsme se do dostupných dat. Data, která dostupná nebyla, jsme získali formou <span class="fw-450">dotazníku s cílovými uživateli</span>, případně z historických údajů
                        <span class="fw-450">Google Analytics nad existujícím webem</span> závodů. Z dat jsme vyhodnotili nejdůležitější závěry, od kterých jsme se odpíchli při formulování již konkrétního produktu.</p>
                </div>
            </div>
            <div class="row">
                <div class="graph-box col-md-12">
                    <div class="col-lg-6 mt-40 graph-section d-flex flex-column text-center">
                        <div class="graph-title fw-450 text-left">Návštěvnost webu podle zemí a lokalit</div>
                        <img src="img/svg/graph_bar.svg" class="img-fluid graph-img" alt="Návštěvnost webu Od Tatier k Dunaju podle zemí z webu nebo mobilního zařízení" />
                        <p class="graph-result">+ Umožnit sledovat průběh všem z mobilních zařízení</p>
                    </div>
                    <div class="col-lg-6 mt-40 graph-section d-flex flex-column text-center">
                        <div class="graph-title fw-450 text-left">Průzkum mezi uživateli na sociálních sítích</div>
                        <img src="img/svg/graph_bubble.svg" class="img-fluid graph-img" alt="Dotazník nejžádanější funkcionality závodů Od Tatier k Dunaju vyhodnotil jako nejoblíbenější funkcionalitu - GPS tracking v reálném čase" />
                        <p class="graph-result">+ Běžci nejžádanější funkce je GPS tracking</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section case study -->
    <section id="section-case-study" class="section-case-study">
        <div class="container-fluid pr-md-5 pl-md-5">
            <div class="row">
                <div class="col-md-12 idea-box">
                    <p class="case-study-title fw-450">7. Tvorba UI/UX a designu aplikace</p>
                </div>
                <div class="img-study-box">
                    <div class="col-sm-12 col-lg-3 study-image">
                        <picture>
                            <source srcset="img/otkd_sections@2x.webp 1x,
										img/otkd_sections@2x.webp 2x" type="image/webp">
                            <source srcset="img/otkd_sections@2x.png 1x,
										img/otkd_sections@2x.png 2x" type="image/png">
                            <img class="img-fluid" src="img/otkd_sections@2x.png" alt="Seznam úseků a členů týmu přiřazených na ně v rámci závodů Od Tatier k Dunaju" />
                        </picture>
                    </div>
                    <div class="col-sm-12 col-lg-3 study-image">
                        <picture>
                            <source srcset="img/otkd_runner@2x.webp 1x,
										img/otkd_runner@2x.webp 2x" type="image/webp">
                            <source srcset="img/otkd_runner@2x.png 1x,
										img/otkd_runner@2x.png 2x" type="image/png">
                            <img class="img-fluid" src="img/otkd_runner@2x.png" alt="Výsledky bežce závodů Od Tatier k Dunaju na vybraném úseku" />
                        </picture>
                    </div>
                    <div class="col-sm-12 col-lg-5 d-flex-inline ml-auto list-need">
                        <div class="list-needs">
                            <p class="white-title case-study-title fw-450">Potřeby kapitána a běžců</p>
                            <ul class="list-unstyled list-dont">
                                <li>+ Správa týmu</li>
                                <li>+ Správa mých úseků / nočních úseků</li>
                                <li>+ Detail úseku pro běžce/auto</li>
                                <li>+ Komunikace s organizátorem - zraněný běžec</li>
                                <li>+ Sledování real-time výsledků běžce, týmu a celkových výsledků</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="needs-results text-uppercase d-flex text-center justify-content-center mt-80">
                    <div class="needs-item">
                        <img src="img/svg/runner_white.svg" alt="Identifikace ďalší předávky" />
                        <div>1. TÝM VÍ KDY PŘIJÍT NA DALŠÍ PŘEDÁVKU</div>
                    </div>
                    <div class="needs-item">
                        <img src="img/svg/collaboration_white.svg" alt="Dobrovolníci využívají aplikaci na sledování týmů na trati" />
                        <div>2. ORGANIZÁTOŘI VIDÍ POHYB TÝMŮ NA TRATI</div>
                    </div>
                    <div class="needs-item">
                        <img src="img/svg/fans_white.svg" alt="Fanoučci sledují bežce z domova prostřednictvím mobilní aplikace OTKD" />
                        <div>3. FANOUŠCI SLEDUJÍ SVŮJ TÝM Z DOMOVA</div>
                    </div>
                    <div class="needs-item">
                        <img src="img/svg/runner_white.svg" alt="Bežci si môžu skontrolovať svoju pozíciu na trati" />
                        <div>4. BĚŽEC KONTROLUJE POZICI NA TRATI</div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12 tracking-image-box">
                    <picture>
                        <source srcset="img/otkd_tracking_2@2x.webp 1x,
										img/otkd_tracking_2@2x.webp 2x" type="image/webp">
                        <source srcset="img/otkd_tracking_2@2x.png 1x,
										img/otkd_tracking_2@2x.png 2x" type="image/png">
                        <img class="img-fluid tracking-image" src="img/otkd_tracking_2@2x.png" alt="Real-time GPS tracking" />
                    </picture>
                    <picture>
                        <source srcset="img/otkd_tracking_1@2x.webp 1x,
										img/otkd_tracking_1@2x.webp 2x" type="image/webp">
                        <source srcset="img/otkd_tracking_1@2x.png 1x,
										img/otkd_tracking_1@2x.png 2x" type="image/png">
                        <img class="img-fluid tracking-image" src="img/otkd_tracking_1@2x.png" alt="Sledování bežce a jeho reálné polohy na mapě" />
                    </picture>
                    <picture>
                        <source srcset="img/otkd_tracking_3@2x.webp 1x,
										img/otkd_tracking_3@2x.webp 2x" type="image/webp">
                        <source srcset="img/otkd_tracking_3@2x.png 1x,
										img/otkd_tracking_3@2x.png 2x" type="image/png">
                        <img class="img-fluid tracking-image" src="img/otkd_tracking_3@2x.png" alt="Sledování průměrného času běhu bežcě pomocí GPS trackingu" />
                    </picture>
                </div>
                <div class="img-study-box">
                    <div class="col-lg-5 d-flex-inline mr-auto list-need">
                        <div class="list-needs">
                            <p class="white-title case-study-title fw-450">Potřeby organizátora</p>
                            <ul class="list-unstyled list-dont">
                                <li>+ Možnost komunikovat real-time s běžci</li>
                                <li>+ Možnost vyměnit běžce</li>
                                <li>+ Real-time výsledky bez narušení chodu webu, aktualizované každé 2 minuty</li>
                                <li>+ Získat mezičasy na předávkách pro další výpočty</li>
                                <li>+ Podpora socializace a sdílení / zajímavé funkce</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 ml-auto idea-box study-image">
                        <picture>
                            <source srcset="img/otkd_injury@2x.webp 1x,
										img/otkd_injury@2x.webp 2x" type="image/webp">
                            <source srcset="img/otkd_injury@2x.png 1x,
										img/otkd_injury@2x.png 2x" type="image/png">
                            <img class="img-fluid" src="img/otkd_injury.png" alt="Možnost nahlásit zraněného bežce organizátorovi závodů OTKD" />
                        </picture>
                    </div>
                    <div class="col-lg-3 idea-box study-image">
                        <picture>
                            <source srcset="img/otkd_push@2x.webp 1x,
										img/otkd_push@2x.webp 2x" type="image/webp">
                            <source srcset="img/otkd_push@2x.png 1x,
										img/otkd_push@2x.png 2x" type="image/png">
                            <img class="img-fluid" src="img/otkd_push.png" alt="Možnost poslat push notifikaci bežcům od organizátora OTKD" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section result -->
    <section id="section-result" class="section-result">
        <div class="container-fluid pr-md-5 pl-md-5">
            <div class="row">
                <div class="col-md-12">
                    <p class="case-study-title fw-450">8. Vyhodnocení a feedback</p>
                </div>
                <div class="col-lg-6">
                    <picture>
                        <source srcset="img/map.webp 1x" type="image/webp">
                        <img src="img/map.png" class="img-map img-fluid" alt="Mapa uživatelů sledujících závody prostřednictvím mobilní aplikace Od Tatier k Dunaju" />
                    </picture>
                </div>
                <div class="col-lg-5 d-flex-inline ml-auto">
                    <div class="result-box flex-wrap d-flex text-center justify-content-between mt-80">
                        <div class="result-item">
                            <div class="result-number">3500</div>
                            <div>stažení aplikace</div>
                        </div>
                        <div class="result-item">
                            <div class="result-number">6000</div>
                            <div>aktivních uživatelu</div>
                        </div>
                        <div class="result-item">
                            <div class="result-number">8</div>
                            <div>zemí světa</div>
                        </div>
                        <div class="result-item">
                            <div class="result-number">12</div>
                            <div>poslaných notifikací</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section plus -->
    <section id="section-plus" class="section-plus">
        <div class="container-fluid pr-md-5 pl-md-5">
            <div class="row">
                <div class="col-lg-6">
                    <p class="case-study-title fw-450">9. Přínosy pro ogranizátora a běžce</p>
                    <ul class="case-study-list list-unstyled list-dont">
                        <li>+ Informovanost během závodů a snížení stresující komunikace</li>
                        <li>+ Nižší zátěž na web a s tím spojené technické problémy</li>
                        <li>+ Nižší náklady na SMS, které nahradily push notifikace</li>
                        <li>+ Nové zajímavé offline/online funkce</li>
                    </ul>
                    <div class="price">
                        Přibližná cena: Iterace každý rok: 80 000 CZK
                    </div>
                </div>
                <div class="col-lg-5 ml-auto d-flex-inline idea-box">
                    <p class="quote">
                        ”S aplikáciou sme boli spokojní. Všetko fungovalo ako malo, vedeli sme kde je bežec a kedy sa pripraviť na ďalšiu predávku.”
                    </p>
                    <div class="quote-user d-flex">
                        <picture>
                            <source srcset="img/martin.webp 1x" type="image/webp">
                            <img src="img/martin.png" class="milos" alt="Martin Detvaj - běžec na závodu Od Tatier k Dunaju" />
                        </picture>
                        <div class="quote-user-item">
                            <div class="fw-450">Martin Detvaj</div>
                            <div>běžec závodů</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 idea-box order-md-1 order-2">
                    <a type="button" role="button" class="btn btn-reservate text-uppercase" href="https://forms.gle/zDCrXjETzfTFcrxA8" target="new">Objednat workshop</a>
                </div>
                <div class="order-md-2 col-md-5 order-1 col-lg-5 ml-auto idea-box">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="https://play.google.com/store/apps/details?id=eu.nanooq.otkd&hl=sk" target="new"><img src="img/svg/gp.svg" class="img-fluid store-img" /></a>
                        </div>
                        <div class="col-md-6">
                            <a href="https://apps.apple.com/cz/app/otkd-2017/id1263139345?l=cs" target="new"><img src="img/svg/as.svg" class="img-fluid store-img" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.html" ?>

</body>

</html>