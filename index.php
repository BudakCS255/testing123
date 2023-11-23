<!DOCTYPE html>
<html>
<head>
    <title>Image Upload and Viewer</title>
</head>
<body>
    <h1>Temporary Index Page</h1>
    
    <h2>Upload Images</h2>
    <p>Click the button below to go to the image upload page:</p>
    <a href="upload.php">Go to Upload Page</a>

    <h2>View and Download Images</h2>
    <p>Click the button below to go to the image view/download page:</p>
    <a href="download.php">Go to Download Page</a>

    <!-- Feedback area for displaying messages -->
    <div id="upload-feedback">
        <?php
        if (isset($_GET['message'])) {
            echo '<p>' . htmlspecialchars($_GET['message']) . '</p>';
        }
        ?>
    </div>
</body>
</html>
