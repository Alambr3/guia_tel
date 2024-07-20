function go(){

    if (document.login.user.value=='agu' && document.login.pass.value=='hola'){ 
            alert("Login correcto, seras redireccionado"); 
            document.login.submit(); 
        } 
        else{ 
             alert("Porfavor ingrese, nombre de usuario y contraseña correctos."); 
        } 
    } 
