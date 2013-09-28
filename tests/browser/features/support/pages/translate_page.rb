class TranslatePage
	include PageObject

	include URL
	page_url URL.url('Special:Translate')

	span(:selected_group, css: '.grouplink.tail')
	button(:translate_mode_button, class: 'translate-mode-button')
	button(:proofread_mode_button, class: 'proofread-mode-button')

	span(:target_language, class: 'uls')
end
