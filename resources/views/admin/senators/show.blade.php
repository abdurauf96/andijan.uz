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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/senators') }}">Senators</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> Senator {{ $senator->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/senators') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/senators/' . $senator->id . '/edit') }}" title="Edit Senator"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/senators' . '/' . $senator->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete Senator" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $senator->id }}</td>
                                    </tr>
                                    <tr><th> Name Uz </th><td> {{ $senator->name_uz }} </td></tr>
                                    <tr><th> Name Ru </th><td> {{ $senator->name_ru }} </td></tr>
                                    <tr><th> Name En </th><td> {{ $senator->name_en }} </td></tr>
                                    <tr><th> Qisqacha ma'lumot Uz </th><td> {{ $senator->description_uz }} </td></tr>
                                    <tr><th> Qisqacha ma'lumot Ru </th><td> {{ $senator->description_ru }} </td></tr>
                                    <tr><th> Qisqacha ma'lumot En </th><td> {{ $senator->description_en }} </td></tr>
                                    <tr><th> Image </th><td><img src="/{{ $senator->image }}" width="100" alt=""> </td></tr>

                                    <tr><th> Senator haqida Uz </th><td> {!! $senator->body_uz !!} </td></tr>
                                    <tr><th> Senator haqida Ru </th><td> {!! $senator->body_ru !!} </td></tr>
                                    <tr><th> Senator haqida En </th><td> {!! $senator->body_en !!} </td></tr>

                                    <tr><th> Telefon </th><td> {{ $senator->phone }} </td></tr>
                                    <tr><th> Email </th><td> {{ $senator->email }} </td></tr>
                                    <tr><th> Fax </th><td> {{ $senator->fax }} </td></tr>

                                    <tr><th> Slug </th><td> {{ $senator->slug }} </td></tr>
                                    <tr><th> Meta Description </th><td> {{ $senator->meta_description }} </td></tr>
                                    <tr><th> Meta Keywords </th><td> {{ $senator->meta_keywords }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
