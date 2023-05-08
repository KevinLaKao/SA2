<script>
let ans = confirm("確認登出?");
if (ans) {
    <?php
        session_destroy();
        ?>
    alert("成功登出!");
    location = '../index.php';
}
</script>