<?php
if(isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        exit();
    }
    
    // Upload file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        
        // Send notification to another webpage using JavaScript
        echo "<script>
                var notification = {
                    title: 'File Uploaded',
                    body: 'A new file has been uploaded: ".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]))."',
                    filename: '".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]))."'
                };
                
                // Send notification to another webpage
                window.parent.postMessage(notification, '*');
              </script>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
