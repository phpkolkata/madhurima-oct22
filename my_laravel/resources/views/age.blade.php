@if($age <=3)
    <h1>You are a toddler, age is {{ $age }}</h1>
@elseif($age <=12)
    <h1> You are a kid</h1>
@elseif($age <=19)
    <h1>You are a teenager</h1>
@else
    <h1>mature enough</h1>
@endif
