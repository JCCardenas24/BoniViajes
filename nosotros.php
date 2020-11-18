<!DOCTYPE html>
<html lang="es">
<head>
    <title>The Travel - Tour Travel</title>
    <?php include_once('./template/head.php') ?>
<body>
    <?php include_once('./template/header.php') ?>
	<section class="mx-width">
		<div class="rows inner_banner bg_nosotros">
			<div class="container">
				<ul>
					<li><a class="c-bread-active" href="index.php">Inicio</a></li>
					<li><i class="fa fa-angle-right c-bread" aria-hidden="true"></i></li>
					<li><a class="c-bread f-light" href="#">Nosotros</a></li>
				</ul>
				<h2 class="c-white ml-15">Nosotros</h2>
			</div>
		</div>
	</section>
	<section class="h-800">
		<div class="rows inn-page-bg com-colo mx-width">
            <div class="df-jc-c">
                <div class="col-sm-7 mt-50">
                    <p class="text-center f-medium c-gray-light">
                        Más de 35 años de expertise como agencia de viajes nos respaldan, hoy evolucionamos para crear experiencias únicas. Basados en un modelo de customer centricity, nuestros expertos de destino brindan atención personalizada, global, vía digital o en nuestra boutique, creando una experiencia concierge. <br>
                        Nuestros Smart Leisure Travelers buscan las mejores experiencias para ellos, su familia, amigos y pareja; buscan aventura, experiencias únicas, gastronómicas, lujo en cada detalle, facilidad, eficiencia y accesibilidad.
                        Contamos con un equipo de digital concierge para que disfrutes del lujo joven y auténtico.
                    </p>
                </div>
            </div>
            <div class="title-line text-center mt-50">
                <div class="tl-1"></div>
            </div>
            <div class="col-sm-12 df-jc-c">
                <div class="row col-sm-10 mt-50">
                    <div class="col-md-4">
                        <div class="tips_travel_2">
                            <i class="fa fa-bullseye" aria-hidden="true"></i>
                            <h4 class="mt-50 f-light">Misión</h4>
                            <p class="plr-15 c-gray-light f-medium fs-15">
                                La mejor manera de viajar con estilo, siempre acompañado y conectado.
                                Ofrecer nuevas maneras de entender una cultura o descubrir un destino,
                                a través experiencias únicas, lujosas y auténticas, desde un submarino, hasta bailar en la Luna.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tips_travel_2">
                            <i class="fa fa-binoculars" aria-hidden="true"></i>
                            <h4 class="mt-50 f-light">Visión</h4>
                            <p class="plr-15 c-gray-light f-medium fs-15">
                                La mejor manera de viajar con estilo, siempre acompañado y conectado.
                                Ofrecer nuevas maneras de entender una cultura o descubrir un destino,
                                a través experiencias únicas, lujosas y auténticas, desde un submarino, hasta bailar en la Luna.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tips_travel_2">
                            <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                            <h4 class="mt-50 f-light">Filosofía</h4>
                            <p class="plr-15 c-gray-light f-medium fs-15">
                                La mejor manera de viajar con estilo, siempre acompañado y conectado.
                                Ofrecer nuevas maneras de entender una cultura o descubrir un destino,
                                a través experiencias únicas, lujosas y auténticas, desde un submarino, hasta bailar en la Luna.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 df-jc-c mt-50 mb-50">
                <ul id="nosotrosul">
                    <li class="c-gray-light f-medium fs-15">Construimos relaciones y emociones que duran para siempre.</li>
                    <li class="c-gray-light f-medium fs-15">Brindamos un servicio boutique, profesional, respetuoso, resolutivo, personalizado y confiable.</li>
                    <li class="c-gray-light f-medium fs-15">La tecnología viaja con nosotros siempre en la maleta.</li>
                    <li class="c-gray-light f-medium fs-15">La sed de conocimiento nos mantienen actualizados, proactivos y resolutivos.</li>
                    <li class="c-gray-light f-medium fs-15">La confianza, confidencialidad y privacidad de nuestros clientes, proveedores y colaboradores es lo más importante.</li>
                    <li class="c-gray-light f-medium fs-15">Nuestras acciones de mejora, nos hacen crecer 1% cada día.</li>
                    <li class="c-gray-light f-medium fs-15 mb-50">Todos formamos parte de la misma tripulación, juntos lograremos las metas más ambiciosas: la Luna.</li>
                </ul>
            </div>
        </div>
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