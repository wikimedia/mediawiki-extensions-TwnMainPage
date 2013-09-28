# See also signed_in_and_approved_user_steps

Given(/^I change my interface language to English$/) do
	visit(PreferencesPage) do |page|
		page.set_interface_language_element.select_value 'en'
		page.save_element.click
	end
end

Then(/^I should see statistics about myself across all languages$/) do
	on(MainPage).statistics_for_all_languages_element.should be_visible
end

Then(/^I should see a language selector above project tiles$/) do
	# Added by JS, need to wait for it to appear
	on(MainPage).project_tile_language_selector_element.when_present.should be_visible
end

Then(/^I should see the number of messages in the project tiles$/) do
	on(MainPage).statstext_element.text.should match(/\d+ messages/)
end

When(/^I click on the project language selector$/) do
	on(MainPage).project_tile_language_selector_element.when_present.click
end

Then(/^I should not be able to select English from the list of languages$/) do
	on(MainPage).english_element.should_not be_visible
end

When(/^I choose "Polish" on the project language selector$/) do
	on(MainPage).project_tile_language_selector_element.when_present.click
	on(MainPage).polish_element.when_present.click
end

Then(/^I should not see the number of messages in the project tiles$/) do
	on(MainPage).statstext_element.text.should == ''
end

When(/^I should see statsbars in the project tiles$/) do
	on(MainPage).statsbar_element.when_present.should be_present
end

When(/^I should not see statsbars in the project tiles$/) do
	on(MainPage).statsbar_element.should_not exist
end

Then(/^the target language is Polish$/) do
	on(TranslatePage).target_language.should == 'polski'
end
