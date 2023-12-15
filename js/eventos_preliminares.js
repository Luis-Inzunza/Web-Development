document.addEventListener("DOMContentLoaded", function () {

    document.getElementById('cerrar').addEventListener('click', function() {
        window.location.href = "menu_usuario.php";
    });
    /**
     * Elementos para la preliminar 
     */
    let parrafoMoment = document.getElementById('texto');
    let texto_preliminar = document.getElementById('texto_current');
    let imagen_cuento = document.getElementById('img_cuento');
    let preliminar_box = document.getElementById('preliminar');

    /**
     * Poner el texto al instante que se teclea
     */
    parrafoMoment.addEventListener('keyup', function (event) {
        let contenido = parrafoMoment.value;
        texto_preliminar.innerHTML = '<p>' + contenido + '</p>';
    });

    /**
     * Cambio del color de las letras
     */
    let color_letras_input = document.getElementById('colorTexto');
    color_letras_input.addEventListener('input', function (event) {
        let color_letras_current = color_letras_input.value;
        texto_preliminar.style.color = color_letras_current;
    });

    /**
     * Cambio del fondo
     */
    let color_fondo_input = document.getElementById('colorFondo');
    color_fondo_input.addEventListener('input', function () {
        let color_fondo_current = color_fondo_input.value;
        texto_preliminar.style.backgroundColor = color_fondo_current;
        preliminar_box.style.backgroundColor = color_fondo_current;
    });

    /**
     * Insertar una imagen en el cuento CHAT-GPT
     */
    let imagen_input = document.getElementById('image');
    imagen_input.addEventListener('change', function (event) {
    let imagen_current = imagen_input.files[0];

    // Crear un objeto de tipo FileReader para leer el archivo
    let reader = new FileReader();

    reader.onload = function (e) {
        // Crear un elemento de imagen
        let imgElement = document.createElement('img');
        imgElement.src = e.target.result;

        // Limpiar el contenedor antes de agregar una nueva imagen
        imagen_cuento.innerHTML = '';

        imgElement.style.width = '100%';
        // Agregar la imagen al div
        imagen_cuento.appendChild(imgElement);
    }

    // Leer el archivo como una URL de datos
    reader.readAsDataURL(imagen_current);
});

    /**
     * Cambiar de formato
     */
    let formato_fondo = document.getElementById('formato');
    formato_fondo.addEventListener('change', function (event) {
        let caso_orden = Number(formato_fondo.value);
        switch (caso_orden) {
            case 1:
                texto_preliminar.style.order = 1;
                imagen_cuento.style.visibility = "visible";
                imagen_cuento.style.order = 2;
                break;
            case 2:
                texto_preliminar.style.order = 2;
                imagen_cuento.style.visibility = "visible"
                imagen_cuento.style.order = 1;
                break;
            case 3:
                imagen_cuento.style.visibility = "hidden";
                break;
            default:
                break;
        }
    });
});