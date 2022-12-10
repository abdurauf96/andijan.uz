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
                                <li class="breadcrumb-item "><a href="{{ url('/admin/posts') }}">Post</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header"> <h4> Post {{ $post->id }} </h4>
                        <div class="card-header-form">
                          <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/admin/posts/' . $post->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                          <form method="POST" action="{{ url('admin/posts' . '/' . $post->id) }}" accept-charset="UTF-8" style="display:inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                          </form>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $post->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $post->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $post->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $post->title_en }} </td></tr>
                                    <tr><th> Title kr </th><td> {{ $post->title_kr }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $post->description_uz }} </td></tr>
                                    <tr><th> Description Ru </th><td> {{ $post->description_ru }} </td></tr>
                                    <tr><th> Description En </th><td> {{ $post->description_en }} </td></tr>
                                    <tr><th> Description kr </th><td> {{ $post->description_kr }} </td></tr>
                                    <tr><th> Body Uz </th><td> {!! $post->body_uz !!} </td></tr>
                                    <tr><th> Body Ru </th><td> {!! $post->body_ru !!} </td></tr>
                                    <tr><th> Body En </th><td> {!! $post->body_en !!} </td></tr>
                                    <tr><th> Body kr </th><td> {!! $post->body_kr !!} </td></tr>
                                    <tr><th> Image </th><td><img width="200" src="/{{ $post->image }}" alt=""> </td></tr>
                                    <tr><th> Ko'rishlar soni </th><td> {{ $post->view }} ta </td></tr>
                                    <tr><th> Yangilik turi </th><td> @if($post->type==1) Andijon @elseif($post->type==2) Muxim @else Odatiy @endif </td></tr>
                                    <tr><th> Slug </th><td> {{ $post->slug }} </td></tr>
                                    <tr><th> Meta Description </th><td> {{ $post->meta_description }} </td></tr>
                                    <tr><th> Meta Keywords </th><td> {{ $post->meta_keywords }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
