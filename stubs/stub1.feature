# Stub #1 - we'll use this in the "product admin" feature

  Scenario: Seeing a list of existing products
    Given I am on "/admin"
    When I follow "Products"
    Then I should see "The Veggie-dino cookbook"