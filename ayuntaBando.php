<?php 
include('assets/inc/top.inc');
include('assets/inc/nav.inc');
 ?>

<!-- Encabezado Telefonos -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a href="index.php" id="logo">Bando Municipal</a></h1>
						</div>
					</div>
				</header>
<!-- Cuadro Telefonos -->				
				<div class="telEmergencia">
					<embed src='pdf/BANDO2016.pdf' width='100%' height='880'>
				</div>
<?php  
 // Creamos array de móviles  
 $mobiles = array("iPhone","iPod");  
  
 foreach( $mobiles as $mobiles ) {  
   if( preg_match('#'.$mobile.'#i',$_SERVER['HTTP_USER_AGENT'])){  
// Si da 'true' redigirimos el contenido  
  	header('Location:pdf/BANDO2016.pdf');  
        exit();  
     
   } else{
   
   } 
  }  
?>

 <?php 
include("assets/inc/footer.inc");
  ?>