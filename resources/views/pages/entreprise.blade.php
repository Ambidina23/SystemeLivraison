


@extends('layouts.app')
@section('content')



<!DOCTYPE html>
<html>
<head>
  <title>Entreprise</title>
</head>
<body>
  <div>
<div class="container">
  <div class="row text-center">
</div>
<!-- <form class="form-inline">
<legend>Veuillez choisir le type de client :</legend>
<div class="form-check">
    <input class="form-check-input" name="choix" value="0" type="radio" id="b" checked="checked" >
    <label class="form-check-label" for="radio12">Aucun</label>
    </div>&nbsp&nbsp&nbsp
    <div class="form-check">
        <input class="form-check-input" name="choix" value="1" type="radio" id="b1">
        <label class="form-check-label" for="radio120">Particulier</label>
    </div>&nbsp&nbsp&nbsp

    <div class="form-check">
        <input class="form-check-input" name="choix" value="2" type="radio" id="b2">
        <label class="form-check-label" for="radio121">Entreptise</label>
    </div>&nbsp&nbsp&nbsp

    <div class="form-check">
        <input class="form-check-input" name="choix" value="3" type="radio" id="b3">
        <label class="form-check-label" for="radio122">Organisme Public</label>
    </div>

</form> -->

 <form id="contact" action="" method="post">

   {{csrf_field()}}
    <h3> Création de l'espace Client Entreprise</h3>
    <h6>Veuillez remplir tous les champs</h6>
    <fieldset>
    <input placeholder="Le nom " type="text" name="nom_entreprise" tabindex="1" required autofocus>
    </fieldset>
    <!-- <div id="divCacher"><input placeholder="prénom" type="text" name="prenom" tabindex="2" required autofocus>
    </fieldset></div>
    <fieldset> -->
    <div id="divCacher1"><input placeholder="Le nom du responsable destinataire " type="text" name="responsable_destinataire" tabindex="3" required autofocus></div>
    </fieldset>

    <fieldset>
      <input placeholder="L'adresse e-mail" type="email" name="e_mail" tabindex="4" required="">
    </fieldset>

    <fieldset>
      <input placeholder="Le numero de téléphone " type="tel" name="telephone" tabindex="5" required>
    </fieldset>
    
    <fieldset>
      <textarea placeholder="l'adresse destinataire complet"  type="adresse" name="adresse" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
    <p class="copyright">Retour à l'Accueil:     <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', '       Prolivraison') }}</a></p>
  </form>
<!-- 
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
    <script>
    // Une fois que la page est chargee
    $(document).ready(function(){
      // On ajoute l'evenement change à la balise input qui a pour "name=choix", cet évènement se declenchera à chaque changement de valeur de l'input
      $("input[name=choix]").change(function(){
        if($(this).attr("value")=="1")
        {
          // Si la valeur de l'input == 1 alors on affiche le div qui a pour "id=divCacher".
          $("#divCacher").show() && $("#divCacher1").hide();
        }
        else
        {
          // Si la valeur de l'input == 2 alors on cache le div qui a pour "id=divCacher".
          $("#divCacher").hide() && $("#divCacher1").show() ;
        }
      });
    });


    </script> -->
 


       
</html>

 @endsection  


<!--css-->
<style>
#blocantiscroll
{
    height:100%;
    overflow:hidden;
}
{
  #particulier-content {
                display:none;
            }
 margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  /**font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 80;
  /**font-size: 8px;**/
 line-height: 20px;
  color: #777;
  background: #4CAF50;
}

.container {
  *max-width: 300px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}


#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
/* Hiding the checkbox, but allowing it to be focused */
.badgebox
{
    opacity: 0;
}

.badgebox + .badge
{
    /* Move the check mark away when unchecked */
    text-indent: -999999px;
    /* Makes the badge's width stay the same checked and unchecked */
  width: 27px;
}

.badgebox:checked + .badge
{
    /* Move the check mark back when checked */
  text-indent: 0;
}
.radio-pink [type="radio"]:checked+label:after {
    border-color: #e91e63;
    background-color: #e91e63;
}
/*Gap*/

.radio-pink-gap [type="radio"].with-gap:checked+label:before {
    border-color: #e91e63;
}

.radio-pink-gap [type="radio"]:checked+label:after {
    border-color: #e91e63;
    background-color: #e91e63;
}                


</style>
