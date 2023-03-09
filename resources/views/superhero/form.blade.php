<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('realname') }}
            {{ Form::text('realname', $superhero->realname, ['class' => 'form-control' . ($errors->has('realname') ? ' is-invalid' : ''), 'placeholder' => 'Realname']) }}
            {!! $errors->first('realname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('superheroname') }}
            {{ Form::text('superheroname', $superhero->superheroname, ['class' => 'form-control' . ($errors->has('superheroname') ? ' is-invalid' : ''), 'placeholder' => 'Superheroname']) }}
            {!! $errors->first('superheroname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('photo') }}
            {{ Form::text('photo', $superhero->photo, ['class' => 'form-control' . ($errors->has('photo') ? ' is-invalid' : ''), 'placeholder' => 'Photo']) }}
            {!! $errors->first('photo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('information') }}
            {{ Form::text('information', $superhero->information, ['class' => 'form-control' . ($errors->has('information') ? ' is-invalid' : ''), 'placeholder' => 'Information']) }}
            {!! $errors->first('information', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>