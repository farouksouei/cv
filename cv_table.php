<?php
// Connect to database
$pdo = new PDO('mysql:host=localhost;dbname=cv;charset=utf8mb4', 'root', '');

// Prepare SQL statement
$stmt = $pdo->prepare('SELECT id, first_name, last_name, email, phone FROM cv');

// Execute SQL statement
$stmt->execute();

// Get all CVs as an array of associative arrays
$cvs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CV Table</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>

  <div class="container">
    <h1>CV Table</h1>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cvs as $cv) : ?>
          <tr>
            <td><?= $cv['id'] ?></td>
            <td><?= $cv['first_name'] ?></td>
            <td><?= $cv['last_name'] ?></td>
            <td><?= $cv['email'] ?></td>
            <td><?= $cv['phone'] ?></td>
            <td><a href="cv.php?cv_id=<?php echo $cv['id'] ?>"><button type="button" class="btn btn-primary btn-lg m-3">See this CV</button></a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="form.php"><button type="button" class="btn btn-primary btn-lg m-3">Create Your CV here</button></a>
  </div>
</body>

</html>