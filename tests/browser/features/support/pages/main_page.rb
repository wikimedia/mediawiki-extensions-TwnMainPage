class MainPage
  include PageObject

  include URL
  page_url URL.url('Special:MainPage')

	div(:number_of_translators, id: 'twnmp-s-translators')
	div(:number_of_projects, id: 'twnmp-s-projects')

	div(:personal_statistics, class: 'stats-widget')

	button(:translate_recent_messages, id: 'twnmp-translate')
	button(:proofread_recent_translations, id: 'twnmp-proofread')

	div(:project_card, class: 'project-tile', index: 0)
end
