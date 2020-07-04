<?php include "inc/header.php";?>
<div class="panel">
    <i class="fa fa-tachometer" aria-hidden="true"></i>
    <h1>DASHBOARD</h1>
    <p>Website statistics</p>
</div>

<div class="panel">
    <i class="fa fa-users" aria-hidden="true"></i>
    <h1>1 ACCOUNT</h1>
    <p>Amount of accounts</p>
</div>

<div class="panel">
    <i class="fa fa-file" aria-hidden="true"></i>
    <h1>4 PAGES</h1>
    <p>Amount of pages</p>
</div>

<div class="panel panel-accounts">
    <h1>ACCOUNTS</h1>
    <p>List of admin accounts</p>
    <table>
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Copy</th>
            <th>Delete</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Admin</td>
            <td>12345</td>
            <td>Edit</td>
            <td>Copy</td>
            <td>Delete</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Admin</td>
            <td>12345</td>
            <td>Edit</td>
            <td>Copy</td>
            <td>Delete</td>
        </tr>
    </table>
    <div class="options">
        <p>Create a new user</p>
        <form action="" method="post">
            <label for="username">Username: </label>
            <input type="text">
            <label for="password">Password: </label>
            <input type="password">
            <button>CREATE</button>
        </form>
    </div>
</div>

<div class="panel panel-pages">
    <h1>PAGES</h1>
    <p>List of pages</p>
    <table>
        <tr>
            <th>Page ID</th>
            <th>Page Title</th>
            <th>Created By</th>
            <th>Edit</th>
            <th>Copy</th>
            <th>Delete</th>
        </tr>
        <tr>
            <td>1</td>
            <td><h1>GRAPHIC AND WEB DESIGN</h1></td>
            <td>Admin</td>
            <td>Edit</td>
            <td>Copy</td>
            <td>Delete</td>
        </tr>
        <tr>
            <td>2</td>
            <td><h1>ABOUT ME</h1></td>
            <td>Mod</td>
            <td>Edit</td>
            <td>Copy</td>
            <td>Delete</td>
        </tr>
    </table>
    <div class="options">
        <p>Create a new page</p>
        <button>CREATE</button>
    </div>
</div>

<?php include "inc/footer.php";?>