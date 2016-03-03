# Symfony Strategy Pattern Example

This is the example that goes along with a blog post on damow.net - [The Strategy Pattern with Symfony](http://damow.net/the-strategy-pattern-with-symfony/).

To get going just:

* `git clone` this repository
* `composer install`
* Visit the root (/) of the application in your browser.

Notable files and directories:

* `src/StrategyPatternBundle/Strategy/*` contains the strategy classes and interface.
* `src/StrategyPatternBundle/Context.php` contains the context class.
* `src/StrategyPatternBundle/DependencyInjection/CompilerPass/StrategyCompilerPass.php` contains the compiler pass class.
* `src/StrategyPatternBundle/Resources/config/services.yml` contains the service configuration.

