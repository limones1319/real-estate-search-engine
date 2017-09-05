<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.0.3
*/error_reporting(6135);$dc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($dc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Cf=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Cf)$$X=$Cf;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1ÊJ=ÓÚŞ1L‚û?Ğs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ğ\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[İsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀŞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>lÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´İ¢gŒnË©¸¹TĞ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdİİ è2cˆê4²k¿Š£\rG•æE6_²ªÊØŞ‰b‹/Œ«HB%ò0ë¢>ÈÈğhoWÃnxlÖ æµƒCQ^€°ĞÔÿßñ\r„Š¾¶4lK{şZÆü:†ĞÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´‘(ëTòŸ%®µJ›0ªlØT¶`+É-Á¾@BÚáÛ„Vá’Ä\0ÂÏC¼,ì¯0tâàŒF‡‰å?Ä Ë\na@ÉŒ>‚âZEC“ôO-æ›¤^Q€&ßÖù)I)®¤ÄÀR„]\r¡”9”7_ˆ¢\rÉF80µObù	€‘î>ºäı\nRı_ˆÑ8æ‚ØÙ«äov0¤bCA¸F!Ñt—–Äƒ%0”/‘zAYO(4«‹¡ˆ¨Ò	'Ÿ] Iéí8hHÂ05˜3ò@x&nˆ’|TÓ³³)`.“s6eY˜D¦z¸Œ®¥ƒJÑ“ô.„ñ{GEb¹Ó‹¡˜‹†2Õ×{\$**ı¾@İC-:zYHZIôà5F]¦²YúùCªOêAÂÚó`x'´.*9t'{ÿ(êšwP¶¾ Ñ=¢*‰†ú*üxwråÔ*c‚Ìc|„DŸ“ÚV—–\r†V.‡0âÆ™V¤dˆ?Ò€üê,EÍ`T¦É6Ûˆ-“Åì¾ÅÚT[Ñªz©‚.Ar±£Í€Pøºnƒc=aÔ9Fònß!ÙuáÎA©Şƒ0iPó¬”îºJ6eäT]VØ[\rXÌáaŸ–vkõ\n+EˆáÜ•*\0¶~¶Æù@g\"ÌNCI\$àÉŒƒ€êx@WÃy¼*vuD‚8÷=ë­ª-v´®4›dÃD’yI‚Ò¤­¼_hŞÀ'z’VÍ¶• Ü6€Yz:íQc³Ú²”õwŒª0ÀÅ]xrÄ!å@¶½/-¡*Ì5©«¤I.±]ĞYxuÁİé½o&Ö:Pß|CyÖ²wÖûÇÀ@L¯´Õ£GfØ†å¯)^¤Æ¢+–ÍQ5‚ºÀÆL4\$Mpo‰0i¦\rÛ»Ïk­ô4*w7•¯S'’—Zİ„nAb¨!1‡)ñoİ–9öc\0bÊïo-~2w4X,,…¶8m'™›˜ìªY•ƒFH–Á3GqQZ-l™\0ãÊwìe‹d5¥¢»ÁğéiÏ.«–™dã)\\çh~\\WÌ€æ™LÃ¡¸ÜĞmgòu«2lbš•àZçCĞ-6Èê–dœl£¨b\re×Mu§gra6ZD†­ƒUÊ™!K-œŸ0Ó9–beH”\"ê×[JË'¨¾»Z¼¡oµaº)‹XÉÆƒ&—tÒ8ºì€GZ.®ÅÚ˜Âë+³lr£ÊíÌ¯]kÙ#£Àj-§¹ëúW´ÉP,¡àè>@ä` \rc3\"\\ÒŠq2‰z›âê@Mï¾poà‘ª0p­ò¤d~OÙ™Ç¦ö…½¸]¡´aï»;IxÆùxh°aÌÍ‡ò¬0Nàâ~gâï?	€äLŒcuÍäw”£}úŠªt™æ<±…¥ÃÅ·¼qS’vÚ°@gsW}òL¸(kyÈ¹/6»CĞ8\rŒ‡°]\\£çLUöŞ^•nqiQÏn™T>A9\"ô´—kFôÕÚú.*îß¹²¹íßT†òóCµ‘r?:ÀÜ„üwMß,î\$m|‘xîm‘øÿ“¡÷©Bmu	®ğ=é[ˆÆ ynÃ'÷½h¾ûÚì@óŞCœv¥S2dSVÑ ¨(‡ñ\">H‰{¾-Gú");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIî(.‹Äq¨àöO)ŒÆÌ¢ã‘”á1™E#)œŠx8\nâ‚ñğ¸\\9ŠDâ¹„®d+¡ÑÎgÁ%(R,‰BqH®' ‘Gâq.›,2„õÁÙö‚AGCyœÏ#L’S±„ä\nŠL†óÖ8n:ŒæS¡G‡:\$“%æö;—Æ)ÒØ™²Qš´G¢sEèÉØÄö­)“Nn¶MN‡S‘¸@t9L¶Û|1›Íæ³LêTi3›…†C	æ’{¾ßù±é¸Êw0±@¤wÓ™œñ®çƒãíÎ«¼Îw{…ÈJ8\\C(÷É¨ÄZ¦j9´a[ÀŞ -òä;!ƒHÌ<ŠÈ`æß…(äš±	+‚á¸ªÂ2\r£K¬9ğ@å Áè`…‹¼èPPä™0L#±#jô±Ã+ ¡EÉ’Ù£pæ9aèØÂ;mø\\8CzèàŠ€^ò¨]\rÃ°ø\\7C8_Dƒp^ÂP é\0Ì± w &c4^RãN9DÓ\\Ü™Ãjü3ÃÂ@Êä\r8a;Mïl7ƒd<3´cpŞĞ“Àæ:)\\;¯C ĞÑ†ïå!6HT¥,4Oã=Ñ†!pdÇTøÌSs;Éc}&&Œ¨ˆÂÅ„Á5cYÊíp‹1`ÓI£èbKPRtªf2Xé»›F Ã-!\rŒ–icYú„WL\\PŞ®#r'b–]^2İØääCÍ1É(4—&ÉôD¥*JÒÄ<†]Ã:¸è/ÀTô:tÜ¿7áèPaH^?ƒ(ÇsÆs¦0»ĞPQƒá0³ç„÷ô?á‘*—\rØb.Å.ğû™…ƒ2ñfO|fÄ<ìk2L¢…07êä®8øÈ!´£c+6fW#~<I+!-ĞQªâ×H÷:â!\"šèÊ2	5“ø’¶M£m±1+èØİ-±fá³‡»„¶8\\£˜·½nûFÔ<¡ŞÚÚ…ŞÊìò¸èÜ\r#ê…aväİƒàö>…2’1ÁN(Èğ<¶²´ô¨XñtÀ‹†§cŠ•Û:•Úù‚¦®«®'‰ò€¡ÊWÚŒê€RE8ÒØ±›p@š…Ü èÎú5ÚÑ¨À·(8/Ñ§b3ö~\"J;é©Ò)^„=‡dŠv²JÀ¤şäÌ'\rí:ÛÃ¶È§[ íÆ˜ÅƒYvåüÜ×ä÷ŸYæà¶’CLĞ(7a„ÀÎŠ	z¤a­³±ÕÖgƒ2\\\rªô“ÂäBÛ%Q œ.ÂHA¡I	\r±-%ß|/„ğÆ…ØjEÃL;¥´·=–¦Üo /L½h”…CÙâ :ĞØeb‰éœÑ³TZZ‰eA£U¤NA@/ö {np•P^ÊÁe+¥p®\"¶\n‡ƒƒ“@èø˜¶|š“iåí%½Óı\r<~oÔ™Èdrd™’{å¡éd&°4§PÒ\$‚ÄŒ7u4šÁ[`…şT¦yjßƒK…cÒÕè‡–“C˜uHvP,¹<äØÒÇ\$\$Œ20ãƒâê'fLÍ©(L_üB}„€@3\0cĞ%„LQŸ˜€æå¤”Àñ²†×++%ph–ÉMÂfôŒê:—ú{˜s>‚Ü¹%jLØ3ƒ ;Ô|ÎêfœEuÅÉÚ–³\0fõ\$r\rHS%Ñ¤™2l™*4µôéó®“Îò?<gšê%£˜+æY:)Q‰=rôém3ä©ëÑ”Fj\r’Ó”:R*HG)0r”)rQ°PÔCP<7ºVÊğÕ,I-€I…°Õƒ1şRm04´à]ZQt­:ˆÑ'ø¦¸U T0½Mã!ÍK‘! È³½AàÛxfÁ°ñP¢C£Ø¢dkÑvÎìçì³TŞ‚§TY;g:\r³’ÁÔÙÑU'Rƒ”ö‚UÒù^k_UóÚŸ):>Átı…ÔYÈ:íğd–1ü‚şŞÕ'!Ñ\0®ÄhE¡¸kB×Fg]2UøoV’)¸µÊænåŞBucÄ•Câ2ö|6ÙìRéŒcT¾JÚNŸHs{îÎÕ)ıl‹Íú%b“‡ÀÂ%¨|uNÕÇÜ\0IÔ£I&Î Şø-¸WÜ¹´ºğl;Ñ\rƒÛcCëğ3ĞGÉBÛŠ«}j®M42cã\\èKÄ—H“ë‚A\rˆ ¦`Ïlw¡ıÑˆaö±M¬DİX)Æt\"tDbå‡Æ¹¸‚Èà‚g¬Î¬zç3ÀæiC0t	a”<«ĞPr•–g8ĞG='Ÿ³{‚ŒëBş±8Öàƒ£pn£ô´˜õ6Hàé~ßd§-ÁI‰4õ©+ÊÑe±YÅ4C¥RÒuË{[Wg•°–R“EƒÙoCÓ±yÑvågœÀL©–•³OĞ:n>M€2Õ™K½[­œÌµ4Iˆe=®h\"‹\$¡‰†¼7´emH7&í™³2(xƒŞ¡oêjeb¢¤V‹\n+WëÛ`æ•‘-\n¾ëºÇ·eí¤ÓÖ“¬^ñì’F’@™¡ä> M	†ŒàÄÃ€;R¦Æ^Áˆgá@÷|ÄJìö”q§\n\nØ4®Xfƒ‚¶N·Ø¼c˜»(uaMÈ¨­vùHs¸aöâó›ÔŞá‹Ë@ 4PÌ:	Ì­y°,r4GI*÷©¾ŠC0+aİ'	ƒÆ	ºJê*ì2‚ÔTZ‹bó^¡¸upÍÇ:4Dš¤Ã‡PˆŸK›Á†÷Ëá!¯›¬—x	ğ±ø€a6L¶ƒ4R	`:¿ü„R\nêd4ï‹§ñşDÆy°È¦»05‡*…g%´D’8w4aÙcóU­Ü·3#ıÙÉòrN³T°oõşÄÑ†&£ùùrn×+´\n+IàF·d`ÑâŒ^&ÜÇv(İàŒqZsLûëêcY®Ì§GàÆ¿[ñÄ4X“}‘Z¼è~®‹M>‰j—y\0z¤	ÌÒàÎ“€Nn\n¦JªÔ‹T†à«Š`ÕBKª„Ï\$ KhŒÂp'@^`Â ô ¸hà`^+\0HÀb-*‡Çm#Nê­X“ïú»Oş©ŠœÓ\n ÓI?\0ğE­JÑpµëbÕğ,FŒŸ„ñ\0Â7°?0G¢³J„rãê-d×z4a‚ÜşÏ@ôPÊ’†i%dÇ\0Pş\$®æà»¢üa,Ö%f\\ÇØïL]¨8(’4ãD fs.–Ğûãê bV ÃÅe6îo¸¯p²oöjÀéDˆ\r4a.NlOOWé\"®\nÖÆ†ÉÏÃù.>jd 0ÀÜ	¨”<Gf,íp³O\rËCëK0Ó1wËRMp{‘xÔğ¥^ñb\r¤Ä¶§§kq	»1‘°À% Oã`+Ñ¬§2-j\"îq.k±:\r\0P³+ØF#à°*>©‹\n(OÊŠ@[ñ6-ƒ2¨ÂRXZ\0í­å\0*GBtòŠWrmR¶1ş\r ì0R\$Ÿmb}GÁ mêÚ‚±\0Ïn°nbu#QLÆr:#D³-¨ ÂÚÆf—cE!±”SBK\$ÌdÇM\$ƒª&C¿\"R7%ª¯oÚg2€Î²:­äd\"PŞ{KÊ7¯Gğğ\"Q*ë…Ú#‡k¯È%ÚĞêù\"½äö¾R¤y£j?eÚÁ‰\r+2H`Ç\0\0é,@ÂÀÈ0ëï‡\$qâ£2ÊLòÈ¾'¦ïMc-ƒÀÔæ@Ğ\nƒøÁ’\\¬3©1S1ÇV{ Â-¯r ğ/*‘’‘`ù³G…{#%02>»Ì1ó4Á\r6¿ó1\"D6ˆ†cÒú.€İ2S	)Hw7â‡ÌvÉm¾âÓs8‹F˜)†ä¬—9¨B0²˜pÒĞ6ÌNÛ‹ŠĞí¹ÒíÌ•DY7.úÑó4\rbÀ3<R¢]\0S-ÌÌÍÔÍ9¬#0\n˜IˆóZğ“_0‚°–¬:‰Ç<ÀNâDñ@ÖR¤\n€Ò#ˆ”zq%8I\r9Ç«0ƒFâ`Y‘*®æÎä¥/+µàÀDÍ‘4@hä13S f)óİ4CSğnÎjÓôSÓH´Z,c¬unh\$E5`Nåïi´’æÆÿC9±H&t®oô~•©tƒìİ5Í\"“âƒ:%ÀÙKT•K‰ı?í TÄÍÌ`a2:à†üä ÊädäÔ¬ÑÎ*!NÚƒ4æ’”ê’”ñDB\r@)\rOËşœS¬Ék‹;s8]eÚÌä>¬ÚÀC<4HôL¹í4<@ä˜§Ş]\0¦.‚ƒ0Õ\"fó¹;#nÛrèîoÄ•¢tn	¼ÙFôšæş»ÍhH0™	À¼îp©¢¹K§FkUl¦IxKƒ\n‰}-ömMü·õš]àÏZ	~—“ó­{YÀÎ	 Â&Õ\r\\Ödõ\\‹\\LÆÖbj\r¯„ ‚qåß/²])àSP®×³ò4lâs–E¥_ZõŸZ-x™û`•³Z2.ÖuÁ\\UÔÕ\0|DÖ15Ó\\©ã\\õ¿[!c	^feH\r€à!Ål=Ré ëdo¯V¸cÅ4Xòv7L'eç*ÕærìhgO@£Jr¯Ùeƒ½f†È–o^§' ğ´E…T>{OËVcş¯¤›ÏàØ:Ïèôöü¬¿Ïô–àzÿÒ©°\0”¥+Q!qŒÔÕó!ééÈ}T6-¶´vV¸ÒBÂhËÑ\rF–ÆÚ»JRşÖ~û4*srè Õ\\`P6‚*^…Pš\rc–;f8³Bj#tRf»%hŠ€èys\n~ã¬;<	—At@Ët‹l tV<X\0‚7Ä\0@Ôk·Lwwj —ow7v b„	¨‚I æóu.\n€ +€u;iüÖ7/s&½zª~ob>q&6,` 	à¦\n”˜à‹|B¯qˆ<6m—[zÖ‡tw¬OÄ6!‚„‰#F€[[E¬ğæ†îÖàğ¤ªàZšà[q‚>8#N‚Øç—Û{(¥~\n~Dæ(@°¸\$Y\0È¯7_B±y‡u—\\˜³±„hjFòîRcÒa/ÆûK'e¥_{&&’].õN=4XBÈer…†GXfxK}ÃÄVWÕr†d¸¸}p÷ºŠhªŠ÷Ğk‹qq†jûx|¦X|T#¶æI¼cb\\nB„xX¶?îS€Ë3*–ÑY¤Z ÷Öû¸œİPûrgjpú¢=)¦§Š€ğÈDúD…ÀnÉ/‡'8¿r€zg\n½„\0šëH“OÖÔµk&¶ÜİÔÍ\"ÌÈÖâ8}NZ,.\0cÀ_X+î€^\r1¤z“òñ‘Bt÷Ø6rÓRLÆUàC•d\" Œ,\0øEå \ràù:	ˆŠÒ\$g•ùbÂ\rŒ|ÎÌç4íõ8Ó‚f6Is+ø ª\n@’‰ ÛŒähz‰ú*))œ9Æ\rùÊZ£À4Û610+‡H»Õ’|ÌDYk\$—¦Û¸Á›`Ô\rä<(@MCİ(®ùì‡’’\0¸Ã4 E¡ã@|ees‘*\0xò£oõqŒLœpš\\­c—®r™œŸ)+@Ğ~«ÿ¤×†ˆÏ@¸à\\P¨+‚ ,drƒ¿‘ĞÅŠx—qsİŠø_‹8é¡…¿£º ˜ÊW8Î<XÕ}792ÌÎ\$³ÌîÚPTÀèç‰}J;	2ç¡Ú¤\\G;lq\0™¾+”:šxğc’è‰”’<égi1àXâü\rÍ¤³SÍGrÍ>WFÓŞF”Ç5Úı(,q@m6s2Á»#@rğìÌF=°ƒk°ø¦\$uFV\nÚL /õÀCÂ©jã\0äã@˜¡S©s(Õ)ñµ¢@ÉğfrqÜgdjFâ.H%1âÆÁs5I–Ï[É Ğûø\\“@ËĞôé`{«n—RtƒE`z@o”•+>ë¼†3,Ø}G¾Ñ`„n`å\r Ø-d“öƒ¶ Üàîá{|!(ˆdXç8Âc\$_V€ó#ÀFn['\$òtÇ3²l~Â1'¿D?[ 1/€&e0ôå7\\E4O7²h€FLõ\0b€XQ*\0àÃ1ö¨»D\0<\$šq(Ò„Ä\nştbÚcµİÇÃÇ½nCF€ê\0`\$OÃ1|ÒÒ0vyg;m§o'ÄcÍáÃËÅ/÷-…¼Ç&ºIDm%Â\nRŠpÏÆO5â\n€Şäd=0¥ÛÅ#=ÏeF€²ÿ\\1`el<æ–SÃ¸;İ\n eÎ„ÎÒåH\$2ıÒ(¤¥eÏæı8(VDQÑã½À2§ÇW“‚Û²{e¶–ç²vöiPØØ€vŠVR\nsøä ‘¬E\0¨.—“ªæSzUì4@e–çüIÊí®Œ*yØ4ùİœ™Í}\\/yÔ\\x±å'‹]ÁÃÇj6`æWºªâ<m½í{n]ÓªıØu|;W£ëÛhˆØ­gnPµŞ¬ñß	xn†õF€ÅmŞ¾ İCàÉÏÌZÒÌÜË›/ßÍÌ‘1Í›Œ¼áhåV\$½B(XXEçª@X©yY8nsÑÜæn—ï”»À˜\rä7‚jQIˆ„C{<®J\$cìİ_¿¼/îİè®Üoèî7çå •­bíÂJñÕß^6Šr6(NÜy™p6İ˜íÚ™ºÚ<³Ã¸cãÍ¤p©ŠM<\"Ø“ÃèÛöã;ûl=Ç†Õ9Í6Ç­ªOoF‘Ö–ıîGê7ÓğÒî r:B™8xä¾®şïC\r²AÙ¯N(ÜénİÇ°›§K…•ŞÊäÎªXì€WÇG9éŞé¿6 €è\$}ói¦¦éuN\rõSDìÉRµP\nšè.×T²ß÷ÿ‚Wn×9N*\$ÜöñBr\r€„˜BÂÛFèÜ±-×\0á×S¢Š}}¬ÆLÂJÔ`=İÇ&@b†áı³2]ı8³VÀô®¤6Ê¤°û°~”°m•ÖS::å×oÜ3XÅ6’O·ÜEI·QÌı‡í×°uüzlC/\0½™%0@ƒÌ¢ûŒLŸ\nÜX3ÕÅ„.ˆĞ+Ã˜Š	jÈ\$ëx[Úg™-B°›·“Õ¾!´&š9 ^”³î\rÚ\0f&]˜°|`…@E:K4_LÆ¼@à†8%C[€V\rû‚PĞÛp==Ì›å‚Á:‚²‚0Í€ë˜Ig°M€ÕÂÁ:\nĞGƒ;	¬Ws’°X‚RaLD`ğÏ5}1©´¹TÌÕÈA¿¹3h2#ú¡ÉF¹?İËi·d»şĞ‚ƒGV AşF­BJÃUø­`@\r?Êšx¨‚f¤VáÙIi%©Ç‘Í8±¥!¿bÊÀÈÚb™Û;…Å”p]‹¢É@D,Â\rSÅBÜ!ƒ5U`Ì“—Ç¡4\r4˜	Â¸c*Ğ¸}±5 €eÕ¨Dª>öÏWÃ%µİ.‡òZÁ%N^ÇC†dşpîNğw !\08	¢\0Ğ~vJvÂ°6\0É¯gŞ?RÔÈB ’¼È åö8„˜—³ò²y±Nzl‚EÔ\0i0…p}	TfÂ‹Ä„Şc6Dy½@y6HÓÚØñ\n—üü«1©	RrŠŸ¤úB÷9‚”¶x–bÌíg¶åçhaôNièZ~½8•©17=`¥™L- <‹P:ÂUYÅa»µ%Vˆ‰€\"V®	Ä­@{Šú¶ ‰7~Ä­IÇ19œSå!ÓÃùÙmI\\cµÆw³Ä:Ìó‹ƒ@J!\0<XP+¡)”`@Ù081qÜÂ½‹(rEÓDEşÑJRˆ¢ß^÷cÆ1zw“‡\"’˜øÊ’¶)¢ÏˆCâ¢…Áò3êHŠc„hk0ŠôñÑ®JK\"ÎVè±Å¨&ªO9”hbp· Ó³}ÚìğvÈôß:th¡ j(±G‘PÂbÈYˆ âc3&˜");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress(compile_file('','minify_js'));}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$b;return$b;}function
idf_unescape($v){$ad=substr($v,-1);return
str_replace($ad.$ad,$ad,substr($v,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($ge,$dc=false){if(get_magic_quotes_gpc()){while(list($z,$X)=each($ge)){foreach($X
as$Rc=>$W){unset($ge[$z][$Rc]);if(is_array($W)){$ge[$z][stripslashes($Rc)]=$W;$ge[]=&$ge[$z][stripslashes($Rc)];}else$ge[$z][stripslashes($Rc)]=($dc?$W:stripslashes($W));}}}}function
bracket_escape($v,$Fa=false){static$rf=array(':'=>':1',']'=>':2','['=>':3');return
strtr($v,($Fa?array_flip($rf):$rf));}function
h($Q){return
htmlspecialchars(str_replace("\0","",$Q),ENT_QUOTES);}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($D,$Y,$Ra,$Xc="",$Fd="",$Ua=""){$K="<input type='checkbox' name='$D' value='".h($Y)."'".($Ra?" checked":"").($Fd?' onclick="'.h($Fd).'"':'').">";return($Xc!=""||$Ua?"<label".($Ua?" class='$Ua'":"").">$K".h($Xc)."</label>":$K);}function
optionlist($Kd,$Fe=null,$If=false){$K="";foreach($Kd
as$Rc=>$W){$Ld=array($Rc=>$W);if(is_array($W)){$K.='<optgroup label="'.h($Rc).'">';$Ld=$W;}foreach($Ld
as$z=>$X)$K.='<option'.($If||is_string($z)?' value="'.h($z).'"':'').(($If||is_string($z)?(string)$z:$X)===$Fe?' selected':'').'>'.h($X);if(is_array($W))$K.='</optgroup>';}return$K;}function
html_select($D,$Kd,$Y="",$Ed=true){if($Ed)return"<select name='".h($D)."'".(is_string($Ed)?' onchange="'.h($Ed).'"':"").">".optionlist($Kd,$Y)."</select>";$K="";foreach($Kd
as$z=>$X)$K.="<label><input type='radio' name='".h($D)."' value='".h($z)."'".($z==$Y?" checked":"").">".h($X)."</label>";return$K;}function
select_input($Ba,$Kd,$Y="",$Xd=""){return($Kd?"<select$Ba><option value=''>$Xd".optionlist($Kd,$Y,true)."</select>":"<input$Ba size='10' value='".h($Y)."' placeholder='$Xd'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($u,$cd,$Pf=false,$Fd=""){echo"<fieldset><legend><a href='#fieldset-$u' onclick=\"".h($Fd)."return !toggle('fieldset-$u');\">$cd</a></legend><div id='fieldset-$u'".($Pf?"":" class='hidden'").">\n";}function
bold($Na,$Ua=""){return($Na?" class='active $Ua'":($Ua?" class='$Ua'":""));}function
odd($K=' class="odd"'){static$t=0;if(!$K)$t=-1;return($t++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($z,$X=null){static$ec=true;if($ec)echo"{";if($z!=""){echo($ec?"":",")."\n\t\"".addcslashes($z,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$ec=false;}else{echo"\n}\n";$ec=true;}}function
ini_bool($Lc){$X=ini_get($Lc);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
q($Q){global$n;return$n->quote($Q);}function
get_vals($I,$e=0){global$h;$K=array();$J=$h->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$e];}return$K;}function
get_key_vals($I,$i=null,$jf=0){global$h;if(!is_object($i))$i=$h;$K=array();$i->timeout=$jf;$J=$i->query($I);$i->timeout=0;if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$i=null,$o="<p class='error'>"){global$h;$db=(is_object($i)?$i:$h);$K=array();$J=$db->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($i)&&$o&&defined("PAGE_HEADER"))echo$o.error()."\n";return$K;}function
unique_array($L,$x){foreach($x
as$w){if(preg_match("~PRIMARY|UNIQUE~",$w["type"])){$K=array();foreach($w["columns"]as$z){if(!isset($L[$z]))continue
2;$K[$z]=$L[$z];}return$K;}}}function
where($Z,$q=array()){global$y;$K=array();$qc='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$Z["where"]as$z=>$X){$z=bracket_escape($z,1);$e=(preg_match($qc,$z)?$z:idf_escape($z));$K[]=$e.(($y=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$y=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($q[$z],q($X)));if($y=="sql"&&preg_match("~[^ -@]~",$X))$K[]="$e = ".q($X)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$z)$K[]=(preg_match($qc,$z)?$z:idf_escape($z))." IS NULL";return
implode(" AND ",$K);}function
where_check($X,$q=array()){parse_str($X,$Qa);remove_slashes(array(&$Qa));return
where($Qa,$q);}function
where_link($t,$e,$Y,$Hd="="){return"&where%5B$t%5D%5Bcol%5D=".urlencode($e)."&where%5B$t%5D%5Bop%5D=".urlencode(($Y!==null?$Hd:"IS NULL"))."&where%5B$t%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$q,$N=array()){$K="";foreach($f
as$z=>$X){if($N&&!in_array(idf_escape($z),$N))continue;$ya=convert_field($q[$z]);if($ya)$K.=", $ya AS ".idf_escape($z);}return$K;}function
cookie($D,$Y,$fd=2592000){global$aa;$G=array($D,(preg_match("~\n~",$Y)?"":$Y),($fd?time()+$fd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$G[]=true;return
call_user_func_array('setcookie',$G);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($z){return$_SESSION[$z][DRIVER][SERVER][$_GET["username"]];}function
set_session($z,$X){$_SESSION[$z][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Lf,$O,$V,$m=null){global$yb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($yb))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($Lf!="server"||$O!=""?urlencode($Lf)."=".urlencode($O)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($gd,$qd=null){if($qd!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($gd!==null?$gd:$_SERVER["REQUEST_URI"]))][]=$qd;}if($gd!==null){if($gd=="")$gd=".";header("Location: $gd");exit;}}function
query_redirect($I,$gd,$qd,$pe=true,$Sb=true,$Xb=false){global$h,$o,$b;$if="";if($Sb){$Qe=microtime(true);$Xb=!$h->query($I);$if="; -- ".format_time($Qe,microtime(true));}$Oe="";if($I)$Oe=$b->messageQuery($I.$if);if($Xb){$o=error().$Oe;return
false;}if($pe)redirect($gd,$qd.$Oe);return
true;}function
queries($I=null){global$h;static$je=array();if($I===null)return
implode("\n",$je);$Qe=microtime(true);$K=$h->query($I);$je[]=(preg_match('~;$~',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I)."; -- ".format_time($Qe,microtime(true));return$K;}function
apply_queries($I,$T,$Ob='table'){foreach($T
as$R){if(!queries("$I ".$Ob($R)))return
false;}return
true;}function
queries_redirect($gd,$qd,$pe){return
query_redirect(queries(),$gd,$qd,$pe,false,!$pe);}function
format_time($Qe,$Jb){return
lang(1,max(0,$Jb-$Qe));}function
remove_from_uri($Rd=""){return
substr(preg_replace("~(?<=[?&])($Rd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$kb){return" ".($F==$kb?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($F+1)."</a>");}function
get_file($z,$nb=false){$ac=$_FILES[$z];if(!$ac)return
null;foreach($ac
as$z=>$X)$ac[$z]=(array)$X;$K='';foreach($ac["error"]as$z=>$o){if($o)return$o;$D=$ac["name"][$z];$pf=$ac["tmp_name"][$z];$fb=file_get_contents($nb&&preg_match('~\\.gz$~',$D)?"compress.zlib://$pf":$pf);if($nb){$Qe=substr($fb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Qe,$qe))$fb=iconv("utf-16","utf-8",$fb);elseif($Qe=="\xEF\xBB\xBF")$fb=substr($fb,3);$K.=$fb."\n\n";}else$K.=$fb;}return$K;}function
upload_error($o){$nd=($o==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($o?lang(2).($nd?" ".lang(3,$nd):""):lang(4));}function
repeat_pattern($Vd,$dd){return
str_repeat("$Vd{0,65535}",$dd/65535)."$Vd{0,".($dd%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$dd=80,$We=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$dd).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$dd).")($)?)",$Q,$B);return
h($B[1]).$We.(isset($B[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($ge,$Fc=array()){while(list($z,$X)=each($ge)){if(is_array($X)){foreach($X
as$Rc=>$W)$ge[$z."[$Rc]"]=$W;}elseif(!in_array($z,$Fc))echo'<input type="hidden" name="'.h($z).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Yb=false){$K=table_status($R,$Yb);return($K?$K:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$jc){foreach($jc["source"]as$X)$K[$X][]=$jc;}return$K;}function
enum_input($U,$Ba,$p,$Y,$Ib=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$C);$K=($Ib!==null?"<label><input type='$U'$Ba value='$Ib'".((is_array($Y)?in_array($Ib,$Y):$Y===0)?" checked":"")."><i>".lang(5)."</i></label>":"");foreach($C[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ra=(is_int($Y)?$Y==$t+1:(is_array($Y)?in_array($t+1,$Y):$Y===$X));$K.=" <label><input type='$U'$Ba value='".($t+1)."'".($Ra?' checked':'').'>'.h($b->editVal($X,$p)).'</label>';}return$K;}function
input($p,$Y,$r){global$h,$yf,$b,$y;$D=h(bracket_escape($p["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$wa=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$wa[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$wa);$r="json";}$ue=($y=="mssql"&&$p["auto_increment"]);if($ue&&!$_POST["save"])$r=null;$rc=(isset($_GET["select"])||$ue?array("orig"=>lang(6)):array())+$b->editFunctions($p);$Ba=" name='fields[$D]'";if($p["type"]=="enum")echo
nbsp($rc[""])."<td>".$b->editInput($_GET["edit"],$p,$Ba,$Y);else{$ec=0;foreach($rc
as$z=>$X){if($z===""||!$X)break;$ec++;}$Ed=($ec?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($p["field"])))."]']; if ($ec > f.selectedIndex) f.selectedIndex = $ec;\" onkeyup='keyupChange.call(this);'":"");$Ba.=$Ed;$wc=(in_array($r,$rc)||isset($rc[$r]));echo(count($rc)>1?"<select name='function[$D]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($rc,$r===null||$wc?$r:"")."</select>":nbsp(reset($rc))).'<td>';$Nc=$b->editInput($_GET["edit"],$p,$Ba,$Y);if($Nc!="")echo$Nc;elseif($p["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$C);foreach($C[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ra=(is_int($Y)?($Y>>$t)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$D][$t]' value='".(1<<$t)."'".($Ra?' checked':'')."$Ed>".h($b->editVal($X,$p)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$p["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'$Ed>";elseif(($ff=preg_match('~text|lob~',$p["type"]))||preg_match("~\n~",$Y)){if($ff&&$y!="sqlite")$Ba.=" cols='50' rows='12'";else{$M=min(12,substr_count($Y,"\n")+1);$Ba.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$Ba>".h($Y).'</textarea>';}elseif($r=="json")echo"<textarea$Ba cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$pd=(!preg_match('~int~',$p["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$p["length"],$B)?((preg_match("~binary~",$p["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$p["unsigned"]?1:0)):($yf[$p["type"]]?$yf[$p["type"]]+($p["unsigned"]?0:1):0));if($y=='sql'&&$h->server_info>=5.6&&preg_match('~time~',$p["type"]))$pd+=7;echo"<input".((!$wc||$r==="")&&preg_match('~(?<!o)int~',$p["type"])?" type='number'":"")." value='".h($Y)."'".($pd?" maxlength='$pd'":"").(preg_match('~char|binary~',$p["type"])&&$pd>20?" size='40'":"")."$Ba>";}}}function
process_input($p){global$b;$v=bracket_escape($p["field"]);$r=$_POST["function"][$v];$Y=$_POST["fields"][$v];if($p["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($p["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($p["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($p["field"]):false);if($r=="NULL")$Y=null;if($p["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$p["type"])&&ini_bool("file_uploads")){$ac=get_file("fields-$v");if(!is_string($ac))return
false;return
q($ac);}return$b->processInput($p,$Y,$r);}function
fields_from_edit(){global$n;$K=array();foreach((array)$_POST["field_keys"]as$z=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$z];$_POST["fields"][$X]=$_POST["field_vals"][$z];}}foreach((array)$_POST["fields"]as$z=>$X){$D=bracket_escape($z,1);$K[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($z==$n->primary),);}return$K;}function
search_tables(){global$b,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$mc=false;foreach(table_status('',true)as$R=>$S){$D=$b->tableName($S);if(isset($S["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$h->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$mc){echo"<ul>\n";$mc=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($mc?"</ul>":"<p class='message'>".lang(7))."\n";}function
dump_headers($Dc,$vd=false){global$b;$K=$b->dumpHeaders($Dc,$vd);$Pd=$_POST["output"];if($Pd!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Dc).".$K".($Pd!="file"&&!preg_match('~[^0-9a-z]~',$Pd)?".$Pd":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$z=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$L[$z]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($r,$e){return($r?($r=="unixepoch"?"DATETIME($e, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$e)"):$e);}function
password_file($ib){$vb=ini_get("upload_tmp_dir");if(!$vb){if(function_exists('sys_get_temp_dir'))$vb=sys_get_temp_dir();else{$bc=@tempnam("","");if(!$bc)return
false;$vb=dirname($bc);unlink($bc);}}$bc="$vb/adminer.key";$K=@file_get_contents($bc);if($K||!$ib)return$K;$oc=@fopen($bc,"w");if($oc){$K=rand_string();fwrite($oc,$K);fclose($oc);}return$K;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$A,$p,$gf){global$b,$aa;if(is_array($X)){$K="";foreach($X
as$Rc=>$W)$K.="<tr>".($X!=array_values($X)?"<th>".h($Rc):"")."<td>".select_value($W,$A,$p,$gf);return"<table cellspacing='0'>$K</table>";}if(!$A)$A=$b->selectLink($X,$p);if($A===null){if(is_mail($X))$A="mailto:$X";if($he=is_url($X))$A=($he=="http"&&$aa?$X:"$he://www.adminer.org/redirect/?url=".urlencode($X));}$K=$b->editVal($X,$p);if($K!==null){if($K==="")$K="&nbsp;";elseif($gf!=""&&is_shortable($p)&&is_utf8($K))$K=shorten_utf8($K,max(0,+$gf));else$K=h($K);}return$b->selectVal($K,$A,$p,$X);}function
is_mail($Fb){$za='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$xb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Vd="$za+(\\.$za+)*@($xb?\\.)+$xb";return
is_string($Fb)&&preg_match("(^$Vd(,\\s*$Vd)*\$)i",$Fb);}function
is_url($Q){$xb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($xb?\\.)+$xb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$B)?strtolower($B[1]):"");}function
is_shortable($p){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$p["type"]);}function
count_rows($R,$Z,$Pc,$s){global$y;$I=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Pc&&($y=="sql"||count($s)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$s).")$I":"SELECT COUNT(*)".($Pc?" FROM (SELECT 1$I$sc) x":$I));}function
slow_query($I){global$b,$qf;$m=$b->database();$jf=$b->queryTimeout();if(support("kill")&&is_object($i=connect())&&($m==""||$i->select_db($m))){$Wc=$i->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$qf,'&kill=',$Wc,'\');
}, ',1000*$jf,');
</script>
';}else$i=null;ob_flush();flush();$K=@get_key_vals($I,$i,$jf);if($i){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
get_token(){$me=rand(1,1e6);return($me^$_SESSION["token"]).":$me";}function
verify_token(){list($qf,$me)=explode(":",$_POST["token"]);return($me^$_SESSION["token"])==$qf;}function
lzw_decompress($Ka){$ub=256;$La=8;$Wa=array();$we=0;$xe=0;for($t=0;$t<strlen($Ka);$t++){$we=($we<<8)+ord($Ka[$t]);$xe+=8;if($xe>=$La){$xe-=$La;$Wa[]=$we>>$xe;$we&=(1<<$xe)-1;$ub++;if($ub>>$La)$La++;}}$tb=range("\0","\xFF");$K="";foreach($Wa
as$t=>$Va){$Eb=$tb[$Va];if(!isset($Eb))$Eb=$Tf.$Tf[0];$K.=$Eb;if($t)$tb[]=$Tf.$Eb[0];$Tf=$Eb;}return$K;}function
on_help($ab,$Le=0){return" onmouseover='helpMouseover(this, event, ".h($ab).", $Le);' onmouseout='helpMouseout(this, event);'";}global$b,$h,$yb,$Cb,$Lb,$o,$rc,$tc,$aa,$Mc,$y,$ba,$Zc,$Dd,$Wd,$Te,$xc,$qf,$tf,$yf,$Ef,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$G=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$G[]=true;call_user_func_array('session_set_cookie_params',$G);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$dc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Zc=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','de'=>'Deutsch','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fr'=>'FranÃ§ais','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èª','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','nl'=>'Nederlands','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ğ ÑƒÑÑĞºĞ¸Ğ¹ ÑĞ·Ñ‹Ğº','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ğ¡Ñ€Ğ¿ÑĞºĞ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ğ£ĞºÑ€Ğ°Ñ—Ğ½ÑÑŒĞºĞ°','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡','no'=>'Norsk',);function
get_lang(){global$ba;return$ba;}function
lang($v,$Ad=null){if(is_string($v)){$Zd=array_search($v,get_translations("en"));if($Zd!==false)$v=$Zd;}global$ba,$tf;$sf=($tf[$v]?$tf[$v]:$v);if(is_array($sf)){$Zd=($Ad==1?0:($ba=='cs'||$ba=='sk'?($Ad&&$Ad<5?1:2):($ba=='fr'?(!$Ad?0:1):($ba=='pl'?($Ad%10>1&&$Ad%10<5&&$Ad/10%10!=1?1:2):($ba=='sl'?($Ad%100==1?0:($Ad%100==2?1:($Ad%100==3||$Ad%100==4?2:3))):($ba=='lt'?($Ad%10==1&&$Ad%100!=11?0:($Ad%10>1&&$Ad/10%10!=1?1:2)):($ba=='ru'||$ba=='sr'||$ba=='uk'?($Ad%10==1&&$Ad%100!=11?0:($Ad%10>1&&$Ad%10<5&&$Ad/10%10!=1?1:2)):1)))))));$sf=$sf[$Zd];}$wa=func_get_args();array_shift($wa);$lc=str_replace("%d","%s",$sf);if($lc!=$sf)$wa[0]=number_format($Ad,0,".",lang(8));return
vsprintf($lc,$wa);}function
switch_lang(){global$ba,$Zc;echo"<form action='' method='post'>\n<div id='lang'>",lang(9).": ".html_select("lang",$Zc,$ba,"this.form.submit();")," <input type='submit' value='".lang(10)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ba="en";if(isset($Zc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ba=$_COOKIE["adminer_lang"];}elseif(isset($Zc[$_SESSION["lang"]]))$ba=$_SESSION["lang"];else{$pa=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$C,PREG_SET_ORDER);foreach($C
as$B)$pa[$B[1]]=(isset($B[3])?$B[3]:1);arsort($pa);foreach($pa
as$z=>$ie){if(isset($Zc[$z])){$ba=$z;break;}$z=preg_replace('~-.*~','',$z);if(!isset($pa[$z])&&isset($Zc[$z])){$ba=$z;break;}}}$tf=&$_SESSION["translations"];if($_SESSION["translations_version"]!=3437291793){$tf=array();$_SESSION["translations_version"]=3437291793;}function
get_translations($Yc){switch($Yc){case"en":$g="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Şa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%SiÀèyÎF“9¦(l£GH¬\\ç(‰†qœêa3™bG;‘B.aºFï&ótß: Tó¡”Üs4ß'Ô\nP:YîfS‚®p¤Øeæ,¡ÌD0ádFé	Ò[r)+vÜñ\n¼a9V	ÆS¡Ş´kÌ¦ónÓcjäADS!¦2rÉœ¢›ĞQBğsÛŒ–£}tİÍÊm˜jl{­a2Äj¤2Bb<áA\"_?§2yÌÒÁBAˆ´H3û\rAE3.ÀÆ4K`ò;°Hö­\0ÚãBÆÓ/ØÊ‹ÁîZí\$ÀPŒ97Øê1\rC,*\$°ì¤ ‹#şŞÎøÒ<Êt.0¤Á\0Ğ¼ãƒ»sÖŒ±šLŸFã²\rÑäZ”)c¸\$	Ğš&‡B˜¦cÌ´<‹°¸ÚŒ›ù\n)£#B0CcU	R3&:¨,ÃØ4¤\"¦)Ì°Ş5°ÁpA´¬H­&„h7%€Ï9 ã¨Æ1©#˜Ì:‰Cø9±å\"8@@—*1ËŠ\"É­5J±2J8\r(Èëú¼»ÊòD3ÑiDé;O\0ÇY;ƒLìÉ%J‹)Z¹îŒ€<V•\$cB3¡ÑĞ^÷\\Akèä+C8^Ã]cÃ\nÃÕ¡xDË6ˆél‹è²Ø5„Ağ’ª¢ñ`èã|Ÿ§Íë7´¨Óµ@<jk09;Kì–°£L#\rNºëú/ìµ„TBj\n@ Çİøâ|(JD€¤SªL²Œ©BT–%É€ÜÍÙyì™äé,&2'Ê}(šÕYBî¼«Ön1€P¨7£C¹”	â˜¨LË%)&´’1Cl)´ñÚ’ñ³ê‰ğÆ¾\$«päĞÕ»c4Ò2P, ¶Ø£¨úB‘ëC=(‰‰#;XÁ\0Œ*ekbB–Ô#’šã\$â`ºM¬¥|Â¦º}\$l›iUBOIGB9°õr¨ v8Ë«İ\n2%\$±àîÉp4Š)uª·È\"ëŠ|Œğ¦DŞ•M40ÈÏß¸rÖøÓgì‹Š~â¼3ûÒ3GËÄ¼Ğ@¾İÌÿTÂÆ/'KØ÷rHÂƒ3|UHıˆ•Dˆ÷Õ2;ğºÀ†jƒ`+iÜ1†¶@ÿu\rÔŒ0æC0yb&4œ*Bšg` \n¡P#ĞpS›l-¤ ö<PŞx4	I.a“<ñ ;îuñÍ:Â&Îò<LŒˆŒ3‚Sá\n…%JGÖ› lo(TKÌ^;¥z=@Û!{jƒœ\\SIxA)ÀExèHc;4m(ÅãCøng o'„&¤\$™	¨\ndx¾œ5 ‚iU’ğÿ†À™áIdU&x*Dà¥Ñˆqƒ†ÄÇ¢ êïÁ\0O	húÊ#(JL¥r“Ê \\";break;case"ar":$g="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0T2]6QM…ŒO!bù#eØ\\É¥¤\$¸\\\nl+[\nÈdÊk4—O¡è&ÂÕ²‰…ÀQ)Ì…7lIçò„‚E\$…Ê‘¶Ím_7—Td…Ôâ¥¢ÊQÔ%Fª®ÎâPEdJ£]MÅ–iEµtØTß'í…œ9sBGeHh\\½m(AÁ¸L6#%9‰QèJXd:&§»hCªaÎ¡RÄPcÕ¹åzÀ†¸Ìnø<*©°®Ì¡g\n9††%‚‡h5ut.—³¼QS…œ\nÅÍÄ¶p{š¯l-\nˆ†;„Dğ¸Ê\nã ën¹ÙÒÆI‚Îífˆêg€ŸgxuµŒãlÂ§„R¡\"erğè¿êä®Ğ1·ÏJpÃ¡ª°¹ê¹^‹ˆ!P»¤nXò2£ƒpŞ¨^qXbœCéÑV)dE+.êNC?Ëà‘•	Âu\r³\"ì2mÄ~±?­›¶–¤e{6È!ÏÚ‘1H;à­z¶\\§âí4²š¥í²–Æª!R¨2os\n©?Éé±8²Š’™¬s›7¸´\$	Ğš&‡B˜¦\rCP^6¡x¶0Òƒ»	¬e²„î\$qÚÄåC Øà7\r2õA0 ³·Úvb˜¤# Ş5Œ£r	R›¹°SÑË°±é«\"´+œï>¶lÛ(¸!®\0°!­’Îè.èm\0ù¦°¸%ì<…¡Å²¡'‹læ„Î¢àC¡7Cœñ›e„ÆË¬‚ŞY2’\0\$U[Àë^Z@itmÁXÛ‚Aä\"n&Œ#˜è2A\0áŠc¸Ş9C£(ğ8\r#Ê2X!àÂ\r0Ì„C@è:Ğ^ùÈ\\0ŒƒhÒ7cv>3…õÎŠ<bãpæ4ãp^ Â9ã(é˜ãØ0ÃXD	#hà6£mr:xÂ4¡Ì:\r|::\rûpÃ\\Hécn¹³İ¨klÏÙI\nF’µjâ½0³¼ÅÂ!C€Ğ8?(j&ÃÁöÒ­ÃÇ-bâ‰Ğ	B‰6ËªN­–WŒ~ÙK:¢(ÊBúœ¼¸*Ã«ŠDœáÜ7º›j[‹Å£xŠx¦*!h8±•+£C`ö¤,<„ö¶êŠ‚'Iç¤õø<Í?}«¨[ÍíÃå’¯S?¬Í)¬nS«ÕfŠ@ ›‹#xêzà@[og€•† ÒÁ\0S\n!0`ÒÙ\0v\r,¬#@¡r\r-‰·¶õCo\r¤mŒf‚^Ù:ÕD,,J‚Ğ-æõ®8Z…I\$1NÆL‰ã@+\n(°å¯ÖbNp§-åÄº¥%ÜuIÛøL°0Â`@‰˜Ğr\r0I²5PæÔ[¬\0…‹µĞbûRkA”¨\nÒÂ.´%âàãbÄQag6Ñ€ §Yøg'ò9ÇTîu Ø%Û‚Ö|IÊ˜\"kø³Ä#AÜ¬4Oå%ğ‚VP¬ r\r€¬1†ÀÒÃX i°†ØC,`mÍÈ4†`òŞC¡7Ğ>X†ĞêÅ\0b–,üP¨h8\nä1Ë@ÜÊƒ¬’‡8ŞU|I^áµ.'¹ĞIÂ—'–¡,pÈ\\Ô¢T}ŒbËIOrèšÀPM–’Ù:ƒ@ù–ê‰'•OÄS3VYò0äĞ¡Cä-Á\0\"0Óü5èa bˆsòyŸZÓ'—“£°ë¹W=Æ&@ É @U%€aµËÆÔâû2“\\„–]^j:1x)†VÈØ¸d¦¦PW#Ô-\rO}záS#0*ßr8IÑ4»±fj²Nšªö¤ÑjÃ‰X„";break;case"bn":$g="àS)\nt]\0_ˆ 	XD)L¨„@Ğ4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÚzZØ²„SåØHİMS àè]şOâ”ÕE2şÕ\\¶J1‚Ê|úĞ¦[ÉiõL¢™_?€Pµë\n~bÂ¨‡#óªm\r/ƒÚÔt7½Bš'Ÿ¹C¶˜]¾sl¾ğæö2G©ÓÔ¶ĞæŠÌï^TÈ˜s±¢ìñ<\neU>¢‚€c¶½Uõ>İ£³ëÄÖS ïL^>Ê#–Â²Í4\nÙ¾jRñ©êêÜâ’hªòÀ\r©*§½ÏÚÙÂOù~ÿ1êÃdÁ+ì*\\×¬lº·=‹{Şæ&ÌK^W2Kb£”î,.¢*{ SëJ¶¥*«\" d%É¯QQ³h\nÏ·\r*\0ØÊ#Â H\"62:O™>„³dÂ¼Cq„¿1r#*B7\ràPHÁ iB†,k=/“Š{n½¯ÎäÀ¨(’“_\rA­{İK¦\0©mê‰ÃÏ\$^‡£Û\nÒ/¼q]`°áj¾·-Å’Ÿ)GŒÁ\nLM‚OÓ3Í°ÓrÜícKÎDĞÈ¥«a@¶sZ· ñårš¯ÒY~¡ÑšñiÓ‹ƒRÁo3¦Î“Õl×U»&Y·\nrZ-}Ğ¼+¤]×<±ãÎÕ3…3„S1Òx\$Bhš\nb˜:Ãh\\-XèÔ.Å…5xêGĞ•U9¨tšjí‘`PØ:TÌÚµĞ¼•o 	cÖ€Xˆ¶ëäB¬b˜¤#4õ|Ô)«3*¢É^Qß·=¨îá2Ær€G\$ülÆMCjà:ò¦\rwá,Üçì”¤î©J,ìÌBÄ>¿<Eö¥\"q3/¬JZÙ\r2¨uévDÁL‡o«qoÃ÷röoug\n—ßÖğíËèƒÒŸ\\	V«;H’6Ú”<\0š0c Ê9‡X9ãxå6£Àà4C(ÈàÂ\rèÌ„C@è:Ğ^şˆ\\0ŒƒhÒ7uáwl3…ã(İîpÜ9#¾ Â9ã(éäãØ0ÃXD	#hà6£o¼à/ ø¸‡0@ÿƒ h\ré°:øCXe¤:;^_£ÿ.§ ß 6èYn)G=€#äè¨”‘À\n (5÷NaT²)ƒÅå(F`Ar_‡Ñ«¦Vô»	2E„Æ-„³òº—ÖÉaF°Èï¬ êñ*,‚®°JÊË?%ş\rse‡-òÜÁÚÄ^ˆìàÚ™ctdÓÌT4…dè›ƒ2@µŠä\$í/—<ÂOÒ_(	…Ô °@xS\n„:B—‡LÓI‘lHÈ<Áõ„°LšhŒk©Ÿ,« +x)E	%–fà”™JdÅ<¶´ÛËDrm–…ŞA\0c~€€:¿°ŞõÃA¤3‚\0¦B` Á¥ş\0ì^F\nµú&ÀÒş´‚“(9ğÚHxv{+	&CŠi:] |°vœ\\?OK\rÉ0‰È˜ç¢f(‰¤@·´fêQã^§²ÂI¤œ³ætOµòTVÊy2QR©%“è\$ólÑ´)–ÀèåŠ¨T0q¹6äiby1’Ú\\€Ã8€v!È4Ì÷øû`4\r—À2\\úC@i§!…ùX6Û£ŠÎŸ˜Q¬VßÍ©±©’ÑšD¨ü<F‡6y*âğ¸œDdˆj…:^õÃ=N<RZ©6Ñ&¹jy¤Š‰¥+E£ÇEŠáO[)~wùà§S‹I¥	†…¦Zmgåp¤ô¶P£6ºèİ(à(!³\0Ø\nÃl\r!Œ5‚Í0fpa\rÖ	S ÛÃHf0MŒ\0 3 m®´(\$õÁ\0U\nƒ€@÷ƒ¨\rÁœºØxCSµ'!+Şˆ'ƒsÖÂÑRQR7öód(1EmÆÁGÊMSî]X¹Éêè*&Xn¥E\nÈİ£ĞÂnÍ\\,–µ5\\ÛY\\ê)v¨Z¤m¨µP¡º¶ûÙKÀ¸£ÅÅDGxªæp§°»öÛá*ıTˆ¹¶\"øC–L\\…ØD¶#T,•ÈÀ™(‘e DÂn¼´pHÍ,#j¿ÔÌr\"Fˆ[€ ™/Ã%hÇÙ»h%O_RÖ¹7‚îd³Åw®h§¢X/e+ëTâlñË ()†WøİpdÀ…èßáZ”Û¯>Wg«Îé^„Sï‰‰ø\\ı-3¢¾Jë'!†æxr‹a«tŠy_’À";break;case"ca":$g="E9j˜€æe3NCğP”\\33AD“iÀŞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4&&#¬°o9Læ“q„Ø\n'W\r‘¢hc0œC©°Ã1DÌ†“|øU:M’ÃÑ„Sº`§ñÔX :âqgLnbÚ §Ç ¦SÁĞÊnŒ›õR­I¬š¦šCM~Ã1*N-tØ'Éd¦›†Är¡‚ˆ† ‚èh´cˆqı?\$…lá‚‹SÆ8eÂ™N–œq3_9‚ˆ¸3¥£ŠmĞp|+H(‡ªñ˜`æãÎ8’7\r#Òš/È2†Œ˜e›0H@ IğÜÓ(ê“£ŠF†Œ\0Ä<´ÀHKÃí3Ò<¹*Ø¡xHÅÁ‹ì—¯\0Rh8¸Cb;\réHØ6\rã'J2Ú™ejm\nˆ#ÁhäœÂHï¸ääBé@Ê1¼fe\0HB Ê(ÀêŠ´È›P—¬ÄÈ\$PTôˆ£pí±á:ì“ÎĞè¨C£Ñ,CÜ»/À!p)ÏCİ>Nîe\0PR¸ÊŞKRàå/L\rll91Â@	¢ht)Š`PÈ2ãhÚ‹c\rd0‹²Œ·93éÂŒô9Nã#İ1tİ	ËŒp¨7m8@!ŠbŒçNÈ2Á–93íœú’Ã	RĞ6¯®cbXĞšyR®E’˜ºiLp¨lJºB	ÑP‚·íâƒ£¥<™ÀØ=´ƒ€ÓPŒ»Ûn&‰¢Ù\0Àc[	³ËûìäHĞÜ‚­ƒµ¬›ÓÂkôÓ\$Ãƒô9ëD;„ác-°‰ ĞäÁèD4ƒ àáxï¡…Èúm	¦@Î´úcJÓµ#p^/i(ÎñgBú7G\ra|Š2ƒ,4:xÂ5‰«ÄèC¯jj0Ù®tÿ|ÑĞ¥à¼«­3QÁKŠêç®ûÃB¡ï:†\n@ ƒ\rè¶ê ¡B¢´\rª-\0#c*cFOy\\z–\\*ØÚã£©Ñ@>\nzğŠµ¡ş1¹h¨¦\"g	]p‚€)Šˆ4G§ÈÂh3Ô\rE²)fC¬Ú4M +‹ga±B\"‹˜ËƒHì¢£¶2V„ÔyfÖ&\"Èß¯xêÊ\rèú=-A\0¦(‰ŠB8R!\0Œ*qtt:O\\rt˜9T°	{›Q¤õ¡@oÒÓcNu.#“¤ ‚nÉå=–Â‰\"ƒ/P‘»CÔ{s~.eÕÀ—£ZÈ	È|¯b:VĞyiNäq«VÜúÉÁ¦/eÎ2¹ÊXŒI—–Ì‰bB¡L0§pÜÎTI9ËRÄòRAÃ8ÃˆPÇÀÒz›`á9\ræ•—„şˆÔ,Qj5àF°ÓT”p‚(QOgH–yã\r€¬1˜°ÆûäÛH¤¬†Øí²@&!Å:S\$ŸÃ-€€*…@ŒAÂ|PF+Á6\$EKD!Rp¼Ú75Ë²€¦<¡ÙYJ1l\\Œ¹””•Âà@¥ğ¿\0 ›#ÃÊª(aŒÓ¤d*òò¸=1@’s5Ş`'4èü0Œ1N|bƒâAò6G ÀW™¸´ _’98RÊ€™>ÙIdö&¥ Ä%¼®DRØ„JÓzOht4hèPrûOHSS&˜2d€‘Â(x€'úTB¤\n+ÏYÏ6b¨W(\n’†ŠÅZtØo€";break;case"cs":$g="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ği6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt®\"=&ŠQÁŠ¯œØ¦ ¦*öEjTˆ†ÔØk<ÊÄ\0¢Q„ôy5‚ŠÇ“è\n(¨³SlŞLÅ_MGHå:ÅL=(†ã¾€kT*uS‚²i­×AE\\¤ìaÊf¶Äèy8ALDdÔæl0‚ˆ›®4Â b#L0æ*`Êtb&ÏF3((„iœ¦ŠĞQNjÅR‚ˆæSy·r4õJfSÔxÛº\"™\r'IN¯[¯Ø‚‰]ù¿‹\r#@Ø‘oš6\nƒ“_®+2/\$F)B-bs<‘1ÈË 5¸!(ÈC&ÃÑDÛÄüBÉ¬àPÂ7?ÃsªÁpHFÁ‹<ÀC*(Ãc Ê¢(C³º2¢ÃäÃ‰‰ƒæ#[©›`¡hÚ0£\0PŸ!i«€üŠ´|6º,8­\r2,<ÊLÌCxĞİKïäÆë#`@‰ÎÉÜĞÃã,µ.\rp!O#Ì÷0@eİED´¶Œ/4<òOüüR40³¥l¡ˆG¿B@t&‰¡Ğ¦)C \\6…ÂØåYBì©+\$‘û‚6ƒ”µô¿0+ˆh^®CxÖ¦)ÁpA:ÂIÛ(ÉHÚ»B\$È@ö³ÃªWaÑ°”(› #xÄèÀHĞìÇ\"Ëx×sHãœ\n7Ï÷lĞMËAoÌ)°Äa—©\"pB…J¦ş_søìÜWS€&ğŠ¤hàæ]¸+r×Å‘e6¸ÌàBLğÂ1¦¡†]\"P¡e(©&6;;cB44NÎ>&€âÃ\r¬8é\0Ê3¡Ğ:ƒ€t…ã¾¬ICk±`…ÉHÎŒc˜^¬²ƒv\"„KÂ9î~š/ŒN\0Ü5„Ağ’6Ù#+Ì7Šã(ã}¹èš˜¨c¥d¶Â4£&C*V¶­ø=BNù3u¡÷X@2g#¨á2®RÌ¢C\"\$Å5öXÆ4€(¿2VÌÎØ@*JWDOPt†Å96„¶—¦%\ng˜áiİ–Çx¸RtšÚÂÖ'	[yĞi\\ß1\r0’~ ¶‰ğ 'Šb§>ØhÁ\0µ½İVİt«¥¯„òÄ7ï¬ÕøƒHg¤ä»£ä’t5ÊAî˜'ÈÂ\0S\n!0’’r¬K99äpDôƒhofØ#GhqÉƒ«>‡áü‘ ôÇ–	@)oxô6qÃy8áÍ-‡¤üÑŒD5†è‚\0ÂÛèa(Aé¨è€\"¾C…B\"~›	ä@\n¤¤÷((K€ ^±€¼² òVØo+â…t›.\$ôú6¢ê]×ÀUM‰>=CdÛŒpk€‚69óL’Ùxi5a­F†D0ÇÍ\\{\$\nI>°ØíÎì=Jï=‡dŠ£r€\\e€÷(g€¢ŒôŸÊAÃáB{C	ï”Ê^NÊ¦\0§%l¤–*€5z\\Œ(r€M­²<†I©É(Œb\$,RëÎ¢ÛKü73G+f,„Èch,İ\0vOÌÄ*…@ŒAÃ¿O ‚’˜VŸ¥®–\nÁKÅ;C”ïQÒ²QÊóÜ¥^ŸéOu|f\"\$LŠ‘r2FÉù¸WØ»/pûãrOcåmÑ‹šsNˆdÈäÓÇD¹Xêş‘·1ÁÔÖ™28DĞá™¤‘t:5zŸáe(¤ìµÀœGÉl‘çV£ÁâG%»ë.d!Æ4„ÑLbN<Õš¬ÑiÔ@k2qÓ~’^–±€ –FQøKâ\0¦ï]L=GõI¡QBîHz.”TàœÕì‹b…*`Û‡\0";break;case"de":$g="S4›Œ‚”@s4˜ÍS€~\n‹†fh8(o…&C)¸@v7Çˆ†¡”Ò 3MÃ9”ç0ËMÂàQ4Âx4›L&Á24u1ID9)¤Îra­g81¤æt	Nd)¥M=œSÍ0Êºh:M\r†X`(r£@g`¢\\˜İ*LFSef\nŠg‘†e£§S¡èên3àM'Jº: CjØ³ÉÃR\\ÍØCÔv«\$«™k'JÙÊ¡/4Hf˜,Ş- :ZS+Œ2½Åêmò\"Ô˜é¹“_ÍÆ³.3pB€°Ô‡ Q;šz;Ã\r`¢9”ŞmæÚ0Êt”Ü\n\"™1fş¦³9e(igg˜o3ÀA_ŸÖË+ècÎë¨b†Ğ\rÃšH=\"„<¤ HKB	p<ÂÃpŞ°\\øb½®P¹ŠØÄ£,ÃÈ·¼ì°Ì@ m\"B*Èó:£1éÎ\"…©ĞÒ6B´vÁƒÊ3È²ÃÆx™FãpĞé1\0‚15K˜óÂiìŠ0Èáä–Ì#rBHË3ÈãœÔ1MˆTÄ°CS®ã‰@t&‰¡Ğ¦)KÚcU5±ä5£˜îé78Ù&¯H`ì²Ëï\0Ø<â¦)Á\0¨7Ìa3ÊÔÚŒƒœÈ+a\0Œö\r£ª5RpÊÂNólÆšT+ ÉW§£Ì7¥’r¾š -^Ç²²–ÇŒ1ÈÒ;6ˆ:İj1q¨Î9Œƒ\n†Ík¥Ô”Ác2Å±£’ßb#uER&‚«X´‰h@ ßVTæ\$ÖxäGQ‚h›)ğ0àùRÏdä<Lœ2VàÂ\rpÌ„K\0è8Ax^;år66 (`\\öáz;›2…á@:#’Z:d‚øÄ9a|\$£‚Æğ\rÃ xŒ!ò£;<£Rƒx@92Ø]òÏ‹nb£“²Å¡–º<€©éÜR®-Œs!0é(ä§ÊÌ+Ì\n@ í»~ı¹B¤ìJz>ö\rÍùW)Òp'‰õÔ  Ø ôİ§ƒ!¯(A+.{ú´9Ékz ÌÂ-–ÈZî(	â˜¨È\$˜û(ãz—Z\nC-–=4¬z\\ Â:¥)‡Oè^·{ •ÍH\nêæ¯±#Î–¶C8ê¾á© ²7¡\0Ç|ÕÚpŞÍW˜Î‚\n\"bP‘È2àcá*Ô@›M?ÍŒ3#¾¸ƒ“Ø3ìé¼BèRMB|G¨(ÂÁd¸d`ÒƒèÌ„¦IjUJéğaˆB€›ËkG¯¹ø2\0Â§Ál…¡p4ØÏÚğu¤¡5¢œÏË‘cZˆ\0¿¯bõ[Ü0ä\rÅ bæĞK›p<áN^ÎLQ#ÑN\"ÄHô&\rÉQ+%€ŠÔIJö7	” š`Òs	ásI¡½(àÒhla­¦à@a‚‹Ç‘ÄìøM1.&\0005õ*T›äT*`Z	èng\n/DËà©9ÔÚ'	O‘®İõ½ùU+\nâÈR¡İÒ7²\\QAc%¨–â`–l¤Áä&\"\ny\$i†›ˆ?q®#Ï=ïC—!Íù==F†HÒ¶S\$y\\’Ju¸\0¢Æà÷=HØû¿€Ú{4D(5ÁC\nœgérÄÎÂ\\Ck~%¡ˆ¯5:XÃ%…°6pXÄ¸IÇ¦J¸í9bÚ%!rj`Bì©)u0n‚%êTêÅ\$/^À";break;case"es":$g="E9jÌÊg:œãğP”\\33AADãx€Ês\rç3IˆØeM±£‘ĞÂrIÌfƒIØŞ.&Ó\rc6ÀÏ(©’A*–K¢Ñ)Ì…0 œ¥rØ©º*eÀL³q¤Üga®©À£yÈÒg«M‘:}Dèe7\$Ñã	Î` L†“|ĞU9ÉÁE\nè€Ìa—J°aÔÜaO„ËlXñg7G\ræè¸‚‹H¥Pb§œE@ÓR˜\r1¨ÄøÍV4™\"²H±³\ns:Éî‘:É´Ë\n9‚ˆÆY^ ò 4WL ¢†}‡¬5ãx(¤e2ˆæ[©”èra«xdÌü›rE¹+·}†ËšCÉõí¦Y·lß`7t¶'#\$œ@côœ½~Ø™ÔÊ¡9ë…!£ @1+8ÀĞBÎÜ(¸­„¨^p¸bâ2k˜Æ4˜e›âÕ\rÌRá‰ï¢Ğ½;ƒhÒ:BÇÄ/ˆš½C\"¦ƒJÆ\"±‹`7<QˆÎ9 ëĞ‚2\rL3ÄïÃ°Ò½Aˆ´z×-“Œ—Áp0Ë+£Ì¦Õ-ÀPÂà¿@P\$Bhš\nb˜2xÚ6…âØÃ=Œ\"è+3íˆØ4O³ñ\"-\rKš6:àP¦ÛÊMTt&=ãxë\nƒxÖ´¦)É¢ĞmP\\\nÏğØ;1ì£)¥b6ÄŒ2{2µÃ2º6¬c˜˜\nkRÎ§rxÂ˜H8‹¤É@Ğ0ŒQô^ã1¬b0ƒ2L¤ËG£‘«8\r/Óê#+êşÀÔR:.6»;\$PÜÿ%É‚ä´ƒKN1Œ0û'QÕ%†˜	«jÎ”hæ;«²ğñpI%N1D3¡Ğ:ƒ€t…ã¾D8Ñs(9ÊèÎ­c´[!xDµ\$ã;­Œ‹ë`Ü5„Ağ’‘£í´ˆã|Ë#\r°èàÀÏ@šSièŒ¶é£)\"&£€0·êƒ!l¢j²ÃÖì[¯f¥´\n@ ‚é\"Lú£BŠ¨h¹hÒª*n Ã\"Xzzt‘1Uø‘Öc†«ÑSğ1ºN¾%:ú0ºÏ¤&€)Š•¢M[¦ˆä¶Hü}S¹ã ê=_nhš&Èª+ÎsÉÄÜ-åóVl´;N„?Q¤EĞBÍ,ûğl(áY8ÉL¯„˜¢&/ÑòA-0©·õÉ’êKò6 ´ƒn˜@.êÖ¤K\rLç ÿ’p7®wÜ¶üÊ\råQbJÿÀR7¡¥~#¦´gŠ‘iIë‘²`óƒ«[^\0€§’¼”ˆû6#\r8:‡êçÚYŸf\0˜sæ}QÔ.\$ğÀõ¾W™ör¤™œÕ‚”Š¹ò†pê›uš|Gj\r“%DvK;ì!™á?ôºÔ’ù•ŠqU2\0†uÃ`+j1·\0Ä’²¬VL “™ÓÂIÕ‘0Ïy§˜6¦²• \n¡P#ĞpEƒqø.e\\˜%X&şŸ3rŠÒ\0ÁR0H¤T],…\rr‘Ç\0ûHú3mGÙß–³_âú)Ì‹¹DJWÂA9æ1- eşGAU|ÆB@®\$¬^\$‚X@¸Fch I	B«fâÖŒ/dø2²£	à\nR‡±M Şõe„h„çFABä<7) Ø(ÇV~Ö‡Êááˆ¬Œ::¬<®¬Òâùç°B0rş«59'‹i1Z}øÎ\$wÉAâL€";break;case"et":$g="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$Ôé4AFó‘¤Ï\n‘›EC	ŠOƒÓÄT,Ì°ÛŒêt0‚Š#©ºv¼GW†ƒ¥®2e…Ñ†S‘K \rGS„@eœšq·:éŠk\0¡^\rFºò<b4™Dã©´Å] Á®43ƒ\rHe;d²Æ¸lˆÂe3ØóİH(…`0œEiyÈÖ ON‡zá¬R\n#™MæÛ™Ò»y&fœR”pt®]t&ºMZ½œğ@Q0ß_ŠæfPQ+lÀ¤èX@î!¨cêÍ7cHä5?*Êª@LB<±€PÜ7A l¤@BxèC°Â4¬*V‚Bš¸ÅŒªêô4ÁKÈ¨à7\n3gB(Z•±«‹z†‹ĞÊ™!1°¦Í1‹Âl0Ê3d)¤c\"ó,\$‘j¨„AL˜tAÉ¨Ü#ÍP\$Bhš\nb˜ª¡p¶<ÏÈºå¤l¨2;(ØïF1¨í¾¯º8—ƒcGí@ÚÒ¡\0†)ŠB0X•/‹ôˆñ¯:Z®\r¡‡()«™F´ce\0¥)xÜ±ª2j)±‰Óæ÷ ã„— ée&µ²”¢İ\\uĞŞ¿Ya~3¯ª¥68S«]QTÃ­PüÙ#*j\"²£Z¸93:\rg!nâÜ›³c•9dºƒ’Ò<Rã,4\\ƒ0z0ƒ àáxïƒ…É%`9ÊàÎ±€ğÅÕĞÜ„Ağ9TC¥ş/ŒIÜ5„Ağ’6+¸7à^0‡Ó\"îƒ@Şƒ½p”ªITkI§¹e¾¨)ëk4±#BT:ºEõ‹Å¿D[c€(húK(º\n@Rš¦ìÍ&%­µ.ÙÚk‚¯mğ½‹ê*¡ÜˆXÃl1ëĞ)Šlÿš%4›¯ÈØÒ™0ª‰¹Ú´dY½[Ğ%É†î¢i;ÚR¤%C@à¿rèèš‹#}*1Ê•6R7¤–t(¯˜¢&24–ña\0Œ*k“ø@“%c“ŒÏ•Jıé±«>Å.ã\r`–µœ£[B­µ½zu•h©lüÂ2ôj:|b×nI²‡-F/Ó1?Üã‡Ş:ØGT\r\rÙ*+¡Ùİª\"ÎC¨pKF-˜YH*·&JÆ¥¸&”L±£2Gıô 2†	:EK7° ¡ƒE›f8¬\ršµJA4—™6â—Òj5)2œ³mŸ…ƒğ„á©c¼Xk&dpı†Â\n\n[»ƒÆ5\n3ÂüB F àË†àÆÍÈPg&¬â’SÆ™9]KDÔ²b6æ	‘ï'¦\\Ê½ç®E‚l`Áä>—úOQRƒP¡¼ıš ÚûËÊ«ˆ	ZxˆNKùë‘°€Í¶FªO¨eE¬Ãƒ	‰=Q\$’0Ê2Já)eå	Æ¤tmšA3KåM•%cT®(c1f¨%ªå–IÌe+Q®TJ‰ÈââZ¡@S*@Oc,¥Ğ)êûŠ¡»%á¤„€";break;case"fa":$g="ÙB¶ğÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+X¶QP”‚dÙBBPÓ(d:x¯§2•[\"S¶Pm…\\KICR)CfkIEN#µy¼å²ˆl++ñ)ÕIc6Ód\$BÓ!ZÎ-Ö•~äŒ„Ø,V}–'!³Ğ•”šl†·ÏUUiZ¾B@±ŠqA´©ˆSêp•ô2íQÇBÔùšœB#SàğëT­Q:‚HTÚkí“ˆN!([îÉ+†ª­ğ{…r ËÌ0ËJæ¥@Ö`4ÊëÌ–©¨ZlëIò¢´ã¯•ø…Ï¸¨ËãáZ¸šÏÕmˆğaRê#MgÑÄV’Ùv¢¤¨J–À9i’:A§Pl9É:Àæ,iŠø-%LÅÀ+¡^Ú\"Ã\"RBàHK0ÏÊ#*87\ràPH…¡ g†«IXÅ,*ú:…–.LnS£¨\nÎU\$ÎARÔ1ÌB£¼H”.´—0Sà•¸L;Xµ¤%B:Î¸-QäÈ’Ë*ÛPù4Sx°Ërğµd¶Ü¬ëç 9Hj’BCª{rB·)Ìò¶\$®á_DÊ@³K<ôİ2Şô§dB	@t&‰¡Ğ¦)BØóQ\"èZ6¡hÈ28jŒ‰,H®{9ƒbÒ†ÂOë[\\ÎM\\5‰RHà!ÁrK&¥L†—,Í(Ú Ş5Œ£p@!ŠbŒ´Ù-Úì@£ÉáT’Ö9YB®¤RĞl³®ãuY.\"f•–K+¹.Ä©ãä™±töä\"l\rÖ¨Şès8›]J‚„±ŒZ¼'’¯c¬vJFª¬\"ûH®×S ãX)‚J÷*+øÿ t‰aBhÂ9ƒ(äxæ;ã”<2€Ò9£%Œ!\0Ñ ÁèD4ƒ àáxï©…ÃÈ6#vdg#8_jëãÆb7cHŞ7á@:#Î2šP¾1\rƒÜ5„Ağ’6`Ê6Ú£ xŒ!ò„9„\0è4\rğğè7ñ#\r¨\r#¦i™\r»·Klõ,Ğ,µşTå¨7g<ö3!Nm!cI€ØñÅ4ÒèP¡…),ˆç/ëA±&\$Jš’ ‘û6«P+«DÌø·£4ó¥n=\"‰XØŠ‰¶ÍC(ä©(YiŠğçÃ=ëCF§³Úe¬å’ZÍ867Æ±|¬j«¾~ÿ”Ÿº©ã(‚ˆû½\$dü;ˆ/‰¹K,ä4¯2’ML)XR/€Ÿ¹À²Ã¨ mØVúÚ° h¡ˆ4†p@ÂˆL˜4·à@ƒKEÁP(B Ü‡ƒK|g.YÊÂ°äÃifAÙ­¡T.@\n0ØYt,DPÃì,kÕ3˜sH¤ÌO'ÏÕsDÓê}ÑúVä‘¼ÂôXËéì9EÁĞb  EŒĞ9˜`ß›{ˆqğt8@ÂÌ[Xh\r1è0·@Êç\"Qj>æ>DŠéwŠùš/è*Hb\"~\r0´AN85ÎZI|’ìb>ï™G‰b>ˆµH\"D\$/&¨‚K+âD±%rÑé”\0†laŒ6ÆÁg„P¼0†Àê[[\r®44†`òå£œĞ¶hĞêÌ\0bš\rdP¨h8T1Í@ÜÜâ#dq‘â1”‘-g‘=å8âÏyzGHù!v™•®k‰*7<Fé1Ÿ‡lÔšÇø©—càvq’’€òIxÂ¤LJõ.äË—˜À‰ŸÒÂŒ4šR„ü#:Ş€,‰b²®ò’5\rwÅÄšŠÙ(•Ùn	€2IàPáÓh\0‚?6ÉZCgØ±–Óèş³y\$uNAL2·àÆÌUaxGÜÄœvJÕìö0)\$)réY‹Û¯~Çx‘,:E‘±uRÉòª9%Ô™6€\\€";break;case"fr":$g="ÃE§1iØŞu9ˆfS‘ĞÂi7à¡(¸ffÁD“iÀŞs9šLFÃ(€È'4ÇMğØ`‚H 3LfƒL0\\\n&DãI²^m0%&y’0™M!˜ÒM%œÈSrd–c3šœ„Ñ@èrƒŒ23,Üìi£¥f“<Bˆ\n LgSt–d›‹'qœêeN“ÓIÎ\n+N³Ù!è@uÁ›0²Ó`é%£S#t„ßTj•jMf·B9À¦åCÉÂÂÌ0#©ÈN7›LG((‰³’™iÆŒVğC4Xjë¬h…n4ï#E&§a:‚ˆı]ÏV¿5œa`Q¦\$ÈiÚm°[ÔM7Ó¨Â†A€¸8†ì_f4³ëƒ ı¿©“şÏ¾ˆb€º¿Œp:Ã(Ø:£cª6Œ¯â(2xÆ€HKCÑ4<·£pŞ¨^qxb\nC*f†Fí°Ü”%Id:a— P¨9+/Úô?ü\0007Bœ%:9H“|À\nc¨Ôá#lëªŞ6Â€Òa•Z5\rêóz\"È4PÛDa0#:J;Îª·6ãËªDPäæÙNÈK>§O%L÷7:£šn MCrù(‰@t&‰¡Ğ¦)CPÔ£h^-Œ5(Â.®2®â+I\"23ãsªŞŠüš†B/pˆêŒuˆÊ¡@\" Ş5Ã!\0†)ŠB2»6¨‹BÊ1,Z|2±Ã•g>Mér¬•£¨Ø‡·‰ºâ7ˆ3¢,CÆZ\0Ã%B5jÃ\$][Ş°E~8:5˜XW7cƒ!tÀ©i†PT 2»ş\r/óWƒBY¦âkì+Oª@;¥påöèŒ£ \\‰ĞĞŞÁèD4ƒ àáxï…ÃÉ#®£\\•Œá|3£3pË<7áv0S°é™éø5„Aò88\$Ãøã|Ğ¡0Ãô7Ãƒ ß96\"º§5Ã”„&â.’ÎÉvZ¾°¬i\$¹®ª{4ÎihH \$\nÈê8#Èmf„…\nˆS†„êãÎ9£ÃrD’4xkrİ¤ª…nªzä£ªcR“:¹ç?Ú]¦Ç;>½l‰¸‰Xñá\0 'Šb¢v°\0Î9/ŒÎVê##Ã1ÖşŸvpI7xT¨è>\rÛao¤±\$¯L¨¤ËâéW£rb¿yº\"ùğâ‚n,ûCøÇëƒ~}wØ˜Q	… —–rt‚£‰y%u”ãĞL¥0ÁÉx•@N…P»Š%Å8ÄˆSù8‚â¥\n—oÅHtOAµ´1TÆ*`´„Ì!ò'ˆRˆƒ¯+ZøZLL9qp‘F­â›Ú9(EÏDˆYÉ\"…'m­Å†C€NÉ¡	.îp&Ãx[MJ`‹¡¹¡²œúLn/åhêwÜ“C	g/±2œ%—“NCÇ\$ˆEÕT»Ì:q†PB¥91Oê\nBH21ü‘²9Cø^½Â_\r€¬1™ â_Ìps|F]€CŠ}™.'R\"`‰ë¡!81R ¨TÀ´'µzyËé7N&H3¸ k‘“æ¡Ù%	KÄ›µ²>HK#¦‡D‘%+åZN¢Ù€>\$<€ È¯…6Hi­÷ÜF¥d@=FDÉ½Jd–(\"%e§çÅ>Éif¤•ğRn©€(ÁÉÍ&CŒÔÀäâˆÉSxùHr%Å°ºÌº8oaä¢V¦Í=˜3“¦á‡6óİ¦‘‡šÄ°Û#Tr_) UÍ<² ¨ßL\0L£ôøƒ”ê\0€";break;case"hu":$g="B4†ó˜€Äe7Œ£ğP”\\33\r¬5	ÌŞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\İ†¼¤ÁQ£)’’išMÆ8,©Bb6fâéæPv'3Ñº(l¼Şï·óTÄÂ(=\nipSY¦²r5o’¥IÌéO™M\r‚\nµbµ\\›‘¥Œú~ÃYËåJÓÖÄS=E\r ¢\$RE «ÁM&F*D°•Œ¦pTLr ŞoúƒÑ„è\n#™d´A„L :ÛÑ¯%Ş‚´FÍ%óMVY‚‰R‹æ£‹(«œ7 ¢)·;Ş=„-)†M\rI\n®¬°(Èƒ&ƒ A\n\$PH»,CpŞ°\\Øb	k æùÂ%ä4\rì\0¦7Cb¤\rË3bÊC\\X«.xšb–.Ø¤ÄHì¿°KrÄ\"…£hÂ4°Â2=Â¢(9ãËŞö—C!ntRŸ\rÒ°–¯’„i²L–Í¥\\È28AtÍ2T˜M³|ã9ÏTï<—“,â\r¨#Ô5Ğà8Ckf-4ˆò.…Ãh\\2B Â9;CbJ%2Ó¸98RĞ—&>/™†DÔŠ¼Ã!\0†)ŠB2`=\rğ´FV¥E˜\\LtÉ˜eĞÔ90ÏÔx9.#€ŞË·êäD1¬ëäÊ³hê7\rcÚ„)#(Ö…\ra\0P9²C˜Ó\\±H@Î²ªãbì=8V¢PÍÇèHÒ2¦âm·nÛèR•R˜èò:?ÒX¶:äÿU’SW¥ŒŸ/+ Pš½±á\0à½c¼Y:€Ò¤•øx˜\n@Ì„C@è:Qx^;çt6­HĞ]áz£\nÈİuW!xDÓwxéšë€ÃnAğ’6ş:xÂ1h’“@ètïvDIHPİh	ËRÙj1ÈÓ\"É¾{ªÖ‚¸cÌğÎÄêK{4(Ï/fá\0 \$\nÃ½ MÍÌ¦1WE,œ'Iâ|  ¶øôŞ½¼MŸÁªôâË_‰Î\nQÛã<ğ=\\JHtÅ¦ò‘tÍ¢×*b(	â˜¨˜pCYDe°Öïncœ0¿XÚ”£)¦Ãª©õÓ*a² ëú­^\"Œ²n,ã¨@1êá\0ë®ò¾1\r=¦(‰‰”˜2ûJb‚£‘jè¬å8ÛJPfD”.…HĞœãÖ%[ÂX ÉÌ3p( «°è Êb3Ælƒ¥…HÄÕŞ2e¥¿¶`ÎÂˆ@ÃW¡Ã	ğË\n2a|ï¤Eê…™ÈÏíw–ĞŞûƒƒÅ+\$„4 \\ã!P±Ø¦åœ±|;§~*\$RNÒF;a†!†ã‰›œX2¬AcâwÖ*ZJPTÎ–\$˜G-Ee›§(î€à›©e\$Ë§Èñ ›œ„&á:,ÀVÊ\0c\\ªåï½Ø_ãjP¡4†gcû\"F¸¥0òÔ¨TÀ´'‚ÖEËPg&è0‹&Ú×an\rf? yk-à4º—‰ò_ÀYr_åá#ä„‘ÀÃÉúEjä¼˜–âàm˜ô°“À(¶·–BR>„1†“İƒ”* Fó÷Ÿ]¤é‹Z&½–Í‰)EiXº“(¹H˜³\$yò‘DP‰º)x¦\0:0ØˆÏHL~2r3z&D‘cü‰GZZ\"É‰G¨êZ%aÎ-8p«££Œ/”í±ÆVTÀK=X=FS.@S[˜',Š¢Då¦©šâ„5¢àÜ¦jqA<¾)àà„µ\$v„tN¨¨@";break;case"id":$g="A7\"É„Öi7„¢á™˜@s\r0#X‚p0Ó)¸ÎuÌ&ˆÊr5˜NbàQÊs0œ¤²yIÎaE&“Ô\"Rn`FÉ€K61N†dºQ*\"piÑĞÊm:Ïå†³yÌßÎF“œ ÂlˆšhP:\\˜Ù,¦ÈåFQAœ‰	ÀA7^(\n\$’`t:ˆ¦³Xİe£Jå³JÌë’Zå„¨í@p™ğHSœh¬ñiÀ€ïÄŠgK€…“‚‰SDŠG2›ã›CH(ˆa3RÎ@¢)’•b4:=”ãœ\n&Ê«=ÔW@r6Î#¼ÃwK1:ÂŒ’ZUĞó/à¡ ÄZ\$ıÆ ¢ğç#iÂ8\$\0Pª9ªZ&\r#j”´ ,¢4ƒHĞÙ£Ê´8ë01\rL[d²\r#‚~	ƒÚ8\r#’ò%Å°kÔ‡Ã0Úf9\r	T( ëÚ!+ÖËCCdo¬²3ÆOî½	Ğš&‡B˜¦cÌ´<‹¡hÚ6…£ É	Â©\"¥CchÙ\$ã³r%ÃcªbˆãZ:b˜¤#@ì³¢apAGÁ\0ê¢'#2Ä¬B£’š“ÉÜì6NTsŒ¬¤\rò—!s&Í€Ò3%‚9O*Hæ!ğ£\0²Èªˆ3)`‚Æ%óèİ?Â£\"Xì±©;>•cºÄõŒ£ÄY\rWÁ\0xĞÌ„C@è:Ğ^öè\\¡AÃrN,C8^ÜãÃ²«áxD¨¦#8Ê:Z‚øÅD\ra|\$Åcb®à^0‡ÌŠ7y{Ö:\rğí>£NûÃq<©`ŠÆ]tê¤Š*)8æ2¹Ë¦/`±ôè \$\n	ºrç”Âr(áJ¢©¢ª°åä,Øê6°¡¨<,dåC:t'Ík5ê•½ÅËó4iû\"–8êX@(	â˜©J%(™¦uµ4ìÎ£#ï¤Û+>Ğ¯‰\"¸7ÃJ?2\n:X,ìHÆÖ£€Ø7¨JÙ£\nbˆ˜o7ğ@;-A\0Œ*e.´û¬HÒ•ÈN69MÔ°Šò¬r<u%BËèêÉtï2MuiÖàôV¯#ˆ£õRJt²¬±2q‹9Ã¢Òµ¼ë%À11ÌÜ>LúÇÊ_×’m†PÃ„Î2ª#C<¶ßÕ,Œ!\"ŸÇ¥5¹·_ƒ£Ù)Œ<¢ÁóECxJ\nœ¨ˆBôëˆ‚B1N¡s@G@h%ÚÀVĞ¨c\"¥}Å+Àê÷ÀmaJŒ<±X£Ü+4™« @B F â†86G‰dFğ¤)jsŸb%0’\$ŒGre^¸ìA°Ì@Q\rÈe…\$6€SîxÅØÀµb–‚MlRPÇ”¬¾Â?É nUÊt„;’öQ˜\nfÄï°˜âq`î&\r!£Xš!”4MŠQE\"Z2şeY1ÃÄ\"‰Ùp:òE³úê[Y¬\r\ršˆˆ£ĞUŒ\0Æ æ";break;case"it":$g="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,´ìu7ÅÁFø‰œÒn0ÈDèÁĞÂbÈ%²Òe|Îu0‚Š§;Î`u°O”ÚRi67h§:M.ƒP©Uæ‚ZT4œ0Q¨öé“°›ç[õRÆuŠDADC\rš  ®\\JgH‰¸Îh2‚ˆUø¤R2çˆæS|SXi¸Ûj{)’W\\¹gv%	ÑÌï\\2ˆ9È®\\Æa=`6\$Ã}zJp2œ§&î®ÄX;F#fYhJd5@O¿ãó¨‚?™(H…á g\0†(sÂë«j¸Ü8­ˆ98Ë\\™%mˆ‚ì¦àP¦õÃŠ§(ûF¸‰ã8ÎÜ«BJhğ)Kl ¯c(ÎÒ¶ÑPìà ï€Ë(ø@¯Æí(Â>±ÔyH¨–Œ(Òv7B@	¢ht)Š`PÈ2ãhÚ‹cÌÄ<‹ P­®`Ò=I€ÉCcY\r<#³Â±p*\rãZ*b˜¤#)É(ì°# Ş\rÄ’˜\r‰‚\"1Jû!®QsL2ŒÃ4P¸4Ã9£Æ¨tZ\\uC\0ÉŒ¯JFÄU£’B³£é[JªÎ‰Û´†:ã#80…\0Âê\"Èäš¦)ÑUu²47;4E\nPóR4–‰©Ò¨9ƒšçÂ\n€ğÉZT`x˜\r°Ì„C@è:Ğ^÷È]&ªûÂ+ƒ8^ŠàcÂüš¤xD,Ã”N:^øÅHÃXD	#hà=¡à^0‡Ì@ß\r{à‹äcı—Âñº©lóƒÕö¸á[U¶JÇT/rÒ¯¨®À„€(!ƒ¨à8+‹3(ÁJb9éŒÄ ±è&–Á:øĞÓF\n\n:0½5µŒĞ:¨‚B£k#~¶ŒÆ–Ã¢‰â˜©F\nTJ³3»Q³½»PAH¦5µæ4ĞömD7#ËxäìWû`,ã¨@ë¤ºPØ7É¶3â4Œá\0¦(‰Š› „0©¤#sà™iƒ–Z•£¨ Ú†N·üñ:¯TÕ~¬	gvöw¶4L›^\rT\"÷ˆ°Ş£GñZ#á	¹0ÒAvx¼«´Ç)Ë\r\"CYæüBƒxb1¥MìPéJı+6'^\nk\r\r~É‚CÅ²ãràş¹®±Ä’¾­Qi*ác'\"îĞ¢)D™4'#JFY‰€Ä”û³Ú¢ÀL\"*’2ˆ2‹LQ_(¨éæ™rZ‘ê€5°†4ÔÃ[Ij°•ÂBx\0mzÏ`ˆ9¸^aÃi(e¥¡è‚\0ª0-@7*\$\"Éiö{¨ı4Ô„‘\"Ó 6qØ´çè‡ù/dÁù’`HÉ)'SEÅêœ`ÌRÔ	\"«LÏ…\"‡M´BÄIL“|š˜«#ˆdI—DuÛ2/¤alÃâZsñq©È™9ÉtŸ‘M™ö—ÂŒÒ,5æÄ¯­ò1äÛNJl2¨tB›CÍR/\0¦3KˆC@ñ½Ÿ°ÂÎÏÓÜÇfŞ1êõä`t3„\\";break;case"ja":$g="åW'İ\nc—ƒ/ É˜2-Ş¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<sªW@§*TCL#‰i\$\nAGÑS‹,íÆ€A…€§B¡\0èU'NEêıÎ”TFĞ(H2j?wEÁ•ÎdZ…Ê¼Z¹•0\$öMŒ_Á”pe4PA£Ù:Î©«Qî¨c™/)@ªëuÚı†ø™ªkPsÚa\0M9×Ê—*y=J¬+iyê]JæLà\\Éd?mÊˆîG{Ú\rUT› åh4Dq_rAVºÑ´â>U#‰èN«¯#åÊ8D?‹C£íY_¹/Álr’j¨HÁ/²äA‘*¢^A\n¹f–ÁÎ[:\$Ó(à£‘Jİq9ÒP§96W3La8s‚\$2R¯#+l7\ràPH…Á g(†©éHNå¡DÅ—eÙÌBïãLåÁka[K\$\"ØE’±ğt%ÁÌE1P>U­…¹\\råÑÈ]-gJ	CG1_­¥*z[—g!vL#ÂŒ¤OI\0@œ…ùC!È¤˜«%KSÓŒ±Ôè‰ÎG—ÊòÀ@³nóÀñ<!ÓÎCHÂ4-5èò.…ÃhÚƒ\"©L˜6ƒ“ø¦L„…£ñšRA9PaÈ\\§1ZÕ%P†)ŠB4ü>ñªşA¤1RS)\nÖ5ÍƒdƒMV¤H”#öËø]¥Hùn(ešLŸ')F™Ö-yØ-òA`–‚#˜5`ŸçI2H<ğ‚°Ôf¤cÄ¼tZTø†%ŠbÌ]¹o\\]jÄÀPš0c Ê9†€9ãxå\"£Àà4C(ÈàÂ\rˆÌ„C@è:Ğ^û(\\0ŒƒhÒ7hav”3…ã(İ¸Ü9#~æ Â9ã(é®ãØ0ÃXD	#hà6£nä:xÂ6¡\$:\r|ˆ:\rüĞÂ5Œ¡\0Ò:hºÛÄrarzÎ³íFt4«²¼KİP¾¬àP \$\nÓ8Ï4\rH^¡äB¢‡¦mâ?Œ¾o©”ãDÄÜ.ø„^²,Éã é:„y_Ú4×\n| (TŒ#;¦G3²“·tú÷k?uª2-Dr”HA‹Ë2^ÌU|.·|Â˜T#‹ æ“xPI¨&â†q×\\?¤¥”Ñ.‰0åHÙ±\" ŒÈndÂŠÓ¡_L^¬:15îdÀPY\ráÔ7«\rí 5pÄC8 \naD&\0Ì\\€ Á¥«„`¨\"(nH¥Ç4§Péâpr\rá´6†›joGé?±\"™#aÅ‘ûF¤rØ8›‡Ç5RDƒš7ñ´I(e!E*§„UqP:DØ†0„Û‚ô_ì9‡m`0Æ€@“(r\r1MÈ8æß]A…¡7ĞĞe;~pÁ•×)‘:pÌX¿–åq˜¢±2ŠÄĞ\n\nruµ†ys.ÄÁã _‹Ö(do*r<Ç±-K‹\$D!¬ĞØ\nÃl\r!Œ5‚õba\rÕÒº4çƒHf.˜::à(m­'JÚÁ\0U\nƒ€@Üƒğ\rÁ×Tˆ@È*¢DÄpN¡÷é6cù.+Dº*FœS˜&„ÚL¶}<'’o+¼PI!Ò%…™0#GI	\$‚Qù\$ÔÒGÉGĞ8ƒ2Ë\$\\Ò~9Å©	‘2LPRâ miN–U·å9D`… Ha<'&er¡,b>ºIzÑDä|°S¡‚„Z(2‰×,±àÛJédàBzƒFÕOA÷%X`¦§”Ø";break;case"ko":$g="ìE©©dHÚ•L@¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJĞĞøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØVAá*zc±*ŠD‘ú\r‰ÖŠL‰´ƒ­=qv¡kGZá)ZZgĞ²ä–\\;ËK’	XìM*dP‡Z\nFƒ&Rµõ(‚ °·©e1ìvASb€+aNÄÂ’¦s«Ñ0§Z½qO\"0V¼&7‘¯¤#ÊŞaÚ˜JÜ‘\n¾\rÉX!Nµf%<v%ñ•§bŸ¤ëB@‘X”Ú1ÛNƒrYû§’ëU*eÉÛ’^ê”J;P‹\rö›‚ÚÎùrBe\0u–DC\\:iyÔ[±\$ìÖ'QjÇ”	ØN‰rgAğŒƒ•¯Re9˜”Œú22E‚şN–‡kÆ#+`7\ràPH…¡ g †¯Yd@„é•EBbP.N!ÖP’‰8³®r‚.D!@vo¡ÖTÆeã¦Y¯„nv1Ë±+DÌiz¯«‘e'ÊbF¬LÇ\\ĞÊ–‘pKLs+G?/„tˆ-KbDLŠùX9çS¢çÑÖ[Ò>‹cÍD<‹¡hÚ6…£ Èé‘¥‚´ı?ƒ`è9K©dïÁĞ‚ÍH“dä»¾ÙÖH&b¦)È1\r/%€] (TQ?JñF”mSÖ(j]µå|vŒI\nË¥Sc~Ó¡\rKVÖ¨7%ÌœÅ1YFFYéı¥WP“Qlİöê¾LX6?\\Ä@Pš0c Ê9†9ãxå£Àà4C(Ég‡ƒ@4c£0z\r è8Ax^;æpÂ2\r£Hİ‡…Ø°ÎŒ£vx<aÃpæ4ùğDƒä3Œ£¦N/ŒC`Â7\ra|\$£€Ø2¹èèã|×„èè4\rñ€è7ì£Ö2„Héˆáãn§¯-¬Ó8Ï*-fK§tcnŠ@ Ì³dó:*M,²¼'as‚KÜ7K\"<³·tqØâ\$ÉÏĞ éš¥OW\ncÓ'YJ^#ÉÔY—ˆ·Š_×v~S1ø·xB€)Š‘E[W¿||PB-eb¶ó—´k	åUÑ¥`¦©ûï^”Œhu--²\\…'>â¥]ñ×à]Şº,ã¨@1êa\0ë­\rù˜@Èƒià€)…˜0ik`€;–D‚£‡jhÀ4µ–,ÜÛ”A¼6‚\0æÃÃ³82h”øš4Øj…\0œvÎtŞ¢DLhÔ°± 	|K;w¬·J¡4„‚¦\$æ'„,+pNä¶ˆã)Ä‰\" ıÀ»…ı°h0„#Æ\"ƒL\rkm09´†ØşÃ aaÍ 4˜ºÒZˆe^\"\$8¤£E)bvdÙÙ©#@PSŠlØ3Æó9…™6_Bt’Ÿb<-„£1° N\"÷xg…„2pÒ82‚Õ˜laŒ6ÆÁEğ00†ÀêÜ[em!¤3–â\nFMÀ6‡VpfÀ€*…@ŒAÀ g¡U†àÎPT‰bt•8÷>šÄÉˆj8¼—²úŒ×J^Ltƒ“aØNÓ7¡6UÊÓêj„DBĞ@GREìIE\"ó©1Û<\"Dï2åx²1NæP8§Ia1ş†Hø¨#ş\r¬Y¸F’‹æRK>	8IÇAd,šf\na•­†6ªÓğµsò5@(…\0‹¦p Mfµ·–öÙHé%%ÍSh_¢UI©<ƒO\"";break;case"lt":$g="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF%!Š¡b#M&Q¼äi3šMÒÊ9ˆ—ˆ\r†SqÒ6ib¬ä‚\0Q.XbªŒ'S!¾;¹İMf›0€ìi²1¢B„@p6Wã¦ëBÎrsÏåôJ1Î‘J¦ŠÆ‘ÒíJ´ˆ#±H(¦k‚TjzR!„èaÂ¬PMD4¨e”ká¤C±”Ôe×Ö¦À¨¸Öl®‘Ì¦óo¯KÓ` tø (¤e2IóÕyvk9ÏRá¥>AÃ^Å_æ°Ò…^Rj:›Œ÷r…<v—aıÆŸ‡ÊT®®C«Ä‹•î™B®„£ @¸/Š\0Áh Î‚AğT:- Pò2¡£pŞˆZqj	#*Š®ëøæ:N²4©+¸˜•A¨h¬2 #šV†ˆ#¢®ã.â(Ø0ã\nİ!ÊH ¬°0è¯F!]/¢®ì:¢›Ë4¢J”­,²€œÁNC\nÚ…ÀLÄPÌ…œÁ46sZ	6ÍóŒÍ:MQZÒ’;+„b\$	Ğš&‡B˜¦cÍ<‹¡hÚ6…£ É'ÈJĞÖ„\"’æ±ˆj9Šc(äŞ½ÔÃŞø¾m*³&ÊÔ&—ˆb˜¤#4Cz4­²\0„0Éšö¾ÏTàÌ«\r£z_O9‹\"mN³PÎ°I ”b•i{]U¾LPÊ\rÊJ£Œ¶K ÓCãBˆÍCXó´Q‚<1[â0ş¾jIR½öPA	ƒJ”ÿ¥ğ`Î¯¥2CÛX¿¶¾ÂÜ˜Ô‘¡Îx”¿ÏÖV%I•>²7:LËTÒHæ9ê´2€Ò9;@xØ\r€Ì„C@è:Ğ^ú\\0ŒƒjµSÊ°Î¬š`ğ³\rÉHŞ7áDÎîp/ŒNCŒÂHÚÄ\\« èã|Ç„hè4=UÎÚ“áã£S%jÊ’	ÊúÂÄ1CN¯,\r‚„/ë\"-ˆ]£˜ĞŠ@ Ã±\$»Æ„Bt¤‚¶^§Ë3:V”?éj^±##Ğ©­,:ƒ‚ÎĞ¯mÂm…hM4¾[éÒH(d®Èê3„€)Š”î>7Oá\0¦:¥}[ŞyVo˜Çv£Z03‹„’š¦¾šúŠÃ2±l cù\\30éw°LzH,ã¨@1Ø\0êÄ\rú'¸‚ÊÃÎ\n!0†’Æ_Š˜ ÁQÉ¬JƒVnÅğ‡#˜C2¨\$‰Y&s\n¦K*úJ©]% r^DHÑG„Pr”tC¨kFè’s²Ñª®oÆÀŒ dşŸ£ö\rIo¡æ4_ËY%æyı²_[zÏ5ít2’Dò\\Ã9vL),E£bh† ™NlÂ‘\"T`4f>H¢.<8¼ËĞ\"XS‹4D†}¤*%èBÂÓ O¬)NqñÂĞÒ›d7IÒ>”ø~Òla€†0Ö›ÿÄ°:­ø˜²I¨f&:Ø·Ãi.nÁ‰‡†à@B F à@Æz•‘\$t—‘‚4G\nb2Kò:›eÜ%42øšöøHÃy9†À×\$56G‹e#l ’Ë‰Dˆ¾+á©š)6AÖ%<Õ€¨ÈaÄZ!ÅX¯–Œ'|ñSŒÀ€”ğÛX‰tWOR|Æe’¸\nL‹T\\yNpÉËĞ˜ÿ_gT]ÿ,–`´\ryAR6L*H…&L`)&v`¯IŠ”±†2Ì¥ÂY\"\\3È\"’ˆ\"gJëb§é1¢¸¼³¡›%™Ê‡0ËFÛ4ÛğšP—\"ˆñ£0@";break;case"nl":$g="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ĞÂn2†X!ÀØo0™¦áp(ša<M§Sl¨Şe2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9©²gÎF“9¤İ6ˆğ,šFl³MSR¡„Ãq¹˜GSI®äeÁa\$#ÚO7›#–1”ñD9×cª¡Î±Z”Q¤·èÊdÏañ8Xm(Ë23[,5\\6e*<œ\$˜y5âf\n\"Pç™[¬|È\n*Bä ¢¸ÂiÓ#–	œX;Ãp×3y¶k2‚‰‘ù.üŠd4-Z¬°äs7_ ¢¹„Æh:é§.9\$Ü—Œì›˜\rH¢ü7#ğØã‰Êğê;ª)[æ¥#ò•0¢E·cËv7\ràPH…¡ g† P´Ÿ¡ƒrÒ;!«ø)­I[M+-ĞäÃ#èÍB\\€\"…£k¸ŠÉ:.±NÈä89	úÂ 7îhÔ¡@B²…,qt42È²;-¬I’i¥3Œ4Šœ`9S*È\rÃ¨\$	Ğš&‡B˜¦ƒ\$Š6…¢ØÕCBëê\rÊ˜æŒ±òßƒ å¡³x*½0Œ(/@Îb˜¤#'Ñh\\KOxè:£’„ËRv!¡\0Ş8+£,šÓƒ¥<™ºI\"„0Œã\"j)¤ŒÊH#Hˆ>Ñü`Û!(úô*Âxçg*3r—·I @¹×…u^AĞ‚Ü•%–õP#µâ­Î˜ËQ©ªnòÖC€Ão¿Oã*<ƒ_U‡ƒ\nÓÁèDüƒ€t…ã¾4&#jÜ†…ËPÎ¦y#.ê+^%Cä˜¾1(CpÖÂHÚ—®ğÜ:xÂ3¶‚4\réKÕh(d\"GR2ßŸ¦«ˆË3\nóiŞ«bX(	†¬Ùéæû°£ıY\n¨S'	Ó‡·³b\$m3\n:Uun³©¨ 'Šb Z2(xr¥x:Jb¾»K5ŞÛéÚàƒ)O“WH¤ß¿Ômºªkb3Ö*¼š‹#z\n1±ãª\\˜%8pÄ¶˜¢&\rŠÌÆ8pŒ*lJÚ£ÆºxÌ¦'´xå7¦¢L%1É®3mèúp:9\$¾Æ{Ñ½R¤§d³òs¶ºXÕ9õ¨(Ğ0İQ µÓd¨©é}—6–ƒG]‹15	áÀ9¬t]\0à*8P™+\"FùøS~ä‹ÀHˆeÇÄŸ/²~–HhwzÈÜˆ“ÒÏAÚ¯q¾&„\"ÏJœ*…„Ô!©`Ø\nÃY\$*ìÊ¬@îÚÍ¹İƒ!”…8Èv“˜F~Ë@:’RŒTJ(U\nƒƒˆéOB&¨iõœJHàÃï 9·¯ŸT>6Ír1FHÌ #dt’ìG\\b,ÊJÖ’C0yA3.BfqÂ‘uFî#£³Øb¢ #ÌØ)ÍÕÑ=&Q²ãnT!jMx½s€RÇ‡”ñ;H(¢Ğ-D±Í†JúHüh#æü°›åDúI uR¦‘LG²VqÂ#²#ÁŒ€©pŠÂª“EÌè8MHŠÈZÄrn%µ(óK¸\n\nRí|Tä¹3";break;case"pl":$g="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„İ…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I±Àë2‚ŒFSĞ€ôm4ÇD(íXèa±›&Â\0Q)ˆ™€šãG“<äzFó™êî :ÌO4˜”Èn2™åv\\ë\ne¿Âƒ¡B§UâW‚\nÉÒ·5'ˆòt£ãæ³(œu6æ&3Ö@D0Ûô‚\rá†2T2Î©ÓKY¦€rßáôQÊoÜVQ3JyLšóyÈUÅl\rû)(‘Æ”›ÁE©ñ¼Îu5F\r7™„à0­ºŞüh(Ôş	ÏZ99/(È‰Œ‰0Â5€HKŒP˜è<ÂĞÄ4a–c¸·¯IhÁpHEAˆ)C«h5C8È=!ê0Ø¡¯B›Ê:?èÒ´€R\0<Ãrê{h˜¼!jz4°Â2#¸ÆÚ¹	ìŠ\"\ròÄhú%&!\nŞ6cJö„¤Q ®<iJ<§Â#,¤0Êp7Î\$æÎÎ³¼¨šÏs„å%Pí)¤I²°@	¢ht)Š`PÈ\r¡p¶9TºÀÉÃ\nbK\rğØíEìÂhóMãcí ‰Èxà¡Ã#â; JpÖˆ¦)Áp@)Öñ\0Äü(T4üÆÏ(Ú:ƒ\nş…òSØÔV/³×?É£jPM§èzm7§£:<  ˆ0@7ŒSèëu#0Ò¡€(&Âœ ×—Tú0…‹3êûÀÙ3l[IjmZŒµ¼²4×IRiT#Ã(AY2Cº<´Üõ1y%!,`ĞøOÁ\0Î”Ä\r“\"•à9@ÃcŠÑÁèD4ƒ àáxï¡…ÒºĞÈAsÊ3…ã€ØŒ£Â7cM²„AŞ9ã(éãª7\ra|úHzr\\ˆHPxŒ!ò…9ctÌ;3¨`«ƒZƒblb–(<RÔ-‰È@Ê²ìÊ>Ú˜¥Ü®È,ÜXŞËLÇ2b—ÍöÄ%éŠf´Àó;v4[,ÏÌ¥¯Ó²Ã,1Œ\rİ8@*J¯]£¥PÂ‹¸àÈ*lÈÖÁ·–ÊV§Iâ}»vix10ã„@¹Ò»§K+<À³8=\$ığÈÑ%uOOcCj¶ÂİãL©Ù*•õ}@Ø:ŒK7¶&^éf-AèŒƒ0i>ät1‡Õ^øWaOu4âF½Â˜Q	à˜Â\nYC¹&0 /Pä«ÖÂ·s%”#@ BÌÊIà6¤ĞärØù.&ÁI‡(dğ0‚1Ì:‘ôaÜ=‡î!C0Ö	ğiK}ÚÄ’Šfˆ¥ß¾¢lxzAq%YEpÈËI´c1Im¹Ç~¢c\rKÜƒŸ’Ş\\SQôd²–rÒíOì{~Ş¡°ÜVa7oÍ†ìsƒ<‡2&&á3ÂV\"9Ãç\0ÈûÊQ1•'§ÚCå\nˆBî.%D€)ÈƒV•HFRCèĞ‘Ğla¬ª‘óòÇ¡ºKíô“6ï\"¡ÁI&Á-0ÅBA‰#x+ëÜ“˜Â¾[ÈrÙcP”*…@ŒAÁ6•rÖ%–ø¹ÛJ?Š’ºqÊØµè†³©<D;+#3-ó˜•0iÓ0g«ë6Ä€:¥ƒâë˜ZMDtÆ?‡PYc¹DMA50†Ìx	èl®”1Ÿ(xµc‘a™	ôÈÆÎtÑ‘QÉ{·è*ÙJx,.`?R!×éÚ[&Ö dÔÍá¯3Ô‡‘ª‚€Ê\ntmÚ:t!>t÷œˆrvÏ”B•á}sEÂ§aQWõd„@ë4E'PÙ\"„™ç\rËÙ…FR]‹‡zºAƒXi-h¸@ÂşMM}Z©	é”ÈËdùÈl8\0";break;case"pt":$g="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀŞs9°Õ§c)°@e7&‚2f4˜ÍSIÈŞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8;OF“x(Şr4™Í&ã	²+Z“×a0#¡„Å%0œç\0Q\$ÉdŠ§9`(¡gŒ'lAÔæeg‚%æã	7HV¦S>ô\nªLªÑ“U\nâi¯gCL{:d2Ì\rÆšFtá%ŒN†“a¦H9[×FØ<|D0İdâ	ùÈÂ\n!˜v°Q\n×B´YJF]€(e7ñ–y3QuŠoçK<WÃØdw{İÿ´§(4sÈ¦ïš€¬íòX¢oÃ'\rì`@í­JòÊŒ\0Ä<¡ L!	BŒà<ÃCrÊ¡xHÄA‹›c«œà#ªÛ á\0Ø7Œkh'M‚Øà¼ÃhÒ„B	†S«@Sî6£ÉB(Z78Ë ¤«ø²‰,ÊšÈ#r¸ã?iS #x“¥)ZBĞŒÊŞ3©DÄÚ§Î³¹â@	¢ht)Š`PÈ2ãhÚ‹c\r0‹²2K\$Ép*ÚCcÇGIS€œ ñôw¤(¨7i@@!ŠbŒ-c²„ŞÍaÂ•¥©zÎ6£bX²+Jv”+ôuBŒHåO:H Æğ¢cª&ò¥@Í3Œ Ê’ Lâê–¹#JÂÏ¾ö¶<	­’#¬CÆ%¶\0äø2óœ/Ö\0Ò˜F²áVÕí Âœ	«ÍŒ¯#˜î³Í×\"jîÁ\0x‚\rxÌ„C@è:Ğ^øè\\éSÈ8\\³ŒázQ“Àç%…áŠ–ã(éŠãt7\ra|\$£„â?à^0‡Ìğ@ñ'ğ‹Ù£Œ5-X:#´ê{`'µˆ44ÊæU\"‰ÏÃ\$‚2³R”ZŒè \$\nj<„Y,èP¨):¼Ó/ãš<Ù¤ƒbp(ÅÏåüø¨*‹°2®zê6<~Úq\nâ¿Î–İl@ÂÉX‚ œ\nx¦*2Oen’23¹Ãsa†»c ê…¥ÙzxŸ##xêóã!°amÚÃk £xÜ˜ñPÃ}XœØ,öÈ*zÈçÃ{¥KH@)Š\"cŞ2@#\n›J{¨»^¡±)²ÇÓ9<êÛ{dMxËéj2ÿ|tÉÇàƒŠ‚¬KE¡ú„ĞŞşÉ‰…jËŒó@»ßÁ'1ÛŸ’H¯Héh%I!˜™Ö–C•!+4†^ÍQŞEÈäÂ„xVeWkÁoÁº C¸^Ae\nf,µ†xTK!Ë-o°š’ãtM’kó-iò2™“ıM­=²Dø¢ã\r€¬1›Ô`	 zZ¡Ì7†%ŞìK\n3%¡À–Hn]Aj3*oq£˜æ ]à \n¡P#ĞpšY\rÁœœ!x üUc‡m‰®)Ètg_)g.±b‘¢8k™[y@©!%<\$A	ÑwW@*?°ò ’Jïdİ?et¾ŒÙKŞœª|Íñ#&õœ4x-¬k¤\rKrXç\nj-€(a‹¥,QK(LzR\nM'¦Q£<\"9òû¿7dx\n•JæI‘•–ÏRAìQÒp„†C ŒÒ`E\\’HÂ³ÇÌaBœE¦¡I:c:[ì¡/RJ7ş{HsFM~\n`MÀ";break;case"pt-br":$g="E9jÌÊg:œãğP”\\33AADæŒŞ aªDyÌæÃVŒ¦Á”Üv4˜NB¼¨âu4âàQPÂm0›slği6ÅÌ’Ó”¾cŒˆ§2ĞƒE˜L„è¬\\Ë?€™f‡c	èÒoÎF“9¤Üa6Dê²ZÁĞÊm&)„ç4‰&JüàU9ÊE€Ìa™JÎ°aÖp 2]­–ãt}je9Ò®àª}¤jÛ\r5™¡PÓÌ™¦k1¦‡‘ÅñgXÁ]L°£˜(ˆa¹ID³‘„C0ê¬à¢›k_Œº QÊoİ,|bfå½\"ß–+ùÏh¡ÛŠrcGŠní`ŠvŠä¯×:ãõ.•–…!£ @1+pÀP\"ÜŞ,À7, j„œ(°hPÆ„°IzĞ—·a\0Ø7Œk@'NSî£JÜÎe:ªõ\$c(Æ¯¬ã\"…©ÀÒ´ˆƒ+8¯‚À\$²­ØÓ#r®Çi:SA	,|’\$ÉC’™ÀğŞ0ÇìÌ²”¨lØÂ3¬N0\$Bhš\nb˜2xÚ6…âØÃ=Œ\"ìh6FÑÂTÈKmèØíFƒ’P¡ÇOœ–šãZLb˜¤#0ìrf=òÒV‹ŒËÚ:‰R¾©¿iºL·&”s#­è(ê1ºmpÂšH)àÌ.I[Ú1Gñs’É2H2<a²ìÛ×e¢Ë`á%Øáb6Â°ìJJøC-l0ÒjDÈ[Ğ‚dš/uxÒÖD±Š×MS•Òh&®ËrV8.Ã˜î±KÃÅ§nŒp@\\Eº3¡Ğ:ƒ€t…ã¾\$91lœ9ËÎ¤ØàğÊqÀ^.)PÎ2˜H¾1U#pÖÂHÚ8P\rÓàã|ÍÊw<yèÃIS#£`9'sàš\"–ˆĞĞªùp‰½ŒuÀÈÌXúLË3\0 \$\n²89.ZÀ@)aJJ€´+àæ\rÉŠFš\n#ªr:WMVzŸ(½½æhîï*Ù\\/“.Â%vË\n0±Õ}¼¥¦‚€)Š”#‚Õ'¶î(ÜÕ`NÈ:W.¹i)ÚX:„†l·v,„—”&;ğ@1ãsX„8·u£ÊBÈßØD£sš\rîOkbá\0¦(‰Œ4oKA\0Œ*l)Ì lz4\\Ã!K‚\rE7i£úï!I-;‹KRö'ƒzùv~.æÿê]2’KC^oÙu†”JšiV-ªÕnŸã´GI£Æv‰r‘pàXÉB€dæe ‡Pàd] t\r’²Â´z¡ò…\$­¿»Öğ›´,<Ox°2Pƒ<(\r‡ÔágÎ’İ|3‹à3˜\$ª‹•¨aÌ¡ø¥ÖŠÖİŒKl°@ã Ø\nÃD\0€‘¦ºÃxb[¤².ƒ\n¾)%†`µ“@ŒõÙé‹hÅÑÿ‚\0ª0-mŞÈpM¬\r~ŠeÀ¶H› _Ü3/€±E37HÁ5„‘B »½Pk€›ER‚lÁå9£eºÕÁğHGIT®åšŠ÷€Æ*·…;£\"eÌöQK5îJ—h^Ä©Ê2ÊrÆºPå\0°Ç›¡ÌÎyÅ1Â\" q\n‰Ò	şÙNª\"›»;Ñ”CTjËpd8è£µı#L2|&!¸¡1g32tº›Ùù'ß\\İGaÍõà(Tì";break;case"ro":$g="Ed&N†‘Àäe1šNcğP”\\33`¢qÔ@a6ÁN§HØ†®7Øˆ3‘ŒÂ 3`&“)Èêl‚™bRÓ´´\\\n#J“2ÉtÀÚa<c&!¶ ˆ§2|Üƒ“ÊerÑº,e œÎ’9¹œŞlÎF“9¤Üa°0ÑÆáˆÂz“™&FC	ÒeV‰MÇAĞÂb2›³q`(™B·ˆ8#9–q_7œåI¸%êãfNFÙĞŞaƒà„‹±»%¥Íç59è‚äj“Ö!U´Ü¨i8f —,ÌØi¸g¬qC®rH\n\"]dò»ís`d&\r0}tÊLr0˜îĞpVÜám³hE#+!6e0‚ˆæSy´Êt±ã°õ¬qÈiáq=İ]é§~à¬@P Ğ+ïH’½I7Œíd8%©øÜ2¯pRÔÓo‹¨7\rã¬Œ\0Şí=àLAD0Ò#*'A jœhBFÁË\nÆ½.@P¦±/Îã£ŒPÇ/Lp¦À¡²ß\nz¿4l´9\rãpÒ‘nBd6=\"„(ø T9¥¯@õ5iÜÚ‹¯Ê‚ìî¬rC ¥Šøø(HRF¥D#œ2…3è8\\ˆ(°Í?/³Ê™Dô2Æ9¬CJnì¸ P\$Bhš\nb˜2pÚ6…ÂØóW\"ì…(D’œÂ6>˜äš@R\0»‚¦)ËèŞ5ÂœÈ#ü%=O¬ØÂ§EMV¾h°æ:Œc\\›Éì’ôÿ&O€Ê1©b%A¥0zÅ/.Í³œ—¦w4¼‚6#Ààé®¡`A.÷y¾Ìp`Ğ2MÛ1©º*÷4Mâ6ÿ8ªÄ‰(°áLèè=¶®BhÂúH.V9ëB¬_è=R‰8ĞƒŒÁèD4ƒ àáxï£…Ê\"	ArÄ3…ğ¦¢<4¬”º„Kë@Æ™ğ¾1LƒpÖÂHÚ80Oröã|¥aÜ:\r|BÏnC\r‘e/…­	¯x’¯‘´£\$Ç\"¹ì‹ÃJşÿPrò4z§\rw[ã„ˆºĞaB–ğN3ZŸ¨(ËxÃÖ9óRõœÑ*4‚ê³v†T5,C\r²Ôå1pÂ5_€)ŠœTƒ¤éı\n”’íl§è#sBmrê™xîä‘¬vÎ>ìnmhÇ.¥#;5İ2ƒ.ƒ»CJjÔv P³„	2Ø:íüB“ÙØ(¦Ba(]\0Æ’pŒ\rÈ…e‡\"ø~	B\\#)±]“`…È9e+G`ê;´¹èAÍ”A€Ë‚\"éöº„8~!)kƒ&Î‚—\nÔ|v„µÎU|}Ò’oL.%o—²<H±<SOÉú€ÂMJ¨o ¥Æ˜Ä\\±ŒÈp.-ºrüØB-Õ[F Ù\" 'oÕ.2¬ Ã,@AÇ¤)ÄòÌã4hPg1è¬£L›c)Ñ;f4ÅBÂø[°i%\$˜Ú(HêIáƒQŠ9HHƒï\"Ş¼u\$–Ä°†|`+fü1†²bå±hQ(=3’èW¤´ŠKë\\œ@0Ú`ù€À€*…@ŒAÁ£\$2\$7rn‰Ã“¨Í‡E2&QºYS2=wEÈÉ¹#…ñ6%¤±Ë™˜‹æ”ÈÌU:.C3¨Î È™R+'á…iU\nœÔ™%-ÊsK9·H»À8Kávâ¬h B®XÈ²F0…Ù7@e”³€¢^@Éú(‘Ş\"u\"ÙéDòmC¦ÔLˆi#ªFx¾põEË©/Vsz8£Ø—Sr\n«ù\"&©¨mË‘®¡­wKüäBòpáŸcñNX=,";break;case"ru":$g="ĞI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hĞX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ğ&‚æ	­èp¤D6}EÕjòÙe>€œN¤Sñh€Js!QÚ\n*T’]\$´Ègr5„ö9&‚´Q4):\n1… ®KüIšIĞ·hı‚«IJ–6HãB?!¯Àš([ö&	†æäsD5AWÊê‹¬ÅQcCXMe”Å1v¨£6PeÌ×:¾ÏC¯Õ¼Æši7\nìÒµå.,Vû’’Ô»´×ù:„ã,±[•ÓµŒ´7üË‘Üá»>Âæ2S¦jbF_#\$¢@ã/©šTõ:êq¢G£%t†9Òg¨BhCªk\n¬è>PŠ„›ˆÉ&†¹4'\0ÂBù@*,\\#%Ïš\n[’\räG¥OšD©%¼ıHqi?Â’J€.Î+\ró\0Ô(ÊPÀH:¸ÎÂÌŒ£r3s.¥‰~È·a(ÈÍ'I¨7NÔ9Íæƒ7;Gh8<Œ¨ÀÜ7A j£2\\4¦6’ô†GOK±x•ELqkG‚‡37Ry6¦©é¡?²ºˆíShléÄˆÉZµ»Õ?\$¤<ŒÊÕ9 MRÈ+jÇ\$(ELİšú†í)pk~ş9L±j¼ª²F¤d*¤•\$¬3¬(–‚|_-ÓÌÖÀ8Jy|&…º°ÛöÍÄÜ\\ªòñ:FeÚ^•¼åÜ/•ğ„\\×İÕ¡¥â¦U0ãr@¿æN\nI9ŒEå\n2–rœ§ÂÚîYäâëj°¶êÅB\rƒ å,ê\"Ï•ª®„É¡®+cL2t:±b˜¤#4ë´,ì¡rU^à×&€ı-1äA¥HQh’+²¹ (+UÑ\\G*jƒ5rüÙ\$ˆ*å¡I:‚í	R>ú<Pë4ÑD^Ò¨‘ÆŒ9¦ [n]oYíU Hƒ»¥[z]‰êbñÜòıÏ,ğND¥KÊg-1nYÛ±q¥¶6…ÏÚu\$ ¸\"ìüh*Œºím±ƒs&¸*8š0c Ê9‡ˆ9ãxå7Œ£Àà4C(É§ƒ@4z£0z\r è8Ax^;ıpÂ2\r£Hİã…ŞpÎŒ£wè<xÃpæ4ÿ°D aAœ2‡G¾Ãl!¸5‚ |Chp\r”6¿PèxaÅ¸9‚*@oMáĞ7ÁàÂÃ( \r!Ñä¼pÛà±r#f˜é’sªVÎÉ—#Fu½¥rboÜéÙ\\%Ï²…Ñ\rFŒ7A¤øš;²VíC (­ôí†h (-à¤¹ bJcÓ(mg³”òBRÛ»#\$'ÕØ¢XOË‡‡.Å7Ä6z1øq±|İh\"‚´*­8h\n6lZĞÚ[j‡q¸’ÚQJp>‰l®º(†mÄS\r@'…0¨NI C¦B(é#š£#q2G¢¬]¤Äš”+F@ÖÚLHAû@*êVJ“~ïÉj*&Å¢H2sL.Å4äô¢ãN³—D¨ÈÀ²Ã¨ p,X\$ßX {Aˆ4†p@ÂˆL˜4Á0@ƒKÚÁP(N Ü›ÃLyĞ²Î°äÃixáÙø‘.KWY'%\$Å0‘`\\¨:jL¦X6eòÓ¡L··õèOÌ:Ä¢ç*‡£VyÔòMw\nÆšbeDŒ‹=(ó^l†€ÃAƒy!È4Ï' ì\$›¡À2\0@i¨!††Væ¶D*ø‰Œ½U\n¤€\\¤u‘DàEEBXÎÂ8GH•Ø˜B@PS¦ï¸3©ÃGUÖ=o4…*º¾PŒ­BGè­ÕEæZĞIÚ,«êŒÕøšWêì`5ıŞØ)TrœDÕO6\"„“;ÀÛ=,ÖA³.˜İFé‰ı(á\r™ÀVàÊj‰‘BÏÇ¾‰ s.2'¢ÖK½™&Vn©¢B§l)\r¡Õâ‚\0Å\n_p \n¡P#Ğp¨c„U°¹	†F|É‚SVñZ8Yè|“Pµ^7X§İJ]½faE¡[-xîºÙ¼÷j²Ê%Ğ.ûJ†Eü³B¤	Q<Èr¸¸ÙD´œ¬O®¦©\0ˆb‚mÓÁäŒŸ3ÂmË\rÜ@\":“´4f[xPâ±^…AK.µƒ£hœôwkP<r¬îÅw7×:I¤\nî0IlG^ÂOGÑ˜ B¬æXûzJ»qSõÂA…oü‚2¸}ÉÀ+`\nÊÓ„6¼èSQ`	M÷æ÷ñ{2eîŸ2#’3.We`8i9ZÒ`˜cxÁŒ¬vnÚÛIêÎ4+‹²¯-òÎË\$»SéRÆÉÆäB‘’èjdF Éèºöæá «	JÄÉf»¢N\$@";break;case"sk":$g="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØŞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹IÀå0=#\0¨™¤ÎiLALUé¤Ãb¦&#¬üÖy”ˆD£	èòk&),œP9P˜jÓlóe9)”»\$ô  ›Œfó±¤Êk¦œê4j¥\\ÓY­™e%V*ûv0ä§ç3[\rR :NS‹9› ¢\$Âµ‹1¦iHË'¾˜Ì ¢¢`r±”óØb9”Şm2#Ü2Ô\nfmŞL†“¤Oo:ëuûòøH2ğMøxñ Ø˜cJˆ9¸b äØ?íº¼4¿ĞrÏBs8£IZ5¸a(ÈH èÃPä<<ÄÜ:5=£°<¿ PÜı„°\\‘˜bÀ#B~·¤Å(5ŒŒøŞŸ§¬Êñ3Ï[&%Ï` cİz¡hÚ0£àP2(Ló„Ù>Ì@Ê2<£Ğ|Ä1i\0ĞŞKê„ÃI¸@ÎÃ\nt^©°ØË-Kƒ`\\Ï#`Ó=ÌüÛP!-£ëÅ›¤3å?ŒcE#IĞ¬âRÉ\$£Óî\$Bhš\nb˜2Ãh\\-U¨ä.Ê’²ˆ28ÎØñ!Ì‚z9KÃ\$PÀ,0œŒÌsûp7iÈ@!ŠbŒ©Š˜½Š`Ì‰£«şP¢ƒÔ^Ø%2ı9Áêb¼2ŒC+üÁ4ñŒƒXê¨¿0Ş7^ÃÊğ\rÉÓopÀ(°Ä<¨‰ªnœ¶×àç`³t9[c„`0eÆ¬©&Å1ÌÎ)M–8Y´„ÿ9™D¤¦\"â¸•9•%ìæcº'A€ÓV\0x‹\$ƒ(Ì„C@è:Ğ^ú¨\\·«C \"c8^œëãÃ\$7bxDÜ#£;Ã¦ã„7\ra|\$¹fœà^0‡ÍA4İŸ¿Œ6ˆ@ö^Ì„¶Œ\rÃ¢R¶-Ë€@ÄVÛ\rĞ€œÏ)Je­0@Öò(ÆM{#w¾QNSÜ§,VóX@)ÁJSDà,ûåb¶–¥éˆÜ<õàéÔ&ÉÇYÔ?åm°-Æ{m²YæÅ±ªrS8´U¶>­«n(	â˜¨W…\nåçà–İ»ôW¡5x\$#×£éıJg±\rêÓ0¿Ã1f¤•Ş§ĞĞÌøt5ïí\0 ²|\0cOÀ€:²ÀŞ[ß’,À€)…˜ 	8'…¸`¨nCd¹{¼wŒI]ˆ­ôØ†á7\"ÌY-2ÒöÔÂaPéù²´ÆƒHzudÂ CpÂS¡ÉÂ'‰±ˆ\nVWƒ	0Î@·ºeğ]ÉL)!¢,”Ä^ÇLé8mAÍÁÁR8õC h4í¡· Sbnñä¢E¡k((‹ÔˆE‡¢(Té‹% 3Ç°Şé#ìS‘é´¢AÆx\nPõ+¢+\$Ìñ \"D=‡fXC³ŒzJt”„3ÄXkQA­Ì½RfóYÊ(,r#5 §N“ÕL7ŒGÊcxëÅÃ°\0ª0-\nHÍ¹íÓÔ,\"h¥G¨B‹çPê%EÍ£#Í¼ßœ!„ôN50áÛ¬Û‰bõN©À(W4ìT@(*2êP\nK\"#héHÅ’¨­@†&Í`Ìo\"Q¨t'L+9QJHÍä\$±i7°&LÁ\nI’E…ı¢órêŠmz¤mz5\"É9Q<DÁ¸24pS:A2°İ#iä\r¤MÏ2†×ÂĞD®MÈ—z—Ìà\n:Gı@?zp˜\0S¤à1™ È‚Y \\é\\\"´¶›¤-Gè_#ÅvüW©r.…Ø˜H™û\\ÊÃ\nU4ŞY›‰âÛ<%";break;case"sl":$g="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rğY”]0šÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†_0ÆğThÒg4Ç‘i1ĞÂb2›%â\0Q(Êz‚Š§ÕœÒ\n(§¦“h°@uº®Ğ– g››Ì’|T¦xvR)tÚ&§f›KîwS1Š¡5ÙM'»A;M†U0èuXD“Tœi¸ˆV	Ê\n&Ád[ò9”Şm2PùNß6İÊ°Z1Ú?5Ü°6|ö€Ş ¾A\\Sœ‚ğr4Íµ1OSj@ı­a8ß‚Lœƒ¤?1&# ¿ğÃÀ£RKûCÈÊŠ«`PHÁ i† P’Ï¡+¸Ö£Iât\nhÒJ÷Bbø’5‚ Ê›\rÊ4<=-@\"…£hÂÕBxÈCÈ2ºÀP¬ª5/;F7Éjğ”#`Ô»Š	ëV7(ª;2Ç±úÔË/*›ªŒŒ¿0µJ´É-!i0æïÀŒ,ØÓ|Ì†\rìÕ;GÍSî—I@Ô	@t&‰¡Ğ¦)C \\6…ÂØåKBìo¤Ë¢P:JCc•9C+†¸ÈOTäñ\"éËÔÃ	R[.b˜¤#Á²ÏÊÉ\"3#ChêÕA>0Ã[:%ëËÒ0ºËøæ8TÅ\n=f±NØ@=Mš0ºÁ©\"Lãã8Ş„°Ê´Q¦ê2¡\rm]r¼¯hÊüº+c²¶ö>V{R€¥õjÒõ*• 4Œis€Ú 6(àÚcº5/\r\"Iân4 £0z\r è8Ax^;åtŒèª\\á{\r™Ü92€^V-èÎäãâøÅ-a|\$£€Ø2¹pèã|Èaø41U‹¿(‰\"2Qò¡§%â\n=1”û‹*U†³O ‰,ú21µïm¦â€(B£©3â;\rò°ß€¦)šj3íEÆp’³4Ï«§%??#L_0Ü=t½gµßÅ!PR9Ù¨*r»ôó»Û•Ğ)Š•Èµ±\rLüÆ<rAwí[º?N¾é§JÂ#Òe|Èv,,ã¨@1¡kş”7ÈÁn1+á\0¦(‰\0ÌÕ MJn#\n›âÅ¯Œ\n¯ËÒ9ÍI\\ó¿OäüÜO@æBİKù9.`˜¢¤äƒt?g\$¤'àì“ AšbåÜÛ“€äO˜A/zH4-¾È9©ilıª’§¬§Èt\r¦–v–KÂ›N(¢ÃÀ—ñ(JÁÔ5-²şuYF\r¨¡ƒ†àÏ\r66P<³²XO”Ùè3åÜ)Ÿ–šQ’âîN§æ¬ÀHÙ†‹	 ³'ø¸t`i‘‰É‘Dèbã9É\r)æ5Ew&ŸbÔpbçñA€ †rƒ`+^\$ì“pìÅÊÙ>oıv#VŸ#V²(´Cp@B F àÂ†àÆb‹g3N‘.”üd<z‰ä*ÊG9\r“L¨‚ä”1Ç0+I¯ IÍ?Ê™hK¥¼®òœÅËè2E–ù<áe–RÎZOM”˜<€¦¡—8<AH´†jƒ™¡AÖ	£8¯¤b4]ÅĞ™­Âg\"Ö™,3ª¾YOI,09D-\"\$djkcØ’…Ğ&¬FˆŸ5’ÊU z-J˜Ì&‰K6˜Hl=,2ÌNsKd!„²@C`INÜËƒr‡Å\nèx8FzZ\rXhARgš´•Eƒ(ŠÑ´’‡\0";break;case"sr":$g="ĞJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãğP”\\33`¦‚†h¦¡ĞE¤¢¾†Cš©\\fÑLJâ°¦‚şe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍĞñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAíkø¼\nŸ6_I&…ÄN¹~]É3%¼&°h,k+\n²HˆÆD—RIVowƒÉ”Ù>yšg—©®Å	³4%¹ìœ´‚Uµ˜úÆBâ ´Zà5ûÅŠÉW£­i0IôÃA0œ®-yÛî®#ÕÖæmÖG\\b¯½	'hiàğE•öÆ¼‡IS%Öï‡¯Æ#X‚sÜhÈHI¦JsàåNªòX\$ŠS¬·¤…Üh’H’¯ìâÜÂ'Á¢í)¨#Løš\nRœ¨0¨Òâ’ğRrÈBï’ú¯§*ê{/Ñ‰ ¢;ê[w¸èèÈ‚2Q¢„²\"¢¦%„‘%H©ÂÀŞ¤šH¹A jœ¸­qj1Fl4%°ªY¶Q!?\r©¬iÌ°ñ\r‚fhÎí\\^’'*ƒ É9L\"HJ ¡s˜·jHO6JPˆ¨\nŒ\"ô©k±:©<NĞšz`Ì+ê£Ã\$ÑlĞß§ôS¼hÑ­zòº9©ââ AtŸT¢õZj±—uukX§HY^R‹ik]Uy_*ö…F-í‚kZÙ5Â‚'Œh	@t&‰¡Ğ¦)C È\r£h\\-7ˆò.­t\nıB:µLÛ\\&…¨6ƒ’H“PªÅG¶P\\©¦P¼\0¤AÁ\0†)ŠB3PÒ•tÄ»\$ëZ×Zí#ö¬ÈI	8ˆª×	\")ó”ÌFÍ¾­m=\\.3HŠ\"Ğs[}•ë0úØëú9HŒü‡-s•a\":JoÚË¤ã&•¸XæG‚oYj7ÖF©-j\"Ç‡@.R”º%´ú¥¨BhÂ9ƒ(ä˜æ;ã”†2€Ò9·X@!\0ÑÂÁèD4ƒ àáxïË…ÃÈ6#vìo£8^2İñºÃ˜Ò7ô¡@:#Î2œp¾1\rƒÜ5„Ağ’6`Ê6ôƒ xŒ!ó€9„ è4\ròè7ù£Ö2„Hé¼nÃouâ­lZÆÆÍ­ºÚßO\n&—/Í®1 /°h›¡\0 \$\n\ngÍ\\}–¦M[i»=øÚ&ş|\nù˜,fÕYHÚR˜2ì\$CÆNÑ*CDª@·è¯\n¡” ŒØÒ’ Ø1II†¼à©ÄÆÁ¡)Û~Á<)…F€ùÉš®fÈÍj¯²!‰K_d/í&“4DiWÑÉ…I×•şKOÙ»bå8^NaYä<O¬Š\0x^}Hi…9/,¡ŞA\0cw@€:¼Şæ‰A¤3‚\0¦B` Á¥á\0ì\\HF\nåİ\$0ÒğëÛ{Qè9ğÚH›°vsì\"”sH‘P((ˆ¿3)%\rä–GÅš#•`ôŸ\$²Tã–†«MšM^¥ı“cÂ4O!0½¶›ØËÜPa’@€7=@àƒLxNÍæ=8Ø an®¼4™š]Àe-d™„.N(óx¢¢#r¤åaÜ\"É\n‚T¿‚œÂs¡pÍØQ7ÄÄæ=MµlL‰kjD‹ÚM¡Ã0©Ò?kÒ^RãL¬©Y”\$ĞPµŠEWÒl¢U¦+ºV!”˜9´>vÁå¶ØleƒQu9ÎDO0I£JU1ÙP\nÑñìĞêİ\0b{tP¨h81½æP•DO•ó±¶’3Dåİ\0jbª0ú%G¥á¤BõN{“*¬~Û)5>9êl ÊD/4ñBR*‚mNÁäÁU¼“ê\$RAKs)¨ä·:ˆpĞˆ`-èÅ5“4ÜŒÙz]maŠ66mr1'‰\"Øc¬\$•&t\$VÙ^2ñ¡ø…j¡1yTpİş\$£/+ZIÖŞ­#ÔŸ-Y|g ]¤Ò‚˜exAº†CË\0Í,<\n\rAn¥Û}×T(MÙöc©±!«ö˜åîdà‘ò¼ë<\nzÂĞ•a;‘„€";break;case"ta":$g="àW* øiÀ¯FÁ\\Hd_†«•Ğô+ÁBQpÌÌ 9‚¢Ğt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆÁÕàôÉ¾&{,Ÿ™M§¡äS_¶RjØİéÓ^êÊ8<·ZÔ+±õáe~`Š€- uôLš­TÂÈìÕõ&ş÷‰¤R²œ	MºûHI@ˆbÍÒ·õ¬öœÆ2x:MÇ3I¼İG€oe[û‚ßaØÅá\\´JQ‘øa¥r™^)\\õjrôù•ÎqÈ®P\" ˆ­%r*W@h‹¦„)ª¬ø²­\0¡\nù€5Œ6”8‰ªÚ©r¬œ61aË‘ªB˜ºJ²`F«ë´XFÉğP)ƒÒ7ìúÆ– J¬é¸hfÊ4éJøÜĞšRøGªæì¸îºÑÇÂ8Ê7£,‚Ï+ğJ#(´Ë|ØK0**>{Ø¬°|*Äô«A³Ô—\n£˜Ê9HË„O¸ëê\nºÎs‚¿ÎÍÒYI­ñä	¹²\\{CJŒœúÒĞÌ¿/“´o4¾«t½©T';?sôÖİ„£\"•ÔÒˆ\\×mlÚØ´ó³äˆÃ‘Àò2¤#pŞ¨^v˜cÆ…u‹ Êœ°Ô\nzŞîUSìO@‘½ƒ/I…ú¿GqìğÄÇ,š0C±=³+>}¥©·Ëí/;‰L•Ë­ñ8´7\$ş>°l­Vò¥f¼ÜÏë	;9Îmè×•Ñ\rMZÎö4Ga¯®Hş£uÒ{‚)Ø:#„¶1Ò\"Æ©M;¿‹Œ·b*Ğ0]_åØ·˜ªÙ¢S›N\rµÙÕh².:¥§Q&dÈ¦Ù]\"WRØåè\$	Ğš&‡B˜¦ƒ ^6¡x¶<îƒÈºâBíTÇ©rm~2Wò“{\\PèÙ İê±h«[ÏŒQĞãµD¯Œ¤ö³¸	´\\b˜¤#)\r;\r,iÒN åi­’)}@õÜ·/^;}5Ï±^@DÃëu/FU«\"5L`Èò©ÒœœKÖ<ktõ|,c~òÓtLÊÕşj©/E‰L\\Èõqo@j£‹xÕ¡\\©Âöş«<.k¿›D)M‹áŞ¸½ğBš\\=ŒNõW\nàèT·¦Å´ĞLH.E\$Ü2tÎİáT‹	S¼v}ÑÊƒ€=™@D¼šYq©]“¼÷ÎêM˜\n	¡„9ä„,aÜ7‡%tCÀp\r!È2†H \rğ3ĞD t\0è‚ğïÁqE\r©\rC‚èjÁyâ‹'€ñCÌÁ „9tÍ‚øb\r„7°D‚I›\r†hñ@xÃ>/áÌ&Pèzº¾>†ÖA\0iÁC†ØÙ^\"™;' CƒÂxÙÑwÄ ôBwTl[à\n\n (‡Äº ³‚;GaØW”„ñ€“¦0­šÓ\"Ô‰|y/©2¶~üŸq¡UÅWÂ´Â•î8,ñ#²dåİ3ùÈ~Y.Üq˜2ğ4Ë×€°æhMôã>W÷Nc¬h¥¼x.…óv³÷Á©‰/%Jå!D‰¼™‚ÿæ\"Ÿƒ„`(ğ¦'\"•ïúOˆØ[[Ê¨_Õ:¼d‘2¡\$æŸP˜Ğ˜Ò«8Dñ*î¼³ĞÂ`ÈÌA˜Œó`ÒÃ¨r!Ğò†à@!ØetÑÉIÙúƒŞÉ:Q´l¯ŞA\0c€€ ”2Š\"b¥à€)…˜)tsØ4ÄŒ%,lWA¤ÍÃY\"ªÀrL„ÈÅSxvÛ^˜å™@Ã	FHŒ¾jíÓ\"¬ûìjõÒfºÆXæÅx°ç®½Îekz|®3~¹À0POm“¥)¿­ùñbæ4k6>¿-„èÇé;-å)ÚËIA-€UF© 0¹ @³¡‚B«‘Î3GÉS€d¦r\"?†›|cPe{N~®åşM®júS³\$²–yºDS«}kôVfXËHíNrT´p…~Ñ°íªCïÖè÷f¹æôÒº³F,6Äl_ßX,îî^ô¦½wclµX×§`•½„`uã£f~©”ãÿhMÙ,Ïl™íBŸÑgµƒ«Ş)×å\$‘¼ÒlaŒ6ÆÁæªl0†Àëq\$ m!¤3™\nğF\r5h6‡XZˆH`€*…@ŒAÀ <T²œ\$B¼°ÕªKÖ°©T*g „º²ÑÄ8Vk6á'L´üÔ×Ô…2ÊµpRW¬œºMßLÙUYˆŸæLÌrsANM÷vĞ»¢Ñ‰,Ç¯ÕÁCx›€U:ûf•`eÓ±tUét³Ñé>\"!V;Ç¥}Í8ÌÁ>¦qÃº†Y¯y],°B€ )X×M0sQ7‡²#|dì¤|Ä3	µ‚ğö^€²í1V7h3ğ‚•É£ìsÕ1£=ö}ÀÔDÓlS¶N2¼ÓªbpÂaDÊ·¯tÔüu)½388ÊÂÏk3…©ÎYo:BSmà†y°wL&ÙZ_o>¶§G„2):\"ÍÜxC(a¸2¨‘²L®aØw:Ojú1³È–|²õ”9MwÃ÷®Ÿg3ƒ6èÄÈŠj^gè›-·{h›ÑdN'-o}û†ÙDÑT×ûp¥¯&P";break;case"th":$g="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Ş\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv3¸Œc®ö•Ê‹PÇ¬«7›år\\&¨pÔÇ%:¸'µÍz}›¬+*º¦W®‡ß°‹NÙ3Y„íî‹ˆ5ysÁ¿ég¬Ä«;jŸÊrŠá=âÂô·%Âˆ@1“.:xøÆ›¯êÊ6“.\\Q4¼X×m(ÃlºvZ¬\n‚¤Ó#Æî¬É²\$±8e;.£9E‚Ï\rápüjøç ‹Pâ§®;hÕº¯z(­+/jˆ÷91\\,÷½±[E¿);¹—K|Ÿ5ĞÄV­’Ôòò\n\0™§èó©\$ \nC¨”RS”­§©›šíªÊ*>Ë¹F¬Ã¥ÂÏ¹(L>™JÊş\\IÌ{É2Ìè´@á?l¼¤Ç‰ÁqÊhT­)5	ìı3±éü,ÔµŠË¦>ˆg0¶ÈãßB.ô:áE6tbğ¥GjªfMÏm³½ÌKëúÆ‘	È“5ôò\\¨CÈÊ9CpŞ¨^uøb¬ M*ºşÆğÚ0ÁèÓ©\$ÂïŒ8•&¶Çj!IR‘y(¬Ò›Ş®»Jë’ÌvŒ!8(Qê²òAPÂvÊÑË¹¬¿±{ÛL.2³d\\%.¡B×2p2ä«¶Óág«0Wİ·‹æÊ½*ÍJ=lvòMQŒ\"Ë¶¯\"º®ÁDH\$	Ğš&‡B˜§Å\nëñ}ÕH0¹^-³ğH»+EyÍ)~<‰ÚÎ±C`è9JÄZ…]´±wİ®KëTB´í´÷Éˆêá(Zîób˜¤#V	X€bÚ;’Ò5CÓŒÚªÓ‡¢Á°„ï±Ië~±®Ç/Û.òc–ÛläÓ”óT÷§ğ#ËNÒÛŒ¬mD\$Ñîìß\n;J« áÄˆP@)Öã˜Ò7ÊÇH9ôİCÓ±[\$Àºr‹ÓÄYnbsK¸t4=D [UFom†ûiïö“õ²ú#ç£¬{Rá¶Ò›…ÚC«hÂ9ƒ(äØæ;ã•^2€Ò9£ \\ƒ@4}ƒ0z\r è8Ax^à\0.!6†Ü÷såà¼2†èènu°8\0èCg¡Ñû…ğÄn\r`ˆÚ`e\r°4:À^Aò\0¬:€Ş«Ã o†a„5†P@C£à{Á¶ÂÃ¬[X¸_ï\rºÓÄ†ñÙ'LãôYN¤N]QDù²¶Ü‚€H\n\0€€RzY™pOÄô®†Ø_QD¥Lª•uê.¹]‹GÁ‹·Tü[„_cE„í\"²ªÙ¹.ÆØÒœÁÉ\\®İiÃšKzÿ`1YˆŸd\0ó\\ÉÛz¹iFègÂüø­•Òzç“áv3G¾I:\$–îNlk>q¸ +1&‹€¡ª‚@—9_i1ĞÊ[Ç‚Ô~ŒyÅ\\ëHÚ¼¶4±M	X!¼:‚\0ÇA\0u…¾‚äƒHgtaD&\0ÌaH Á¥ù`©á\n¯\r0òÄ;ƒo\r €9½àí+³šg)ê5„VâØñ¥rìôŸ¢÷†…	ùl8©}jPµ-D\\²%æ ôÑÇÖCo)ª_Ÿ&ÁÊ…!5É¤À+Úc&	‘9,Y}½tq/Ú›Ì0Ğp@®Ÿ\0r\r3ÎÁ ç¡Ôâ…îÁ`Ğj|ƒá”Ë¼4^Ìˆ\0¶>Åf¯3ñX•CµÎš&´£[Ğ\\¢T‘8a‰Òx\n\nuzÈÌe%hc´Ä“Éš]'U\nU%*\"ŠVh{\r%ì>’¶5)/(iÉ\\+©r:=LÕ2R‡ü!´°Ø\nÃl\r!Œ5Ëâ\0¿ë©ÜAé©;&Én”ÊÀFø6‡W¸>€À€*…@ŒAÀ ¡×Ò°	X‚§‘¾>°…¸ï\r,˜¤^#½)L]ãjÒ((©¯#¶ßbÏÈ*À(&ÜĞÌl“‡*hPñ9#Ê±Ô«‹]Õò\0&;S´Ğ©ÓtïWYÚ8«F+\nÛmR®‰MyãÑ„PâĞÂElÑj3¾\\Ù)—?·Ôßš2îVøLœ’¾€¬U9Ckå‡ÕNªìu:¥=¤í2ŠZôaHc{¡¬Ÿ…®Ó(³+2v±Â²WW©w·ác'É0pJéµ¨¡Ì)S7LñÆ`­8A»,§ˆÓá;€";break;case"tr":$g="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùnÅO‚¤¦“TÂl&#a¼A\$5ÉÄ)\0(–u6&èYÌ@u=\\Î“ë•\n~d¹Í1óq¤@k¸\\¨úDÒ/y:L`”ÚyÒOo¸ÜçÆ:Ñ†¼9Hcà¢™„ó|0œ¬:“I¢Ze^M·;aèÎe”,\rrH(ƒSÌ¦úaÓFL4œò:(–|õ1M&=îc›ŸŠ“}Ëƒƒ4ÖD)Ğa½¬t&QgË‡ÓO³\$ÛLt‰~¦/¸*š2¾o;NõA l¤·Ã“Ø4\r&N10k:<´Š\n¾öióÕ£ÊB6´ƒ,\$¡hàŠ`#ˆòb·\rãpë\ripæEèÚ:Õ?A\0ËEˆº3%ã`È4…ÏËê0££¤…\"9R4a¤ZN¬\r#l–Ò\naĞˆ\"Cš\"-3Hò.…£ÂŒã8+%è„LSCcŒÒ±²d:|5§Ï…	#È0ô¦)ÁH@5@¨ê2J6§Œˆ×K;º¹\$âÂ¬5)ôD‹ÂT\nO¬ãà¾‰òN'§cê6ª#+”2ªl4\0İ nëf6'Õ«Õ[×5Ú ÏUó™ÉC¨X\rŒøè32Tõ@Œ<\nÅcY±ïD¡<º6\r+H&Œ5ıB8^#˜î’¾£(ğ80c(ÉLˆ¸ÑhŒÁèD4ƒ àáxï‡…Ò‚7#ÁrJ3…é2<2#r\r…áAM¸éƒë\"æ5„Ağ’6b:xÂ(‹³Š4\rï¨è³6c[`4ÊC‚<Ùâƒs,\n«Î”¡­•}O\$:H@(	„…æiƒ aB‹IB”(²jr ©*ƒbN”¥h\\ê²3#ÒäChæø–0éc¾+¥l	–Õ¸¨µê¦4H>ø9=+ğÜ“Ğ#xÖ›3ãË?ÍŠx¦*5èú\rkîcK¥¾/3Ô=Xª(¿Ó5+<`6è3\n»#<ú;­HÃÍ¢×#erÉ8²7§ƒ:æ#|¡¾0C8@)Š\"`@3&	hÒ‹ˆÂ¦´¹¾²ìWÊ'¶98“°å¹²ü¤ƒ]ˆä˜·~HÃ>7c*âLRÓø@aÑÆ†V¸ıŠAÎ:à%¿’Ğò` <ä¸âÌøv&å‘–g `‹#BÙ–@ÊüCÊQ€ID×•™y6t;x€\r aƒA¹9@ØR€!hsF¨9b,&¸ijA\roåa““›ä,‰p\r!CvÕ`BB­±:¶ÃÂ'Ã¡ƒ)mŠrYŒ!°g6³Ò\\—Aî©Ã”Mš\n¡P#Ğpİƒ= Aœ“Ä§óS«ÃdX¤Ô‚”\"S>O¥D6‰ªEŠJVÆ¬²`æÉLKá6A`ò›Ë}7+°¬Er<ƒ\$/GA`	ø»-büaQJFbe,‰°?…LÅ—bÌ9‰3K”Ò‡–ğ¢t.}ªº¢JDƒ	ç{må½º—l/\"<†€qBH%)\$,O™Šòh‡TNßğefD2#@àEğDUò`ÖÉ\rÌ•0Óú€):_L¥0Ï\nNX|‹éaZ}ÇB±.€";break;case"uk":$g="ĞI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”µÂÕêlŠ]H_F¯M<ªhº¦ÁªÑ¨ä*‰6˜JÖ29š<Oq2¨Òy ±¾,*Q¤= ´£Á\$š*!`,‚bš‹İeqQ˜HZeÌÒåM¦\\eŠÓE3¬Â¯öc®Ûb·×hRë½­E%„@öqûæİ/ÓA´Hx„4§™Ğµq¤¦#s›au‘¥Æ™ˆ\\{ ¾YÖÓöK3Eªø…\$E‚4I¡É=JòºG£E\nô»oÉ ú¡JbV 7*ò4M;³pğ°Ä:4O°ÊÊ@£ˆÑFÿš\rêaE	Yxš\$zhÑFi²…;ë¡Æ3j²P˜»*\n&2 ŒšÄ—!,˜Ï§1Ü£)ÉÑ‹ÀK<ÑÛf%Ğ\0H…Á g2†1;¸D4ÅÒ4Ğm:´èL#¼‹ÄÑšó'¦NR¤ *›@¬Çˆ\"…£hÂ4”CÊZ#DºbY©©#t¦ÍÈp˜±SãÚCL=¾Î“)FÂÍ,ãO.jèõ&(jO) ‹Ô`¦AL¥—áp´´Õ¢’•µ½^¤×r|İË–©a)6%dVjU—9YÍ] ³ZLM.¦£É#”Ë£IKEF¼haÑ RŞ÷´\$P£JahZåà\\-ÁÄ\n.Ñ	-÷&³ªZˆC`è9Nğ²ƒbØJ­>1·´é¤ª¸†)ŠB3!P!Åè\\‚#–bºã¨Ë¤F,\n¨§¦ÄJâ%eº×D¶8s(“¡xŞa†–ñóÒßZåÂ×	H\né/^È¶Ê!&©ê’–­\$ÖÄÃ§¡*ŠèGÈğÛÊ—0ª›V¨‘ƒ>Ó5¥^ºµÍƒÂş\\äYiNö˜®,· ık^:_´:*F£¡ä¶·‡ñÏÙ\nà)éàš0c Ê9‡09ãxå&£Àà4C(É•‡ƒ@4u#0z\r è8Ax^;÷pÂ2\r£HİÍ…İÎŒ£w<sCpæ4şPDƒä3Œ£§f/ŒC`Â7\ra|\$£€Ø2¾Hèã|æHè4\rò`è7ş#Ö2„Hèç\\Ú’xa¸:8b:J! çä2’F’â¨)&ı¤…\0i|P0Ûœ’ÍAg-Ù4GµO¶få@G7¢¢#ÛqÂN¥ìï ÔâB‰kTğ¼h)Ã¨È!D6eÔ©Ä\$X²È!@K‘%\"6ä°7)&ÜBµDVyE“+[‰É¹6³ZJ›q)4,£œbºÌÎakSDµV›–‚B‰!S?Ä‚bh¼@'…0¨ÔS\"-)¥\0K“c25%6;òA’ŞŒG•FiÜˆBï&(.µ¸:Cá%1OÀí’\\N\n˜³k*0h™bè%ÉàY\ráÔ7¾«æ\rîü:àÄC8 \naD&\0Ì¥àv\r.¸#@¡/CrL\r/•Ñ?÷ı1ƒo\r¤aÍ‡gˆ¦RAéku¢)º–„jœ'zq´4Wáq3€•¤‘YçjÊ7pÕR5â>ZĞÃB•Ié†!f:cĞpN±(‚ËfëÃŞ¹ü\0äfSç{Íê?‰ršz 4ÑÇª÷C,ê2lX‡J¤g8)Z‡­i«”äUÈY\"6èö™HK²\ntEáz`Ø`õ.&´Ö}¥åJ\\ºpŒi¡Gø¬§s‚Mq«Ç=OJÛ«(­¶vRRªòîBgxV%“\$™¼ñ¬ëE²Ö¶ÅC@PCba°¶bvÓzV¢Á#ÓÇYÓ9‘“¾³S¶N‰œÄğ#L‡â\\È Oñá\0ª0-\0ä†7ëQIâ¼¡4à]O’”yHñƒ`Ææ +¥j˜5\n>ì58Në`„Í©4Sñ²É¥r°h\\XµÄßÛ+…mgúD1ÅôÊ2\r9XQ¡¦†E*Uc,Âm§ÁäÁZò…&Z\r%Éh)¡d(Q)?\0*©´H¬*¡´;ªŒİÃ}¢\"Ï½HæÅGk\\¬q•¬î¨¢[Z}ÂAÕÈ×¨h—°	’ì2TP†åàmtOò=T—qíÒ ¸Ö®İ‹ŒWnnJ\\DiŒ6ÃˆB Z³Œ¦D—€ ¦_8csA‘´2ìKà•ˆw<\"4!–½Î†Ù\"—P›h+q¦Å“É¼d:ùxÊ£“ér¼Xœl†à–NTÅø";break;case"zh":$g="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ğ S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ğ€Js!Kd²u´eåV¦©ÅDªXçT®NTr}Ê§EËVJr%Ğ¡ªÊÁBÀS¡^­t*…êıÎ”T[UëxÚğè_¦\\‹¤Û™©r¬R±•lå	@FUPÄÕ­J­œ«u•B¥TËİÕdBİÎ±]¹SÖ2UaPKËRêYr}Ì—[:RëJÚµ.çV)£+(Âé€M¹Q`Sz‘s®Ó•´:‚\0•r¦×ÎUêŠ¶ˆKÙï.uâYĞ¾H¹S>;Æ‘o	FÖÕèg:ÍLêW©XÂı:s„	Îü»âH×—eÓZXÄi\\‡Œ`tI`ò2`PÜ7A bœ@¥¤8s–òN]œÄ\"†^‘®tsÄ‘Ê]ëiA»-áÊE¦tIÌE•.i(ZªÒAÊbZN”§AU#Ávt”DÂZGÆÄ)J\$Ë”+dy#\">á,\" 2|¢Ÿ3‡,Õ64\$s^ªB@	¢ht)Š`P¶<ÑÈº\r£h\\2“\$‹#•0\\ƒ ä–“ŠyP½KÉÌY•I(¹¶é*D¦)ÁNRäI«\$9ÎÓY\0š­)J²õKS´„„~O²âœ09#xİ	ä)ÒP—gADU¡%{EfÙö¦Í–LÚ¡:÷\\×d±a¿V\"ÕTµ¤AÊC•´».&Œ#˜è2A\0á~c¸Ş9B#(ğ8\r#Ê2Á\0x0„F3¡Ğ:ƒ€t…ã¾D# Ú4Ø\0]ƒŒáxÊ7eÃÅş7Z^ Â9ã(éŒ‹ãØ0ÃXD	#hà6£n^:xÂ(Ã˜A§ƒ@ßƒ~®0c(@4˜\0006èšx\\±,„äŒÃ±02Æ²œÄ¡_\0@IĞ@(	€@Ã1Tío/a£¡„K.tÄ-Ì—&	‘Êš&ÉÂtØÅqk×\$z¬·=å=”«.˜•Iû½‰â˜©¿µ×ÒW{‘ê	#KAÍ#Ì@§/EÒj¡ÒBÆ%ê\nH£ÅÙHË‹#xêz @:éc~JbƒÒ3„˜¢&0Ó¦°ÓŠÂ¦ı¢B#N•ƒì»'Â9\rãh@9à¶T­Î¤A@™E\"×#œMŠçNg0›ˆ@HZ— æLLRÀØ\ne‹Qä<Ç Ù*¤ƒcÎb¡…ı6Àƒi|Í1µfºôÃ€d+ıœ†€ÓƒB­¬rã<Dé¢ä[NtLiå<âD8HÊ<@ˆQ	&JFDY2G}ÿ‰‘H„¸PX‚ˆñ.rx½#”IˆÓ.ÔĞlaŒ6ÆÁÒ{”0†ÀêØ¡xmka¤3–ÆXF|mˆ6‡Uübe\0€*…@ŒAÀ eáA†àÎÚÓp ,â1rQ^/ ¡—)Äp^¤DŒ’rU-\0(&È9\n™ÉOGlB‹1Ğ D¤=,‚WœØ•é¢ƒQ,t‰1|\r¢T‡¢¹º‹™b9D\0¼2ë\\Z‘:wœ	À(&=`É'\$æjì±C&u%-\"\0²&9„ñÓYÍ01¯õ\"LJyË>R C•©M*[*‡ˆÆdLŠ¸Açˆ¶Š‚æ4=\"Rˆ1P";break;case"zh-tw":$g="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ğ S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ¢.©‚ ’Ôr}Ê§EÒÖI'2qèY¡ÜÉdË¡B¨•K€§B©=1@ ÷:R¬èU¢ïwÕDyåD%åËhò¶<€r ndšÒ\\…s*.uªAH¸Òä´×*İeQ©Õt8;ó¡\0…t¨SÎTõ…Ì•\\TRô´º–ÊŸs&PN”²NZ­KÇ–W¥Ò1Ò€Y@±u²ÉĞ·WËW+èV[‰·UœëuC¡x¯r¦jÎUÂÍĞ™‡9UèhmÎ™]Ë”´µ‚áÈ\\¯»òB¿kY`r”DñÒP@\$Ù\\‡Œ\0Ä<ƒ(P9… Pò2`PÜ7A bœH©d8¡,'!v]œÄ!éåìsÄ‘Ê]àRxŸ éi—¤ä|@—¡oÉZH\$kËÑ|C9T½.«@ĞA=\$\$¨–•ä!ÊC—IkLùMSc?¨D£)—e³Bs‘åò¨«	@t&‰¡Ğ¦)BØóE\"è\\6¡pÈ2HòI&C­RØ\rƒ ä½…ÒÊ¨=H»ñ5Í¨Â4J‘	£<!ŠbŒƒxÖ2Ë‹\0E\$9>åã˜-ç),W4'1ŸDüT4\"œ89#xÜ¥û`PADUœ¤­œ¿Z6«k´¥‘Ò@‘ÍúFWuí~K|	=£-½ZšœÄ1\"t¤KB&Œ#œ*9†\n9ãxåŒ£Àà4C(ÈàÂ\r¨Ì„C@è:Ğ^ùH\\0ŒƒhÒ7£]‡á}q›¨İjZÁxEZ#Î2™\0¾1\rƒÜ5„Ağ’6`Ê6× xŒ!ó>9„ è4\rğk®Œ5¸@4˜Nb6éZ¨\\‹ß,«.Ì³lêÄ²,ÑqvîœÄ¡^så¥\\(	ƒ(Ë¬Ã4Îˆa¤!˜VºÍ…Ø—&	•\\İÅqjÛ—ê‰~Œ‚€È—•Ó1¤Q@Ğrb€)Š2µ“)ùTŸ”ë‰Ì\\jş´÷Q,×½g]­„rbV ÈB´Ğ‹#xêzP@:ê#~XccÒ3„˜¢&0Ó©°ÓˆÂ ¡ğ\rĞˆÓ¨aÛNÑôCxÚ›1ÌÅ·Rº`çAË¥o.*‰à¤MÂÈs	±hZ\rYMt¦`P®v°ñSÎİË)g\"1ê=f8` Cì\$9—ÜÔš\\lop2*­@i‡A…¤VŞ9D!§*D¶\$š‚<)‡8¹ƒœæÂSÌvBœ0eá&D¡1àğ0Æ<sŠÑwà€™‚@”2y`X1B!‹Ñb:Dø¿4!\rOÀVÃ`ia¬-gÀûCl¡•ZöºØCHf-œ:6ğŒúä`m¬	HÆ^¨TÀ´pä€nñ7ˆÃĞ#an…MU±*ºÔ²˜€îÜ¶d„’L…@C\n PºÄó¿hdt‰q8:	ÙŠĞœÖ\n‰¦+Îx£3‚@r%qÈ/Ås}&…ˆ–éG(¾†>r€ ˜÷ƒ\$[ÓÂG±PAC aBÈ¥ˆ‘\nfØæÉi5 Æ…T èŠ`Q‹Ò[+•E•çí?ËÇr.…XæEH°º<Iz[Ë¤+t\\òEr\\*ˆ¨";break;case"no":$g="E9‡QÌÒk5™NCğP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤èo6‚ç#IœÒn0›D“q—20˜§æÈT¤@\n)œL5)¬B9nÅjY¸Ù]ˆW“]6˜a;N-†ã\$şƒ¢éªdš,eÉ]ğ£¡äá\n¦İÃWÌó#I’àtŸYt*û\rM>Ğ™fÇhUØe¬n«€¢eB@rŒ¦Jì*¾gÍ^¡V±¸Pëzâf«W_ë!FÓ\\Ütj«úÈ€äa×	L˜#Ì€òúH`£Q„‹ PHá hŠà®Ã@ì­»ChĞÇ‹‚¶ã®[Ş7! PòŒ‹úÊ/ƒc \"…£€ŞB3Ş\nƒJlŸ®\rÓĞğDZØ3ºš–ø¾c,TÀ±ã è>ò†ã ±üÿ®ğ	¢ht)Š`PÈ¦\"Úé/”« »ÄÈNÿ7ƒr>Ÿ©˜Ø	ØòÜGÃ“xä;±à@:Â¢¨Î<bÊb˜¤#M£z¦¡|Æ#(²\n5C+Èİ##=*7%\"¨è6;Îx@Ş\rƒ`ò„7II†L\rc Z˜@6®•lŸRkÈÈù¥UV=àØE4¯ÌÑPOO\0A^”¡\0ÜúÉóõA;èµ˜¯,¨0Ü3+o æ5\rôâT8ñK²í©¨\r…bHá\0x0„B|3¡Ğ›Ğ^ø\\ø\rªúÚ­Œáz—…	Ô4Ü¡xD´K0é|‹ã;Ağ’6cHó¡Aà^0‡Ì5fİ\rìjJ­²9zZÓIİpÆ½øäò<ÒzÈ³)“àìÖ±Ã*ÆÙ0ìN]XFyp \$\nn…¢(\nZ0(¡MÚÖDÔÚÌ¿¬ÉJV§¥é‹Ê:,#bJŸ¢˜7Îãœ4åÓ:—°00c\"¤fş`2LùÏ—\r4+KŞ.R  <ÑÁ1£pX¦ÔªõX'º*™h2!h×r¤Ã8ê÷Üw(ææ'ÕhÒŞIâ\"5¼¨åĞ¤yVü€Šbˆ˜¤ÛV‡zÂ  Ô»ù.© K8Ì÷É³²¥s\nO‚Î¡kdg'ú<¶‘s8”û*.¶9´ñº-ğ9nk‘Ÿ¬ï{9%=ufòŒëbŸ&Êì'‡#ŠdlC8sf@Z£ön_HÃh-NUsÀÂÍÄ‚„Õ®\0ä\n	6€‹DŸÂÍ`y>O†\n\$Ø4³ˆ¹Q.Y\nŸ‡Ü³Ë£CD%#¤“Üôˆ\nĞ†PĞ”„3`Xk/ä\"-ÎÎd€¦2®b’bÕšµÊÜŒ8Pª08M¡”3¡ÆZsÉL.>\rl4¼h.÷á³î(eN3tİ‰TTdü³ˆbÀPE‰‚¡Ä~ÑQt¤\\äA×ÔtL,†ƒà´Å¸21 Ù†‘4ËÇ0äs\nY)\nmhUŠŒ#0&‘Æ¦r|ßti‡\0)	–ÃÜf¨lm\n…bÂĞ¨KTX\"’ÔUËm4M½8åèá`Qk4P´–³“*ãÔ“&x2€";break;}$tf=array();foreach(explode("\n",lzw_decompress($g))as$X)$tf[]=(strpos($X,"\t")?explode("\t",$X):$X);return$tf;}if(!$tf)$tf=get_translations($ba);if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Zd=array_search("SQL",$b->operators);if($Zd!==false)unset($b->operators[$Zd]);}function
dsn($Ab,$V,$H){try{parent::__construct($Ab,$V,$H);}catch(Exception$Pb){auth_error($Pb);exit;}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$zf=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$p=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$p];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$yb=array();class
Min_SQL{var$_conn;function
Min_SQL($h){$this->_conn=$h;}function
quote($Y){return($Y===null?"NULL":$this->_conn->quote($Y));}function
select($R,$N,$Z,$s,$E=array(),$_=1,$F=0,$ee=false){global$b,$y;$Pc=(count($s)<count($N));$I=$b->selectQueryBuild($N,$Z,$s,$E,$_,$F);if(!$I)$I="SELECT".limit(($_GET["page"]!="last"&&+$_&&$s&&$Pc&&$y=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$N)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($s&&$Pc?"\nGROUP BY ".implode(", ",$s):"").($E?"\nORDER BY ".implode(", ",$E):""),($_!=""?+$_:null),($F?$_*$F:0),"\n");if($ee)echo$b->selectQuery($I);return$this->_conn->query($I);}function
delete($R,$ke,$_=0){$I="FROM ".table($R);return
queries("DELETE".($_?limit1($I,$ke):" $I$ke"));}function
update($R,$P,$ke,$_=0,$He="\n"){$Kf=array();foreach($P
as$z=>$X)$Kf[]="$z = $X";$I=table($R)." SET$He".implode(",$He",$Kf);return
queries("UPDATE".($_?limit1($I,$ke):" $I$ke"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$M,$ce){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$yb["sqlite"]="SQLite 3";$yb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$ae=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($bc){$this->_link=new
SQLite3($bc);$Mf=$this->_link->version();$this->server_info=$Mf["versionString"];}function
query($I){$J=@$this->_link->query($I);$this->error="";if(!$J){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($J->numColumns())return
new
Min_Result($J);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetchArray();return$L[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($bc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($bc);}function
query($I,$zf=false){$td=($zf?"unbufferedQuery":"query");$J=@$this->_link->$td($I,SQLITE_BOTH,$o);$this->error="";if(!$J){$this->error=$o;return
false;}elseif($J===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($J);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetch();return$L[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;if(method_exists($J,'numRows'))$this->num_rows=$J->numRows();}function
fetch_assoc(){$L=$this->_result->fetch(SQLITE_ASSOC);if(!$L)return
false;$K=array();foreach($L
as$z=>$X)$K[($z[0]=='"'?idf_unescape($z):$z)]=$X;return$K;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$D=$this->_result->fieldName($this->_offset++);$Vd='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Vd\\.)?$Vd\$~",$D,$B)){$R=($B[3]!=""?$B[3]:idf_unescape($B[2]));$D=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$D,"orgname"=>$D,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($bc){$this->dsn(DRIVER.":$bc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($bc){if(is_readable($bc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$bc)?$bc:dirname($_SERVER["SCRIPT_FILENAME"])."/$bc")." AS a")){$this->Min_SQLite($bc);return
true;}return
false;}function
multi_query($I){return$this->_result=$this->query($I);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ce){$Kf=array();foreach($M
as$P)$Kf[]="(".implode(", ",$P).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($M))).") VALUES\n".implode(",\n",$Kf));}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($I,$Z,$_,$Bd=0,$He=" "){return" $I$Z".($_!==null?$He."LIMIT $_".($Bd?" OFFSET $Bd":""):"");}function
limit1($I,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($I,$Z,1):" $I$Z");}function
db_collation($m,$Ya){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($D=""){global$h;$K=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){$L["Oid"]=1;$L["Auto_increment"]="";$L["Rows"]=$h->result("SELECT COUNT(*) FROM ".idf_escape($L["Name"]));$K[$L["Name"]]=$L;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$L)$K[$L["name"]]["Auto_increment"]=$L["seq"];return($D!=""?$K[$D]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$h;$K=array();$ce="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$L){$D=$L["name"];$U=strtolower($L["type"]);$ob=$L["dflt_value"];$K[$D]=array("field"=>$D,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$ob,$B)?str_replace("''","'",$B[1]):($ob=="NULL"?null:$ob)),"null"=>!$L["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$L["pk"],);if($L["pk"]){if($ce!="")$K[$ce]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$K[$D]["auto_increment"]=true;$ce=$D;}}$Oe=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Oe,$C,PREG_SET_ORDER);foreach($C
as$B){$D=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($K[$D])$K[$D]["collation"]=trim($B[3],"'");}return$K;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$K=array();$Oe=$i->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Oe,$B)){$K[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$C,PREG_SET_ORDER);foreach($C
as$B){$K[""]["columns"][]=idf_unescape($B[2]).$B[4];$K[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$K){foreach(fields($R)as$D=>$p){if($p["primary"])$K[""]=array("type"=>"PRIMARY","columns"=>array($D),"lengths"=>array(),"descs"=>array(null));}}$Pe=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$i);foreach(get_rows("PRAGMA index_list(".table($R).")",$i)as$L){$D=$L["name"];if(!preg_match("~^sqlite_~",$D)){$K[$D]["type"]=($L["unique"]?"UNIQUE":"INDEX");$K[$D]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($D).")",$i)as$ze)$K[$D]["columns"][]=$ze["name"];$K[$D]["descs"]=array();if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($D).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$Pe[$D],$qe)){preg_match_all('/("[^"]*+")+( DESC)?/',$qe[2],$C);foreach($C[2]as$X)$K[$D]["descs"][]=($X?'1':null);}}}return$K;}function
foreign_keys($R){$K=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$L){$jc=&$K[$L["id"]];if(!$jc)$jc=$L;$jc["source"][]=$L["from"];$jc["target"][]=$L["to"];}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($D))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
check_sqlite_name($D){global$h;$Wb="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Wb)\$~",$D)){$h->error=lang(11,str_replace("|",", ",$Wb));return
false;}return
true;}function
create_database($m,$d){global$h;if(file_exists($m)){$h->error=lang(12);return
false;}if(!check_sqlite_name($m))return
false;try{$A=new
Min_SQLite($m);}catch(Exception$Pb){$h->error=$Pb->getMessage();return
false;}$A->query('PRAGMA encoding = "UTF-8"');$A->query('CREATE TABLE adminer (i)');$A->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$h;$h->Min_SQLite(":memory:");foreach($l
as$m){if(!@unlink($m)){$h->error=lang(12);return
false;}}return
true;}function
rename_database($D,$d){global$h;if(!check_sqlite_name($D))return
false;$h->Min_SQLite(":memory:");$h->error=lang(12);return@rename(DB,$D);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$D,$q,$gc,$bb,$Kb,$d,$Da,$Td){$Hf=($R==""||$gc);foreach($q
as$p){if($p[0]!=""||!$p[1]||$p[2]){$Hf=true;break;}}$c=array();$Od=array();foreach($q
as$p){if($p[1]){$c[]=($Hf?$p[1]:"ADD ".implode($p[1]));if($p[0]!="")$Od[$p[0]]=$p[1][0];}}if(!$Hf){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$D&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)))return
false;}elseif(!recreate_table($R,$D,$c,$Od,$gc))return
false;if($Da)queries("UPDATE sqlite_sequence SET seq = $Da WHERE name = ".q($D));return
true;}function
recreate_table($R,$D,$q,$Od,$gc,$x=array()){if($R!=""){if(!$q){foreach(fields($R)as$z=>$p){$q[]=process_field($p,$p);$Od[$z]=idf_escape($z);}}$de=false;foreach($q
as$p){if($p[6])$de=true;}$_b=array();foreach($x
as$z=>$X){if($X[2]=="DROP"){$_b[$X[1]]=true;unset($x[$z]);}}foreach(indexes($R)as$Uc=>$w){$f=array();foreach($w["columns"]as$z=>$e){if(!$Od[$e])continue
2;$f[]=$Od[$e].($w["descs"][$z]?" DESC":"");}if(!$_b[$Uc]){if($w["type"]!="PRIMARY"||!$de)$x[]=array($w["type"],$Uc,$f);}}foreach($x
as$z=>$X){if($X[0]=="PRIMARY"){unset($x[$z]);$gc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Uc=>$jc){foreach($jc["source"]as$z=>$e){if(!$Od[$e])continue
2;$jc["source"][$z]=idf_unescape($Od[$e]);}if(!isset($gc[" $Uc"]))$gc[]=" ".format_foreign_key($jc);}queries("BEGIN");}foreach($q
as$z=>$p)$q[$z]="  ".implode($p);$q=array_merge($q,array_filter($gc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$D":$D)." (\n".implode(",\n",$q)."\n)"))return
false;if($R!=""){if($Od&&!queries("INSERT INTO ".table("adminer_$D")." (".implode(", ",$Od).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Od)))." FROM ".table($R)))return
false;$wf=array();foreach(triggers($R)as$vf=>$kf){$uf=trigger($vf);$wf[]="CREATE TRIGGER ".idf_escape($vf)." ".implode(" ",$kf)." ON ".table($D)."\n$uf[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$D")." RENAME TO ".table($D));if(!alter_indexes($D,$x))return
false;foreach($wf
as$uf){if(!queries($uf))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$D,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($D!=""?$D:uniqid($R."_"))." ON ".table($R)." $f";}function
alter_indexes($R,$c){foreach($c
as$ce){if($ce[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($Of){return
apply_queries("DROP VIEW",$Of);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$Of,$df){return
false;}function
trigger($D){global$h;if($D=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(BEFORE|AFTER|INSTEAD\\s+OF)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$h->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($D)),$B);return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]),"Trigger"=>$D,"Statement"=>$B[3]);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$L){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$L["sql"],$B);$K[$L["name"]]=array($B[1],$B[2]);}return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$I){return$h->query("EXPLAIN $I");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Be){return
true;}function
create_sql($R,$Da){global$h;$K=$h->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$D=>$w){if($D=='')continue;$K.=";\n\n".index_sql($R,$w['type'],$D,"(".implode(", ",array_map('idf_escape',$w['columns'])).")");}return$K;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R,$Ue){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$h;$K=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$z)$K[$z]=$h->result("PRAGMA $z");return$K;}function
show_status(){$K=array();foreach(get_vals("PRAGMA compile_options")as$Jd){list($z,$X)=explode("=",$Jd,2);$K[$z]=$X;}return$K;}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Zb){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Zb);}$y="sqlite";$yf=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Te=array_keys($yf);$Ef=array();$Id=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$rc=array("hex","length","lower","round","unixepoch","upper");$tc=array("avg","count","count distinct","group_concat","max","min","sum");$Cb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$yb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$ae=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Nb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=preg_replace('~^[^:]*: ~','',$o);$this->error=$o;}function
connect($O,$V,$H){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($H,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Mf=pg_version($this->_link);$this->server_info=$Mf["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$K=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($K)$this->_link=$K;return$K;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($I,$zf=false){$J=@pg_query($this->_link,$I);$this->error="";if(!$J){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($J)){$this->affected_rows=pg_affected_rows($J);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$p=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
pg_fetch_result($J->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;$this->num_rows=pg_num_rows($J);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$K=new
stdClass;if(function_exists('pg_field_table'))$K->orgtable=pg_field_table($this->_result,$e);$K->name=pg_field_name($this->_result,$e);$K->orgname=$K->name;$K->type=pg_field_type($this->_result,$e);$K->charsetnr=($K->type=="bytea"?63:0);return$K;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($O,$V,$H){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$H);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ce){global$h;foreach($M
as$P){$Ff=array();$Z=array();foreach($P
as$z=>$X){$Ff[]="$z = $X";if(isset($ce[idf_unescape($z)]))$Z[]="$z = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Ff)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")")))return
false;}return
true;}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2])){if($h->server_info>=9)$h->query("SET application_name = 'Adminer'");return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($I,$Z,$_,$Bd=0,$He=" "){return" $I$Z".($_!==null?$He."LIMIT $_".($Bd?" OFFSET $Bd":""):"");}function
limit1($I,$Z){return" $I$Z";}function
db_collation($m,$Ya){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($l){return
array();}function
table_status($D=""){$K=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($D!=""?"AND relname = ".q($D):"ORDER BY relname"))as$L)$K[$L["Name"]]=$L;return($D!=""?$K[$D]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();$va=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$L){preg_match('~([^([]+)(\((.*)\))?((\[[0-9]*])*)$~',$L["full_type"],$B);list(,$U,$dd,$L["length"],$xa)=$B;$L["length"].=$xa;$L["type"]=($va[$U]?$va[$U]:$U);$L["full_type"]=$L["type"].$dd.$xa;$L["null"]=!$L["attnotnull"];$L["auto_increment"]=preg_match('~^nextval\\(~i',$L["default"]);$L["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$L["default"],$B))$L["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$K[$L["field"]]=$L;}return$K;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$K=array();$bf=$i->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $bf AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $bf AND ci.oid = i.indexrelid",$i)as$L){$re=$L["relname"];$K[$re]["type"]=($L["indisprimary"]?"PRIMARY":($L["indisunique"]?"UNIQUE":"INDEX"));$K[$re]["columns"]=array();foreach(explode(" ",$L["indkey"])as$Ic)$K[$re]["columns"][]=$f[$Ic];$K[$re]["descs"]=array();foreach(explode(" ",$L["indoption"])as$Jc)$K[$re]["descs"][]=($Jc&1?'1':null);$K[$re]["lengths"]=array();}return$K;}function
foreign_keys($R){global$Dd;$K=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$L){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$L['definition'],$B)){$L['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$kd)){$L['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$kd[2]));$L['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$kd[4]));}$L['target']=array_map('trim',explode(',',$B[3]));$L['on_delete']=(preg_match("~ON DELETE ($Dd)~",$B[4],$kd)?$kd[1]:'NO ACTION');$L['on_update']=(preg_match("~ON UPDATE ($Dd)~",$B[4],$kd)?$kd[1]:'NO ACTION');$K[$L['conname']]=$L;}}return$K;}function
view($D){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($D).")"));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$h;$K=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$K,$B))$K=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($K);}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($l){global$h;$h->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($D,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($D));}function
auto_increment(){return"";}function
alter_table($R,$D,$q,$gc,$bb,$Kb,$d,$Da,$Td){$c=array();$je=array();foreach($q
as$p){$e=idf_escape($p[0]);$X=$p[1];if(!$X)$c[]="DROP $e";else{$Jf=$X[5];unset($X[5]);if(isset($X[6])&&$p[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($p[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$je[]="ALTER TABLE ".table($R)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($p[0]!=""||$Jf!="")$je[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Jf!=""?substr($Jf,9):"''");}}$c=array_merge($c,$gc);if($R=="")array_unshift($je,"CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($je,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$D)$je[]="ALTER TABLE ".table($R)." RENAME TO ".table($D);if($R!=""||$bb!="")$je[]="COMMENT ON TABLE ".table($D)." IS ".q($bb);if($Da!=""){}foreach($je
as$I){if(!queries($I))return
false;}return
true;}function
alter_indexes($R,$c){$ib=array();$zb=array();$je=array();foreach($c
as$X){if($X[0]!="INDEX")$ib[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$zb[]=idf_escape($X[1]);else$je[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($ib)array_unshift($je,"ALTER TABLE ".table($R).implode(",",$ib));if($zb)array_unshift($je,"DROP INDEX ".implode(", ",$zb));foreach($je
as$I){if(!queries($I))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($Of){return
queries("DROP VIEW ".implode(", ",array_map('table',$Of)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Of,$df){foreach($T
as$R){if(!queries("ALTER TABLE ".table($R)." SET SCHEMA ".idf_escape($df)))return
false;}foreach($Of
as$R){if(!queries("ALTER VIEW ".table($R)." SET SCHEMA ".idf_escape($df)))return
false;}return
true;}function
trigger($D){if($D=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$M=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$L)$K[$L["trigger_name"]]=array($L["condition_timing"],$L["event_manipulation"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($h,$I){return$h->query("EXPLAIN $I");}function
found_rows($S,$Z){global$h;if(preg_match("~ rows=([0-9]+)~",$h->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$qe))return$qe[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($Ae){global$h,$yf,$Te;$K=$h->query("SET search_path TO ".idf_escape($Ae));foreach(types()as$U){if(!isset($yf[$U])){$yf[$U]=0;$Te[lang(13)][]=$U;}}return$K;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$h;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($h->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Zb){return
preg_match('~^(database|table|columns|sql|indexes|comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$Zb);}$y="pgsql";$yf=array();$Te=array();foreach(array(lang(14)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(15)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(16)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(17)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(18)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(19)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$z=>$X){$yf+=$X;$Te[$z]=array_keys($X);}$Ef=array();$Id=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$rc=array("char_length","lower","round","to_hex","to_timestamp","upper");$tc=array("avg","count","count distinct","max","min","sum");$Cb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$yb["oracle"]="Oracle";if(isset($_GET["oracle"])){$ae=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($Nb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=preg_replace('~^[^:]*: ~','',$o);$this->error=$o;}function
connect($O,$V,$H){$this->_link=@oci_new_connect($V,$H,$O,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$o=oci_error();$this->error=$o["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($I,$zf=false){$J=oci_parse($this->_link,$I);$this->error="";if(!$J){$o=oci_error($this->_link);$this->errno=$o["code"];$this->error=$o["message"];return
false;}set_error_handler(array($this,'_error'));$K=@oci_execute($J);restore_error_handler();if($K){if(oci_num_fields($J))return
new
Min_Result($J);$this->affected_rows=oci_num_rows($J);}return$K;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$p=1){$J=$this->query($I);if(!is_object($J)||!oci_fetch($J->_result))return
false;return
oci_result($J->_result,$p);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$z=>$X){if(is_a($X,'OCI-Lob'))$L[$z]=$X->load();}return$L;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$K=new
stdClass;$K->name=oci_field_name($this->_result,$e);$K->orgname=$K->name;$K->type=oci_field_type($this->_result,$e);$K->charsetnr=(preg_match("~raw|blob|bfile~",$K->type)?63:0);return$K;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($O,$V,$H){$this->dsn("oci:dbname=//$O;charset=AL32UTF8",$V,$H);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($I,$Z,$_,$Bd=0,$He=" "){return($Bd?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $I$Z) t WHERE rownum <= ".($_+$Bd).") WHERE rnum > $Bd":($_!==null?" * FROM (SELECT $I$Z) WHERE rownum <= ".($_+$Bd):" $I$Z"));}function
limit1($I,$Z){return" $I$Z";}function
db_collation($m,$Ya){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($D=""){$K=array();$Ce=q($D);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($D!=""?" AND table_name = $Ce":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($D!=""?" WHERE view_name = $Ce":"")."
ORDER BY 1")as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$L){$U=$L["DATA_TYPE"];$dd="$L[DATA_PRECISION],$L[DATA_SCALE]";if($dd==",")$dd=$L["DATA_LENGTH"];$K[$L["COLUMN_NAME"]]=array("field"=>$L["COLUMN_NAME"],"full_type"=>$U.($dd?"($dd)":""),"type"=>strtolower($U),"length"=>$dd,"default"=>$L["DATA_DEFAULT"],"null"=>($L["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$L){$Gc=$L["INDEX_NAME"];$K[$Gc]["type"]=($L["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($L["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$K[$Gc]["columns"][]=$L["COLUMN_NAME"];$K[$Gc]["lengths"][]=($L["CHAR_LENGTH"]&&$L["CHAR_LENGTH"]!=$L["COLUMN_LENGTH"]?$L["CHAR_LENGTH"]:null);$K[$Gc]["descs"][]=($L["DESCEND"]?'1':null);}return$K;}function
view($D){$M=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($D));return
reset($M);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
explain($h,$I){$h->query("EXPLAIN PLAN FOR $I");return$h->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$D,$q,$gc,$bb,$Kb,$d,$Da,$Td){$c=$zb=array();foreach($q
as$p){$X=$p[1];if($X&&$p[0]!=""&&idf_escape($p[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($p[0])." TO $X[0]");if($X)$c[]=($R!=""?($p[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$zb[]=idf_escape($p[0]);}if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$zb||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$zb).")"))&&($R==$D||queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)));}function
foreign_keys($R){return
array();}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Of){return
apply_queries("DROP VIEW",$Of);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$h;return$h->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Be){global$h;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Be));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$M=get_rows('SELECT * FROM v$instance');return
reset($M);}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Zb){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Zb);}$y="oracle";$yf=array();$Te=array();foreach(array(lang(14)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(15)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(16)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(17)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$z=>$X){$yf+=$X;$Te[$z]=array_keys($X);}$Ef=array();$Id=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$rc=array("length","lower","round","upper");$tc=array("avg","count","count distinct","max","min","sum");$Cb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$yb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$ae=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$o){$this->errno=$o["code"];$this->error.="$o[message]\n";}$this->error=rtrim($this->error);}function
connect($O,$V,$H){$this->_link=@sqlsrv_connect($O,array("UID"=>$V,"PWD"=>$H,"CharacterSet"=>"UTF-8"));if($this->_link){$Kc=sqlsrv_server_info($this->_link);$this->server_info=$Kc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($I,$zf=false){$J=sqlsrv_query($this->_link,$I);$this->error="";if(!$J){$this->_get_error();return
false;}return$this->store_result($J);}function
multi_query($I){$this->_result=sqlsrv_query($this->_link,$I);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($J=null){if(!$J)$J=$this->_result;if(sqlsrv_field_metadata($J))return
new
Min_Result($J);$this->affected_rows=sqlsrv_rows_affected($J);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->fetch_row();return$L[$p];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$z=>$X){if(is_a($X,'DateTime'))$L[$z]=$X->format("Y-m-d H:i:s");}return$L;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$p=$this->_fields[$this->_offset++];$K=new
stdClass;$K->name=$p["Name"];$K->orgname=$p["Name"];$K->type=($p["Type"]==1?254:0);return$K;}function
seek($Bd){for($t=0;$t<$Bd;$t++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($O,$V,$H){$this->_link=@mssql_connect($O,$V,$H);if($this->_link){$J=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$L=$J->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$L[0]] $L[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($I,$zf=false){$J=mssql_query($I,$this->_link);$this->error="";if(!$J){$this->error=mssql_get_last_message();return
false;}if($J===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;return
mssql_result($J->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($J){$this->_result=$J;$this->num_rows=mssql_num_rows($J);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$K=mssql_fetch_field($this->_result);$K->orgtable=$K->table;$K->orgname=$K->name;return$K;}function
seek($Bd){mssql_data_seek($this->_result,$Bd);}function
__destruct(){mssql_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ce){foreach($M
as$P){$Ff=array();$Z=array();foreach($P
as$z=>$X){$Ff[]="$z = $X";if(isset($ce[idf_unescape($z)]))$Z[]="$z = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$P).")) AS source (c".implode(", c",range(1,count($P))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Ff)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($v){return"[".str_replace("]","]]",$v)."]";}function
table($v){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($v);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($I,$Z,$_,$Bd=0,$He=" "){return($_!==null?" TOP (".($_+$Bd).")":"")." $I$Z";}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$Ya){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$h;$K=array();foreach($l
as$m){$h->select_db($m);$K[$m]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$K;}function
table_status($D=""){$K=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$L){$U=$L["type"];$dd=(preg_match("~char|binary~",$U)?$L["max_length"]:($U=="decimal"?"$L[precision],$L[scale]":""));$K[$L["name"]]=array("field"=>$L["name"],"full_type"=>$U.($dd?"($dd)":""),"type"=>$U,"length"=>$dd,"default"=>$L["default"],"null"=>$L["is_nullable"],"auto_increment"=>$L["is_identity"],"collation"=>$L["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$L["is_identity"],);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$i)as$L){$D=$L["name"];$K[$D]["type"]=($L["is_primary_key"]?"PRIMARY":($L["is_unique"]?"UNIQUE":"INDEX"));$K[$D]["lengths"]=array();$K[$D]["columns"][$L["key_ordinal"]]=$L["column_name"];$K[$D]["descs"][$L["key_ordinal"]]=($L["is_descending_key"]?'1':null);}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($D))));}function
collations(){$K=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$K[preg_replace('~_.*~','',$d)][]=$d;return$K;}function
information_schema($m){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($D,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($D));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$D,$q,$gc,$bb,$Kb,$d,$Da,$Td){$c=array();foreach($q
as$p){$e=idf_escape($p[0]);$X=$p[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($p[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($gc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($R).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($D)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$D)queries("EXEC sp_rename ".q(table($R)).", ".q($D));if($gc)$c[""]=$gc;foreach($c
as$z=>$X){if(!queries("ALTER TABLE ".idf_escape($D)." $z".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$w=array();$zb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$zb[]=idf_escape($X[1]);else$w[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$zb||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$zb)));}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$I){$h->query("SET SHOWPLAN_ALL ON");$K=$h->query($I);$h->query("SET SHOWPLAN_ALL OFF");return$K;}function
found_rows($S,$Z){}function
foreign_keys($R){$K=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$L){$jc=&$K[$L["FK_NAME"]];$jc["table"]=$L["PKTABLE_NAME"];$jc["source"][]=$L["FKCOLUMN_NAME"];$jc["target"][]=$L["PKCOLUMN_NAME"];}return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Of){return
queries("DROP VIEW ".implode(", ",array_map('table',$Of)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Of,$df){return
apply_queries("ALTER SCHEMA ".idf_escape($df)." TRANSFER",array_merge($T,$Of));}function
trigger($D){if($D=="")return
array();$M=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($D));$K=reset($M);if($K)$K["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$K["text"]);return$K;}function
triggers($R){$K=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$L)$K[$L["name"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!="")return$_GET["ns"];return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($Ae){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Zb){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Zb);}$y="mssql";$yf=array();$Te=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(15)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(16)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(17)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$z=>$X){$yf+=$X;$Te[$z]=array_keys($X);}$Ef=array();$Id=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$rc=array("len","lower","round","upper");$tc=array("avg","count","count distinct","max","min","sum");$Cb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$yb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$ae=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($I,$zf=false){$G=array('SelectExpression'=>$I,'ConsistentRead'=>'true');if($this->next)$G['NextToken']=$this->next;$J=sdb_request_all('Select','Item',$G,$this->timeout);if($J===false)return$J;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$I)){$Xe=0;foreach($J
as$Qc)$Xe+=$Qc->Attribute->Value;$J=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Xe,))));}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
Min_Result($J){foreach($J
as$Qc){$L=array();if($Qc->Name!='')$L['itemName()']=(string)$Qc->Name;foreach($Qc->Attribute
as$Aa){$D=$this->_processValue($Aa->Name);$Y=$this->_processValue($Aa->Value);if(isset($L[$D])){$L[$D]=(array)$L[$D];$L[$D][]=$Y;}else$L[$D]=$Y;}$this->_rows[]=$L;foreach($L
as$z=>$X){if(!isset($this->_rows[0][$z]))$this->_rows[0][$z]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($Eb){return(is_object($Eb)&&$Eb['encoding']=='base64'?base64_decode($Eb):(string)$Eb);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$z=>$X)$K[$z]=$L[$z];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Vc=array_keys($this->_rows[0]);return(object)array('name'=>$Vc[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$ce="itemName()";function
_chunkRequest($Ec,$qa,$G,$Tb=array()){global$h;foreach(array_chunk($Ec,25)as$Sa){$Sd=$G;foreach($Sa
as$t=>$u){$Sd["Item.$t.ItemName"]=$u;foreach($Tb
as$z=>$X)$Sd["Item.$t.$z"]=$X;}if(!sdb_request($qa,$Sd))return
false;}$h->affected_rows=count($Ec);return
true;}function
_extractIds($R,$ke,$_){$K=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$ke,$C))$K=array_map('idf_unescape',$C[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$ke.($_?" LIMIT 1":"")))as$Qc)$K[]=$Qc->Name;}return$K;}function
select($R,$N,$Z,$s,$E=array(),$_=1,$F=0,$ee=false){global$h;$h->next=$_GET["next"];$K=parent::select($R,$N,$Z,$s,$E,$_,$F,$ee);$h->next=0;return$K;}function
delete($R,$ke,$_=0){return$this->_chunkRequest($this->_extractIds($R,$ke,$_),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$P,$ke,$_=0,$He="\n"){$pb=array();$Oc=array();$t=0;$Ec=$this->_extractIds($R,$ke,$_);$u=idf_unescape($P["`itemName()`"]);unset($P["`itemName()`"]);foreach($P
as$z=>$X){$z=idf_unescape($z);if($X=="NULL"||($u!=""&&array($u)!=$Ec))$pb["Attribute.".count($pb).".Name"]=$z;if($X!="NULL"){foreach((array)$X
as$Rc=>$W){$Oc["Attribute.$t.Name"]=$z;$Oc["Attribute.$t.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Rc)$Oc["Attribute.$t.Replace"]="true";$t++;}}}$G=array('DomainName'=>$R);return(!$Oc||$this->_chunkRequest(($u!=""?array($u):$Ec),'BatchPutAttributes',$G,$Oc))&&(!$pb||$this->_chunkRequest($Ec,'BatchDeleteAttributes',$G,$pb));}function
insert($R,$P){$G=array("DomainName"=>$R);$t=0;foreach($P
as$D=>$Y){if($Y!="NULL"){$D=idf_unescape($D);if($D=="itemName()")$G["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$G["Attribute.$t.Name"]=$D;$G["Attribute.$t.Value"]=(is_array($Y)?$X:idf_unescape($Y));$t++;}}}}return
sdb_request('PutAttributes',$G);}function
insertUpdate($R,$M,$ce){foreach($M
as$P){if(!$this->update($R,$P,"WHERE `itemName()` = ".q($P["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Zb){return
preg_match('~sql~',$Zb);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$Ya){}function
tables_list(){global$h;$K=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$K[(string)$R]='table';if($h->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$K;}function
table_status($D="",$Yb=false){$K=array();foreach(($D!=""?array($D=>true):tables_list())as$R=>$U){$L=array("Name"=>$R,"Auto_increment"=>"");if(!$Yb){$sd=sdb_request('DomainMetadata',array('DomainName'=>$R));if($sd){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$z=>$X)$L[$z]=(string)$sd->$X;}}if($D!="")return$L;$K[$R]=$L;}return$K;}function
explain($h,$I){}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($v){return
idf_escape($v);}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
limit($I,$Z,$_,$Bd=0,$He=" "){return" $I$Z".($_!==null?$He."LIMIT $_":"");}function
unconvert_field($p,$K){return$K;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$D,$q,$gc,$bb,$Kb,$d,$Da,$Td){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$D)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($ua,$lb,$z,$oe=false){$Ma=64;if(strlen($z)>$Ma)$z=pack("H*",$ua($z));$z=str_pad($z,$Ma,"\0");$Sc=$z^str_repeat("\x36",$Ma);$Tc=$z^str_repeat("\x5C",$Ma);$K=$ua($Tc.pack("H*",$ua($Sc.$lb)));if($oe)$K=pack("H*",$K);return$K;}function
sdb_request($qa,$G=array()){global$b,$h;list($Bc,$G['AWSAccessKeyId'],$De)=$b->credentials();$G['Action']=$qa;$G['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$G['Version']='2009-04-15';$G['SignatureVersion']=2;$G['SignatureMethod']='HmacSHA1';ksort($G);$I='';foreach($G
as$z=>$X)$I.='&'.rawurlencode($z).'='.rawurlencode($X);$I=str_replace('%7E','~',substr($I,1));$I.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$Bc)."\n/\n$I",$De,true)));@ini_set('track_errors',1);$ac=@file_get_contents((preg_match('~^https?://~',$Bc)?$Bc:"http://$Bc"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$I,'ignore_errors'=>1,))));if(!$ac){$h->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Uf=simplexml_load_string($ac);if(!$Uf){$o=libxml_get_last_error();$h->error=$o->message;return
false;}if($Uf->Errors){$o=$Uf->Errors->Error;$h->error="$o->Message ($o->Code)";return
false;}$h->error='';$cf=$qa."Result";return($Uf->$cf?$Uf->$cf:true);}function
sdb_request_all($qa,$cf,$G=array(),$jf=0){$K=array();$Qe=($jf?microtime(true):0);$_=(preg_match('~LIMIT\s+(\d+)\s*$~i',$G['SelectExpression'],$B)?$B[1]:0);do{$Uf=sdb_request($qa,$G);if(!$Uf)break;foreach($Uf->$cf
as$Eb)$K[]=$Eb;if($_&&count($K)>=$_){$_GET["next"]=$Uf->NextToken;break;}if($jf&&microtime(true)-$Qe>$jf)return
false;$G['NextToken']=$Uf->NextToken;if($_)$G['SelectExpression']=preg_replace('~\d+\s*$~',$_-count($K),$G['SelectExpression']);}while($Uf->NextToken);return$K;}$y="simpledb";$Id=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$rc=array();$tc=array("count");$Cb=array(array("json"));}$yb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$ae=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($O,$V,$H){global$b;$m=$b->database();$Kd=array();if($V!=""){$Kd["username"]=$V;$Kd["password"]=$H;}if($m!="")$Kd["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$O",$Kd);return
true;}catch(Exception$Pb){$this->error=$Pb->getMessage();return
false;}}function
query($I){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$Pb){$this->error=$Pb->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
Min_Result($J){foreach($J
as$Qc){$L=array();foreach($Qc
as$z=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$z]=63;$L[$z]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$L;foreach($L
as$z=>$X){if(!isset($this->_rows[0][$z]))$this->_rows[0][$z]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$z=>$X)$K[$z]=$L[$z];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Vc=array_keys($this->_rows[0]);$D=$Vc[$this->_offset++];return(object)array('name'=>$D,'charsetnr'=>$this->_charset[$D],);}}}class
Min_Driver
extends
Min_SQL{public$ce="_id";function
quote($Y){return($Y===null?$Y:parent::quote($Y));}function
select($R,$N,$Z,$s,$E=array(),$_=1,$F=0,$ee=false){$N=($N==array("*")?array():array_fill_keys($N,true));$Me=array();foreach($E
as$X){$X=preg_replace('~ DESC$~','',$X,1,$hb);$Me[$X]=($hb?-1:1);}return
new
Min_Result(iterator_to_array($this->_conn->_db->selectCollection($R)->find(array(),$N)->sort($Me)->limit(+$_)->skip($F*$_)));}function
insert($R,$P){try{$K=$this->_conn->_db->selectCollection($R)->insert($P);$this->_conn->errno=$K['code'];$this->_conn->error=$K['err'];$this->_conn->last_id=$P['_id'];return!$K['err'];}catch(Exception$Pb){$this->_conn->error=$Pb->getMessage();return
false;}}}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
error(){global$h;return
h($h->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($fc){global$h;$K=array();$mb=$h->_link->listDBs();foreach($mb['databases']as$m)$K[]=$m['name'];return$K;}function
collations(){return
array();}function
db_collation($m,$Ya){}function
count_tables($l){global$h;$K=array();foreach($l
as$m)$K[$m]=count($h->_link->selectDB($m)->getCollectionNames(true));return$K;}function
tables_list(){global$h;return
array_fill_keys($h->_db->getCollectionNames(true),'table');}function
table_status($D="",$Yb=false){$K=array();foreach(tables_list()as$R=>$U){$K[$R]=array("Name"=>$R);if($D==$R)return$K[$R];}return$K;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$h;foreach($l
as$m){$ve=$h->_link->selectDB($m)->drop();if(!$ve['ok'])return
false;}return
true;}function
indexes($R,$i=null){global$h;$K=array();foreach($h->_db->selectCollection($R)->getIndexInfo()as$w){$sb=array();foreach($w["key"]as$e=>$U)$sb[]=($U==-1?'1':null);$K[$w["name"]]=array("type"=>($w["name"]=="_id_"?"PRIMARY":($w["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($w["key"]),"lengths"=>array(),"descs"=>$sb,);}return$K;}function
fields($R){return
fields_from_edit();}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$h;return$h->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$D,$q,$gc,$bb,$Kb,$d,$Da,$Td){global$h;if($R==""){$h->_db->createCollection($D);return
true;}}function
drop_tables($T){global$h;foreach($T
as$R){$ve=$h->_db->selectCollection($R)->drop();if(!$ve['ok'])return
false;}return
true;}function
truncate_tables($T){global$h;foreach($T
as$R){$ve=$h->_db->selectCollection($R)->remove();if(!$ve['ok'])return
false;}return
true;}function
alter_indexes($R,$c){global$h;foreach($c
as$X){list($U,$D,$P)=$X;if($P=="DROP")$K=$h->_db->command(array("deleteIndexes"=>$R,"index"=>$D));else{$f=array();foreach($P
as$e){$e=preg_replace('~ DESC$~','',$e,1,$hb);$f[$e]=($hb?-1:1);}$K=$h->_db->selectCollection($R)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$D,));}if($K['errmsg']){$h->error=$K['errmsg'];return
false;}}return
true;}function
last_id(){global$h;return$h->last_id;}function
table($v){return$v;}function
idf_escape($v){return$v;}function
support($Zb){return
preg_match("~database|indexes~",$Zb);}$y="mongo";$Id=array("=");$rc=array();$tc=array();$Cb=array(array("json"));}$yb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$ae=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($Ud,$fb=array(),$td='GET'){@ini_set('track_errors',1);$ac=@file_get_contents($this->_url.'/'.ltrim($Ud,'/'),false,stream_context_create(array('http'=>array('method'=>$td,'content'=>json_encode($fb),'ignore_errors'=>1,))));if(!$ac){$this->error=$php_errormsg;return$ac;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$ac;return
false;}$K=json_decode($ac,true);if(!$K){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$eb=get_defined_constants(true);foreach($eb['json']as$D=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$D)){$this->error=$D;break;}}}}return$K;}function
query($Ud,$fb=array(),$td='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Ud,'/'),$fb,$td);}function
connect($O,$V,$H){$this->_url="http://$V:$H@$O/";$K=$this->query('');if($K)$this->server_info=$K['version']['number'];return(bool)$K;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
Min_Result($M){$this->num_rows=count($this->_rows);$this->_rows=$M;reset($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);next($this->_rows);return$K;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$N,$Z,$s,$E=array(),$_=1,$F=0,$ee=false){global$b;$lb=array();$I="$R/_search";if($N!=array("*"))$lb["fields"]=$N;if($E){$Me=array();foreach($E
as$Xa){$Xa=preg_replace('~ DESC$~','',$Xa,1,$hb);$Me[]=($hb?array($Xa=>"desc"):$Xa);}$lb["sort"]=$Me;}if($_){$lb["size"]=+$_;if($F)$lb["from"]=($F*$_);}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""){$ef=array("match"=>array(($X["col"]!=""?$X["col"]:"_all")=>$X["val"]));if($X["op"]=="=")$lb["query"]["filtered"]["filter"]["and"][]=$ef;else$lb["query"]["filtered"]["query"]["bool"]["must"][]=$ef;}}if($lb["query"]&&!$lb["query"]["filtered"]["query"])$lb["query"]["filtered"]["query"]=array("match_all"=>array());if($ee)echo$b->selectQuery("$I: ".print_r($lb,true));$Ce=$this->_conn->query($I,$lb);if(!$Ce)return
false;$K=array();foreach($Ce['hits']['hits']as$Ac){$L=array();$q=$Ac['_source'];if($N!=array("*")){$q=array();foreach($N
as$z)$q[$z]=$Ac['fields'][$z];}foreach($q
as$z=>$X)$L[$z]=(is_array($X)?json_encode($X):$X);$K[]=$L;}return
new
Min_Result($K);}}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
support($Zb){return
preg_match("~database|table|columns~",$Zb);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$h;$K=$h->rootQuery('_aliases');if($K)$K=array_keys($K);return$K;}function
collations(){return
array();}function
db_collation($m,$Ya){}function
count_tables($l){global$h;$K=$h->query('_mapping');if($K)$K=array_map('count',$K);return$K;}function
tables_list(){global$h;$K=$h->query('_mapping');if($K)$K=array_fill_keys(array_keys(reset($K)),'table');return$K;}function
table_status($D="",$Yb=false){$K=tables_list();if($K){foreach($K
as$z=>$U)$K[$z]=array("Name"=>$z,"Engine"=>$U);if($D!="")return$K[$D];}return$K;}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$h;$jd=$h->query("$R/_mapping");$K=array();if($jd){foreach($jd[$R]['properties']as$D=>$p)$K[$D]=array("field"=>$D,"full_type"=>$p["type"],"type"=>$p["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
foreign_keys($R){return
array();}function
table($v){return$v;}function
idf_escape($v){return$v;}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$h;return$h->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$h;return$h->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($T){global$h;$K=true;foreach($T
as$R)$K=$K&&$h->query(urlencode($R),array(),'DELETE');return$K;}$y="elastic";$Id=array("=","query");$rc=array();$tc=array();$Cb=array(array("json"));}$yb=array("server"=>"MySQL")+$yb;if(!defined("DRIVER")){$ae=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($O,$V,$H){mysqli_report(MYSQLI_REPORT_OFF);list($Bc,$Yd)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$Bc:ini_get("mysqli.default_host")),($O.$V!=""?$V:ini_get("mysqli.default_user")),($O.$V.$H!=""?$H:ini_get("mysqli.default_pw")),null,(is_numeric($Yd)?$Yd:ini_get("mysqli.default_port")),(!is_numeric($Yd)?$Yd:null));if($K){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$K;}function
result($I,$p=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$p];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$H){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$V"!=""?$V:ini_get("mysql.default_user")),("$O$V$H"!=""?$H:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($I,$zf=false){$J=@($zf?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$p=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$p);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$V,$H){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$H);$this->query("SET NAMES utf8");return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($I,$zf=false){$this->setAttribute(1000,!$zf);return
parent::query($I,$zf);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$M,$ce){$f=array_keys(reset($M));$be="INSERT INTO ".table($R)." (".implode(", ",$f).") VALUES\n";$Kf=array();foreach($f
as$z)$Kf[$z]="$z = VALUES($z)";$We="\nON DUPLICATE KEY UPDATE ".implode(", ",$Kf);$Kf=array();$dd=0;foreach($M
as$P){$Y="(".implode(", ",$P).")";if($Kf&&(strlen($be)+$dd+strlen($Y)+strlen($We)>1e6)){if(!queries($be.implode(",\n",$Kf).$We))return
false;$Kf=array();$dd=0;}$Kf[]=$Y;$dd+=strlen($Y)+2;}return
queries($be.implode(",\n",$Kf).$We);}}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
table($v){return
idf_escape($v);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2])){$h->query("SET sql_quote_show_create = 1, autocommit = 1");return$h;}$K=$h->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($_e=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$_e;return$K;}function
get_databases($fc){global$h;$K=get_session("dbs");if($K===null){$I=($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($fc?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Z,$_,$Bd=0,$He=" "){return" $I$Z".($_!==null?$He."LIMIT $_".($Bd?" OFFSET $Bd":""):"");}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$Ya){global$h;$K=null;$ib=$h->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$ib,$B))$K=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ib,$B))$K=$Ya[$B[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(preg_match("~YES|DEFAULT~",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals($h->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$K=array();foreach($l
as$m)$K[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$K;}function
table_status($D="",$Yb=false){global$h;$K=array();foreach(get_rows($Yb&&$h->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$B);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($L["Default"]!=""||preg_match("~char|set~",$B[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$L["Extra"],$B)?$B[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(preg_split('~, *~',$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$i)as$L){$K[$L["Key_name"]]["type"]=($L["Key_name"]=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?"INDEX":"UNIQUE")));$K[$L["Key_name"]]["columns"][]=$L["Column_name"];$K[$L["Key_name"]]["lengths"][]=$L["Sub_part"];$K[$L["Key_name"]]["descs"][]=null;}return$K;}function
foreign_keys($R){global$h,$Dd;static$Vd='`(?:[^`]|``)+`';$K=array();$jb=$h->result("SHOW CREATE TABLE ".table($R),1);if($jb){preg_match_all("~CONSTRAINT ($Vd) FOREIGN KEY \\(((?:$Vd,? ?)+)\\) REFERENCES ($Vd)(?:\\.($Vd))? \\(((?:$Vd,? ?)+)\\)(?: ON DELETE ($Dd))?(?: ON UPDATE ($Dd))?~",$jb,$C,PREG_SET_ORDER);foreach($C
as$B){preg_match_all("~$Vd~",$B[2],$Ne);preg_match_all("~$Vd~",$B[5],$df);$K[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Ne[0]),"target"=>array_map('idf_unescape',$df[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$z=>$X)asort($K[$z]);return$K;}function
information_schema($m){global$h;return($h->server_info>=5&&$m=="information_schema")||($h->server_info>=5.5&&$m=="performance_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
error_line(){global$h;if(preg_match('~ at line ([0-9]+)$~',$h->error,$qe))return$qe[1]-1;}function
create_database($m,$d){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($m).($d?" COLLATE ".q($d):""));}function
drop_databases($l){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($D,$d){if(create_database($D,$d)){$se=array();foreach(tables_list()as$R=>$U)$se[]=table($R)." TO ".idf_escape($D).".".table($R);if(!$se||queries("RENAME TABLE ".implode(", ",$se))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ea=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$Ea="";break;}if($w["type"]=="PRIMARY")$Ea=" UNIQUE";}}return" AUTO_INCREMENT$Ea";}function
alter_table($R,$D,$q,$gc,$bb,$Kb,$d,$Da,$Td){$c=array();foreach($q
as$p)$c[]=($p[1]?($R!=""?($p[0]!=""?"CHANGE ".idf_escape($p[0]):"ADD"):" ")." ".implode($p[1]).($R!=""?$p[2]:""):"DROP ".idf_escape($p[0]));$c=array_merge($c,$gc);$Re="COMMENT=".q($bb).($Kb?" ENGINE=".q($Kb):"").($d?" COLLATE ".q($d):"").($Da!=""?" AUTO_INCREMENT=$Da":"").$Td;if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n) $Re");if($R!=$D)$c[]="RENAME TO ".table($D);$c[]=$Re;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c));}function
alter_indexes($R,$c){foreach($c
as$z=>$X)$c[$z]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Of){return
queries("DROP VIEW ".implode(", ",array_map('table',$Of)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Of,$df){$se=array();foreach(array_merge($T,$Of)as$R)$se[]=table($R)." TO ".idf_escape($df).".".table($R);return
queries("RENAME TABLE ".implode(", ",$se));}function
copy_tables($T,$Of,$df){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$D=($df==DB?table("copy_$R"):idf_escape($df).".".table($R));if(!queries("DROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($R))||!queries("INSERT INTO $D SELECT * FROM ".table($R)))return
false;}foreach($Of
as$R){$D=($df==DB?table("copy_$R"):idf_escape($df).".".table($R));$Nf=view($R);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $Nf[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){global$h,$Lb,$Mc,$yf;$va=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$xf="((".implode("|",array_merge(array_keys($yf),$va)).")\\b(?:\\s*\\(((?:[^'\")]*|$Lb)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$Vd="\\s*(".($U=="FUNCTION"?"":$Mc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$xf";$ib=$h->result("SHOW CREATE $U ".idf_escape($D),2);preg_match("~\\(((?:$Vd\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$xf\\s+":"")."(.*)~is",$ib,$B);$q=array();preg_match_all("~$Vd\\s*,?~is",$B[1],$C,PREG_SET_ORDER);foreach($C
as$Rd){$D=str_replace("``","`",$Rd[2]).$Rd[3];$q[]=array("field"=>$D,"type"=>strtolower($Rd[5]),"length"=>preg_replace_callback("~$Lb~s",'normalize_enum',$Rd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Rd[8] $Rd[7]"))),"null"=>1,"full_type"=>$Rd[4],"inout"=>strtoupper($Rd[1]),"collation"=>strtolower($Rd[9]),);}if($U!="FUNCTION")return
array("fields"=>$q,"definition"=>$B[11]);return
array("fields"=>$q,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$I){return$h->query("EXPLAIN ".($h->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ae){return
true;}function
create_sql($R,$Da){global$h;$K=$h->result("SHOW CREATE TABLE ".table($R),1);if(!$Da)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R,$Ue){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($Ue=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($p){if(preg_match("~binary~",$p["type"]))return"HEX(".idf_escape($p["field"]).")";if($p["type"]=="bit")return"BIN(".idf_escape($p["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$p["type"]))return"AsWKT(".idf_escape($p["field"]).")";}function
unconvert_field($p,$K){if(preg_match("~binary~",$p["type"]))$K="UNHEX($K)";if($p["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$p["type"]))$K="GeomFromText($K)";return$K;}function
support($Zb){global$h;return!preg_match("~scheme|sequence|type|view_trigger".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|routine|trigger|view":""):"")."~",$Zb);}$y="sql";$yf=array();$Te=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(15)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(16)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(20)=>array("enum"=>65535,"set"=>64),lang(17)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(19)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$z=>$X){$yf+=$X;$Te[$z]=array_keys($X);}$Ef=array("unsigned","zerofill","unsigned zerofill");$Id=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$rc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$tc=array("avg","count","count distinct","group_concat","max","min","sum");$Cb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.0.3";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' target='_blank' id='h1'>".lang(21)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($ib=false){return
password_file($ib);}function
database(){global$h;if($h){$l=$this->databases(false);return(!$l?$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$l[(information_schema($l[0])?1:0)]);}}function
schemas(){return
schemas();}function
databases($fc=true){return
get_databases($fc);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(22),'<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(23),'<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(24)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(25))."\n";}function
login($hd,$H){global$h;$h->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Ze){return
h($Ze["Comment"]!=""?$Ze["Comment"]:$Ze["Name"]);}function
fieldName($p,$E=0){return
h($p["comment"]!=""?$p["comment"]:$p["field"]);}function
selectLinks($Ze,$P=""){$a=$Ze["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$P).'">'.lang(26)."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Ye){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$z=>$X){$D=$this->tableName(table_status($z,true));if($D!=""){$Ce=preg_quote($Ye);$He="(:|\\s*-)?\\s+";$K[$z]["name"]=(preg_match("(^$Ce$He(.+)|^(.+?)$He$Ce\$)iu",$D,$B)?$B[2].$B[3]:$D);}else
unset($K[$z]);}return$K;}function
backwardKeysPrint($Ha,$L){foreach($Ha
as$R=>$Ga){foreach($Ga["keys"]as$Za){$A=ME.'select='.urlencode($R);$t=0;foreach($Za
as$e=>$X)$A.=where_link($t++,$e,$L[$X]);echo"<a href='".h($A)."'>".h($Ga["name"])."</a>";$A=ME.'edit='.urlencode($R);foreach($Za
as$e=>$X)$A.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($L[$X]);echo"<a href='".h($A)."' title='".lang(26)."'>+</a> ";}}}function
selectQuery($I){return"<!--\n".str_replace("--","--><!-- ",$I)."\n-->\n";}function
rowDescription($R){foreach(fields($R)as$p){if(preg_match("~varchar|character varying~",$p["type"]))return
idf_escape($p["field"]);}return"";}function
rowDescriptions($M,$ic){$K=$M;foreach($M[0]as$z=>$X){if(list($R,$u,$D)=$this->_foreignColumn($ic,$z)){$Ec=array();foreach($M
as$L)$Ec[$L[$z]]=q($L[$z]);$rb=$this->_values[$R];if(!$rb)$rb=get_key_vals("SELECT $u, $D FROM ".table($R)." WHERE $u IN (".implode(", ",$Ec).")");foreach($M
as$xd=>$L){if(isset($L[$z]))$K[$xd][$z]=(string)$rb[$L[$z]];}}}return$K;}function
selectLink($X,$p){}function
selectVal($X,$A,$p,$Nd){$K=($X===null?"&nbsp;":$X);$A=h($A);if(preg_match('~blob|bytea~',$p["type"])&&!is_utf8($X)){$K=lang(27,strlen($Nd));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$Nd))$K="<img src='$A' alt='$K'>";}if(like_bool($p)&&$K!="&nbsp;")$K=($X?lang(28):lang(29));if($A)$K="<a href='$A'>$K</a>";if(!$A&&!like_bool($p)&&preg_match('~int|float|double|decimal~',$p["type"]))$K="<div class='number'>$K</div>";elseif(preg_match('~date~',$p["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($X,$p){if(preg_match('~date|timestamp~',$p["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(30),$X);return$X;}function
selectColumnsPrint($N,$f){}function
selectSearchPrint($Z,$f,$x){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.lang(31)."</legend><div>\n";$Vc=array();foreach($Z
as$z=>$X)$Vc[$X["col"]]=$z;$t=0;$q=fields($_GET["select"]);foreach($f
as$D=>$qb){$p=$q[$D];if(preg_match("~enum~",$p["type"])||like_bool($p)){$z=$Vc[$D];$t--;echo"<div>".h($qb)."<input type='hidden' name='where[$t][col]' value='".h($D)."'>:",(like_bool($p)?" <select name='where[$t][val]'>".optionlist(array(""=>"",lang(29),lang(28)),$Z[$z]["val"],true)."</select>":enum_input("checkbox"," name='where[$t][val][]'",$p,(array)$Z[$z]["val"],($p["null"]?0:null))),"</div>\n";unset($f[$D]);}elseif(is_array($Kd=$this->_foreignKeyOptions($_GET["select"],$D))){if($q[$D]["null"])$Kd[0]='('.lang(5).')';$z=$Vc[$D];$t--;echo"<div>".h($qb)."<input type='hidden' name='where[$t][col]' value='".h($D)."'><input type='hidden' name='where[$t][op]' value='='>: <select name='where[$t][val]'>".optionlist($Kd,$Z[$z]["val"],true)."</select></div>\n";unset($f[$D]);}}$t=0;foreach($Z
as$X){if(($X["col"]==""||$f[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$t][col]'><option value=''>(".lang(32).")".optionlist($f,$X["col"],true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators,$X["op"]),"<input type='search' name='where[$t][val]' value='".h($X["val"])."' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";$t++;}}echo"<div><select name='where[$t][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".lang(32).")".optionlist($f,null,true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$t][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($E,$f,$x){$Md=array();foreach($x
as$z=>$w){$E=array();foreach($w["columns"]as$X)$E[]=$f[$X];if(count(array_filter($E,'strlen'))>1&&$z!="PRIMARY")$Md[$z]=implode(", ",$E);}if($Md){echo'<fieldset><legend>'.lang(33)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Md,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($_){echo"<fieldset><legend>".lang(34)."</legend><div>";echo
html_select("limit",array("","50","100"),$_),"</div></fieldset>\n";}function
selectLengthPrint($gf){}function
selectActionPrint($x){echo"<fieldset><legend>".lang(35)."</legend><div>","<input type='submit' value='".lang(36)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($Gb,$f){if($Gb){print_fieldset("email",lang(37),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(38).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(39).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(40)."'>\n";echo"<p>".lang(41).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($Gb)==1?'<input type="hidden" name="email_field" value="'.h(key($Gb)).'">':html_select("email_field",$Gb)),"<input type='submit' name='email' value='".lang(42)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$x){return
array(array(),array());}function
selectSearchProcess($q,$x){$K=array();foreach((array)$_GET["where"]as$z=>$Z){$Xa=$Z["col"];$Gd=$Z["op"];$X=$Z["val"];if(($z<0?"":$Xa).$X!=""){$cb=array();foreach(($Xa!=""?array($Xa=>$q[$Xa]):$q)as$D=>$p){if($Xa!=""||is_numeric($X)||!preg_match('~int|float|double|decimal~',$p["type"])){$D=idf_escape($D);if($Xa!=""&&$p["type"]=="enum")$cb[]=(in_array(0,$X)?"$D IS NULL OR ":"")."$D IN (".implode(", ",array_map('intval',$X)).")";else{$hf=preg_match('~char|text|enum|set~',$p["type"]);$Y=$this->processInput($p,(!$Gd&&$hf&&preg_match('~^[^%]+$~',$X)?"%$X%":$X));$cb[]=$D.($Y=="NULL"?" IS".($Gd==">="?" NOT":"")." $Y":(in_array($Gd,$this->operators)||$Gd=="="?" $Gd $Y":($hf?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($z<0&&$X=="0")$cb[]="$D IS NULL";}}}$K[]=($cb?"(".implode(" OR ",$cb).")":"0");}}return$K;}function
selectOrderProcess($q,$x){$Hc=$_GET["index_order"];if($Hc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($Hc!=""?array($x[$Hc]):$x)as$w){if($Hc!=""||$w["type"]=="INDEX"){$vc=array_filter($w["descs"]);$qb=false;foreach($w["columns"]as$X){if(preg_match('~date|timestamp~',$q[$X]["type"])){$qb=true;break;}}$K=array();foreach($w["columns"]as$z=>$X)$K[]=idf_escape($X).(($vc?$w["descs"][$z]:$qb)?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$ic){if($_POST["email_append"])return
true;if($_POST["email"]){$Ge=0;if($_POST["all"]||$_POST["check"]){$p=idf_escape($_POST["email_field"]);$Ve=$_POST["email_subject"];$qd=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Ve.$qd",$C);$M=get_rows("SELECT DISTINCT $p".($C[1]?", ".implode(", ",array_map('idf_escape',array_unique($C[1]))):"")." FROM ".table($_GET["select"])." WHERE $p IS NOT NULL AND $p != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($M,$ic)as$L){$te=array('{\\'=>'{');foreach($C[1]as$X)$te['{$'."$X}"]=$this->editVal($L[$X],$q[$X]);$Fb=$L[$_POST["email_field"]];if(is_mail($Fb)&&send_mail($Fb,strtr($Ve,$te),strtr($qd,$te),$_POST["email_from"],$_FILES["email_files"]))$Ge++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(43,$Ge));}return
false;}function
selectQueryBuild($N,$Z,$s,$E,$_,$F){return"";}function
messageQuery($I){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n-->";}function
editFunctions($p){$K=array();if($p["null"]&&preg_match('~blob~',$p["type"]))$K["NULL"]=lang(5);$K[""]=($p["null"]||$p["auto_increment"]||like_bool($p)?"":"*");if(preg_match('~date|time~',$p["type"]))$K["now"]=lang(44);if(preg_match('~_(md5|sha1)$~i',$p["field"],$B))$K[]=strtolower($B[1]);return$K;}function
editInput($R,$p,$Ba,$Y){if($p["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ba value='-1' checked><i>".lang(6)."</i></label> ":"").enum_input("radio",$Ba,$p,($Y||isset($_GET["select"])?$Y:0),($p["null"]?"":null));$Kd=$this->_foreignKeyOptions($R,$p["field"],$Y);if($Kd!==null)return(is_array($Kd)?"<select$Ba>".optionlist($Kd,$Y,true)."</select>":"<input value='".h($Y)."'$Ba class='hidden'><input value='".h($Kd)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($p["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($p))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$Ba>";$_c="";if(preg_match('~time~',$p["type"]))$_c=lang(45);if(preg_match('~date|timestamp~',$p["type"]))$_c=lang(46).($_c?" [$_c]":"");if($_c)return"<input value='".h($Y)."'$Ba> ($_c)";if(preg_match('~_(md5|sha1)$~i',$p["field"]))return"<input type='password' value='".h($Y)."'$Ba>";return'';}function
processInput($p,$Y,$r=""){if($r=="now")return"$r()";$K=$Y;if(preg_match('~date|timestamp~',$p["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(30)))).'(.*))',$Y,$B))$K=($B["p1"]!=""?$B["p1"]:($B["p2"]!=""?($B["p2"]<70?20:19).$B["p2"]:gmdate("Y")))."-$B[p3]$B[p4]-$B[p5]$B[p6]".end($B);$K=($p["type"]=="bit"&&preg_match('~^[0-9]+$~',$Y)?$K:q($K));if($Y==""&&like_bool($p))$K="0";elseif($Y==""&&($p["null"]||!preg_match('~char|text~',$p["type"])))$K="NULL";elseif(preg_match('~^(md5|sha1)$~',$r))$K="$r($K)";return
unconvert_field($p,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Ue,$I){global$h;$J=$h->query($I,1);if($J){while($L=$J->fetch_assoc()){if($Ue=="table"){dump_csv(array_keys($L));$Ue="INSERT";}dump_csv($L);}}}function
dumpFilename($Dc){return
friendly_url($Dc);}function
dumpHeaders($Dc,$vd=false){$Ub="csv";header("Content-Type: text/csv; charset=utf-8");return$Ub;}function
homepage(){return
true;}function
navigation($ud){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" target="_blank" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($ud=="auth"){$ec=true;foreach((array)$_SESSION["pwds"]as$Lf=>$Je){foreach($Je[""]as$V=>$H){if($H!==null){if($ec){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$ec=false;}echo"<a href='".h(auth_url($Lf,"",$V))."'>".($V!=""?h($V):"<i>".lang(5)."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($ud);if($ud!="db"&&$ud!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".lang(7)."\n";else$this->tablesPrint($S);}}}function
databasesPrint($ud){}function
tablesPrint($T){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$L){$D=$this->tableName($L);if(isset($L["Engine"])&&$D!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"]||$_GET["edit"]==$L["Name"])." title='".lang(47)."'>$D</a><br>\n";}}function
_foreignColumn($ic,$e){foreach((array)$ic[$e]as$hc){if(count($hc["source"])==1){$D=$this->rowDescription($hc["table"]);if($D!=""){$u=idf_escape($hc["target"][0]);return
array($hc["table"],$u,$D);}}}}function
_foreignKeyOptions($R,$e,$Y=null){global$h;if(list($df,$u,$D)=$this->_foreignColumn(column_foreign_keys($R),$e)){$K=&$this->_values[$df];if($K===null){$S=table_status($df);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $u, $D FROM ".table($df)." ORDER BY 2"));}if(!$K&&$Y!==null)return$h->result("SELECT $D FROM ".table($df)." WHERE $u = ".q($Y));return$K;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($lf,$o="",$Pa=array(),$mf=""){global$ba,$ca,$b,$yb,$y;page_headers();$nf=$lf.($mf!=""?": $mf":"");$of=strip_tags($nf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ba,'" dir="',lang(48),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$of,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.0.3",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.0.3",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.3",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.3",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(48),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ca');\""),'>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="help" class="jush-',$y,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Pa!==null){$A=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($A?$A:".").'">'.$yb[DRIVER].'</a> &raquo; ';$A=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):lang(49));if($Pa===false)echo"$O\n";else{echo"<a href='".($A?h($A):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Pa)))echo'<a href="'.h($A."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Pa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Pa
as$z=>$X){$qb=(is_array($X)?$X[1]:h($X));if($qb!="")echo"<a href='".h(ME."$z=").urlencode(is_array($X)?$X[0]:$X)."'>$qb</a> &raquo; ";}}echo"$lf\n";}}echo"<h2>$nf</h2>\n";restart_session();page_messages($o);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($o){$Gf=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$rd=$_SESSION["messages"][$Gf];if($rd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$rd)."</div>\n";unset($_SESSION["messages"][$Gf]);}if($o)echo"<div class='error'>$o</div>\n";}function
page_footer($ud=""){global$b,$qf;echo'</div>

';switch_lang();if($ud!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(50),'" id="logout">
<input type="hidden" name="token" value="',$qf,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($ud);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($xd){while($xd>=2147483648)$xd-=4294967296;while($xd<=-2147483649)$xd+=4294967296;return(int)$xd;}function
long2str($W,$Qf){$_e='';foreach($W
as$X)$_e.=pack('V',$X);if($Qf)return
substr($_e,0,end($W));return$_e;}function
str2long($_e,$Qf){$W=array_values(unpack('V*',str_pad($_e,4*ceil(strlen($_e)/4),"\0")));if($Qf)$W[]=strlen($_e);return$W;}function
xxtea_mx($Wf,$Vf,$Xe,$Rc){return
int32((($Wf>>5&0x7FFFFFF)^$Vf<<2)+(($Vf>>3&0x1FFFFFFF)^$Wf<<4))^int32(($Xe^$Vf)+($Rc^$Wf));}function
encrypt_string($Se,$z){if($Se=="")return"";$z=array_values(unpack("V*",pack("H*",md5($z))));$W=str2long($Se,true);$xd=count($W)-1;$Wf=$W[$xd];$Vf=$W[0];$ie=floor(6+52/($xd+1));$Xe=0;while($ie-->0){$Xe=int32($Xe+0x9E3779B9);$Bb=$Xe>>2&3;for($Qd=0;$Qd<$xd;$Qd++){$Vf=$W[$Qd+1];$wd=xxtea_mx($Wf,$Vf,$Xe,$z[$Qd&3^$Bb]);$Wf=int32($W[$Qd]+$wd);$W[$Qd]=$Wf;}$Vf=$W[0];$wd=xxtea_mx($Wf,$Vf,$Xe,$z[$Qd&3^$Bb]);$Wf=int32($W[$xd]+$wd);$W[$xd]=$Wf;}return
long2str($W,false);}function
decrypt_string($Se,$z){if($Se=="")return"";if(!$z)return
false;$z=array_values(unpack("V*",pack("H*",md5($z))));$W=str2long($Se,false);$xd=count($W)-1;$Wf=$W[$xd];$Vf=$W[0];$ie=floor(6+52/($xd+1));$Xe=int32($ie*0x9E3779B9);while($Xe){$Bb=$Xe>>2&3;for($Qd=$xd;$Qd>0;$Qd--){$Wf=$W[$Qd-1];$wd=xxtea_mx($Wf,$Vf,$Xe,$z[$Qd&3^$Bb]);$Vf=int32($W[$Qd]-$wd);$W[$Qd]=$Vf;}$Wf=$W[$xd];$wd=xxtea_mx($Wf,$Vf,$Xe,$z[$Qd&3^$Bb]);$Vf=int32($W[0]-$wd);$W[0]=$Vf;$Xe=int32($Xe-0x9E3779B9);}return
long2str($W,true);}$h='';$xc=$_SESSION["token"];if(!$xc)$_SESSION["token"]=rand(1,1e6);$qf=get_token();$Wd=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($z)=explode(":",$X);$Wd[$z]=$X;}}$Ca=$_POST["auth"];if($Ca){session_regenerate_id();$n=$Ca["driver"];$O=$Ca["server"];$V=$Ca["username"];$H=$Ca["password"];$m=$Ca["db"];set_password($n,$O,$V,$H);$_SESSION["db"][$n][$O][$V][$m]=true;if($Ca["permanent"]){$z=base64_encode($n)."-".base64_encode($O)."-".base64_encode($V)."-".base64_encode($m);$fe=$b->permanentLogin(true);$Wd[$z]="$z:".base64_encode($fe?encrypt_string($H,$fe):"");cookie("adminer_permanent",implode(" ",$Wd));}if(count($_POST)==1||DRIVER!=$n||SERVER!=$O||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($n,$O,$V,$m));}elseif($_POST["logout"]){if($xc&&!verify_token()){page_header(lang(50),lang(51));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$z)set_session($z,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(52));}}elseif($Wd&&!$_SESSION["pwds"]){session_regenerate_id();$fe=$b->permanentLogin();foreach($Wd
as$z=>$X){list(,$Ta)=explode(":",$X);list($Lf,$O,$V,$m)=array_map('base64_decode',explode("-",$z));set_password($Lf,$O,$V,decrypt_string(base64_decode($Ta),$fe));$_SESSION["db"][$Lf][$O][$V][$m]=true;}}function
unset_permanent(){global$Wd;foreach($Wd
as$z=>$X){list($Lf,$O,$V,$m)=array_map('base64_decode',explode("-",$z));if($Lf==DRIVER&&$O==SERVER&&$V==$_GET["username"]&&$m==DB)unset($Wd[$z]);}cookie("adminer_permanent",implode(" ",$Wd));}function
auth_error($Rb=null){global$h,$b,$xc;$Ke=session_name();$o="";if(!$_COOKIE[$Ke]&&$_GET[$Ke]&&ini_bool("session.use_only_cookies"))$o=lang(53);elseif(isset($_GET["username"])){if(($_COOKIE[$Ke]||$_GET[$Ke])&&!$xc)$o=lang(54);else{$H=get_password();if($H!==null){$o=h($Rb?$Rb->getMessage():(is_string($h)?$h:lang(55)));if($H===false)$o.='<br>'.lang(56,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$G=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$G["lifetime"]);page_header(lang(24),$o,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}function
set_password($Lf,$O,$V,$H){$_SESSION["pwds"][$Lf][$O][$V]=($_COOKIE["adminer_key"]&&is_string($H)?array(encrypt_string($H,$_COOKIE["adminer_key"])):$H);}function
get_password(){$K=get_session("pwds");if(is_array($K))$K=($_COOKIE["adminer_key"]?decrypt_string($K[0],$_COOKIE["adminer_key"]):false);return$K;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(57),lang(58,implode(", ",$ae)),false);page_footer("auth");exit;}$h=connect();}if(!is_object($h)||!$b->login($_GET["username"],get_password())){auth_error();exit;}$n=new
Min_Driver($h);if($Ca&&$_POST["token"])$_POST["token"]=$qf;$o='';if($_POST){if(!verify_token()){$Lc="max_input_vars";$od=ini_get($Lc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$z){$X=ini_get($z);if($X&&(!$od||$X<$od)){$Lc=$z;$od=$X;}}}$o=(!$_POST["token"]&&$od?lang(59,"'$Lc'"):lang(51));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$o=lang(60,"'post_max_size'");if(isset($_GET["sql"]))$o.=' '.lang(61);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$h->select_db($b->database());function
email_header($yc){return"=?UTF-8?B?".base64_encode($yc)."?=";}function
send_mail($Fb,$Ve,$qd,$pc="",$cc=array()){$Mb=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$qd=str_replace("\n",$Mb,wordwrap(str_replace("\r","","$qd\n")));$Oa=uniqid("boundary");$_a="";foreach((array)$cc["error"]as$z=>$X){if(!$X)$_a.="--$Oa$Mb"."Content-Type: ".str_replace("\n","",$cc["type"][$z]).$Mb."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$cc["name"][$z])."\"$Mb"."Content-Transfer-Encoding: base64$Mb$Mb".chunk_split(base64_encode(file_get_contents($cc["tmp_name"][$z])),76,$Mb).$Mb;}$Ja="";$zc="Content-Type: text/plain; charset=utf-8$Mb"."Content-Transfer-Encoding: 8bit";if($_a){$_a.="--$Oa--$Mb";$Ja="--$Oa$Mb$zc$Mb$Mb";$zc="Content-Type: multipart/mixed; boundary=\"$Oa\"";}$zc.=$Mb."MIME-Version: 1.0$Mb"."X-Mailer: Adminer Editor".($pc?$Mb."From: ".str_replace("\n","",$pc):"");return
mail($Fb,email_header($Ve),$Ja.$qd.$_a,$zc);}function
like_bool($p){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$p["full_type"]);}$Dd="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$yb[DRIVER]=lang(24);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$q=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$N=array(idf_escape($_GET["field"]));$J=$n->select($a,$N,array(where($_GET,$q)),$N);$L=($J?$J->fetch_row():array());echo$L[0];exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$q=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$q):""):where($_GET,$q));$Ff=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($q
as$D=>$p){if(!isset($p["privileges"][$Ff?"update":"insert"])||$b->fieldName($p)=="")unset($q[$D]);}if($_POST&&!$o&&!isset($_GET["select"])){$gd=$_POST["referer"];if($_POST["insert"])$gd=($Ff?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$gd))$gd=ME."select=".urlencode($a);$x=indexes($a);$Af=unique_array($_GET["where"],$x);$le="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($gd,lang(62),$n->delete($a,$le,!$Af));else{$P=array();foreach($q
as$D=>$p){$X=process_input($p);if($X!==false&&$X!==null)$P[idf_escape($D)]=$X;}if($Ff){if(!$P)redirect($gd);queries_redirect($gd,lang(63),$n->update($a,$P,$le,!$Af));if(is_ajax()){page_headers();page_messages($o);exit;}}else{$J=$n->insert($a,$P);$bd=($J?last_id():0);queries_redirect($gd,lang(64,($bd?" $bd":"")),$J);}}}$af=$b->tableName(table_status1($a,true));page_header(($Ff?lang(65):lang(40)),$o,array("select"=>array($a,$af)),$af);$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Z){$N=array();foreach($q
as$D=>$p){if(isset($p["privileges"]["select"])){$ya=convert_field($p);if($_POST["clone"]&&$p["auto_increment"])$ya="''";if($y=="sql"&&preg_match("~enum|set~",$p["type"]))$ya="1*".idf_escape($D);$N[]=($ya?"$ya AS ":"").idf_escape($D);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$n->select($a,$N,array($Z),$N,array(),(isset($_GET["select"])?2:1));$L=$J->fetch_assoc();if(!$L)$L=false;if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$q){if(!$Z){$J=$n->select($a,array("*"),$Z,array("*"));$L=($J?$J->fetch_assoc():false);if(!$L)$L=array($n->primary=>"");}if($L){foreach($L
as$z=>$X){if(!$Z)$L[$z]=null;$q[$z]=array("field"=>$z,"null"=>($z!=$n->primary),"auto_increment"=>($z==$n->primary));}}}if($L===false)echo"<p class='error'>".lang(66)."\n";echo'
<div id="message"></div>

<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$q)echo"<p class='error'>".lang(67)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$D=>$p){echo"<tr><th>".$b->fieldName($p);$ob=$_GET["set"][bracket_escape($D)];if($ob===null){$ob=$p["default"];if($p["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$ob,$qe))$ob=$qe[1];}$Y=($L!==null?($L[$D]!=""&&$y=="sql"&&preg_match("~enum|set~",$p["type"])?(is_array($L[$D])?array_sum($L[$D]):+$L[$D]):$L[$D]):(!$Ff&&$p["auto_increment"]?"":(isset($_GET["select"])?false:$ob)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$p);$r=($_POST["save"]?(string)$_POST["function"][$D]:($Ff&&$p["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$p["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($p,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo'<p>
';if($q){echo"<input type='submit' value='".lang(68)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Ff?lang(69)."' onclick='return !ajaxForm(this.form, \"".lang(70).'...", this)':lang(71))."' title='Ctrl+Shift+Enter'>\n";}echo($Ff?"<input type='submit' name='delete' value='".lang(72)."'".confirm().">\n":($_POST||!$q?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$qf,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$x=indexes($a);$q=fields($a);$kc=column_foreign_keys($a);$Cd="";if($S["Oid"]){$Cd=($y=="sqlite"?"rowid":"oid");$x[]=array("type"=>"PRIMARY","columns"=>array($Cd));}parse_str($_COOKIE["adminer_import"],$ra);$ye=array();$f=array();$gf=null;foreach($q
as$z=>$p){$D=$b->fieldName($p);if(isset($p["privileges"]["select"])&&$D!=""){$f[$z]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($p))$gf=$b->selectLengthProcess();}$ye+=$p["privileges"];}list($N,$s)=$b->selectColumnsProcess($f,$x);$Pc=count($s)<count($N);$Z=$b->selectSearchProcess($q,$x);$E=$b->selectOrderProcess($q,$x);$_=$b->selectLimitProcess();$pc=($N?implode(", ",$N):"*".($Cd?", $Cd":"")).convert_fields($f,$q,$N)."\nFROM ".table($a);$sc=($s&&$Pc?"\nGROUP BY ".implode(", ",$s):"").($E?"\nORDER BY ".implode(", ",$E):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Bf=>$L){$ya=convert_field($q[key($L)]);$N=array($ya?$ya:idf_escape(key($L)));$Z[]=where_check($Bf,$q);$K=$n->select($a,$N,$Z,$N);if($K)echo
reset($K->fetch_row());}exit;}if($_POST&&!$o){$Sf=$Z;if(!$_POST["all"]&&is_array($_POST["check"]))$Sf[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Sf=($Sf?"\nWHERE ".implode(" AND ",$Sf):"");$ce=$Df=null;foreach($x
as$w){if($w["type"]=="PRIMARY"){$ce=array_flip($w["columns"]);$Df=($N?$ce:array());break;}}foreach((array)$Df
as$z=>$X){if(in_array(idf_escape($z),$N))unset($Df[$z]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Df===array())$I="SELECT $pc$Sf$sc";else{$_f=array();foreach($_POST["check"]as$X)$_f[]="(SELECT".limit($pc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$q).$sc,1).")";$I=implode(" UNION ALL ",$_f);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($Z,$kc)){if($_POST["save"]||$_POST["delete"]){$J=true;$sa=0;$P=array();if(!$_POST["delete"]){foreach($f
as$D=>$X){$X=process_input($q[$D]);if($X!==null&&($_POST["clone"]||$X!==false))$P[idf_escape($D)]=($X!==false?$X:idf_escape($D));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($Df===array()&&is_array($_POST["check"]))||$Pc){$J=($_POST["delete"]?$n->delete($a,$Sf):($_POST["clone"]?queries("INSERT $I$Sf"):$n->update($a,$P,$Sf)));$sa=$h->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Rf="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$q);$J=($_POST["delete"]?$n->delete($a,$Rf,1):($_POST["clone"]?queries("INSERT".limit1($I,$Rf)):$n->update($a,$P,$Rf)));if(!$J)break;$sa+=$h->affected_rows;}}}$qd=lang(73,$sa);if($_POST["clone"]&&$J&&$sa==1){$bd=last_id();if($bd)$qd=lang(64," $bd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$qd,$J);}elseif(!$_POST["import"]){if(!$_POST["val"])$o=lang(74);else{$J=true;$sa=0;foreach($_POST["val"]as$Bf=>$L){$P=array();foreach($L
as$z=>$X){$z=bracket_escape($z,1);$P[idf_escape($z)]=(preg_match('~char|text~',$q[$z]["type"])||$X!=""?$b->processInput($q[$z],$X):"NULL");}$J=$n->update($a,$P," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Bf,$q),!($Pc||$Df===array())," ");if(!$J)break;$sa+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(73,$sa),$J);}}elseif(!is_string($ac=get_file("csv_file",true)))$o=upload_error($ac);elseif(!preg_match('~~u',$ac))$o=lang(75);else{cookie("adminer_import","output=".urlencode($ra["output"])."&format=".urlencode($_POST["separator"]));$J=true;$Za=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$ac,$C);$sa=count($C[0]);$n->begin();$He=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($C[0]as$z=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$He]*)$He~",$X.$He,$ld);if(!$z&&!array_diff($ld[1],$Za)){$Za=$ld[1];$sa--;}else{$P=array();foreach($ld[1]as$t=>$Xa)$P[idf_escape($Za[$t])]=($Xa==""&&$q[$Za[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Xa))));$M[]=$P;}}$J=(!$M||$n->insertUpdate($a,$M,$ce));if($J)$n->commit();queries_redirect(remove_from_uri("page"),lang(76,$sa),$J);$n->rollback();}}}$af=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(36).": $af",$o);$P=null;if(isset($ye["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$X){if(count($kc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$P);if(!$f&&support("table"))echo"<p class='error'>".lang(77).($q?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$f);$b->selectSearchPrint($Z,$f,$x);$b->selectOrderPrint($E,$f,$x);$b->selectLimitPrint($_);$b->selectLengthPrint($gf);$b->selectActionPrint($x);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$nc=$h->result(count_rows($a,$Z,$Pc,$s));$F=floor(max(0,$nc-1)/$_);}$Ee=$N;if(!$Ee){$Ee[]="*";if($Cd)$Ee[]=$Cd;}$gb=convert_fields($f,$q,$N);if($gb)$Ee[]=substr($gb,2);$J=$n->select($a,$Ee,$Z,$s,$E,$_,$F,true);if(!$J)echo"<p class='error'>".error()."\n";else{if($y=="mssql"&&$F)$J->seek($_*$F);$Hb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$y=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$_&&$s&&$Pc&&$y=="sql")$nc=$h->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".lang(66)."\n";else{$Ia=$b->backwardKeys($a,$af);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$s&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(78)."</a>");$yd=array();$rc=array();reset($N);$ne=1;foreach($M[0]as$z=>$X){if($z!=$Cd){$X=$_GET["columns"][key($N)];$p=$q[$N?($X?$X["col"]:current($N)):$z];$D=($p?$b->fieldName($p,$ne):($X["fun"]?"*":$z));if($D!=""){$ne++;$yd[$z]=$D;$e=idf_escape($z);$Cc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($z);$qb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Cc.($E[0]==$e||$E[0]==$z||(!$E&&$Pc&&$s[0]==$e)?$qb:'')).'">';echo
apply_sql_function($X["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($Cc.$qb)."' title='".lang(79)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($z)).'\'); return false;" title="'.lang(31).'" class="text jsonly"> =</a>';echo"</span>";}$rc[$z]=$X["fun"];next($N);}}$ed=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$z=>$X)$ed[$z]=max($ed[$z],min(40,strlen(utf8_decode($X))));}}echo($Ia?"<th>".lang(80):"")."</thead>\n";if(is_ajax()){if($_%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$kc)as$xd=>$L){$Af=unique_array($M[$xd],$x);if(!$Af){$Af=array();foreach($M[$xd]as$z=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$z))$Af[$z]=$X;}}$Bf="";foreach($Af
as$z=>$X){if(($y=="sql"||$y=="pgsql")&&strlen($X)>64){$z="MD5(".(strpos($z,'(')?$z:idf_escape($z)).")";$X=md5($X);}$Bf.="&".($X!==null?urlencode("where[".bracket_escape($z)."]")."=".urlencode($X):"null%5B%5D=".urlencode($z));}echo"<tr".odd().">".(!$s&&$N?"":"<td>".checkbox("check[]",substr($Bf,1),in_array(substr($Bf,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Pc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Bf)."'>".lang(81)."</a>"));foreach($L
as$z=>$X){if(isset($yd[$z])){$p=$q[$z];if($X!=""&&(!isset($Hb[$z])||$Hb[$z]!=""))$Hb[$z]=(is_mail($X)?$yd[$z]:"");$A="";if(preg_match('~blob|bytea|raw|file~',$p["type"])&&$X!="")$A=ME.'download='.urlencode($a).'&field='.urlencode($z).$Bf;if(!$A&&$X!==null){foreach((array)$kc[$z]as$jc){if(count($kc[$z])==1||end($jc["source"])==$z){$A="";foreach($jc["source"]as$t=>$Ne)$A.=where_link($t,$jc["target"][$t],$M[$xd][$Ne]);$A=($jc["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($jc["db"]),ME):ME).'select='.urlencode($jc["table"]).$A;if(count($jc["source"])==1)break;}}}if($z=="COUNT(*)"){$A=ME."select=".urlencode($a);$t=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Af))$A.=where_link($t++,$W["col"],$W["val"],$W["op"]);}foreach($Af
as$Rc=>$W)$A.=where_link($t++,$Rc,$W);}$X=select_value($X,$A,$p,$gf);$u=h("val[$Bf][".bracket_escape($z)."]");$Y=$_POST["val"][$Bf][bracket_escape($z)];$Db=!is_array($L[$z])&&is_utf8($X)&&$M[$xd][$z]==$L[$z]&&!$rc[$z];$ff=preg_match('~text|lob~',$p["type"]);if(($_GET["modify"]&&$Db)||$Y!==null){$uc=h($Y!==null?$Y:$L[$z]);echo"<td>".($ff?"<textarea name='$u' cols='30' rows='".(substr_count($L[$z],"\n")+1)."'>$uc</textarea>":"<input name='$u' value='$uc' size='$ed[$z]'>");}else{$id=strpos($X,"<i>...</i>");echo"<td id='$u' onclick=\"selectClick(this, event, ".($id?2:($ff?1:0)).($Db?"":", '".h(lang(82))."'").");\">$X";}}}if($Ia)echo"<td>";$b->backwardKeysPrint($Ia,$M[$xd]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$F)&&!is_ajax()){$Qb=true;if($_GET["page"]!="last"){if(!+$_)$nc=count($M);elseif($y!="sql"||!$Pc){$nc=($Pc?false:found_rows($S,$Z));if($nc<max(1e4,2*($F+1)*$_))$nc=reset(slow_query(count_rows($a,$Z,$Pc,$s)));else$Qb=false;}}if(+$_&&($nc===false||$nc>$_||$F)){echo"<p class='pages'>";$md=($nc===false?$F+(count($M)>=$_?2:1):floor(($nc-1)/$_));if($y!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(83)."', '".($F+1)."'), event); return false;\">".lang(83)."</a>:",pagination(0,$F).($F>5?" ...":"");for($t=max(1,$F-4);$t<min($md,$F+5);$t++)echo
pagination($t,$F);if($md>0){echo($F+5<$md?" ...":""),($Qb&&$nc!==false?pagination($md,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$md'>".lang(84)."</a>");}echo(($nc===false?count($M)+1:$nc-$F*$_)>$_?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$_).', \''.lang(85).'...\');">'.lang(86).'</a>':'');}else{echo
lang(83).":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($md>$F?pagination($F+1,$F).($md>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($nc!==false?"(".($Qb?"":"~ ").lang(87,$nc).") ":"");$wb=($Qb?"":"~ ").$nc;echo
checkbox("all",1,0,lang(88),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$wb' : checked); selectCount('selected2', this.checked || !checked ? '$wb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(78),'</legend><div>
<input type="submit" value="',lang(68),'"',($_GET["modify"]?'':' title="'.lang(74).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(89),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(65),'">
<input type="submit" name="clone" value="',lang(90),'">
<input type="submit" name="delete" value="',lang(72),'"',confirm(),'>
</div></fieldset>
';}$lc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($lc['sql']);break;}}if($lc){print_fieldset("export",lang(91)." <span id='selected2'></span>");$Pd=$b->dumpOutput();echo($Pd?html_select("output",$Pd,$ra["output"])." ":""),html_select("format",$lc,$ra["format"])," <input type='submit' name='export' value='".lang(91)."'>\n","</div></fieldset>\n";}echo(!$s&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(92),!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ra["format"],1);echo" <input type='submit' name='import' value='".lang(92)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Hb,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$qf'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$h->query("KILL ".(+$_POST["kill"]));elseif(list($R,$u,$D)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$_=11;$J=$h->query("SELECT $u, $D FROM ".table($R)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$u = $_GET[value] OR ":"")."$D LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $_");for($t=1;($L=$J->fetch_row())&&$t<$_;$t++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($u))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($L)echo"...\n";}exit;}else{page_header(lang(49),"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".lang(93).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(31)."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(94).'<td>'.lang(95)."</thead>\n";foreach(table_status()as$R=>$L){$D=$b->tableName($L);if(isset($L["Engine"])&&$D!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$D</a>";$X=number_format($L["Rows"],0,'.',lang(8));echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();