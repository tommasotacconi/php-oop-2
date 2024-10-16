<?php 
require_once __DIR__ . '/db/data.php';

echo "<script>const data = JSON.parse($all_json_data); </script>";

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
  <link rel="stylesheet" href="./style/style.css">
</head>
<body>
  
  
  <div id="app">
    <header>
      <!-- header logo -->
      <h1 class="logo">Quattro zampe</h1>
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
          <li class="search-box">
            <form action="">
              <label for="product-input" class="search-label fa-solid fa-magnifying-glass">
              </label>
              <input type="text" placeholder="" name="product-input" id="product-input">
            </form>
          </li>
        </ul>
      </nav>
      <!-- Login box and modal window -->
      <div class="login-box">
        <div class="text-wrapper" @click="goToLogin()">
          Accedi o<br>registrati
        </div>
        <div class="buttons-wrapper">
          <button class="btn" @click="goToLogin()">
            <i class="fa-regular fa-user"></i>
          </button>
        </div>
      </div>
    </header>

    <main>
      <div class="container-md">

        <!-- Contenuti mostrati sotto forma di elenco di singoli blocchi o card -->
        <ul class="row products-list">
          <li class="col product" v-for="product in productsList">
            <img :src="product.img" alt="">
            <div class="card-content">
              <div class="text-content-wrapper">
                <span v-html="product.name" class="name"></span><br>
                <span v-html="product.type" class="type"></span><br>
                <span v-html="product.category.name" class="category"></span><br>
              </div>
              <div class="price-box">
                <span v-html="product.price" class="price" :class="{ 'previous-price': product.discounted_price }"></span>
                <span class="price discounted-price" v-if="product.discounted_price" v-html="product.discounted_price"></span>
              </div>
            </div>
            <img class="category-img" :src="product.category['icon_img']" alt="">
          </li>
        </ul>

      </div>
    </main>
  </div>
  
  <!-- Vue cdn -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- Vue app -->
  <script src="./jscript/script.js"></script>
</body>
</html>


<!-- final commit -->