<?php


require_once 'Zend/Gdata/Media/Feed.php';

require_once 'Zend/Gdata/YouTube/PlaylistListEntry.php';

class Zend_Gdata_YouTube_PlaylistListFeed extends Zend_Gdata_Media_Feed
{

    protected $_entryClassName = 'Zend_Gdata_YouTube_PlaylistListEntry';

    public function __construct($element = null)
    {
        $this->registerAllNamespaces(Zend_Gdata_YouTube::$namespaces);
        parent::__construct($element);
    }

}
