<?php
// config/phone.php
$phone = '+380 95 700 50 55';                       // человекочитаемый
$phoneHref = preg_replace('/\s+/', '', $phone); // для href tel:
