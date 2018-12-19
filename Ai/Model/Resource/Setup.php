<?php 

  class Opentag_Ai_Model_Resource_Setup extends Mage_Eav_Model_Entity_Setup
{
    /*
     * Setup attributes for inchoo_blog_post entity type
     * -this attributes will be saved in db if you set them
     */
    public function getDefaultEntities()
    {
        $entities = array(
            'opentag_ai_post' => array(
                'entity_model' => 'opentag_ai/post',
                'attribute_model' => '',
                'table' => 'opentag_ai/post_entity',
                'attributes' => array(
                    'mail' => array(
                        'type' => 'varchar',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Mail',
                        'input' => 'text',
                        'class' => '',
                        'source' => '',
                        'global' => 0,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => true,
                        'default' => '',
                        'searchable' => false,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => false,
                        'unique' => false,
                    ),
                    'phone' => array(
                        'type' => 'varchar',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Phone',
                        'input' => 'text',
                        'class' => '',
                        'source' => '',
                        'global' => 0,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => true,
                        'default' => '',
                        'searchable' => false,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => false,
                        'unique' => false,
                    ),
                    'message' => array(
                        'type' => 'varchar',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Message',
                        'input' => 'text',
                        'class' => '',
                        'source' => '',
                        'global' => 0,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => true,
                        'default' => '',
                        'searchable' => false,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => false,
                        'unique' => false,
                    ),
             )
           )
        );
        return $entities;
    }
}