
<link href="../easterncafe.css"rel="stylesheet" type="text/css" media="all" />


<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<div id="left-nav">
    <ul id="navigation-items">
    <li<?php if ($page == 'menu-drinks.php') { print ' class="sub-on"'; } ?>><a href="menu-drinks.php">drinks</a></li>
    <li<?php if ($page == 'menu-eats.php') { print ' class="sub-on"';  } ?>><a href="menu-eats.php">eats</a></li>
    <li<?php if ($page == 'menu-sweets.php') { print ' class="sub-on"';  } ?>><a href="menu-sweets.php">sweets</a></li>
    </ul></div>
   
