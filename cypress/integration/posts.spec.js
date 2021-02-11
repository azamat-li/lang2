context(' ', () => {
  beforeEach(() => {
    cy.visit('/posts')
  })

  it('Contains page name', () => {
	cy.contains('Blog') 
	cy.contains('Lang2')
  })
	
	it('Contains posts', () => {
		cy.get('[data-cy=posttitle]')
			.contains('-')
	})

  it('Can subscribe', () => {
	    cy.contains('Подписаться') 
		  cy.get('[data-cy=sinput]').type('me@me.com')
		  cy.get('[data-cy=sform]').submit()
     })

  it('Can access surrounding blogs', () => {
			cy.get('[data-cy=next]').click()
			cy.get('[data-cy=prev]').click()
     })

  it('Can navigate to home page', () => {
			cy.get('[data-cy=index]').click()
			cy.contains('Another language learning portal')
     })
})

