
        
        <div class="form-group floating-label">
            {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) }}
            <label for="name">Name</label>
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('description', $product->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : '')]) }}
            <label for="description">Description</label>
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('quantity', $product->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : '')]) }}
            <label for="quantity">Quantity</label>
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : '')]) }}
            <label for="price">Price</label>
            {!! $errors->first('price', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('image', $product->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : '')]) }}
            <label for="image">Image</label>
            {!! $errors->first('image', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('category_id', $product->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : '')]) }}
            <label for="category_id">Category Id</label>
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('discount', $product->discount, ['class' => 'form-control' . ($errors->has('discount') ? ' is-invalid' : '')]) }}
            <label for="discount">Discount</label>
            {!! $errors->first('discount', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('is_featured', $product->is_featured, ['class' => 'form-control' . ($errors->has('is_featured') ? ' is-invalid' : '')]) }}
            <label for="is_featured">Is Featured</label>
            {!! $errors->first('is_featured', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('color_id', $product->color_id, ['class' => 'form-control' . ($errors->has('color_id') ? ' is-invalid' : '')]) }}
            <label for="color_id">Color Id</label>
            {!! $errors->first('color_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    <div class="box-footer mt20">
        <button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button>
    </div>
</div>