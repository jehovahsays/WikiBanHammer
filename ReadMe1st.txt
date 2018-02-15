# WikiBanHammer
Protect Your Mediawiki with a Blackhole for Bad Bots
I decided to create an Mediawiki Extension from a PHP script
that i found on a website at https://perishablepress.com/blackhole-bad-bots/
------------------------------------------------------
If you are better at building this extension please create a branch.
I will slowly add the files and instruction on how i installed this
PHP on to my Mediawiki website.


Warning!
WikiBanHammer can ban you from your own Mediawiki website.
In order to unban yourself you will need to open the
file named blackhole.dat and remove your ip address and save.

How to install & configure mediawiki Extension:WikiBanHammer
---------------------------------------------------------

Step 1.
Download the .zip
unzip WikiBanHammer.zip
rename the unzipped folder named WikiBanHammer-master to WikiBanHammer.
copy and paste WikiBanHammer into your Mediawiki extensions folder.

Step 2.
Use Notepad++ to edit these next few files.
open the folder named blackhole.
open the file named blackhole.php
edit line 39 if you need to allow 
legit bots to index your website.
after you finish doiong that scroll down
to line 66 and edit the contact url or email
just in case a human got banned.
save the file blackhole.php
when your done.

Next open the file named index.php
edit lines 37 & 38 to your
email if you need to recieve alerts 
everytime a bot is banned.

Next scroll down to 
line 203 change the title of the web page 
banned users will see and line 216 & line 238 
to change the contact information just case 
again a human qoute on qoute happen to get banned.
save the file index.php
when your done.

Step 3.
copy the file robots.txt and the
folder named blackhole into your root folder
for example after you copy and paste
you website url should look like this
www.example.com/robots.txt
www.example.com/blackhole/

blackhole.dat must be server-writable log file (serves as the blacklist)

Step 4.
Add the code below to your Localsettings.php

wfLoadExtension( 'WikiBanHammer' );

Step 5.
finally the last step
open your mediawiki folder 
open the folder named skins
open the folder named Vector
open the file named VectorTemplate.php
scroll down to line line 97
add this html code to all your pages

<a rel="nofollow" style="display:none;" href="/blackhole/">
Usually only robot could see this text.
But , if you can see this text.
Do NOT follow this link or you will be banned from the site!</a>



That is it.

Testing the WikiBanHammer
---------------------------------
Test WikiBanHammer by visiting blackhole 
open your browser 
and visit www.yourdomain.com/blackhole/
you should see a you are banned page
navigate to your mediawiki pages and 
you should see your banned on every page.

to unban yourself open the folder named blackhole 
open the file named blackhole.dat look for your ip
delete your ip and save the file and you are unbanned.

To make WikiBanHammer stonger redirect all of your error pages
to the folder /blackhole/

I will make a video for those who need visual verification & confirmation.