
        
        <div class="form-group floating-label">
            {{ Form::label('email') }}
            {{ Form::text('email', $customer->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group floating-label">
            {{ Form::label('name') }}
            {{ Form::text('name', $customer->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group floating-label">
            {{ Form::label('is_verified') }}
            {{ Form::text('is_verified', $customer->is_verified, ['class' => 'form-control' . ($errors->has('is_verified') ? ' is-invalid' : ''), 'placeholder' => 'Is Verified']) }}
            {!! $errors->first('is_verified', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    <div class="box-footer mt20">
        <button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button>
    </div>
</div>