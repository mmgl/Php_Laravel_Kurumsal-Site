@extends('layouts.home')

@section('title', 'Kullanıcı Profili')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span12">
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <aside class="left-sidebar">
                        @include('home.usermenu')
                    </aside>
                </div>
                <div class="span8">
                    <article>
                        <div class="row">
                            <div class="span8">
                                <div class="post-image">
                                    <div class="post-heading">
                                        @include('profile.show')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
