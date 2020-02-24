import 'sharer.js';
import './highlight';

window.onload = function() {
    Particles.init({
      selector: 'body'
    });
  };
const clickMe = document.querySelector('.test-js');

if (clickMe) {
    clickMe.addEventListener('click', () => {
        clickMe.textContent = 'it works ' + String(Date.now()).slice(-6);
    });
}

const outdated = document.querySelector('[data-phpdate]');

if (outdated) {
    const phpdate = outdated.dataset.phpdate;
    if (((Date.now() / 1000 - phpdate) / 86400) < 365) {
        outdated.style.display = 'none';
    }
}
