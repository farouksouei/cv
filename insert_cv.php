<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get form data
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip_code = $_POST['zipcode'];
  $summary = $_POST['summary'];
  $degree = $_POST['degree'];
  $job_title = $_POST['job_title'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $start_date_edu = $_POST['start_date_edu'];
  $end_date_edu = $_POST['end_date_edu'];
  $job_description = $_POST['job_description'];
  $edu_description = $_POST['edu_description'];
  $institution = $_POST['institution'];
  $skill1 = $_POST['skill1'];
  $skill2 = $_POST['skill2'];
  $skill3 = $_POST['skill3'];

  // Upload image file
  $image_path = '';
  if ($_FILES['image']['error'] == 0) {
    $image_path = 'images/' . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
  }

  // control the data
  $errors = [];
  if (empty($first_name)) {
    $errors[] = 'First name is required';
  }

  if (empty($last_name)) {
    $errors[] = 'Last name is required';
  }

  if (empty($email)) {
    $errors[] = 'Email is required';
  }

  // check if email is valid
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email is invalid';
  }

  if (empty($phone)) {
    $errors[] = 'Phone is required';
  }

  if (empty($address)) {
    $errors[] = 'Address is required';
  }

  if (empty($city)) {
    $errors[] = 'City is required';
  }

  if (empty($state)) {
    $errors[] = 'State is required';
  }

  if (empty($zip_code)) {
    $errors[] = 'Zip code is required';
  }

  if (empty($summary)) {
    $errors[] = 'Summary is required';
  }

  if (empty($degree)) {
    $errors[] = 'degree is required';
  }
  if (empty($start_date)) {
    $errors[] = 'Start date is required';
  }

  if (empty($end_date)) {
    $errors[] = 'End date is required';
  }

  if (empty($job_description)) {
    $errors[] = 'Job description is required';
  }

  if (empty($skill1)) {
    $errors[] = 'Skill 1 is required';
  }

  if (empty($skill2)) {
    $errors[] = 'Skill 2 is required';
  }

  if (empty($skill3)) {
    $errors[] = 'Skill 3 is required';
  }

  // If there are no errors, insert the data into the database
  if ($errors === []) {
    // Connect to MySQL
    $pdo = new PDO('mysql:host=localhost;dbname=cv;charset=utf8mb4', 'root', '');

    // Prepare SQL statement
    $stmt = $pdo->prepare('INSERT INTO cv (first_name, last_name, email, phone, address, city, state, zip_code, summary, degree, job_title, start_date, end_date, job_description, skill1, skill2, skill3, image, start_date_edu, end_date_edu, edu_description, institution ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

    // Bind values to parameters
    $stmt->bindParam(1, $first_name);
    $stmt->bindParam(2, $last_name);
    $stmt->bindParam(3, $email);
    $stmt->bindParam(4, $phone);
    $stmt->bindParam(5, $address);
    $stmt->bindParam(6, $city);
    $stmt->bindParam(7, $state);
    $stmt->bindParam(8, $zip_code);
    $stmt->bindParam(9, $summary);
    $stmt->bindParam(10, $degree);
    $stmt->bindParam(11, $job_title);
    $stmt->bindParam(12, $start_date);
    $stmt->bindParam(13, $end_date);
    $stmt->bindParam(14, $job_description);
    $stmt->bindParam(15, $skill1);
    $stmt->bindParam(16, $skill2);
    $stmt->bindParam(17, $skill3);
    $stmt->bindParam(18, $image_path);
    $stmt->bindParam(19, $start_date_edu);
    $stmt->bindParam(20, $end_date_edu);
    $stmt->bindParam(21, $edu_description);
    $stmt->bindParam(22, $institution);

    // Execute SQL statement
    $stmt->execute();

    // Redirect to success page with GET request (URL param: ?created=true) and Cv ID as URL param
    header('Location: success.php?created=true&id=' . $pdo->lastInsertId());
  } else {
    // Store errors in session storage and redirect back to a error page
    session_start();
    $_SESSION['errors'] = $errors;
    header('Location: error.php?created=false?errors=true');
  }
  exit;
}
