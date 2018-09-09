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

// The name of the folder containing temp files.
// Default: $_CONFIG['tempFolder'] = "temp";
$_CONFIG['tempFolder'] = "temp";

// The name to use for a user's default playlist
// Default: $_CONFIG['defaultPlaylist'] = "Now Playing";
$_CONFIG['defaultPlaylist'] = "Now Playing";

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

// The search engine to use to search for more
// information about artists and lyrics
// Default: $_CONFIG['searchEngine'] = "https://duckduckgo.com/?q=";
// You could also try: $_CONFIG['searchEngine'] = "https://google.com/search?q=";
$_CONFIG['searchEngine'] = "https://duckduckgo.com/?q=";

// The search engine to use to search for covers
// when none could be found automatically
// Default: $_CONFIG['imageSearchEngine'] = "https://duckduckgo.com/?t=hf&iar=images&iaf=size%3Aimagesize-wallpaper&iax=images&ia=images&q=";
// You could also try: $_CONFIG['imageSearchEngine'] = "https://www.google.com/search?tbm=isch&tbs=imgo:1,isz:l&q=";
$_CONFIG['imageSearchEngine'] = "https://duckduckgo.com/?t=hf&iar=images&iaf=size%3Aimagesize-wallpaper&iax=images&ia=images&q=";

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
// file for debugging. Logs are written
// in $_CONFIG['appName'].log
// next to index.php
// Default: $_CONFIG['debug_queries'] = false;
$_CONFIG['debug_queries'] = false;

// Whether or not to log extra 
// debug informationfile for debugging. Logs are written
// in $_CONFIG['appName'].log
// next to index.php
// Default: $_CONFIG['debug_stack'] = false;
$_CONFIG['debug_stack'] = false;


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
// losing your personalised settings. If the file does not exist, you'll see a
// short installation wizard that will create it automatically.
if(!file_exists('config.php') && !isset($_POST['saveConfig'])) {
		runSetupWizard();
		exit;
} elseif (isset($_POST['saveConfig'])) {
	debugMessage("REQUEST ".print_r($_REQUEST, TRUE));
	saveConfig($_POST);
}
include 'config.php';


/***************************************************************************/
/*	 TRANSLATIONS.																												 */
/***************************************************************************/

$_TRANSLATIONS = array();

// English
$_TRANSLATIONS["en"] = array(
	"..." => "...",
	"about" => "about",
	"album_sharing" => "Some music for you to try on " . Musicco::getConfig('appName'),
	"by" => " by ",
	"clickToUploadYourOwn" => "upload", 
	"background" => "Background",
	"colours" => "Theme",
	"defaultCoverURL" => "http://",
	"downloadSuccessful" => "album art saved",
	"favourites_added" => "Adding favourite...",
	"favourites_removed" => "Removing favourite...",
	"fetchedAlbumArt" => "album art fetched",
	"fetchingAlbumArt" => "fetching album art...",
	"genius" => "genius ",
	"google" => "the web",
	"help" => "help",
	"lastfm" => "last.fm ",
	"libraryRebuiltIn" => "library updated in ",
	"log_in" => "Log in",
	"log_out" => "log out",
	"menu_download" => "Download",
	"menu_favourite" => "Favourite",
	"menu_goto_album" => "Find album",
	"menu_goto_artist" => "Browse artist",
	"menu_info" => "Info",
	"menu_last_album" => "Play last",
	"menu_next_album" => "Play next",
	"menu_play_before" => "Play before",
	"menu_next_track" => "next track",
	"menu_remove_favourite" => "Remove",
	"menu_right_now" => "Play",
	"menu_share" => "Share",
	"my_favourites" => "My Favourites",
	"nexttrack" => "Next",
	"noAlbum" => "album not recognised",
	"noAlbumArt" => "no album art found", 
	"nodata" => "I did not find anything! :-o",
	"noInfoFoundFor" => "No information found about ",
	"noLyricsFoundFor" => "No lyrics found for ",
	"noResultsForThisSearch" => "No results for this search",
	"notDownloaded" => "Could not download your album art",
	"opening" => "Opening ",
	"or" => "or ",
	"password" => "Password",
	"pause" => "Pause", 
	"play" => "Play", 
	"previoustrack" => "Previous",
	"promptCoverURL" => "Album art URL", 
	"promptPlaylistName" => "New Playlist Name", 
	"promptFolderName" => "Folder name", 
	"queueing" => "Queueing ",
	"quick_scan" => "quick scan folder",
	"rebuildingLibrary" => "library refreshing...",
	"reload" => "reload",
	"remove_shared_links" => "delete shared playlists",
	"remove_temp_files" => "clean temp folder",
	"removing_shared_links" => "deleting shared playlists...",
	"removing_temp_files" => "cleaning in progress...",
	"reset_db" => "update library",
	"scanning" => "Scanning ",
	"scanning_ko" => "Scanning failed",
	"scanning_ok" => "Folder scanned successfully",
	"search" => "Search ",
	"search_placeholder" => "What are you looking for?",
	"searchingFor" => "Searching for ",
	"searchingLibrary" => "Searching library...",
	"searchingLyricsFor" => "Searching lyrics for ",
	"searchOne" => "&nbsp;&bull;&nbsp;search&nbsp;&bull;&nbsp;", 
	"seekbackward" => "Previous Album",
	"seekforward" => "Next Album",
	"show_all" => "show old",
	"text" => "Text",
	"uncovering" => "Uncovering gems ",
	"updateCoverArt" => "update album art",
	"username" => "Username",
	"wrong_pass" => "Wrong username or password",
);


