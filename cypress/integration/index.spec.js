context(' ', () => {
  beforeEach(() => {
    cy.visit('/')
  })

  it('Contains some meaningfull text', () => {
	cy.contains('Another language learning portal')
	cy.contains('Checkout latest') 
     })

	it('can access blog', () => {
		cy.get('[data-cy=blog]').click()
		cy.contains('Lang2 blog')
	})

	it('footer tailwind is fine',() => {
		cy.get('[data-cy=tailwindbox]').contains('With templates from');
		cy.get('[data-cy=tailwindcss]').contains('Tailwindcss')
	})

	it('footer laravel is fine',() => {
		cy.get('[data-cy=laravel]').contains('Laravel')
	})
})

