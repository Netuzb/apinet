<?php

/*
||----------------{Azisaf}------------------||

•Ya : ~ @coderwebuz
•Ka : ~ @sabrgr
•Co : ~ @coderlar1

||----------------{Azisaf}------------------||
*/
ob_start();
$token = '891572923:AAEtbTtYYJEgfip5qI4RbM10B-nmttAlAyg';
define('API_KEY',$token);
// azisaf "https://api.telegram.org/bot".API_KEY."/setwebhook?url=https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
function remove_emoji($string) {
    $regex_emoticons = '/[\x{1F600}-\x{1F64F}]/u';
    $clear_string = preg_replace($regex_emoticons, '', $string);
    $regex_symbols = '/[\x{1F300}-\x{1F5FF}]/u';
    $clear_string = preg_replace($regex_symbols, '', $clear_string);
    $regex_transport = '/[\x{1F680}-\x{1F6FF}]/u';
    $clear_string = preg_replace($regex_transport, '', $clear_string);
    $regex_misc = '/[\x{2600}-\x{26FF}]/u';
    $clear_string = preg_replace($regex_misc, '', $clear_string);
    $regex_dingbats = '/[\x{2700}-\x{27BF}]/u';
    $clear_string = preg_replace($regex_dingbats, '', $clear_string);

    return $clear_string;
}
function get_reply($text){
header("Content-type: application/json; charset=utf-8");
error_reporting(0);
    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL, "sim.s2vn.top/post_sim.php" );
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_STDERR,  fopen('php://stdout', 'w'));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, array(
    'Host: sim.s2vn.top',
    'Origin: https://rebot.me/amer-11',
    'Referer: https://rebot.me/amer-11',
    'X-CSRF-Token: tLOf8wxowHU4kRdMcQ23ULCxVxJqAgk45MC0g2kJ',
    'X-Requested-With: XMLHttpRequest',
    'Cookie: __cfduid=dc2846888750a9c0c7e89d210fc9c51891535508609'
));
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, "lang=ar&hoi=".$text);
    $res = curl_exec ( $ch );
    
    $res = preg_replace("/<img .*|<span .*|<\/.*/", '', $res);
    $res = str_replace("\n", '', $res);
    return json_encode(['reply'=>$res,'text'=>$_GET['text'],'lang'=>$_GET['lang']],JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES );
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
//yaratuvchi @coderwebuz
$text = $message->text;
$ex = $message->text;
$post = $update->channel_post->message;
$admin = 743678193; //uzingizni idingiz
$name = $message->from->first_name;
$users = explode("\n", file_get_contents('sim_u.txt'));
$groups = explode("\n", file_get_contents('sim_g.txt'));
$text = remove_emoji($text);
$reply = json_decode(get_reply($text))->reply;
$reply = str_replace(['azisaf','Boqum'], 'tinchlik',$reply);



if($text =="Soat"){
  date_default_timezone_set('tajikistan/dushanbe');
$time = date('H:i:s');
bot( 'sendMessage' ,[
 'chat_id' =>$chat_id,
 'text' =>"🇹🇯 vatan : Tojikiston  \n" . "💤  Yill : " . date("Y") . "\n" . "Ⓜ️  oy : " . date("n") . "\n" . "🛂  Soat :" . date("j") . "\n" . "⚠️ Tomosha qilingan :" . date( g , $time) . "\n" . "🌀  Havo:" . date( i , $time) . "\n" . " 💯",
 'reply_to_message_id'=>$message->message_id
]);
}

if($message and $message->chat->type == 'private'){
  if(!in_array($chat_id, $users)){
    file_put_contents('sim_u.txt', $chat_id."\n",FILE_APPEND);
    bot('sendMessage',[
      		'chat_id'=>$chat_id,
      		'text'=>'Assalomu Alaykum Yaratuvchi @coderwebuz'
      	]);
  }
  
	$status = bot('getChatMember',['chat_id'=>'@Sabrgr','user_id'=>$id])->result->status;
        if($status == 'left'){
            bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"- Agar bu kanalga obuna bo'lmasangiz bot ishlamaydi 🚫' @sabrgr",
                'reply_to_message_id'=>$message->message_id,
            ]);
      exit();
        }
        if(preg_match('/safargulim[s]/', $text)){
  bot('sendMessage',[
      		'chat_id'=>$chat_id,
      		'text'=>'Mening sevgim',
      		'reply_to_message_id'=>$message->message_id
      	]);
}
      if ($text != '/start') {
      	if(preg_match('/Talk+/i', $reply)){
      	  $reply = 'Baxido Tushinmadim😂';
      	}
      	bot('sendMessage',[
      		'chat_id'=>$chat_id,
      		'text'=>$reply
      	]);
      }
      
} elseif ($message->chat->type == 'supergroup') {
  if(!in_array($chat_id, $groups)){
    file_put_contents('sim_g.txt', $chat_id."\n",FILE_APPEND);
    bot('sendMessage',[
      		'chat_id'=>$chat_id,
      		'text'=>'Salom'
      	]);
  }
  if($message->new_chat_member){
    $a = ['O gruppa paxaniyu','Keldiyiz endi ketsayiz kal bob qoling🤣','keling yangi mehmon','yangi azo'];
    bot('sendMessage',[
      		'chat_id'=>$chat_id,
      		'text'=>$a[array_rand($a,1)],
      		'reply_to_message_id'=>$message->message_id
      	]);
  }
  if($message->sticker){
    $a = ['sticked yuborma kasofat 😒','Bu siz 🤣','Bir muddat yoqol'];
    bot('sendMessage',[
      		'chat_id'=>$chat_id,
      		'text'=>$a[array_rand($a,1)],
      		'reply_to_message_id'=>$message->message_id
      	]);
  }
	if ($message->reply_to_message->from->id == bot('getme')->result->id) {
		$status = bot('getChatMember',['chat_id'=>'@sabrgr','user_id'=>$id])->result->status;
        if($status == 'left'){
            bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"- Agar siz kanalga obuna bolmasangiz bot nixuya ishlamaydi 🚫' @sabrgr",
                'reply_to_message_id'=>$message->message_id,
            ]);
      exit();
        }
        if(preg_match('/safargulim[s]/', $text)){
  bot('sendMessage',[
      		'chat_id'=>$chat_id,
      		'text'=>'Mening sevgim',
      		'reply_to_message_id'=>$message->message_id
      	]);
}
		if(preg_match('/Talk+/i', $reply)){
      	  $reply = 'Baxido Tushinmadim 😂';
      	}
      	bot('sendMessage',[
      		'chat_id'=>$chat_id,
      		'text'=>'['.$reply.']'/*(https://t.me/sabrfanclub)'*/,
      		'parse_mode'=>'markdown',
      		'disable_web_page_preview'=>true,
      		'reply_to_message_id'=>$message->message_id
      	]);
	}
}
if($text == '/start'){
    bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"- Assalomu alaykum
Hurmatli bot azolari ushbu bot gruppada xoxlagan odam bilan xoxlagan tilda suhbat qura oladi
gurpangizga qoshing botni qolganini oziyiz korasiz
- @sabrgr 
—-—-—-—",
			'reply_markup'=>json_encode([
				'inline_keyboard'=>[
					[['text'=>'- kanalimiz ، 🗣','url'=>'https://t.me/sabrgr']],
					]
				])
    	]);
} 
