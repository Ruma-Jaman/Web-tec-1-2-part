<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Profile</title>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            margin-bottom: 10px;
        }
</style>
</head>
<body>

 

<h2>Student Profile</h2>
<form method="post" action="">
<label for="studentId">Student ID:</label>
<input type="text" id="studentId" name="studentId" required>

 

    <label for="studentName">Name:</label>
<input type="text" id="studentName" name="studentName" required>

 

    <label for="booksBorrowed">Books Borrowed (comma-separated):</label>
<input type="text" id="booksBorrowed" name="booksBorrowed">

 

    <button type="submit" name="submit">Submit</button>
</form>

 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve and sanitize form data
    $studentId = htmlspecialchars($_POST["studentId"]);
    $studentName = htmlspecialchars($_POST["studentName"]);
    $booksBorrowed = htmlspecialchars($_POST["booksBorrowed"]);
?>

 

    <h3>Student Profile</h3>
<p><strong>Student ID:</strong> <?php echo $studentId; ?></p>
<p><strong>Name:</strong> <?php echo $studentName; ?></p>

 

    <p><strong>Books Borrowed:</strong></p>
<ul>
<?php
        $booksArray = explode(',', $booksBorrowed);
        foreach ($booksArray as $book) {
            echo "<li>" . trim($book) . "</li>";
        }
        ?>
</ul>

 

<?php
}
?>

 

</body>
</html>