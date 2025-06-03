@include('common.header')
<x-message-banner msg="User Login Successful" class="success"/>
<x-message-banner msg="User SignUp Successful" class="success"/>
<br>
<br>
<br>
<x-message-banner msg="Password not Correct. Try Again!!" class="error"/>
<x-message-banner msg="Cannot Attempt Now!!" class="warning"/>
<style>
    .success
    {
        background: lightgreen;
        color: green;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
    .error
    {
        background: #ff000069;
        color: red;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
    .warning
    {
        background-color: orange;
        color: darkred;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
</style>
<h1>Home Page</h1>
<a href="/">Welcome Page</a>
<a href="/user-about/Kabir">About Page</a>
{{URL::current()}}
@include ('common.inner', ['page'=>"This is Home Page"])
@includeif('common.common', ['page'=>"This is Home Page"])
<h1>{{$user}}</h1>
<!-- <h1><?php //echo $user; ?></h1> -->

<!-- <h1>{{rand()}}</h1> -->

<!-- <h1>{{$users[2]}}</h1> -->

@if ($user == "Kabir")

    <h2>This is Kabir</h2>


@elseif($user == "Bapa")

    <h2>This is Bapa</h2>

@else

    <h2>Other Name</h2>

@endif


<div>
    @foreach ($users as $user)
    <h5>{{$user}}</h5>
    @endforeach
</div>

<div>
    @for ($i=0;$i<10;$i++)
        <h3>{{$i}}</h3>
    @endfor
</div>