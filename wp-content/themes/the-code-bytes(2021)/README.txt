=== thecodebytes ===

Contributors: automattic
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready

Requires at least: 4.5
Tested up to: 5.4
Requires PHP: 5.6
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE

A starter theme called thecodebytes.

== Description ==

Keeping Code Cool Since 2020

== CSS: Functions ==

/* F1 */


@function z($name, $z-indexes-list: $z-indexes) {
 @if index($z-indexes-list, $name) {
 @return (length($z-indexes-list) - index($z-indexes-list, $name)) + 1;
 } @else {
 @warn 'There is no item "#{$name}" in this list; choose one of: #{$z-indexes-list}';

 @return null;
 }
}

// List
$z-indexes: (
 'modal',
 'site-nav',
 'site-header',
 'site-content',
 'site-footer'
);

// Example
.modal { z-index: z(modal); }
.site-nav { z-index: z(site-nav); }
.site-header { z-index: z(site-header); }
.site-content { z-index: z(site-content); }
.site-footer { z-index: z(site-footer; }

// Output
.modal { z-index: 5; }
.site-nav { z-index: 4; }
.site-header { z-index: 3; }
.site-content { z-index: 2; }
.site-footer { z-index: 1; }

== CSS: Mixin Declarations ==

/* M1 */

div {
  @include centered();
}

//outputs

div {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* M2 */

a {
  @include link-colors ($link, $visited, $hover, $active)
}

* create the color codes within the variables file

/* M3 */


@include media(">=small", "<medium") {
  div {
    key: value;
  }
}

@include respond-to('medium') {
  div {
    key: value;
  }
}

== CSS Selector Groups ==

.selector {
  /* Positioning */
  position: absolute;
  z-index: 10;
  top: 0;
  right: 0;

  /* Display & Box Model */
  box-sizing: border-box;
  overflow: hidden;
  display: inline-block;
  width: 100px;
  height: 100px;
  margin: 10px;
  padding: 10px;
  border: 10px solid #333;

  /* Color */
  background: #000;
  color: #fff

  /* Text */
  font-family: sans-serif;
  font-size: 16px;
  line-height: 1.4;
  text-align: right;

  /* Other */
  cursor: pointer;
}

== Changelog ==

= 1.0 - May 12 2015 =
* Initial release
