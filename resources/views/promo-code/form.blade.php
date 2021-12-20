
        
        <div class="form-group floating-label">
            {{ Form::label('code') }}
            {{ Form::text('code', $promoCode->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Code']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group floating-label">
            {{ Form::label('enabled') }}
            {{ Form::text('enabled', $promoCode->enabled, ['class' => 'form-control' . ($errors->has('enabled') ? ' is-invalid' : ''), 'placeholder' => 'Enabled']) }}
            {!! $errors->first('enabled', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group floating-label">
            {{ Form::label('start_date') }}
            {{ Form::text('start_date', $promoCode->start_date, ['class' => 'form-control' . ($errors->has('start_date') ? ' is-invalid' : ''), 'placeholder' => 'Start Date']) }}
            {!! $errors->first('end_date', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group floating-label">
            {{ Form::label('end_date') }}
            {{ Form::text('end_date', $promoCode->end_date, ['class' => 'form-control' . ($errors->has('end_date') ? ' is-invalid' : ''), 'placeholder' => 'End Date']) }}
            {!! $errors->first('end_date', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    <div class="box-footer mt20">
        <button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button>
    </div>
</div>
@section('javascript')
    $('#start_date').datepicker({
        format: 'yyyy-mm-dd'
    });
    $('#end_date').datepicker({
        format: 'yyyy-mm-dd'
    });
@endsection