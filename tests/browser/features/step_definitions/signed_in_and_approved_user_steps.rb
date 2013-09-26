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

Then(/^I should see list of recent messages in the translation view$/) do
	on(TranslatePage) do |page|
		# Assuming Finnish here. If that assumption proves to be unreliable,
		# we can check the data msggroupid attribute instead.
		page.selected_group.should == 'Tuoreet lisäykset'
		page.translate_mode_button_element.attribute('class').should match(/\bdown\b/)
	end
end

Then(/^I should see list of recent translations in the proofreading view$/) do
	on(TranslatePage) do |page|
		# Assuming Finnish here. If that assumption proves to be unreliable,
		# we can check the data msggroupid attribute instead.
		page.selected_group.should == 'Tuoreet käännökset'
		page.proofread_mode_button_element.attribute('class').should match(/\bdown\b/)
	end
end

