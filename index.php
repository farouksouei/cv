<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Creator</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom CSS -->
  <style>
    body {
      height: 100vh;
      margin: 0;
      font-family: 'Arial', sans-serif;
      overflow: hidden;
      position: relative;
    }

    .parallax-bg {
      background: url('image1.jpg') fixed, url('image2.jpg') fixed; /* Two background images for parallax scrolling */
      background-size: cover;
      height: 100vh;
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.3);
      z-index: -1;
    }

    .content-container {
      z-index: 1;
      color: #ffffff;
      padding: 50px;
      text-align: center;
    }

    .logo {
      max-width: 350px;
      margin-bottom: 20px;
    }

    h1 {
      color: #ffffff;
      text-align: center;
      margin-top: 50px;
    }

    .features {
      text-align: center;
      margin: 30px 0;
    }

    .feature-item {
      margin: 20px 0;
    }

    .btn-primary {
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-primary:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }

    .btn-lg {
      padding: 10px 20px;
      font-size: 1.5rem;
    }

    .footer {
      background-color: #343a40;
      color: #ffffff;
      text-align: center;
      padding: 20px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    .boilerplate-text {
      color: #ffffff;
      text-align: left;
      margin-top: 50px;
    }
  </style>
</head>

<body>
  <div class="parallax-bg"></div>
  <div class="overlay"></div>

  <div class="content-container container">
    <img src="logo.png" alt="CV Creator Logo" class="logo">
    <h1>Welcome to CV Creator</h1>
    <div class="features">
      <p class="feature-item">Create professional CVs with ease.</p>
      <p class="feature-item">Access and edit your CVs anytime, anywhere.</p>
      <p class="feature-item">View a history of your past CVs.</p>
    </div>
    <div class="btn-group">
      <a href="form.php"><button type="button" class="btn btn-primary btn-lg m-1">Create Your CV</button></a>
      <a href="cv_table.php"><button type="button" class="btn btn-primary btn-lg m-1">See Your Past CVs</button></a>
    </div>
    <div class="boilerplate-text mt-5">
      <p>Create stunning resumes with our easy-to-use CV Creator. Craft professional CVs that stand out in any job application. Access your CVs anytime, anywhere, and keep track of your career journey effortlessly.</p>
      <p>Our intuitive platform empowers you to showcase your skills, experiences, and achievements in a visually appealing way. Impress employers and increase your chances of landing your dream job with CV Creator.</p>
      <p>Start building your future today. Join CV Creator and take the first step towards a successful career.</p>
    </div>
  </div>

  <div class="footer">
    <p>&copy; 2023 CV Creator. All rights reserved.</p>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar...
  </script>
</body>

</html>
