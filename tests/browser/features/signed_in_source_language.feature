@login
Feature: View the main page in the source language

  Background:
    Given I am logged in
      And I change my interface language to English
      And I go to the main page

  Scenario: Initially different statistics are shown if the page is in the source language
    Then the User's translation statistics should show my translation statistics for all languages
      And a 'Select language' button is shown above the Project tiles
      And the Project tiles should show only the total number of messages for that project
      And the Project tiles should not show the translation progress bar

  Scenario: English cannot be selected as the translation target language
    When I click on the 'Select language' dropdown menu
    Then I should see the Universal Language Selector
      And I should not be able to select English from the list of languages

  Scenario: The language for which the statistics in the Project tiles are shown changes immediately according to the selected language
    When I click on the 'Select language' dropdown menu
      And I select Polish
      And the Project tiles don't show the total number of messages for that project
      And the Project tiles show the translation progress bar for Polish
      And I select German
      And the Project tiles show the translation progress bar for German
      And I select German

Scenario: Translation statistics for Projects should be updated when target language is changed
When I select Polish as the new translation language from Language Selection dialog
Then I should see the translation statistics for Polish should be shown for the projects

  Scenario: The list of messages for translation should be in the newly selected target language
    When I select Polish as the new translation language from Language Selection dialog
      And I hover a project tile
      And I click the "Translate" button on a project tile
    Then I should see a list of messages in the the translation view
      And the target language is Polish

  Scenario: The list of messages for proofreading should be in the newly selected target language
    When I select Polish as the new translation language from Language Selection dialog
      And I hover a project tile
      And I click the "Review" button on a project tile
    Then I should see a list of messages in the the translation view
      And the target language is Polish
