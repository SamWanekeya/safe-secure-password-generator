<?php
require_once('controllers/config.php');

require_once('controllers/passgen.php');

$pgen_obj = new passwordgenerator(); // é

			$pgen_html_checked_attribute = ' checked="checked" '; 
			
			$pgen_check_pwd_number   = $pgen_check_pwd_lowercase 
													= $pgen_check_pwd_uppercase 
													= $pgen_check_pwd_special 
													= $pgen_check_pwd_similar 
													= '';
			
			
			
			
			$pgen_check_pwd_number = $pgen_preselect_pwd_number ? $pgen_html_checked_attribute: '';
				
			$pgen_check_pwd_lowercase = $pgen_preselect_pwd_lowercase ? $pgen_html_checked_attribute : '';
				
			$pgen_check_pwd_uppercase = $pgen_preselect_pwd_uppercase ? $pgen_html_checked_attribute : '';
				
			$pgen_check_pwd_special = $pgen_preselect_pwd_special ? $pgen_html_checked_attribute : '';
						
			$pgen_check_pwd_similar = $pgen_preselect_pwd_similar ? $pgen_html_checked_attribute : '';


?>

<!DOCTYPE HTML>
<html lang="en">

    <head>
        <!--=============== Meta ===============-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <title>Strong Secure Password Generator | Wanekeya Sam Repositories</title>
        <meta name="robots" content="index, follow">
		<meta name="title" content="Safe & Secure Password Generator">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Generate a strong, random, safe and secure password. Learn how to pick and secure your passwords">
        <meta name="keywords" itemprop="keywords" content="Password Generator, Online Password Generator, Easy to remember password generator, Strong Password Generator, Secure Password Generator, Random Password Generator, Wanekeya Sam Repositories">
		<meta name="application-name" content="Strong Secure Password Generator">
			
			<!--=============== Google hreflang for language and regional URLs ===============-->
		<link rel="alternate" hreflang="x-default" href="//www.wanekeyasam.co.ke/repositories/strong-secure-password-generator">
		<link rel="alternate" hreflang="en" href="//www.wanekeyasam.co.ke/repositories/strong-secure-password-generator">
		
			<!--=============== Facebook ===============-->
		<meta property="og:title" content="Safe & Secure Password Generator" >
		<meta property="og:type" content="website" >
		<meta property="og:url" content="//www.wanekeyasam.co.ke/repositories/strong-secure-password-generator" >
		<meta property="og:description" content="Generate a strong, random, safe and secure password. Learn how to pick and secure your passwords." >
		<meta property="og:image" content="styles/images/screenshot.jpg" >
		<meta property="fb:admins" content="100001652846050" >
		<meta property="app_id" content="1557117504597894" >
		<meta property="og:locale" content="en_US" >
		
			<!--=============== Twitter ===============-->
		<meta name="twitter:site" content="@Samwanekeya">
		<meta name="twitter:domain" content="wanekeyasam.co.ke">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:url" content="//www.wanekeyasam.co.ke/repositories/strong-secure-password-generator">
		<meta name="twitter:title" content="Safe & Secure Password Generator">
		<meta name="twitter:description" content="Generate a strong, random, safe and secure password. Learn how to pick and secure your passwords.">
		<meta name="twitter:image" content="styles/images/screenshot.jpg">
				
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="styles/css/style.css">

        <!--=============== Standard favicons ===============-->
		<link rel="shortcut icon" href="styles/images/favicon.png">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="styles/images/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="styles/images/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="styles/images/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="styles/images/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="styles/images/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="styles/images/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="styles/images/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="styles/images/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="styles/images/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="styles/images/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="styles/images/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="styles/images/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="styles/images/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="styles/images/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="styles/images/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="styles/images/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="styles/images/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="styles/images/mstile-310x310.png" />
		
		<!--=============== Javascript enabled check ===============-->
		<noscript>
        <style type="text/css">
        .pagecontainer {display:none;}
		.noscriptmsg{color:#fff;font-size:20px;font-weight:bold;font-family:Book Antiqua;background-color:#f00;}
    </style>
    <div class="noscriptmsg">
    Hey! It seems like Javascript is disabled. Things will not work as expected. Kindly enable Javascript
    </div>
</noscript>
    </head>

<body vocab="//schema.org/" typeof="WebPage">

<a href="https://github.com/Wanekeya"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>

<header>
	<div class="left-align">

		<div class="title">
			<h1 property="name">
				<span class="password">PASSWORD</span>
				<span class="generator">GENERATOR</span>
			</h1>
			<span class="xg3j6wba6 r" aria-hidden="true">xG/3J)6wBa6</span>
			<span class="ebik9d3f r" aria-hidden="true">2eB:iK,9d3;F</span>
			<span class="j6gp4s r" aria-hidden="true">j6g)P;4SQ</span>
			<span class="m853yaxh r" aria-hidden="true">m)853YAxH</span>
			<span class="rts92" aria-hidden="true">rTs9+2</span>
			<span class="k92za9vk" aria-hidden="true">k9@2ZA#9vk</span>
			<span class="ptj99a5" aria-hidden="true">ptJ99a5.j^4@G,4bXAH</span>
			<span class="b8ej2dh4" aria-hidden="true">]b8+EJ2dh4}4B%D7sSh</span>
			<span class="sbm52j2f r">SbM52j2f</span>
		</div>
	</div>
