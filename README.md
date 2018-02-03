# CryptXchange
Basic crypto currency exchange feature. Out of the box script that let's your website visitors trade altcoins (crypto currencies) online directly from your own website. Altcoin trade API script, made possible by connecting to **Changelly's API**.

Want to let your website visitors trade (or swap coins) directly from your crypto, altcoin or financial-related website (and even earn a fee commission from each trade made by your visitors) but without having to take care of all the transactions by yourself? Then this Changelly white label solution might just be the thing your looking for.

The **CryptXchange script** offers an out of the box (basic, simple and 100% working) solution. Lightweight, small and easy to include in your current website styling (layout) or css, and is written in PHP. All it requires is an webhosting account with a SQL database.

![Crypto Exchange PHP script](http://cointools.nl/uploads/cryptXchange1.jpg)

### LIVE DEMO: ###
http://cointools.nl/cryptXchange-demo/

This script will be used as the base code for one of my future projects, I've decided to share it on Github because the official docs from Changelly don't offer that much information or coding examples (especially for webmasters without any experience using PHP this might be a bit too hard and this little script might help them in the right direction because it features a fully working code).

Feel free to use the code for your own websites or web projects. If you like the script and you are including it into your own website(s), please provide a link to my website cointools.nl for a little bit exposure. Thanks in advance.

### How to install the crypto currency exchange (direct coin swap) PHP script?

- **Step one**: Download all script files from the Github pages.

- **Step two**: On your hosting account, create a new sqli database. Write down the database username, database password and the new database name so we can copy and paste it later.

- **Step three**: Browse to the script folder you've just downloaded in step one. Open the file: db.php (for example using Windows standard software Notepad).
Copy and pase the newly created database username, password and database name inside db.php.

- **Step four**: Open the file config.php.
In this file you can set the trading pair(s). In the standard demo it's set to trade Litecoin to Ethereum. 

But this can be changed to any pairing possibility using the following altcoins for example:

Monero

Bytecoin

Litecoin

Bitcoin

Digital Note

QuazarCoin QCN

Dash

Dashcoin

Fantomcoin

Ethereum

Doge

Nubits

Ripple

Next

Aeon

Radium

Maidsafe

Factom

Synereo

Lisk

Ethereum Classic

NEM (XEM)

Expanse

LBRY Credits

Steem

Augur

Zcash

Gulden

Potcoin

Game Credits

Tether USDT

Golem

Waves

Stellar

And many many many more.
For a list of all crypto currencies available in this script please read: https://changelly.com/supported-currencies

- **Step five:** Visit Changelly.com, create your account (or log in) and copy the API codes from your user dashboard.
Paste your personal API codes inside config.php and save the file. Note: Keep your personal API keys private.

- **Step six:** Go back to your web hosting dashboard and upload all script files and subfolders (or use your personal favorite FTP software to upload all the files to your host), but don't upload the folder SQL-import!

- **The final step**: On your hosting account dashboard open PhpMyAdmin, click on your newly created database and click on the IMPORT button. Select the *.SQL file (it's in the folder: SQL-import) and press the upload button.



**That's it!** You can now let your website visitors change (trade) crypto coins directly from your website thanks to the Changelly API service.

**A bonus note**: You can contact the developer team from Changelly to raise the trading fee (linked to your personal API code/account) = more profit for you as the website owner.

This demo script uses (and all third party files are included here directly) Bootstrap, Jquery, [Cryptocoins webfont](https://github.com/allienworks/cryptocoins), and ofcourse the **Changelly API services**.

More info on the Changelly API can be found here: https://changelly.com/developers
