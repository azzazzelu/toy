<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>catalog</title>
  <link rel="stylesheet" href="/css/index.css" />
</head>

<body>
<?php 
    include_once('./elements/header.php')
    ?>
 
  <main>
    <div class="catalog">
      <div class="container">
        <h1 class="title">
          Каталог
        </h1>
        <div class="catalog_cont">
        <?php
            require_once './backend/connect.php';
            $sql = "SELECT * FROM `products` ";
            $product = mysqli_query($connect, $sql);
            if (mysqli_num_rows($product) > 0) {
                while ($row = mysqli_fetch_assoc($product)) {
            ?>
          <div class="catalog_card">
            <h1><?php echo $row['title']?></h1>
            <img src="/img/<?php echo $row['img']?>" alt="" />
            <div class="price">
              <p>Цена:</p>
              <p><span><?php echo $row['price']?></span>руб.</p>
            </div>
            <div class="article">
              <p>Артикул:</p>
              <p><?php echo $row['articul']?></p>
            </div>
            <div class="btn">
              <a href="./backend/basket_back.php?id=<?php echo $row['id'] ?>"> <button>В корзину</button></a>
              <button>Подробнее</button>
            </div>
          </div>
          <?php
                }
            }
            ?>

        </div>
      </div>
    </div>
  </main>
  <?php 
    include_once('./elements/footer.php')
    ?>
</body>

</html>