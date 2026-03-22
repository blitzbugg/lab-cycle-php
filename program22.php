<!-- Write a JavaScript program to perform phone number validation. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number Validation</title>
</head>
<body>
    <h2>Phone Number Validation</h2>
    <form id="phoneForm">
        <label for="phone">Enter your phone number:</label><br>
        <input type="text" id="phone" name="phone" required>
        <br><br>
        <button type="submit">Validate</button>
    </form>
    <script>
        document.getElementById('phoneForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const phone = document.getElementById('phone').value;
            const phonePattern = /^\d{10}$/; // Validates a 10-digit phone number
            if (phonePattern.test(phone)) {
                document.getElementById('phoneForm').innerHTML = "<p>Phone number is valid: " + phone + "</p>";
            } else {
                document.getElementById('phoneForm').innerHTML = "<p>Invalid phone number. Please enter a 10-digit number.</p>";
            }
        });
    </script>
</body>
</html>