<?php
class Page
{
    public static function display(string $page)
    { 
         switch ($page) {
            case 'dashboard':
                include 'modules/dashboard_display.php';
                break;
            case 'students':
                include 'modules/student_display.php';
                break;
            case 'grades':
                include 'modules/grades_display.php';
                break;
            default:
                include 'modules/dashboard_display.php';
        }
    }
}
