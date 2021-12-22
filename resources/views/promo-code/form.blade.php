
        
        <div class="form-group floating-label">
            {{ Form::text('code', $promoCode->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : '')]) }}
            <label for="code">Code</label>
            {!! $errors->first('code', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::select('enabled', array('0' => 'False', '1' => 'True'), $promoCode->enabled, ['class' => 'form-control' . ($errors->has('enabled') ? ' is-invalid' : '')]) }}
            <label for="enabled">Enabled</label>
            {!! $errors->first('enabled', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('start_date', $promoCode->start_date, ['id' => 'start_date','class' => 'form-control' . ($errors->has('start_date') ? ' is-invalid' : '')]) }}
            <label for="start_date">Start Date</label>
            {!! $errors->first('start_date', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('end_date', $promoCode->end_date, ['id' => 'end_date','class' => 'form-control' . ($errors->has('end_date') ? ' is-invalid' : '')]) }}
            <label for="end_date">End Date</label>
            {!! $errors->first('end_date', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('discount', $promoCode->discount, ['class' => 'form-control' . ($errors->has('discount') ? ' is-invalid' : '')]) }}
            <label for="discount">Discount</label>
            {!! $errors->first('discount', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('max_discount', $promoCode->max_discount, ['class' => 'form-control' . ($errors->has('max_discount') ? ' is-invalid' : '')]) }}
            <label for="max_discount">Max Discount</label>
            {!! $errors->first('max_discount', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::select('is_percentage', array('0' => 'False', '1' => 'True'), $promoCode->is_percentage, ['class' => 'form-control' . ($errors->has('is_percentage') ? ' is-invalid' : '')]) }}
            <label for="is_percentage">Is Percentage</label>
            {!! $errors->first('is_percentage', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('minmum_amount_required', $promoCode->minmum_amount_required, ['class' => 'form-control' . ($errors->has('minmum_amount_required') ? ' is-invalid' : '')]) }}
            <label for="minmum_amount_required">Minmum Amount Required</label>
            {!! $errors->first('minmum_amount_required', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    <div class="box-footer mt20">
        <button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button>
    </div>
</div>
@section('javascript')
    $('#start_date').datepicker();
    $('#end_date').datepicker();
@endsection