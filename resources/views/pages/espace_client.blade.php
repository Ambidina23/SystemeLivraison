@extends('layouts.app')
@section('content') 
<!DOCTYPE html>
<html>
<head>
  <title>Utilisateurs</title>
</head>
<body>

<div class="container">  
  <form id="contact" action="" method="post">
     {{csrf_field()}}

    <h1>Espace Client</h1>
    Voir:⎪
    <a href="{{ url('profile') }}">Informations Personnelles</a>  ⎪
    <a href="{{ url('commmande') }}">Vos Commandes</a> ⎪
    <a href="{{ url('factures')}}">Vos factures</a> ⎪ 
    

    <hr>



           
@endsection 
   
  <hr>  <p <a class="copyright">Retour à l'Accueil:    <a class="navbar-brand" href="{{ url('/') }}">ProLivraison
                    <!-- {{ config('app.name', '       Prolivraison') }}</a></p> -->
  </form>

</div>
</body>
</html>

                

