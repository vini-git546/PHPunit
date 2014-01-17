   <?php
      require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

      // *******  Case 1: Valid User name and Invalid password *******

       function selenium_login1($browser)

        {
          
          $browser->type("id=login_name", "&%#$#");
          $browser->highlight("id=passwd");
          $browser->type("id=passwd","(*%(*$%");
          $browser->highlight("id=button2");		          
          $browser->click("id=button2");
          $browser->waitForPageToLoad(2000);
          $browser->expectOutputString('foo');
          $browser->expectOutputString("Incorrect username or password. Please try again.");
          print 'Incorrect username or password. Please try again.';
          //$browser->waitForPageToLoad(1000);
          //$browser->highlight("link=Logout");	  
          //$browser->click("link=Logout");
          
       }

       // *******  Case 2: Valid User name and valid password *******

       
       function selenium_login2($browser)
       {
          
          $browser->open("http://projects/eltern_planner/admin/user/admin/login/"); 
          $browser->waitForPageToLoad(5000); 
          $browser->type("id=login_name", "admin");
          $browser->type("id=passwd","admin");
          $browser->highlight("id=button2");		          
          $browser->click("id=button2");
          $browser->waitForPageToLoad(5000);
       }
       function selenium_login3($browser)
       {
         $browser->open("http://www.google.co.in");
         $browser->waitForPageToLoad(3000);
         $browser->highlight("class=gbts");
         $browser->click("class=gbts");
         $browser->waitForPageToLoad(4000);
         $browser->highlight("id=Email");
         $browser->type("id=Email","id.email122@gmail.com");
         $browser->highlight("id=Passwd");
         $browser->type("id=Passwd","hb@hb122");
         $browser->highlight("id=signIn");
         $browser->click("id=signIn");
         $browser->waitForPageToLoad(18000);
         $browser->highlight("link=Sign out");
         $browser->click("link=Sign out");
         $browser->waitForPageToLoad(13000);

         

       }

       /*function selenium_logout($browser)
       {
       	    $browser->highlight("link=Logout");	  

            $browser->click("link=Logout");
       }*/

       class Test1  extends PHPUnit_Extensions_SeleniumTestCase
       {
          function setUp()
          {
            $this->setBrowser("*firefox");
            $this->setBrowserUrl("http://www.google.com");
          }
            //All the functions here must start with test* only then the tests are executed
            function testMyTest()
            {
              $this->windowMaximize();
              $this->open("http://projects/eltern_planner/admin/user/admin/login/");               
              $this->waitForPageToLoad(5000);               
              selenium_login1($this);
              selenium_login2($this);
              selenium_login3($this);
              //selenium_logout($this);

            }
        }
   ?>

