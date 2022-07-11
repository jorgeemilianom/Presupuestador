document.getElementById('form-notes').addEventListener('submit', guardarNota);
const bnSF = 3.5;
const bnDF = 2.5;
const CSF = 10;
const CDF = 7;

function guardarNota(e) {
    var paginas = document.getElementById('paginas').value;
    var nombreApunte = document.getElementById('nombreApunte').value;
    var faz = document.querySelector('input[name="faz"]:checked').value;
    var color = document.querySelector('input[name="color"]:checked').value;
    var anillado = document.querySelector('input[name="anillado"]:checked').value;
    var cantidadxCarilla = document.querySelector('input[name="dosxCarilla"]:checked').value;
    var precio = calcularPrecio(paginas, faz, color, cantidadxCarilla, anillado);
    var mostrarPrecio = 0;

    if(nombreApunte == ''){
        nombreApunte = 'Impresion, '+ faz + ', ' + color + ', ' + anillado;
        if(cantidadxCarilla == 2){
            nombreApunte += ', 2 paginas por carilla.'; 
        }
    }
    // Variable a Almacenar en LocalStorage
    const Nota = {
        nombreApunte,
        paginas,
        faz,
        color,
        precio
    };

    // localStorage.setItem('notas', JSON.stringify(Nota));             // SetItem -> agregar valor
    // localStorage.getItem('notas');                                   // GetItem -> obtener valor

    if (localStorage.getItem('notas') === null) {
        let notas = [];
        notas.push(Nota);
        localStorage.setItem('notas', JSON.stringify(notas));

    } else {
        let notas = JSON.parse(localStorage.getItem('notas'));
        notas.push(Nota);
        localStorage.setItem('notas', JSON.stringify(notas));
    }

    obtenerNota();
    document.getElementById('form-notes').reset();
    e.preventDefault();
};

function obtenerNota() {
    let notas = JSON.parse(localStorage.getItem('notas'));              // Convertir en Objeto un String
    let mostrarNota = document.getElementById('notas-muro');
    let mostrarPrecio = document.getElementById('precioCarrito');

    mostrarNota.innerHTML = `<div class="apunte">Apunte</div>
    <div class="paginas">Pags</div>
    <div class="precio">Precio</div>
    <div class="borrar"></div>`;

    var precioTotal = 0;

    for (let i = 0; i < notas.length; i++) {
        let nombreApunte = notas[i].nombreApunte;
        let paginas = notas[i].paginas;
        let color = notas[i].color;
        let faz = notas[i].faz;
        let precio =  notas[i].precio;
        mostrarNota.innerHTML += ` 
            <div class="apunte">${nombreApunte}</div>
            <div class="paginas">${paginas}</div>
            <div class="precio">$${precio.toFixed(2)}</div>
            <div class="borrar"> <a class="borrado" onclick="setTimeout(borrarNota('${i}'), 3000)"><i class="fas fa-trash-alt"></i></a></div>
        `;
        precioTotal += precio;
    }
    mostrarPrecio.innerHTML = `<i class="fas fa-shopping-cart">$ ${precioTotal.toFixed(2)} </i>`;
};

function borrarNota(x) {
    notas = JSON.parse(localStorage.getItem('notas'));
    for (let i = 0; i < notas.length; i++) {
        if (i == x) {
            notas.splice(i, 1);
        }
    }
    localStorage.setItem('notas', JSON.stringify(notas));
    obtenerNota();
};

//==================================================================
//      Funciones de calculos
//==================================================================
function calcularPrecio(nPags, faz, color, cantidadxCarilla, anillado){
    // Cantidad por carilla
    if(cantidadxCarilla == 2){
        if(nPags % 2 == 1){
            nPags ++;
        }
        nPags = nPags / 2;
    }

    //bn o color, de eso depende el precio
    if(color == 'bn'){
        var sFaz = bnSF;
        var dFaz = bnDF;
    }else{
        var sFaz = CSF;
        var dFaz = CDF;
    }

    //Calculo por FAZ
    if(faz == 'doble'){
        if(nPags % 2 == 0){                 // N paginas PAR
            var costo = nPags * dFaz;
        }else{                              // N paginas Inpar
            var costo = (nPags - 1) * dFaz + sFaz;
        }
    }else{
        var costo = nPags * sFaz;
    }

    //Sumamos Anillado
    if(anillado == 'anillado'){
        let anillado = 0;
        let aux = true;
    
        while(aux){
            if(nPags <= 60 ){                              //1 - 30 hojas
                anillado += 100;
                aux = false;
            }else if(nPags > 61 && nPags <= 100){       //31 - 50 hojas
                anillado += 120;
                aux = false;
            }else if(nPags > 101 && nPags <= 200){      //51 - 100 hojas
                anillado += 150;
                aux = false;
            }else if(nPags > 201 && nPags <= 290){      //101 - 145 hojas    
                anillado += 170;
                aux = false;
            }else if(nPags > 291 && nPags <= 900){      //146 - 450 hojas
                anillado += 180;
                aux = false;
            }else{                                            // Mas de 451 hojas
                anillado += 180;
                nPags = nPags - 900;
            }
        }
        costo = costo + anillado;
    }
    return costo;
    
}


//==================================================================
//      Ejecutar funciones
//==================================================================
obtenerNota();