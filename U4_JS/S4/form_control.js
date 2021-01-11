function validarFormulario() {
    let usuario = document.getElementById("usuario").value;
    let email = document.getElementById("email").value;
    let pass1 = document.getElementById("pass1").value;
    let pass2 = document.getElementById("pass2").value;

    if(usuario.length > 0) {
        console.log("Existe un usuario");
        let error = document.getElementById("error_usuario");
        error.style.display = "none";
    } else {
        let error = document.getElementById("error_usuario");
        error.style.display = "block";
    }

    if(email.length > 0) {
        let error = document.getElementById("email_vacio");
        error.style.display = "none";

        if(validarEmail(email)) {
            error = document.getElementById("email_invalido");
            error.style.display = "none";

            console.log("El email es validado");
        } else {
            error = document.getElementById("email_invalido");
            error.style.display = "block";
        }
    } else {
        let error = document.getElementById("email_vacio");
        error.style.display = "block";
    }

    if(pass1.length > 0 && pass2.length > 0)   {
        let error = document.getElementById("pass_vacias");
        error.style.display = "none";

        if(validarPassword(pass1, pass2)) {
            error = document.getElementById("pass_invalidas");
            error.style.display = "none";

            console.log("las contraseñas son validas");
        } else {
            error = document.getElementById("pass_invalidas");
            error.style.display = "block";
        }
    } else {
        let error = document.getElementById("pass_vacias");
        error.style.display = "block";
    }
}

function validarEmail(email) {
    const expEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

    return expEmail.test(email);
}

function validarPassword(pass1, pass2) {
    return (pass1 === pass2);
}