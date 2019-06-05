<?php
require "view/PageAccueil/admisnistration/templateadmin3.php";
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="view/Design/CSS_Maison/CSS_Page_infos_maison.css"> -->
	<link rel="stylesheet" type="text/css" href="view/Design/CSS_Maison/CSS_Page_infos_maison.css">
	<link rel="icon"  href="view/PageAccueil/favicon/favicon-16x16.png" type="image/png" sizes="any">
	<title>Informations sur la maison</title>
</head>

<body>

	<!-- The Modal -->
	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">

			<!-- en-tête du modal -->
	    	<div class="modal-header">
	      		<span class="close">&times;</span>
	      		<h1 id="modalTitle">Modal Header</h1>
	    	</div>

	    	<!-- body du modal -->
	    	<div class="modal-body">
	    		<!-- partie remplie individuellement pour chaque pièce dans le js -->
	    	</div>

	    	<div class="modal-footer">
	    		<h3>Modal footer</h3>
	    	</div>
	  	</div>

	</div>


	

<section id="allrooms">

	<!-- Partie de la page avec les pièces -->
	<?php foreach ($roomsArray as $room) { ?>

        <div id=<?php echo $room[1]; ?> class="roomInformation" onclick="clickOnRoom(this.id)">

			<div class="div1">
				<h1 id="titre"><?php echo $room[0]; ?></h1>
				<?php foreach ($sensorsArray as $sensor) { ?>
					<?php foreach ($sensor as $sensorInfo) { ?>
						<?php if ($sensorInfo[0] == $room[0]) { ?>
							<li><?php echo $sensorInfo[1]." : "; ?><span><?php echo $sensorInfo[2]; ?></span></li>
							<p hidden=""><?php echo $sensorInfo[3]; ?></p>
						<?php } ?>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="div2"> 
				<img src=<?php echo $room[2]; ?>>
			</div>
		</div>
	<?php } ?>




<button onclick="document.getElementById('id01').style.display='block'" style="margin-top: 20%; width:auto;height:5%;">    Piece    </button>

<div id="id01" class="modal">
  <div class="modal-content animate">
  <form method="post" action="index.php?action=addapiece&amp;propertyName=<?php echo $_GET['propertyName']; ?>"  id="inscription"  style="display: flex; flex-direction: column;text-align: center; " >
    <label class="elem">
         Pieces:<br>
        <input type="text" name="name" placeholder="name...." ><br>
    </label>

   
    <label class="elem">
         Type Image:<br>
        <input type="text" name="image" placeholder="name...." ><br>
    </label>
    
        
        
    
    


    <?php foreach ($sensores as $sensore) { ?>
    
        <input type="hidden" name="<?php echo $sensore['sensor_name']?>" value="non"/>
       <label class="labelcheck"><?php echo $sensore['sensor_name']?><br/> <input type="checkbox" name="<?php echo $sensore['sensor_name']?>" value="<?php echo $sensore['id']?>" /> <span class="checkmark"></span> </label><br />
        
    
    <?php } ?>
   



    <button type="submit">New Piece</button>
     
</form>

<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>

</div>
</div>




<button onclick="document.getElementById('id02').style.display='block'" style="margin-top: 20%; width:auto;height:5%;">  sensor for room    </button>

<div id="id02" class="modal">
  <div class="modal-content animate">
<form method="post" action="index.php?action=addCapteurToPiece&amp;propertyName=<?php echo $_GET['propertyName']; ?>"  id="inscription"  style="display: flex; flex-direction: column;text-align: center; " >


 <label>Dans quelle chambre souhaitez vous mettre un capteur ? <br>
        <select name="chambre">
          
            <?php  

foreach($rooms2 as $room){

  ?>
                <option value="<?php echo $room['id']?>"><?php echo $room['room_name']?></option>
              <?php }?>  
        </select>
    </label>


    <label>Quel capteur souhaitez-vous mettre dans cette chambre ? <br>
        <select name="capteur">
          
            <?php  

foreach($sensorAdd as $sensorA){

  ?>
                <option value="<?php echo $sensorA['id']?>"><?php echo $sensorA['sensor_name']?></option>
              <?php }?>  
        </select>
    </label>


   



    <button type="submit">New Capteur for room</button>
     
</form>


<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
</div>
</div>




<!-- <button onclick="document.getElementById('id03').style.display='block'" style="margin-top: 20%; width:auto;height:5%;">    Piece    </button>

<div id="id03" class="modal">
  <div class="modal-content animate">
  <form method="post" action="index.php?action=addapiece&amp;propertyName=<?php echo $_GET['propertyName']; ?>"  id="inscription"  style="display: flex; flex-direction: column;text-align: center; " >
    <label class="elem">
         Nom du Capteur:<br>
        <input type="text" name="capteur" placeholder="name...." ><br>
    </label>


    <button type="submit">New Sensor</button>
     
</form>

<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>

</div>
</div> -->






</section>




	<!--  -->
	
	<footer class="boutonScenario">
		<a href="index.php?action=see_scenario_page" target="blank">Programmez un scénario</a>
	</footer>

	<script type="text/javascript" src="view/Design/CSS_Maison/JS_Page_infos_maison.js"></script>

</body>

</html>