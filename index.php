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
                                    <div class="col-md-6 mt-10">
                                        <input type="mail" id="mail" class="style-inp" placeholder="Correo electrónico">
                                    </div>
                                    <div class="col-md-6 mt-10">
                                        <input type="text" id="phone" class="style-inp" placeholder="Teléfono">
                                    </div>
                                    <div class="col-md-12 mt-10">
                                        <input type="text" id="viaje" class="style-inp" placeholder="¿A dónde viajas?">
                                    </div>
                                    <div class="col-md-12 mt-10">
                                        <input type="checkbox" class="checkbox-indigo filled-in" id="filled-in-box">
                                        <label for="filled-in-box" class="f-12 c-white">He leído los <a href="terminos.php" class="c-gray f-12">Términos & Condiciones</a> y el <a href="aviso-priv.php" class="c-gray f-12">Aviso de privacidad</a></label>
                                    </div>
                                    <div class="col-md-12 mt-10">
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
                    <p>Déjanos consentirte, nuestro concierge te llamará ahora.</p>
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
                    <p class="f-18" style="width: 60%; margin: auto;">Déjanos consentirte, nuestro concierge te llamará ahora.</p>
                    <a href="#" data-dismiss="modal" class="mt-15">Continuar</a>
                </div>
                <img class="w-100" src="assets/images/boni/gracias2.png" alt="">
            </div>
        </div>
    </div>
    <section id="top">
        <div id="main" class="col-md-12 mt-20">
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
                    <input type="checkbox" class="checkbox-indigo filled-in" id="filled-in-box">
                    <label for="filled-in-box" class="f-10 c-gray-dark"><small>He leído los Términos y condiciones y el Aviso de privacidad</small></label>
                </div>
                <div class="col-md-12 col-xs-12 mt-15">
                    <a class="btn col-md-12 col-xs-12 materialize-red white-text f-50 f-medium" data-toggle="modal" data-target="#myModal2" style="text-transform: capitalize;">¡Llámame!</a>
                </div>
            </form>
        </div>
        <div class="rows">
            <div class="container">
                <div class="text-center">
                    <h1 class="text-uppercase f-medium f-30">
                        Top <span class="c-yellow h1 f-medium f-30">HOTELS</span>
                    </h1>
                </div>
                <div class="row row_promos p-15">
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Hoteles de lujo/nobu.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 text-uppercase f-medium">Nobu</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$24,000</p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Hoteles de lujo/grandvelas_cabos@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 mb-0 text-uppercase f-medium">Grand Velas Los Cabos</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$41,000</p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Hoteles de lujo/rosewood.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 mb-0 text-uppercase f-medium">Rosewood San Miguel</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$12,800</p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Hoteles de lujo/santisimatrinidad_hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 mb-0 text-uppercase f-medium">Santísima Trinidad</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$5,400</p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Hoteles de lujo/azultalavera-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 text-uppercase f-medium">Azul Talavera</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$10,700</p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
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
                <div class="text-center">
                    <h1 class="text-uppercase f-medium f-30">
                        MY <span class="c-yellow h1 f-medium f-30">LIFESTYLE</span></h1>
                </div>
                <div class="row row_promos p-15">
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Hoteles de lujo/grandmoonpalace-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="text-uppercase f-medium">The Grand Moon Palace </h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$22,000</p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Hoteles de lujo/hardrock-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="text-uppercase f-medium">Hard Rock</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Hoteles de lujo/dreams_playamuejeres_hoteles@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 text-uppercase f-medium">Dreams Playa Mujeres Golf Resort & Spa</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$30,400</p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Hoteles de lujo/secrets-hotels@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 text-uppercase f-medium">Secrets Playa Mujeres Golf Resort & Spa</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$30,400</p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Hoteles de lujo/grandvelasvallarta-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 text-uppercase f-medium">Grand Velas Puerto Vallarta</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$33,658.80</p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
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
                <div class="text-center">
                    <h1 class="text-uppercase f-medium f-30">
                        TRENDY <span class="c-yellow h1 f-medium f-30">DESTINATIONS</span>
                    </h1>
                </div>
                <div class="row row_promos">
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Destinos/loscabos@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 text-uppercase f-medium">Los Cabos</h4>
                                <small class="c-red f-8"></small>
                                <p class="c-red f-16"></p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Destinos/rivieramaya@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 text-uppercase f-medium">Cancún</h4>
                                <small class="c-red f-8"></small>
                                <p class="c-red f-16"></p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Destinos/sma_destinos@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 text-uppercase f-medium">San miguel</h4>
                                <small class="c-red f-8"></small>
                                <p class="c-red f-16"></p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Destinos/puebla.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 text-uppercase f-medium">puebla</h4>
                                <small class="c-red f-8"></small>
                                <p class="c-red f-16"></p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
                            </div>
                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                        <div class="v_place_img">
                            <img src="./assets/images/boni/Destinos/vallarta_destinos@2x.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
                                <h4 class="mb-0 text-uppercase f-medium">puerto vallarta</h4>
                                <small class="c-red f-8"></small>
                                <p class="c-red f-16"></p>
                                <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap">Llámame</a href="#main">
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
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
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
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
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
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
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
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
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
                        <div class="b_pack rows pre-15">
                            <div class="col-md-12 col-sm-12 p-15">
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
        document.getElementsByTagName('iframe')[1].style.top = '70%';
    </script>
    <div class="fb-customerchat" attribution=setup_tool page_id="562977607842181" logged_in_greeting="¡Hola! ¿Cómo puedo ayudarte?" logged_out_greeting="¡Hola! ¿Cómo puedo ayudarte?"></div>
    <!-- btns call to action -->
    <div class="wrapper_call_acction">
        <a target=”_blank” href="https://api.whatsapp.com/send?phone=5215561220592&text=%C2%A1Hola,%20este%20es%20un%20mensaje%20de%20prueba%20%F0%9F%A4%96!">
            <img class="mt-15 mb-15" src="assets/images/boni/whatsapp.svg" alt="wa">
        </a>
    </div>
    <?php include_once('./template/footer.php') ?>
    <script src="./assets/js/jquery-latest.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/materialize.min.js"></script>
    <script src="./assets/js/custom.js"></script>
    <script src="./assets/js/function.min.js"></script>
    <script src="//code.tidio.co/qhv2citaquldyh7hvjxpbg5o3zsc6r3o.js" async></script>
    <script>
    </script>
</body>
</html>