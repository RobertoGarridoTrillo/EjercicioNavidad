/**
 * El primer valor de este array es el id del niño
 * luego se meteran los regalos elegidos
 * @type {int[]}
 */
var regalos = [];
var idNino;
var error = document.getElementById('error');
var divResultados = document.getElementById('divResultados');


recuperarListaRegalos();


function recuperarListaRegalos() {

    let e = document.getElementById('listaRegalos');
    let listaRegalos = e.getAttribute('data-lista').split(',') // los separo por comas
    idNino = e.getAttribute('data-id');

    regalos.push(idNino); // pongo primero el id del niño
    regalos = regalos.concat(listaRegalos); // concateno los regalos que estan

    // elimino el ultimo que se autocrea vacio al separar por comas
    for (let i = regalos.length - 1; i >= 1; i--) {
        if (regalos[i] == "") regalos.pop();

    }


}


function clearError() {

    if (error != null) error.classList.replace('error', '');
}


function contarRegalos(idRegalo, conducta) {

    let size = regalos.length;
    let checkbox = document.getElementById(idRegalo);

    // Si esta haciendo click
    if (checkbox.checked) {

        // si la conducta es mala
        if (!conducta && size >= 2) erro(1, idRegalo);

        // si la conducta es buena
        else if (conducta && size >= 9) erro(2, idRegalo);

        else {
            regalos.push(idRegalo);
            // borro el error si estuviera
            erro(0, null);
            // creo la tabla y la muestro
            crearTabla();
        }
    } else {
        // si no esta haciendo click
        eliminarElementoArray(idRegalo);
    }

}


function eliminarElementoArray(idRegalo) {

    for (let i = 1; i < regalos.length; i++) {

        if (regalos[i] == idRegalo) regalos.splice(i, 1);

    }

    // borro el error si estuviera
    erro(0, null);

    // elimino de la tabla de regalos
    eliminarElementoTabla(idRegalo);
}


function eliminarElementoTabla(idRegalo) {

    // uncheck el checkbox
    document.getElementById(idRegalo).checked = false;

    crearTabla();

}


function erro(error, idCheck) {

    // muestro o limpio el error
    if (error == 0) borrar('hidden', 'error', "", idCheck);
    if (error == 1) borrar('error', 'hidden', 'Tu conducta es mala. Solo puedes elegir un regalo', idCheck);
    if (error == 2) borrar('error', 'hidden', 'Solo puedes elegir ocho regalo', idCheck);
    if (error == 3) borrar('error', 'hidden', 'La lista de regalos está vacía', idCheck);

}


function borrar(add, remove, txt, idCheck) {

    let errorClass = error.classList;

    error.classList.replace(remove, add);
    error.innerHTML = txt;

    if (txt != "") {
        if (idCheck != null) document.getElementById(idCheck).checked = false;
        goto('spanRegalosElegidos');
    }

}


function collapse(element) {

    let tbodies = document.getElementsByTagName('tbody');

    for (const tbody of tbodies) {
        if (tbody.classList.contains('in')) {

            tbody.classList.remove('in');

            goto(element);
        }
    }
    borrar('hidden', 'error', "", 0);
}


function goto(element) {
    document.getElementById(element).scrollIntoView({behavior: "smooth", block: "start", inline: "start"});
}

/**
 *
 * @param etiqueta document.createElement(etiqueta);
 * @param id document.id = id;
 * @param txt document.innerHTML = txt;
 * @param args document.classList = args;
 */
function crearElemento(etiqueta, idElemento = "", txt = "", ...args) {

    const elemento = document.createElement(etiqueta);

    if (idElemento != "") elemento.id = idElemento;
    if (txt != "") elemento.innerHTML = txt;
    if (args.length > 0) elemento.classList = args;

    return elemento;
}

function crearTr(...args) {

    let tr = document.createElement('tr');

    for (const arg of args) {

        let td = crearElemento('td');
        td.textContent = arg;
        tr.append(td);

    }
    return tr;
}


function removerElemento(txt) {

    if (document.getElementById(txt)) {

        child = document.getElementById(txt);

        return child.parentNode.removeChild(child);

    }

}


function crearTabla() {

    // limpio el div para poner la tabla
    removerElemento('divRegalosElegidos');
    removerElemento('tableRegalosElegidos');

    // cabecera tabla
    const spanRegalos = crearElemento('span', 'spanRegalosElegidos', 'Regalos elegidos', 'spanRegalos');
    const divRegalos = crearElemento('div', 'divRegalosElegidos', '', 'divRegalos divRegalosElegidos');

    // boton enviar y hidden
    const buttornRegalos = crearElemento('button', 'submit', 'Seleccionar regalos', 'btn btn-primary');
    buttornRegalos.setAttribute('onclick', 'enviar();')

    // tabla
    const table = crearElemento('table', 'tableRegalosElegidos', "", "table table-responsive table-hover table-bordered table-condensed overflow");
    const tbody = crearElemento('tbody');

    // tr header
    const tr = crearTr('Id', 'Nombre', 'Image', 'Ver ficha', 'Borrar');

    // imagenes
    const image = [];
    const trRegalo = [];
    for (let i = 1; i < regalos.length; i++) {

        // imagen para sustituir del tr clonado
        image[i - 1] = crearElemento('img');
        image[i - 1].src = "../../assets/images/iconos/delete-plus.png";
        image[i - 1].className = 'iconoAccion';
        image[i - 1].style.cursor = "pointer";

        // por si no está
        if (!document.getElementById('tr' + regalos[i])) break;

        // clono el tr pulsado (las pruebas en el depurador y consola)
        trRegalo[i] = document.getElementById('tr' + regalos[i]).cloneNode(true);
        let nodeIdCheck = trRegalo[i].getRootNode().childNodes[9].firstElementChild;

        // extraigo los datos incluidos en el atributo onchage
        let onchange = nodeIdCheck.getAttribute('onchange');
        let param = onchange.replace(/[a-z]*\(*\)*\,*\"*\'*/gi, "");
        let [regalo, nino, aptitud] = param.split(' ');
        trRegalo[i].setAttribute('id', regalo);

        // cambio el icono
        nodeIdCheck.parentNode.appendChild(image[i - 1]);
        nodeIdCheck.parentNode.removeChild(nodeIdCheck);

        let temp = "eliminarElementoArray(" + regalo + ");";
        image[i - 1].setAttribute('onclick', temp);
    }


    divRegalos.appendChild(spanRegalos);
    divRegalos.appendChild(buttornRegalos);
    tbody.appendChild(tr);
    trRegalo.forEach(tr => tbody.appendChild(tr));
    table.appendChild(tbody);

    divResultados.appendChild(divRegalos);
    divResultados.appendChild(table);

}


function enviar() {

    if (regalos.length > 1) {

        let txt = "id=" + regalos[0] + "&";
        let size = regalos.length;


        for (let i = 1; i <= size; i++) {

            data = i < size ? regalos[i] : "";

            txt += "r" + (i - 1) + "=" + data + "&";

        }

        txt = txt.substr(0, txt.length - 1);

        window.open("../../controlador/nino.php?" + txt, "_self");
    } else erro(3, null);

}
