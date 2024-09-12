<?php if (isset($_SESSION['logged'])): ?>

    <form action="" method="post">
        <input type="hidden" name="logout" value="123456">
        <input class="btn btn-danger" type="submit" value="Logout">
    </form>

<?php endif; ?>