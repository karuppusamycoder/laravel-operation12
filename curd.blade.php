<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
p {
  text-align: center;
  font-size: 16px;
  margin-top: 0px;
  background-color: yellow;
  margin-left: 104px;
  margin-right: 106px;
  margin-bottom: 1px;
}
</style>
</head>
<body>

  
<div>
  <p id="demo"></p>
</div>

<form action="{{url('secondlogin-save')}}" method="post">

  @csrf
  <div class="container">
    <h1>Register</h1>
    <h4>Please fill in this form to create an account.</h4>
    <hr>

    <label for="Employee ID"><b>Employee ID</b></label>
    <input type="text" placeholder="Enter your ID" name="employeeid" id="id" required>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="name" id="name" required>

    <label for="role"><b>Employee Role</b></label>
    <input type="text" placeholder="Enter your role" name="role" id="role" required>

    <label for="depatment"><b>Department</b></label>
    <input type="text" placeholder="Enter your department" name="department" id="department" required>
   

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  
</form>

<<!-- div>
  <input id="myInput" type="text" placeholder="Search..">
</div> -->
<div class="container">
  <input id="myInput" type="text" placeholder="Search..">
  <h2>Registration Table</h2>
            
  
     <table class="table table-bordered" id="myTable" data-filter-control="true" data-show-search-clear-button="true">
    <thead>
      <tr>
        <th>EMPLOYEE ID</th>
        <th>NAME</th>
        <th>ROLE</th>
        <th>DEPARTMENT</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody id="myTable">
      
       @foreach($register as $registers)
       <tr>
        <td>{{$registers->employeeid}}</td>
        <td>{{$registers->name}}</td>
        <td>{{$registers->role}}</td>
        <td>{{$registers->department}}</td>
        <td>
          <a href="{{url('registers-edit')}}/{{$registers->id}}" class="btn btn-warning">Edit</a>
          <a href="{{url('registers-delete')}}/{{$registers->id}}" class="btn btn-warning">Delete</a>
        </td>

       @endforeach
      </tr>
    </tbody>
  </table>
<button id="bton" class="btn btn-warning" onclick="convert('xlsx')">EXPORT EXCEL</button>


  

</div>

  
  <!-- {{ $register->links() }} -->


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src=”jquery.min.js” type=”text/javascript”></script>

    <script src=”table2excelmodified.js” type=”text/javascript”></script>
    <script src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script type="text/javascript">
  
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



function convert(type, fn, dl) {
        var table = document.querySelector("#myTable");
        var wb = XLSX.utils.table_to_book(table, { sheet: "sheet1" });
        return dl ? 
        XLSX.write(wb, { bookType: type, bookSST: true, type: "base64" }) :
        XLSX.writeFile(wb, fn || "SheetName." + (type || xlsx));
      }





var countDownDate = new Date("nov20, 2022 10:00:25").getTime();

var x = setInterval(function() {

  
  var now = new Date().getTime();
    
  
  var distance = countDownDate - now;
    
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);




</script>


</body>
</html>
