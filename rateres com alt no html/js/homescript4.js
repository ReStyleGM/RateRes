const narrationButton = document.getElementById('narration-button');
const narrationIcon = document.getElementById('narration-icon');
const narrationStatus = document.getElementById('narration-status');
let isMuted = true;

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

narrationButton.addEventListener('click', toggleNarration);
