<!-- Edit Modal -->
<div class="modal fade" id="edit{{$lead->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Edit Lead</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action={{ route( 'update', $lead->id ) }} method="post">
                @csrf
                @method('PUT')
                    <div class="mb-3">
                        {!! Form::label('nom', 'nom') !!}
                        {!! Form::text('nom', $lead->nom, ['class' => 'form-control']) !!}
                    </div> 
                    <div class="mb-3">
                        {!! Form::label('prenom', 'prenom') !!}
                        {!! Form::text('prenom', $lead->prenom, ['class' => 'form-control']) !!}
                    </div>
                     <div class="mb-3">
                        {!! Form::label('mail', 'mail') !!}
                        {!! Form::text('mail', $lead->mail, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('tel', 'tel') !!}
                        {!! Form::text('tel', $lead->tel, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('entreprise', 'entreprise') !!}
                        {!! Form::text('entreprise', $lead->entreprise, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('operation', 'operation') !!}
                        {!! Form::text('operation', $lead->operation, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('type de bien', 'Type De Bien') !!}
                        {!! Form::text('type_de_bien', $lead->type_de_bien, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('ville', 'ville') !!}
                        {!! Form::text('ville', $lead->ville, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('quartier', 'quartier') !!}
                        {!! Form::text('quartier', $lead->quartier, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('budget', 'budget') !!}
                        {!! Form::text('budget', $lead->budget, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('commentaire', 'commentaire') !!}
                        {!! Form::text('commentaire', $lead->commentaire, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('source', 'source') !!}
                        {!! Form::text('source', $lead->source, ['class' => 'form-control']) !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                        {{Form::button('<i class="fa fa-check-square-o"></i> Update', ['class' => 'btn btn-success', 'type' => 'submit'])}}
                        {!! Form::close() !!}
                    </div>
            </form>
        </div>
      
    </div>
  </div>
</div>
 
<!-- Delete Modal -->
 <div class="modal fade" id="delete{{$lead->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Delete lead</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action={{ route( 'delete', $lead->id ) }} method="post">
                @csrf
                @method('DELETE')
                    <h4 class="text-center">Are you sure you want to delete Lead?</h4>
                <h5 class="text-center">Name: {{$lead->nom}} {{$lead->prenom}}</h5>
                 <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            {{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
            {!! Form::close() !!}
        </div>
            </form>







            {{-- {!! Form::model($leads, [ 'method' => 'delete','route' => ['lead.delete', $lead->id] ]) !!}
             @csrf
             @method('DELETE')
                <h4 class="text-center">Are you sure you want to delete Lead?</h4>
                <h5 class="text-center">Name: {{$lead->nom}} {{$lead->prenom}}</h5> --}}
        </div>
        {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            {{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
            {!! Form::close() !!}
        </div> --}}
    </div>
  </div>
</div>
