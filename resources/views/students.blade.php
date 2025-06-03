<div>
    <h1>Student List</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email Id</td>
            <td>Batch</td>
        </tr>
        <tr>
            @foreach ($data as $student)
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->batch}}</td>
        </tr>
        @endforeach
    </table>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>
