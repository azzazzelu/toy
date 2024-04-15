<?php session_start()?>
<header>
      <div class="hed_cont">
        <div class="logo">
          <a href="./index.html">
            <img src="/img/logo.svg" alt="Логотип" />
          </a>
        </div>
        <nav>
          <ul>
            <li><a href="./index.php">Главная</a></li>
            <li><a href="./catalog.php">Каталог</a></li>
            <li><a href="./about.php">О компании</a></li>
            <li><a href="./contacts.php">Контакты</a></li>
          </ul>
        </nav>
        <?php
          if(!isset($_SESSION['user'])){
            echo "   <div class=\"button\">
            <a href=\"./signIn.php\"><button>Войти</button></a>
          </div> ";
          }else{
                echo "<div class=\"button\">
                <a href=\"./backend/logout.php\"><button>Выйти</button></a>
                <a href=\"./basket.php\"><button>Корзина</button></a>
            </div>";
            }
        ?>
      </div>
    </header>