<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

  </head>
<body>
<?php 
include('code.php');



$cart = datajson();
?>
<br>
<div class=container theme-showcase>
    <div class=jumbotron>
        <h1>
            <font style=vertical-align:inherit>
                <font style=vertical-align: inherit>
                    Пример темы
                </font>
            </font>
        </h1>
        <p>
        <font style=vertical-align: inherit>
            <font style=vertical-align: inherit>
                <?php
                    foreach($cart as $commands){
                        echo "<table class=table><tr><td>".$commands->name." : ".$commands->commands."</td></tr></table>";
                    }
                ?>
     <form id="ajax-form" action="code.php" method="post">
        <input type="text" class=form-control name="text" />           
            <a href="" class="btn btn-primary btn-lg" role="button" id="func">Прописать 00</a>            
        <div id="result"></div>           
     </form>           
     <script>                      
        $('#func').click(function(e) {
            e.preventDefault();
            var method = $('#ajax-form').attr('method'); 
            var url = $('#ajax-form').attr('url');
            $[method](url, 
            $('#ajax-form').serialize(), 
            function(data) { 
                $('#result').html(data); 
                    }); 
            });
    </script>
            </font>
        </font>
        </p>
    </div>
</div>


</body>

