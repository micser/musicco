<?php
// Initialising variables. Don't change these.
$_CONFIG = array();
$_ERROR = "";
$_CONFIG['domain'] = getDomain();
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
// Default: $_CONFIG['appInfo'] = "(//sourceforge.net/p/musicco)";
$_CONFIG['appInfo'] = "(//sourceforge.net/p/musicco)";


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
// Default: $_CONFIG['users'] = array(array("admin", "admin", "true"),
// 	  								  array("guest", "guest", "false")
//			                          );
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
/*   TRANSLATIONS.                                                         */
/***************************************************************************/

$_TRANSLATIONS = array();

// English
$_TRANSLATIONS["en"] = array(
	"username" => "Username",
	"password" => "Password",
	"wrong_pass" => "Wrong username or password",
	"mobile_version" => "small player",
	"standard_version" => "full player",
	"install" => "Install",
	"dismiss" => "Dismiss",
	"android_banner_text" => "musicco is available on Android",
	"reset_db" => "update library",
	"rebuildingLibrary" => "refreshing library...",
	"libraryRebuiltIn" => "library updated in ",
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
	"fetchedAlbumArt" => "cover art up to date",
	"noAlbumArt" => "no album art found"
	
);


// French
$_TRANSLATIONS["fr"] = array(
	"username" => "Utilisateur",
	"password" => "Mot de passe",
	"wrong_pass" => "Utilisateur ou mot de passe invalide.",
	"mobile_version" => "version mobile",
	"standard_version" => "version desktop",
	"install" => "Installer",
	"dismiss" => "Ignorer",
	"android_banner_text" => "musicco est disponible sur Android",
	"reset_db" => "rafraichir la discothèque",
	"rebuildingLibrary" => "scan en cours...",
	"libraryRebuiltIn" => "discothèque rafraichie en  ",
	"log_in" => "Connexion",
	"log_out" => "déconnexion",
	"show_all" => "inclure anciens",
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
	"noAlbumArt" => "Pas de couverture trouvée"
);



function getDomain() {
 $domain = 'http';
 if (isset($_SERVER["HTTPS"])) {$domain .= "s";}
 $domain .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $domain .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
 } else {
  $domain .= $_SERVER["SERVER_NAME"];
 }
 return htmlspecialchars($domain);
}

function css() {
?>
<link href="skins/<?php print Musicco::getConfig('skin'); ?>/jplayer.musicco.css" rel="stylesheet" type="text/css" />
<link href="skins/<?php print Musicco::getConfig('skin'); ?>/musicco.css" rel="stylesheet" type="text/css" />
<?php
}

/***************************************************************************/
/*   HERE COMES THE CODE.                                                  */
/*   DON'T CHANGE UNLESS YOU KNOW WHAT YOU ARE DOING ;)                    */
/***************************************************************************/

//
// The class controls logging in and authentication
//
class AuthManager
{
	public static function init()
	{
		global $musicco;
		if(strlen(Musicco::getConfig("session_name")) > 0)
				session_name(Musicco::getConfig("session_name"));
				
		if(count(Musicco::getConfig("users")) > 0)
			session_start();			
		else
			return;
			
		if(isset($_GET['logout']))
		{
			$_SESSION['musicco_user_name'] = null;
			$_SESSION['musicco_user_pass'] = null;
		}
			
		if(isset($_POST['user_pass']) && strlen($_POST['user_pass']) > 0)
		{
			if(AuthManager::isUser((isset($_POST['user_name'])?$_POST['user_name']:""), $_POST['user_pass']))
			{
				$_SESSION['musicco_user_name'] = isset($_POST['user_name'])?$_POST['user_name']:"";
				$_SESSION['musicco_user_pass'] = $_POST['user_pass'];
			}
			else
				$musicco->setErrorString("wrong_pass");
		}
	}
	
	public static function isUser($userName, $userPass)
	{
		foreach(Musicco::getConfig("users") as $user)
		{
			if($user[1] == $userPass)
			{
				if(strlen($userName) == 0 || $userName == $user[0])
				{
					return true;
				}
			}
		}
		return false;
	}
	
	public static function isLoginRequired()
	{
		if(Musicco::getConfig("require_login") == "false"){
			return false;
		}
		return true;
	}
	
	public static function isUserLoggedIn()
	{
		if(isset($_SESSION['musicco_user_name']) && isset($_SESSION['musicco_user_pass']))
		{
			if(AuthManager::isUser($_SESSION['musicco_user_name'], $_SESSION['musicco_user_pass']))
				return true;
		}
		return false;
	}
	
	public static function isAccessAllowed()
	{
		if(!AuthManager::isLoginRequired() || AuthManager::isUserLoggedIn())
			return true;
		return false;
	}
	
	public static function isAdmin()
	{
		if(!AuthManager::isLoginRequired())
		{
			return true;
		}
		if(isset($_SESSION['musicco_user_name']) && isset($_SESSION['musicco_user_pass']))
		{
		foreach(Musicco::getConfig("users") as $user)
		{
			if($user[0] == $_SESSION['musicco_user_name'])
			{
				if($user[2] == "true")
				{
					return true;
				}
			}
		}
		}
		return false;
	}

	
	public static function getUserName()
	{
		if(AuthManager::isUserLoggedIn() == true && isset($_SESSION['musicco_user_name']) && strlen($_SESSION['musicco_user_name']) > 0)
			return $_SESSION['musicco_user_name'];
		if(isset($_SERVER["REMOTE_USER"]) && strlen($_SERVER["REMOTE_USER"]) > 0)
			return $_SERVER["REMOTE_USER"];
		if(isset($_SERVER['PHP_AUTH_USER']) && strlen($_SERVER['PHP_AUTH_USER']) > 0)
			return $_SERVER['PHP_AUTH_USER'];
		return "guest";
	}
	
	public static function showLoginBox(){
		if(!AuthManager::isUserLoggedIn() && count(Musicco::getConfig("users")) > 0)
			return true;
		return false;
	}
}

class Musicco
{
	var $lang;

