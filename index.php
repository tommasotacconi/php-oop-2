<?php 
require_once __DIR__ . '/db/data.php';

echo "<script>const data = JSON.parse('$json_data'); </script>";

?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie OOP</title>
  <!-- Link -->
  <!-- Custom style -->
  <link rel="stylesheet" href="./style/style.css">
</head>
<body>
  
  
  <div id="app">
    <main>
      <div class="container-md">
        <h1>E-commerce degli animali</h1>

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
                  <span v-html="product.price" class="price"></span>
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
