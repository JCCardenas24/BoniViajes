const nCompletoRes = document.getElementById('nombreRes');
const correoRes = document.getElementById('mailRes');
const telefonoRes = document.getElementById('phoneRes');
const tripRes = document.getElementById('viajeRes');
const inptsRes = document.querySelectorAll('.validateRes');
const btnSendDataRes = document.getElementById('enviarCorreoRes');
const checkTCRes = document.getElementById('checkTerminosRes');

inptsRes.forEach(element => {
    element.addEventListener('focusout', function() {
        let inptsValid = document.querySelectorAll('.is-valid').length + 1;
        if((inptsRes.length === (inptsValid))) {
            console.log(inptsValid);
            checkTCRes.addEventListener('change', function() {
                if(this.checked) {
                    btnSendDataRes.removeAttribute('disabled');
                    btnSendDataRes.removeAttribute('disabled');
                } else {
                    btnSendDataRes.setAttribute('disabled', true);
                    btnSendDataRes.setAttribute('disabled', true);
                }
            })
        } else {
            console.log(inptsValid);
            btnSendDataRes.setAttribute('disabled', true);
            btnSendDataRes.setAttribute('disabled', true);
        }
    })
});

nCompletoRes.addEventListener('focusout', function() {
    let vNom = validateString(this, this.value);
});

correoRes.addEventListener('focusout', function() {
    let vMail = validateMail(this, this.value);
});

phoneRes.addEventListener('focusout', function() {
    let vPhone = validateNumber(this, this.value);
});

tripRes.addEventListener('focusout', function() {
    let vNom = validateString(this, this.value);
});

/**
 * @author Juan Carlos Cárdenas
 * @param {Object} objInp - La etiqueta que se obtiene
 * @param {String} strInp - El valor de la etiqueta
 * @returns {Boolean} - True si se cumple que no es vacio y sólo contiene letras
 */
function validateString(objInp, strInp) {
    let reg = /^[a-zA-Z\u00C0-\u00FF\s]*$/;
    clearStyles(objInp)
    if(strInp != '' && reg.test(strInp)) {
        objInp.classList.add('is-valid');
        return true;
    } else {
        objInp.classList.add('is-invalid');
        return false;
    }
}

/**
 * @author Juan Carlos Cárdenas
 * @param {Object} objInp - La etiqueta que se obtiene
 * @param {String} numInp - El valor de la etiqueta
 * @returns {Boolean} - True si se cumple que no es vacio y sólo contiene números
 */

function validateNumber(objInp, numInp) {
    let reg = /[0-9]{10}/;
    clearStyles(objInp);
    if(numInp != '' && reg.test(numInp)) {
        objInp.classList.add('is-valid');
        return true;
    } else {
        objInp.classList.add('is-invalid');
        return false;
    }
}

/**
 * @author Juan Carlos Cárdenas
 * @param {Object} objInp - La etiqueta que se obtiene
 * @param {String} strInp - El valor de la etiqueta
 * @returns {Boolean} - True si se cumple que no es vacio y tiene estructura correcta de mail
 */

function validateMail(objInp, strInp) {
    let reg = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    clearStyles(objInp);
    if(strInp != '' && reg.test(strInp)) {
        objInp.classList.add('is-valid');
        return true;
    } else {
        objInp.classList.add('is-invalid');
        return false;
    }
}

function clearStyles(objElem) {
    objElem.classList.remove('is-valid');
    objElem.classList.remove('is-invalid');
}