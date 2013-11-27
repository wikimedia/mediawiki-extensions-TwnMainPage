class SignupPage
	include PageObject

	include URL
	page_url URL.url("Special:MainPage?<%=params[:extra]%>")

	div(:signup_language_selector, class: "signup-language-selector" )
	text_field(:language_filter, id: "languagefilter")
	def select_signup_language(language)
		self.signup_language_selector_element.click
		self.language_filter = language
		self.language_filter_element.send_keys :return
	end

	text_field(:username, name: "wpName")
	text_field(:password, name: "wpPassword")
	text_field(:email, name: "wpEmail")
	text_field(:reason, name: "reason")

	button(:submit, class: "green button")
	a(:developer_signup, css: ".dev-signup a")
end