<!DOCTYPE html>
<html lang="es">
<head>
    <title>Boniviajes</title>
    <?php include_once('./template/head.php') ?>
</head>
<body>
    <?php include_once('./template/header.php') ?>
    <section id="main" class="form-desktop">
        <div>
            <div>
                <div>
                    <div class="slider fullscreen" data-interval="false">
                        <ul class="slides">
                            <li>
                                <img src="./assets/images/boni/Slides/boniviajes@2x.png" alt="inicio">
                            </li>
                            <li>
                                <img src="./assets/images/boni/Slides/nobu_loscabos@2x.png" alt="nobu">
                            </li>
                            <li>
                                <img src="./assets/images/boni/Slides/thegrand_mp_hotel@2x.png" alt="tgmp">
                            </li>
                            <li>
                                <img src="./assets/images/boni/Slides/azultalavera_hotel@2x.png" alt="azul">
                            </li>
                            <div class="col-md-6">
                                <form class="row pos-form col-md-11">
                                    <div class="col-md-12">
                                        <p class="c-white">Despreocúpate por los detalles, nosotros nos encargamos.</p>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" id="nombre" name="nCompleto"  class="style-inp validate" placeholder="Nombre" maxlength="20">
                                    </div>
                                    <div class="col-md-6 mt-10">
                                        <input type="mail" id="mail" name="correo" class="style-inp validate" placeholder="Correo electrónico">
                                    </div>
                                    <div class="col-md-6 mt-10">
                                        <div class="col-md-4 pl-0">
                                            <select id="lada" name="lada" class="browser-default style-inp">
                                                <option value="" selected>Lada</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8 pl-0 pr-0">
                                            <input type="text" id="phone" name="phone1" class="style-inp validate col-md-6" placeholder="Teléfono" maxlength="10" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-10">
                                        <input type="text" id="viaje" name="destino" class="style-inp validate" placeholder="¿A dónde viajas?" maxlength="20">
                                    </div>
                                    <div class="col-md-12 mt-10">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input filled-in" id="checkTerminos">
                                            <label class="form-check-label f-12 c-white" for="checkTerminos">He leído los <a href="terminos" target="_blank" class="c-gray f-12">Términos & Condiciones</a> y el <a href="aviso-priv" target="_blank" class="c-gray f-12">Aviso de privacidad</a></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-10">
                                        <a href="thanks" id="enviarCorreo" class="btn col-md-12 materialize-red white-text f-50 f-medium" style="text-transform: capitalize;" disabled>¡Llámame!</a>
                                    </div>
                                </form>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="top">
        <div id="formRes" class="col-md-12 mt-20">
            <form id="form-send-responsive" class="row col-md-11 form-mobile">
                <div class="col-md-12">
                    <p class="c-gray-dark h3 mb-10">Despreocúpate por los detalles, nosotros nos encargamos.</p>
                </div>
                <div class="col-md-12 mt-15">
                    <input type="text" id="nombreRes" name="nCompleto" class="style-inp validateRes" placeholder="Nombre">
                </div>
                <div class="col-md-6 col-xs-12 mt-15">
                    <input type="mail" id="mailRes" name="correo" class="style-inp validateRes" placeholder="Correo electrónico">
                </div>
                <div class="col-md-6 col-xs-12 mt-10">
                    <div class="col-xs-4 pl-0">
                        <select id="ladaRes" name="lada" class="browser-default style-inp">
                            <option value="" selected>Lada</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div class="col-xs-8 pl-0 pr-0">
                        <input type="text" id="phoneRes" name="phone1" class="style-inp validate col-md-6" placeholder="Teléfono" maxlength="10" disabled>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 mt-20">
                    <input type="text" id="viajeRes" name="destino" class="style-inp validateRes" placeholder="¿A dónde viajas?">
                </div>
                <div class="col-md-12 col-xs-12 mt-15">
                    <input type="checkbox" class="checkbox-indigo filled-in" id="checkTerminosRes">
                    <label class="form-check-label f-10 c-white" for="checkTerminosRes">He leído los <a href="terminos" target="_blank" class="c-gray f-10">Términos & Condiciones</a> y el <a href="aviso-priv" target="_blank" class="c-gray f-10">Aviso de privacidad</a></label>
                </div>
                <div class="col-md-12 col-xs-12 mt-15">
                    <a href="thanks.php" id="enviarCorreoRes" class="btn col-md-12 col-xs-12 materialize-red white-text f-50 f-medium" style="text-transform: capitalize;" disabled>¡Llámame!</a>
                </div>
            </form>
        </div>
    </section>
    <section id="banners">
        <div class="w-90 m-auto">
            <div class="col-md-12 mb-50">
                <a href="home">
                    <img class="w-100" src="./assets/images/gallery/s3.jpeg" alt="" height="200">
                </a>
            </div>
        </div>
    </section>
    <div class="w-90 m-auto">
        <section id="hoteles">
            <div class="rows">
                <div class="container">
                    <div class="text-center">
                        <h1 class="text-uppercase f-medium f-30">
                            Top <span class="c-yellow h1 f-medium f-30">HOTELES</span>
                        </h1>
                    </div>
                    <div class="row row_promos p-15">
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Hoteles de lujo/nobu.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="text-uppercase f-medium f-res-20">Nobu Hotel Los Cabos</h4>
                                    <small class="c-red f-8">Desde</small>
                                    <p class="c-red f-16">$7,924*<span class="fs-8">/Noche</span></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Hoteles de lujo/grandvelas_cabos@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="text-uppercase f-medium f-res-20">Grand Velas Los Cabos</h4>
                                    <small class="c-red f-8">Desde</small>
                                    <p class="c-red f-16">$26,291*<span class="fs-8">/Noche</span></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Hoteles de lujo/rosewood.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="mb-0 text-uppercase f-medium f-res-20">Rosewood San Miguel Allende</h4>
                                    <small class="c-red f-8">Desde</small>
                                    <p class="c-red f-16">$9,000*<span class="fs-8">/Noche</span></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Hoteles de lujo/santisimatrinidad_hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="text-uppercase f-medium f-res-20">Santísima Trinidad</h4>
                                    <small class="c-red f-8">Desde</small>
                                    <p class="c-red f-16">$5,400*<span class="fs-8">/Noche</span></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Hoteles de lujo/azultalavera-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="text-uppercase f-medium f-res-20">Azul Talavera</h4>
                                    <small class="c-red f-8">Desde</small>
                                    <p class="c-red f-16">$4,803*<span class="fs-8">/Noche</span></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
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
                            <span class="c-yellow h1 f-medium f-30">PAQUETES</span></h1>
                    </div>
                    <div class="row row_promos p-15">
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Hoteles de lujo/grandmoonpalace-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="text-uppercase f-medium f-res-20">The Grand Moon Palace </h4>
                                    <small class="c-red f-8">Desde</small>
                                    <p class="c-red f-16">$14,090*<span class="fs-8">/Persona</span></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Hoteles de lujo/hardrock-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="mb-0 text-uppercase f-medium f-res-20">Hard Rock Hotel Cancun</h4>
                                    <small class="c-red f-8">Desde</small>
                                    <p class="c-red f-16">$9,067*<span class="fs-8">/Persona</span></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Hoteles de lujo/dreams_playamuejeres_hoteles@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="mb-0 text-uppercase f-medium f-res-20">Dreams Playa Mujeres Golf Resort & Spa</h4>
                                    <small class="c-red f-8">Desde</small>
                                    <p class="c-red f-16">$8,362*<span class="fs-8">/Persona</span></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Hoteles de lujo/unico-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="text-uppercase f-medium f-res-20">UNICO 20ºN 87ºW</h4>
                                    <small class="c-red f-8">Desde</small>
                                    <p class="c-red f-16">$11,765*<span class="fs-8">/Persona</span></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Hoteles de lujo/grandvelasvallarta-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="mb-0 text-uppercase f-medium f-res-20">GRAND VELAS RIVIERA NAYARIT</h4>
                                    <small class="c-red f-8">Desde</small>
                                    <p class="c-red f-16">$17,868*<span class="fs-8">/Persona</span></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
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
                            <span class="c-yellow h1 f-medium f-30">DESTINOS</span>
                        </h1>
                    </div>
                    <div class="row row_promos">
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Destinos/loscabos@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="mb-0 text-uppercase f-medium f-res-20">Los Cabos</h4>
                                    <small class="c-red f-8"></small>
                                    <p class="c-red f-16"></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Destinos/rivieramaya@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="mb-0 text-uppercase f-medium f-res-20">Cancún</h4>
                                    <small class="c-red f-8"></small>
                                    <p class="c-red f-16"></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Destinos/sma_destinos@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="mb-0 text-uppercase f-medium f-res-20">San miguel</h4>
                                    <small class="c-red f-8"></small>
                                    <p class="c-red f-16"></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Destinos/puebla.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="mb-0 text-uppercase f-medium f-res-20">puebla</h4>
                                    <small class="c-red f-8"></small>
                                    <p class="c-red f-16"></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-20 col-sm-6 col-xs-12 mt-20-card">
                            <div class="v_place_img">
                                <img src="./assets/images/boni/Destinos/vallarta_destinos@2x.png" alt="Tour Booking" title="Tour Booking">
                            </div>
                            <div class="b_pack rows pre-15">
                                <div class="col-md-12 col-sm-12 p-15">
                                    <h4 class="mb-0 text-uppercase f-medium f-res-20">puerto vallarta</h4>
                                    <small class="c-red f-8"></small>
                                    <p class="c-red f-16"></p>
                                    <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                    <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="f-book mt-15 fs-8 c-gray">*Aplican restricciones, términos y condiciones.Tarifas sujetas a disponibilidad y cambio sin previo aviso. Impuestos y cobros excluidos.</p>
                </div>
            </div>
        </section>
    </div>
    <?php include_once('./template/contact_buttons.php') ?>

    <?php include_once('./template/footer.php') ?>
    <script src="./assets/js/jquery-latest.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/materialize.min.js"></script>
    <script src="./assets/js/custom.js"></script>
    <script src="./assets/js/function.min.js"></script>
    <script src="./assets/js/form.min.js"></script>
    <script src="./assets/js/form-responsive.js"></script>
</body>
</html>
