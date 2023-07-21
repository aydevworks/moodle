<?php
// This file is part of Moodle - http://moodle.org/
//
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

/**
 * Class for exporting a course without summary from an stdClass.
 *
 * @package    core_course
 * @copyright  2023 Alex Yeung
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace core_course\external;
defined('MOODLE_INTERNAL') || die();

class course_without_summary_exporter extends course_summary_exporter {
    public static function define_properties() {
        return array(
            'id' => array(
                'type' => PARAM_INT,
            ),
            'fullname' => array(
                'type' => PARAM_TEXT,
            ),
            'shortname' => array(
                'type' => PARAM_TEXT,
            ),
            'idnumber' => array(
                'type' => PARAM_RAW,
            ),
            'startdate' => array(
                'type' => PARAM_INT,
            ),
            'enddate' => array(
                'type' => PARAM_INT,
            ),
            'visible' => array(
                'type' => PARAM_BOOL,
            ),
            'showactivitydates' => [
                'type' => PARAM_BOOL,
                'null' => NULL_ALLOWED
            ],
            'showcompletionconditions' => [
                'type' => PARAM_BOOL,
                'null' => NULL_ALLOWED
            ],
            'pdfexportfont' => [
                'type' => PARAM_TEXT,
                'null' => NULL_ALLOWED
            ],
        );
    }
}