	function init()
	{		
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
	public static function getLangString($stringName, $lang)
	{
		global $_TRANSLATIONS;
		if(isset($_TRANSLATIONS[$lang]) && is_array($_TRANSLATIONS[$lang]) 
			&& isset($_TRANSLATIONS[$lang][$stringName]))
			return $_TRANSLATIONS[$lang][$stringName];
		else if(isset($_TRANSLATIONS["en"]))
			return $_TRANSLATIONS["en"][$stringName];
		else
			return "Translation error";
	}
	
	function getString($stringName)
	{
		return Musicco::getLangString($stringName, $this->lang);
	}
	
	//
	// The function for getting configuration values
	//
	public static function getConfig($name)
	{
		global $_CONFIG;
		if(isset($_CONFIG) && isset($_CONFIG[$name]))
			return $_CONFIG[$name];
		return null;
	}
	
	public static function setError($message)
	{
		global $_ERROR;
		if(isset($_ERROR) && strlen($_ERROR) > 0)
			;// keep the first error and discard the rest
		else
			$_ERROR = $message;
	}
	
	function setErrorString($stringName)
	{
		Musicco::setError($this->getString($stringName));
	}

	//
	// Main function, activating tasks
	// 
	function run()
	{
		$this->outputHtml();
	}
	
	public function printLoginBox()
	{
		?>
		<div id="login">
		<form enctype="multipart/form-data" action="?" method="post">
		<?php 
		if(AuthManager::isLoginRequired())
		{
			$require_username = false;
			foreach(Musicco::getConfig("users") as $user){
				if($user[0] != null && strlen($user[0]) > 0){
					$require_username = true;
					break;
				}
			}
			if($require_username)
			{
			?>
			<div><label for="user_name"><?php print $this->getString("username"); ?>:</label>
			<input type="text" name="user_name" value="" id="user_name" /></div>
			<?php 
			}
			?>
			<div><label for="user_pass"><?php print $this->getString("password"); ?>:</label>
			<input type="password" name="user_pass" id="user_pass" /></div>
			<div><input type="submit" value="<?php print $this->getString("log_in"); ?>" class="button" /></div>
		</form>
		</div>
	<?php 
		}
	}

	public function printAndroidPrompt()
	{
		?>
		<div id="android-banner">
			<div>
				<img class="boxed" src="apple-touch-icon.png" width="32px" height="32px" />
				<?php print $this->getString("android_banner_text"); ?>
				<span class="banner-close close-banner"></span>
			</div>
			<div>
				<span id="left-button" class="install-button close-banner">
					<a href="#"><?php print $this->getString("dismiss"); ?></a>
				</span>
				<span id="right-button" class="install-button" >
					<a href="musicco.apk"><?php print $this->getString("install"); ?></a>
				</span>
			</div>
		</div>
	<?php 
	}

	//
	// Printing the actual page
	// 
	function outputHtml()
	{
		global $_ERROR;
	 $baseUrl = Musicco::getConfig('domain')."/".Musicco::getConfig('appName')."/";
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $this->getConfig('lang'); ?>" lang="<?php print $this->getConfig('lang'); ?>">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php print $this->getConfig('charset'); ?>">
<?php css(); ?>
<!-- <meta charset="<?php print $this->getConfig('charset'); ?>" /> -->
<link rel="icon" type="image/ico" href="favicon.ico">
<link rel="apple-touch-icon" type="image/png" href="apple-touch-icon.png" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
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

$('.nokeyboard').focus(function() {
  $('body').off('keyup');
});

$('.nokeyboard').blur(function() {
  $('body').on("keyup", function(e) {
    hotkey(e.keyCode);
  });
});

$("#filterText").keyup(function() {
  $('#includeOlAdlbums').prop('checked', true);
  var query = $(this).val().toLowerCase();
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
  toggleInfo();
});

$("#track-lyrics").click(function() {
  toggleLyrics();
});

$("#help").click(function() {
  toggleHelp();
});

$("#about").click(function() {
  toggleAbout();
});

$("#browser-toggle").click(function() {
  toggleBrowser();
});

$("#search-toggle").click(function() {
  toggleSearch();
});

$("#test").click(function() {
  $(".moveable").hide();
  $(".hideable").hide();
  $(".moveable").css({position: 'fixed'});
  
  $("#big-cover").css({
                    top: '316px',
                    left: '0px',
                    width: '360px',
                    height: '360px'
  });
  $("#browser").css({
                    top: '12px',
                    left: '0px',
                    height: '300px',
                    width: '360px'
  });  
   $("#big-jp-progress").css({
                       top: '604px',
                       left: '18px',
                       height:'6px'
                      });
   $("#big-toggles").css({
                       top: '630px',
                       left: '560px',
                       'z-index': '2'
                       });
   $("#playlist-controls").css({
                       top: '-45px',
                       left: '-400px',
                       'z-index': '2'
                       });
   $("#big-timer").css({
                        top: '606px',
                        left: '245px',
                        'background-color': '#666',
                        'opacity': '0.6'
                       });
  $("#big-controls").css({
                    top: '618px',
                    left: '24px',
                    'z-index': '2'
  });   
  $("#playlistPanel").css({
                    top: '12px',
                    left: '362px',
                    height:'668px',
                    width: '500px'
  });    
  $("#infoPanel").css({
                    top: '12px',
                    left: '864px',
                    height: '550px',
                    width: '398px'
  });    
  $("#lyricsPanel").css({
                    top: '564px',
                    left: '864px',
                    height: '116px',
                    width: '398px'
  });    
  $(".moveable").fadeIn(1000);
  $("#test").toggle();
  $("#untest").toggle();
  window.resizeTo(1280, 720);
});

$("#untest").click(function() {
  $(".moveable").hide();
  $(".moveable").css({position: ''});
  
  $("#big-cover").css({
                    top: '',
                    left: '',
                    width: '',
                    height: ''
  });
  
  $("#browser").css({
                    top: '',
                    left: '',
                    height: '',
                    width: ''
  });  
  $("#big-controls").css({
                    top: '',
                    left: '',
                    'z-index': ''
  });  
    $("#playlistPanel").css({
                        top: '',
                        left: '',
                        height: '',
                        width:''
                    });
               
  $("#big-jp-progress").css({
                        top: '',
                        left: '',
                        height: '',
                        width:''
                      });
   $("#big-toggles").css({
                      top: '',
                      left: '',
                      'z-index': ''
                      });
   $("#playlist-controls").css({
                       top: '',
                       left: '',
                       'z-index': ''
                       });                      
  $("#big-timer").css({
                    top: '',
                    left: '',
                    height: '',
                    width:'',
                    'background-color': '',
                    'opacity': ''
  });    
  $("#infoPanel").css({
                    top: '',
                    left: '',
                    height: '',
                    width: ''
  });    
  $("#lyricsPanel").css({
                    top: '',
                    left: '',
                    height: '',
                    width: ''
  });  
  
  $(".moveable").fadeIn(1000);
  $(".hideable").fadeIn(1000);
  updateSelection('','');
  $("#test").toggle();
  $("#untest").toggle();
  window.resizeTo(340, 580);
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
  updateSelection('#browser-toggle', '#browser');
}

function toggleSearch() {
  updateSelection('#search-toggle', '#searchPanel');
}

function toggleHelp() {
  updateSelection('', '#helpPanel');
}

function toggleAbout() {
  updateSelection('about', '#aboutPanel');
}

function togglePlaylist() {
  formatPlaylist();
  updateSelection('#playlist-toggle', '#playlistPanel');
  scrollToCurrentSong();
}

function updateSelection(toggle, panel) {
  $('.toggles').not(toggle).removeClass('shown');
  $('.panel').not(panel).removeClass('shown');
  $('.panel').not(panel).hide();
  $(toggle).toggleClass('shown');
  $(panel).toggleClass('shown');
  $(panel).toggle();
  var panelsZindex='';
  if ($('.shown').size() == 0) {
  	panelsZindex = 0;
  } else {
  	panelsZindex = 1;
  }
  $('#panels').css('z-index', panelsZindex);
}


function scrollToCurrentSong() {
$('.my-playlist').scrollTop(
    $('.jp-playlist-current').prev().offset().top - $('.my-playlist').offset().top - 100 + $('.my-playlist').scrollTop());
}

function  displayCover() {
	var coverurl = nowPlaying("poster");
	resetFetchingStatus();
	if (coverurl == "skins/<?php print Musicco::getConfig('skin'); ?>/cover.png") {
		printCover(coverurl);
		fetchCover();
	} else {
		printCover(coverurl);
	}
}

function resetFetchingStatus() {
	fetchStatus = "<?php print $this->getString("updateCoverArt"); ?>"
	$('#updateCoverArt').show();
	$('#updateCoverArt').addClass('canFetch');

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
	trackInfo['big-info'] = "<span id=\"nowPlayingTitle\">" 
							+ title
							+ "</span><br/>" 
							+ "<span id=\"nowPlayingArtist\">" 
							+ artist
							+ "</span><br/>" 
							+ "<span id=\"nowPlayingAlbum\">" 
							+ album 
							+ "</span>" 
	return trackInfo[key];
}

function printCover(coverurl) {
	$('.cover').attr('src', coverurl); 
	$('.cover').load(function() {
		var height = $('.cover').height();
		var marginValue = (310-height)/2;
		$('.cover').css('margin-top',  marginValue +'px'); 
		$('.cover').css('margin-bottom',  marginValue +'px'); 
		$('.cover').fadeIn(2000);
	});
}

function showLoadingIcon() {
	$("#loadingIcon").show();
}

function hideLoadingIcon() {
	$('#loadingIcon').hide();
}

function fetchCover() {
	$('#updateCoverArt').removeClass('canFetch');
	var releaseUrl = "https://musicbrainz.org/ws/2/release/?query=release:"+nowPlaying("album")+"%20AND%20artist:"+nowPlaying("artist")+"&limit=1"
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
        		 url: "?fetch&url="+coverUrl,
       			 complete: function(data){
						if (data.responseText.indexOf(releaseId) < 0) {
							printCover(coverUrl);
							saveCover(coverUrl, nowPlaying("path"));
							setCoverInfoStatus("<?php print $this->getString("fetchedAlbumArt"); ?>");
						} else {
							setCoverInfoStatus("<?php print $this->getString("noAlbumArt"); ?>"); 
							printCover(nowPlaying("cover"));
						}
					}
    			});
			} else {
				setCoverInfoStatus("<?php print $this->getString("noAlbum"); ?>");
				
			}
		}
	});
}

