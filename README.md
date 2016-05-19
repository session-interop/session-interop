# Session Interoperability

*session-interop* tries to identify and standardize features in *session* objet to achieve interoperability between PHP package.
Through discussions and trials, we try to create a standard, made of common interfaces but also recommendations.

If PHP projects that provide session object implementation begin to adopt these common standards, then PHP applications and projects that use session can depend on the common interfaces instead of specific implementations. This facilitates a high-level of interoperability and flexibility that allows users to consume any session implementation that can be adapted to these interfaces.

We adhere to the spirit and ideals of PHP-FIG, and hope this project will pave the way for one or more future PSRs.

## Installation

You can install this package through Composer:

```json
composer require container-interop/container-interop
```
The packages adheres to the [SemVer](http://semver.org/) specification, and there will be full backward compatibility between minor versions.

## Standards

### Available

[`SessionInterface`](src/Interop/Session/SessionInterface.php).
Describes the interface of a Session that exposes methods to read and write its entries.


### Proposals

View [proposals](https://github.com/Ngob/session-interop/issues).