</header>
<main property="mainContentOfPage" typeof="WebPageElement" role="main">
<p data-passgen="50"></p>
	<aside class="share-links md">
		<ul>
			<li><a href="//www.facebook.com/sharer/sharer.php?u=https://www.wanekeyasam.co.ke/repositories/strong-secure-password-generator/" target="_blank" class="icon facebook share" id="Facebook"><span class="sr-only">share on facebook</span></a></li>
			<li><a href="//twitter.com/share?url=https://www.wanekeyasam.co.ke/repositories/strong-secure-password-generator/&amp;text=A%20simple%20password%20generator%20useful%20in%20the%20creation%20of%20a%20strong,%20random,%20safe%20and%20secure%20password%20by%20%40Samwanekeya%20" target="_blank" class="icon twitter share" id="Twitter"><span class="sr-only">share on twitter</span></a></li>
			<li><a href="//plus.google.com/share?url=https://www.wanekeyasam.co.ke/repositories/strong-secure-password-generator/" target="_blank" class="icon google share" id="Google+"><span class="sr-only">share on google plus</span></a></li>
		<!--	<li><a href="//www.linkedin.com/shareArticle?mini=true&url=https://www.wanekeyasam.co.ke/repositories/strong-secure-password-generator/&title=Strong%20Secure%20Password%20Generator&source=SOURCE&summary=A%20simple%20password%20generator%20useful%20in%20the%20creation%20of%20a%20strong,%20random,%20safe%20and%20secure%20password%20by%20%40Samwanekeya%20" target="_blank" class="icon linkedin share" id="Linkedin"><span class="sr-only">share on linkedin</span></a></li>-->
			<li><a href="//pinterest.com/pin/create/button/?url=https://www.wanekeyasam.co.ke/repositories/strong-secure-password-generator/&amp;media=https://www.wanekeyasam.co.ke/repositories/strong-secure-password-generator/styles/images/screenshot.jpg&amp;description=A%20simple%20password%20generator%20useful%20in%20the%20creation%20of%20a%20strong,%20random,%20safe%20and%20secure%20password%20by%20" target="_blank" class="icon pinterest share" id="Pinterest"><span class="sr-only">share on pinterest</span></a></li>
		</ul>
	</aside>
	
	<div class="generate">
		<h2>Your password configuration</h2>
					 
			<!--=============== Password option: Include numbers ===============-->
				<p>
				<input <?php echo ($pgen_check_pwd_number ? $pgen_check_pwd_number : '');?> type="checkbox" name="pgen_pwd_options[]" id="pgen_pwd_number" value="pwd_number" />&nbsp;
				
				<span class="<?php echo ($pgen_check_pwd_number ? 'pgen-label-selected' : '');?>"> Include Numbers</span> 
				
				<span class="instruction">[</span> 0 1 2 3 ... 6 7 8 9 <span class="instruction">]</span>
				
				</p>


			<!--=============== Password option: Include lowercase letters ===============-->
				<p>
				<input <?php echo ($pgen_check_pwd_lowercase ? $pgen_check_pwd_lowercase : '');?> type="checkbox" name="pgen_pwd_options[]" id="pgen_pwd_lowercase" value="pwd_lowercase" />&nbsp;
				
				<span class="<?php echo ($pgen_check_pwd_lowercase ? 'pgen-label-selected' : '');?>">	Include lowercase letters</span> 
				
				<span class="instruction">[</span> a b c d ...w x y z <span class="instruction">]</span> 			
			
				</p>
			

			<!--=============== Password option: Include uppercase letters ===============-->
				<p>
				<input <?php echo ($pgen_check_pwd_uppercase ? $pgen_check_pwd_uppercase : '');?> type="checkbox" name="pgen_pwd_options[]" id="pgen_pwd_uppercase" value="pwd_uppercase" />&nbsp;
				
				<span class="<?php echo ($pgen_check_pwd_uppercase ? 'pgen-label-selected' : '');?>"> Include uppercase letters</span> 
				
				<span class="instruction">[</span> A B C D E ... W X Y Z <span class="instruction">]</span> 
				
				</p>
			

			<!--=============== Password option: Include special characters ===============-->
				<p>
                <input <?php echo ($pgen_check_pwd_special ? $pgen_check_pwd_special : '');?> type="checkbox" name="pgen_pwd_options[]" id="pgen_pwd_specialcharacters" value="pwd_special" />&nbsp;
				
				<span class="<?php echo ($pgen_check_pwd_special ? 'pgen-label-selected' : '');?>"> Include special symbols or characters</span> 
				
				<span class="instruction">[</span> { } [ ] .... @ # $ % <span class="instruction">]</span>
				
				</p>


			<!--=============== Password option: Special characters list ===============-->
			<?php
			if($pgen_preselect_pwd_special){
				$pgen_css_display_specialcharacterslist_container = '; display:block; ';
			} else{
				$pgen_css_display_specialcharacterslist_container = '; display:none; ';
			}
			?>
			
			
			<div id="pgen-specialcharacterslist-container" style=" <?php echo $pgen_css_display_specialcharacterslist_container;?>">
				<?php
				$pgen_specialcharacter_i = 0;
				
				foreach($pgen_specialcharacter_list as $pgen_specialcharacter_list_value)
				{
					$pgen_specialcharacter_i++;
                        
					if(in_array($pgen_specialcharacter_list_value, $pgen_specialcharacter_list)){
						$pgen_attr_checked_specialcharacter = ' checked="checked" ';
					} else{
						$pgen_attr_checked_specialcharacter = '';
					}
					?>
					<div class="specialcharacter-container">
					<input type="checkbox" value="<?php echo htmlentities($pgen_specialcharacter_list_value, ENT_QUOTES, 'UTF-8');?>" name="pgen_specialcharacter[]" id="pgen_<?php echo 'pwd_special_'.$pgen_specialcharacter_i;?>" <?php echo $pgen_attr_checked_specialcharacter;?> class="pgen-checkbox-specialcharacter" />&nbsp;
					<label for="pgen_<?php echo 'pwd_special_'.$pgen_specialcharacter_i;?>" class="<?php echo ($pgen_attr_checked_specialcharacter ? 'pgen-specialcharacter-selected' : '');?>"><?php echo $pgen_specialcharacter_list_value;?></label>
					</div>
					<?php
				}
				?>
                    
				<div class="pgen-clear"></div>
                    
				<div class="ckeckuncheckspecialcharacters_container">
				
					<p id="pgen_uncheckallspecialcharacters" class="checkallspecialcharacters">Uncheck all special characters</p>
					
					<p id="pgen_checkallspecialcharacters" style="display:none" class="checkallspecialcharacters">Check all special characters</p>
					
				</div>
                
			</div>
                
                
			<!--=============== Password option: Similar characters ===============-->
			<div class="pgen-password-option">
				<p>
				<input <?php echo ($pgen_check_pwd_similar ? $pgen_check_pwd_similar : '');?> type="checkbox" name="pgen_pwd_options[]" value="pwd_similar" id="pgen_pwd_similar"  class="pgen_pwdoption" />&nbsp;
				
				<label for="pgen_pwd_similar" class="pgen_pwdoption">
				
				<span class="pgen-label-title <?php echo ($pgen_check_pwd_similar ? 'pgen-label-selected' : '');?>">  Exclude similar characters</span> 
				
				<span class="instruction">[</span> 0 O I 1 l <span class="instruction">]</span>
				
				</label>
				</p>
			</div>
			
			<!--=============== Password option: Password length ===============-->
				<p>
				<select name="pgen_passwordlength" id="pgen_passwordlength">
				<?php
				for($pgen_i = $pgen_config_passwordlength_min; $pgen_i<=$pgen_config_passwordlength_max; $pgen_i++){
					if($pgen_i == $pgen_config_passwordlength){
						$pgen_selected_attr = ' selected ="selected" ';
					} else{
						$pgen_selected_attr = '';
					}
					
					echo "\t\t\t\t".'<option value="'.$pgen_i.'" '.$pgen_selected_attr.'>'.$pgen_i.'</option>';
					
					echo "\r\n";
				}
				?>
				</select>

				<label for="pgen_passwordlength">Password length (the minimum length of your password should be 8 characters)</label>
				</p>
               

			<!-- PASSWORD OPTION: PASSWORD QUANTITY -->
				<p>
				<select name="pgen_nbpwd" id="pgen_nbpwd">
				<?php
				foreach($pgen_config_quantity_array as $pgen_config_quantity_value){
					echo "\t\t\t\t".'<option value="'.$pgen_config_quantity_value.'" '.(($pgen_config_quantity_value==$pgen_config_quantity)?'selected':'').'>'.$pgen_config_quantity_value.'</option>';
					echo "\r\n";
				}
				?>
				</select>
				
				
				<label for="pgen_nbpwd">Quantity (generate multiple passwords at once)</label>
				</p>
			


			<div class="input-wrapper">
			
			
				<input type="submit" id="pgen_generator_btn" value="Generate Password" class="primary-btn"  />
				
				<div class="loading"><img src="styles/images/loading.gif" /></div>
				
				<div class="pgen-error">
				</div>
				
			</div><!-- pgen-submit-container -->
			
			
			<div class="input-wrapper pgen-password-list">
			</div>
			
			<div class="pgen-clear"></div>
			
	</div>		

	<article vocab="//schema.org/" typeof="article" id="cli">
		<meta property="datePublished" content="2017-01-16">
		<h2>How to pick and secure your passwords: </h2>
		<p>1. Avoid reusing a password for multiple accounts. No matter how secure the password is, it won’t be any good if unauthorized persons have access to it.</p>
		<p>2. Use password generator tools/websites like <a href="//www.wanekeyasam.co.ke/repositories/strong-secure-password-generator/">Strong secure password generator</a> to help in the creation of a strong password.</p>
		<p>3. Turn on 2-step authentication if supported.</p>
		<p>4. Pick a password that’s not easy to guess or hack. Words or phrases of special importance to you; spouse name, date of birth, family member name, phone number, ID card numbers, social security numbers etc should be avoided.</p>
		<p>5. Use a long password, minimum 8 characters long; at least one number, one uppercase letter, one lowercase letter and one special symbol. The longer the password the more secure it is</p>
		<p>6. Despite many password systems not allowing spaces in passwords, it’s a good practice when using systems that support this.</p>
		<p>7. Avoid using dictionary word(s) in your passwords.</p>
		<p>8. Do not use a common pattern in your passwords, for instance <i>ilovechicken</i> and <i>ilovepizza</i></p>
		<p>9. Do not log into your account on other persons computers, when connected to public Wi-Fi hotspot, <a href="//www.torproject.org" target="_blank">Tor network</a>, web proxy or a free VPN</p>
		<p>10. Do not let your web browsers store your passwords; passwords stored in web browsers can be revealed easily.</p>
		<p>11. Do not store your passwords in the cloud; if need be store them in a plain text file and encrypt this file with <a href="//www.7-zip.org/" target="_blank">7-Zip</a>, <a href="//www.gnupg.org" target="_blank">GPG</a> or a disk encryptions software such as <a href="//en.wikipedia.org/wiki/BitLocker" target="_blank">Bitlocker</a>.</p>
		<p>12. Encrypt and backup your password to different locations so that in case you loose your computer you can still easily retrieve them.</p>
		<p>13. Ensure to change your passwords every 3 months</p>
		<p>14. Sending sensitive information via unencrypted (HTTP or FTP or MTPS) connections is highly discouraged. An attacker can use tools perform different attacks i.e man-in-the-middle attack or sniffing thus gaining access to any information being exchanged.</p>
		<p>15. Keep the operating system and web browsers of your devices up to date; most of the updates always come with security updates.</p>
		<p>16. Download software from reputable sites only, and verify the SHA1 or SHA256 or MD5 checksum or GPG signature of the installation package.</p>
		<p>17. Access websites that require submission of sensitive information or login details from bookmarks directly, otherwise be sure to check its domain name carefully. Alternatively checking the popularity of a website with <a href="//www.alexa.com/toolbar" target="_blank">Alexa toolbar</a> to ensure that it's not a phishing site before entering your password is a good idea.</p>
		<p>18. Always lock you computer and handheld device when you leave them.</p>
		<p>19. Do not reveal you password to anyone in an email.</p>
		<p>20. Always have a reputable antivirus installed, up-to-date and running; one that has a firewall, filters incoming internet traffic is of higher advantage.</p>
		<p>21. Encrypt the entire hard drive with <a href="//en.wikipedia.org/wiki/BitLocker" target="_blank">Bitlocker</a>, <a href="//guardianproject.info/code/luks" target="_blank">LUKS</a> or similar tools before putting important files on it, and destroy the hard drive of your old devices physically if it's necessary.</p>
		<p>22. Access important websites in private or incognito mode, or use one Web browser to access important websites, use another one to access other sites. Or access unimportant websites and install new software inside a virtual machine created with <a href="//www.vmware.com" target="_blank">VMware</a>, <a href="//www.virtualbox.org/wiki/VirtualBox" target="_blank">VirtualBox</a> or <a href="//www.parallels.com" target="_blank">Parallels</a>.</p>
		<p>23. Do not click on links in your email such as resetting your password or verifying account emails, except when you are sure the message is not fake.</p>
		<p>24. If an online shopping site only accepts credit card payments, then you should use a virtual credit card instead.</p>
		<p>25. If you're a webmaster, do not store the users passwords, security questions and answers as plain text in the database, you should store the salted ( SHA1, SHA256 or SHA512 )hash values of of these strings instead. It's recommended to generate a unique random salt string for each user. In addition, it's a good idea to log the user's device information and save the salted hash values of them, then when he/she try to login with the correct password but his/her device information does NOT match the previous saved one, let this user to verify his/her identity by entering another verification code sent via SMS or email.</p>
		<p>26. Close your web browser when done browsing, persons with bad intentions can access intercept browser cookie sessions using a small USB device making it easy to bypass two-step verification and log into your account using the stolen cookies on other computers.</p>
		<p>27. For software developers, you should publish the update package signed with a private key using GnuPG, and verify it’s signature with the public key published previously.</p>
	</article>

</main>


<footer>
	<div class="inner group">

		<div class="credits">
			<h4>Designed by <a href="//www.wanekeyasam.co.ke">Wanekeya Sam</a></h4>
			<h5>&#169; <?php echo date("Y"); ?></h5>
		</div>
		<div class="languages">
			<h4>Languages</h4>
			<ul>
				<li><a href="//www.wanekeyasam.co.ke/repositories/strong-secure-password-generator/">ENGLISH</a></li>
			</ul>
		</div>
	</div>
</footer>

<!-- JQUERY -->
<script type="text/javascript" src="styles/js/jquery-1.9.0.js"></script>

<!-- PASSWORDGENERATOR -->
<script type="text/javascript" src="styles/js/passgen.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
</body>
</html>
