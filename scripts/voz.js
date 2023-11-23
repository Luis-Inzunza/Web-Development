var voices = speechSynthesis.getVoices();

// Filtra las voces en español
var voicesInSpanish = voices.filter(function (voice) {
    return voice.lang.startsWith('es');
});

// Muestra información de las voces en español
voicesInSpanish.forEach(function (voice) {
    console.log("Nombre: " + voice.name);
    console.log("Idioma: " + voice.lang);
    console.log("URI de la voz: " + voice.voiceURI);
    console.log("Nombre local: " + voice.localService);
    console.log("Voz predeterminada: " + voice.default);
    console.log("Se admite la síntesis: " + voice.localService);
    console.log("--------------");
});