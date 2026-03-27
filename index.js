// Wait until the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
  
  // ===== SEARCH FUNCTIONALITY =====
  const searchInput = document.querySelector('.search-box input');
  const cards = document.querySelectorAll('.card');

  searchInput.addEventListener('input', () => {
    const query = searchInput.value.toLowerCase();

    cards.forEach(card => {
      const title = card.querySelector('h4').textContent.toLowerCase();
      const description = card.querySelector('p').textContent.toLowerCase();

      // Show card if title or description includes search query
      if (title.includes(query) || description.includes(query)) {
        card.style.display = 'flex'; // show card
      } else {
        card.style.display = 'none'; // hide card
      }
    });
  });


  // ===== OPTIONAL: CARD VIEW BUTTON LOGGING =====
  const viewButtons = document.querySelectorAll('.card button');
  
  viewButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      const cardTitle = e.target.closest('.card').querySelector('h4').textContent;
      console.log(`User clicked View on: ${cardTitle}`);
      // You can later replace this with navigation or modal popup
    });
  });

});