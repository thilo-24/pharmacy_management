const header = document.querySelector("header");

window.addEventListener("scroll", function() {
    header.classList.toggle("sticky",this.window.scrollY > 0);
});
let icon = document.querySelector('#icon');
let menu = document.querySelector('.menu');
icon.onclick = () => {
	 menu.classList.toggle('open');
};


function validatePostalCode(postalCode) {
   
    var postalCodePattern = /^\d{5}$/;
    return postalCodePattern.test(postalCode);
}
function validatePhoneNumber(phoneNumber) {

    var phoneNumberPattern = /^\d{10}$/;
    return phoneNumberPattern.test(phoneNumber);
}
function handleSubmit(event) {
    event.preventDefault(); 

    var postalCode = document.querySelector('input[name="postal"]').value;
    var phoneNumber = document.querySelector('input[name="telephone"]').value;

    if (!validatePostalCode(postalCode)) {
        alert("Please enter a valid postal code (5 digits).");
        return;
    }
    if (!validatePhoneNumber(phoneNumber)) {
        alert("Please enter a valid phone number (10 digits).");
        return;
    }
    this.submit();
}

document.querySelector('form').addEventListener('submit', handleSubmit);
