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

     Voir:⎪
    <a href="{{ url('users') }}">Les utilisateurs</a> ⎪
    <a href="{{ url('commandes') }}">Les commandes</a>⎪
    <a href="{{ url('les_factures')}}">Les Factures</a> ⎪
    <a href="{{ url('facture')}}">Etablir une facture</a>. <br>
    Ajouter:⎪
    <a href="{{ url('particulier') }}">Particulier</a>  ⎪
    <a href="{{ url('entreprise') }}">Entreprise</a> ⎪
    <a href="{{ url('organisme_public')}}">Organisme public</a> 
    <!--<a href="/">Réinitialiser</a>-->

    <hr>



            <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog">Réference</em></th>
                        <th class="hidden-xs">Type</th>
                        <th>nom utilisateur</th>
                        <th>Adresse mail</th>
                    </tr> 
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                          <tr>
                            <!--<td align="center">-->
                              <!--<a class="btn btn-default"><em class="fa fa-pencil"></em></a>-->
                              <!--<a class="btn btn-danger"><em class="fa fa-trash"></em></a>-->

                            <!--</td>-->
                            <!--<td class="hidden-xs"></td>-->
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                          </tr>
                           @endforeach
                        </tbody>

                       </table>
                          {{$users->links()}}
@endsection 
   
  <hr>  <p <a class="copyright">Retour à l'Accueil:    <a class="navbar-brand" href="{{ url('/') }}">ProLivraison
                    <!-- {{ config('app.name', '       Prolivraison') }}</a></p> -->
  </form>

</div>
</body>
</html>

                

