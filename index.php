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
                                        <div class="col-md-4 pl-0 pr-0">
                                            <select id="lada" name="lada" class="browser-default style-inp">
                                                <option value="">Lada</option>
                                                <option value="MX +52" selected>MX +52</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8 pl-0 pr-0">
                                            <input type="text" id="phone" name="phone1" class="style-inp validate col-md-6" placeholder="Teléfono" maxlength="10">
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
            <form class="row col-md-11 form-mobile">
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
                    <div class="col-xs-4 pl-0 pr-0">
                        <select id="ladaRes" name="lada" class="browser-default style-inp">
                            <option value="">Lada</option>
                            <option value="MX +52" selected>MX +52</option>
                        </select>
                    </div>
                    <div class="col-xs-8 pl-0 pr-0">
                        <input type="text" id="phoneRes" name="phone1" class="style-inp validate col-md-6" placeholder="Teléfono" maxlength="10">
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
        <div class="row w-80 m-auto form-desktop">
            <div class="col-md-4">
                <img class="w-100" src="./assets/images/boni/categorias/Premium@2x.png" alt="premium">
            </div>
            <div class="col-md-4">
                <a href="home">
                    <img class="w-100" src="./assets/images/boni/categorias/Lujo@2x.png" alt="lujo">
                </a>
            </div>
            <div class="col-md-4">
                <img class="w-100" src="./assets/images/boni/categorias/Turista@2x.png" alt="turista">
            </div>
        </div>
        <div class="slider1 mt-20 d-mobile">
            <div class="col-md-4"><a href="home"><img class="w-100" src="./assets/images/boni/categorias/Lujo@2x.png" alt=""></a></div>
            <div class="col-md-4"><img class="w-100" src="./assets/images/boni/categorias/Premium@2x.png" alt=""></div>
            <div class="col-md-4"><img class="w-100" src="./assets/images/boni/categorias/Turista@2x.png" alt=""></div>
        </div>
    </section>
    <div class="row w-80 m-auto">
        <div class="col-md-10 col-lg-9">
            <section id="hoteles">
                <div class="row mt-20">
                    <div class="container">
                        <div class="text-center">
                            <h1 class="text-uppercase f-medium f-30">
                                Top <span class="c-yellow h1 f-medium f-30">HOTELES</span>
                            </h1>
                        </div>
                        <div class="row row_promos p-15">
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/nobu.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">Nobu Hotel Los Cabos</h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$7,924*<span class="fs-20">/Noche</span></p>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/grandvelas_cabos@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20 text-center">Grand Velas Los Cabos</h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$26,291*<span class="fs-20">/Noche</span></p>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/rosewood.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">Rosewood San Miguel Allende</h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$9,000*<span class="fs-20">/Noche</span></p>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/santisimatrinidad_hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">Santísima Trinidad</h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$5,400*<span class="fs-20">/Noche</span></p>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/azultalavera-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">Azul Talavera</h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$4,803*<span class="fs-20">/Noche</span></p>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/azultalavera-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">Azul Talavera</h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$4,803*<span class="fs-20">/Noche</span></p>
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
                                <span class="c-yellow h1 f-medium f-30">PAQUETES</span>
                            </h1>
                        </div>
                        <div class="row row_promos p-15">
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/grandmoonpalace-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">The Grand Moon Palace </h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$14,090*<span class="fs-20">/Persona</span></p>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/hardrock-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">Hard Rock Hotel Cancun</h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$9,067*<span class="fs-20">/Persona</span></p>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/dreams_playamuejeres_hoteles@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">Dreams Playa Mujeres Golf Resort</h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$8,362*<span class="fs-20">/Persona</span></p>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/unico-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">UNICO 20ºN 87ºW</h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$11,765*<span class="fs-20">/Persona</span></p>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/grandvelasvallarta-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">GRAND VELAS RIVIERA NAYARIT</h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$17,868*<span class="fs-20">/Persona</span></p>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/grandvelasvallarta-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">GRAND VELAS RIVIERA NAYARIT</h4>
                                        <small class="c-red f-15">Desde</small>
                                        <p class="c-red fs-20">$17,868*<span class="fs-20">/Persona</span></p>
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
                        <div class="row row_promos p-15">
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/grandmoonpalace-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">The Grand Moon Palace </h4>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/hardrock-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">Hard Rock Hotel Cancun</h4>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/dreams_playamuejeres_hoteles@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">Dreams Playa Mujeres Golf Resort</h4>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/unico-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">UNICO 20ºN 87ºW</h4>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/grandvelasvallarta-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">GRAND VELAS RIVIERA NAYARIT</h4>
                                        <a href="#main" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 form-desktop">Llámame</a>
                                        <a href="#formRes" class="btn col-md-12 col-xs-12 btn-yellow white-text mb-10 radius-0 f-bold mb-0 txt-cap p-15 d-mobile">Llámame</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mt-20-card">
                                <div class="v_place_img">
                                    <img src="./assets/images/boni/Hoteles de lujo/grandvelasvallarta-hotel@2x.png" alt="Tour Booking" title="Tour Booking">
                                </div>
                                <div class="b_pack rows pre-15">
                                    <div class="col-md-12 col-sm-12 p-15 text-center">
                                        <h4 class="text-uppercase f-medium f-res-20">GRAND VELAS RIVIERA NAYARIT</h4>
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
        <aside class="col-md-10 col-lg-3 pl-0 form-desktop" style="margin-top: 100px">
            <img class="w-100" src="./assets/images/gallery/s10.jpg" alt="img">
        </aside>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script>
         $('.slider1').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,

        });
    </script>
    <script>
      // LADA
      $(function() {
        _url = "https://gist.githubusercontent.com/Goles/3196253/raw/9ca4e7e62ea5ad935bb3580dc0a07d9df033b451/CountryCodes.json";
        $.get(_url, function(data) {
          $.each(data, function(index, item) {
            $('#lada, #ladaRes').append('<option value="' + item.code + ' ' + item.dial_code + '">' + item.code + ' ' + item.dial_code + '</option>');
          })
        }, 'json');

        // Thank you pages
        $('#enviarCorreo, #enviarCorreoRes').on('click', function(event) {
          _form = $(this).closest('form');
          _href = $(this).attr('href');

          event.preventDefault();
          if('boniviajes.com' == location.host || 'qaboniviajes.boniviajes.com' == location.host) {
            _url = "/assets/save.php";
          } else {
            _url = "/BoniViajes/assets/save.php";
          }
          _data = _form.serialize();
          $.post(_url, _data, function() {

          }).done(function() {
            location.href = _href;
          });
        });
      })
    </script>
</body>
</html>
