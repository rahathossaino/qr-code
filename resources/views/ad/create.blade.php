@extends('voyager::master')


@section('content')
    <div>
        <h3 style="color:black;font-weight:bold ;margin-left:50px">Create new ad</h3>
    </div>
    <form action="{{ route('ad.store') }} " method="post">
        @csrf
        <input type="text" name="adCode"/>
        <button type="submit">Save</button>
    </form>
    
@stop