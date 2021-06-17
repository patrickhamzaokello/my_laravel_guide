<!--

    comparing multiple possible conditions 
    multiple values that may require the same code

    -- use switch
-->

@switch($name)
    @case('John')
        <p>name is john</p>
        @break
    @case('patrick')
        <p>name is patrick</p>
        @break
    @case('maryo')
        <p>name is maryo</p>
        @break

    @default
        
@endswitch

<!-- 
for loop
foreach loop
for else loop
while loop

-->

@for ($i = 0; $i < 10; $i++)
    <p>i like you {{ $i }}</p>
@endfor




@if (5 == 10)

<p>5 is greater than 10<p>

@elseif (5 > 10)

<p>5 is less than 10</p>

@else

<p>everything is wrong</p>

@endif


@unless (empty($name))
    <p>name isn't empty {{ $name }}</p>
@endunless

@empty($name)
<p>Name is empty </p>
@endempty

@isset($name)
    <p>name has been set</p>
@endisset