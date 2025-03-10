<h1>Home Page</h1>
<h2>{{$name}}</h2>
<h2>{{rand()}}</h2>
<h2>{{$users[2]}}</h2>

@if($name == 'Amit')
    <h2>Hi Amit</h2>
@elseif($name == 'Jane')
    <h2>Hi Jane</h2>
@else
    <h2>Hi Guest</h2>
@endif