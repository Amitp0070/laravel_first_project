<div class="container-fiuld">
    <p class="title">Add New User</p>

    <form action="userform" method="post">
        @csrf
        <div class="input-wrapper">
            <input class="form" type="text" name="name" placeholder="Enter Name" />
        </div>
        <div class="input-wrapper">
            <input class="form" type="text" name="email" placeholder="Enter email" />
        </div>
        <div class="input-wrapper">
            <input class="form" type="text" name="state" placeholder="Enter state" />
        </div>
        <div>
            <h3>Skills</h3>
            <input type="checkbox" name="skill[]" value="php" id="php" />
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="java" id="java" />
            <label for="java">Java</label>
            <input type="checkbox" name="skill[]" value="react" id="react" />
            <label for="react">React</label>
        </div>
        <div>
            <h3>Gender</h3>
            <input type="radio" name="gender" value="male" id="male"/>
            <label for="male">Male</label>
            
            <input type="radio" name="gender" value="female" id="female"/>
            <label for="female">Female</label>
            
        </div>
        <div>
            <h3>City</h3>
            <select name="city">
                <option value="azamgarh">Azamgarh</option>
                <option value="jaunpur">Jaunpur</option>
                <option value="varansi">Varansi</option>
            </select>
        </div>
        <div>
            <h3>Age</h3>
            <input type="range" name="age" min="18" max="100" />
        </div>
        <div class="input-wrapper">
            <button>Add new user</button>
        </div>
    </form>
</div>

<style>
    .container-fiuld{
        width: 225px;
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
        border: 1px solid orange;
        border-radius: 5px;
        margin-top: px;
    }
    .title{
        font-size: 30px;
        text-align: center;
    }
    .form {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
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
</style>