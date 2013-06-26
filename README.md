Flickrfeed
==========

What is it?
-----------

An abuse of the Token API in Drupal to provide a themed output of flickr photos given a username and tag.

The token looks like this:

        [flickrfeed:op:num:size:arg_0:arg_1]

"op" is either usertag or set. "num" is the number of images to return. "size" is one of "url_sq,url_t,url_s,url_q,url_m,url_n,url_z,url_c,url_l,url_o". arg_n are different depending on "op".

        [flickrfeed:usertag:3:url_sq:95221224@N04:rundunainrouge]

The user ID part can be the Flickr NSID or the display name. The tag part can have one or many comma-separated tags. If there are no tags, the most recent user photos will be grabbed.

        [flickrfeed:set:7:url_o:72157627163178559]

For sets, provide the photoset ID.

The output is themed by flickrfeed.tpl.php.

Who wrote it?
-------------

Benjamin Chodoroff of http://theworkdept.com wrote this module while building a new website for Tour de Troit.

License
-------

This software is copyright 2013 Benjamin Chodoroff. This software is distributed under the terms of the GNU General Public License.
