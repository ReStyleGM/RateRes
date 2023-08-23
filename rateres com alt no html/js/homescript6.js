document.addEventListener('DOMContentLoaded', function() {
  const narrationButton = document.getElementById('narration-button');
  const narrationIcon = document.getElementById('narration-icon');
  const narrationStatus = document.getElementById('narration-status');
  let isMuted = true;

  // Função para reproduzir o áudio do texto
  function textToSpeech(text) {
    // Implemente aqui a lógica para reproduzir o áudio do texto
    // Por exemplo, usando a Web Speech API ou uma biblioteca de sintetização de fala
    // Certifique-se de ajustar o código de acordo com a opção escolhida
  }

  // Adicionar eventos de mouseover aos elementos que desejam ser narrados
  const narratableElements = document.querySelectorAll('.narratable');

  narratableElements.forEach(function(element) {
    element.addEventListener('mouseover', function() {
      const audioText = element.getAttribute('data-audio');
      if (audioText && !isMuted) {
        textToSpeech(audioText);
      }
    });
  });

  function toggleNarration() {
    isMuted = !isMuted;
    if (isMuted) {
      narrationButton.classList.remove('active');
      narrationIcon.classList.add('fa-volume-mute');
      narrationIcon.classList.remove('fa-volume-up');
      narrationStatus.textContent = 'Mutado';
    } else {
      narrationButton.classList.add('active');
      narrationIcon.classList.remove('fa-volume-mute');
      narrationIcon.classList.add('fa-volume-up');
      narrationStatus.textContent = 'Narrando';
    }
  }

  if (narrationButton) {
    narrationButton.addEventListener('click', toggleNarration);
  }
});
