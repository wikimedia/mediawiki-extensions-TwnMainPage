class SearchPage
	include PageObject

	page_url "Special:SearchTranslations"

	div(:number_of_results, class: "count")
end
