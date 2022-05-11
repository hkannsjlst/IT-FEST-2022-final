   <!-- Подключения к бд для взаимодействия  -->
    <?php
include "config/we.php"; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WorldOfCraft/IT-Fest 2022</title>
  <!-- Иконка -->
  <link rel="icon" href="img/mods_photos/fav.png" type="image/x-icon">
  <!-- Подключили шрифты -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>  

  <!-- Подключили бутстрап -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">


<!-- Для слайд шоу  -->

<link rel="stylesheet" href="css/slider.css" type="text/css">
<!-- Эти скрипты оставлены в хедде для нормальной работы галереи, а точнее её подгрузке  -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>

<!-- для плавного скролла -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">

<!-- Для слайд шоу  -->

<meta name="robots" content="noindex,follow" />

  

    </head>
    <body>

      <header>

        <div class="container">
          <div class="row">
            <div class="col-md-2">
              
              <img class="logo" src="http://img1.wikia.nocookie.net/__cb20111230161227/assassinscreed/images/7/70/Minecraft-logo.png" width="300">
            </div>
           
           
        
            <div class="col-md-10">
            
            <!-- Навигация -->
              <nav class="navbar navbar-default" role="navigation">
              <!-- Группировка для удобства на мобилках -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#minecraft-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Менюшка -->
                <div class="collapse navbar-collapse" id="minecraft-navbar">
                  <ul class="nav navbar-nav navbar-right">
                <!-- Кнопки навигации -->
                   

                    <li><a href="#raiting">Рейтинг</a></li>


                    <li><a href="#features">О сервере</a></li>
                    <li><a href="#photos">Галерея</a></li>

                    <li><a href="#betates">Бета тест </a></li>
                    <li><a href= "blog.php" >
                    Новости в блоге </a></li>
                    <!-- Конец меню -->
          
                  </ul>
                </div>
              </nav>
          
            </div>
          </div>
        </div>

       <!-- Главный, приветственный банер  -->
        <h1>Вся страна в одном компьютере</h1>
        <p>Первый Minecraft сервер  для тех. творчества при поддержке ФЦДО<br>
        Карта игровой зоны соответсвует карте территорий Российской Федерации<br>
        На карту добавлены абсолютно все регионы страны</p>
          <div class="links">
           
           
          </div>
          
      <!-- Конец хедера -->
        </header>
     
        <!-- Доп инфа  -->
        <div class="row">
          <div id="features">
          <h1> Особенности и информация о  <span>нашем</span> сервере<br>Каждый найдёт что-то своё</h1>




        
<!-- ДЛЯ КОРРЕКТНОЙ РАБОТЫ И СКРИПТ И СТИЛИ КАРАНДАША НЕ ВЫНЕСЕНЫ В ЦСС И ДЖС ФАЙЛ -->

<script>$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});</script>
<!-- Карандаш для редактирования информации> -->
<p> <a href="crud/index.php">  <span data-toggle="tooltip" title="Нажмите, чтобы перейти к редактированию" class='copyright'></span> </a> </p>

<style>

.copyright:after{
    content: '\270E';
    color:red;
    font-size:20px
}
</style>

          <!-- Первая запись из информации о сервера, не вынесена в бд и служит как пример записи. в случае если все остальные удалят  -->
          <div class="feature-list"> 

  <div class="col-md-8 col-md-offset-2" style="margin-top:30px"> 
              <div class="col-md-4">
                <div class="col-md-4">
                <img class="feature-img img-responsive" src="img/features/feature-leaderboards.jpg" style="height:auto">
                </div>
                <div class="col-md-8">
                <h3>Рейтинг</h3>
                <p>Удобная рейтинговая система. Рейтинг всех игроков сервера находится на нашем сайте, чтобы его посмотреть не нужно заходить в игру</p>
                
                
                
              </div>
    
</div>
         
              <!-- Делаем запрос на подключение к бд с нужной инфой   -->
       
 
              <?php
  $products = mysqli_query($connect, "SELECT * FROM `infa`");

/*
 * Преобразовываем полученные данные в нормальный массив
 */

$products = mysqli_fetch_all($products);

/*
 * Перебираем массив и рендерим HTML с данными из массива
 * Ключ 0 - id
 * Ключ 1 - описание 
 * Ключ 2 - загоолвок  
 * Ключ 4 - фото
 */

foreach ($products as $product) {
    ?>
 <div class="col-md-4">
  <div class="col-md-4">
  <img class="feature-img img-responsive" src="test/files/<?php echo $product[4]; ?>" style="height:auto">
  </div>
  <div class="col-md-8">
    <h3><?php echo $product[2] ?></h3>
    <p><?php echo $product[1] ?></p>
  </div>
  <div class="col-md-8 col-md-offset-2">
</div>
<div class="col-md-8 col-md-offset-2">
</div>

</div>
<?php 


}
?>

