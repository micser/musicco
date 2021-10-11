# musicco
![GitHub Release Date](https://img.shields.io/github/release-date/micser/musicco) ![GitHub commits since latest release (by date)](https://img.shields.io/github/commits-since/micser/musicco/latest) ![GitHub last commit](https://img.shields.io/github/last-commit/micser/musicco) ![GitHub issues](https://img.shields.io/github/issues/micser/musicco)
![musicco](/doc/img/header-bg.png?raw=true "musicco")
musicco is a web player for your music library Host it on a NAS and start streaming your music from any browser.  
This is especially great on low-spec NAS that don't have enough power to host Squeezebox, Subsonic or an ITunes Server.  
Check out https://www.musicco.app for more information or try the demo at https://www.musicco.app/demo.

<a href="https://twitter.com/musiccoapp">
  <img src="https://img.shields.io/twitter/follow/musiccoapp?style=social" alt="Follow @musiccoapp"></img>
</a>

# Features

## Fully responsive player for all your devices

![musicco](/doc/img/readme/responsive.png?raw=true "Fully responsive player for all your devices")

## Browsing, filtering and searching the music library

![musicco](/doc/img/readme/browsing-searching.png?raw=true "Browsing, filtering and searching the music library")

## Artist information and lyrics for currently playing track

![musicco](/doc/img/readme/artistInfo-lyrics.png?raw=true "Artist information and lyrics for currently playing track")

## Keyboard support

![musicco](/doc/img/readme/keyboard.png?raw=true "Keyboard support")

## Optional authentication and multi-user support for saving everybody's playlists

![musicco](/doc/img/readme/auth-playlist.png?raw=true "Optional authentication and multi-user support for saving everybody's playlists")

## Showcase that beautiful album art

![musicco](/doc/img/readme/square.png?raw=true "Showcase that beautiful album art")


# Required php extensions

* pdo_sqlite (mandatory)
* php7.0-xml (mandatory)
* php7.0-mbstring (mandatory)
* openssl (optional, for cover art support)
* zip (optional, for download support)


# Libraries


| Library                                                                             | Included | Latest                                                                                                                                                                                       |
|:----------------------------------------------------------------------------------- |:--------:| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|
| [color-thief](https://github.com/lokesh/color-thief)                                | 2.3.2    | ![GitHub release (latest by date)](https://img.shields.io/github/v/release/lokesh/color-thief)                                                                                               |
| [detect_swipe](https://github.com/micser/detect_swipe)                              | 2.1.5    | ![GitHub release (latest by date)](https://img.shields.io/github/v/release/micser/detect_swipe) / ![GitHub tag (latest by date)](https://img.shields.io/github/v/tag/marcandre/detect_swipe) |
| [fancytree](https://github.com/mar10/fancytree)                                     | 2.38.0   | ![GitHub release (latest by date)](https://img.shields.io/github/v/release/mar10/fancytree)                                                                                                  |
| [fontawesome](https://github.com/FortAwesome/Font-Awesome)                          | 5.15.4   | ![GitHub release (latest by date)](https://img.shields.io/github/v/release/FortAwesome/Font-Awesome)                                                                                         |
| [jQuery](https://github.com/jquery/jquery)                                          | 3.6.0    | ![GitHub release (latest by date)](https://img.shields.io/github/v/release/jquery/jquery)                                                                                                    |
| [jQuery-qrcode](https://github.com/lrsjng/jquery-qrcode)                            | 0.18.0   | ![GitHub tag (latest by date)](https://img.shields.io/github/v/tag/lrsjng/jquery-qrcode)                                                                                                     |
| [jQuery-ui](https://github.com/jquery/jquery-ui)                                    | 1.13.0   | ![GitHub release (latest by date)](https://img.shields.io/github/v/release/jquery/jquery-ui)                                                                                                 |
| [jQuery-ui-contextmenu](https://github.com/mar10/jquery-ui-contextmenu)             | 1.18.1   | ![GitHub release (latest by date)](https://img.shields.io/github/v/release/mar10/jquery-ui-contextmenu)                                                                                      |
| [js-cookie](https://github.com/js-cookie/js-cookie)                                 | 3.0.1    | ![GitHub release (latest by date)](https://img.shields.io/github/v/release/js-cookie/js-cookie)                                                                                              |
| [jsmediatags](https://github.com/aadsm/jsmediatags)                                 | 3.9.5    | ![GitHub release (latest by date)](https://img.shields.io/github/v/release/aadsm/jsmediatags)                                                                                                |
| [normalise](https://github.com/micser/normalise)                                    | 1.0.0    | ![GitHub release (latest by date)](https://img.shields.io/github/v/release/micser/normalise)                                                                                                 |

# Changelog

## v3.1.0 (in development)
* Read album art from id3 tag
* Save "Show old albums" option between sessions
* Added an option to keep screen on
* Fixed some issues with casting on Android
* Improved QR Code styling
* Fix adding of duplicate albums in playlist
* Added confirmation dialogs before clearing items
* Improved sharing dialog
* Improved uncover dialog
* Improved lyrics provider
* Improved landscape view on mobile
* Dependency updates

## v3.0.0
* Added casting directly from player
* Allow viewing listening history
* Allow re-running the setup wizard
* Fixed an issue where the mini toolbar would show up when unwanted
* Minor UI refresh around info panel, header, player controls, context menus and album art
* Fixed transparency effects
* Improved layout for widescreen devices
* Improved browse panel performance
* Save active panel setting
* Notify clients if they are out of date
* Dependency updates
* Minor bugfixes

## v2.0.3
* Fixed issue playing files containing a #
* Fixed general scrolling issue of long lists

## v2.0.2
* Fixed issues for screens with 1024x768 resolutions
* Improved URL handling for cover uploads

## v2.0.1
* Fixed background blur for recent Chrome versions

## v2.0.0
* Use native html audio instead of jplayer / jplayerPlaylist
* Refreshed UI
* Theme selector and dynamic theme
* Added support for multiple playlists per user
* Added support for marking albums and tracks as favourites
* Improved controls for touchcreen browsers
* Added support for rich notifications on Android using Media Session API
* Added play/pause and skip actions to desktop notification
* Added support for quickly adding an album without scanning the entire library
* Save your favourite albums
* Handle accent-insensitive search
* Improved webapp manifest so you can add musicco to your Android home screen
* Fixed many other things

## v1.3.5
* Bug fixes centered around track seeking and resuming current play position, added Uncover button to header in square mode.

## v1.3.4
* Save current play time in the playlist, show album year in the banner

## v1.3.3
* Small improvements to info shown in square mode, fixed bug about duplicate trigger on volume up / down

## v1.3.2
* Quick fix for an issue handling long playlists that did not restore their position properly and improved handling of keypad to seek track and ignore meta key presses.

## v1.3.1
* Quick fix for left and right arrows skipping 2 tracks instead of 1

## v1.3
* Improved sharing banner to display more info
* Added a new template for square windows to highlight album art more
* Added seeking in current track with 1-9 keys
* Fixed playlist management issues when moving or deleting albums
* Made it possible to move albums to the beginning / end of the playlist with a shift-click
* Added keyboard support in search results
* Added search links when no artist or lyrics are found.

## v1.2.2
* Quick fix to enable the initial library build to work out of the box

## v1.2.1
* Compatibility fixes for different versions of Apache / php / sqlite

## v1.2
* Removed Android client, work on making the player responsive instead
* Work on database performance
* Loading of .lrc files as long as they have the same name of the song currently playing
* Allow users to upload their own album covers for the currently playing song from the web player
* Reorder albums in the current playlist
* Allow sharing a link to an album to guest users
* New default theme
* Improved artist info from Wikipedia
* Use auth tokens for logging in instead of credentials
* More pattern configuration options for more custom library tree structures
* Shift-click previous/next buttons (or shift-use arrow keys) to skip to the next album in the playlist

## v1.1
* Android client and under-the-hood improvements to suppport it
* Added configuration option for cover name and log file
* Improved playlist panel
* Fixed download option for administrators in the playlist and the browser panels

## v1.0.3
* More elegant management of the Fetch Cover button to provide more information about the cover fetching progress
* Nicer playlist screen that groups tracks by album
* Also upgraded to jplayer 2.4.0/JQuery 2.0.3 and adapted the CSS for better display on mobile screens with a 320x480 resolutions
* HTML notifications are working again in this version, and keyboard actions are improved as a result
* New feature Uncover! adds 10 random albums to your playlist

## v1.0.2
* Fixed minor display bugs introduced by 1.0.1 with z-index management.

## v1.0.1
* Improved cover management when downloading from cover art provider
* Added a button to manually fetch a cover
* Improved artist information panel and added an icon to indicate that some information is still being loaded from the server

## v1.0
* initial release