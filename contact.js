document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const topic = document.getElementById('topic').value.trim();
        const msg = document.getElementById('msg').value.trim();

        if (name === '' || email === '' || topic === '' || msg === '') {
            alert('Please fill in all fields');
            return;
        }


        const formData = new FormData(this);

        fetch('contacts.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {

            alert(data);
            form.reset(); 
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
