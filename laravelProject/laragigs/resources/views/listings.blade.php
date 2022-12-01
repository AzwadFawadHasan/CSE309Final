
<h1>
    
        {{$headings}}
    
</h1>

@if(count($listings)==0)

<p>No listings were found</p>

@endif


@foreach($listings as $value)



<h2>
    
        {{$value['title']}}
    
</h2>

<p>
    
        {{$value['description']}}
    
</p>




@endforeach

@php
    
$test=1;

@endphp
{{$test}}