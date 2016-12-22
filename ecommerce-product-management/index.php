<?php

/** Inkluderar alla basklasser, config och
 * initialiserar bootstrap klassen
 */

require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/Database.php';
require 'libs/Session.php';
require 'config/database.php';
require 'config/paths.php';
require 'libs/View.php';

new Bootstrap();


