<?php $util="active2"?>
<?php  require "view/PageAccueil//admisnistration/templateadmin3.php";?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="view/Design/pagedevis.css">
    <link rel="icon"  href="view/PageAccueil/favicon/favicon-16x16.png" type="image/png" sizes="any">
    
    <title>Gerer les utilisateurs</title>
</head>

<body>

 
  <!-- <p style="text-align: center; border: 2px darkblue; margin:5px; padding: 1px; font-size: 25px;">
  <?php echo $successmessage; ?></p> -->
  <!-- body -->
<section id="bandeau">
      <div class="textfor">
      <h3>Votre devis en 5min</h3>
        <section class="columfor">
        <p >
          Détaillez votre projet dans notre formulaire ci-dessous. Notre équipe va récuperer vos informations pour vous créer un compte, auquel vous aurez accés une fois l'installation terminée.
          Nous vous recontacterons dès que votre dossier sera traité et qu'une date d'installation sera disponible.</p>
          
        </section>
      </div>
      <div>
            <img src="view/PageAccueil/image/devisbandeau.png" alt="devis photo" title="devis photo">
      </div>
    </section>

   
    		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-left: 45%;">Modifier le catalogue</button>

<div id="id01" class="modal">
  <div class="modal-content animate">
  <form method="post" action="index.php?action=changecatalogue"  id="inscription"  style="display: flex; flex-direction: column;text-align: center; " >
  	<label class="elem">
        Nom du nouveau service:<br>
        <input type="text" name="name" placeholder="name...." ><br>
    </label>
    <label class="elem">
        Son nom dans la base de donnée (abregé, sans espace, en anglais de préférence) :<br>
        <input type="text" name="newbox" placeholder="BDD Name"><br>
    </label>




    <label>Quel service du catalogue souhaitez vous retirez ? <br>
        <select name="suppbox">
          <option value="nothing">Rien</option>
            <?php  

foreach($catalogue as $donnees){

  ?>
                <option value="<?php echo $donnees['name'];?>"><?php echo $donnees['name'];?></option>
              <?php }?>  
        </select>
    </label>
    




    <input type="submit" value="Modifier le catalogue"  class="button">
</form>
</div>
</div>
         
   <!-- changecatalogue -->

    <form method="post" action="index.php?action=add_devis">
    <section class="devis">
      <div class="mySlides fade debutdevis">
        <div class="numbertext">1 / 3</div>
        <a class="next" onclick="plusSlides(1)">Suivant</a>
        <h2 id="titredevis">Quelle est la nature de vos besoins ?</h2>
        <p><br />
          <div class="debuttest">

<?php  

