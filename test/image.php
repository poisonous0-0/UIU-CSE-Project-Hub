<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Upload Form</title>
</head>
<body>

<h2>Upload Image</h2>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>
