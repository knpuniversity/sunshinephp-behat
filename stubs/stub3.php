<?php

// FeatureContext: Bootstrapping the app
// we'll add this inside the body of the existing FeatureContext

class FeatureContext extends MinkContext
{
    static private $app;
    // ...

    /**
     * @static
     * @BeforeSuite
     */
    static public function bootstrapSilex()
    {
        if (!self::$app) {
            self::$app = require __DIR__.'/../../app/bootstrap.php';
        }

        return self::$app;
    }

    private function createAdminUser($username, $password)
    {
        return self::$app['user_repository']->createAdminUser(
            $username,
            $password
        );
    }

    private function createProduct($name, $price)
    {
        return self::$app['product_repository']->createProduct(
            $name,
            $price
        );
    }

    private function updateProduct(\RaptorStore\Product $product)
    {
        self::$app['product_repository']->update($product);
    }

    public function clearData()
    {
        self::$app['user_repository']->emptyTable();
        self::$app['product_repository']->emptyTable();
    }
}
