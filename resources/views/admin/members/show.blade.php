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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/members') }}">Members</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> Member {{ $member->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/members') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/members/' . $member->id . '/edit') }}" title="Edit Member"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/members' . '/' . $member->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete Member" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $member->id }}</td>
                                    </tr>
                                    <tr><th> Name Uz </th><td> {{ $member->name_uz }} </td></tr>
                                    <tr><th> Name Ru </th><td> {{ $member->name_ru }} </td></tr>
                                    <tr><th> Name En </th><td> {{ $member->name_en }} </td></tr>
                                    <tr><th> Name kr </th><td> {{ $member->name_kr }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $member->description_uz }} </td></tr>
                                    <tr><th> Description Ru </th><td> {{ $member->description_ru }} </td></tr>
                                    <tr><th> Description En </th><td> {{ $member->description_en }} </td></tr>
                                    <tr><th> Description kr </th><td> {{ $member->description_kr }} </td></tr>
                                    <tr><th> Kengash </th><td> {{ $member->council->title_uz }} </td></tr>
                                    <tr><th> Phone </th><td> {{ $member->phone }} </td></tr>
                                    <tr><th> EMail </th><td> {{ $member->email }} </td></tr>
                                    <tr><th> Image </th><td><img src="/{{ $member->image }}" width="100" alt="">  </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
