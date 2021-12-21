
        
        <div class="form-group floating-label">
            {{ Form::text('name', $category->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) }}
            <label for="name">Name</label>
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('description', $category->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : '')]) }}
            <label for="description">Description</label>
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('parent_id', $category->parent_id, ['class' => 'form-control' . ($errors->has('parent_id') ? ' is-invalid' : '')]) }}
            <label for="parent_id">Parent Id</label>
            {!! $errors->first('parent_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('image', $category->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : '')]) }}
            <label for="image">Image</label>
            {!! $errors->first('image', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    <div class="box-footer mt20">
        <button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button>
    </div>
</div>