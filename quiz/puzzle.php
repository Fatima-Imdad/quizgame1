<?php
//session_start();
?>
<!doctype html>
<!-- Template html file -->
<html>
<head>
    <meta charset="utf-8" />
    <title>PUZZLE</title>
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body class="puzzle">
   
    <input type="radio" id="cage" name="image" checked>
    <input type="radio" id="cageAnim" name="image">
    <input type="radio" id="cageKitten" name="image">
    <label class="selectBG" for="cage">Cage</label>
    <!-- <label class="selectBG" for="cageAnim">Cage Dance</label>
    <label class="selectBG" for="cageKitten">Cage Kitten</label> -->

    
    
    <input type="radio" id="a-up" name="a-vertical">
    <input type="radio" id="a-middle" name="a-vertical" checked>
    <input type="radio" id="a-down" name="a-vertical">
    <input type="radio" id="a-left" name="a-horazontal" checked>
    <input type="radio" id="a-center" name="a-horazontal">
    <input type="radio" id="a-right" name="a-horazontal">
    <input type="radio" id="b-up" name="b-vertical" checked>
    <input type="radio" id="b-middle" name="b-vertical">
    <input type="radio" id="b-down" name="b-vertical">
    <input type="radio" id="b-left" name="b-horazontal" checked>
    <input type="radio" id="b-center" name="b-horazontal">
    <input type="radio" id="b-right" name="b-horazontal">
    <input type="radio" id="c-up" name="c-vertical">
    <input type="radio" id="c-middle" name="c-vertical" checked>
    <input type="radio" id="c-down" name="c-vertical">
    <input type="radio" id="c-left" name="c-horazontal">
    <input type="radio" id="c-center" name="c-horazontal">
    <input type="radio" id="c-right" name="c-horazontal" checked>
    <input type="radio" id="d-up" name="d-vertical" checked>
    <input type="radio" id="d-middle" name="d-vertical">
    <input type="radio" id="d-down" name="d-vertical">
    <input type="radio" id="d-left" name="d-horazontal">
    <input type="radio" id="d-center" name="d-horazontal" checked>
    <input type="radio" id="d-right" name="d-horazontal">
    <input type="radio" id="e-up" name="e-vertical">
    <input type="radio" id="e-middle" name="e-vertical">
    <input type="radio" id="e-down" name="e-vertical" checked>
    <input type="radio" id="e-left" name="e-horazontal">
    <input type="radio" id="e-center" name="e-horazontal" checked>
    <input type="radio" id="e-right" name="e-horazontal">
    <input type="radio" id="f-up" name="f-vertical">
    <input type="radio" id="f-middle" name="f-vertical" checked>
    <input type="radio" id="f-down" name="f-vertical">
    <input type="radio" id="f-left" name="f-horazontal">
    <input type="radio" id="f-center" name="f-horazontal" checked>
    <input type="radio" id="f-right" name="f-horazontal">
    <input type="radio" id="g-up" name="g-vertical" checked>
    <input type="radio" id="g-middle" name="g-vertical">
    <input type="radio" id="g-down" name="g-vertical">
    <input type="radio" id="g-left" name="g-horazontal">
    <input type="radio" id="g-center" name="g-horazontal">
    <input type="radio" id="g-right" name="g-horazontal" checked>
    <input type="radio" id="h-up" name="h-vertical">
    <input type="radio" id="h-middle" name="h-vertical">
    <input type="radio" id="h-down" name="h-vertical" checked>
    <input type="radio" id="h-left" name="h-horazontal" checked>
    <input type="radio" id="h-center" name="h-horazontal">
    <input type="radio" id="h-right" name="h-horazontal">
    
    <div class="board">
      <div class="peice-a">
        <label for="a-up"></label>
        <label for="a-middle"></label>
        <label for="a-down"></label>
        <label for="a-left"></label>
        <label for="a-center"></label>
        <label for="a-right"></label>
      </div>
      <div class="peice-b">
        <label for="b-up"></label>
        <label for="b-middle"></label>
        <label for="b-down"></label>
        <label for="b-left"></label>
        <label for="b-center"></label>
        <label for="b-right"></label>
      </div>
      <div class="peice-c">
        <label for="c-up"></label>
        <label for="c-middle"></label>
        <label for="c-down"></label>
        <label for="c-left"></label>
        <label for="c-center"></label>
        <label for="c-right"></label>
      </div>
      <div class="peice-d">
        <label for="d-up"></label>
        <label for="d-middle"></label>
        <label for="d-down"></label>
        <label for="d-left"></label>
        <label for="d-center"></label>
        <label for="d-right"></label>
      </div>
      <div class="peice-e">
        <label for="e-up"></label>
        <label for="e-middle"></label>
        <label for="e-down"></label>
        <label for="e-left"></label>
        <label for="e-center"></label>
        <label for="e-right"></label>
      </div>
      <div class="peice-f">
        <label for="f-up"></label>
        <label for="f-middle"></label>
        <label for="f-down"></label>
        <label for="f-left"></label>
        <label for="f-center"></label>
        <label for="f-right"></label>
      </div>
      <div class="peice-g">
        <label for="g-up"></label>
        <label for="g-middle"></label>
        <label for="g-down"></label>
        <label for="g-left"></label>
        <label for="g-center"></label>
        <label for="g-right"></label>
      </div>
      <div class="peice-h">
        <label for="h-up"></label>
        <label for="h-middle"></label>
        <label for="h-down"></label>
        <label for="h-left"></label>
        <label for="h-center"></label>
        <label for="h-right"></label>
      </div>
    </div>
    <form action="" method="post">
   <?php
   if(isset($_POST['sub']))
   {
      $_SESSION["winner"]="win";
   }
   
    ?>
    <input class="btn btn-success" type="submit" name="sub"/>
    
   </form>
    <div id="win" class="winner">WINNER!
   
    <button class="btn btn-information">skip<a href="dashboard.php"></a></button>
    <button type="button" class="btn btn-success">Success</button>
    
    </form>
   
    </div>
    <button type="button" class="btn btn-info"><a href="dashboard.php">skip</a> </button>
</body>
</html>