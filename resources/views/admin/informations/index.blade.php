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
                                <li class="breadcrumb-item active">Ma'lumotlar</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header">
                        <h4> Andijon viloyati hokimligi to’g’risida chop etish lozim bo’lgan malumotlar ro’yxati </h4>
                        @if(!count($informations)>0)
                        <div class="card-header-form">
                            <a href="{{ url('/admin/informations/create') }}" class="btn btn-icon icon-left btn-primary">
                                <i class="fas fa-plus"></i>Add new</a>
                        </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Body Uz</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($informations as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{!! $item->body_uz !!}</td>
                                        <td>
                                            <a class="btn btn-icon btn-primary" href="{{ url('/admin/informations/' . $item->id) }}" title="View Information"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-icon btn-info" href="{{ url('/admin/informations/' . $item->id . '/edit') }}" title="Edit Information"><i class="far fa-edit"></i></a>

                                            <form method="POST" action="{{ url('/admin/informations' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-icon" title="Delete Information" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {{ $informations->links() }} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
