function login(){
    let formulario = document.querySelector('#forma_login');//form
    let nombre = document.querySelector('#usuario');//input usuario
    let pass = document.querySelector('#pass');//input pass
    formulario.addEventListener('submit', (event) => {
        event.preventDefault();
        //alert("Formulario trabajando");
        datos(nombre, pass);
    })
}

function datos(nombre, pass){
    let data = new FormData();
    data.append("nombre", nombre.value);
    data.append("pass", pass.value);

    fetch('templates/validar.php', {
        method : 'post',
        body: data
    })
    .then(response => response.json())
    .then(({exito}) => {
        if(exito === 1) location.href = "home.php";
        else alert("Error en los datos")
    })
}

login();