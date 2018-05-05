@extends('layouts.app')
@section('content')



<!DOCTYPE html>

<html>
<head>
  <head>
     
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    </head>
  <title>Enregister une facture</title>

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
      <h3 class="panel-title"> Enregister une facture</h3>
    </div>
    <div class="panel-body">
      <!--<input id="" placeholder="Enter your address"  type="text" class="form-control">-->
      <br>
      <div id="address">
        <div class="row">

          <div class="col-md-6">
            <label class="control-label">Nom de la facure</label>
            <input class="form-control" id="route" name="nom_facture">
          </div>
        
          <div class="col-md-6">

            <label class="control-label">Date de création</label>
            <input id="datepicker" type="text" class="form-control"  name="date_creation">
               
          </div>
        
          
           <div class="col-md-6">
            <label class="control-label">Date de livraison</label>
            <input id="datepicker"  class="form-control"  name="date_livraison" >
           </div>
           
           
          <div class="col-md-6">
            <label for="input-b4a">Inserer la facture(PDF)</label>

          <input id="input-b4a" name="facture" type="file" class="file" readonly="true">
       </div>
       </form>
    </div>
  </div>
</div>  


<div>
   <div class="col-md-15" align="coin">
<fieldset>
      <button href="adresse_destination" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Valider</button>
   </fieldset> 


   </body>    
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