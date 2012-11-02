<?php
namespace MTM\Behat;
require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';


class Context extends \Drupal\DrupalExtension\Context\DrupalContext {
  /**
   * @beforeScenario @email
   */
  public function attachEmailContext($event) {
    $email = new EmailContext();
    $this->useContext('mtm_email', $email);
  }
  
  
  /**
    * @Given /^I have browser which is supported$/
    */
   public function iHaveBrowserWhichIsSupported() {
   }

   /**
    * @When /^I visit the site$/
    */
   public function iVisitTheSite() {
   }

   /**
    * @Then /^I should get a valid page$/
    */
   public function iShouldGetAValidPage() {
   }  
}