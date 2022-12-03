@extends('layout')




@section('content')
    
@endsection
<h1>
        <div
        class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >
    
</h1>

@if(count($listings)==0)

<p>No listings were found</p>

@endif


@foreach($listings as $listing)



<h2>
    
        <a href="/listings/{{$listing['id']}}"> {{$listing['title']}} </a>
    
</h2>

<p>
    
        {{$listing['description']}}
    
</p>




@endforeach

@php
    
$test=1;
</div>
@endphp
{{$test}}

@endsection