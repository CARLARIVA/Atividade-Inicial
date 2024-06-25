let botao = document.getElementById('botao')


botao.addEventListener ('click', function() {
   
    let numero1 = document.getElementById("numero1").value
    let numero2 = document.getElementById("numero2").value
    let funcoes = document.getElementById("funcoes").value

        if (funcoes == 'adicionar'){
            document.getElementById("saudacao").innerText = numero1 + numero2
        }
        if (funcoes == 'subtrair'){
            document.getElementById("saudacao").innerText = numero1 - numero2
        }
        if (funcoes == 'multiplicar'){
            document.getElementById("saudacao").innerText = numero1 * numero2
        }
        if (funcoes == 'dividir'){
            document.getElementById("saudacao").innerText = numero1 / numero2
        }

})
