@if(session()->has("message"))
    <div class="alert alert-success">
        {{ session("message") }}
    </div>
@endif
<h4>Leave your comment</h4>
@include('home.message')
<form wire:submit.prevent="store">
    @csrf
    <div class="row">
        <div class="span8 margintop10">
            <div class="span8 margintop10">
                <input class="input" wire:model="subject" type="text" placeholder="Enter your subject" />
                @error('subject')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <p>
                <textarea rows="12" class="input-block-level" wire:model="comment" placeholder="Your comment here"></textarea>
                @error('comment')<span class="text-danger">{{$message}}</span>@enderror
            </p>
            <p>
                @auth
                    <input type="submit" class="btn btn-success" value="Save"></input>
                @else
                  <button type="button" class="btn btn-theme btn-medium margintop10" disabled><a style="text-decoration: none; color: white;" href="{{ route('login') }}">Yorum Yapmak için Giriş yapınız.</a></button>
                @endauth
            </p>
        </div>
    </div>
</form>
