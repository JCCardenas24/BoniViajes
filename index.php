<!DOCTYPE html>
<html lang="es">
<head>
    <title>Boniviajes</title>
    <?php include_once('./template/head.php') ?>
</head>
<body>
    <?php include_once('./template/header.php') ?>
    <section class="mx-width">
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
                                        <a class="btn col-md-12 materialize-red white-text f-50 fw-b" data-toggle="modal" data-target="#myModal2" style="text-transform: capitalize;">¡Llámame!</a>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="text-center content-modal-call">
                    <h1>¡GRACIAS!</h1>
                    <p>Tu solicitud se envió correctamente
                        Déjanos consentirte uno de nuestros ejecutivos te llamara ahora.</p>
                    <a href="#" data-dismiss="modal">Continuar</a>
                </div>
                <img class="w-100" src="assets/images/boni/gracias2.png" alt="">
            </div>
        </div>
    </div>
    <section id="top">
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
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0 text-uppercase">The Grand Moon Palace</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                    <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
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
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                    <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="destinations">
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
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                    <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="away">
        <div class="rows">
            <div class="container">
                <div class="text-center p-15">
                    <h1 class="text-uppercase f-medium">
                        SAIL <span class="c-yellow h1 f-medium">AWAY</span>
                    </h1>
                    <div class="title-line">
                        <div class="tl-1"></div>
                    </div>
                    <!-- <p class="c-gray h3">Paquetes</p> -->
                </div>
                <div class="row row_promos">
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                    <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="w-20 col-sm-6 col-xs-12">
                        <div class="v_place_img">
                            <img src="./assets/images/hotels/img_1.png" alt="Tour Booking" title="Tour Booking">
                        </div>
                        <div class="b_pack rows">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="mb-0">Bundle 1</h4>
                                <small class="c-red f-8">Desde</small>
                                <p class="c-red f-16">$20,400</p>
                                <button
                                    class="btn col-md-12 btn-yellow white-text mb-10 radius-0 fw-b mb-0 txt-cap">Llámame</button>
                                <button type="button" class="btn btn_more_info collapsed" data-toggle="collapse"
                                    data-target="#demo" aria-expanded="false">+ INFORMACIÓN</button>
                                <!-- <div id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                                   <p class="f-14 f-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    </section>
    <!-- btns call to action -->
    <div class="wrapper_call_acction">
        <img src="assets/images/boni/red.png" alt="">
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
</body>

</html>