@extends('layouts.app')

@section('template_title')
    {{ $category->name ?? 'Show Category' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-head style-primary">
                        <header>
                            <span class="card-title">Show Category</span>
                        </header>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $category->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $category->description }}
                        </div>
                        <div class="form-group">
                            <strong>Parent Id:</strong>
                            {{ $category->parent_id }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $category->image }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
