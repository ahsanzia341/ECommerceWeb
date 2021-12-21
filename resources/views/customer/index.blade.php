@extends('layouts.app')
@section('css')
    @include('css.datatables_css')
@endsection
@section('template_title')
    Customer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-head style-primary">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <header>
                                {{ __('Customer') }}
                            </header>
                            <div class="tools">
                                <div class="btn-group">
                                    <a href="{{ route('customers.create') }}" class="btn ink-reaction btn-raised btn-default float-right">
                                    {{ __('Create New') }}
                                    </a>
                                </div>
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
                            <table id="table" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Email</th>
										<th>Name</th>
										<th>Is Verified</th>
										<th>Stripe Id</th>
										<th>Pm Type</th>
										<th>Pm Last Four</th>
										<th>Trial Ends At</th>
										<th>Phone</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $customer->email }}</td>
											<td>{{ $customer->name }}</td>
											<td>{{ $customer->is_verified }}</td>
											<td>{{ $customer->stripe_id }}</td>
											<td>{{ $customer->pm_type }}</td>
											<td>{{ $customer->pm_last_four }}</td>
											<td>{{ $customer->trial_ends_at }}</td>
											<td>{{ $customer->phone }}</td>

                                            <td>
                                                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary ink-reaction btn-raised" href="{{ route('customers.show',$customer->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success ink-reaction btn-raised " href="{{ route('customers.edit',$customer->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $customers->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('js')
    @include('js.datatables_js')
@endsection

@section('javascript')
    $('#table').DataTable();
    
@endsection