</div>
</div>
          </div>
        </div>
        </div>
        
       



<!-- конец списка с инфой  -->
<hr >
<h2 id="raiting" style="text-align: center;">Рейтинг игроков </h2>
<iframe referrerpolicy="no-referrer-when-downgrade" height="600px" width="100%" style="border:none;" src="https://view-awesome-table.com/-MzoEn9T56hH-3NIavai/view" ></iframe>
        
  <!-- Блок с фотками -->
        <div class="row">
            <div id="about">
              <h1>
                Проработанный мир <br>
                
    
              </h1>
              <p>
                Карта содержит все регионы России<br>
                Приключения уже ждут вас

                
                <br>
                Ниже мы расположили подборку фотографий с нашего сервера<br>
              </p>
           
          </div>
        </div>
        <
        <!-- Галерея слайд шоу с помощью jquary, пока юзер не кликнет на фотку работает слайд шоу  -->
        <br ><center><a href="http://www.s-sd.ru"><img src="/files/logo.png" alt=""/></a></center><br>
        <div align=center><div class="flex-container">
          <div id="photos" class="flexslider">
            <ul class="slides">
              <li>
                <a><img src="img/m_rus2.jpg" /></a>
              
              </li>
              
              <li>
                <img src="img/m_rus3.jpg" />
              
              </li>
              
              <li>
                <img src="img/m_rus1.jpg" />

              
              </li>
              <li>
                <img src="img/m_rus5 (1).jpg" />
              
              </li>
              <li>
                <img src="img/m_rus6.jpg" />
              
              </li>
            </ul>
          </div>
        </div>
        </div>
        <form action="mods.php" method="GET">
      
<a href="galery.php" class="button28">Больше фотографий </a>
      
        <!-- Главные моды -->
        <div class="row">
          <div id="servers">
            <h1>Интересные <span>Модификации</span><br>Инструкция по установке в меню</h1>

            <div class="col-md-8 col-md-offset-2">

              <div class="col-md-4"><!-- мод 1  -->
                <img src="img/mods_photos/mod.jpg" class="img-responsive" style="margin: 0 auto;">
                <h3>Температура и уровень воды</h3>
                <p>Мод добавит в майнкрафт механику с температурой тела и насыщенностью водой.
          
                   
                   
     В зависимости от биома у игрока будет изменяться температура тела, если она упадет крайне низко, то  игрок  начнёт терять ХП 
        </p>
       
        <p>  <a href="https://ru-minecraft.ru/mody-minecraft/61310-survive-mehanika-temperatury-i-nasyschennosti-vodoy.html" target="blank" id="button3" class="butttonText">Скачать мод</a> </p>

              </div>
              
              <div class="col-md-4"><!-- мод 2 -->
                <img src="img/mods_photos/m.jpg" class="img-responsive" style="margin: 0 auto;">
                <h3>Гаджеты для строительства</h3>
                <p>Мод добавит в майнкрафт 2 гаджета, которые очень помогут любителям построить здания в майнкрафте. С помощью них можно будет построить/заменить сразу же много блоков за один клик. Управление кнопками
                
                </p>

              <p>  <a href="list.php" id="button3" target= " blank" class="butttonText">Скачать мод</a> </p>



              </div>
              <div class="col-md-4"><!-- мод 3   -->
                <img src="img/mods_photos/m_adorn.jpg" class="img-responsive" style="margin: 0 auto;">
                <h3>Простая мебель и декорации</h3>
                <p>Мод для свежей версии игры который добавляет в игру простую мебель для украшения и декорирования, вы найдете разноцветные столы и стулья, диваны, кухонные столы и тумбочки, а также прочий декор
                 
                </p>
                <p>  <a href="https://ru-minecraft.ru/mody-minecraft/56399-adorn.html"  target= " blank" id="button3" class="butttonText">Скачать мод</a> </p>

              </div>

            </div>
            <!-- Кнопка перенаправляющая в мастерскую модов  -->
            <a href="mods.php" class="button28">Больше модов </a>
      
