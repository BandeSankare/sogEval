<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $candidat->id !!}</p>
</div>

<!-- Nomcomplet Field -->
<div class="form-group">
    {!! Form::label('nomComplet', 'Nomcomplet:') !!}
    <p>{!! $candidat->nomComplet !!}</p>
</div>

<!-- Date Naiss Field -->
<div class="form-group">
    {!! Form::label('date_naiss', 'Date Naiss:') !!}
    <p>{!! $candidat->date_naiss !!}</p>
</div>

<!-- Adresse Field -->
<div class="form-group">
    {!! Form::label('adresse', 'Adresse:') !!}
    <p>{!! $candidat->adresse !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $candidat->description !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $candidat->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $candidat->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $candidat->updated_at !!}</p>
</div>

