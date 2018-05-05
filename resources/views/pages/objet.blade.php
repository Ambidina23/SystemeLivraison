@extends('layouts.app')
@section('content')



<!DOCTYPE html>

<html>
<head>
  <title>Commande</title>
</head>
<body>
<div class="container">  
 

 <form id="contact" action="" method="post">

   {{csrf_field()}}
 <div id="coin">

    
     <div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Objet</h3>
      <h6>Je veux envoyé un(e)</h6>
    </div>
    <div class="panel-body">
    <input type="text" class="form-control" required="" name="nom_objet" id="nom" placeholder="Un clavier, un tableau d'art, des bijoux...">
  </div>
  
  <div class="panel-body">
   
     <label class="control-label">Poids de l'objet</label>
    <input type="number" class="form-control" name="poids_objet" placeholder=" En kg" required="" > <small id="poids" class="text-muted"><small>
      Entrer un nombre entre 1 à 100
    </small>
    </div>


  <div class="panel-body">
  
     <label class="control-label">Niveau de fragilité</label>

    <select class="form-control" name="fragilite_objet" id="exampleFormControlSelect1">
     
      <label for="exampleFormControlSelect1"> De 1 à 5</label>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
     <small>
      Niveau de fragilité de 1 à 5 </small>
  </div>
  <div class="panel-body">

    <label class="control-label">Nature de l'objet</label>

    <input type="text" class="form-control" name="nature_objet" placeholder="Nature" id="nature" class="text-muted" required="">
      
    </div>
    <div class="panel-body">
       

<label class="control-label">Valeur de l'Objet</label>
    <input type="number" class="form-control" name="valeur_objet" placeholder="Valeur de l'Objet" id="poids" class="text-muted" required=""><small>
      Entrer la valeur de l'objet en euro
    </small>
    </div>
 
 <div class="panel-body">

    <label class="control-label">Description</label>
    <textarea class="form-control" name="description_objet" id="exampleFormControlTextarea1" rows="3" placeholder="Soyez le plus precis possible. s'il s'agit d'un contenant de type valise ou carton, merci de préciser le contenu dans la description. précisez également les caracteristiques(dimension, poids, fragilité..) ou une demande specifique(besoin d'aide pour porter..) "></textarea>
  </div>


</div>  
    <!--<p class="copyright">Retour à l'Accueil:     <a class="navbar-brand" href="{{ url('/') }}">-->

</div>
</div>


  

<title>Solodev's Auto-Complete Address Form</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <style>
  .container {
    margin-top: 40px;
  }
  </style>
  


   <div class="col-md-10" align="coin">
<!-- <fieldset>
  <!--<button  name="submit" type="submit" id="contact-submit" data-submit="...Sending" >Passer à l'étape suivante</button>-->
      

  <!--<button href="{{ url('adresse_depart') }}" type="submit" class="btn btn-default" data-submit="...Sending">Left</button>-->
   <!-- </fieldset>  --> 

<form class="form-inline" onsubmit="openModal()" id="myForm">
  <button type="submit" class="btn btn-primary">Passer à l'étape suivante</button>
</form>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Merci </h4>
      </div>
      <div class="modal-body">
        <p>Voulez vous saisir un autre objet?&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Oui</button>
        <button type="button" class="btn btn-primary">Non</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  </fieldset>     
</html>



 @endsection  

<script type="text/javascript">$('#myForm').on('submit', function(e){
  $('#myModal').modal('show');
  e.preventDefault();
});</script>



<!--css-->


<style type="text/css">
.quote .btn{
    background-color:
}
.modal-dialog {
    width: 600px;
    margin: 150px auto;
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

  .coin {
border:2px solid black;
-moz-border-radius:7px;
-webkit-border-radius:7px;
border-radius:7px;
}px 0;
border-radius:10px 0;
}
</style>

<script type="text/javascript">$('#myForm').on('submit', function(e){
  $('#myModal').modal('show');
  e.preventDefault();
});
</script>