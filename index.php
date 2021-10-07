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
// Default: $_CONFIG['appVersion'] = "3.1.0";
$_CONFIG['appVersion'] = "3.1.0";

// The database version compatible with this version. This is for information purposes only, since
// no backwards compatibility really exists
// Default: $_CONFIG['dbVersion'] = "3";
$_CONFIG['dbVersion'] = "3";

// Additional application information. This is used for sending as part of the user-agent string
// as part of fair use of external services APIs.
// Default: $_CONFIG['appInfo'] = "(//musicco.app)";
$_CONFIG['appInfo'] = "(//musicco.app)";

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

// For performance reasons, you may not want to
// display the entire library every time you load the
// player. This setting defines how many items are loaded
// in a batch.
// Default: $_CONFIG['libraryThreshold'] = 200;
$_CONFIG['libraryThreshold'] = 200;

// The name of the folder containing temp files.
// Default: $_CONFIG['tempFolder'] = "temp";
$_CONFIG['tempFolder'] = "temp";

// The name to use for a user's default playlist
// Default: $_CONFIG['defaultPlaylist'] = "Now Playing";
$_CONFIG['defaultPlaylist'] = "Now Playing";

// Themes available by default in the Settings panel
// Default: $_CONFIG['themes'] = array(
// 											array("#121314", "#A7A97F", "musicco"),
//											array("#383838", "#e99b45", "Origin of Symmetry"),
//											array("#2B2C2B", "#bebfc1", "Vespertine"),
//											array("#08121d", "#77c0b9", "Contretemps"),
// 											array("#1d232c", "#f78031", "The Archandroid"),
//											array("#11304a", "#c0d2e3", "Muscle Museum"),
// 											array("#600606", "#339317", "77"),
// 											array("#14140c", "#edcf85", "Shootenanny")
// 										);
$_CONFIG['themes'] = array(
											array("#121314", "#A7A97F", "musicco"),
											array("#383838", "#e99b45", "Origin of Symmetry"),
											array("#2B2C2B", "#bebfc1", "Vespertine"),
											array("#08121d", "#77c0b9", "Contretemps"),
											array("#1d232c", "#f78031", "The Archandroid"),
											array("#11304a", "#c0d2e3", "Muscle Museum"),
											array("#600606", "#339317", "77"),
											array("#14140c", "#edcf85", "Shootenanny")
										);


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
// Default: $_CONFIG['loadLyricsFromFile'] = false;
$_CONFIG['loadLyricsFromFile'] = false;

// Whether to automatically look up
// lyrics online. When disabled, all
// you get is a link to search for lyrics
// online.
// Default: $_CONFIG['lookUpLyrics'] = false;
$_CONFIG['lookUpLyrics'] = false;

// Whether to enable the ability to cast music
// to compatible chromecast devices on your
// network. Enabling this option loads the 
// google cast javascript library remotely.
// Default: $_CONFIG['isCastAllowed'] = false;
$_CONFIG['isCastAllowed'] = false;

// Whether to automatically download
// missing covers online. New covers
// will be saved to disk in the folder containing
// the song currently playing.
// Even when turning this off, you can still 
// trigger cover art search manually
// Default: $_CONFIG['downLoadMissingCovers'] = false;
$_CONFIG['downLoadMissingCovers'] = false;

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
// 6 is safe, 12 is a bit on the heavy side.
// Default: $_CONFIG['uncover_limit'] = "6";
$_CONFIG['uncover_limit'] = 6;

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
// Default: $_CONFIG['users'] = array(
// 																	array("admin", "admin", "true"),
//																	array("guest", "guest", "false")
//															);
$_CONFIG['users'] = array(
											array("admin", "admin", "true"),
											array("guest", "guest", "false")
										);

/*
 * SYSTEM
 */

// Whether or not to show the Donate button on the about page
// Default: $_CONFIG['show_donate_button'] = true;
$_CONFIG['show_donate_button'] = true;

// Whether or not the setup wizard can be re-run from the web UI after the initial configuration.
// When set to false, you will need physical access to the server to edit the configuration.
// It is recommended to set this to false on installations where no login is required 
// to avoid unwanted setup changes.
// Default: $_CONFIG['canRerunWizard'] = false;
$_CONFIG['canRerunWizard'] = false;

// Chromecast media receiver to use
// musicco uses the default cast receiver, 
// but you can specify your own chromecast receiver id
// for debugging
// Default: $_CONFIG['receiverApplicationId'] = "chrome.cast.media.DEFAULT_MEDIA_RECEIVER_APP_ID";
$_CONFIG['receiverApplicationId'] = "chrome.cast.media.DEFAULT_MEDIA_RECEIVER_APP_ID";

// You can override any of the settings above by copying them into a config.php
// file which is about to get loaded. This should simplify upgrades by avoiding 
// losing your personalised settings. If the file does not exist, you'll see a
// short installation wizard that will create it automatically.
if((!file_exists('config.php') && !isset($_POST['saveConfig'])) || isset($_POST['rerunSetup'])) {
		if(isset($_POST['rerunSetup'])) {
			include 'config.php';
		}
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
	"by" => " - ",
	"clickToUploadYourOwn" => "upload", 
	"background" => "Background",
	"colours" => "Theme",
	"clear_history" => "clear history",
	"confirm_clear_history" => "Do you really want to clear your listening history?",
	"clearing_history" => "Clearing your listening history...",
	"define_theme" => "Custom",
	"keep_screen_on" => "Keep screen on",
	"defaultCoverURL" => "http://",
	"downloadSuccessful" => "album art saved",
	"favourites_added" => "Adding favourite...",
	"favourites_removed" => "Removing favourite...",
	"fetchedAlbumArt" => "album art fetched",
	"extractedFromFile" => "album art loaded from file",
	"fetchingAlbumArt" => "fetching album art...",
	"filter_placeholder" => " filter library",
	"genius" => "genius ",
	"viewOngenius" => "View these lyrics on ",
	"google" => "the web",
	"help" => "help",
	"lastfm" => "last.fm ",
	"libraryRebuiltIn" => "library updated in ",
	"log_in" => "Log in",
	"dynamic" => "Dynamic",
	"load_more" => "More...",
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
	"playlist_modified" => "Your playlist was modified on another device, click here to reload it.", 
	"queue_all" => "Queue all", 
	"uncover_more" => "Uncover more", 
	"previoustrack" => "Previous",
	"promptCoverURL" => "Album art URL", 
	"promptPlaylistName" => "New Playlist Name", 
	"promptFolderName" => "Folder name", 
	"queueing" => "Queueing ",
	"quick_scan" => "quick scan folder",
	"rebuildingLibrary" => "library refreshing...",
	"reload" => "reload",
	"remove_shared_links" => "delete shared playlists",
	"confirm_remove_shared_links" => "Do you really want to delete shared playlists?",
	"remove_temp_files" => "clean temp folder",
	"removing_shared_links" => "deleting shared playlists...",
	"removing_temp_files" => "cleaning in progress...",
	"reset_db" => "update library",
	"run_setup" => "setup wizard",
	"select_theme" => "Preset",
	"scanning" => "Scanning ",
	"scanning_ko" => "Scanning failed",
	"scanning_ok" => "Folder scanned successfully",
	"search" => "Search on ",
	"search_placeholder" => " What are you looking for?",
	"searchingFor" => "Searching for ",
	"searchingLibrary" => "Searching library...",
	"searchingLyricsFor" => "Searching lyrics for ",
	"lookupOne" => "&nbsp;&bull;&nbsp;fetch&nbsp;&bull;&nbsp;", 
	"searchOne" => "search&nbsp;&bull;&nbsp;", 
	"seekbackward" => "Previous Album",
	"seekforward" => "Next Album",
	"show_all" => "show old",
	"text" => "Text",
	"uncovering" => "Uncovering gems ",
	"updateCoverArt" => "update album art",
	"username" => "Username",
	"wrong_pass" => "Wrong username or password",
	"your_theme" => "my theme",
	"today" => "Today",
	"yesterday" => "Yesterday",
	"this-week" => "This Week",
	"last-week" => "Last Week",
	"this-month" => "This Month",
	"this-year" => "This Year",
	"prehistoric" => "Ages ago...",
	"winter" => "Last Winter",
	"spring" => "Last Spring",
	"summer" => "Last Summer",
	"fall" => "Last Fall"
);


