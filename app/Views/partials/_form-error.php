<?php

if (session('validation')) { ?>

    <div> <?php echo session('validation')->listErrors(); ?></div>


<?php
}

?>