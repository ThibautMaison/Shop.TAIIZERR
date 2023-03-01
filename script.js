const cards = document.querySelectorAll('.zoom');
  
  cards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.style.transform = 'scale(1.1)';
    });
  
    card.addEventListener('mouseleave', function() {
      this.style.transform = 'scale(1)';
    });
  });

  const categorieBtns = document.querySelectorAll('.categorie-btn');

    categorieBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // On enlève la classe active de tous les boutons
            categorieBtns.forEach(b => b.classList.remove('active'));

            // On ajoute la classe active sur le bouton cliqué
            btn.classList.add('active');
        });
    });