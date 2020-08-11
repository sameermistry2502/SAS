<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SITE MAP</title>
  <link rel="stylesheet" href="css/siemap.scss">
  <style>
    .mj-sitemap {
  position: relative;
}
.mj-sitemap,
.mj-sitemap ul {
  list-style: none;
}
.mj-sitemap li {
  position: relative;
  padding: 1em;
}
.mj-sitemap li:after, .mj-sitemap li:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  border-width: 1px;
  z-index: 0;
}
.mj-sitemap li:before {
  position: absolute;
  top: 0;
  left: -1.1em;
  height: 150%;
  border-top-style: none;
  border-left-style: solid;
}
.mj-sitemap li:after {
  top: 1.5em;
  left: -1.1em;
  width: 1.5em;
  border-top-style: solid;
}
.mj-sitemap li:last-child:before {
  border-left: none;
}
  </style> 
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
</head>
<body>
<br><br><br>  
<div class="container">  
<ul class="mj-sitemap">
  <li><a href="index.php">Home</a></li>
  <li>Go For 
    <ul>
      <li><a href="">Online Complain</a></li>
      <li><a href="">View Notice Board</a></li>
    </ul>
  </li>
  <li><a href="http://localhost:90/wordpress/">Blog</a></li>
  <li>Login as
    <ul>
      <li><a href="alogin.php">ADMIN</a></li>
      <li><a href="secretary_login.php">SECREATRY</a></li>
      <li><a href="tenant_login.php">TENANT</a></li>
      <li><a href="Member_login.php">MEMBER</a></li>
    </ul>
  </li>
  <li><a href="http://localhost:90/chat/index.php">Go for Chat </a></li>
</ul>
</div>
</body>
</html>
<?php include('footer.php'); ?>