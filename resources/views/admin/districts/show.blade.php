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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/districts') }}">Districts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> District {{ $district->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/districts') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/districts/' . $district->id . '/edit') }}" title="Edit District"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/districts' . '/' . $district->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete District" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $district->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $district->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $district->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $district->title_en }} </td></tr>
                                    <tr><th> Title Kr </th><td> {{ $district->title_kr }} </td></tr>
                                    <tr><th> Description Uz </th><td> {!! $district->description_uz !!} </td></tr>
                                    <tr><th> Description Ru </th><td> {!! $district->description_ru !!} </td></tr>
                                    <tr><th> Description En </th><td> {!! $district->description_en !!} </td></tr>
                                    <tr><th> Description Kr </th><td> {!! $district->description_kr !!} </td></tr>
                                    <tr><th>Ma'lumot Uz </th><td> {!! $district->body_uz !!} </td></tr>
                                    <tr><th>Ma'lumot Ru </th><td> {!! $district->body_ru !!} </td></tr>
                                    <tr><th>Ma'lumot En </th><td> {!! $district->body_en !!} </td></tr>
                                    <tr><th>Ma'lumot Kr </th><td> {!! $district->body_kr !!} </td></tr>

                                    <tr><th> Aholisi </th><td> {{ $district->population }} </td></tr>
                                    <tr><th> Maydoni </th><td> {{ $district->area }} </td></tr>
                                    <tr><th> Ob havo </th><td> {{ $district->weather }} </td></tr>
                                    <tr><th> Balandligi </th><td> {{ $district->height }} </td></tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
