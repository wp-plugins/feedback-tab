<?php

/*
Plugin Name: Monyta Feedback Tab
Plugin URI: not known
Description: Allows for a feedtab to be created on your site 
Version: 1.0.0
Author: Scott Underhill
Author URI: http://www.monyta.com

Copyright 2009 Jonathan Foucher

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/


require_once('feedbacktab.class.php');

$feedbacktab=new feedbacktab();

$feedbacktab->init();

