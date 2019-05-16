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
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut delectus et labore maiores nulla placeat voluptatem. Animi inventore neque reiciendis? Ab dignissimos dolor impedit iste magni maiores porro tempore voluptatum.</p>
</div>

</main>

</body>
</html>

