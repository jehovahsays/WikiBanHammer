# WikiBanHammer
Protect Your Mediawiki with a Blackhole for Bad Bots<br>
I decided to create an Mediawiki Extension from a PHP script<br>
<<<<<<< HEAD
that i found on a website at https://perishablepress.com/blackhole-bad-bots/<br>
------------------------------------------------------
If you are better at building this extension please create a branch.<br>
I will slowly add the files and instruction on how i installed this<br>
PHP on to my Mediawiki website.<br>


<h2>Warning!</h2>
WikiBanHammer can ban you from your own Mediawiki website.<br>
In order to unban yourself you will need to open the<br>
file named blackhole.dat and remove your ip address and save.<br>

How to instal & configure mediawiki Extension:WikiBanHammer
---------------------------------------------------------

Step 1.<br>
Download the .zip<br>
unzip WikiBanHammer.zip<br>
rename the unzipped folder named WikiBanHammer-master to WikiBanHammer.<br>
copy and paste WikiBanHammer into your Mediawiki extensions folder.<br>

Step 2.<br>
Use Notepad++ to edit these next few files.<br>
open the folder named blackhole.<br>
open the file named blackhole.php<br>
edit line 39 if you need to allow <br>
legit bots to index your website.<br>
after you finish doiong that scroll down<br>
to line 66 and edit the contact url or email<br>
just in case a human got banned.<br>
save the file blackhole.php<br>
when your done.<br>

Next open the file named index.php<br>
edit lines 37 & 38 to your<br>
email if you need to recieve alerts <br>
everytime a bot is banned.<br>

Next scroll down to <br>
line 203 change the title of the web page <br>
banned users will see and line 216 & line 238 <br>
to change the contact information just case <br>
again a human qoute on qoute happen to get banned.<br>
save the file index.php<br>
when your done.<br>

Step 3.<br>
copy the file robots.txt and the<br>
folder named blackhole into your root folder<br>
for example after you copy and paste<br>
you website url should look like this<br>
www.example.com/robots.txt<br>
www.example.com/blackhole/<br>

blackhole.dat must be server-writable log file (serves as the blacklist)<br>

Step 4.<br>
Open you mediawiki installation folder<br>
open the folder named includes<br>
open the file named Webstart.php<br>
scroll down to line 35<br>
and add this code <br>
```
include(realpath(getenv('DOCUMENT_ROOT')) .'/blackhole/blackhole.php');
```
<br>
save the file when your done.<br>

Step 5.<br>
Add the code below to your Localsettings.php<br>
```
wfLoadExtension( 'WikiBanHammer' );
```
<br>

Step 6.<br>
finally the last step<br>
open your mediawiki folder <br>
open the folder named skins<br>
open the folder named Vector<br>
open the file named VectorTemplate.php<br>
scroll down to line line 97<br>
add this html code to all your pages<br>
```
<a rel="nofollow" style="display:none;" href="/blackhole/">
Usually only robot could see this text.
But , if you can see this text.
Do NOT follow this link or you will be banned from the site!</a>
```
<br>

That is it.<br>

Testing the WikiBanHammer
---------------------------------
Test WikiBanHammer by visiting blackhole <br>
open your browser <br>
and visit www.yourdomain.com/blackhole/<br>
you should see a you are banned page<br>
navigate to your mediawiki pages and <br>
you should see your banned on every page.<br>

to unban yourself open the folder named blackhole <br>
open the file named blackhole.dat look for your ip<br>
delete your ip and save the file and you are unbanned.<br>

To make WikiBanHammer stonger redirect all of your error pages<br>
to the folder /blackhole/<br>

I will make a video for those who need visual verification & confirmation.<br>
=======
that i found on a website at https://perishablepress.com/blackhole-bad-bots/
------------------------------------------------------
If you are better at building this extension please create a branch.<br>
I will slowly add the files and instruction on how i installed this<br>
PHP on to my Mediawiki website.
>>>>>>> origin/master
