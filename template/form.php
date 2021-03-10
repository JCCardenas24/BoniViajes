<div class="form_wrapper_">
    <form id="form-send" class="row pos-form col-md-11">
        <div class="col-md-12">
            <p class="c-white">Despreocúpate por los detalles, nosotros nos encargamos.</p>
        </div>
        <div class="col-md-12">
            <input type="text" id="nombre" name="nCompleto" class="style-inp validate" placeholder="Nombre"
                maxlength="20">
        </div>
        <div class="col-md-6 mt-10">
            <input type="mail" id="mail" name="correo" class="style-inp validate" placeholder="Correo electrónico">
        </div>
        <div class="col-md-6 col-xs-12 mt-10 " id="wrapper_tel">
            <div class="col-xs-4 pl-0 pr-0">
                <select id="lada" name="lada" class="browser-default style-inp">
                    <option value="">Lada</option>
                    <option value="MX +52" selected>MX +52</option>
                </select>
            </div>
            <div class="col-xs-8 pl-0 pr-0">
                <input type="text" id="phone" name="phone1" class="style-inp validate col-md-6" placeholder="Teléfono"
                    maxlength="10">
            </div>
        </div>
        <div class="col-md-12 mt-10">
            <input type="text" id="viaje" name="destino" class="style-inp validate" placeholder="¿A dónde viajas?"
                maxlength="20">
        </div>
        <div class="col-md-12 mt-10 wrapper_dates_travel">
            <div class="col-sm-6 col-md-6">
                <input class="style-inp" id="date_range" type="text" name="daterange" value=" " />
            </div>
            <div class="col-sm-6 col-md-6 wrapper_dates_travel">
                <div class="form-group col-sm-6 col-md-6">
                    <select id="input_adults_number" name="input_adults_number" class="browser-default style-inp">
                        <option value="0" selected disabled>Adultos</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="+9">9+</option>
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-6">
                    <select id="input_kids_number" name="input_kids_number" class="browser-default style-inp">
                        <option value="0" selected disabled>Niños</option>
                        <option value="1">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="+9">9+</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-10">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input filled-in" id="checkTerminos">
                <label class="form-check-label f-12 c-white" for="checkTerminos">He leído
                    los <a href="terminos" target="_blank" class="c-white f12">Términos &
                        Condiciones</a> y el <a href="aviso-priv" target="_blank" class="c-white f12">Aviso de
                        privacidad</a></label>
            </div>
        </div>
        <div class="col-md-12 mt-10">
            <a href="thanks" id="enviarCorreo" class="btn col-md-12 btn-blue white-text f-50 f-medium"
                style="text-transform: capitalize;" disabled>¡Llámame!</a>
        </div>
    </form>
</div>