<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receiving Page</title>
    <script>
        window.addEventListener('message', function(event) {
            if (event.data.title && event.data.body && event.data.filename) {
                // Display notification
                alert(event.data.title + '\n' + event.data.body);

                // Display uploaded file
                var filename = event.data.filename;
                var fileURL = 'uploads/' + filename;
                var fileLink = document.createElement('a');
                fileLink.href = fileURL;
                fileLink.textContent = filename;
                document.body.appendChild(fileLink);
            }
        });
    </script>
</head>
<body>
    <h2>Receiving Page</h2>
    <!-- Other content of the receiving page -->
</body>
</html>
