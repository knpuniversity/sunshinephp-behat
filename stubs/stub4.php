<?php

// a function that will go inside your existing FeatureContext.php file


class FeatureContext extends MinkContext
{
    // ...

    /**
     * Pauses the scenario until the user presses a key. Useful when debugging a scenario.
     *
     * Adapted from https://github.com/sanpii/behatch-contexts
     *
     * @Then /^break$/
     */
    public function iPutABreakpoint()
    {
        fwrite(STDOUT, "\033[s    \033[93m[Breakpoint] Press \033[1;93m[RETURN]\033[0;93m to continue...\033[0m");
        while (fgets(STDIN, 1024) == '') {}
        fwrite(STDOUT, "\033[u");

        return;
    }
}
