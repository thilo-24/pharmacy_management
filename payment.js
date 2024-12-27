document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('paymentForm').addEventListener('submit', function (event) {
        var cardNumber = document.getElementById('card_number').value.trim();
        var expiryDate = document.getElementById('expiry_date').value.trim();
        var cvv = document.getElementById('cvv').value.trim();

        if (!isValidCardNumber(cardNumber)) {
            alert('Please enter a valid 16-digit card number');
            event.preventDefault();
        } else if (!isValidExpiryDate(expiryDate)) {
            alert('Please enter a valid expiry date in MM/YYYY format');
            event.preventDefault();
        } else if (!isValidCVV(cvv)) {
            alert('Please enter a valid CVV');
            event.preventDefault();
        }
    });

    function isValidCardNumber(cardNumber) {
        var sum = 0;
        var digit, i;
        var shouldDouble = false;

        for (i = cardNumber.length - 1; i >= 0; i--) {
            digit = parseInt(cardNumber.charAt(i), 10);

            if (shouldDouble) {
                digit *= 2;
                if (digit > 9) {
                    digit -= 9;
                }
            }

            sum += digit;
            shouldDouble = !shouldDouble;
        }

        return (sum % 10) === 0;
    }

    function isValidExpiryDate(expiryDate) {
        var parts = expiryDate.split('/');
        var month = parseInt(parts[0], 10);
        var year = parseInt(parts[1], 10);
        var currentDate = new Date();
        var currentYear = currentDate.getFullYear() % 100; 

        return (parts.length === 2 && month >= 1 && month <= 12 && year >= currentYear);
    }

    function isValidCVV(cvv) {
        return /^\d{3,4}$/.test(cvv);
    }
});
