
        
        <div class="form-group floating-label">
            {{ Form::text('email', $customer->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) }}
            <label for="email">Email</label>
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('name', $customer->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) }}
            <label for="name">Name</label>
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('is_verified', $customer->is_verified, ['class' => 'form-control' . ($errors->has('is_verified') ? ' is-invalid' : '')]) }}
            <label for="is_verified">Is Verified</label>
            {!! $errors->first('is_verified', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('stripe_id', $customer->stripe_id, ['class' => 'form-control' . ($errors->has('stripe_id') ? ' is-invalid' : '')]) }}
            <label for="stripe_id">Stripe Id</label>
            {!! $errors->first('stripe_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('pm_type', $customer->pm_type, ['class' => 'form-control' . ($errors->has('pm_type') ? ' is-invalid' : '')]) }}
            <label for="pm_type">Pm Type</label>
            {!! $errors->first('pm_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('pm_last_four', $customer->pm_last_four, ['class' => 'form-control' . ($errors->has('pm_last_four') ? ' is-invalid' : '')]) }}
            <label for="pm_last_four">Pm Last Four</label>
            {!! $errors->first('pm_last_four', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('trial_ends_at', $customer->trial_ends_at, ['class' => 'form-control' . ($errors->has('trial_ends_at') ? ' is-invalid' : '')]) }}
            <label for="trial_ends_at">Trial Ends At</label>
            {!! $errors->first('trial_ends_at', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('phone', $customer->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : '')]) }}
            <label for="phone">Phone</label>
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    <div class="box-footer mt20">
        <button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button>
    </div>
</div>