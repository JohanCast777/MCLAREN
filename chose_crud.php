<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example bd-example-row"> 
  
    <!-- Example Code -->
    
    <div class="container text-center">
      <div class="row">
        <div class="col-6 col-sm-4" id="cn"><a href="crud_noticias.php" onclick="sound.play()"><h2>Crud noticias</h2></a></div>
        <div class="col-6 col-sm-4" id="cn"><a href="crud_users.php" onclick="sound.play()"><h2>Crud usuarios</h2></a></div>
    
        <!-- Force next columns to break to new line at md breakpoint and up -->
        <div class="w-100 d-none d-md-block"></div>
    
        <div class="col-6 col-sm-4" id="cn"><a href="" onclick="sound.play()"><h2>Crud comentarios</h2></a></div>
        <div class="col-6 col-sm-4" id="cn"><a href="" onclick="sound.play()"><h2>Crud categorias</h2></a></div>
      </div>
    </div>

    
    <script type="text/javascript">
        var sound = new Audio();
        sound.src = "b.mp3";
    </script>


    <style>
      *{
        margin:0px;
        padding:0px;
      }
      body{
        background-image:url(https://images.alphacoders.com/955/955672.jpg);
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover;
        transition:all 3s;
      }
      #cn{
        margin-top:200px;
        margin-left:150px;
        padding:60px;     
        opacity: .8;   
        background-color:white;
        border-radius:80px 20px;
        transition:all 1s;
        border-color:orange;
        overflow:hidden;
      }
      #transition{
        transition-timing-function:ease;
      }
      #cn:hover{
        background-color:black;
        box-shadow:0 0 10px orange, 0 0 40px orange, 0 0 80px orange;
      }
      h2{
        font-size:25px;        
      }
      a{
        text-decoration:none;
        color:orange;
        box-shadow:0 0 5px orange, 0 0 5px orange, 0 0 5px orange;
      }
      a:hover{
        color:orange;
        box-shadow:0 0 5px orange, 0 0 5px orange, 0 0 5px orange;
      }

     
      
    </style>
    
    <!-- End Example Code -->
  </body>
</html>