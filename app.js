var formulario = document.getElementById('formulario');
formulario.addEventListener('submit', function (e){
    e.preventDefault();

    var datos = new FormData(formulario);

    fetch('redireccionamiento.php',{
        method: 'POST',
        body: datos
    })
})