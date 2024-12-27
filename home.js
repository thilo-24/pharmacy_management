const header = document.querySelector("header");

window.addEventListener("scroll", function() {
    header.classList.toggle("sticky",this.window.scrollY > 0);
});
let icon = document.querySelector('#icon');
let menu = document.querySelector('.menu');
icon.onclick = () => {
	 menu.classList.toggle('open');
};


const parentContainer = document.querySelector('.hero-con');

parentContainer.addEventListener('click', event => {
    const current = event.target;
    const isButton = current.classList.contains('button'); 

    if (!isButton) return;

    const currentText = current.parentNode.querySelector('.butto');

    currentText.classList.toggle('butto--show');
    current.textContent = current.textContent.includes('Read More..') ?
        "Read Less.." : "Read More.."; 
});

import { Dropdown, Input, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Dropdown, Input, Ripple });

const searchInputDropdown = document.getElementById('search-input-dropdown');
const dropdownOptions = document.querySelectorAll('.input-group-dropdown-item');

searchInputDropdown.addEventListener('input', () => {
  const filter = searchInputDropdown.value.toLowerCase();
  showOptions();
  const valueExist = !!filter.length;

  if (valueExist) {
    dropdownOptions.forEach((el) => {
      const elText = el.textContent.trim().toLowerCase();
      const isIncluded = elText.includes(filter);
      if (!isIncluded) {
        el.style.display = 'none';
      }
    });
  }
});

const showOptions = () => {
  dropdownOptions.forEach((el) => {
    el.style.display = 'flex';
  })
}
	
