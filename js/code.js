function validar() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // alert(email);
    // alert(password);

    if (email == "" || password == "") {

        if (email == "" && password != "") {

            //alert ("No se ha especificado ningun Email");

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ningun Email</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('email').style.border = "2px solid red";
            document.getElementById('password').style.border = "2px solid grey";
            document.getElementById('mensaje').style.color = "red";
            return false;

        } else if (email != "" && password == "") {

            //alert ("No se ha especificado ninguna Contraseña");

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ninguna Contraseña</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('password').style.border = "2px solid red";
            document.getElementById('email').style.border = "2px solid grey";
            document.getElementById('mensaje').style.color = "red";
            return false;

        } else {

            //alert ("No se ha especificado ningun valor");

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ningun Valor</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('password').style.border = "2px solid red";
            document.getElementById('email').style.border = "2px solid red";
            document.getElementById('mensaje').style.color = "red";
            return false;
        }
    } else {
        return true;
    }
}

function crear() {
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('passwd1').value;
    var password2 = document.getElementById('passwd2').value;

    if (email == "" || password == "" || nombre == "" || apellido == "" || password2 == "") {

        document.getElementById('mensaje').innerHTML = "<p>Faltan valores por especificar</p>";
        document.getElementById('mensaje').style.color = "red";
        document.getElementById('email').style.border = "2px solid red";
        document.getElementById('passwd1').style.border = "2px solid red";
        document.getElementById('passwd2').style.border = "2px solid red";
        document.getElementById('nombre').style.border = "2px solid red";
        document.getElementById('apellido').style.border = "2px solid red";
        document.getElementById('mensaje').style.color = "red";
        return false;

    } else {
        return true;

    }
}

/*function comprobarClave() {
    var passwd1 = document.getElementById('passwd1').value;
    var passwd2 = document.getElementById('passwd2').value;

    if (passwd1 == passwd2)
        alert("Contraseñas iguales");
    else
        document.getElementById('mensaje').innerHTML = "<p>Las contraseñas no coinciden</p>";
    document.getElementById('mensaje').style.color = "red";
}*/