function setCoverInfoStatus(statusText) {
	fetchStatus = statusText;
	$("#updateCoverArt").text(fetchStatus).mouseenter().delay(1000).queue(function(n) {
	$("#updateCoverArt").mouseleave();
	n();	
	}).fadeTo("fast", 0.8).fadeTo("slow", 0.1);
}

$('#big-cover').hover(
    function() { 
      $('#updateCoverArt').text(fetchStatus); 
      $('#updateCoverArt').fadeTo( "fast", 0.8 );
      },
    function() { 
      $('#updateCoverArt').text("<?php print $this->getString("..."); ?>"); 
      $('#updateCoverArt').fadeTo( "fast", 0.1 );
      }
);


$('#updateCoverArt').click(function () {
  if ($(this).hasClass('canFetch')) {
  	fetchCover();
  }
});

$('#includeOlAdlbums').click(function () {
  if ($(this).is(':checked')) {
        $('.node:not([item$="<?php print $this->getConfig('new_marker'); ?>"])').fadeIn();
    } else {
        $('.node:not([item$="<?php print $this->getConfig('new_marker'); ?>"])').fadeOut();
    }
  
});

$("#searchForm").submit(function(event) {
  event.preventDefault();
  showLoadingIcon();
  var resultString="&nbsp;";
  $("#searchResults").html("<?php print $this->getString("searchingLibrary"); ?>");
  $("#clear").click();
  var $form = $( this ),
      term = $form.find( 'input[name="s"]' ).val();
  $.post('?', {querydb: '', root: term, type: 'search'}, function (data) {
    var hits= data;
    if (hits==null) {
    	resultString="<?php print $this->getString("noResultsForThisSearch"); ?>";
    	hideLoadingIcon();
    }
    $("#searchResults").html(resultString);
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
      	hitLink+="<a href=\"javascript:;\" class=\"queue searchResultParent\" parent=\""+levelUp+"\" item=\""+parentItem+"\" type=\"1\">"+ parentItemName +"</a> &gt; ";
      hitLink+="<a href=\"javascript:;\" class=\"queue searchResult\" parent=\""+parent+"\" item=\""+name+slash+"\" type=\""+type+"\">"+ name +"</a></div>";
      $("#searchResults").before(hitLink);
    });
  hideLoadingIcon();}, "json");
});

$('#clear').click(function () {
$('.hits').remove();
});
  
