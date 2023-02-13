<?php


  include('../configs/dbCon.php');


  if (isset($_POST['submit_button'])){

    echo "Submitted";
    $errors = true;

    $name =  $_POST['center_name'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    $password =  $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];


    if($errors){

      $query = "INSERT INTO centers (center_name, location, contact, postmail, email) VALUES ('$name', '$location
      ', '@contact', NULL, '$email')";

     //save to database
     if(mysqli_query($conn, $query)){

      header('Location: ../login/login.php');
     }else{

      echo "Error mysqli_insert" . mysqli_error($conn);
     }



    }
    else{

    }

  }





?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />

    <title>Sign up</title>
  </head>
  <body>
    <div>
      <a href="/home/home.html"
        ><img src="/images/no-bg-logo.png" alt="logo here" width="250px" />
      </a>
    </div>

    <main class="container">
      <div>
        <h3 class="display-5">Register center</h3>
        <form action="/signup/signup.php" method="POST">
          <div class="mb-3">
            <input
              name="center_name"
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Center name"
              required
            />
          </div>
          <div class="mb-3">
            <input
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Location"
              name="location"
              required
            />
          </div>
          <div class="mb-3">
            <input
              name="contact"
              type="text"
              class="form-control"
              id="password_input"
              placeholder="Contacts"
              required
            />
          </div>
          <div class="mb-3">
            <input
              name="email"
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Email address"
            />
          </div>
          <div class="mb-3">
            <input
              name="password"
              type="password"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Password"
              required
            />
          </div>
          <div class="mb-3">
            <input
              name="confirm_password"
              type="password"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Confirm password"
              required
            />
          </div>
          Have an account <a href="/login/login.php">login instead</a>
          <div>
            <button name="submit_button" type="submit" class="btn btn-success">Register</button>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
