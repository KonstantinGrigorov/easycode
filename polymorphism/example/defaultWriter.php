<?php

require_once 'iWriter.php';

class default_Writer implements iWriter
{
    public function write(Post $post) {
        $result = $post->title;
        $result .= '<hr />';
        $result .= $post->text;

        return $result;
    }
}