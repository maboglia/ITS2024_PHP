<?php if (!isset($_SESSION['logged'])): ?>

    <form action="" method="post">
        <input class="form-control" type="text" name="username" placeholder="username">
        <br>
        <input class="form-control" type="password" name="password" placeholder="password">
        <br>
        <input class="btn btn-primary" type="submit" value="Login">
    </form>

<?php endif; ?>