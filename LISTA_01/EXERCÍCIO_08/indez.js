let botao = document.getElementById('botao')
let contador = 0

botao.addEventListener ('click', function() {
    
    const words = document.getElementById("texto").value.split(' ');
    console.log(words.length);
    document.getElementById("saudacao").innerText = words.length

})