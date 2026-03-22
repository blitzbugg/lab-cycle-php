<!-- Design a signup form to validate username and password using JavaScript. -->
<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
</head>
<body>

    <h2>Create Account</h2>
    <form id="signupForm">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required>
        <br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Sign Up</button>
    </form>
    <script>
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            if (username.length < 5) {
                alert("Username must be at least 5 characters long.");
                return;
            }
            if (password.length < 8) {
                alert("Password must be at least 8 characters long.");
                return;
            }
            document.getElementById('signupForm').innerHTML = "<p>Signup successful for: " + username + "</p>";
        });
    </script>
</body>
</html>
