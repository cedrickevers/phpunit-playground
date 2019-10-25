<?php


Class LoginTest extends PHPUnit_Extensions_Selenium2TestCase {
    protected function setUp()
    {
        $this->setBrowser('chrome');
        $this->setBrowserUrl('http://demo-dev.fusiondirectory.org/fusiondirectory/');
    }

    public function testLoginPage()
    {
        $this->url('http://demo-dev.fusiondirectory.org/fusiondirectory/');
     
        
        // woocommerce-Input
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
        // if($this->byId('loginform')){
        //     $this->assertTrue(TRUE);
        }
    }

    // public function testLoginConnection()
    // {
    //     $this->url('http://demo.fusiondirectory.org/fusiondirectory');
    //     $username = $this->byId("username");
    //     $username->value('fd-admin');
    //     $password = $this->byId("password");
    //     $password->value('tester');
    //     $this->byName('login')->click();


    //     $this->assertContains('/fusiondirectory/main.php', $this->url());

        
//tester
/*
$this->waitUntil(function () {
    $this->alertIsPresent();
}, 8000);
*/
//     }
// }