 
<?php
Class LoginTest extends PHPUnit_Extensions_Selenium2TestCase {
    protected function setUp()
    {
        $this->setBrowser('chrome');
        $this->setBrowserUrl('http://demo-fixes.fusiondirectory.org/fusiondirectory/');
    }
    public function testLoginPage()
    {
        $this->url('http://demo-fixes.fusiondirectory.org/fusiondirectory/');
        $username = $this->byId("username");
        $username->value('fd-admin');
        $password = $this->byId("password");
        $password->value('tester');
        $this->byName('login')->click();
        $this->byId("menuitem_icon_userManagement")->click();

        
        $this->waitUntil(function () {
            $this->alertIsPresent();
        }, 8000);
          
    ;
          
        
        


    }

    
    /**
     * 
     * OLDER TEST
   * \fn Function that click in the menu
   * \param[in] action the action that we will do
   */
//   protected function actionMenuClick (...$actions)
//   {
//     $ul = $this->actionMenuClickActions();
//     foreach ($actions as $action) {
//       $ul = $this->byId('actionmenu_'.$action);
//       var_dump($ul->text());
//       $ul->byTag('a')->click();
//     }
//     return $ul;
//   }
//   /** \fn Function that click on the menu actions */
//   protected function actionMenuClickActions ()
//   {
//     $this->timeouts()->implicitWait(1000);
//     $ul = $this->byId('pulldown')->byId('root');
//     // Click on menu actions
//     $ul->byTag('a')->click();
//     return $ul;
//   }
//  /**
//    * \fn Function that create a template
//    * \param[in] type object type that we will create a template for
//    */
//   protected function createTemplate ($type = 'user')
//   {
//     $this->actionMenuClick('new', 'template', 'new_template_'.strtoupper($type));
//   }
    //     $this->assertContains('/fusiondirectory/main.php', $this->url());
        
//tester
/*
$this->waitUntil(function () {
    $this->alertIsPresent();
}, 8000);
*/
//     }
// }
}