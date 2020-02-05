// MOSTRAR CODIGO DE DESCARGA
function generadorCodigo() {
    // OBTENER API
    var api = document.getElementById("apiKey").value;
    // DETECTAR SI HAY ERROR EN API
    if (api != "") {
        var url = document.getElementById("urlDoc").value;
        var contURL = url.length;
        // DETECTAR SI HAY ERROR EN URL
        if (contURL != 0) {
            var rem = 33;
            var id = url.substr(rem, contURL);
            var src = "https://www.googleapis.com/drive/v3/files/" + id + "?alt=media&key=" + api;
            // PUBLICAR CODIGO GENERADO
            document.getElementById("textoGenerado").style.visibility = "visible";
            document.getElementById("tituloCard").innerHTML = "Enlace de <strong>" + id + "</strong>";
            document.getElementById("subTituloCard").innerHTML = "Enlace generado por: <strong>" + api + "</strong>";
            document.getElementById("codigoCopy").innerHTML = "&lt;a href='" + src + "'&gt; Descargar: " + id + "&lt;/a&gt;";
            document.getElementById("urlFinal").href = src;
            document.getElementById("urlFinal").download = src;
        } else {
            alert("El campo del Enlace del archivo esta vacia, por favor, siga las instrucciones de GUIA");
        }
    } else {
        alert("El campo de la API esta vacia, si necesita una API, por favor, siga las instrucciones de GUIA");
    }
}