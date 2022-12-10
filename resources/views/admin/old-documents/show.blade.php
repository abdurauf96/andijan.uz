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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/old-documents') }}">Olddocuments</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> OldDocument {{ $olddocument->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/old-documents') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/old-documents/' . $olddocument->id . '/edit') }}" title="Edit OldDocument"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/olddocuments' . '/' . $olddocument->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete OldDocument" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $olddocument->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $olddocument->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $olddocument->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $olddocument->title_en }} </td></tr>
                                    <tr><th> Title KR </th><td> {{ $olddocument->title_kr }} </td></tr>
                                    <tr><th> Chiqaruvchi organ Uz </th><td> {{ $olddocument->organ_uz }} </td></tr>
                                    <tr><th> Chiqaruvchi organ Ru </th><td> {{ $olddocument->organ_ru }} </td></tr>
                                    <tr><th> Chiqaruvchi organ En </th><td> {{ $olddocument->organ_en }} </td></tr>
                                    <tr><th> Chiqaruvchi organ kr </th><td> {{ $olddocument->organ_kr }} </td></tr>
                                    <tr><th> Sana </th><td> {{ $olddocument->date }} </td></tr>
                                    <tr><th> File </th><td><a href="/{{ $olddocument->file }}">Yuklab olish</a> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
