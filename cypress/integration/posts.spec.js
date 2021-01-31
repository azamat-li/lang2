context(' ', () => {
  beforeEach(() => {
    cy.visit('/posts')
  })

  it('Contains page name', () => {
	cy.contains('Lang2 blog') 
     })

  it('Submit a new gist', () => {
	    cy.contains('Title') 
		  cy.get('[data-cy=name]').type('OP name')
		  cy.get('[data-cy=comment]').type('Important language foct')
		  cy.get('[data-cy=form]').submit()
     })

  it('Gists list', () => {
	cy.contains('My gists') 
     })

})

