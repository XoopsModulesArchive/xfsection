<?php
// $Id: convert.php,v 1.2 2005/06/20 15:03:23 ohwada Exp $

// dummy for non multibyte environment
if (!extension_loaded('mbstring') && !function_exists('mb_convert_encoding'))
{	include_once XOOPS_ROOT_PATH.'/modules/'.$xoopsModule->dirname().'/include/mb_dummy.php';	
}

class WfsConvert {

        function TextPlane($text) {
                $text = preg_replace("/[\s\t\n]{2,}/", " ", $text);
                return $text;
        }

        function TextHtml($text) {
                $text = preg_replace("/[\s\t\n]{2,}/", " ", $text);
                return $text;
        
        }
        
        function stripSpaces($text) {
                $ret = preg_replace("/[\s\t\n]{2,}/", " ", $text);
                return $ret;
        }

        function filenameForWin($text){
                return $text;
        }


}

?>
