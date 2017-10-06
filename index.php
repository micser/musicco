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
// Default: $_CONFIG['appVersion'] = "2.0.0";
$_CONFIG['appVersion'] = "2.0.0";

// The database version compatible with this version. This is for information purposes only, since
// no backwards compatibility really exists
// Default: $_CONFIG['dbVersion'] = "2";
$_CONFIG['dbVersion'] = "2";

// Additional application information. This is used for sending as part of the user-agent string
// as part of fair use of external services APIs.
// Default: $_CONFIG['appInfo'] = "(//musicco.org)";
$_CONFIG['appInfo'] = "(//musicco.org)";


// Choose a language. See bel ow in the language section for options.
// Default: $_CONFIG['lang'] = "en";
$_CONFIG['lang'] = "en";

// Charset. Use the one that suits for you. 
// Default: $_CONFIG['charset'] = "UTF-8";
$_CONFIG['charset'] = "UTF-8";


// The name of the folder containing your music.
// Create a 'music' symbolic link to your music root folder
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
// Default: $_CONFIG['yearPattern'] = "/^.*\[(\d\d\d\d)\]\s.*$/";
$_CONFIG['yearPattern'] = "/^.*\[(\d\d\d\d)\]\s.*$/";

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
// file for debugging. logs are written
// in $_CONFIG['appName'].log
// next to index.php
// Default: $_CONFIG['debug_queries'] = false;
$_CONFIG['debug_queries'] = false;


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
	"reset_db" => "update library",
	"rebuildingLibrary" => "library refreshing...",
	"libraryRebuiltIn" => "library updated in ",
	"libraryLocked" => "another library refresh is already in progress",
	"log_in" => "Log in",
	"log_out" => "log out",
	"show_all" => "show old",
	"help" => "help",
	"about" => "about",
	"reload" => "reload",
	"by" => " by ",
	"..." => "...",
	"search_placeholder" => "What are you looking for?",
	"searchingLibrary" => "Searching library...",
	"noResultsForThisSearch" => "No results for this search",
	"searchingLyricsFor" => "Searching lyrics for ",
	"noLyricsFoundFor" => "No lyrics found for ",
	"search" => "Search ",
	"genius" => "genius ",
	"or" => "or ",
	"lastfm" => "last.fm ",
	"google" => "google",
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
	"searchingFor" => "Searching for ",
	"opening" => "Opening ",
	"uncovering" => "Uncovering gems ",
	"queueing" => "Queueing ",
	"nodata" => "I did not find anything! :-o",
	"menu_info" => "Info",
	"menu_queue" => "Queue as...",
	"menu_next_album" => "next album",
	"menu_next_track" => "next track",
	"menu_right_now" => "current track",
	"menu_last_album" => "last album",
	"menu_download" => "Download",
	"menu_share" => "Share",
	"menu_favourite" => "Favourite",
	"play" => "Play", 
	"pause" => "Pause", 
	"nexttrack" => "Next",
	"previoustrack" => "Previous",
	"seekforward" => "Next Album",
	"seekbackward" => "Previous Album"
);


