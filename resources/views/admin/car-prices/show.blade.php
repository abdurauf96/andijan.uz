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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/car-prices') }}">Carprices</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> CarPrice {{ $carprice->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/car-prices') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/car-prices/' . $carprice->id . '/edit') }}" title="Edit CarPrice"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/carprices' . '/' . $carprice->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete CarPrice" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $carprice->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $carprice->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $carprice->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $carprice->title_en }} </td></tr>
                                    <tr><th> Title Kr </th><td> {{ $carprice->title_kr }} </td></tr>
                                    <tr><th> Mashina haqida Uz </th><td> {!! $carprice->body_uz !!} </td></tr>
                                    <tr><th> Mashina haqida Ru </th><td> {!! $carprice->body_ru !!} </td></tr>
                                    <tr><th> Mashina haqida En </th><td> {!! $carprice->body_en !!} </td></tr>
                                    <tr><th> Mashina haqida Kr </th><td> {!! $carprice->body_kr !!} </td></tr>
                                    <tr><th> Image </th><td><img src="/{{ $carprice->image }}" width="200" alt=""></td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
