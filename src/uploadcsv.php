<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CSV</title>
</head>
<body>
    <h1>Upload a CSV File</h1>
    <form action="uploadscript.php" method="POST" enctype="multipart/form-data">
        <label for="csvFile">Choose CSV file:</label>
        <input type="file" name="csvFile" id="csvFile" accept=".csv" required>
        <br><br>
        <button type="submit">Upload and Import</button>
    </form>
</body>
</html>
