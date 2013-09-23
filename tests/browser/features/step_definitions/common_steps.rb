Given(/^I am logged out$/) do
end

Given(/^I am logged in$/) do
	visit(LoginPage).login_with(@mediawiki_username, @mediawiki_password)
	# Assert that login worked
	loggedin = !@browser.execute_script( "return mw.user.isAnon();" )
	loggedin.should be_true
end

Given(/^I am on the main page$/) do
	visit(MainPage)
end
