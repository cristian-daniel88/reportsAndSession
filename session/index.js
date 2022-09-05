let bottonFather = document.getElementById('bottonFather');
console.log(bottonFather)

$('#submit1').on('click', (e) => {
    e.preventDefault()
 
    const boton = document.createElement("button");
    boton.id="bottonSubmit";
    boton.setAttribute('type', 'submit');
    console.log(boton);
    boton.style.display = 'none';
    bottonFather.appendChild(boton);

    $("#bottonSubmit").trigger('click')
} )
