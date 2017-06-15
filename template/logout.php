<?PHP
session_start();
session_unset();
session_destroy();
echo '<script>
history.pushState(null, null, document.URL);
window.addEventListener("popstate", function () {
    history.pushState(null, null, document.URL);
});
window.location="index.php";
</script>';
?>