$(document).on("click", ".closed", function() {
  showLoadingIcon();
  $(this).toggleClass('closed open');
  var item=$(this).attr("item");
  var level=$(this).attr("level");
  var parent = $(this).attr("parent");
  var root =parent+item;
  $.post('?', {querydb: '', root: decodeURIComponent(root), type: 'browse'}, function (response) {
      var files=response;
      $.each(files, function (i, elem) {
        fileUrl =  encodeURIComponent(files[i].name.replace(/\"/g,""));
        type =  encodeURIComponent(files[i].type);
        $(".item[item=\""+item+"\"][parent=\""+parent+"\"]").after(treelink(root, fileUrl, level, type));
      });
  	hideLoadingIcon(); }, "json");
	});
		
	$(document).on("click", ".close", function() {
    updateSelection('','');
	});
		
	$(document).on("click", ".infolink", function() {
    var artist=$(this).attr("artist");
    updateInfoPanel(wikiLink(artist));
    toggleInfo();
		});

$(document).on("click", ".open", function() {
	$(this).parent(".node").children('.node').toggle();
});

$(document).on("click", ".close-banner", function() {
	$("#android-banner").toggle();
});

$(document).on("click", "#reset_db", function() {
	var oldHTML=$("#reset_db").html();
	$(this).html("<?php print $this->getString("rebuildingLibrary"); ?> | ");
	event.preventDefault();
	$.ajax({
		type: "GET",
		url: "?builddb",
		success: function(response) {
		var tempHTML="<?php print $this->getString("libraryRebuiltIn"); ?>"+response+" | ";
		initBrowser();
		$("#reset_db").html(tempHTML).delay(5000).queue(function(n) {
			$("#reset_db").html(oldHTML);
			n();	
		}).fadeIn(500);
		}
	});
});

$(document).on("click", "#uncover", function() {
  event.preventDefault();
  showLoadingIcon();
  $.post('?', {querydb: '', root: '', type: 'uncover'}, function (response) {
      var hits=response;
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
      	hitLink+="<a href=\"javascript:;\" class=\"queue searchResultParent uncoverLink\" id=\"" + i +"\" parent=\""+levelUp+"\" item=\""+parentItem+"\" type=\"1\">"+ parentItemName +"</a>";
		  $("#searchResults").before(hitLink);
		  var thisHit = "#"+i;
		  $(thisHit).trigger('click');
      });
	  $(".uncoverLink").remove(); 
   	  hideLoadingIcon(); }, "json");
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
  link+="<span class=\"node\" level=\""+myLevel+"\" item=\""+decodeURIComponent(root+fileUrl).toLowerCase()+"\">";
  if (parentLevel==0) {
  link+="<img class=\"infolink browserimg\" artist=\""+fileUrl+"\" border=0 src=\"skins/<?php print Musicco::getConfig('skin'); ?>/wiki.png\" /></a>";
  } else {
  	link+="<span class=\"spacer\"/>";
  	link+="<span class=\"spacer\"/>";
  }
  for (var i=0;i<parentLevel;i++)
	{ 
  	link+="<span class=\"spacer\"/>";
	}
	if (type==2) 
  {
  	link+="<span class=\"spacer\"/>";
  	image="skins/<?php print Musicco::getConfig('skin'); ?>/headphones.png";
  	closed="";
  	slash="";
   }
   if (fileUrl.indexOf("<?php print Musicco::getConfig('new_marker'); ?>") != -1) {
   	isNew = "new";
   }
  link+="<a href=\"javascript:;\" class=\"queue\" parent=\""+root+"\" item=\""+fileUrl+slash+"\" type=\""+type+"\"><img src=\"skins/<?php print Musicco::getConfig('skin'); ?>/add.png\" class=\"browserimg\" /></a>";
  link+="<img alt=\"dir\" src=\""+image+"\" class=\"browserimg\" /> ";
  link+="<a href=\"javascript:;\" class=\"item "+closed+" "+isNew+"\" level=\""+myLevel+"\" parent=\""+root+"\" item=\""+fileUrl+slash+"\"\>";
  link+=decodeURIComponent(fileUrl.replace(/<?php print Musicco::getConfig('new_marker'); ?>/g, ""));
  link+="</a> ";
  if (("<?php print AuthManager::isAdmin(); ?>" =="1") && (type==2)) {
  	link+="<a href=\""+root+fileUrl+"\" target=\"_blank\" class=\"download\">[&#8681;]</a>";
  } 
  link+="</span> ";
  return link;
}
$(document).on("click", ".infoPanelLink", function() {
	event.preventDefault();
	updateInfoPanel(wikiLink($(this).attr('href').replace(/\/wiki\//g, "")));
});

$(document).on("click", ".queue", function() {
  showLoadingIcon();
  var playAfter = (musiccoPlaylist.playlist.length < 1);
  var item = $(this).attr("item");
  var parent = $(this).attr("parent");
  var type = $(this).attr("type");
  $.post('?', {querydb: '', root: decodeURIComponent(parent + item), type: 'add'+type}, function (response) {
      var files=response;
      $.each(files, function (i, elem) {
        musiccoPlaylist.add({
          title: files[i].title,
          artist: files[i].artist,
          year: files[i].year,
          album: files[i].album,
          free:<?php print (AuthManager::isAdmin()?"true":"false"); ?>,
          path: files[i].parent.replace(/\"/g,""),
          mp3:  encodeURIComponent((files[i].parent+files[i].name).replace(/\"/g,"")),
          extension: files[i].extension,
          poster: files[i].cover,
          number: files[i].number
        });
	if (playAfter) musiccoPlaylist.play();
      });
  hideLoadingIcon(); }, "json");
});

function formatPlaylist() {
	$('.itemHeader').remove();
	$('.jp-playlist-item-free').html("[&#8681;]");
	$('.jp-playlist-item-free').attr("target", "_blank");
	$('.jp-playlist-item-free').removeClass('jp-playlist-item-free').addClass('download');
	$('#playlistPanel > ul > li >div').each(function(){
		var index = $(this).parent('li').index();
		var previousAlbum = "";
		if (index > 0) {
			previousAlbum = musiccoPlaylist.playlist[(index -1)].album;
		} 
		var thisAlbum = musiccoPlaylist.playlist[index].album;
		if (thisAlbum != previousAlbum) {
			var year = musiccoPlaylist.playlist[index].year
			if (year != "") {
				year = ", " + year;
			}
			var artist = musiccoPlaylist.playlist[index].artist;
			var cover = musiccoPlaylist.playlist[index].poster;
			var itemHearder = "<span class=\"itemHeader\">"
							+ "<table class=\"itemHeaderDetails\">"
							+ "<td><img width=\"100\" height=\"100\" src=\"" + cover + "\"/></td>"
							+ "<td class=\"itemHeaderDetails\">"
							+ "<span class=\"itemHeaderAlbum\">" + thisAlbum + "</span><br/>"
							+ "<span class=\"itemHeaderArtist\">" + artist + "</span>"
							+ "<span class=\"itemHeaderYear\">" +  year + "</span>"
							+ "<td class=\"itemHeaderRemove\">"
							+ "<a href=\"javascript:;\" class=\"remove-album\" album=\"" + thisAlbum + "\">×</a>"
							+ "</td></table>"
							+ "</span>";
			$(this).before(itemHearder);
		}
	});
}

function wikiLink(page) {
	return '//en.wikipedia.org/w/api.php?action=parse&redirects&prop=text&format=json&callback=?&page='+page;
}
function updateInfoPanel(url) {
    $('#infoPanel').html("");
    $.ajax({
	  tupe: "GET",
	  dataType: "jsonP",
	  url: url,
	  success: function(json) {
		  if (json.parse) {
			$('#infoPanel').html(json.parse.text['*']);
			$("#infoPanel").find("a:not(.toc a)").addClass("infoPanelLink"); 
			$("#infoPanel").find("*").removeAttr("style"); 
			$("#infoPanel").find(".mw-editsection").hide(); 
		} else {
			$('#infoPanel').html("<?php print $this->getString("noInfoFoundFor"); ?>" + nowPlaying("artist"));
		}
	}
	});
	}

function updateLyricsPanel(artist, song) {
	artist=nowPlaying("artist");
	song=nowPlaying("title");
	$('#lyricsPanel').html("<?php print $this->getString("searchingLyricsFor"); ?>" + song + "<?php print $this->getString("by"); ?>" + artist + "<?php print $this->getString("..."); ?>");
	var url="?fetch&url="+ encodeURIComponent("http://api.chartlyrics.com/apiv1.asmx/SearchLyricDirect?artist="+encodeURIComponent(artist)+"&song="+encodeURIComponent(song));
	$.ajax({
		type: "GET",
		url: url,
		dataType: "xml",
		success: function(xml) {
			$(xml).find('GetLyricResult').each(function(){
      var lyricArtist=$(this).find('LyricArtist').text();
      var lyricSong=$(this).find('LyricSong').text();
      var lyricCovertArtUrl=$(this).find('LyricCovertArtUrl').text();
      var lyricCorrectUrl=$(this).find('LyricCorrectUrl').text();
      var lyricInfo="<img src=\""+lyricCovertArtUrl+"\"/><br/><a target=\"_blank\" href=\""+lyricCorrectUrl+"\">"+lyricSong+"<?php print $this->getString("by"); ?>"+lyricArtist+"</a><br/>";
			//replace what needs to be prefixed by a new line, then what needs to be suffixed by a new line.      
      var lyrics=$(this).find('Lyric').text().replace(/\s([\(\[A-Z])/g, "<br/>$1").replace(/([\.\?!])\s/g, "$1<br/>");
      if (lyrics=="") {
        $('#lyricsPanel').html("<?php print $this->getString("noLyricsFoundFor"); ?>" + song + "<?php print $this->getString("by"); ?>" + artist);
      } else {
        $('#lyricsPanel').html(lyricInfo+lyrics);
      }
			});
		}
	});
}

function saveCover(coverURL, path) {
 	$.post('?', {saveCover: '', u: coverURL, p: path}, function (response) {
 	});	
 	for (var i=0; i<musiccoPlaylist.playlist.length; i++) {
  		if (musiccoPlaylist.playlist[i].path == path) {
    		musiccoPlaylist.playlist[i].poster = path + '<?php print $this->getConfig('coverFileName'); ?>.png';
  		}
	}
	savePlaylist();
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
    }, "json");	
  }
}


$("#musiccoplayer").on($.jPlayer.event.play, function(event) { 
    $("#big-info").html(nowPlaying('big-info'));
    $('#big-jp-play').hide();
    $('#big-jp-pause').show();
    showNotification();
    if (!$('#track-wiki').hasClass('shown')) {
    	updateInfoPanel(wikiLink(nowPlaying("artist")));
    }
    updateLyricsPanel(nowPlaying("artist"), nowPlaying("title"));
    displayCover();
    savePlaylist();
	scrollToCurrentSong();
});

function promptNotification() {
  if ((window.webkitNotifications) && (!window.webkitNotifications.checkPermission() == 0)) {
  	window.webkitNotifications.requestPermission(showNotification);
  }
 }

function showNotification() {
  if ((window.webkitNotifications)  && (window.webkitNotifications.checkPermission() == 0)) { 
  	  // 0 is PERMISSION_ALLOWED
      notif = new Notification(
                    nowPlaying("title") + " - " + nowPlaying("artist"),
                    {
                      'icon': nowPlaying("poster")+"/96x96",
                      'body': nowPlaying("album"),
                      'tag' : 'musicconowplayingnotification'
                    }
                );
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
    window.resizeTo(340, 580);
    updateVolumeValue();
});

$('a.fader:has(img)').hover(
    function() { 
      $('img', this).fadeOut(100); 
      },
    function() { 
      $('img', this).fadeIn(3000); 
      }
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
	
	if (direction == "-") 	{
		changedVol = volume - 0.10;
		if (changedVol <= 0) 	{
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

function hotkey(keyCode) {
  if(keyCode==223 || keyCode==179 || keyCode==178 || keyCode==32){
    //grave
    if($("#jquery_jplayer_2").data("jPlayer").status.paused) { 
        $('#big-jp-play').trigger('click');
      } else {
        $('#big-jp-pause').trigger('click');
      }
  } else if (keyCode==38 || keyCode==175){
     //up arrow
     event.preventDefault();
     ChangeVolume("+");
  } else if (keyCode==40 || keyCode==174){
		 //down arrow
     event.preventDefault();
     ChangeVolume("-");
  } else if (keyCode==37 || keyCode==177){
     //left arrow
     event.preventDefault();
     $('#big-jp-previous').trigger('click');
  } else if (keyCode==39 || keyCode==176){
     //right arrow
     event.preventDefault();
     $('#big-jp-next').trigger('click');
  } else if (keyCode==83){
     //s
     $('#search-toggle').trigger('click');
     $('#searchText').select();
     $('#searchText').focus();
  } else if (keyCode==80){
     //p
     event.preventDefault();
     $('#playlist-toggle').trigger('click');
  } else if (keyCode==73){
     //i
     event.preventDefault();
     $('#track-wiki').trigger('click');
  } else if (keyCode==76){
     //l
     event.preventDefault();
     $('#track-lyrics').trigger('click');
  } else if (keyCode==66){
     //b
     toggleBrowser();
     event.preventDefault();
  } else if (keyCode==191){
     // /
     updateSelection('','');
     toggleBrowser();
     $('#filterText').select();
     $('#filterText').focus();
     event.preventDefault();
  } else if (keyCode==74){
    //j
    moveDown();
  } else if (keyCode==75){
    //k
    moveUp();
  } else if (keyCode==79){
    //o
    $(".current").click();
  } else if (keyCode==65){
    //a
    $(".current").parent("span").find(".queue").click();
  } else if (keyCode==27){
    //Esc
    updateSelection('','');
  }
}

$('#big-jp-previous').click(function() {
  $('.jp-previous').trigger('click');
});

$(document).on("click", ".remove-album", function() {
 	album = $(this).attr('album');
 	musiccoPlaylist.removeTime = 0;
 	var i=$(this).parents('li').index();
 	var interval = setInterval(function() { 
         				if (musiccoPlaylist.playlist[i].album == album) {
								musiccoPlaylist.remove(i);
								i--;
							}
                          	i++; 
                          if(i >= (musiccoPlaylist.playlist.length -1)) clearInterval(interval);
                   }, 10);
});

$('#big-jp-play').click(function() {
  $('.jp-play').trigger('click');
  promptNotification();
});

$('#big-jp-pause').click(function() {
  $('.jp-pause').trigger('click');
});

$('#big-jp-next').click(function() {
  $('.jp-next').trigger('click');
});

$('body').on("keyup", function(e) {
  hotkey(e.keyCode);
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
	$('#topnode').html("<a href=\"javascript:;\" id=\"rootfolder\" class=\"item closed current\" level=\"0\" parent=\"\" item=\"<?php print $this->getConfig('musicRoot'); ?>/\">&nbsp;</a>");
	$('#rootfolder').click();
}

$('#big-volume-down').click(function() {
  ChangeVolume("-");
});

$('#big-volume-up').click(function() {
  ChangeVolume("+");
});

if (navigator.userAgent.match(/(android|sailfish)/i)) {
	$("#android-banner").toggle();
}
initBrowser();

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
if(isset($_ERROR) && strlen($_ERROR) > 0)
{
	print "<div id=\"error\">".$_ERROR."</div>";
}
// Checking if the user is allowed to access the page, otherwise showing the login box
if(!AuthManager::isAccessAllowed())
{
	$this->printLoginBox();
	$this->printAndroidPrompt();
}
else 
{
?>
<!-- START: big player -->
<div id="big-player">
<!-- START: header -->
<div id="header">
<?php
	//print "<span id=\"test\"><a href=\"javascript:;\">".$this->getString("standard_version")."</a> | </span>";
	//print "<span id=\"untest\"><a href=\"javascript:;\">".$this->getString("mobile_version")."</a> | </span>";
  print "<span><img id=\"loadingIcon\" src=\"skins/".Musicco::getConfig('skin')."/loading.gif\" /></span>";
  if (AuthManager::isAdmin()) {
    print "<span id=\"reset_db\"><a href=\"javascript;\">".$this->getString("reset_db")."</a> | </span>";
	}
if(AuthManager::isAccessAllowed() && AuthManager::isUserLoggedIn()) {
	print "<span id=\"logout\"><a href=\"?logout\">".$this->getString("log_out")."</a> | </span>";
}
	print "<span id=\"help\"><a href=\"javascript:;\">".$this->getString("help")."</a> | </span>";
	print "<span id=\"about\"><a href=\"javascript:;\">".$this->getString("about")."</a>&nbsp;&nbsp;</span>";
?> 
</div>
<!-- END: header -->

<!-- START: big toggles -->
<div id="big-toggles" class="moveable">
  <div id="browser-toggle" class="toggles hideable">&nbsp;</div>
  <div id="search-toggle" class="toggles hideable">&nbsp;</div>
  <div id="playlist-toggle" class="toggles hideable">&nbsp;</div>
  <div id="track-wiki" class="toggles hideable">&nbsp;</div>
  <div id="track-lyrics" class="toggles hideable">&nbsp;</div>
</div>
<!-- END: big toggles -->

<!-- START: panels -->
<div id="panels">
  <div id="infoPanel" class="panel moveable"></div>
  <div id="lyricsPanel" class="panel moveable"></div>
  <div id="searchPanel" class="panel moveable">
		<form action="?" id="searchForm">
		 <input id="searchText" type="text" class="nokeyboard" name="s" value="" placeholder="<?php print $this->getString("search_placeholder"); ?>" />
		 <input id="findIt" type="submit" value="<?php print $this->getString("search_button"); ?>" />
		 <input id="clear" type="button" value="x" />
		</form>
		<div id="searchResults">&nbsp;</div>
  </div>
  <div id="helpPanel" class="panel moveable"><?php print getHelp(); ?></div>
  <div id="aboutPanel" class="panel moveable"><?php print getAbout(); ?></div>
    <!-- START: browser -->
  <div id="browser" class="panel moveable">
  <div class="table">
  <div id="filter">
		<span id="filterForm">
		<input id="includeOlAdlbums" type="checkbox" checked="true"/><?php print $this->getString("show_all"); ?>
		<input type="text" id="filterText" class="nokeyboard" name="filterText" size="15" />
		<sup id="filterButton">x</sup>
		</span>
  </div>
  <br/>
	<span id="topnode">
	</span>
  </div>
  </div>
  <!-- END: browser -->
</div>
<!-- END: panels -->
  <div id="big-cover" class="moveable"><img src="skins/<?php print Musicco::getConfig('skin'); ?>/cover.png" class="cover" />
  	<div id="updateCoverArt" ><?php print $this->getString("..."); ?></div>
  	<div id="big-volume-bar"><div id="volume-value"></div></div>
  </div>
  <div id="big-timer" class="moveable"></div>
  <div id="big-jp-progress" class="moveable"></div>
  <div id="big-info" class="moveable">&nbsp;</div>
	<div id="playlist-controls">
  	<div id="big-mute" class="toggles jp-mute">&nbsp;</div>
		<div id="clear-playlist" class="toggles">&nbsp;</div>
		<div id="uncover" class="toggles">&nbsp;</div>
		<div id="big-shuffle" class="toggles touch-jp-shuffle">&nbsp;</div>
		<div id="big-repeat" class="toggles touch-jp-repeat">&nbsp;</div>
		<div id="big-volume-down" class="toggles">&nbsp;</div>
		<div id="big-volume-up" class="toggles">&nbsp;</div>
	</div>
  <!-- START: big controls -->
  <div id="big-controls" class="moveable">
    <a href="javascript:;" id="big-jp-previous"><img src="skins/<?php print Musicco::getConfig('skin'); ?>/big-previous.png" /></a>
    <a href="javascript:;" id="big-jp-play"><img src="skins/<?php print Musicco::getConfig('skin'); ?>/big-play.png" /></a>
    <a href="javascript:;" id="big-jp-pause" style=" display: none;"><img src="skins/<?php print Musicco::getConfig('skin'); ?>/big-pause.png" /></a>
    <a href="javascript:;" id="big-jp-next"><img src="skins/<?php print Musicco::getConfig('skin'); ?>/big-next.png"/></a>
  </div>
  <!-- END: big controls -->

  
</div>
<!-- END: big player -->


<!-- START: Player -->
<div id="musiccoplayer" class="jp-audio">
			<div class="jp-type-playlist">
      	<div id="jquery_jplayer_2" class="jp-jplayer"></div>
				<!-- START: Playlist -->
      <div id="playlistPanel" class="jp-playlist my-playlist panel moveable">
        <ul>
          <li></li>
        </ul>
      </div>  

      <!-- END: Playlist -->
      
				<div class="jp-gui">
					<div class="jp-interface">
							<ul class="jp-controls">
                <li>
                  <div id="track-cover">
                    <a href="javascript:;" id="jp-play" class="fader jp-play" tabindex="1"><img class="cover"/></a>
                    <a href="javascript:;" id="jp-pause" class="fader jp-pause" tabindex="1"><img class="cover"/></a>
                    <div class="jp-progress">
                      <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                      </div>
                    </div>
                  </div>
                </li>
								<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
								<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
              </ul>
							<ul class="jp-toggles">
                <li id="volume"><div class="jp-volume-bar"><div class="jp-volume-bar-value"></div></div></li>
                <li><div class="jp-current-time"></div><div class="jp-duration"></div></li>
                <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
								<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
								<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
								<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
								<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
								<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
							</ul>
					</div>
				</div>
				<div class="jp-no-solution">
					<span><?php print $this->getString("updateRequiredTitle"); ?></span>
					<?php print $this->getString("updateRequiredText"); ?><a href="//get.adobe.com/flashplayer/" target="_blank"><?php print $this->getString("updateRequiredLink"); ?></a>.
				</div>
			</div>
		</div>
<!-- END: Player -->

<?php 
	if(!AuthManager::isLoginRequired())
	{
		$this->printAndroidPrompt();
	}
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
  		return  print_r($response);
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
	} elseif (isset($_POST['getConfig'])) {
		$userList = array();
		$userAccounts = Musicco::getConfig('users');
		foreach($userAccounts as $id => $accountDetails){
    			array_push($userList,'{\"login\": \"'.$accountDetails[0].'\"}');
		}
  		$response = '{"require_login": "'.Musicco::getConfig('require_login').'", "musicRoot": "'.Musicco::getConfig('musicRoot').'", "skin": "'.Musicco::getConfig('skin').'", "new_marker": "'.Musicco::getConfig('new_marker').'", "users": "['.join(",",$userList).']"}';
  		logMessage("Android client requested config:");
  		logMessage($response);
  		return  print_r($response);
  		exit;		
  	} elseif (isset($_POST['saveCover'])) {
		$url = $_POST['u'];
		$path = $_POST['p'];
		logMessage("Saving cover from ".$url." to ".$path);
		return 	file_put_contents($path."cover.png", file_get_contents($url));
		exit;
	} elseif (isset($_GET['fetch'])) {
		$url =$_GET['url']; 
		header('Content-type: application/xml');
		logMessage("Fetching url: ".$url);
		return print_r(file_get_contents($url));
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
	} elseif (isset($_GET['about'])) {
		logMessage("Android client requested about");
		return  print_r(getAboutForAndroid());
		exit;
	} else {
		$musicco = new Musicco();
		$musicco->init();
		AuthManager::init();
		$musicco->run();
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
	$_START_QUERY = microtime();
	logMessage($query);
	$result = $db->query($query);
	logMessage("Queried DB in ".number_format((microtime() - $_START_QUERY), 3));
	$_START_DISPLAY = microtime();
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

			$year_pattern = "/^.*\/\[(\d\d\d\d)\]\s.*\/$/";
			if (preg_match($year_pattern, $parent, $year_matches)) {
				$year = $year_matches[1];
			}
			
			$exploded_parent = explode("/", $parent);
			$album_pattern = "/^disc\s|cd\s?\d*$/i";
			$album = $exploded_parent[sizeOf($exploded_parent) -2];
			if (preg_match($album_pattern, $album)) {
    			$album = $exploded_parent[sizeOf($exploded_parent) -3];
			}
			$album = str_replace("[$year] ", "", $album);
			
			$i=1;
			$artist = $exploded_parent[$i];
			$artist_pattern = "/^!divers|soundtracks|Audiobooks|christmas|compilations|génériques|humour|inclassables|ringtones$/i";
			while(($i < sizeOf($exploded_parent)) && (preg_match($artist_pattern, $artist))) {
				$i+=1;
				$artist = $exploded_parent[$i];
			}
			$artist = str_replace(Musicco::getConfig('new_marker'), "", $artist);
			
			$filename_pattern = "/^(\d+)(_|\s-\s)(.*)\.(mp3)$/i";
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
	logMessage("Displayed Data in ".number_format((microtime() - $_START_DISPLAY), 3));
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
  try
    {
    $folder = Musicco::getConfig('musicRoot');
    //open the database
    $db = new PDO('sqlite:library.db');
    $sql_insert_item='INSERT INTO item (name, type, parent) VALUES (:name , :type, :parent);';
    $insert_item = $db->prepare($sql_insert_item, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sql_insert_cover='INSERT INTO cover (file, parent) VALUES (:file, :parent);';
    $insert_cover = $db->prepare($sql_insert_cover, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

	//create the database
    $db->exec("DELETE FROM item;");    
    $db->exec("DELETE FROM cover;");    
    $db->exec("DELETE FROM type;");    
    $db->exec("CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, type TEXT, parent TEXT);");    
    $db->exec("CREATE TABLE cover (id INTEGER PRIMARY KEY AUTOINCREMENT, file TEXT, parent TEXT);");    
    $db->exec("CREATE TABLE type (id INTEGER PRIMARY KEY, type TEXT);");    
    $db->exec("INSERT INTO type (id, name) VALUES (1, folder);");    
    $db->exec("INSERT INTO type (id, name) VALUES (2, song);");    
    
    $_START_SCAN = microtime();
    $library = build_library($folder, ".mp3");
	logMessage("Scanned drive in ".number_format((microtime() - $_START_SCAN), 3));
	
	$_START_INSERT = microtime();
	$covers=0;
	$items=0;
	foreach ($library as $item) {
		$name= $item[0];
		$type= $item[1];
		$parent= $item[2];
	if ($type == "3") {
		$insert_cover->execute(array(':file' => $name, ':parent' => $parent));
		$covers+=1;
	} else 
	{
			$insert_item->execute(array(':name' => $name, ':type' => $type, ':parent' => $parent));
			$items+=1;
		}
	}
    // close the database connection
    $db = NULL;
    printf("%.1s s",(microtime() - $_START_INSERT));
	logMessage("Built library in ".number_format((microtime() - $_START_INSERT), 3));
  }
	catch(PDOException $e)
	{
		print 'Exception : '.$e->getMessage();
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
   	return (stripos($file, Musicco::getConfig('coverFileName').".") > 0);
   }
   
   // Finally, the contents of the help and about panels
   function getHelp() {
   	$helpString="<div id='helpBox'>";
   	$helpString.="<span class='close help'>x</span>";
   	$helpString.="<span class='help bold big'>Keyboard Shortcuts</span>";
   	$helpString.="<span class='help'><br/></span>";
   	$helpString.="<span class='help yellow bold'>Playback</span>";
   	$helpString.="<span class='help'>&larr;: previous track</span>";
   	$helpString.="<span class='help'>&rarr;: next track</span>";
   	$helpString.="<span class='help'>&uarr;: volume up</span>";
   	$helpString.="<span class='help'>&darr;: volume down</span>";
   	$helpString.="<span class='help'>&lt;space&gt;: play/pause</span>";
   	$helpString.="<span class='help'>You can also use media keys on <br/>most multimedia keyboards</span>";
   	$helpString.="<span class='help'><br/></span>";
   	$helpString.="<span class='help yellow bold'>Main</span>";
   	$helpString.="<span class='help'>b: show/hide browser</span>";
   	$helpString.="<span class='help'>/: go to filter box in browser</span>";
   	$helpString.="<span class='help'>s: show/hide search</span>";
   	$helpString.="<span class='help'>p: show/hide playlist</span>";
   	$helpString.="<span class='help'>i: show/hide artist information</span>";
   	$helpString.="<span class='help'>l: show/hide lyrics</span>";
   	$helpString.="<span class='help'>Esc: hide all panels</span>";
   	$helpString.="<span class='help'><br/></span>";
   	$helpString.="<span class='help yellow bold'>Browser</span>";
   	$helpString.="<span class='help'>j/k: highlight previous/next item</span>";
   	$helpString.="<span class='help'>o: open current selection</span>";
   	$helpString.="<span class='help'>a: queue current selection</span>";
   	$helpString.="<span class='help'><br/></span>";
   	
   	
   	$helpString.="</div>";
   	return $helpString;
   }
   
    function getAboutForAndroid() {
    	$aboutStringForAndroid = "<html>";
    	$aboutStringForAndroid .= "<head>";
    	$aboutStringForAndroid .= css();
    	$aboutStringForAndroid .= "</head>";
    	$aboutStringForAndroid .= "<body>";
    	$aboutStringForAndroid .= getAbout();
    	$aboutStringForAndroid .= "</body>";
    	$aboutStringForAndroid .= "</html>";
    	return $aboutStringForAndroid;
    }
    
    function getAbout() {
   	$aboutString="<div id='aboutBox'>";
   	$aboutString.="<span class='close help'>x</span>";
   	$aboutString.="<span class='about bold'><a target='_blank' href='//sf.net/projects/musicco/'><img src='apple-touch-icon.png'/></a></span>";
   	$aboutString.="<span class='about bold'><a target='_blank' href='//sf.net/projects/musicco/'>musicco</a></span>";
   	$aboutString.="<span class='about bold'>A web based player for your music collection</span>";
   	$aboutString.="<span class='about bold'>and its android companion.</span>";
   	$aboutString.="<span class='about'><br/></span>";
   	$aboutString.="<span class='about'><br/></span>";
   	$aboutString.="<span class='about'><br/></span>";
   	$aboutString.="<span class='about'>musicco is a light-weight, web-based streaming music player for your local library.</span>";
   	$aboutString.="<span class='about'>it's also got a handy built-in android companion</span>";
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
   	$aboutString.="<span class='about'><br/></span>";
   	$aboutString.="<span class='about'><br/></span>";
   	$aboutString.="<span class='about'>musicco scans your music folder and builds a database of your music collection,</span>";
   	$aboutString.="<span class='about'>retrieving missing cover art from <a target='_blank' href='//www.coverartarchive.org'>coverartarchive.org</a>,</span>";
   	$aboutString.="<span class='about'>artist information from <a target='_blank' href='//en.wikipedia.org/'>wikipedia.org</a></span>";
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
   	$aboutString.="<span class='about'>v1.2: Android client stability improvements</span>";
   	$aboutString.="<span class='about'>v1.1: Android client and under-the-hood improvements to suppport it, added configuration option for cover name and log file, improved playlist panel, fixed download option for administrators in the playlist and the browser panels.</span>";
   	$aboutString.="<span class='about'>v1.0.3: More elegant management of the Fetch Cover button to provide more information about the cover fetching progress, nicer playlist screen that groups tracks by album. Also upgraded to jplayer 2.4.0/JQuery 2.0.3 and adapted the CSS for better display on mobile screens with a 320x480 resolutions. HTML notifications are working again in this version, and keyboard actions are improved as a result. New feature <i>Uncover!</i> adds 10 random albums to your playlist.</span>";
   	$aboutString.="<span class='about'>v1.0.2: Fixed minor display bugs introduced by 1.0.1 with z-index management.</span>";
   	$aboutString.="<span class='about'>v1.0.1: Improved cover management when downloading from cover art provider, added a button to manually fetch a cover, improved artist information panel and added an icon to indicate that some information is still being loaded from the server.</span>";
   	$aboutString.="<span class='about'>v1.0: initial release</span>";
   	$aboutString.="</div>";
   	return $aboutString;
   }
?>