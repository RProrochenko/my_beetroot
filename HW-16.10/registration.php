<?php

require_once 'template.html';


function browseForm()
{
    echo '
        <form action="insertUser" method="POST">
            <h1>Auth Form</h1>
            <div>
                <input type="text" name="Username" placeholder="Username" required="" id="username" />
            </div>
            <div>
                <input type="text" name="Login" placeholder="Login" required="" id="username" />
            </div>
            <div>
                <input type="text" name="Email" placeholder="Email" required="" id="username" />
            </div> 
            <div>
                <input type="password" name="Password" placeholder="Password" required="" id="password" />
            </div>
            <div>
                <input type="submit" value="Log in" />
            </div>
        </form>';
}
