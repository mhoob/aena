<?php

namespace mhoob\aena\cms;
use mhoob\aena\database\DatabaseLoader;

class PageGenerator {
    public function update() {
        $db = DatabaseLoader::getInstance();
        $sql = 'SELECT id FROM page WHERE next_update IS NULL OR next_update < '.$db->quote(time());
        $result = $db->query($sql);
        if (is_array($result)) {
            foreach ($result as $row) {
                $this->updatePage($row['id']);
            }
        } else {
            echo $sql;
        }
    }
    
    protected function updatePage($id) {
        $page = new Page($id);
        $page->update();
    }
    
}