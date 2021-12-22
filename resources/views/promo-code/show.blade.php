@extends('layouts.app')

@section('template_title')
    {{ $promoCode->name ?? 'Show Promo Code' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-head style-primary">
                        <header>
                            <span class="card-title">Show Promo Code</span>
                        </header>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('promo-codes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $promoCode->code }}
                        </div>
                        <div class="form-group">
                            <strong>Enabled:</strong>
                            {{ $promoCode->enabled }}
                        </div>
                        <div class="form-group">
                            <strong>Start Date:</strong>
                            {{ $promoCode->start_date }}
                        </div>
                        <div class="form-group">
                            <strong>End Date:</strong>
                            {{ $promoCode->end_date }}
                        </div>
                        <div class="form-group">
                            <strong>Discount:</strong>
                            {{ $promoCode->discount }}
                        </div>
                        <div class="form-group">
                            <strong>Max Discount:</strong>
                            {{ $promoCode->max_discount }}
                        </div>
                        <div class="form-group">
                            <strong>Is Percentage:</strong>
                            {{ $promoCode->is_percentage }}
                        </div>
                        <div class="form-group">
                            <strong>Minmum Amount Required:</strong>
                            {{ $promoCode->minmum_amount_required }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
