## Useful Code Snippets

1. Product Admin scenario

```gherkin
  Scenario: Seeing a list of existing products
    Given I am on "/admin"
    When I follow "Products"
    Then I should see "The Veggie-dino cookbook"
```

2. MinkContext

Inside your FeatureContext file, you'll want this use statement

``` php
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\Step\Given;
use Behat\Behat\Context\Step\When;
use Behat\Behat\Context\Step\Then;
```
