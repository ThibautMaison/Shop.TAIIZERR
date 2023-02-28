const cards = document.querySelectorAll('.zoom');
  
  cards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.style.transform = 'scale(1.1)';
    });
  
    card.addEventListener('mouseleave', function() {
      this.style.transform = 'scale(1)';
    });
  });