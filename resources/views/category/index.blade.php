@extends('layouts.app')

@section('template_title')
    Category
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-head">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <header>
                                {{ __('Category') }}
                            </header>

                             <div class="float-right">
                                <a href="{{ route('categories.create') }}" class="btn ink-reaction btn-raised btn-primary float-right"  data-placement="left">
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
                                        
										<th>Name</th>
										<th>Description</th>
										<th>Parent Id</th>
										<th>Image</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $category->name }}</td>
											<td>{{ $category->description }}</td>
											<td>{{ $category->parent_id }}</td>
											<td>{{ $category->image }}</td>

                                            <td>
                                                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary ink-reaction btn-raised" href="{{ route('categories.show',$category->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success ink-reaction btn-raised " href="{{ route('categories.edit',$category->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $categories->links() !!}
            </div>
        </div>
    </div>
@endsection
