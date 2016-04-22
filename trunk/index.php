<?php
// Initialising variables. Don't change these.
$_CONFIG = array();
$_ERROR = "";
date_default_timezone_set('CET');
/* 
 * GENERAL SETTINGS
 */
 
// The application name. Must match the folder where you extracted this
// Default: $_CONFIG['appName'] = "musicco";
$_CONFIG['appName'] = "musicco";

// The application version. This is used for sending as part of the user-agent string
// as part of fair use of external services APIs.
// Default: $_CONFIG['appVersion'] = "1.2-SNAPSHOT";
$_CONFIG['appVersion'] = "1.2-SNAPSHOT";

// Additional application information. This is used for sending as part of the user-agent string
// as part of fair use of external services APIs.
// Default: $_CONFIG['appInfo'] = "(//musicco.org)";
$_CONFIG['appInfo'] = "(//musicco.org)";


// Choose a language. See bel ow in the language section for options.
// Default: $_CONFIG['lang'] = "en";
$_CONFIG['lang'] = "en";

// The skin you want to use for the player. Only one is provided (default).
// If you want to create your own, copy the default folder and edit at will.
// Default: $_CONFIG['skin'] = "default";
$_CONFIG['skin'] = "default";

// Charset. Use the one that suits for you. 
// Default: $_CONFIG['charset'] = "UTF-8";
$_CONFIG['charset'] = "UTF-8";


// The name of the folder containing your music.
// Create a 'music' symbolic lync to your music root folder
// to be on the safe side
// Default: $_CONFIG['musicRoot'] = "music";
$_CONFIG['musicRoot'] = "music";

// The name you give to your covert art files
// in your music library. This is used to find covers
// on your disk and also to as a file name to 
// save covers found by the cover art downloader
// Specify the file name with no extension
// Default: $_CONFIG['coverFileName'] = "folder";
$_CONFIG['coverFileName'] = "folder";

// The extension you use for saving downloaded covers
// to disk
// Default: $_CONFIG['coverExtension'] = "png";
$_CONFIG['coverExtension'] = ".png";

// Whether to load .lrc lyrics files from disk.
// If a .lrc file with the same name as the audio 
// file exists in the same folder, its contents 
// will be loaded into the lyrics panel before 
// searching online for it.
// Default: $_CONFIG['loadLyricsFromFile'] = true;
$_CONFIG['loadLyricsFromFile'] = true;

// Whether to automatically download
// missing covers online. New covers
// will be saved to disk in the folder containing
// the song currently playing.
// Even when turning this off, you can still 
// trigger cover art search manually
// Default: $_CONFIG['downLoadMissingCovers'] = true;
$_CONFIG['downLoadMissingCovers'] = true;

// The search engine to use to search for covers
// when none could be found automatically
// Default: $_CONFIG['searchEngine'] = "https://www.google.com/search?tbm=isch&tbs=imgo:1&q=";
// You could also try: $_CONFIG['searchEngine'] = "https://duckduckgo.com/?ia=images&q=";
$_CONFIG['searchEngine'] = "https://www.google.com/search?tbm=isch&tbs=imgo:1&q=";

// Folders in your library that should not 
// be interpreted as artist names.
// The artist name will be searched for one level below
// Useful if you organise your music by genre > artist > album
// or want want to ignore an "audiobooks" folder (audiobooks > artist > album)
// This is a regular expression, so keep the opening ^ and closing $/i
// so it remains case insensitive and looks for entire folder names.
// Separate folder names with a pipe (|)
// Default: $_CONFIG['artistPattern'] = "/^radio shows|podcasts|audiobooks$/i";
$_CONFIG['artistPattern'] = "/^radio shows|podcasts|audiobooks$/i";

// Folders in your library that should not 
// be interpreted as album names.
// The album name will be searched for one level above
// Useful if you have albums that span over 
// serveral discs 
// (Dark Night Of The Soul > cd1, Dark Night Of The Soul > cd2)
// or sides
// (Dark Side of the Moon > disc 1 > Side A, Dark Side of the Moon > disc 1 > Side B)
// This is a regular expression, so keep the opening ^ and closing $/i
// so it remains case insensitive and looks for entire folder names.
// Separate folder names with a pipe (|)
// Default: $_CONFIG['albumPattern'] = "/^disc\s|cd\s?\d*$/i";
$_CONFIG['albumPattern'] = "/^disc\s|cd\s?\d*$/i";

// How I will interpret the files I find to
// deduct the track number (1), title (3) and extension (4)
// depends on this regular expresssion:
// Default: $_CONFIG['filenamePattern'] = "/^(\d+)(_|\s-\s)(.*)\.(mp3)$/i";
$_CONFIG['filenamePattern'] = "/^(\d+)(_|\s-\s)(.*)\.(mp3)$/i";

// If the album name contains the album year in some way,
// you can tell me using this regular expression
// depends on this regular expresssion.
// The default finds 1999 for "Muse > [1999] Showbiz"
// Default: $_CONFIG['yearPattern'] = "/^.*\/\[(\d\d\d\d)\]\s.*\/$/";
$_CONFIG['yearPattern'] = "/^.*\/\[(\d\d\d\d)\]\s.*\/$/";

// The number of random albums to add to your playlist
// when clicking the "uncover!" button in the UI
// Depending on your server and client's performance really...
// 5 is safe, 10 is a bit on the heavy side.
// Default: $_CONFIG['uncover_limit'] = "5";
$_CONFIG['uncover_limit'] = 5;

// A character combination you use to mark your folders as unlistened in your library.
// I use the suffix "__" at the end of folders I have not listened to yet.
// Any item at the top level of your library containing this marker can be shown or 
// hidden on the browser page
// Default: $_CONFIG['new_marker'] = "__";
$_CONFIG['new_marker'] = "__";

// Whether or not to log queries to 
// file for debugging
// Default: $_CONFIG['debug_queries'] = false;
$_CONFIG['debug_queries'] = false;

// The name of the log file
// (will be created where index.php lives)
// Default: $_CONFIG['log_file'] = "musicco.log";
$_CONFIG['log_file'] = "musicco.log";


/*
* PERMISSIONS
*/

// Whether authentication is required to see the contents of the page.
// If set to false, the page is public.
// If set to true, you should specify some users as well (see below).
// Important: This only prevents people from seeing the list.
// They will still be able to access the files with a direct link.
// Defauls: $_CONFIG['require_login'] = "false";
$_CONFIG['require_login'] = "false";

// Usernames and passwords for restricting access to the page.
// The format is: array(username, password, administrator)
// Administrtors can download tracks from the browser and playlist panels and refresh the library from the UI.
// For example: $_CONFIG['users'] = array(array("username1", "password1", "true"), array("username2", "password2", "false"));
// If you set up users, you can then login with a "creds=" URL parameter whose value is the md5 
// of your username+password+role
// guestguestfalse ==> 46f186b77fa1179eaedbf1a97f319912
// adminadmintrue ==> 68e72c93255129c8f066bf43d4ed65e3
// Default: $_CONFIG['users'] = array(array("admin", "admin", "true"),
//											array("guest", "guest", "false")
//																);
$_CONFIG['users'] = array(array("admin", "admin", "true"),
													array("guest", "guest", "false")
													);

/*
 * SYSTEM
 */

// The session name, which is used as a cookie name. 
// Change this to something original if you have multiple copies in the same space
// and wish to keep their authentication separate. 
// The value can contain only letters and numbers. For example: MYSESSION1
// More info at: http://www.php.net/manual/en/function.session-name.php
// Default: $_CONFIG['session_name'] = "musicco";
$_CONFIG['session_name'] = "musicco";

// Whether or not to show the Donate button on the about page
// Default: $_CONFIG['show_donate_button'] = true;
$_CONFIG['show_donate_button'] = true;

// You can override any of the settings above by copying them into a config.php
// file which is about to get loaded. This should simplify upgrades by avoiding 
// losing your personalised settings
if(file_exists('config.php'))
		include 'config.php';


/***************************************************************************/
/*	 TRANSLATIONS.																												 */
/***************************************************************************/

$_TRANSLATIONS = array();

// English
$_TRANSLATIONS["en"] = array(
	"username" => "Username",
	"password" => "Password",
	"wrong_pass" => "Wrong username or password",
	"mobile_version" => "small player",
	"standard_version" => "full player",
	"reset_db" => "update library",
	"rebuildingLibrary" => "refreshing library...",
	"libraryRebuiltIn" => "library updated in ",
	"libraryLocked" => "another library refresh is already in progress",
	"log_in" => "Log in",
	"log_out" => "log out",
	"show_all" => "show old",
	"help" => "help",
	"about" => "about",
	"by" => " by ",
	"..." => "...",
	"search_placeholder" => "What are you looking for?",
	"search_button" => "find it",
	"searchingLibrary" => "Searching library...",
	"noResultsForThisSearch" => "No results for this search",
	"searchingLyricsFor" => "Searching lyrics for ",
	"noLyricsFoundFor" => "No lyrics found for ",
	"noInfoFoundFor" => "No information found about ",
	"updateRequiredTitle" => "Upgrade Required",
	"updateRequiredText" => "To play the media you will need to either update your browser to a recent version or update your ",
	"updateRequiredLink" => "Flash",
	"updateCoverArt" => "update album art",
	"noAlbum" => "album not recognised",
	"fetchingAlbumArt" => "fetching album art...",
	"fetchedAlbumArt" => "cover art fetched",
	"noAlbumArt" => "no album art found", 
	"searchOne" => "&nbsp;&bull;&nbsp;search&nbsp;&bull;&nbsp;", 
	"clickToUploadYourOwn" => "upload", 
	"promptCoverURL" => "Album cover URL", 
	"defaultCoverURL" => "http://",
	"guestPlayLink" => "Link to playlist: ",
	"searchingFor" => "Searching for ",
	"opening" => "Opening ",
	"uncovering" => "Uncovering gems ",
	"queueing" => "Queueing "
);


// French
$_TRANSLATIONS["fr"] = array(
	"username" => "Utilisateur",
	"password" => "Mot de passe",
	"wrong_pass" => "Utilisateur ou mot de passe invalide.",
	"mobile_version" => "version mobile",
	"standard_version" => "version desktop",
	"reset_db" => "rafraichir la discothèque",
	"rebuildingLibrary" => "scan en cours...",
	"libraryRebuiltIn" => "discothèque rafraichie en ",
	"libraryLocked" => "un scan de la discothèque est déjà en cours",
	"log_in" => "Connexion",
	"log_out" => "déconnexion",
	"show_all" => "anciens",
	"help" => "aide",
	"about" => "info",
	"by" => " par ",
	"..." => "...",
	"search_placeholder" => "Que cherchez-vous ?",
	"search_button" => "trouver",
	"searchingLibrary" => "Recherche en cours...",
	"noResultsForThisSearch" => "Pas de résultats pour cette recherche",
	"searchingLyricsFor" => "Recherche de paroles en cours pour ",
	"noLyricsFoundFor" => "Aucune paroles trouvées pour ",
	"noInfoFoundFor" => "Pas d'information sur ",
	"updateRequiredTitle" => "Upgrade nécessaire",
	"updateRequiredText" => "Pour lire ce contenu, il est nécessaire de faire un upgrade de ",
	"updateRequiredLink" => "Flash",
	"updateCoverArt" => "mettre à jour la couverture",
	"noAlbum" => "album non reconnu",
	"fetchingAlbumArt" => "téléchargement de la couverture en cours...",
	"fetchedAlbumArt" => "couverture mise à jour",
	"noAlbumArt" => "Pas de couverture trouvée",
	"searchOne" => "&nbsp;&bull;&nbsp;rechercher&nbsp;&bull;&nbsp;", 
	"clickToUploadYourOwn" => "charger", 
	"promptCoverURL" => "Adresse de la couverture", 
	"defaultCoverURL" => "http://",
	"guestPlayLink" => "Lien vers la playlist : ",
	"searchingFor" => "Recherche de ",
	"opening" => "Overture de ",
	"uncovering" => "Découverte en cours ",
	"queueing" => "Ajout de "
);

