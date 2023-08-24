<?php
$title = 'Germas Admin';
?>

<?php
require_once('../layout/admin/header.php')
?>
<div class="container">
    <div class="item_wrap">
        <div class="item">
        <!DOCTYPE html>
            <html>
            <head>
                <title>Formulir Germas</title>
            </head>
            <body>
                <h1>Formulir data Germas</h1>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="title">Judul:</label>
                    <input type="text" name="title" id="title" required><br><br>
                    
                    <label for="description">Deskripsi:</label>
                    <input type="text" name="description" id="description" required><br><br>
                    
                    <label for="file">Upload file:</label>
                    <input type="file" name="file" id="file" accept=".docx, .xlsx, .ppt, .png, .jpg" required><br><br>
                    
                    <input type="submit" value="Upload">
                </form>
            </body>
            </html>
        </div>
    </div>
</div>
</div>
</div>
<?php
require_once('../layout/admin/footer.php')
?>