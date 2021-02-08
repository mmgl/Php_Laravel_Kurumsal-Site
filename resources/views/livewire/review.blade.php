<div class="marginbot30"></div>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
<h4>Leave your comment</h4>
<div id="success">@include('home.message')</div>
<form class="review-form" wire:submit.prevent="store">
    @csrf
    <div class="row">
            <div class="span8 margintop10">
                <input class="input" wire:model='subject' type="text" placeholder="Enter your subject" />
                @error('subject')<span class="'text-danger">{{$message}}</span>@enderror
            </div>
            <div class="span8 margintop10">
            <p>
                <textarea rows="12" class="input-block-level" wire:model='comment' placeholder="Your comment here"></textarea>
                @error('review')<span class="'text-danger">{{$message}}</span>@enderror
            </p>
            <p>
                @auth
                <button class="btn btn-theme btn-medium margintop10" type="submit">Gönder</button>
                @endauth
                @guest
                  <button type="button" class="btn btn-theme btn-medium margintop10" disabled><a style="text-decoration: none; color: white;" href="{{ route('login') }}">Yorum Yapmak için Giriş yapınız.</a></button>
                @endguest
            </p>
            </div>
    </div>
</form>
