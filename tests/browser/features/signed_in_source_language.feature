@firefox @sandbox.translatewiki.net
Feature: Main page in the source language

  Source language in this case means that the source language of all message
  groups is the same, in this case English.

  Background:
    Given I am logged in
      And I change my interface language to English
      And I go to the main page

  Scenario: Initially different statistics are shown if the page is in the source language
    Then I should see statistics about myself across all languages
      And I should see a language selector above project tiles
      And I should see the number of messages in the project tiles
      And I should not see statsbars in the project tiles

  Scenario: English cannot be selected as the translation target language
    When I click on the project language selector
    Then I should not be able to select English from the list of languages

  Scenario: Selecting another language for project tiles
    When I choose "Polish" on the project language selector
    Then I should not see the number of messages in the project tiles
      And I should see statsbars in the project tiles

  Scenario: The list of messages for translation should be in the newly selected target language
    When I choose "Polish" on the project language selector
      And I hover a project tile
      And I click the "Translate" button on a project tile
    Then I should see a list of messages in the the translation view
      And the target language is Polish

  Scenario: The list of messages for proofreading should be in the newly selected target language
    When I choose "Polish" on the project language selector
      And I hover a project tile
      And I click the "Proofread" button on a project tile
    Then I should see a list of messages in the the proofreading view
      And the target language is Polish
