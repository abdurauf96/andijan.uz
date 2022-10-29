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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/fields') }}">Fields</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> Field {{ $field->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/fields') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/fields/' . $field->id . '/edit') }}" title="Edit Field"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/fields' . '/' . $field->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete Field" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $field->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $field->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $field->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $field->title_en }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $field->description_uz }} </td></tr>
                                    <tr><th> Description Ru </th><td> {{ $field->description_ru }} </td></tr>
                                    <tr><th> Description En </th><td> {{ $field->description_en }} </td></tr>
                                    <tr><th> Body Uz </th><td> {!! $field->body_uz !!} </td></tr>
                                    <tr><th> Body Ru </th><td> {!! $field->body_ru !!} </td></tr>
                                    <tr><th> Body En </th><td> {!! $field->body_en !!} </td></tr>
                                    <tr><th> Image </th><td><img width="200" src="/{{ $field->image }}" alt=""> </td></tr>
                                    <tr><th> Slug </th><td> {{ $field->slug }} </td></tr>
                                    <tr><th> Meta Description </th><td> {{ $field->meta_description }} </td></tr>
                                    <tr><th> Meta Keywords </th><td> {{ $field->meta_keywords }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
