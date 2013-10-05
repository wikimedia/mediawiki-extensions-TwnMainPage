Given(/^I am logged out$/) do
end

Given(/^I am logged in$/) do
	visit(LoginPage).login_with(ENV['MEDIAWIKI_USER'], ENV['MEDIAWIKI_PASSWORD'])
	# Assert that login worked
	loggedin = !@browser.execute_script( "return mw.user.isAnon();" )
	loggedin.should be_true
end

Given(/^I am on the main page$/) do
	visit(MainPage)
end

When(/^I change my interface language away from English$/) do
	visit(PreferencesPage) do |page|
		page.set_interface_language_element.select_value 'fi'
		page.save_element.click
	end
end
