let formulario = document.getElementById("formulario")

formulario.addEventListener("submit", function(evento) {
    evento.preventDefault();

    let nome =  document.getElementById("nome").value
    let email =  document.getElementById("email").value

    document.getElementById('coluna1').innerText = nome
    document.getElementById('coluna2').innerText = email
   
})