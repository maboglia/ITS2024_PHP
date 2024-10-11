
<h1>Paesi del mondo</h1>

<ul>

    @foreach ($flags as $flag)
        <li>{{$flag->country}}</li>
    @endforeach
    
</ul>