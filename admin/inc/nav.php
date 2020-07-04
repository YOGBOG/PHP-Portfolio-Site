<nav>
    <div class="top-nav">
        <h1>Admin Control Panel</h1>
        <div class="user">
            <img src="../images/pyramid.png" alt="avatar" height="75">
            <h1>Hello, </h1>
            <p>Admin</p>
        </div>
    </div>

    <ul>
        <li class="<?php if($_SERVER['REQUEST_URI'] == "/yogi's-portfolio/admin/"){echo 'active';}?>"><a href="/yogi's-portfolio/admin/">DASHBOARD</a></li>
        <li><a href="/yogi's-portfolio/">WEBSITE</a></li>
        <li><a href="">LOG OUT</a></li>
    </ul>
</nav>