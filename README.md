Flickrfeed
==========

What is it?
-----------

An abuse of the Token API in Drupal to provide a themed output of flickr photos given a username and tag.

The token looks like this:

        [flickrfeed:usertag:95221224@N04:rundunainrouge]

The user ID part can be the Flickr NSID or the display name. The tag part can have one or many comma-separated tags. Both are mandatory.

The output is themed by flickrfeed.tpl.php.

Who wrote it?
-------------

Benjamin Chodoroff of http://theworkdept.com wrote this module while building a new website for Tour de Troit.

License
-------

This software is copyright 2013 Benjamin Chodoroff. This software is distributed under the terms of the GNU General Public License.
