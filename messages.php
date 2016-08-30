<?php
function MIConsole($nick, $chan, $msg) {
	global $fp, $users;
	if($chan != "#melharucos"){
		switch($chan)
		{
			case "#cwelth":
			{
				echo "(".date('H:i:s').") ЗИГ| <$nick>: $msg\n";
				break;
			}
			case "#mrakovey":
			{
				echo "(".date('H:i:s').") МРАК| <$nick>: $msg\n";
				break;
			}
			case "#babytigeronthesunflower":
			{
				echo "(".date('H:i:s').") ТИГРА| <$nick>: $msg\n";
				break;
			}
			case "#corwinthecat":
			{
				echo "(".date('H:i:s').") КОРВИН| <$nick>: $msg\n";
				break;
			}
			case "#prayda_alpha":
			{
				echo "(".date('H:i:s').") ПРАЙДА| <$nick>: $msg\n";
				break;
			}
			case "#jon_cs":
			{
				echo "(".date('H:i:s').") JON_CS| <$nick>: $msg\n";
				break;
			}
			case "#envy_31":
			{
				echo "(".date('H:i:s').") НАСТЯ| <$nick>: $msg\n";
				break;
			}
			case "#iieerraa":
			{
				echo "(".date('H:i:s').") IIEERRAA| <$nick>: $msg\n";
				break;
			}
			case "#halk89_78rus":
			{
				echo "(".date('H:i:s').") ХАЛК| <$nick>: $msg\n";
				break;
			}
			case "#darthjktu":
			{
				echo "(".date('H:i:s').") DARTHJKTU| <$nick>: $msg\n";
				break;
			}
			case "#daymian_dark":
			{
				echo "(".date('H:i:s').") DAYMIAN_DARK| <$nick>: $msg\n";
				break;
			}
			case "#modbder":
			{
				echo "(".date('H:i:s').") DT| <$nick>: $msg\n";
				break;
			}
			default:
			{
				echo "(".date('H:i:s').") $chan| <$nick>: $msg\n";
			}
		}
	}
}
?>