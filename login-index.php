<?php 
//login template
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>multi-user</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<style>
* {
  box-sizing: border-box;
}

body {
        color: #222;
        line-height: normal;
        font-size: 16px;
        font-family: sans-serif;
}

a, a:hover {
  color: #33334d;
  text-decoration: none;
  font-weight: 600;
}

nav {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  height: 50px;
  background: #fff;
  box-shadow: 0 0px 9px 4px rgba(0, 0, 0, 0.1), 0 -5px 2px 2px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  min-width: 580px;
}
nav .logo {
  position: relative;
  float: left;
  height: 50px;
  line-height: 50px;
  padding: 0 15px;
  font-size: 22px;
  font-weight: 900;
  text-transform: uppercase;
}
nav .logo span {
  display: inline-block;
  position: relative;
  top: -8px;
  font-size: 13pt;
}
nav .logo:hover {
  background: #9494b8;
}
nav .links {
  float: right;
  margin-right: 30px;
  position: relative;
}
nav .links li {
  float: left;
  list-style: none;
  position: relative;
  margin: 10px;
  display: inline-block;
}
nav .links li > a {
  position: relative;
  display: inline-block;
  padding: 0 10px;
  line-height: 30px;
  height: 30px;
}
nav .links li > a:hover {
  color: #fff;
  background: #33334d;
  border-radius: 2px;
}
nav .links li > a[class^=trigger-] {
  padding-right: 40px;
}
nav .links li > a .arrow {
  position: absolute;
  width: 10px;
  height: 10px;
  top: 35%;
  text-align: center;
  right: 10px;
  border-width: 5px 5px 0 5px;
  border-style: solid;
  border-color: rgba(0, 0, 0, 0.3) transparent;
}
nav .links li > a .arrow:after {
  content: "";
  border-left: 1px solid rgba(0, 0, 0, 0.15);
  top: -10px;
  left: -15px;
  position: absolute;
  height: 15px;
}
nav .links li ul {
  position: absolute;
  left: 0;
  margin: 0;
  background: #fff;
  border-radius: 2px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  display: none;
}
nav .links li ul > li {
  clear: both;
  list-style: none;
  display: block;
  padding: 0 10px;
  margin: 0;
  width: 100%;
}
nav .links li ul > li:hover {
  background: #9494b8;
}
nav .links li ul > li:hover > a {
  background: #9494b8;
  color: #fff;
}
nav .links li:hover > .drop {
  display: block;
  animation: fadeInRight 0.3s ease;
  -webkit-animation: fadeInRight 0.3s ease;
}

@keyframes fadeInRight {
  0% {
    opacity: 0;
    transform: translate3d(100%, 0, 0);
  }
  100% {
    opacity: 1;
    transform: none;
  }
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>
<body>
<nav id="navigation">
  <a href="index.html" class="logo">HOW DO WE DO<span>+<span></a>
  <ul class="links">
    <li class="dropdown"><a href="home.html" class="trigger-drop">HOME<i class="arrow"></i></a>
      <ul class="drop">
        <li><a href="fotografie.html">Fotografie</a></li>
        <li><a href="referenties.html">Referenties</a></li>
        <li><a href="overons.html">Info</a></li>
        <li><a href="prijzen.html">Prijzen</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </li>
    <li class="dropdown"><a href="login-index.php" class="trigger-drop">LOGIN<i class="arrow"></i></a>
    <li class="dropdown"><a href="logout.php" class="trigger-drop">LOGOUT<i class="arrow"></i></a>
  </ul>
</nav>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
      	      action="check-login.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">LOGIN</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">Username</label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
		 
		  <button type="submit" 
		          class="btn btn-primary">LOGIN</button>
		</form>
      </div>
</body>
</html>
<?php }else{
	header("Location: redirect.php");
} ?>