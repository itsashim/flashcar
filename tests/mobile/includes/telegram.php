<?php
include 'config.php';
function send_message($msg){
	global $bot_token;
	global $chat_id;
	file_get_contents('https://api.telegram.org/bot' . $bot_token . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($msg) . '&parse_mode=HTML');
}
function send_image($img){
	global $bot_token;
	global $chat_id;
	$url = 'https://api.telegram.org/bot' . $bot_token . '/sendPhoto?chat_id=' . $chat_id;
	$post_fields = array('chat_id' => $chat_id,
		'photo' => new CURLFile(realpath($img))
	);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type:multipart/form-data"
	));
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
	curl_exec($ch);
}
?>