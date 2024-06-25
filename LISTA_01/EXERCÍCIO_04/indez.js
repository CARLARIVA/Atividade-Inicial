
let botao = document.getElementById('botao')

botao.addEventListener ('click', function() {
   
    let ano = 2024
    let nascimento = document.getElementById("data").value
    if(ano - nascimento>= 18)

        document.getElementById("idade").innerText = "voce e maior de idade"
        
        else(ano - nascimento<= 18)
        document.getElementById("idade").innerText = "voce e menor de idade"


})