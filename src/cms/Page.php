<?php

namespace mhoob\aena\cms;
use mhoob\aena\database\DatabaseLoader;

class Page {
    protected $id, $path, $content, $nextUpdate, $active;
    
    public function __construct($id) {
        $sql = 'SELECT * FROM page WHERE id = '.intval($id);
        $result = DatabaseLoader::getInstance()->query($sql);
        if (is_array($result)) {
            $row = $result[0];
            $this->setId($row['id']);
            $this->setPath($row['path']);
            $this->setContent($row['content']);
            $this->setNextUpdate($row['next_update']);
            $this->setActive($row['active']);
            
        } else {
            echo $sql;
        }
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    
    public function setPath($path) {
        $this->path = $path;
    }
    public function getPath() {
        return $this->path;
    }
    
    public function setContent($content) {
        $this->content = $content;
    }
    public function getContent() {
        return $this->content;
    }
    
    public function setNextUpdate($nextUpdate) {
        $this->nextUpdate = $nextUpdate;
    }
    public function getNextUpdate() {
        return $this->nextUpdate;
    }
    
    public function setActive($active) {
        $this->active = $active;
    }
    public function getActive() {
        return $this->active;
    }
    
    
    public function update() {
        echo '<pre>';
        print_r($this);
    }
}