<script>
    let ans = confirm("確認登出?");
    if (ans) {
        <?php
        session_destroy();
        ?>
        location = '../index.php';
    }
</script>