function css() {
	?>
	<link href="skins/<?php print Musicco::getConfig('skin'); ?>/musicco.css" rel="stylesheet" type="text/css" />
	<?php
}

/***************************************************************************/
/*	 HERE COMES THE CODE.																									 */
/*	 DON'T CHANGE UNLESS YOU KNOW WHAT YOU ARE DOING ;)										 */
/***************************************************************************/

//
// The class controls logging in and authentication
//
class AuthManager {
	public static function init() {
		global $musicco;
		if(strlen(Musicco::getConfig("session_name")) > 0)
				session_name(Musicco::getConfig("session_name"));
				
		if(count(Musicco::getConfig("users")) > 0)
			session_start();
		else
			return;
			
		if(isset($_GET['logout'])) {
			$_SESSION['musicco_user_name'] = null;
			$_SESSION['musicco_user_pass'] = null;
		} elseif ((isset($_GET['guestPlay'])) && (isset($_GET['u']))) {
			$_SESSION['musicco_user_name'] = $_GET['u'];
			$_SESSION['musicco_guest_play'] = true;
			logMessage("Guest Play requested for user ".AuthManager::getUserName());
		} elseif (isset($_GET['creds'])) {
			$auth_token = $_GET['creds'];
			$_SESSION['musicco_user_name'] = null;
			$_SESSION['musicco_user_pass'] = null;
			foreach(Musicco::getConfig("users") as $user) {
				if(hash("md5", $user[0].$user[1].$user[2]) == $auth_token) {
					logMessage("user $user[0] logged in using an auth token");
					$_SESSION['musicco_user_name'] = $user[0];
					$_SESSION['musicco_user_pass'] = $user[1];
				}
			}
		} else {
			$_SESSION['musicco_guest_play'] = null;
			if(isset($_POST['user_pass']) && strlen($_POST['user_pass']) > 0) {
				if(AuthManager::isUser((isset($_POST['user_name'])?$_POST['user_name']:""), $_POST['user_pass'])) {
					$_SESSION['musicco_user_name'] = isset($_POST['user_name'])?$_POST['user_name']:"";
					$_SESSION['musicco_user_pass'] = $_POST['user_pass'];
				}
				else
					$musicco->setErrorString("wrong_pass");
			}
		}
	}
	
	public static function isGuestPlay() {
		if (isset($_SESSION['musicco_guest_play'])) {
			return $_SESSION['musicco_guest_play'];
		}
		return false;
	}
	
	public static function isUser($userName, $userPass) {
		if (AuthManager::isGuestPlay()) {
			return true;
		} else {
			foreach(Musicco::getConfig("users") as $user) {
				if($user[1] == $userPass) {
					if(strlen($userName) == 0 || $userName == $user[0]) {
						return true;
					}
				}
			}
		}
		return false;
	}
	
	public static function isLoginRequired() {
		if((Musicco::getConfig("require_login") == "false") || (AuthManager::isGuestPlay())) {
			return false;
		}
		return true;
	}
	
	public static function isUserLoggedIn() {
		if(isset($_SESSION['musicco_user_name']) && isset($_SESSION['musicco_user_pass'])) {
			if(AuthManager::isUser($_SESSION['musicco_user_name'], $_SESSION['musicco_user_pass']))
				return true;
		}
		return false;
	}
	
	public static function isAccessAllowed() {
		if(!AuthManager::isLoginRequired() || AuthManager::isUserLoggedIn())
			return true;
		return false;
	}
	
	public static function isAdmin() {
		if(!AuthManager::isLoginRequired()) {
			return true;
		}
		if(isset($_SESSION['musicco_user_name']) && isset($_SESSION['musicco_user_pass'])) {
			foreach(Musicco::getConfig("users") as $user) {
				if($user[0] == $_SESSION['musicco_user_name']) {
					if($user[2] == "true") {
					return true;
					}
				}
			}
		}
		return false;
	}

	
	public static function getUserName() {
		if ((AuthManager::isGuestPlay()) || (AuthManager::isUserLoggedIn() == true && isset($_SESSION['musicco_user_name']) && strlen($_SESSION['musicco_user_name']) > 0))
			return $_SESSION['musicco_user_name'];
		if(isset($_SERVER["REMOTE_USER"]) && strlen($_SERVER["REMOTE_USER"]) > 0)
			return $_SERVER["REMOTE_USER"];
		if(isset($_SERVER['PHP_AUTH_USER']) && strlen($_SERVER['PHP_AUTH_USER']) > 0)
			return $_SERVER['PHP_AUTH_USER'];
		return "guest";
	}
	
	public static function showLoginBox() {
		if(!AuthManager::isUserLoggedIn() && count(Musicco::getConfig("users")) > 0)
			return true;
		return false;
	}
}

class Musicco {
	var $lang;

	function init() {		
		global $_TRANSLATIONS;
		if(isset($_GET['lang']) && isset($_TRANSLATIONS[$_GET['lang']]))
			$this->lang = $_GET['lang'];
		else
			$this->lang = Musicco::getConfig("lang");
		
	}

	//
	// The function for getting a translated string.
	// Falls back to english if the correct language is missing something.
	//
	public static function getLangString($stringName, $lang) {
		global $_TRANSLATIONS;
		if(isset($_TRANSLATIONS[$lang]) && is_array($_TRANSLATIONS[$lang]) 
			&& isset($_TRANSLATIONS[$lang][$stringName]))
			return $_TRANSLATIONS[$lang][$stringName];
		else if(isset($_TRANSLATIONS["en"]))
			return $_TRANSLATIONS["en"][$stringName];
		else
			return "Translation error";
	}
	
	function getString($stringName) {
		return Musicco::getLangString($stringName, $this->lang);
	}
	
	//
	// The function for getting configuration values
	//
	public static function getConfig($name) {
		global $_CONFIG;
		if(isset($_CONFIG) && isset($_CONFIG[$name]))
			return $_CONFIG[$name];
		return null;
	}
	
	public static function setError($message) {
		global $_ERROR;
		if(isset($_ERROR) && strlen($_ERROR) > 0)
			;// keep the first error and discard the rest
		else
			$_ERROR = $message;
	}
	
	function setErrorString($stringName) {
		Musicco::setError($this->getString($stringName));
	}

	//
	// Main function, activating tasks
	// 
	function run() {
		$this->outputHtml();
	}
	
	public function printLoginBox() {
		?>
		<div id="login">
			<div class="login-header">
				<img src="skins/<?php print(Musicco::getConfig("skin")); ?>/about.png"/><?php print(Musicco::getConfig("appName")); ?>
			</div>
			<form enctype="multipart/form-data" action="?" method="post">
			<?php 
			if(AuthManager::isLoginRequired()) {
				$require_username = false;
				foreach(Musicco::getConfig("users") as $user) {
					if($user[0] != null && strlen($user[0]) > 0) {
						$require_username = true;
						break;
					}
				}
				if($require_username) {
					?>
					<div>
						<input type="text" name="user_name" placeholder="<?php print $this->getString("username"); ?>" value="" id="user_name" class="login-form"/>
					</div>
					<?php 
				}
				?>
				<div>
					<input type="password" placeholder="<?php print $this->getString("password"); ?>" name="user_pass" id="user_pass" class="login-form" />
				</div>
				<div>
					<input type="submit" value="<?php print $this->getString("log_in"); ?>" class="go" />
				</div>
				</form>
			</div>
			<?php 
		}
	}

