@extends('layouts.admin')

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    @if(session('flash_message'))
                    <div class="alert alert-success alert-dismissible show fade col-lg-3" style="position: absolute; right: 15px; top: 15px">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('flash_message') }}
                        </div>
                    </div>
                    @endif
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">InfoCategory</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header">
                        <h4> Infocategories </h4>
                        <div class="card-header-form">
                            <a href="{{ url('/admin/info-categories/create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Add new</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="GET" action="{{ url('/admin/info-categories') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Title Uz</th><th>Image</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($infocategories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title_uz }}</td>
                                        <td><img src="/admin/images/info-categories/{{ $item->image }}" alt="" width="100"></td>
                                        <td>
                                            <a class="btn btn-icon btn-primary" href="{{ url('/admin/info-categories/' . $item->id) }}" title="View InfoCategory"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-icon btn-info" href="{{ url('/admin/info-categories/' . $item->id . '/edit') }}" title="Edit InfoCategory"><i class="far fa-edit"></i></a>

                                            <form method="POST" action="{{ url('/admin/info-categories' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-icon" title="Delete InfoCategory" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {{ $infocategories->links() }} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
