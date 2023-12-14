function buscarImagenes() {
    const query = document.getElementById("searchInput").value.trim();
    const API_KEY = "Yqwos2j5hKLeCFM7IUtDpnlqckLRVV9MFsa7o1BZynLkbbVx8dEHfmHL";
    const cantidad = 1;

    const url = `https://api.pexels.com/v1/search?query=${query}&per_page=${cantidad}`;
    const headers = {
        "Authorization": API_KEY,
    };

    fetch(url, { headers })
        .then(response => response.json())
        .then(data => mostrarResultados(data.photos))
        .catch(error => console.error("Error al realizar la solicitud:", error));
    
}

function mostrarResultados(photos) {
    const resultadosContainer = document.getElementById("resultados");
    resultadosContainer.innerHTML = "";

    if (photos.length === 0) {
        resultadosContainer.innerHTML = "<p>No se encontraron imágenes.</p>";
        return;
    }

    photos.forEach(photo => {
        const imagen = document.createElement("img");
        imagen.src = photo.src.large;
        imagen.alt = photo.url;
        console.log(imagen);
        resultadosContainer.appendChild(imagen);
    });
}

document.getElementById("searchInput").addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        buscarImagenes();
    }
});