<?php

use yii\web\View;

/**
 * @var View $this
 */

echo $this->render('_menu');
?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelector(".logo-white").style.display = "none !important";
        document.querySelector(".logo-red").style.display = "block !important";
        document.querySelector(".w-logo").style.display = "none";
        document.querySelector(".r-logo").style.display = "block";
        document.querySelector(".header.js-header").classList.remove("is-white");
    })
</script>
