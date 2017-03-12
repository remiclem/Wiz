@extends('layouts.app')

@section('content')






    <div class="left_container">

        <h1>TOOPY c'est quoi ?</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet,<br>
            consectetur adipisicing<br>
            elit, sed do eiusmod tempor<br>
            incididunt ut labore et<br>
            dolore magna aliqua. Ut<br>
            enim ad minim veniam, quis<br>
            nostrud exercitation<br>
            ullamco laboris ni</p>

    </div>




    <div class="right_container">

        <h1>VOUS ETES NOUVEAU ?</h1>

        <div class="form3">
            <p class="prenom">Prénom</p>
            <input type="text" name="prenom" size="20">
            <p class="nom">Nom</p>
            <input type="text" name="nom" size="20">
            <p>Adresse email</p>
            <input type="text" name="adresse_email" size="65">
            <p>Mot de passe</p>
            <input name="mot_de_passe" type="password" id="mot_de_passe" size="65" />
            <p>Interets</p>
            <input type="text" name="interets">


        </div>





    </div>




</div>



@endsection