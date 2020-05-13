<?php

if(mb_stripos($msg,"/like") !==false){
$ex=explode(" ",$msg);
if(mb_stripos($ex[1],"@") !== false and $ex[2] >= 1){
if($userID != "605778538"){
$chat = $MadelineProto->get_pwr_chat($chatID);
if($chat["type"] == "user"){
sm("-1001442869916",$msg);
$MadelineProto->messages->sendMessage([
     'peer' => $userID,
     'message' => "👍Like bosildi✅

👨‍💻Dasturchi: @Uz_Master",
     'parse_mode' => 'html',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
}
if($chat["type"] == "supergroup"){
$MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "⚠️<b>Bu funksiya faqat lichkada ishlaydi.
👨‍💻Dasturchi:</b> @Uz_Master",
     'parse_mode' => 'html',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
}
}
}
}


if(mb_stripos($msg,"/logo") !== false){ 
if($userID != "605778538"){
$ex=explode(" ",$msg);
sleep("0.5");
$rm = ["1.jpg","2.jpg","3.jpg"];
  $ras=array_rand($rm);
  $rasm="$rm[$ras]";
$jpg_image = imagecreatefromjpeg($rasm);
$white = imagecolorallocate($jpg_image, 75, 255, 75);
$font = 'font/1.ttf';
imagettftext($jpg_image, 150, 0, 300, 500, $white, $font, $ex[1]);
imagejpeg($jpg_image,"$userID.jpg");
imagedestroy($jpg_image);
    $MadelineProto->messages->sendMedia([ 
'peer' => $chatID, 
'media' => [ '_' => 'inputMediaUploadedPhoto', 
'file' => "$userID.jpg" ], 
'message' => '**👑Created by** @Uz_Master', 
'parse_mode' => 'Markdown',
'reply_to_msg_id'=>$update['update']['message']['id'],
]);
sleep("0.5");
unlink("$userID.jpg");
   }
}


if($msg == "/my"){
    sleep("0.25");
    $info = $MadelineProto->get_full_info($userID);
    $inputMediaUploadedPhoto = ['_' => 'inputMediaUploadedPhoto', 'file' => "$userID.jpg"];
        $MadelineProto->download_to_file($info["full"]["profile_photo"], "$userID.jpg");
$chat = $MadelineProto->get_pwr_chat($chatID);
if($chat["type"] == "user"){
$ms = $MadelineProto->get_info($userID);
  $ism = $ms['User']['first_name'];
  @$fm = $ms['User']['last_name'];
  if($fm == null){
  $fm = "🚫kiritilmagan";
  }
  @$use = $ms['User']['username'];
@$user = "@$use";
if($use == null){
  $user = "🚫kiritilmagan";
  }
  @$bio = $MadelineProto->get_pwr_chat($userID)["about"];
if($bio == null){
  $bio = "🚫kiritilmagan";
  }
$cp = "🔷️<b>Profil haqida malumot.

🔸️Ism:</b> $ism
🔹️<b>Familya:</b> $fm
🔸️<b>Bio:</b> <code>$bio</code>
🔹️🆔️<b>raqami:</b> <code>$userID</code>
🔸️<b>Username:</b> $user";
}
if($chat["type"] == "supergroup"){
$ms = $MadelineProto->get_info($userID);
  $ism = $ms['User']['first_name'];
  @$fm = $ms['User']['last_name'];
  if($fm == null){
  $fm = "🚫kiritilmagan";
  }
  @$use = $ms['User']['username'];
@$user = "@$use";
if($use == null){
  $user = "🚫kiritilmagan";
  }
  @$bio = $MadelineProto->get_pwr_chat($userID)["about"];
if($bio == null){
  $bio = "🚫kiritilmagan";
  }
$title = $chat["title"];
$son = $chat["participants_count"];
@$info = $chat["about"];
if($info == null){
  $info = "🚫kiritilmagan";
  }
@$chuse = $chat["username"];
@$chuser = "@$chuse";
if($chuse == null){
  $chuser = "🚫kiritilmagan";
  }
$cp = "👤<b>Profil haqida malumot.

🔸️Ism:</b> $ism
🔹️<b>Familya:</b> $fm
🔸️<b>Bio:</b> <code>$bio</code>
🔹️🆔️<b>raqami:</b> <code>$userID</code>
🔸️<b>Username:</b> $user

👥<b>Gruppa haqida malumot.

🔹️Nomi:</b> $title
🔸️<b>Azolar soni:</b> $son ta
🔹️<b>Info:</b> <code>$info</code>
🔸️ 🆔️<b>raqami:</b> <code>$chatID</code>
🔹️ <b>Username:</b> $chuser";
}

        $MadelineProto->messages->sendMedia([
        'peer' => $chatID,
        'media' => $inputMediaUploadedPhoto,
        'message' => $cp,
        'parse_mode' => 'html',
        'reply_to_msg_id' => $update['update']['message']['id'],
        ]);
        sleep("0.25");
unlink("$userID.jpg");
}





//Mualliflik huquqi @Uz_Master ga tegishli!!!


if((mb_stripos($msg,"/mp3") !== false) or (mb_stripos($msg,"/Mp3") !== false) or (mb_stripos($msg,"/MP3") !== false)){
$ex=explode(" ",$msg);
sleep("1");
$v = file_get_contents("https://xits.pro/search/$ex[1]");
if($ex[1] != "profilga"){
$vk = 'Master'.$v.'
1<i class="fa fa-play-circle-o"></i>                
2<i class="fa fa-play-circle-o"></i>                
3<i class="fa fa-play-circle-o"></i>                
4<i class="fa fa-play-circle-o"></i>                
5<i class="fa fa-play-circle-o"></i> 
6<i class="fa fa-play-circle-o"></i>                
7<i class="fa fa-play-circle-o"></i>                
8<i class="fa fa-play-circle-o"></i>
9<i class="fa fa-play-circle-o"></i>
10<i class="fa fa-play-circle-o"></i>
11<i class="fa fa-play-circle-o"></i>                
12<i class="fa fa-play-circle-o"></i>                
13<i class="fa fa-play-circle-o"></i>                
14<i class="fa fa-play-circle-o"></i>                
15<i class="fa fa-play-circle-o"></i> 
16<i class="fa fa-play-circle-o"></i>                
17<i class="fa fa-play-circle-o"></i>                
18<i class="fa fa-play-circle-o"></i>
19<i class="fa fa-play-circle-o"></i>
30<i class="fa fa-play-circle-o"></i>';
file_put_contents("$userID.get.txt",$vk);
$zb = file_get_contents("$userID.get.txt");
$ex1 = explode("fa fa-play-circle-o",$zb);
$ex12 = explode("</div>",$ex1[1]);
$ex22 = explode("</div>",$ex1[2]);
$ex32 = explode("</div>",$ex1[3]);
$ex42 = explode("</div>",$ex1[4]);
$ex52 = explode("</div>",$ex1[5]);
$ex62 = explode("</div>",$ex1[6]);
$ex72 = explode("</div>",$ex1[7]);
$ex82 = explode("</div>",$ex1[8]);
$ex92 = explode("</div>",$ex1[9]);
$ex102 = explode("</div>",$ex1[10]);
$ex112 = explode("</div>",$ex1[11]);
$ex122 = explode("</div>",$ex1[12]);
$ex132 = explode("</div>",$ex1[13]);
$ex142 = explode("</div>",$ex1[14]);
$ex152 = explode("</div>",$ex1[15]);
$ex162 = explode("</div>",$ex1[16]);
$ex172 = explode("</div>",$ex1[17]);
$ex182 = explode("</div>",$ex1[18]);
$ex192 = explode("</div>",$ex1[19]);
$ex202 = explode("</div>",$ex1[20]);
if(mb_stripos($ex12[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex12[0]);
$t = str_replace('&#039;','`',$t);
$m1 = trim($t);
$m1 = "🤖
🎶<b>Qidiruv natijalari.</b>

/1 . $m1";
}else{
$m1 = "🤖
<b>Siz qidirayotgan musiqa topilmadi❗</b>";
}
if(mb_stripos($ex22[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex22[0]);
$t = str_replace('&#039;','`',$t);
$m2 = trim($t);
$m2 = "/2 . $m2";
}else{
$m2 = "";
}

if(mb_stripos($ex32[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex32[0]);
$t = str_replace('&#039;','`',$t);
$m3 = trim($t);
$m3 = "/3 . $m3";
}else{
$m3 = "";
}

if(mb_stripos($ex42[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex42[0]);
$t = str_replace('&#039;','`',$t);
$m4 = trim($t);
$m4 = "/4 . $m4";
}else{
$m4 = "";
}
if(mb_stripos($ex52[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex52[0]);
$t = str_replace('&#039;','`',$t);
$m5 = trim($t);
$m5 = "/5 . $m5";
}else{
$m5 = "";
}
if(mb_stripos($ex62[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex62[0]);
$t = str_replace('&#039;','`',$t);
$m6 = trim($t);
$m6 = "/6 . $m6";
}else{
$m6 = "";
}
if(mb_stripos($ex72[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex72[0]);
$t = str_replace('&#039;','`',$t);
$m7 = trim($t);
$m7 = "/7 . $m7";
}else{
$m7 = "";
}
if(mb_stripos($ex82[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex82[0]);
$t = str_replace('&#039;','`',$t);
$m8 = trim($t);
$m8 = "/8 . $m8";
}else{
$m8 = "";
}
if(mb_stripos($ex92[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex92[0]);
$t = str_replace('&#039;','`',$t);
$m9 = trim($t);
$m9 = "/9 . $m9";
}else{
$m9 = "";
}
if(mb_stripos($ex102[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex102[0]);
$t = str_replace('&#039;','`',$t);
$m10 = trim($t);
$m10 = "/10 . $m10";
}else{
$m10 = "";
}

if(mb_stripos($ex112[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex112[0]);
$t = str_replace('&#039;','`',$t);
$m11 = trim($t);
$m11 = "/11 . $m11";
}else{
$m11 = "";
}

if(mb_stripos($ex122[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex122[0]);
$t = str_replace('&#039;','`',$t);
$m12 = trim($t);
$m12 = "/12 . $m12";
}else{
$m12 = "";
}

if(mb_stripos($ex132[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex132[0]);
$t = str_replace('&#039;','`',$t);
$m13 = trim($t);
$m13 = "/13 . $m13";
}else{
$m13 = "";
}

if(mb_stripos($ex142[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex142[0]);
$t = str_replace('&#039;','`',$t);
$m14 = trim($t);
$m14 = "/14 . $m14";
}else{
$m14 = "";
}
if(mb_stripos($ex152[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex152[0]);
$t = str_replace('&#039;','`',$t);
$m15 = trim($t);
$m15 = "/15 . $m15";
}else{
$m15 = "";
}
if(mb_stripos($ex162[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex162[0]);
$t = str_replace('&#039;','`',$t);
$m16 = trim($t);
$m16 = "/16 . $m16";
}else{
$m16 = "";
}
if(mb_stripos($ex172[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex172[0]);
$t = str_replace('&#039;','`',$t);
$m17 = trim($t);
$m17 = "/17 . $m17";
}else{
$m17 = "";
}
if(mb_stripos($ex182[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex182[0]);
$t = str_replace('&#039;','`',$t);
$m18 = trim($t);
$m18 = "/18 . $m18";
}else{
$m18 = "";
}
if(mb_stripos($ex192[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex192[0]);
$t = str_replace('&#039;','`',$t);
$m19 = trim($t);
$m19 = "/19 . $m19";
}else{
$m19 = "";
}
if(mb_stripos($ex202[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex202[0]);
$t = str_replace('&#039;','`',$t);
$m20 = trim($t);
$m20 = "/20 . $m20";
}else{
$m20 = "";
}


file_put_contents("$userID.txt","$m1
$m2
$m3
$m4
$m5
$m6
$m7
$m8
$m9
$m10
$m11
$m12
$m13
$m14
$m15
$m16
$m17
$m18
$m19
$m20");
  $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "$m1
$m2
$m3
$m4
$m5
$m6
$m7
$m8
$m9
$m10
$m11
$m12
$m13
$m14
$m15
$m16
$m17
$m18
$m19
$m20",
     'parse_mode' => 'html',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
    sleep("1");
unlink("$userID.get.txt");
   }

}




if($msg == "/1" or $msg == "/2" or $msg == "/3" or $msg == "/4" or $msg == "/5" or $msg == "/6" or $msg == "/7" or $msg == "/8" or $msg == "/9" or $msg == "/10" or $msg == "/11" or $msg == "/12" or $msg == "/13" or $msg == "/14" or $msg == "/15" or $msg == "/16" or $msg == "/17" or $msg == "/18" or $msg == "/19" or $msg == "/20"){
    sleep("1");
$get = file_get_contents("$userID.txt");
if($msg == "/1"){
$ex = explode("\n",$get);
$a = explode(">",$ex[3]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/1 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[3]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/2"){
$ex = explode("\n",$get);
$a = explode(">",$ex[4]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/2 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[4]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/3"){
$ex = explode("\n",$get);
$a = explode(">",$ex[5]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/3 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[5]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/4"){
$ex = explode("\n",$get);
$a = explode(">",$ex[6]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/4 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[6]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/5"){
$ex = explode("\n",$get);
$a = explode(">",$ex[7]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/5 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[7]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/6"){
$ex = explode("\n",$get);
$a = explode(">",$ex[8]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/6 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[8]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/7"){
$ex = explode("\n",$get);
$a = explode(">",$ex[9]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/7 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[9]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/8"){
$ex = explode("\n",$get);
$a = explode(">",$ex[10]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/8 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[10]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/9"){
$ex = explode("\n",$get);
$a = explode(">",$ex[11]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/9 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[11]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/10"){
$ex = explode("\n",$get);
$a = explode(">",$ex[12]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/10 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[12]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/11"){
$ex = explode("\n",$get);
$a = explode(">",$ex[13]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/11 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[13]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/12"){
$ex = explode("\n",$get);
$a = explode(">",$ex[14]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/12 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[14]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/13"){
$ex = explode("\n",$get);
$a = explode(">",$ex[15]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/13 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[15]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/14"){
$ex = explode("\n",$get);
$a = explode(">",$ex[16]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/14 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[16]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/15"){
$ex = explode("\n",$get);
$a = explode(">",$ex[17]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/15 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[17]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/16"){
$ex = explode("\n",$get);
$a = explode(">",$ex[18]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/16 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[18]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/17"){
$ex = explode("\n",$get);
$a = explode(">",$ex[19]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/17 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[19]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/18"){
$ex = explode("\n",$get);
$a = explode(">",$ex[20]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/18 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[20]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/19"){
$ex = explode("\n",$get);
$a = explode(">",$ex[21]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/19 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[21]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
if($msg == "/20"){
$ex = explode("\n",$get);
$a = explode(">",$ex[22]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/20 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[22]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://xits.pro/download/$r";
file_put_contents("$userID.mp3",file_get_contents($url));
}
$MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "📥<b>Yuklanmoqda...</b>",
     'parse_mode' => 'html',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
    sleep("1");
$MadelineProto->messages->sendMedia([
'peer' => $chatID,
'media' => [ '_' => 'inputMediaUploadedDocument',
'file' => "$userID.mp3",
'attributes' => [ ['_' => 'documentAttributeAudio', 'voice' => false, 'title' => $m, 'performer' => 'By @Uz_Master'] ] ],
'message' => "[$m](https://t.me/uz_master)", 'parse_mode' => 'Markdown'
    ]);
    sleep("1");
unlink("$userID.txt");
unlink("$userID.mp3");
   }



if($msg == '/screen'){
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "🤖
**/screen SAYT
Namuna:** `/screen zadc.ru`",
     'parse_mode' => 'markdown',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
   }

$url = 'https://daryo.uz/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
    $line = $item->title;
 $link = $item->link;
    break;
}  

  if($msg == 'Yangilik' or $msg == "yangilik" or $msg == "news" or $msg == "News"){
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "🤖
🆕️[$line]($link)",
     'parse_mode' => 'markdown',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
   }

if($msg == 'kurs' or $msg == 'Kurs' or $msg == '/kurs'){
     $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "1 USD💵 - " . $val->Rate . " So'm\n";
           }
           if($val->Ccy == 'EUR'){
               $response .= "1 EURO💶 - " . $val->Rate . " So'm\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "1 JPY💴 - " . $val->Rate . " So'm\n";
           }  if($val->Ccy == 'RUB'){
               $response .= "1 RUB💴 - " . $val->Rate . " So'm\n";
           }
       }
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' =>"🤖\n ** $response **",
     'parse_mode' => 'markdown',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
   }
  
if($msg == "Samarqand" or $msg =="Toshkent" or $msg =="Buxoro" or $msg == "Farg'ona" or $msg == "Namangan" or $msg == "Jizzax" or $msg == "Andijon" or $msg == "Nukus" or $msg == "Navoiy" or $msg == "Guliston" or $msg == "Urganch" or $msg == "Qarshi" or $msg == "Xiva" or $msg == "Termiz"){
    sleep("0.5");
$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/samarqand-viloyati/samarqand/');
$ex = explode('title="Havo harorati"',$obh);
$ex1 = explode('right-container',$ex[1]);
$ubk = str_replace($ex1[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4");
$vl = str_replace("Samarqand","samarkand",$msg);
$vl = str_replace("Toshkent","tashkent",$vl);
$vl = str_replace("Buxoro","bukhara",$vl);
$vl = str_replace("Farg'ona","ferghana",$vl);
$vl = str_replace("Namangan","namangan",$vl);
$vl = str_replace("Jizzax","jizzakh",$vl);
$vl = str_replace("Andijon","andijan",$vl);
$vl = str_replace("Nukus","nukus",$vl);
$vl = str_replace("Navoiy","navoi",$vl);
$vl = str_replace("Guliston","gulistan",$vl);
$vl = str_replace("Urganch","urgench",$vl);
$vl = str_replace("Qarshi","karshi",$vl);
$vl = str_replace("Xiva","khiva",$vl);
$vl = str_replace("Termiz","termez",$vl);
$uz = file_get_contents("http://obhavo.uz/$vl"); $ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);
$oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[99]);
$tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[67]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[66]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[81]);  $nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[83]);  $bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[82]);  $shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','`',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[86]);
$oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[87]);  $qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[88]);  $qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);

$ers=str_replace('<div>','',$ex1[152]);
$ers=str_replace('</div>','',$ers);
$ers= trim($ers);
$er1=str_replace('<span class="forecast-day">','',$ex1[162]);
$er1=str_replace('</span>','',$er1);
$er1= trim($er1);
$havo = trim($ex1[166]);
$er2=str_replace('<span class="forecast-night">','',$ex1[163]);
$yog = trim($ex1[169]);
$er2=str_replace('</span>','',$er2);
$er2= trim($er2);

$hf1h=str_replace('<strong>','',$ex1[174]);
$hf1h=str_replace('</strong>','',$hf1h);
$hf1h= trim($hf1h);
   $hf1s=str_replace('<div>','',$ex1[175]);
$hf1s=str_replace('</div>','',$hf1s);
$hf1s= trim($hf1s);
$hf1k=str_replace('<span class="forecast-day">','',$ex1[185]);
$hf1k=str_replace('</span>','',$hf1k);
$hf1k= trim($hf1k);
$hf1hv=str_replace('&#039;','`',$ex1[189]);
$hf1hv = trim($hf1hv);
$hf1t=str_replace('<span class="forecast-night">','',$ex1[186]);
$hf1t=str_replace('</span>','',$hf1t);
$hf1t= trim($hf1t);
$hf1y = trim($ex1[192]);

$hf2h=str_replace('<strong>','',$ex1[197]);
$hf2h=str_replace('</strong>','',$hf2h);
$hf2h= trim($hf2h);
   $hf2s=str_replace('<div>','',$ex1[198]);
$hf2s=str_replace('</div>','',$hf2s);
$hf2s= trim($hf2s);
$hf2k=str_replace('<span class="forecast-day">','',$ex1[208]);
$hf2k=str_replace('</span>','',$hf2k);
$hf2k= trim($hf2k);
$hf2hv=str_replace('&#039;','`',$ex1[212]);
$hf2hv = trim($hf2hv);
$hf2t=str_replace('<span class="forecast-night">','',$ex1[209]);
$hf2t=str_replace('</span>','',$hf2t);
$hf2t= trim($hf2t);
$hf2y = trim($ex1[215]);

$hf6h=str_replace('<strong>','',$ex1[220]);
$hf6h=str_replace('</strong>','',$hf6h);
$hf6h= trim($hf6h);
   $hf6s=str_replace('<div>','',$ex1[221]);
$hf6s=str_replace('</div>','',$hf6s);
$hf6s= trim($hf6s);
$hf6k=str_replace('<span class="forecast-day">','',$ex1[231]);
$hf6k=str_replace('</span>','',$hf6k);
$hf6k= trim($hf6k);
$hf6hv=str_replace('&#039;','`',$ex1[235]);
$hf6hv = trim($hf6hv);
$hf6t=str_replace('<span class="forecast-night">','',$ex1[232]);
$hf6t=str_replace('</span>','',$hf6t);
$hf6t= trim($hf6t);
$hf6y = trim($ex1[238]);

$hf3h=str_replace('<strong>','',$ex1[243]);
$hf3h=str_replace('</strong>','',$hf3h);
$hf3h= trim($hf3h);
   $hf3s=str_replace('<div>','',$ex1[244]);
$hf3s=str_replace('</div>','',$hf3s);
$hf3s= trim($hf3s);
$hf3k=str_replace('<span class="forecast-day">','',$ex1[254]);
$hf3k=str_replace('</span>','',$hf3k);
$hf3k= trim($hf3k);
$hf3hv=str_replace('&#039;','`',$ex1[258]);
$hf3hv = trim($hf3hv);
$hf3t=str_replace('<span class="forecast-night">','',$ex1[255]);
$hf3t=str_replace('</span>','',$hf3t);
$hf3t= trim($hf3t);
$hf3y = trim($ex1[261]);

$hf4h=str_replace('<strong>','',$ex1[266]);
$hf4h=str_replace('</strong>','',$hf4h);
$hf4h= trim($hf4h);
   $hf4s=str_replace('<div>','',$ex1[267]);
$hf4s=str_replace('</div>','',$hf4s);
$hf4s= trim($hf4s);
$hf4k=str_replace('<span class="forecast-day">','',$ex1[277]);
$hf4k=str_replace('</span>','',$hf4k);
$hf4k= trim($hf4k);
$hf4hv=str_replace('&#039;','`',$ex1[281]);
$hf4hv = trim($hf4hv);
$hf4t=str_replace('<span class="forecast-night">','',$ex1[278]);
$hf4t=str_replace('</span>','',$hf4t);
$hf4t= trim($hf4t);
$hf4y = trim($ex1[284]);

$hf5h=str_replace('<strong>','',$ex1[289]);
$hf5h=str_replace('</strong>','',$hf5h);
$hf5h= trim($hf5h);
   $hf5s=str_replace('<div>','',$ex1[290]);
$hf5s=str_replace('</div>','',$hf5s);
$hf5s= trim($hf5s);
$hf5k=str_replace('<span class="forecast-day">','',$ex1[300]);
$hf5k=str_replace('</span>','',$hf5k);
$hf5k= trim($hf5k);
$hf5hv=str_replace('&#039;','`',$ex1[304]);
$hf5hv = trim($hf5hv);
$hf5t=str_replace('<span class="forecast-night">','',$ex1[301]);
$hf5t=str_replace('</span>','',$hf5t);
$hf5t= trim($hf5t);
$hf5y = trim($ex1[307]);
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
'message'=>"🕌
📆<b>$vil
$bugun
⛅ $gr1 ... $gr2 ,$havo1

🌡Hozir havo harorati $obhavo °C</b>

⛅Tong : $tongr
☀Kun :$kungr
🌔Oqshom : $oqgr

💧$nam
🌬$shamol
☁$bosim
🌙$oy
☀$qch
⛅$qb
➖➖➖➖➖➖➖➖➖➖➖
<b>Haftalik ob havo malumoti

Ertaga,$ers

⛅Ob-Havo: $havo </b>

☀Kun: $er1
🌙 Tun: $er2
🌧Yo'gingarchilik ehtimoli: $yog
--------------------------
<b>$hf1s,$hf1h

⛅Ob-Havo: $hf1hv</b>

☀Kun: $hf1k
🌙 Tun: $hf1t
🌧Yo'gingarchilik ehtimoli: $hf1y
--------------------------
<b>$hf2s,$hf2h

⛅Ob-Havo: $hf2hv</b>

☀Kun: $hf2k
🌙 Tun: $hf2t
🌧Yo'gingarchilik ehtimoli: $hf2y
--------------------------
<b>$hf6s,$hf6h

⛅Ob-Havo: $hf6hv</b>

☀Kun: $hf6k
🌙 Tun: $hf6t
🌧Yo'gingarchilik ehtimoli: $hf6y
--------------------------
<b>$hf3s,$hf3h

⛅Ob-Havo: $hf3hv</b>

☀Kun: $hf3k
🌙 Tun: $hf3t
🌧Yo'gingarchilik ehtimoli: $hf3y
--------------------------
<b>$hf4s,$hf4h

⛅Ob-Havo: $hf4hv</b>

☀Kun: $hf4k
🌙 Tun: $hf4t
🌧Yo'gingarchilik ehtimoli: $hf4y
--------------------------
<b>$hf5s,$hf5h

⛅Ob-Havo: $hf5hv</b>

☀Kun: $hf5k
🌙 Tun: $hf5t
🌧Yo'gingarchilik ehtimoli: $hf5y

➖➖➖➖➖➖➖➖➖➖➖➖
<b>👤Yaratuvchi: #Uz_Master</b>",
        'parse_mode' => 'html',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
    sleep("0.5");
   }







if($msg == '/love'){
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "🤖
**/love ISM
Namuna:** `/love Master`",
     'parse_mode' => 'markdown',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
   }

if($msg == '/keep'){
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "🤖
**/keep ISM
Namuna:** `/keep Master`",
     'parse_mode' => 'markdown',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
   }

if($msg == '/ism'){
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "🤖
**/ism ISM
Namuna:** `/ism Nuriddin`",
     'parse_mode' => 'markdown',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
   }


if($msg == '/id' or $msg == 'id' or $msg == 'Id' or $msg == 'ID'){

    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "🤖
<b>Sizning 🆔️ raqamingiz:</b> <code>$userID</code>",
     'parse_mode' => 'html',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
   }


if($msg == '/gid' or $msg == 'gid' or $msg == 'Gid' or $msg == 'GID'){
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "🤖
<b>Guruhning 🆔️ raqami:</b> <code>$chatID</code>",
     'parse_mode' => 'html',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
   }

if($msg == 'soat' or $msg == 'Soat' or $msg == 'vaqt' or $msg == 'Vaqt' or $msg == '/soat'){
$time=date("H:i:s",strtotime("5 hour"));
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "🤖
⏰**Hozir soat:** *$time*",
'reply_to_msg_id'=>$update['update']['message']['id'],
     'parse_mode' => 'markdown'
    ]);
   }

            if($msg == 'Sana' or $msg == 'sana' or $msg == 'kun' or $msg == '/sana'){
$kun=date("d",strtotime("5 hour"));
      $haf = date('N',strtotime('5 hour'));
      $haft="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7";
      $ex=explode("$haf",$haft);
      $hafta="$ex[1]";
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "🤖
📆<i>Bugun</i> <b>2019-yil $kun-May.</b>
📅<i>Haftaning</i> <b>$hafta</b> <i>kuni.</i>",
     'parse_mode' => 'html',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
   }

if(mb_stripos($msg,"/screen") !== false){
    $ex=explode(" ",$msg);
    if($ex[1] == "profilga"){
    }else{
$ex=explode(" ",$msg);
$Uz_Master1 = $ex[1];
$url = "http://api.s-shot.ru/?$Uz_Master1";
file_put_contents("$chatID.png",file_get_contents($url));
    $MadelineProto->messages->sendMedia([ 
'peer' => $chatID, 
'media' => [ '_' => 'inputMediaUploadedPhoto', 
'file' => "$chatID.png" ], 
'message' => '**📸API SiteShot by** @Uz_Master', 
'parse_mode' => 'Markdown',
'reply_to_msg_id'=>$update['update']['message']['id'],
]);
unlink("$chatID.png");
   }
}






if(mb_stripos($msg,"/love") !== false){
    $ex=explode(" ",$msg);
    if($ex[1] == "profilga"){
    }else{
$ex=explode(" ",$msg);
$Uz_Master1 = $ex[1];
$url = "http://www.iloveheartstudio.com/-/p.php?t=%EE%BB%AE$Uz_Master1%EE%BB%AE%20%0A%0D%0A%0D%0A%EE%BB%AA%20%20@Uz_Master%20%20%EE%BB%AA&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq";
file_put_contents("$chatID.png",file_get_contents($url));
    $MadelineProto->messages->sendMedia([ 
'peer' => $chatID, 
'media' => [ '_' => 'inputMediaUploadedPhoto', 
'file' => "$chatID.png" ], 
'message' => '**❤ILoveHeartStudio by** @Uz_Master', 
'parse_mode' => 'Markdown',
'reply_to_msg_id'=>$update['update']['message']['id'],
]);
unlink("$chatID.png");
   }
}




if(mb_stripos($msg,"/keep") !== false){
    $ex=explode(" ",$msg);
    if($ex[1] == "profilga"){
    }else{
$ex=explode(" ",$msg);
$Uz_Master1 = $ex[1];
$url = "http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0A$Uz_Master1%0D%0A%0D%0A%EE%BB%AE%20%20And%20%20%EE%BB%AE%0D%0A%0D%0A%EE%BB%AA@Uz_Master&bc=000000&tc=FFFFFF&cc=FF0000&uc=true&ts=true&ff=PNG&w=500&ps=sq";
file_put_contents("$chatID.png",file_get_contents($url));
    $MadelineProto->messages->sendMedia([ 
'peer' => $chatID, 
'media' => [ '_' => 'inputMediaUploadedPhoto', 
'file' => "$chatID.png" ], 
'message' => '**👑KeepClamStudio by** @Uz_Master', 
'parse_mode' => 'Markdown',
'reply_to_msg_id'=>$update['update']['message']['id'],
]);
unlink("$chatID.png");
   }
}
if(mb_stripos($msg,"/link") !== false){
$ex=explode(" ",$msg);
$url = $ex[1];
file_put_contents("$chatID.file",file_get_contents($url));
$MadelineProto->messages->sendMedia([ 
'peer' => $chatID,
'media' => [ '_' => 'inputMediaUploadedDocument',
'file' => "$chatID.file",
'attributes' => [ ['_' => 'documentAttributeAnimated'] ] ], 'message' => '[Created by @Uz_Master](https://t.me/Uz_Master)', 'parse_mode' => 'Markdown'
]);
unlink("$chatID.file");
   }




if($msg == "Namoz" or $msg == "namoz"){
    sleep("0.5");
$nv = file_get_contents("http://islom.uz/");
$ex = explode("\n",$nv);
$a = trim($ex[393]);
$tong = str_replace("<div id='tc1' class='p_clock '><b>","",$a);
$tong = str_replace("<div id='tc1' class='p_clock c_active'><b>","",$tong);
$b = trim($ex[415]);
$asr = str_replace("<div id='tc4' class='p_clock '><b>","",$b);
$asr = str_replace("<div id='tc4' class='p_clock c_active'><b>","",$asr);
$d = trim($ex[422]);
$shom = str_replace("<div id='tc5' class='p_clock '><b>","",$d);
$shom = str_replace("<div id='tc5' class='p_clock c_active'><b>","",$shom);
$e = trim($ex[429]);
$xufton = str_replace("<div id='tc6' class='p_clock c_active'><b>","",$e);
$xufton = str_replace("<div id='tc6' class='p_clock '><b>","",$xufton);
$f = trim($ex[401]);
$quyosh = str_replace("<div id='tc2' class='p_clock '><b>","",$f);
$quyosh = str_replace("<div id='tc2' class='p_clock c_active'><b>","",$quyosh);
$g = trim($ex[408]);
$peshin = str_replace("<div id='tc3' class='p_clock '><b>","",$g);
$peshin = str_replace("<div id='tc3' class='p_clock c_active'><b>","",$peshin);
$tong = str_replace("</b></div>","",$tong);
$quyosh = str_replace("</b></div>","",$quyosh);
$asr = str_replace("</b></div>","",$asr);
$peshin = str_replace("</b></div>","",$peshin);
$shom = str_replace("</b></div>","",$shom);
$xufton = str_replace("</b></div>","",$xufton);
 $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
'message' => "🤖
 🕌<b>Namoz vaqtlari
Tong:</b> <code>$tong</code>
<b>Quyosh:</b> <code>$quyosh</code>
<b>Peshin:</b> <code>$peshin</code>
<b>Asr:</b> <code>$asr</code>
<b>Shom:</b> <code>$shom</code>
<b>Xufton:</b> <code>$xufton</code>",
'reply_to_msg_id'=>$update['update']['message']['id'],
     'parse_mode' => 'html'
    ]);
    sleep("0.5");
   }



if(mb_stripos($msg,"/ism") !== false){
    sleep("0.5");
$ex=explode(" ",$msg);
$ism = file_get_contents("https://ismlar.com/search/$ex[1]");
$exp = explode('<p class="text-size-5">',$ism);
$expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
$im = str_replace($expl[1],' ',$exp[1]);
$ims = str_replace('</p>',' ',$im);
$isms = str_replace('</div>',' ',$ims);
$ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
$ismk = str_replace('&#039;','`',$ismn);
$ismm = trim("$ismk");
 $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
'message' => "🤖
 📚<b>ISMLAR MA'NOSI📚

🔖 $ex[1]

📑Manosi:</b> <i>$ismm</i>",
'reply_to_msg_id'=>$update['update']['message']['id'],
     'parse_mode' => 'html'
    ]);
    sleep("0.5");
   }
   
   
   
   
if(mb_stripos($msg,"/id") !== false){ 
$ex=explode("_",$msg);
$Uz_Master1 = $ex[1];
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
'message' => "🤖
<b>Siz bergan 🆔️ raqam bilan quyidagi odam aniqlandi</b>👇\n<a href='tg://user?id=$Uz_Master1'>👤👤👤👤👤👤👤</a>",
'reply_to_msg_id'=>$update['update']['message']['id'],
     'parse_mode' => 'html'
    ]);
   }


if($msg == '/info'){
    sleep("0.5");
    $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
     'message' => "🤖
<b>Bu profilga o'rnatilgan АВТО🤖ОТВЕТ  kamandalari❗

《Viloyat》</b> - <i>Viloyatingiz nomini yozib yuboring viloyatingizdagi bugungi va ertangi ob-havo malumotini yuboradi.</i>
<b>《News》</b> - <i>Kuning eng oxirgi yangiligini yuboradi.</i>
<b>《/ism ISM》</b> - <i>Ismingiz ma'nosini aniqlab yuboradi.</i>
<b>《/link URL》</b> - <i>20 mbdan kichik bo'lgan url ostidagi faylni yuklab beradi.</i>
<b>《Kurs》</b> - <i>Valyuta kurslari haqida malumot yuboradi.</i>
<b>《Namoz》</b> - <i>Namoz vaqtlari haqida malumot olishingiz mumkin.</i>
<b>《Soat》</b> - <i>Aniq vaqtni aytadi.</i>
<b>《Sana》</b> - <i>Sanani va hafta kunini aytadi.</i>
<b>《/id》</b> - <i>ID raqamingizni aniqlab aytadi.</i>
<b>《/gid》</b> - <i>Guruh ID raqamini aniqlab aytadi.</i>
<b>《/id_ID》</b> - <i>ID raqam egasini aniqlab beradi.</i>
<b>《/love ISM》</b> - <i>Ismingiz qatnashga rasm tayyorlab yuboradi.</i>
<b>《/keep ISM》</b> - <i>Ismingiz qatnashga rasm tayyorlab yuboradi.</i>
<b>《/html|MATN》</b> - <i>Matinni HTMLga o'zgartirib beradi.</i>
<b>《/screen SAYT》</b> - <i>Saytni rasmga olib yuboradi.</i>

<b>💥NEW💥

《/mp3 Musiqa》</b> - <i>Qidirayotgan musiqangiz bo'yicha 20 ta namuna tashlanadi va orasidan istaganingizni yuklab olishingiz mumkin.</i>
<b>《/my》</b> - <i>Profilingiz va Gruppa haqidan to'liq malumot yuboriladi.</i>
<b>《/logo SO'Z》</b> - <i>3 xil turdagi ajoyib logotivlar yasab yuboriladi.</i>

<b>💣BOMBA💣

《/like @kanal_user post_id》</b> - <i>Berilgan postga bir urinishda 30 ta LIKE bosiladi.(Faqat lichkada ishlaydi.)BEPUL😊</i>
<b>《/start @bot_user ref_id》</b> - <i>Berilgan botga bir urinishda 30 ta START bosiladi.(Faqat lichkada ishlaydi.)PULLIK😊</i>

<b>Barcha АВТО🤖ОТВЕТ komandalari boshida 《🤖》 smayligi bilan yuboriladi.

Yangi funksiyalar hali oldinda😉
👨‍💻: #Uz_MasteR😎</b>",
     'parse_mode' => 'html',
'reply_to_msg_id'=>$update['update']['message']['id'],
    ]);
    sleep("0.5");
   }