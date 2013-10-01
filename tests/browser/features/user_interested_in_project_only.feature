@sandbox.translatewiki.net
Feature: Users interested in Project only

  This is WIP functionality.

  Scenario: Sign up process for non-translator user

    Given I am on the Main Page of twn
    When I click on the link "you can still join the community"
    Then I should be directed to a different sign up page for non-translators

    Given I am on the Sign up page for non-translators on twn
    When I input a unique username, password and unique email address
      And press the 'Create an Account' button
    Then I should have a new twn account that I can use
