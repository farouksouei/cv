<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Creation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom CSS -->
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 150vh;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="container">
      <h1>CV Form</h1>
      <form action="insert_cv.php" method="post" enctype="multipart/form-data">

        <!-- Personal Details -->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h2 class="box">Personal Details</h2>
        <div class="form-group row">
          <label for="first_name" class="col-sm-2 col-form-label">First Name:</label>
          <div class="col-sm-10">
            <input type="text" name="first_name" id="first_name" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="last_name" class="col-sm-2 col-form-label">Last Name:</label>
          <div class="col-sm-10">
            <input type="text" name="last_name" id="last_name" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email:</label>
          <div class="col-sm-10">
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
          <div class="col-sm-10">
            <input type="text" name="phone" id="phone" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="address" class="col-sm-2 col-form-label">Address:</label>
          <div class="col-sm-10">
            <input type="text" name="address" id="address" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="city" class="col-sm-2 col-form-label">City:</label>
          <div class="col-sm-10">
            <input type="text" name="city" id="city" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="state" class="col-sm-2 col-form-label">State:</label>
          <div class="col-sm-10">
            <input type="text" name="state" id="state" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="zipcode" class="col-sm-2 col-form-label">Zipcode:</label>
          <div class="col-sm-10">
            <input type="text" name="zipcode" id="zipcode" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="country" class="col-sm-2 col-form-label">Country:</label>
          <div class="col-sm-10">
            <select name="country" id="country" class="form-control">
              <option value="">-- Select Country --</option>
              <option value="United States">United States</option>
              <option value="Canada">Canada</option>
              <option value="Mexico">Mexico</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="Spain">Spain</option>
              <option value="Italy">Italy</option>
            </select>
          </div>
        </div>
        <!-- Education -->
        <h2>Education</h2>
        <div class="form-group row">
          <label for="degree" class="col-sm-2 col-form-label">Degree:</label>
          <div class="col-sm-10">
            <input type="text" name="degree" id="degree" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="institution" class="col-sm-2 col-form-label">Institution:</label>
          <div class="col-sm-10">
            <input type="text" name="institution" id="institution" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="start_date_edu" class="col-sm-2 col-form-label">Start Date:</label>
          <div class="col-sm-10">
            <input type="date" name="start_date_edu" id="start_date_edu" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="end_date_edu" class="col-sm-2 col-form-label">End Date:</label>
          <div class="col-sm-10">
            <input type="date" name="end_date_edu" id="end_date_edu" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="edu_description" class="col-sm-2 col-form-label">Education Description:</label>
          <div class="col-sm-10">
            <textarea name="edu_description" id="edu_description" class="form-control" rows="5" required></textarea>
          </div>
        </div>

        <!-- Work Experience -->
        <h2>Work Experience</h2>
        <div class="form-group row">
          <label for="job_title" class="col-sm-2 col-form-label">Job Title:</label>
          <div class="col-sm-10">
            <input type="text" name="job_title" id="job_title" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="employer" class="col-sm-2 col-form-label">Employer:</label>
          <div class="col-sm-10">
            <input type="text" name="employer" id="employer" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="start_date" class="col-sm-2 col-form-label">Start Date:</label>
          <div class="col-sm-10">
            <input type="date" name="start_date" id="start_date" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="end_date" class="col-sm-2 col-form-label">End Date:</label>
          <div class="col-sm-10">
            <input type="date" name="end_date" id="end_date" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="job_description" class="col-sm-2 col-form-label">Job Description:</label>
          <div class="col-sm-10">
            <textarea name="job_description" id="job_description" class="form-control" rows="5" required></textarea>
          </div>
        </div>

        <!-- Skills -->
        <h2>Skills</h2>
        <div class="form-group row">
          <label for="skill1" class="col-sm-2 col-form-label">Skill 1:</label>
          <div class="col-sm-10">
            <input type="text" name="skill1" id="skill1" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="skill2" class="col-sm-2 col-form-label">Skill 2:</label>
          <div class="col-sm-10">
            <input type="text" name="skill2" id="skill2" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="skill3" class="col-sm-2 col-form-label">Skill 3:</label>
          <div class="col-sm-10">
            <input type="text" name="skill3" id="skill3" class="form-control" required>
          </div>
        </div>

        <!-- Image -->
        <h2>Image</h2>
        <div class="form-group row">
          <label for="image" class="col-sm-2 col-form-label">Upload Image:</label>
          <div class="col-sm-10">
            <input type="file" name="image" id="image" class="form-control-file" required>
          </div>
        </div>

        <!-- Summary -->
        <h2>Summary</h2>
        <div class="form-group row">
          <label for="summary" class="col-sm-2 col-form-label">Summary:</label>
          <div class="col-sm-10">
            <textarea name="summary" id="summary" class="form-control" rows="5" required></textarea>
          </div>

          <div class="form-group row">
            <div class="col-sm-12 text-center">
              <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              <a href="index.php"><button type="button" class="btn btn-primary btn-lg m-3">Return</button></a>

            </div>
          </div>




      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>