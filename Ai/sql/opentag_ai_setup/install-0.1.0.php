<?php  

$installer = $this;
$installer->startSetup();
 

$installer->createEntityTables(
    $this->getTable('opentag_ai/post_entity')
);

$installer->addEntityType('opentag_ai_post',Array(
    'entity_model'          =>'opentag_ai/post',
    'attribute_model'       =>'',
    'table'                 =>'opentag_ai/post_entity',
    'increment_model'       =>'',
    'increment_per_store'   =>'0'
));
 
$installer->installEntities();
 
$installer->endSetup();