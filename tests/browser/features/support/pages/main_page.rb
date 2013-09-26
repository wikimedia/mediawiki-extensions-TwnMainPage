class MainPage
  include PageObject

  include URL
  page_url URL.url('Special:MainPage')

	div(:number_of_translators, id: 'twnmp-s-translators')
	div(:number_of_projects, id: 'twnmp-s-projects')
end
