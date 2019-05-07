HTML Purifier 
=============

[![Software license][ico-license]](LICENSE)
[![Latest stable][ico-version-stable]][link-packagist]
[![Monthly installs][ico-downloads-monthly]][link-downloads]
[![Build Status][ico-travis]][link-travis]

HTML Purifier is an HTML filtering solution that uses a unique combination
of robust whitelists and aggressive parsing to ensure that not only are
XSS attacks thwarted, but the resulting HTML is standards compliant.

HTML Purifier is oriented towards richly formatted documents from
untrusted sources that require CSS and a full tag-set.  This library can
be configured to accept a more restrictive set of tags, but it won't be
as efficient as more bare-bones parsers. It will, however, do the job
right, which may be more important.

Places to go:

* See INSTALL for a quick installation guide
* See docs/ for developer-oriented documentation, code examples and
  an in-depth installation guide.
* See WYSIWYG for information on editors like TinyMCE and FCKeditor

HTML Purifier can be found on the web at: [http://htmlpurifier.org/](http://htmlpurifier.org/)

## Installation

Package available on [Composer][link-packagist].

If you're using Composer to manage dependencies, you can use

    $ composer require protonlabs/htmlpurifier



[ico-version-stable]: https://img.shields.io/packagist/v/protonlabs/htmlpurifier.svg?style=flat-square
[ico-license]: https://img.shields.io/github/license/ProtonMail/htmlpurifier.svg?style=flat-square
[ico-downloads-monthly]: https://img.shields.io/packagist/dm/protonlabs/htmlpurifier.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ProtonMail/htmlpurifier.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/protonlabs/htmlpurifier
[link-travis]: https://travis-ci.org/ProtonMail/htmlpurifier
[link-downloads]: https://packagist.org/packages/protonlabs/htmlpurifier/stats
