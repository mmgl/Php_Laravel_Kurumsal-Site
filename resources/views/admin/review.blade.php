@extends('layouts.admin')

@section('title', 'Yorum Sayfası')
@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-lg-12">
                    @include('home.message')
                </div>
            </div>
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <h4 class="title"><strong>Ürünler</strong> - hakkında yorumlarınız<span></span></h4>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('home.message')
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}" target="_blank">{{$rs->product->title}}</a> </td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->comment}}</td>
                                    <td>
                                        <span class="status--process">{{ $rs->status }}</span>
                                    </td>
                                    <td>{{$rs->created_at}}</td>
                                    <td><a class="btn btn-round btn-info" href="{{ route('admin_review_show', ['id' => $rs->user->id]) }}" onclick="return !window.open(this.href, '', 'top=120 left=120 width=640 height=720')">Edit
                                        </a>

                                        <a class="btn btn-round btn-danger" href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endforeach
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection