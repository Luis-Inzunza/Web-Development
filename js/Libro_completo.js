console.log("Libro_completo.js");

// Creacion  y obtencion de datos del objeto libro //

class Libro {

    constructor(titulo, enfoque, direc_img, color_titulo, color_fondo, usuario_id, ultima_modificacion) {
        this.Titulo = titulo;
        this.Enfoque = enfoque;
        this.Direc_img = direc_img;
        this.Color_titulo = color_titulo;
        this.Color_fondo = color_fondo;
        this.Usuario_id = usuario_id;
        this.ultima_modificacion = ultima_modificacion;
        this.Paginas = [];
    }

    agregarPagina(index_pag, texto, color_texto, color_fondo, formato, audio, voz, subrayado) {
        const pagina = {
            Index_pag: index_pag,
            Texto: texto,
            Color_texto: color_texto,
            Color_fondo: color_fondo,
            Formato: formato,
            Audio: audio,
            Voz: voz,
            Subrayado: subrayado
        };
        this.Paginas.push(pagina);
    }
}

function obtenerLibro() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', '../js/libro.json', false);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Respuesta del servidor (PHP)
            let datos_libro = JSON.parse(xhr.responseText);
            console.log(datos_libro);
            crearLibro(datos_libro);
        }
    };
    xhr.send();
}

function crearLibro(datos_libro) {
    miLibro = new Libro(datos_libro.Libro.Titulo, datos_libro.Libro.Enfoque, datos_libro.Libro.Direc_img, datos_libro.Libro.Color_titulo, datos_libro.Libro.Color_fondo, datos_libro.Libro.Usuario_id, datos_libro.Libro.ultima_modificacion);

    datos_libro.Paginas.forEach(pagina => {
        miLibro.agregarPagina(
            pagina.Index_pag,
            pagina.Texto,
            pagina.Color_texto,
            pagina.Color_fondo,
            pagina.Formato,
            pagina.Audio,
            pagina.Voz,
            pagina.Subrayado
        );
    });
}

let miLibro = new Libro();
obtenerLibro();
console.log(miLibro.Paginas);

// Generar de etiquetas para cada pagina del libro //

function GenerarPaginas(paginas) {
    paginas.forEach(pagina => {
        let pagina_html = '<p id="Texto" style="color=' + pagina.Color_texto + ', background-color=' + pagina.Color_fondo + '">' + pagina.Texto + '</p> <img id="Imagen" src="../Imgs/' + pagina.Direc_img + ' alt="Imagen de la pagina"">';

        MostrarPaginas.push(pagina_html);

    });

    //let mensajeElemento = document.createElement('section');
    //mensajeElemento.innerHTML = alerta;

    //window.onload = function () {
    //document.body.insertBefore(mensajeElemento, document.getElementById('Login'));
    //}
};

let MostrarPaginas = [];
GenerarPaginas(miLibro.Paginas);
console.log(MostrarPaginas);

/////////////////////////////////////

// Generar previews para cada pagina //
/*
function GenerarPreviews(paginas_html) {
    let index_pag = 0;
    paginas_html.forEach(pagina_html => {
        let preview_html = '<div class="preview" onclick="nada(' + index_pag + ')">< img id = "pre' + index_pag + '" src = "" alt = "" ></div >';
        let div = document.createElement('div');
        div.innerHTML = preview_html;
        let htmlObject = div.firstChild;
        let carrusel = document.getElementById('carrusel');
        carrusel.innerHTML = preview_html;
        capturarPagina(htmlObject, index_pag);
        previews.push(preview_html);
        index_pag++;

    });
};

function capturarPagina(pagina_html, index_pag) {
    // Asegurarse de que pagina_html está en el DOM
    if (document.body.contains(pagina_html)) {
        html2canvas(pagina_html).then(canvas => {
            // Convertir el lienzo a una imagen en formato base64
            let imagen = canvas.toDataURL("image/png");

            // Mostrar la imagen generada en el elemento img
            let imagenElement = document.getElementById('pre' + index_pag);
            if (imagenElement) {
                imagenElement.src = imagen;
                imagenElement.style.display = 'block'; // Mostrar la imagen si estaba oculta
            }
        }).catch(error => {
            console.error('Error rendering canvas:', error);
        });
    } else {
        console.error('pagina_html is not in the DOM');
    }
}

let previews = [];
GenerarPreviews(MostrarPaginas);
console.log(previews);
*/
/////////////////////////////////////



// Moviemiento de carrulsel //

const rightBtn = document.querySelector('#right-btn');
const leftBtn = document.querySelector('#left-btn');
const carrusel = document.querySelector('.carrusel');

rightBtn.addEventListener('click', () => {
    carrusel.scrollLeft += 300;
});

leftBtn.addEventListener('click', () => {
    carrusel.scrollLeft -= 300;
});

///////////////////////////////////////

function nada() {
    alert("No hay nada");
}