<h1>Home Page</h1>
<h2>{{$name}}</h2>
<h2>{{rand()}}</h2>
<h2>{{$users[1]}}</h2>

<!-- Condition -->
@if($name == 'Amit')
<h2>Hi Amit</h2>
@elseif($name == 'Jane')
<h2>Hi Jane</h2>
@else
<h2>Hi Guest</h2>
@endif

<!-- Foreach loop -->

<div>
    @foreach($users as $user)
        <h2>{{$user}}</h2>
        @endforeach
</div>

<!-- For loop -->
<div>
    @for($i = 0; $i <= 10; $i++)
        <h2>{{$i}}</h2>
        @endfor
</div>