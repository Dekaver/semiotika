{{-- @props(['method' => ]) --}}

<form method="post" action="{{$action}}">
    @csrf
    @method($method)
    {{$slot}}
</form>