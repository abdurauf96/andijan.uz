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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/arenas') }}">Arena</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> Arena {{ $arena->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/arenas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/arenas/' . $arena->id . '/edit') }}" title="Edit Arena"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/arenas' . '/' . $arena->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete Arena" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $arena->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $arena->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $arena->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $arena->title_en }} </td></tr>
                                    <tr><th> Title Kr </th><td> {{ $arena->title_kr }} </td></tr>
                                    <tr><th> Body Uz </th><td> {!! $arena->body_uz !!} </td></tr>
                                    <tr><th> Body Ru </th><td> {!! $arena->body_ru !!} </td></tr>
                                    <tr><th> Body En </th><td> {!! $arena->body_en !!} </td></tr>
                                    <tr><th> Body Kr </th><td> {!! $arena->body_kr !!} </td></tr>
                                    <tr><th> Image </th><td><img width="200" src="/{{ $arena->image }}" alt=""> </td></tr>
                                    <tr><th> Slug </th><td> {{ $arena->slug }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
