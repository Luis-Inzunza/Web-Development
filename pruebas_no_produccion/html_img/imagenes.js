function capturarPagina() { // Codigo para capturar parte del html y convertirlo en foto
    html2canvas(document.querySelector("#capture")).then(canvas => {
        // Convertir el lienzo a una imagen en formato base64
        var imagen = canvas.toDataURL("image/png");

        // Crear un elemento <a> para descargar la imagen
        var link = document.createElement('a');
        link.download = 'captura.png';
        link.href = imagen;

        // Simular clic en el enlace para descargar la imagen
        link.click();
    });
}
