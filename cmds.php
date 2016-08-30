<?php
$curCH = "#corwinthecat";
function message_processing($chan, $text){
	global $fp;
	fwrite($fp, "PRIVMSG $chan :$text\r\n");
	echo "(".date("H:i:s").") $chan| CorwinBOT: $text.\n";
}
function iCMD_pattern($cmd){
	return "/.*!$cmd.*/mi";
}
function inc_message($nick, $chan, $msg) {
	if($chan != "#melharucos" && $chan != "#monstercat" && $chan != "#nygraff"){
		echo "(".date("H:i:s").") $chan| <$nick>: $msg\n";
		if (preg_match(iCMD_pattern("мурьк"), $msg)) {
			sleep(1);
			switch(random_int (0, 4))
			{
				case "0":
				{
					message_processing($chan, "Мурьк тебе, @$nick!");
					break;
				}
				case "1":
				{
					message_processing($chan, "Мурлык, @$nick!");
					break;
				}
				case "2":
				{
					message_processing($chan, "Отдельное тебе мурьк, @$nick!");
					break;
				}
				case "3":
				{
					message_processing($chan, "Мурр-мяу, @$nick!");
					break;
				}
				case "4":
				{
					message_processing($chan, "Миау, @$nick!");
					break;
				}
			}
		}
		elseif (preg_match(iCMD_pattern("disable"), $msg)) {
			if($nick == "corwinthecat" && $chan == "#corwinthecat"){
				sleep(0.5);
				message_processing($chan, "!killbot");
				sleep(1.5);
				message_processing($chan, "/clear");
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("prayda"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(1);
				global $curCH;
				$curCH = "#prayda_alpha";
				message_processing($curCH, "/me включил ботика на канале Прайды");
				echo "Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("crissnamon"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(1);
				global $curCH;
				$curCH = "#crissnamon";
				message_processing($curCH, "/me включил ботика на канале @crissnamon");
				echo "Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("cwelth"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(16);
				global $curCH;
				$curCH = "#cwelth";
				message_processing($curCH, "/me включил ботика на канале Зига");
				echo "Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("mrakovey"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(1);
				global $curCH;
				$curCH = "#mrakovey";
				message_processing($curCH, "/me включил ботика на канале Мраки");
				echo "Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("тигра"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(0.2);
				global $curCH;
				$curCH = "#babytigeronthesunflower";
				message_processing($curCH, "/me включил ботика на канале Тигры");
				echo "Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("joncs"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(0.2);
				global $curCH;
				$curCH = "#jon_cs";
				message_processing($curCH, "/me включил ботика на канале Джона");
				echo "Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("joncs"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(0.2);
				global $curCH;
				$curCH = "#jon_cs";
				message_processing($curCH, "/me включил ботика на канале Джона");
				echo "Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("настя"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(0.2);
				global $curCH;
				$curCH = "#envy_31";
				message_processing($curCH, "/me включил ботика на канале Насти");
				echo "Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("halk"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(0.2);
				global $curCH;
				$curCH = "#halk89_78rus";
				message_processing($curCH, "/me включил ботика на канале Халка");
				echo "Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("modder"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(0.2);
				global $curCH;
				$curCH = "#modbder";
				message_processing($curCH, "/me включил ботика на канале @MODBDER");
				echo "Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("ddark"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(0.2);
				global $curCH;
				$curCH = "#daymian_dark";
				message_processing($curCH, "/me включил ботика на канале @daymian_dark");
				echo "(".date('H:i:s').") Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("corwin"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(0.2);
				global $curCH;
				$curCH = "#corwinthecat";
				message_processing($curCH, "/me включил ботика на канале Корвина");
				echo "Переключено на канал $curCH\n";
			}else{
				
			}
		}elseif (preg_match(iCMD_pattern("CBdisable"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(0.2);
				message_processing($chan, "/me выключает ботика");
				exit;
			}else{
				message_processing($chan, "Ты не имеешь право выключить меня! Мурьк! Kippa");
			}
		}elseif (preg_match(iCMD_pattern("CBrestart"), $msg)) {
			if($nick == "corwinthecat"){
				sleep(0.2);
				message_processing($chan, "/me перезапускает ботика");
				echo "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";
				echo "ПЕРЕЗАПУСК БОТА ЧЕРЕЗ: ";
				echo "5 ";
				sleep(1);
				echo "4 ";
				sleep(1);
				echo "3 ";
				sleep(1);
				echo "2 ";
				sleep(1);
				echo "1 ";
				sleep(1);
				echo "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";
				system("php bot.php");
				exit;
			}else{
				message_processing($chan, "Ты не имеешь право выключить меня! Мурьк! Kippa");
			}
		}elseif (preg_match(iCMD_pattern("командочки"), $msg)) {
			sleep(0.2);
			message_processing($chan, "Спысок комманд: !мурьк !командочки !пока");
		}elseif (preg_match(iCMD_pattern("CBcmd"), $msg)) {
			sleep(0.2);
			message_processing($chan, "Спысок админских команд: !CBdisable - отключить бота !CBrestart - перезапустить бота");
		}elseif (preg_match(iCMD_pattern("пока"), $msg)){
			sleep(0.2);
			switch(random_int (0, 4))
			{
				case "0":
				{
					message_processing($chan, "Мурлык-пока, @$nick! :(");
					break;
				}
				case "1":
				{
					message_processing($chan, "Пока-пока, @$nick! :(");
					break;
				}
				case "2":
				{
					message_processing($chan, "Удачи, но не забудь вернуться, @$nick!");
					break;
				}
				case "3":
				{
					message_processing($chan, "Goodbye, @$nick!");
					break;
				}
				case "4":
				{
					message_processing($chan, "Может останешься, @$nick?");
					break;
				}
			}
		}
	}
}
?>