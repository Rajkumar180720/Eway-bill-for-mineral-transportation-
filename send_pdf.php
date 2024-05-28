<!-- HTML page with form to send email -->
<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>
    <form id="emailForm">
        <label for="recipientEmail">Recipient Email:</label>
        <input type="email" id="recipientEmail" name="recipientEmail" required><br>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
        <button type="submit">Send Email</button>
    </form>

    <script>
        // Handle form submission
        document.getElementById('emailForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
            
            const recipientEmail = document.getElementById('recipientEmail').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            // Make an AJAX POST request to the backend endpoint
            fetch('/send-email', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ recipientEmail, subject, message })
            })
            .then(response => {
                if (response.ok) {
                    alert('Email sent successfully');
                    // Handle success
                } else {
                    alert('Failed to send email');
                    // Handle failure
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error sending email');
                // Handle error
            });
        });
    </script>
</body>
</html>
