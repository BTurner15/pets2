<?php
/**
 * Bruce workng during tutoring with Jake in background.
 * Working thru exercises in PP pets2 after class
 * User: Dracula
 * Date: 4/26/2019
 * Time: 2:28 PM; worked again on 05-04-Sat.
 */
/* validate a color
 *
 * @param String color
 * return boolean
 * */
function validColor($color)
{
    global $f3;
    print_r($_POST);
    print_r($_SESSION);
    return in_array($color, $f3->get('colors'));
}
/* Validate a string
 * @param String animalStr
 * @return boolean if string is not empty, and all alphabetic
 */
function validString($animalStr)
{
    global $f3;
    return ctype_alpha ($animalStr) AND ($animalStr !="");
}