context(' ', () => {
  beforeEach(() => {
    cy.visit('/blogs-suggested')
  })

  it('Contains page name', () => {
	cy.contains('Подбор') 
	cy.contains('редакции')
  })
	
//	 it('Contains suggested relevant blogs', () => {
//		cy.get('[data-cy=posttitle]')
//	 		.contains('-')
//	})

  it('Can subscribe', () => {
	    cy.contains('Подписаться') 
		  cy.get('[data-cy=sinput]').type('me@me.com')
		  cy.get('[data-cy=sform]').submit()
     })

  it('Can navigate to home page', () => {
			cy.get('[data-cy=index]').click()
			cy.contains('Another language learning portal')
  })
})

