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
    <h3>Toernooien</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda atque commodi expedita, facere iste magni molestias officiis pariatur quae. Aut dolorem dolores.</p>
</div>

</main>

</body>
</html>