	//
	// Printing the actual page
	// 
	function outputHtml() {
		global $_ERROR;
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $this->getConfig('lang'); ?>" lang="<?php print $this->getConfig('lang'); ?>">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href='//fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php print $this->getConfig('charset'); ?>">
		<?php css(); ?>
		<!-- <meta charset="<?php print $this->getConfig('charset'); ?>" /> -->
		<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="manifest.json">
		<link rel="mask-icon" href="safari-pinned-tab.svg" color="#a7a97f">
		<meta name="apple-mobile-web-app-title" content="<?php print Musicco::getConfig('appName'); ?>">
		<meta name="application-name" content="<?php print Musicco::getConfig('appName'); ?>">
		<meta name="msapplication-TileColor" content="#a7a97f">
		<meta name="msapplication-TileImage" content="mstile-144x144.png">
		<meta name="theme-color" content="#a7a97f">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="lib/jquery.mobile.custom.min.js"></script>
		<script type="text/javascript" src="lib/swipe.js"></script>
		<script type="text/javascript" src="lib/normalise.js"></script>
		<script type="text/javascript" src="lib/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="lib/jplayer.playlist.min.js"></script>
			<script type="text/javascript">
			$(document).ready(function() {
			var fetchStatus = "<?php print $this->getString("updateCoverArt"); ?>"
			var cssSelector = { jPlayer: "#jquery_jplayer_2", cssSelectorAncestor: "#musiccoplayer" };
			var options = { playlistOptions: {
				autoPlay: false,
				loopOnPrevious: true,
				shuffleOnLoop: false,
				enableRemoveControls: true,
				displayTime: 'slow',
				addTime: 'fast',
				removeTime: 'fast',
				shuffleTime: 'slow'
			}, solution:"html,flash" , swfPath: "lib", supplied: "mp3" };

				var musiccoPlaylist = new jPlayerPlaylist(cssSelector, "", options);

				var wikiHistory = [];
				var wikiHistoryPos = -1;

			$('.nokeyboard').focus(function() {
				$('body').off('keyup');
			});

			$('.nokeyboard').blur(function() {
				$('body').on("keyup", function(e) {
					hotkey(e);
				});
			});

			$("#filterText").keyup(function() {
				$('#includeOlAdlbums').prop('checked', true);
				var query = normalise($(this).val().toLowerCase());
				if (query == "") {
					$(".node[item]").show();
					} else {
						$(".node[item]").hide();
				$('.node[item*="'+query+'"]').show();
					}
			});
				
			$("#filterButton").click(function() {
				clearFilterBox();
			});

			function clearFilterBox() {
					$("#filterText").val('');
					$("span[item]").show();
			}

			$("#track-wiki").click(function() {
				if (wikiHistory[wikiHistoryPos].href != wikiLink(nowPlaying("artist"))) {
					updateInfoPanel(wikiLink(nowPlaying("artist")), nowPlaying("artist"));
				}
				toggleInfo();
			});

			$("#track-lyrics").click(function() {
				toggleLyrics();
			});

			$("#help, .close-help").click(function() {
				toggleHelp();
			});

			$("#about, .close-about").click(function() {
				toggleAbout();
			});

			$("#browser-toggle").click(function() {
				toggleBrowser();
			});

			$("#search-toggle").click(function() {
				toggleSearch();
			});

			$("#clear-playlist").click(function() {
				musiccoPlaylist.remove();
				savePlaylist();
			});
				
			$('#playlist-toggle').click(function () {
				togglePlaylist();
			});

			function toggleInfo() {
				updateSelection('#track-wiki', '#infoPanel');
			}

			function toggleLyrics() {
				updateSelection('#track-lyrics', '#lyricsPanel');
			}

			function toggleBrowser() {
				if (getViewerType() === '"small"') {
					updateSelection('#browser-toggle', '#browser');
				}
			}

			function toggleSearch() {
				updateSelection('#search-toggle', '#searchPanel');
					$('.hits').remove();
					$('#searchText').select();
					$('#searchText').focus();
			}

			function toggleHelp() {
				updateSelection('', '#helpPanel');
			}

			function toggleAbout() {
				updateSelection('about', '#aboutPanel');
			}

			function togglePlaylist() {
				formatPlaylist();
				if (getViewerType() === '"small"') {
					updateSelection('#playlist-toggle', '#playlistPanel');
				}
				scrollToCurrentSong();
			}

			function updateSelection(toggle, panel) {
				var viewerType = getViewerType();
				if (viewerType === '"small"') {
				$('#playlistPanel').addClass('panel');
					$('#browser').addClass('panel');
				} else {
					$('#playlistPanel').removeClass('panel');
					$('#browser').removeClass('panel');
				}
				$('.toggles').not(toggle).removeClass('shown');
				$('.panel').not(panel).removeClass('shown');
				$('.panel').not(panel).hide();
				$(toggle).toggleClass('shown');
				$(panel).toggleClass('shown');
				$(panel).toggle();
				var panelsZindex = '';
				var playerTop = '';
				if ($('.shown').size() == 0) {
					panelsZindex = 0;
				} else {
					playerTop = '-100vw';
					if (viewerType === '"small"') {
						panelsZindex = 2;
					} else if (viewerType === '"short"') {
						panelsZindex = 4;
					} else {
						panelsZindex = 3;
						}
				}
				$('#panels').css('z-index', panelsZindex);
				if (viewerType === '"small"') {
					$('#big-player').css('top', playerTop);
					$('#panels').children("*").css('z-index', panelsZindex);
				}
			}


			function scrollToCurrentSong() {
				if (musiccoPlaylist.playlist.length != 0) {
					$('.my-playlist').scrollTop($('.jp-playlist-current').prev().offset().top - $('.my-playlist').offset().top - 100 + $('.my-playlist').scrollTop());
				}
			}

			function scrollToTrack(track) {
				var item = $('.my-playlist').find('li').eq(track);
				if (item.length){
						$('.my-playlist').scrollTop(item.offset().top - 50);
				}
			}
			
			function getViewerType() {
				return window.getComputedStyle(document.body,':after').getPropertyValue('content');
			}

			function displayCover() {
				var coverurl = nowPlaying("poster");
				var searchAutomatically = "<?php print $this->getConfig('downLoadMissingCovers'); ?>";
				resetFetchingStatus();
				printCover(getBaseURL() + coverurl);
				if ((coverurl == "skins/<?php print $this->getConfig('skin'); ?>/cover.png") && (searchAutomatically)) {
					fetchCover();
				}
			}

			function resetFetchingStatus() {
				fetchStatus = "<?php print $this->getString("updateCoverArt"); ?>"
				$('#updateCoverArt').show();
				$('.hasFetched').addClass('coveractions');
				$('.hasFetched').removeClass('hasFetched');
				$('#statusText').addClass('canFetch');
				$('.coveractions').hide();

			}

			function nowPlaying(key) {
				var artist = musiccoPlaylist.playlist[musiccoPlaylist.current].artist;
				var album = musiccoPlaylist.playlist[musiccoPlaylist.current].album;
				var year = musiccoPlaylist.playlist[musiccoPlaylist.current].year;
				var title = musiccoPlaylist.playlist[musiccoPlaylist.current].title;
				var mp3 = musiccoPlaylist.playlist[musiccoPlaylist.current].mp3;
				var path = musiccoPlaylist.playlist[musiccoPlaylist.current].path;
				var poster = musiccoPlaylist.playlist[musiccoPlaylist.current].poster;

				var trackInfo = new Array();
				trackInfo['artist'] = artist;
				trackInfo['album'] = album;
				trackInfo['year'] = year;
				trackInfo['title'] = title;
				trackInfo['mp3'] = mp3;
				trackInfo['path'] = path;
				trackInfo['poster'] = poster;
				return trackInfo[key];
			}

			function printCover(coverurl) {
				$('#big-cover').css('background-image', 'url("' + coverurl + '")'); 
			}

			function getBaseURL() {
				return window.location.href.substr(0, window.location.href.lastIndexOf("/") + 1);
			}

			function showLoadingInfo(info) {
				$("#toast_text").text(info);
				$('#loadingInfo').fadeTo(100, 1);
			}

			function hideLoadingInfo() {
				$('#loadingInfo').fadeTo(1500, 0, function() { $("#toast_text").text(""); });
			}

			function fetchCover() {
				var currentAlbum = nowPlaying("album");
				var currentArtist = nowPlaying("artist");
				var currentPath = nowPlaying("path");
				var currentCover = nowPlaying("poster");
				$('#statusText').removeClass('canFetch');
				var releaseUrl = "https://musicbrainz.org/ws/2/release/?query=release:\""+currentAlbum+"\"%20AND%20artist:\""+currentArtist+"\"&limit=1"
				$.ajax({
					type: "GET",
					url: releaseUrl,
					dataType: "xml",
					success: function(xml) {
						var albumFound = $(xml).find('release-list').attr('count');
						if (albumFound != 0) {
							var releaseId=$(xml).find('release').attr('id');
							var coverUrl = "https://coverartarchive.org/release/"+releaseId+"/front";
							setCoverInfoStatus("<?php print $this->getString("fetchingAlbumArt"); ?>");
							$.ajax({
									 type: "GET",
									 url: "?head&url="+coverUrl,
									 complete: function(data){
									if (data.responseText < 400) {
										if (!isTooLate()) {
											printCover(coverUrl);
										}
										saveCover(coverUrl, currentPath);
										setCoverInfoStatus("<?php print $this->getString("fetchedAlbumArt"); ?>");
									} else {
										setCoverInfoStatus("<?php print $this->getString("noAlbumArt"); ?>"); 
										if (!isTooLate()) {
											printCover(currentCover);
										}
									}
								}
								});
						} else {
							setCoverInfoStatus("<?php print $this->getString("noAlbum"); ?>");
						}
					}, 
					error: function() {
						setCoverInfoStatus("<?php print $this->getString("noAlbum"); ?>");
					}
				});
			}

			function isTooLate() {
				return $('#statusText').hasClass('canFetch');
			}

			function setCoverInfoStatus(statusText) {
				if (!isTooLate()) {
					$('#uploadIt').addClass('canUpload');
					$('.coveractions').addClass('hasFetched');
					fetchStatus = statusText;
					$('.hasFetched').show();
					$("#statusText").text(fetchStatus).mouseenter().delay(1000).queue(function(n) {
						$("#updateCoverArt").mouseleave();
						n();	
						}).fadeTo("fast", 0.8, function() {
									$("#updateCoverArt").fadeTo(2000, 0.1);
								});
				}
			}

			$('#uploadIt').click(function () {
					if ($(this).hasClass('canUpload')) {
						uploadCover();
					}
				});

			$('#updateCoverArt, .dummy').hover(function() {
				$('#updateCoverArt').finish();
				if (!isGuestPlay()) { 
					$('#updateCoverArt').addClass('bigger'); 
					$('#updateCoverArt').css('width', '100%'); 
					$('#statusText').text(fetchStatus); 
					$('#updateCoverArt').fadeTo("fast", 0.8);
					$('.hasFetched').show();
				}
			} ,function() { 
				if (!isGuestPlay()) {
					$('#updateCoverArt').fadeTo(2000, 0, function() {
						$('.hasFetched').hide();
						$('#statusText').text("<?php print $this->getString("..."); ?>"); 
						$('#updateCoverArt').css('width', ''); 
						$('#updateCoverArt').removeClass('bigger'); 
					});
					$('#updateCoverArt').fadeTo("fast", 0.1);
					$('#updateCoverArt').fadeTo("fast", 0);
					$('#updateCoverArt').fadeTo("fast", 0.1);
					$('#updateCoverArt').fadeTo("fast", 0);
					$('#updateCoverArt').fadeTo("fast", 0.1);
				}
			}
			);

			$('#statusText').click(function () {
				if ($(this).hasClass('canFetch')) {
					fetchCover();
				}
			});

			function uploadCover() {
				var currentPath = nowPlaying("path");
				var isValidURL =/^(?:(?:https?|ftp):\/\/)(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i;
				var isValidImage =/^(.)*\.(png|gif|bmp|jpg|jpeg)$/i;
				var userURL = window.prompt("<?php print $this->getString("promptCoverURL"); ?>", "<?php print $this->getString("defaultCoverURL"); ?>");
				if ((isValidURL.test(userURL)) && (isValidImage.test(userURL))) {
					printCover(userURL);
					saveCover(userURL, currentPath);
				}
			}

			$('#includeOlAdlbums').click(function () {
				if ($(this).is(':checked')) {
							$('.node:not([item$="<?php print $this->getConfig('new_marker'); ?>"])').fadeIn();
					} else {
							$('.node:not([item$="<?php print $this->getConfig('new_marker'); ?>"])').fadeOut();
					}
			});

			$("#searchForm").submit(function(event) {
				event.preventDefault();
				var $form = $( this ),
						term = $form.find( 'input[name="s"]' ).val();
				if (term.length > 0) {
					showLoadingInfo("<?php print $this->getString("searchingFor"); ?>" + term);
					var resultString="&nbsp;";
					$("#searchResults").html("<?php print $this->getString("searchingLibrary"); ?>");
					$(".hits").remove();
					$.post('?', {querydb: '', root: term, type: 'search'}, function (data) {
					var hits= data;
					if (hits!=null) {
						$.each(hits, function (i, elem) {
							var parent = hits[i].parent;
							var name = hits[i].name;
							var type = hits[i].type;
							var slash="/";
							var optionalSlash="";
							if (type == 1) {
								optionalSlash = slash;
							}
							var levelUp = parent.substr(0,parent.substr(0,parent.lastIndexOf("/")).lastIndexOf("/")+1);
							var parentItem = parent.substr(levelUp.length);
							var parentItemName = parent.substr("music/".length, parent.substr("music/".length).length -1);
							var hitLink="<div class=\"hits\">";
							if (parentItemName=="") {
								parentItemName="home";
							}
							hitLink+="<a class=\"queue searchResultParent\" parent=\""+levelUp+"\" item=\""+parentItem+"\" type=\"1\">"+ parentItemName +"</a> &gt; ";
							hitLink+="<a class=\"queue searchResult\" parent=\""+parent+"\" item=\""+name+optionalSlash+"\" type=\""+type+"\">"+ name +"</a></div>";
							$("#searchResults").before(hitLink);
						});
					} else {
						resultString="<?php print $this->getString("noResultsForThisSearch"); ?>";
					}
					$("#searchResults").html(resultString);
					hideLoadingInfo();}, "json");
				}
			});

			$('#clear').click(function () {
				$('.hits').remove();
				$('#searchText').val('');
				toggleSearch();
			});
				
			$(document).on("click", ".closed", function() {
				$(this).toggleClass('closed open');
				var item=$(this).attr("item");
				var level=$(this).attr("level");
				var parent = $(this).attr("parent");
				var root =parent+item;
				showLoadingInfo("<?php print $this->getString("opening"); ?>" + decodeURIComponent(item).replace("/",""));
				$.post('?', {querydb: '', root: decodeURIComponent(root), type: 'browse'}, function (response) {
						var files=response;
						if (files !=null) {
							$.each(files, function (i, elem) {
								fileUrl =	 encodeURIComponent(files[i].name.replace(/\"/g,""));
								type =	encodeURIComponent(files[i].type);
								$(".item[item=\""+item+"\"][parent=\""+parent+"\"]").after(treelink(root, fileUrl, level, type));
							});
						}
					hideLoadingInfo(); }, "json");
				});

				$(document).on("dblclick", ".itemHeaderArtist, #nowPlayingArtist", function() {
					$('#filterText').val($(this).text());
					var e = jQuery.Event("keyup");
					e.which = 80; // p
					$("#filterText").trigger(e);
					toggleBrowser();
				});

				$(document).on("dblclick", ".itemHeaderAlbum, #nowPlayingAlbum, #nowPlayingTitle", function() {
					$('#searchText').val($(this).text());
					toggleSearch();
				});

				$(document).on("mouseup", function(e) {
					var popup = $(".panel, .toggle");
					if (!$('.shown').is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
						updateSelection('','');
					}
				});

				$(document).on("click", ".infolink", function() {
					var artist=decodeURIComponent($(this).attr("artist"));
					updateInfoPanel(wikiLink(artist), artist);
					toggleInfo();
				});

			$(document).on("click", ".open", function() {
				$(this).parent(".node").children('.node').toggle();
			});

			$(document).on("click", ".close-banner", function() {
				$(this).parents(".banner").toggle();
			});

			$(document).on("click", "#reset_db", function() {
				var oldHTML = $("#reset_db").html();
				$(this).html("<?php print $this->getString("rebuildingLibrary"); ?> | ");
				var tempHTML = "";
				event.preventDefault();
				$.ajax({
					type: "GET",
					url: "?builddb",
					success: function(response) {
						if (parseInt(response) > -1) {
							tempHTML="<?php print $this->getString("libraryRebuiltIn"); ?>"+response+" | ";
							initBrowser();
						} else {
							tempHTML="<?php print $this->getString("libraryLocked"); ?>	 | ";
						}
						$("#reset_db").html(tempHTML).delay(5000).queue(function(n) {
							$("#reset_db").html(oldHTML);
							n();	
						}).fadeIn(500);
					}
				});
			});

			$(document).on("click", "#uncover", function(e) {
				if (e.altKey) {
					var randomTrack = Math.floor(Math.random() * musiccoPlaylist.playlist.length);
					var thisAlbum = musiccoPlaylist.playlist[randomTrack].album;
					var albumStart = musiccoPlaylist.playlist.map(function(d) { return d['album']; }).indexOf(thisAlbum);
					musiccoPlaylist.play(albumStart);
				} else {
					var method="uncover";
					if (e.shiftKey) {
						method="uncover_new";
					}
					event.preventDefault();
					showLoadingInfo("<?php print $this->getString("uncovering"); ?>");
					$.post('?', {querydb: '', root: '', type: method}, function (response) {
							var hits=response;
							if (hits!=null) {
								$.each(hits, function (i, elem) {
									var slash="/";
									var parent = hits[i].parent;
									var name = hits[i].name;
									var type = hits[i].type;
									var levelUp = parent.substr(0,parent.substr(0,parent.lastIndexOf("/")).lastIndexOf("/")+1);
									var parentItem = parent.substr(levelUp.length);
									var parentItemName = parent.substr("music/".length, parent.substr("music/".length).length -1);
									var hitLink="<div class=\"hits\">";
								if (parentItemName=="") {
									parentItemName="home";
								}
									hitLink+="<a class=\"queue searchResultParent uncoverLink\" id=\"" + i +"\" parent=\""+levelUp+"\" item=\""+parentItem+"\" type=\"1\">"+ parentItemName +"</a>";
								$("#searchResults").before(hitLink);
								var thisHit = "#"+i;
								$(thisHit).trigger('click');
								});
							}
						$(".uncoverLink").remove(); 
							hideLoadingInfo(); }, "json");
				}
			});

			$('#infoPanel').scroll(function() {
				event.preventDefault();
				$('body').scrollTop(0);
			});

			function treelink(root, fileUrl, level, type) {
				var link="";
				var parentLevel = parseInt(level); 
				var myLevel = parentLevel+1; 
				var image="skins/<?php print Musicco::getConfig('skin'); ?>/folder.png";
				var closed="closed";
				var isNew="old";
				var slash="/";
				link+="<span class=\"node\" level=\""+myLevel+"\" item=\""+normalise((decodeURIComponent(root+fileUrl).toLowerCase()))+"\">";
				if (parentLevel==0) {
					link+="<img class=\"infolink browserimg\" artist=\""+fileUrl+"\" border=0 src=\"skins/<?php print Musicco::getConfig('skin'); ?>/wiki.png\" /></a>";
				} else {
					link+="<span class=\"spacer\"/>";
				}
				for (var i=0;i<parentLevel;i++) { 
					link+="<span class=\"spacer\"/>";
				}
				if (type==2) {
					image="skins/<?php print Musicco::getConfig('skin'); ?>/headphones.png";
					closed="";
					slash="";
				 }
				 if (fileUrl.indexOf("<?php print Musicco::getConfig('new_marker'); ?>") != -1) {
					isNew = "new";
				 }
				link+="<a class=\"queue\" parent=\""+root+"\" item=\""+fileUrl+slash+"\" type=\""+type+"\"><img src=\"skins/<?php print Musicco::getConfig('skin'); ?>/add.png\" class=\"browserimg\" /></a>";
				link+="<img alt=\"dir\" src=\""+image+"\" class=\"browserimg\" /> ";
				link+="<a class=\"item "+closed+" "+isNew+"\" level=\""+myLevel+"\" parent=\""+root+"\" item=\""+fileUrl+slash+"\"\>";
				link+=decodeURIComponent(fileUrl.replace(/<?php print Musicco::getConfig('new_marker'); ?>/g, ""));
				link+="</a> ";
				if (("<?php print AuthManager::isAdmin(); ?>" =="1") && (type==2)) {
					link+="<a href=\""+root+fileUrl+"\" target=\"_blank\" class=\"download\">&#8681;</a>";
				} 
				link+="</span> ";
				return link;
			}
			$(document).on("click", ".infoPanelLink", function() {
				event.preventDefault();
				var href = $(this).attr('href');
				var title = $(this).attr('title');
				updateInfoPanel(wikiLink(href.replace(/\/wiki\//g, "")), title);
			});

			$(document).on('mouseenter', ".node", function() {
				var $this = $(this);
				if(this.offsetWidth < this.scrollWidth) {
					$this.attr('title', $this.text());
				}
			});

			$(document).on("click", ".queue", function() {
				var playAfter = (musiccoPlaylist.playlist.length < 1);
				var item = $(this).attr("item");
				var parent = $(this).attr("parent");
				var type = $(this).attr("type");
				showLoadingInfo("<?php print $this->getString("queueing"); ?>" + decodeURIComponent(item).replace("/",""));
				$.post('?', {querydb: '', root: decodeURIComponent(parent + item), type: 'add'+type}, function (response) {
						var files=response;
						if (files!=null) {
							$.each(files, function (i, elem) {
								musiccoPlaylist.add({
									title: files[i].title,
									artist: files[i].artist,
									year: files[i].year,
									album: files[i].album,
									free:<?php print (AuthManager::isAdmin()?"true":"false"); ?>,
									path: files[i].parent.replace(/\"/g,""),
									mp3:	encodeURIComponent((files[i].parent+files[i].name).replace(/\"/g,"")),
									extension: files[i].extension,
									poster: files[i].cover,
									number: files[i].number
								});
							if (playAfter) musiccoPlaylist.play();
							});
						}
				hideLoadingInfo();
				formatPlaylist();
				}, "json");
			});

			$(document).on("click", ".historyLink", function() {
				event.preventDefault();
				for (var i=0;i<wikiHistory.length;i++) { 
					if (wikiHistory[i].seq >= (wikiHistoryPos -1)) {
						wikiHistory.splice(i, 1);
						i -= 1;
					}
				}
				wikiHistoryPos -= 2;
				updateInfoPanel($(this).attr('href'), $(this).attr('title'));
			});

			function isFirstAlbumTrack(index) {
				if (index == 0) {
					return true;
				} else if (musiccoPlaylist.playlist[index].album != musiccoPlaylist.playlist[(index - 1)].album) {
					return true;
				} else {
					return false;
				}
			}

			function formatPlaylist() {
				$('.itemHeader').remove();
				$('.jp-playlist-item-free').html("&#8681;");
				$('.jp-playlist-item-free').attr("target", "_blank");
				$('.jp-playlist-item-free').removeClass('jp-playlist-item-free').addClass('download');
				$('#playlistPanel > ul > li >div').each(function(){
					var index = $(this).parent('li').index();
					if (isFirstAlbumTrack(index)) {
						var thisAlbum = musiccoPlaylist.playlist[index].album;
						var albumLength = (musiccoPlaylist.playlist.map(function(d) { return d['album']; }).lastIndexOf(thisAlbum) + 1) - index;
						var firstAlbum = musiccoPlaylist.playlist[0].album;
						var lastAlbum = musiccoPlaylist.playlist[musiccoPlaylist.playlist.length -1].album;

						var moveUp = "";
						if (thisAlbum != firstAlbum) {
							var to = getPreviousAlbumIndex(thisAlbum);
							moveUp = "<a class=\"move\""
										+ "from=\"" + index + "\""
										+ "to=\"" + to + "\""
										+ "length=\"" + albumLength + "\""
										+ ">&nbsp;&#9650;</a>";
						}

						var moveDown="";
						if (thisAlbum != lastAlbum) {
							var to = getNextAlbumLastIndex(thisAlbum);
							moveDown = "<a class=\"move\""
										+ "from=\"" + index + "\""
										+ "to=\"" + to + "\""
										+ "length=\"" + albumLength + "\""
										+ ">&nbsp;&#9660;</a>";		
						}
						var year = musiccoPlaylist.playlist[index].year
						if (year != "") {
							year = ", " + year;
						}
						var artist = musiccoPlaylist.playlist[index].artist;
						var cover = musiccoPlaylist.playlist[index].poster;
						var path = musiccoPlaylist.playlist[index].path;
						var share = <?php print (AuthManager::isAdmin()?"\"<a class='guestPlay share' path='replaceme'>&nbsp;&#x1f517;</a>\"":"\"\""); ?>;
						var itemHeader = 
						"<span class=\"itemHeader\">"
							+ "<table class=\"itemHeaderDetails\">"
								+ "<tr>"
									+ "<td rowspan=\"2\"><img width=\"100\" height=\"100\" src=\"" + cover + "\"/></td>"
									+ "<td class=\"itemHeaderRemove\">"
										+ "<a class=\"guestPlay remove-album\" album=\"" + thisAlbum + "\">&#10008;</a>"
										+ "<br/>"
										+ moveUp
										+ moveDown
										+ share.replace(/replaceme/, path)
									+ "</td>"
								+ "</tr>"
								+ "<tr>"
									+ "<td class=\"itemHeaderDetails\">"
										+ "<span class=\"itemHeaderAlbum\">" + thisAlbum + "</span><br/>"
										+ "<span class=\"itemHeaderArtist\">" + artist + "</span>"
										+ "<span class=\"itemHeaderYear\">" +	 year + "</span>"
									+ "</td>"
								+ "</tr>"
							+ "</table>"
						+ "</span>";
						$(this).before(itemHeader);
					}
				});
				if (isGuestPlay()) { 
					$('.guestPlay').hide();
					$('.jp-playlist-item-remove').hide();
				}
			}

			function wikiLink(page) {
				return '//<?php print $this->getConfig('lang') ?>.wikipedia.org/w/api.php?action=parse&redirects&prop=text&format=json&callback=?&page='+page;
			}

			function updateInfoPanel(url, artist) {
					$('#wikiPrev').html("");
					wikiHistoryPos += 1;
					var prevUrl = "";
					if (wikiHistoryPos > 0) {
						prevUrl = wikiHistory[wikiHistoryPos -1].href;
					}
					if (url != prevUrl) {
						wikiHistory.push({seq: wikiHistoryPos, title: artist, href: url})
					} else {
						wikiHistoryPos -= 1;
					}
					if (wikiHistory.length > 1) {
						var prevHref = wikiHistory[wikiHistoryPos - 1 ].href;
						var prevTitle = wikiHistory[wikiHistoryPos - 1].title;
					$('#wikiPrev').html("<a href=\"" + prevHref + "\" class=\"historyLink\" title=\"" + prevTitle + "\">&#9664;&nbsp;" + prevTitle + "</a>");
					}

					$('#infoPanelText').html("");
					$.ajax({
					tupe: "GET",
					dataType: "jsonP",
					url: url,
					success: function(json) {
						if (json.parse) {
						$('#infoPanelText').html(json.parse.text['*']);
						$("#infoPanelText").find("*").removeAttr("style"); 
						$("#infoPanelText").find(".mw-editsection").hide(); 
						$("#infoPanelText").find('.image').removeAttr("href", ""); 
						$("#infoPanelText").find('.new').removeAttr("href", ""); 
						$("#infoPanelText").find('.external, .extiw').attr("target", "_blank"); 
						$("#infoPanelText").find('a').removeClass("new"); 
						$("#infoPanelText").find('a[href^="/wiki/"]').addClass("infoPanelLink");
					} else {
						$('#infoPanelText').html("<?php print $this->getString("noInfoFoundFor"); ?>" + artist);
					}
				}
				});
				}

			function updateLyricsPanel(artist, song) {
				artist=nowPlaying("artist");
				song=nowPlaying("title");
				var LRCurl= nowPlaying('mp3').replace(/.mp3/, ".lrc");
				var APIurl= encodeURIComponent("http://api.chartlyrics.com/apiv1.asmx/SearchLyricDirect?artist="+encodeURIComponent(artist)+"&song="+encodeURIComponent(song));
				var loadLrc = "<?php print $this->getConfig('loadLyricsFromFile') ?>";
				var searchOnline = true;

				if (loadLrc) {
					$.ajax({
						type: "GET",
						url: "?head&url="+ LRCurl,
						dataType: "text",
						complete: function(text) {
							if (text.responseText < 400) {
								searchOnline = false;
								$.ajax({
									type: "GET",
									url: "?fetch&url=" + LRCurl,
									dataType: "text",
									success: function(lyrics) {
										$('#lyricsPanel').html(lyrics.replace(/\[.*\]/g, "<br/>"));
									}
								});
							}
						}
					});
				}

				if (searchOnline) {
					$('#lyricsPanel').html("<?php print $this->getString("searchingLyricsFor"); ?>" + song + "<?php print $this->getString("by"); ?>" + artist + "<?php print $this->getString("..."); ?>");
					$.ajax({
						type: "GET",
						url: "?fetch&url=" + APIurl,
						dataType: "xml",
						success: function(xml) {
							var lyrics="";
							$(xml).find('GetLyricResult').each(function(){
								var lyricArtist=$(this).find('LyricArtist').text();
								var lyricSong=$(this).find('LyricSong').text();
								var lyricCovertArtUrl=$(this).find('LyricCovertArtUrl').text();
								var lyricCorrectUrl=$(this).find('LyricCorrectUrl').text();
								var lyricInfo="<img src=\""+lyricCovertArtUrl+"\"/><br/><a target=\"_blank\" href=\""+lyricCorrectUrl+"\">"+lyricSong+"<?php print $this->getString("by"); ?>"+lyricArtist+"</a><br/>";
								//replace what needs to be prefixed by a new line, then what needs to be suffixed by a new line.
								lyrics=$(this).find('Lyric').text().replace(/\s([\(\[A-Z])/g, "<br/>$1").replace(/([\.\?!])\s/g, "$1<br/>");
								$('#lyricsPanel').html(lyricInfo+lyrics);
							});
							if (lyrics=="") {
								noLyricsFound(song, artist);
							}
						},
						error: function() {
								noLyricsFound(song, artist);
						}
					});
				}
			}

			function noLyricsFound(song, artist) {
				$('#lyricsPanel').html("<?php print $this->getString("noLyricsFoundFor"); ?>" + song + "<?php print $this->getString("by"); ?>" + artist);
			}

			function saveCover(coverURL, path) {
				$.post('?', {saveCover: '', u: coverURL, p: path}, function (response) {
				});	
				for (var i=0; i<musiccoPlaylist.playlist.length; i++) {
						if (musiccoPlaylist.playlist[i].path == path) {
							musiccoPlaylist.playlist[i].poster = path + '<?php print $this->getConfig('coverFileName'); ?><?php print $this->getConfig('coverExtension'); ?>?forcerefresh';
						}
				}
				savePlaylist();
				setTimeout(function() { formatPlaylist(); }, 4000);
			}

			function savePlaylist() {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				var playlist = JSON.stringify(musiccoPlaylist.original);
				var current = musiccoPlaylist.current;
				var loop = musiccoPlaylist.loop;
				var shuffled = musiccoPlaylist.shuffled;
				$.post('?', {savePlaylist: '', u: user, p: playlist, c: current, l: loop, s: shuffled}, function (response) {
				});	
			}

			function loadPlaylist() {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				if (user!="") {
							$.post('?', {loadPlaylist: '', u: user}, function(response) {
					var needsBuilding = response.build;
						if (needsBuilding) {
							var root = response.path;
							$.post('?', {querydb: '', root: root, type: 'add1'}, function (results) {
									var files=results;
									if (files!=null) {
									$.each(files, function (i, elem) {
										musiccoPlaylist.add({
											title: files[i].title,
											artist: files[i].artist,
											year: files[i].year,
											album: files[i].album,
											free: false,
											path: files[i].parent.replace(/\"/g,""),
											mp3:	encodeURIComponent((files[i].parent+files[i].name).replace(/\"/g,"")),
											extension: files[i].extension,
											poster: files[i].cover,
											number: files[i].number
										});
										musiccoPlaylist.play();
										});
									}
						}, "json");
						} else {
							musiccoPlaylist.setPlaylist(jQuery.parseJSON(response.playlist));
							musiccoPlaylist.select(parseInt(response.current));
							musiccoPlaylist.loop = response.loop;
							musiccoPlaylist.shuffled = response.shuffled;
							if (musiccoPlaylist.loop == "true") {
								$(toggleAndUpdate($('#big-repeat'), 'selected touch-jp-repeat touch-jp-repeat-off')).trigger('click');
							}
							if (musiccoPlaylist.shuffled == "true") {
								$(toggleAndUpdate($('#big-shuffle'), 'selected touch-jp-shuffle touch-jp-shuffle-off')).trigger('click');
							}
						}
						hideLoadingInfo();
						formatPlaylist();
						if (isGuestPlay()) {
							setTimeout(function() {
								$('#playlist-toggle').trigger('click');
							}, 3000);
						}
					}, "json");	
				}
			}


			function saveGuestPlaylist(path) {
				var user = event.timeStamp;
				$.post('?', {saveGuestPlaylist: '', u: user, p: path}, function (response) {
					var link = getBaseURL() + "?guestPlay&u=" + user;
					$("#sharing-banner").show();
					$("#shared-link").val(link).select().attr('size', link.length);
				});	
			}

			$("#musiccoplayer").on($.jPlayer.event.play, function(event) { 
					$('#big-jp-play').hide();
					$('#big-jp-pause').show();
					$("#nowPlayingTitle").text(nowPlaying('title'));
					$("#nowPlayingArtist").text(nowPlaying('artist'));
					$("#nowPlayingAlbum").text(nowPlaying('album'));
					$('#searchLink').attr("href", "<?php print $this->getConfig("searchEngine"); ?>" + nowPlaying('artist') + " " + nowPlaying('album'));
					showNotification();
					if (!$('#track-wiki').hasClass('shown')) {
						updateInfoPanel(wikiLink(nowPlaying("artist")), nowPlaying("artist"));
					}
					updateLyricsPanel(nowPlaying("artist"), nowPlaying("title"));
					displayCover();
					savePlaylist();
				scrollToCurrentSong();
			});

			function notificationSupported() {
				if ('Notification' in window) {
					return true;
				}
				return false;
			}

			function notificationAllowed() {
				if (notificationSupported() && Notification.permission === 'granted') {
					return true;
				}
				return false;
			}

			function promptNotification() {
				if ((notificationSupported()) && (!notificationAllowed())) {
					window.Notification.requestPermission(showNotification);
				}
			 }

			function showNotification() {
				if ((notificationSupported())	 && (notificationAllowed())) { 
						notif = new Notification(nowPlaying("title") + " - " + nowPlaying("artist"),
																			{'icon': nowPlaying("poster")+"/96x96",
																			 'body': nowPlaying("album"),
																			 'tag' : 'musicconowplayingnotification'});
						notif.onclick = function(x) { window.focus(); this.close(); };
						setTimeout(function(){
							notif.close();}, 5000);
					}
				}

			$("#musiccoplayer").on($.jPlayer.event.pause, function(event) {
				$('#big-jp-play').show();
				$('#big-jp-pause').hide();
			});

			$("#musiccoplayer").on($.jPlayer.event.ready, function(event) {
				loadPlaylist();
				window.resizeTo(470, 780);
				updateVolumeValue();
			});

			$('a.fader:has(img)').hover(
					function() { $('img', this).fadeOut(100);},
					function() { $('img', this).fadeIn(3000);}
			);
			$('.jp-current-time').appendTo('#big-timer');
			$('.jp-duration').appendTo('#big-timer');
			$('.jp-progress').appendTo('#big-jp-progress');

			function updateVolumeValue() {
				var volume = $("#jquery_jplayer_2").data("jPlayer").options.volume;
				$('#big-volume-bar').stop(true, true);
				$('#big-volume-bar').show();
				$('#volume-value').height((100 - (volume * 100))+"%");
				$('#big-volume-bar').delay(800).fadeOut(1600, "linear");
			}

				function ChangeVolume(direction) {
				var volume = $("#jquery_jplayer_2").data("jPlayer").options.volume;				
				var changedVol = 0;
				
				if (direction == "-")		{
					changedVol = volume - 0.10;
					if (changedVol <= 0)	{
						changedVol = 0;
					}
				}				
				else if (direction == "+")	{
					changedVol = volume + 0.10;
					if (changedVol >= 1) {
						changedVol = 1;
					}
				}				

				$("#jquery_jplayer_2").jPlayer({
					volume:changedVol
				});		
				updateVolumeValue();
			}

			function moveUp() {
				move(-1);
			}

			function moveDown() {
				move(1);	
			}

			function move(direction) {
				listSize=$("#rootfolder").parent("span").find(".item:visible").size();
				oldSelection=$("#rootfolder").parent("span").find(".item:visible").index($(".current"));
				nextIndex=oldSelection+direction;
				
				if (nextIndex >0 && nextIndex < listSize) {
					newSelection=$("#rootfolder").parent("span").find(".item:visible").eq(nextIndex);
					$(".current").toggleClass("current");
					$(newSelection).toggleClass("current");
					scrollBrowserPanel();
				}
			}

			function scrollBrowserPanel() {
				$("#browser").scrollTop($(".current").position().top - $("#filter").height());
			}

			function triggerPlayPause() {
				if($("#jquery_jplayer_2").data("jPlayer").status.paused) { 
					$('#big-jp-play').trigger('click');
				} else {
					$('#big-jp-pause').trigger('click');
				}
			}

			function hotkey(e) {
				//console.log(e.keyCode, e.shiftKey, e.ctrlKey);
				switch (e.keyCode) {

					case 32: //space
					case 179: //media play
					case 178: //media pause
						triggerPlayPause();
					break;
					
					case 223: //grave
						if (e.ctrlKey) {
							triggerPlayPause();
						}
					break;
					
					case 38: //up arrow
					case 175: //media volume up
					 event.preventDefault();
					 ChangeVolume("+");
					break;
					
					case 40: //down arrow
					case 174: //media volume down
						event.preventDefault();
						ChangeVolume("-");
					break;
				
					case 37: //left arrow
					case 177: //media previous
						event.preventDefault();
						if (e.shiftKey) {
							$('#big-jp-previous-album').trigger('click');
						} else {
							$('#big-jp-previous').trigger('click');
						}
					break;
				
					case 39: //right arrow
					case 176: //media next
					 event.preventDefault();
					 if (e.shiftKey) {
						$('#big-jp-next-album').trigger('click');
					 } else {
						$('#big-jp-next').trigger('click');
					 }
					break;
					 
					case 83: //s
						if (!isGuestPlay()){
							 $('#search-toggle').trigger('click');
							 $('#searchText').select();
							 $('#searchText').focus();
						} 
					break;
						
					case 80: //p
						 event.preventDefault();
						 $('#playlist-toggle').trigger('click');
					break;
						
					case 73: //i
					 event.preventDefault();
					 if (e.ctrlKey && e.altKey) {
					 } else {
						$('#track-wiki').trigger('click');
					 }
					break;
					
					case 76: //l
					 event.preventDefault();
					 $('#track-lyrics').trigger('click');
					break;
					
					case 66: //b
						if (!isGuestPlay()){	
							 toggleBrowser();
							 event.preventDefault();
						}
					break;
					
					case	191: // /
						if (!isGuestPlay()) {
							 updateSelection('','');
							 toggleBrowser();
							 $('#filterText').select();
							 $('#filterText').focus();
							 event.preventDefault();
						} 
					break;
						
					case	74: //j
						if (!isGuestPlay()) {
							moveDown();
						}
					break;
					
					case	75: //k
						if (!isGuestPlay()) {
							moveUp();
						} 
					break;
					
					case	79: //o
						if (!isGuestPlay()) {
							$(".current").click();
						}
					break;
					
					case 65: //a
						if (!isGuestPlay()) {
							$(".current").parent("span").find(".queue").click();
						}
					break;
					
					case 27: //Esc
						updateSelection('','');
					break;
				}
			}

			function isGuestPlay() {
				return ("<?php print AuthManager::isGuestPlay(); ?>");
			}

			$('#big-jp-previous').click(function(e) {
				if (e.shiftKey) {
					$('#big-jp-previous-album').trigger('click');
				} else {
					$('.jp-previous').trigger('click');
				}
			});

			$('#big-jp-previous-album').click(function() {
				skip("backward");
			});

			function getPreviousAlbumIndex(thisAlbum) {
				var previousAlbumIndex = musiccoPlaylist.playlist.map(function(d) { return d['album']; }).indexOf(thisAlbum) - 1;
				return musiccoPlaylist.playlist.map(function(d) { return d['album']; }).indexOf(getAlbumNameAtPosition(previousAlbumIndex));
			}

			function getNextAlbumIndex(thisAlbum) {
				return nextAlbumIndex = musiccoPlaylist.playlist.map(function(d) { return d['album']; }).lastIndexOf(thisAlbum) + 1;
			}

			function getNextAlbumLastIndex(thisAlbum) {
				return musiccoPlaylist.playlist.map(function(d) { return d['album']; }).lastIndexOf(getAlbumNameAtPosition(getNextAlbumIndex(thisAlbum))) +1;
			}

			function getAlbumNameAtPosition(position) {
				return musiccoPlaylist.playlist[position].album;
			}

			function getAlbumFirstTrack(thisAlbum) {
				return musiccoPlaylist.playlist.map(function(d) { return d['album']; }).indexOf(thisAlbum);
			}

			function skip(direction) {
				if (direction == "forward") {
					if (musiccoPlaylist.playlist[musiccoPlaylist.current].album != musiccoPlaylist.playlist[musiccoPlaylist.playlist.length -1].album) {
						musiccoPlaylist.play(getNextAlbumIndex(musiccoPlaylist.playlist[musiccoPlaylist.current].album));
					} else {
						musiccoPlaylist.play(0);
					}
				} else {
					if (musiccoPlaylist.playlist[musiccoPlaylist.current].album != musiccoPlaylist.playlist[0].album) {
						musiccoPlaylist.play(getPreviousAlbumIndex(musiccoPlaylist.playlist[musiccoPlaylist.current].album));
					} else {
						musiccoPlaylist.play(getAlbumFirstTrack(musiccoPlaylist.playlist[musiccoPlaylist.playlist.length -1].album));
					}
				}
			}

			$(document).on("click", ".remove-album", function() {
				var album = $(this).attr('album');
				var i=$(this).parents('li').index();
				$(this).queue(function() {
					removeAlbum(album, i);
					$(this).dequeue; 
				});
			});

			function removeAlbum(album, i) {
				musiccoPlaylist.removeTime = 0;
				var interval = setInterval(function() {
					if (musiccoPlaylist.playlist[i].album == album) {
						musiccoPlaylist.remove(i);
						i--;
					}
					i++;
					if (i >= (musiccoPlaylist.playlist.length -1)) {
						clearInterval(interval);
						formatPlaylist();
					}
				}, 1);
			}

			$(document).on("click", ".move", function() {
				var isPlaying = $('#big-jp-pause').is(':visible');
				var current = musiccoPlaylist.playlist[musiccoPlaylist.current].mp3;
				var from = parseInt($(this).attr('from'));
				var to = parseInt($(this).attr('to'));
				var length = parseInt($(this).attr('length'));
				var temp = musiccoPlaylist.playlist.slice(0);
				for (var i=0; i < length; i++) {
					temp.splice((to + i), 0, musiccoPlaylist.playlist[(from + i)]);
				}
				var offset = 0;
				if (to > from) {
					temp.splice(from, length);
					offset = to - length;
				} else {
					temp.splice(from + length, length); 
					offset = to;
				}
				temp.join();
				musiccoPlaylist.setPlaylist(temp);
				var newCurrentIndex = musiccoPlaylist.playlist.map(function(d) { return d['mp3']; }).indexOf(current);
				musiccoPlaylist.select(newCurrentIndex);
				musiccoPlaylist.option("autoPlay", isPlaying);
				setTimeout(function() {
					formatPlaylist();
					scrollToTrack(offset);
				 }, 1000);
			});

			$(document).on("click", ".share", function() {
				saveGuestPlaylist($(this).attr('path'));
			});

			$('#big-cover').click(function(e) {
				if (e.target !== this) 
				return;
				triggerPlayPause();
				promptNotification();
			});

      $('#big-cover').on( "swipeup", function() {
        $('#big-volume-up').trigger('click');
			});

      $('#big-cover').on( "swipedown", function() {
        $('#big-volume-down').trigger('click');
			});

      $('#big-cover').on( "swipeleft", function() {
        $('#big-jp-next').trigger('click');
			});

      $('#big-cover').on( "swiperight", function() {
        $('#big-jp-previous').trigger('click');
			});

			$('#big-jp-play').click(function() {
				$('.jp-play').trigger('click');
				promptNotification();
			});

			$('#big-jp-pause').click(function() {
				$('.jp-pause').trigger('click');
			});

			$('#big-jp-next').click(function(e) {
				if (e.shiftKey) {
					$('#big-jp-next-album').trigger('click');
				} else {
					$('.jp-next').trigger('click');
				}
			});

			$('#big-jp-next-album').click(function() {
				skip("forward");
			});

			$('body').on("keyup", function(e) {
				hotkey(e);
			});

			if ($("#user_name").is('*')) {
				$("#user_name").focus();
			}

			$('#big-shuffle').click(function() {
				$(toggleAndUpdate($(this), 'selected touch-jp-shuffle touch-jp-shuffle-off')).trigger('click');
			});

			$('#big-repeat').click(function() {
				$(toggleAndUpdate($(this), 'selected touch-jp-repeat touch-jp-repeat-off')).trigger('click');
			});

			$('#big-mute').click(function() {
				$(toggleAndUpdate($(this), 'selected jp-mute jp-unmute')).trigger('click');
			});

			function toggleAndUpdate(toggle, classes) {
				var target = "#musiccoplayer ."+ $(toggle).attr('class').replace(/selected /, "").replace(/toggles /, "").replace(/touch-/, "");
				$(toggle).toggleClass(classes);
				return target;
			}

			function initBrowser() {
				$('#topnode').html("<a id=\"rootfolder\" class=\"item closed current\" level=\"0\" parent=\"\" item=\"<?php print $this->getConfig('musicRoot'); ?>/\">&nbsp;</a>");
				$('#rootfolder').click();
			}

			$('#big-volume-down').click(function() {
				ChangeVolume("-");
			});

			$('#big-volume-up').click(function() {
				ChangeVolume("+");
			});

			if (isGuestPlay()) { 
				$('.guestPlay').hide();
			} else {
				initBrowser();
			}
			});
			//]]>
		</script>
		<title><?php if(Musicco::getConfig('appName') != null) print Musicco::getConfig('appName'); ?></title>
	</head>
	<body>
<?php 
//
// Print the error (if there is something to print)
//
if(isset($_ERROR) && strlen($_ERROR) > 0) {
	print "<div id=\"error\">".$_ERROR."</div>";
}
// Checking if the user is allowed to access the page, otherwise showing the login box
if(!AuthManager::isAccessAllowed()) {
	$this->printLoginBox();
} else {
?>
	<!-- START: JPlayer -->
	<div id="musiccoplayer" class="jp-audio">
		<!-- START: header -->
		<div id="header">
		<?php
			print "<span id=\"loadingInfo\"><span id=\"toast_text\"></span><span>&nbsp;</span><img src=\"skins/".Musicco::getConfig('skin')."/loading.gif\" /></span>";
			if (AuthManager::isAdmin()) {
				print "<span id=\"reset_db\" class=\"guestPlay\"><a>".$this->getString("reset_db")."</a> | </span>";
			}
		if(AuthManager::isAccessAllowed() && AuthManager::isUserLoggedIn()) {
			print "<span id=\"logout\"><a href=\"?logout\">".$this->getString("log_out")."</a> | </span>";
		}
			print "<span id=\"help\"><a>".$this->getString("help")."</a> | </span>";
			print "<span id=\"about\"><a>".$this->getString("about")."</a></span>";
		?> 
		</div>
		<!-- END: header -->
		<!-- START: big toggles -->
		<div id="big-toggles">
			<div id="browser-toggle" class="guestPlay toggles">&nbsp;</div>
			<div id="search-toggle" class="guestPlay toggles">&nbsp;</div>
			<div id="playlist-toggle" class="toggles">&nbsp;</div>
			<div id="track-wiki" class="toggles">&nbsp;</div>
			<div id="track-lyrics" class="toggles">&nbsp;</div>
		</div>
		<!-- END: big toggles -->
		<!-- START: panels -->
		<div id="panels">
			<div id="infoPanel" class="panel">
				<span id="wikiPrev"></span>
				<div id="infoPanelText"></div>
			</div>
			<div id="lyricsPanel" class="panel"></div>
			<div id="searchPanel" class="guestPlay panel">
				<form action="?" id="searchForm">
					<sup id="clear" class="right">&#10006;</sup>
					<input id="findIt" type="submit" class="right" value="<?php print $this->getString("search_button"); ?>" />
					<span class="inputContainer"><input id="searchText" type="text" class="fill nokeyboard" name="s" value="" placeholder="<?php print $this->getString("search_placeholder"); ?>" /></span>
				</form>
				<div id="searchResults">&nbsp;</div>
			</div>
			<div id="helpPanel" class="panel"><?php print getHelp(); ?></div>
			<div id="aboutPanel" class="panel"><?php print getAbout(); ?></div>
			<div id="browser" class="guestPlay panel">
				<div class="table">
					<div id="filter">
						<sup id="filterButton" class="right">&#10006;</sup>
						<input id="includeOlAdlbums" class="left" type="checkbox" checked="true"/>
						<span class="left"><?php print $this->getString("show_all"); ?></span>
						<span class="inputContainer"><input type="text" id="filterText" class="fill nokeyboard" name="filterText" /></span>
					</div>
					<br/>
					<span id="topnode"></span>
				</div>
			</div>
			<div id="playlistPanel" class="jp-playlist my-playlist panel">
				<ul>
					<li></li>
				</ul>
			</div>
		</div>
		<!-- END: panels -->
		<!-- START: big player -->
		<div id="big-player">
			<div id="playerPanel">
				<div id="big-cover">
					<div id="big-volume-bar">
						<div id="volume-value"></div>
					</div>
					<div id="updateCoverArt" class="guestPlay">
						<span id="statusText"><?php print $this->getString("..."); ?></span>
						<span id="searchOne" class="coveractions"><a id="searchLink" target="_blank" href="<?php print $this->getConfig("searchEngine"); ?>musicco"><?php print $this->getString("searchOne"); ?></a></span>
						<span id="uploadIt" class="coveractions"><?php print $this->getString("clickToUploadYourOwn"); ?></a></span>
						</div>
					<div class="dummy">&nbsp;</div>
					<div id="big-jp-progress"></div>
				</div>
				<div id="big-timer"></div>
				<div id="big-info">
					<div id="nowPlayingTitle">&nbsp;</div>
					<div id="nowPlayingArtist">&nbsp;</div>
					<div id="nowPlayingAlbum">&nbsp;</div>
				</div>
				<div id="playlist-controls">
					<div id="big-mute" class="toggles jp-mute">&nbsp;</div>
					<div id="clear-playlist" class="guestPlay toggles">&nbsp;</div>
					<div id="uncover" class="guestPlay toggles">&nbsp;</div>
					<div id="big-shuffle" class="toggles touch-jp-shuffle">&nbsp;</div>
					<div id="big-repeat" class="toggles touch-jp-repeat">&nbsp;</div>
					<div id="big-volume-down" class="toggles">&nbsp;</div>
					<div id="big-volume-up" class="toggles">&nbsp;</div>
				</div>
				<div id="big-controls">
					<a id="big-jp-previous-album"></a>
					<a id="big-jp-next-album"></a>
					<a class="left" id="big-jp-previous"><img class="button" src="skins/<?php print Musicco::getConfig('skin'); ?>/big-previous.png" /></a>
					<a id="big-jp-play"><img class="button" src="skins/<?php print Musicco::getConfig('skin'); ?>/big-play.png" /></a>
					<a id="big-jp-pause" style=" display: none;"><img class="button" src="skins/<?php print Musicco::getConfig('skin'); ?>/big-pause.png" /></a>
					<a class="right" id="big-jp-next"><img class="button" src="skins/<?php print Musicco::getConfig('skin'); ?>/big-next.png"/></a>
				</div>
			</div>
		</div>
		<!-- END: big player -->
		<!-- START: Sharing Banner -->
		<div id="sharing-banner" class="banner">
			<div>
				<span class="banner-close close-banner"></span>
				<img class="boxed" src="apple-touch-icon.png" />
				<span class="shared-link"><?php print $this->getString("guestPlayLink"); ?></span>
				<input type="text" value="" class="shared-link" id="shared-link" />
			</div>
		</div>
		<!-- END: Sharing Banner -->
		<!-- START: JPlayerPlaylist -->
		<div class="jp-type-playlist">
			<div id="jquery_jplayer_2" class="jp-jplayer"></div>
			<div class="jp-gui">
				<div class="jp-interface">
					<ul class="jp-controls">
						<li>
							<div id="track-cover">
								<a id="jp-play" class="fader jp-play" tabindex="1"><img class="cover"/></a>
								<a id="jp-pause" class="fader jp-pause" tabindex="1"><img class="cover"/></a>
								<div class="jp-progress">
									<div class="jp-seek-bar">
										<div class="jp-play-bar"></div>
									</div>
								</div>
							</div>
						</li>
						<li><a class="jp-previous" tabindex="1">previous</a></li>
						<li><a class="jp-next" tabindex="1">next</a></li>
					</ul>
					<ul class="jp-toggles">
						<li id="volume"><div class="jp-volume-bar"><div class="jp-volume-bar-value"></div></div></li>
						<li><div class="jp-current-time"></div><div class="jp-duration"></div></li>
						<li><a class="jp-mute" tabindex="1" title="mute">mute</a></li>
						<li><a class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
						<li><a class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
						<li><a class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
						<li><a class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
						<li><a class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
					</ul>
				</div>
			</div>
			<div class="jp-no-solution">
				<span><?php print $this->getString("updateRequiredTitle"); ?></span>
				<?php print $this->getString("updateRequiredText"); ?><a href="//get.adobe.com/flashplayer/" target="_blank"><?php print $this->getString("updateRequiredLink"); ?></a>.
			</div>
		</div>
		<!-- END: JPlayerPlaylist -->
	</div>
	<!-- END: JPlayer -->
	<?php 
	}
	?>
	</body>
</html>
	
<?php
	}
}

//
// This is where the system is activated. 
	if(isset($_POST['loadPlaylist'])) {
		$user = $_POST['u'];
			$response = file_get_contents(dirname(__FILE__)."/playlists/".$user.".playlist");
			if ($response == "") {
				$response = '{"song": "0" ,"repeat": "false" ,"shuffle": "false" , "playlist": "[]"}';
			}
			logMessage("Loaded playlist for ".$user);
			return	print_r($response);
			exit;
	} elseif (isset($_POST['savePlaylist'])) {
		$user = $_POST['u'];
		$playlist = str_replace("\"", "\\\"", $_POST['p']);
		$current = $_POST['c'];
		$loop = $_POST['l'];
		$shuffled = $_POST['s'];
		$save = "{\"current\": \"".$current."\" , \"loop\": \"".$loop."\" , \"shuffled\": \"".$shuffled."\" , \"playlist\": \"".$playlist."\"}";
		logMessage("Saved playlist for ".$user);
		return file_put_contents(dirname(__FILE__)."/playlists/".$user.".playlist", $save);
		exit;
	} elseif (isset($_POST['saveGuestPlaylist'])) {
		$user = $_POST['u'];
		$path = str_replace("\"", "\\\"", $_POST['p']);
		$save = "{\"build\": true , \"path\": \"".$path."\"}";
		logMessage("Saved guest playlist ".$user." for ".$path);
		return file_put_contents(dirname(__FILE__)."/playlists/".$user.".playlist", $save);
		exit;
	} elseif (isset($_POST['saveCover'])) {
		$url = $_POST['u'];
		$path = $_POST['p'];
		logMessage("Saving cover from ".$url." to ".$path);
		return	file_put_contents($path.Musicco::getConfig('coverFileName').Musicco::getConfig('coverExtension'), file_get_contents($url));
		exit;
	} elseif (isset($_GET['head'])) {
		$url =$_GET['url']; 
		header('Content-type: application/xml');
		header('Charset: UTF-8');
		logMessage("Heading url: ".$url);
		stream_context_set_default(array('http' => array('method' => 'HEAD')));
		$headers = get_headers($url, 1);
		return print_r(substr($headers[0], 9, 3));
		exit;
	} elseif (isset($_GET['fetch'])) {
		$url =$_GET['url']; 
		header('Content-type: application/xml');
		header('Charset: UTF-8');
		logMessage("Fetching url: ".$url);
		return print_r(file_get_contents_utf8($url));
		exit;
	} elseif (isset($_POST['querydb'])) {
		$query_root = $_POST['root'];
		$query_type = $_POST['type'];
		logMessage("Query: ".$query_type);
		querydb($query_root, $query_type);
		exit;
	} elseif (isset($_GET['builddb']) || ((defined('STDIN')) && $argv[1]=="builddb")) {
		logMessage("User requested library rebuild");
		builddb();
		exit;
	} else {
		$musicco = new Musicco();
		$musicco->init();
		AuthManager::init();
		$musicco->run();
}

function file_get_contents_utf8($fn) {
	$content = file_get_contents($fn);
	return mb_convert_encoding($content, 'UTF-8', mb_detect_encoding($content, 'UTF-8, GB2312, ISO-8859-1', true));
}

//
// And here are the database functions...


function querydb($query_root, $query_type) {
	try	{
		switch ($query_type) {
		case "browse":
		$query = "SELECT item.id, item.name, item.type, item.parent FROM item WHERE item.parent = \"$query_root\" ORDER BY item.type, item.name COLLATE NOCASE";
		break;
		case "search":
		$query = "SELECT item.id, item.name, item.type, item.parent FROM item WHERE item.name LIKE \"%$query_root%\" ORDER BY item.parent, item.name COLLATE NOCASE";
		break;
		case "uncover":
		$query = "SELECT id, name, type, parent FROM item WHERE type in (2) ORDER BY RANDOM() LIMIT ".Musicco::getConfig('uncover_limit');
		break;
		case "uncover_new":
		$query = "SELECT id, name, type, parent FROM item WHERE parent LIKE '%".preg_replace(array("/_/", "/%/"), array("\_", "\%"), Musicco::getConfig('new_marker'))."%' ESCAPE '\' AND type in (2) ORDER BY RANDOM() LIMIT ".Musicco::getConfig('uncover_limit');
		break;
		case "add1":
		$query = "SELECT item.id, item.name, item.type, item.parent, (SELECT file FROM cover WHERE parent = item.parent LIMIT 1)AS file FROM item WHERE item.parent LIKE \"$query_root%\" AND type IN (2) ORDER BY item.parent, item.name COLLATE NOCASE";
		break;
		case "add2":
		$query_root = explode("/", $query_root);
		$filename = $query_root[sizeOf($query_root)-1];
		$parent = "";
		for($i=0; $i<sizeOf($query_root)-1; $i++) {
			$parent.=$query_root[$i]."/";
		}
		$query = "SELECT item.id, item.name, item.type, item.parent, cover.file FROM item LEFT OUTER JOIN cover ON (item.parent=cover.parent) WHERE item.parent = \"$parent\" AND item.name = \"$filename\" AND type IN (2) LIMIT 1";
		break;
		default:
		//exit;
	}

	$db = new PDO('sqlite:library.db');
	$_START_QUERY = microtime(true);
	logMessage($query);
	$result = $db->query($query);
	logMessage("Queried DB in ".number_format((microtime(true) - $_START_QUERY), 3)." seconds");
	$_START_DISPLAY = microtime(true);
	foreach($result as $row) {
		$number = '';
		$title = '';
		$album = '';
		$artist = '';
		$year = '';
		$id = $row['id'];
		$name = $row['name'];
		$type = $row['type'];
		$parent = $row['parent'];
		$extension = '';
		
		// Return the default cover or a specific cover
		if ($query_type=="browse") {
			$cover="";
		} else {
			$cover = ($row['file']=="")? "skins/".Musicco::getConfig('skin')."/cover.png":$row['parent'].$row['file'];
		}
		
		// compute artist, album, title and year
		if (($query_type=="add1") || ($query_type=="add2")) {

			$year_pattern = Musicco::getConfig('yearPattern');
			if (preg_match($year_pattern, $parent, $year_matches)) {
				$year = $year_matches[1];
			}
			
			$exploded_parent = explode("/", $parent);
			$album_pattern = Musicco::getConfig('albumPattern');
			$album = $exploded_parent[sizeOf($exploded_parent) -2];
			if (preg_match($album_pattern, $album)) {
					$album = $exploded_parent[sizeOf($exploded_parent) -3];
			}
			$album = str_replace("[$year] ", "", $album);
			
			$i=1;
			$artist = $exploded_parent[$i];
			$artist_pattern = Musicco::getConfig('artistPattern');
			while(($i < sizeOf($exploded_parent)) && (preg_match($artist_pattern, $artist))) {
				$i+=1;
				$artist = $exploded_parent[$i];
			}
			$artist = str_replace(Musicco::getConfig('new_marker'), "", $artist);
			
			$filename_pattern = Musicco::getConfig('filenamePattern');
			if (preg_match($filename_pattern, $name, $filename_matches)) {
				$number = $filename_matches[1];
				$title = $filename_matches[3];
				$extension = $filename_matches[4];
			} else {
				$title = str_ireplace(" - ", " ", str_ireplace($artist, "", str_ireplace(".mp3", "", $name)));
			}
		}

		$list[]=array("name"=>$name,"parent"=>$parent,"type"=>$type, "cover"=>$cover, "album"=> $album, "artist"=> $artist, "title" => $title, "year"=> $year, "number" => $number, "extension" => $extension);
	}
	logMessage("Displayed Data in ".number_format((microtime(true) - $_START_DISPLAY), 3)." seconds");
	if ($query_type=="browse") {
		$list=(array_reverse($list)); 
	}
	return print_r(json_encode($list));
	// close the database connection
	$db = NULL;
	//exit;
	}
	catch(PDOException $e) {
		print 'Exception : '.$e->getMessage();
	}
	exit;
}

function logMessage($log_message) {
	if (Musicco::getConfig('debug_queries')) {
		error_log(date('Y-m-d H:i:s').": ".$log_message."\n", 3, dirname(__FILE__).'/'.Musicco::getConfig('log_file'));
	}
}
function builddb() {
	if (file_exists("library.lock")) {
			printf("-1");
			logMessage("Aborting, another library refresh is already in progress.");
	} else {
		$lock_file = fopen("library.lock", "w") or die("Unable to create lock file.");
		fclose($lock_file);
		try {
			$folder = Musicco::getConfig('musicRoot');
			// write lock file
			//open the database
			$db = new PDO('sqlite:library.db');
			$sql_insert_item='INSERT INTO item_tmp (name, type, parent) VALUES (:name , :type, :parent);';
			$insert_item = $db->prepare($sql_insert_item, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
			$sql_insert_cover='INSERT INTO cover_tmp (file, parent) VALUES (:file, :parent);';
			$insert_cover = $db->prepare($sql_insert_cover, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

			//create the database
			$db->exec("DELETE FROM cover_tmp;");
			$db->exec("DELETE FROM item_tmp;");
			$db->exec("DELETE FROM type;");
			$db->exec("CREATE TABLE cover (id INTEGER PRIMARY KEY AUTOINCREMENT, file TEXT, parent TEXT);");
			$db->exec("CREATE TABLE cover_tmp (id INTEGER PRIMARY KEY AUTOINCREMENT, file TEXT, parent TEXT);");
			$db->exec("CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, type TEXT, parent TEXT);");		
			$db->exec("CREATE TABLE item_tmp (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, type TEXT, parent TEXT);");		
			$db->exec("CREATE TABLE type (id INTEGER PRIMARY KEY, type TEXT);");
			$db->exec("INSERT INTO type (id, type) VALUES (1, 'folder');");
			$db->exec("INSERT INTO type (id, type) VALUES (2, 'song');");
			$db->exec("INSERT INTO type (id, type) VALUES (120, 'version');");
			
			$_START_SCAN = microtime(true);
			$library = build_library($folder, ".mp3");
			logMessage("Scanned drive in ".number_format((microtime(true) - $_START_SCAN), 3)." seconds");
		
			$_START_INSERT = microtime(true);
			$covers=0;
			$items=0;
			foreach ($library as $item) {
				$name= $item[0];
				$type= $item[1];
				$parent= $item[2];
			if ($type == "3") {
				$insert_cover->execute(array(':file' => $name, ':parent' => $parent));
				$covers+=1;
			} else {
					$insert_item->execute(array(':name' => $name, ':type' => $type, ':parent' => $parent));
					$items+=1;
			}
		}
			// Update non-temp tables and reindex the DB
			$db->exec("DELETE FROM cover;");
			$db->exec("DELETE FROM item;");
			$db->exec("DROP INDEX cover_idx;");		 
			$db->exec("DROP INDEX item_idx;");		
			$db->exec("INSERT INTO cover (file, parent) SELECT file, parent FROM cover_tmp;");
			$db->exec("INSERT INTO item (name, type, parent) SELECT name, type, parent FROM item_tmp;");
			$db->exec("CREATE INDEX IF NOT EXISTS cover_idx ON cover (parent);");
			$db->exec("CREATE UNIQUE INDEX IF NOT EXISTS item_idx ON item (parent, name);");
			$db->exec("REINDEX cover_idx;"); 
			$db->exec("REINDEX item_idx;");
			$db->exec("DELETE FROM cover_tmp;");
			$db->exec("DELETE FROM item_tmp;");

			if (Musicco::getConfig('debug_queries')) {
				$sql_find_duplicate_covers='select parent, file from cover where parent in (select parent from cover group by parent having count(*) > 1);';
				$duplicate_covers = $db->query($sql_find_duplicate_covers);
				logMessage("Found the following duplicate covers: ");
				foreach ($duplicate_covers as $row) {
					logMessage($row['parent'].$row['file']);
				}
				$sql_find_non_standard_covers='select parent, file from cover where file <> "'.Musicco::getConfig('coverFileName').Musicco::getConfig('coverExtension').'";';
				$non_standard_covers = $db->query($sql_find_non_standard_covers);
				logMessage("Found the following non-standard covers: ");
				foreach ($non_standard_covers as $row) {
					logMessage($row['parent'].$row['file']);
				}
			}
			// close the database connection
			$db = NULL;
			printf("%.1s s",(microtime(true) - $_START_INSERT));
			logMessage("Built library in ".number_format((microtime(true) - $_START_INSERT), 3)." seconds");
			unlink("library.lock");
		} catch(PDOException $e) {
			print 'Exception : '.$e->getMessage();
			unlink("library.lock");
		}
	}
}
	function build_library($dir, $extension) {
		if (!isset($item)) {
			$item = array();
		}
		$root = scandir($dir); 
		$filter = $extension;
			foreach($root as $value) {
				if($value === '.' || $value === '..') {continue;} 
				if(is_dir("$dir/$value")) {
						$item[]=array($value, '1', "$dir/");
						} else {
								if(is_song("$dir/$value")){
									$item[]=array($value, '2', "$dir/");
								}
								if(is_cover("$dir/$value")){
									$item[]=array($value, '3', "$dir/");
								}
							continue;}
						foreach(build_library("$dir/$value", $filter) as $value) {
							$item[]=$value; 
					}
				}
			return ($item);
	 }
	 
	 function is_song($file) {
		return (stripos($file, "mp3") > 0);
	 }
	 
	 function is_cover($file) {
		return (stripos($file, Musicco::getConfig('coverFileName').".") == 1);
	 }
	 
	 // Finally, the contents of the help and about panels
	 function getHelp() {
		$helpString="<div id='helpBox'>";
		$helpString.="<span class='close close-help help'>&#10006;</span>";
		$helpString.="<span class='help bold big'>Keyboard Shortcuts</span>";
		$helpString.="<span class='help'><br/></span>";
		$helpString.="<span class='help yellow bold'>Playback</span>";
		$helpString.="<span class='help'>&larr;: previous track</span>";
		$helpString.="<span class='help'>&rarr;: next track</span>";
		$helpString.="<span class='help'>Shift + &larr;: previous album</span>";
		$helpString.="<span class='help'>Shift + &rarr;: next album</span>";
		$helpString.="<span class='help'>&uarr;: volume up</span>";
		$helpString.="<span class='help'>&darr;: volume down</span>";
		$helpString.="<span class='help'>&lt;space&gt;: play/pause</span>";
		$helpString.="<span class='help'>You can also use media keys on <br/>most multimedia keyboards</span>";
		$helpString.="<span class='help'><br/></span>";
		$helpString.="<span class='help yellow bold'>Main</span>";
		$helpString.="<span class='guestPlay help'>b: show/hide browser</span>";
		$helpString.="<span class='guestPlay help'>/: go to filter box in browser</span>";
		$helpString.="<span class='guestPlay help'>s: show/hide search</span>";
		$helpString.="<span class='help'>p: show/hide playlist</span>";
		$helpString.="<span class='help'>i: show/hide artist information</span>";
		$helpString.="<span class='help'>l: show/hide lyrics</span>";
		$helpString.="<span class='help'>Esc: hide all panels</span>";
		$helpString.="<span class='help'><br/></span>";
		$helpString.="<span class='help yellow bold'>Ninja</span>";
		$helpString.="<span class='help'>Shift + Uncover: add new albums to playlist</span>";
		$helpString.="<span class='help'>Alt + Uncover: play a random album from the playlist</span>";
		$helpString.="<span class='help'><br/></span>";
		$helpString.="<span class='guestPlay help yellow bold'>Browser</span>";
		$helpString.="<span class='guestPlay help'>j/k: highlight previous/next item</span>";
		$helpString.="<span class='guestPlay help'>o: open current selection</span>";
		$helpString.="<span class='guestPlay help'>a: queue current selection</span>";
		$helpString.="<span class='help'><br/></span>";
		
		
		$helpString.="</div>";
		return $helpString;
	 }
	 
		function getAbout() {
		$aboutString="<div id='aboutBox'>";
		$aboutString.="<span class='close close-about help'>&#10006;</span>";
		$aboutString.="<span class='about bold'><a target='_blank' href='//musicco.org'><img width='310px' height='310px' src='skins/".Musicco::getConfig('skin')."/about.png'/></a></span>";
		$aboutString.="<span class='about bold big'><a target='_blank' href='//musicco.org'>musicco</a></span>";
		$aboutString.="<span class='about bold'>A web based player for your music collection</span>";
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'>musicco is a light-weight, web-based streaming music player for your local library.</span>";
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'>It runs easily on a NAS like a dns-323.</span>";
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'>It'll basically work wherever you can run php with sqlite and lighttpd.</span>";
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'>Modern desktop and mobile browsers love it!.</span>";
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'>musicco is inspired by</span>";
		$aboutString.="<span class='about'><a target='_blank' href='//github.com/henrik242/musicbrowser#readme'>musicbrowser</a></span>";
		$aboutString.="<span class='about'>&#9834;</span>";
		$aboutString.="<span class='about'><a target='_blank' href='//encode-explorer.siineiolekala.net/'>Encode Explorer</a></span>";
		$aboutString.="<span class='about'>&#9834;</span>";
		$aboutString.="<span class='about'><a target='_blank' href='//coverart.katastrophos.net'>katastrophos.net's <br/> cover art downloader</a></span>";
		$aboutString.="<span class='about'>&#9834;</span>";
		$aboutString.="<span class='about'><a target='_blank' href='//www.doublejdesign.co.uk'>Double-J Design's <br/> super mono icons</a></span>";
		$aboutString.="<span class='about'>&#9834;</span>";
		$aboutString.="<span class='about'><a target='_blank' href='//icons8.com'>Other icons from <br/> icons8.com</a></span>";
		$aboutString.="<span class='about'>&#9834;</span>";
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'>musicco scans your music folder and builds a database of your music collection,</span>";
		$aboutString.="<span class='about'>retrieving missing cover art from <a target='_blank' href='//www.coverartarchive.org'>coverartarchive.org</a>,</span>";
		$aboutString.="<span class='about'>artist information from <a target='_blank' href='//".Musicco::getConfig('lang').".wikipedia.org/'>wikipedia.org</a></span>";
		$aboutString.="<span class='about'>and song lyrics from <a target='_blank' href='//www.chartlyrics.com'>chartlyrics.com</a>.</span>";
		$aboutString.="<span class='about'>The audio player component uses <a target='_blank' href='//jplayer.org/'>jPlayer</a>.</span>";
		if (Musicco::getConfig('show_donate_button')) {
			$aboutString.="<span class='about'><br/></span>";
			$aboutString.="<span class='about'><br/></span>";
			$aboutString.="<span class='about'>Like musicco? Wanna buy me a beer?</span>";
			$aboutString.="<span class='about'><br/></span>";
			$aboutString.="<span class='about'>";
			$aboutString.="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'><input id='paypalCMD' type='hidden' name='cmd' value='_s-xclick'><input type='hidden' name='hosted_button_id' value='CWRGBQ6A65642'><input id='paypalIMG' type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'><img alt='' border='0' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' width='1' height='1'></form>";
			$aboutString.="</span>"; 
		}
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'><br/></span>";
		$aboutString.="<span class='about'>Release History</span>";
		$aboutString.="<span class='about'>v1.2: Removed Android client, work on making the player responsive instead, work on database performance and loading of .lrc files as long as they have the same name of the song currently playing. Allow users to upload their own album covers for the currently playing song from the web player. Reorder albums in the current playlist. Allow sharing a link to an album to guest users. New default theme. Improved artist info from Wikipedia. Use auth tokens for logging in instead of credentials. More pattern configuration options for more custom library tree structures. Shift-click previous/next buttons (or shift-use arrow keys) to skip to the next album in the playlist.</span>";
		$aboutString.="<span class='about'>v1.1: Android client and under-the-hood improvements to suppport it, added configuration option for cover name and log file, improved playlist panel, fixed download option for administrators in the playlist and the browser panels.</span>";
		$aboutString.="<span class='about'>v1.0.3: More elegant management of the Fetch Cover button to provide more information about the cover fetching progress, nicer playlist screen that groups tracks by album. Also upgraded to jplayer 2.4.0/JQuery 2.0.3 and adapted the CSS for better display on mobile screens with a 320x480 resolutions. HTML notifications are working again in this version, and keyboard actions are improved as a result. New feature <i>Uncover!</i> adds 5 random albums to your playlist.</span>";
		$aboutString.="<span class='about'>v1.0.2: Fixed minor display bugs introduced by 1.0.1 with z-index management.</span>";
		$aboutString.="<span class='about'>v1.0.1: Improved cover management when downloading from cover art provider, added a button to manually fetch a cover, improved artist information panel and added an icon to indicate that some information is still being loaded from the server.</span>";
		$aboutString.="<span class='about'>v1.0: initial release</span>";
		$aboutString.="</div>";
		return $aboutString;
	 }
?>