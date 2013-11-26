class SearchPage
	include PageObject

	include URL
	page_url URL.url("Special:SearchTranslations")

	div(:number_of_results, class: "count")
end
