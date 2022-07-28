<?php
session_start();
session_unset();

echo "
<script type=\"text/javascript\">
    alert(\"You've been logged out\");
    location.href = \"../index.php\";
</script>
";
?>
