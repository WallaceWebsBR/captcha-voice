var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition


var recognition = new SpeechRecognition();
recognition.continuous = false;
recognition.lang = 'pt-BR';
recognition.interimResults = false;
recognition.maxAlternatives = 1;

function grava() {
    recognition.start();
    console.log('Ready to receive an voice...');
}

recognition.onresult = function (event) {
    // The SpeechRecognitionEvent results property returns a SpeechRecognitionResultList object
    // The SpeechRecognitionResultList object contains SpeechRecognitionResult objects.
    // It has a getter so it can be accessed like an array
    // The first [0] returns the SpeechRecognitionResult at the last position.
    // Each SpeechRecognitionResult object contains SpeechRecognitionAlternative objects that contain individual results.
    // These also have getters so they can be accessed like arrays.
    // The second [0] returns the SpeechRecognitionAlternative at position 0.
    // We then return the transcript property of the SpeechRecognitionAlternative object
    var voice = event.results[0][0].transcript;
    console.log(voice);
    document.getElementById("captcha").value = voice;
    console.log('Confidence: ' + event.results[0][0].confidence);
}

recognition.onspeechend = function () {
    recognition.stop();
}

recognition.onnomatch = function (event) {
    console.log("I can't recognize the speech.");
}

recognition.onerror = function (event) {
    console.log('Error occurred in recognition: ' + event.error);
}
