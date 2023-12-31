# CakePHP 1.3 for PHP 7.3+
An unofficial port of CakePHP 1.3.21 to PHP 7.3+

[![Build Status](https://app.travis-ci.com/littleant/cakephp-1.3.21.svg?branch=master)](https://app.travis-ci.com/littleant/cakephp-1.3.21)

**:warning: Only use this code, if you have an active CakePHP 1.3 version that you have to port to PHP 8!
Otherwise use a [current CakePHP version](https://cakephp.org/)!**

## Getting Started
1. Make sure your code is PHP 7.3 or newer ready.
2. If you made any changes in the cake-directory, that you want to reapply in this newer PHP version, write them down.
3. Delete your cake-directory.
4. Copy **only** the cake-directory from this repository to your existing installation.
5. Reapply the changes you wrote down in step 2.
6. Find and fix problems related to the changes described below.

Porting CakePHP to recent PHP versions required the introduction of some breaking changes.
Make sure you update your own code according to the following changes:

### Renamed classes
Two classes had to be renamed:
- The class `String` has been renamed to `CakeString`
- The class `Object` has been renamed to `CakeObject`

### Renamed class functions
Three class functions had to be renamed:
- `JsHelper->value()` has been renamed to `JsHelper->jsonValue()`
- `JavascriptHelper->value()` has been renamed to `JavascriptHelper->jsonValue()`
- `JsBaseEngineHelper->value()` has been renamed to `JsBaseEngineHelper->jsonValue()`

### Renamed files
One file had to be renamed:
- "cake/libs/error.php" has been renamed to "cake/libs/error\_handler.php": Change any `App::import('Core', 'Error')` to `App::import('Core', 'ErrorHandler')`

### Removed database drivers
Two database drivers had to be removed:
- "mysql" (replace with "mysqli")
- "mssql"

### Necessary configuration changes
One configuration variable has to be changed:
- "Security.cipherSeed" must be a valid `int` instead of a string. Make sure, it is small enough to be treated like an int, and not like a float on your system. Otherwise cookies will not be decoded correctly!

#### MySQL
The sql-mode `ONLY_FULL_GROUP_BY` must be disabled. CakePHP creates queries that are incompatible with this mode.

#### Postgres
The method `lastInsertId()` with a second parameter had to be renamed to `lastInsertX()` due to inheritance

### New possible configuration options
Two new options are possible:
- "Session.cookie\_samesite" sets the SameSite-cookie-parameter. Defaults to "Lax". **Requires PHP 7.3+ to work.**
- "Session.httpOnly" sets the HttpOnly cookie parameter.

#### CookieComponent
The CookieComponent now supports the SameSite-attribute.

In your controller set it like this:
`$this->Cookie->samesite = "None";`

Note: Value of "None" will not be sent to incompatible clients like Safari, in order to keep the intended behavior.
Defaults to "Lax".

## Running the tests
Core-tests have been ported to PHP 7.3+.

To run any tests, you need a [Simpletest 1.0.1 version with PHP 7 support](https://github.com/littleant/simpletest-1.0.1) in the vendors-directory.

Notes:
* The original CakePHP 1.3 developers [noted](https://book.cakephp.org/1.3/en/The-Manual/Common-Tasks-With-CakePHP/Testing.html), that the core-tests cannot be run all at once. You need to run them individually, or they will fail.
* Some core-tests will fail, if you are not using a dedicated test-database. These are shortcomings in the test-cases.
* Some core-tests fail randomly, that's why they are being excluded from travis.

## Contributing
Please issue a pull request if you want to contribute.
