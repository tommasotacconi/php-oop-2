<?php 
require_once __DIR__ . '/../db/data.php';

echo "<script>const data = JSON.parse($json_data); </script>";
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quattro zampe</title>
  <!-- Link -->
   <!-- Font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom style -->
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
  
  
  <div id="app">
    <header>
      <!-- header logo -->
      <h1 class="logo logging"><a href="../index.php">Quattro zampe</a></h1>
      <!-- central navbar -->
      <nav>
        <ul>
          <li>Perhé scegliere
            <div>
              Quattro zampe
            </div>
          </li>
          <li>Cani</li>
          <li>Gatti</li>
        </ul>
      </nav>
      <!-- Login box and modal window -->
      <div class="login-box logging">
        <div class="text-wrapper">
          Login area
        </div>
      </div>
    </header>

    <main>
      <div class="container-md">

        <!-- Form di registrazione con nome, cognome ed email -->
        <form action="" method="POST">
          <div class="row logging">
            <div class="col logging">
              <label for="user-name">Nome: </label>
              <input type="text" id="user-name" name="user-name">
            </div>
            <div class="col logging">
              <label for="user-surname">Cognome: </label>
              <input type="text" id="user-surname" name="user-surname">
            </div>
            <div class="col logging">
              <label for="user-email">Email: </label>
              <input type="text" id="user-email" name="user-email">
            </div>
            <!-- Buttons box -->
            <div class="col logging">
              <button class="btn btn-sub" type="submit">Invia</button>
              <button class="btn btn-res" type="reset">Reset</button>
            </div>     
          </div>
        </form>

      </div>
    </main>
  </div>
  
  <!-- Vue cdn -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- Vue app -->
  <script src="../jscript/script.js"></script>
</body>
</html>


<!-- final commit -->