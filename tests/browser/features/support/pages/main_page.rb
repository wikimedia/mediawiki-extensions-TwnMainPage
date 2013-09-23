class MainPage
  include PageObject

  include URL
  page_url URL.url('Special:MainPage')
end
