<!DOCTYPE html>
<html>
<head>
    <title>Simple Webpage</title>
</head>
<body>
    <h1>Upload Your File</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br><br>
        
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" required><br><br>
        
        <label for="file">Select a file:</label>
        <input type="file" name="file" id="file" accept=".docx, .xlsx, .ppt, .png, .jpg" required><br><br>
        
        <input type="submit" value="Upload">
    </form>
</body>
</html>
