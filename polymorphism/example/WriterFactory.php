<?php

require_once 'jsonWriter.php';
require_once 'xmlWriter.php';
require_once 'defaultWriter.php';

class WriterFactory
{
    /**
     * @return iWriter
     */
    public static function getWriter()
    {
        if (!isset($_GET['format']) || empty($_GET['format'])) {
            $format = 'default';
        } else {
            $format = $_GET['format'];
        }

        $writerName = $format . '_' . 'Writer';
        if (!class_exists($writerName)) {
            $writerName = 'default_Writer';
        }

        $writer = new $writerName;

        return $writer;
    }
}