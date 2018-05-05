@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h7>Acceuil </h7></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h8>Vous êtes connecter sur votre espace client!</h8>
                </div>
                <input class="btn"  type="submit" value="Passer la commande"><a href="objet">ICI</a>
                
               
                <input type="submit" value="Inserer les information personnelle"><a href="particulier">ICI</a>
                <!--<input type="submit" value="Acceuil"><a href="{{ url('/index') }}">ICI</a>-->
               
        </div>
    </div>
</div>

@endsection
