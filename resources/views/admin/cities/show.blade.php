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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/cities') }}">Cities</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> City {{ $city->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/cities') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/cities/' . $city->id . '/edit') }}" title="Edit City"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/cities' . '/' . $city->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete City" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $city->id }}</td>
                                    </tr>
                                    <tr><th> Tuman Uz </th><td> {{ $city->title_uz }} </td></tr>
                                    <tr><th> Tuman Ru </th><td> {{ $city->title_ru }} </td></tr>
                                    <tr><th> Tuman En </th><td> {{ $city->title_en }} </td></tr>
                                    <tr><th> Tuman haqida Uz </th><td> {!! $city->body_uz !!} </td></tr>
                                    <tr><th> Tuman haqida Ru </th><td> {!! $city->body_ru !!} </td></tr>
                                    <tr><th> Tuman haqida En </th><td> {!! $city->body_en !!} </td></tr>

                                    <tr><th> Hokim Image </th><td><img src="/{{ $city->hokim_image }}" width="200" alt=""></td></tr>

                                    <tr><th> Hokim haqida Uz </th><td> {!! $city->hokim_text_uz !!} </td></tr>
                                    <tr><th> Hokim haqida Ru </th><td> {!! $city->hokim_text_ru !!} </td></tr>
                                    <tr><th> Hokim haqida En </th><td> {!! $city->hokim_text_en !!} </td></tr>

                                    <tr><th> Manzil Uz </th><td> {{ $city->addres_uz }} </td></tr>
                                    <tr><th> Manzil Ru </th><td> {{ $city->addres_ru }} </td></tr>
                                    <tr><th> Manzil En </th><td> {{ $city->addres_en }} </td></tr>

                                    <tr><th> Telefon </th><td> {{ $city->phone1 }} </td></tr>
                                    <tr><th> Ishonch Telefon </th><td> {{ $city->phone2 }} </td></tr>
                                    <tr><th> E-Xat </th><td> {{ $city->exat }} </td></tr>
                                    <tr><th> Website </th><td> {{ $city->website }} </td></tr>
                                    <tr><th> Ish vaqti </th><td> {{ $city->work_time }} </td></tr>
                                    <tr><th> Qaror </th><td><a href="/{{ $city->decision }}" target="_blank">Yuklab olish</a></td></tr>
                                    <tr><th> Nizom </th><td><a href="/{{ $city->statute }}" target="_blank">Yuklab olish</a></td></tr>
                                    <tr><th> Slug </th><td> {{ $city->slug }} </td></tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
