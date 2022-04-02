<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crawler Page</title>
    </head>
    <body class="background">
    <div class="container">
    <div class="row">

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
      <a class="navbar-brand" href="#">
        <img src="https://www.imagensanimadas.com/data/media/202/cachorro-imagem-animada-0830.gif" width="30" height="30" alt="">
      Crawler Page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/"></a>
      <a class="nav-item nav-link" href="?list"></a>
      <a class="nav-item nav-link" href="#"></a>
      </div>
      </div>
    </nav>
    <div class="space"></div>

    <form action="" method="GET">
      <div class="input_fields_wrap">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name_page" placeholder="Table Sport">
        <label class="form-label">URL</label>
        <input type="url" class="form-control" name="url" required placeholder="https://site.com/">
        <label class="form-label">Header Code</label>
        <textarea class="form-control" name="header" ></textarea>
        <label class="form-label">Footer Code</label>
        <textarea class="form-control" name="footer" ></textarea>
        <div class="space2"></div>
        <label>Activate Player MP4/HLS</label>
        <div class="accordion-body">
          <label class="switch"><input type="checkbox" value="1" name="on">
            <span class="slider round"></span>
          </label><br>
        </div>

        <label>Activate Iframe Player</label>
        <div class="accordion-body">
          <label class="switch"><input type="checkbox" value="1" name="iframe">
            <span class="slider round"></span>
          </label><br>
        </div>

        <button class="add_field_button btn btn-primary">Add</button>
        <div class="space"></div>
        <label>1° Parameter</label>
        <input type="text" class="form-control" name="um" required placeholder="<div>">
        <label>2° Parameter</label>
        <input type="text" class="form-control" name="dois" required placeholder="</div>">
        <hr><div class="space"></div>
      </div>
        <div class="space"></div>
        <button type="submit" class="btn btn-primary">GENERATE</button>
    </form>
    <div class="space"></div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : '';
    if ($url == true){
    ?>
    <div>
    <img src="https://www.imagensanimadas.com/data/media/111/seta-imagem-animada-0147.gif" width="20px" height="50px" ><br>
    <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/page.php?'.$_SERVER['QUERY_STRING']; ?>" target="_blanck"><button class="btn btn-primary">PAGE CREATED, CLICK HERE</button></a></div>
    <?php } ?>  
    <div class="space"></div>
    <style type="text/css">#browser-warning {margin-top:10px;text-align:center;display:none;}</style>
    <script type="ebb3cfa72eca5c161bef21ba-text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js?ver=3.3.1' id='jquery-js'></script>
    <script type="ebb3cfa72eca5c161bef21ba-text/javascript">
    var max_fields      = 3; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1;
    var a = 2;
    var z = 1;
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            a++;
            z++;
            $(wrapper).append('<div><label>'+ a++ +'° Parameter</label><input class="form-control" type="text" name="um'+ z +'"/><label>'+ a +'° Parameter</label><input class="form-control" type="text" name="dois'+ z +'"/></br><a href="#" class="remove_field btn btn-danger">Remover</a></div><hr>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--; a--; a--; z--;
    })
  </script>
  <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="ebb3cfa72eca5c161bef21ba-|49" defer=""></script>
  <footer style="padding-top: 50px">Copyright &copy; <?php echo date("Y"); ?> MJ On</footer>
  </body>
</html>