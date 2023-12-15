const API_KEY = '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'
const UTILIDAD_AI = 'Eres un chatbot asistente en una app de escritura.'



async function getResponse() {
    const userInput = document.getElementById('userInput').value;
    const responseContainer = document.getElementById('response');

    try {
        responseContainer.classList.add('writing-animation');
        responseContainer.innerHTML = 'ChatBot escribiendo...';

        const res = await fetch('https://api.openai.com/v1/chat/completions', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + API_KEY
            },
            body: JSON.stringify({
                model: 'gpt-3.5-turbo',
                messages: [
                    { role: 'system', content: UTILIDAD_AI },
                    { role: 'user', content: userInput }
                ]
            })
        });

        if (!res.ok) {
            throw new Error(`Error ${res.status}: ${await res.text()}`);
        }

        const data = await res.json();
        const aiResponse = data.choices[0].message.content;

        responseContainer.classList.remove('writing-animation');
        responseContainer.innerHTML = `Respuesta del ChatBot: ${aiResponse}`;
    } catch (error) {
        console.error('Error:', error.message);
        responseContainer.innerHTML = 'Error al procesar la solicitud.';
    }

}
async function checkEnter(event) {
    if (event.key === "Enter") {
        getResponse();
    }
}

function openChat() {
    document.getElementById("myChat").style.display = "block";
    document.getElementById("btnInicio").style.display = "none";
}

function closeChat() {
    document.getElementById("myChat").style.display = "none";
    document.getElementById("btnInicio").style.display = "block";
}

