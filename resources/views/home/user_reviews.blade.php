@extends('layouts.home')

@section('title', 'Yorum Sayfası')
@section('content')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <aside class="left-sidebar">
                        @include('home.usermenu')
                    </aside>
                </div>
                <div class="span8">

                        <h4 class="title"><strong>Ürünler</strong> - hakkında yorumlarınız<span></span></h4>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product</th>
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
                                <td>{{$rs->comment}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->created_at}}</td>

                                <td>
                                    <a href="{{route('user_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>

                </div>
            </div>
        </div>
    </section>
@endsection
