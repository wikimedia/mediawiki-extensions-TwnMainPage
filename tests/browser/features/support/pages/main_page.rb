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

	div(:message_group_selector, css: '.project-tile.more')

	div(:message_group_row, class: 'ext-translate-msggroup-item', index: 0)
end
