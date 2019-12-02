<?php

    class Widget{

        public $title; // Title to show on the widget
        public $info; // Quick description about the widgets contents

        public function __construct($_title, $_info){
            $this->title = $_title;
            $this->info = $_info;
        }

    }

class News extends Widget{
    public $author; // Author of the news story
    public $content; // The main content of the article
    public $url; // link to the articles source page
    public $sourceName; // Name of the source who reported on this article

    public function __construct($title, $_description, $_content, $_author, $_url, $_sourceName){
        parent::__construct($title, $_description);
        $this->content = $_content;
        $this->author = $_author;
        $this->url = $_url;
        $this->sourceName = $_sourceName;
    }

}

?>