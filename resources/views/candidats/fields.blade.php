<!-- Nomcomplet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomComplet', 'Nomcomplet:') !!}
    {!! Form::text('nomComplet', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Naiss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_naiss', 'Date Naiss:') !!}
    {!! Form::date('date_naiss', null, ['class' => 'form-control']) !!}
</div>

<!-- Adresse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse', 'Adresse:') !!}
    {!! Form::text('adresse', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('candidats.index') !!}" class="btn btn-default">Cancel</a>
</div>
