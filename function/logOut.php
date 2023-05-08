<script>
    let ans = confirm("確認登出?");
    if (ans) {
        alert("成功登出!");
        </script>
        <?php
        unset($_SESSION['userName']);
        unset($_SESSION['userEmail']);
        unset($_SESSION['userPhone']);
        unset($_SESSION['userPassword']);
        unset($_SESSION['userAddress']);
        unset($_SESSION['userBirthday']);
        unset($_SESSION['level']);
        ?>
        <script>
    Location = '../index.php';
    }
</script>