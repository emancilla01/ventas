function enviar() {
    div1 = document.querySelector("#contenedor2");
    autenticacion = document.querySelector("#autenticacion").value;
    usuario = document.querySelector("#usuario").value;
    clave = document.querySelector("#clave").value;
    fetch("/autenticacion/validarusuario.php?usuario=" + usuario + "&clave=" + clave)
        .then (response => response.text())
        .then (data => {div1.innerHTML += data });
}
function ver(url) {
    div1 = document.querySelector("#contenedor1");
    fetch (url)
        .then (response => response.text())
        .then (data => {div1.innerHTML = data });
}

//funcion prueba
function enviardatos(formId, url, divId) {
    let cont = document.querySelector("#" + divId);
    let datos = new FormData(document.getElementById(formId));
    fetch(url, {
        body: datos,
        method: "post"
    })
    .then(response => response.text())
    .then(data => { cont.innerHTML = data; });
}

// funcion original de enviardatos
// function enviardatos() {
//     cont1 = document.querySelector("#contenedor1");
//     datos = new FormData(document.getElementById("frm"));
//     fetch("/categorias/ins_act.php", {
//             body: datos , 
//             method: "post"
//         })
//     .then(response => response.text())
//     .then(data => {cont1.innerHTML = data;})
    
//  }
    function peticiones(accion, url = "/categorias/frm.php", formId = "frm") {
    const form = document.getElementById(formId);
    const formData = new FormData(form);
    formData.set("accion", accion);

    fetch(url, {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById("resultados").innerHTML = data;
    });
}

//prueba de funcion para editar
// function editar(id, nombre, contacto = '', direccion = '') {
//     document.getElementById('id').value = id;
//     document.getElementById('nombre').value = nombre;
//     // Si existen los campos, asígnalos
//     if (document.getElementById('contacto')) {
//         document.getElementById('contacto').value = contacto;
//     }
//     if (document.getElementById('direccion')) {
//         document.getElementById('direccion').value = direccion;
//     }
// }


 function editar(id,nombre){
    // alert(id +" " + nombre);
    id2 = document.getElementById('id');
    nombre2 = document.getElementById('nombre');
    id2.value = id;
    nombre2.value = nombre;
 }

 function eliminar(id, url, divId) {
    const cont = document.querySelector("#" + divId);
    fetch(url + "?id=" + id)
        .then(response => response.text())
        .then(data => { cont.innerHTML = data; });
}

//PRUEBA FUNCION CONSULTAR TABLA
// function consultarTabla(url, divId) {
//     fetch(url)
//         .then(response => response.text())
//         .then(data => {
//             document.getElementById(divId).innerHTML = data;
//         });
// }

// funcion original de eliminar
//  function eliminar(id) {
//     cont3 = document.querySelector("#contenedor3");
//     datos = new FormData(document.getElementById("frm"));
//     fetch("/categorias/eliminar.php?id="+id)
//     .then(response => response.text())
//     .then(data => {cont3.innerHTML = data;})
//  }