foreach($catalogue2 as $donnees){

  ?>
            <input type="hidden" name="<?php echo $donnees['bddName']?>" value="non"/>
       <label class="labelcheck"><?php echo $donnees['name']?> <input type="checkbox" name="<?php echo $donnees['bddName']?>" value="oui" /> <span class="checkmark"></span> </label><br />



<!-- 
            <input type="hidden" name="elec" value="non"/>
       <label class="labelcheck" >Chauffage éléctrique<input type="checkbox" name="elec"  value="oui" /> <span class="checkmark"></span> </label><br />

             <input type="hidden" name="heater" value="non"/>
       <label class="labelcheck">Chaudière / Pompe à chaleur <input type="checkbox" name="heater" value="oui" /> <span class="checkmark"></span> </label><br />

               <input type="hidden" name="AC" value="non"/>
        <label class="labelcheck">Climatisation <input type="checkbox" name="AC" value="oui" /> <span class="checkmark"></span></label> <br/>

               <input type="hidden" name="pool" value="non"/>
        <label class="labelcheck">Piscine <input type="checkbox" name="pool" value="oui" /> <span class="checkmark"></span></label>
 -->
           <!-- </div> -->


         <!--  <div id="debutdroite">
             <input type="hidden" name="gate" value="non"/>
       <label class="labelcheck"> <?php echo $donnees['name']?><input type="checkbox" name="gate"  value="oui" /> <span class="checkmark"></span> </label><br /> -->

              <!--  <input type="hidden" name="lighting" value="non"/>
       <label class="labelcheck">Eclairage <input type="checkbox" name="lighting" value="oui" /> <span class="checkmark"></span></label>
       <br />

                 <input type="hidden" name="devices" value="non"/>
       <label class="labelcheck">L'électroménager <input type="checkbox" name="devices"  value="oui" /> <span class="checkmark"></span> </label><br />

                 <input type="hidden" name="shutters" value="non"/>
       <label class="labelcheck">Volets / Stores <input type="checkbox" name="shutters"  value="oui" /> <span class="checkmark"></span></label> <br/>

             <input type="hidden" name="garden" value="non"/>
       <label class="labelcheck">Jardin<input type="checkbox" name="garden" value="oui" /> <span class="checkmark"></span></label>
 -->
<!--        </div> -->
        <?php } ?>
       </div>
     </p>
      </div>
        <div class="mySlides fade suitedevis">
          <div class="numbertext">2 / 3</div>
            <a class="prev" onclick="plusSlides(-1)">Précédent</a>
            <a class="next" onclick="plusSlides(1)">Suivant</a>
          <h2 id="titredevis2">Quel type de lieu est concerné ?</h2>
            <p class="radiotitle"> Quel type de batiment est concerné ? *
              <label class="radioinner">Maison
                <input type="radio" name="building" value="house">
                <span class="radiomark"></span>
              </label>

              <label class="radioinner">Appartement
                <input type="radio" name="building" value="flat">
                <span class="radiomark"></span>
              </label>

              <label class="radioinner">Bureau
                <input type="radio" name="building" value="office">
                <span class="radiomark"></span>
              </label>

              <label class="radioinner">Autres
                <input type="radio" name="building" value="other">
                <span class="radiomark"></span>
              </label>
            </p>
            <p class="radiotitle"> Quel type de construction ? *
              <label class="radioinner2">Inexistante
                <input type="radio" name="construction" value="inexistante">
                <span class="radiomark2"></span>
              </label>

              <label class="radioinner2">Existante
                <input type="radio" name="construction" value="exist">
                <span class="radiomark2"></span>
              </label>
            </p>
          <p id="surface">
            <label>Quel surface avez-vous ?</label>
              <select id="rollliste2" name="surface">
                <option value="none">Non définie</option>
                <option value="50">moins de 50 m²</option>
                <option value="100">Entre 50m² et 100 m²</option>
                <option value="150">Entre 100m² et 150m²</option>
                <option value="200">Entre 150m² et 200m²</option>
                <option value="200+">Plus de 200m²</option>
              </select>
          </p>
          <label id="comment" >Précisions complémentaires sur votre besoin : <br>
            <textarea id="préc" name="comment" rows="5" cols="50" placeholder="Vos précisions"></textarea>
          </label>
        </div>
        <div class="mySlides fade findevis">
          <div class="numbertext">3 / 3</div>
            <a class="prev" onclick="plusSlides(-1)">Précédent</a>
          <h2 id="fintitre">Vos informations personnels : </h2>
            <p class="radiotitle"> Vous êtes : *
              <label class="radioinner">Un particulier
                <input type="radio" name="type" value="particular">
                <span class="radiomark"></span>
              </label>

              <label class="radioinner">Un professionel
                <input type="radio" name="type" value="professional">
                <span class="radiomark"></span>
              </label>
            </p>
            <p class="radiotitle"> Civilité : *
                <label class="radioinner">M.
                  <input type="radio" name="gender" value="M">
                  <span class="radiomark"></span>
                </label>

                <label class="radioinner">Mme
                  <input type="radio" name="gender" value="Mme">
                  <span class="radiomark"></span>
                </label>
              </p> 

             <div id="info">
              <div id="flex1">
               <input type="text" name="name" placeholder="Votre Prénom">
               <input type="text" name="last_name" placeholder="Votre Nom">
                      <select class="rollliste" name="tel">
                        <option value="+33">France (+33)</option>
                        <option value="+32">Belgique (+32)</option>
                        <option value="+41">Suisse (+41)</option>
                        <option value="+44">Royaume Unis (+44)</option>
                        <option value="+39">Italie (+39)</option>
                        <option value="+49">Allemagne (+49)</option>
                        <option value="+34">Espagne (+34)</option>
                      </select>
                <input type="text" name="phonenumber" placeholder="Votre téléphone">
               <input type="text" name="email" placeholder="Votre e-mail">
             </div>
             <div id="flex2">
               <input type="text" name="adress" placeholder="Votre adresse">
               <input type="text" name="adress2" placeholder="Complément d'adresse">
               <input type="text" name="areacode" placeholder="Code postal">
               <input type="text" name="city" placeholder="Ville">
                      <select class="rollliste" name="country">
                        <option value="france">France</option>
                        <option value="belgium">Belgique</option>
                        <option value="switzerland">Suisse</option>
                        <option value="uk">Royaume Unis</option>
                        <option value="italy">Italie</option>
                        <option value="germany">Allemagne</option>
                        <option value="spain">Espagne</option>
                      </select>
              </div>
             </div>  
            <label id="conditions">Accepter les conditions générales d'utilisation
                <input type="checkbox" name="condition" required style="width: 8%;"></label>
                   <div id="devissubmit">
                     <input type="submit" value="Envoyer" >
                   </div>
        </div>
    </section>
    </form>
            <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    <footer>

        <h3>Designed by Alexandre Amiot</h3>
    </footer>
    <!--Mes fonctions javascript -->
    <script>
function openNav() {
    document.getElementById("mySidepanel").style.width = "350px";
}
function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}

function openNav2() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav2() {
  document.getElementById("myNav").style.height = "0%";
}
// script pour le slideshow du devis
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



</script>
</body>
</html>