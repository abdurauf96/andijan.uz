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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/organizations') }}">Organizations</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> Organization {{ $organization->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/organizations') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/organizations/' . $organization->id . '/edit') }}" title="Edit Organization"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/organizations' . '/' . $organization->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete Organization" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $organization->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $organization->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $organization->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $organization->title_en }} </td></tr>

                                    <tr><th> Tashkilot vakili lavozimi Uz </th><td> {{ $organization->position_uz }} </td></tr>
                                    <tr><th> Tashkilot vakili lavozimi Ru </th><td> {{ $organization->position_ru }} </td></tr>
                                    <tr><th> Tashkilot vakili lavozimi En </th><td> {{ $organization->position_en }} </td></tr>

                                    <tr><th> Tashkilot Image </th><td><img src="/{{ $organization->image }}" width="100" alt=""></td></tr>
                                    <tr><th> Tashkilot Nizomi </th><td><a href="/{{ $organization->statute }}">Ko'rish</a> </td></tr>

                                    <tr><th> Addres Uz </th><td> {{ $organization->addres_uz }} </td></tr>
                                    <tr><th> Addres Ru </th><td> {{ $organization->addres_ru }} </td></tr>
                                    <tr><th> Addres En </th><td> {{ $organization->addres_en }} </td></tr>

                                    <tr><th> Phone </th><td> {{ $organization->phone }} </td></tr>
                                    <tr><th> Email </th><td> {{ $organization->email }} </td></tr>
                                    <tr><th> Fax </th><td> {{ $organization->fax }} </td></tr>
                                    <tr><th> Website </th><td> {{ $organization->website }} </td></tr>

                                    <tr><th> Fuqarolarni qabul qilish vaqti Uz </th><td> {{ $organization->reception_time_uz }} </td></tr>
                                    <tr><th> Fuqarolarni qabul qilish vaqti Ru </th><td> {{ $organization->reception_time_ru }} </td></tr>
                                    <tr><th> Fuqarolarni qabul qilish vaqti En </th><td> {{ $organization->reception_time_en }} </td></tr>

                                    <tr><th> Telegram </th><td> {{ $organization->telegram }} </td></tr>
                                    <tr><th> Facebook </th><td> {{ $organization->facebook }} </td></tr>
                                    <tr><th> Instagram </th><td> {{ $organization->instagram }} </td></tr>

                                    <tr><th> Ko'rishlar soni </th><td> {{ $organization->view }} ta </td></tr>
                                    <tr><th> Slug </th><td> {{ $organization->slug }} </td></tr>
                                    <tr><th> Meta Description </th><td> {{ $organization->meta_description }} </td></tr>
                                    <tr><th> Meta Keywords </th><td> {{ $organization->meta_keywords }} </td></tr>

                                    <tr><th> Direktor </th><td> {{ $organization->director }} </td></tr>
                                    <tr><th> Director Image </th><td><img width="200" src="/{{ $organization->director_image }}" alt=""> </td></tr>
                                    <tr><th> Direktor phone </th><td> {{ $organization->director_phone }} </td></tr>
                                    <tr><th> Director haqida Uz </th><td> {{ $organization->director_info_uz }} </td></tr>
                                    <tr><th> Director haqida Ru </th><td> {{ $organization->director_info_ru }} </td></tr>
                                    <tr><th> Director haqida En </th><td> {{ $organization->director_info_en }} </td></tr>
                                    <tr><th> Director telegram </th><td> {{ $organization->director_telegram }} </td></tr>
                                    <tr><th> Director facebook </th><td> {{ $organization->director_facebook }} </td></tr>
                                    <tr><th> Director instagram </th><td> {{ $organization->director_instagram }} </td></tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
