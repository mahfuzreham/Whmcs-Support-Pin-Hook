<?php

use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaPrimarySidebar', 1, function (MenuItem $primarySidebar)
{
   // The Support PIN will be generated automatically and will change daily.
   // The Support PIN will have the format of: Day (1st and 2nd numbers), Month (3rd and 4th numbers), Client ID (5th, 6 or 7th number) and then the last 2 digits is the current year.

   $clientID = intval($_SESSION['uid']);
   $SupportPIN = "Support PIN: ". date("dm".$clientID."y");
   // Add a first panel's body HTML. It will render above the panel's menu item list.
   $firstSidebar = $primarySidebar->getFirstChild();
   if ($firstSidebar) {
    $firstSidebar->setBodyHtml($SupportPIN);
   }
});
