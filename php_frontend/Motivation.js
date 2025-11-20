const quotes = document.querySelectorAll('.motivation .quote');
let current = 0;

setInterval(() => {
  quotes[current].classList.remove('active'); // hide current
  current = (current + 1) % quotes.length;     // next quote
  quotes[current].classList.add('active');    // show next
}, 4000); // change every 4 seconds