document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
  
    searchInput.addEventListener('focus', function() {
      this.setAttribute('placeholder', '');
      this.classList.add('animate__animated', 'animate__bounce');
    });
  
    searchInput.addEventListener('blur', function() {
      this.setAttribute('placeholder', 'Pesquisar restaurantes');
      this.classList.remove('animate__animated', 'animate__bounce');
    });
  });
  