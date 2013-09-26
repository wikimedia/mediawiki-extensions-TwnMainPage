@login
Feature: View for approved users

  Sign-in and first display -> one scenario to verify if the user sees the
  expected things (language details, statistics, buttons etc ) upon log-in:

  * General stats (blue tiles): # Projects, # Translators, # Messages to translate, # Languages
  * Personal stats: # translations/month, translation

  Reference: https://commons.wikimedia.org/w/index.php?title=File:Translate-workflow-spec.pdf&page=28

  Background:
    Given I am logged in
    When I go to the main page

  Scenario: General statistics about the site are shown
    Then I should see general statistics about the site

  Scenario: Approved users are displayed the personal translation statistics after sign-in
    Given that I am an approved translator on TWN
      And I am on the main page
    When I successfully sign-in
    Then I get to see the statistics about my personal activities for translations and revisions per month

  Scenario: 'Translate' button takes the user to the translation editor in a 'translation view'
    Given that I am an approved translator on TWN
      And I am logged in
    When I click on the 'Translate' button on the first page displayed after logging-in
    Then I should see the translation editor in the translate view

  Scenario: "Proofread" button takes the user to the translation editor in a 'proofreading view'
    Given that I am an approved translator on TWN
      And I am logged in
    When I click on the 'Proofread' button on the first page displayed after logging-in
    Then I should see the translation editor in the proofreading view

  Scenario: "View language statistics" link should take the user to the statistics page on TWN
    Given that I am an approved translator on TWN
      And I am logged in
    When I click on the 'View language statistics' link
    Then I should see the Special:LanguageStats page

  Scenario: Clicking on project card -> Translate takes to translation editor
    Given that I am an approved translator on TWN
      And I have successfully signed-in
    When I click on the 'Translate' button displayed on hover on a Project Card
    Then I should see the translation editor in the translate view

  Scenario: Clicking on project card -> Proofread takes to proof read mode in the editor
    Given that I am an approved translator on TWN
      And I have successfully signed-in
    When I click on the 'Proofread' button displayed on hover on a Project Card
    Then I should see the translation editor in the proofread view

  Scenario: Selection of a group from the message group dialog takes the user to translation view of that group
    Given I am an approved signed-in translator on TWN
      And I have the Message Group dialog open
    When I click on a 'group' link from the dialog
    Then I should be taken to the translation view

  Scenario: Users can search a message or group using the search bar
    Given I am an approved signed-in translator on TWN
    When I write a message or group in the search bar
      And initiate the search (by clicking the button/pressing enter)
    Then I should be taken to a page with the search results
