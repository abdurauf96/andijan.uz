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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/comission-members') }}">Comissionmembers</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> ComissionMember {{ $comissionmember->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/comission-members') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/comission-members/' . $comissionmember->id . '/edit') }}" title="Edit ComissionMember"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/comissionmembers' . '/' . $comissionmember->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete ComissionMember" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $comissionmember->id }}</td>
                                    </tr>
                                    <tr><th> Name Uz </th><td> {{ $comissionmember->name_uz }} </td></tr>
                                    <tr><th> Name Ru </th><td> {{ $comissionmember->name_ru }} </td></tr>
                                    <tr><th> Name En </th><td> {{ $comissionmember->name_en }} </td></tr>
                                    <tr><th> Name kr </th><td> {{ $comissionmember->name_kr }} </td></tr>
                                    <tr><th> Lavozimi Uz </th><td> {{ $comissionmember->description_uz }} </td></tr>
                                    <tr><th> Lavozimi Ru </th><td> {{ $comissionmember->description_ru }} </td></tr>
                                    <tr><th> Lavozimi En </th><td> {{ $comissionmember->description_en }} </td></tr>
                                    <tr><th> Lavozimi kr </th><td> {{ $comissionmember->description_kr }} </td></tr>
                                    <tr><th> Komissiyasi </th><td> {{ $comissionmember->comission->title_uz }} </td></tr>
                                    <tr><th> Phone </th><td> {{ $comissionmember->phone }} </td></tr>
                                    <tr><th> Email </th><td> {{ $comissionmember->email }} </td></tr>
                                    <tr><th> Image </th><td><img src="/{{ $comissionmember->image }}" width="100" alt=""></td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
