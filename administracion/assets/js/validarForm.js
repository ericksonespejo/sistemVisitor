function valida_envia() {
    //valido el usuario
    if (document.fvalida.nombreUsuario.value.length == 0) {
        alert("Tiene que escribir su usuario")
        document.fvalida.nombre.focus()
        return 0;
    }
    //valido el nombre
    if (document.fvalida.nombre.value.length == 0) {
        alert("Tiene que escribir su nombre")
        document.fvalida.nombre.focus()
        return 0;
    }
    //valido el Password
    if (document.fvalida.Password.value.length == 0) {
        alert("Tiene que escribir su Clave")
        document.fvalida.nombre.focus()
        return 0;
    }
    if (document.fvalida.Password.value.length < 6) {
        alert("La clave es menor a 6 dijitos, haslo un poco más segura")
        document.fvalida.nombre.focus()
        return 0;
    }

    //valido el RepeatPassword
    if (document.fvalida.RepeatPassword.value.length == 0) {
        alert("Tiene que Re-escribir tu Clave")
        document.fvalida.nombre.focus()
        return 0;
    }
    if (document.fvalida.Password.value != document.fvalida.RepeatPassword.value) {
        alert("La clave no coincide")
        document.fvalida.nombre.focus()
        return 0;
    }
    if (document.fvalida.rolUser.value.length == 0) {
        alert("Selecciona un rol")
        document.fvalida.nombre.focus()
        return 0;
    }

    //valido la edad. tiene que ser entero mayor que 18
    /* edad = document.fvalida.edad.value
    edad = validarEntero(edad)
    document.fvalida.edad.value = edad
    if (edad == "") {
        alert("Tiene que introducir un número entero en su edad.")
        document.fvalida.edad.focus()
        return 0;
    } else {
        if (edad < 18) {
            alert("Debe ser mayor de 18 años.")
            document.fvalida.edad.focus()
            return 0;
        }
    } */

    //valido el interés
    /* if (document.fvalida.interes.selectedIndex == 0) {
        alert("Debe seleccionar un motivo de su contacto.")
        document.fvalida.interes.focus()
        return 0;
    } */

    //el formulario se envia
    alert("Muchas gracias por enviar el formulario");
    document.fvalida.submit();
}