<div class="container-fiuld">
    <p class="title">Add New User</p>


    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <p style="color:red">{{$error}}</p>
    @endforeach
    @endif -->
    <form action="userform" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Enter Name" value="{{old('name')}}"
                class="{{ $errors->first('name')?'input-error':'' }}" />
            <span style="color:red">@error('name'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" name="email" placeholder="Enter email" value="{{old('email')}}"
                class="{{$errors->first('email')?'input-error':''}}" />
            <span style="color:red">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" name="city" placeholder="Enter city" value="{{old('city')}}"
                class="{{$errors->first('city')?'input-error':''}}" />
            <span style="color:red">@error('city'){{$message}}@enderror</span>
        </div>
        <div>
            <h3>Skills</h3>
            <input type="checkbox" name="skill" value="php" id="php"
                class="{{$errors->first('skill')?'input-error':''}}" />
            <label for="php">PHP</label>
            <input type="checkbox" name="skill" value="java" id="java"
                class="{{$errors->first('skill')?'input-error':''}}" />
            <label for="java">Java</label>
            <input type="checkbox" name="skill" value="react" id="react"
                class="{{$errors->first('skill')?'input-error':''}}" />
            <label for="react">React</label>
        </div>
        <span style="color:red">@error('skill'){{$message}}@enderror</span>
        <div>
            <h3>Gender</h3>
            <input type="radio" name="gender" value="male" id="male"
                class="{{$errors->first('gender')?'input-error':''}}" />
            <label for="male">Male</label>

            <input type="radio" name="gender" value="female" id="female"
                class="{{$errors->first('gender')?'input-error':''}}" />
            <label for="female">Female</label>
        </div>
        <span style="color:red">@error('gender'){{$message}}@enderror</span>
        <!-- <div>
            <h3>City</h3>
            <select name="state">
                <option value="azamgarh">Utter Pradesh</option>
                <option value="jaunpur">Mumbai</option>
                <option value="varansi">Delhi</option>
            </select>
        </div> -->
        <!-- <div>
            <h3>Age</h3>
            <input type="range" name="age" min="18" max="100" />
        </div> -->
        <div class="input-wrapper">
            <button>Add new user</button>
        </div>
    </form>
</div>

<style>
    .container-fiuld {
        width: 225px;
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
        border: 1px solid orange;
        border-radius: 5px;
        margin-top: px;
    }

    .title {
        font-size: 30px;
        text-align: center;
        font-weight: bold;
    }

    input {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }

    input[type="checkbox"] {
        height: 20px;
        width: 40px;
    }

    input[type="radio"] {
        height: 20px;
        width: 40px;
    }

    .input-wrapper {
        margin: 5px;
    }

    button {
        border: orange 1px solid;
        padding: 5px 10px;
        border-radius: 2px;
        height: 35px;
        width: 200px;
        color: orange;
        cursor: pointer;
    }

    .input-error {
        border: 1px solid red !important;
        /* 🔥 Force apply */
        color: red !important;
        border-radius: 2px;
    }
</style>