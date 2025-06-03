<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
     <h1>Hello User-Form</h1>

    <!-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color: red;">
            {{$error}}
        </div>
    
    @endforeach()

    
    @endif -->

     <form action="addUser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name. Eg. Kabir" name="username" size="40" value="{{old('username')}}"
             class="{{$errors->first('username')?'input-error':''}}"><br>
            <span style="color:red;">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Email. Eg. laravel123@gmail.com" name="email" size="40" value="{{old('email')}}"
             class="{{$errors->first('email')?'input-error':''}}"><br>
            <span style="color:red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User City. Eg. Surat" name="city" size="40" value="{{old('city')}}"
             class="{{$errors->first('city')?'input-error':''}}"><br>
            <span style="color:red;">@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <h5>User Skill</h5>
            <input type="checkbox" name="skills" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skills" value="Node" id="node">
            <label for="node">Node</label>
            <input type="checkbox" name="skills" value="Java" id="java">
            <label for="java">Java</label><br>
            <span style="color:red;">@error('skills'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <h5>Gender</h5>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">Female</label><br>
            <span style="color:red;">@error('gender'){{$message}}@enderror</span>
        </div>
        <div>
            <h5>City</h5>
            <select name="ucity">
                <option value="select">--Select A City--</option>
                <option value="Surat">Surat</option>
                <option value="Mumbai">Mumbai</option>
                <option value="jaipur">Jaipur</option>
                <option value="delhi">Delhi</option>
            </select>
        </div>
        <div>
            <h5>User Age</h5>
            <input type="range" name="age" min="18" max="100">
        </div>
        <div class="input-wrapper">
            <button>Add new User</button>
        </div>
     </form>
</div>
<style>
    input[type="text"]
    {
        border: orange 1px solid;
        height: 35px;
        border-radius: 2px;
        color: orange;
        background-color: white;
    }
    .input-wrapper
    {
        margin: 10px;
    }
    button
    {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: white;
    }
    .input-error
    {
        border: 1px solid red;
        color: red;
    }
</style>