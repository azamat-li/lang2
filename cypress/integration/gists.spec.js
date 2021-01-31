context(' ', () => {
  beforeEach(() => {
    cy.visit('/gists')
  })

  it('Contains prompt', () => {
	cy.contains('Instantly share grammer and vocabulary notes') 
     })

  it('Submit a new gist', () => {
	cy.contains('Title') 
	cy.get('[data-cy=title]').type('gist name')
	cy.get('[data-cy=body]').type('Important language foct')
	cy.get('[data-cy=body]').type('Important language foct')
	cy.get('[data-cy=form]').submit()
     })

  it('Gists list', () => {
	cy.contains('My gists') 
     })

})

