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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/governors') }}">Governors</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> Governor {{ $governor->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/governors') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/governors/' . $governor->id . '/edit') }}" title="Edit Governor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/governors' . '/' . $governor->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete Governor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $governor->id }}</td>
                                    </tr>
                                    <tr><th> Name Uz </th><td> {{ $governor->name_uz }} </td></tr>
                                    <tr><th> Name Ru </th><td> {{ $governor->name_ru }} </td></tr>
                                    <tr><th> Name En </th><td> {{ $governor->name_en }} </td></tr>
                                    <tr><th> Lavozimi Uz </th><td> {{ $governor->position_uz }} </td></tr>
                                    <tr><th> Lavozimi Ru </th><td> {{ $governor->position_ru }} </td></tr>
                                    <tr><th> Lavozimi En </th><td> {{ $governor->position_en }} </td></tr>
                                    <tr><th> Body Uz </th><td> {!! $governor->body_uz !!} </td></tr>
                                    <tr><th> Body Ru </th><td> {!! $governor->body_ru !!} </td></tr>
                                    <tr><th> Body En </th><td> {!! $governor->body_en !!} </td></tr>
                                    <tr><th> Image </th><td><img width="200" src="/{{ $governor->image }}" alt=""> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
