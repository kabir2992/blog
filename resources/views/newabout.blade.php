@include('common.header')
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
<div>
    <x-message-banner msg="About Message!!" class="success"/>
    <br>
    <br>
    <x-message-banner msg="Went Something Wrong!!" class="error"/>
    <br>
    <br>
    <x-message-banner msg="Do not Attempt Anymore!!" class="warning"/>
    <br><br>
    <h1>About Page</h1>
    <h1>User About Name {{$about}}</h1>
@include('common.inner', ['page'=>"This is About Page"])
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
