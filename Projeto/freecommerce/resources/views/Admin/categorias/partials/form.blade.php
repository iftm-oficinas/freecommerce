<div class="col-md-6 col-md-offset-3">
    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-6 col-md-offset-3">
    <div class="form-group">
        {!! Form::submit('Adicionar Categoria', ['class'=>'btn btn-primary form-control']) !!}
    </div>
</div>