// French
$_TRANSLATIONS["fr"] = array(
	"username" => "Utilisateur",
	"password" => "Mot de passe",
	"wrong_pass" => "Utilisateur ou mot de passe invalide.",
	"reset_db" => "rafraichir la discothèque",
	"rebuildingLibrary" => "scan en cours...",
	"libraryRebuiltIn" => "discothèque rafraichie en ",
	"libraryLocked" => "un scan de la discothèque est déjà en cours",
	"log_in" => "Connexion",
	"log_out" => "déconnexion",
	"show_all" => "anciens",
	"help" => "aide",
	"about" => "info",
	"reload" => "recharger",
	"by" => " par ",
	"..." => "...",
	"search_placeholder" => "Que cherchez-vous ?",
	"searchingLibrary" => "Recherche en cours...",
	"noResultsForThisSearch" => "Pas de résultats pour cette recherche",
	"searchingLyricsFor" => "Recherche de paroles en cours pour ",
	"noLyricsFoundFor" => "Aucune paroles trouvées pour ",
	"search" => "Chercher sur ",
	"genius" => "genius ",
	"or" => "ou ",
	"lastfm" => "last.fm ",
	"google" => "google",
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
	"searchingFor" => "Recherche de ",
	"opening" => "Overture de ",
	"uncovering" => "Découverte en cours ",
	"queueing" => "Ajout de ",
	"nodata" => "Aucun résultat! :-o",
	"menu_info" => "Info",
	"menu_queue" => "Lire comme...",
	"menu_next_album" => "album suivant",
	"menu_next_track" => "piste suivante",
	"menu_right_now" => "piste actuelle",
	"menu_last_album" => "dernier album",
	"menu_download" => "Télécharger",
	"menu_share" => "Partager",
	"menu_favourite" => "Favori",
	"play" => "Lecture", 
	"pause" => "Pause", 
	"nexttrack" => "Suivant",
	"previoustrack" => "Précédent",
	"seekforward" => "Album suivant",
	"seekbackward" => "Album précédent"
);

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
		if(strlen(Musicco::getConfig("appName")) > 0)
				session_name(Musicco::getConfig("appName"));
				
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
	const TYPE_FOLDER = 1;
	const TYPE_FILE = 2;
	const TYPE_COVER = 3;

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
				<img src="theme/images/about.png"/><?php print(Musicco::getConfig("appName")); ?>
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
		<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css" >
		<link rel="stylesheet" type="text/css" href='//fonts.googleapis.com/css?family=Montserrat' >
		<link rel="stylesheet" href="lib/jquery-ui/jquery-ui.min.css">
		<link rel="stylesheet" href="lib/fancytree/skin-awesome/ui.fancytree.min.css">
		<link rel="stylesheet" type="text/css" href="theme/musicco.css" >
		<meta http-equiv="Content-Type" content="text/html; charset=<?php print $this->getConfig('charset'); ?>">
		<!-- <meta charset="<?php print $this->getConfig('charset'); ?>" /> -->
		<link rel="apple-touch-icon" sizes="57x57" href="app/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="app/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="app/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="app/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="app/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="app/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="app/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="app/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="app/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="app/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="app/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="app/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="app/icon-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="app/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="manifest.json">
		<link rel="mask-icon" href="app/safari-pinned-tab.svg" color="#a7a97f">
		<meta name="apple-mobile-web-app-title" content="<?php print Musicco::getConfig('appName'); ?>">
		<meta name="application-name" content="<?php print Musicco::getConfig('appName'); ?>">
		<meta name="msapplication-config" content="app/browserconfig.xml" />
		<meta name="msapplication-TileColor" content="#a7a97f">
		<meta name="msapplication-TileImage" content="app/mstile-310x310.png">
		<meta name="theme-color" content="#a7a97f">
		<script type="text/javascript" src="lib/jquery/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="lib/jquery/jquery.mobile.custom.min.js"></script>
		<script type="text/javascript" src="lib/jquery-ui/jquery-ui.min.js"></script>
		<script type="text/javascript" src="lib/jquery-ui-contextmenu/jquery.ui-contextmenu.min.js"></script>
		<script type="text/javascript" src="lib/fancytree/jquery.fancytree-all.min.js"></script>
		<script type="text/javascript" src="lib/jquery-qrcode/jquery.qrcode.min.js"></script>
		<script type="text/javascript" src="lib/clipboard.js/clipboard.min.js"></script>
		<script type="text/javascript" src="lib/swipe/swipe.js"></script>
		<script type="text/javascript" src="lib/normalise/normalise.js"></script>
		<script type="text/javascript" src="lib/jplayer/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="lib/jplayer/jplayer.playlist.min.js"></script>
		<script type="text/javascript">
			var viewerType = '';
			var windowWidth = '';
			var restoreCurrentTime = -1;
			var restorePlaylistPosition = -1;
			$(document).ready(function() {
				viewerType = window.getComputedStyle(document.getElementById('viewer') ,':after').getPropertyValue('content');
				windowWidth = $(window).width();
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
				var jp = $(musiccoPlaylist.cssSelector.jPlayer), jpData = jp.data('jPlayer');
				var wikiHistory = [];
				var wikiHistoryPos = -1;

				$('#includeOlAdlbums').click(function () {
					filterTree();
				});

				$("#filterText").keyup(function() {
					filterTree();
				});

				$("#filterButton").on("click", function(event) {
					event.preventDefault();
					$("#library").fancytree("getTree").clearFilter();
					$("#filterText").val('');
					$('#includeOlAdlbums').prop('checked', true);
				});

				$("#infoPanel").click(function() {
					if (wikiHistory[wikiHistoryPos].href != wikiLink(nowPlaying("artist"))) {
						updateInfoPanel(wikiLink(nowPlaying("artist")), nowPlaying("artist"));
					}
					showPanel("#infoPanel");
				});

				$("#ham").on("click", function() {
					$('#leftPanel').toggle('slide', { direction: 'left' }, 200);
					if (viewerType != '"widescreen"') {
						$("#mini-controls").toggle();
					}
				});

				$("#help").on("click", function() {
					$("#helpPanel").dialog("open");
				});

				$("#about").on("click", function() {
					$("#aboutPanel").dialog("open");
				});

				$("#clear-playlist").click(function() {
					musiccoPlaylist.remove();
					savePlaylist();
				});

				function toggleSearch() {
					showPanel("#searchPanel");
						$('.hits').remove();
						$('#searchText').select();
						$('#searchText').focus();
				}

				function scrollPlaylist() {
					console.log("TODO: playlist does not scroll right now");
					if (musiccoPlaylist.playlist.length != 0) {
						var element = restorePlaylistPosition + 1;
						if (element > musiccoPlaylist.length) {
							element = musiccoPlaylist.length;
						}
						var y = $('.my-playlist ul li:nth-child(' + element + ')').offset().top - $('.my-playlist').offset().top - 200 + $('.my-playlist').scrollTop();
						$('.my-playlist').scrollTop(y);
					}
				}

				function displayCover() {
					var coverurl = nowPlaying("poster");
					var searchAutomatically = "<?php print $this->getConfig('downLoadMissingCovers'); ?>";
					resetFetchingStatus();
					printCover(getBaseURL() + coverurl);
					if ((coverurl == "theme/images/cover.png") && (searchAutomatically)) {
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
					var userURL = window.prompt("<?php print $this->getString("promptCoverURL"); ?>", "<?php print $this->getString("defaultCoverURL"); ?>").replace("https", "http");
					if ((isValidURL.test(userURL)) && (isValidImage.test(userURL))) {
						printCover(userURL);
						saveCover(userURL, currentPath);
					}
				}

				function filterTree() {
					console.log("TODO: when the tree is filtered, keyboard navigation just does not work anymore");
					console.log("TODO: uncheck old, search for something that triggers old and finds something ==> nodata is displayed ");
					console.log("TODO: Is normalise still needed? Maybe fancytree can handle all this directly");
					var filterText = normalise($("#filterText").val().toLowerCase());
					var isNew = new RegExp("<?php print $this->getConfig('new_marker'); ?>", "i");
					var isMatching = new RegExp(filterText, "i");
					if ($("#includeOlAdlbums").is(':checked')) {
						if (filterText.length < 1) {
							$("#library").fancytree("getTree").clearFilter();
						} else {
							$("#library").fancytree("getTree").filterBranches(filterText);
						}
					} else {
						$("#library").fancytree("getTree").filterBranches(function(node) {
							return isNew.test(node.data.path) && isMatching.test(node.data.path);
						},
						{ nodata: function() { 
							$('#includeOlAdlbums').prop('checked', true); 
								filterTree();
							}}
						);
					}
				}

				$("#findIt").on("click", function(event) {
					event.preventDefault();
					$("#searchForm").submit();
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
								var name = hits[i].title;
								var type = hits[i].type;
								var extraClasses = hits[i].extraClasses;
								var path = hits[i].path;
								var folder = hits[i].folder;
								var slash="/";
								var optionalSlash="";
								if (type == 1) {
									optionalSlash = slash;
								}
								var levelUp = parent.substr(0,parent.substr(0,parent.lastIndexOf("/")).lastIndexOf("/")+1);
								var parentItem = parent.substr(levelUp.length);
								var parentItemName = parent.substr("<?php print Musicco::getConfig('musicRoot'); ?>/".length, parent.substr("<?php print Musicco::getConfig('musicRoot'); ?>/".length).length -1).replace(/<?php print Musicco::getConfig('new_marker'); ?>/, "").replace(/\//g, " &gt; ");
								var hitLink="<div class=\"hits\">";
								if (parentItemName=="") {
									parentItemName="home";
								}
								hitLink+="<a class=\"searchResultParent\"  tabindex=\"1\" data-parent=\"" + levelUp + "\" data-title=\"" + parentItem + "\" data-path=\"" + parentItem + "\">" + parentItemName +"</a> &gt; ";
								hitLink+="<a class=\"searchResult " + extraClasses + "\" tabindex=\"1\" data-parent=\"" + parent + "\" data-title=\""+ name + optionalSlash +"\" data-path=\""+ path +"\">"+ name +"</a></div>";
								$("#searchResults").before(hitLink);
							});
						} else {
							resultString="<?php print $this->getString("noResultsForThisSearch"); ?>";
						}
						$("#searchResults").html(resultString);
						$('.searchResult').first().focus();
						console.log("TODO: add context menu on hitlinks");
						hideLoadingInfo();}, "json");
					}
				});

				$('#clear').click(function () {
					$('.hits').remove();
					$('#searchText').val('');
					toggleSearch();
				});

					$(document).on("dblclick", ".itemHeaderArtist, #nowPlayingArtist", function() {
						$('#filterText').val($(this).text());
						var e = jQuery.Event("keyup");
						e.which = 80; // p
						$("#filterText").trigger(e);
						showPanel("#browserPanel");
					});

					$(document).on("dblclick", ".itemHeaderAlbum, #nowPlayingAlbum, #nowPlayingAlbumYear, #nowPlayingTitle", function() {
						$('#searchText').val($(this).text().replace("(", "").replace(")", ""));
						toggleSearch();
					});

					$(document).on("click", ".download", function(event) {
						event.preventDefault();
						var link = "?getTrack&album=&track=" + $(this).attr("href");
						window.open(link);
					});

				$(document).on("click", "#reset_db", function() {
					var oldHTML = $("#reset_db").html();
					$(this).html("<?php print $this->getString("rebuildingLibrary"); ?>");
					var tempHTML = "";
					event.preventDefault();
					$.ajax({
						type: "GET",
						url: "?builddb",
						success: function(response) {
							if (parseInt(response) > -1) {
								tempHTML="<?php print $this->getString("libraryRebuiltIn"); ?>"+response;
								$("#library").fancytree("getTree").reload();
							} else {
								tempHTML="<?php print $this->getString("libraryLocked"); ?>";
							}
							$("#reset_db").html(tempHTML).delay(5000).queue(function(n) {
								$("#reset_db").html(oldHTML);
								n();	
							}).fadeIn(500);
						}
					});
				});

				$(document).on("click", ".uncover", function(e) {
					if (e.altKey) {
						if ($('.move').length) {
							var currentAlbum = musiccoPlaylist.playlist[musiccoPlaylist.current].album;
							var currentAlbumStart = musiccoPlaylist.playlist.map(function(d) { return d['album']; }).indexOf(currentAlbum);
							var randomAlbumStart = currentAlbumStart;
							while (randomAlbumStart == currentAlbumStart) {
								var randomTrack = Math.floor(Math.random() * musiccoPlaylist.playlist.length);
								var randomAlbum = musiccoPlaylist.playlist[randomTrack].album;
								randomAlbumStart = musiccoPlaylist.playlist.map(function(d) { return d['album']; }).indexOf(randomAlbum);
							}
							musiccoPlaylist.play(randomAlbumStart);
						}
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
										var name = hits[i].title;
										var type = hits[i].type;
										var levelUp = parent.substr(0,parent.substr(0,parent.lastIndexOf("/")).lastIndexOf("/")+1);
										var parentItem = parent.substr(levelUp.length);
										var parentItemName = parent.substr("<?php print Musicco::getConfig('musicRoot'); ?>/".length, parent.substr("<?php print Musicco::getConfig('musicRoot'); ?>/".length).length -1);
										var hitLink="<div class=\"hits\">";
									if (parentItemName=="") {
										parentItemName="home";
									}
										hitLink+="<a class=\"searchResult uncoverLink\" id=\"" + i +"\" data-parent=\""+ levelUp +"\" data-title=\"" + parentItem + "\" data-path=\"" + parentItem + "\">"+ parentItemName +"</a>";
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

				$(document).on("click", ".infoPanelLink", function() {
					event.preventDefault();
					var href = $(this).attr('href');
					var title = $(this).attr('title');
					updateInfoPanel(wikiLink(href.replace(/\/wiki\//g, "")), title);
				});

				$(document).on('mouseenter', ".nowrap", function() {
					//show tooltips for truncated text
					var $this = $(this);
					if(this.offsetWidth < this.scrollWidth) {
						$this.attr('title', $this.text());
					}
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
					if (musiccoPlaylist.playlist.length) {
						$('.itemHeader').remove();
						$('.jp-playlist-item-free').html("<i class=\"fa fa-download\"></i>");
						$('.jp-playlist-item-free').attr("target", "_blank");
						$('.jp-playlist-item-free').removeClass('jp-playlist-item-free').addClass('download');
						var firstAlbum = musiccoPlaylist.playlist[0].album;
						var lastAlbum = musiccoPlaylist.playlist[musiccoPlaylist.playlist.length -1].album;
						var albums = [];
						var albumIndex = 0;
						var tracks = 0;
						$('#playlistPanel > ul > li >div').each(function(){
							var index = $(this).parent('li').index();
							if (isFirstAlbumTrack(index)) {
								tracks = 1;
								var thisAlbum = musiccoPlaylist.playlist[index].album;
								albums.push({thisAlbum, albumIndex, index, tracks});
								var moveUp = "";
								if (thisAlbum != firstAlbum) {
									moveUp = "<a class=\"move fa fa-arrow-up\""
												+ "data-from=\"" + albumIndex + "\""
												+ "data-to=\"" + (albumIndex - 1) + "\""
												+ "data-direction=\"up\""
												+ "></a>";
								}

								var moveDown="";
								if (thisAlbum != lastAlbum) {
									moveDown = "<a class=\"move fa fa-arrow-down\""
												+ "data-from=\"" + albumIndex + "\""
												+ "data-to=\"" + (albumIndex + 1) + "\""
												+ "data-direction=\"down\""
												+ "></a>";		
								}
								var year = musiccoPlaylist.playlist[index].year
								if (year != "") {
									year = ", " + year;
								}
								var artist = musiccoPlaylist.playlist[index].artist;
								var cover = musiccoPlaylist.playlist[index].poster;
								var path = musiccoPlaylist.playlist[index].path;
								var share = <?php print (AuthManager::isAdmin()?"\"<a class='guestPlay share' data-path='replacemePath' data-info='replacemeInfo'><i class='fa fa-external-link'></i></a>\"":"\"\""); ?>;
								var itemHeader = 
								"<span class=\"itemHeader\">"
									+ "<table class=\"itemHeaderDetails\">"
										+ "<tr>"
											+ "<td rowspan=\"2\"><img class=\"album-cover\" src=\"" + cover + "\"/></td>"
											+ "<td class=\"itemHeaderRemove\">"
												+ "<a class=\"guestPlay remove-album fa fa-remove\" data-album=\"" + thisAlbum + "\"></a>"
												+ "<br/>"
												+ moveUp
												+ moveDown
												+ share.replace(/replacemePath/, path).replace(/replacemeInfo/, artist + " - " + thisAlbum)
											+ "</td>"
										+ "</tr>"
										+ "<tr>"
											+ "<td class=\"itemHeaderDetails\">"
												+ "<span class=\"itemHeaderAlbum\">" + thisAlbum.replace(/<?php print $this->getConfig('new_marker'); ?>/, "") + "</span><br/>"
												+ "<span class=\"itemHeaderArtist\">" + artist + "</span>"
												+ "<span class=\"itemHeaderYear\">" +	 year + "</span>"
											+ "</td>"
										+ "</tr>"
									+ "</table>"
								+ "</span>";
								$(this).before(itemHeader);
								albumIndex += 1;
							} else {
								tracks +=1;
								albums[albumIndex -1].tracks = tracks;
							}
						});
						if (isGuestPlay()) { 
							$('.guestPlay').hide();
							$('.jp-playlist-item-remove').hide();
						}
					musiccoPlaylist.albums = albums;
					setTimeout(function() { scrollPlaylist(); }, 500);
					}
			}

				function postMessage(message) {
					if (navigator.serviceWorker.controller != null) {
						navigator.serviceWorker.controller.postMessage(message);
					}
				}

				function wikiLink(page) {
					return '//<?php print $this->getConfig('lang') ?>.wikipedia.org/w/api.php?action=parse&redirects&prop=text&format=json&callback=?&page='+page;
				}

				function updateInfoPanel(url, artist) {
						var searchArtistExt = "<?php print $this->getString("search"); ?>";
						searchArtistExt +=  "<a target=\"blank\" href=\"http://last.fm/search?q=" + "+" + artist +"\">" + "<?php print $this->getString("lastfm"); ?>" + "</a>" ;
						searchArtistExt += "<?php print $this->getString("or"); ?>" + "</a>" ;
						searchArtistExt +=  "<a target=\"blank\" href=\"https://google.com/search?q=" + artist + "+band\">" + "<?php print $this->getString("google"); ?>" + "</a>" ;
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
							$('#infoPanelText').html(searchArtistExt + "<br/>" + json.parse.text['*']);
							$("#infoPanelText").find("*").removeAttr("style"); 
							$("#infoPanelText").find(".mw-editsection").hide(); 
							$("#infoPanelText").find('.image').removeAttr("href", ""); 
							$("#infoPanelText").find('.new').removeAttr("href", ""); 
							$("#infoPanelText").find('.external, .extiw').attr("target", "_blank"); 
							$("#infoPanelText").find('a').removeClass("new"); 
							$("#infoPanelText").find('a[href^="/wiki/"]').addClass("infoPanelLink");
						} else {
							$('#infoPanelText').html("<?php print $this->getString("noInfoFoundFor"); ?>" + artist + " - " + searchArtistExt);
						}
					}
					});
					}

				function updateLyricsPanel(artist, song) {
					var artist=nowPlaying("artist");
					var song=nowPlaying("title");
					var searchLyricsExt = "<?php print $this->getString("search"); ?>";
					searchLyricsExt +=  "<a target=\"blank\" href=\"http://genius.com/search?q=" + song + "+" + artist +"\">" + "<?php print $this->getString("genius"); ?>" + "</a>" ;
					searchLyricsExt += "<?php print $this->getString("or"); ?>" + "</a>" ;
					searchLyricsExt +=  "<a target=\"blank\" href=\"https://google.com/search?q=" + song + "+" + artist +"+lyrics\">" + "<?php print $this->getString("google"); ?>" + "</a>" ;
					var LRCurl= encodeURI(nowPlaying('mp3').replace(/.mp3/, ".lrc"));
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
											$('#lyricsPanel').html(searchLyricsExt + "<br/>" + lyrics.replace(/\[.*\]/g, "<br/>"));
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
									var lyricInfo="<img src=\""+lyricCovertArtUrl+"\"/><br/><a target=\"_blank\" href=\""+lyricCorrectUrl+"\">"+lyricSong+"<?php print $this->getString("by"); ?>"+lyricArtist+"</a> - " + searchLyricsExt + "<br/>";
									//replace what needs to be prefixed by a new line, then what needs to be suffixed by a new line.
									lyrics=$(this).find('Lyric').text().replace(/\s([\(\[A-Z])/g, "<br/>$1").replace(/([\.\?!])\s/g, "$1<br/>");
									$('#lyricsPanel').html(lyricInfo+lyrics);
								});
								if (lyrics=="") {
									noLyricsFound(song, artist, searchLyricsExt);
								}
							},
							error: function() {
									noLyricsFound(song, artist, searchLyricsExt);
							}
						});
					}
				}

				function noLyricsFound(song, artist, searchLyricsExt) {
					var noLyricsText = "<?php print $this->getString("noLyricsFoundFor"); ?>" + song + "<?php print $this->getString("by"); ?>" + artist;
					noLyricsText += "<br/>";
					noLyricsText += searchLyricsExt;
					$('#lyricsPanel').html(noLyricsText);
				}

				function saveCover(coverURL, path) {
					$.post('?', {saveCover: '', u: coverURL, p: path}, function (response) {
					});	
					for (var i=0; i<musiccoPlaylist.playlist.length; i++) {
							if (musiccoPlaylist.playlist[i].path == path) {
								musiccoPlaylist.playlist[i].poster = (path + "<?php print $this->getConfig('coverFileName'); ?><?php print $this->getConfig("coverExtension"); ?>").replace(/#/g, "%23") + "?" + Math.floor(Date.now());
							}
					}
					savePlaylist();
					setTimeout(function() { formatPlaylist(); }, 4000);
				}

				function savePlaylist() {
					var user = "<?php echo AuthManager::getUserName(); ?>";
					var playlist = JSON.stringify(musiccoPlaylist.original);
					var current = musiccoPlaylist.current;
					var time = Math.floor(jpData.status.currentTime);
					var loop = musiccoPlaylist.loop;
					var shuffled = musiccoPlaylist.shuffled;
					$.post('?', {savePlaylist: '', u: user, p: playlist, c: current, t: time, l: loop, s: shuffled}, function (response) {
					});	
				}

				function loadPlaylist() {
					var user = "<?php echo AuthManager::getUserName(); ?>";
					if (user!="") {
								$.post('?', {loadPlaylist: '', u: user}, function(response) {
						var needsBuilding = response.build;
							if (needsBuilding) {
								var root = response.path;
								$.post('?', {querydb: '', root: root, type: 'queue'}, function (results) {
										var files=results;
										if (files!=null) {
										$.each(files, function (i, elem) {
											musiccoPlaylist.add({
												title: files[i].songtitle,
												artist: files[i].artist,
												year: files[i].year,
												album: files[i].album,
												free: false,
												path: files[i].parent.replace(/\"/g,""),
												mp3: encodeURI((files[i].parent+files[i].title).replace(/\"/g,"")),
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
								restoreCurrentTime = parseInt(response.time)
								restorePlaylistPosition=parseInt(response.current);
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
									showPanel("#playlistPanel");
								}, 3000);
							}
						}, "json");	
					}
				}


				function saveGuestPlaylist(path, info, cover) {
					var user = event.timeStamp;
					var cover = cover;
					$("#shared-album-qr").empty();
					$("#shared-album-title").text(info);
					$("#shared-album-cover").attr("src", cover);
					$.post('?', {saveGuestPlaylist: '', u: user, p: path}, function (response) {
						var link = getBaseURL() + "?guestPlay&u=" + user;
						$("#shared-album-link").val(link).select().attr('size', link.length);
						$("#shared-album-qr").qrcode(link);
						$("#sharing-banner").dialog("open");
					});
				}

				$("#musiccoplayer").on($.jPlayer.event.play, function(event) { 
					 if (restoreCurrentTime != -1) {
						 setTimeout(function(){ 
								 jp.jPlayer( "play", restoreCurrentTime); 
								 restoreCurrentTime = -1;
						 }, 100);
						}
						restorePlaylistPosition = musiccoPlaylist.current;
						$('.big-jp-play').hide();
						$('.big-jp-pause').show();
						$("#nowPlayingTitle").text(nowPlaying('title'));
						$("#nowPlayingArtist").text(nowPlaying('artist'));
						$("#nowPlayingAlbum").text(nowPlaying('album'));
						var albumYear = "";
						if (nowPlaying('year') != "") {
							albumYear = "(" + nowPlaying('year') + ")";
						}
						$("#nowPlayingAlbumYear").text(albumYear);
						setTimeout(function(){ 
							$("#big-info").css('opacity', '');
						 }, 3000);
						$("#big-info").css('opacity', '1');
						$('#searchLink').attr("href", "<?php print $this->getConfig("searchEngine"); ?>" + nowPlaying('artist') + " " + nowPlaying('album'));
						showNotification();
						if (!$('#infoPanel').hasClass('shown')) {
							updateInfoPanel(wikiLink(nowPlaying("artist")), nowPlaying("artist"));
						}
						updateLyricsPanel(nowPlaying("artist"), nowPlaying("title"));
						displayCover();
						savePlaylist();
						scrollPlaylist();
						var tracks = [];
						for (var i=musiccoPlaylist.current; ((i < (musiccoPlaylist.current + 5)) && (i < musiccoPlaylist.playlist.length + 1)); i++) {
							tracks.push(musiccoPlaylist.playlist[i].mp3);
						}
						console.log("TODO: playlist caching is currently disabled to see if this is the performance hog I have been noticing lately...")
						//postMessage({command: "playlist", tracks: tracks});
				});

				function notificationSupported() {
					if (!(/Android/i.test(navigator.userAgent)) && ('Notification' in window)) {
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

				function showNotification(status) {
					console.log("TODO: sometimes the previous track is displayed in the notification, unsure why or who is slow in that case. Actually, that would be too fast maybe.");
					if ((notificationSupported()) && (!notificationAllowed())) {
						Notification.requestPermission().then(function() {
								if (notificationAllowed()) {
									showNotification(status);
								}
							});
						}
						var albumYear = "";
						if (nowPlaying("year") != "") {
							albumYear = " (" + nowPlaying("year") + ")";
						}
						var title = nowPlaying("title");
						var artist = nowPlaying("artist");
						var poster = nowPlaying("poster");
						var album = nowPlaying("album");
							
						if ('mediaSession' in navigator) {
							navigator.mediaSession.metadata = new MediaMetadata({
									title: title,
									artist: artist,
									album: album + albumYear,
									artwork: [
										{ src: poster, sizes: '256x256', type: 'image/png' },
										{ src: poster, sizes: '512x512', type: 'image/png' },
									]
								});
							navigator.mediaSession.setActionHandler('previoustrack', function() { previousTrack() });
							navigator.mediaSession.setActionHandler('nexttrack', function() { nextTrack() });
							navigator.mediaSession.setActionHandler('seekbackward', function() { skip("backward"); });
							navigator.mediaSession.setActionHandler('seekforward', function() { skip("forward"); });
						} else if (musiccoService != null) {
							var actions = [];
							if (status == "isPaused") {
								actions.push({ "action": "play", "title": "<?php print $this->getString("play"); ?>", "icon": "theme/images/play.png" });
							} else {
								actions.push({ "action": "pause", "title": "<?php print $this->getString("pause"); ?>", "icon": "theme/images/pause.png" });
							}
							actions.push({ "action": "nexttrack", "title": "<?php print $this->getString("nexttrack"); ?>", "icon": "theme/images/nexttrack.png" });
							actions.push({ "action": "previoustrack", "title": "<?php print $this->getString("previoustrack"); ?>", "icon": "theme/images/previoustrack.png" });
							actions.push({ "action": "seekforward", "title": "<?php print $this->getString("seekforward"); ?>", "icon": "theme/images/seekforward.png" });
							actions.push({ "action": "seekbackward", "title": "<?php print $this->getString("seekbackward"); ?>", "icon": "theme/images/seekbackward.png" });


							var options = {
								"body": artist + " - " + album + albumYear,
								"icon": poster,
								"tag": "musicconowplayingnotification",
								"persistent": true,
								"replaceable": true,
								"actions": actions
							};
							musiccoService.showNotification(title, options);
						} else {
								notif = new Notification(title + " - " + artist,
																					{'icon': poster,
																					 'body': album + albumYear,
																					 'tag' : 'musicconowplayingnotification'});
								notif.onclick = function(x) { window.focus(); this.close(); };
								setTimeout(function(){
									notif.close();}, 5000);
						}
				}

				$("#musiccoplayer").on($.jPlayer.event.pause, function(event) {
					$('.big-jp-play').show();
					$('.big-jp-pause').hide();
					savePlaylist();
					showNotification("isPaused");
				});

				$("#musiccoplayer").on($.jPlayer.event.ready, function(event) {
					loadPlaylist();
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

					jp.jPlayer({
						volume:changedVol
					});		
					updateVolumeValue();
				}

				function triggerPlayPause() {
					if($("#jquery_jplayer_2").data("jPlayer").status.paused) { 
						$('.big-jp-play').trigger('click');
					} else {
						$('.big-jp-pause').trigger('click');
					}
				}

				function hotkey(e) {
					// Key codes:
					// 13: enter
					// 32: space
					// 178: media pause
					// 179: media play
					// 223: grave
					// 27: Esc
					// 191: /
					// 38: arrow up
					// 175: media volume up
					// 40: arrow down
					// 174: media volume down
					// 174: media volume down
					// 37: arrow left
					// 177: media previous
					// 39: arrow right
					// 177: media next
					// 65: a
					// 66: b
					// 83: s
					// 80: p
					// 73: i
					// 76: l
					// 71: g
					// 48: 0
					// 49: 1
					// 50: 2
					// 51: 3
					// 52: 4
					// 53: 5
					// 54: 6
					// 55: 7
					// 56: 8
					// 57: 9
					// 96: 0
					// 97: 1
					// 98: 2
					// 99: 3
					// 100: 4
					// 101: 5
					// 102: 6
					// 103: 7
					// 104: 8
					// 105: 9
					var treeIsFocused = (($("#library").find(":focus")).length > 0) && $(".fancytree-container").hasClass("fancytree-treefocus");
					var inputIsFocused = $("input").is(":focus");
					var node = treeIsFocused? $("#library").fancytree("getActiveNode") : null;
					var allowedKeys = [];
					if (inputIsFocused) {
						allowedKeys.push(27);
					} else if (treeIsFocused) {
						allowedKeys.push(27, 191, 65, 73);
					} else {
						allowedKeys.push(13, 27, 32, 37, 38, 39, 40, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 65, 66, 71, 73, 76, 80, 83, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 174, 174, 175, 177, 177, 178, 179, 191, 223);
					}
					
					if (allowedKeys.indexOf(e.keyCode) > -1) {
						console.log("TODO: is there a way to prevent the default action here?");
						switch (e.keyCode) {
							case 13: //enter
								if ($(".hits a").is(':focus')) {
									$(".hits a:focus").trigger('click');
								}
							break;
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
							 ChangeVolume("+");
							break;
							
							case 40: //down arrow
							case 174: //media volume down
								ChangeVolume("-");
							break;
						
							case 37: //left arrow
							case 177: //media previous
								if (e.shiftKey) {
									skip("backward");
								} else {
									previousTrack();
								}
							break;
						
							case 39: //right arrow
							case 176: //media next
							 if (e.shiftKey) {
								skip("forward");
							 } else {
								nextTrack();
							 }
							break;

							case 66: //b
								if (!isGuestPlay()){	
									 showPanel("#browserPanel");
									$("#library").fancytree("getTree").getFirstChild().setActive();
								}
							break;
							
							case	191: // /
								if (!isGuestPlay()) {
									 showPanel("#browserPanel");
									 $('#filterText').select();
									 $('#filterText').focus();
								} 
							break;

							case 65: //a
								if (treeIsFocused) {
									var slash = node.isFolder()? "/": "" ;
									queueMusic(node.data.parent + node.data.path + slash, node.data.songtitle, false);
								}
							break;

							case 83: //s
								if (!isGuestPlay()){
									 if ($('#searchPanel').is(':hidden')) {
										showPanel("#searchPanel");
									 }
									 $('#searchText').select();
									 $('#searchText').focus();
								} 
							break;
								
							case 80: //p
								 showPanel("#playlistPanel");
							break;

							case 73: //i
							 if (e.ctrlKey && e.altKey) {
							 } else {
								if (treeIsFocused) { 
									displayInfo(node.data.songtitle);
								} else {
									showPanel("#infoPanel");
								}
							 }
							break;

							case 76: //l
							 showPanel("#lyricsPanel");
							break;
							
							case 71: //g
							 if (e.ctrlKey) {
							 } else {
								showPanel("#settingsPanel");
							 }
							break;
							
							case 48: //0
							case 49: //1
							case 50: //2
							case 51: //3
							case 52: //4
							case 53: //5
							case 54: //6
							case 55: //7
							case 56: //8
							case 57: //9
								if (e.shiftKey || e.ctrlKey) {
								} else {
									jump(e.keyCode - 48);
								}
							break;
							
							case 96: //0
							case 97: //1
							case 98: //2
							case 99: //3
							case 100: //4
							case 101: //5
							case 102: //6
							case 103: //7
							case 104: //8
							case 105: //9
								if (e.shiftKey || e.ctrlKey) {
								} else {
									jump(e.keyCode - 96);
								}
							break;

							case 27: //Esc
								if ($(".modal").is(":visible")) {
								} else {
									closeLeftPanel();
								}
							break;
						}
					}
				}

				function closeLeftPanel() {
					if ($("#leftPanel").is(":visible") && canEscape()) {
						$("#ham").trigger("click");
						$("#mini-controls").hide();
						$(".panel").removeClass("shown");
					}
				}

				function showPanel(panel) {
					if ($("#leftPanel").is(":hidden")) {
						$("#ham").trigger("click");
					}
					$(".panel").removeClass("shown");
					$(panel).addClass("shown");
					$(".panelToggle[href='" + panel + "']").trigger("click");
				}

				function jump(percent) {
					$("#jquery_jplayer_2").jPlayer("playHead", (percent * 10));
				}

				function isGuestPlay() {
					return ("<?php print AuthManager::isGuestPlay(); ?>");
				}

				$('.big-jp-previous').click(function(e) {
					if (e.shiftKey) {
						skip("backward");
					} else {
						previousTrack();
					}
				});

				function previousTrack() {
					$('.jp-previous').trigger('click');
				}

				function nextTrack() {
					$('.jp-next').trigger('click');
				}

				function skip(direction) {
					currentAlbumIndex = getCurrentAlbumIndex();
					var targetAlbum = 0;
					if (direction == "forward") {
						targetAlbum = currentAlbumIndex + 1;
					} else {
						targetAlbum = currentAlbumIndex - 1;
					}
					if (targetAlbum < 0) {
						targetAlbum = musiccoPlaylist.albums.length - 1;
					} else if (targetAlbum > musiccoPlaylist.albums.length - 1) {
						targetAlbum = 0;
					}
					musiccoPlaylist.play(musiccoPlaylist.albums[targetAlbum].index);
				}

				$(document).on("click", ".jp-playlist-item", function(event) { 
					restoreCurrentTime = -1;
				});
				
				$(document).on("click", ".remove-album", function(e) {
					var current = musiccoPlaylist.playlist[musiccoPlaylist.current].mp3
					var removeTarget = musiccoPlaylist.albums.map(function(d) { return d['index']; }).indexOf($(this).parents('li').index());
					restoreCurrentTime = Math.floor(jpData.status.currentTime);
					var repeats = 1;
					var albumIndex = removeTarget;
					if (e.shiftKey) {
						repeats = albumIndex;
						albumIndex = 0;
					} else if (e.ctrlKey) {
						repeats = musiccoPlaylist.albums.length - removeTarget - 1;
						albumIndex += 1;
					}
					$(this).queue(function() {
						var albumArray = getAlbumArray();
						for (var i=0; i < repeats; i++) {
							albumArray.splice(albumIndex, 1)
							var newPlaylist = [].concat.apply([], albumArray);
							musiccoPlaylist.setPlaylist(newPlaylist);
							musiccoPlaylist.select(musiccoPlaylist.playlist.map(function(d) { return d['mp3']; }).indexOf(current));
							restorePlaylistPosition = musiccoPlaylist.albums[albumIndex].index;
						}
						$(this).dequeue; 
					});
						refreshPlaylist(current);
				});

				function getCurrentAlbumIndex() {
					var current = musiccoPlaylist.current;
					var albumStartPos = musiccoPlaylist.albums.map(function(d) { return d['index']; });
					var albumIndex = 0;
					var i = musiccoPlaylist.albums.length - 1;
					var found = false;
					while ((i >= 0) && (!found)) {
						if (albumStartPos[i] > current) {
							i--;
						} else {
							albumIndex = i;
							found = true;
						}
					}
					return albumIndex;
				}

				Array.prototype.move = function (old_index, new_index) {
					if (new_index >= this.length) {
						var k = new_index - this.length;
						while ((k--) + 1) {
							this.push(undefined);
						}
					}
					this.splice(new_index, 0, this.splice(old_index, 1)[0]);
				};

				function getAlbumArray() {
					var albumArray = [];
					for (var i=0; i < musiccoPlaylist.albums.length; i++) {
						var thisAlbum = musiccoPlaylist.albums[i];
						albumArray[i] = musiccoPlaylist.playlist.slice(thisAlbum.index, (thisAlbum.index + thisAlbum.tracks));
					}
					return albumArray;
				}

				function refreshPlaylist(currentSong) {
					var wasPlaying = $('.big-jp-pause').is(':visible');
					if (restoreCurrentTime < 0) {
						restoreCurrentTime = Math.floor(jpData.status.currentTime);
					}
					var newCurrentIndex = musiccoPlaylist.playlist.map(function(d) { return d['mp3']; }).indexOf(currentSong);
					if (newCurrentIndex < 0) {
						newCurrentIndex = 0;
					}
					musiccoPlaylist.select(newCurrentIndex);
					musiccoPlaylist.option("autoPlay", wasPlaying);
					setTimeout(function() {
						formatPlaylist();
					 }, 1500);
				}

				$(document).on("click", ".move", function(e) {
					var direction = "";
					var from = parseInt($(this).data('from'));
					var to = parseInt($(this).data('to'));
					if (e.shiftKey) {
						direction = $(this).data('direction');
						if (direction == "up") {
							to = 0;
					} else {
						to = musiccoPlaylist.albums.length -1;
					}
				}
					moveAlbum(from, to);
				});

				function moveAlbum(from, to) {
					var current = musiccoPlaylist.playlist[musiccoPlaylist.current].mp3
					var albumArray = getAlbumArray();
					albumArray.move(from, to);
					var newPlaylist = [].concat.apply([], albumArray);
					musiccoPlaylist.setPlaylist(newPlaylist);
					restorePlaylistPosition = musiccoPlaylist.albums[to].index;
					refreshPlaylist(current);
				}

				$(document).on("click", ".share", function() {
					saveGuestPlaylist(
						$(this).data('path'),
						$(this).data('info'),
						$(this).closest(".itemHeaderDetails").find("img.album-cover").attr("src")
					);
				});

				$(document).on("click", ".searchResult, .searchResultParent", function() {
					queueMusic($(this).data("parent") + $(this).data("path"), $(this).data("title"), false);
				});

				$('#big-cover').click(function(e) {
					if (e.target !== this) 
					return;
					triggerPlayPause();
					showNotification();
				});

				$('#big-cover').on( "swipeup", function() {
					ChangeVolume("+");
				});

				$('#big-cover').on( "swipedown", function() {
					ChangeVolume("-");
				});

				$('#big-cover').on( "swipeleft", function() {
					nextTrack();
				});

				$('#big-cover').on( "swiperight", function() {
					previousTrack();
				});

				$('.big-jp-play').click(function() {
					$('.jp-play').trigger('click');
				});

				$('.big-jp-pause').click(function() {
					$('.jp-pause').trigger('click');
				});

				$('.big-jp-next').click(function(e) {
					if (e.shiftKey) {
						skip("forward");
					} else {
						nextTrack();
					}
				});

				$('body').on("keyup", function(e) {
					// Uncomment the following line to debug the received keycode
					// console.log("key: " + e.keyCode + " shift: " + e.shiftKey + " ctrl: " + e.ctrlKey + " super: " + e.metaKey);
					if (!e.metaKey) {
						hotkey(e);
					}
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

				function displayInfo(query) {
					console.log("TODO: It looks like after every click the panel is reset to whetever is currently playing, could be a problem with the detection of whether the panel is visible.");
					updateInfoPanel(wikiLink(query), query);
					showPanel("#infoPanel");					
				}

				function queueMusic(query, loadingInfo, custom) {
					var playAfter = (musiccoPlaylist.playlist.length < 1);
					if (custom) {
						var previousAlbums = getAlbumArray().length;
					}
					showLoadingInfo("<?php print $this->getString("queueing"); ?>" + loadingInfo.replace("/",""));
					$.post('?', {querydb: '', root: query, type: "queue"}, function (response) {
							var files=response;
							if (files!=null) {
								$.each(files, function (i, elem) {
									musiccoPlaylist.add({
										title: files[i].songtitle,
										artist: files[i].artist,
										year: files[i].year,
										album: files[i].album,
										free:<?php print (AuthManager::isAdmin()?"true":"false"); ?>,
										path: files[i].parent.replace(/\"/g,""),
										mp3: encodeURI((files[i].parent + files[i].path).replace(/\"/g,"")).replace(/#/g, "%23"),
										extension: files[i].extension,
										poster: files[i].cover.replace(/#/g, "%23"),
										number: files[i].number
									});
								});
							}
					hideLoadingInfo();
					formatPlaylist();
					if (custom) {
					var addedAlbums = getAlbumArray().length - previousAlbums;
							for (var i=0; i < addedAlbums; i++) {
								var from = previousAlbums + i;
								var to = getCurrentAlbumIndex() + 1 + i;
								moveAlbum(from, to);
							}
						}
					if (playAfter) musiccoPlaylist.play();
					}, "json");
				}

				$('.big-volume-down').click(function() {
					ChangeVolume("-");
				});

				$('.big-volume-up').click(function() {
					ChangeVolume("+");
				});

			$(window).resize(function() {
				var newViewerType = window.getComputedStyle(document.getElementById('viewer') ,':after').getPropertyValue('content');
				var newWindowWidth = $(window).width();
				if ((newViewerType != viewerType) && (newWindowWidth != windowWidth)) {
					viewerType = newViewerType;
					windowWidth = newWindowWidth;
					console.log(viewerType);
					//$("#big-player, #playlistPanel, #browserPanel, #panels, .panel").removeAttr("style");
					//$(".panel").removeClass("shown");
				}
			});

			//ServiceWorker
			var musiccoService;
			if ('serviceWorker' in navigator) {
				window.addEventListener('load', function() {
					 navigator.serviceWorker.register('musicco.js').then(function(registration) {
						// Registration was successful
						//console.log('ServiceWorker registration successful with scope: ', registration.scope);
						musiccoService = registration;
					}, function(err) {
						// registration failed :(
						musiccoService = null;
						//console.log('ServiceWorker registration failed: ', err);
					});
				});
				navigator.serviceWorker.onmessage = function (e) {
					console.log("TODO: implement the rest of the events: library reloaded, playlist is out of date (other client is playing)");
					switch (e.data) {
							case "play":
								triggerPlayPause();
								showNotification();
							break;
							case "pause":
								triggerPlayPause();
								showNotification("isPaused");
							break;							
							case "nexttrack":
								nextTrack();
							break;
					}
				};
			}

			function canEscape() {
				if ((viewerType === '"tall"') || (viewerType === '"square"')){
					return true;
				}
				return false;
			}

			// JQuery UI and other UI stuff
			$( "#leftPanel" ).tabs();
			console.log("can we do tabs at the bottom the way Spofity does?");

			$( ".modal" ).dialog({
				modal: true,
				autoOpen: false,
				width: "80%",
				height: "700",
				show: { effect: "fade", duration: 400 },
				hide: { effect: "fold", duration: 200 }
			});
		
		if (isGuestPlay()) {
			$('.guestPlay').hide();
		} 

		$("#leftPanel").hide();

		new Clipboard('.clip');

		var musicRoot = "<?php print Musicco::getConfig('musicRoot'); ?>/";
		$("#library").fancytree({
			extensions: ["glyph", "filter"],	
			glyph: {
        map: {
          doc: "fa fa-music",
          docOpen: "fa fa-music",
          checkbox: "fa fa-square-o",
          checkboxSelected: "fa fa-check-square-o",
          checkboxUnknown: "fa fa-square",
          dragHelper: "fa fa-arrow-right",
          dropMarker: "fa fa-long-arrow-right",
          error: "fa fa-warning",
          expanderClosed: "fa fa-caret-right",
          expanderLazy: "fa fa-caret-right",
          expanderOpen: "fa fa-caret-down",
          folder: "fa fa-folder-o",
          folderOpen: "fa fa-folder-open-o",
          loading: "fa fa-spinner fa-pulse"
        }
			},
			filter: {
				mode: "hide",
				fuzzy: true,
				hideExpanders: false,
				nodata: "<?php print $this->getString("nodata"); ?>"
			},
			autoScroll: true,
			clickFolderMode: 3,
			keyboard: true,
			tabindex: "0",
			titlesTabbable: true,
			tooltip: true,
			selectMode: 1,
			source: {
					url: "?",
					type: "POST",
					data: {querydb: '', root: decodeURI(musicRoot), type: 'browse'},
					cache: true
			},
			beforeExpand: function(event, data) {
				if (event.which === 3) {
					return false;
				}
			},
			lazyLoad: function(event, data) {
				var node = data.node;
				var root = node.data.parent + node.data.path + "/";
				data.result = {
					url: "?",
					type: "POST",
					data: {querydb: '', root: decodeURI(root), type: 'browse'},
					cache: true
				}
			}
		});
		$("#library").contextmenu({
      delegate: "span.fancytree-title",
      autoFocus: true,
      menu: [
          {title: "<?php print $this->getString("menu_queue"); ?>", uiIcon: "ui-icon-play", children: [
						{title: "<?php print $this->getString("menu_next_album"); ?>", uiIcon: "ui-icon-caret-1-se", cmd: "playAsNextAlbum"},
						//{title: "<?php print $this->getString("menu_next_track"); ?>", uiIcon: "ui-icon-caret-1-e", cmd: "playAsNextTrack"},
						//{title: "<?php print $this->getString("menu_right_now"); ?>", uiIcon: "ui-icon-arrowstop-1-e", cmd: "playRightNow"},
						{title: "<?php print $this->getString("menu_last_album"); ?>", uiIcon: "ui-icon-arrowstop-1-s", cmd: "queue"}
          ]},
          {title: "<?php print $this->getString("menu_info"); ?>", cmd: "info", uiIcon: "ui-icon-info"},
          {title: "<?php print $this->getString("menu_download"); ?>", cmd: "download", uiIcon: "ui-icon-arrowthickstop-1-s"},
          {title: "<?php print $this->getString("menu_download"); ?>", cmd: "downloadAlbum", uiIcon: "ui-icon-arrowthickstop-1-s"},
          {title: "<?php print $this->getString("menu_share"); ?>", cmd: "share", uiIcon: "ui-icon-extlink"},
          {title: "<?php print $this->getString("menu_favourite"); ?>", cmd: "favourite", uiIcon: "ui-icon-heart"}
          ],
      beforeOpen: function(event, ui) {
        var node = $.ui.fancytree.getNode(ui.target);
         //Modify menu entries depending on node status
				 $("#library").contextmenu("showEntry", "share", node.isFolder());
				 $("#library").contextmenu("showEntry", "download", (!node.isFolder() && <?php print (AuthManager::isAdmin()?"true":"false"); ?>));
				 $("#library").contextmenu("showEntry", "downloadAlbum", (node.isFolder() && <?php print (AuthManager::isAdmin()?"true":"false"); ?>));
         //$("#library").contextmenu("enableEntry", "paste", node.isFolder());

         //Activate node on right-click
        node.setActive();
         //Disable tree keyboard handling
        ui.menu.prevKeyboard = node.tree.options.keyboard;
        node.tree.options.keyboard = false;
      },
      close: function(event, ui) {
         //Restore tree keyboard handling
        var node = $.ui.fancytree.getNode(ui.target);
        if (node != null) {
					node.tree.options.keyboard = ui.menu.prevKeyboard;
					node.setFocus();
        } else {
					console.log("TODO: Node was null, unsure what the status of keyboard support is in that case");
        }
      },
      select: function(event, ui) {
        var node = $.ui.fancytree.getNode(ui.target);
				switch (ui.cmd) {
					case "info":
						//event.stopImmediatePropagation();
						var query = node.data.songtitle;
						displayInfo(query);
					break;
					case "queue":
						var slash = node.isFolder()? "/": "" ;
						queueMusic(node.data.parent + node.data.path + slash, node.data.songtitle, false);
					break;
					case "playAsNextAlbum":
						var slash = node.isFolder()? "/": "" ;
						queueMusic(node.data.parent + node.data.path + slash, node.data.songtitle, true);
					break;
					case "share": 
						console.log("TODO: sharing does not work for single files, need to rework the query or simply disable for files (most likely)");
						var path = node.data.parent + node.data.path;
						var separator = (node.data.artist == '')? "" : " - ";
						var info = node.data.artist + separator + node.title;
						var image = node.data.cover;
						saveGuestPlaylist(path, info, image);
					break;
					case "download":
						var link = "?getTrack&album=" + node.data.parent + "&track=" + node.data.path;
						window.open(link);
					break;
					case "downloadAlbum":
						var link = "?getAlbum&parent=" + node.data.parent + "&album=" + node.data.path;
						window.open(link);
					break;
					case "favourite":
						console.log("TODO: fave this node");
					break;
				}
      }
    });
		
	});
//]]>
		</script>
		<title><?php if(Musicco::getConfig('appName') != null) print Musicco::getConfig('appName'); ?></title>
	</head>
	<body id="viewer">
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
		<!-- START: Modal Dialogues -->
		<div id="helpPanel" class="modal"><?php print getHelp(); ?></div>
		<div id="aboutPanel" class="modal"><?php print getAbout(); ?></div>
		<div id="sharing-banner" class="modal">
			<div id="shared-album-title" class="big"></div>
			<img id="shared-album-cover" class="boxed" src="app/apple-touch-icon.png" />
			<div>
				<input tabindex="-1" type="text" value="" class="shared-link fill" id="shared-album-link" />
					<button tabindex="-1" class="clip" data-clipboard-target="#shared-album-link">
						<i class="fa fa-clipboard"></i>
					</button>
			</div>
			<div id="shared-album-qr"></div>
		</div>
		<!-- END: Modal Dialogues -->
		<!-- START: header -->
		<div id="header" class="spread nowrap">
			<span>
			<i id="ham" class="fa fa-navicon fa-2x"></i>
			<span id="mini-controls" class="big-controls">
				<i class="big-jp-previous-album"></i>
				<i class="big-jp-previous fa fa-step-backward">&nbsp;</i>
				<i class="big-jp-play fa fa-play-circle-o">&nbsp;</i>
				<i class="big-jp-pause fa fa-pause-circle-o" style=" display: none;">&nbsp;</i>
				<i class="big-jp-next fa fa-step-forward">&nbsp;</i>
				<i class="big-jp-next-album">&nbsp;</i>
				&nbsp;
				&nbsp;
				<i class="uncover guestPlay toggles fa fa-bolt">&nbsp;</i>
				&nbsp;
				&nbsp;
				<i class="big-volume-down toggles fa fa-volume-down">&nbsp;</i>
				<i class="big-volume-down toggles fa fa-volume-up">&nbsp;</i>
			</span>
			</span>
			<span id="loadingInfo">
				<i class="fa fa-spin fa-music"></i><span>&nbsp;</span>
				<span id="toast_text"></span><span>&nbsp;</span>
				<i class="fa fa-spin fa-music"></i>
			</span>
			<?php
				if(AuthManager::isAccessAllowed() && AuthManager::isUserLoggedIn()) {
					print "<span id=\"logout\" class=\"right\"><a href=\"?logout\">".$this->getString("log_out")."</a></span>";
				}
			?> 
		</div>
		<!-- END: header -->
		<!-- START: Left Panel -->
		<div id="leftPanel">
			<ul>
				<li id="browserToggle"><a href="#browserPanel" class="guestPlay panelToggle fa fa-folder-open"></a></li>
				<li id="searchToggle"><a href="#searchPanel" class="guestPlay panelToggle fa fa-search"></a></li>
				<li id="playlistToggle"><a href="#playlistPanel" class="panelToggle fa fa-list"></a></li>
				<li id="infoToggle"><a href="#infoPanel" class="panelToggle fa fa-info-circle"></a></li>
				<li id="lyricsToggle"><a href="#lyricsPanel" class="panelToggle fa fa-microphone"></a></li>
				<li id="settingsToggle"><a href="#settingsPanel" class="panelToggle fa fa-gears"></a></li>
			</ul>
			<div id="browserPanel" class="panel guestPlay">
				<div class="table">
					<div id="filter">
						<input id="includeOlAdlbums" tabindex="0" type="checkbox" checked="true"/>
						<?php print $this->getString("show_all"); ?>
						<input type="text" id="filterText" tabindex="1" class="fill" name="filterText" />
						<a class="btn" id="filterButton" href="#"><i class="fa fa-border fa-close"></i></a>
					</div>
					<div id="library"></div>
				</div>
			</div>
			<div id="searchPanel" class="panel guestPlay">
				<form action="?" id="searchForm">
					<input id="searchText" type="text" class="fill" name="s" value="" placeholder="<?php print $this->getString("search_placeholder"); ?>" />
					<span class="right">
						<a class="btn" id="findIt" href="#"><i class="fa fa-border fa-search"></i></a>
						<a class="btn" id="clear" href="#"><i class="fa fa-border fa-close"></i></a>
					</span>
				</form>
				<div id="searchResults">&nbsp;</div>
			</div>
			<div id="playlistPanel" class="panel jp-playlist my-playlist">
				<ul>
					<li></li>
				</ul>
			</div>
			<div id="infoPanel" class="panel">
				<span id="wikiPrev"></span>
				<div id="infoPanelText"></div>
			</div>
			<div id="lyricsPanel" class="panel"></div>
			<div id="settingsPanel">
			<?php
			if (AuthManager::isAdmin()) {
				print "<div id=\"reset_db\" class=\"guestPlay\"><a>".$this->getString("reset_db")."</a></div>";
			}
			print "<div id=\"reload\"><a href=\"javascript:window.location.reload(true);\">".$this->getString("reload")."</a></div>";
			print "<div id=\"help\"><a>".$this->getString("help")."</a></div>";
			print "<div id=\"about\"><a>".$this->getString("about")."</a></div>";
			?>
			</div>
		</div>
		<!-- END: Left Panel -->
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
				<div id="big-timer" class="spread"></div>
				<div id="big-info">
					<div id="nowPlayingTitle" class="nowrap">&nbsp;</div>
					<div id="nowPlayingArtist" class="nowrap">&nbsp;</div>
					<div>
						<span id="nowPlayingAlbum" class="nowrap">&nbsp;</span>
						<span id="nowPlayingAlbumYear" class="nowrap">&nbsp;</span>
					</div>
				</div>
				<div id="playlist-controls" class="spread">
					<i id="big-mute" class="toggles jp-mute fa fa-volume-off fa-2x"></i>
						<i id="clear-playlist" class="guestPlay toggles fa fa-trash-o fa-2x"></i>
						<i class="guestPlay uncover toggles fa fa-bolt fa-2x"></i>
						<i id="big-shuffle" class="toggles touch-jp-shuffle fa fa-random fa-2x"></i>
						<i id="big-repeat" class="toggles touch-jp-repeat fa fa-repeat fa-2x"></i>
						<i class="big-volume-down toggles fa fa-volume-down fa-2x"></i>
						<i class="big-volume-up toggles fa fa-volume-up fa-2x"></i>
				</div>
				<div id="controls" class="spread big-controls">
					<i class="big-jp-previous-album"></i>
					<i class="left big-jp-previous fa fa-step-backward fa-2x"></i>
					<i class="big-jp-play fa fa-play-circle-o fa-5x"></i>
					<i class="big-jp-pause fa fa-pause-circle-o fa-5x" style=" display: none;"></i>
					<i class="right big-jp-next fa fa-step-forward fa-2x"></i>
					<i class="big-jp-next-album"></i>
				</div>
			</div>
		</div>
		<!-- END: big player -->
		<!-- START: JPlayerPlaylist -->
		<div class="jp-type-playlist" style="display: none;">
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
						<li><a class="jp-previous" tabindex="1"></a></li>
						<li><a class="jp-next" tabindex="1"></a></li>
					</ul>
					<ul class="jp-toggles">
						<li id="volume"><div class="jp-volume-bar"><div class="jp-volume-bar-value"></div></div></li>
						<li><div class="jp-current-time"></div><div class="jp-duration"></div></li>
						<li><a class="jp-mute" tabindex="1"></a></li>
						<li><a class="jp-unmute" tabindex="1"></a></li>
						<li><a class="jp-shuffle" tabindex="1"></a></li>
						<li><a class="jp-shuffle-off" tabindex="1"></a></li>
						<li><a class="jp-repeat" tabindex="1"></a></li>
						<li><a class="jp-repeat-off" tabindex="1"></a></li>
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
				$response = '{"song": "0" , "time": 0, "repeat": "false" ,"shuffle": "false" , "playlist": "[]"}';
			}
			logMessage("Loaded playlist for ".$user);
			return	print_r($response);
			exit;
	} elseif (isset($_POST['savePlaylist'])) {
			$user = $_POST['u'];
			$playlist = str_replace("\"", "\\\"", $_POST['p']);
			$current = $_POST['c'];
			$time = $_POST['t'];
			$loop = $_POST['l'];
			$shuffled = $_POST['s'];
			$save = "{\"current\": \"".$current."\" , \"time\": \"".$time."\" , \"loop\": \"".$loop."\" , \"shuffled\": \"".$shuffled."\" , \"playlist\": \"".$playlist."\"}";
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
	} elseif (isset($_GET['getAlbum'])) {
			$parent = $_GET['parent'];
			$album = $_GET['album'];
			$rootPath = realpath($parent.$album);
			
			$zip = new ZipArchive();
			$zip->open('./temp/'.$album.'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
			
			$files = new RecursiveIteratorIterator(
				new RecursiveDirectoryIterator($rootPath),
				RecursiveIteratorIterator::LEAVES_ONLY
			);

			foreach ($files as $name => $file) {
					if (!$file->isDir()) {
							$filePath = $file->getRealPath();
							$relativePath = substr($filePath, strlen($rootPath) + 1);
							$zip->addFile($filePath, $relativePath);
					}
			}
			$zip->close();
			$handle = fopen('./temp/'.$album.'.zip', "rb");
			header('Content-Type: application/zip, application/octet-stream');
			header('Content-Disposition: attachment;filename="'.$album.'.zip"');
			ob_end_clean();
			fpassthru($handle);
			fclose($handle);
			exit;
	} elseif (isset($_GET['getTrack'])) {
			//TODO: escape trck name so that Now that's what I call the 90s downloads fine
			$album = $_GET['album'];
			$track = $_GET['track'];
			$handle = fopen($album.$track, "rb");
			header('Content-Type: audio/mpeg');
			header('Content-Disposition: attachment;filename="'.$track.'"');
			ob_end_clean();
			fpassthru($handle);
			fclose($handle);
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
		$query = "SELECT name, type, parent, cover, album, artist, title, year, number, extension FROM item WHERE parent = \"$query_root\"  AND type NOT IN (".Musicco::TYPE_COVER.") ORDER BY type, name COLLATE NOCASE";
		break;
		case "queue":
		$query = "";
		if (preg_match("/.*\.mp3$/", $query_root)) {
			$query_root = explode("/", $query_root);
			$filename = $query_root[sizeOf($query_root)-1];
			$parent = "";
			for($i=0; $i<sizeOf($query_root)-1; $i++) {
				$parent.=$query_root[$i]."/";
			$query = "SELECT main.name, main.type, main.parent, (SELECT (parent || name) FROM item sub WHERE sub.parent = main.parent AND sub.type IN (".Musicco::TYPE_COVER.") LIMIT 1) as cover, main.album, main.artist, main.title, main.year, main.number, main.extension FROM item main WHERE main.parent = \"$parent\" AND main.name = \"$filename\"  AND main.type IN (".Musicco::TYPE_FILE.") ORDER BY main.parent, main.name COLLATE NOCASE";
			}
		} else {
			$query = "SELECT main.name, main.type, main.parent, (SELECT (parent || name) FROM item sub WHERE sub.parent = main.parent AND sub.type IN (".Musicco::TYPE_COVER.") LIMIT 1) as cover, main.album, main.artist, main.title, main.year, main.number, main.extension FROM item main WHERE main.parent LIKE \"$query_root%\"  AND main.type IN (".Musicco::TYPE_FILE.") ORDER BY main.parent, main.name COLLATE NOCASE";
		}
		break;
		case "search":
		$query = "SELECT name, type, parent, cover, album, artist, title, year, number, extension FROM item WHERE name LIKE \"%$query_root%\" AND type NOT IN (".Musicco::TYPE_COVER.") ORDER BY parent, name COLLATE NOCASE";
		break;
		case "uncover":
		$query = "SELECT name, type, parent, cover, album, artist, title, year, number, extension FROM item WHERE type IN (".Musicco::TYPE_FILE.") ORDER BY RANDOM() LIMIT ".Musicco::getConfig('uncover_limit');
		break;
		case "uncover_new":
		$query = "SELECT name, type, parent, cover, album, artist, title, year, number, extension FROM item WHERE parent LIKE '%".preg_replace(array("/_/", "/%/"), array("\_", "\%"), Musicco::getConfig('new_marker'))."%' ESCAPE '\' AND type IN (".Musicco::TYPE_FILE.") ORDER BY RANDOM() LIMIT ".Musicco::getConfig('uncover_limit');
		break;
		default:
		//exit;
	}

	$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
	$_START_QUERY = microtime(true);
	logMessage($query);
	$result = $db->query($query);
	$list = [];
	logMessage("Queried DB in ".number_format((microtime(true) - $_START_QUERY), 3)." seconds");
	$_START_DISPLAY = microtime(true);
	foreach($result as $row) {
		$name = $row['name'];
		$type = $row['type'];
		$parent = $row['parent'];
		$cover = ($row['cover'] == '')? "theme/images/cover.png" : $row['cover'];
		$album = $row['album'];
		$artist = $row['artist'];
		$title = $row['title'];
		$year = $row['year'];
		$number = $row['number'];
		$extension = $row['extension'];
		$folder = ($type == Musicco::TYPE_FOLDER)? true : false;
		$extraClasses = (preg_match("/".Musicco::getConfig('new_marker')."/", $name))? "current" : "treenode";
		$list[]= array(
							"title" => str_replace(Musicco::getConfig('new_marker'), "", $name),
							"path" => $name,
							"parent" => $parent,
							"type" => $type,
							"cover" => $cover,
							"album" => $album,
							"artist" => $artist,
							"songtitle" => $title,
							"year" => $year,
							"number" => $number,
							"extension" => $extension,
							//fancytree properties
							"folder" => $folder,
							"lazy" => $folder,
							"extraClasses" => $extraClasses
							);
		//logMessage("$name, $type, $parent, $cover, $album, $artist, $title, $year, $number, $extension, $folder, $extraClasses");
	}
	logMessage("Displayed Data in ".number_format((microtime(true) - $_START_DISPLAY), 3)." seconds");
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
		error_log(date('Y-m-d H:i:s').": ".$log_message."\n", 3, dirname(__FILE__).'/'.Musicco::getConfig('appName').'.log');
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
			$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');

			//create the database
			$db->exec("DELETE FROM item_tmp;");
			$db->exec("DELETE FROM data;");
			$db->exec("CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, type TEXT, parent TEXT, cover TEXT, album TEXT, artist TEXT, title TEXT, year TEXT, number TEXT, extension TEXT);");		
			$db->exec("CREATE TABLE item_tmp (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, type TEXT, parent TEXT, cover TEXT, album TEXT, artist TEXT, title TEXT, year TEXT, number TEXT, extension TEXT);");		
			$db->exec("CREATE TABLE data (key TEXT PRIMARY KEY, value TEXT);");
			$db->exec("INSERT INTO data (key, value) VALUES ('TYPE_FOLDER', ".Musicco::TYPE_FOLDER.");");
			$db->exec("INSERT INTO data (key, value) VALUES ('TYPE_FILE', ".Musicco::TYPE_FILE.");");
			$db->exec("INSERT INTO data (key, value) VALUES ('TYPE_COVER', ".Musicco::TYPE_COVER.");");
			$db->exec("INSERT INTO data (key, value) VALUES ('version', '".Musicco::getConfig('dbVersion')."');");

			$insert_item = $db->prepare('INSERT INTO item_tmp (name, type, parent, cover, album, artist, title, year, number, extension) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
			
			$_START_SCAN = microtime(true);
			$library = build_library($folder, ".mp3");
			logMessage("Scanned drive in ".number_format((microtime(true) - $_START_SCAN), 3)." seconds");

			$_START_INSERT = microtime(true);
			foreach ($library as $item) {
				$name= $item[0];
				$type= $item[1];
				$parent= $item[2];
				$cover= "";
				$album= "";
				$artist= "";
				$title= "";
				$year= "";
				$number= "";
				$extension= "";
			
				// compute year 
				$target =  ($type == Musicco::TYPE_FOLDER)? $name : $parent;
				if (preg_match(Musicco::getConfig('yearPattern'), $target, $year_matches)) {
					$year = $year_matches[1];
				}				

				// compute title and track info
				if ($type == Musicco::TYPE_FILE) {
					if (preg_match(Musicco::getConfig('filenamePattern'), $name, $filename_matches)) {
						$number = $filename_matches[1];
						$title = $filename_matches[3];
						$extension = $filename_matches[4];
					} else {
						$title = str_ireplace(" - ", " ", str_ireplace($artist, "", str_ireplace(".mp3", "", $name)));
					}
				} elseif ($type == Musicco::TYPE_FOLDER) {
					$title  = str_replace("[$year] ", "", str_replace(Musicco::getConfig('new_marker'), "", $name));
				}

				// compute album
				$exploded_parent = explode("/", $parent);
				
				$album_location = ($type == Musicco::TYPE_FOLDER)? 3 : 2;
				if (sizeOf($exploded_parent) - $album_location > 0) {
					$album = $exploded_parent[sizeOf($exploded_parent) - $album_location];
					$i=1;
					while(($i < sizeOf($exploded_parent)) && (preg_match(Musicco::getConfig('albumPattern'), $album))) {
						$i+=1;
						$album = $exploded_parent[$i];
					}
				} else {
					$album = $name;
				}
				$album = str_replace("[$year] ", "", $album);
				
				// compute artist
				$i=1;
				$artist = $exploded_parent[$i];
				while(($i < sizeOf($exploded_parent)) && (preg_match(Musicco::getConfig('artistPattern'), $artist))) {
					$i+=1;
					$artist = $exploded_parent[$i];
				}
				$artist = str_replace(Musicco::getConfig('new_marker'), "", $artist);

				// insert all info in DB
				$insert_item->execute(array($name, $type, $parent, $cover, $album, $artist, $title, $year, $number, $extension));
			}
			
			// Update non-temp tables and reindex the DB
			$db->exec("DELETE FROM item;");
			$db->exec("DROP INDEX item_idx;");
			$db->exec("DROP INDEX item_idx2;");
			$db->exec("DROP INDEX item_idx3;");
			$db->exec("INSERT INTO item (name, type, parent, cover, album, artist, title, year, number, extension) SELECT name, type, parent, cover, album, artist, title, year, number, extension FROM item_tmp;");
			$db->exec("CREATE UNIQUE INDEX IF NOT EXISTS item_idx ON item (parent, name);");
			$db->exec("CREATE UNIQUE INDEX IF NOT EXISTS item_idx2 ON item (parent, name, type);");
			$db->exec("CREATE UNIQUE INDEX IF NOT EXISTS item_idx3 ON item (name, type);");
			$db->exec("REINDEX item_idx;");
			$db->exec("REINDEX item_idx2;");
			$db->exec("REINDEX item_idx3;");
			$db->exec("DELETE FROM item_tmp;");

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
						$item[]=array($value, Musicco::TYPE_FOLDER, "$dir/");
						} else {
								if(is_song("$dir/$value")){
									$item[]=array($value, Musicco::TYPE_FILE, "$dir/");
								}
								if(is_cover("$dir/$value")){
									$item[]=array($value, Musicco::TYPE_COVER, "$dir/");
								}
							continue;}
						foreach(build_library("$dir/$value", $filter) as $value) {
							$item[]=$value; 
					}
				}
			return ($item);
	 }
	 
	 function is_song($file) {
		$song_pattern = "/.*.mp3/i";
		return (preg_match($song_pattern, $file));
	 }
	 
	 function is_cover($file) {
		$cover_pattern = "/".Musicco::getConfig('coverFileName')."\.(png|jpg|gif|jpeg)$/i";
		return (preg_match($cover_pattern, $file));
	 }
	 
	 // Finally, the contents of the help and about panels
	 function getHelp() {
		$helpString="<div id='helpBox'>";
		$helpString.="<div class='bold big'>Keyboard Shortcuts</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='yellow bold'>Playback</div>";
		$helpString.="<div>&larr;: previous track</div>";
		$helpString.="<div>&rarr;: next track</div>";
		$helpString.="<div>Shift + &larr;: previous album</div>";
		$helpString.="<div>Shift + &rarr;: next album</div>";
		$helpString.="<div>&uarr;: volume up</div>";
		$helpString.="<div>&darr;: volume down</div>";
		$helpString.="<div>&lt;space&gt;: play/pause</div>";
		$helpString.="<div>You can also use media keys on <br/>most multimedia keyboards</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='yellow bold'>Main</div>";
		$helpString.="<div class='guestPlay'>b: show browser</div>";
		$helpString.="<div class='guestPlay'>/: go to filter box in browser</div>";
		$helpString.="<div class='guestPlay'>s: show/ search</div>";
		$helpString.="<div>p: show playlist</div>";
		$helpString.="<div>i: show artist information</div>";
		$helpString.="<div>l: show lyrics</div>";
		$helpString.="<div class='guestPlay'>g: show settings</div>";
		$helpString.="<div>Esc: hide all panels</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='yellow bold'>Ninja</div>";
		$helpString.="<div>Shift + Uncover: add new albums to playlist</div>";
		$helpString.="<div>Alt + Uncover: play a random album from the playlist</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='guestPlay yellow bold'>Browser</div>";
		$helpString.="<div class='guestPlay'>j/k: highlight previous/next item</div>";
		$helpString.="<div class='guestPlay'>o: open current selection</div>";
		$helpString.="<div class='guestPlay'>a: queue current selection</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='yellow bold'>Find Out More at ";
		$helpString.="<a tabindex='-1' class='yellow' target='_blank' href='https://www.musicco.org/#features'>musicco.org</a></div>";
		
		
		$helpString.="</div>";
		return $helpString;
	 }
	 
		function getAbout() {
		$aboutString="<div id='aboutBox'>";
			$aboutString.="<div class='bold'><a tabindex='-1' target='_blank' href='//musicco.org'><img width='310px' height='310px' src='theme/images/about.png'/></a></div>";
			$aboutString.="<div class='bold big'><a tabindex='-1' target='_blank' href='//musicco.org'>musicco</a></div>";
			$aboutString.="<div class='bold'>A web based player for your music collection</div>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>musicco is a light-weight, web-based streaming music player for your local library</div>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>It runs easily on a NAS like a dns-323</div>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>It'll basically work wherever you can run php with sqlite and lighttpd</div>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>Modern desktop and mobile browsers love it!.</div>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>musicco is inspired by</div>";
			$aboutString.="<div><a tabindex='-1' target='_blank' href='//github.com/henrik242/musicbrowser#readme'>musicbrowser</a></div>";
			$aboutString.="<div>&#9834;</div>";
			$aboutString.="<div><a tabindex='-1' target='_blank' href='//encode-explorer.siineiolekala.net/'>Encode Explorer</a></div>";
			$aboutString.="<div>&#9834;</div>";
			$aboutString.="<div><a tabindex='-1' target='_blank' href='//coverart.katastrophos.net'>katastrophos.net's <br/> cover art downloader</a></div>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>musicco scans your music folder and builds a database of your music collection, retrieving missing cover art from <a tabindex='-1' target='_blank' href='//www.coverartarchive.org'>coverartarchive.org</a>, artist information from <a tabindex='-1' target='_blank' href='//".Musicco::getConfig('lang').".wikipedia.org/'>wikipedia.org</a>  and song lyrics from <a tabindex='-1' target='_blank' href='http://www.chartlyrics.com'>chartlyrics.com</a>. </div>";
			$aboutString.="<div>The audio player component uses <a tabindex='-1' target='_blank' href='//jplayer.org/'>jPlayer</a>.</div>";
			if (Musicco::getConfig('show_donate_button')) {
				$aboutString.="<div><br/></div>";
				$aboutString.="<div>Like musicco? Wanna buy me a beer?</div>";
				$aboutString.="<div><br/></div>";
				$aboutString.="<div>";
				$aboutString.="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'><input id='paypalCMD' type='hidden' name='cmd' value='_s-xclick'><input type='hidden' name='hosted_button_id' value='CWRGBQ6A65642'><input tabindex='-1' id='paypalIMG' type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif' border='0' name='submit'><img tabindex='-1' border='0' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' width='1' height='1'></form>";
				$aboutString.="</div>"; 
			}
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>Release History</div>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold'>2.0</div>";
				$aboutString.="<li>Refreshed UI</li>";
				$aboutString.="<li>Added support for rich notifications on Android using Media Session API</li>";
				$aboutString.="<li>Added play/pause and skip actions to desktop notification</li>";
				$aboutString.="<li>Improved webapp manifest so you can add musicco to your Android home screen</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold'>1.3</div>";
				$aboutString.="<li>Improved sharing banner to display more info</li>";
				$aboutString.="<li>Added a new template for square windows to highlight album art more</li>";
				$aboutString.="<li>Added seeking in current track with 1-9 keys</li>";
				$aboutString.="<li>Fixed playlist management issues when moving or deleting albums</li>";
				$aboutString.="<li>Made it possible to move albums to the beginning / end of the playlist with a shift-click</li>";
				$aboutString.="<li>Remove all previous albums with shift-click or all following albums with control-click</li>";
				$aboutString.="<li>Added keyboard support in search results</li>";
				$aboutString.="<li>Added search links when no artist or lyrics are found</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold'>1.2</div>";
				$aboutString.="<li>Removed Android client, work on making the player responsive instead</li>";
				$aboutString.="<li>Work on database performance </li>";
				$aboutString.="<li>Loading of .lrc files as long as they have the same name of the song currently playing</li>";
				$aboutString.="<li>Allow users to upload their own album covers for the currently playing song from the web player</li>";
				$aboutString.="<li>Reorder albums in the current playlist</li>";
				$aboutString.="<li>Allow sharing a link to an album to guest users</li>";
				$aboutString.="<li>New default theme</li>";
				$aboutString.="<li>Improved artist info from Wikipedia</li>";
				$aboutString.="<li>Use auth tokens for logging in instead of credentials</li>";
				$aboutString.="<li>More pattern configuration options for more custom library tree structures</li>";
				$aboutString.="<li>Shift-click previous/next buttons (or shift-use arrow keys) to skip to the next album in the playlist</li>";
				$aboutString.="<li>Added search links when no artist or lyrics are found</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold'>1.1</div>";
				$aboutString.="<li>Android client and under-the-hood improvements to suppport it</li>";
				$aboutString.="<li>Added configuration option for cover name and log file</li>";
				$aboutString.="<li>Improved playlist panel</li>";
				$aboutString.="<li>Fixed download option for administrators in the playlist and the browser panels</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold'>1.0.3</div>";
				$aboutString.="<li>More elegant management of the Fetch Cover button to provide more information about the cover fetching progress</li>";
				$aboutString.="<li>Nicer playlist screen that groups tracks by album</li>";
				$aboutString.="<li>Upgraded to jplayer 2.4.0/JQuery 2.0.3 and adapted the CSS for better display on mobile screens with a 320x480 resolutions</li>";
				$aboutString.="<li>HTML notifications are working again in this version, and keyboard actions are improved as a result</li>";
				$aboutString.="<li>New feature <i>Uncover!</i> adds 5 random albums to your playlist</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold'>1.0.2</div>";
				$aboutString.="<li>Fixed minor display bugs introduced by 1.0.1 with z-index management</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold'>1.0.1</div>";
				$aboutString.="<li>Improved cover management when downloading from cover art provider</li>";
				$aboutString.="<li>Added a button to manually fetch a cover</li>";
				$aboutString.="<li>Improved artist information panel and added an icon to indicate that some information is still being loaded from the server</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold'>1.0</div>";
				$aboutString.="<li>Initial release</li>";
			$aboutString.="</ul>";
		$aboutString.="</div>";
		return $aboutString;
	 }
?>