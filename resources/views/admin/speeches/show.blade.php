@extends('layouts.admin')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item "><a href="{{ url('/admin/speeches') }}">Speeches</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> Speech {{ $speech->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/speeches') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/speeches/' . $speech->id . '/edit') }}" title="Edit Speech"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/speeches' . '/' . $speech->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete Speech" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $speech->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $speech->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $speech->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $speech->title_en }} </td></tr>
                                    <tr><th> Body Uz </th><td> {!! $speech->body_uz !!} </td></tr>
                                    <tr><th> Body Ru </th><td> {!! $speech->body_ru !!} </td></tr>
                                    <tr><th> Body En </th><td> {!! $speech->body_en !!} </td></tr>
                                    <tr><th> Image </th><td> <img src="/{{ $speech->image }}" width="100" alt=""></td></tr>
                                    <tr><th>Video file</th>
                                        <td><video width="320" height="240" controls>
                                                <source src="/{{ $speech->file }}" type="video/mp4">
                                            </video></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