// French
$_TRANSLATIONS["fr"] = array(
	"..." => "...",
	"about" => "info",
	"album_sharing" => "Un peu de musique pour toi sur " . Musicco::getConfig('appName'),
	"by" => " - ",
	"clickToUploadYourOwn" => "charger", 
	"background" => "Arri&egrave;re plan",
	"colours" => "Th&egrave;me",
	"clear_history" => "effacer l'historique",
	"confirm_clear_history" => "Voulez-vous vraiment effacer votre historique d'écoute ?",
	"clearing_history" => "Suppression de l'historique en cours...",
	"defaultCoverURL" => "http://",
	"define_theme" => "Personnel",
	"keep_screen_on" => "Garder l'écran allumé",
	"downloadSuccessful" => "Couverture sauvegardée",
	"favourites_added" => "Favouris ajouté",
	"favourites_removed" => "Favouris retiré",
	"fetchedAlbumArt" => "couverture mise à jour",
	"extractedFromFile" => "couverture lue dans le fichier",
	"fetchingAlbumArt" => "téléchargement de la couverture en cours...",
	"filter_placeholder" => " filtrer la discothèque",
	"genius" => "genius ",
	"viewOngenius" => "Voir les paroles sur ",
	"google" => "le web",
	"help" => "aide",
	"lastfm" => "last.fm ",
	"libraryRebuiltIn" => "discothèque rafraichie en ",
	"log_in" => "Connexion",
	"dynamic" => "dynamique",
	"load_more" => "Charger plus...",
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
	"playlist_modified" => "La playlist a été modifiée sur un autre appareil, cliquez ici pour la recharger.", 
	"queue_all" => "Ajouter tous les albums", 
	"uncover_more" => "En chercher d'autres", 
	"previoustrack" => "Précédent",
	"promptCoverURL" => "Adresse de la couverture", 
	"promptPlaylistName" => "Nom de la playlist", 
	"promptFolderName" => "Nome du dossier", 
	"queueing" => "Ajout de ",
	"quick_scan" => "ajout rapide...",
	"rebuildingLibrary" => "scan en cours...",
	"reload" => "recharger",
	"remove_shared_links" => "supprimer les playlists partagées",
	"confirm_remove_shared_links" => "Voulez-vous vraiment supprimer les playlists partagées ?",
	"remove_temp_files" => "supprimer les fichiers temporaires",
	"removing_shared_links" => "suppression des playlists partagées...",
	"removing_temp_files" => "cleaning in progress",
	"reset_db" => "rafraichir la discothèque",
	"run_setup" => "assistant de configuration",
	"scanning" => "Scan de ",
	"scanning_ko" => "échec du scan",
	"scanning_ok" => "Dossier ajouté",
	"search" => "Chercher sur ",
	"search_placeholder" => " Que cherchez-vous ?",
	"searchingFor" => "Recherche de ",
	"searchingLibrary" => "Recherche en cours...",
	"searchingLyricsFor" => "Recherche de paroles en cours pour ",
	"lookupOne" => "&nbsp;&bull;&nbsp;récupérer&nbsp;&bull;&nbsp;", 
	"searchOne" => "&nbsp;rechercher&nbsp;&bull;&nbsp;", 
	"seekbackward" => "Album précédent",
	"seekforward" => "Album suivant",
	"select_theme" => "Prédéfini",
	"show_all" => "anciens",
	"text" => "Texte",
	"uncovering" => "Découverte en cours ",
	"updateCoverArt" => "mettre à jour la couverture",
	"username" => "Utilisateur",
	"wrong_pass" => "Utilisateur ou mot de passe invalide.",
	"your_theme" => "mon thème",
	"today" => "Aujourd'hui",
	"yesterday" => "Hier",
	"this-week" => "Cette semaine",
	"last-week" => "La semaine dernière",
	"this-month" => "Ce mois-ci",
	"this-year" => "Cette année",
	"prehistoric" => "Il y a longtemps",
	"winter" => "Cet hiver",
	"spring" => "Ce printemps",
	"summer" => "Cet été",
	"fall" => "Cet automne"
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

	function getSeason() {
		$currentMonth=DATE("m");
		$season = "winter";
		if ($currentMonth>="05" && $currentMonth<="07") {
			$season = "spring";
		} elseif ($currentMonth>="08" && $currentMonth<="10") {
			$season = "summer";
		} elseif ($currentMonth>="11") {
			$season = "fall";
		}
		return $season;
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

	public static function logo($className) {
		$logo = '<svg class="'.$className.'" viewBox="0 0 512 512">
			<rect class="logo-background" width="100%" height="100%"/>
			<path class="logo-highlight" d="m 310,110 c 0.79273,0.19707 1.53177,0.61193 2.35351,1.27734 0.58212,0.47137 0.95433,0.79683 1.25782,1.35352 0.30348,0.55669 0.54724,1.38881 0.74414,2.84765 0.3938,2.9177 0.5959,8.28122 0.96093,18.75977 0.40935,11.75045 1.22692,47.02859 1.81446,78.37694 0.2938,15.67614 0.62888,30.74365 0.93359,42.39063 0.30472,11.64701 0.57367,19.82911 0.74805,21.89261 0.30262,3.5812 0.42132,5.3791 0.94922,6.4843 0.26395,0.5527 0.70916,0.9262 1.22656,1.0782 0.5174,0.152 1.07876,0.1445 1.78516,0.1445 1.22038,0 2.33166,-0.3554 3.54492,-1.2852 1.21325,-0.9297 2.56754,-2.4136 4.47461,-4.746 5.8063,-7.1014 9.35741,-9.6218 14.46875,-10.3711 5.78713,-0.8485 22.34727,-2.0667 42.52148,-3.2286 20.17421,-1.1618 43.99543,-2.2742 64.42188,-2.9296 11.56925,-0.37131 18.57467,-0.39119 23.21093,0.2168 4.63626,0.6079 6.86574,1.7941 9.13086,3.9355 1.83521,1.735 2.84399,3.4374 3.14063,5.3496 0.29664,1.9122 -0.12489,4.0776 -1.29492,6.7227 -0.93894,2.1226 -1.7823,3.6895 -3.11328,4.8984 -1.33099,1.2089 -3.18307,2.0991 -6.22461,2.7871 -6.0831,1.376 -16.8356,1.8892 -36.99805,2.5977 -32.18901,1.1311 -53.67445,1.9517 -67.31641,2.5957 -6.82098,0.3219 -11.6802,0.6002 -14.9414,0.8515 -1.63061,0.1257 -2.86067,0.2436 -3.74414,0.3594 -0.88348,0.1158 -1.36224,0.1773 -1.75,0.3848 -0.69489,0.3719 -1.48494,1.1268 -2.4961,2.2793 -1.01116,1.1524 -2.2191,2.7013 -3.61719,4.6367 -2.79617,3.8708 -6.35575,9.2878 -10.58984,16.123 -12.72599,20.544 -19.47205,30.7465 -22.30273,33.8457 -1.23623,1.3535 -2.04943,2.0674 -3.07227,2.4688 -1.02283,0.4013 -2.33412,0.5078 -4.55859,0.5078 -2.13199,0 -3.47284,-0.1183 -4.53711,-0.4961 -1.06427,-0.3778 -1.90617,-1.0194 -3.06836,-2.1816 -0.95659,-0.9566 -1.60659,-1.6872 -2.15235,-3.3594 -0.54575,-1.6722 -0.95337,-4.2973 -1.26367,-8.875 -0.62059,-9.1555 -0.86681,-26.1101 -1.29492,-59.0938 -0.19991,-15.4017 -0.46659,-29.5383 -0.73437,-39.91012 -0.1339,-5.18591 -0.26775,-9.43082 -0.39454,-12.42383 -0.0634,-1.4965 -0.12453,-2.67927 -0.18359,-3.51562 -0.0295,-0.41818 -0.0586,-0.74926 -0.0879,-0.9961 -0.0147,-0.12341 -0.0296,-0.22531 -0.0469,-0.31445 -0.0172,-0.0891 -8.5e-4,-0.13448 -0.10547,-0.30273 -0.35828,-0.57616 -0.87759,-0.96182 -1.46875,-1.04102 -0.59117,-0.0792 -1.1905,0.12801 -1.76563,0.51172 -1.15025,0.76742 -2.30071,2.27171 -3.38867,4.4043 -0.58919,1.15489 -1.52291,3.76386 -2.61719,7.14843 -1.09428,3.38458 -2.32834,7.51089 -3.4414,11.57227 -5.32623,19.43445 -10.9205,39.00105 -16.93555,59.23245 -2.70048,9.0829 -10.08021,34.7295 -16.40234,57.0058 -8.32279,29.3257 -13.11149,45.7712 -16.50977,55.4473 -3.39828,9.6761 -5.35488,12.5079 -8.09375,14.8125 -3.83026,3.223 -10.10186,3.2509 -12.96875,0.1992 -1.67693,-1.785 -2.86783,-4.9247 -4.22266,-15.2012 -1.35483,-10.2764 -2.87065,-27.6125 -5.28906,-57.6621 -2.52069,-31.3204 -4.8271,-58.8798 -6.61719,-79.2324 -0.89504,-10.1763 -1.66083,-18.54932 -2.25976,-24.69335 -0.59893,-6.14402 -1.02215,-10.02063 -1.26172,-11.33789 -0.17027,-0.9362 -0.50011,-1.91509 -0.90039,-2.76562 -0.40028,-0.85053 -0.85068,-1.5678 -1.38086,-2.00782 -0.34662,-0.28767 -0.68317,-0.5126 -1.07617,-0.61523 -0.39301,-0.10263 -0.82561,-0.0485 -1.22071,0.14258 -0.79019,0.38217 -1.54615,1.21029 -2.73047,2.62891 -4.28102,5.12798 -9.69294,19.1077 -22.95507,58.61132 -6.29534,18.7518 -9.79372,29.0015 -12.08594,34.7383 -1.14611,2.8684 -1.992,4.6075 -2.71289,5.6973 -0.72089,1.0897 -1.28416,1.5282 -1.99414,1.9082 -1.35793,0.7267 -2.52564,0.7714 -3.71875,0.1543 -1.19311,-0.6172 -2.42086,-1.9732 -3.6211,-4.1407 -2.40046,-4.3349 -4.68079,-11.85 -6.90039,-22.7011 -2.37871,-11.6291 -4.91711,-18.2895 -9.76172,-25.586 -1.07991,-1.6264 -1.82379,-2.8556 -2.77343,-3.8183 -0.94965,-0.9628 -2.10768,-1.6194 -3.86133,-2.0508 -3.5073,-0.8629 -9.47506,-0.9523 -22.04296,-1.3106 -11.91611,-0.3397 -18.33036,-0.8118 -20.94336,-2.2187 -1.3065,-0.7035 -1.70091,-1.4861 -1.61914,-2.8203 0.0818,-1.3342 0.77651,-3.2 1.87891,-5.6289 1.49175,-3.2869 2.72741,-4.4999 6.12304,-6.002 2.4102,-1.0661 7.86901,-2.0684 14.89454,-2.76562 7.02551,-0.69724 15.65704,-1.11668 24.59178,-1.1289 l 11.20313,-0.0156 4.64062,12.96482 c 2.70249,7.5513 4.18542,11.6003 5.22852,13.709 0.52155,1.0543 0.91225,1.6539 1.45508,1.9629 0.27141,0.1545 0.5912,0.2 0.86718,0.1484 0.27598,-0.052 0.50683,-0.1735 0.72852,-0.3105 0.44896,-0.2775 0.82846,-0.7739 1.33008,-1.5176 0.50162,-0.7437 1.08434,-1.7292 1.74023,-2.9375 1.31179,-2.4166 2.91695,-5.7177 4.70899,-9.6601 3.58407,-7.8848 7.91254,-18.33587 12.08007,-29.36919 12.10548,-32.04863 19.51622,-51.26274 24.38868,-62.70312 2.43622,-5.72019 4.23935,-9.49792 5.66406,-11.94922 1.42471,-2.4513 2.47104,-3.55018 3.31445,-3.98633 1.50893,-0.78029 4.10115,-1.32923 6.4336,-1.48242 1.16622,-0.0766 2.27329,-0.0582 3.14453,0.0586 0.87123,0.11683 1.49854,0.3776 1.66992,0.55274 -0.0642,-0.0656 0.0252,0.0434 0.0918,0.2168 0.0666,0.17338 0.14746,0.42504 0.23438,0.73437 0.17385,0.61867 0.37615,1.47471 0.58984,2.49805 0.42738,2.04667 0.90263,4.76224 1.32032,7.64062 1.58914,10.95117 9.15665,82.34608 12.60546,118.9746 1.67517,17.7913 2.62693,27.2846 3.63868,32.3945 0.50587,2.555 1.01162,4.0283 1.72656,4.9356 0.71494,0.9073 1.67802,1.123 2.65625,1.123 0.58659,0 1.21992,0.013 1.87695,-0.3378 0.65703,-0.3513 1.271,-1.0184 1.97656,-2.2344 1.41113,-2.4321 3.25411,-7.1618 6.38477,-16.6758 6.26133,-19.028 17.6236,-57.1486 40.42188,-133.60743 9.33859,-31.31896 14.84044,-48.85707 19.20898,-58.74609 2.18427,-4.9445 4.08335,-7.96579 5.99805,-9.84765 1.9147,-1.88187 3.84169,-2.66025 6.24804,-3.13086 1.03824,-0.20305 1.88501,-0.22246 2.67774,-0.0254 z" />
		</svg>';
		return $logo;
	}

	public function printLoginBox() {
		?>
		<div class="landing">
			<div class="landing-header">
				<?php print Musicco::logo("logo-landing"); print(Musicco::getConfig("appName")); ?>
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
			.currentAlbum { border-right: 1px var(--text-highlight) dashed; }
			.nextTrack { color: green; }
			.nextAlbum { border-right: 1px green dashed; }
		</style>
		-->
		<meta name="theme-color" content="rgba(10, 11, 12, 0.8)">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
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
		<script type="text/javascript" src="lib/jquery/jquery.min.js"></script>
		<script type="text/javascript" defer src="lib/jquery-ui/jquery-ui.min.js"></script>
		<script type="text/javascript" defer src="lib/jquery-ui-contextmenu/jquery.ui-contextmenu.min.js"></script>
		<script type="text/javascript" defer src="lib/detect-swipe/jquery.detect_swipe.js"></script>
		<script type="text/javascript" defer src="lib/js-cookie/js.cookie.min.js"></script>
		<script type="text/javascript" defer src="lib/fancytree/jquery.fancytree-all.min.js"></script>
		<script type="text/javascript" defer src="lib/jquery-qrcode/jquery-qrcode.min.js"></script>
		<script type="text/javascript" defer src="lib/normalise/normalise.js"></script>
		<script type="text/javascript" defer src="lib/color-thief/color-thief.min.js"></script>
		<script type="text/javascript" defer src="lib/jsmediatags/jsmediatags.min.js"></script>
		<?php 
			if ($this->getConfig('isCastAllowed')) {
				echo '<script type="text/javascript" src="//www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>';
			}
		 ?>
		<script type="text/javascript">

				///////////////
			 // VARIABLES //
			///////////////

			const CHARTLYRICS_BASE_URL = "http://api.chartlyrics.com/apiv1.asmx/SearchLyricDirect"
			const GENIUS_BASE_URL = "https://genius.com/"
			var clientId = "<?php print bin2hex(random_bytes(5)); ?>";
			var playlistResfreshDelay = 5000;
			var lastInteraction;
			var viewerType = '';
			var timeUpdates = true;
			var isInit = false;
			var library = [];
			var libraryInit = [];
			var libraryVisible = [];
			var isPlaying = false;
			var isResuming = false;
			var isCasting = false;
			var castPlayerState = {};
			var castContentUrl = "";

			var Insert = Object.freeze({"top": 0, "last": 1, "next": 2, "now": 3});

			var initWakeLock = function() {
				if ('WakeLock' in window && 'request' in window.WakeLock) {
					let wakeLock = null;

					const requestWakeLock = () => {
						const controller = new AbortController();
						const signal = controller.signal;
						window.WakeLock.request('screen', {signal})
						.catch((e) => {
							if (e.name === 'AbortError') {
								console.error('Wake Lock was aborted');
							} else {
								console.error(`${e.name}, ${e.message}`);
							}
						});
						console.debug('Wake Lock is active');
						return controller;
					};

					const handleVisibilityChange = () => {
						if (wakeLock !== null && document.visibilityState === 'visible') {
							wakeLock = requestWakeLock();
						}
					};

					document.addEventListener('visibilitychange', handleVisibilityChange);
					requestWakeLock();

				} else if ('wakeLock' in navigator && 'request' in navigator.wakeLock) {
					let wakeLock = null;

					const requestWakeLock = async () => {
						try {
							wakeLock = await navigator.wakeLock.request('screen');
							wakeLock.addEventListener('release', (e) => {
								console.debug(e);
								console.debug('Wake Lock was released');
							});
							console.debug('Wake Lock is active');
						} catch (e) {
							console.error(`${e.name}, ${e.message}`);
						} 
					};

					const handleVisibilityChange = () => {
						if (wakeLock !== null && document.visibilityState === 'visible') {
							requestWakeLock();
						}
					};

					document.addEventListener('visibilitychange', handleVisibilityChange);
					requestWakeLock();

				} else {
					console.error('Wake Lock API not supported.');
				}
			}

			var initializeCastApi = function() {
				var castContext = cast.framework.CastContext.getInstance();
				castContext.setOptions({
					receiverApplicationId: <?php print $this->getConfig('receiverApplicationId'); ?>,
					autoJoinPolicy: chrome.cast.AutoJoinPolicy.ORIGIN_SCOPED
				});
				castContext.addEventListener(
					cast.framework.CastContextEventType.SESSION_STATE_CHANGED,
					function(event) {
						console.debug("SESSION_STATE_CHANGED: " + event.sessionState);
						console.debug(event);
						switch (event.sessionState) {
							case cast.framework.SessionState.SESSION_STARTED:
								console.debug('CastContext: CastSession connected: ' + event.session.getSessionId());
								startCasting();
							break;
							case cast.framework.SessionState.SESSION_RESUMED:
								console.debug('CastContext: CastSession resumed: ' + event.session.getSessionId());
								castSession = cast.framework.CastContext.getInstance().getCurrentSession();
								var hasPlaylist = castSession.getSessionObj().media.length;
								if (isAndroid()) {
									if (hasPlaylist) {
										resumeCasting();
									} else {
										startCasting();
									}
								} else {
									resumeCasting();
								}
							break;
							case cast.framework.SessionState.SESSION_ENDING:
								console.debug('CastContext: CastSession disconnecting');
							break;
							case cast.framework.SessionState.SESSION_ENDED:
								console.debug('CastContext: CastSession disconnected');
								saveCastPlayerState();
								stopCasting();
							break;
						}
					});
				castPlayer = new cast.framework.RemotePlayer();
				castController = new cast.framework.RemotePlayerController(castPlayer);
				castController.addEventListener(
					cast.framework.RemotePlayerEventType.ANY_CHANGE,
					function(event) {
						console.debug("ANY_CHANGE");
						console.debug(event);
						switch (event.field) {
							case "duration":
								durationChange(event.value);
							break;
							case "currentTime":
								timeUpdate(event.value);
							break;
							case "mediaInfo":
								if (event.value != null) {
									if (event.value["contentUrl"] != castContentUrl) {
										loadTrack(event.value["contentId"]);
										castContentUrl = event.value["contentUrl"];
									}
								}
							break;
							case "isPaused":
								updatePlayPauseIcons(event.value);
							break;
						}
					});
				castController.addEventListener(
					cast.framework.RemotePlayerEventType.PLAYER_STATE_CHANGED,
					function(event) {
						console.debug("PLAYER_STATE_CHANGED");
						console.debug(event);
						switch (event.playerState) {
							case "PAUSED":
								updatePlayPauseIcons(true);
							break;
							case "PLAYING":
								updatePlayPauseIcons(false);
							break;
						}
					});

			};

			var musiccoService;
			if ('serviceWorker' in navigator) {
				window.addEventListener('load', function() {
					 navigator.serviceWorker.register('musicco.js').then(function(registration) {
						// Registration was successful
						console.debug('ServiceWorker registration successful with scope: ', registration.scope);
						musiccoService = registration;
					}, function(err) {
						// registration failed :(
						musiccoService = null;
						console.warn('ServiceWorker registration failed: ', err);
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
								triggerButton("next");
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
			var localVolume = 1;

			var castSession = null;
			var castPlayer = null;
			var castController = null;

			var albumProps = ["cover", "year", "artist", "album", "parentfolder"];

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

			window['__onGCastApiAvailable'] = function(isAvailable) {
				if (isAvailable) {
					setTimeout(function(){ initializeCastApi(); }, 500);
				}
			};

			////////////////
			// Functions //
			//////////////

			function regexEscape(string) {
				return string.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
			}

			function resetLastInteraction() {
				lastInteraction = Date.now() - playlistResfreshDelay - 1000;
			}

			function getRepeatMode() {
				return (playerConfig["shuffled"] == true) ? chrome.cast.media.RepeatMode.ALL_AND_SHUFFLE 
							: (playerConfig["loop"] == false) ? chrome.cast.media.RepeatMode.OFF 
							: chrome.cast.media.RepeatMode.ALL;
			}

			function updatePlayPauseIcons(isPaused) {
				$('.play-pause').prop("checked", isPaused);
				isPlaying = !isPaused;
			}

			function nextMedia() {
				resetLastInteraction();
				if (playerConfig["shuffled"]) {
					playRandomTrack();
				} else if ( (playerConfig["loop"] == false) && ($(nextTrack).index("#playlist li[data-nature=track]") == 0) ){
					loadTrack(0);
					updatePlayPauseIcons(true);
				} else {
					playTrack(nextTrack);
				}
			}

			function durationChange(provided) {
				var duration = (provided != null) ? provided : player.duration;
				$("#duration").html(getDuration(duration));
				$("#big-jp-progress").slider( "option", "max", parseInt(duration) );
			}

			function timeUpdate(provided) {
				var currentTime = (provided != null) ? provided : player.currentTime;
				$("#current_time").html(getDuration(currentTime));
				if (timeUpdates) {
					$("#big-jp-progress").slider( "option", "value", parseInt(currentTime) );
				}
			}

			function convertPlaylist(autoplay) {
				var repeat = (playerConfig["shuffled"] == true || playerConfig["loop"] == true) ? true : false;
				var current = Math.max($(".currentTrack").index("#playlist li[data-nature=track]"), 0);
				var queueItems = $("#playlist").find("li[data-nature=track]").map(function() {
					var isCurrent = $(this).hasClass("currentTrack") ? true : false;
					var contentId = $(this).index("#playlist li[data-nature=track]");
					var queueItem;
					var mediaInfo = new chrome.cast.media.MediaInfo(contentId, "audio/mpeg");
					mediaInfo.contentUrl = buildMediaSrc(getBaseURL() + $(this).data("parentfolder"), $(this).data("path"));
					mediaInfo.metadata = new chrome.cast.media.MusicTrackMediaMetadata();
					mediaInfo.metadata.metadataType = chrome.cast.media.MetadataType.MUSIC_TRACK;
					mediaInfo.metadata.title = $(this).data("songtitle");
					mediaInfo.metadata.artist = $(this).data("artist");
					mediaInfo.metadata.albumName = $(this).data("album");
					mediaInfo.metadata.releaseDate = $(this).data("year");
					mediaInfo.metadata.images = [
						{'url': getBaseURL() + $(this).data("cover")}
					];
					queueItem = new chrome.cast.media.QueueItem(mediaInfo);
					queueItem.startTime = 0;
					queueItem.autoplay = true;
					queueItem.preloadTime = 20;
					return queueItem;
				}).get();
				var queueWithCurrentFirst = [];
				if (queueItems.length) {
					queueItems[0].autoplay = repeat;
					queueItems[current].startTime = player.currentTime;
					queueItems[current].autoplay = autoplay;
					queueWithCurrentFirst = (queueItems.slice(current, queueItems.length)).concat(queueItems.slice(0, current));
				}
				return queueWithCurrentFirst;
			}

			function startCasting() {
				isCasting = true;
				castSession = cast.framework.CastContext.getInstance().getCurrentSession();
				disableLocalPlayer();
				if (!isResuming) {
					loadCastQueue(isPlaying);
				}
			}

			function resumeCasting() {
				isResuming = true;
				startCasting();
				var mediaSession = castSession.getMediaSession();
				if (mediaSession != null) {
					loadTrack(mediaSession.media.contentId);
					updatePlayPauseIcons(mediaSession.playerState == chrome.cast.media.PlayerState.PAUSED);
				}
			}

			function stopCasting() {
				isCasting = false;
				isResuming = false;
				castSession.endSession(true);
				castSession = null;
				if (hasPlaylist()) {
					loadTrack(castPlayerState["contentId"]);
					player.currentTime = castPlayerState["currentTime"];
					player.duration = castPlayerState["duration"];
					enableLocalPlayer();
					if (!castPlayerState["isPaused"]) {
						player.play();
					}
				}
			}

			function saveCastPlayerState() {
				castPlayerState["currentTime"] = castPlayer.currentTime;
				castPlayerState["duration"] = castPlayer.duration;
				castPlayerState["isPaused"] = castPlayer.isPaused;
				castPlayerState["contentId"] = (castPlayer.mediaInfo != null) ? castPlayer.mediaInfo["contentId"] : 0;
			}

			function replaceCastQueue() {
				var playlistLength = $("#playlist li[data-nature=track]").length;
				var newCastQueue = convertPlaylist(true);
				var mediaSession = castSession.getMediaSession();
				if (mediaSession != null) {
					var currentTrack = mediaSession.currentItemId;
					var removeQueueItems = [];
					// This is a fix for #168: we are arbitrarily removing items because there is no way
					// to know the size of the remote queue when using the default web receiver. 
					// This is probably not ideal, but at least the cast sdk seems to be able to ignore
					// item IDs that do not exist in the queue without complaint.
					for (i = currentTrack + 1; i < currentTrack + 1 + 400; i++) {
						removeQueueItems.push(i);
					}
					var items = new chrome.cast.media.QueueRemoveItemsRequest(removeQueueItems);
					castSession.getMediaSession().queueRemoveItems(items, () => {
						console.debug("removed items from cast queue");
						queueCastItems(newCastQueue.slice(1, newCastQueue.length))
					}, (e) => {
						console.debug("failed to remove items from cast queue");
						console.debug(e);
					});
				}
			}

			function loadCastQueue(autoplay) {
					isResuming = false;
					var remotePlaylist = convertPlaylist(autoplay);
					var playlistRequest = new chrome.cast.media.QueueLoadRequest(remotePlaylist.slice(0, 1));
					castSession.getSessionObj().queueLoad(playlistRequest, () => {
						console.debug("queue loaded");
						queueCastItems(remotePlaylist.slice(1, remotePlaylist.length))
					}, (e) => {
						console.warn("queue load error");
						console.warn(e);
					});
			}

			function queueCastItems(queueItems) {
				var i, j , chunks = 30;
				for (i = 0, j = queueItems.length; i < j; i+=chunks) {
					var items = new chrome.cast.media.QueueInsertItemsRequest(queueItems.slice(i, i + chunks));
					castSession.getMediaSession().queueInsertItems(items, () => {
						console.debug("appended playlist chunk");
					}, (e) => {
						console.warn("failed to append playlist chunk");
						console.warn(e);
					});
				}
			}

			function disableLocalPlayer() {
				localVolume = player.volume;
				player.volume = 0;
				$("#big-volume-bar").slider("option", "value", castSession.getVolume() * 100);
				player.removeEventListener("durationchange", durationChange);
				player.removeEventListener("timeupdate", timeUpdate);
				player.removeEventListener("ended", nextMedia);
				player.removeEventListener("play", playEventListener);
			}

			function enableLocalPlayer() {
				player.addEventListener("play", playEventListener);
				player.addEventListener("ended", nextMedia);
				player.addEventListener("timeupdate", function(){timeUpdate()});
				player.addEventListener("durationchange", function(){durationChange()});
				player.volume = localVolume;
				$("#big-volume-bar").slider("option", "value", localVolume * 100);
			}

			function playEventListener() {
				updatePlayPauseIcons(player.paused);
				if (player.volume != ($("#big-volume-bar").slider("option", "value") / 100)) {
					$(player).animate({volume: ($("#big-volume-bar").slider("option", "value") / 100)}, 200);
				}
			}

			function setCurrentTime(time) {
				if (isCasting) {
					castPlayer.currentTime = time;
					castController.seek();
				}
					player.currentTime = time;
			}

			function blurPlayer() {
				if (isPortrait()) {
					if ($("#leftPanel").is(":visible")) {
						$("#big-player").addClass("blur");
						$("#mini-controls").show();
					} else {
						$("#big-player").removeClass("blur");
						$("#mini-controls").hide();
					}
				} else {
					$("#big-player").removeClass("blur");
					$("#mini-controls").hide();
				}
			}

			function isDynamicTheme() {
			return ($("#theme_settings input[name=option_theme]:checked").attr("id") === "dynamic" )
			}

			function isCustomTheme() {
			return ($("#theme_settings input[name=option_theme]:checked").attr("id") === "custom" )
			}

			function isDefaultPoster() {
				return (nowPlaying["cover"] == null);
			
			}

			function resetPlaylists() {
				getPlaylists(loadPlaylist);
			}

			function setTheme(coverUrl) {
				var albumArt = new Image();
				albumArt.addEventListener("load", function(){
					var colorThief = new ColorThief();
					var imagePalette = colorThief.getPalette(albumArt, 2);
					var backgroundRGB = imagePalette[0];
					var textRGB = imagePalette[1];
					if (luminance(backgroundRGB[0], backgroundRGB[1], backgroundRGB[2]) > luminance(textRGB[0], textRGB[1], textRGB[2])) {
						backgroundRGB = imagePalette[1];
						textRGB = imagePalette[0];
					}
					if (luminance(textRGB[0], textRGB[1], textRGB[2]) < .4) {
						textRGB = [Math.min(200, textRGB[0] + 60), Math.min(200, textRGB[1] + 60), Math.min(200, textRGB[2] + 60)];
					} else if (luminance(textRGB[0], textRGB[1], textRGB[2]) > .7) {
						textRGB = [Math.max(0, textRGB[0] - 60), Math.max(0, textRGB[1] - 60), Math.max(0, textRGB[2] - 60)];
					}
					$("#background").val(rgbToHex(backgroundRGB[0], backgroundRGB[1], backgroundRGB[2])).trigger("change");
					$("#text").val(rgbToHex(textRGB[0], textRGB[1], textRGB[2])).trigger("change");
				});
				albumArt.src = coverUrl;
				if (CSS.supports("backdrop-filter", "blur(10px)")) {
					$("body").css("background-image", "url(\"" + coverUrl + "\")");
				}
				$("body").addClass("magic");
			}

			function luminance(r, g, b) {
				var a = [r, g, b].map(function (v) {
						v /= 255;
						return v <= 0.03928
								? v / 12.92
								: Math.pow( (v + 0.055) / 1.055, 2.4 );
				});
				var luminance = a[0] * 0.2126 + a[1] * 0.7152 + a[2] * 0.0722;
				return luminance;
			}

			function setColour(id, value) {
				document.documentElement.style.setProperty("--" + id, value);
				document.documentElement.style.setProperty("--" + id + "-transparent", value + "80");
				document.documentElement.style.setProperty("--" + id + "-highlight", increase_brightness(value, (id == "background")? 10: 70));
			}

			function componentToHex(c) {
					var hex = c.toString(16);
					return hex.length == 1 ? "0" + hex : hex;
			}

			function rgbToHex(r, g, b) {
					return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
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

			function volumeUp() {
				$("#big-volume-bar").slider("value", $("#big-volume-bar").slider("option", "value") + 10);
				saveSettings();
			}

			function volumeDown() {
				$("#big-volume-bar").slider("value", $("#big-volume-bar").slider("option", "value") - 10);
				saveSettings();
			}

			function setVolume(volume) {
				$("#big-volume-bar").addClass("hovered").delay(1000).queue(function(n) { $("#big-volume-bar").removeClass("hovered"); n();});
				if (isCasting) {
					castPlayer.volumeLevel = volume;
					castController.setVolumeLevel();
				} else {
					player.volume = volume;
				}
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
				updatePlayPauseIcons(true);
				if (isCasting) {
					castController.stop();
				} else {
					player.pause();
					player.src = "";
				}
				$("#album-art").attr("src", "").hide();
				$(".logo-player").show();
				$("#nowPlaying_songtitle, #nowPlaying_artist, #nowPlaying_album, #nowPlaying_year").html("");
				$("#duration, #current_time").html("00:00");
			}

			function buildMediaSrc(parentfolder, path) {
				return encodeURI(parentfolder + path).replace("#", "%23");
			}

			function updateUI() {
				$("#album-art").attr("src", nowPlaying["cover"]);
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
			}

			function fallbackTrack(track) {
				if ($('.play-pause').prop("checked")) {
					loadTrack($(track).index("#playlist li[data-nature=track]"));
				} else {
					playTrack(track);
				}
			}

			function loadTrack(trackNumber) {
				var track = $("#playlist li[data-nature=track]:eq(" + Math.max(trackNumber, 0) + ")");
				$("#playlist li").removeClass("currentTrack currentAlbum previousAlbum previousTrack nextTrack nextAlbum ");
				$(track).addClass("currentTrack");
				$.each($(track).data(), function(key, value) { nowPlaying[key] = value; });
				player.src = buildMediaSrc($(track).data("parentfolder"), $(track).data("path"));
				refreshPlaylist();
				updateUI();
			}

			function playTrack(track) {
				var trackNumber = $(track).index("#playlist li[data-nature=track]");
				loadTrack(trackNumber);
				if (isCasting) {
					loadCastQueue(true);
				} else {
					player.play();
				}
				updatePlayPauseIcons(false);
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
				if ($("#playlist li[data-nature=album]").length > 1) {
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
					var tracks = [ $(previousTrack).data("parentfolder") + $(previousTrack).data("path"),  $(nextTrack).data("parentfolder") + $(nextTrack).data("path") ];
					setTimeout(function(){ postMessage({command: "preload", tracks: tracks}); }, 8000);
				}
			}

			function restorePanel(resume) {
				var panel = ($(".panel[class~='shown']").not("[class*='default']"));
				if (panel.length) {
					if (resume) {
						$("#leftPanel").show(100, function() { blurPlayer() });
					}
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
					var group = "_" + x[key];
					(rv[group] = rv[group] || []).push(x);
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
					$("#playlist").trigger("updated");
					setTimeout(function() {
						if (playAfter) {
							if (isCasting) {
								if (!isPlaying) {
									playTrack($("#playlist").find("li[data-nature=track]").first());
									isPlaying = !player.paused;
								} 
							} else {
								playTrack($("#playlist").find("li[data-nature=track]").first());
							}
						}
					}, 400);
				}, "json");
			}

			function filterTree() {
				var tree = $.ui.fancytree.getTree("#library");
				tree.reload(library);
				var filterText = normalise($("#filterText").val().toLowerCase());
				var isNew = new RegExp("<?php print $this->getConfig('new_marker'); ?>", "i");
				var isMatching = new RegExp(regexEscape(filterText), "i");
				if ($("#includeOldAlbums").is(':checked')) {
					tree.filterBranches(function(node) {
						return isMatching.test(normalise(node.data.path));
					});
				} else {
					tree.filterBranches(function(node) {
						return isNew.test(node.data.path) && isMatching.test(normalise(node.data.path));
					});
				}
			}

			function triggerButton(button) {
				$(".big-jp-" + button).clearQueue();
				$(".big-jp-" + button).addClass("shift-" + button).delay(200).queue(function() { $(this).removeClass("shift-" + button); });
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
				// 67: c
				// 69: e
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
					customKeyEvents.push(13, 27, 32, 37, 38, 39, 40, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 65, 66, 67, 69, 71, 72, 73, 76, 80, 83, 84, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 174, 174, 175, 177, 177, 178, 179, 191, 223);
				}
				
				if (customKeyEvents.indexOf(e.keyCode) > -1) {
					switch (e.keyCode) {
						case 13: //enter
							if ($(".searchResult, .searchResultParent").is(':focus')) {
								$(".searchResult:focus, .searchResultParent:focus").trigger('mouseup');
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
							if (e.shiftKey) {
								$(".currentAlbum .move-up").trigger("click");
							} else {
								volumeUp();
							}
						break;
						case 175: //media volume up
							volumeUp();
						break;
						
						case 40: //down arrow
							if (e.shiftKey) {
								$(".currentAlbum .move-down").trigger("click");
							} else {
								volumeDown();
							}
						break;
						case 174: //media volume down
							volumeDown();
						break;
					
						case 37: //left arrow
						case 177: //media previous
							triggerButton("previous");
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
							triggerButton("next");
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
								$.ui.fancytree.getTree("#library").getFirstChild().setActive();
							}
						break;

						case	67: // c
							togglePanel("#historyPanel");
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
								queueMusic(node.data.parentfolder + node.data.path + slash, node.data.songtitle, Insert.last);
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

						case 69: //e
							if (e.shiftKey || e.ctrlKey) {
							} else {
								jump(9.9);
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
				 $("span.fa-play-before").append(playBeforeIcon());
				 $("span.fa-play-next").append(playNextIcon());
				 $("span.fa-play-last").append(playLastIcon());
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
						queueMusic(node.data.parentfolder + node.data.path + slash, node.data.songtitle, Insert.last);
					break;
					case "playRightNow":
						var slash = node.isFolder()? "/": "" ;
						queueMusic(node.data.parentfolder + node.data.path + slash, node.data.songtitle, Insert.top);
					break;
					case "playAsNextAlbum":
						var slash = node.isFolder()? "/": "" ;
						queueMusic(node.data.parentfolder + node.data.path + slash, node.data.songtitle, Insert.next);
					break;
					case "playBefore":
						var slash = node.isFolder()? "/": "" ;
						var location = Insert.before;
						if (isFirstAlbumPlaying()) {
						location = Insert.top;
						}
						queueMusic(node.data.parentfolder + node.data.path + slash, node.data.songtitle, location);
					break;
					case "goto_artist":
						goToArtist(node.data.artist);
					break;
					case "share": 
						var path = node.data.parentfolder + node.data.path;
						var separator = (node.data.artist == '')? "" : " - ";
						var info = node.data.artist + separator + node.title;
						var image = node.data.cover;
						saveGuestPlaylist(path, info, image);
					break;
					case "download":
						downloadTrack(node.data.parentfolder, node.data.path)
					break;
					case "downloadAlbum":
						downloadAlbum(node.data.parentfolder + node.data.album, node.data.album);
					break;
					case "favourite":
						addFavourite(node.data.parentfolder + node.data.path);
					break;
					case "removeFavourite":
						deleteFavourite(node.data.parentfolder + node.data.path);
					break;
				}
			}

			function initLibraryTree() {
					var libraryThreshold = <?php print $this->getConfig('libraryThreshold'); ?>;
					var libraryOffset = libraryThreshold;
					$.post('?', {querydb: '', root: decodeURI(musicRoot), type: 'browse'}, function(response) {
						library = JSON.parse(response);
						var isLargeLib = (library.length > libraryThreshold) ? true : false ;

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
							source: (isLargeLib) ? library.slice(0,libraryThreshold) : library,
							beforeExpand: function(event, data) {
								if (event.which === 3) {
									return false;
								}
							},
							lazyLoad: function(event, data) {
								var node = data.node;
								var root = node.data.parentfolder + node.data.path + "/";
								data.result = {
									url: "?",
									type: "POST",
									data: {querydb: '', root: decodeURI(root), type: 'browse'},
									cache: true
								}
							},
							clickPaging: function(event, data) {
								var nodes = library.slice(libraryOffset, libraryOffset + libraryThreshold);
								data.node.replaceWith(nodes).done(function(){
									if (nodes.length < libraryThreshold) {
										//data.node.remove(); // unnecessary, add a control to clear instead?
									} else {
										libraryOffset = libraryOffset + libraryThreshold;
										addPagingNode(libraryOffset, libraryThreshold);
									}
								});
							}
						});
						if (isLargeLib) {
							addPagingNode(libraryOffset, libraryThreshold);
						}
						libraryInit = getTreeContent();
					});
			}

			function getTreeContent() {
				return $.ui.fancytree.getTree("#library").getRootNode().children;
			}

			function trimLibrary() {
				$.ui.fancytree.getTree("#library").reload(libraryInit);
			}

			function addPagingNode(offset, limit) {
				$.ui.fancytree.getTree("#library").getRootNode().addPagingNode({
					title: "<?php print Musicco::getString('load_more'); ?>",
					data: {offset: offset, limit: limit, path: ''}
				});
				libraryVisible = getTreeContent();
			}

			function positionSafe(ui) {
				var menuHeight = ui.menu.children().length * 42;
				if (window.innerHeight - ui.target.offset().top < menuHeight) {
					var fixedPos = window.innerHeight - menuHeight;
					$(".ui-menu").css("top", fixedPos + "px");
				}
			}

			function initContextMenus() {
				$("#searchPanel").contextmenu({
					open: function(event, ui){ positionSafe(ui) },
					delegate: ".searchResult,.searchResultParent",
					autoFocus: true,
					closeOnWindowBlur: false,
					preventContextMenuForPopup: true,
					menu: menuOptions,
					select: function(event, ui) {
						var node = {
							folder: ui.target.data("folder"),
							title: ui.target.data("title").replace("/", ""),
							data: {
								album: ui.target.data("album"),
								artist: (ui.target.data("artist").length > 0 ? ui.target.data("artist") : ui.target.data("path")),
								cover: ui.target.data("cover"),
								parentfolder: ui.target.data("parentfolder"),
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
					open: function(event, ui){ positionSafe(ui) },
					delegate: "span.fancytree-title",
					autoFocus: true,
					closeOnWindowBlur: false,
					preventContextMenuForPopup: true,
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
					open: function(event, ui){ positionSafe(ui) },
					delegate: ".fancytree-node:not('.fancytree-statusnode-paging, .fancytree-statusnode-nodata') > span.fancytree-title",
					autoFocus: true,
					closeOnWindowBlur: false,
					preventContextMenuForPopup: true,
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
							console.warn("Node was null, unsure what the status of keyboard support is in that case");
						}
					},
					select: function(event, ui) {
						var node = $.ui.fancytree.getNode(ui.target);
						handleMenuSelection(node, ui.cmd);
					}
				});

				$("#playlist").contextmenu({
					open: function(event, ui){ positionSafe(ui) },
					delegate: "li",
					autoFocus: true,
					closeOnWindowBlur: false,
					preventContextMenuForPopup: true,
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
									downloadAlbum(target.data("parentfolder"), target.data("album"));
								} else {
									downloadTrack(target.data("parentfolder"), target.data("path"));
								}
							break;
							case "share":
								var path = target.data("parentfolder");
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
									addFavourite(target.data("parentfolder"));
								} else {
									addFavourite(target.data("parentfolder") + target.data("path"));
								}
							break;
						}
					}
				});
			}

			function downloadTrack(parentfolder, track) {
				window.open("?getTrack&album=" + parentfolder + "&track=" + track);
			}

			function downloadAlbum(parentfolder, album) {
				window.open("?getAlbum&parentfolder=" + encodeURIComponent(parentfolder) + "&album=" + encodeURIComponent(album));
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
					nodata: false,
					selectMode: 1,
					postProcess: function(event, data) {
						if (data.response.length != 0 ) {
							data.response[0].title = "<?php print Musicco::getString('my_favourites'); ?>";
							data.response[0].icon = "fas fa-heart";
						}
					}
				});
				$.ui.fancytree.getTree("#favourites").getPersistData();
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
					if (response) {
						var imagePath = (encodeURIComponent(path) + "<?php print $this->getConfig('coverFileName'); ?><?php print $this->getConfig("coverExtension"); ?>").replace(/#/g, "%23") + "?" + Math.floor(Date.now());
						if (!isTooLate()) { printCover(imagePath); };
					}
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
				var time = Math.floor(player.currentTime);
				$.post('?', {savePlaylist: '', u: user, i: clientId, n: name, p: JSON.stringify(playlist), c: current, t: time}, function (response) {
				});
				saveHistory();
			}

			function createNewPlaylist(name) {
				player.pause();
				$("#playlist_select").append('<option value="' + name + '">' + name  + '</option>');
				$("#playlist_select").val(name);
				clearPlaylist();
			}

			function deletePlaylist(name) {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				$.post('?', {deletePlaylist: '', u: user, i: clientId, n: name}, function (response) {
				});
			}

			function renamePlaylist(oldName, newName) {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				$.post('?', {renamePlaylist: '', u: user, o: oldName, n: newName}, function (response) {
				});
			}

			function getPlaylists(callback) {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				if (user!="") {
					$.post('?', {getPlaylists: '', u: user}, function(response) {
						$("#playlist_select").children().remove().end();
						var playlists = JSON.parse(response);
						$.each(playlists, function (i, name) {
							$("#playlist_select").append('<option value="' + i + '">' + name  + '</option>');
						});
					});
					if (callback != null) {
						callback();
					}
				}
			}

			function insertHistoryItem(artist, album) {
					var markup = '<li><i class="fa-fw ' + randomIcon() + '"></i><span class="historyArtist">' + artist + '</span><br/><span class="historyAlbum">' + album + '</span></li>';
					$('#history li:contains("' + album + '")').remove();
					if ( $('#today li').length > 0 ) {
						$("#today li:first").before(markup);
					} else {
						$("#today").append(markup);
					}
			}

			function saveHistory() {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				var artist = nowPlaying["artist"];
				var album = nowPlaying["album"];
				if (user && artist && album) {
					insertHistoryItem(artist, album);
					$.post('?', {saveHistory: '', u: user, i: artist, a: album}, function(response) {
					});
				}
				updateHistoryCategories();
			}

			function getHistory() {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				if (user!="") {
					$.post('?', {getHistory: '', u: user}, function(response) {
						$("#history li").remove();
						var history = JSON.parse(response);
						$.each(history, function (i, item) {
							$(getRelativeDate(item.timestamp)).append('<li><i class="fa-fw ' + randomIcon() + '"></i><span class="historyArtist">' + item.artist + '</span><br/><span class="historyAlbum">' + item.album + '</span></li>');
							});
					});
				}
				updateHistoryCategories();
			}

			function randomIcon() {
				var icons = ["fas fa-record-vinyl", "fas fa-compact-disc", "fas fa-drum", "fas fa-guitar", "fas fa-headphones"];
				return icons[Math.floor(Math.random() * icons.length)];
			}

			function updateHistoryCategories() {
				$("#history ul:not(:has(li))").hide();
				$("#history ul:has(li)").show();
			}

			function getRelativeDate(timestamp) {
				timestamp = timestamp * 1000;
				var day = 24 * 60 * 60 * 1000;
				var now = new Date();
				var today = now.setHours(0, 0, 0, 0);
				var yesterday = today - day;
				var thisWeek = new Date(now.setDate(now.getDate() - now.getDay() + (now.getDay() == 0 ? -6:1))).setHours(0, 0, 0, 0);
				var lastWeek = thisWeek - 7 * day;
				var thisMonth = new Date(now.getFullYear(), now.getMonth(), 1).setHours(0, 0, 0, 0);
				var thisSeason = thisMonth - 3 * 31 * day;
				var thisYear = new Date(now.getFullYear(), 0, 1).setHours(0, 0, 0, 0);
				var fuzzy;
				if (timestamp < thisYear) {
					fuzzy = "#prehistoric";
				} else if (timestamp < thisSeason) {
					fuzzy = "#this-year";
				} else if (timestamp < thisMonth) {
					fuzzy = "#this-season";
				} else if (timestamp < lastWeek) {
					fuzzy = "#this-month";
				} else if (timestamp < thisWeek) {
					fuzzy = "#last-week";
				} else if (timestamp < yesterday) {
					fuzzy = "#this-week";
				} else if (timestamp < today) {
					fuzzy = "#yesterday";
				} else {
					fuzzy = "#today"
				}
				return fuzzy;
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
						type: "GET",
						url: "?head&url=" + getBaseURL() + "<?php print Musicco::getConfig("musicRoot") ?>.lock", 
						complete: function(data) {
							if (data.responseText < 400) {
								tempHTML = ("<?php print $this->getString("rebuildingLibrary"); ?>");
								$("#reset_db").html(tempHTML);
								setTimeout(worker, 10000);
							} else {
								tempHTML = oldHTML;
								$("#reset_db").html(tempHTML);
								var library = $.ui.fancytree.getTree("#library");
								if (library && library.length > 0) {
									initLibraryTree();
								}
								updateFavourites();
							}
						}
					});
				})();
			}

			function setCastRepeatMode() {
				// This sets everything as expected but seems to be completely ignored in the end ¯\_(ツ)_/¯
				if (isCasting) { 
					var mediaSession = castSession.getMediaSession();
					if (mediaSession != null) {
						castSession.getMediaSession().queueSetRepeatMode(getRepeatMode(), () => {
							console.debug("set repeat mode");
						}, (e) => {
							console.warn("failed to set repeat mode");
							console.warn(e);
						});
					}
				}
			}

			function saveSettings() {
				if (isInit) {
					var user = "<?php echo AuthManager::getUserName(); ?>";
					setCastRepeatMode();
					if (user!="") {
						var panel = $(".panel.shown").attr("id");
						var volume = $("#big-volume-bar").slider("option", "value");
						var loop = playerConfig["loop"];
						var shuffled = playerConfig["shuffled"];
						var wakelock = $("#wakelock").prop("checked");
						var theme = $("#theme_settings input[name=option_theme]:checked").attr("id");
						var background = $("#background").val();
						var text = $("#text").val();
						var custom_background = $("#my_theme").data("background");
						var custom_text = $("#my_theme").data("text");
						$.post('?', {saveSettings: '', u: user, p: panel, v: volume, l: loop, s: shuffled, w: wakelock, m: theme, b: background, t: text, cb: custom_background, ct: custom_text}, function(response) {
						});
					}
				}
			}

			function loadSettings() {
				var user = "<?php echo AuthManager::getUserName(); ?>";
				if (user!="") {
					$.post('?', {loadSettings: '', u: user}, function(response) {
						var options = JSON.parse(response);
						showPanel("#" + options.panel);
						$("#big-volume-bar").slider("option", "value", parseInt(options.volume));
						if (options.loop === "true") {
							$('#loop').trigger("click");
						}
						if (options.shuffled === "true") {
							$('#shuffled').trigger("click");
						}
						setCastRepeatMode();
						if (options.wakelock === "true") {
							$('#wakelock').prop("checked", true);
							$('label[for=wakelock] i').toggleClass("fa-toggle-off fa-toggle-on");
							initWakeLock();
						}
						$("#theme_settings input[id=" + options.theme + "]").prop("checked", true).trigger("click");
						$("#background").val(options.background).trigger("change");
						$("#text").val(options.text).trigger("change");
						$("#my_theme").data('background', options.custom_background);
						$("#my_theme").data('text', options.custom_text);
						$("#my_theme_background").css('background-color', options.custom_background);
						$("#my_theme_text").css('background-color', options.custom_text);
						isInit = true;
					});
				}
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
					$.post('?', {loadPlaylist: '', u: user, i: clientId, n: name}, function(response) {
						var data = JSON.parse(response.playlist)[0];
						var needsBuilding = (data !=null)? data.build: false;
						if (needsBuilding) {
							var root = data.path;
							queueMusic(root, "", Insert.top);
						} else {
							var tracksArray = groupBy(JSON.parse(response.playlist), "album");
							if (Object.keys(tracksArray).length) {
								insertFirst(tracksArray);
								player.currentTime = parseInt(response.time);
								loadTrack(parseInt(response.current, 0));
								if (isCasting) {
									loadCastQueue(false);
								}
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
				$("#share-bandcamp").attr("href", "https://bandcamp.com/search?q=" + info);
				$("#share-spotify").attr("href", "https://open.spotify.com/search/" + info);
				$("#share-youtube").attr("href", "https://www.youtube.com/results?search_query=" + info);
				$("#share-apple").attr("href", "https://music.apple.com/us/search?term=" + info);
				$("#share-deezer").attr("href", "https://www.deezer.com/search/" + info);
				if ((cover != "") && (cover != null)) {
					$("#shared-album-cover img").attr("src", cover).show();
					$("#shared-album-cover svg").hide();
				} else {
					$("#shared-album-cover img").hide();
					$("#shared-album-cover svg").show();
				}
				$("#sharing-banner").dialog("open");
				var link = getBaseURL() + "?guestPlay&u=" + user;
				//var size = "800"
				var size = $("#shared-album-cover").width();
				var background = window.getComputedStyle(document.body).getPropertyValue('--text-highlight');
				var fill = window.getComputedStyle(document.body).getPropertyValue('--background');
				$("#shared-album-link").val(link).select().attr('size', link.length);
				var image = ($("#shared-album-cover img").is(":visible"))? $("#shared-album-cover img").get(0) : $("#hidden img").get(0);
				window.setTimeout(function() {
					$("#shared-album-qr").qrcode({minVersion: 8, ecLevel: 'H', size: size, text: link, background: background, fill: fill, radius: 0.5, mode: 4, image: image, mSize: 0.3});
					$("#shared-album-qr canvas").addClass("boxed");
				}, 50);
				if (navigator.share) {
					$("#shared-album-share").show();
				} else {
					$("#shared-album-share").hide();
				}
				$.post('?', {saveGuestPlaylist: '', u: user, p: path}, function (response) {
				});
			}

				function displayCover() {
					var coverurl = nowPlaying["cover"];
					resetFetchingStatus();
					if (!isDefaultPoster()) {
						coverurl = coverurl.replace(/#/g, "%23");
						printCover(coverurl);
					} else {
						$("body").css("background-image", "");
						$("#album-art").after(getDefaultPoster());
						$("#album-art").hide();
						$('.logo-player').hide();
						lookupCover();
					}
				}

				function lookupCover() {
					var fetchOnlineOnFail = "<?php print $this->getConfig('downLoadMissingCovers'); ?>";
					var fileUrl = buildMediaSrc(getBaseURL() + nowPlaying["parentfolder"], nowPlaying["path"]);
					new jsmediatags.Reader(fileUrl)
					.setTagsToRead(["picture"])
					.read({
						onSuccess: function(metadata) {
							var picture = metadata.tags.picture;
							if (picture != null) {
								var base64String = "";
								for (var i = 0; i < picture.data.length; i++) {
									base64String += String.fromCharCode(picture.data[i]);
								}
								var imageUri = "data:" + picture.format + ";base64," + window.btoa(base64String);
								$('#statusText').removeClass('canFetch');
								saveCover(imageUri, nowPlaying["parentfolder"]);
								setCoverInfoStatus("<?php print $this->getString("extractedFromFile"); ?>");
							} else {
								if (fetchOnlineOnFail) {
									fetchCoverOnline();
								}
							}
						},
						onError: function(error) {
							if (fetchOnlineOnFail) {
								fetchCoverOnline();
							}
						}
					});
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
					$(".logo-player, #big-cover .default-poster, .currentAlbum .default-poster").hide();
					$("#album-art, .currentAlbum img.playlist-poster").attr("src", coverUrl).show();
					nowPlaying["cover"] = coverUrl;
					$(".currentAlbum li").data("cover", coverUrl);
					$(".currentAlbum .playlist-poster").attr("src", coverUrl);
					if (isDynamicTheme()) {
						setTheme(coverUrl);
					}
					savePlaylist();
				}

				function getBaseURL() {
					return window.location.href.substr(0, window.location.href.lastIndexOf("/") + 1);
				}


				function tickerIsBusy() {
					return $( "#loadingInfo" ).queue().length != 0;
				}

				function showLoadingInfo(info) {
					if (tickerIsBusy()) {
						setTimeout(function(){ showLoadingInfo(info);}, 200);
					} else {
						queueMessage(info);
					}
				}

				function queueMessage(info) {
					$.when(
								$('#loadingInfo').fadeTo(500, 1).promise(),
								$("#toast_text").text(info).promise()
					).done(function() {
							$('#loadingInfo').fadeTo(500, 0).promise()
							.done(function() {
									$("#toast_text").text("")
							})
					})
				}

				function fetchCoverOnline() {
					var currentAlbum = nowPlaying["album"];
					var currentArtist = nowPlaying["artist"];
					var currentPath = nowPlaying["parentfolder"];
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

				async function getDefaultCoverURL() {
					let promise = new Promise((resolve, reject) => {
						navigator.permissions.query({name: "clipboard-read"}).then(result => {
							if (result.state == "granted" || result.state == "prompt") {
								navigator.clipboard.readText().then(text => {
									resolve(text);
								});
							} else {
								resolve("<?php print $this->getString("defaultCoverURL"); ?>");
							}
						});
					});
					let result = await promise;
					return result;
				}

				async function uploadCover() {
					var currentPath = nowPlaying["parentfolder"];
					var isValidURL =/^(?:(?:https?|ftp):\/\/)(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i;
					var isValidImage =/^(.)*\.(png|gif|bmp|jpg|jpeg)$/i;
					let defaultCoverURL = await getDefaultCoverURL();
					var userURL = window.prompt("<?php print $this->getString("promptCoverURL"); ?>", defaultCoverURL);
					if (userURL != null) {
						userURL = userURL.replace("https", "http");
						userURL = userURL.replace("&f=1", "");
						userURL = userURL.replace("&nofb=1", "");
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
				}

				function getDefaultPoster() {
				var posterSVG = '<svg class="playlist-poster default-poster" viewBox="0 0 400 400">'
										+ '<rect class="logo-background" width="100%" height="100%"/>'
										+ '<path class="logo-highlight" d="M189.810 97.474 C 188.716 97.571,187.636 97.798,187.410 97.977 C 187.185 98.156,185.785 98.429,184.300 98.583 C 182.815 98.737,181.600 99.050,181.600 99.278 C 181.600 99.507,181.146 99.606,180.590 99.500 C 180.035 99.394,179.497 99.442,179.395 99.607 C 179.293 99.773,178.402 100.029,177.414 100.177 C 176.427 100.325,175.524 100.600,175.407 100.788 C 175.291 100.976,174.477 101.252,173.598 101.400 C 172.719 101.549,172.000 101.820,172.000 102.003 C 172.000 102.187,171.418 102.464,170.706 102.621 C 169.994 102.777,169.049 103.134,168.606 103.413 C 168.163 103.693,167.215 104.043,166.500 104.193 C 165.785 104.342,165.200 104.610,165.200 104.788 C 165.200 104.967,164.707 105.237,164.104 105.388 C 163.501 105.540,162.916 105.784,162.804 105.932 C 162.606 106.191,161.991 106.536,157.900 108.686 C 156.855 109.235,156.000 109.845,156.000 110.042 C 156.000 110.239,155.808 110.400,155.573 110.400 C 155.339 110.400,154.557 110.850,153.836 111.400 C 153.114 111.950,152.390 112.400,152.226 112.400 C 152.062 112.400,150.979 113.210,149.821 114.200 C 148.662 115.190,147.585 116.000,147.428 116.000 C 146.936 116.000,143.243 119.747,143.433 120.053 C 143.532 120.214,143.430 120.458,143.207 120.596 C 142.449 121.064,142.745 124.900,143.675 126.656 L 144.551 128.311 141.776 131.536 C 140.249 133.309,138.687 135.174,138.305 135.680 C 136.202 138.464,134.919 140.310,134.471 141.200 C 134.194 141.750,133.349 143.280,132.594 144.600 C 131.838 145.920,131.031 147.450,130.799 148.000 C 130.125 149.603,129.020 151.783,128.770 152.000 C 128.644 152.110,128.301 153.100,128.008 154.200 C 127.715 155.300,127.340 156.380,127.174 156.600 C 127.008 156.820,126.745 157.675,126.591 158.500 C 126.437 159.325,126.174 160.000,126.007 160.000 C 125.840 160.000,125.582 160.916,125.433 162.035 C 125.285 163.154,124.997 164.369,124.794 164.735 C 123.974 166.215,123.275 173.792,122.976 184.453 L 122.767 191.907 121.483 192.155 C 120.777 192.291,119.660 192.657,119.000 192.968 C 111.828 196.342,111.358 196.642,107.965 200.000 C 105.452 202.487,104.240 204.044,103.449 205.800 C 102.855 207.120,102.211 208.489,102.018 208.841 C 101.825 209.194,101.539 210.364,101.383 211.441 C 101.227 212.519,100.897 213.653,100.650 213.961 C 100.027 214.739,100.023 234.054,100.645 234.838 C 100.890 235.147,101.213 236.201,101.363 237.180 C 101.513 238.159,101.782 239.149,101.962 239.380 C 102.142 239.611,102.416 240.340,102.571 241.000 C 103.078 243.165,105.230 247.222,106.600 248.597 C 107.040 249.039,107.725 249.905,108.123 250.521 C 108.521 251.138,109.146 251.758,109.512 251.898 C 109.878 252.039,110.651 252.639,111.231 253.231 C 111.810 253.824,112.715 254.446,113.241 254.613 C 113.767 254.780,114.378 255.133,114.598 255.398 C 114.819 255.664,116.080 256.282,117.400 256.772 C 118.720 257.263,120.099 257.821,120.465 258.014 C 120.831 258.206,122.023 258.482,123.114 258.626 L 125.098 258.890 125.369 261.945 C 125.833 267.184,129.522 272.000,133.070 272.000 C 133.440 272.000,134.348 272.219,135.088 272.486 C 136.143 272.868,136.600 272.868,137.211 272.486 C 137.639 272.219,138.372 272.000,138.840 272.000 C 140.852 272.000,145.600 268.390,145.600 266.860 C 145.600 266.644,145.825 266.392,146.100 266.300 C 146.785 266.072,146.839 184.524,146.154 184.085 C 145.909 183.928,145.586 183.408,145.436 182.929 C 145.022 181.603,142.001 178.780,140.720 178.524 C 140.095 178.399,139.486 178.140,139.368 177.948 C 139.250 177.757,138.152 177.600,136.930 177.600 C 134.805 177.600,134.720 177.560,134.996 176.700 C 135.155 176.205,135.455 174.090,135.663 172.000 C 135.871 169.910,136.212 168.140,136.421 168.067 C 136.629 167.993,136.800 167.584,136.800 167.156 C 136.800 165.718,137.779 161.200,138.091 161.200 C 138.261 161.200,138.400 160.912,138.400 160.560 C 138.400 159.974,138.681 159.224,140.187 155.800 C 140.477 155.140,140.945 153.970,141.227 153.200 C 141.509 152.430,142.054 151.343,142.437 150.784 C 142.821 150.225,143.713 148.695,144.420 147.384 C 145.127 146.073,146.401 144.158,147.252 143.128 C 148.104 142.099,148.800 141.064,148.800 140.828 C 148.800 140.175,159.918 129.200,160.580 129.200 C 160.899 129.200,161.304 128.975,161.480 128.700 C 161.886 128.065,164.247 126.400,164.741 126.400 C 164.946 126.400,165.212 126.147,165.330 125.838 C 165.449 125.528,166.098 125.154,166.773 125.006 C 167.448 124.858,168.000 124.612,168.000 124.460 C 168.000 124.308,168.855 123.737,169.900 123.192 C 170.945 122.646,171.892 122.078,172.005 121.930 C 172.118 121.781,173.063 121.445,174.105 121.182 C 175.147 120.920,176.000 120.555,176.000 120.371 C 176.000 120.187,176.630 119.918,177.400 119.774 C 178.170 119.629,178.800 119.374,178.800 119.207 C 178.800 119.039,179.528 118.786,180.417 118.644 C 181.307 118.501,182.342 118.207,182.717 117.989 C 183.466 117.554,188.496 116.570,193.200 115.937 C 196.762 115.458,210.782 115.759,211.853 116.338 C 212.264 116.560,213.941 116.943,215.579 117.188 C 217.218 117.433,218.748 117.781,218.979 117.961 C 219.211 118.140,220.030 118.403,220.800 118.545 C 222.312 118.824,222.304 118.820,229.346 122.273 C 235.511 125.296,236.000 125.572,236.000 126.022 C 236.000 126.230,236.206 126.400,236.459 126.400 C 236.711 126.400,237.686 127.030,238.626 127.800 C 239.566 128.570,240.475 129.200,240.647 129.200 C 241.072 129.200,250.800 138.904,250.800 139.327 C 250.800 139.513,251.430 140.434,252.200 141.374 C 252.970 142.314,253.600 143.274,253.600 143.508 C 253.600 143.742,253.735 143.993,253.900 144.067 C 254.450 144.311,255.838 146.567,257.427 149.800 C 258.292 151.560,259.116 153.090,259.258 153.200 C 259.401 153.310,259.721 154.157,259.969 155.083 C 260.218 156.009,260.576 156.862,260.766 156.979 C 260.955 157.096,261.236 157.868,261.390 158.696 C 261.545 159.523,261.812 160.380,261.984 160.600 C 262.155 160.820,262.425 161.720,262.584 162.600 C 262.742 163.480,263.013 164.380,263.187 164.600 C 263.360 164.820,263.715 166.890,263.975 169.200 C 264.526 174.104,264.657 175.017,265.022 176.500 L 265.293 177.600 263.070 177.600 C 261.848 177.600,260.750 177.757,260.632 177.948 C 260.514 178.140,259.877 178.405,259.218 178.536 C 258.003 178.779,255.344 181.322,254.611 182.941 C 254.397 183.413,254.037 183.928,253.811 184.085 C 253.006 184.644,253.267 264.723,254.079 266.417 C 254.829 267.980,257.134 270.244,258.997 271.248 L 260.200 271.895 260.200 287.348 L 260.200 302.800 262.700 302.800 L 265.200 302.800 265.200 287.400 L 265.200 272.000 266.438 272.000 C 270.458 272.000,273.826 267.949,274.580 262.207 L 275.000 259.015 277.000 258.607 C 278.100 258.383,279.180 258.089,279.400 257.953 C 279.620 257.817,280.745 257.484,281.900 257.213 C 283.055 256.942,284.000 256.598,284.000 256.448 C 284.000 256.298,284.495 255.962,285.100 255.702 C 286.110 255.268,286.727 254.905,288.340 253.800 C 288.977 253.364,293.407 248.968,294.185 248.000 C 294.608 247.475,297.078 242.451,298.020 240.200 C 298.204 239.760,298.475 238.590,298.623 237.600 C 298.770 236.610,299.095 235.547,299.345 235.239 C 299.973 234.464,299.982 214.753,299.355 213.962 C 299.111 213.653,298.800 212.549,298.664 211.509 C 298.529 210.469,298.257 209.299,298.060 208.909 C 297.863 208.519,297.135 206.994,296.443 205.519 C 295.751 204.044,295.001 202.724,294.776 202.585 C 294.551 202.446,293.917 201.619,293.367 200.747 C 292.816 199.875,292.059 199.049,291.683 198.910 C 291.307 198.772,290.280 198.100,289.400 197.416 C 288.520 196.733,286.360 195.479,284.600 194.630 C 282.840 193.780,281.107 192.943,280.749 192.770 C 280.391 192.597,279.474 192.338,278.711 192.194 L 277.324 191.934 277.087 181.739 C 276.957 176.132,276.684 171.331,276.479 171.072 C 276.275 170.812,275.984 169.348,275.834 167.817 C 275.684 166.287,275.410 164.847,275.225 164.617 C 275.041 164.388,274.763 163.255,274.607 162.100 C 274.452 160.945,274.190 160.000,274.026 160.000 C 273.862 160.000,273.498 158.974,273.217 157.720 C 272.693 155.379,272.609 155.145,271.468 152.868 C 271.100 152.135,270.800 151.347,270.800 151.117 C 270.800 150.400,267.881 144.617,267.358 144.298 C 267.085 144.131,266.744 143.456,266.599 142.798 C 266.455 142.139,266.179 141.600,265.987 141.600 C 265.795 141.600,265.346 140.986,264.990 140.236 C 264.635 139.486,263.996 138.558,263.572 138.174 C 263.147 137.790,262.800 137.294,262.800 137.072 C 262.800 136.849,262.538 136.382,262.217 136.034 C 260.402 134.062,258.799 132.058,258.791 131.752 C 258.786 131.558,257.886 130.614,256.791 129.653 L 254.799 127.907 256.000 126.539 C 257.955 124.313,257.356 118.196,255.091 117.258 C 254.903 117.180,253.519 116.055,252.015 114.758 C 250.512 113.461,249.146 112.400,248.979 112.400 C 248.812 112.400,248.086 111.950,247.364 111.400 C 246.643 110.850,245.881 110.400,245.669 110.400 C 245.458 110.400,245.182 110.130,245.055 109.800 C 244.929 109.470,244.622 109.200,244.374 109.200 C 244.126 109.200,243.356 108.795,242.662 108.301 C 241.968 107.806,241.310 107.393,241.200 107.383 C 240.821 107.349,236.197 105.023,234.744 104.135 C 233.943 103.646,233.205 103.328,233.103 103.430 C 233.002 103.531,232.397 103.342,231.760 103.010 C 231.122 102.677,230.300 102.404,229.933 102.402 C 229.567 102.401,229.207 102.263,229.133 102.095 C 228.979 101.742,224.056 100.118,222.000 99.743 C 221.230 99.602,220.420 99.353,220.200 99.188 C 219.980 99.024,218.630 98.759,217.200 98.600 C 215.770 98.441,214.356 98.114,214.059 97.872 C 213.510 97.428,193.935 97.106,189.810 97.474 "></path>'
									+ '</svg>';
					return posterSVG;
				}

				function playBeforeIcon() {
					var playBeforeIcon = '<svg class="menu-svg play-before" viewBox="0 0 24 24">'
						+ '<g fill-rule="evenodd" class="logo-highlight">'
							+ '<rect opacity=".3" x="1" y="17" width="14" height="2" rx="1"></rect>'
							+ '<rect opacity=".3" x="1" y="12" width="14" height="2" rx="1"></rect>'
							+ '<rect x="1" y="7" width="9" height="2" rx="1"></rect>'
							+ '<rect transform="rotate(90 18 8)" x="17" y="3" width="2" height="10" rx="1"></rect>'
							+ '<rect x="17" y="3" width="2" height="10" rx="1"></rect>'
						+ '</g>'
					+ '</svg>';
					return playBeforeIcon;
				}

				function playNextIcon() {
					var playNextIcon = '<svg class="menu-svg play-next" viewBox="0 0 24 24">'
						+ '<g fill-rule="evenodd" class="logo-highlight">'
							+ '<rect opacity=".3" x="1" y="17" width="14" height="2" rx="1"></rect>'
							+ '<rect opacity=".3" x="1" y="7" width="14" height="2" rx="1"></rect>'
							+ '<rect x="1" y="12" width="9" height="2" rx="1"></rect>'
							+ '<rect transform="rotate(90 18 8)" x="22" y="3" width="2" height="10" rx="1"></rect>'
							+ '<rect x="17" y="8" width="2" height="10" rx="1"></rect>'
						+ '</g>'
					+ '</svg>';
					return playNextIcon;
				}

				function playLastIcon() {
					var playLastIcon = '<svg class="menu-svg play-last" viewBox="0 0 24 24">'
						+ '<g transform="translate(1 5)" fill-rule="evenodd" class="logo-highlight">'
							+ '<rect opacity=".3" width="14" height="2" rx="1"></rect>'
							+ '<rect opacity=".3" y="5" width="14" height="2" rx="1"></rect>'
							+ '<rect y="10" width="9" height="2" rx="1"></rect>'
							+ '<path d="M21.005 10c.55 0 .995.444.995 1 0 .552-.456 1-.995 1h-8.01c-.55 0-.995-.444-.995-1 0-.552.456-1 .995-1h8.01"></path>'
							+ '<rect x="16" y="6" width="2" height="10" rx="1"></rect>'
						+ '</g>'
					+ '</svg>';
					return playLastIcon;
				}

				function resetCheckbox() {
					$('#includeOldAlbums').prop("checked", true);
					$("label[for='includeOldAlbums'] i").removeClass("fa-toggle-off");
					$("label[for='includeOldAlbums'] i").addClass("fa-toggle-on");
				}

				function toggleCheckbox(checkboxId) {
					$("label[for='" + checkboxId + "'] i").toggleClass("fa-toggle-on fa-toggle-off");
				}

				function clearPlaylist() {
					resetPlayer();
					$("#playlist li").remove();
					$("#playlist").trigger("updated");
				}

				function toggleSearch() {
					togglePanel("#searchPanel");
						$('#hits ul').remove();
						$('#searchText').select();
						$('#searchText').focus();
				}

				function scrollPlaylist() {
					if (hasPlaylist() && $("#playlist").is(":visible") && Date.now() - lastInteraction > playlistResfreshDelay) {
						var target = $('#playlistPanel');
						var elementToView = ($(".currentAlbum").height() < window.innerHeight - 100) ? ".currentAlbum" : ".currentTrack";
						if (isPortrait() || isMedium()) {
							target = $('#panelContainer');
						}
						var y = $(elementToView).offset().top - $("#playlist").offset().top + $(elementToView).scrollTop();
						target.animate({scrollTop:y});
					}
				}

			function flashInfo() {
				setTimeout(function(){
					$("#big-info").removeClass('flash');
				 }, 3000);
				$("#big-info").addClass('flash');
			}

			function showPanel(panel) {
				$(".panel").removeClass("shown");
				$(panel).addClass("shown");
				$(".panelToggle[href='" + panel + "']").trigger("click");
				saveSettings();
			}

			function isAndroid() {
			return /(android)/i.test(navigator.userAgent);
			}

			function notificationSupported() {
				if (!isAndroid() && ('Notification' in window)) {
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
					// REDO: Any way to make the poster dynamic based on the current theme?
					var poster = nowPlaying["cover"];
					if (poster == null) {
						poster = "theme/images/default-poster.png"
					}
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
						navigator.mediaSession.setActionHandler('previoustrack', function() { triggerButton("previous"); playTrack(previousTrack);});
						navigator.mediaSession.setActionHandler('nexttrack', function() { triggerButton("next"); playTrack(nextTrack);});
						navigator.mediaSession.setActionHandler('seekbackward', function() { triggerButton("previous"); playTrack($(previousAlbum).find("li").first()) });
						navigator.mediaSession.setActionHandler('seekforward', function() { triggerButton("next"); playTrack($(nextAlbum).find("li").first()) });
						navigator.mediaSession.setActionHandler('play', function() {triggerPlayPause()});
						navigator.mediaSession.setActionHandler('pause', function() {triggerPlayPause()});
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
					searchArtistExt +=  "<a target=\"blank\" href=\"" + "<?php print $this->getConfig("searchEngine"); ?>" + artist + "+band\">" + "<?php print $this->getString("google"); ?>" + "</a><br/><br/>" ;
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
								$("#infoPanelText").find('a[href^="#"]').addClass("infoPanelAnchor");
							} else {
								$('#infoPanelText').html("<?php print $this->getString("noInfoFoundFor"); ?>" + artist + " - " + searchArtistExt);
							}
						}
					});
				}
			}

			function slugify(str) {
				str = str.replace(/^\s+|\s+$/g, ''); // trim
				str = str.toLowerCase();

				var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
				var to   = "aaaaeeeeiiiioooouuuunc------";
				for (var i=0, l=from.length ; i<l ; i++) {
						str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
				}

				str = str.replace(/&/g, 'and') // replace ampersands
						.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
						.replace(/\s+/g, '-') // collapse whitespace and replace by -
						.replace(/-+/g, '-'); // collapse dashes

				str = str.charAt(0).toUpperCase() + str.slice(1);
				return str;
			}

			async function getLyricsFromFile(LRCurl, searchLyricsExt) {
				let promise = new Promise((resolve, reject) => {
					$.ajax({
						type: "GET",
						url: "?head&url="+ LRCurl,
						dataType: "text",
						complete: function(text) {
							if (text.responseText < 400) {
								resolve(false);
								$.ajax({
									type: "GET",
									url: "?fetch&url=" + LRCurl,
									dataType: "text",
									success: function(lyrics) {
										$('#lyricsPanel').html(searchLyricsExt + "<br/>" + lyrics.replace(/\[.*\]/g, "<br/>"));
									}
								});
							} else {
								resolve(true);
							}
						}
					});
				});
				let hasNoLRC = await promise;
				return hasNoLRC;
			}

			async function getLyricsOnline(artist, song, searchLyricsExt) {
				let promise = new Promise((resolve, reject) => {
					var lyrics="";
					$('#lyricsPanel').html("<?php print $this->getString("searchingLyricsFor"); ?>" + song + "<?php print $this->getString("by"); ?>" + artist + "<?php print $this->getString("..."); ?>");
					var geniusUrl = GENIUS_BASE_URL + slugify(artist + " " + song + "-lyrics");
					$.ajax({
						type: "HEAD",
						url: "?head&url=" + encodeURIComponent(geniusUrl),
						complete: function(data) {
							if (data.responseText < 400) {
								$.ajax({
									type: "GET",
									url: "?fetch&url=" + encodeURIComponent(geniusUrl),
									dataType: "xml",
									complete: function(html) {
										var parser = new DOMParser();
										var htmlDoc = parser.parseFromString(html.responseText, 'text/html');
										var lyricsDiv = htmlDoc.getElementsByClassName("lyrics")[0];
										if (lyricsDiv != null) {
											lyrics = lyricsDiv.textContent.replace(/\n/g, "<br/>");
											var lyricsInfo = "<?php print $this->getString("viewOngenius"); ?>" + "<a target=\"blank\" href=\"" + geniusUrl +"\">" + "<?php print $this->getString("genius"); ?>" + "</a>" ;
											$('#lyricsPanel').html(lyricsInfo + lyrics);
											resolve(false);
										} else {
											$.ajax({
												type: "GET",
												url: "?fetch&url=" + encodeURIComponent(CHARTLYRICS_BASE_URL + "?artist="+encodeURIComponent(artist)+"&song="+encodeURIComponent(song)),
												dataType: "xml",
												success: function(xml) {
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
														var lyricInfo="<a target=\"_blank\" href=\""+lyricCorrectUrl+"\">"+lyricSong+"<?php print $this->getString("by"); ?>"+lyricArtist+"</a><br/>" + searchLyricsExt + "<br/><br/>";
														lyrics=$(this).find('Lyric').text().replace(/\s([\(\[A-Z])/g, "<br/>$1").replace(/([\.\?!])\s/g, "$1<br/>"); //replace what needs to be prefixed by a new line, then what needs to be suffixed by a new line.
														$('#lyricsPanel').html(lyricImage + lyricInfo + lyrics);
													});
													if (lyrics == "") {
														resolve(true);
													} else {
														resolve(false);
													}
												},
												error: function() {
													resolve(true);
												}
											});
										}
									}
								});
							}
						}
					});
				});
				let hasNoOnline = await promise;
				return hasNoOnline;
			}

			async function updateLyricsPanel(artist, song) {
				var artist=nowPlaying["artist"];
				var song=nowPlaying["songtitle"];
				var searchLyricsExt = "<?php print $this->getString("search"); ?>";
				searchLyricsExt +=  "<a target=\"blank\" href=\"http://genius.com/search?q=" + song + "+" + artist +"\">" + "<?php print $this->getString("genius"); ?>" + "</a>" ;
				searchLyricsExt += "<?php print $this->getString("or"); ?>" + "</a>" ;
				searchLyricsExt +=  "<a target=\"blank\" href=\"" + "<?php print $this->getConfig("searchEngine"); ?>"  + song + "+" + artist +"+lyrics\">" + "<?php print $this->getString("google"); ?>" + "</a>" ;
				var LRCurl= encodeURI(getBaseURL() + nowPlaying["parentfolder"] + nowPlaying["path"].replace(/.mp3/, ".lrc"));
				var canLoadLrc = "<?php print $this->getConfig('loadLyricsFromFile') ?>";
				var canSearchOnline = "<?php print $this->getConfig('lookUpLyrics') ?>";
				var hasNoLRC = true;
				var hasNoOnline = true;

				if (canLoadLrc) {
					hasNoLRC = await getLyricsFromFile(LRCurl, searchLyricsExt);
				}

				if (hasNoLRC && canSearchOnline) {
					hasNoOnline = await getLyricsOnline(artist, song, searchLyricsExt);
				}

				if (hasNoLRC && hasNoOnline) {
					var noLyricsText = "<?php print $this->getString("noLyricsFoundFor"); ?>" + song + "<?php print $this->getString("by"); ?>" + artist;
					noLyricsText += "<br/>";
					noLyricsText += searchLyricsExt;
					$('#lyricsPanel').html(noLyricsText);
				}
			}

			function triggerPlayPause() {
				var status = "";
				savePlaylist();
				if (isCasting) {
					castController.playOrPause();
				} else {
					if (player.paused) {
						player.play();
						$(player).animate({volume: ($("#big-volume-bar").slider("option", "value") / 100)}, 500);
					} else {
						status = "isPaused";
						$(player).animate({volume: 0}, 200, function(){player.pause()});
					}
					updatePlayPauseIcons((status == "isPaused") ? true : false);
				}
				showNotification(status);
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
										+ "<div class=\"spread\">"
										+ "<div class=\"playlist-poster-container\">"
										+ "<img class=\"playlist-poster\" draggable=\"false\" src=\"\"/>"
										+ getDefaultPoster()
										+ "</div>"
										+ "<div class=\"info\">"
										+ "<div class=\"remove fas fa-times\"></div>"
										+ "<div class=\"align-right\">"
										+ "<span class=\"move-up fas fa-arrow-up\" oncontextmenu=\"return false;\"></span>"
										+ "<span class=\"move-down fas fa-arrow-down\" oncontextmenu=\"return false;\"></span>"
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
										+ "</div>"
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
					if ($thisAlbum.data("cover") != null) {
						$thisAlbum.find("img.playlist-poster").attr("src", $thisAlbum.data("cover").replace(/#/g, "%23"));
						$thisAlbum.find(".default-poster").remove();
					} else {
						$thisAlbum.find("img.playlist-poster").hide();
					}
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
				$(draggedElement).siblings().css("opacity", "");
				$(draggedElement).css("border", "");
				draggedElement = null;
				$("#playlist").trigger("updated");
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

			function isFirstAlbumPlaying() {
				return $(currentAlbum).index() == 0;
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

				resetLastInteraction();
				var status = null;
				startPolling();

				var watcherTarget = document.getElementById("playlist");
				if (watcherTarget) {
					var watcherConfig = { attributes: false, childList: true, characterData: false, subtree: true };
					var watcher = new MutationObserver(refreshPlaylist);
					watcher.observe(watcherTarget, watcherConfig);
				}

				viewerType = window.getComputedStyle(document.getElementById('viewer') ,':after').getPropertyValue('content');

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

					enableLocalPlayer();
					loadSettings();
					getHistory();
					loadPlaylist();
					adaptUI(true);
				}

				  ///////////////
				 // FUNCTIONS //
				///////////////

				function startPolling(init) {
					var check = isInit;
					if (init != null) {
						check = false;
					}
					if (!!window.EventSource) {
						status = new EventSource("?checkStatus&u=" + "<?php echo AuthManager::getUserName(); ?>");
					}

					if (status != null) {
						status.addEventListener('message', function(e) {
							var data = JSON.parse(e.data);
							if (check && (data.client != clientId)) {
								stopPolling();
								$("#refreshPanel").dialog("open");
							}
							check = true;
						}, false);

						status.addEventListener('open', function(e) { }, false);

						status.addEventListener('error', function(e) { }, false);
					}
				}

				function stopPolling() {
					status.close();
				}

				function makeJqSafe(id) {
					return id.replace( /(:|\.|\[|\]|,|=|@)/g, "\\$1" );
				}

				function adaptUI(init) {
				var newViewerType = window.getComputedStyle(document.getElementById('viewer') ,':after').getPropertyValue('content');
				var viewerTypeHasChanged = (newViewerType != viewerType);
				var panelIsOpen = (($("#leftPanel").is(":visible") && isPortrait()) || (viewerTypeHasChanged && !(isPortrait())));
				console.debug(newViewerType);
				if (viewerTypeHasChanged || init) {
					viewerType = newViewerType;
					if (!isWidescreen()) {
						$("#playlistToggle").show();
						$("#leftPanel").tabs("enable", 2 );
							if (isPortrait()) {
								$("#leftPanel").hide();
							}
					} else {
						$("#playlistToggle").hide();
						$("#leftPanel").tabs("disable", 2 );
					}
					$("#leftPanel").tabs("refresh");
				}
				restorePanel(panelIsOpen);
				blurPlayer();
				$( ".modal" ).dialog({
					modal: true,
					autoOpen: false,
					width: isPortrait() ? "100%": "40%",
					height: $(window).height(),
					show: { effect: "fade", duration: 400 },
					hide: { effect: "fold", duration: 200 }
				});
				$( "#refreshPanel" ).dialog({
					modal: true,
					autoOpen: false,
					dialogClass: "polling",
					width: "unset",
					height: $(window).height() / 2,
					show: { effect: "fade", duration: 400 },
					hide: { effect: "fold", duration: 200 }
				});
				$( "#uncoverPanel" ).dialog({
					modal: true,
					autoOpen: false,
					width: "unset",
					height: $(window).height() * 0.9,
					width: $(window).width() * 0.9,
					show: { effect: "fade", duration: 400 },
					hide: { effect: "fold", duration: 200 },
					open: function( event, ui ) { $("#uncoverPanel").dialog('widget').attr("oncontextmenu", "return false;"); },
					close: function( event, ui ) { $(".uncoverLink").remove();  }
				});
			}

				  ////////////
				 // EVENTS //
				////////////

				$("#history ul").on("click", function() {
					$(this).children("li").toggle();
				});

				$("#playlistContainer, #playlistPanel").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
						lastInteraction = Date.now();
				});  

				$("#playlist").on("updated", function() {
					savePlaylist();
					if (isCasting && hasPlaylist()) {
						replaceCastQueue();
					}
				});

				$("#fullscreen").on("click", function() {
					if (!document.fullscreenElement) {
							document.documentElement.requestFullscreen();
							$("#fullscreen").html('<i class="fas fa-compress fa-fw\"></i>');
					} else {
						if (document.exitFullscreen) {
							document.exitFullscreen();
							$("#fullscreen").html('<i class="fas fa-expand fa-fw\"></i>');
						}
					}
				});

				$("google-cast-launcher").on("click", function() {
					isPlaying = !player.paused;
				});

				$("#panelContainer").on("scroll", function() {
					if ($("#browserPanel").is(":visible")) {
						var scrollHeight = $(document).height();
						var scrollPos = $("#browserPanel").height() + $("#browserPanel").scrollTop();
						if(((scrollHeight - 300) >= scrollPos) / scrollHeight == 0){
							$(".fancytree-statusnode-paging").click();
							}
						}
				});

				$(".polling .ui-dialog-titlebar-close").on("click", function() {
					stopPolling();
				});

				$(".panelToggle, #ham").on("click", function() {
					if ($("#browserPanel").is(":hidden")) {
						if ($.ui.fancytree.getTree("#library")) {
							$("#filterButton").trigger("click");
							trimLibrary();
						}
					}
					saveSettings();
				});

				$(".theme-selector").on("click", function(e) {
					$("#background").val($(this).data("background")).trigger("change");
					$("#text").val($(this).data("text")).trigger("change");
				});

				$("#theme_settings input[type=radio]").on("click", function() {
					$(this).parent("div").children(".theme_opts").show();
					$("#theme_settings input").not($(this)).parent("div").children(".theme_opts").hide();
					if (isDynamicTheme()) {
						setTheme($("#album-art").attr("src"));
					} else {
						$("#background").trigger("change");
						$("#text").trigger("change");
						$("body").css("background-image", "");
						$("body").removeClass("magic");
					}
					saveSettings();
				});

				$("#background, #text").on("change", function(e) {
					var id = $(this).attr("id");
					var value = $(this).val()
					setColour(id, value);
					if (isCustomTheme()) {
						$("#my_theme").data(id, value);
						$("#my_theme_" + id).css("background-color", value);
					}
					saveSettings();
				});

				$("#playlist").on("click taphold", ".move-down", function(e) {
					var target = $(this).parents("li").next();
					var shift = (e.type === "taphold")? true : e.shiftKey;
					if (shift) {
						target = $("#playlist > li").last();
					}
					target.after($(this).parents("li"));
					$("#playlist").trigger("updated");
				});

				$("#playlist").on("click taphold", ".move-up", function(e) {
					var target = $(this).parents("li").prev();
					var shift = (e.type === "taphold")? true : e.shiftKey;
					if (shift) {
						target = $("#playlist > li").first();
					}
					target.before($(this).parents("li"));
					$("#playlist").trigger("updated");
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

				$("#shared-album-show-qr, #shared-album-show-cover").on("click", function() {
					$("#shared-album-cover, #shared-album-qr, #shared-album-show-qr, #shared-album-show-cover").toggle();
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
					var target = $(this).closest("li");
					if ($(target).data("nature") == "track") {
						numSiblings = target.siblings();
						if (numSiblings.length) {
							if ($(target).hasClass("currentTrack")) {
								fallbackTrack(nextTrack);
							}
							target.remove();
						} else {
							$(target).parents("li").find(".remove").trigger("click");
						}
					} else {
						var albumIndex = $(target).index("#playlist > li");
						var fallback = $(".nextAlbum").find("li[data-nature=track]:first");
						var currentAlbumIndex = $(".currentAlbum").index("#playlist > li");
						var isCurrentAlbum = (currentAlbumIndex == albumIndex);
						var shift = (e.type === "taphold")? true : e.shiftKey;
						var alt = (e.type === "taphold")? false : e.altKey;
						var ctrl = (e.type === "taphold")? false : e.ctrlKey;
						if (shift) {
							if (currentAlbumIndex < albumIndex) {
								fallbackTrack(fallback);
							}
							for (i=0; i < albumIndex; i++) {
								$("#playlist > li:eq(0)").remove();
							}
						} else if (ctrl) {
							if (currentAlbumIndex > albumIndex) {
								fallbackTrack(fallback);
							}
							for (i=albumIndex; i < $("#playlist > li").length; i++) {
								$("#playlist > li:eq(" + (albumIndex + 1) + ")").remove();
							}
						} else if (alt) {
							if (!isCurrentAlbum) {
								fallbackTrack($(target).find("li[data-nature=track]:first"));
							}
							$("#playlist > li").not(":eq(" + albumIndex + ")").remove();
						} else {
							if (isCurrentAlbum) {
								fallbackTrack(fallback);
							}
							target.remove();
						}
					}
					if (!$("#playlist li[data-nature=track]").length) {
						resetPlayer();
					}
					$("#playlist").trigger("updated");
				});

				$(".obsoleteWarning").on("click", function() {
					resetPlaylists();
					loadSettings();
					getHistory();
					$("#refreshPanel").dialog("close");
					startPolling(true);
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

				$("#wakelock").on("click", function () {
					var newStatus = !$("#wakelock").prop("checked");
					$("#wakelock").prop("checked", newStatus);
					toggleCheckbox("wakelock");
					saveSettings();
					if (newStatus) {
						initWakeLock();
					}
				});

				$("#includeOldAlbums").on("click", function () {
					toggleCheckbox("includeOldAlbums");
					filterTree();
				});

				$("#filterText").on("keyup", function() {
					setTimeout( function() {
						if (userIsStillTyping) {
							userIsStillTyping = false;
							filterTree();
						}
					}, 400);
				});
				
				$("#filterText").on("keydown", function() {
					userIsStillTyping = true;
				});

				$("#filterButton").on("click", function(event) {
					event.preventDefault();
					$.ui.fancytree.getTree("#library").clearFilter();
					$.ui.fancytree.getTree("#library").reload(libraryVisible);
					$("#filterText").val('');
					resetCheckbox();
				});

				$("#ham").on("click", function() {
					$('#leftPanel').toggle('slide', { direction: 'left' }, 200, function() {blurPlayer()});
				});

				$("#help").on("click", function() {
					$("#helpPanel").dialog("open");
				});

				$("#about").on("click", function() {
					$("#aboutPanel").dialog("open");
				});

				$("#clear-playlist").on("click", function() {
					clearPlaylist();
				});

				$('#lookupOne').on("click", function () {
						fetchCoverOnline();
					});

				$('#uploadIt').on("click", function () {
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

				$('#statusText').on("click", function () {
					if ($(this).hasClass('canFetch')) {
						lookupCover();
					}
				});

				$("#findIt").on("click", function(event) {
					event.preventDefault();
					$("#searchForm").submit();
				});

				$("#run_setup").on("click", function(event) {
					event.preventDefault();
					$("#setupForm").submit();
				});


				$("#searchForm").submit(function(event) {
					event.preventDefault();
					var $form = $( this ),
							term = normalise($form.find( 'input[name="s"]' ).val());
					if (term.length > 0) {
						showLoadingInfo("<?php print $this->getString("searchingFor"); ?>" + term);
						var resultString="&nbsp;";
						$("#searchResults").html("&nbsp;&nbsp;<i class=\"fas fa-pulse fa-spin fa-spinner\"></i>&nbsp;&nbsp;<?php print $this->getString("searchingLibrary"); ?>");
						$("#hits ul").remove();
						$.post('?', {querydb: '', root: term, type: 'search'}, function (data) {
						var hits= data;
						if (hits != null) {
							$.each(hits, function (i, elem) {
								var parentfolder = hits[i].parentfolder;
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
								var hitData = " tabindex=\"1\" ";
								hitData += " data-album=\"" + album + "\" ";
								hitData += " data-artist=\"" + artist + "\" ";
								hitData += " data-cover=\"" + cover + "\" ";
								hitData += " data-year=\"" + year + "\" ";
								var icon = (isFolder) ? "far fa-folder" : "fas fa-music";
								var levelUp = parentfolder.substr(0,parentfolder.substr(0,parentfolder.lastIndexOf("/")).lastIndexOf("/")+1);
								var parentfolderItem = parentfolder.substr(levelUp.length);
								var parentfolderItemName = parentfolder.substr("<?php print Musicco::getConfig('musicRoot'); ?>/".length, parentfolder.substr("<?php print Musicco::getConfig('musicRoot'); ?>/".length).length -1).replace(/<?php print Musicco::getConfig('new_marker'); ?>/, "").replace(/\//g, " &gt; ");
								var parentfolderSongTitle = parentfolderItem.replace("[" + year + "]", "").replace("/", "");
								var parentfolderTitle = parentfolderItem.replace("/", "");
								if (parentfolderItemName=="") {
									parentfolderItemName="home";
								}
								var hitListId = "hit_" + parentfolderItemName.replace(/[^A-Za-z0-9]/g, '');
								var hitListHeader = "<ul id=\"" + hitListId + "\">";
								hitListHeader += "<span class=\"searchResultParent\" data-folder=\"true\" data-songtitle=\"" + parentfolderSongTitle + "\" data-parentfolder=\"" + levelUp + "\" data-title=\"" + parentfolderTitle + "\" data-path=\"" + parentfolderItem + "\"" + hitData + ">" + parentfolderItemName + "</span>";
								hitListHeader += "</ul>";
								var hitListItem = "<li>";
								hitListItem += "<i class=\"fa-fw " + icon + "\"></i><span class=\"searchResult " + extraClasses + "\" data-folder=\"" + isFolder + "\" data-songtitle=\"" + songtitle + "\" data-parentfolder=\"" + parentfolder + "\" data-title=\""+ name + optionalSlash +"\" data-path=\""+ path + "\"" + hitData + ">" + name + "</span>";
								hitListItem += "</li>";
								if ($("#" + hitListId).length < 1) {
									$("#hits").append(hitListHeader);
								}
								$("#" + hitListId).append(hitListItem);
							});
						} else {
							resultString="<?php print $this->getString("noResultsForThisSearch"); ?>";
						}
							$("#searchResults").html(resultString);
							$('#clear').focus();
						}, "json");
					}
				});

				$('#clear').on("click", function () {
					$('#hits ul').remove();
					$('#searchText').val('');
					toggleSearch();
				});

					$(document).on("click", ".historyArtist", function() {
						goToArtist($(this).text());
					});

					$(document).on("dblclick", ".artist, #nowPlaying_artist", function() {
						goToArtist($(this).text());
					});

					$(document).on("click", ".historyAlbum", function() {
						goToAlbum($(this).text().replace("(", "").replace(")", ""));
					});

					$(document).on("dblclick", ".album, .year, .songtitle, #nowPlaying_album, #nowPlaying_year, #nowPlaying_songtitle", function() {
						goToAlbum($(this).text().replace("(", "").replace(")", ""));
					});

					$(document).on("click", ".downloadAlbum", function(event) {
						event.preventDefault();
						downloadAlbum($(this).parents("li").data("parentfolder"), $(this).parents("li").data("album"))
					});

					$(document).on("click", ".favouriteAlbum", function(event) {
						addFavourite($(this).parents("li").data("parentfolder"));
					});

				$(document).on("click", "#remove_shared_links", function() {
						var r = confirm("<?php print $this->getString("confirm_remove_shared_links"); ?>");
						if (r == true) {
							showLoadingInfo("<?php print $this->getString("removing_shared_links"); ?>");
							$.ajax({
								type: "POST",
								url: "",
								data: {deleteGuestPlaylists: ""}
							});
						}
				});

				$(document).on("click", "#clear_history", function() {
						var r = confirm("<?php print $this->getString("confirm_clear_history"); ?>");
						if (r == true) {
							$("#history").empty();
							var user = "<?php echo AuthManager::getUserName(); ?>";
							if (user != "") {
								showLoadingInfo("<?php print $this->getString("clearing_history"); ?>");
								$.ajax({
									type: "POST",
									url: "",
									data: {clear_history: "", u: user}
								});
							}
						}
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
									var scannedNode = $.ui.fancytree.getTree("#library").findFirst(folderName);
									if (scannedNode !=null) {
										scannedNode.load(true);
									} else {
										library.push({
											title: folderName,
											tooltip: folderName,
											folder: true,
											lazy: true,
											extraClasses: "current",
											data: {parentfolder: decodeURI(musicRoot), path: folderName, songtitle: folderName, artist: folderName, album: folderName}
										});
									}
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
								$("#library").fancytree("destroy");
								initLibraryTree();
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

				$(document).on("taphold", "#big-cover, .play-pause + label i", function(e) {
					playRandomAlbum();
				});

				$(document).on("click taphold", ".uncover, #feeling_lucky", function(e) {
					var alt = (e.type === "taphold")? false : e.altKey;
					var shift = (e.type === "taphold")? true : e.shiftKey;
					if (alt) {
						playRandomAlbum();
					} else {
						var method = "uncover";
						var root = '';
						if (shift) {
							method = "uncover_new";
						}
						if (($(this).attr('id') == "feeling_lucky") && ($('#searchText').val() != '')) {
							method = "feeling_lucky";
							root = $('#searchText').val();
						}
						showLoadingInfo("<?php print $this->getString("uncovering"); ?>");
						$.post('?', {querydb: '', root: root, type: method}, function (response) {
								var hits=response;
								if (hits != null) {
									existingPaths = $("#playlist li[data-nature=album]").map(function() {
										return $(this).data("parentfolder");
									});
									$.each(hits, function (i, elem) {
										var artist = hits[i].artist;
										var album = hits[i].album;
										var parentfolder = hits[i].parentfolder;
										var levelUp = parentfolder.substr(0,parentfolder.substr(0,parentfolder.lastIndexOf("/")).lastIndexOf("/")+1);
										var parentfolderItem = parentfolder.substr(levelUp.length);
										var parentfolderItemName = parentfolder.substr("<?php print Musicco::getConfig('musicRoot'); ?>/".length, parentfolder.substr("<?php print Musicco::getConfig('musicRoot'); ?>/".length).length -1);
										if (parentfolderItemName=="") {
											parentfolderItemName="home";
										}
										var coverUrl = hits[i].cover;
										var hitLink ="<span class=\"uncoverLink\" id=\"uncoverLink" + i +"\" data-parentfolder=\""+ levelUp +"\" data-title=\"" + parentfolderItem + "\" data-path=\"" + parentfolderItem + "\">";
										hitLink += (coverUrl) ? "<img src=\"" + coverUrl + "\"/>" : getDefaultPoster();
										hitLink += playLastIcon();
										hitLink += "<br/>";
										hitLink += artist + " - " + album;
										hitLink += "</span>";
									$("#uncoverLinks").append(hitLink);
									var thisHit = "#uncoverLink"+i;
									if (!Object.values(existingPaths).includes($(thisHit).data("parentfolder") + $(thisHit).data("path"))) {
										existingPaths.push($(thisHit).data("parentfolder") + $(thisHit).data("path"));
									} else {
										$(thisHit).remove();
									}
									});
								}
							if (method == "feeling_lucky") {
								$(".uncoverLink").trigger("click");
							} else {
								$("#uncoverPanel").dialog("open");
							}
						}, "json");
					}
				});

				$(document).on("click", "#addAll", function(event) {
					$(".uncoverLink").trigger("click");
					$("#uncoverPanel").dialog("close");
				});

				$(document).on("click taphold", "#uncover_more", function(event) {
					$(".uncoverLink").remove();
				});

				$(document).on("click", ".uncoverLink", function(event) {
					queueMusic($(this).data("parentfolder") + $(this).data("path"), $(this).data("title"), Insert.last);
				});

				$(document).on("click", ".infoPanelAnchor", function(event) {
					event.preventDefault();
					var anchor = makeJqSafe($(this).attr("href"));
					var y = $(anchor).offset().top + - $("#infoPanel").offset().top + $("#infoPanel").scrollTop();
					$("#panelContainer").animate({scrollTop:y});
				});

				$(document).on("click", ".infoPanelLink", function(event) {
					event.preventDefault();
					var title = $(this).attr('title');
					displayInfo(title);
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
						.then(() => console.debug('Successful share'))
						.catch((error) => console.warn('Error sharing', error));
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
						resetPlaylists();
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
						$(this).parents("li").data("parentfolder"),
						$(this).parents("li").data("album") + "<?php print $this->getString("by"); ?>" + $(this).parents("li").data("artist"),
						$(this).parents("li").find("img.playlist-poster").attr("src")
					);
				});

				$(document).on("mouseup", ".searchResult, .searchResultParent", function(event) {
					setMenuEntries($(this).data("folder"), $("#searchPanel"));
					$("#searchPanel").contextmenu("open", $(this));
				});

				$(document).on("click", ".play-pause + label i, #album-art, #big-cover .default-poster, .logo-player", function(e) {
					triggerPlayPause();
				});

				$("#album-art, #big-cover .default-poster, .logo-player").on("swipedown", function(e) {
					volumeUp();
				});

				$("#album-art, #big-cover .default-poster, .logo-player").on("swipeup", function(e) {
					volumeDown();
				});

				$("#album-art, #big-cover .default-poster, .logo-player").on("swipeleft", function(e) {
					triggerButton("next");
					if (playerConfig["shuffled"]) {
						playRandomTrack();
					} else {
						playTrack(nextTrack);
					}
				});

				$("#album-art, #big-cover .default-poster, .logo-player").on("swiperight", function(e) {
					triggerButton("previous");
					if (playerConfig["shuffled"]) {
						playRandomTrack();
					} else {
						playTrack(previousTrack);
					}
				});

				$("body").on("keyup", function(e) {
					// Uncomment the following line to debug the received keycode
					console.debug("key: " + e.keyCode + " shift: " + e.shiftKey + " ctrl: " + e.ctrlKey + " super: " + e.metaKey);
					if (!e.metaKey) {
						hotkey(e);
					}
				});

				if ($("#user_name").is('*')) {
					$("#user_name").focus();
				}

				$("#shuffled, #loop, #theme_settings input").on("click", function() {
					playerConfig[$(this).attr("id")] = !playerConfig[$(this).attr("id")];
					$(this).toggleClass("selected");
					saveSettings();
				});

				$("#big-volume-down").on("click", function() {
					volumeDown();
				});

				$("#big-volume-up").on("click", function() {
					volumeUp();
				});

			$(window).resize(function(){
				adaptUI();
			});

			$(document).on("click", "#clip", function() {
				var albumLink = document.getElementById("shared-album-link");
				albumLink.select();
				albumLink.setSelectionRange(0, 99999);
				document.execCommand("copy");
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
	<div id="hidden"><img src="app/apple-touch-icon-precomposed.png"/></div>
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
		<div id="refreshPanel" class="modal"><a class="obsoleteWarning"><?php print $this->getString("playlist_modified"); ?></a></div>
		<div id="aboutPanel" class="modal"><?php print getAbout(); ?></div>
		<div id="imageViewerPanel" class="modal"><img src=""/><div></div></div>
		<div id="uncoverPanel" class="modal">
			<div id="uncover_top_row">
			<span id="addAll"><i class="fas fa-plus"></i><?php print $this->getString("queue_all"); ?></span>
			<span id="uncover_more" oncontextmenu="return false;" class="uncover"><i class="fas fa-magic"></i><?php print $this->getString("uncover_more"); ?></span>
			</div>
			<div id="uncoverLinks"></div>
		</div>
		<div id="sharing-banner" class="modal">
			<div id="shared-album-cover" class="boxed">
				<?php print Musicco::logo("logo-share"); ?>
				<img src="" style="display: none;" />
			</div>
			<div id="shared-album-qr"></div>
			<div id="shared-album-title" class="big"></div>
			<div id="share-actions" class="spread">
				<span id="shared-album-show-qr"><i class="fas fa-2x fa-qrcode"></i></span>
				<span id="shared-album-show-cover"><i class="far fa-2x fa-image"></i></span>
				<span id="clip"><i class="far fa-2x fa-clipboard"></i></span>
				<span id="shared-album-share"><i class="fas fa-2x fa-external-link-alt"></i></span>
			</div>
			<input tabindex="-1" type="text" value="" class="shared-link" id="shared-album-link"/>
			<div id="share-services" class="spread">
				<span><a id="share-bandcamp" href="" target="_blank"><i class="fab fa-bandcamp"></i></a></span>
				<span><a id="share-spotify" href="" target="_blank"><i class="fab fa-spotify"></i></a></span>
				<span><a id="share-youtube" href="" target="_blank"><i class="fab fa-youtube"></i></a></span>
				<span><a id="share-apple" href="" target="_blank"><i class="fab fa-itunes"></i></a></span>
				<span><a id="share-deezer" href="" target="_blank"><i class="fab fa-deezer"></i></a></span>
			</div>
		</div>
		<!-- END: Modal Dialogues -->
		<!-- START: header -->
		<div id="header" class="spread nowrap">
			<span>
				<span id="ham"><i class="fas fa-bars fa-fw"></i></span>
				<span id="mini-controls" class="big-controls">
					<span class="big-jp-previous-album" oncontextmenu="return false;">&nbsp;</span>
					<span class="big-jp-previous" oncontextmenu="return false;"><i class="fas fa-step-backward fa-fw"></i>&nbsp;</span>
					<input type="checkbox" class="play-pause" /><label oncontextmenu="return false;"><i class="fas fa-fw"></i></label>
					<span class="big-jp-next" oncontextmenu="return false;"><i class="fas fa-step-forward fa-fw"></i>&nbsp;</span>
					<span class="big-jp-next-album" oncontextmenu="return false;">&nbsp;</span>
					&nbsp;
					&nbsp;
					<span class="uncover guestPlay toggles" oncontextmenu="return false;"><i class="fas fa-magic fa-fw"></i>&nbsp;</span>
					<span id="fullscreen"><i class="fas fa-expand fa-fw\"></i></span>
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
					print "<span id=\"logout\"><a href=\"?logout\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>&nbsp;</a></span>";
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
				<li id="historyToggle"><a href="#historyPanel" class="guestPlay panelToggle"><i class="fas fa-clock"></i></a></li>
				<li id="settingsToggle"><a href="#settingsPanel" class="panelToggle"><i class="fas fa-cogs"></i></a></li>
			</ul>
			<div id="panelContainer">
				<div id="browserPanel" class="panel guestPlay">
					<div class="table">
						<div id="filter">
							<input id="includeOldAlbums" tabindex="0" type="checkbox" checked="true"/>
							<label for="includeOldAlbums"><i class="fas fa-toggle-on"></i>&nbsp;<?php print $this->getString("show_all"); ?></label>
							<input type="text" id="filterText" tabindex="1" name="filterText" placeholder="<?php print $this->getString("filter_placeholder"); ?>"/>
							<a class="btn" id="filterButton" href="#"><i class="fas fa-border fa-times"></i></a>
						</div>
						<div id="favourites">
							<?php if (!AuthManager::isGuestPlay()) { print getFavourites(AuthManager::getUserName()); } ?>
						</div>
						<div id="library"></div>
					</div>
				</div>
				<div id="searchPanel" class="panel guestPlay">
					<form action="?" id="searchForm">
						<input id="searchText" type="text" name="s" value="" placeholder="<?php print $this->getString("search_placeholder"); ?>" />
						<span>
							<a class="btn" id="findIt" href="#"><i class="fas fa-border fa-search"></i></a>
							<a class="btn" id="feeling_lucky" href="#" oncontextmenu="return false;"><i class="fas fa-border fa-magic"></i></a>
							<a class="btn" id="clear" tabindex="1" href="#"><i class="fas fa-border fa-times"></i></a>
						</span>
					</form>
					<div id="hits" class="card"></div>
					<div id="searchResults"></div>
				</div>
				<div id="playlistPanel" class="panel">
					<div id="playlist-tools" class="guestPlay">
						<select id="playlist_select"></select>
						<span id="renamePlaylist" class="playlist-tools"><i class="fa fa-edit"></i></span>
						<span id="newPlaylist" class="playlist-tools"><i class="fa fa-plus"></i></span>
						<span id="deletePlaylist" class="playlist-tools"><i class="fa fa-trash"></i></span>
					</div>
					<div id="playlistSpinner">
						<span class="current"><i class="fas fa-spin fa-5x fa-spinner fa-pulse"></i></span>
					</div>
					<ul id="playlist"></ul>
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
				<div id="historyPanel" class="panel guestPlay">
					<div id="history" class="card">
						<ul id="today"><span><?php print $this->getString("today") ?></span></ul>
						<ul id="yesterday"><span><?php print $this->getString("yesterday") ?></span></ul>
						<ul id="this-week"><span><?php print $this->getString("this-week") ?></span></ul>
						<ul id="last-week"><span><?php print $this->getString("last-week") ?></span></ul>
						<ul id="this-month"><span><?php print $this->getString("this-month") ?></span></ul>
						<ul id="this-season"><span><?php print $this->getString($this->getSeason()) ?></span></ul>
						<ul id="this-year"><span><?php print $this->getString("this-year") ?></span></ul>
						<ul id="prehistoric"><span><?php print $this->getString("prehistoric") ?></span></ul>
					</div>
				</div>
				<div id="settingsPanel" class="panel">
					<?php
					if (AuthManager::isAdmin()) {
						print "<div class=\"settings guestPlay\"><i class=\"space-after fas fa-fw fa-sync\"></i><span id=\"reset_db\"><a>".$this->getString("reset_db")."</a></span></div>";
						print "<div class=\"settings guestPlay\"><i class=\"space-after fab fa-fw fa-searchengin\"></i><span id=\"quick_scan\"><a>".$this->getString("quick_scan")."</a></span></div>";
						print "<div class=\"settings guestPlay\"><i class=\"space-after fas fa-fw fa-trash\"></i><span id=\"remove_shared_links\"><a>".$this->getString("remove_shared_links")."</a></span></div>";
						print "<div class=\"settings guestPlay\"><i class=\"space-after fas fa-fw fa-minus-circle\"></i><span id=\"remove_temp_files\"><a>".$this->getString("remove_temp_files")."</a></span></div>";
						if ($this->getConfig("canRerunWizard")) {
							print "<div class=\"settings guestPlay\"><form id=\"setupForm\" action=\"?\" method=\"post\"><input name=\"rerunSetup\" style=\"display: none;\"/></form><i class=\"space-after fas fa-fw fa-hat-wizard\"></i><span id=\"run_setup\"><a>".$this->getString("run_setup")."</a></span></div>";
						}
					}
					?>
					<div class="settings">
						<i class="space-after fas fa-fw fa-bath"></i><span id="reload"><a><?php print $this->getString("reload"); ?></a></span>
					</div>
					<div class="guestPlay settings">
						<i class="space-after fas fa-fw fa-clock"></i><span id="clear_history"><a><?php print $this->getString("clear_history"); ?></a></span>
					</div>
					<div class="settings">
						<i class="space-after fas fa-fw fa-question"></i><span id="help"><a><?php print $this->getString("help"); ?></a></span>
					</div>
					<div class="settings">
						<i class="space-after fas fa-fw fa-info"></i><span id="about"><a><?php print $this->getString("about"); ?></a></span>
					</div>
					<hr/>
					<form id="theme_settings">
						<div class="settings selected">
							<i class="space-after fas fa-fw fa-palette"></i><span><?php print $this->getString("colours"); ?></span>
						</div>
						<div class="settings-sub">
							<input type="radio" id="dynamic" class="fa-input" name="option_theme" />
							<label for="dynamic"><i class="fa fa-fw fa-dot-circle-o"></i><?php print $this->getString("dynamic"); ?></label>
						</div>
						<div class="settings-sub">
							<input type="radio" id="preset" class="fa-input" name="option_theme" />
							<label for="preset"><i class="fa fa-fw fa-dot-circle-o"></i><?php print $this->getString("select_theme"); ?></label>
							<div class="theme_opts">
								<a id="my_theme" class="tooltip space-after theme-selector settings-option">[<?php print $this->getString("your_theme"); ?>]<span class="tooltiptext"><div id="my_theme_background" class="theme-preview"></div><div id="my_theme_text" class="theme-preview"></div></span></a>
								<?php
									foreach ($this->getConfig("themes") as $theme){
										print "<a class=\"tooltip space-after theme-selector settings-option\" data-background=\"".$theme[0]."\" data-text=\"".$theme[1]."\">[".$theme[2]."]<span class=\"tooltiptext\"><div class=\"theme-preview\" style=\"background-color:".$theme[0].";\"></div><div class=\"theme-preview\" style=\"background-color:".$theme[1].";\"></div></span></a>";
									}
								?>
							</div>
						</div>
						<div class="settings-sub">
							<input type="radio" id="custom" class="fa-input" name="option_theme" />
							<label for="custom"><i class="fa fa-fw fa-dot-circle-o"></i><?php print $this->getString("define_theme"); ?></label>
							<div class="theme_opts">
								<div class="settings-option">
									<input class="space-after" type="color" id="background" name="color" value="<?php print $this->getConfig("themes")[0][0]; ?>" />
									<label for="background"><?php print $this->getString("background"); ?></label>
								</div>
								<div class="settings-option">
									<input class="space-after" type="color" id="text" name="color" value="<?php print $this->getConfig("themes")[0][1]; ?>" />
									<label for="text"><?php print $this->getString("text"); ?></label>
								</div>
							</div>
						</div>
					</form>
					<hr/>
					<div class="settings">
						<input type="ckeckbox" id="wakelock" class="fa-input" name="wakelock" />
						<label for="wakelock"><i class="space-after fas fa-fw fa-toggle-off"></i><span><?php print $this->getString("keep_screen_on"); ?></span></label>
					</div>
				</div>
			</div>
		</div>
		<!-- END: Left Panel -->
		<!-- START: big player -->
		<div id="big-player">
			<div id="playerPanel">
				<div id="big-cover">
					<img id="album-art" />
					<?php print Musicco::logo("logo-player"); ?>
					<div class="right" id="big-volume-bar"></div>
					<div id="updateCoverArt" class="guestPlay">
						<span id="statusText"><?php print $this->getString("..."); ?></span>
						<span id="lookupOne" class="coveractions"><?php print $this->getString("lookupOne"); ?></span>
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
					<div class="album-details nowrap">
						<span id="nowPlaying_artist" class="nowrap">&nbsp;</span>
						<span>&nbsp;&bull;&nbsp;</span>
						<span id="nowPlaying_album" class="nowrap">&nbsp;</span>
						<span id="nowPlaying_year" class="nowrap">&nbsp;</span>
					</div>
				</div>
				<div id="big-player-bottom">
					<div id="playlist-controls" class="spread">
						<?php 
							if ($this->getConfig('isCastAllowed')) {
							echo '<google-cast-launcher class="toggles"></google-cast-launcher>';
							}
						 ?>
						<span id="big-unmute" class="toggles selected"><i class="fas fa-volume-mute fa-2x fa-fw"></i></span>
						<span id="big-mute" class="toggles"><i class="fas fa-volume-mute fa-2x fa-fw"></i></span>
						<span id="clear-playlist" class="guestPlay toggles"><i class="far fa-trash-alt fa-2x fa-fw"></i></span>
						<span class="guestPlay uncover toggles" oncontextmenu="return false;"><i class="fas fa-magic fa-2x fa-fw"></i></span>
						<span id="shuffled" class="toggles"><i class="fas fa-random fa-2x fa-fw"></i></span>
						<span id="loop" class="toggles"><i class="fas fa-redo fa-2x fa-fw"></i></span>
						<span id="big-volume-down" class="toggles"><i class="fas fa-volume-down fa-2x fa-fw"></i></span>
						<span id="big-volume-up" class="toggles"><i class="fas fa-volume-up fa-2x fa-fw"></i></span>
					</div>
					<div id="controls" class="spread big-controls">
						<span class="big-jp-previous-album" oncontextmenu="return false;"></span>
						<span class="left big-jp-previous" oncontextmenu="return false;"><i class="fas fa-step-backward fa-2x fa-fw"></i></span>
						<input type="checkbox" class="play-pause" /><label oncontextmenu="return false;"><i class="fas fa-5x fa-fw"></i></label>
						<span class="right big-jp-next" oncontextmenu="return false;"><i class="fas fa-step-forward fa-2x fa-fw"></i></span>
						<span class="big-jp-next-album" oncontextmenu="return false;"></span>
					</div>
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
			return print_r(loadPlaylist($_POST['u'], $_POST['i'], $_POST['n']));
			exit;
	} elseif(isset($_POST['renamePlaylist'])) {
			renamePlaylist($_POST['u'], $_POST['o'], $_POST['n']);
			exit;
	} elseif(isset($_POST['deletePlaylist'])) {
			deletePlaylist($_POST['u'], $_POST['i'], $_POST['n']);
			exit;
	} elseif (isset($_POST['savePlaylist'])) {
			savePlaylist($_POST['u'], $_POST['i'], $_POST['n'], $_POST['p'], $_POST['c'], $_POST['t']);
			exit;
	} elseif (isset($_POST['saveGuestPlaylist'])) {
			$user = $_POST['u'];
			$path = str_replace("\"", "\\\"", $_POST['p']);
			$data = "[{\"build\": true , \"path\": \"".$path."\"}]";
			createUser($user, true);
			savePlaylist($user, "guestPlay", "guestPlay", $data, "0", "0", "true", "false");
			logMessage("Saved guest playlist $path for $user");
			exit;
	} elseif (isset($_POST['saveHistory'])) {
			return print saveHistory($_POST['u'], $_POST['i'], $_POST['a']);
			exit;
	} elseif (isset($_POST['getHistory'])) {
			return print getHistory($_POST['u']);
			exit;
	} elseif (isset($_POST['getPlaylists'])) {
			return print getPlaylists($_POST['u']);
			exit;
	} elseif (isset($_POST['loadSettings'])) {
			return print loadSettings($_POST['u']);
			exit;
	} elseif (isset($_POST['saveSettings'])) {
		saveSettings($_POST['u'], $_POST['p'], $_POST['v'], $_POST['l'], $_POST['s'], $_POST['w'], $_POST['m'], $_POST['b'], $_POST['t'], $_POST['cb'], $_POST['ct']);
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
			$result = file_put_contents($path.Musicco::getConfig('coverFileName').Musicco::getConfig('coverExtension'), file_get_contents($url));
			return print $result;
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
			$parentfolder = $_GET['parentfolder'];
			$album = $_GET['album'];
			$rootPath = realpath($parentfolder);
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
	} elseif (isset($_POST['clear_history'])) {
			logMessage("Clearing user history");
			clearHistory($_POST['u']);
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
	} elseif (isset($_GET['checkStatus'])) {
			checkStatus($_GET['u']);
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

function checkStatus($user) {
	debugMessage(__FUNCTION__);
	header('Content-Type: text/event-stream');
	header('Cache-Control: no-cache');
	$status = [];
	$userId = getId($user);
	if ($userId != 0) {
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$status_query = $db->prepare("SELECT client, save_time FROM users WHERE id=$userId;");
		$status_query->execute();
		$result = $status_query->fetchAll();
		$status_query = NULL;
		$db = NULL;
		foreach($result as $row) {
			$status = array(
										"client" => $row['client'],
										"save_time" => $row['save_time']
									);
		}
	}
	logMessage("Loaded status for $user");
	debugMessage("Loaded status: ".$row['client'].$row['save_time']);
	echo "id: ".time().PHP_EOL;
	echo "data: ".json_encode($status);
	echo PHP_EOL;
	echo PHP_EOL;
  flush();
  ob_flush();
}

function addFavourite($user, $path) {
	debugMessage(__FUNCTION__);
	$userId = getId($user);
	if ($userId != 0) {
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$tracks=[];
		if (preg_match("/.*\.mp3$/", $path)) {
			array_push($tracks, $path);
		} else {
			$query = "SELECT parentfolder, name FROM item WHERE parentfolder LIKE \"$path%\" AND type IN (".Musicco::TYPE_FILE.");";
			$children = $db->query($query);
			foreach($children as $row) {
				array_push($tracks, $row["parentfolder"] . $row["name"]);
			}
		}
		foreach($tracks as $track) {
			$insert_track = "REPLACE INTO favourites (userId, path) VALUES ($userId, \"$track\")";
			$db->exec($insert_track);
		}
	$db = NULL;
	}
}

function saveHistory($user, $artist, $album) {
	debugMessage(__FUNCTION__);
	$userId = getId($user);
	if ($userId != 0) {
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$insert_history = "REPLACE INTO history (userId, artist, album, timestamp) VALUES ($userId, \"$artist\", \"$album\", ".time().")";
		$db->exec($insert_history);
		}
	$db = NULL;
	logMessage("Saved history for $user");
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

function clearHistory($user) {
	debugMessage(__FUNCTION__);
	$userId = getId($user);
	if ($userId != 0) {
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$history_query = $db->prepare("DELETE FROM history WHERE userId=$userId;");
		$history_query->execute();
		$children = $history_query->fetchAll();
		$history_query = NULL;
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
	savePlaylist($user, "", Musicco::getConfig('defaultPlaylist'), "[]", 0, 0);
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

function getHistory($user) {
	debugMessage(__FUNCTION__);
	$history = [];
	$userId = getId($user);
	if ($userId != 0) {
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$history_query = $db->prepare("SELECT artist, album, timestamp FROM history WHERE userId=$userId ORDER BY timestamp DESC;");
		$history_query->execute();
		$result = $history_query->fetchAll();
		$history_query = NULL;
		$db = NULL;
		foreach($result as $row) {
			array_push($history, array("artist" => $row['artist'], "album" => $row['album'], "timestamp" => $row['timestamp']));
		}
	}
	logMessage("Loaded history for $user");
	return json_encode($history);
}

function buildUL($favourites, $prefix) {
  global $favourites_list;
  $favourites_list .= "\n<ul>\n";
  $slash = ($prefix != "") ? "/" : "";
  foreach ($favourites as $key => $value) {
    $is_folder = (is_array($value)) ? "class='folder' data-folder='true'": "data-folder='false'";
    $isNew = (preg_match("/".Musicco::getConfig('new_marker')."/", $key))? "current" : "treenode";
		$li_data = "$is_folder data-parentfolder='$prefix$slash' data-key='".urlencode($prefix.$slash.$key)."' data-extraClasses='$isNew' data-path='$key' data-album='$key' data-artist='$key' data-cover=''  data-songtitle='$key' data-type='' data-year='' data-favourite='true'";
		$favourites_list .= "<li $li_data><span>";
    $favourites_list .= preg_replace("/".Musicco::getConfig('new_marker')."/", "", $key)."</span>";
    // if the value is another array, recursively build the list
    if (is_array($value))
      buildUL($value, "$prefix$slash$key");
    $favourites_list .= "</li>\n";
  }
  $favourites_list .= "</ul>\n";
}

function setCurrentPlaylistId($userId, $clientId, $playlistId) {
		debugMessage(__FUNCTION__);
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$playlist_update_query = $db->prepare("UPDATE users set current_playlist=$playlistId, save_time=".time().", client=\"$clientId\" WHERE id=$userId;");
		$playlist_update_query->execute();
		$playlist_update_query = NULL;
		$db = NULL;
		logMessage("Set $playlistId as current playlist for $userId on client $clientId");
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

function savePlaylist($user, $clientId, $name, $playlist, $current, $time) {
	debugMessage(__FUNCTION__);
	$userId = getId($user);
	if ($userId != 0) {
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$data = preg_replace('/"/', '\\\'', "{\"current\": \"$current\" , \"time\": \"$time\" , \"playlist\": \"".preg_replace('/"/', '\\"', $playlist)."\"}");
		$update_playlist_query = $db->prepare("REPLACE INTO playlists (userId, name, data) VALUES ($userId, \"$name\", \"$data\")");
		$update_playlist_query->execute();
		$playlistId = $db->lastInsertId();
		$update_playlist_query = NULL;
		$db = NULL;
		logMessage("Saved playlist $name for $user");
		debugMessage("Saved playlist: ".$data);
		setCurrentPlaylistId($userId, $clientId, $playlistId);
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

function saveSettings($user, $panel, $volume, $loop, $shuffled, $wakelock, $theme, $background, $text, $custom_background, $custom_text) {
	debugMessage(__FUNCTION__);
	$userId = getId($user);
	if ($userId != 0) {
		$query = "UPDATE users set option_panel=\"$panel\", option_volume=$volume, option_loop=\"$loop\", option_shuffled=\"$shuffled\", option_wakelock=\"$wakelock\", option_theme=\"$theme\", theme_background=\"$background\", theme_text=\"$text\", custom_background=\"$custom_background\", custom_text=\"$custom_text\" WHERE id=$userId;";
		debugMessage($query);
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$update_settings_query = $db->prepare($query);
		$update_settings_query->execute();
		$update_settings_query = NULL;
		$db = NULL;
		logMessage("Saved settings for $user");
		debugMessage("Saved settings: ".$panel.$volume.$loop.$shuffled.$wakelock,$theme.$background.$text.$custom_background.$custom_text);
	}
}

function loadSettings($user) {
	debugMessage(__FUNCTION__);
	$settings = [];
	$userId = getId($user);
	if ($userId != 0) {
		$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
		$settings_query = $db->prepare("SELECT option_panel, option_volume, option_loop, option_shuffled, option_wakelock, option_theme, theme_background, theme_text, custom_background, custom_text FROM users WHERE id=$userId;");
		$settings_query->execute();
		$result = $settings_query->fetchAll();
		$settings_query = NULL;
		$db = NULL;
		foreach($result as $row) {
			$settings = array(
										"panel" => $row['option_panel'],
										"volume" => $row['option_volume'],
										"loop" => $row['option_loop'],
										"shuffled" => $row['option_shuffled'],
										"wakelock" => $row['option_wakelock'],
										"theme" => $row['option_theme'],
										"background" => $row['theme_background'],
										"text" => $row['theme_text'],
										"custom_background" => $row['custom_background'],
										"custom_text" => $row['custom_text']
									);
		}
	}
	logMessage("Loaded settings for $user");
	debugMessage("Loaded settings: ".$row['option_panel'].$row['option_volume'].$row['option_loop'].$row['option_shuffled'].$row['option_wakelock'].$row['option_theme'].$row['theme_background'].$row['theme_text'].$row['custom_background'].$row['custom_text']);
	return json_encode($settings);
}

function loadPlaylist($user, $clientId, $name) {
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
			setCurrentPlaylistId($userId, $clientId, $row['id']);
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

function deletePlaylist($user, $clientId, $name) {
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
			setCurrentPlaylistId($userId, $clientId, 0);
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
		$create_user_query = $db ->prepare("INSERT into users (username, current_playlist, save_time, client, option_panel, option_volume, option_loop, option_shuffled, option_wakelock, option_theme, theme_background, theme_text, custom_background, custom_text) VALUES (\"" . $user . "\", 0, 0, \"\", \"infoPanel\", 100, \"false\", \"false\", \"false\", \"dynamic\", \"".Musicco::getConfig('themes')[0][0]."\", \"".Musicco::getConfig('themes')[0][1]."\", \"".Musicco::getConfig('themes')[0][0]."\", \"".Musicco::getConfig('themes')[0][1]."\");");
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
		$query = "SELECT name, type, parentfolder, cover, album, artist, title, year, number, extension FROM item WHERE parentfolder = \"$query_root\"  AND type NOT IN (".Musicco::TYPE_COVER.") ORDER BY type, name COLLATE NOCASE";
		break;
		case "queue":
		$query = "";
		if (preg_match("/.*\.mp3$/", $query_root)) {
			$query_root = explode("/", $query_root);
			$filename = $query_root[sizeOf($query_root)-1];
			$parentfolder = "";
			for($i=0; $i<sizeOf($query_root)-1; $i++) {
				$parentfolder.=$query_root[$i]."/";
			$query = "SELECT main.name, main.type, main.parentfolder, (SELECT (parentfolder || name) FROM item sub WHERE sub.parentfolder = main.parentfolder AND sub.type IN (".Musicco::TYPE_COVER.") LIMIT 1) as cover, main.album, main.artist, main.title, main.year, main.number, main.extension FROM item main WHERE main.parentfolder = \"$parentfolder\" AND main.name = \"$filename\"  AND main.type IN (".Musicco::TYPE_FILE.") ORDER BY main.parentfolder, main.name COLLATE NOCASE";
			}
		} else {
			$query = "SELECT main.name, main.type, main.parentfolder, (SELECT (parentfolder || name) FROM item sub WHERE sub.parentfolder = main.parentfolder AND sub.type IN (".Musicco::TYPE_COVER.") LIMIT 1) as cover, main.album, main.artist, main.title, main.year, main.number, main.extension FROM item main WHERE main.parentfolder LIKE \"$query_root%\"  AND main.type IN (".Musicco::TYPE_FILE.") ORDER BY main.parentfolder, main.name COLLATE NOCASE";
		}
		break;
		case "search":
		$query = "SELECT name, type, parentfolder, cover, album, artist, title, year, number, extension FROM item WHERE normalised_name LIKE \"%$query_root%\" AND type NOT IN (".Musicco::TYPE_COVER.") ORDER BY parentfolder, name COLLATE NOCASE";
		break;
		case "uncover":
		$query = "SELECT main.name, main.type, main.parentfolder, (SELECT (parentfolder || name) FROM item sub WHERE sub.parentfolder = main.parentfolder AND sub.type IN (".Musicco::TYPE_COVER.") LIMIT 1) as cover, main.album, main.artist, main.title, main.year, main.number, main.extension FROM item main WHERE main.type IN (".Musicco::TYPE_FILE.") ORDER BY RANDOM() LIMIT ".Musicco::getConfig('uncover_limit');
		break;
		case "uncover_new":
		$query = "SELECT main.name, main.type, main.parentfolder, (SELECT (parentfolder || name) FROM item sub WHERE sub.parentfolder = main.parentfolder AND sub.type IN (".Musicco::TYPE_COVER.") LIMIT 1) as cover, main.album, main.artist, main.title, main.year, main.number, main.extension FROM item main WHERE main.parentfolder LIKE '%".preg_replace(array("/_/", "/%/"), array("\_", "\%"), Musicco::getConfig('new_marker'))."%' ESCAPE '\' AND main.type IN (".Musicco::TYPE_FILE.") ORDER BY RANDOM() LIMIT ".Musicco::getConfig('uncover_limit');
		break;
		case "feeling_lucky":
		$query = "SELECT main.name, main.type, main.parentfolder, (SELECT (parentfolder || name) FROM item sub WHERE sub.parentfolder = main.parentfolder AND sub.type IN (".Musicco::TYPE_COVER.") LIMIT 1) as cover, main.album, main.artist, main.title, main.year, main.number, main.extension FROM item main WHERE main.type IN (".Musicco::TYPE_FILE.") AND (main.artist LIKE \"%$query_root%\" OR main.title LIKE \"%$query_root%\") ORDER BY RANDOM() LIMIT ".Musicco::getConfig('uncover_limit');
		break;
		default:
	}

	$db = new PDO('sqlite:'.Musicco::getConfig('musicRoot').'.db');
	$_START_QUERY = microtime(true);
	logMessage($query);
	$result = $db->query($query)->fetchAll();
	$list = [];
	logMessage("Queried DB in ".number_format((microtime(true) - $_START_QUERY), 3)." seconds");
	$_START_DISPLAY = microtime(true);
	if (sizeOf($result)) {
		foreach($result as $row) {
			$name = $row['name'];
			$type = $row['type'];
			$parentfolder = $row['parentfolder'];
			$cover = $row['cover'];
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
								"parentfolder" => $parentfolder,
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
			debugMessage("$name, $type, $parentfolder, $cover, $album, $artist, $title, $year, $number, $extension, $folder, $extraClasses");
		}
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
		$db->exec('INSERT INTO item (name, normalised_name, type, parentfolder, cover, album, artist, title, year, number, extension) VALUES ("'.$folder.'","'. normalise($folder).'", "1", "'.Musicco::getConfig('musicRoot').'/", "", "", "", "'.$folder.'", "", "", "");');
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
	$db->exec("CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, normalised_name TEXT, type TEXT, parentfolder TEXT, cover TEXT, album TEXT, artist TEXT, title TEXT, year TEXT, number TEXT, extension TEXT);");
	$db->exec("CREATE TABLE item_tmp (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, normalised_name TEXT, type TEXT, parentfolder TEXT, cover TEXT, album TEXT, artist TEXT, title TEXT, year TEXT, number TEXT, extension TEXT);");
	$db->exec("CREATE TABLE data (key TEXT PRIMARY KEY, value TEXT);");
	$db->exec("CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT NOT NULL UNIQUE, current_playlist INTEGER, save_time INTEGER, client TEXT, option_panel TEXT NOT NULL, option_volume INTEGER, option_loop TEXT NOT NULL, option_shuffled TEXT NOT NULL, option_wakelock TEXT NOT NULL, option_theme TEXT NOT NULL, theme_background TEXT NOT NULL, theme_text TEXT NOT NULL, custom_background TEXT NOT NULL, custom_text TEXT NOT NULL);");
	$db->exec("CREATE TABLE favourites (id INTEGER PRIMARY KEY AUTOINCREMENT, userId INTEGER , path TEXT, unique(userId, path));");
	$db->exec("CREATE TABLE playlists (id INTEGER PRIMARY KEY AUTOINCREMENT, userId INTEGER , name TEXT, data TEXT, unique(userId, name));");
	$db->exec("CREATE TABLE history (id INTEGER PRIMARY KEY AUTOINCREMENT, userId INTEGER , artist TEXT, album TEXT, timestamp INTEGER, unique(userId, artist, album));");
	$db->exec("INSERT INTO data (key, value) VALUES ('TYPE_FOLDER', ".Musicco::TYPE_FOLDER.");");
	$db->exec("INSERT INTO data (key, value) VALUES ('TYPE_FILE', ".Musicco::TYPE_FILE.");");
	$db->exec("INSERT INTO data (key, value) VALUES ('TYPE_COVER', ".Musicco::TYPE_COVER.");");
	$db->exec("INSERT INTO data (key, value) VALUES ('version', '".Musicco::getConfig('dbVersion')."');");
	$db->exec("CREATE UNIQUE INDEX IF NOT EXISTS item_idx ON item (parentfolder, name);");
	$db->exec("CREATE UNIQUE INDEX IF NOT EXISTS item_idx2 ON item (parentfolder, name, type);");
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
	$insert_item = $db->prepare('INSERT INTO '.$destTable.' (name, normalised_name, type, parentfolder, cover, album, artist, title, year, number, extension) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');

	foreach ($library as $item) {
		$name= $item[0];
		$normalised_name = normalise($name);
		$type= $item[1];
		$parentfolder= $item[2];
		$cover= "";
		$album= "";
		$artist= "";
		$title= "";
		$year= "";
		$number= "";
		$extension= "";
		// compute year 
		$target =  ($type == Musicco::TYPE_FOLDER)? $name : $parentfolder;
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
		$exploded_parentfolder = explode("/", $parentfolder);
		
		$album_location = ($type == Musicco::TYPE_FOLDER)? 3 : 2;
		if (sizeOf($exploded_parentfolder) - $album_location > 0) {
			$album = $exploded_parentfolder[sizeOf($exploded_parentfolder) - $album_location];
			$i=1;
			while(($i < sizeOf($exploded_parentfolder)) && (preg_match(Musicco::getConfig('albumPattern'), $album))) {
				$i+=1;
				$album = $exploded_parentfolder[$i];
			}
		} else {
			$album = $name;
		}
		$album = str_replace("[$year] ", "", $album);
		
		// compute artist
		$i=1;
		$artist = $exploded_parentfolder[$i];
		while(($i < sizeOf($exploded_parentfolder)) && (preg_match(Musicco::getConfig('artistPattern'), $artist))) {
			$i+=1;
			$artist = $exploded_parentfolder[$i];
		}
		$artist = str_replace(Musicco::getConfig('new_marker'), "", $artist);

		// insert all info in DB
		$insert_item->execute(array($name, $normalised_name, $type, $parentfolder, $cover, $album, $artist, $title, $year, $number, $extension));
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
			$db->exec("INSERT INTO item (name, normalised_name, type, parentfolder, cover, album, artist, title, year, number, extension) SELECT name, normalised_name, type, parentfolder, cover, album, artist, title, year, number, extension FROM item_tmp;");
			$db->exec("DELETE FROM item_tmp;");
			$db->exec("REINDEX item_idx;");
			$db->exec("REINDEX item_idx2;");
			$db->exec("REINDEX item_idx3;");
			$db->exec("REINDEX item_idx4;");
			$db->exec("REINDEX users_idx;");
			$db->exec("REINDEX playlists_idx;");

			printf("%.1s s",(microtime(true) - $_START_INSERT));
			logMessage("Built library in ".number_format((microtime(true) - $_START_INSERT), 3)." seconds");

			// clean up favourites			
			$_START_FAVOURITES = microtime(true);
			$get_favourites_query = $db->prepare("SELECT path from favourites;");
			$get_favourites_query->execute();
			$favourites = $get_favourites_query->fetchAll();
			$get_favourites_query = NULL;
			$file_check = $db->prepare('SELECT COUNT(id) from item where parentfolder = ? AND name = ?;');
			foreach($favourites as $row) {
				$favourite = pathinfo($row['path']);
				$parentfolder = $favourite["dirname"]."/";
				$file = $favourite["basename"];
				$file_check->execute(array($parentfolder, $file));
				$count = $file_check->fetchColumn();
				if (!$count) {
					$alt_parentfolder = preg_replace("/".Musicco::getConfig('new_marker')."/", "", $parentfolder);
					$file_check->execute(array($alt_parentfolder, $file));
					$count = $file_check->fetchColumn();
					if (!$count) {
						$db->exec("DELETE from favourites where path=\"$parentfolder$file\";");
					} else {
						$db->exec("UPDATE favourites SET path=\"$alt_parentfolder$file\" where path=\"$parentfolder$file\";");
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
		$helpString="<div id='helpBox' autofocus>";
		$helpString.="<div class='bold big'><i class='fas fa-keyboard'></i>&nbsp;Keyboard Shortcuts</div>";
		$helpString.="<div><br/></div>";
		$helpString.="<div class='yellow bold'>Playback</div>";
		$helpString.="<div>&larr;: previous track</div>";
		$helpString.="<div>&rarr;: next track</div>";
		$helpString.="<div>shift + &larr;: previous album</div>";
		$helpString.="<div>shift + &rarr;: next album</div>";
		$helpString.="<div>&uarr;: volume up</div>";
		$helpString.="<div>&darr;: volume down</div>";
		$helpString.="<div>shift + &uarr;: move current album up in playlist</div>";
		$helpString.="<div>shift + &darr;: move current album down in playlist</div>";
		$helpString.="<div>&lt;space&gt;: play/pause</div>";
		$helpString.="<div>0-9: seek to 0%-90% of current track</div>";
		$helpString.="<div>e: seek to end of current track</div>";
		$helpString.="<div>You can also use media keys on most multimedia keyboards</div>";
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
		$helpString.="<div>c: show listening history</div>";
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
		$helpString.="<a tabindex='-1' class='yellow' target='_blank' href='https://www.musicco.app/#features'>musicco.app</a></div>";
		
		
		$helpString.="</div>";
		return $helpString;
	 }
	 
		function getAbout() {
		$aboutString="<div id='aboutBox' autofocus>";
			$aboutString.="<div class='bold'><a tabindex='-1' target='_blank' href='//musicco.app'>".Musicco::logo("logo-about")."</a></div>";
			$aboutString.="<div class='bold big'><a tabindex='-1' target='_blank' href='//musicco.app'>musicco</a></div>";
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
				$aboutString.="<div class='bold yellow'>3.1 (in development)</div>";
				$aboutString.="<li>Read album art from id3 tag</li>";
				$aboutString.="<li>Added an option to keep screen on</li>";
				$aboutString.="<li>Fixed some issues with casting on Android</li>";
				$aboutString.="<li>Improved QR Code styling</li>";
				$aboutString.="<li>Fix adding of duplicate albums in playlist</li>";
				$aboutString.="<li>Added confirmation dialogs before clearing items</li>";
				$aboutString.="<li>Improved sharing dialog</li>";
				$aboutString.="<li>Improved uncover dialog</li>";
				$aboutString.="<li>Improved lyrics provider</li>";
				$aboutString.="<li>Improved landscape view on mobile</li>";
				$aboutString.="<li>Dependency updates</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold yellow'>3.0 (4th December 2020)</div>";
				$aboutString.="<li>Added casting directly from player</li>";
				$aboutString.="<li>Allow viewing listening history</li>";
				$aboutString.="<li>Allow re-running the setup wizard</li>";
				$aboutString.="<li>Fixed an issue where the mini toolbar would show up when unwanted</li>";
				$aboutString.="<li>Minor UI refresh around info panel, header, player controls, context menus and album art</li>";
				$aboutString.="<li>Fixed transparency effects</li>";
				$aboutString.="<li>Improved layout for widescreen devices</li>";
				$aboutString.="<li>Improved browse panel performance</li>";
				$aboutString.="<li>Save active panel setting</li>";
				$aboutString.="<li>Notify clients if they are out of date</li>";
				$aboutString.="<li>Dependency updates</li>";
				$aboutString.="<li>Minor bugfixes</li>";
			$aboutString.="</ul>";
			$aboutString.="<ul>";
				$aboutString.="<div class='bold yellow'>2.0 (28th October 2018)</div>";
				$aboutString.="<li>Use native html audio instead of jplayer / jplayerPlaylist</li>";
				$aboutString.="<li>Refreshed UI</li>";
				$aboutString.="<li>Theme selector and dynamic theme</li>";
				$aboutString.="<li>Added support for multiple playlists per user</li>";
				$aboutString.="<li>Added support for marking albums and tracks as favourites</li>";
				$aboutString.="<li>Improved controls for touchcreen browsers</li>";
				$aboutString.="<li>Added support for rich notifications on Android using Media Session API</li>";
				$aboutString.="<li>Added play/pause and skip actions to desktop notification</li>";
				$aboutString.="<li>Added support for quickly adding an album without scanning the entire library</li>";
				$aboutString.="<li>Save your favourite albums</li>";
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

	function getCheckboxStatus($optionName) {
		$checkboxStatus = (($optionName == "true") || ($optionName == "on"))? "checked" : "";
		return $checkboxStatus;
	}

	 function getWizardUI() {
		$wizard = "<html>";
		$wizard .= "<body>";
		$wizard .= "<head>";
		$wizard .= "<link rel='icon' type='image/png' href='app/icon-192x192.png' sizes='192x192'>";
		$wizard .= "<link rel='stylesheet' type='text/css' href='lib/font-awesome/css/all.min.css'>";
		$wizard .= "<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Montserrat' >";
		$wizard .= "<link rel='stylesheet' type='text/css' href='theme/musicco.css' >";
		$wizard .= "<script type='text/javascript' src='lib/jquery/jquery-3.5.0.min.js'></script>";
		$wizard .= "<script type='text/javascript'>";
		$wizard .= "$(document).ready(function() {\n";
		$wizard .= "\t$('#lang').val('".Musicco::getConfig('lang')."');\n";
		$wizard .= "\t$('label').on('click', function() { checkbox = 'input[name=\"' + $(this).attr('for') + '\"]'; $(checkbox).prop('checked', !($(checkbox).is(':checked'))); });\n";
		$wizard .= "});";
		$wizard .= "</script>";
		$wizard .= "</head>";
		$wizard .= "<div class='landing'>";
		$wizard .= "<div class='landing-header'>";
		$wizard .= Musicco::logo("logo-landing").Musicco::getConfig('appName')." setup wizard";
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
		$wizard .= "<input class='fa-input' name='require_login' type='checkbox' ".getCheckboxStatus(Musicco::getConfig('require_login')).">";
		$wizard .= "<label for='require_login'><i class='fas fa-fw fa-toggle-on'></i>Require login</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>If you require a login, you can have several users listening to their own playlists. If you want your installation to be completely open and all your user sharing the same playlists, leave this box unchecked.</span></i>";
		$wizard .= "<div id='users'>";
		$wizard .= "<label for='users'>Users</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>Type in a list of user/password/isAdmin sets.</span></i>";
		$wizard .= "<br/>";
		$wizard .= "<textarea name='users' rows='5' cols='60'>".printUsers()."</textarea>";
		$wizard .= "</div>";
		$wizard .= "</div>";
		$wizard .= "</fieldset>";
		$wizard .= "<fieldset>";
		$wizard .= "<legend>Features</legend>";
		$wizard .= "<div>";
		$wizard .= "<label for='lang'>UI language</label>";
		$wizard .= "<select id='lang' name='lang'>";
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
		$wizard .= "<input name='loadLyricsFromFile' class='fa-input' type='checkbox' ".getCheckboxStatus(Musicco::getConfig('loadLyricsFromFile')).">";
		$wizard .= "<label for='loadLyricsFromFile'><i class='fas fa-fw fa-toggle-on'></i>Load lyrics from local .lrc files</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>Whether to load .lrc lyrics files from disk. If a .lrc file with the same name as the audio  file exists in the same folder, its contents  will be loaded into the lyrics panel before  searching online for it.</span></i>";
		$wizard .= "</div>";
		$wizard .= "<div>";
		$wizard .= "<input name='lookUpLyrics' class='fa-input' type='checkbox' ".getCheckboxStatus(Musicco::getConfig('lookUpLyrics')).">";
		$wizard .= "<label for='lookUpLyrics'><i class='fas fa-fw fa-toggle-on'></i>Lookup lyrics online</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>Whether to lookup lyrics online to display them in the lyrics panel. When disabled, the lyrics panel only shows links to search for lyrics manually.</span></i>";
		$wizard .= "</div>";
		$wizard .= "<div>";
		$wizard .= "<input name='downLoadMissingCovers' class='fa-input' type='checkbox' ".getCheckboxStatus(Musicco::getConfig('downLoadMissingCovers')).">";
		$wizard .= "<label for='downLoadMissingCovers'><i class='fas fa-fw fa-toggle-on'></i>Download album art</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>Whether to automatically download missing covers online. New covers will be saved to disk in the folder containing the song currently playing. Even when turning this off, you can still  trigger cover art search manually.</span></i>";
		$wizard .= "</div>";
		$wizard .= "<div>";
		$wizard .= "<input name='isCastAllowed' class='fa-input' type='checkbox' ".getCheckboxStatus(Musicco::getConfig('isCastAllowed')).">";
		$wizard .= "<label for='isCastAllowed'><i class='fas fa-fw fa-toggle-on'></i>Enable casting to compatible devices</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>When checked, the google chromecast library is loaded and will enable casting to compatible devices on your network.</span></i>";
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
		$wizard .= "<fieldset>";
		$wizard .= "<legend>System</legend>";
		$wizard .= "<div>";
		$wizard .= "<input name='canRerunWizard' class='fa-input' type='checkbox' ".getCheckboxStatus(Musicco::getConfig('canRerunWizard')).">";
		$wizard .= "<label for='canRerunWizard'><i class='fas fa-fw fa-toggle-on'></i>Allow running this wizard from the web UI again</label>";
		$wizard .= "<i class='tooltip fa fa-question-circle'><span class='tooltiptext'>If you uncheck this box, you will need physical access to the server to edit the configuration in the future. It is recommended to uncheck this box on installations where no login is required to avoid unwanted setup changes.</span></i>";
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