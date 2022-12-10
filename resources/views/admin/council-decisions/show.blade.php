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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/council-decisions') }}">Kengash qarorlari</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> CouncilDecision {{ $councildecision->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/council-decisions') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/council-decisions/' . $councildecision->id . '/edit') }}" title="Edit CouncilDecision"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/councildecisions' . '/' . $councildecision->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete CouncilDecision" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $councildecision->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $councildecision->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $councildecision->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $councildecision->title_en }} </td></tr>
                                    <tr><th> Title Kr </th><td> {{ $councildecision->title_kr }} </td></tr>
                                    <tr><th> File </th><td><a href="/{{ $councildecision->file }}">Ko'rish</a></td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
