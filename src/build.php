<?php
/**
 * Created by PhpStorm.
 * User: vdme
 * Date: 01.11.18
 * Time: 11:29
 */

/*function render($file)
{
    $template = file_get_contents($file);
    $template = preg_replace_callback("/\{include\:(.+)\}/", function ($matches) {
        if (file_exists(trim($matches[1],'" '))) {
            return render(trim($matches[1],'" '));
        } else {
            echo 'file non exists '.getcwd().$matches[1];die;
        }
        return getcwd() . $matches[0];

    }, $template);

    $template = preg_replace_callback("/\{include-json\:(.+)\}/", function ($matches) {
        if (file_exists(trim($matches[1],'" '))) {
            $res = prettyPrint(json_encode(json_decode(render(trim($matches[1],'" ')), JSON_PRETTY_PRINT)));
            if ('null' == $res){
                var_dump($matches[1]);
                var_dump(render(trim($matches[1],'" ')));
                var_dump(json_last_error_msg());die;
            }
            return $res;
        } else {
            echo 'file non exists '.getcwd().$matches[1];die;
        }
        return getcwd() . $matches[0];

    }, $template);


    return $template;
}


function prettyPrint( $json )
{
    $result = '';
    $level = 0;
    $in_quotes = false;
    $in_escape = false;
    $ends_line_level = NULL;
    $json_length = strlen( $json );

    for( $i = 0; $i < $json_length; $i++ ) {
        $char = $json[$i];
        $new_line_level = NULL;
        $post = "";
        if( $ends_line_level !== NULL ) {
            $new_line_level = $ends_line_level;
            $ends_line_level = NULL;
        }
        if ( $in_escape ) {
            $in_escape = false;
        } else if( $char === '"' ) {
            $in_quotes = !$in_quotes;
        } else if( ! $in_quotes ) {
            switch( $char ) {
                case '}': case ']':
                $level--;
                $ends_line_level = NULL;
                $new_line_level = $level;
                break;

                case '{': case '[':
                $level++;
                case ',':
                    $ends_line_level = $level;
                    break;

                case ':':
                    $post = " ";
                    break;

                case " ": case "  ": case "\n": case "\r":
                $char = "";
                $ends_line_level = $new_line_level;
                $new_line_level = NULL;
                break;
            }
        } else if ( $char === '\\' ) {
            $in_escape = true;
        }
        if( $new_line_level !== NULL ) {
            $result .= "\n".str_repeat( "  ", $new_line_level );
        }
        $result .= $char.$post;
    }

    return $result;
}*/

require_once "../vendor/autoload.php";
$renderer = new \Readme\Renderer();
file_put_contents("../README.md", $renderer->render("README.md"));



