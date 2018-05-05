<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/auth_gest', function () {
    return view('/pages/auth_gest');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');

});



// // Route::get('/demo', function () {

// //    return view('demo');

// });

Route::get('/particulier', function () {
   return view('pages/particulier');
});



Route::get('/entreprise', function () {
 return view('pages/entreprise');
});

Route::get('/organisme_public', function () {
   return view('pages/organisme_public');
});
Route::get('/commande', function(){
	return view('pages/commande');
});

Route::get('/create', function () {
   return view('users/create');
});
Route::get('/espace_client', function () {
    return view('/pages/espace_client');
});
Route::get('/commande', function () {
    return view('/pages/commande');
});
Route::get('/objet', function () {
    return view('/pages/objet');
});
Route::get('/itineraire', function () {
    return view('/pages/itineraire');
});
Route::get('/adresse_depart', function () {
    return view('/pages/adresse_depart');

});
Route::get('/adresse_destination', function () {
    return view('/pages/adresse_destination');
});
Route::get('/facture', function () {
    return view('/pages/facture');
});
Route::get('/factures', function () {
    return view('/pages/factures');
});

Route::get('/bouton1', function () {
    return view('/pages/bouton1');
});
Route::get('/bouton2', function () {
    return view('/pages/bouton2');
});



Route::get('/info_particulier', function () {
   return view('pages/info_particulier');
});


Route::post('/particulier', function () {
	
	$particulier = new App\Particulier;

	$particulier->nom = request('nom');
	$particulier->prenom = request('prenom');
	$particulier->email = request('e_mail');
	$particulier->adresse = request('adresse');
	$particulier->numeroTel= request('telephone');

	$particulier->save();

return " Votre inscription a bien été prise en compte. Nous vous remerçions de l'interêtvous portez ProLivraison";
  });  


Route::post('/entreprise', function () {

	$entreprise = new App\Entreprise;
	$entreprise->nomEntreprise= request('nom_entreprise');
	$entreprise->responsableDestinataire = request('responsable_destinataire');
	$entreprise->email = request('e_mail');
	$entreprise->numeroTel = request('telephone');
	$entreprise->adresse = request('adresse');
	
	$entreprise->save();

return "Votre inscription a bien été prise en compte. Nous vous remerçions de l'interêt vous portez à ProLivraison";   
});

Route::post('/organisme_public', function () {
		
	$organisme_public = new App\Organisme_public;
	$organisme_public->nomOrganisme_public = request('nom_organisme');
	$organisme_public->responsableDestinataire  = request('responsable_destinataire');
	$organisme_public->adresse = request('adresse');
	$organisme_public->numeroTel = request('telephone');
	$organisme_public->email = request('e_mail');

	$organisme_public->save();
return "Votre inscription a bien été prise en compte. Nous vous remerçions de l'interêt vous portez à ProLivraison";
    
});

Route::post('/objet', function () {
	$objet = new App\Objet;
	$objet->nom = request('nom_objet');
	$objet->poids  = request('poids_objet');
	$objet->fragilite = request('fragilite_objet');
	$objet->nature = request('nature_objet');
	$objet->valeur = request('valeur_objet');
	$objet->description = request('description_objet');

		$objet->save();
		 //SweetAlert::message('Voulez fg!');
        return view('pages/bouton1');
//return back()->with('success','Item created successfully!');

    
});

	 Route::post('/adresse_depart', function () {
		
	 $adresse_depart= new App\adresse_depart;
	 $adresse_depart->numero_rue = request('num_rue1');
	 $adresse_depart->nom_voie  = request('nom_rue1');
	 $adresse_depart->code_postale = request('ville1');
	 $adresse_depart->ville = request('ville1');
	 $adresse_depart->code_postale = request('code_postal1');
	 $adresse_depart->complement_adresse = request('Complement1');
	 $adresse_depart->pays = request('pays1');

	$adresse_depart->save();

	return view('pages/bouton2');
});

	Route::post('/adresse_destination', function () {
		
	 $adresse_destination= new App\adresse_destination;
	 $adresse_destination->numero_rue = request('num_rue2');
	 $adresse_destination->nom_voie  = request('nom_rue2');
	 $adresse_destination->code_postale = request('ville2');
	 $adresse_destination->ville = request('ville2');
	 $adresse_destination->code_postale = request('code_postal2');
	 $adresse_destination->complement_adresse = request('Complement2');
	 $adresse_destination->pays = request('pays2');
	 $adresse_destination->save();

    return view('pages/bouton3');
    
});

Route::post('/facture', function () {
		
	 $facture= new App\Factures;
	
	 $facture->nomfacture = request('nom_facture');
	 $facture->dateCreation  = request('date_creation');
	 $facture->dateLivraison = request('date_livraison');
	 //$facture->factureStorage/facture = request('facture');
	 
	 $facture->save();

//return "facture enregistrer";
});
// Route::get('facture','factureController@showUploadForm')->name('upload.file');  
// Route::post('facture','factureController@storeFacture'); 



Route::get('/users', function () {
	if(request()->has('nom')){
		   $users=App\User::where('nom', request('nom'))->paginate(8);
	}
	else {
		$users = App\User::paginate(8);
    
	}
    return view('pages/users')->with('users', $users);
  
});


/*Route::get('/info_particulier', function () {
	if(request()->has('nom')){
		   $info_particulier=App\Info_particulier::where('nom', request('nom'))->paginate(8);
	}
	else {
		$info_particulier = App\Info_particulier::paginate(8);
    
	}
    return view('pages/info_particulier')->with('info_particulier', $info_particulier);
  
});*/


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/**Route::get('/particulier', function(){
   return view('pages/particulier');
	 
})->middleware('auth','particulier');
	
 
Route::get('/entreprise', function(){
    return view('pages/entreprise');
  
})->middleware('auth','entreprise');
  


Route::get('/organisme_public', function(){
  return view('pages/organisme_publique');
	
	
})->middleware('auth','organisme_public');
**/





//Route::resource('gestion_users', 'GestionUsersController');

