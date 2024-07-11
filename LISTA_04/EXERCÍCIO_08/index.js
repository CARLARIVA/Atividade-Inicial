let botao = document.getElementById('botao')
botao.addEventListener('click', function() {

    let valor = document.getElementById('valor').value

    fetch('meu.php?valor='+valor).then(function(resultado){
        return resultado.text();
    }).then(function (texto) {
        let mensagem = document.getElementById('mensagem')
        mensagem.innerText =  "A area do circulo eh " +texto
    }).catch(function (erro) {
        console.error(erro)
    })

})