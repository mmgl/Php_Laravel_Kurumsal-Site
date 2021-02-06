@if ($message = Session::get('success'))
    <strong style="color: mediumseagreen;">{{ $message }}</strong>
@endif
@if ($message = Session::get('error'))
    <strong style="color: red;">{{ $message }}</strong>
@endif
