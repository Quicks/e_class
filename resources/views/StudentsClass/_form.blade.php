<div class="form-group">
    {!! Form::label('Name') !!}
    {!! Form::text('Name', null, ['class'=>'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('Class') !!}
    {!! Form::text('Class', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('Teacher') !!}
    {!! Form::text('Teacher', null, ['class'=>'form-control'] ) !!}
</div>
</div>
<div class="form-group">
    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
</div>
{{ csrf_token() }}