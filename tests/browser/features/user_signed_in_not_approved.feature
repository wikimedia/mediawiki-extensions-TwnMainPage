@login

Feature: Signed-in New Users who have not been approved (only onboarding view will be available for them)

  Background:
    Given I am logged in

  Scenario: Clicking over "Translate" and "Proofread" hover options displays the translation editor
    Given I have signed-up as a new translator
    When I click on the "Translate" or "Proofread" option displayed on hovering inside a tile
    Then I should be taken into the appropriate view of the translation editor

  Scenario: Users can search a message or group using the search bar
    Given I have signed-up as a new translator
    When I write a message or group in the search bar
      And initiate the search (by clicking the button/pressing enter)
    Then I should be taken to a page with the search results