// French
$_TRANSLATIONS["fr"] = array(
	"..." => "...",
	"about" => "info",
	"album_sharing" => "Un peu de musique pour toi sur " . Musicco::getConfig('appName'),
	"by" => " par ",
	"clickToUploadYourOwn" => "charger", 
	"background" => "Arri&egrave;re plan",
	"colours" => "Th&egrave;",
	"defaultCoverURL" => "http://",
	"downloadSuccessful" => "Couverture sauvegardée",
	"favourites_added" => "Favouris ajouté",
	"favourites_removed" => "Favouris retiré",
	"fetchedAlbumArt" => "couverture mise à jour",
	"fetchingAlbumArt" => "téléchargement de la couverture en cours...",
	"genius" => "genius ",
	"google" => "le web",
	"help" => "aide",
	"lastfm" => "last.fm ",
	"libraryRebuiltIn" => "discothèque rafraichie en ",
	"log_in" => "Connexion",
	"log_out" => "déconnexion",
	"menu_download" => "Télécharger",
	"menu_favourite" => "Favori",
	"menu_goto_album" => "Trouver l'album",
	"menu_goto_artist" => "Voir l'artiste",
	"menu_info" => "Info",
	"menu_last_album" => "Jouer en dernier",
	"menu_next_album" => "Jouer après",
	"menu_play_before" => "Jouer avant",
	"menu_next_track" => "piste suivante",
	"menu_remove_favourite" => "Retirer",
	"menu_right_now" => "Jouer",
	"menu_share" => "Partager",
	"my_favourites" => "Mes Favouris",
	"nexttrack" => "Suivant",
	"noAlbum" => "album non reconnu",
	"noAlbumArt" => "Pas de couverture trouvée",
	"nodata" => "Aucun résultat! :-o",
	"noInfoFoundFor" => "Pas d'information sur ",
	"noLyricsFoundFor" => "Aucune paroles trouvées pour ",
	"noResultsForThisSearch" => "Pas de résultats pour cette recherche",
	"notDownloaded" => "Couverture non téléchargeable",
	"opening" => "Overture de ",
	"or" => "ou ",
	"password" => "Mot de passe",
	"pause" => "Pause", 
	"play" => "Lecture", 
	"previoustrack" => "Précédent",
	"promptCoverURL" => "Adresse de la couverture", 
	"promptPlaylistName" => "Nom de la playlist", 
	"promptFolderName" => "Nome du dossier", 
	"queueing" => "Ajout de ",
	"quick_scan" => "ajout rapide...",
	"rebuildingLibrary" => "scan en cours...",
	"reload" => "recharger",
	"remove_shared_links" => "supprimer les playlists partagées",
	"remove_temp_files" => "supprimer les fichiers temporaires",
	"removing_shared_links" => "suppression des playlists partagées...",
	"removing_temp_files" => "cleaning in progress",
	"reset_db" => "rafraichir la discothèque",
	"scanning" => "Scan de ",
	"scanning_ko" => "échec du scan",
	"scanning_ok" => "Dossier ajouté",
	"search" => "Chercher sur ",
	"search_placeholder" => "Que cherchez-vous ?",
	"searchingFor" => "Recherche de ",
	"searchingLibrary" => "Recherche en cours...",
	"searchingLyricsFor" => "Recherche de paroles en cours pour ",
	"searchOne" => "&nbsp;&bull;&nbsp;rechercher&nbsp;&bull;&nbsp;", 
	"seekbackward" => "Album précédent",
	"seekforward" => "Album suivant",
	"show_all" => "anciens",
	"text" => "Texte",
	"uncovering" => "Découverte en cours ",
	"updateCoverArt" => "mettre à jour la couverture",
	"username" => "Utilisateur",
	"wrong_pass" => "Utilisateur ou mot de passe invalide."
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
			unset($_SESSION['musicco_user_name']);
			unset($_SESSION['musicco_user_pass']);
			unset($_SESSION['musicco_guest_play']);
		} elseif ((isset($_GET['guestPlay'])) && (isset($_GET['u']))) {
			$_SESSION['musicco_user_name'] = $_GET['u'];
			$_SESSION['musicco_guest_play'] = true;
			logMessage("Guest Play requested for user ".AuthManager::getUserName());
		} elseif (isset($_GET['creds'])) {
			$auth_token = $_GET['creds'];
			unset($_SESSION['musicco_user_name']);
			unset($_SESSION['musicco_user_pass']);
			foreach(Musicco::getConfig("users") as $user) {
				if(hash("md5", $user[0].$user[1].$user[2]) == $auth_token) {
					logMessage("user $user[0] logged in using an auth token");
					$_SESSION['musicco_user_name'] = $user[0];
					$_SESSION['musicco_user_pass'] = $user[1];
				}
			}
		} else {
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

function runSetupWizard() {
	debugMessage(__FUNCTION__);
	echo getWizardUI();
}

function saveConfig($params) {
	debugMessage(__FUNCTION__);
	$config_file = fopen("config.php", "w");
	fwrite($config_file, "<?php\n");
	foreach($params as $key => $value) {
		$apos= "'";
		if ($key == "users") {
			$apos = "";
		}
		$config = "\$_CONFIG['".$key."'] = $apos".$value."$apos;\n";
		fwrite($config_file, $config);
	}
	fwrite($config_file, "?>");
	fclose($config_file);
}

class Musicco {
	var $lang;
	const TYPE_FOLDER = 1;
	const TYPE_FILE = 2;
	const TYPE_COVER = 3;

	function init() {
		debugMessage(__FUNCTION__);
		if (!file_exists(Musicco::getConfig('musicRoot').".db")) {
			initDB();
		}
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

	function run() {
		$this->outputHtml();
	}
	
	public function printLoginBox() {
		?>
		<div class="landing">
			<div class="landing-header">
				<img src="theme/images/about.svg"/><?php print(Musicco::getConfig("appName")); ?>
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
						<input type="text" name="user_name" placeholder="<?php print $this->getString("username"); ?>" value="" id="user_name" class="landing-form"/>
					</div>
					<?php 
				}
				?>
				<div>
					<input type="password" placeholder="<?php print $this->getString("password"); ?>" name="user_pass" id="user_pass" class="landing-form" />
				</div>
				<div>
					<input type="submit" value="<?php print $this->getString("log_in"); ?>" class="go" />
				</div>
				</form>
			</div>
			<?php 
		}
	}

	function outputHtml() {
		global $_ERROR;
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $this->getConfig('lang'); ?>" lang="<?php print $this->getConfig('lang'); ?>">
	<head>
		<!-- styles for playlist debugging -->
		<!--
		<style>
			.previousAlbum { border-right: 1px red dashed; }
			.previousTrack { color: red; }
			.currentAlbum { border-right: 1px #E3E5BB dashed; }
			.nextTrack { color: green; }
			.nextAlbum { border-right: 1px green dashed; }
		</style>
		-->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/all.min.css">
		<link rel="stylesheet" type="text/css" href='//fonts.googleapis.com/css?family=Montserrat' >
		<link rel="stylesheet" type="text/css" href="lib/jquery-ui/jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="lib/fancytree/skin-awesome/ui.fancytree.min.css">
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
		<script type="text/javascript" src="lib/jquery/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" defer src="lib/jquery-ui/jquery-ui.min.js"></script>
		<script type="text/javascript" defer src="lib/jquery-ui-contextmenu/jquery.ui-contextmenu.min.js"></script>
		<script type="text/javascript" defer src="lib/js-cookie/js.cookie-2.2.0.min.js"></script>
		<script type="text/javascript" defer src="lib/fancytree/jquery.fancytree-all.min.js"></script>
		<script type="text/javascript" defer src="lib/jquery-qrcode/jquery.qrcode.min.js"></script>
		<script type="text/javascript" defer src="lib/clipboard.js/clipboard.min.js"></script>
		<script type="text/javascript" defer src="lib/swipe/swipe.js"></script>
		<script type="text/javascript" defer src="lib/normalise/normalise.js"></script>
		<script type="text/javascript">
				///////////////
			 // VARIABLES //
			///////////////

			var viewerType = '';
			var windowWidth = '';
			var timeUpdates = true;

			var Insert = Object.freeze({"top": 0, "last": 1, "next": 2, "now": 3});

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
					switch (e.data) {
							case "play":
								triggerPlayPause();
							break;
							case "pause":
								triggerPlayPause();
							break;
							case "nexttrack":
								playTrack(nextTrack);
							break;
					}
				};
			}

			var draggedElement;
			var nowPlaying = {};
			var playerConfig = {loop: false, shuffled: false};
			var previousTrack = null;
			var nextTrack = null;
			var currentAlbum = null;
			var previousAlbum = null;
			var nextAlbum = null;
			var player = new Audio();
			player.autoplay = false;

			var albumProps = ["cover", "year", "artist", "album", "parent"];

			var userIsStillTyping = false;
			var menuOptions = [
				{title: "<?php print $this->getString("menu_right_now"); ?>", uiIcon: "fas fa-play", cmd: "playRightNow"},
				{title: "<?php print $this->getString("menu_next_album"); ?>", uiIcon: "fa-play-next", cmd: "playAsNextAlbum"},
				{title: "<?php print $this->getString("menu_play_before"); ?>", uiIcon: "fa-play-before", cmd: "playBefore"},
				{title: "<?php print $this->getString("menu_last_album"); ?>", uiIcon: "fa-play-last", cmd: "queue"},
				{title: "<?php print $this->getString("menu_goto_artist"); ?>", cmd: "goto_artist", uiIcon: "far fa-user"},
				{title: "<?php print $this->getString("menu_info"); ?>", cmd: "info", uiIcon: "fas fa-info-circle"},
				{title: "<?php print $this->getString("menu_download"); ?>", cmd: "download", uiIcon: "fas fa-download"},
				{title: "<?php print $this->getString("menu_download"); ?>", cmd: "downloadAlbum", uiIcon: "fas fa-download"},
				{title: "<?php print $this->getString("menu_share"); ?>", cmd: "share", uiIcon: "fas fa-external-link-alt"},
				{title: "<?php print $this->getString("menu_favourite"); ?>", cmd: "favourite", uiIcon: "fas fa-heart"},
				{title: "<?php print $this->getString("menu_remove_favourite"); ?>", cmd: "removeFavourite", uiIcon: "fas fa-times"}
			];

			var customTreeIcons = { 
				preset: "awesome5",
				map: {
					doc: "fas fa-music",
					docOpen: "fas fa-music",
					expanderClosed: "fas fa-angle-right",
					expanderOpen: "fas fa-angle-down"
				}
			};

			var fetchStatus = "<?php print $this->getString("updateCoverArt"); ?>"
			var wikiHistory = [];
			var wikiHistoryPos = -1;
			var musicRoot = "<?php print Musicco::getConfig('musicRoot'); ?>/";

			  ////////////
			 // Events //
			///////////

			player.onplay = function() {
				updatePlayerUI();
			}

			player.onpause =  function() {
				$('.big-jp-play').show();
				$('.big-jp-pause').hide();
				savePlaylist();
			}

			player.onended = function() { 
				if (playerConfig["shuffled"]) {
					playRandomTrack();
				} else if ( (playerConfig["loop"] == false) && ($(nextTrack).index("#playlist li[data-nature=track]") == 0) ){
					resetPlayer();
				} else {
					playTrack(nextTrack);
				}
			};

			player.ondurationchange = function() {
				var duration = player.duration;
				$("#duration").html(getDuration(duration));
				$("#big-jp-progress").slider( "option", "max", parseInt(duration) );
			}

			player.ontimeupdate = function() {
				var currentTime = player.currentTime;
				$("#current_time").html(getDuration(currentTime));
				if (timeUpdates) {
					$("#big-jp-progress").slider( "option", "value", parseInt(currentTime) );
				}
			}

			////////////////
			// Functions //
			//////////////

			function setColour(e) {
				document.documentElement.style.setProperty("--" + this.id, this.value);
				document.documentElement.style.setProperty("--" + this.id + "-highlight", increase_brightness(this.value, (this.id == "background")? 10: 80));
			}

			function increase_brightness(hex, percent){
					hex = hex.replace(/^\s*#|\s*$/g, '');
					if(hex.length == 3){
							hex = hex.replace(/(.)/g, '$1$1');
					}
					var r = parseInt(hex.substr(0, 2), 16),
							g = parseInt(hex.substr(2, 2), 16),
							b = parseInt(hex.substr(4, 2), 16);
					return '#' +
						 ((0|(1<<8) + r + (256 - r) * percent / 100).toString(16)).substr(1) +
						 ((0|(1<<8) + g + (256 - g) * percent / 100).toString(16)).substr(1) +
						 ((0|(1<<8) + b + (256 - b) * percent / 100).toString(16)).substr(1);
			}

			function isPortrait() {
				return (viewerType === '"tall"') || (viewerType === '"square"');
			}

			function isMedium() {
				return (viewerType === '"medium"');
			}

			function isWidescreen() {
				return (viewerType === '"widescreen"');
			}

			function setCurrentTime(time) {
				player.currentTime = time;
			}

			function volumeUp() {
			$("#big-volume-bar").slider("value", $("#big-volume-bar").slider("option", "value") + 10);
			}

			function volumeDown() {
			$("#big-volume-bar").slider("value", $("#big-volume-bar").slider("option", "value") - 10);
			}

			function setVolume(volume) {
				$("#big-volume-bar").addClass("hovered").delay(1000).queue(function(n) { $("#big-volume-bar").removeClass("hovered"); n();});
				player.volume = volume;
			}

			function hideSpinner() {
				$("#playlistSpinner").hide();
				$("#playlist").fadeTo("fast", 1);
			}

			function showSpinner() {
				$("#playlistPanel").scrollTop(0);
				$("#playlistSpinner").show();
				$("#playlist").fadeTo(0, 0);
			}

			function isBefore(el1, el2) {
				if (el2.parentNode === el1.parentNode) {
					for (var cur = el1.previousSibling; cur; cur = cur.previousSibling)
						if (cur === el2) {
							return true;
						}
					return false;
				}
			}

			function hasPlaylist() {
				return ($("#playlist li").length > 0)
			}

			function resetPlayer() {
				player.pause();
				player.src = "";
				$("#big-cover").css("background-image", "url(theme/images/about.svg)");
				$("#nowPlaying_songtitle, #nowPlaying_artist, #nowPlaying_album, #nowPlaying_year").html("");
				$("#duration, #current_time").html("00:00");
			}

			function loadTrack(trackNumber) {
				var track = $("#playlist li[data-nature=track]:eq(" + Math.max(trackNumber, 0) + ")");
				$("#playlist li").removeClass("currentTrack currentAlbum previousAlbum previousTrack nextTrack nextAlbum ");
				$(track).addClass("currentTrack");
				$.each($(track).data(), function(key, value) { nowPlaying[key] = value; });
				player.src = encodeURIComponent($(track).data("parent") + $(track).data("path"));
				refreshPlaylist();
			}

			function playTrack(track) {
				var trackNumber = $(track).index("#playlist li[data-nature=track]");
				loadTrack(trackNumber);
				player.play();
			}

			function playRandomTrack() {
				var currentTrack = Math.max($(".currentTrack").index("#playlist li[data-nature=track]"), 0);
				var randomTrack = currentTrack;
				while (randomTrack == currentTrack) {
					randomTrack = Math.floor(Math.random() * $('#playlist li[data-nature=track]').length);
				}
				playTrack($('#playlist li[data-nature=track]:eq(' + randomTrack + ')'));
			}

			function playRandomAlbum() {
				if ($('#playlist > li').length) {
					var currentAlbum = Math.max($("#playlist > li.currentAlbum").index(), 0);
					var randomAlbum = currentAlbum;
					while (randomAlbum == currentAlbum) {
						randomAlbum = Math.floor(Math.random() * $('#playlist > li').length);
					}
					playTrack($('#playlist > li:eq(' + randomAlbum + ')').find("li").first());
				}
			}

			var refreshPlaylist = function(mutationsList) {
				$("#playlist li").removeClass("previousAlbum previousTrack currentAlbum nextTrack nextAlbum ");
				$(".move-up, .move-down").show();
				$("#playlist > li:first .move-up, #playlist > li:last .move-down").hide();
				$("#playlist").find("li").each(function() {
					$(this).on("dragstart", function() { dragStart(event) });
				});
				var track = $("#playlist li.currentTrack");
				if (track.length) {
					previousAlbum = $(track).parents("li").prev();
					previousTrack = $(track).prev("li");
					currentAlbum =  $(track).parents("li");
					nextTrack = $(track).next("li");
					nextAlbum = $(track).parents("li").next();
					if (nextAlbum.length == 0) {
						nextAlbum = $("#playlist > li").first();
					}
					if (previousAlbum.length == 0) {
						previousAlbum = $("#playlist > li").last();
					}
					if (nextTrack.length == 0) {
						nextTrack = $(nextAlbum).find("li").first();
					}
					if (previousTrack.length == 0) {
						previousTrack = $(previousAlbum).find("li").last();
					}
					$(previousAlbum).addClass("previousAlbum");
					$(previousTrack).addClass("previousTrack");
					$(currentAlbum).addClass("currentAlbum");
					$(nextTrack).addClass("nextTrack");
					$(nextAlbum).addClass("nextAlbum");
					//TODO: preloading tracks is blocking the client
					//var tracks = [ $(previousTrack).data("parent") + $(previousTrack).data("path"),  $(nextTrack).data("parent") + $(nextTrack).data("path") ];
					//postMessage({command: "preload", tracks: tracks});
				}
			}

			function restorePanel() {
				var panel = ($(".panel[class~='shown']").not("[class*='default']"));
				if (panel.length) {
					$("#leftPanel").show();
					$(".panelToggle[href='" + "#" + panel + "']").trigger("click");
					if (isPortrait()) {
						$(".default").removeClass("default");
					}
				} else {
					if (!isPortrait()) {
						forcePanel("#playlistPanel");
					}
					if (isWidescreen()) {
						forcePanel("#browserPanel");
						var activeTab = isGuestPlay()? 3 : 0;
						$("#leftPanel").tabs("option", "active", activeTab);
					}
					if (isMedium()) {
						showPanel("#playlistPanel");
					} 
				}
			}

			function groupBy(xs, key) {
				return xs.reduce(function(rv, x) {
					(rv[x[key]] = rv[x[key]] || []).push(x);
					return rv;
				}, {});
			};

			function queueMusic(query, loadingInfo, insert) {
				var playAfter = !hasPlaylist();
				showLoadingInfo("<?php print $this->getString("queueing"); ?>" + loadingInfo.replace("/",""));
				$.post('?', {querydb: '', root: query, type: "queue"}, function (response) {
						if (response != null) {
							var tracksArray = groupBy(response, "album");
							switch (insert) {
								case Insert.top:
									insertFirst(tracksArray);
								break;
								case Insert.last:
									insertLast(tracksArray);
								break;
								case Insert.next:
									insertAfter(tracksArray);
								break;
								case Insert.before:
									insertBefore(tracksArray);
								break;
							}
						}
					if (playAfter) {
						playTrack($("#playlist").find("li[data-nature=track]").first());
					}
					savePlaylist();
				}, "json");
			}

			function filterTree() {
				//var start = Date.now();
				var filterText = normalise($("#filterText").val().toLowerCase());
				var isNew = new RegExp("<?php print $this->getConfig('new_marker'); ?>", "i");
				var isMatching = new RegExp(filterText, "i");
				var tree = $("#library").fancytree("getTree");
				if ($("#includeOldAlbums").is(':checked')) {
					tree.filterBranches(function(node) {
						return isMatching.test(normalise(node.data.path));
					});
				} else {
					tree.filterBranches(function(node) {
						return isNew.test(node.data.path) && isMatching.test(normalise(node.data.path));
					});
				}
				//console.log(Date.now() - start);
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
				// 84: t
				// 72: h
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
				var inputIsFocused = $("input").is(":focus");
				var treeIsFocused = (($("#library,#favourites").find(":focus")).length > 0) && $(".fancytree-container").hasClass("fancytree-treefocus");
				var tabIsFocused = $(document.activeElement).hasClass("ui-tabs-tab");
				var menuIsFocused = $(".ui-contextmenu").is(":focus");
				var node = treeIsFocused? $("#library").fancytree("getActiveNode") : null;
				var customKeyEvents = [];
				if (inputIsFocused) {
					customKeyEvents.push(27);
				} else if (treeIsFocused) {
					customKeyEvents.push(27, 191, 65, 73);
				} else if (menuIsFocused || tabIsFocused) {
					//no keys intercepted on context menu
				} else {
					customKeyEvents.push(13, 27, 32, 37, 38, 39, 40, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 65, 66, 71, 72, 73, 76, 80, 83, 84, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 174, 174, 175, 177, 177, 178, 179, 191, 223);
				}
				
				if (customKeyEvents.indexOf(e.keyCode) > -1) {
					switch (e.keyCode) {
						case 13: //enter
							if ($(".hits a").is(':focus')) {
								$(".hits a:focus").trigger('mouseup');
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
							volumeUp();
						break;
						
						case 40: //down arrow
						case 174: //media volume down
							volumeDown();
						break;
					
						case 37: //left arrow
						case 177: //media previous
							if (playerConfig["shuffled"]) {
								playRandomTrack();
							} else {
								if (e.shiftKey) {
									playTrack($(previousAlbum).find("li").first())
								} else {
									playTrack(previousTrack);
								}
							}
						break;
					
						case 39: //right arrow
						case 176: //media next
							if (playerConfig["shuffled"]) {
								playRandomTrack();
							} else {
							 if (e.shiftKey) {
									playTrack($(nextAlbum).find("li").first())
							 } else {
								playTrack(nextTrack);
							 }
						 }
						break;

						case 66: //b
							if (!isGuestPlay()){	
								 togglePanel("#browserPanel");
								$("#library").fancytree("getTree").getFirstChild().setActive();
							}
						break;

						case	72: // h
							showHelp();
						break;

						case	191: // /
							if (!isGuestPlay()) {
								 togglePanel("#browserPanel");
								 $('#filterText').select();
								 $('#filterText').focus();
							}
						break;

						case 65: //a
							if (treeIsFocused) {
								var slash = node.isFolder()? "/": "" ;
								queueMusic(node.data.parent + node.data.path + slash, node.data.songtitle, Insert.last);
							}
						break;

						case 84: //t
							$(".ui-tabs-active").focus();
						break;

						case 83: //s
							if (!isGuestPlay()){
								 if ($('#searchPanel').is(':hidden')) {
									togglePanel("#searchPanel");
								 }
								 $('#searchText').select();
								 $('#searchText').focus();
							} 
						break;
							
						case 80: //p
							 if (!isWidescreen()) {
								togglePanel("#playlistPanel");
							 }
						break;

						case 73: //i
						 if (e.ctrlKey && e.altKey) {
						 } else {
							if (treeIsFocused) { 
								displayInfo(node.data.songtitle);
							} else {
								togglePanel("#infoPanel");
							}
						 }
						break;

						case 76: //l
						 togglePanel("#lyricsPanel");
						break;
						
						case 71: //g
						 if (e.ctrlKey) {
						 } else {
							togglePanel("#settingsPanel");
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
								jump((e.keyCode - 96) / 10);
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

			function jump(percent) {
				setCurrentTime(player.duration * percent);
			}

			function displayInfo(query) {
				updateInfoPanel(wikiLink(query), query, true, true);
			}

			function setMenuEntries(isFolder, target) {
				 $(target).contextmenu("replaceMenu", menuOptions);
				 var playRightNow = !hasPlaylist();
				 var queue = hasPlaylist();
				 var playAsNextAlbum = hasPlaylist();
				 var playBefore = hasPlaylist();
				 var goto_artist = ($(target).get(0) === $("#searchPanel").get(0));
				 var download = (!isFolder && <?php print (AuthManager::isAdmin()?"true":"false"); ?>);
				 var downloadAlbum = (isFolder && <?php print (AuthManager::isAdmin()?"true":"false"); ?>);
				 var removeFavourite = ($(target).get(0) === $("#favourites").get(0));
				 var favourite = !removeFavourite;
				 $(target).contextmenu("updateEntry", "playRightNow", {setClass: playRightNow.toString()});
				 $(target).contextmenu("updateEntry", "queue", {setClass: queue.toString()});
				 $(target).contextmenu("updateEntry", "playAsNextAlbum", {setClass: playAsNextAlbum.toString()});
				 $(target).contextmenu("updateEntry", "playBefore", {setClass: playBefore.toString()});
				 $(target).contextmenu("updateEntry", "goto_artist", {setClass: goto_artist.toString()});
				 $(target).contextmenu("updateEntry", "download", {setClass: download.toString()});
				 $(target).contextmenu("updateEntry", "downloadAlbum", {setClass: downloadAlbum.toString()});
				 $(target).contextmenu("updateEntry", "favourite", {setClass: favourite.toString()});
				 $(target).contextmenu("updateEntry", "removeFavourite", {setClass: removeFavourite.toString()});
				 $(".ui-menu .false").remove();
			}

			function handleMenuSelection(node, command) {
				switch (command) {
					case "info":
						var query = node.data.songtitle;
						displayInfo(query);
					break;
					case "queue":
						var slash = node.isFolder()? "/": "" ;
						queueMusic(node.data.parent + node.data.path + slash, node.data.songtitle, Insert.last);
					break;
					case "playRightNow":
						var slash = node.isFolder()? "/": "" ;
						queueMusic(node.data.parent + node.data.path + slash, node.data.songtitle, Insert.top);
					break;
					case "playAsNextAlbum":
						var slash = node.isFolder()? "/": "" ;
						queueMusic(node.data.parent + node.data.path + slash, node.data.songtitle, Insert.next);
					break;
					case "playBefore":
						var slash = node.isFolder()? "/": "" ;
						queueMusic(node.data.parent + node.data.path + slash, node.data.songtitle, Insert.before);
					break;
					case "goto_artist":
						goToArtist(node.data.artist);
					break;
					case "share": 
						var path = node.data.parent + node.data.path;
						var separator = (node.data.artist == '')? "" : " - ";
						var info = node.data.artist + separator + node.title;
						var image = node.data.cover;
						saveGuestPlaylist(path, info, image);
					break;
					case "download":
						downloadTrack(node.data.parent, node.data.path)
					break;
					case "downloadAlbum":
						downloadAlbum(node.data.parent + node.data.album, node.data.album);
					break;
					case "favourite":
						addFavourite(node.data.parent + node.data.path);
					break;
					case "removeFavourite":
						deleteFavourite(node.data.parent + node.data.path);
					break;
				}
			}

			function initLibraryTree() {
				$("#library").fancytree({
					extensions: ["glyph", "filter", "persist"],	
					glyph: customTreeIcons,
					filter: {
						mode: "hide",
						fuzzy: true,
						hideExpanders: false,
						nodata: function() { 
							setTimeout(function() {
								$(".fancytree-statusnode-nodata > span.fancytree-title").text("<?php print $this->getString('nodata'); ?>");
							}, 50);
							if (!$("#includeOldAlbums").is(':checked')) {
								resetCheckbox();
								filterTree();
								setTimeout(function() {
									$(".fancytree-statusnode-nodata").hide();
								}, 50);
							}
						}
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
			}

			function initContextMenus() {
				$("#searchPanel").contextmenu({
					autoTrigger: 'false',
					delegate: ".searchResult,.searchResultParent",
					autoFocus: true,
					menu: menuOptions,
					select: function(event, ui) {
						var node = {
							folder: ui.target.data("folder"),
							title: ui.target.data("title").replace("/", ""),
							data: {
								album: ui.target.data("album"),
								artist: (ui.target.data("artist").length > 0 ? ui.target.data("artist") : ui.target.data("path")),
								cover: ui.target.data("cover"),
								parent: ui.target.data("parent"),
								path: ui.target.data("path").replace(/^(.*)\/$/, "$1"),
								songtitle: ui.target.data("songtitle"),
								type: ui.target.data("type"),
								year: ui.target.data("year")
							},
							'isFolder': function() { return ui.target.data("folder"); }
						};
						handleMenuSelection(node, ui.cmd);
					}
				});

				$("#favourites").contextmenu({
					delegate: "span.fancytree-title",
					autoFocus: true,
					menu: menuOptions,
					beforeOpen: function(event, ui) {
						var node = $.ui.fancytree.getNode(ui.target);
						if (node.title=="<?php print Musicco::getString('my_favourites'); ?>" ) {
							event.preventDefault();
							} else {
							setMenuEntries(node.isFolder(), $("#favourites"));
							node.setActive();
						}
					},
					select: function(event, ui) {
						var node = $.ui.fancytree.getNode(ui.target);
						handleMenuSelection(node, ui.cmd);
					}
				});

				$("#library").contextmenu({
					delegate: "span.fancytree-title",
					autoFocus: true,
					menu: menuOptions,
					beforeOpen: function(event, ui) {
						var node = $.ui.fancytree.getNode(ui.target);
						 setMenuEntries(node.isFolder(), $("#library"));
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
							console.log("Node was null, unsure what the status of keyboard support is in that case");
						}
					},
					select: function(event, ui) {
						var node = $.ui.fancytree.getNode(ui.target);
						handleMenuSelection(node, ui.cmd);
					}
				});
			}

			function downloadTrack(parent, track) {
				window.open("?getTrack&album=" + parent + "&track=" + track);
			}

			function downloadAlbum(parent, album) {
				window.open("?getAlbum&parent=" + encodeURIComponent(parent) + "&album=" + encodeURIComponent(album));
			}

			function initFavouriteTree() {
				$("#favourites").fancytree({
					extensions: ["glyph", "persist"],	
					persist: { cookiePrefix: "favourites", expandOpts: {noAnimation: true, noEvents: true}},
					glyph: customTreeIcons,
					autoScroll: true,
					clickFolderMode: 3,
					keyboard: true,
					tabindex: "0",
					titlesTabbable: true,
					tooltip: true,
					selectMode: 1,
					postProcess: function(event, data) {
						if (data.response.length != 0 ) {
							data.response[0].title = "<?php print Musicco::getString('my_favourites'); ?>";
							data.response[0].icon = "fas fa-heart";
						}
					}
				});
				$("#favourites").fancytree("getTree").getPersistData();
			}

			function addFavourite(path) {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				showLoadingInfo("<?php print $this->getString("favourites_added"); ?>");
				$.post('?', {addFavourite: '', u: user, p: path}, function (response) {
					updateFavourites();
				});
			}

			function deleteFavourite(path) {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				showLoadingInfo("<?php print $this->getString("favourites_removed"); ?>");
				$.post('?', {deleteFavourite: '', u: user, p: path}, function (response) {
						updateFavourites();
				});
			}

			function updateFavourites() {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				$.post('?', {getFavourites: '', u: user}, function (response) {
						$("#favourites").fancytree("destroy");
						$("#favourites").empty();
						$("#favourites").append(response);
						initFavouriteTree();
				});
			}

			function proxyImage(URL) {
				var path = "<?php print $this->getConfig('tempFolder'); ?>" + "/" + Math.floor(Date.now());
				var imagePath = path + "<?php print $this->getConfig('coverFileName'); ?><?php print $this->getConfig('coverExtension'); ?>" + "?" + Math.floor(Date.now());
				$.post('?', {saveCover: '', u: URL, p: path}, function (response) {
				});
				setTimeout(function() { $("#lyricCoverArt").attr("src", imagePath); $("#lyricCoverArt").fadeIn(); }, 3000);
				return path;
			}

			function saveCover(coverURL, path) {
				$.post('?', {saveCover: '', u: coverURL, p: path}, function (response) {
					var imagePath = (path + "<?php print $this->getConfig('coverFileName'); ?><?php print $this->getConfig("coverExtension"); ?>").replace(/#/g, "%23") + "?" + Math.floor(Date.now());
					setTimeout(function() { if (!isTooLate()) { printCover(imagePath); } }, 4000);
				});
			}

			function showHelp() {
				$("#help").trigger("click");
			}

			function closeLeftPanel() {
				if ($("#leftPanel").is(":visible") && isPortrait()) {
					$("#ham").trigger("click");
					$("#mini-controls").hide();
					$(".panel").removeClass("shown");
				}
			}

			function togglePanel(panel) {
				if ($(panel).hasClass("shown") && isPortrait()) {
					$("#ham").trigger("click");
				} else {
					if ($("#leftPanel").is(":hidden")) {
						$("#ham").trigger("click");
					}
					showPanel(panel);
				}
			}

			function forcePanel(panel) {
				$(panel).addClass("default");
				if (($(".panel[class~='shown']").not("[class*='default']")).length = 0) {
					showPanel(panel);
				}
			}

			function isGuestPlay() {
				return ("<?php print AuthManager::isGuestPlay(); ?>");
			}

			function savePlaylist(playlistName) {
				var name = playlistName;
				if (name == null) {
					name = isGuestPlay()? "guestPlay" : $("#playlist_select").find(":selected").text();
				}
				var user = "<?php echo AuthManager::getUserName(); ?>";
				var playlist = $("#playlist").find("li[data-nature=album]").map(function() {
					var album = {};
					album = $(this).find("li[data-nature=track]").map(function() {
						var song = {};
							$.each($(this).data(), function(k,v) {
								song[k] = v;
							});
						return song;
					}).get();
					return album;
				}).get();
				var current = $(".currentTrack").index("#playlist li[data-nature=track]");
				var volume = $("#big-volume-bar").slider("option", "value");
				var time = Math.floor(player.currentTime);
				var loop = playerConfig["loop"];
				var shuffled = playerConfig["shuffled"];
				$.post('?', {savePlaylist: '', u: user, n: name, p: JSON.stringify(playlist), c: current, t: time, v: volume, l: loop, s: shuffled}, function (response) {
				});
			}

			function createNewPlaylist(name) {
				player.pause();
				$("#playlist_select").append('<option value="' + name + '">' + name  + '</option>');
				$("#playlist_select").val(name);
				clearPlaylist();
			}

			function deletePlaylist(name) {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				$.post('?', {deletePlaylist: '', u: user, n: name}, function (response) {
				});
			}

			function renamePlaylist(oldName, newName) {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				$.post('?', {renamePlaylist: '', u: user, o: oldName, n: newName}, function (response) {
				});
			}

			function getPlaylists() {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				if (user!="") {
					$.post('?', {getPlaylists: '', u: user}, function(response) {
						var playlists = JSON.parse(response);
						$.each(playlists, function (i, name) {
							$("#playlist_select").append('<option value="' + i + '">' + name  + '</option>');
						});
					});
				}
			}

			function goToArtist(artist) {
				togglePanel("#browserPanel");
				$('#filterText').val(artist);
				setTimeout(function() { filterTree(); }, 200);
			}

			function goToAlbum(album) {
				$('#searchText').val(album);
				toggleSearch();
				$("#findIt").trigger("click");
			}

			function checkLibraryRefresh(oldHTML) {
				(function worker() {
					$.ajax({
						url: "<?php print Musicco::getConfig("musicRoot") ?>.lock", 
						success: function(data) {
							tempHTML = ("<?php print $this->getString("rebuildingLibrary"); ?>");
							$("#reset_db").html(tempHTML);
							setTimeout(worker, 10000);
						},
						error: function(data) {
							tempHTML = oldHTML;
							$("#reset_db").html(tempHTML);
							var library = $("#library").fancytree("getTree");
							if (library.length > 0) {
								library.reload();
							}
							updateFavourites();
						}
					});
				})();
			}

			function loadPlaylist(name) {
				resetPlayer();
				player.currentTime = 0;
				$("#playlist").empty();
				showSpinner();
				if (name == null) {
					name = "";
				}
				var user = "<?php echo AuthManager::getUserName(); ?>";
				if (user!="") {
					$.post('?', {loadPlaylist: '', u: user, n: name}, function(response) {
						var data = JSON.parse(response.playlist)[0];
						var needsBuilding = (data !=null)? data.build: false;
						if (needsBuilding) {
							var root = data.path;
							queueMusic(root, "", Insert.top);
						} else {
							var tracksArray = groupBy(JSON.parse(response.playlist), "album");
							insertFirst(tracksArray);
							loadTrack(parseInt(response.current, 0));
							player.currentTime = parseInt(response.time);
							$("#big-volume-bar").slider("option", "value",parseInt(response.volume));
							if (response.loop == "true") {
								$('#big-repeat').trigger("click");
							}
							if (response.shuffled == "true") {
								$('#big-shuffle').trigger('click');
							}
						}
						$("#loading").hide();
						hideSpinner();
						if (isGuestPlay()) {
							setTimeout(function() {
								togglePanel("#playlistPanel");
							}, 3000);
						}
					}, "json");
				}
			}

			function saveGuestPlaylist(path, info, cover) {
				var user = Date.now().toString(36);
				var cover = cover;
				$("#shared-album-qr").empty();
				$("#shared-album-title").text(info);
				$("#shared-album-cover").attr("src", cover);
				$("#sharing-banner").dialog("open");
				var link = getBaseURL() + "?guestPlay&u=" + user;
				var qrW = $("#shared-album-cover").width();
				var qrH = $("#shared-album-cover").height();
				$("#shared-album-link").val(link).select().attr('size', link.length);
				$("#shared-album-qr").qrcode({width: qrW, height: qrH, text: link});
				if (navigator.share) {
					$("#shared-album-share").show();
				} else {
					$("#shared-album-share").hide();
				}
				$.post('?', {saveGuestPlaylist: '', u: user, p: path}, function (response) {
				});
			}

				function displayCover() {
					var coverurl = nowPlaying["cover"].replace(/#/g, "%23");
					var searchAutomatically = "<?php print $this->getConfig('downLoadMissingCovers'); ?>";
					resetFetchingStatus();
					printCover(coverurl);
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

				function printCover(coverUrl) {
					$(".currentAlbum img").attr("src", coverUrl);
					$(".currentAlbum li").data("cover", coverUrl);
					$('#big-cover').css('background-image', 'url("' + coverUrl + '")'); 
					savePlaylist();
				}

				function getBaseURL() {
					return window.location.href.substr(0, window.location.href.lastIndexOf("/") + 1);
				}

				function showLoadingInfo(info) {
					$('#loadingInfo').stop(true);
					$("#toast_text").text(info);
					$('#loadingInfo').fadeTo(100, 1, function() {
						$('#loadingInfo').fadeTo(2000, 0, function() {
							$("#toast_text").text(""); 
						});
					});
				}

				function fetchCover() {
					var currentAlbum = nowPlaying["album"];
					var currentArtist = nowPlaying["artist"];
					var currentPath = nowPlaying["parent"];
					var currentCover = nowPlaying["cover"];
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

				function uploadCover() {
					var currentPath = nowPlaying["parent"];
					var isValidURL =/^(?:(?:https?|ftp):\/\/)(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i;
					var isValidImage =/^(.)*\.(png|gif|bmp|jpg|jpeg)$/i;
					var userURL = window.prompt("<?php print $this->getString("promptCoverURL"); ?>", "<?php print $this->getString("defaultCoverURL"); ?>").replace("https", "http");
					if ((isValidURL.test(userURL)) && (isValidImage.test(userURL))) {
						$.ajax({
							 type: "GET",
							 url: "?head&url="+userURL,
							 complete: function(data){
							 if (data.responseText < 300) {
								 saveCover(userURL, currentPath);
								 setCoverInfoStatus("<?php print $this->getString("downloadSuccessful"); ?>"); 
							 } else {
								 setCoverInfoStatus("<?php print $this->getString("notDownloaded"); ?>"); 
							 }
						 }
						});
					}
				}

				function resetCheckbox() {
					$('#includeOldAlbums').prop("checked", true);
					$("label[for='includeOldAlbums'] i").removeClass("fa-square");
					$("label[for='includeOldAlbums'] i").addClass("fa-check-square ");
				}

				function toggleCheckbox() {
					$("label[for='includeOldAlbums'] i").toggleClass("fa-check-square fa-square");
				}

				function clearPlaylist() {
					resetPlayer();
					$("#playlist li").remove();
					savePlaylist();
				}

				function toggleSearch() {
					togglePanel("#searchPanel");
						$('.hits').remove();
						$('#searchText').select();
						$('#searchText').focus();
				}

				function scrollPlaylist() {
					if (hasPlaylist() && $("#playlist").is(":visible")) {
						var target = $('#playlistPanel');
						if (isPortrait()) {
							target = $('#panelContainer');
						}
						var y = $(".currentTrack").offset().top - $("#playlist").offset().top - 200 + $(".currentTrack").scrollTop();
						target.animate({scrollTop:y});
					}
				}

			function flashInfo() {
				setTimeout(function(){ 
					$("#big-info").css('opacity', '');
				 }, 3000);
				$("#big-info").css('opacity', '1');
			}

			function showPanel(panel) {
				$(".panel").removeClass("shown");
				$(panel).addClass("shown");
				$(".panelToggle[href='" + panel + "']").trigger("click");
			}

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
				if ((notificationSupported()) && (!notificationAllowed())) {
					Notification.requestPermission().then(function() {
							if (notificationAllowed()) {
								showNotification(status);
							}
						});
					}
					var albumYear = "";
					if (nowPlaying["year"] != "") {
						albumYear = " (" + nowPlaying["year"] + ")";
					}
					var title = nowPlaying["songtitle"];
					var artist = nowPlaying["artist"];
					var poster = nowPlaying["cover"];
					var album = nowPlaying["album"];
						
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
						navigator.mediaSession.setActionHandler('previoustrack', function() { playTrack(previousTrack);});
						navigator.mediaSession.setActionHandler('nexttrack', function() { playTrack(nextTrack);});
						navigator.mediaSession.setActionHandler('seekbackward', function() { playTrack($(previousAlbum).find("li").first()) });
						navigator.mediaSession.setActionHandler('seekforward', function() { playTrack($(nextAlbum).find("li").first()) });
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

			function postMessage(message) {
				if (navigator.serviceWorker.controller != null) {
					navigator.serviceWorker.controller.postMessage(message);
				}
			}

			function wikiLink(page) {
				return '//<?php print $this->getConfig('lang') ?>.wikipedia.org/w/api.php?action=parse&redirects&prop=text&format=json&callback=?&page='+page;
			}

			function updateInfoPanel(url, artist, show) {
				updateInfoPanel(url, artist, show, false);
			}

			function updateInfoPanel(url, artist, show, force) {
				var resyncText = "&nbsp;&nbsp;" + nowPlaying["artist"] + "&nbsp;<i class=\"fas fa-arrow-right\"></i>";
				$("#resync").html(resyncText);
				if (show) {
					showPanel("#infoPanel");
				}
				if (force) {
						$("#resync").show();
				}
				if (force || $("#resync").is(":hidden")) {
					var searchArtistExt = "<?php print $this->getString("search"); ?>";
					searchArtistExt +=  "<a target=\"blank\" href=\"http://last.fm/search?q=" + "+" + artist +"\">" + "<?php print $this->getString("lastfm"); ?>" + "</a>" ;
					searchArtistExt += "<?php print $this->getString("or"); ?>" + "</a>" ;
					searchArtistExt +=  "<a target=\"blank\" href=\"" + "<?php print $this->getConfig("searchEngine"); ?>" + artist + "+band\">" + "<?php print $this->getString("google"); ?>" + "</a>" ;
					$('#wikiPrev').html("");
					wikiHistoryPos += 1;
					
					var hasHistory = ((wikiHistoryPos > 0)) ? true : false;
					var prevUrl = (hasHistory) ? wikiHistory[wikiHistoryPos - 1 ].href : "";
					var prevTitle = (hasHistory) ? wikiHistory[wikiHistoryPos - 1 ].title : "";
					var isCurrentArtist = (artist ===  nowPlaying["artist"]);

					if ((url != "") && (url != prevUrl)) {
						wikiHistory.push({seq: wikiHistoryPos, title: artist, href: url})
					} else {
						wikiHistoryPos -= 1;
					}
					
					if ((hasHistory) && (wikiHistoryPos >= 0)) {
						$('#wikiPrev').html("<a href=\"" + prevUrl + "\" class=\"historyLink\" title=\"" + prevTitle + "\"><i class=\"fas fa-arrow-left\">&nbsp;</i>" + prevTitle + "</a>&nbsp;");
					} else if (isCurrentArtist) {
						$("#resync").hide();
					} else if (!isCurrentArtist) {
						$("#resync").show();
					}

					$('#infoPanelTitle').html(artist);
					$('#infoPanelText').html("");
					$.ajax({
						type: "GET",
						dataType: "jsonP",
						url: url,
						success: function(json) {
							if (json.parse) {
								$('#infoPanelText').html(searchArtistExt + json.parse.text['*']);
								$("#infoPanelText").find("*").removeAttr("style"); 
								$("#infoPanelText").find("#toctogglecheckbox").hide(); 
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
			}

			function updateLyricsPanel(artist, song) {
				var artist=nowPlaying["artist"];
				var song=nowPlaying["songtitle"];
				var searchLyricsExt = "<?php print $this->getString("search"); ?>";
				searchLyricsExt +=  "<a target=\"blank\" href=\"http://genius.com/search?q=" + song + "+" + artist +"\">" + "<?php print $this->getString("genius"); ?>" + "</a>" ;
				searchLyricsExt += "<?php print $this->getString("or"); ?>" + "</a>" ;
				searchLyricsExt +=  "<a target=\"blank\" href=\"" + "<?php print $this->getConfig("searchEngine"); ?>"  + song + "+" + artist +"+lyrics\">" + "<?php print $this->getString("google"); ?>" + "</a>" ;
				var LRCurl= encodeURI(nowPlaying["path"].replace(/.mp3/, ".lrc"));
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
								var lyricCorrectUrl=$(this).find('LyricCorrectUrl').text();
								var lyricImage = "";
								var lyricCovertArtUrl = $(this).find('LyricCovertArtUrl').text();
								if (lyricCovertArtUrl != "") {
									proxyImage(lyricCovertArtUrl)
									lyricImage = "<img class=\"hidden\" id=\"lyricCoverArt\" src=\"\"/><br/>";
								}
								var lyricInfo="<a target=\"_blank\" href=\""+lyricCorrectUrl+"\">"+lyricSong+"<?php print $this->getString("by"); ?>"+lyricArtist+"</a> - " + searchLyricsExt + "<br/><br/>";
								//replace what needs to be prefixed by a new line, then what needs to be suffixed by a new line.
								lyrics=$(this).find('Lyric').text().replace(/\s([\(\[A-Z])/g, "<br/>$1").replace(/([\.\?!])\s/g, "$1<br/>");
								$('#lyricsPanel').html(lyricImage + lyricInfo + lyrics);
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

			function triggerPlayPause() {
				var status = "";
				if (player.paused) { 
					$(player).animate({volume: ($("#big-volume-bar").slider("option", "value") / 100)}, 200);
					$(".big-jp-play").trigger("click");
				} else {
					$(player).animate({volume: 0}, 200);
					status = "isPaused";
					setTimeout(function() { $(".big-jp-pause").trigger("click"); }, 200);
				}
				showNotification(status);
			}

			function updatePlayerUI() {
				$('.big-jp-play').hide();
				$('.big-jp-pause').show();
				$("#big-cover").css("background-image", 'url("' + nowPlaying["cover"] + '")');
				var textData = ["songtitle", "artist", "album", "year"];
				textData.forEach(function(info) {
					$("#nowPlaying_"+info).html(nowPlaying[info]); 
				});
				if ($("#nowPlaying_year").html() != "") {
					$("#nowPlaying_year").prepend("(");
					$("#nowPlaying_year").append(")");
				}
				flashInfo();
				showNotification();
				$('#searchLink').attr("href", "<?php print $this->getConfig("imageSearchEngine"); ?>" + nowPlaying["artist"] + " " + nowPlaying["album"]);
				updateInfoPanel(wikiLink(nowPlaying["artist"]), nowPlaying["artist"], false, false);
				updateLyricsPanel(nowPlaying["artist"], nowPlaying["songtitle"]);
				displayCover();
				scrollPlaylist();
				savePlaylist();
			}

			function getDuration(seconds) {
				var date = new Date(null);
				date.setSeconds(seconds);
				var timeString = date.toISOString().substr(11, 8);
				if (timeString.substr(0, 2) == "00") {
					timeString = timeString.substr(3);
				}
				return timeString;
			}

			function parsePlaylist(tracksArray) {
				var html = [];
				var header = ""
										+ "<li data-nature=\"album\" draggable=\"true\" ondragstart\"dragStart(event)\" ondragover=\"dragOver(event)\" ondragend=\"dragEnd()\">"
										+ "<div class=\"remove fas fa-times\"></div>"
										+ "<div class=\"align-right\">"
										+ "<span class=\"move-up fas fa-arrow-up\"></span>"
										+ "<span class=\"move-down fas fa-arrow-down\"></span>"
										+ "<img class=\"playlist-poster\" align=\"left\" draggable=\"false\" src=\"\"/>"
										+ "<br/>"
										+ "<br/>"
										+ "<span class=\"guestPlay favouriteAlbum album-action fas fa-heart\"></span>"
										+ "<span class=\"is-admin-" + "<?php print AuthManager::isAdmin();?>" + " album-action guestPlay downloadAlbum fas fa-download\"></span>"
										+ "<span class=\"is-admin-" + "<?php print AuthManager::isAdmin();?>" + " album-action guestPlay share fas fa-external-link-alt\"></span>"
										+ "<br/>"
										+ "<span class=\"album\"></span>"
										+ "<br/>"
										+ "<span class=\"artist\"></span><span class=\"year\"></span>"
										+ "</div>"
										+ "</li>";
				$.each(tracksArray, function (i, album) {
					var $thisAlbum = $(header);
					var albumTracks = "";
						$.each(album, function (j, track) {
							albumTracks += "<li data-nature=\"track\" draggable=\"true\" ondragstart\"dragStart(event)\" ondragover=\"dragOver(event)\" ondragend=\"dragEnd()\"";
							$.each(track, function(k,v) {
								if ((j == 0) && (albumProps.includes(k))) {
									$($thisAlbum).attr("data-" + k, v);
								}
								albumTracks += ' data-' + k + '="' + v + '"';
							});
							albumTracks += ">" + track.songtitle;
							albumTracks += "<div class=\"remove fas fa-times small\"></div>";
							albumTracks += "</li>";
						});
					$thisAlbum.find(".playlist-poster").attr("src", $thisAlbum.data("cover").replace(/#/g, "%23"));
					$thisAlbum.find(".artist").html($thisAlbum.data("artist"));
					$thisAlbum.find(".album").html($thisAlbum.data("album"));
					if ($thisAlbum.data("year") != "") {
						$thisAlbum.find(".year").html(", " + $thisAlbum.data("year"));
					}
					$thisAlbum.append("<ul>" + albumTracks + "</ul>");
					html.push($thisAlbum);
				});
				return html;
			}

			function dragStart(e) {
				e.dataTransfer.effectAllowed = "move";
				e.dataTransfer.setData("text/plain", null);
				draggedElement = e.target;
				$(draggedElement).siblings().css("opacity", "0.5");
				$(draggedElement).css("border", "1px dotted");
			}

			function dragOver(e) {
				if ( draggedElement.parentNode.isSameNode(e.target.parentNode) ) {
					if (isBefore(draggedElement, e.target)) {
						e.target.parentNode.insertBefore(draggedElement, e.target);
					} else {
						e.target.parentNode.insertBefore(draggedElement, e.target.nextSibling);
					}
				}
			}

			function dragEnd() {
				$(draggedElement).siblings().css("opacity", "1");
				$(draggedElement).css("border", "0");
				draggedElement = null;
				savePlaylist();
			}

			function isBefore(el1, el2) {
				if (el2.parentNode === el1.parentNode) {
					for (var cur = el1.previousSibling; cur; cur = cur.previousSibling)
						if (cur === el2) {
							return true;
						}
					return false;
				}
			}

			function insertFirst(tracksArray) {
				var html = parsePlaylist(tracksArray);
				$("#playlist").prepend(html);
			}

			function insertLast(tracksArray) {
				var html = parsePlaylist(tracksArray);
				$("#playlist").append(html);
			}

			function insertBefore(tracksArray) {
				var index = $(currentAlbum).index() -1;
				insertAt(tracksArray, index);
			}

			function insertAfter(tracksArray) {
				var index = $(currentAlbum).index();
				insertAt(tracksArray, index);
			}

			function insertAt(tracksArray, index) {
				var html = parsePlaylist(tracksArray);
				$("#playlist > li:eq(" + index + ")").after(html);
			}

			$(document).ready(function() {


				  /////////////
				 // ACTIONS //
				/////////////

				var watcherTarget = document.getElementById("playlist");
				if (watcherTarget) {
					var watcherConfig = { attributes: false, childList: true, characterData: false, subtree: true };
					var watcher = new MutationObserver(refreshPlaylist);
					watcher.observe(watcherTarget, watcherConfig);
				}

				var backgroundSetting = document.getElementById("background");
				var textSetting = document.getElementById("text");
				if (backgroundSetting) {
					backgroundSetting.addEventListener("change", setColour);
					textSetting.addEventListener("change", setColour);
				}

				viewerType = window.getComputedStyle(document.getElementById('viewer') ,':after').getPropertyValue('content');
				windowWidth = $(window).width();
				new Clipboard(".clip");

				if ($(".landing").is(":visible")) {
					$("#loading").hide()
				} else {
					$("#loading").progressbar( {value: false} );
				}

				$( "#leftPanel" ).tabs({
					beforeActivate: function( event, ui ) {
						ui.oldPanel.removeClass("shown");
						ui.newPanel.addClass("shown");
					}
				});

				if (!document.getElementsByClassName("landing").length) {
					if (isGuestPlay()) {
						$('.guestPlay').hide();
					} else {
						getPlaylists();
						initFavouriteTree();
						initLibraryTree();
						initContextMenus();
						checkLibraryRefresh($("#reset_db").html());
					}

					$("#big-jp-progress").slider({
						range: "min",
						min: 0,
						max: 100,
						value: 0,
						start: function(event, ui) { timeUpdates = false; },
						stop: function(event, ui) { setCurrentTime(ui.value); timeUpdates = true; }
					});
					$("#big-volume-bar").slider({
						orientation: "vertical",
						range: "min",
						min: 0,
						max: 100,
						value: 100,
						change: function(event, ui) { setVolume(ui.value / 100) },
						stop: function(event, ui) { setVolume(ui.value / 100) }
					});

					$("#playlist").contextmenu({
						autoTrigger: 'false',
						delegate: "li",
						autoFocus: true,
						menu: [
							{title: "<?php print $this->getString("menu_info"); ?>", cmd: "info", uiIcon: "fas fa-info-circle"},
							{title: "<?php print $this->getString("menu_goto_artist"); ?>", cmd: "goto_artist", uiIcon: "far fa-user"},
							{title: "<?php print $this->getString("menu_goto_album"); ?>", cmd: "goto_album", uiIcon: "fas fa-search"},
							{title: "<?php print $this->getString("menu_download"); ?>", cmd: "download", uiIcon: "fas fa-download"},
							{title: "<?php print $this->getString("menu_share"); ?>", cmd: "share", uiIcon: "fas fa-external-link-alt"},
							{title: "<?php print $this->getString("menu_favourite"); ?>", cmd: "favourite", uiIcon: "fas fa-heart"}
						],
						select: function(event, ui) {
							var target = ui.target;
							if (!$(ui.target).is("li")) {
								target = $(ui.target).parents("li");
							}
							switch (ui.cmd) {
								case "info":
									if (target.data("nature") == "album") {
										displayInfo(target.data("album"));
									} else {
										displayInfo(target.data("songtitle"));
									}
									break;
								case "goto_artist":
									goToArtist(target.data("artist"));
									break;
								case "goto_album":
									if (target.data("nature") == "album") {
										goToAlbum(target.data("album"));
									} else {
										goToAlbum(target.data("title"));
									}
								break;
								case "download":
									if (target.data("nature") == "album") {
										downloadAlbum(target.data("parent"), target.data("album"));
									} else {
										downloadTrack(target.data("parent"), target.data("path"));
									}
								break;
								case "share":
									var path = target.data("parent");
									var detail = target.data("album");
									if (target.data("nature") == "track") {
										path = path + target.data("path");
										detail = target.data("songtitle");
									}
									var separator = " - ";
									var info = target.data("artist") + separator + detail;
									var image = target.data("cover");
									saveGuestPlaylist(path, info, image);
								break;
								case "favourite":
									if (target.data("nature") == "album") {
										addFavourite(target.data("parent"));
									} else {
										addFavourite(target.data("parent") + target.data("path"));
									}
								break;
							}
						}
					});

					loadPlaylist();
					adaptUI(true);
				}

				  ///////////////
				 // FUNCTIONS //
				///////////////

				function adaptUI(init) {
				var newViewerType = window.getComputedStyle(document.getElementById('viewer') ,':after').getPropertyValue('content');
				//console.log(newViewerType);
				var newWindowWidth = $(window).width();
				if ((newViewerType != viewerType) && (newWindowWidth != windowWidth) || (init)) {
					viewerType = newViewerType;
					windowWidth = newWindowWidth;
					if (!isWidescreen()) {
						$("#playlistToggle").show();
						$("#leftPanel").tabs("enable", 2 );
							if (isPortrait()) {
								$("#leftPanel").hide();
							} else {
							}
					} else {
						$("#playlistToggle").hide();
						$("#leftPanel").tabs("disable", 2 );
					}
					$("#leftPanel").tabs("refresh");
				}
				restorePanel();
				$( ".modal" ).dialog({
					modal: true,
					autoOpen: false,
					width: isPortrait() ? "100%": "40%",
					height: $(window).height(),
					show: { effect: "fade", duration: 400 },
					hide: { effect: "fold", duration: 200 }
				});
			}

				  ////////////
				 // EVENTS //
				////////////

				$("#playlist").on("click taphold", ".move-down", function(e) {
					var target = $(this).parents("li").next();
					var shift = (e.type === "taphold")? true : e.shiftKey;
					if (shift) {
						target = $("#playlist > li").last();
					}
					target.after($(this).parents("li"));
				});

				$("#playlist").on("click taphold", ".move-up", function(e) {
					var target = $(this).parents("li").prev();
					var shift = (e.type === "taphold")? true : e.shiftKey;
					if (shift) {
						target = $("#playlist > li").first();
					}
					target.before($(this).parents("li"));
				});

				$("#big-volume-bar").on("change", function() {
					player.volume = $(this).val() / 100;
				});

				$("#playlist").on("click", " > li > ul > li", function() {
					playTrack($(this));
				});

				$(".previous_album").on("click", function() {
				});

				$(".previous_track").on("click", function() {
				});

				$(".big-jp-play").on("click", function() {
					player.play();
				});

				$(".big-jp-pause").on("click", function() {
					player.pause();
				});

				$("#shared-album-show-qr, #shared-album-show-cover").on("click", function() {
					$("#shared-album-cover, #shared-album-qr, #shared-album-show-qr, #shared-album-show-cover").toggle();
					$("#shared-album-qr canvas").addClass("boxed");
				});

				$(document).on("click taphold", ".big-jp-previous", function(e) {
					if (playerConfig["shuffled"]) {
						playRandomTrack();
					} else {
						var shift = (e.type === "taphold")? true : e.shiftKey;
						if (shift) {
							$(previousAlbum).find("li").first().trigger("click");
						} else {
							$(previousTrack).trigger("click");
						}
					}
				});

				$(".big-jp-next").on("click taphold", function(e) {
					if (playerConfig["shuffled"]) {
						playRandomTrack();
					} else {
						var shift = (e.type === "taphold")? true : e.shiftKey;
						if (shift) {
							$(nextAlbum).find("li").first().trigger("click");
						} else {
							$(nextTrack).trigger("click");
						}
					}
				});

				$("#big-mute").on("click", function() {
				$("#big-mute, #big-unmute").toggle();
					player.volume = 0;
				});

				$("#big-unmute").on("click", function() {
				$("#big-mute, #big-unmute").toggle();
					player.volume = 1;
				});

				$("#playlist").on("click", ".remove", function(e) {
					e.stopPropagation();
					var target = $(this).parent("li");
					if ($(target).data("nature") == "track") {
						numSiblings = target.siblings();
						if (numSiblings.length) {
							if ($(target).hasClass("currentTrack")) {
								playTrack(nextTrack);
							}
							target.remove();
						} else {
							$(target).parents("li").find(".remove").trigger("click");
						}
					} else {
						var albumIndex = $(target).index("#playlist > li");
						var fallbackTrack = $("#playlist > li:eq(" + albumIndex + ")").find("li[data-nature=track]:first");
						var currentAlbumIndex = $(".currentAlbum").index("#playlist > li");
						var isCurrentAlbum = (currentAlbumIndex == albumIndex);
						var shift = (e.type === "taphold")? true : e.shiftKey;
						var alt = (e.type === "taphold")? false : e.altKey;
						var ctrl = (e.type === "taphold")? false : e.ctrlKey;
						if (shift) {
							if (currentAlbumIndex < albumIndex) {
								playTrack(fallbackTrack);
							}
							for (i=0; i < albumIndex; i++) {
								$("#playlist > li:eq(0)").remove();
							}
						} else if (ctrl) {
							if (currentAlbumIndex > albumIndex) {
								playTrack(fallbackTrack);
							}
							for (i=albumIndex; i < $("#playlist > li").length; i++) {
								$("#playlist > li:eq(" + (albumIndex + 1) + ")").remove();
							}
						} else if (alt) {
							if (!isCurrentAlbum) {
								playTrack($(target).find("li[data-nature=track]:first"));
							}
							$("#playlist > li").not(":eq(" + albumIndex + ")").remove();
						} else {
							target.remove();
						}
					}
					savePlaylist();
				});

				$("#reload").on("click", function() {
					$.ajax({
						url: window.location.href,
						headers: {
							"Pragma": "no-cache",
							"Expires": -1,
							"Cache-Control": "no-cache"
						}
					}).done(function () {
						window.location.reload(true);
					});
				});

				$(window).focus(function() {
					flashInfo();
				});

				$("#includeOldAlbums").click(function () {
					toggleCheckbox();
					filterTree();
				});

				$("#filterText").keyup(function() {
					setTimeout( function() {
						if (userIsStillTyping) {
							userIsStillTyping = false;
							filterTree();
						}
					}, 400);
				});
				
				$("#filterText").keydown(function() {
					userIsStillTyping = true;
				});

				$("#filterButton").on("click", function(event) {
					event.preventDefault();
					$("#library").fancytree("getTree").clearFilter();
					$("#filterText").val('');
					resetCheckbox();
				});

				$("#ham").on("click", function() {
					$('#leftPanel').toggle('slide', { direction: 'left' }, 200);
					if (isPortrait()) {
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
					clearPlaylist();
				});

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

				$("#findIt").on("click", function(event) {
					event.preventDefault();
					$("#searchForm").submit();
				});

				$("#searchForm").submit(function(event) {
					event.preventDefault();
					var $form = $( this ),
							term = normalise($form.find( 'input[name="s"]' ).val());
					if (term.length > 0) {
						showLoadingInfo("<?php print $this->getString("searchingFor"); ?>" + term);
						var resultString="&nbsp;";
						$("#searchResults").html("&nbsp;&nbsp;<i class=\"fas fa-pulse fa-spin fa-spinner\"></i>&nbsp;&nbsp;<?php print $this->getString("searchingLibrary"); ?>");
						$(".hits").remove();
						$.post('?', {querydb: '', root: term, type: 'search'}, function (data) {
						var hits= data;
						if (hits != null) {
							$.each(hits, function (i, elem) {
								var parent = hits[i].parent;
								var name = hits[i].title;
								var type = hits[i].type;
								var extraClasses = hits[i].extraClasses;
								var path = hits[i].path;
								var isFolder = hits[i].folder;
								var album = hits[i].album;
								var artist = hits[i].artist;
								var cover = hits[i].cover;
								var songtitle = hits[i].songtitle;
								var year = hits[i].year;
								var slash="/";
								var optionalSlash="";
								if (type == 1) {
									optionalSlash = slash;
								}
								var levelUp = parent.substr(0,parent.substr(0,parent.lastIndexOf("/")).lastIndexOf("/")+1);
								var parentItem = parent.substr(levelUp.length);
								var parentItemName = parent.substr("<?php print Musicco::getConfig('musicRoot'); ?>/".length, parent.substr("<?php print Musicco::getConfig('musicRoot'); ?>/".length).length -1).replace(/<?php print Musicco::getConfig('new_marker'); ?>/, "").replace(/\//g, " &gt; ");
								var parentSongTitle = parentItem.replace("[" + year + "]", "").replace("/", "");
								var parentTitle = parentItem.replace("/", "");
								var hitLink="<div class=\"hits\">";
								if (parentItemName=="") {
									parentItemName="home";
								}
								hitLink+="<a class=\"searchResultParent\"  tabindex=\"1\" data-folder=\"true\" data-album=\"" + album + "\" data-artist=\"" + artist + "\" data-cover=\"" + cover + "\" data-songtitle=\"" + parentSongTitle + "\" data-year=\"" + year + "\" data-parent=\"" + levelUp + "\" data-title=\"" + parentTitle + "\" data-path=\"" + parentItem + "\">" + parentItemName +"</a> &gt; ";
								hitLink+="<a class=\"searchResult " + extraClasses + "\" tabindex=\"1\" data-folder=\"" + isFolder + "\" data-album=\"" + album + "\" data-artist=\"" + artist + "\" data-cover=\"" + cover + "\" data-songtitle=\"" + songtitle + "\" data-year=\"" + year + "\" data-parent=\"" + parent + "\" data-title=\""+ name + optionalSlash +"\" data-path=\""+ path +"\">"+ name +"</a></div>";
								$("#searchResults").before(hitLink);
							});
						} else {
							resultString="<?php print $this->getString("noResultsForThisSearch"); ?>";
						}
							$("#searchResults").html(resultString);
							$('.searchResult').first().focus();
						}, "json");
					}
				});

				$('#clear').click(function () {
					$('.hits').remove();
					$('#searchText').val('');
					toggleSearch();
				});

					$(document).on("dblclick", ".artist, #nowPlaying_artist", function() {
						goToArtist($(this).text());
					});

					$(document).on("dblclick", ".album, .year, .songtitle, #nowPlaying_album, #nowPlaying_year, #nowPlaying_songtitle", function() {
						goToAlbum($(this).text().replace("(", "").replace(")", ""));
					});

					$(document).on("click", ".downloadAlbum", function(event) {
						event.preventDefault();
						downloadAlbum($(this).parents("li").data("parent"), $(this).parents("li").data("album"))
					});

					$(document).on("click", ".favouriteAlbum", function(event) {
						addFavourite($(this).parents("li").data("parent"));
					});

				$(document).on("click", "#remove_shared_links", function() {
						showLoadingInfo("<?php print $this->getString("removing_shared_links"); ?>");
						$.ajax({
							type: "POST",
							url: "",
							data: {deleteGuestPlaylists: ""}
						});
				});

				$(document).on("click", "#remove_temp_files", function() {
						showLoadingInfo("<?php print $this->getString("removing_temp_files"); ?>");
						$.ajax({
							type: "POST",
							url: "",
							data: {cleanTempFiles: ""}
						});
				});

				$(document).on("click", "#quick_scan", function() {
					var folderName = window.prompt("<?php print $this->getString("promptFolderName"); ?>", "");
					if ((folderName != "") && (folderName != null)) {
						showLoadingInfo("<?php print $this->getString("scanning"); ?>" + folderName);
						$.ajax({
							type: "POST",
							url: "",
							data: {quickscan: "", folder: folderName},
							success: function(response) {
								if (parseInt(response) > 0) {
									$("#library").fancytree("getTree").reload();
									showLoadingInfo("<?php print $this->getString("scanning_ok"); ?>");
									goToArtist(folderName);
								} else {
									showLoadingInfo("<?php print $this->getString("scanning_ko"); ?>");
								}
							}
						});
					}
				});

				$(document).on("click", "#reset_db", function() {
					var oldHTML = $("#reset_db").html();
					$(this).html("<?php print $this->getString("rebuildingLibrary"); ?>");
					var tempHTML = "";
					$.ajax({
						type: "GET",
						url: "?builddb",
						success: function(response) {
							if (parseInt(response) > -1) {
								tempHTML="<?php print $this->getString("libraryRebuiltIn"); ?>"+response;
								$("#library").fancytree("getTree").reload();
								updateFavourites();
							} else {
								checkLibraryRefresh(oldHTML);
							}
							$("#reset_db").html(tempHTML).delay(10000).queue(function(n) {
								$("#reset_db").html(oldHTML);
								n();
							}).fadeIn(500);
							setTimeout(function() { togglePanel("#browserPanel"); }, 1000);
						}
					});
				});

				$(document).on("taphold", "#big-cover, .big-jp-play, .big-jp-pause", function(e) {
					playRandomAlbum();
				});

				$(document).on("click taphold", ".uncover", function(e) {
					var alt = (e.type === "taphold")? false : e.altKey;
					var shift = (e.type === "taphold")? true : e.shiftKey;
					if (alt) {
						playRandomAlbum();
					} else {
						var method="uncover";
						if (shift) {
							method="uncover_new";
						}
						showLoadingInfo("<?php print $this->getString("uncovering"); ?>");
						$.post('?', {querydb: '', root: '', type: method}, function (response) {
								var hits=response;
								if (hits != null) {
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
									queueMusic($(thisHit).data("parent") + $(thisHit).data("path"), $(thisHit).data("title"), Insert.last);
									});
								}
							$(".uncoverLink").remove(); 
						}, "json");
					}
				});

				$(document).on("click", ".infoPanelLink", function(event) {
					event.preventDefault();
					var title = $(this).attr('title');
					displayInfo(title);
				});

				$(document).on('mouseenter', ".nowrap", function() {
					var $this = $(this);
					if(this.offsetWidth < this.scrollWidth) {
						$this.attr('title', $this.text());
					}
				});

				$(document).on("click", ".historyLink", function(event) {
					event.preventDefault();
					for (var i=0;i<wikiHistory.length;i++) { 
						if (wikiHistory[i].seq >= (wikiHistoryPos -1)) {
							wikiHistory.splice(i, 1);
							i -= 1;
						}
					}
					wikiHistoryPos -= 2;
					displayInfo($(this).attr('title'));
				});

				$("#shared-album-share").on("click", function(event) { 
					navigator.share({
						title: "<?php echo Musicco::getString('album_sharing'); ?>",
						text: $("#shared-album-title").text(),
						url: $("#shared-album-link").val()
					})
						.then(() => console.log('Successful share'))
						.catch((error) => console.log('Error sharing', error));
				});

				$('a.fader:has(img)').hover(
						function() { $('img', this).fadeOut(100);},
						function() { $('img', this).fadeIn(3000);}
				);

				$(document).on("click", "#newPlaylist", function() {
					var newPlaylistName = window.prompt("<?php print $this->getString("promptPlaylistName"); ?>");
					if ((newPlaylistName != '') &&  (newPlaylistName != null)) {
						createNewPlaylist(newPlaylistName);
					}
				});

				$(document).on("click", "#renamePlaylist", function() {
					var oldPlaylistName = $("#playlist_select").find(":selected").text();
					var newPlaylistName = window.prompt("<?php print $this->getString("promptPlaylistName"); ?>");
					if ((newPlaylistName != '') &&  (newPlaylistName != null) && (newPlaylistName != oldPlaylistName)) {
						$("#playlist_select").find(":selected").text(newPlaylistName);
						renamePlaylist(oldPlaylistName, newPlaylistName);
					}
				});

				$(document).on("click", "#deletePlaylist", function() {
					var name = $("#playlist_select").find(":selected").text();
					deletePlaylist(name);
					$("#playlist_select option:contains('" +  name + "')").remove();
					if ($('#playlist_select option').length) {
						$("#playlist_select").val($("#playlist_select option:first").val());
						loadPlaylist($("#playlist_select").find(":selected").text());
					} else {
						//TODO: Do this as a callback rather than after a set time
						setTimeout(function() { getPlaylists(); loadPlaylist(); }, 500);
					}
				});

				$(document).on("change", "#playlist_select", function() {
					var new_playlist = $("#playlist_select").find(":selected").text();
					loadPlaylist(new_playlist);
				});

				$(document).on("click", "#resync", function(event) { 
					event.preventDefault();
					$("#resync").hide();
					updateInfoPanel(wikiLink(nowPlaying["artist"]), nowPlaying["artist"], false, false);
				});

				$(document).on("click", "#playlistToggle", function(event) { 
					scrollPlaylist();
				});

				$(document).on("click", ".share", function() {
					saveGuestPlaylist(
						$(this).parents("li").data("parent"),
						$(this).parents("li").data("album") + " <?php print $this->getString("by"); ?> " + $(this).parents("li").data("artist"),
						$(this).parents("li").find("img.playlist-poster").attr("src")
					);
				});

				$(document).on("mouseup", ".searchResult, .searchResultParent", function(event) {
					setMenuEntries($(this).data("folder"), $("#searchPanel"));
					$("#searchPanel").contextmenu("open", $(this));
				});

				$("#big-cover").click(function(e) {
					if (e.target !== this) 
					return;
					triggerPlayPause();
				});

				$("#big-cover").on( "swipeup", function() {
					volumeUp();
				});

				$("#big-cover").on( "swipedown", function() {
					volumeDown();
				});

				$("#big-cover").on( "swipeleft", function() {
					if (playerConfig["shuffled"]) {
						playRandomTrack();
					} else {
						playTrack(nextTrack);
					}
				});

				$("#big-cover").on( "swiperight", function() {
					if (playerConfig["shuffled"]) {
						playRandomTrack();
					} else {
						playTrack(previousTrack);
					}
				});

				$("body").on("keyup", function(e) {
					// Uncomment the following line to debug the received keycode
					// console.log("key: " + e.keyCode + " shift: " + e.shiftKey + " ctrl: " + e.ctrlKey + " super: " + e.metaKey);
					if (!e.metaKey) {
						hotkey(e);
					}
				});

				if ($("#user_name").is('*')) {
					$("#user_name").focus();
				}

				$("#big-shuffle").click(function() {
					playerConfig["shuffled"] = !playerConfig["shuffled"];
					$(this).toggleClass("selected");
				});

				$("#big-repeat").click(function() {
					playerConfig["loop"] = !playerConfig["loop"];
					$(this).toggleClass("selected");
				});

				$("#big-volume-down").click(function() {
					volumeDown();
				});

				$("#big-volume-up").click(function() {
					volumeUp();
				});

			$(window).resize(function(){
				adaptUI();
			});

			$(document).on("click", "#infoPanel a.image", function() {
				var image = $(this).children("img").attr("srcset").split(',').pop().trim().split(' ')[0];
				var legend = $(this).children("img").attr("alt");
				$("#imageViewerPanel img").attr("src", image);
				$("#imageViewerPanel div").text(legend);
				$("#imageViewerPanel").dialog("open");
			});

	});
//]]>
		</script>
		<title><?php if(Musicco::getConfig('appName') != null) print Musicco::getConfig('appName'); ?></title>
	</head>
	<body id="viewer">
	<div id="loading"></div>
<?php 
if(isset($_ERROR) && strlen($_ERROR) > 0) {
	print "<div id=\"error\">".$_ERROR."</div>";
}
if(!AuthManager::isAccessAllowed()) {
	$this->printLoginBox();
} else {
?>
	<!-- START: musiccoplayer -->
	<div id="musiccoplayer">
		<!-- START: Modal Dialogues -->
		<div id="helpPanel" class="modal"><?php print getHelp(); ?></div>
		<div id="aboutPanel" class="modal"><?php print getAbout(); ?></div>
		<div id="imageViewerPanel" class="modal"><img src=""/><div></div></div>
		<div id="sharing-banner" class="modal">
		<img id="shared-album-cover" class="boxed" src="app/apple-touch-icon.png" />
			<div id="shared-album-qr"></div>
			<div id="shared-album-title" class="big"></div>
			<div id="share-actions" class="spread">
					<span id="shared-album-show-qr"><i class="fas fa-2x fa-qrcode"></i></span>
					<span id="shared-album-show-cover"><i class="far fa-2x fa-image"></i></span>
					<span data-clipboard-target="#shared-album-link" class="clip"><i class="far fa-2x fa-clipboard"></i></span>
					<span id="shared-album-share"><i class="fas fa-2x fa-external-link-alt"></i></span>
			</div>
			<input tabindex="-1" type="text" value="" class="shared-link" id="shared-album-link"/>
		</div>
		<!-- END: Modal Dialogues -->
		<!-- START: header -->
		<div id="header" class="spread nowrap">
			<span>
			<span id="ham"><i class="fas fa-bars fa-2x"></i></span>
			<span id="mini-controls" class="big-controls">
				<span class="big-jp-previous-album">&nbsp;</span>
				<span class="big-jp-previous"><i class="fas fa-step-backward fa-fw"></i>&nbsp;</span>
				<span class="big-jp-play"><i class="far fa-play-circle fa-fw"></i>&nbsp;</span>
				<span class="big-jp-pause" style="display: none;"><i class="far fa-pause-circle fa-fw"></i>&nbsp;</span>
				<span class="big-jp-next"><i class="fas fa-step-forward fa-fw"></i>&nbsp;</span>
				<span class="big-jp-next-album">&nbsp;</span>
				&nbsp;
				&nbsp;
				<span class="uncover guestPlay toggles"><i class="fas fa-magic fa-fw"></i>&nbsp;</span>
				&nbsp;
				&nbsp;
				<span class="big-volume-down toggles"><i class="fas fa-volume-down fa-fw"></i>&nbsp;</span>
				<span class="big-volume-down toggles"><i class="fas fa-volume-up fa-fw"></i>&nbsp;</span>
			</span>
			</span>
			<span id="loadingInfo">
				<span class="blink1">&#9834;</span><span class="blink2">&#9834;</span><span class="blink3">&#9834;</span>&nbsp;<span id="toast_text"></span>
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
				<li id="browserToggle"><a href="#browserPanel" class="guestPlay panelToggle"><i class="far fa-folder-open"></i></a></li>
				<li id="searchToggle"><a href="#searchPanel" class="guestPlay panelToggle"><i class="fas fa-search"></i></a></li>
				<li id="playlistToggle"><a href="#playlistPanel" class="panelToggle"><i class="fas fa-list"></i></a></li>
				<li id="infoToggle"><a href="#infoPanel" class="panelToggle"><i class="fas fa-info-circle"></i></a></li>
				<li id="lyricsToggle"><a href="#lyricsPanel" class="panelToggle"><i class="fas fa-microphone"></i></a></li>
				<li id="settingsToggle"><a href="#settingsPanel" class="panelToggle"><i class="fas fa-cogs"></i></a></li>
			</ul>
			<div id="panelContainer">
				<div id="browserPanel" class="panel guestPlay">
					<div class="table">
						<div id="filter">
							<input id="includeOldAlbums" tabindex="0" type="checkbox" checked="true"/>
							<label for="includeOldAlbums"><i class="fas fa-check-square"></i>&nbsp;<?php print $this->getString("show_all"); ?></label>
							<input type="text" id="filterText" tabindex="1" class="fill" name="filterText" />
							<a class="btn" id="filterButton" href="#"><i class="fas fa-border fa-times"></i></a>
						</div>
						<div id="favourites">
							<?php if (!isGuestPlay) { print getFavourites(AuthManager::getUserName()); } ?>
						</div>
						<div id="library" class="nowrap"></div>
					</div>
				</div>
				<div id="searchPanel" class="panel guestPlay">
					<form action="?" id="searchForm">
						<input id="searchText" type="text" class="fill" name="s" value="" placeholder="<?php print $this->getString("search_placeholder"); ?>" />
						<span class="right">
							<a class="btn" id="findIt" href="#"><i class="fas fa-border fa-search"></i></a>
							<a class="btn" id="clear" href="#"><i class="fas fa-border fa-times"></i></a>
						</span>
					</form>
					<div id="searchResults">&nbsp;</div>
				</div>
				<div id="playlistPanel" class="panel">
					<div id="playlistSpinner">
						<span class="current"><i class="fas fa-spin fa-5x fa-spinner fa-pulse"></i></span>
					</div>
					<ul id="playlist"></ul>
					<div id="playlist-tools" class="guestPlay">
						<select id="playlist_select"></select>
						<span id="renamePlaylist" class="playlist-tools"><i class="fa fa-edit"></i></span>
						<span id="newPlaylist" class="playlist-tools"><i class="fa fa-plus"></i></span>
						<span id="deletePlaylist" class="playlist-tools"><i class="fa fa-trash"></i></span>
					</div>
				</div>
				<div id="infoPanel" class="panel">
					<div id="wikiHistory">
						<span id="wikiPrev"></span>
						<span id="sync"><a id="resync" href="#"></a></span>
					</div>
					<div id="infoPanelTitle"></div>
					<div id="infoPanelText"></div>
				</div>
				<div id="lyricsPanel" class="panel"></div>
				<div id="settingsPanel">
				<?php
				if (AuthManager::isAdmin()) {
					print "<div class=\"settings guestPlay\"><i class=\"space-after fas fa-fw fa-sync\"></i><span id=\"reset_db\"><a>".$this->getString("reset_db")."</a></span></div>";
					print "<div class=\"settings guestPlay\"><i class=\"space-after fab fa-fw fa-searchengin\"></i><span id=\"quick_scan\"><a>".$this->getString("quick_scan")."</a></span></div>";
					print "<div class=\"settings guestPlay\"><i class=\"space-after fas fa-fw fa-trash\"></i><span id=\"remove_shared_links\"><a>".$this->getString("remove_shared_links")."</a></span></div>";
					print "<div class=\"settings guestPlay\"><i class=\"space-after fas fa-fw fa-minus-circle\"></i><span id=\"remove_temp_files\"><a>".$this->getString("remove_temp_files")."</a></span></div>";
				}
				print "<div class=\"settings\"><i class=\"space-after fas fa-fw fa-bath\"></i><span id=\"reload\"><a>".$this->getString("reload")."</a></span></div>";
				print "<div class=\"settings\"><i class=\"space-after fas fa-fw fa-question\"></i><span id=\"help\"><a>".$this->getString("help")."</a></span></div>";
				print "<div class=\"settings\"><i class=\"space-after fas fa-fw fa-info\"></i><span id=\"about\"><a>".$this->getString("about")."</a></span></div>";
				print "<hr/>";
				print "<div class=\"settings\"><i class=\"space-after fas fa-fw fa-palette\"></i><span>".$this->getString("colours")."</span></div>";
				print "<div><input type=\"color\" id=\"background\" name=\"color\" value=\"#121314\" /><label for=\"background\">".$this->getString("background")."</label></div>";
				print "<div><input type=\"color\" id=\"text\" name=\"color\" value=\"#A7A97F\" /><label for=\"text\">".$this->getString("text")."</label></div>";
				?>
				</div>
			</div>
		</div>
		<!-- END: Left Panel -->
		<!-- START: big player -->
		<div id="big-player">
			<div id="playerPanel">
				<div id="big-cover">
					<div class="right" id="big-volume-bar"></div>
					<div id="updateCoverArt" class="guestPlay">
						<span id="statusText"><?php print $this->getString("..."); ?></span>
						<span id="searchOne" class="coveractions"><a id="searchLink" target="_blank" href="<?php print $this->getConfig("imageSearchEngine"); ?>musicco"><?php print $this->getString("searchOne"); ?></a></span>
						<span id="uploadIt" class="coveractions"><?php print $this->getString("clickToUploadYourOwn"); ?></a></span>
						</div>
					<div class="dummy">&nbsp;</div>
					<div id="big-jp-progress"></div>
				</div>
				<div id="big-timer" class="spread">
					<span id="current_time" class="left"></span>
					<span id="duration" class="right"></span>
				</div>
				<div id="big-info">
					<div id="nowPlaying_songtitle" class="nowrap">&nbsp;</div>
					<div id="nowPlaying_artist" class="nowrap">&nbsp;</div>
					<div>
						<span id="nowPlaying_album" class="nowrap">&nbsp;</span>
						<span id="nowPlaying_year" class="nowrap">&nbsp;</span>
					</div>
				</div>
				<div id="playlist-controls" class="spread">
					<span id="big-unmute" class="toggles selected hidden"><i class="fas fa-volume-off fa-2x fa-fw"></i></span>
					<span id="big-mute" class="toggles"><i class="fas fa-volume-off fa-2x fa-fw"></i></span>
					<span id="clear-playlist" class="guestPlay toggles"><i class="far fa-trash-alt fa-2x fa-fw"></i></span>
					<span class="guestPlay uncover toggles"><i class="fas fa-magic fa-2x fa-fw"></i></span>
					<span id="big-shuffle" class="toggles touch-jp-shuffle"><i class="fas fa-random fa-2x fa-fw"></i></span>
					<span id="big-repeat" class="toggles touch-jp-repeat"><i class="fas fa-redo fa-2x fa-fw"></i></span>
					<span id="big-volume-down" class="toggles"><i class="fas fa-volume-down fa-2x fa-fw"></i></span>
					<span id="big-volume-up" class="toggles"><i class="fas fa-volume-up fa-2x fa-fw"></i></span>
				</div>
				<div id="controls" class="spread big-controls">
					<span class="big-jp-previous-album"></span>
					<span class="left big-jp-previous"><i class="fas fa-step-backward fa-2x fa-fw"></i></span>
					<span class="big-jp-play"><i class="far fa-play-circle fa-5x fa-fw"></i></span>
					<span class="big-jp-pause" style="display: none;"><i class="far fa-pause-circle fa-5x fa-fw"></i></span>
					<span class="right big-jp-next"><i class="fas fa-step-forward fa-2x fa-fw"></i></span>
					<span class="big-jp-next-album"></span>
				</div>
			</div>
		</div>
		<!-- END: big player -->
	</div>
	<!-- END: musiccoplayer -->
	<?php 
	}
	?>
	</body>
</html>
	
<?php
	}
}

//
// This is where the magic happens...
	debugMessage("-----------------------------------");
	$musicco = new Musicco();
	AuthManager::init();
	$musicco->init();
	debugMessage("REQUEST ".print_r($_REQUEST, TRUE));
	debugMessage("SESSION ".print_r($_SESSION, TRUE));

	if(isset($_POST['loadPlaylist'])) {
			if (AuthManager::isGuestPlay()) {
				if (isUser($_POST['u'])) {
					exit;
				}
			}
			return print_r(loadPlaylist($_POST['u'], $_POST['n']));
			exit;
	} elseif(isset($_POST['renamePlaylist'])) {
			renamePlaylist($_POST['u'], $_POST['o'], $_POST['n']);
			exit;
	} elseif(isset($_POST['deletePlaylist'])) {
			deletePlaylist($_POST['u'], $_POST['n']);
			exit;
	} elseif (isset($_POST['savePlaylist'])) {
			savePlaylist($_POST['u'], $_POST['n'], $_POST['p'], $_POST['c'], $_POST['t'], $_POST['v'], $_POST['l'], $_POST['s']);
			exit;
	} elseif (isset($_POST['saveGuestPlaylist'])) {
			$user = $_POST['u'];
			$path = str_replace("\"", "\\\"", $_POST['p']);
			$data = "[{\"build\": true , \"path\": \"".$path."\"}]";
			createUser($user, true);
			savePlaylist($user, "guestPlay", $data, "0", "0", "true", "false");
			logMessage("Saved guest playlist $path for $user");
			exit;
	} elseif (isset($_POST['getPlaylists'])) {
			return print getPlaylists($_POST['u']);
			exit;
	} elseif (isset($_POST['getFavourites'])) {
			$user = $_POST['u'];
			return print getFavourites($user);
			exit;
	} elseif (isset($_POST['deleteFavourite'])) {
			$user = $_POST['u'];
			$path = $_POST['p'];
			deleteFavourite($user, $path);
			exit;
	} elseif (isset($_POST['addFavourite'])) {
			$user = $_POST['u'];
			$path = $_POST['p'];
			addFavourite($user, $path);
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
			$rootPath = realpath($parent);
			$zip = new ZipArchive();
			$zip->open('./'.Musicco::getConfig('tempFolder').'/'.$album.'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
			
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
			$handle = fopen('./'.Musicco::getConfig('tempFolder').'/'.$album.'.zip', "rb");
			header('Content-Type: application/zip, application/octet-stream');
			header('Content-Disposition: attachment;filename="'.$album.'.zip"');
			ob_end_clean();
			fpassthru($handle);
			fclose($handle);
			exit;
	} elseif (isset($_GET['getTrack'])) {
			//TODO: escape track name so that Now that's what I call the 90s downloads fine -- also Breton - Other People's problems
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
	} elseif (isset($_POST['deleteGuestPlaylists'])) {
			logMessage("Removing guest playlists");
			deleteGuestPlaylists();
			exit;
	} elseif (isset($_POST['cleanTempFiles'])) {
			logMessage("Cleaning temp folder");
			cleanTempFiles();
			exit;
	} elseif (isset($_POST['quickscan'])) {
			$folder = $_POST['folder'];
			quickscan($folder);
			exit;
	} else {
		$musicco->run();
}

function file_get_contents_utf8($fn) {
	$content = file_get_contents($fn);
	return mb_convert_encoding($content, 'UTF-8', mb_detect_encoding($content, 'UTF-8, GB2312, ISO-8859-1', true));
}

//
// And here are the database functions...

$favourites_list = "";

function addFavourite($user, $path) {
	debugMessage(__FUNCTION__);
	$userId = getId($user);
	if ($userId != 0) {
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$tracks=[];
		if (preg_match("/.*\.mp3$/", $path)) {
			array_push($tracks, $path);
		} else {
			$query = "SELECT parent, name FROM item WHERE parent LIKE \"$path%\" AND type IN (".Musicco::TYPE_FILE.");";
			$children = $db->query($query);
			foreach($children as $row) {
				array_push($tracks, $row["parent"] . $row["name"]);
			}
		}
		foreach($tracks as $track) {
			$insert_track = "REPLACE INTO favourites (userId, path) VALUES ($userId, \"$track\")";
			$db->exec($insert_track);
		}
	$db = NULL;
	}
}

function deleteFavourite($user, $path) {
	debugMessage(__FUNCTION__);
	$userId = getId($user);
	if ($userId != 0) {
		if (preg_match("/.*\.mp3$/", $path)) {
			$path_parts = explode("/", $path);
			$path = $path_parts[sizeOf($path_parts)-1];
		}
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$favourites_query = $db->prepare("DELETE FROM favourites WHERE path LIKE \"%$path%\" AND userId=$userId;");
		$favourites_query->execute();
		$children = $favourites_query->fetchAll();
		$favourites_query = NULL;
		$db = NULL;
	}
}

function cleanTempFiles() {
	debugMessage(__FUNCTION__);
	$files = glob(Musicco::getConfig('tempFolder').'/*.*');
	foreach($files as $file){ 
		if(is_file($file))
			unlink($file);
	}
}

function deleteGuestPlaylists() {
	debugMessage(__FUNCTION__);
	$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
	$playlist_query = $db->prepare("DELETE FROM playlists WHERE name=\"guestPlay\";");
	$user_query = $db->prepare("DELETE FROM users WHERE id IN (SELECT id FROM users WHERE id NOT IN (SELECT userId FROM playlists));");
	$playlist_query->execute();
	$user_query->execute();
	$playlist_query = NULL;
	$user_query = NULL;
	$db = NULL;
}

function createDefaultPlaylist($user) {
	debugMessage(__FUNCTION__);
	logMessage("Creating a new playlist for ".$user);
	savePlaylist($user, Musicco::getConfig('defaultPlaylist'), "[]", 0, 0, 100, "false", "false");
}

function getPlaylists($user) {
	debugMessage(__FUNCTION__);
	$playlists = [];
	$userId = getId($user);
	if ($userId != 0) {
			$currentPlaylist = getCurrentPlaylistId($userId);
			if (!$currentPlaylist) {
				createDefaultPlaylist($user);
				$currentPlaylist = getCurrentPlaylistId($userId);
			}
		array_push($playlists, getCurrentPlaylistName($userId));
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$playlist_query = $db->prepare("SELECT name FROM playlists WHERE userId=$userId;");
		$playlist_query->execute();
		$result = $playlist_query->fetchAll();
		$playlist_query = NULL;
		$db = NULL;
		foreach($result as $playlist) {
			if (!in_array($playlist['name'], $playlists)) {
				array_push($playlists, $playlist['name']);
			}
		}
	}
	return json_encode($playlists);
}

function getFavourites($user) {
	debugMessage(__FUNCTION__);
	global $favourites_list;
	$userId = getId($user);
	$temp=[];
	$favourites=[];
	if ($userId != 0) {
		$favourites_list = "";
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$favourites_query = $db->prepare("SELECT path FROM favourites WHERE userId=$userId;");
		$favourites_query->execute();
		$result = $favourites_query->fetchAll();
		$favourites_query = NULL;
		$db = NULL;
		foreach($result as $favourite) {
			$list = explode("/", $favourite["path"]);
			$n = count($list);

			$arrayRef = &$favourites; // start from the root
			for ($i = 0; $i < $n; $i++) {
				$key = $list[$i];
				$arrayRef = &$arrayRef[$key]; // index into the next level
			}
		}
	}
	buildUL($favourites, "");
	return $favourites_list;
}

function buildUL($favourites, $prefix) {
  global $favourites_list;
  $favourites_list .= "\n<ul>\n";
  $slash = ($prefix != "") ? "/" : "";
  foreach ($favourites as $key => $value) {
    $is_folder = (is_array($value)) ? "class='folder' data-folder='true'": "data-folder='false'";
    $isNew = (preg_match("/".Musicco::getConfig('new_marker')."/", $key))? "current" : "treenode";
		$li_data = "$is_folder data-parent='$prefix$slash' data-key='".urlencode($prefix.$slash.$key)."' data-extraClasses='$isNew' data-path='$key' data-album='$key' data-artist='$key' data-cover=''  data-songtitle='$key' data-type='' data-year='' data-favourite='true'";
		$favourites_list .= "<li $li_data><span>";
    $favourites_list .= preg_replace("/".Musicco::getConfig('new_marker')."/", "", $key)."</span>";
    // if the value is another array, recursively build the list
    if (is_array($value))
      buildUL($value, "$prefix$slash$key");
    $favourites_list .= "</li>\n";
  }
  $favourites_list .= "</ul>\n";
}

function setCurrentPlaylistId($userId, $playlistId) {
		debugMessage(__FUNCTION__);
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$playlist_update_query = $db->prepare("UPDATE users set current_playlist=$playlistId WHERE id=$userId;");
		$playlist_update_query->execute();
		$playlist_update_query = NULL;
		$db = NULL;
		logMessage("Set $playlistId as current playlist for $userId");
}

function getCurrentPlaylistId($userId) {
		debugMessage(__FUNCTION__);
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$query = $db->prepare("SELECT current_playlist FROM users WHERE id=$userId;");
		$query->execute();
		$id = $query->fetchColumn();
		$query = NULL;
		$db = NULL;
		return $id;
}
function getCurrentPlaylistName($userId) {
		debugMessage(__FUNCTION__);
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$query = $db->prepare("SELECT name FROM playlists WHERE id = (SELECT current_playlist FROM users WHERE id=$userId);");
		$query->execute();
		$name = $query->fetchColumn();
		$squery = NULL;
		$db = NULL;
		return $name;
}

function savePlaylist($user, $name, $playlist, $current, $time, $volume, $loop, $shuffled) {
	debugMessage(__FUNCTION__);
	$userId = getId($user);
	if ($userId != 0) {
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$data = preg_replace('/"/', '\\\'', "{\"current\": \"$current\" , \"time\": \"$time\" , \"volume\": \"$volume\" , \"loop\": \"$loop\" , \"shuffled\": \"$shuffled\" , \"playlist\": \"".preg_replace('/"/', '\\"', $playlist)."\"}");
		$update_playlist_query = $db->prepare("REPLACE INTO playlists (userId, name, data) VALUES ($userId, \"$name\", \"$data\")");
		$update_playlist_query->execute();
		$playlistId = $db->lastInsertId();
		$update_playlist_query = NULL;
		$db = NULL;
		logMessage("Saved playlist $name for $user");
		debugMessage("Saved playlist: ".$data);
		setCurrentPlaylistId($userId, $playlistId);
	}
}

function isUser($user) {
	debugMessage(__FUNCTION__);
	$found = false;
	if (!$found) {
		foreach(Musicco::getConfig("users") as $userData) {
			if (in_array($user, $userData)) {
				$found = true;
			}
		}
	}
	return $found;
}

function loadPlaylist($user, $name) {
	debugMessage(__FUNCTION__);
	$userId = getId($user);
	$playlist = "";
	if ($userId != 0) {
		if ($name == "") {
			$currentPlaylist = getCurrentPlaylistId($userId);
			$query = "SELECT id,data FROM playlists WHERE id = $currentPlaylist;";
			logMessage("Loading current playlist for ".$user);
		} else {
			$query = "SELECT id,data FROM playlists WHERE userId=$userId AND name=\"$name\";";
			logMessage("Loading playlist ".$name." for ".$user);
		}
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$results_query = $db->prepare($query);
		$results_query->execute();
		$result = $results_query->fetchAll();
		$results_query = NULL;
		$db = NULL;
		foreach($result as $row) {
			$playlist = preg_replace("/\\\'/", '"', $row['data']);
			setCurrentPlaylistId($userId, $row['id']);
		}
	}
	debugMessage("Loaded playlist: ".$playlist);
	return $playlist;
}

function renamePlaylist($user, $oldName, $newName) {
	debugMessage(__FUNCTION__);
	$userId = getId($user);
	if ($userId != 0) {
		logMessage("Renaming playlist $oldName for $user to $newName");
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$rename_query = $db->prepare("UPDATE playlists SET name=\"$newName\" WHERE name=\"$oldName\" and userId=$userId;");
		$rename_query->execute();
		$rename_query = NULL;
		$db = NULL;
	}
}

function deletePlaylist($user, $name) {
	debugMessage(__FUNCTION__);
	$userId = getId($user);
	if ($userId != 0) {
		logMessage("Deleting playlist $name for $user");
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$num_playlists_query = $db->prepare("SELECT count(id) from playlists WHERE userId=$userId;");
		$delete_query = $db->prepare("DELETE FROM playlists WHERE name = \"$name\" and userId=$userId;");
		$num_playlists_query->execute();
		$num_playlists = $num_playlists_query->fetchColumn();
		$delete_query->execute();
		$num_playlists_query = NULL;
		$delete_query = NULL;
		$db = NULL;
		if ($num_playlists == 1) {
			setCurrentPlaylistId($userId, 0);
		}
	}
}

function createUser($user, $force) {
	debugMessage(__FUNCTION__);
	$id = 0;
	$isValidUser = isUser($user);
	if (AuthManager::isGuestPlay()) {
		$isValidUser = false;
		$force = false;
	}
	if ($isValidUser || $force) {
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$create_user_query = $db ->prepare("INSERT into users (username, current_playlist) VALUES (\"" . $user . "\", 0);");
		$create_user_query->execute();
		$id = $db->lastInsertId();
		$create_user_query = NULL;
		$db = NULL;
	}
	return $id;
}

function getId($user) {
	debugMessage(__FUNCTION__);
	$id = 0;
	$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
	$count_query = $db->prepare("SELECT count(id) from users where username = \"$user\";");
	$count_query->execute();
	$count = $count_query->fetchColumn();
	$count_query = NULL;
	if ($count > 0) {
		$id_query = $db->prepare("SELECT id from users where username = \"$user\";");
		$id_query->execute();
		$id=$id_query->fetchColumn();
		$id_query = NULL;
		$db = NULL;
	} else {
		$db = NULL;
		$id = createUser($user, false);
	}
	return $id;
}

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
		$query = "SELECT name, type, parent, cover, album, artist, title, year, number, extension FROM item WHERE normalised_name LIKE \"%$query_root%\" AND type NOT IN (".Musicco::TYPE_COVER.") ORDER BY parent, name COLLATE NOCASE";
		break;
		case "uncover":
		$query = "SELECT name, type, parent, cover, album, artist, title, year, number, extension FROM item WHERE type IN (".Musicco::TYPE_FILE.") ORDER BY RANDOM() LIMIT ".Musicco::getConfig('uncover_limit');
		break;
		case "uncover_new":
		$query = "SELECT name, type, parent, cover, album, artist, title, year, number, extension FROM item WHERE parent LIKE '%".preg_replace(array("/_/", "/%/"), array("\_", "\%"), Musicco::getConfig('new_marker'))."%' ESCAPE '\' AND type IN (".Musicco::TYPE_FILE.") ORDER BY RANDOM() LIMIT ".Musicco::getConfig('uncover_limit');
		break;
		default:
	}

	$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
	$_START_QUERY = microtime(true);
	logMessage($query);
	$result = $db->query($query);
	$list = [];
	logMessage("Queried DB in ".number_format((microtime(true) - $_START_QUERY), 3)." seconds");
	$_START_DISPLAY = microtime(true);
	if (sizeOf($result))
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
	$db = NULL;
	logMessage("Displayed Data in ".number_format((microtime(true) - $_START_DISPLAY), 3)." seconds");
	return print_r(json_encode($list));
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

function debugMessage($message) {
	if (Musicco::getConfig('debug_stack')) {
		error_log(date('Y-m-d H:i:s').": <<<<<DEBUG>>>>> ".$message."\n", 3, dirname(__FILE__).'/'.Musicco::getConfig('appName').'.log');
	}
}

function quickscan($folder) {
	$newMusic = build_library(Musicco::getConfig('musicRoot')."/".$folder, ".mp3");
	if (sizeof($newMusic) > 0) {
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$db->exec('INSERT INTO item (name, normalised_name, type, parent, cover, album, artist, title, year, number, extension) VALUES ("'.$folder.'","'. normalise($folder).'", "1", "'.Musicco::getConfig('musicRoot').'/", "", "", "", "'.$folder.'", "", "", "");');
		insertResults($newMusic, $db, false);
		$db = NULL;
	}
	printf(sizeof($newMusic));
}

function lockDB() {
	$lock_file = fopen(Musicco::getConfig('musicRoot').".lock", "w") or die("Unable to create lock file.");
	fclose($lock_file);
}

function initDB() {
	$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
	cleanDB($db);
	$db = NULL;
}

function cleanDB($db) {
	$db->exec("DELETE FROM item_tmp;");
	$db->exec("DELETE FROM data;");
	$db->exec("CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, normalised_name TEXT, type TEXT, parent TEXT, cover TEXT, album TEXT, artist TEXT, title TEXT, year TEXT, number TEXT, extension TEXT);");
	$db->exec("CREATE TABLE item_tmp (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, normalised_name TEXT, type TEXT, parent TEXT, cover TEXT, album TEXT, artist TEXT, title TEXT, year TEXT, number TEXT, extension TEXT);");
	$db->exec("CREATE TABLE data (key TEXT PRIMARY KEY, value TEXT);");
	$db->exec("CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT NOT NULL UNIQUE, current_playlist INTEGER);");
	$db->exec("CREATE TABLE favourites (id INTEGER PRIMARY KEY AUTOINCREMENT, userId INTEGER , path TEXT, unique(userId, path));");
	$db->exec("CREATE TABLE playlists (id INTEGER PRIMARY KEY AUTOINCREMENT, userId INTEGER , name TEXT, data TEXT, unique(userId, name));");
	$db->exec("INSERT INTO data (key, value) VALUES ('TYPE_FOLDER', ".Musicco::TYPE_FOLDER.");");
	$db->exec("INSERT INTO data (key, value) VALUES ('TYPE_FILE', ".Musicco::TYPE_FILE.");");
	$db->exec("INSERT INTO data (key, value) VALUES ('TYPE_COVER', ".Musicco::TYPE_COVER.");");
	$db->exec("INSERT INTO data (key, value) VALUES ('version', '".Musicco::getConfig('dbVersion')."');");
	$db->exec("CREATE UNIQUE INDEX IF NOT EXISTS item_idx ON item (parent, name);");
	$db->exec("CREATE UNIQUE INDEX IF NOT EXISTS item_idx2 ON item (parent, name, type);");
	$db->exec("CREATE INDEX IF NOT EXISTS item_idx3 ON item (name, type);");
	$db->exec("CREATE INDEX IF NOT EXISTS item_idx4 ON item (normalised_name, type);");
	$db->exec("CREATE UNIQUE INDEX IF NOT EXISTS users_idx ON users (id, current_playlist);");
	$db->exec("CREATE INDEX IF NOT EXISTS playlists_idx ON playlists (id, name, userId);");
}

function insertResults($library, $db, $background) {
	$destTable = "item";
	if ($background) {
		$destTable = "item_tmp";
	}
	$insert_item = $db->prepare('INSERT INTO '.$destTable.' (name, normalised_name, type, parent, cover, album, artist, title, year, number, extension) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');

	foreach ($library as $item) {
		$name= $item[0];
		$normalised_name = normalise($name);
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
		$insert_item->execute(array($name, $normalised_name, $type, $parent, $cover, $album, $artist, $title, $year, $number, $extension));
	}
	$insert_item = NULL;
}

function builddb() {
	if (file_exists(Musicco::getConfig('musicRoot').".lock")) {
			printf("-1");
			logMessage("Aborting, another library refresh is already in progress.");
	} else {
		// write lock file
		lockDB();
		try {
			$folder = Musicco::getConfig('musicRoot');
			//open the database
			$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
			cleanDB($db);
			//create the database

			
			$_START_SCAN = microtime(true);
			$library = build_library($folder, ".mp3");
			logMessage("Scanned drive in ".number_format((microtime(true) - $_START_SCAN), 3)." seconds");

			$_START_INSERT = microtime(true);
			insertResults($library, $db, true);

			// Update non-temp tables and reindex the DB
			$db->exec("DELETE FROM item;");
			$db->exec("DROP INDEX item_idx;");
			$db->exec("DROP INDEX item_idx2;");
			$db->exec("DROP INDEX item_idx3;");
			$db->exec("DROP INDEX item_idx4;");
			$db->exec("DROP INDEX users_idx;");
			$db->exec("DROP INDEX playlists_idx;");
			$db->exec("INSERT INTO item (name, normalised_name, type, parent, cover, album, artist, title, year, number, extension) SELECT name, normalised_name, type, parent, cover, album, artist, title, year, number, extension FROM item_tmp;");
			$db->exec("REINDEX item_idx;");
			$db->exec("REINDEX item_idx2;");
			$db->exec("REINDEX item_idx3;");
			$db->exec("REINDEX item_idx4;");
			$db->exec("REINDEX users_idx;");
			$db->exec("REINDEX playlists_idx;");
			$db->exec("DELETE FROM item_tmp;");

			printf("%.1s s",(microtime(true) - $_START_INSERT));
			logMessage("Built library in ".number_format((microtime(true) - $_START_INSERT), 3)." seconds");

			// clean up favourites			
			$_START_FAVOURITES = microtime(true);
			$get_favourites_query = $db->prepare("SELECT path from favourites;");
			$get_favourites_query->execute();
			$favourites = $get_favourites_query->fetchAll();
			$get_favourites_query = NULL;
			$file_check = $db->prepare('SELECT COUNT(id) from item where parent = ? AND name = ?;');
			foreach($favourites as $row) {
				$favourite = pathinfo($row['path']);
				$parent = $favourite["dirname"]."/";
				$file = $favourite["basename"];
				$file_check->execute(array($parent, $file));
				$count = $file_check->fetchColumn();
				if (!$count) {
					$alt_parent = preg_replace("/".Musicco::getConfig('new_marker')."/", "", $parent);
					$file_check->execute(array($alt_parent, $file));
					$count = $file_check->fetchColumn();
					if (!$count) {
						$db->exec("DELETE from favourites where path=\"$parent$file\";");
					} else {
						$db->exec("UPDATE favourites SET path=\"$alt_parent$file\" where path=\"$parent$file\";");
					}
				}
			}
			$file_check = NULL;
			logMessage("Refreshed favourites in ".number_format((microtime(true) - $_START_FAVOURITES), 3)." seconds");


			// close the database connection
			$db = NULL;
			unlink(Musicco::getConfig('musicRoot').".lock");
		} catch(PDOException $e) {
			print 'Exception : '.$e->getMessage();
			unlink(Musicco::getConfig('musicRoot').".lock");
		}
	}
}

	function normalise($name) {
    $normalised_name = strtolower(utf8_decode($name));
    $patterns[0] = '/[á|â|à|å|ä]/';
    $patterns[1] = '/[ð|é|ê|è|ë]/';
    $patterns[2] = '/[í|î|ì|ï]/';
    $patterns[3] = '/[ó|ô|ò|ø|õ|ö]/';
    $patterns[4] = '/[ú|û|ù|ü]/';
    $patterns[5] = '/æ/';
    $patterns[6] = '/ç/';
    $patterns[7] = '/ß/';
    $replacements[0] = 'a';
    $replacements[1] = 'e';
    $replacements[2] = 'i';
    $replacements[3] = 'o';
    $replacements[4] = 'u';
    $replacements[5] = 'ae';
    $replacements[6] = 'c';
    $replacements[7] = 'ss';
    return preg_replace($patterns, $replacements, $normalised_name);
	
	}

	function build_library($dir, $extension) {
		if (!isset($item)) {
			$item = array();
		}
		$root = scandir($dir); 
		$filter = $extension;
			foreach($root as $value) {
				if($value === '.' || $value === '..' || $value === '#recycle' || $value === '@eaDir') {continue;} 
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
	 
	 function getHelp() {
		$helpString="<div id='helpBox'>";
		$helpString.="<div class='bold big'><i class='fas fa-keyboard'></i>&nbsp;Keyboard Shortcuts</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='yellow bold'>Playback</div>";
		$helpString.="<div>&larr;: previous track</div>";
		$helpString.="<div>&rarr;: next track</div>";
		$helpString.="<div>shift + &larr;: previous album</div>";
		$helpString.="<div>shift + &rarr;: next album</div>";
		$helpString.="<div>&uarr;: volume up</div>";
		$helpString.="<div>&darr;: volume down</div>";
		$helpString.="<div>&lt;space&gt;: play/pause</div>";
		$helpString.="<div>You can also use media keys on <br/>most multimedia keyboards</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='guestPlay yellow bold'>Browser</div>";
		$helpString.="<div class='guestPlay'>j/k: highlight previous/next item</div>";
		$helpString.="<div class='guestPlay'>o: open current selection</div>";
		$helpString.="<div class='guestPlay'>a: queue current selection</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='yellow bold'>Main</div>";
		$helpString.="<div>h: show help</div>";
		$helpString.="<div class='guestPlay'>b: show browser</div>";
		$helpString.="<div class='guestPlay'>/: go to filter box in browser</div>";
		$helpString.="<div class='guestPlay'>s: show/ search</div>";
		$helpString.="<div>t: focus tab header</div>";
		$helpString.="<div>p: show playlist</div>";
		$helpString.="<div>i: show artist information</div>";
		$helpString.="<div>l: show lyrics</div>";
		$helpString.="<div class='guestPlay'>g: show settings</div>";
		$helpString.="<div>Esc: hide all panels</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='yellow bold'>Ninja</div>";
		$helpString.="<div>shift + <i class='fas fa-step-backward'></i>: previous album</div>";
		$helpString.="<div>shift + <i class='fas fa-step-forward'></i>: next album</div>";
		$helpString.="<div class='guestPlay'>shift + <i class='fas fa-magic'></i>: add new albums to playlist</div>";
		$helpString.="<div class='guestPlay'>alt + <i class='fas fa-magic'></i>: play random album from playlist</div>";
		$helpString.="<div>shift + <i class='fas fa-arrow-up'></i>/<i class='fas fa-arrow-down'></i>: move album to top/bottom</div>";
		$helpString.="<div class='guestPlay'>shift + <i class='fas fa-times'></i>: remove all previous albums</div>";
		$helpString.="<div class='guestPlay'>ctrl + <i class='fas fa-times'></i>: remove all following albums</div>";
		$helpString.="<div class='guestPlay'>alt + <i class='fas fa-times'></i>: remove all other albums</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='bold big'><i class='fas fa-mobile-alt'></i>&nbsp;Mobile</div>";
		$helpString.="<div class='yellow bold'>Swipe Album Art</div>";
		$helpString.="<div>&larr;: previous track</div>";
		$helpString.="<div>&rarr;: next track</div>";
		$helpString.="<div>&uarr;: volume up</div>";
		$helpString.="<div>&darr;: volume down</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='yellow bold'>Long Press</div>";
		$helpString.="<div class='guestPlay'><i class='far fa-folder'></i> Album / <i class='fas fa-music'></i> Track: open context menu</div>";
		$helpString.="<div><i class='fas fa-step-backward'></i>: previous album</div>";
		$helpString.="<div><i class='fas fa-step-forward'></i>: next album</div>";
		$helpString.="<div class='guestPlay'><i class='fas fa-magic'></i>: add new albums to playlist</div>";
		$helpString.="<div><i class='fas fa-arrow-up'></i>/<i class='fas fa-arrow-down'></i>: move album to top/bottom</div>";
		$helpString.="<div class='guestPlay'><i class='fas fa-times'></i>: remove all previous albums</div>";
		$helpString.="<div><i class='far fa-play-circle'></i>/<i class='far fa-pause-circle'></i>/<i class='far fa-image'></i>: play random album from playlist</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='yellow bold'>Find Out More at ";
		$helpString.="<a tabindex='-1' class='yellow' target='_blank' href='https://www.musicco.org/#features'>musicco.org</a></div>";
		
		
		$helpString.="</div>";
		return $helpString;
	 }
	 
		function getAbout() {
		$aboutString="<div id='aboutBox'>";
			$aboutString.="<div class='bold'><a tabindex='-1' target='_blank' href='//musicco.org'><img width='310px' height='310px' src='theme/images/about.svg'/></a></div>";
			$aboutString.="<div class='bold big'><a tabindex='-1' target='_blank' href='//musicco.org'>musicco</a></div>";
			$aboutString.="<div class='bold'>A web based player for your music collection</div>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>musicco is a light-weight, web-based streaming music player for your local library</div>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>It runs easily on a very low-powered NAS like a dns-323</div>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>It'll basically work wherever you can run php with sqlite and lighttpd or nginx</div>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>Modern desktop and mobile browsers love it!</div>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>musicco is inspired by</div>";
			$aboutString.="<ul>";
			$aboutString.="<li><a tabindex='-1' target='_blank' href='//github.com/henrik242/musicbrowser#readme'>musicbrowser</a></li>";
			$aboutString.="<li><a tabindex='-1' target='_blank' href='http://encode-explorer.siineiolekala.net/'>Encode Explorer</a></li>";
			$aboutString.="<li><a tabindex='-1' target='_blank' href='//coverart.katastrophos.net'>katastrophos.net's cover art downloader</a></li>";
			$aboutString.="</ul>";
			$aboutString.="<div><br/></div>";
			$aboutString.="<div>musicco scans your music folder and builds a database of your music collection, retrieving missing cover art from <a tabindex='-1' target='_blank' href='//www.coverartarchive.org'>coverartarchive.org</a>, artist information from <a tabindex='-1' target='_blank' href='//".Musicco::getConfig('lang').".wikipedia.org/'>wikipedia.org</a>  and song lyrics from <a tabindex='-1' target='_blank' href='http://www.chartlyrics.com'>chartlyrics.com</a>. </div>";
			if (Musicco::getConfig('show_donate_button')) {
				$aboutString.="<div><br/></div>";
				$aboutString.="<div>Like musicco? Wanna buy me a beer?</div>";
				$aboutString.="<div><br/></div>";
				$aboutString.="<div>";
				$aboutString.="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'><input id='paypalCMD' type='hidden' name='cmd' value='_s-xclick'><input type='hidden' name='hosted_button_id' value='CWRGBQ6A65642'><input tabindex='-1' id='paypalIMG' type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif' border='0' name='submit'><img tabindex='-1' border='0' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' width='1' height='1'></form>";
				$aboutString.="</div>"; 
			}
			$aboutString.="<div><br/></div>";
			$aboutString.="<div class='bold big'>Release History</div>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold yellow'>2.0 (unreleased)</div>";
				$aboutString.="<li>use native html audio instead of jplayer / jplayerPlaylist</li>";
				$aboutString.="<li>Refreshed UI</li>";
				$aboutString.="<li>Added support for multiple playlists per user</li>";
				$aboutString.="<li>Added support for marking albums and tracks as favourites</li>";
				$aboutString.="<li>Improved controls for touchcreen browsers</li>";
				$aboutString.="<li>Added support for rich notifications on Android using Media Session API</li>";
				$aboutString.="<li>Added play/pause and skip actions to desktop notification</li>";
				$aboutString.="<li>Added support for quickly adding an album without scanning the entire library</li>";
				$aboutString.="<li>Handle accent-insensitive search</li>";
				$aboutString.="<li>Improved webapp manifest so you can add musicco to your Android home screen</li>";
				$aboutString.="<li>Fixed many other things!</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold yellow'>1.3 (24th September 2016)</div>";
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
				$aboutString.="<div class='bold yellow'>1.2 (May 3rd 2016)</div>";
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
				$aboutString.="<div class='bold yellow'>1.1 (25 September 2014)</div>";
				$aboutString.="<li>Android client and under-the-hood improvements to suppport it</li>";
				$aboutString.="<li>Added configuration option for cover name and log file</li>";
				$aboutString.="<li>Improved playlist panel</li>";
				$aboutString.="<li>Fixed download option for administrators in the playlist and the browser panels</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold yellow'>1.0.3</div>";
				$aboutString.="<li>More elegant management of the Fetch Cover button to provide more information about the cover fetching progress</li>";
				$aboutString.="<li>Nicer playlist screen that groups tracks by album</li>";
				$aboutString.="<li>Upgraded to jplayer 2.4.0/JQuery 2.0.3 and adapted the CSS for better display on mobile screens with a 320x480 resolutions</li>";
				$aboutString.="<li>HTML notifications are working again in this version, and keyboard actions are improved as a result</li>";
				$aboutString.="<li>New feature <i>Uncover!</i> adds 5 random albums to your playlist</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold yellow'>1.0.2</div>";
				$aboutString.="<li>Fixed minor display bugs introduced by 1.0.1 with z-index management</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold yellow'>1.0.1</div>";
				$aboutString.="<li>Improved cover management when downloading from cover art provider</li>";
				$aboutString.="<li>Added a button to manually fetch a cover</li>";
				$aboutString.="<li>Improved artist information panel and added an icon to indicate that some information is still being loaded from the server</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold yellow'>1.0 (27 April 2013)</div>";
				$aboutString.="<li>Initial release</li>";
			$aboutString.="</ul>";
		$aboutString.="</div>";
		return $aboutString;
	 }

	function printUsers() {
		$userArray="array(\n";
		foreach(Musicco::getConfig("users") as $user) {
			$userArray .= "\t array('";
			$userArray .= implode("', '", $user);
			$userArray .= "'),\n";
		}
		$userArray .= ")";
		return $userArray;
	}

	 function getWizardUI() {
		$wizard = "<html>";
		$wizard .= "<body>";
		$wizard .= "<head>";
		$wizard .= "<link rel='stylesheet' type='text/css' href='lib/font-awesome/css/all.min.css'>";
		$wizard .= "<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Montserrat' >";
		$wizard .= "<link rel='stylesheet' type='text/css' href='theme/musicco.css' >";
		$wizard .= "<script type='text/javascript' src='lib/jquery/jquery-3.3.1.min.js'></script>";
		$wizard .= "</head>";
		$wizard .= "<div class='landing'>";
		$wizard .= "<div class='landing-header'>";
		$wizard .= "<img src='theme/images/about.svg'/>".Musicco::getConfig('appName')." setup wizard";
		$wizard .= "</div>";
		$wizard .= "<br/>";
		$wizard .= "<div class='indent'>Here are a few configuration options before you start listening to your tunes.</div>";
		$wizard .= "<br/>";
		$wizard .= "<div class='indent'>You can also accept all the defaults and edit config.php later.</div>";
		$wizard .= "<form id='config' class='landing-form' method='POST'>";
		$wizard .= "<input name='saveConfig' type='hidden'>";
		$wizard .= "<fieldset>";
		$wizard .= "<legend>Access</legend>";
		$wizard .= "<div>";
		$wizard .= "<input name='require_login' type='checkbox' onclick='$(&apos;#users&apos;).toggle();'>";
		$wizard .= "<label for='require_login'>Require login</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>If you require a login, you can have several users listening to their own playlists. If you want your installation to be completely open and all your user sharing the same playlists, leave this box unchecked.</span></i>";
		$wizard .= "</div>";
		$wizard .= "<div id='users' style='display:none;'>";
		$wizard .= "<label for='users'>Users</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>Type in a list of user/password/isAdmin sets.</span></i>";
		$wizard .= "<br/>";
		$wizard .= "<textarea name='users' rows='5' cols='60'>".printUsers()."</textarea>";
		$wizard .= "</div>";
		$wizard .= "</fieldset>";
		$wizard .= "<fieldset>";
		$wizard .= "<legend>Features</legend>";
		$wizard .= "<div>";
		$wizard .= "<label for='lang'>UI language</label>";
		$wizard .= "<select name='lang'>";
		$wizard .= "<option value='en'>English</option>";
		$wizard .= "<option value='fr'>French</option>";
		$wizard .= "</select>";
		$wizard .= "</div>";
		$wizard .= "<div>";
		$wizard .= "<label for='musicRoot'>Music folder</label>";
		$wizard .= "<input name='musicRoot' value='".Musicco::getConfig('musicRoot')."'>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>The name of the folder containing your music. Create a \"music\" symbolic link to your music root folder to be on the safe side.</span></i>";
		$wizard .= "</div>";
		$wizard .= "<div>";
		$wizard .= "<label for='coverFileName'>Cover file name</label>";
		$wizard .= "<input name='coverFileName' size='10' value='".Musicco::getConfig('coverFileName')."'>";
		$wizard .= "<input name='coverExtension' size='10' value='".Musicco::getConfig('coverExtension')."'>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>The name you give to your covert art files in your music library. This is used to find covers on your disk and also to as a file name to  save covers found by the cover art downloader.</span></i>";
		$wizard .= "</div>";
		$wizard .= "<div>";
		$wizard .= "<input name='loadLyricsFromFile' type='checkbox' checked>";
		$wizard .= "<label for='loadLyricsFromFile'>Load lyrics from local .lrc files</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>Whether to load .lrc lyrics files from disk. If a .lrc file with the same name as the audio  file exists in the same folder, its contents  will be loaded into the lyrics panel before  searching online for it.</span></i>";
		$wizard .= "</div>";
		$wizard .= "<div>";
		$wizard .= "<input name='downLoadMissingCovers' type='checkbox' checked>";
		$wizard .= "<label for='downLoadMissingCovers'>Download album art</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>Whether to automatically download missing covers online. New covers will be saved to disk in the folder containing the song currently playing. Even when turning this off, you can still  trigger cover art search manually.</span></i>";
		$wizard .= "</div>";
		$wizard .= "</fieldset>";
		$wizard .= "<fieldset>";
		$wizard .= "<legend>Search</legend>";
		$wizard .= "<div>";
		$wizard .= "<label for='searchEngine'>Search engine</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>The search engine to use to search for more information about artists and lyrics. You could also try: https://google.com/search?q=.</span></i>";
		$wizard .= "<br/>";
		$wizard .= "<input name='searchEngine' size='59' value='".Musicco::getConfig('searchEngine')."'>";
		$wizard .= "</div>";
		$wizard .= "<div>";
		$wizard .= "<label for='imageSearchEngine'>Image search engine</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>The search engine to use to search for covers when none could be found automatically. You could also try: https://www.google.com/search?tbm=isch&tbs=imgo:1,isz:l&q=.</span></i>";
		$wizard .= "<br/>";
		$wizard .= "<textarea name='imageSearchEngine' rows='6' cols='60'>".Musicco::getConfig('imageSearchEngine')."</textarea>";
		$wizard .= "</div>";
		$wizard .= "</fieldset>";
		$wizard .= "<div><input class='go right' type='submit' value='hey ho let&apos;s go'></div>";
		$wizard .= "</form>";
		$wizard .= "</div>";
		$wizard .= "</body>";
		$wizard .= "</html>";
		return $wizard;
	 }
?>