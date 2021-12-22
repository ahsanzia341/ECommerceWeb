@extends('layouts.app')

@section('template_title')
    Update Promo Code
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-head style-primary">
                        <header>Update Promo Code</header>
                    </div>
                    <div class="card-body">
                        <form method="POST" class ="form floating-label" action="{{ route('promo-codes.update', $promoCode->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('promo-code.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
