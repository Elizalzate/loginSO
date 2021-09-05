let ingresar = document.getElementById('btnIngresar');
let usuario = document.getElementById('usuario').value;
ingresar.addEventListener("click",
(e)=>{
    if(document.getElementById('usuario').value==='' || document.getElementById('password').value===''){
        e.preventDefault();
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "No pueden haber campos vacíos",
        });  
    }
    else if( document.getElementById('password').value.length < 8){
        e.preventDefault();
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "La contraseña debe tener mínimo 8 carácteres.",
        });
    }

});
const credIncorrectas = () =>{
    Swal.fire({
        icon: "error",
        title: "Error",
        text: "¡Credenciales incorrectas!",
    });  
};
