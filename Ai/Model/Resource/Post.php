<?php 
   class Opentag_Ai_Model_Resource_Post extends Mage_Eav_Model_Entity_Abstract
{
   public function __construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('opentag_ai_post');
        $this->setConnection(
            $resource->getConnection('ai_read'),
            $resource->getConnection('ai_write')
        );
    }

    protected function _getDefaultAttributes()
    {
        return array(
            'entity_type_id',
            'attribute_set_id',
            'created_at',
            'updated_at',
            'increment_id',
            'store_id',
            'website_id'
        );
    }
}