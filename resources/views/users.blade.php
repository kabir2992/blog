<div>
    <h1>Users List</h1>
<br><br>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>UserName</td>
            <td>Email</td>
            <td>Mobile Number</td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobilenumber}}</td>
            </tr>
        @endforeach
    </table>
    <!-- Well begun is half done. - Aristotle -->
</div>
