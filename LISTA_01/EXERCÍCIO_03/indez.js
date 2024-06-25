
let botao = document.getElementById('botao')

botao.addEventListener ('click', function() {
   
    let ano = 2024
    let nascimento = document.getElementById("data").value
document.getElementById("anodenascimento").innerText = ano - nascimento

})