<!DOCTYPE html>
<html>
<head>
    <title>Image Upload and Viewer</title>
</head>
<body>
    <h1>Temporary Index Page</h1>
    
    <h2>Upload Images</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <!-- Allow multiple file selection -->
        <label for="image">Choose image(s) to upload:</label>
        <input type="file" name="image[]" id="image" accept="image/*" multiple>
        <br>
        <label for="folder">Select a folder:</label>
        <select name="folder" id="folder">
            <option value="Case001">Case001</option>
            <option value="Case002">Case002</option>
            <option value="Case003">Case003</option>
        </select>
        <br>
        <input type="submit" value="Upload">
    </form>

    <h2>View and Download Images</h2>
    <form action="download.php" method="GET">
        <label for="view_folder">Select a folder to view images:</label>
        <select name="folder" id="view_folder">
            <option value="Case001">Case001</option>
            <option value="Case002">Case002</option>
            <option value="Case003">Case003</option>
        </select>
        <input type="submit" name="view_images" value="View Images">
    </form>

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
