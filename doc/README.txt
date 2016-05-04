musicco is a web player for your music library
Host it on a NAS and start streaming your music from any browser.

This is especially great on low-spec NAS that don't have enough power to host Squeezebox, Subsonic or an iTunes Server.

Check out https://www.musicco.org for more information or try the demo at https://www.musicco.org/demo.

Changelog

v1.2.2: Quick fix to enable the initial library build to work out of the box

v1.2.1: Compatibility fixes for different versions of Apache / php / sqlite

v1.2: Removed Android client, work on making the player responsive instead, work on database performance and loading of .lrc files as long as they have the same name of the song currently playing. Allow users to upload their own album covers for the currently playing song from the web player. Reorder albums in the current playlist. Allow sharing a link to an album to guest users. New default theme. Improved artist info from Wikipedia. Use auth tokens for logging in instead of credentials. More pattern configuration options for more custom library tree structures. Shift-click previous/next buttons (or shift-use arrow keys) to skip to the next album in the playlist.

v1.1: Android client and under-the-hood improvements to suppport it, added configuration option for cover name and log file, improved playlist panel, fixed download option for administrators in the playlist and the browser panels.

v1.0.3: More elegant management of the Fetch Cover button to provide more information about the cover fetching progress, nicer playlist screen that groups tracks by album. Also upgraded to jplayer 2.4.0/JQuery 2.0.3 and adapted the CSS for better display on mobile screens with a 320x480 resolutions. HTML notifications are working again in this version, and keyboard actions are improved as a result. New feature Uncover! adds 10 random albums to your playlist.

v1.0.2: Fixed minor display bugs introduced by 1.0.1 with z-index management.

v1.0.1: Improved cover management when downloading from cover art provider, added a button to manually fetch a cover, improved artist information panel and added an icon to indicate that some information is still being loaded from the server.

v1.0: initial release