<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <div class="info">
                <p class="centered">
                @if (Auth::user()->profile_photo_path)
                    <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}" cclass="img-circle" width="60" >
                @endif
                </p>
                @auth
                    <a href="#" class="d-block"><h5 class="centered">{{\Illuminate\Support\Facades\Auth::user()->name}}</h5></a>
                @endauth
            </div>
            <li class="mt">
                <a class="" href="{{route('admin_home')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>AnaSayfa</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="{{route('admin_category')}}" >
                    <i class="fa fa-desktop"></i>
                    <span>Hizmetlerimiz</span>  <!-- Kategori gibi uyarlayacağız -->
                </a><!--
                <ul class="sub">
                    <li><a  href="general.html">E-Ticaret</a></li>
                    <li><a  href="buttons.html">Web Site Tasarımı</a></li>
                    <li><a  href="panels.html">Elektronik Tasarım</a></li>
                    <li><a  href="panels.html">Güvenlik Yazılım</a></li>
                </ul>-->
            </li>

            <li class="sub-menu">
                <a href="{{route('admin_products')}}" >
                    <i class="fa fa-tasks"></i>
                    <span >Menu</span>
                </a>
                <!--
                <ul class="sub">
                    <li><a  href="calendar.html">Ağ Kontrol Yazılımı</a></li>
                    <li><a  href="gallery.html">Bölgesel İklimlendirme Otomasyonu</a></li>
                    <li><a  href="todo_list.html">Kolay Kargo Taşımacılığı KargoDrone</a></li>
                </ul>
                -->
            </li>
            <li class="sub-menu">
                <a href="{{route('admin_review')}}" >
                    <i class="fa fa-tasks"></i>
                    <span >Yorumlar</span>
                </a>
                <!--
                <ul class="sub">
                    <li><a  href="calendar.html">Ağ Kontrol Yazılımı</a></li>
                    <li><a  href="gallery.html">Bölgesel İklimlendirme Otomasyonu</a></li>
                    <li><a  href="todo_list.html">Kolay Kargo Taşımacılığı KargoDrone</a></li>
                </ul>
                -->
            </li>
            <li class="sub-menu">
                <a href="{{route('admin_message')}}" >
                    <i class="fa fa-book"></i>
                    <span >Mesajlar</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="{{route('admin_setting')}}" >
                    <i class="fa fa-cogs"></i>
                    <span >Ayarlar</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="{{route('admin_user')}}" >
                    <i class="fa fa-cogs"></i>
                    <span >Users</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
