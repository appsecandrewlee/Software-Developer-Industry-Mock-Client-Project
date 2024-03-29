<?php
if ($currentPage === "Bookings") echo "<b>"; echo $this->Html->link(__('Bookings'), ['controller' => 'Sessions', 'action' => 'index'], ['class' => 'nav-link']); if ($currentPage === "Bookings") echo "</b>";
if ($currentPage === "Calendar") echo "<b>"; echo $this->Html->link(__('Calendar'), ['controller' => 'Fullcalendar', 'action' => 'my_events'], ['class' => 'nav-link']); if ($currentPage === "Calendar") echo "</b>";
if ($currentPage === "Accounts") echo "<b>"; echo $this->Html->link(__('Accounts'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link']); if ($currentPage === "Accounts") echo "</b>";
if ($currentPage === "Content Block") echo "<b>"; echo $this->Html->link(__('Content Block'), ['controller' => 'Content', 'action' => 'index'], ['class' => 'nav-link']); if ($currentPage === "Content Block") echo "</b>";
if ($currentPage === "Courses") echo "<b>"; echo $this->Html->link(__('Courses'), ['controller' => 'Courses', 'action' => 'index'], ['class' => 'nav-link']); if ($currentPage === "Courses") echo "</b>";
if ($currentPage === "Log out") echo "<b>"; echo $this->Html->link(__('Log Out'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link']); if ($currentPage === "Log out") echo "</b>";
