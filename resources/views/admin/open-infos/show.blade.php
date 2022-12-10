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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/open-infos') }}">Openinfos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> OpenInfo {{ $openinfo->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/open-infos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/open-infos/' . $openinfo->id . '/edit') }}" title="Edit OpenInfo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/openinfos' . '/' . $openinfo->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete OpenInfo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $openinfo->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $openinfo->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $openinfo->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $openinfo->title_en }} </td></tr>
                                    <tr><th> Title kr </th><td> {{ $openinfo->title_kr }} </td></tr>
                                    <tr><th> Ma'lumotlar to'plami passporti Uz </th><td> {{ $openinfo->passport_uz }} </td></tr>
                                    <tr><th> Ma'lumotlar to'plami passporti Ru </th><td> {{ $openinfo->passport_ru }} </td></tr>
                                    <tr><th> Ma'lumotlar to'plami passporti En </th><td> {{ $openinfo->passport_en }} </td></tr>
                                    <tr><th> Ma'lumotlar to'plami passporti kr </th><td> {{ $openinfo->passport_kr }} </td></tr>
                                    <tr><th> Malumotlar to'plami jadvali Uz </th><td> {{ $openinfo->table_uz }} </td></tr>
                                    <tr><th> Malumotlar to'plami jadvali Ru </th><td> {{ $openinfo->table_ru }} </td></tr>
                                    <tr><th> Malumotlar to'plami jadvali En </th><td> {{ $openinfo->table_en }} </td></tr>
                                    <tr><th> Malumotlar to'plami jadvali kr </th><td> {{ $openinfo->table_kr }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
