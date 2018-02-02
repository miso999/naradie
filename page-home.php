<?php
/*
Template Name : Homer Page
*/

get_header(); ?>

    <div class="large-hero">


        <img src="<?=bloginfo('template_directory')?>/images/football-field.jpg" height="400px" alt="Coastal view of ocean and mountains"
             class="large-hero__image">
        <div class="large-hero__overlay"></div>


        <div class="large-hero__text-content">
            <div class="wrapper">
                <h1 class="large-hero__title"> Futbalové trávniky</h1>
                <p class="large-hero__description">Údržba, regenerácia a manažment trávnikových plôch.</p>
                <p><a href="#our-beginning" id="our-beginning-link" class="btn hidden-xs">Viac info</a></p>
            </div>
        </div>

        <div class="large-hero__effect"><span></span> <span></span></div>

    </div>

    <div id="our-beginning" class="page-section" data-section-link="#our-beginning-link" style="position: relative;">
        <div class="wrapper">

            <div class="row row--gutters">
                <div class="row__medium-4 row__medium-4--larger row__b-margin-until-medium">
                    <picture>
                        <source sizes="404px"
                                data-srcset="<?=bloginfo('template_directory')?>/images/onas-medium.jpg 404w, <?=bloginfo('template_directory')?>/images/onas-medium.jpg 808w"
                                media="(min-width: 1020px)">
                        <source sizes="320px"
                                data-srcset="<?=bloginfo('template_directory')?>/images/onas-medium.jpg 382w, <?=bloginfo('template_directory')?>/images/lawn-mower.jpg 764w"
                                media="(min-width: 800px)">
                        <img class="lazyload img-responsive"
                             data-srcset="<?=bloginfo('template_directory')?>/images/onas-small.jpg 800w, <?=bloginfo('template_directory')?>/images/lawn-mower.jpg 1600w"
                             alt="Our founder, Jane Doe">
                    </picture>
                </div>
                <div class="row__medium-8 row__medium-8--smaller">
                    <div class="generic-content-container">
                        <h2 class="headline headline--no-t-margin headline--b-margin-small">O nás</h2>
                        <hr class="left">
                        <p>Zakladaním, údržbou a trávnikovým poradenstvom sa zaoberáme viac ako jednu dekádu. Máme potrebné znalosti a skúsenosti so servisom trávnikov.

                            Pravidelne sledujeme nové trendy a neustále sa vzdelávame. Jednoducho žijeme trávnikmi.

                        </p>

                        <p> Naším poslaním je robiť služby a servis trávnikov aj pre kluby s nižším rozpočtom, ktoré nedisponujú adekvátnou technikou, personálom alebo dostatočnými vedomosťami ako na to.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="page-section page-section--stripe" data-section-link="#features-link">
        <div class="wrapper">
            <h2 class="section-title"><span class="icon icon--star section-title__icon"></span> Naše <strong>služby</strong>
            </h2>
            <hr>

            <h2 class="headline headline--small headline--centered headline--no-t-margin "> Zabezpečujeme kompletný servis pre futbalové ihriská. </h2>


            <div class="row row--equal-height-at-medium row--gutters-small generic-content-container">

                <div class="row__medium-4">
                    <div class="service">
                        <img class="service__photo" src="<?=bloginfo('template_directory')?>/images/poradenstvo.jpg" alt=" ">
                        <div class="service__content">
                            <h3>Poradenstvo</h3>
                            <hr class="left">
                            <p>Vykonávame poradenstvo na základe osobnej obhliadky a zistenie stavu trávnikovej plochy. Navrhneme optimálne riešenie podľa požiadaviek a finančných možností klubu. Bezplatne vypracujme analýzu trávnikovej plochy. Na základe vzájomného partnerstva vypracujme prípadovú štúdiu, kde môžete sledovať, kde bol bol váš trávnik na začiatku našej spolupráce a kam sa kvalitatívne posunul po kooperácii s nami.</p>
                        </div>
                    </div>
                </div>

                <div class="row__medium-4">
                    <div class="service">
                        <img class="service__photo" src="<?=bloginfo('template_directory')?>/images/vertikutacia.jpg" alt=" ">
                        <div class="service__content">
                            <h3>Vertikutácia</h3>
                            <hr class="left">
                            <p>Vertikálne prerezávanie trávnika patrí k základným opreráciám na trávniku. Je druhým najznámejším mechanickým zásahom na trávniku hneď po kosení. Prerezávaním dochádza k odstraňovaniu plste z trávnika. Plsť je zhrnutá vrstva odumretých častí rastlín. Tá zabraňuje prístupu vzduchu, vody a živín do trávnika. Pri dosevoch znižuje zakoreňovanie nového osiva. Oslabuje zdravý trávnik.</p>
                        </div>
                    </div>
                </div>
                <div class="row__medium-4">
                    <div class="service">
                        <img class="service__photo" src="<?=bloginfo('template_directory')?>/images/aeration.jpg" alt=" ">
                        <div class="service__content">
                            <h3>Aerifikácia</h3>
                            <hr class="left">
                            <p>Znamená prevzdušnenie trávnika. Zväčša sa vykonáva ako mechanická operácia hrotmi, či už plným alebo dutými, kedy sa z trávnika vylupujú jadrá trávnika aj so zeminou. Jej cieľom je znížiť zhutnenie a pôdy a dostať do pôdy viac vzduchu, živín a vody. Aerifikácia môže byť hrotová alebo lineárna a každá má svoje špecifiká a rôzne druhy hrotov či nožov na prevzdušnenie.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  row--equal-height-at-medium row--gutters-small generic-content-container">
                <div class="row__medium-4">
                    <div class="service">
                        <img class="service__photo" src="<?=bloginfo('template_directory')?>/images/dosev.jpg" alt=" ">
                        <div class="service__content">
                            <h3>Dosev</h3>
                            <hr class="left">
                            <p>Dosev trávnikov sa môže zdať ako jednoduchý proces, ktorého účelom je obnova a trávnika. Neexistuje žiadny univerzálny postup. Každá trávniková plocha je individuálna. V prípade dosevov tento proces ovplyňuje zloženie pôdy a podložia, frekvencie kosenia, možností používania vody a zálievky, frekvencie hnojenia, zaťažovania, svetelné podmienky a zatienenie, intenzita údržby.</p>
                        </div>
                    </div>
                </div>
                <div class="row__medium-4">
                    <div class="service">
                        <img class="service__photo" src="<?=bloginfo('template_directory')?>/images/ochrana.jpg" alt=" ">
                        <div class="service__content">
                            <h3>Chemická ochrana proti burinám a chorobám</h3>
                            <hr class="left">
                            <p>Minimalizácia buriny je skutočne dôležitá, ak chcete maximalizovať nielen estetický vzhľad vášho ihriska, ale aj hrateľnosť a odolnosť proti opotrebovaniu. Zároveň je chemická ochrana slúži aj ako prevencia proti chorobám, prípadne má kuratívny účinok.</p>
                        </div>
                    </div>
                </div>
                <div class="row__medium-4">
                    <div class="service">
                        <img class="service__photo" src="<?=bloginfo('template_directory')?>/images/hnojenie.jpg" alt=" ">
                        <div class="service__content">
                            <h3>Hnojenie</h3>
                            <hr class="left">
                            <p>Tráva vyžaduje dostatok živín na udržanie v dobrom zdravom stave. Príliš veľa živín môže viesť k trávniku, ktorý sa ľahko poškodzuje a má nízku toleranciu voči opotrebovaniu. Hracia plocha vyžaduje individuálny prístup a plán hnojenia je individuálny pre každé ihrisko. V našich podmienkach nie je úplne bežné, aby sa dal robiť pôdny rozbor. Možno by bolo dobré investovať do pôdneho testu, ktorý vám poskytne predstavu o stave mikroživín, Ph vašej pôdy, ak nemôžete dosiahnuť dobrú kvalitu trávnika.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

    <div id="testimonials" class="page-section  lazyload" data-section-link="#testimonials-link">
        <div class="wrapper ">
            <h2 class="section-title">Portfólio <strong>produktov</strong>
            </h2>
            <hr>

            <h2 class="headline headline--small headline--centered headline--no-t-margin "> Portfólio tovarov pre futbalové kluby </h2>

            <div class="tabswitcher products">
                <ul class="tabswitcher__menu">
                    <li role="presentation" class=""><a class="active" data-tab-name="osiva">Osivá</a></li>
                    <li role="presentation" class=""><a data-tab-name="hnojiva">Hnojivá</a></li>
                    <li role="presentation" class=""><a data-tab-name="lajnovacky">Lajnovačky a farby na trávniky</a></li>
                    <li role="presentation" class=""><a data-tab-name="vybavenie">Vybavenie športovísk</a></li>
                    <li role="presentation" class=""><a data-tab-name="zavlahy">Závlahy</a></li>
                </ul>


                <div class="tabswitcher__tab tabswitcher__tab--active" id="osiva">

                    <h3 class="products__description">Predaj trávnikového osiva na výsevy, dosev a regeneráciu trávnikov.</h3>

                    <div class="row row--equal-height-at-medium  row--gutters-small generic-content-container">

                        <div class="row__medium-4">
                            <div class="products__picture">
                                <img src="<?=bloginfo('template_directory')?>/images/austrosaat_ osivo.png" class="img-responsive border" alt="Project Title">
                            </div>
                        </div>

                        <div class="row__medium-4">
                            <div class="products__picture">
                                <img src="<?=bloginfo('template_directory')?>/images/barenbrug_logo osivo.jpg" class="img-responsive border"
                                     alt="Project Title">
                            </div>
                        </div>

                        <div class="row__medium-4">
                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/dlf-logo osivo.jpg" class="img-responsive border" alt="Project Title">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tabswitcher__tab" id="hnojiva">

                    <h3 class="products__description">Možnosť dodania granulovaných a tekutých hnojív na trávniky. Plány hnojenia na celú sezónu.</h3>

                    <div class="row row--equal-height-at-medium  row--gutters-large generic-content-containe">

                        <div class="row__medium-4">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/Compo_logo hnojivo.jpg" class="img-responsive" alt="Project Title">
                            </div>

                        </div>

                        <div class="row__medium-4">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/Hack-Logo-farbig hnojivo.jpg" class="img-responsive border"
                                     alt="Project Title">
                            </div>
                        </div>

                        <div class="row__medium-4">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/ICL-hnojivo.jpg" class="img-responsive border" alt="Project Title">
                            </div>

                        </div>

                    </div>
                </div>
                <div class="tabswitcher__tab" id="lajnovacky">

                    <h3 class="products__description">Nepremeškajte možnosť bezplatnej prezentácie profesionálnej lajnovačky na vašom futbalovom ihrisku. Vyplňte kontaktný formulár. Dohodneme si spoločný termín.</h3>

                    <div class="row row--equal-height-at-medium  row--gutters-large generic-content-containe">

                        <div class="row__medium-3">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/1l.jpg" class="img-responsive border" alt="Lajnovačky a farby na trávniky">
                            </div>

                        </div>

                        <div class="row__medium-3">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/2l.jpg" class="img-responsive border" alt="Lajnovačky a farby na trávniky">
                            </div>
                        </div>

                        <div class="row__medium-3">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/3l.jpg" class="img-responsive border" alt="Lajnovačky a farby na trávniky">
                            </div>
                        </div>

                        <div class="row__medium-3">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/4l.jpg" class="img-responsive border" alt="Lajnovačky a farby na trávniky">
                            </div>

                        </div>

                    </div>

                    <div class="row products__video">
                        <iframe  src="https://www.youtube.com/embed/bGOJH4j5KIQ"></iframe>
                    </div>
                </div>
                <div class="tabswitcher__tab" id="vybavenie">

                    <h3 class="products__description">Bránky, striedačky, tréningové doplnky, siete, lopty, dresy a iné športové vybavenie.</h3>

                    <div class="row row--equal-height-at-medium  row--gutters-large generic-content-containe">

                        <div class="row__medium-3">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/branka.jpg" class="img-responsive border" alt="Project Title">
                            </div>

                        </div>

                        <div class="row__medium-3">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/trening.jpg" class="img-responsive border" alt="Project Title">
                            </div>
                        </div>

                        <div class="row__medium-3">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/striedacka.jpg" class="img-responsive border" alt="Project Title">
                            </div>
                        </div>

                        <div class="row__medium-3">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/tabula.jpg" class="img-responsive border" alt="Project Title">
                            </div>

                        </div>

                    </div>
                </div>

                <div class="tabswitcher__tab" id="zavlahy">

                    <h3 class="products__description"> Návrh závlah, poradenstvo, rekonštrukcia a servis závlahových systémov. </h3>

                    <h4>Bez vody nie je život. Navrhneme optimálne riešenie podľa rozpočtu a možností klubu. V prípade
                        potreby pracujeme na etapy a závlahové systémy inštalujeme postupne počas viacerých sezón.

                        Dodávame podpovrchové závlahové systémy a mobilné zavlažovacie jednotky na futbalové ihriská</h4>

                    <div class="row row--equal-height-at-medium  row--gutters-large generic-content-containe">

                        <div class="row__medium-4">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/zavlaha1.jpg" class="img-responsive" alt="Project Title">
                            </div>

                        </div>

                        <div class="row__medium-4">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/zavlaha2.jpg" class="img-responsive"
                                     alt="Project Title">
                            </div>
                        </div>

                        <div class="row__medium-4">

                            <div class="products__picture">
                                <span class="helper"></span>
                                <img src="<?=bloginfo('template_directory')?>/images/zavlaha3.jpg" class="img-responsive" alt="Project Title">
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div id="testimonials" class="page-section  lazyload" data-section-link="#testimonials-link">
        <div class="wrapper ">
            <h2 class="section-title">Kontaktujte <strong>nás</strong>
            </h2>
            <hr>

            <h2 class="headline headline--small headline--centered headline--no-t-margin "> Neváhajte nás kontaktovať s vašou požiadavkou </h2>


            <form id="contactForm" novalidate="">
                <div class="row row--gutters-small">
                    <div class="row__medium-6">
                        <div class="form-group">
                            <input id="name" class="form-control" placeholder="Meno a priezvisko" required="required"
                                   aria-invalid="false" type="text">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row__medium-6">
                        <div class="form-group">
                            <input id="email" class="form-control" placeholder="Email" required="required"
                                   aria-invalid="false" type="email">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="row__medium-12">
                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Správa" required=""
                          aria-invalid="false"></textarea>
                    <p class="help-block text-danger"></p>
                </div>

                <div class="row__medium-12" style="text-align: center">
                    <button type="submit" class="btn btn-custom btn-lg">Odoslať</button>
                </div>
            </form>


        </div>

    </div>


<?php
get_footer();
