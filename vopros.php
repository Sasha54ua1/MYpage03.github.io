<!DOCTYPE html>
<html lang="ru">
  <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>test002</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="fonts/alexander/alexander.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php
$name = $_POST['name']; // собираем введенные данные и записываемв переменные
$email = $_POST['email'];
$mes = $_POST['mes'];
$text .= "РРјСЏ: $name \n"; 
$text .= "РџРѕС‡С‚Р°: $email \n"; 
$text .= "РЎРѕРѕР±С‰РµРЅРёРµ: $mes \n";
  if (!empty($name) && !empty($email) && !empty($mes)) //если все переменные имеют значения выполняем запись в файл
    {
    $file = fopen ("message.txt", "a+"); //открываем для перезаписи файл message.txt лежаший в одной папке с текущей страницей
    fwrite ($file,$text); // пишем в файл
    fclose ($file); // закрываем файл
    }
?>
    <br>
    <div class="container">
       <div class="row">
           <div class="col-xs-4  col-sm-4 col-md-4 col-lg-3">
               <img src="images/log/333.png" width="200" height="150" alt="">
           </div>
           <div class="hidden-xs  col-sm-4 col-md-4 col-lg-6">
               <h3 style="color: #fff;">Названия сайта </h3>
               <p style="color: #fff;"> Ползаголовок 1</p>
               <p style="color: #fff;"> Ползаголовок 2</p>
               
           </div>
           <div class="hidden-xs  col-sm-2 col-md-2 col-lg-3">
               
                   <p style="color: #fff;"><i style="color: #fff;" class="fa fa-user" aria-hidden="true"></i> Мобильный номер</p>
                       <p style="color: #fff;"> +80965870***</p>
                       <p style="color: #fff;"> +80660886***</p>
           </div>
           <div class="hidden-xs  col-sm-2 col-md-2 col-lg-3">
            <a href="https://vk.com/id364476891">
                   <i class="fa fa-vk"></i> Страница Вконтакте
               </a>
           </div>    
       </div>
       <div class="row">
            <div class="navbar navbar-default navbar-static-top boxShadow2">
                <div class="container boxShadow2 ">
                   <div class="navbar-header">
                       <img src="images/log/222.png" width="222" height="30" alt="">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                            <span class="sr-only">Открыть навигацию</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                            </div>
                    <div class="navbar-header">
                    </div>
                    <div class="collapse navbar-collapse" id="responsive-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Главная</a></li>
                            <li><a href="word.html">Прайс-лист</a></li>
                            <li><a href="contact.html">Контакты </a></li>
                            <li class="active"><a href="write us.html">Напишыте нам</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
            <div class="container color01 boxShadow2">
            <div class="row color01">
                <div class="col-xs-12">
                <h1 style="color: #333;">Напишыте нам</h1>
       
                                                             
<form action="vopros.php" method="post">
<p>Ваше имя</p>
    <input name="name" type="text" class="lnews_data" size="30">
<p>Ваше e-mail</p>
<p>
    <input name="email" type="text" class="lnews_data" size="40">
</p>
<p>Ваш вопрос</p>
<p><textarea name="mes" cols="50" rows="5" class="lnews_data"></textarea>
</p>
<p>
<label>
<input type="submit" name="submit" id="submit" value="спросить">
</label>
</p>
<p style="color: #777;">
Запрос отпрален
</p>
</form>

        
              
               
                <br><br><br><br><br><br><br><br>
                </div>
            </div> 
        </div>  
        <br>
                <div class="container boxShadow2">
        <div class=" row nav navbar-default navbar-inner ">
            <div class="container">
               <div class="row">
                    <div class="col-sm-5 "></div>
                    <div class="col-sm-4">
                       <br>
                       
                        <p style="color:#333">© Все права защиины 2016</p>
                        <br>  
                          
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div> 
        </div>
       <div class="modal fade" id="modal-1">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                      <button class="close" type="button" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title">Названия окна</h4>
                   </div>
                   <div class="modal-body">
                       <p>Это модальное окно</p>
                   </div>
                   <div class="modal-footer">
                       <button class="btn-danger" type="button" data-dismiss="modal">Отмена</button>
                   </div>
               </div>
           </div>
       </div>
    
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>