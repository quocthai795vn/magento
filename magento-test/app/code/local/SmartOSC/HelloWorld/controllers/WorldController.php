<?php
class SmartOSC_HelloWorld_WorldController extends Mage_Core_Controller_Front_Action
{
   public function viewAction()
   {
    
   $this->loadLayout();
   $this->renderLayout();
   
  }


  public function testModelAction()
   {
       
   		$id = $this->getRequest()->getParams('id', 1);
       $blogpost = Mage::getModel('hello/blogpost');
       echo("Loading the blogpost with an ID of " . $id);
       $blogpost->load($id);
       $data = $blogpost->getData();
       var_dump($data);
   }

   public function insertAction(){
      $blogpost = Mage::getModel('hello/blogpost');
        $a = Mage::app()->getRequest()->getPost();

        $name = $a['name'];
        $phone = $a['phone'];
        $email = $a['email'];
        $company = $a['company'];
        $message = $a['message'];

        // create array of errors
        $error = array();

        // Name   
        // Name is required
        if (!Zend_Validate::is($name, 'NotEmpty')) {
            $error[] = $this->__('Please enter your name');
        }
        // Name must not have digits 
        else if (Zend_Validate::is($name, 'Digits')){
            $error[] = $this->__('Your name is letters only');
        }
         
        // Email 
        // Email is required
        if (!Zend_Validate::is($email, 'NotEmpty')) {
            $error[] = $this->__('Please enter your email');
        }
        // Email sample correct 
        else if (!Zend_Validate::is($email, 'EmailAddress')){
            $error[] = $this->__('Email is invalid, xxx@xxx.xxx');
        }

        // Phone
        // Phone must input in order to validate, else can let be null
        // Phone must be digit only
        $phoneLength = new Zend_Validate_StringLength(array('min' => 10, 'max' => 11));
        if (!Zend_Validate::is($phone, 'Digits')
                && Zend_Validate::is($phone, 'NotEmpty')) {
            $error[] = $this->__('Your phone is digit only');
        } 

        // Phone length is from 10-11
        else if (!$phoneLength->isValid($phone)
                && Zend_Validate::is($phone, 'NotEmpty')){
            $error[] = $this->__('Your phone length is from 10 to 11');
            
        }

    
        // Message
        // Message is required
        if (!Zend_Validate::is($message, 'NotEmpty')){
            $error[] = $helper->__('Please enter your message');
        }
        if(empty($error)){
          $blogpost->setData($a)->save();
          $this->showAllBlogPostsAction();
        } else {
          var_dump($error);
        }


   }


    public function showAllBlogPostsAction() {
        $posts = Mage::getModel('hello/blogpost')->getCollection();
        
        echo "<table width = '100%' border='1'><tr><th>Post ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Company</th><th>Message</th></tr>";
        foreach($posts as $blogpost){
         
            echo "<tr><td>".$blogpost->getId()."</td>";
            echo "<td>".$blogpost->getName()."</td>";
            echo "<td>".$blogpost->getEmail()."</td>";
            echo "<td>".$blogpost->getPhone()."</td>";
            echo "<td>".$blogpost->getCompany()."</td>";
            echo "<td>".$blogpost->getMessage()."</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo '<a href="http://localhost:8080/html/magento-test/index.php/hello/world/view">Tro ve</a>';
    }

    public function deletePostAction() {
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('hello/blogpost');
        
        $blogpost->load($params['id']);
        echo("Deleting the blogpost with an ID of ".$params['id']."<br/>");
        $blogpost->delete();
        echo("The blogpost with an ID of ".$params['id']." has been deleted"."<br/>");
         
        $this->showAllBlogPostsAction();
    }
       

}
