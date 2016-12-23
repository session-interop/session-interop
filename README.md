# Session Interoperability

*session-interop* tries to identify and standardize features in *session* objet to achieve interoperability between PHP package. It does not handle session creation.
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

### Available

[`SessionInterface`](src/Interop/Session/SessionInterface.php).
Describes the interface of a Session that exposes methods to read and write its entries.

### Usage

Writing an user service that use the session:

```php
use Interop\Session\SessionInterface;
class UserService {
      public function isConnected(SessionInterface $session) {
      	     if ($session->has("userId")) {
	     	return true;
	     }
	     return false;
      }
      public function login(SessionInterface $session, $userId) {
      	     if ($this->isConnected($session)) {
	     	return false;
	     }
	     $session->set("userId", $userId);
	     return true;
      }
      public function logoff(SessionInterface $session) {
      	     if ($this->isConnected($session)) {
	     	$session->remove("userId");
		return true;
	     }
	     return false;
      }
}
```

This way, the user service does not rely on a specific implementation, so you can use any session object that implements SessionInterface.

## Implementations

[`ArraySession`](https://github.com/session-interop/utils.session)

A basic implementation of the interface. 
