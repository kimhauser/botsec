# botsec - Deny unwanted search-bots
 A PHP script for denying and redirecting unwanted search bots which may be causing a huge traffic on your website. You may use, copy, amend and redistribute this PHP script in all your projects whether it's personal or commercial. The script is licensed under [MIT license](https://opensource.org/license/mit){:target="_blank" rel="noopener"} and freely available for everyone.

This is an example usage of the "botsec.php" script. It'll redirect you to https://google.com if the user-agent of the request is in the array to check.

## Source on GitHub
- [botsec on GitHub](https://github.com/kimhauser/botsec)

## Testing the script
You can test the botsec.php script with your own User-Agents like so:

1. Copy the files to a directory of your choice
2. Amend the User-Agents array $agentsToDeny in <?= $botsecScript ?> with you own
3. Goto the directory containing the files in a terminal
4. Execute "php -S 127.0.0.1:8888" in the terminal
5. Open the address "127.0.0.1:8888" with your Webbrowser of choice
6. Now you should see the success message
7. With Google Chrome you can amend the User-Agent for the Request like so
	1. Open the developer console of Google Chrome with CMD+Option+J
	2. In the developer console click the three dots in the upper right corner
	3. Click on "More Tools" > "Network Conditions"
	4. In the bottom panel you should see the User-Agent and you can chnge it
