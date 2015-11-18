class PreferencesPage
  include PageObject

  page_url "Special:Preferences"

  select(:set_interface_language, id: "mw-input-wplanguage")
  button(:save, id: "prefcontrol")
end
