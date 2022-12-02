
<h1>
    
        {{$headings}}
    
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

@endphp
{{$test}}