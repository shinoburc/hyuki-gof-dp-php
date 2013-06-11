<?php
/* $Id: TableTray.php 17 2005-03-21 16:43:20Z shinobu $ */

class TableTray extends Tray {

    public function TableTray($caption){
        parent::__construct($caption);
    }

    public function makeHTML(){
        $buffer  = null;
        $buffer .= "<td>";
        $buffer .= "<table width=\"100%\" border=\"1\"><tr>";
        $buffer .= "<td bgcolor=\"#cccccc\" align=\"center\" colspan=\"" . count($this->tray) . "\"><b>" . $this->caption . "</b></td>";
        $buffer .= "</tr>\n";
        $buffer .= "<tr>\n";
        foreach($this->tray as $item){
            $buffer .= $item->makeHTML();
        }
        $buffer .= "</tr></table>";
        $buffer .= "</td>";
        return $buffer;
    }
}

?>
