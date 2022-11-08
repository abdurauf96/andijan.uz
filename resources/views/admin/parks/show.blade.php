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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/parks') }}">Parks</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> Park {{ $park->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/parks') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/parks/' . $park->id . '/edit') }}" title="Edit Park"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/parks' . '/' . $park->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete Park" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $park->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $park->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $park->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $park->title_en }} </td></tr>
                                    <tr><th> Body Uz </th><td> {!! $park->body_uz !!} </td></tr>
                                    <tr><th> Body Ru </th><td> {!! $park->body_ru !!} </td></tr>
                                    <tr><th> Body En </th><td> {!! $park->body_en !!} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
