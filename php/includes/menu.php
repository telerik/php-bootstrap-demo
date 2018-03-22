<?php 
    $menu = new \Kendo\UI\Menu('menu');

    $profile = new \Kendo\UI\MenuItem('<a href="#profile">Profile</a>');
    $schedule = new \Kendo\UI\MenuItem('<a href="#schedule">Schedule</a>');
    $orders = new \Kendo\UI\MenuItem('<a href="#orders">Orders</a>');
    $gallery = new \Kendo\UI\MenuItem('<a href="#gallery">Gallery</a>');
    $faq = new \Kendo\UI\MenuItem('<a href="#faq">FAQ</a>');
    $demos = new \Kendo\UI\MenuItem('<a href="https://demos.telerik.com/php-ui/">Telerik® UI for PHP demos</a>');

    $menu->addItem($profile);
    $menu->addItem($schedule);
    $menu->addItem($orders);
    $menu->addItem($gallery);
    $menu->addItem($faq);
    $menu->addItem($demos);

    echo $menu->render();
?>