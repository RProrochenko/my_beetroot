<?php

require 'template.html';
require 'checkLogin.php';
require 'insertUser.php';


#$a = checkUserAuth($connection, 'King1', 'pass');
#echo $a;

function browseForm()
{
    echo '
        <form action="checkLogin" method="POST">
            <h1>Login Form</h1>
            <div>
                <input type="text" name="Login" placeholder="Username" required="" id="username" />
            </div>
            <div>
                <input type="password" name="Password" placeholder="Password" required="" id="password" />
            </div>
            <div>
                <input type="submit" value="Log in" />
                <a href="auth">Lost your password?</a>
                <a href="registration">Register</a>
            </div>
        </form>';
}