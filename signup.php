<html>
    <head>
        <title>SIgnup form</title>
    </head>
    <body>
         <h1>Sign up with PG Life </h1>
        <form method="post" action="register_submit.php">
            Full Name <br>
            <input type="text" name="name"/> <br>
            Phone number <br>
           <input type="number" name="phn_no"/> <br>
            Email <br>
            <input type="text" name="email"/><br>
            Password <br>
            <input type="password" name="password"/><br>
            College name <br>
            <input type="text" name="college_name"/><br>
            I am a 
            <input type="radio" name="gender" value="male"/>Male
            <input type="radio" name="gender" value="female"/>Female
<br>
            <input type="submit" name="submit" value="Create a account" />

        </form>

    </body>
</html>