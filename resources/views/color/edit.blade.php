@extends('layouts.app')

@section('template_title')
    Update Color
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-head style-primary">
                        <header>Update Color</header>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('colors.update', $color->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('color.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
