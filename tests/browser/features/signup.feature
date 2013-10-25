@sandbox.translatewiki.net
Feature: Sign up account for the sandbox

  Background:
    Given I am logged out on the main page

  Scenario: Sign up for translator
    When I choose a language I speak
      And I input a unique username
      And I input a password
      And I input an email address
      And I press the "Create account" button
    Then I should be logged in into a new account

  Scenario: Sign up for translator
    When I indicate I am not a developer
      And I input a unique username
      And I input a password
      And I input an email address
      And I input a reason
      And I press the "Create account" button
    Then I should be logged in into a new account
