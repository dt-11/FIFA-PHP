<?php
require 'header.php';

require 'config.php';

if ( !isset( $_SESSION['sID'] ) ) {
    header('location: index.php');
    exit;
}

?>
<div class="login_container">
    <h2>Home</h2>
</div>

</main>

</body>
</html>

