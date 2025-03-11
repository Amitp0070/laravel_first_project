<x-message-banner msg="User Login Successfully" class="success"/>
<x-message-banner msg="User SignUp Successfully" class="success"/>
<h1>Home Page</h1>
<x-message-banner msg="Password not correct try again!" class="alert"/>
<x-message-banner msg="Password not correct try again!" class="warning"/>

<style>
    .success{
        color: green;
        background-color: lightgreen;
        display: inline-block;
        font-weight: bold;
        padding: 3px 10px;
        margin: 10px ;
        border-radius: 2px;
    }
    .alert{
        color: red;
        background-color: lightcoral;
        display: inline-block;
        font-weight: bold;
        padding: 3px 10px;
        margin: 10px ;
        border-radius: 2px;
    }
    .warning{
        color: orange;
        background-color: #ffa50073;
        display: inline-block;
        font-weight: bold;
        padding: 3px 10px;
        margin: 10px ;
        border-radius: 2px;
    }
</style>