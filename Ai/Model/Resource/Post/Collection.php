<?php 

  class Opentag_Ai_Model_Resource_Post_Collection extends Mage_Eav_Model_Entity_Collection_Abstract
{
 
    protected function _construct()
    {
        $this->_init('opentag_ai/post');
    }
 
}