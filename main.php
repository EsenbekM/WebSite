<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="logo.png" type="image/x-icon">
<style>
body {
  background-image: url('https://bootstraptema.ru/_sf/26/51506352.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>
	<title>essa</title>
</head>
<body style="background-color:powderblue;">
	<div><img src="profile.jpg" width="300" height="300" style="vertical-align:right; margin-top:0px;  border-radius: 50%; float: right;" border="2";>
	</div>
	<div>
		<h1 style="text-align:center; color:Lime; font-family:matura mt script capitals;" ><em> Esenbek Mambetov</em> </h1>
	</div>
<div>
	<h3 style="color:green;">Social Status: Student</h3>
	<h3 style="color:orange;">Age: 17 years</h3>
  <h4 style="color:pink;">Phone number: +996-708-601-601 </h4>
	
        <a target="_blank" href="https://www.instagram.com/esen411k/" title="Follow me :)">
<img src="ins.png" alt="Instagram" style="width:70px;height:70px;">
</a>
		<a target="_blank" href="https://wa.me/+996708601601" title="My Whatsapp">
<img src="what.png" alt="WA" style="width:70px;height:70px;">
</a>
	
	<a target="_blank" href="https://m.facebook.com/profile.php?id=100016479917100" title="It's only for PUBG :|">
<img src="fb.png" alt="Facebook" style="width:70px;height:70px;">
</a>
	 <a target="_blank" href="mailto:esenbekm03@gmail.com" title="Send me massage">
<img src="mail.png" alt="Email" style="width:70px;height:70px;">
</a>
	
         <a target="_blank" href="https://github.com/EsenbekM/" title="My works">
<img src="git.png" alt="My works" style="width:70px;height:70px;">
		 
</a>
	<a target="_blank" href="https://t.me/esen4iik" title="My Telegram">
<img src="tele.png" alt="telegram" style="width:70px;height:70px;">
		
</a>
 
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id="fname"required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="lname"required>
        
      <button type="submit" onclick="myFunction()">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
      
      <script lauguage="javascript">
	function myFunction(){
      var a = document.getElementById("fname").value
      var b = document.getElementById("lname").value
      var form = document.querySelector("form")

       if (a=="esen4iik" && b == "12345"){
        form.setAttribute('action', 'https://www.youtube.com/watch?v=yY7iGa4t9-I');
       }else{
        alert('permission denied')
       }
	}


</script>



    </div>
  </form>
</div>
