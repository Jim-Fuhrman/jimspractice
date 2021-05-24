<?php
if(!is_active_sidebar('main-sidebar')){
    return; /* if the main-sidebar isn't the active side bar, stop executing this code.*/
}

?>

<aside id="secondary" class="widget-area" role="complementary">

    <?php dynamic_sidebar('main-sidebar'); ?>

</aside>