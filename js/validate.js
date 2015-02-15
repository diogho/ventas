function regformhash(form, doc, password, conf) 
{
    // Check each field has a value
    if (doc.value == '' || password.value == '' || conf.value == '') {
        alert('No ha registrado todos los elementos requeridos. Por favor intentelo de nuevo.');
        return false;
    }

    re = /^\d+$/;
    if (!re.test(form.doc.value)) {
    	alert("El documento debe contener solo numeros");
    	form.doc.focus();
    	return false;
    };

    if (password.value.length < 6) {
        alert("La contraseña debe ser de 6 caracteres minimo.");
        form.password.focus();
        return false;
    };

    if (password.value != conf.value) {
        alert("La contraseña y la confirmación no son la misma. Por favor verifique los datos ingresados.");
        form.password.focus();
        return false;
    };
    //alert(password.value);
    var p = document.createElement("input");

    form.appendChild(p);

    p.name = "p";
    p.type = "hidden";
    
    p.value = hex_sha512(password.value);

    alert("Atributos OK!");

    password.value = "";
    conf.value = "";

    form.submit();
    return true;
}   
