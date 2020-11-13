<!DOCTYPE html>
<html lang="es">
<head>
    <title>Boniviajes</title>
    <?php include_once('./template/head.php') ?>
</head>
<body>
    <?php include_once('./template/header.php') ?>
    <section id="main" class="mx-width form-desktop">
        <div>
            <div>
                <div>
                    <div class="slider fullscreen" data-interval="false">
                        <ul class="slides">
                            <li>
                                <img src="./assets/images/boni/Slides/grandvelas_loscabos.png" alt="cabos">
                            </li>
                            <li>
                                <img src="./assets/images/boni/Slides/nobu_loscabos.png" alt="nobu">
                            </li>
                            <li>
                                <img src="./assets/images/boni/Slides/rosewood_sma.png" alt="">
                            </li>
                            <div class="col-md-6">
                                <form class="row pos-form col-md-11">
                                    <div class="col-md-12">
                                        <p class="c-white">Despreocúpate por los detalles, nosotros nos encargamos.</p>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" id="nombre" class="style-inp" placeholder="Nombre">
                                    </div>
                                    <div class="col-md-6 mt-15">
                                        <input type="mail" id="mail" class="style-inp" placeholder="Correo electrónico">
                                    </div>
                                    <div class="col-md-6 mt-15">
                                        <input type="text" id="phone" class="style-inp" placeholder="Teléfono">
                                    </div>
                                    <div class="col-md-12 mt-15">
                                        <input type="text" id="viaje" class="style-inp" placeholder="¿A dónde viajas?">
                                    </div>
                                    <div class="col-md-12 mt-15">
                                        <input type="checkbox" class="checkbox-indigo filled-in" id="filled-in-box"
                                            checked="checked">
                                        <label for="filled-in-box" class="f-14 c-white">He leído los Términos y condiciones y el Aviso de privacidad</label>
                                    </div>
                                    <div class="col-md-12 mt-15">
                                        <a class="btn col-md-12 materialize-red white-text f-50 f-medium" data-toggle="modal" data-target="#myModal2" style="text-transform: capitalize;">¡Llámame!</a>
                                    </div>
                                </form>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog form-desktop">
            <div class="modal-content">
                <div class="text-center content-modal-call">
                    <h1>¡GRACIAS!</h1>
                    <p>Tu solicitud se envió correctamente.</p>
                    <p>Déjanos consentirte, nuestros concierge te llamará ahora.</p>
                    <a href="#" data-dismiss="modal">Continuar</a>
                </div>
                <img class="w-100" src="assets/images/boni/gracias2.png" alt="">
            </div>
        </div>
        <div class="modal-dialog d-mobile">
            <div class="modal-content">
                <div class="text-center content-modal-call">
                    <h4>¡GRACIAS!</h4>
                    <p class="f-18">Tu solicitud se envió correctamente.</p>
                    <p class="f-18" style="width: 60%; margin: auto;">Déjanos consentirte, nuestros concierge te llamará ahora.</p>
                    <a href="#" data-dismiss="modal" class="mt-15">Continuar</a>
                </div>
                <img class="w-100" src="assets/images/boni/gracias2.png" alt="">
            </div>
        </div>
    </div>
    <section id="top">
        <div class="col-md-12 mt-20">
            <form class="row col-md-11 form-mobile">
                <div class="col-md-12">
                    <p class="c-gray-dark h3 mb-10">Despreocúpate por los detalles, nosotros nos encargamos.</p>
                </div>
                <div class="col-md-12 mt-15">
                    <input type="text" id="nombre" class="style-inp" placeholder="Nombre">
                </div>
                <div class="col-md-6 col-xs-6 mt-15">
                    <input type="mail" id="mail" class="style-inp" placeholder="Correo electrónico">
                </div>
                <div class="col-md-6 col-xs-6 mt-15">
                    <input type="text" id="phone" class="style-inp" placeholder="Teléfono">
                </div>
                <div class="col-md-12 col-xs-12 mt-20">
                    <input type="text" id="viaje" class="style-inp" placeholder="¿A dónde viajas?">
                </div>
                <div class="col-md-12 col-xs-12 mt-15">
                    <input type="checkbox" class="checkbox-indigo filled-in" id="filled-in-box"
                        checked="checked">
                    <label for="filled-in-box" class="f-10 c-gray-dark"><small>He leído los Términos y condiciones y el Aviso de privacidad</small></label>
                </div>
                <div class="col-md-12 col-xs-12 mt-15">
                    <a class="btn col-md-12 col-xs-12 materialize-red white-text f-50 f-medium" data-toggle="modal" data-target="#myModal2" style="text-transform: capitalize;">¡Llámame!</a>
                </div>
            </form>
        </div>
        <div class="rows">
            <div class="container">
                <div class="text-center p-15">
                    <h1 class="text-uppercase f-medium">
                        Top <span class="c-yellow h1 f-medium">HOTELS</span>
                    </h1>
                    <div class="title-line">
                        <div class="tl-1"></div>
                    </div>
                </div>
                <div class="row row_promos">
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Nobu</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$24,000</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#grandMoon" aria-expanded="false"><i class="fa fa-plus f-8"></i> INFORMACIÓN</button>
                                <div id="grandMoon" class="collapse" aria-expanded="false" style="height: 0px;">
                                    <p class="f-14 f-light">
                                        La simplicidad, diseño y gastronomía de Nobu Restaurante se extiende en cada rincón del complejo, 
                                        desde sus habitaciones, la arquitectura, el Spa y el servicio.
                                        Tranquiliza tu mente con las mejores vistas al mar desde tu habitación o relájate en el jardín de hidroterapia al aire libre.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 mb-0 text-uppercase f-medium">Grand Velas Los Cabos</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$41,000</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#hardRock" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="hardRock" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                       Resort con 5 diamantes y una maravillosa piscina infinita de tres niveles frente al mar.
                                       Descubre sus creaciones culinarias en el restaurante francés, italiano, mexicano o cocina de autor, 
                                       Chef galardonado on estrellas Michellin. No olvides experimentar el atardecer a bordo de sus yates.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 mb-0 text-uppercase f-medium">Rosewood San Miguel</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$12,800</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#mujeres4" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="mujeres4" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                       El arte, la cultura y el encanto de San Miguel se combinan con la arquitectura colonial.
                                       Hospédate con tranquilidad en una residencia privada. Alivia tu cuerpo con una de las técnicas ancestrales Otomís que ofrece el Spa.
                                       Aprecia el increíble atardecer desde el rooftop bar y deleita tus sentidos con la oferta gastronómica de Rosewood San Miguel.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 mb-0 text-uppercase f-medium">Santísima Trinidad</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$5,400</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#mujeres3" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="mujeres3" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                        Escapa del estrés de la ciudad y encuentra abrigo en este centro dedicado al vino, la lavanda y la relajación.
                                        Conoce el vino mexicano de estas bodegas y permite que acompañe los momentos más valiosos.
                                        Desconecta en una de sus villas o en habitaciones de dos pisos. Disfruta los viñedos en bicicleta y cena en el lago.
                                   </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Azul Talavera</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$10,700</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#mujeres2" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="mujeres2" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                   Respira la herencia histórica de Puebla sin salir del hotel, con las mejores vistas de la ciudad, 
                                   disfruta la piscina mientras admiras la grandeza colonial de la ciudad, el Popocatépetl y el Ixtlacihuatl.
                                   La cocina tradicional, el detalle de la Talavera y el jardín con vistas a la capilla rosa.
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="lifestyle">
        <div class="rows">
            <div class="container">
                <div class="text-center p-15">
                    <h1 class="text-uppercase f-medium">
                        MY <span class="c-yellow h1 f-medium">LIFESTYLE</span></h1>
                    <div class="title-line">
                        <div class="tl-1"></div>
                    </div>
                    <!-- <p class="c-gray h3">Paquetes</p> -->
                </div>
                <div class="row row_promos">
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="text-uppercase f-medium">The Grand Moon Palace </h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$22,000</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#nobu" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="nobu" class="collapse" aria-expanded="false" style="height: 0px;">
                                    <p class="f-14 f-light">
                                        Disfruta cada día de una experiencia diferente, deportes acuáticos, el Mar Caribe y los espectáculos.
                                        Recorre el mundo a través de sus propuestas culinarias, Perú México, Asia, Líbano, Italia, 
                                        Francia y termina tu día con un tratamiento en el Spa.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="text-uppercase f-medium">Hard Rock</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#sanMiguel" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="sanMiguel" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                        Vacaciona como una estrella en el mar Caribe, experimenta el Music Lab, juega tenis, 
                                        disfruta el atardecer en uno de los Pool bars, los espectáculos nocturnos o el Rock Spa.
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Dreams Playa Mujeres Golf Resort & Spa</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$30,400</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#grandCabos" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="grandCabos" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                        Juega en el campo de Golf rodeado de un paisaje selvático único. Diviértete en el parte acuático o relájate con una clase de yoga.
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Secrets Playa Mujeres Golf Resort & Spa</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$30,400</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#playaMujeres1" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="playaMujeres1" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                        Desconéctate en este hotel solo adultos y disfruta del campo de Golf diseñado por Greg Norman.
                                        Cultiva tus sentidos con una cata de vino o tequila o disfruta de la oferta gastronómica.
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Grand Velas Puerto Vallarta</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$33,658.80</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#playaMujeres" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="playaMujeres" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                        Descubre sus creaciones culinarias en el restaurante francés, italiano, especialidades locales o el sports bar.
                                        Disfruta de las playas del pacífico en estas fiestas decembrinas o disfruta de las ceremonias de agua en el Spa.
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="trendy">
        <div class="rows">
            <div class="container">
                <div class="text-center p-15">
                    <h1 class="text-uppercase f-medium">
                        TRENDY <span class="c-yellow h1 f-medium">DESTINATIONS</span>
                    </h1>
                    <div class="title-line">
                        <div class="tl-1"></div>
                    </div>
                    <!-- <p class="c-gray h3">Paquetes</p> -->
                </div>
                <div class="row row_promos">
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Los Cabos</h4>
                                <small class="c-red f-8"></small>
                                <p class="c-red f-16"></p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#puebla" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="puebla" class="collapse" aria-expanded="false" style="height: 0px;">
                                    <p class="f-14 f-light">
                                        Vive el desierto, descubre un oasis o bucea en uno de los arrecifes más antiguos de America del Norte.
                                        Absorbe la energía de la noche, disfruta de su identidad gastronómica o encuentra descanso en uno de las grandes Spas de la región.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Cancún</h4>
                                <small class="c-red f-8"></small>
                                <p class="c-red f-16"></p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#cabos" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="cabos" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                        Reconoce todos los azules del mar, explora las zonas arqueológicas, despierta con las olas, revive la historia y el patrimonio ancestral,
                                        convive con delfines o crea memorias en familia.
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">San miguel</h4>
                                <small class="c-red f-8"></small>
                                <p class="c-red f-16"></p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#riviera" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="riviera" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                        Entre calles y callejones revive las leyendas perdidas, admira la arquitectura, siente la música y las fiestas locales.
                                        Absorbe el arte y la cultura, recorre valles, viñedos y campos de lavanda.
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">puebla</h4>
                                <small class="c-red f-8"></small>
                                <p class="c-red f-16"></p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#puebla2" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="puebla2" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                       Guíate por el dulce olor del Convento de Santa Clara, degusta el sabor barroco del mole y refresca tu día con sidra.
                                       Admira su espíritu colonial, viste tu mesa de Talavera o recorre un museo y revive la historia nacional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">puerto vallarta</h4>
                                <small class="c-red f-8"></small>
                                <p class="c-red f-16"></p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#cabos2" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="cabos2" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light">
                                       Disfruta los atardeceres del Pacífico, pasea por el malecón, disfruta sus pintorescos paisajes, juega golf, 
                                       practica surf o asómbrate con la alberca natural de agua salada.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="away" hidden>
        <div class="rows">
            <div class="container">
                <div class="text-center p-15">
                    <h1 class="text-uppercase f-medium">
                        SAIL <span class="c-yellow h1 f-medium">AWAY</span>
                    </h1>
                    <div class="title-line">
                        <div class="tl-1"></div>
                    </div>
                </div>
                <div class="row row_promos">
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#b1" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="b1" class="collapse" aria-expanded="false" style="height: 0px;">
                                    <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#b2" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="b2" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#b3" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="b3" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#b4" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="b4" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase f-medium">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <a href="#main" class="btn col-md-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#b5" aria-expanded="false">+ INFORMACIÓN</button>
                                    <div id="b5" class="collapse" aria-expanded="false" style="height: 0px;">
                                <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v9.0'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
        (document, 'script', 'facebook-jssdk'));
    </script>
    <div class="fb-customerchat" attribution=setup_tool page_id="562977607842181" logged_in_greeting="¡Hola! ¿Cómo puedo ayudarte?" logged_out_greeting="¡Hola! ¿Cómo puedo ayudarte?"></div>
    <!-- btns call to action -->
    <div class="wrapper_call_acction">
        <a target=”_blank” href="https://api.whatsapp.com/send?phone=525518971284&text=%C2%A1Hola,%20este%20es%20un%20mensaje%20de%20prueba%20%F0%9F%A4%96!">
            <img class="mt-15 mb-15" src="assets/images/boni/whatsapp.svg" alt="wa">
        </a>
        <!-- Load Facebook SDK for JavaScript -->
    </div>
    <?php include_once('./template/footer.php') ?>
    <script src="./assets/js/jquery-latest.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/materialize.min.js"></script>
    <script src="./assets/js/custom.js"></script>
    <script src="./assets/js/function.min.js"></script>
    <script src="//code.tidio.co/qhv2citaquldyh7hvjxpbg5o3zsc6r3o.js" async></script>
</body>
</html>