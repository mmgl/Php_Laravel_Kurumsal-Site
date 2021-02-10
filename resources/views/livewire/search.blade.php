<div class="input-group">
    <input wire:model="search" class="span2" name="search" type="text" list="mylist"  placeholder="Search for..." />
    <button class="btn btn-theme" type="submit">Ara</button>
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{ $rs->title }}">{{ $rs->category->title }}</option>
            @endforeach
        </datalist>
    @endif
</div>
