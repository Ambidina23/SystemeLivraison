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
  

<title>Solodev's Auto-Complete Address Form</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <style>
  .container {
    margin-top: 40px;
  }
  </style>
  


<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Itineraire :  Adresse de départ</h3>
    </div>
    <div class="panel-body">
      <!--<input id="" placeholder="Enter your address"  type="text" class="form-control">-->
      <br>
      <div id="address">
        <div class="row">

          <div class="col-md-6">
            <label class="control-label">Numero de la rue</label>
            <input class="form-control" id="route" name="num_rue1">
          </div>
        
          <div class="col-md-6">

            <label class="control-label">Nom de la Rue</label>
            <input class="form-control" id="street_number" name="nom_rue1">
          </div>
         
          <div class="col-md-6">
            <label class="control-label">Complement adresse</label>
            <input class="form-control" id="Complement" name="Complement1" >
           </div>
           <div class="col-md-6">
            <label class="control-label">Ville</label>
            <input class="form-control" id="ville" name="ville1" >
           </div>
           <div class="col-md-6">
            <label class="control-label">Code Postal </label>
            <input class="form-control" id="postal_code" name="code_postal1">
           </div>
           <!--<div class="row">-->
           <div class="col-md-6">
            <label class="control-label">Pays</label>
            <input class="form-control" id="country" name="pays1">
           </div>
        </div>



       </div>
    </div>
  </div>
</div>  


<div>
   <div class="col-md-10" align="coin">
<fieldset>
      <button href="adresse_destination" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Passer à l'etape suivante</button>
   </fieldset> 


       
</html>


 @endsection  


<!--css-->

<style type="text/css">

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
}</style> 