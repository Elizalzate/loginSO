const credIncorrectas = () =>{
    Swal.fire({
        icon: "error",
        title: "Error",
        text: "¡Credenciales incorrectas!",
    });  
    window.location.href="index.html";
};
