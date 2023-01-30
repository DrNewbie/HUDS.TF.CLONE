<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><![CDATA[HUDS.TF - Guide]]></title>
		<link>https://huds.tf/site/</link>
		<description><![CDATA[HUDS.TF - https://huds.tf/site]]></description>
		<pubDate>Sun, 29 Jan 2023 13:16:03 +0000</pubDate>
		<generator>MyBB</generator>
		<item>
			<title><![CDATA[Creating a Custom Video Intro for Team Fortress 2]]></title>
			<link>https://huds.tf/site/s-Creating-a-Custom-Video-Intro-for-Team-Fortress-2</link>
			<pubDate>Mon, 03 Aug 2020 01:00:09 +0000</pubDate>
			<guid isPermaLink="false">https://huds.tf/site/s-Creating-a-Custom-Video-Intro-for-Team-Fortress-2</guid>
			<description><![CDATA[<span style="font-size: large;">I was messing around with the TF2 files and stumbled across how the game chooses it’s intro video to play on launch. I was interested to see if I could make a Custom Intro, and it turns out it’s really easy.<br />
<br />
Here’s how:</span><br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">1.</span></span> Download <a href="http://www.radgametools.com/bnkdown.htm" target="_blank">The RAD Video Tools</a> program. This program allows you to convert video and audio files to .bik format, which is the format that the opening Valve video is in.<br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">2.</span></span> Open up RAD Video Tools and find your video of choice. Select the video and press the <span style="font-weight: bold;">Bink it!</span> button. <span style="font-style: italic;">(See below)</span><br />
<img src="https://huds.tf/guides/img/customvideointro/1.png" border="0" alt="[Image: 1.png]" /><br />
<img src="https://huds.tf/guides/img/customvideointro/2.png" border="0" alt="[Image: 2.png]" /><br />
You can mess with the above settings to get higher quality video, but leaving the settings as the default garners you a decent result.<br />
<br />
You may find that while the program attempts to render, it will give you an Error when trying to open the file. I originally tried this using videos I had downloaded online, and the program did not like it. I eventually made a small HUDS.TF intro video using Sony Vegas, and saved it as a .AVI file. This seemed to have done the trick, and you may get the result you want by putting your videos into a Video Editor first.<br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">3.</span></span> Once converted (shouldn’t take long), watch the file back and make sure it’s okay. Audio can be a bit of a pain (may not render), so you can mix audio in after by selecting the generated .bik file, then pressing the <span style="font-weight: bold;">Mix in sound</span> button. Just add your sound file of choice and the default settings should do the rest. Again, feel free to mess around with the settings if you want to get better results.<br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">4.</span></span> Once you’ve got the file you’ve wanted, go into your Custom HUD folder. Create a media folder in the same directory your resource and scripts folders are <span style="font-style: italic;">(example below)</span><br />
<img src="https://huds.tf/guides/img/customvideointro/3.png" border="0" alt="[Image: 3.png]" /><br />
<br />
Inside this folder, copy your .bik file into it, and create a file called startupvids.txt. Inside this file, you’ll only need one line of text, which is media/&lt;FILENAME&gt;.bik, where &lt;FILENAME&gt; is, obviously, the name of your file. <span style="font-style: italic;">(examples below)</span><br />
<img src="https://huds.tf/guides/img/customvideointro/4.png" border="0" alt="[Image: 4.png]" /><br />
<img src="https://huds.tf/guides/img/customvideointro/5.png" border="0" alt="[Image: 5.png]" /><br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">5.</span></span> Now open up Team Fortress 2 <span style="font-style: italic;">(make sure you do not have -novid in your launch options)</span>, and you’ll see the result!<br />
<br />
Watch my example here:<br />
<iframe width="560" height="315" src="//www.youtube.com/embed/T95Ak8ENIEM" frameborder="0" allowfullscreen></iframe><br />
<br />
I've also included an example file for you to use (download is to the left of this guide!)<br />
<br />
<span style="font-weight: bold;">SIDE NOTE:</span> you don’t have to put this into a Custom HUD folder. You can make a separate Custom folder for your intro video to live in individually, so it will run on every Custom HUD you use, or even on the default TF2 HUD, similar to the way you would do a hitsound. tf/custom/introvideo/media/ and then your files would work.]]></description>
			<content:encoded><![CDATA[<span style="font-size: large;">I was messing around with the TF2 files and stumbled across how the game chooses it’s intro video to play on launch. I was interested to see if I could make a Custom Intro, and it turns out it’s really easy.<br />
<br />
Here’s how:</span><br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">1.</span></span> Download <a href="http://www.radgametools.com/bnkdown.htm" target="_blank">The RAD Video Tools</a> program. This program allows you to convert video and audio files to .bik format, which is the format that the opening Valve video is in.<br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">2.</span></span> Open up RAD Video Tools and find your video of choice. Select the video and press the <span style="font-weight: bold;">Bink it!</span> button. <span style="font-style: italic;">(See below)</span><br />
<img src="https://huds.tf/guides/img/customvideointro/1.png" border="0" alt="[Image: 1.png]" /><br />
<img src="https://huds.tf/guides/img/customvideointro/2.png" border="0" alt="[Image: 2.png]" /><br />
You can mess with the above settings to get higher quality video, but leaving the settings as the default garners you a decent result.<br />
<br />
You may find that while the program attempts to render, it will give you an Error when trying to open the file. I originally tried this using videos I had downloaded online, and the program did not like it. I eventually made a small HUDS.TF intro video using Sony Vegas, and saved it as a .AVI file. This seemed to have done the trick, and you may get the result you want by putting your videos into a Video Editor first.<br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">3.</span></span> Once converted (shouldn’t take long), watch the file back and make sure it’s okay. Audio can be a bit of a pain (may not render), so you can mix audio in after by selecting the generated .bik file, then pressing the <span style="font-weight: bold;">Mix in sound</span> button. Just add your sound file of choice and the default settings should do the rest. Again, feel free to mess around with the settings if you want to get better results.<br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">4.</span></span> Once you’ve got the file you’ve wanted, go into your Custom HUD folder. Create a media folder in the same directory your resource and scripts folders are <span style="font-style: italic;">(example below)</span><br />
<img src="https://huds.tf/guides/img/customvideointro/3.png" border="0" alt="[Image: 3.png]" /><br />
<br />
Inside this folder, copy your .bik file into it, and create a file called startupvids.txt. Inside this file, you’ll only need one line of text, which is media/&lt;FILENAME&gt;.bik, where &lt;FILENAME&gt; is, obviously, the name of your file. <span style="font-style: italic;">(examples below)</span><br />
<img src="https://huds.tf/guides/img/customvideointro/4.png" border="0" alt="[Image: 4.png]" /><br />
<img src="https://huds.tf/guides/img/customvideointro/5.png" border="0" alt="[Image: 5.png]" /><br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">5.</span></span> Now open up Team Fortress 2 <span style="font-style: italic;">(make sure you do not have -novid in your launch options)</span>, and you’ll see the result!<br />
<br />
Watch my example here:<br />
<iframe width="560" height="315" src="//www.youtube.com/embed/T95Ak8ENIEM" frameborder="0" allowfullscreen></iframe><br />
<br />
I've also included an example file for you to use (download is to the left of this guide!)<br />
<br />
<span style="font-weight: bold;">SIDE NOTE:</span> you don’t have to put this into a Custom HUD folder. You can make a separate Custom folder for your intro video to live in individually, so it will run on every Custom HUD you use, or even on the default TF2 HUD, similar to the way you would do a hitsound. tf/custom/introvideo/media/ and then your files would work.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[In-Depth HUD Crosshair Guide]]></title>
			<link>https://huds.tf/site/s-In-Depth-HUD-Crosshair-Guide</link>
			<pubDate>Wed, 11 Mar 2020 19:08:13 +0000</pubDate>
			<guid isPermaLink="false">https://huds.tf/site/s-In-Depth-HUD-Crosshair-Guide</guid>
			<description><![CDATA[<span style="font-size: x-large;">This guide has been ported over from the old HUDS.TF Guides section. Credit for this Guide goes towards <a href="https://huds.tf/forum/member.php?action=profile&amp;uid=44" target="_blank">Komorebi</a>.</span><br />
<br />
<span style="font-weight: bold;"><span style="font-size: xx-large;">Introduction</span></span><br />
This part of the tutorial is a basic overview of what exactly a HUD crosshair is. More advanced users should skip ahead to <span style="font-weight: bold;">Implementation</span>. <br />
<br />
Team Fortress 2's heads up display, or HUD as it is colloquially known, is a user interface, also known as a UI. It displays information relevant to the user while in-game, such as health, ammo, the scoreboard, and much more. It is controlled by text documents that determine positioning, size, visibility, color, and everything else about all of its moving bits and pieces. These documents, saved as .res files, can be edited by the user to change existing bits and pieces, which will henceforth referred to as controls, or, more interestingly, at least for our purposes, add new controls. One technique users have been using since as early as 2009 is to place a control into their HUDs to serve as a crosshair. That is, something that will tell them where the center of their screen is. There are two main methods of doing this: text crosshairs and image crosshairs. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Text Crosshairs</span></span>:<br />
The first method is to simply insert a text box into the hud and then load a custom font which contains the crosshair of your choice. This method's advantages are that the crosshair’s color can be changed easily and it can be animated to change color upon damage (whenever you hit someone), a feature found in many of the Quake games, precursors to the TF series in several ways. For users searching for a more in-depth explanation of the custom font or who are interested in creating their own font, skip ahead to <span style="font-weight: bold;">Creating Your Own Crosshairs</span>. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Image Crosshairs</span></span>:<br />
The second method is to simply insert an image file into the hud. The advantages this method brings are that the size of the crosshair can be changed easily and it can be toggled (turned on or off at will) in a couple ways that text crosshairs can't be. If you are fairly experienced with these crosshairs you might know about the method of implementing them as in game crosshairs, in which case you would want to skip ahead to <span style="font-weight: bold;">In-Game Image Crosshair</span>.<br />
<br />
<span style="font-weight: bold;"><span style="font-size: xx-large;">1. Implementation</span></span><br />
<br />
For both methods the crosshair is created by inserting a new control in <span style="font-weight: bold;">HudLayout.res</span>. There are several other steps that must be taken as well to ensure that your crosshair functions as intended. Everything that is necessary for both crosshairs is listed below. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Text</span></span>:<br />
<ol type="1">
<li>Add the physical font file to resource or resource/fonts.<br />
</li>
<li>Reference the font file at the very bottom of <span style="font-weight: bold;">ClientScheme.res</span> in the section entitled "CUSTOM FONT FILES". Make sure the numbers are in ascending order (1 then 2 then 3 etc.).<br />
 <div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>}<br />
 "6"<br />
 {<br />
 "font" "resource/TF2Build.ttf"<br />
 "name" "TF2 Build"<br />
 "russian"<br />
 {<br />
 "range" "0x0000 0xFFFF"<br />
 }<br />
 "polish"<br />
 {<br />
 "range" "0x0000 0xFFFF"<br />
 }<br />
 "turkish"<br />
 {<br />
 "range" "0x0000 0xFFFF"<br />
 }<br />
 }<br />
 "7"<br />
 {<br />
 "font" "resource/fonts/crosshairs.ttf"<br />
 "name" "crosshairs"<br />
 }</code></div></div>
</li>
<li>Create a definition for the font in <span style="font-weight: bold;">ClientScheme.res</span> under the section entitled "FONTS", which is pretty early in the file.<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>//<br />
 //////////////////////// FONTS /////////////////////////////<br />
 //<br />
 // describes all the fonts<br />
 Fonts<br />
 {<br />
 // fonts are used in order that they are listed<br />
 // fonts listed later in the order will only be used if they fulfill a range not already filled<br />
 // if a font fails to load then the subsequent fonts will replace<br />
 <br />
 "fogCrosshair"<br />
 {<br />
 "1"<br />
 {<br />
 "name" "Crosshairs"<br />
 "tall" "28"<br />
 "additive" "0"<br />
 "antialias" "1"<br />
 "weight" "0"<br />
 "outline" "1"<br />
 }<br />
 }<br />
 "fogCrosshairSmall"<br />
 {<br />
 "1"<br />
 {<br />
 "name" "Crosshairs"<br />
 "tall" "24"<br />
 "additive" "0"<br />
 "antialias" "1"<br />
 "weight" "0"<br />
 "outline" "1"<br />
 }<br />
 }<br />
 "fogCrosshairSmooth"<br />
 {<br />
 "1"<br />
 {<br />
 "name" "Crosshairs"<br />
 "tall" "28"<br />
 "additive" "0"<br />
 "antialias" "1"<br />
 "weight" "0"<br />
 "outline" "1"<br />
 }<br />
 }</code></div></div>
</li>
<li>Create the control in <span style="font-weight: bold;">HudLayout.res</span>, examples are below under <span style="font-weight: bold;">Examples</span>. <br />
</li></ol>
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">Image:</span></span><br />
<ol type="1">
<li>Save the image file you would like to use as a .vtf or valve texture format file and make sure there is an accompanying .vmt file that has the same name. If you are using someone else’s work this is most likely done.<br />
</li>
<li>Make sure the .vmt file references the correct .vtf. The .vmt, or valve material type, should look like this:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"UnlitGeneric"<br />
{<br />
 "&#36;translucent" 1<br />
 "&#36;basetexture" "vgui&#92;replay&#92;thumbnails&#92;*your file name*"<br />
 "&#36;yertexcolor" 1<br />
 "&#36;no_fullbright" 1<br />
 "&#36;ignorez" 1<br />
}</code></div></div>
*name of your file* needs to be the same as the name of the .vmt and the .vtf, to clarify.<br />
</li>
<li>Create a copy of both files and move the copies into custom/ *any name*/materials/vgui/replay/thumbnails.<br />
</li>
<li>Either create the control in <span style="font-weight: bold;">HudLayout.res</span> if you want to use the crosshair that way or reference it in console as an in-game crosshair. If you wish to pursue the second option then skip ahead to In-Game Image Crosshair. <br />
</li></ol>
<br />
<span style="font-weight: bold;">Text Example</span>:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"TextExample"<br />
{<br />
"controlName" "CExLabel"<br />
"fieldName" "TextExample"<br />
"visible" "1"<br />
"enabled" "1"<br />
"visible_minmode" "1"<br />
"enabled_minmode" "1"<br />
"xpos" "c0"<br />
"ypos" "c0"<br />
"zpos" "0"<br />
"wide" "100"<br />
"tall" "100"<br />
<br />
"font" "fogCrosshair"<br />
"labelText" "+"<br />
"fgcolor" "White"<br />
"textAlignment" "center"<br />
}</code></div></div>
<br />
<span style="font-weight: bold;">Image Example:<br />
</span><div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"ImageExample"<br />
{<br />
"controlName" "CTFImagePanel"<br />
"fieldName" "ImageExample"<br />
"visible" "1"<br />
"enabled" "1"<br />
"visible_minmode" "1"<br />
"enabled_minmode" "1"<br />
"xpos" "c0"<br />
"ypos" "c0"<br />
"zpos" "0"<br />
"wide" "100"<br />
"tall" "100"<br />
<br />
"alpha" "255"<br />
"image" "replay/thumbnails/*your file name*"<br />
"scaleimage" "1"<br />
}</code></div></div>
<br />
<span style="font-weight: bold;"><span style="font-size: xx-large;">2. Customization</span></span><br />
<br />
<span style="font-weight: bold;"><span style="font-size: large;"><span style="text-decoration: underline;">Changing Your Crosshair</span></span></span><br />
Let’s say you find a crosshair that you love, but it’s just a tad too big. Or maybe it’s a little too green for your taste. This is solved by editing the parameters in the control you put in <span style="font-weight: bold;">HudLayout.res</span>. After each change you should open up <a href="https://developer.valvesoftware.com/wiki/Developer_Console" target="_blank">the developer’s console</a> and type the command “hud_reloadscheme”. This will reload all of the hud files and apply your changes. In this way you can see the effects of your edits without needing to restart the game. <a href="http://forums.steampowered.com/forums/showthread.php?t=2723536" target="_blank">Running TF2 in windowed no border at your resolution</a> makes alt-tabbing in and out of game quicker and easier so I’d recommend that as well. How do you actually change anything, you say? Below is an explanation of how you can tweak your crosshair’s size, color, and positioning. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Resizing</span></span><br />
For image crosshairs, this is as simple as editing the wide and tall values in the control. For text crosshairs, the size of the text you have created is determined by the font definition in <span style="font-weight: bold;">ClientScheme.res</span>. You will need to edit the existing definition, or, more efficient, create a new one that’s a little different. Here’s how. <br />
<img src="http://huds.tf/guides/hud_cross_img/image00.png" border="0" alt="[Image: image00.png]" /><br />
<br />
Thanks to Lange for letting me <a href="https://www.youtube.com/watch?v=FR6xYFTNDAA" target="_blank">point you to his explanation</a>. Antialiasing is pretty different in fonts, and doesn't always work, so try enabling/disabling it yourself and see. <br />
<br />
In addition to antialiasing, you might want to change "outline" to "1", which will put a black outline around your crosshair. It might be a bit buggy or pixelated, however, so, same as your crosshair, test out enabling and disabling it for optimum results. <br />
<br />
Back to resizing. Something a lot of hud makers do to make things easier is to create many definitions for the same font. This is because the only way to change the size of a font is to change the font definition. So, an easy shortcut is to name each definition according to the size it is. For example, make one called crosshair12, with the tall value being 12, another named crosshair14 with the tall value of 14, all the way up to 54, which is the highest tall value that TF2 accepts. This is useful because TF2 doesn’t reload <span style="font-weight: bold;">ClientScheme.res</span> (or the main menu, for that matter, if you're interested) when you type hud_reloadscheme in console, so you need to restart the game each time you change <span style="font-weight: bold;">ClientScheme</span>. By creating lots of font definitions you can test out new sizes for text boxes without restarting the game. <br />
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">Changing Color</span></span><br />
This time, the roles are reversed. Text crosshairs are easy, and image crosshairs are hard. To change the color of a text crosshair all you have to do is change the value of “fgcolor”. I elaborate on how exactly to change fgcolor below under Specific Parameters. For image crosshairs, it is significantly more difficult: you need to actually edit the .vtf file itself and change the color in an image editor. This requires VTFedit to convert your .vtf to a .png or any other editable file type, then editing it in Photoshop or something similar. More information on this can be found in the section below entitled Creating Your Own Crosshairs. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Changing Position</span></span><br />
Shifting the position is as simple as changing the xpos, ypos, and zpos under the control in <span style="font-weight: bold;">HudLayout.res</span>. This includes if you want to put your xhair underneath something else, like an outline for the in-game ones. More information on these parameters below under Basic Parameters. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Fixing Cut Off Issues</span></span><br />
Having a problem with your hud crosshair being cut off? If you are, then there are three possibilities. One: if you’re using an image crosshair, that the file was saved incorrectly in VTFedit. If you made your crosshair yourself this is entirely possible, if you didn’t make it (and you’ve seen screenshots of what it’s supposed to look like) this isn’t the case. Two: if you’re using a text crosshair, it’s possible that the wide and tall values under your control are too small, and that the text is being cut off. This is explained in the image below.<br />
<img src="http://huds.tf/guides/hud_cross_img/image11.png" border="0" alt="[Image: image11.png]" /><br />
So, increasing the wide and tall values might fix your problem. The third possibility is only relevant if it’s a text crosshair and you’re using a mac; sometimes fonts get cut off in TF2 on macs: this is due to differences in how the Macintosh and Windows Operating Systems handle fonts and therefore how TF2 expects its fonts to be handled. It’s on Valve’s end, and the only solutions are to realign the characters in a font editor or to convert it to an image crosshair. Or, of course, you could partition your mac and run both windows and mac os, which I would strongly recommend if you want to play TF2 in a non-casual setting.<br />
<br />
<span style="font-size: xx-large;"><span style="font-weight: bold;">3. Parameters</span></span><br />
<br />
Below I will give an explanation of what each parameter under the control does. More experienced users might want to jump to <span style="font-weight: bold;">Specific Parameters</span> to skip the basic parameters. <br />
<br />
<span style="font-weight: bold;"><span style="font-size: large;"><span style="text-decoration: underline;">Basic Parameters</span></span></span><br />
These are the basic parameters which are relevant to both image and text crosshairs. I would recommend scrolling back up to check the examples above if you're confused at any point, to remind yourself what the whole picture looks like. <br />
<span style="font-weight: bold;"><br />
ControlName</span><br />
This refers to what type of control you're creating. To reiterate, control is just a fancy name for the bits and pieces of your HUD: each control is simply an element or part of the interface that contains text, an image, or any variety of things. There are three basic types of controls but only two are relevant for the purpose of hud crosshairs. <br />
<span style="text-decoration: underline;">Labels</span>: These are text boxes. The two basic types are Label and CExLabel.<br />
<span style="text-decoration: underline;">Panels</span>: Pictures and blocks of color. For our purposes basically just images. The basic types are ImagePanel and EditablePanel.<br />
The third type, which is not relevant for our purposes, is Buttons. These are clickable elements composed of either a text box, and image, or both. Buttons are not commonly used to create Crosshairs. The basic types are Button, ImageButton, CExButton, CExImageButton. <br />
<br />
<span style="font-weight: bold;">FieldName</span><br />
Simple, the name of the control. Can only contain letters and numbers and must be the unique name of the control. If you're editing an existing control don't touch this. <br />
<br />
<span style="font-weight: bold;">Visible</span><br />
This determines whether the control is drawn. As one would expect, '1' means visible, '0' means invisible. <br />
<br />
<span style="font-weight: bold;">Enabled</span><br />
This determines whether the control is even loaded. The difference between this and visible is that some elements are turned on or off by the game. Disabling these elements means they're never going to be seen. Making them invisible might mean that they're seen part of the time. For hud crosshairs the distinction doesn't matter turn either to 0 to make it invisible and 1 to make it visible. There is one notable exception which will be discussed later in the 3D PlayerModel Backgroundsection. <br />
<br />
<span style="font-weight: bold;">Xpos</span><br />
This parameter determines the position in the x direction of the left side of the control relative to the parent control. Basically, how far to the right or left. Another way of thinking about it is that changing this value moves the crosshair horizontally. For hud crosshairs the parent control is usually simply the hud, in which case the crosshair is positioned relative to the screen. By default the numbers are how far away from the left side of the screen. Adding a 'c' in front means that the control is placed relative to the center of the screen. Adding an 'r' in front means that the control is positioned relative to the right side of the screen. This parameter accepts negative values, which are flipped around, as you would expect, by adding an 'r'. Minus values can also be used, by adding "-" before the value. Check out <a href="http://huds.tf/guides/hud_cross_img/xhairguide_xpos.jpg" target="_blank">this image</a> if you’re still confused. <br />
<br />
<span style="font-weight: bold;">Ypos</span><br />
This parameter determines the position of the top of the control relative to the parent control in the y direction. In other words, up or down, or in the vertical direction. By default it is from the top of the screen. Adding a 'c' as a prefix measures from the center, an 'r' prefix measures from the bottom of the screen. This parameter accepts negative values, which are, again, flipped by adding an 'r'. <br />
<br />
<span style="font-weight: bold;">Zpos</span><br />
This parameter determines the position of the control in the z-direction, also known as into or out of the board. More colloquially, this determines whether or not your crosshair is behind or in front of other stuff, or determines which layer the control is located in. The way this works is that controls are drawn by the game in order from lowest to highest, so the control with the most negative 'Zpos' will be drawn first, then the least negative progressively, the least positive, finally the most positive. The higher the 'Zpos', the further forward the control, or the more stuff it will be on top of. The lower, the further away the control, or the more stuff it will be below. <br />
<br />
<span style="font-weight: bold;">Wide/Tall</span><br />
The width and height of the control. Text will need to be completely contained within the control or parts of it may be cut off. For images, this simply resizes the image. You cannot resize a text crosshair this way, you need to change the font definition in ClientScheme.res or reference a different font, more on that available in Resizing. If your crosshair is half-visible, this could be the reason. Putting 'f0' gives you the full screen size. <br />
<br />
<br />
<span style="font-weight: bold;"><span style="font-size: large;"><span style="text-decoration: underline;">Specific Parameters</span></span></span><br />
<br />
As you can see, this is where more differences start to arise in the implementation of image crosshairs and text crosshairs. <br />
<br />
<span style="font-size: medium;"><span style="text-decoration: underline;">Text:</span></span><br />
<br />
<span style="font-weight: bold;">Font</span><br />
This is the name of the font file that you wish to use. The font file should be defined in ClientScheme.res. You check out more about installing fonts by reading our <a href="http://huds.tf/guides/?guide=2" target="_blank">Font Installation guide</a>. <br />
<br />
<span style="font-weight: bold;">LabelText</span><br />
This is what the text box will actually say. In our case this means which crosshair in the font file is referenced. For example, here is an image of the crosshairs included in <a href="http://teamfortress.tv/thread/14702/release-fogs-crosshairs-v3" target="_blank">Fog's Custom Crosshair Pack.</a><br />
<br />
<img src="http://i.imgur.com/Gk9wKD6.png" border="0" alt="[Image: Gk9wKD6.png]" /><br />
<br />
<span style="font-weight: bold;">FgColor</span><br />
This stands for foreground color and is the color that you will see your text as. The syntax for this parameter is &lt; R G B A &gt;, with R meaning Red, G being Green, B being Blue, and A being Alpha. Alpha determines how transparent the color is, but it sometimes doesn’t function correctly in TF2 for custom crosshair fonts, not sure why. For setting the colors, the accepted values are any integer from zero to two hundred fifty five. Each number determines how much of that color is present. So, &lt; 255 0 0 255 &gt; would mean the text will be all red, &lt; 255 255 0 255 &gt; would mean the text would be equal parts red and green and so would manifest itself as yellow. You don’t need to put in any ‘&lt;’s, I simply put them in to separate the values from the text. Make sure it is surrounded by parentheses. You can also simply reference the name of a color which is installed in <span style="font-weight: bold;">ClientScheme.res</span>, here’s the definition for ‘White’, which I used in the example, in ClientScheme. Colors are defined at the beginning. As you can see all colors are defined by the code I explained above.<br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>Colors<br />
{<br />
"Orange" "178 82 22 255"<br />
"OrangeDim" "178 82 22 120"<br />
"LightOrange" "188 112 0 128"<br />
"GoalOrange" "255 133 0"<br />
"TFOrange" "145 73 59 255"<br />
<br />
"White" "235 235 235 255"<br />
"Red" "192 28 0 140"<br />
"RedSolid" "192 28 0 255"</code></div></div>
<br />
If you’re still confused check out <a href="http://huds.tf/guides/hud_cross_img/hudxhair_color.jpg" target="_blank">this image</a>. <br />
<br />
<br />
<span style="font-weight: bold;">TextAlignment</span><br />
This parameter has two sets of accepted values: left-right values and up-down values. First off, here are the left-right values: ‘East’, which represents alignment to the right, ‘West’, which represents alignment to the left, and ‘Center’, which is self explanatory. Now, for the up or down: "North" for up, "South for down. Another, simpler way to explain is that this property uses the cardinal directions for values, as well as "Left" and "Right". To enter more than one alignment you must use the cardinal directions with the vertical alignment first, for example "North-West" for top left alignment. Basically, think of the text as being inside of a box. The box is what the control creates, more accurately what the control actually is, and you define the wide and tall values for it. Center would make the text aligned to the center of the box. West would put it on the left side of the box. East would put it on the right side of the box. For controls which contain dynamic text such as your health and ammo, changing the alignment is very useful. <br />
<br />
<img src="http://huds.tf/guides/hud_cross_img/image06.png" border="0" alt="[Image: image06.png]" /><br />
<br />
As you can see in the images on the right, if you align the ammo in clip to the West (like the top two images) then it can clash with the ammo in reserve if the amount of ammo loaded changes, for example the medic has 40 needles loaded at once while the soldier has 4 rockets. You can see the problem. Aligning the ammo in clip to the east (like the bottom two) fixes the problem, now it can’t ever clip. <br />
<br />
<span style="font-size: medium;"><span style="text-decoration: underline;">Image:</span></span><br />
<br />
<span style="font-weight: bold;">Alpha</span><br />
This is the equivalent of the fourth value in fgcolor, if you remember that. If not, it’s essentially a numerical value for transparency, 0 being so transparent that it’s invisible and 255 being so 100% visible, not transparent at all. <br />
<br />
<span style="font-weight: bold;">Image</span><br />
This tells the game where the file that is going to be loaded is. You simply put the file directory here and the game will look there for a .vmt file named appropriately and will then load the .vtf referenced by that .vmt. <br />
<br />
<span style="font-weight: bold;">ScaleImage</span><br />
As far as I can tell this is either broken or doesn’t do anything, I’ve never seen any difference when I enabled it or disabled it. <a href="https://code.google.com/p/flamehud/downloads/detail?name=FlameHUD.pdf" target="_blank">Flame’s old hud guide</a> concurs and <a href="http://doodlesstuff.com/?tutorial=tf2hud" target="_blank">Doodle’s Hud Guide</a> doesn’t mention it.<br />
<br />
<span style="font-size: xx-large;"><span style="font-weight: bold;">4. Creating your own Crosshairs</span></span><br />
<br />
First of all you need to decide if the crosshair you want to create is an image or a text crosshair. <br />
<br />
This is a distinct advantage of image crosshairs, it’s significantly easier to create your own. All you need to do is open up Photoshop, or, if you don’t have it, <a href="http://www.gimp.org/" target="_blank">GIMP</a> is a great free alternative which I personally use and would highly recommend. Then simply create your crosshair or open up an image of one from another game and save it as a .png or a .jpg. <br />
<br />
Here are some useful tips for using GIMP to create a crosshair if you don't have experience with the application.<ul>
<li>First, go to file&gt;new to create a new file. You are going to want your dimensions to be a power of 2 by another power of 2.<br />
<img src="http://i.imgur.com/a3uTtQt.png" border="0" alt="[Image: a3uTtQt.png]" /><br />
</li>
<li>I usually use 1024 by 1024 or 512 by 512, a square file is easier to center regardless of crosshair shape so I'd advise making it square.<br />
</li>
<li>Before you hit "OK" go to the arrow near "Advanced Options", click it, then go to "Fill With" and select "Transparency" from the drop-down menu.<br />
</li>
<li>Now you have your canvas on which to create your crosshair.<br />
</li>
<li>The very basics are this: create a selection and fill it with a color. To this end, some useful tools are the selection tools, rectangle, ellipse, free select, etc. Here are some tips and tricks to using these tools.<br />
</li>
<li>First off, whenever you are using a tool it's a good idea to have the "Tool Options" window open. If you don't see it go up to Windows&gt;Dockable Dialogs&gt;Tool Options. This is extremely useful.<br />
</li>
<li>For making a circle be uniform/perfect you can simply set aspect ratio to be 1:1 or change the dimensions manually in the same (Tool Options) window. Obviously the same can be used to mess with a rectangular selection/make it square.<br />
</li>
<li>If you are copying and pasting/editing a pre-existing crosshair an extremely useful tool is the "Select By Color" tool. It selects all pixels in the image of the color that you click on. <br />
</li>
<li>For any of these selection tools it's useful to be able to subtract or add to it easily, so take note of the buttons at the top of the "Tool Options" window: they change the mode of selection you are currently in, from making a new selection to adding/subtracting/intersecting with the current one. For example, to make a ring you make a circle then change the mode to subtract from selection and put a smaller circle inside. There are an abundance of GIMP tutorials on the subject, and a video does it much better than I can. Another example is that maybe selecting by color didn't get everything you hoped it would. Change to "Add to Selection" and you can easily add different shades of the same color which you want to include that weren't picked up.<br />
</li>
<li>Another useful trick for selecting by color is that if there is an image and you want to effectively get rid of a inform background you can select the background then hit Edit&gt;Clear to send it to transparent or Select&gt;Invert to invert the selection, effectively selecting every pixel in the image that is NOT the color you selected. The invert selection button is immensely useful in multiple other ways as well.<br />
</li>
<li>One more useful tool is "Align" to align your selection or layer to the center of the image for the easiest time making a multiple layered image look neat. For example, to make the backgrounds to the health cross I used in my hud <a href="http://teamfortress.tv/thread/8247/show-your-hud-modifications/?page=95#2845" target="_blank">here</a>:<br />
<a href="http://imgur.com/a/d05Th" target="_blank">Photo Album</a> for what it looks like.<br />
<br />
I made a circle selection, went to tool options, changed the size to 300 x 300, went to align tool, center aligned it, then filled the whole thing with blue or black or whichever. Then I made a rectangular selection, made it 75 x 200 ( I think, don't quite remember), centered it with the align tool. Then I went to edit&gt;clear to send that rectangle in the middle to transparent. Then I made another rectangular selection, 200 x 75 this time, and center aligned it, then "cleared" that one as well. The result satisfies my perfectionistic (is this a word?) OCD tendencies. <br />
<br />
</li></ul>
<br />
<br />
<br />
From here you can either use the <a href="https://developer.valvesoftware.com/wiki/Photoshop_VTF_Plugin" target="_blank">VTF photoshop plugin</a> or the <a href="https://developer.valvesoftware.com/wiki/GIMP" target="_blank">GIMP VTF plugin</a> to export to a .vtf file. If you prefer, there is also <a href="https://developer.valvesoftware.com/wiki/VTFEdit" target="_blank">VTFedit</a>. VTFedit is what I'm going to be using in my example and works with any image from either Photoshop or GIMP so if you want me to walk you through it I suggest you get that. <br />
<br />
Your next challenge is successfully changing the settings so that your crosshair doesn't look like shit in game. The method of changing your image to a .vtf that I'm familiar with is VTFedit, so that's what I'm going to be using in my examples. I'm fairly sure both plugins are similar to VTFedit when it comes to settings but I'm not certain.<br />
<br />
As a side note, all of what I'm saying below about VTFedit is applicable to all custom materials, not crosshairs. <br />
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">VTFedit Settings:</span></span><br />
<ul>
<li>Hit File&gt;Import<br />
</li>
<li>Navigate to the image you created and hit import.<br />
</li>
<li>In the "import settings" window you are going to want to change tabs to "General" if you aren't already there and use the following settings:<br />
</li></ul>
<br />
<span style="text-decoration: underline;">Import Settings:<br />
</span><br />
<span style="font-weight: bold;">Normal Format:</span> DXT5<br />
<span style="font-weight: bold;">Alpha Format:</span> DXT5<br />
<span style="font-weight: bold;">Texture Type:</span> shouldn't really matter for most, use "Environment Map" just in case.<br />
<br />
Resizing is interesting. VTF files need to have specific dimensions. They need to be a power of 2 by a power of 2. Remember above, when I said to create the new file in GIMP to have a power of 2 by a power of 2? 1024 x 1024 or 512 x 512? This was why. The ideal scenario is that you did as I suggested, in which case your crosshair will not be distorted at all. <br />
<span style="font-weight: bold;">Resize:</span> un-tick<br />
<span style="font-weight: bold;">Resize Filter:</span> n/a<br />
<span style="font-weight: bold;">Sharpen Filter:</span> n/a<br />
<br />
<br />
If you used someone else's image, or for whatever reason the dimensions are wrong/not a power of 2 by another power of 2, then you will want to use these settings below.<br />
<span style="font-weight: bold;">Resize:</span> Nearest power of 2<br />
<span style="font-weight: bold;">Resize Filter:</span> Box<br />
<span style="font-weight: bold;">Sharpen Filter:</span> None<br />
<br />
<span style="font-weight: bold;">Clamp:</span> un-tick<br />
<span style="font-weight: bold;">Mipmaps:</span> un-tick<br />
<span style="font-weight: bold;">Normal Maps:</span> un-tick<br />
<br />
To confirm, it should look like this:<br />
<img src="http://i.imgur.com/bqGDq3T.png" border="0" alt="[Image: bqGDq3T.png]" /><br />
<br />
Now you are done with Import Settings and can hit "OK". The next thing you need to do is to make sure the correct flags are checked under "Image" in the tab to the left. You want the following to be checked (some of them might already be done):<br />
<br />
<span style="text-decoration: underline;">Flag Settings:</span><br />
<br />
<span style="font-weight: bold;">point-sample</span><br />
<span style="font-weight: bold;">SRGB</span><br />
<span style="font-weight: bold;">Clamp-s</span><br />
<span style="font-weight: bold;">Clamp-t</span><br />
<span style="font-weight: bold;">no mipmaps</span><br />
<span style="font-weight: bold;">no level of detail</span><br />
<span style="font-weight: bold;">8-bit alpha</span><br />
<br />
Then click on "save as" and name it whatever you wish. The .vtf will eventually need to be placed in  <span style="font-weight: bold;">custom/*any folder name*/materials/vgui/replay/thumbnails</span> (this is because for whatever reason that file directory is not checked by sv_pure so it will work on any server, more info <a href="http://ozfortress.com/showthread.php?t=58545" target="_blank">here</a>), so you can save it there now if you wish. Now you're done with the .vtf! <br />
<br />
Your next task is to create a .vmt file to accompany your .vtf. I The .vmt is just a text document that lets the game know how to use the .vtf. It is the vmt file that the game actually looks at, not the .vtf.  personally don't use VTFedit's function to create your own .vmt as I do it by hand but you certainly can do so if you wish. It is under Tools&gt;Create VMT File. If you use it you simply select your saved .vtf as the base texture. If you wish to do it by hand, simply make a new text document and paste this in:<br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"UnlitGeneric"<br />
{<br />
"&#36;translucent" 1<br />
"&#36;basetexture" "vgui&#92;replay&#92;thumbnails&#92;*your file name*"<br />
"&#36;yertexcolor" 1<br />
"&#36;no_fullbright" 1<br />
"&#36;ignorez" 1<br />
}</code></div></div>
<br />
For more advanced users: there are many interesting things that can be done with vmts, such as making everything beneath it transparent, or making it spin or change color when you are moving. More info on that can be found <a href="https://developer.valvesoftware.com/wiki/List_Of_Material_Proxies" target="_blank">here</a>. To note: I couldn't personally get the proxy "PlayerDamageTime" to work at all, which is disappointing because if it had worked one could create a material in their hud that would change color or become visible only when the player had crit-heals. I personally was going to make an outline for the health cross, or a bar under the health, although something near the crosshair would be cool too. JarateKing, who knows much more about material proxies than I do, likewise failed, so that particular proxy might not work in TF2, unfortunately.<br />
<br />
Here is an example vmt where the crosshair would rotate, pulse blue, and flash green when you are moving:<br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"UnlitGeneric"<br />
{<br />
"&#36;translucent" "1"<br />
"&#36;basetexture" "vgui&#92;replay&#92;thumbnails&#92;crosshair_kent_010"<br />
<br />
"&#36;angle" "0.0"<br />
"&#36;translate" "[0.0 0.0]"<br />
"&#36;center" "[0.5 0.5]"<br />
<br />
"&#36;color" "[0.0 0.0 0.0]"<br />
"&#36;speed" "0"<br />
<br />
"&#36;vertexcolor" "1"<br />
"&#36;no_fullbright" "1"<br />
"&#36;vertexalpha" "1"<br />
"&#36;ignorez" "1"<br />
<br />
"Proxies"<br />
{<br />
// Rotates the crosshair<br />
"LinearRamp"<br />
{<br />
"rate" "600" // Adjust this, higher spins faster<br />
"initialValue" "0.0"<br />
"resultVar" "&#36;angle"<br />
}<br />
"TextureTransform"<br />
{<br />
"translateVar" "&#36;translate"<br />
"rotateVar" "&#36;angle"<br />
"centerVar" "&#36;center"<br />
"resultVar" "&#36;basetexturetransform"<br />
}<br />
<br />
// Makes the crosshair pulse blue<br />
"Sine"<br />
{<br />
"sinemin" "0.3"<br />
"minemax" "0.5"<br />
"sineperiod" "1"<br />
"resultVar" "&#36;color[2]"<br />
}<br />
<br />
// Makes the crosshair light up green when the player is moving<br />
"PlayerSpeed"<br />
{<br />
"resultVar" "&#36;speed"<br />
}<br />
"Clamp"<br />
{<br />
"min" "0.5"<br />
"max" "1.0"<br />
"srcVar1" "&#36;speed"<br />
"resultVar" "&#36;color[1]"<br />
}<br />
<br />
// Enable animation in the crosshair, set framerate<br />
//"AnimatedTexture"<br />
//{<br />
// "animatedtexturevar" "&#36;basetexture"<br />
// "animatedtextureframenumvar" "&#36;frame"<br />
// "animatedtextureframerate" "30"<br />
//}<br />
}<br />
<br />
}</code></div></div>
<br />
<img src="http://i.imgur.com/HvJEh5j.gif" border="0" alt="[Image: HvJEh5j.gif]" /><br />
<br />
More info on this specific crosshair found in the <a href="https://www.youtube.com/watch?v=KPYGwAij9JY&amp;spfreload=10" target="_blank">youtube video</a>.<br />
<br />
Another example:<br />
<br />
<img src="http://i.imgur.com/pCaBNNc.gif" border="0" alt="[Image: pCaBNNc.gif]" /><br />
<br />
More info on this specific vmt including a download link can be found <a href="http://www.reddit.com/r/truetf2/comments/26op93/more_intricate_crosshairs_colourchanging_flashing/" target="_blank">here</a>.<br />
<br />
<br />
Here is an example .vmt where it would mask everything beneath it and make it transparent, which can be used to make anything in your hud partially transparent, even your viewmodels. <br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"Refract"<br />
{<br />
"%keywords" "tf"<br />
"&#36;refractamount" "0.0"<br />
"&#36;refracttint" "{255 255 255}"<br />
"&#36;refractblur" "0.0"<br />
<br />
"&#36;scale" "[1 1]"<br />
"&#36;normalmap" "vgui/replay/thumbnails/REFRACTnormal"<br />
}</code></div></div>
<br />
<img src="http://i.imgur.com/sIXXx9S.png" border="0" alt="[Image: sIXXx9S.png]" /><br />
<br />
<a href="http://teamfortress.tv/thread/21756/prism-hud--clean-tf2" target="_blank">Here</a> is more information on transparent viewmodels with this method. <br />
<br />
<br />
The path to create your own text crosshair is one I confess I personally have never done. I do, however, understand the basic concept. What you will need to do is to create a vector image of the crosshair that you want to use, the application to use for that is probably Adobe Illustrator, a free application I have used is <a href="http://www.inkscape.org/en/" target="_blank">Inkscape</a>, which is compatible with GIMP. I wouldn’t highly recommend Inkscape but you can easily Google alternatives yourself. Then get your hands on a font editor, <a href="http://fontforge.org/" target="_blank">FontForge</a> probably being the best, although there are many other alternatives. Import your vector image into your custom font and save it as a .ttf or .otf and voíla. Google will need to be your friend on this one as I cannot help you much, sorry.<br />
<br />
<span style="font-size: xx-large;"><span style="font-weight: bold;">5. Toggling</span></span><br />
<br />
Toggling your hud crosshair means turning it on or off at will. Essentially, you could implement it into a crosshair switcher, such as<a href="https://code.google.com/p/broesels-crosshair-switcher/" target="_blank"> Broesel’s</a> or the one made by <a href="http://clugu.com/tf2mate/" target="_blank">TF2mate’s config generator</a>. Or you could only enable it for certain classes. The possibilities are only limited by the fact that there are only two ways to make a hud crosshair visible/invisible at will, however, there is another method to turn one on or off by class. <br />
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">Minmode</span></span><br />
<br />
This is the “traditional” method to toggle a hud crosshair on or off because it’s very easy to modify your hud if you already have a hud crosshair to implement this. All that is necessary is to change the parameters of visible_minmode and enabled_minmode to 0 on one crosshair and 1 on the other and to change the parameters of visible and enabled to 1 on one crosshair and 0 on the other. It will look like this: <br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"TextExample"<br />
{<br />
"controlName" "CExLabel"<br />
"fieldName" "TextExample"<br />
"visible" "1"<br />
"enabled" "1"<br />
"visible_minmode" "1"<br />
"enabled_minmode" "1"<br />
"xpos" "c0"<br />
"ypos" "c0"<br />
"zpos" "0"<br />
"wide" "100"<br />
"tall" "100"<br />
<br />
"font" "fogCrosshair"<br />
"labelText" "+"<br />
"fgcolor" "White"<br />
"textAlignment" "center"<br />
}<br />
"ImageExample"<br />
{<br />
"controlName" "CTFImagePanel"<br />
"fieldName" "ImageExample"<br />
"visible" "1"<br />
"enabled" "1"<br />
"visible_minmode" "1"<br />
"enabled_minmode" "1"<br />
"xpos" "c0"<br />
"ypos" "c0"<br />
"zpos" "0"<br />
"wide" "100"<br />
"tall" "100"<br />
<br />
"alpha" "255"<br />
"image" "replay/thumbnails/*your file name*"<br />
"scaleimage" "1"<br />
}</code></div></div>
<br />
In this example, ImageExample, the image crosshair, would only be visible when minmode is on, or, when cl_hud_minmode is set to 1. On the other hand, TextExample, the text crosshair, would only be visible when minmode is off, or, when cl_hud_minmode is set to 0. In this way you can use a console command to turn your crosshair on or off as you please. However, this is the method that I referenced earlier as being by class, meaning I recommend putting the command in your class configs to turn the crosshair on or off based on which class you are. The reason is that toggling this command causes in-game stutter, which makes sense: after all, the command is essentially telling the game to reload every single hud file, similar to a hud_reloadscheme. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Achievement Tracker</span></span><br />
<br />
This method is a bit more complicated, but the concept remains simple. Basically, TF2 has the capacity to display information about your progress on an in-game achievement of your choice, and you can toggle this feature on or off with a console command. To use this with a crosshair all you need to do is edit the file that controls the panel that tracks an achievement. Essentially you remove the parts concerning achievements and replace them with your crosshair, which is now contained in a control which is toggleable with the console command hud_achievement_tracker (1 for on, 0 for off, as is standard). <br />
<br />
You’re going to want to replace the contents of your <span style="font-weight: bold;">HudAchievementTrackerItem.res</span> with this:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"Resource/UI/HudAchievementTrackerItem.res"<br />
{<br />
<br />
//crosshair start<br />
<br />
<br />
//crosshair end<br />
<br />
  "HudAchievementTrackerItem"<br />
  {<br />
      "ControlName"   "EditablePanel"<br />
      "fieldName"     "HudAchievementTrackerItem"<br />
      "xpos"          "0"<br />
      "ypos"          "0"<br />
      "zpos"          "999"<br />
      "wide"          "f0"<br />
      "tall"          "480"<br />
      "visible"       "0"<br />
      "enabled"       "1"<br />
<br />
      "PaintBackgroundType"   "2"<br />
  }<br />
     <br />
  "AchievementName"<br />
  {<br />
      "ControlName"   "Label"<br />
      "fieldName"     "AchievementName"<br />
      "labeltext"     ""<br />
      "xpos"          "9999"<br />
      "ypos"          "9999"<br />
      "wide"          "170"<br />
      "tall"          "10"<br />
      "zpos"          "4"<br />
      "textinsetx"    "5"<br />
      "font"          "AchievementTracker_Name"<br />
      "textAlignment"     "north-west"<br />
  }<br />
     <br />
  "AchievementNameGlow"<br />
  {<br />
      "ControlName"   "Label"<br />
      "fieldName"     "AchievementNameGlow"<br />
      "labeltext"     ""<br />
      "xpos"          "9999"<br />
      "ypos"          "9999"<br />
      "wide"          "170"<br />
      "tall"          "10"<br />
      "zpos"          "4"<br />
      "fgcolor_override"      "235 226 202 255"<br />
      "font"          "AchievementTracker_NameGlow"<br />
      "textinsetx"    "5"<br />
      "textAlignment"     "north-west"<br />
  }<br />
     <br />
  "AchievementDesc"<br />
  {<br />
      "ControlName"   "Label"<br />
      "fieldName"     "AchievementDesc"<br />
      "labeltext"     ""<br />
      "xpos"          "9999"<br />
      "ypos"          "9999"<br />
      "wide"          "120"<br />
      "tall"          "18"<br />
      "zpos"          "4"<br />
      "textinsetx"    "5"<br />
      "fgcolor_override"      "235 226 202 255"<br />
      "font"          "AchievementTracker_Desc"<br />
      "wrap"          "1"<br />
      "TextAlignment"     "north-west"<br />
  }<br />
     <br />
  "ProgressBarBG"<br />
  {<br />
      "ControlName"       "ImagePanel"<br />
      "fieldName"     "ProgressBarBG"<br />
      "xpos"      "9999"<br />
      "ypos"      "9999"<br />
      "wide"      "100"<br />
      "tall"      "6"<br />
      "fillcolor"  "250 234 201 51"<br />
      "zpos"          "4"<br />
      "visible"       "1"<br />
      "enabled"       "1"<br />
  }<br />
     <br />
  "ProgressBar" // current completed<br />
  {<br />
      "ControlName"   "ImagePanel"<br />
      "fieldName"     "ProgressBar"<br />
      "xpos"          "9999"<br />
      "ypos"          "9999"<br />
      "wide"          "0"<br />
      "tall"          "6"<br />
      "fillcolor"     "251 235 202 255"<br />
      "zpos"          "5"<br />
      "visible"       "1"<br />
      "enabled"       "1"<br />
  }<br />
}</code></div></div>
and ctrl+f for and replace the information about HudAchievementTracker in <span style="font-weight: bold;">HudLayout.res</span> with this:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"HudAchievementTracker"<br />
      {<br />
              "ControlName"   "EditablePanel"<br />
              "fieldName"             "HudAchievementTracker"<br />
              "xpos"                  "0"<br />
              "NormalY"               "0"<br />
              "EngineerY"             "0"<br />
              "wide"                  "f0"<br />
              "tall"                  "480"<br />
              "visible"               "1"<br />
              "enabled"               "1"    <br />
              "zpos"                  "1"<br />
      }</code></div></div>
Then simply paste the control for your crosshair into the section in the first link entitled “crosshair”. More information can be found at <a href="http://teamfortress.tv/thread/4134/?page=1" target="_blank">this link</a>. <br />
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">3D PlayerModel Background</span></span><br />
<br />
This method is fairly simple but a lot of users have troubles with it for whatever reason. Basically: Valve added a feature to use, instead of the default class image, a dynamic and three dimensional player model complete with accurate weapons, hats, and running/swimming postures. Due to performance issues, Valve added a console command to toggle the feature on or off. By replacing the background that accompanies, by default, this feature, with our own image crosshair, we can then toggle the crosshair on or off at will. I would recommend only using this method if you can live without the 3D model. If you do wish to use it, all that is necessary to do this is to replace the following control in <span style="font-weight: bold;">HudPlayerClass.res</span> with your crosshair. <br />
<br />
<img src="http://huds.tf/guides/hud_cross_img/image04.png" border="0" alt="[Image: image04.png]" /><br />
<br />
So, using my previous example image crosshair, it would look something like this: <br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"classmodelpanelBG"<br />
{<br />
"ControlName" "CTFImagePanel"<br />
"fieldName" "classmodelpanelBG"<br />
"visible" "0"<br />
"enabled" "1"<br />
"visible_minmode" "0"<br />
"enabled_minmode" "1"<br />
"xpos" "c0"<br />
"ypos" "c0"<br />
"zpos" "0"<br />
"wide" "100"<br />
"tall" "100"<br />
"alpha" "255"<br />
"image" "replay/thumbnails/*your file name*"<br />
"scaleimage" "1"<br />
}</code></div></div>
<br />
The only thing to be careful about is that you have visible set to 0 and enabled set to 1. As explained under their respective sections under Basic Parameters, this ensures that you can actually turn it off or on. If enabled and visible are both set to 0 your crosshair will never show up because it will never be loaded by the hud. If both are set to 1 then the crosshair will always be visible and you won’t be able to truly ‘toggle’ it on and off. <br />
<br />
Another thing you may want to do is scroll down a little bit in <span style="font-weight: bold;">HudPlayerClass.res</span> and change xpos to "9999" under "classmodelpanel". This will move the actual 3d model off the screen so it doesn't turn on and off too. This way only your crosshair will be visible. <br />
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">In-Game Image Crosshair</span></span><br />
<br />
It turns out, by using the console, that you can actually reference one of your images that you’ve saved to the directory <span style="font-weight: bold;">“materials/vgui/replay/thumbnails”</span> as an in-game crosshair. That is, it's possible to "trick" the game into using your image instead of a default crosshair. This allows you to modify it using the “options” window (or console commands) to control color and size. You cannot, however, switch between your new custom crosshair and other default ones. <br />
<br />
All you need to do to use this method if you so desire is to make sure the .vtf and the accompanying .vmt are correctly created and placed and then type in console the following:<br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>cl_crosshair_file ../replay/thumbnails/*crosshair name*</code></div></div>
<br />
Make sure to replace <span style="font-weight: bold;">*crosshair name*</span> with the name of your file and double-check that you have set up the .vmt file correctly. The only other weird restriction is that, although it will work on servers with sv_pure set to 2, you need to load it up in a server with sv_pure set to 0 first. All this means is that some servers restrict the usage of custom textures and so you should click the “create new server” button on your main menu right after you start TF2 then copy paste the command in console after you’ve joined the map. As soon as you’ve done this you’re good to join any server and your crosshair should remain, at which point you can change the color with console commands or a crosshair switching script. You could make it bigger and red for your melee and smaller and red for your primary, for example, or have it change to a different color for every direction that you move <a href="http://forums.steampowered.com/forums/showthread.php?t=1591457" target="_blank">like stabby does</a>.<br />
<br />
<br />
<span style="font-weight: bold;"><span style="font-size: xx-large;">6. Postnotes</span></span><br />
<br />
The explanation images were all created using the font “Novecento” as an example, this is the font that Garm3n introduced in his Rex, 8MD, VIP, and KTC HUDS and their variants. It was popularized in yAhud, created by whayay, and it is a free font so I feel no qualms about using it in these diagrams. <br />
<br />
The HUD I was using to create the explanation images is the default HUD, so if things look different and you’re confused by some aspect of your custom HUD or its code, that could be the cause. <br />
<br />
If you’re still confused about anything feel free to <a href="http://teamfortress.tv/user/komorebi" target="_blank">send me a private message through teamfortress.tv</a> or <a href="http://steamcommunity.com/id/not_a_custom_url" target="_blank">add me on steam</a>, I’d be happy to help walk you through anything else.<br />
<br />
<span style="font-size: xx-large;"><span style="font-weight: bold;">Credits</span></span><br />
<br />
This guide was written by <a href="http://steamcommunity.com/id/not_a_custom_url" target="_blank">Komorebi</a>, whose initial middle-school alias was Han Brolo. He also gives thanks to CollyCat, Magma, Pwny_, omnibombulator, Lange, Mana and Doodle for various help with the guide. <br />
<br />
As far as usage of this guide goes: use it however/whenever you wish! Please feel to post corrections if I've made a mistake or suggest improvements that could be made.]]></description>
			<content:encoded><![CDATA[<span style="font-size: x-large;">This guide has been ported over from the old HUDS.TF Guides section. Credit for this Guide goes towards <a href="https://huds.tf/forum/member.php?action=profile&amp;uid=44" target="_blank">Komorebi</a>.</span><br />
<br />
<span style="font-weight: bold;"><span style="font-size: xx-large;">Introduction</span></span><br />
This part of the tutorial is a basic overview of what exactly a HUD crosshair is. More advanced users should skip ahead to <span style="font-weight: bold;">Implementation</span>. <br />
<br />
Team Fortress 2's heads up display, or HUD as it is colloquially known, is a user interface, also known as a UI. It displays information relevant to the user while in-game, such as health, ammo, the scoreboard, and much more. It is controlled by text documents that determine positioning, size, visibility, color, and everything else about all of its moving bits and pieces. These documents, saved as .res files, can be edited by the user to change existing bits and pieces, which will henceforth referred to as controls, or, more interestingly, at least for our purposes, add new controls. One technique users have been using since as early as 2009 is to place a control into their HUDs to serve as a crosshair. That is, something that will tell them where the center of their screen is. There are two main methods of doing this: text crosshairs and image crosshairs. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Text Crosshairs</span></span>:<br />
The first method is to simply insert a text box into the hud and then load a custom font which contains the crosshair of your choice. This method's advantages are that the crosshair’s color can be changed easily and it can be animated to change color upon damage (whenever you hit someone), a feature found in many of the Quake games, precursors to the TF series in several ways. For users searching for a more in-depth explanation of the custom font or who are interested in creating their own font, skip ahead to <span style="font-weight: bold;">Creating Your Own Crosshairs</span>. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Image Crosshairs</span></span>:<br />
The second method is to simply insert an image file into the hud. The advantages this method brings are that the size of the crosshair can be changed easily and it can be toggled (turned on or off at will) in a couple ways that text crosshairs can't be. If you are fairly experienced with these crosshairs you might know about the method of implementing them as in game crosshairs, in which case you would want to skip ahead to <span style="font-weight: bold;">In-Game Image Crosshair</span>.<br />
<br />
<span style="font-weight: bold;"><span style="font-size: xx-large;">1. Implementation</span></span><br />
<br />
For both methods the crosshair is created by inserting a new control in <span style="font-weight: bold;">HudLayout.res</span>. There are several other steps that must be taken as well to ensure that your crosshair functions as intended. Everything that is necessary for both crosshairs is listed below. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Text</span></span>:<br />
<ol type="1">
<li>Add the physical font file to resource or resource/fonts.<br />
</li>
<li>Reference the font file at the very bottom of <span style="font-weight: bold;">ClientScheme.res</span> in the section entitled "CUSTOM FONT FILES". Make sure the numbers are in ascending order (1 then 2 then 3 etc.).<br />
 <div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>}<br />
 "6"<br />
 {<br />
 "font" "resource/TF2Build.ttf"<br />
 "name" "TF2 Build"<br />
 "russian"<br />
 {<br />
 "range" "0x0000 0xFFFF"<br />
 }<br />
 "polish"<br />
 {<br />
 "range" "0x0000 0xFFFF"<br />
 }<br />
 "turkish"<br />
 {<br />
 "range" "0x0000 0xFFFF"<br />
 }<br />
 }<br />
 "7"<br />
 {<br />
 "font" "resource/fonts/crosshairs.ttf"<br />
 "name" "crosshairs"<br />
 }</code></div></div>
</li>
<li>Create a definition for the font in <span style="font-weight: bold;">ClientScheme.res</span> under the section entitled "FONTS", which is pretty early in the file.<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>//<br />
 //////////////////////// FONTS /////////////////////////////<br />
 //<br />
 // describes all the fonts<br />
 Fonts<br />
 {<br />
 // fonts are used in order that they are listed<br />
 // fonts listed later in the order will only be used if they fulfill a range not already filled<br />
 // if a font fails to load then the subsequent fonts will replace<br />
 <br />
 "fogCrosshair"<br />
 {<br />
 "1"<br />
 {<br />
 "name" "Crosshairs"<br />
 "tall" "28"<br />
 "additive" "0"<br />
 "antialias" "1"<br />
 "weight" "0"<br />
 "outline" "1"<br />
 }<br />
 }<br />
 "fogCrosshairSmall"<br />
 {<br />
 "1"<br />
 {<br />
 "name" "Crosshairs"<br />
 "tall" "24"<br />
 "additive" "0"<br />
 "antialias" "1"<br />
 "weight" "0"<br />
 "outline" "1"<br />
 }<br />
 }<br />
 "fogCrosshairSmooth"<br />
 {<br />
 "1"<br />
 {<br />
 "name" "Crosshairs"<br />
 "tall" "28"<br />
 "additive" "0"<br />
 "antialias" "1"<br />
 "weight" "0"<br />
 "outline" "1"<br />
 }<br />
 }</code></div></div>
</li>
<li>Create the control in <span style="font-weight: bold;">HudLayout.res</span>, examples are below under <span style="font-weight: bold;">Examples</span>. <br />
</li></ol>
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">Image:</span></span><br />
<ol type="1">
<li>Save the image file you would like to use as a .vtf or valve texture format file and make sure there is an accompanying .vmt file that has the same name. If you are using someone else’s work this is most likely done.<br />
</li>
<li>Make sure the .vmt file references the correct .vtf. The .vmt, or valve material type, should look like this:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"UnlitGeneric"<br />
{<br />
 "&#36;translucent" 1<br />
 "&#36;basetexture" "vgui&#92;replay&#92;thumbnails&#92;*your file name*"<br />
 "&#36;yertexcolor" 1<br />
 "&#36;no_fullbright" 1<br />
 "&#36;ignorez" 1<br />
}</code></div></div>
*name of your file* needs to be the same as the name of the .vmt and the .vtf, to clarify.<br />
</li>
<li>Create a copy of both files and move the copies into custom/ *any name*/materials/vgui/replay/thumbnails.<br />
</li>
<li>Either create the control in <span style="font-weight: bold;">HudLayout.res</span> if you want to use the crosshair that way or reference it in console as an in-game crosshair. If you wish to pursue the second option then skip ahead to In-Game Image Crosshair. <br />
</li></ol>
<br />
<span style="font-weight: bold;">Text Example</span>:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"TextExample"<br />
{<br />
"controlName" "CExLabel"<br />
"fieldName" "TextExample"<br />
"visible" "1"<br />
"enabled" "1"<br />
"visible_minmode" "1"<br />
"enabled_minmode" "1"<br />
"xpos" "c0"<br />
"ypos" "c0"<br />
"zpos" "0"<br />
"wide" "100"<br />
"tall" "100"<br />
<br />
"font" "fogCrosshair"<br />
"labelText" "+"<br />
"fgcolor" "White"<br />
"textAlignment" "center"<br />
}</code></div></div>
<br />
<span style="font-weight: bold;">Image Example:<br />
</span><div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"ImageExample"<br />
{<br />
"controlName" "CTFImagePanel"<br />
"fieldName" "ImageExample"<br />
"visible" "1"<br />
"enabled" "1"<br />
"visible_minmode" "1"<br />
"enabled_minmode" "1"<br />
"xpos" "c0"<br />
"ypos" "c0"<br />
"zpos" "0"<br />
"wide" "100"<br />
"tall" "100"<br />
<br />
"alpha" "255"<br />
"image" "replay/thumbnails/*your file name*"<br />
"scaleimage" "1"<br />
}</code></div></div>
<br />
<span style="font-weight: bold;"><span style="font-size: xx-large;">2. Customization</span></span><br />
<br />
<span style="font-weight: bold;"><span style="font-size: large;"><span style="text-decoration: underline;">Changing Your Crosshair</span></span></span><br />
Let’s say you find a crosshair that you love, but it’s just a tad too big. Or maybe it’s a little too green for your taste. This is solved by editing the parameters in the control you put in <span style="font-weight: bold;">HudLayout.res</span>. After each change you should open up <a href="https://developer.valvesoftware.com/wiki/Developer_Console" target="_blank">the developer’s console</a> and type the command “hud_reloadscheme”. This will reload all of the hud files and apply your changes. In this way you can see the effects of your edits without needing to restart the game. <a href="http://forums.steampowered.com/forums/showthread.php?t=2723536" target="_blank">Running TF2 in windowed no border at your resolution</a> makes alt-tabbing in and out of game quicker and easier so I’d recommend that as well. How do you actually change anything, you say? Below is an explanation of how you can tweak your crosshair’s size, color, and positioning. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Resizing</span></span><br />
For image crosshairs, this is as simple as editing the wide and tall values in the control. For text crosshairs, the size of the text you have created is determined by the font definition in <span style="font-weight: bold;">ClientScheme.res</span>. You will need to edit the existing definition, or, more efficient, create a new one that’s a little different. Here’s how. <br />
<img src="http://huds.tf/guides/hud_cross_img/image00.png" border="0" alt="[Image: image00.png]" /><br />
<br />
Thanks to Lange for letting me <a href="https://www.youtube.com/watch?v=FR6xYFTNDAA" target="_blank">point you to his explanation</a>. Antialiasing is pretty different in fonts, and doesn't always work, so try enabling/disabling it yourself and see. <br />
<br />
In addition to antialiasing, you might want to change "outline" to "1", which will put a black outline around your crosshair. It might be a bit buggy or pixelated, however, so, same as your crosshair, test out enabling and disabling it for optimum results. <br />
<br />
Back to resizing. Something a lot of hud makers do to make things easier is to create many definitions for the same font. This is because the only way to change the size of a font is to change the font definition. So, an easy shortcut is to name each definition according to the size it is. For example, make one called crosshair12, with the tall value being 12, another named crosshair14 with the tall value of 14, all the way up to 54, which is the highest tall value that TF2 accepts. This is useful because TF2 doesn’t reload <span style="font-weight: bold;">ClientScheme.res</span> (or the main menu, for that matter, if you're interested) when you type hud_reloadscheme in console, so you need to restart the game each time you change <span style="font-weight: bold;">ClientScheme</span>. By creating lots of font definitions you can test out new sizes for text boxes without restarting the game. <br />
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">Changing Color</span></span><br />
This time, the roles are reversed. Text crosshairs are easy, and image crosshairs are hard. To change the color of a text crosshair all you have to do is change the value of “fgcolor”. I elaborate on how exactly to change fgcolor below under Specific Parameters. For image crosshairs, it is significantly more difficult: you need to actually edit the .vtf file itself and change the color in an image editor. This requires VTFedit to convert your .vtf to a .png or any other editable file type, then editing it in Photoshop or something similar. More information on this can be found in the section below entitled Creating Your Own Crosshairs. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Changing Position</span></span><br />
Shifting the position is as simple as changing the xpos, ypos, and zpos under the control in <span style="font-weight: bold;">HudLayout.res</span>. This includes if you want to put your xhair underneath something else, like an outline for the in-game ones. More information on these parameters below under Basic Parameters. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Fixing Cut Off Issues</span></span><br />
Having a problem with your hud crosshair being cut off? If you are, then there are three possibilities. One: if you’re using an image crosshair, that the file was saved incorrectly in VTFedit. If you made your crosshair yourself this is entirely possible, if you didn’t make it (and you’ve seen screenshots of what it’s supposed to look like) this isn’t the case. Two: if you’re using a text crosshair, it’s possible that the wide and tall values under your control are too small, and that the text is being cut off. This is explained in the image below.<br />
<img src="http://huds.tf/guides/hud_cross_img/image11.png" border="0" alt="[Image: image11.png]" /><br />
So, increasing the wide and tall values might fix your problem. The third possibility is only relevant if it’s a text crosshair and you’re using a mac; sometimes fonts get cut off in TF2 on macs: this is due to differences in how the Macintosh and Windows Operating Systems handle fonts and therefore how TF2 expects its fonts to be handled. It’s on Valve’s end, and the only solutions are to realign the characters in a font editor or to convert it to an image crosshair. Or, of course, you could partition your mac and run both windows and mac os, which I would strongly recommend if you want to play TF2 in a non-casual setting.<br />
<br />
<span style="font-size: xx-large;"><span style="font-weight: bold;">3. Parameters</span></span><br />
<br />
Below I will give an explanation of what each parameter under the control does. More experienced users might want to jump to <span style="font-weight: bold;">Specific Parameters</span> to skip the basic parameters. <br />
<br />
<span style="font-weight: bold;"><span style="font-size: large;"><span style="text-decoration: underline;">Basic Parameters</span></span></span><br />
These are the basic parameters which are relevant to both image and text crosshairs. I would recommend scrolling back up to check the examples above if you're confused at any point, to remind yourself what the whole picture looks like. <br />
<span style="font-weight: bold;"><br />
ControlName</span><br />
This refers to what type of control you're creating. To reiterate, control is just a fancy name for the bits and pieces of your HUD: each control is simply an element or part of the interface that contains text, an image, or any variety of things. There are three basic types of controls but only two are relevant for the purpose of hud crosshairs. <br />
<span style="text-decoration: underline;">Labels</span>: These are text boxes. The two basic types are Label and CExLabel.<br />
<span style="text-decoration: underline;">Panels</span>: Pictures and blocks of color. For our purposes basically just images. The basic types are ImagePanel and EditablePanel.<br />
The third type, which is not relevant for our purposes, is Buttons. These are clickable elements composed of either a text box, and image, or both. Buttons are not commonly used to create Crosshairs. The basic types are Button, ImageButton, CExButton, CExImageButton. <br />
<br />
<span style="font-weight: bold;">FieldName</span><br />
Simple, the name of the control. Can only contain letters and numbers and must be the unique name of the control. If you're editing an existing control don't touch this. <br />
<br />
<span style="font-weight: bold;">Visible</span><br />
This determines whether the control is drawn. As one would expect, '1' means visible, '0' means invisible. <br />
<br />
<span style="font-weight: bold;">Enabled</span><br />
This determines whether the control is even loaded. The difference between this and visible is that some elements are turned on or off by the game. Disabling these elements means they're never going to be seen. Making them invisible might mean that they're seen part of the time. For hud crosshairs the distinction doesn't matter turn either to 0 to make it invisible and 1 to make it visible. There is one notable exception which will be discussed later in the 3D PlayerModel Backgroundsection. <br />
<br />
<span style="font-weight: bold;">Xpos</span><br />
This parameter determines the position in the x direction of the left side of the control relative to the parent control. Basically, how far to the right or left. Another way of thinking about it is that changing this value moves the crosshair horizontally. For hud crosshairs the parent control is usually simply the hud, in which case the crosshair is positioned relative to the screen. By default the numbers are how far away from the left side of the screen. Adding a 'c' in front means that the control is placed relative to the center of the screen. Adding an 'r' in front means that the control is positioned relative to the right side of the screen. This parameter accepts negative values, which are flipped around, as you would expect, by adding an 'r'. Minus values can also be used, by adding "-" before the value. Check out <a href="http://huds.tf/guides/hud_cross_img/xhairguide_xpos.jpg" target="_blank">this image</a> if you’re still confused. <br />
<br />
<span style="font-weight: bold;">Ypos</span><br />
This parameter determines the position of the top of the control relative to the parent control in the y direction. In other words, up or down, or in the vertical direction. By default it is from the top of the screen. Adding a 'c' as a prefix measures from the center, an 'r' prefix measures from the bottom of the screen. This parameter accepts negative values, which are, again, flipped by adding an 'r'. <br />
<br />
<span style="font-weight: bold;">Zpos</span><br />
This parameter determines the position of the control in the z-direction, also known as into or out of the board. More colloquially, this determines whether or not your crosshair is behind or in front of other stuff, or determines which layer the control is located in. The way this works is that controls are drawn by the game in order from lowest to highest, so the control with the most negative 'Zpos' will be drawn first, then the least negative progressively, the least positive, finally the most positive. The higher the 'Zpos', the further forward the control, or the more stuff it will be on top of. The lower, the further away the control, or the more stuff it will be below. <br />
<br />
<span style="font-weight: bold;">Wide/Tall</span><br />
The width and height of the control. Text will need to be completely contained within the control or parts of it may be cut off. For images, this simply resizes the image. You cannot resize a text crosshair this way, you need to change the font definition in ClientScheme.res or reference a different font, more on that available in Resizing. If your crosshair is half-visible, this could be the reason. Putting 'f0' gives you the full screen size. <br />
<br />
<br />
<span style="font-weight: bold;"><span style="font-size: large;"><span style="text-decoration: underline;">Specific Parameters</span></span></span><br />
<br />
As you can see, this is where more differences start to arise in the implementation of image crosshairs and text crosshairs. <br />
<br />
<span style="font-size: medium;"><span style="text-decoration: underline;">Text:</span></span><br />
<br />
<span style="font-weight: bold;">Font</span><br />
This is the name of the font file that you wish to use. The font file should be defined in ClientScheme.res. You check out more about installing fonts by reading our <a href="http://huds.tf/guides/?guide=2" target="_blank">Font Installation guide</a>. <br />
<br />
<span style="font-weight: bold;">LabelText</span><br />
This is what the text box will actually say. In our case this means which crosshair in the font file is referenced. For example, here is an image of the crosshairs included in <a href="http://teamfortress.tv/thread/14702/release-fogs-crosshairs-v3" target="_blank">Fog's Custom Crosshair Pack.</a><br />
<br />
<img src="http://i.imgur.com/Gk9wKD6.png" border="0" alt="[Image: Gk9wKD6.png]" /><br />
<br />
<span style="font-weight: bold;">FgColor</span><br />
This stands for foreground color and is the color that you will see your text as. The syntax for this parameter is &lt; R G B A &gt;, with R meaning Red, G being Green, B being Blue, and A being Alpha. Alpha determines how transparent the color is, but it sometimes doesn’t function correctly in TF2 for custom crosshair fonts, not sure why. For setting the colors, the accepted values are any integer from zero to two hundred fifty five. Each number determines how much of that color is present. So, &lt; 255 0 0 255 &gt; would mean the text will be all red, &lt; 255 255 0 255 &gt; would mean the text would be equal parts red and green and so would manifest itself as yellow. You don’t need to put in any ‘&lt;’s, I simply put them in to separate the values from the text. Make sure it is surrounded by parentheses. You can also simply reference the name of a color which is installed in <span style="font-weight: bold;">ClientScheme.res</span>, here’s the definition for ‘White’, which I used in the example, in ClientScheme. Colors are defined at the beginning. As you can see all colors are defined by the code I explained above.<br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>Colors<br />
{<br />
"Orange" "178 82 22 255"<br />
"OrangeDim" "178 82 22 120"<br />
"LightOrange" "188 112 0 128"<br />
"GoalOrange" "255 133 0"<br />
"TFOrange" "145 73 59 255"<br />
<br />
"White" "235 235 235 255"<br />
"Red" "192 28 0 140"<br />
"RedSolid" "192 28 0 255"</code></div></div>
<br />
If you’re still confused check out <a href="http://huds.tf/guides/hud_cross_img/hudxhair_color.jpg" target="_blank">this image</a>. <br />
<br />
<br />
<span style="font-weight: bold;">TextAlignment</span><br />
This parameter has two sets of accepted values: left-right values and up-down values. First off, here are the left-right values: ‘East’, which represents alignment to the right, ‘West’, which represents alignment to the left, and ‘Center’, which is self explanatory. Now, for the up or down: "North" for up, "South for down. Another, simpler way to explain is that this property uses the cardinal directions for values, as well as "Left" and "Right". To enter more than one alignment you must use the cardinal directions with the vertical alignment first, for example "North-West" for top left alignment. Basically, think of the text as being inside of a box. The box is what the control creates, more accurately what the control actually is, and you define the wide and tall values for it. Center would make the text aligned to the center of the box. West would put it on the left side of the box. East would put it on the right side of the box. For controls which contain dynamic text such as your health and ammo, changing the alignment is very useful. <br />
<br />
<img src="http://huds.tf/guides/hud_cross_img/image06.png" border="0" alt="[Image: image06.png]" /><br />
<br />
As you can see in the images on the right, if you align the ammo in clip to the West (like the top two images) then it can clash with the ammo in reserve if the amount of ammo loaded changes, for example the medic has 40 needles loaded at once while the soldier has 4 rockets. You can see the problem. Aligning the ammo in clip to the east (like the bottom two) fixes the problem, now it can’t ever clip. <br />
<br />
<span style="font-size: medium;"><span style="text-decoration: underline;">Image:</span></span><br />
<br />
<span style="font-weight: bold;">Alpha</span><br />
This is the equivalent of the fourth value in fgcolor, if you remember that. If not, it’s essentially a numerical value for transparency, 0 being so transparent that it’s invisible and 255 being so 100% visible, not transparent at all. <br />
<br />
<span style="font-weight: bold;">Image</span><br />
This tells the game where the file that is going to be loaded is. You simply put the file directory here and the game will look there for a .vmt file named appropriately and will then load the .vtf referenced by that .vmt. <br />
<br />
<span style="font-weight: bold;">ScaleImage</span><br />
As far as I can tell this is either broken or doesn’t do anything, I’ve never seen any difference when I enabled it or disabled it. <a href="https://code.google.com/p/flamehud/downloads/detail?name=FlameHUD.pdf" target="_blank">Flame’s old hud guide</a> concurs and <a href="http://doodlesstuff.com/?tutorial=tf2hud" target="_blank">Doodle’s Hud Guide</a> doesn’t mention it.<br />
<br />
<span style="font-size: xx-large;"><span style="font-weight: bold;">4. Creating your own Crosshairs</span></span><br />
<br />
First of all you need to decide if the crosshair you want to create is an image or a text crosshair. <br />
<br />
This is a distinct advantage of image crosshairs, it’s significantly easier to create your own. All you need to do is open up Photoshop, or, if you don’t have it, <a href="http://www.gimp.org/" target="_blank">GIMP</a> is a great free alternative which I personally use and would highly recommend. Then simply create your crosshair or open up an image of one from another game and save it as a .png or a .jpg. <br />
<br />
Here are some useful tips for using GIMP to create a crosshair if you don't have experience with the application.<ul>
<li>First, go to file&gt;new to create a new file. You are going to want your dimensions to be a power of 2 by another power of 2.<br />
<img src="http://i.imgur.com/a3uTtQt.png" border="0" alt="[Image: a3uTtQt.png]" /><br />
</li>
<li>I usually use 1024 by 1024 or 512 by 512, a square file is easier to center regardless of crosshair shape so I'd advise making it square.<br />
</li>
<li>Before you hit "OK" go to the arrow near "Advanced Options", click it, then go to "Fill With" and select "Transparency" from the drop-down menu.<br />
</li>
<li>Now you have your canvas on which to create your crosshair.<br />
</li>
<li>The very basics are this: create a selection and fill it with a color. To this end, some useful tools are the selection tools, rectangle, ellipse, free select, etc. Here are some tips and tricks to using these tools.<br />
</li>
<li>First off, whenever you are using a tool it's a good idea to have the "Tool Options" window open. If you don't see it go up to Windows&gt;Dockable Dialogs&gt;Tool Options. This is extremely useful.<br />
</li>
<li>For making a circle be uniform/perfect you can simply set aspect ratio to be 1:1 or change the dimensions manually in the same (Tool Options) window. Obviously the same can be used to mess with a rectangular selection/make it square.<br />
</li>
<li>If you are copying and pasting/editing a pre-existing crosshair an extremely useful tool is the "Select By Color" tool. It selects all pixels in the image of the color that you click on. <br />
</li>
<li>For any of these selection tools it's useful to be able to subtract or add to it easily, so take note of the buttons at the top of the "Tool Options" window: they change the mode of selection you are currently in, from making a new selection to adding/subtracting/intersecting with the current one. For example, to make a ring you make a circle then change the mode to subtract from selection and put a smaller circle inside. There are an abundance of GIMP tutorials on the subject, and a video does it much better than I can. Another example is that maybe selecting by color didn't get everything you hoped it would. Change to "Add to Selection" and you can easily add different shades of the same color which you want to include that weren't picked up.<br />
</li>
<li>Another useful trick for selecting by color is that if there is an image and you want to effectively get rid of a inform background you can select the background then hit Edit&gt;Clear to send it to transparent or Select&gt;Invert to invert the selection, effectively selecting every pixel in the image that is NOT the color you selected. The invert selection button is immensely useful in multiple other ways as well.<br />
</li>
<li>One more useful tool is "Align" to align your selection or layer to the center of the image for the easiest time making a multiple layered image look neat. For example, to make the backgrounds to the health cross I used in my hud <a href="http://teamfortress.tv/thread/8247/show-your-hud-modifications/?page=95#2845" target="_blank">here</a>:<br />
<a href="http://imgur.com/a/d05Th" target="_blank">Photo Album</a> for what it looks like.<br />
<br />
I made a circle selection, went to tool options, changed the size to 300 x 300, went to align tool, center aligned it, then filled the whole thing with blue or black or whichever. Then I made a rectangular selection, made it 75 x 200 ( I think, don't quite remember), centered it with the align tool. Then I went to edit&gt;clear to send that rectangle in the middle to transparent. Then I made another rectangular selection, 200 x 75 this time, and center aligned it, then "cleared" that one as well. The result satisfies my perfectionistic (is this a word?) OCD tendencies. <br />
<br />
</li></ul>
<br />
<br />
<br />
From here you can either use the <a href="https://developer.valvesoftware.com/wiki/Photoshop_VTF_Plugin" target="_blank">VTF photoshop plugin</a> or the <a href="https://developer.valvesoftware.com/wiki/GIMP" target="_blank">GIMP VTF plugin</a> to export to a .vtf file. If you prefer, there is also <a href="https://developer.valvesoftware.com/wiki/VTFEdit" target="_blank">VTFedit</a>. VTFedit is what I'm going to be using in my example and works with any image from either Photoshop or GIMP so if you want me to walk you through it I suggest you get that. <br />
<br />
Your next challenge is successfully changing the settings so that your crosshair doesn't look like shit in game. The method of changing your image to a .vtf that I'm familiar with is VTFedit, so that's what I'm going to be using in my examples. I'm fairly sure both plugins are similar to VTFedit when it comes to settings but I'm not certain.<br />
<br />
As a side note, all of what I'm saying below about VTFedit is applicable to all custom materials, not crosshairs. <br />
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">VTFedit Settings:</span></span><br />
<ul>
<li>Hit File&gt;Import<br />
</li>
<li>Navigate to the image you created and hit import.<br />
</li>
<li>In the "import settings" window you are going to want to change tabs to "General" if you aren't already there and use the following settings:<br />
</li></ul>
<br />
<span style="text-decoration: underline;">Import Settings:<br />
</span><br />
<span style="font-weight: bold;">Normal Format:</span> DXT5<br />
<span style="font-weight: bold;">Alpha Format:</span> DXT5<br />
<span style="font-weight: bold;">Texture Type:</span> shouldn't really matter for most, use "Environment Map" just in case.<br />
<br />
Resizing is interesting. VTF files need to have specific dimensions. They need to be a power of 2 by a power of 2. Remember above, when I said to create the new file in GIMP to have a power of 2 by a power of 2? 1024 x 1024 or 512 x 512? This was why. The ideal scenario is that you did as I suggested, in which case your crosshair will not be distorted at all. <br />
<span style="font-weight: bold;">Resize:</span> un-tick<br />
<span style="font-weight: bold;">Resize Filter:</span> n/a<br />
<span style="font-weight: bold;">Sharpen Filter:</span> n/a<br />
<br />
<br />
If you used someone else's image, or for whatever reason the dimensions are wrong/not a power of 2 by another power of 2, then you will want to use these settings below.<br />
<span style="font-weight: bold;">Resize:</span> Nearest power of 2<br />
<span style="font-weight: bold;">Resize Filter:</span> Box<br />
<span style="font-weight: bold;">Sharpen Filter:</span> None<br />
<br />
<span style="font-weight: bold;">Clamp:</span> un-tick<br />
<span style="font-weight: bold;">Mipmaps:</span> un-tick<br />
<span style="font-weight: bold;">Normal Maps:</span> un-tick<br />
<br />
To confirm, it should look like this:<br />
<img src="http://i.imgur.com/bqGDq3T.png" border="0" alt="[Image: bqGDq3T.png]" /><br />
<br />
Now you are done with Import Settings and can hit "OK". The next thing you need to do is to make sure the correct flags are checked under "Image" in the tab to the left. You want the following to be checked (some of them might already be done):<br />
<br />
<span style="text-decoration: underline;">Flag Settings:</span><br />
<br />
<span style="font-weight: bold;">point-sample</span><br />
<span style="font-weight: bold;">SRGB</span><br />
<span style="font-weight: bold;">Clamp-s</span><br />
<span style="font-weight: bold;">Clamp-t</span><br />
<span style="font-weight: bold;">no mipmaps</span><br />
<span style="font-weight: bold;">no level of detail</span><br />
<span style="font-weight: bold;">8-bit alpha</span><br />
<br />
Then click on "save as" and name it whatever you wish. The .vtf will eventually need to be placed in  <span style="font-weight: bold;">custom/*any folder name*/materials/vgui/replay/thumbnails</span> (this is because for whatever reason that file directory is not checked by sv_pure so it will work on any server, more info <a href="http://ozfortress.com/showthread.php?t=58545" target="_blank">here</a>), so you can save it there now if you wish. Now you're done with the .vtf! <br />
<br />
Your next task is to create a .vmt file to accompany your .vtf. I The .vmt is just a text document that lets the game know how to use the .vtf. It is the vmt file that the game actually looks at, not the .vtf.  personally don't use VTFedit's function to create your own .vmt as I do it by hand but you certainly can do so if you wish. It is under Tools&gt;Create VMT File. If you use it you simply select your saved .vtf as the base texture. If you wish to do it by hand, simply make a new text document and paste this in:<br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"UnlitGeneric"<br />
{<br />
"&#36;translucent" 1<br />
"&#36;basetexture" "vgui&#92;replay&#92;thumbnails&#92;*your file name*"<br />
"&#36;yertexcolor" 1<br />
"&#36;no_fullbright" 1<br />
"&#36;ignorez" 1<br />
}</code></div></div>
<br />
For more advanced users: there are many interesting things that can be done with vmts, such as making everything beneath it transparent, or making it spin or change color when you are moving. More info on that can be found <a href="https://developer.valvesoftware.com/wiki/List_Of_Material_Proxies" target="_blank">here</a>. To note: I couldn't personally get the proxy "PlayerDamageTime" to work at all, which is disappointing because if it had worked one could create a material in their hud that would change color or become visible only when the player had crit-heals. I personally was going to make an outline for the health cross, or a bar under the health, although something near the crosshair would be cool too. JarateKing, who knows much more about material proxies than I do, likewise failed, so that particular proxy might not work in TF2, unfortunately.<br />
<br />
Here is an example vmt where the crosshair would rotate, pulse blue, and flash green when you are moving:<br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"UnlitGeneric"<br />
{<br />
"&#36;translucent" "1"<br />
"&#36;basetexture" "vgui&#92;replay&#92;thumbnails&#92;crosshair_kent_010"<br />
<br />
"&#36;angle" "0.0"<br />
"&#36;translate" "[0.0 0.0]"<br />
"&#36;center" "[0.5 0.5]"<br />
<br />
"&#36;color" "[0.0 0.0 0.0]"<br />
"&#36;speed" "0"<br />
<br />
"&#36;vertexcolor" "1"<br />
"&#36;no_fullbright" "1"<br />
"&#36;vertexalpha" "1"<br />
"&#36;ignorez" "1"<br />
<br />
"Proxies"<br />
{<br />
// Rotates the crosshair<br />
"LinearRamp"<br />
{<br />
"rate" "600" // Adjust this, higher spins faster<br />
"initialValue" "0.0"<br />
"resultVar" "&#36;angle"<br />
}<br />
"TextureTransform"<br />
{<br />
"translateVar" "&#36;translate"<br />
"rotateVar" "&#36;angle"<br />
"centerVar" "&#36;center"<br />
"resultVar" "&#36;basetexturetransform"<br />
}<br />
<br />
// Makes the crosshair pulse blue<br />
"Sine"<br />
{<br />
"sinemin" "0.3"<br />
"minemax" "0.5"<br />
"sineperiod" "1"<br />
"resultVar" "&#36;color[2]"<br />
}<br />
<br />
// Makes the crosshair light up green when the player is moving<br />
"PlayerSpeed"<br />
{<br />
"resultVar" "&#36;speed"<br />
}<br />
"Clamp"<br />
{<br />
"min" "0.5"<br />
"max" "1.0"<br />
"srcVar1" "&#36;speed"<br />
"resultVar" "&#36;color[1]"<br />
}<br />
<br />
// Enable animation in the crosshair, set framerate<br />
//"AnimatedTexture"<br />
//{<br />
// "animatedtexturevar" "&#36;basetexture"<br />
// "animatedtextureframenumvar" "&#36;frame"<br />
// "animatedtextureframerate" "30"<br />
//}<br />
}<br />
<br />
}</code></div></div>
<br />
<img src="http://i.imgur.com/HvJEh5j.gif" border="0" alt="[Image: HvJEh5j.gif]" /><br />
<br />
More info on this specific crosshair found in the <a href="https://www.youtube.com/watch?v=KPYGwAij9JY&amp;spfreload=10" target="_blank">youtube video</a>.<br />
<br />
Another example:<br />
<br />
<img src="http://i.imgur.com/pCaBNNc.gif" border="0" alt="[Image: pCaBNNc.gif]" /><br />
<br />
More info on this specific vmt including a download link can be found <a href="http://www.reddit.com/r/truetf2/comments/26op93/more_intricate_crosshairs_colourchanging_flashing/" target="_blank">here</a>.<br />
<br />
<br />
Here is an example .vmt where it would mask everything beneath it and make it transparent, which can be used to make anything in your hud partially transparent, even your viewmodels. <br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"Refract"<br />
{<br />
"%keywords" "tf"<br />
"&#36;refractamount" "0.0"<br />
"&#36;refracttint" "{255 255 255}"<br />
"&#36;refractblur" "0.0"<br />
<br />
"&#36;scale" "[1 1]"<br />
"&#36;normalmap" "vgui/replay/thumbnails/REFRACTnormal"<br />
}</code></div></div>
<br />
<img src="http://i.imgur.com/sIXXx9S.png" border="0" alt="[Image: sIXXx9S.png]" /><br />
<br />
<a href="http://teamfortress.tv/thread/21756/prism-hud--clean-tf2" target="_blank">Here</a> is more information on transparent viewmodels with this method. <br />
<br />
<br />
The path to create your own text crosshair is one I confess I personally have never done. I do, however, understand the basic concept. What you will need to do is to create a vector image of the crosshair that you want to use, the application to use for that is probably Adobe Illustrator, a free application I have used is <a href="http://www.inkscape.org/en/" target="_blank">Inkscape</a>, which is compatible with GIMP. I wouldn’t highly recommend Inkscape but you can easily Google alternatives yourself. Then get your hands on a font editor, <a href="http://fontforge.org/" target="_blank">FontForge</a> probably being the best, although there are many other alternatives. Import your vector image into your custom font and save it as a .ttf or .otf and voíla. Google will need to be your friend on this one as I cannot help you much, sorry.<br />
<br />
<span style="font-size: xx-large;"><span style="font-weight: bold;">5. Toggling</span></span><br />
<br />
Toggling your hud crosshair means turning it on or off at will. Essentially, you could implement it into a crosshair switcher, such as<a href="https://code.google.com/p/broesels-crosshair-switcher/" target="_blank"> Broesel’s</a> or the one made by <a href="http://clugu.com/tf2mate/" target="_blank">TF2mate’s config generator</a>. Or you could only enable it for certain classes. The possibilities are only limited by the fact that there are only two ways to make a hud crosshair visible/invisible at will, however, there is another method to turn one on or off by class. <br />
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">Minmode</span></span><br />
<br />
This is the “traditional” method to toggle a hud crosshair on or off because it’s very easy to modify your hud if you already have a hud crosshair to implement this. All that is necessary is to change the parameters of visible_minmode and enabled_minmode to 0 on one crosshair and 1 on the other and to change the parameters of visible and enabled to 1 on one crosshair and 0 on the other. It will look like this: <br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"TextExample"<br />
{<br />
"controlName" "CExLabel"<br />
"fieldName" "TextExample"<br />
"visible" "1"<br />
"enabled" "1"<br />
"visible_minmode" "1"<br />
"enabled_minmode" "1"<br />
"xpos" "c0"<br />
"ypos" "c0"<br />
"zpos" "0"<br />
"wide" "100"<br />
"tall" "100"<br />
<br />
"font" "fogCrosshair"<br />
"labelText" "+"<br />
"fgcolor" "White"<br />
"textAlignment" "center"<br />
}<br />
"ImageExample"<br />
{<br />
"controlName" "CTFImagePanel"<br />
"fieldName" "ImageExample"<br />
"visible" "1"<br />
"enabled" "1"<br />
"visible_minmode" "1"<br />
"enabled_minmode" "1"<br />
"xpos" "c0"<br />
"ypos" "c0"<br />
"zpos" "0"<br />
"wide" "100"<br />
"tall" "100"<br />
<br />
"alpha" "255"<br />
"image" "replay/thumbnails/*your file name*"<br />
"scaleimage" "1"<br />
}</code></div></div>
<br />
In this example, ImageExample, the image crosshair, would only be visible when minmode is on, or, when cl_hud_minmode is set to 1. On the other hand, TextExample, the text crosshair, would only be visible when minmode is off, or, when cl_hud_minmode is set to 0. In this way you can use a console command to turn your crosshair on or off as you please. However, this is the method that I referenced earlier as being by class, meaning I recommend putting the command in your class configs to turn the crosshair on or off based on which class you are. The reason is that toggling this command causes in-game stutter, which makes sense: after all, the command is essentially telling the game to reload every single hud file, similar to a hud_reloadscheme. <br />
<br />
<span style="text-decoration: underline;"><span style="font-size: large;">Achievement Tracker</span></span><br />
<br />
This method is a bit more complicated, but the concept remains simple. Basically, TF2 has the capacity to display information about your progress on an in-game achievement of your choice, and you can toggle this feature on or off with a console command. To use this with a crosshair all you need to do is edit the file that controls the panel that tracks an achievement. Essentially you remove the parts concerning achievements and replace them with your crosshair, which is now contained in a control which is toggleable with the console command hud_achievement_tracker (1 for on, 0 for off, as is standard). <br />
<br />
You’re going to want to replace the contents of your <span style="font-weight: bold;">HudAchievementTrackerItem.res</span> with this:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"Resource/UI/HudAchievementTrackerItem.res"<br />
{<br />
<br />
//crosshair start<br />
<br />
<br />
//crosshair end<br />
<br />
  "HudAchievementTrackerItem"<br />
  {<br />
      "ControlName"   "EditablePanel"<br />
      "fieldName"     "HudAchievementTrackerItem"<br />
      "xpos"          "0"<br />
      "ypos"          "0"<br />
      "zpos"          "999"<br />
      "wide"          "f0"<br />
      "tall"          "480"<br />
      "visible"       "0"<br />
      "enabled"       "1"<br />
<br />
      "PaintBackgroundType"   "2"<br />
  }<br />
     <br />
  "AchievementName"<br />
  {<br />
      "ControlName"   "Label"<br />
      "fieldName"     "AchievementName"<br />
      "labeltext"     ""<br />
      "xpos"          "9999"<br />
      "ypos"          "9999"<br />
      "wide"          "170"<br />
      "tall"          "10"<br />
      "zpos"          "4"<br />
      "textinsetx"    "5"<br />
      "font"          "AchievementTracker_Name"<br />
      "textAlignment"     "north-west"<br />
  }<br />
     <br />
  "AchievementNameGlow"<br />
  {<br />
      "ControlName"   "Label"<br />
      "fieldName"     "AchievementNameGlow"<br />
      "labeltext"     ""<br />
      "xpos"          "9999"<br />
      "ypos"          "9999"<br />
      "wide"          "170"<br />
      "tall"          "10"<br />
      "zpos"          "4"<br />
      "fgcolor_override"      "235 226 202 255"<br />
      "font"          "AchievementTracker_NameGlow"<br />
      "textinsetx"    "5"<br />
      "textAlignment"     "north-west"<br />
  }<br />
     <br />
  "AchievementDesc"<br />
  {<br />
      "ControlName"   "Label"<br />
      "fieldName"     "AchievementDesc"<br />
      "labeltext"     ""<br />
      "xpos"          "9999"<br />
      "ypos"          "9999"<br />
      "wide"          "120"<br />
      "tall"          "18"<br />
      "zpos"          "4"<br />
      "textinsetx"    "5"<br />
      "fgcolor_override"      "235 226 202 255"<br />
      "font"          "AchievementTracker_Desc"<br />
      "wrap"          "1"<br />
      "TextAlignment"     "north-west"<br />
  }<br />
     <br />
  "ProgressBarBG"<br />
  {<br />
      "ControlName"       "ImagePanel"<br />
      "fieldName"     "ProgressBarBG"<br />
      "xpos"      "9999"<br />
      "ypos"      "9999"<br />
      "wide"      "100"<br />
      "tall"      "6"<br />
      "fillcolor"  "250 234 201 51"<br />
      "zpos"          "4"<br />
      "visible"       "1"<br />
      "enabled"       "1"<br />
  }<br />
     <br />
  "ProgressBar" // current completed<br />
  {<br />
      "ControlName"   "ImagePanel"<br />
      "fieldName"     "ProgressBar"<br />
      "xpos"          "9999"<br />
      "ypos"          "9999"<br />
      "wide"          "0"<br />
      "tall"          "6"<br />
      "fillcolor"     "251 235 202 255"<br />
      "zpos"          "5"<br />
      "visible"       "1"<br />
      "enabled"       "1"<br />
  }<br />
}</code></div></div>
and ctrl+f for and replace the information about HudAchievementTracker in <span style="font-weight: bold;">HudLayout.res</span> with this:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"HudAchievementTracker"<br />
      {<br />
              "ControlName"   "EditablePanel"<br />
              "fieldName"             "HudAchievementTracker"<br />
              "xpos"                  "0"<br />
              "NormalY"               "0"<br />
              "EngineerY"             "0"<br />
              "wide"                  "f0"<br />
              "tall"                  "480"<br />
              "visible"               "1"<br />
              "enabled"               "1"    <br />
              "zpos"                  "1"<br />
      }</code></div></div>
Then simply paste the control for your crosshair into the section in the first link entitled “crosshair”. More information can be found at <a href="http://teamfortress.tv/thread/4134/?page=1" target="_blank">this link</a>. <br />
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">3D PlayerModel Background</span></span><br />
<br />
This method is fairly simple but a lot of users have troubles with it for whatever reason. Basically: Valve added a feature to use, instead of the default class image, a dynamic and three dimensional player model complete with accurate weapons, hats, and running/swimming postures. Due to performance issues, Valve added a console command to toggle the feature on or off. By replacing the background that accompanies, by default, this feature, with our own image crosshair, we can then toggle the crosshair on or off at will. I would recommend only using this method if you can live without the 3D model. If you do wish to use it, all that is necessary to do this is to replace the following control in <span style="font-weight: bold;">HudPlayerClass.res</span> with your crosshair. <br />
<br />
<img src="http://huds.tf/guides/hud_cross_img/image04.png" border="0" alt="[Image: image04.png]" /><br />
<br />
So, using my previous example image crosshair, it would look something like this: <br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>"classmodelpanelBG"<br />
{<br />
"ControlName" "CTFImagePanel"<br />
"fieldName" "classmodelpanelBG"<br />
"visible" "0"<br />
"enabled" "1"<br />
"visible_minmode" "0"<br />
"enabled_minmode" "1"<br />
"xpos" "c0"<br />
"ypos" "c0"<br />
"zpos" "0"<br />
"wide" "100"<br />
"tall" "100"<br />
"alpha" "255"<br />
"image" "replay/thumbnails/*your file name*"<br />
"scaleimage" "1"<br />
}</code></div></div>
<br />
The only thing to be careful about is that you have visible set to 0 and enabled set to 1. As explained under their respective sections under Basic Parameters, this ensures that you can actually turn it off or on. If enabled and visible are both set to 0 your crosshair will never show up because it will never be loaded by the hud. If both are set to 1 then the crosshair will always be visible and you won’t be able to truly ‘toggle’ it on and off. <br />
<br />
Another thing you may want to do is scroll down a little bit in <span style="font-weight: bold;">HudPlayerClass.res</span> and change xpos to "9999" under "classmodelpanel". This will move the actual 3d model off the screen so it doesn't turn on and off too. This way only your crosshair will be visible. <br />
<br />
<span style="font-size: large;"><span style="text-decoration: underline;">In-Game Image Crosshair</span></span><br />
<br />
It turns out, by using the console, that you can actually reference one of your images that you’ve saved to the directory <span style="font-weight: bold;">“materials/vgui/replay/thumbnails”</span> as an in-game crosshair. That is, it's possible to "trick" the game into using your image instead of a default crosshair. This allows you to modify it using the “options” window (or console commands) to control color and size. You cannot, however, switch between your new custom crosshair and other default ones. <br />
<br />
All you need to do to use this method if you so desire is to make sure the .vtf and the accompanying .vmt are correctly created and placed and then type in console the following:<br />
<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>cl_crosshair_file ../replay/thumbnails/*crosshair name*</code></div></div>
<br />
Make sure to replace <span style="font-weight: bold;">*crosshair name*</span> with the name of your file and double-check that you have set up the .vmt file correctly. The only other weird restriction is that, although it will work on servers with sv_pure set to 2, you need to load it up in a server with sv_pure set to 0 first. All this means is that some servers restrict the usage of custom textures and so you should click the “create new server” button on your main menu right after you start TF2 then copy paste the command in console after you’ve joined the map. As soon as you’ve done this you’re good to join any server and your crosshair should remain, at which point you can change the color with console commands or a crosshair switching script. You could make it bigger and red for your melee and smaller and red for your primary, for example, or have it change to a different color for every direction that you move <a href="http://forums.steampowered.com/forums/showthread.php?t=1591457" target="_blank">like stabby does</a>.<br />
<br />
<br />
<span style="font-weight: bold;"><span style="font-size: xx-large;">6. Postnotes</span></span><br />
<br />
The explanation images were all created using the font “Novecento” as an example, this is the font that Garm3n introduced in his Rex, 8MD, VIP, and KTC HUDS and their variants. It was popularized in yAhud, created by whayay, and it is a free font so I feel no qualms about using it in these diagrams. <br />
<br />
The HUD I was using to create the explanation images is the default HUD, so if things look different and you’re confused by some aspect of your custom HUD or its code, that could be the cause. <br />
<br />
If you’re still confused about anything feel free to <a href="http://teamfortress.tv/user/komorebi" target="_blank">send me a private message through teamfortress.tv</a> or <a href="http://steamcommunity.com/id/not_a_custom_url" target="_blank">add me on steam</a>, I’d be happy to help walk you through anything else.<br />
<br />
<span style="font-size: xx-large;"><span style="font-weight: bold;">Credits</span></span><br />
<br />
This guide was written by <a href="http://steamcommunity.com/id/not_a_custom_url" target="_blank">Komorebi</a>, whose initial middle-school alias was Han Brolo. He also gives thanks to CollyCat, Magma, Pwny_, omnibombulator, Lange, Mana and Doodle for various help with the guide. <br />
<br />
As far as usage of this guide goes: use it however/whenever you wish! Please feel to post corrections if I've made a mistake or suggest improvements that could be made.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Keeping your HUD Animations up to date using hudanimations_manifest.txt]]></title>
			<link>https://huds.tf/site/s-Keeping-your-HUD-Animations-up-to-date-using-hudanimations-manifest-txt</link>
			<pubDate>Wed, 11 Mar 2020 19:03:52 +0000</pubDate>
			<guid isPermaLink="false">https://huds.tf/site/s-Keeping-your-HUD-Animations-up-to-date-using-hudanimations-manifest-txt</guid>
			<description><![CDATA[Having a hudanimations_tf.txt file in your custom HUD has proved somewhat of a hassle in TF2 updates. It's the primary cause of most in-game crashes and bugs. Even an update that doesn't change much in the way of actual HUD elements could cause a problem if the hudanimations_tf file is outdated.<br />
<br />
But there's a way to avoid this headache, so allow me to guide you through it.<br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">hudanimations_manifest.txt, the magic file</span></span><br />
When you extract the HUD from TF2 using GCFScape or this <a href="https://github.com/SteamDatabase/GameTracking-TF2/tree/master/tf/tf2_misc_dir" target="_blank">handy GitHub</a>, you'll find the file <span style="font-weight: bold;">hudanimations_manifest.txt</span> inside the <span style="font-weight: bold;">scripts</span> folder. This is the primary file we'll be using to get around avoiding HUD animation related crashes and having to update your hudanimations_tf file constantly to new updates.<br />
<br />
The file is extremely simple, including no more than 6 lines of code:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>hudanimations_manifest<br />
{<br />
<br />
"file" "scripts/hudanimations.txt"<br />
"file" "scripts/hudanimations_tf.txt"<br />
}</code></div></div>
hudanimations_manifest is the file that tells the game what files to read animations from. So, it reads from the default Source hudanimations.txt file and the TF2 hudanimations_tf.txt file. But we can add more files to this list. Our own files.<br />
<br />
First up, go to your <span style="font-weight: bold;">scripts</span> folder, open the <span style="font-weight: bold;">hudanimations_tf.txt</span> file and <span style="font-weight: bold;">copy any animations that have been modified in your HUD</span>.<br />
Commonly modified animations are <span style="font-weight: bold;">Health Animations</span> <span style="font-size: small;">(HudHealthBonusPulse,HudHealthBonusPulseLoop, HudHealthBonusPulseStop, HudHealthDyingPulse, HudHealthDyingPulseLoop, HudHealthDyingPulseStop)</span>, <span style="font-weight: bold;">Ammo Animations</span> <span style="font-size: small;">(HudLowAmmoPulse, HudLowAmmoPulseLoop, HudLowAmmoPulseStop)</span> and <span style="font-weight: bold;">Medic Animations</span> <span style="font-size: small;">(HudMedicCharged, HudMedicChargedLoop, HudMedicChargedStop)</span>.<br />
Paste the modified code into a new text file. For the sake of example, save the file as <span style="font-weight: bold;">hudanimations_custom.txt</span> to the scripts folder. Now you have a custom animation file, brilliant!<br />
<br />
Next step is to delete (or rename if you're unsure of if you've missed some modified code) the custom hudanimations_tf.txt file. We won't need this anymore, the game can read the original file from the .vpk the game includes from now on. This means the game will keep the animations up to date every time the game has an update that changes them!<br />
<br />
Now it's time to go back to the <span style="font-weight: bold;">hudanimations_manifest.txt</span> file. We need to add the <span style="font-weight: bold;">hudanimations_custom.txt</span> file we created to it, so the game can read the animations from it.<br />
<br />
Quite simply, just add an extra line <span style="font-weight: bold;">above</span> the hudanimations_tf.txt file value (as exampled below), then save the file:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>hudanimations_manifest<br />
{<br />
<br />
"file" "scripts/hudanimations.txt"<br />
"file" "scripts/hudanimations_custom.txt"<br />
"file" "scripts/hudanimations_tf.txt"<br />
}</code></div></div>
You can add as many different animation files as you like, so you can keep your Health, Ammo and Medic animations in separate files if you like it tidy that way! However, you must make sure that when you add extra files to hudanimations_manifest.txt, that you place them above hudanimations_tf, else they will not overwrite the default TF2 animation file.<br />
<br />
If you've followed everything correctly, your custom animations should work, and the game will keep all future animations updated for you. Of course, if your custom animations get updated, you will have to manually update them, however, common animation modifications such as Health and Ammo are rarely updated.<br />
<br />
If you're still stuck, comment below and I'll try to help you out as best I can.]]></description>
			<content:encoded><![CDATA[Having a hudanimations_tf.txt file in your custom HUD has proved somewhat of a hassle in TF2 updates. It's the primary cause of most in-game crashes and bugs. Even an update that doesn't change much in the way of actual HUD elements could cause a problem if the hudanimations_tf file is outdated.<br />
<br />
But there's a way to avoid this headache, so allow me to guide you through it.<br />
<br />
<span style="font-size: large;"><span style="font-weight: bold;">hudanimations_manifest.txt, the magic file</span></span><br />
When you extract the HUD from TF2 using GCFScape or this <a href="https://github.com/SteamDatabase/GameTracking-TF2/tree/master/tf/tf2_misc_dir" target="_blank">handy GitHub</a>, you'll find the file <span style="font-weight: bold;">hudanimations_manifest.txt</span> inside the <span style="font-weight: bold;">scripts</span> folder. This is the primary file we'll be using to get around avoiding HUD animation related crashes and having to update your hudanimations_tf file constantly to new updates.<br />
<br />
The file is extremely simple, including no more than 6 lines of code:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>hudanimations_manifest<br />
{<br />
<br />
"file" "scripts/hudanimations.txt"<br />
"file" "scripts/hudanimations_tf.txt"<br />
}</code></div></div>
hudanimations_manifest is the file that tells the game what files to read animations from. So, it reads from the default Source hudanimations.txt file and the TF2 hudanimations_tf.txt file. But we can add more files to this list. Our own files.<br />
<br />
First up, go to your <span style="font-weight: bold;">scripts</span> folder, open the <span style="font-weight: bold;">hudanimations_tf.txt</span> file and <span style="font-weight: bold;">copy any animations that have been modified in your HUD</span>.<br />
Commonly modified animations are <span style="font-weight: bold;">Health Animations</span> <span style="font-size: small;">(HudHealthBonusPulse,HudHealthBonusPulseLoop, HudHealthBonusPulseStop, HudHealthDyingPulse, HudHealthDyingPulseLoop, HudHealthDyingPulseStop)</span>, <span style="font-weight: bold;">Ammo Animations</span> <span style="font-size: small;">(HudLowAmmoPulse, HudLowAmmoPulseLoop, HudLowAmmoPulseStop)</span> and <span style="font-weight: bold;">Medic Animations</span> <span style="font-size: small;">(HudMedicCharged, HudMedicChargedLoop, HudMedicChargedStop)</span>.<br />
Paste the modified code into a new text file. For the sake of example, save the file as <span style="font-weight: bold;">hudanimations_custom.txt</span> to the scripts folder. Now you have a custom animation file, brilliant!<br />
<br />
Next step is to delete (or rename if you're unsure of if you've missed some modified code) the custom hudanimations_tf.txt file. We won't need this anymore, the game can read the original file from the .vpk the game includes from now on. This means the game will keep the animations up to date every time the game has an update that changes them!<br />
<br />
Now it's time to go back to the <span style="font-weight: bold;">hudanimations_manifest.txt</span> file. We need to add the <span style="font-weight: bold;">hudanimations_custom.txt</span> file we created to it, so the game can read the animations from it.<br />
<br />
Quite simply, just add an extra line <span style="font-weight: bold;">above</span> the hudanimations_tf.txt file value (as exampled below), then save the file:<br />
<div class="codeblock">
<div class="title">Code:<br />
</div><div class="body" dir="ltr"><code>hudanimations_manifest<br />
{<br />
<br />
"file" "scripts/hudanimations.txt"<br />
"file" "scripts/hudanimations_custom.txt"<br />
"file" "scripts/hudanimations_tf.txt"<br />
}</code></div></div>
You can add as many different animation files as you like, so you can keep your Health, Ammo and Medic animations in separate files if you like it tidy that way! However, you must make sure that when you add extra files to hudanimations_manifest.txt, that you place them above hudanimations_tf, else they will not overwrite the default TF2 animation file.<br />
<br />
If you've followed everything correctly, your custom animations should work, and the game will keep all future animations updated for you. Of course, if your custom animations get updated, you will have to manually update them, however, common animation modifications such as Health and Ammo are rarely updated.<br />
<br />
If you're still stuck, comment below and I'll try to help you out as best I can.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[HUD Installation for Linux]]></title>
			<link>https://huds.tf/site/s-HUD-Installation-for-Linux</link>
			<pubDate>Wed, 11 Mar 2020 18:57:40 +0000</pubDate>
			<guid isPermaLink="false">https://huds.tf/site/s-HUD-Installation-for-Linux</guid>
			<description><![CDATA[<span style="font-size: large;"><span style="font-weight: bold;">This is the Installation Guide for the Linux Operating System</span></span><br />
<a href="http://huds.tf/forum/showthread.php?tid=1987" target="_blank">Click here for the Windows Installation Guide</a><br />
<a href="http://huds.tf/forum/showthread.php?tid=1988" target="_blank">Click here for the Mac Installation Guide</a><br />
<br />
<span style="font-size: x-large;"><span style="font-weight: bold;">HUD Installation for Linux</span></span><br />
<br />
Before doing anything else, locate your Team Fortress 2 folder. It should be found in ~/.local/share/Steam/SteamApps/common/Team Fortress 2/tf. Here, you should create a folder named custom. This is where our HUD files will be stored.<br />
<br />
The next thing to do is to download the HUD you wish to use. Be sure that the HUD you are using is Linux Compatible. Usually, they will come downloaded in a compressed .zip, .rar, .7z or another compression file. You'll then need to extract the file, which is explained here.<br />
<br />
Locate the newly extracted folder. Inside, depending on how the HUD has been packaged, you will always find 2 folders named "resource" and "scripts". Some HUDs may come with other folders, such as "materials". Copy the folder that "resource" and "scripts" are located inside (not the resource and scripts folders themselves) and paste it into the tf/custom folder.<br />
<br />
Make sure all folders are named in lowercase, as UPPERCASE letters are unsupported by Linux.<br />
<br />
Now, load up your game. If done correctly, you'll be greeted by a nice, new HUD!<br />
<br />
<span style="font-weight: bold;">This guide could still do with some images! Contact <a href="http://huds.tf/forum/member.php?action=profile&amp;uid=1" target="_blank">omnibombulator</a> if you wish to supply them.</span><br />
<br />
<span style="font-weight: bold;">Still having issues?</span> Feel free to post any problems you are having below.]]></description>
			<content:encoded><![CDATA[<span style="font-size: large;"><span style="font-weight: bold;">This is the Installation Guide for the Linux Operating System</span></span><br />
<a href="http://huds.tf/forum/showthread.php?tid=1987" target="_blank">Click here for the Windows Installation Guide</a><br />
<a href="http://huds.tf/forum/showthread.php?tid=1988" target="_blank">Click here for the Mac Installation Guide</a><br />
<br />
<span style="font-size: x-large;"><span style="font-weight: bold;">HUD Installation for Linux</span></span><br />
<br />
Before doing anything else, locate your Team Fortress 2 folder. It should be found in ~/.local/share/Steam/SteamApps/common/Team Fortress 2/tf. Here, you should create a folder named custom. This is where our HUD files will be stored.<br />
<br />
The next thing to do is to download the HUD you wish to use. Be sure that the HUD you are using is Linux Compatible. Usually, they will come downloaded in a compressed .zip, .rar, .7z or another compression file. You'll then need to extract the file, which is explained here.<br />
<br />
Locate the newly extracted folder. Inside, depending on how the HUD has been packaged, you will always find 2 folders named "resource" and "scripts". Some HUDs may come with other folders, such as "materials". Copy the folder that "resource" and "scripts" are located inside (not the resource and scripts folders themselves) and paste it into the tf/custom folder.<br />
<br />
Make sure all folders are named in lowercase, as UPPERCASE letters are unsupported by Linux.<br />
<br />
Now, load up your game. If done correctly, you'll be greeted by a nice, new HUD!<br />
<br />
<span style="font-weight: bold;">This guide could still do with some images! Contact <a href="http://huds.tf/forum/member.php?action=profile&amp;uid=1" target="_blank">omnibombulator</a> if you wish to supply them.</span><br />
<br />
<span style="font-weight: bold;">Still having issues?</span> Feel free to post any problems you are having below.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[HUD Installation for Mac]]></title>
			<link>https://huds.tf/site/s-HUD-Installation-for-Mac</link>
			<pubDate>Wed, 11 Mar 2020 18:56:40 +0000</pubDate>
			<guid isPermaLink="false">https://huds.tf/site/s-HUD-Installation-for-Mac</guid>
			<description><![CDATA[<span style="font-size: large;"><span style="font-weight: bold;">This is the Installation Guide for the Mac Operating System</span></span><br />
<a href="https://huds.tf/forum/showthread.php?tid=1987" target="_blank">Click here for the Windows Installation Guide</a><br />
<a href="https://huds.tf/forum/showthread.php?tid=1989" target="_blank">Click here for the Linux Installation Guide</a><br />
<br />
<span style="font-size: x-large;"><span style="font-weight: bold;">HUD Installation for Mac</span></span><br />
<br />
Before doing anything else, locate your Team Fortress 2 folder. Using the "Go" option on the command bar of the Mac OS, insert<br />
~/Library/Application Support/Steam/SteamApps/common/Team Fortress 2/tf into the field and press Go. Here, you should create a folder named custom. This is where our HUD files will be stored.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/mac_install_1.png" border="0" alt="[Image: mac_install_1.png]" /><br />
<br />
The next thing to do is to download the HUD you wish to use. Be sure that the HUD you are using is Mac Compatible. Usually, they will come downloaded in a compressed .zip, .rar, .7z or another compression file. You'll then need to extract the file by double-clicking the compressed file. If the Mac OS refuses to do so, download a suitable extraction program.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/mac_install_2.png" border="0" alt="[Image: mac_install_2.png]" /><br />
<br />
Locate the newly extracted folder. Inside, depending on how the HUD has been packaged, you will always find 2 folders named "Resource" and "Scripts". Some HUDs may come with other folders, such as "Materials". Copy the folder that "Resource" and "Scripts" are located inside (not the Resource and Scripts folders themselves) and paste it into the tf/custom folder.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/mac_install_3.png" border="0" alt="[Image: mac_install_3.png]" /><br />
<br />
Now, load up your game. If done correctly, you'll be greeted by a nice, new HUD!<br />
<br />
<span style="font-weight: bold;">Credit goes to <a href="http://steamcommunity.com/id/hlfr4lyfe" target="_blank">Hellfire</a> for submitting the images for this guide.</span><br />
<br />
<span style="font-weight: bold;">Still having issues?</span> Feel free to post any problems you are having below.]]></description>
			<content:encoded><![CDATA[<span style="font-size: large;"><span style="font-weight: bold;">This is the Installation Guide for the Mac Operating System</span></span><br />
<a href="https://huds.tf/forum/showthread.php?tid=1987" target="_blank">Click here for the Windows Installation Guide</a><br />
<a href="https://huds.tf/forum/showthread.php?tid=1989" target="_blank">Click here for the Linux Installation Guide</a><br />
<br />
<span style="font-size: x-large;"><span style="font-weight: bold;">HUD Installation for Mac</span></span><br />
<br />
Before doing anything else, locate your Team Fortress 2 folder. Using the "Go" option on the command bar of the Mac OS, insert<br />
~/Library/Application Support/Steam/SteamApps/common/Team Fortress 2/tf into the field and press Go. Here, you should create a folder named custom. This is where our HUD files will be stored.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/mac_install_1.png" border="0" alt="[Image: mac_install_1.png]" /><br />
<br />
The next thing to do is to download the HUD you wish to use. Be sure that the HUD you are using is Mac Compatible. Usually, they will come downloaded in a compressed .zip, .rar, .7z or another compression file. You'll then need to extract the file by double-clicking the compressed file. If the Mac OS refuses to do so, download a suitable extraction program.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/mac_install_2.png" border="0" alt="[Image: mac_install_2.png]" /><br />
<br />
Locate the newly extracted folder. Inside, depending on how the HUD has been packaged, you will always find 2 folders named "Resource" and "Scripts". Some HUDs may come with other folders, such as "Materials". Copy the folder that "Resource" and "Scripts" are located inside (not the Resource and Scripts folders themselves) and paste it into the tf/custom folder.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/mac_install_3.png" border="0" alt="[Image: mac_install_3.png]" /><br />
<br />
Now, load up your game. If done correctly, you'll be greeted by a nice, new HUD!<br />
<br />
<span style="font-weight: bold;">Credit goes to <a href="http://steamcommunity.com/id/hlfr4lyfe" target="_blank">Hellfire</a> for submitting the images for this guide.</span><br />
<br />
<span style="font-weight: bold;">Still having issues?</span> Feel free to post any problems you are having below.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[HUD Installation for Windows]]></title>
			<link>https://huds.tf/site/s-HUD-Installation-for-Windows</link>
			<pubDate>Wed, 11 Mar 2020 18:54:32 +0000</pubDate>
			<guid isPermaLink="false">https://huds.tf/site/s-HUD-Installation-for-Windows</guid>
			<description><![CDATA[<span style="font-size: large;"><span style="font-weight: bold;">This is the Installation Guide for the Windows Operating System</span></span><br />
<a href="http://huds.tf/forum/showthread.php?tid=1988" target="_blank">Click here for the Mac Installation Guide</a><br />
<a href="http://huds.tf/forum/showthread.php?tid=1989" target="_blank">Click here for the Linux Installation Guide</a><br />
<br />
<span style="font-size: x-large;"><span style="font-weight: bold;">HUD Installation for Windows</span></span><br />
<br />
Before doing anything else, locate your Team Fortress 2 folder. You will usually find it in Program Files (x86)\Steam\SteamApps\common\Team Fortress 2\tf. Here, you should create a folder named custom. This is where our HUD files will be stored.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_7.png" border="0" alt="[Image: win_install_7.png]" /><br />
<br />
The next thing to do is to download the HUD you wish to use. Usually, they will come downloaded in a compressed .zip, .rar, .7z or another compression file.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_4.png" border="0" alt="[Image: win_install_4.png]" /><br />
<br />
Then, extract the contents of the compressed folder using WinRAR or another similar program.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_5.png" border="0" alt="[Image: win_install_5.png]" /><br />
<br />
Choose your desired destination for the folder to extract to, and then locate the decompressed folder. Inside, depending on how the HUD has been packaged, you will always find 2 folders named "Resource" and "Scripts". Some HUDs may come with other folders, such as "Materials".<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_6.png" border="0" alt="[Image: win_install_6.png]" /><br />
<br />
Now, copy the <span style="font-weight: bold;">folder</span> that "Resource" and "Scripts" are located <span style="font-weight: bold;">inside</span> (<span style="font-weight: bold;">not</span> the Resource and Scripts folders themselves) and paste it into the tf/custom folder. If done correctly, your directory should look similar to this:<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_1.png" border="0" alt="[Image: win_install_1.png]" /><br />
<br />
Make sure not to paste the HUD folder into the tf/ directory, like this<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_2.png" border="0" alt="[Image: win_install_2.png]" /><br />
<br />
Or else the HUD will not load<br />
In the same vein, make sure you don't copy too many folders into the tf/custom directory, like this<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_3.png" border="0" alt="[Image: win_install_3.png]" /><br />
<br />
As again, the HUD will not load.<br />
Now, load up your game. If done correctly, you'll be greeted by a nice, new HUD!<br />
<br />
<span style="font-weight: bold;">Still having issues?</span> Feel free to post any problems you are having below.]]></description>
			<content:encoded><![CDATA[<span style="font-size: large;"><span style="font-weight: bold;">This is the Installation Guide for the Windows Operating System</span></span><br />
<a href="http://huds.tf/forum/showthread.php?tid=1988" target="_blank">Click here for the Mac Installation Guide</a><br />
<a href="http://huds.tf/forum/showthread.php?tid=1989" target="_blank">Click here for the Linux Installation Guide</a><br />
<br />
<span style="font-size: x-large;"><span style="font-weight: bold;">HUD Installation for Windows</span></span><br />
<br />
Before doing anything else, locate your Team Fortress 2 folder. You will usually find it in Program Files (x86)\Steam\SteamApps\common\Team Fortress 2\tf. Here, you should create a folder named custom. This is where our HUD files will be stored.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_7.png" border="0" alt="[Image: win_install_7.png]" /><br />
<br />
The next thing to do is to download the HUD you wish to use. Usually, they will come downloaded in a compressed .zip, .rar, .7z or another compression file.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_4.png" border="0" alt="[Image: win_install_4.png]" /><br />
<br />
Then, extract the contents of the compressed folder using WinRAR or another similar program.<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_5.png" border="0" alt="[Image: win_install_5.png]" /><br />
<br />
Choose your desired destination for the folder to extract to, and then locate the decompressed folder. Inside, depending on how the HUD has been packaged, you will always find 2 folders named "Resource" and "Scripts". Some HUDs may come with other folders, such as "Materials".<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_6.png" border="0" alt="[Image: win_install_6.png]" /><br />
<br />
Now, copy the <span style="font-weight: bold;">folder</span> that "Resource" and "Scripts" are located <span style="font-weight: bold;">inside</span> (<span style="font-weight: bold;">not</span> the Resource and Scripts folders themselves) and paste it into the tf/custom folder. If done correctly, your directory should look similar to this:<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_1.png" border="0" alt="[Image: win_install_1.png]" /><br />
<br />
Make sure not to paste the HUD folder into the tf/ directory, like this<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_2.png" border="0" alt="[Image: win_install_2.png]" /><br />
<br />
Or else the HUD will not load<br />
In the same vein, make sure you don't copy too many folders into the tf/custom directory, like this<br />
<br />
<img src="http://huds.tf/guides/hud_install_img/win_install_3.png" border="0" alt="[Image: win_install_3.png]" /><br />
<br />
As again, the HUD will not load.<br />
Now, load up your game. If done correctly, you'll be greeted by a nice, new HUD!<br />
<br />
<span style="font-weight: bold;">Still having issues?</span> Feel free to post any problems you are having below.]]></content:encoded>
		</item>
	</channel>
</rss>