<script>
    let ans = confirm("確認登出?");
    if (ans) {
        alert("成功登出!");
        <?php
        session_destroy();
        ?>
    Location = '../index.php';
    }
</script>