    <!-- start slider -->
    <div id="da-slider" class="da-slider">
        @foreach($slider as $rs)
        <div class="da-slide">
            <h2>{{$rs->title}}</h2>
            <p>{{$rs->description}}</p>
            <a href="#" class="btn btn-theme btn-large da-link">Detay</a>
            <div class="da-img"><img style="height: 400px" src="{{ Storage::url($rs->image) }}" alt="" /></div>
        </div>
        @endforeach
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
    </div>
    <!-- end slider -->


