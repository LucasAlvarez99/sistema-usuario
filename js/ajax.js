function register(){
    let rg_username = document.querySelector('#rg_username').value;
    let rg_email = document.querySelector('#rg_email').value;
    let rg_pass1 = document.querySelector('#rg_pass1').value;
    let rg_pass2 = document.querySelector('#rg_pass2').value;

    let exp = /^[a-zA-Z0-9]+$/;
    let exp_email = /^([\da-z_\.-]+)@([\da-z_\.-]+)\.([a-z\.]{2,6})$/; 
    
    if(rg_username == ""){
       M.toast({html: 'El campo usuario no puede estar vacío'})
       return;
    }else if(!exp.exec(rg_username)){
       M.toast({html: 'En el campo usuario no se permiten carácteres especiales!'})
        return;
    }

    if(rg_email == ""){
        M.toast({html: 'El campo email no puede estar vacío'})
        return;
    }else if(!exp_email.exec(rg_email)){
        M.toast({html: 'Ingrese un emai válido'})
        return;
    }

    if(rg_pass1 == "" || rg_pass2 == ""){
        M.toast({html: 'El campo contraseña no puede estar vacío'})
        return;
    }else if(!exp.exec(rg_pass1) || !exp.exec(rg_pass2)){
        M.toast({html: 'En el campo contraseña no se permiten carácteres especiales!'})
        return;
    }

    if(rg_pass1 !== rg_pass2 ){
        M.toast({html: 'Las contraseñas no coinciden'})
        return;
    }

    var method = "POST";
    var URL = "ajax/users.ajax.php";
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            var response = ajax.responseText;
            console.log("response", response);
        }
    };
    ajax.open(method, URL, true);
    ajax.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    ajax.send("user_name=" + rg_username + "& email=" + rg_email + "& password=" + rg_pass1 + "& form_rg=" + "registro");




}

