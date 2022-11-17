<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="{{url('secondlogin-update')}}" method="post">

  @csrf
<input type="hidden" name="id" value="{{$registers->id}}">

  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="Employee ID"><b>Employee ID</b></label>
    <input type="text" placeholder="Enter your ID" name="employeeid" id="id"  value="{{$registers->employeeid}}" required>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="name" id="name" value="{{$registers->name}}" required>

    <label for="role"><b>Employee Role</b></label>
    <input type="text" placeholder="Enter your role" name="role" id="role" value="{{$registers->role}}" required>

    <label for="depatment"><b>Department</b></label>
    <input type="text" placeholder="Enter your department" name="department" id="department" value="{{$registers->department}}" required>
   

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  
</form>




</body>
</html>