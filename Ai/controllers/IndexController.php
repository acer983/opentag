<?php
class Opentag_Ai_IndexController extends Mage_Core_Controller_Front_Action {        
    public function indexAction() {
    $this->loadLayout();
    $this->renderLayout();
    }


    public function dataAction(){
        $mail=$_POST['mail'];
        $phone=$_POST['phone'];
        $message=$_POST['message'];
        
        $post = Mage::getModel('opentag_ai/post');
        $post->setMail($mail);
        $post->setPhone($phone);
        $post->setMessage($message);
        $post->save();
        if($post==true){
        echo("Дані прийнято!");
        }
    }

    public function testAction(){
         $posts = Mage::getModel('opentag_ai/post')->getCollection()
                ->addAttributeToSelect('*');
        $posts->load();
        //var_dump($posts);
        foreach($posts as $post)
    {
        // var_dump($entry->getData());
        echo '<h4>Mail: '.$post->getMail().'</h4>';
        echo '<h4>Phone: '.$post->getPhone().'</h4>';
        echo '<h4>Message: '.$post->getMessage().'</h4>';
        echo '</br>';
    }
    }

}