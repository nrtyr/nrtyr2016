<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pop Up</title>
	<link href="jquery.modalBox.css" rel="stylesheet" type="text/css">
	<style>
  html, body, div, iframe { 
    margin:0; padding:0; height:100%; 
  }

  iframe { 
    display:block; width:100%; border:none; 
  }

  .imagenPop{
    width: 100%;
  }

	</style>
</head>
<body onload="popImg()">

	<div class="modal-box" id="modal-content">
    <div class="inner">
        <button class="close">&times;</button>
        <a href="http://www.nicolasromero.mx/bando"><img src="PromulgacionBando2.jpg"  class="imagenPop" alt=""></a>
    </div>
	</div>

<iframe src="../index.php" frameborder="0"></iframe>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="jquery.modalBox.js"></script>

<script>
  function popImg(){
    $('#modal-content').modalBox("open",{openAnimationEffect:'bounceIn',closeAnimationEffect:'bounceOut'});
  }
</script>


</body>
</html>