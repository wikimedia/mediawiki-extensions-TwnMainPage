@login
Feature: View for approved users

  Sign-in and first display -> one scenario to verify if the user sees the
  expected things (language details, statistics, buttons etc ) upon log-in:

  * General stats (blue tiles): # Projects, # Translators, # Messages to translate, # Languages
  * Personal stats: # translations/month, translation

  Reference: https://commons.wikimedia.org/w/index.php?title=File:Translate-workflow-spec.pdf&page=28

  Background:
    Given I am logged in

  Scenario: General statistics about the site are shown
    When I go to the main page
    Then I should see general statistics about the site

  Scenario: General statistics about the user's contributions are shown
    When I go to the main page
    Then I should see statistics about myself

  Scenario: Going to translate recently changes messages

    For these two tests below, we will change the language to something else
    because in English you will get an error message "translation to the source
    language has been disabled".

    When I change my interface language away from English
      And I go to the main page
      And I click the "Translate" button in my personal stats
    Then I should see a list of recent messages in the translation view

  Scenario: Going to proofread recently changes translations
    When I change my interface language away from English
      And I go to the main page
      And I click the "Proofread" button in my personal stats
    Then I should see a list of recent translations in the proofreading view

  Scenario: Going to translate a project
    When I change my interface language away from English
      And I go to the main page
      And I hover a project tile
      And I click the "Translate" button on a project tile
    Then I should see a list of messages in the the translation view

  Scenario: Going to proofread a project
    When I change my interface language away from English
      And I go to the main page
      And I hover a project tile
      And I click the "Proofread" button on a project tile
    Then I should see a list of messages in the the proofreading view

  Scenario: Using message group selector to choose a project to translate
    When I change my interface language away from English
      And I go to the main page
      And I click the message group selector tile
      And I click a message group
    Then I should see a list of messages in the the translation view

  Scenario: Users can search a message or group using the search bar
    Given I am an approved signed-in translator on TWN
    When I write a message or group in the search bar
      And initiate the search (by clicking the button/pressing enter)
    Then I should be taken to a page with the search results
