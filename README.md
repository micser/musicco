# musicco
![musicco](/doc/img/header-bg.png?raw=true "musicco")
musicco is a web player for your music library Host it on a NAS and start streaming your music from any browser.  
This is especially great on low-spec NAS that don't have enough power to host Squeezebox, Subsonic or an ITunes Server.  
Check out https://www.musicco.org for more information or try the demo at https://www.musicco.org/demo.

Follow musicco on twitter @musiccoapp

# Features

Fully responsive player for all your devices
![musicco](/doc/img/readme/responsive.png?raw=true "Fully responsive player for all your devices")

Browsing, filtering and searching the music library
![musicco](/doc/img/readme/browsing-searching.png?raw=true "Browsing, filtering and searching the music library")

Artist information and lyrics for currently playing track
![musicco](/doc/img/readme/artistInfo-lyrics.png?raw=true "Artist information and lyrics for currently playing track")

Keyboard support
![musicco](/doc/img/readme/keyboard.png?raw=true "Keyboard support")

Optional authentication and multi-user support for saving everybody's playlists
![musicco](/doc/img/readme/auth-playlist.png?raw=true "Optional authentication and multi-user support for saving everybody's playlists")

Showcase that beautiful album art
![musicco](/doc/img/readme/square.png?raw=true "Showcase that beautiful album art")



# Changelog

v1.3.4: Save current play time in the playlist, show album year in the banner

v1.3.3: Small improvements to info shown in square mode, fixed bug about duplicate trigger on volume up / down.

v1.3.2: Quick fix for an issue handling long playlists that did not restore their position properly and improved handling of keypad to seek track and ignore meta key presses.

v1.3.1: Quick fix for left and right arrows skipping 2 tracks instead of 1

v1.3: Improved sharing banner to display more info, added a new template for square windows to highlight album art more, added seeking in current track with 1-9 keys, fixed playlist management issues when moving or deleting albums, made it possible to move albums to the beginning / end of the playlist with a shift-click, added keyboard support in search results, added search links when no artist or lyrics are found.

v1.2.2: Quick fix to enable the initial library build to work out of the box

v1.2.1: Compatibility fixes for different versions of Apache / php / sqlite

v1.2: Removed Android client, work on making the player responsive instead, work on database performance and loading of .lrc files as long as they have the same name of the song currently playing. Allow users to upload their own album covers for the currently playing song from the web player. Reorder albums in the current playlist. Allow sharing a link to an album to guest users. New default theme. Improved artist info from Wikipedia. Use auth tokens for logging in instead of credentials. More pattern configuration options for more custom library tree structures. Shift-click previous/next buttons (or shift-use arrow keys) to skip to the next album in the playlist.

v1.1: Android client and under-the-hood improvements to suppport it, added configuration option for cover name and log file, improved playlist panel, fixed download option for administrators in the playlist and the browser panels.

v1.0.3: More elegant management of the Fetch Cover button to provide more information about the cover fetching progress, nicer playlist screen that groups tracks by album. Also upgraded to jplayer 2.4.0/JQuery 2.0.3 and adapted the CSS for better display on mobile screens with a 320x480 resolutions. HTML notifications are working again in this version, and keyboard actions are improved as a result. New feature Uncover! adds 10 random albums to your playlist.

v1.0.2: Fixed minor display bugs introduced by 1.0.1 with z-index management.

v1.0.1: Improved cover management when downloading from cover art provider, added a button to manually fetch a cover, improved artist information panel and added an icon to indicate that some information is still being loaded from the server.

v1.0: initial release