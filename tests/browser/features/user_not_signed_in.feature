Feature: Users who are not signed-in (and for other scenarios common to all users)

  Background:
    Given I am logged out
     And I am on the main page

  Scenario: Clicking on Project card -> View Translations should display the translations in read-only mode
    When I click on a "View translations" in a project card
    Then I should see a list of untranslated messages for that project

  Scenario: Clicking on the Language Selection button should display the ULS language screen for all users
    When I click on the link to choose more languages I can understand
    Then I should see a language selector

  Scenario: Clicking 'more projects' -> displays the message group dialog for all users
    When I click on a project card which says "More Projects"
    Then I should see a message group selector

  Scenario: Project statistics should be visible on the project card
    When I scroll to the Project Card section
    Then I should be able to view the statistics for the Project

  Scenario: Users interested in adding a new project are directed to the appropriate page
    When I click on the "add your open source project for translation" link
    Then I am taken to the appropriate page

  Scenario: Sign up process - translator
    Given I am on the main page
    When I input a unique username
      And I input a unique password
      And I input a unique email address
      And I press the "Create an Account" button
    Then I should have a new twn account that I can use

  Scenario: Initial translation screen is displayed after sign-up
    Given I am on the main page
    When I sign up as a new translator
    Then I should be directed to a welcome page for new translators
