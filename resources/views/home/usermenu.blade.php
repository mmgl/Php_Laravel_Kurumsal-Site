<div class="widget">

    <h5 class="widgetheading">Kullanıcı Paneli</h5>

    <ul class="list-links">
        @php
            use Illuminate\Support\Facades\Auth;
            $userRoles = Auth::user()->roles->pluck('name');

        @endphp
        @auth
            @if($userRoles->contains('admin'))
                <li><a href="{{ route('admin_home') }}" target="_blank"><b>Admin Panel</b></a></li>
            @endif
        @endauth
        <li><a href="{{route('myprofile')}}">Benim Profilim</a></li>
        <li><a href="{{route('user_products')}}">Etkinlikler</a></li> <!-- etkinlik,duyuru,haber buradan yönetim -->
        <li><a href="{{route('myreviews')}}">Yorumlarım</a></li>
        <li><a href="{{route('logout')}}">Çıkış</a></li>
    </ul>
</div>
