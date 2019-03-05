<head>
<style>
.quickaddform{
display:none;
}

body{

  background-size: cover;
  height: 100%;
  
   background-image: url("https://images.unsplash.com/photo-1470790376778-a9fbc86d70e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60");
}h2{
     color: #826922;
    text-shadow: -1px -1px 1px #000, 1px 1px 1px #ccc;
}
button{
	background-color: #555555;
	font-size: 20px;
	border-radius: 12px;
	padding: 10px;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: right;
}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Phone Directory</a>
    </div>
</nav>

<?php

$cnt=mysqli_connect("localhost","root","");
mysqli_select_db($cnt,"phone_directory");
mysqli_query($cnt,"truncate subscribers ");
mysqli_close($cnt);


?>
<form action="home.html">
<button type="submit">BACK</button>
</form>
<div class="footer">
  <p>Vaishnavi Mundhe(m.vaishnavis03@gmail.com)</p>
</div>
</body>