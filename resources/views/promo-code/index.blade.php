@extends('layouts.app')

@section('template_title')
    Promo Code
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-head">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <header>
                                {{ __('Promo Code') }}
                            </header>

                             <div class="float-right">
                                <a href="{{ route('promo-codes.create') }}" class="btn ink-reaction btn-raised btn-primary float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Code</th>
										<th>Enabled</th>
										<th>Start Date</th>
										<th>End Date</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($promoCodes as $promoCode)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $promoCode->code }}</td>
											<td>{{ $promoCode->enabled }}</td>
											<td>{{ $promoCode->start_date }}</td>
											<td>{{ $promoCode->end_date }}</td>

                                            <td>
                                                <form action="{{ route('promo-codes.destroy',$promoCode->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary ink-reaction btn-raised" href="{{ route('promo-codes.show',$promoCode->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success ink-reaction btn-raised " href="{{ route('promo-codes.edit',$promoCode->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm ink-reaction btn-raised "><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $promoCodes->links() !!}
            </div>
        </div>
    </div>
@endsection
