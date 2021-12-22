@extends('layouts.app')

@section('template_title')
    {{ $invoice->name ?? 'Show Invoice' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-head style-primary">
                        <header>
                            <span class="card-title">Show Invoice</span>
                        </header>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('invoices.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Customer Id:</strong>
                            {{ $invoice->customer_id }}
                        </div>
                        <div class="form-group">
                            <strong>Created Date:</strong>
                            {{ $invoice->created_date }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $invoice->status }}
                        </div>
                        <div class="form-group">
                            <strong>Total Amount:</strong>
                            {{ $invoice->total_amount }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
