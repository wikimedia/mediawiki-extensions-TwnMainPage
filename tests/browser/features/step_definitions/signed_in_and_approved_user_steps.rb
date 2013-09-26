Then(/^I should see general statistics about the site$/) do
	on(MainPage) do |page|
		page.number_of_translators_element.should be_visible
		page.number_of_projects_element.should be_visible
	end
end


When(/I go to the main page$/) do
	visit(MainPage)
end
