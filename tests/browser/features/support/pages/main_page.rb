class MainPage
	include PageObject

	include URL
	page_url URL.url('Special:MainPage')

	div(:number_of_translators, id: 'twnmp-s-translators')
	div(:number_of_projects, id: 'twnmp-s-projects')

	div(:personal_statistics, class: 'stats-widget')

	button(:translate_recent_messages, id: 'twnmp-translate')
	button(:proofread_recent_translations, id: 'twnmp-proofread')

	div(:project_tile, class: 'project-tile', index: 0)
	div(:statsbar) do |page|
		page.project_tile_element.element.div(class: 'tux-statsbar')
	end
	div(:statstext) do |page|
		page.project_tile_element.element.div(class: 'project-statstext')
	end

	div(:message_group_selector, css: '.project-tile.more')

	div(:message_group_row, class: 'ext-translate-msggroup-item', index: 0)

	text_field(:search_field, id: 'twnmp-search-field')
	button(:search_button, id: 'twnmp-search-button')

	div(:statistics_for_all_languages, class: 'for-all-languages')
	button(:project_tile_language_selector, class: 'same-language-uls-trigger')

	a(:english, text: 'English')
	a(:polish, text: 'polski')
end