</form>

          </div>
        </div>
       

        <!-- приглашение на бета тест -->
        <div class="row">
          <div id="donate">
            <div class="container">
              <div class="col-md-8">
              <h1>Сервер находится на стадии разработки, но запись на Бета тест уже открыта. Скорей заполняй форму!</h1>
              <p id="betates">Пожалуйста, отвечайте на все вопросы формы корректно, указывая правдивую инфоомацию. В противном случае, если вам выпадет возможность принять участие в тестировании из-за некорректных данных мы не сможем с вами связаться</p>
    
 <!-- Кнопка отсылающая на страницу с формой для бета теста -->
 <button onclick="check()"  type="button" class="btn btn-secondary">Заполнить форму </button>

  <!-- Кнопка  с ссылкой которая позволяет посмотреть список участников, которые подали заявки  -->
  <button   onclick="b()" class="btn btn-secondary  pull-right" type="button">Список заявок </button>

  
 
      <!-- фотка -->
            </div>
            <div class="col-md-4">
              <img class="visible-lg" src="img/3d-skin.png">
            </div>
            </div>
          </div> 
        </div>
      <!-- Конец основного контента -->

        <!-- Подвал(футер сайта) -->
        <div class="row">
     
          <div class="container">
            <footer>
            <div class="col-md-4">
              <img src="http://img1.wikia.nocookie.net/__cb20111230161227/assassinscreed/images/7/70/Minecraft-logo.png" width="270">
                </div>
            <div class="col-md-8">
              <div class="row">
                <h2>Контакты ФЦДО в  <span>социальных</span> сетях</h2>
              <div class="social-links">
                <div class="row">
                  <div class="spacer"></div>
                  <div class="links">
                    <div class="social discord">
                      <a href=" 
                      https://discord.gg/8kpuuzG4jU
                      " target="_blank">
                        <svg role="img" viewBox="0 0 28 20">
                          <path fill="currentColor" d="M20.6644 20C20.6644 20 19.8014 18.9762 19.0822 18.0714C22.2226 17.1905 23.4212 15.2381 23.4212 15.2381C22.4384 15.881 21.5034 16.3334 20.6644 16.6429C19.4658 17.1429 18.3151 17.4762 17.1884 17.6667C14.887 18.0953 12.7774 17.9762 10.9795 17.6429C9.61301 17.381 8.43836 17 7.45548 16.6191C6.90411 16.4048 6.30479 16.1429 5.70548 15.8096C5.63356 15.7619 5.56164 15.7381 5.48973 15.6905C5.44178 15.6667 5.41781 15.6429 5.39384 15.6191C4.96233 15.381 4.7226 15.2143 4.7226 15.2143C4.7226 15.2143 5.87329 17.1191 8.91781 18.0238C8.19863 18.9286 7.31164 20 7.31164 20C2.0137 19.8333 0 16.381 0 16.381C0 8.7144 3.45205 2.50017 3.45205 2.50017C6.90411 -0.07123 10.1884 0.000197861 10.1884 0.000197861L10.4281 0.285909C6.11301 1.52399 4.12329 3.40493 4.12329 3.40493C4.12329 3.40493 4.65068 3.11921 5.53767 2.71446C8.10274 1.59542 10.1404 1.2859 10.9795 1.21447C11.1233 1.19066 11.2432 1.16685 11.387 1.16685C12.8493 0.976379 14.5034 0.92876 16.2295 1.11923C18.5068 1.38114 20.9521 2.0478 23.4452 3.40493C23.4452 3.40493 21.5514 1.61923 17.476 0.381146L17.8116 0.000197861C17.8116 0.000197861 21.0959 -0.07123 24.5479 2.50017C24.5479 2.50017 28 8.7144 28 16.381C28 16.381 25.9623 19.8333 20.6644 20ZM9.51712 8.88106C8.15068 8.88106 7.07192 10.0715 7.07192 11.5239C7.07192 12.9763 8.17466 14.1667 9.51712 14.1667C10.8836 14.1667 11.9623 12.9763 11.9623 11.5239C11.9863 10.0715 10.8836 8.88106 9.51712 8.88106ZM18.2671 8.88106C16.9007 8.88106 15.8219 10.0715 15.8219 11.5239C15.8219 12.9763 16.9247 14.1667 18.2671 14.1667C19.6336 14.1667 20.7123 12.9763 20.7123 11.5239C20.7123 10.0715 19.6336 8.88106 18.2671 8.88106Z"/>
                        </svg>
                      </a>
                    </div>
                    <div class="social telegram">
                      <a href="https://t.me/FEDCDOMinecraft/" target="_blank">
                        <svg role="img" viewBox="0 0 448 512">
                          <path fill="currentColor" d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/>
                        </svg>
                      </a>
                    </div>
                    <div class="social vk">
                      <a href="  https://vk.com/FEDCDOMinecraft" target="_blank">
                        <svg role="img" viewBox="0 0 576 512">
                          <path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"/>
                        </svg>
                      </a>
                    </div>
              </div>
              </div>
             
                </div>
              </div>
            </div>
          </footer>
          </div>
        </div>
        
        <!-- Подключили ещё несколько библиотек. Скрипты  которые можно было вынести вынесены с хедера в конец боди для оптимизации работы сайта (загрузке стилей, а потом скриптов)--> 
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/nav.js"></script>
        <script src="js/flex_slider.js"></script> 
        <script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
        


















      
     
         
      </body>
      </html>
 
    