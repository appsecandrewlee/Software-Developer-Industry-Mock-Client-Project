<?php
if ($currentPage === "Home") echo '<b>'; echo $this->Html->link("Home", "/", ['class' => 'nav-link']); if ($currentPage === "Home") echo "</b>";
if ($currentPage === "About Us") echo '<b>'; echo $this->Html->link("About Us", "/about", ['class' => 'nav-link']); if ($currentPage === "About Us") echo "</b>";
if ($currentPage === "Bookings") echo '<b>'; echo $this->Html->link("Bookings", ['controller' => 'Events'], ['class' => 'nav-link']); if ($currentPage === "Bookings") echo "</b>";
if ($currentPage === "Courses") echo '<b>'; echo $this->Html->link("Courses", "/Courses", ['class' => 'nav-link']); if ($currentPage === "Courses") echo "</b>";



