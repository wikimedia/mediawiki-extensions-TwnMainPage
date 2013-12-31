Given(/^I am logged out on the main page$/) do
	# The beta=1 will be removed once this feature is considered stable
	visit(SignupPage, using_params: {extra: "beta=1"})
end

When(/^I choose a language I speak$/) do
	on(SignupPage).select_signup_language("he")
end

When(/^I input a unique username$/) do
	on(SignupPage).username = "Translator #{@random_string}"
end

When(/^I input a password$/) do
	on(SignupPage).password = "password #{@random_string}"
end

When(/^I input an email address$/) do
	on(SignupPage).email = "#{@random_string}@example.com"
end

When(/^I press the "Create account" button$/) do
	on(SignupPage).submit
end

When(/^I indicate that I am a developer$/) do
	on(SignupPage).developer_signup_element.click
end

When(/^I input a reason$/) do
	on(SignupPage).reason = "I am a wannabe developer ;)"
end

Then(/^I should be logged in into a new account$/) do
	on(MainPage).username_element.when_visible(10).text.should == "Translator #{@random_string}"
end
