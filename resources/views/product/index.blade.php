@extends('layouts.app')
@section('css')
    @include('css.datatables_css')
@endsection
@section('template_title')
    Product
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-head style-primary">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <header>
                                {{ __('Product') }}
                            </header>
                            <div class="tools">
                                <div class="btn-group">
                                    <a href="{{ route('products.create') }}" class="btn ink-reaction btn-raised btn-default float-right">
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
                                        
										<th>Name</th>
										<th>Description</th>
										<th>Quantity</th>
										<th>Price</th>
										<th>Image</th>
										<th>Category Id</th>
										<th>Discount</th>
										<th>Is Featured</th>
										<th>Color Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $product->name }}</td>
											<td>{{ $product->description }}</td>
											<td>{{ $product->quantity }}</td>
											<td>{{ $product->price }}</td>
											<td>{{ $product->image }}</td>
											<td>{{ $product->category_id }}</td>
											<td>{{ $product->discount }}</td>
											<td>{{ $product->is_featured }}</td>
											<td>{{ $product->color_id }}</td>

                                            <td>
                                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary ink-reaction btn-raised" href="{{ route('products.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success ink-reaction btn-raised " href="{{ route('products.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $products->links() !!}
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
