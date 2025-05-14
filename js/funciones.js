
function ver(url) {
    div1 = document.querySelector("#contenedor1");
    fetch (url)
        .then (response => response.text())
        .then (data => {div1.innerHTML = data });
}
function enviardatos(url_tabla) {      
    cont3 = document.querySelector("#contenedor3");
    let datos = new FormData(document.getElementById("frm"))

    fetch(url_tabla, {
        body: datos,
        method: "post"
    })
    .then(response => response.text())
    .then(data => { 
        cont3.innerHTML = data
     });
     document.getElementById("frm").reset();
}

function editar(id,tb){
    datos = new FormData();
    sql = "select * from "+ tb + " where id = " + id;
    datos.append("sql",sql);
    fetch("/"+tb+"/registro.php", {
        body: datos,
       method: "post"})
    .then(response => response.json())
    .then(data => { 
        registro = data;
        datos = new FormData(document.getElementById("frm"));
        for (const key of datos.keys()) {
            campo = document.getElementById(key);
            campo.value = registro[key];
          }
    });         
}

function eliminar(id,tb) {           
    cont3 = document.querySelector("#contenedor3");
    fetch("/"+tb+"/eliminar.php?id="+id+"&tb="+tb)
        .then(response => response.text())
        .then(data => { cont3.innerHTML = data });
}

