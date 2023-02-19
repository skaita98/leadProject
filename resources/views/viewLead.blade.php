<!doctype html>
<html>

<header>
    <style>
        .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

    </style>
</header>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leads') }}
        </h2>
    </x-slot>
<body>
    


<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

<table class="table" >
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Entreprise</th>
            <th>Operation</th>
            <th>Type debien</th>
            <th>Ville</th>
            <th>Quartier</th>
            <th>Budget</th>
            <th>Commentaire</th>
            <th>Source</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($leads as $lead)
            <tr>
                <td>{{ $lead->nom }}</td>
                <td>{{ $lead->prenom }}</td>
                <td>{{ $lead->mail }}</td>
                <td>{{ $lead->tel }}</td>
                <td>{{ $lead->entreprise }}</td>
                <td>{{ $lead->operation }}</td>
                <td>{{ $lead->type_de_bien }}</td>
                <td>{{ $lead->ville }}</td>
                <td>{{ $lead->quartier }}</td>
                <td>{{ $lead->budget }}</td>
                <td>{{ $lead->commentaire }}</td>
                <td>{{ $lead->source }}</td>
                <td>
                  <a href="#view{{$lead->id}}" data-bs-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> View</a>
                  <a href="#edit{{$lead->id}}" data-bs-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Edit</a> 
                  <a href="#delete{{$lead->id}}" data-bs-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
                    @include('action')
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
<br><br>


<button><a href="/" style="text-decoration-line: none">Create Lead</a></button>

</x-app-layout>


                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">

var editBtn = document.getElementById("edit-btn");
var modal = document.getElementById("myModal");
var closeBtn = document.getElementsByClassName("close")[0];

editBtn.onclick = function() {
  modal.style.display = "block";
}

closeBtn.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>