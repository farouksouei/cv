<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get cv_id from GET method
if (isset($_GET['cv_id'])) {
  $cv_id = $_GET['cv_id'];
} else {
  // Redirect to error page if cv_id is not provided
  header("Location: error.php");
  exit();
}

// Retrieve CV record from database
$sql = "SELECT * FROM cv WHERE id = $cv_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    // Display the CV record using Bootstrap classes
?>
    <!DOCTYPE html>
    <html>

    <head>
      <title>CV</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
          margin: 0;
          padding: 0;
        }

        .container {
          padding: 20px;
        }

        .row {
          margin-bottom: 20px;
        }

        h1,
        h2,
        h3 {
          margin-top: 0;
          margin-bottom: 10px;
          font-weight: bold;
        }

        ul {
          padding-left: 20px;
          margin-bottom: 0;
        }

        ul li {
          margin-bottom: 5px;
        }

        .col-md-6 {
          margin-bottom: 20px;
        }

        .text-muted {
          font-style: italic;
        }
      </style>
    </head>

    <body>

      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo $row['image'] ?>" alt="Profile picture" class="img-fluid rounded">
          </div>
          <div class="col-md-8">
            <h1><?php echo $row['first_name'] ?></h1>
            <p class="lead"><?php echo $row['last_name'] ?></p>
            <ul class="list-unstyled">
              <li><i class="fas fa-envelope"></i><?php echo $row['address'] ?></li>
              <li><i class="fas fa-phone"></i><?php echo $row['email'] ?></li>
              <li><i class="fas fa-globe"></i><?php echo $row['phone'] ?></li>
              <li><i class="fas fa-map-marker-alt"></i><?php echo $row['city'] ?></li>
              <li><i class="fas fa-map-marker-alt"></i><?php echo $row['state'] ?></li>
              <li><i class="fas fa-map-marker-alt"></i><?php echo $row['zip_code'] ?></li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <h2>Summary</h2>
            <p><?php echo $row['summary'] ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <h2>Experience</h2>
            <div class="card">
              <div class="card-body">
                <h3><?php echo $row['experience'] ?></h3>
                <h3>Job title :<?php echo $row['job_title'] ?></h3>
                <p class="text-muted">Start Date : <?php echo $row['start_date'] ?></p>
                <p class="text-muted"> End Date :<?php echo $row['end_date'] ?></p>
                <p class="text-muted"> Description :<?php echo $row['job_description'] ?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <h2>Education</h2>
            <div class="card">
              <div class="card-body">
                <h3>Degree : <?php echo $row['degree'] ?></h3>
                <h3>Institution : <?php echo $row['institution'] ?></h3>
                <p class="text-muted">Start Date : <?php echo $row['start_date_edu'] ?></p>
                <p class="text-muted"> End Date :<?php echo $row['end_date_edu'] ?></p>
                <p class="text-muted"> Description :<?php echo $row['edu_description'] ?></p>
              </div>
            </div>
          </div>
        </div>
        <a href="index.php"><button type="button" class="btn btn-primary btn-lg m-3">Return To home page</button></a>
    <?php
  }
} else {
  // Redirect to error page if no CV record is found
  header("Location: error.php");
  exit();
}

$conn->close();
    ?>
    ``