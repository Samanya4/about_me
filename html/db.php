<!DOCTYPE html>
<html lang="th" class="isDesktop">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<title>Database</title>
<style>
      body {
      font-size: 20px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start; /* ย้ายเนื้อหาไปชิดด้านบน */
      align-items: flex-start; /* ย้ายเนื้อหาไปชิดด้านซ้าย */
      height: 100vh;
      padding: 20px; /* เพิ่มขอบภายใน body */
    }

    .btn-back-to-profile {
      margin-top: auto; /* ให้ปุ่มอยู่ด้านล่าง */
      background-color: #a4bdb7;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Add slight shadow */
    }
  </style>
</head>
<body>
<?php
   $servername = "db";
   $username = "devops";
   $password = "devops101";

   $dbhandle = mysqli_connect($servername, $username, $password);
   $selected = mysqli_select_db($dbhandle, "titanic");
   
   echo "Connected database server<br>";
   echo "Selected database";
?>
</body> 
<a href="index.html" class="btn btn-primary btn-back-to-profile mt-3"> Back to Profile </a>
</html>

