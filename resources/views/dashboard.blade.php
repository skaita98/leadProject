<header>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</header>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Lead') }}
        </h2>
    </x-slot>

    <div class="py-12">

        
@if(count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
@if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get("success")}}<</p>
    </div>
@endif





        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}

<button type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> <a href="{{ route('lead.index') }}" style="text-decoration-line: none">All</a></button>

                {{-- <button><a href="{{ route('lead.index') }}" style="text-decoration-line: none">All</a></button><br> --}}
    <form action="{{ route('leads.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>
     <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
     <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="entreprise">Entreprise</label>
        <input type="text" class="form-control" id="entreprise" name="entreprise" required>
    </div>
   <div class="form-group">
        <label for="email">Operation</label>
         <select class="form-select bg-light js-example-tokenizer" id="operation" name="operation" required>
                    <option selected>Choisissez votre opération</option>
                    <option value="achat">Achat</option>
                    <option value="vente">Vente</option>
                    <option value="location">Location</option>
                    <option value="mettre en locat">Mettre en locat</option>
                </select>
    </div>
    <div class="form-group">
        <label for="type_de_bien">Type de bien</label>
         <select class="form-select bg-light js-example-tokenizer" id="type_de_bien" name="type_de_bien" required>
                    <option selected>Choisissez votre type de bien</option>
                    <option value="villa">Villa</option>
                    <option value="appartement">Appartement</option>
                    <option value="terrain">Terrain</option>
                    <option value="hongar">Hongar</option>
                    <option value="local commande">Local commande</option>
                    <option value="bureau">Bureau</option>

                </select>
    </div>

    <div class="form-group">
        <label for="ville">Ville</label>
        <input type="text" class="form-control" id="ville" name="ville" value="Rabat">
    </div>

    <div class="form-group">
        <label for="quartier">Qyartier</label>
         <select class="form-select bg-light js-example-tokenizer" id="quartier" name="quartier" required>
                    <option selected>Choisissez votre quartier</option>
                    <option value="Agdal">Agdal</option>
                    <option value="Souissi">Souissi</option>
                    <option value="Hassan">Hassan</option>
                    <option value="Temara">Temara</option>
                    <option value="Harhoura">Harhoura</option>
                    <option value="Wifaq">Wifaq</option>
                    <option value="autre">Autre</option>
                </select>
    </div>
     <div class="form-group">
        <label for="budget">Budget</label>
        <input type="text" class="form-control" id="budget" name="budget" required>
    </div>

     <div class="form-group">
        <label for="etat">Etape</label>
        <select class="form-select bg-light js-example-tokenizer" id="etat" name="etat" required>
                    <option selected>Choisissez Etape</option>
                    <option value="proposition 1">Proposition 1</option>
                    <option value="proposition 2">Proposition 2</option>
                    <option value="visite 1">Visite 1</option>
                    <option value="visite 2">visite 2</option>
                    <option value="compromis de vie">compromis de vie</option>
                    <option value="contrat de bail">Contrat de bail</option>
                    <option value="autre">Autre</option>
                </select>
    </div>

     <div class="form-group">
        <label for="commentaire">Commontaire</label>
        <input type="text" class="form-control" id="commentaire" name="commentaire" required>
    </div>

     <div class="form-group">
        <label for="source">Source</label>
        <input type="text" class="form-control" id="source" name="source">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


</x-app-layout>


                </div>
            </div>
        </div>
    </div>


