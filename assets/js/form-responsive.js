const nCompletoRes = document.getElementById('nombreRes');
const correoRes = document.getElementById('mailRes');
const telefonoRes = document.getElementById('phoneRes');
const tripRes = document.getElementById('viajeRes');
const inptsRes = document.querySelectorAll('.validateRes');
const btnSendDataRes = document.getElementById('enviarCorreoRes');
const checkTCRes = document.getElementById('checkTerminosRes');

checkTCRes.addEventListener('change', function() {
    if(this.checked) {
        let inptsValid = document.querySelectorAll('.is-valid').length;
        if(inptsValid === 4) {
            btnSendDataRes.removeAttribute('disabled');
            btnSendDataRes.removeAttribute('disabled');
        } else {
            btnSendDataRes.setAttribute('disabled', true);
            btnSendDataRes.setAttribute('disabled', true);
        }
    } else {
        btnSendDataRes.setAttribute('disabled', true);
        btnSendDataRes.setAttribute('disabled', true);
    }
});

nCompletoRes.addEventListener('focusout', function() {
    let reg = /^[a-zA-Z\u00C0-\u00FF\s]*$/;
    checkTCRes.checked = false;
    btnSendDataRes.setAttribute('disabled', true);
    btnSendDataRes.setAttribute('disabled', true);
    clearStyles(nCompletoRes);
    if(nCompletoRes.value != '' && reg.test(nCompletoRes.value)) {
        nCompletoRes.classList.add('is-valid');
        return true;
    } else {
        nCompletoRes.classList.add('is-invalid');
        return false;
    }
});

correoRes.addEventListener('focusout', function() {
    let vMail = validateMail(this, this.value);
    checkTCRes.checked = false;
    btnSendDataRes.setAttribute('disabled', true);
    btnSendDataRes.setAttribute('disabled', true);
});

phoneRes.addEventListener('focusout', function() {
    let vPhone = validateNumber(this, this.value);
    checkTCRes.checked = false;
    btnSendDataRes.setAttribute('disabled', true);
    btnSendDataRes.setAttribute('disabled', true);
});

tripRes.addEventListener('focusout', function() {
    let reg = /^[a-zA-Z\u00C0-\u00FF\s]*$/;
    checkTCRes.checked = false;
    btnSendDataRes.setAttribute('disabled', true);
    btnSendDataRes.setAttribute('disabled', true);
    clearStyles(tripRes);
    if(tripRes.value != '' && reg.test(tripRes.value)) {
        tripRes.classList.add('is-valid');
        return true;
    } else {
        tripRes.classList.add('is-invalid');
        return false;
    }
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
    if(strInp != ' ' && reg.test(strInp)) {
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
    if(numInp != ' ' && reg.test(numInp)) {
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
    if(strInp != ' ' && reg.test(strInp)) {
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

$(function() {
  $('form').submit(function(event) {
    event.preventDefault();

    setTimeout(function() {
      $('form').off('submit');
      $('form').submit();
    }, 5000)
  })
})
