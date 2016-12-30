# Session Interoperability

*session-interop* tries to identify and standardize features in *session* objet to achieve interoperability between PHP package. It does not handle session creation.
This interface is designed to be immutable.
Through discussions and trials, we try to create a standard, made of common interfaces but also recommendations.

If PHP projects that provide session object implementation begin to adopt these common standards, then PHP applications and projects that use session can depend on the common interfaces instead of specific implementations. This facilitates a high-level of interoperability and flexibility that allows users to consume any session implementation that can be adapted to these interfaces.

We adhere to the spirit and ideals of PHP-FIG, and hope this project will pave the way for one or more future PSRs.

## Installation

You can install this package through Composer:

```json
composer require session-interop/session-interop
```
The packages adheres to the [SemVer](http://semver.org/) specification, and there will be full backward compatibility between minor versions.

## Standards

* A `null` value is a removed or an unset session's value. That mean removed values, unset values, null values must be used the same way.

### Available

[`SessionInterface`](src/Interop/Session/SessionInterface.php).
Describes the interface of a Session that exposes methods to read and write its entries.

### Usage

Writing an user service that use the session:

```php
use Interop\Session\SessionInterface;
class UserService {
      static public function isConnected(SessionInterface $session) {
       if ($session->get("userId")) {
	     	return true;
	     }
	     return false;
      }
      static public function login(SessionInterface $session, $userId) {
       if ($this->isConnected($session)) {
	     	return false;
	     }
	     $session->set("userId", $userId);
	     return true;
      }
      static public function logoff(SessionInterface $session) {
      if ($this->isConnected($session)) {
	     	  $session->set("userId", null);
		      return true;
	     }
	     return false;
      }
}
```

This way, the user service does not rely on a specific implementation, so you can use any session object that implements SessionInterface.

## Implementations

[`ArraySession`](https://github.com/session-interop/utils.session)

Basics implementations of the interface.
