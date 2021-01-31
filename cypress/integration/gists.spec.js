context(' ', () => {
  beforeEach(() => {
    cy.visit('/gists')
  })


  it('Contains prompt', () => {
	cy.contains('Instantly share grammer and vocabulary notes') 
     })

  it('New gist', () => {
	cy.contains('Title') 
	cy.get('[data-cy=title]').type('gist name')
	cy.get('[data-cy=body]').type('Important language foct')
	cy.get('[data-cy=body]').type('Important language foct')
	cy.get('[data-cy=form]').submit()
     })
})

