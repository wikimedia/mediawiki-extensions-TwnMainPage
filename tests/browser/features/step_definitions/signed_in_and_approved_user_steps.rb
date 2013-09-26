# encoding: utf-8

When(/I go to the main page$/) do
	visit(MainPage)
end

Then(/^I should see general statistics about the site$/) do
	on(MainPage) do |page|
		page.number_of_translators_element.should be_visible
		page.number_of_projects_element.should be_visible
	end
end

Then(/^I should see statistics about myself$/) do
	on(MainPage).personal_statistics_element.should be_visible
end

When(/^I click the "Translate" button in my personal stats$/) do
	on(MainPage).translate_recent_messages_element.click
end

When(/^I click the "Proofread" button in my personal stats$/) do
	on(MainPage).proofread_recent_translations_element.click
end

Then(/^I should see a list of recent messages in the translation view$/) do
	on(TranslatePage) do |page|
		# Assuming Finnish here. If that assumption proves to be unreliable,
		# we can check the data msggroupid attribute instead.
		page.selected_group.should == 'Tuoreet lisäykset'
		page.translate_mode_button_element.attribute('class').should match(/\bdown\b/)
	end
end

Then(/^I should see a list of recent translations in the proofreading view$/) do
	on(TranslatePage) do |page|
		# Assuming Finnish here. If that assumption proves to be unreliable,
		# we can check the data msggroupid attribute instead.
		page.selected_group.should == 'Tuoreet käännökset'
		page.proofread_mode_button_element.attribute('class').should match(/\bdown\b/)
	end
end

When(/^I hover a project tile$/) do
	on(MainPage).project_tile_element.fire_event('onmouseover')
end

When(/^I click the "(.*?)" button on a project tile$/) do |action|
	on(MainPage).project_tile_element.a(class: action.downcase).click
end

Then(/^I should see a list of messages in the the translation view$/) do
	on(TranslatePage).translate_mode_button_element.attribute('class').should match(/\bdown\b/)
end

Then(/^I should see a list of messages in the the proofreading view$/) do
	on(TranslatePage).proofread_mode_button_element.attribute('class').should match(/\bdown\b/)
end

When(/^I click the message group selector tile$/) do
	on(MainPage).message_group_selector_element.click
end

When(/^I click a message group$/) do
	# The message groups load very slow, it should be speed up
	sleep 5;
	on(MainPage).message_group_row_element.when_visible.click
end

When(/^I search for "(.*?)"$/) do |query|
	on(MainPage) do |page|
		page.search_field = query
		page.search_button_element.click
	end
end

Then(/^I should be taken to a page with search results$/) do
	on(SearchPage).number_of_results_element.should be_visible
end
