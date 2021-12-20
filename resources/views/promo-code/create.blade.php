@extends('layouts.app')

@section('template_title')
    Create Promo Code
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-head style-primary">
                        <header>Create Promo Code</header>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('promo-codes.store') }}"  role="form" enctype="multipart/form-data" class="form floating-label">
                            @csrf

                            @include('promo-code.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
