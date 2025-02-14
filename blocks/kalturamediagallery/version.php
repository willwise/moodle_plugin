<?php
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2021051701;
$plugin->release = 'Kaltura release 4.3.1';
$plugin->requires  = 2018120300;
$plugin->component = 'block_kalturamediagallery';
$plugin->dependencies = array(
    'local_kaltura' => 2021051701,
    'local_kalturamediagallery' => 2021051701
);
