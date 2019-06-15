<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
                      ///////////////
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>АИС "Стоматолога"</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	.back{
    		background: #6996D3;
    		height: 250px;
    		padding: 10px;
    	}
    	.logo{
    	   	padding: 10px;
    	}
    	.center{
    		text-align: center;
    	}
    	.pad{
    		padding: 10px;
    	}
        .brd {
            border: 4px double grey; /* Параметры границы */
            padding: 10px; /* Поля вокруг текста */
   }
    </style>
  </head>
  <body>
    <div class="container">
    	<div class="row back">
    		<div class="col-xs-2"></div>
    		<div class="col-xs-8">
    			<img src="2.jpg" alt="logo" class="img-rounded logo img-fluid" style = "max-width: 100%;">
    		</div>
    		<div class="col-xs-2"></div>
    	</div>
    	<div class="row">
    		<div class="row brd">
    			<h4 class="center">АИС "Cтоматолог" Детская больница № 1</h4>
    		</div>
            <div class="row brd">
    		<div class="col-xs-6 ">
    			<h4 class="center">График работы</h4>
    			<table class='table'>
                              <th>#</th>
                              <th>Врач</th>
                              <th>День недели</th>
                              <th>Время</th>
                        <tr>
                             <td>1</td>
                             <td>Абуева Мадина Магомедовна</td>
                             <td>Понедельник</td>
                             <td>10:00 - 12:00</td>
                        </tr>
                        <tr>
                             <td>2</td>
                             <td>Датаев Адам Рахманович</td>
                             <td>Понедельник</td>
                             <td>12:00 - 17:00</td>
                        </tr>
                        <tr>
                             <td>3</td>
                             <td>Таромов Ахмед Хусейнович</td>
                             <td>Вторник</td>
                             <td>09:00 - 17:00</td>
                        </tr>
                        <tr>
                             <td>4</td>
                             <td>Чидаев Магомед Хаважевич</td>
                             <td>Среда</td>
                             <td>10:00 - 12:00</td>
                        </tr>
                        <tr>
                             <td>5</td>
                             <td>Шидаева Тамара Ахмедовна</td>
                             <td>Среда</td>
                             <td>12:00 - 17:00</td>
                        </tr>

                    
                    </table>
    		</div>
    		<div class="col-xs-6 pad" style="border-left: 4px double grey ">
    			<h4 class="center">Занятость</h4>
                     <table class='table'>
                              <th>#</th>
                              <th>Врач</th>
                              <th>Время</th>
                        <tr>
                             <td>1</td>
                             <td>Абуева Мадина Магомедовна/td>
                             <td>01.06.2019 11:00</td>
                        </tr>
                        <tr>
                             <td>2</td>
                             <td>Датаев Адам Рахманович</td>
                             <td>01.06.2019 14:00</td>
                        </tr>
                        <tr>
                             <td>3</td>
                             <td>Датаев Адам Рахманович</td>
                             <td>02.06.2019 11:00</td>
                        </tr>
                        <tr>
                             <td>4</td>
                             <td>Шидаева Тамара Ахмедовна</td>
                             <td>02.06.2019 15:00</td>
                        </tr>
                        <tr>
                             <td>5</td>
                             <td>Шидаева Тамара Ахмедовна</td>
                             <td>03.06.2019 11:00</td>
                        </tr>

                    
                    </table>

            
              
    		</div>
            </div>
    	</div>
    	<div class="row">
    		<div>
    			<?php 

                ?>
    		</div>
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>