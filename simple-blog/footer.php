<footer class="footer">
    <h5 class="w3-container w3-teal">
        دسترسی سریع
    </h5>
    <div>
        <a href="/<?=SITE_ROOT?>" class="w3-bar-item w3-button w3-pale-green">صفحه اصلی</a>
        <?php
    if (isset($_SESSION['username'])) {
        echo "<a href='".$url_path ."new.php' class='w3-bar-item w3-btn'>پست جدید</a>";
        echo "<a href='".$url_path ."admin.php' class='w3-bar-item w3-btn'>پنل ادمین</a>";
        echo "<a href='".$url_path ."logout.php' class='w3-bar-item w3-btn'>خروج از حساب</a>";
    } else {
        echo "<a href='".$url_path ."login.php' class='w3-bar-item w3-pale-red' >ورود به حساب</a>";
    }
    ?>
    </div>

    <div class="w3-container w3-teal w3-center">
        <p>سایت بلاگ | <?php echo date("Y"); ?></p>
        <p>Creators : <a href="https://github.com/ArianRafiei" target="_blank">Arian Rafiei</a></p>
    </div>
</footer>




<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.19.1/trumbowyg.min.js"></script>
<script>
    $('#description').trumbowyg();
</script>

</body>