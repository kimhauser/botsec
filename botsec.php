<?php
/**
 * @package    Web-Security
 *
 * @copyright  (C) 1991 - 2024 DaVe Inc. <https://kimhauser.ch>
 * @license    MIT License <https://opensource.org/license/mit>
 */

$redirectLocation = "https://www.google.com/";
$agent = "NOTSET";

$agentsToDeny = [
    'feed',
    'Unknown robot identified by bot\*',
    'AhrefsBot',
    'DotBot',
    'empty user agent string',
    'MJ12bot',
    'Barkrowler',
    'bingbot',
    //'Googlebot',
    'nbot',
    //'Mediapartners-Google',
    'Go-http-client',
    'SemrushBot',
    //'Applebot',
    //'Firefox version 10 and lower - various robots',
    'facebookexternalhit',
    'robot',
    'Yandex ( catchall )',
    //'Googlebot-Image',
    'link',
    'CCBot',
    'crawl',
    'YandexBot',
    'zoominfobot',
    'Baidu ( catchall )',
    'Curl',
    'Apache-HttpClient',
    'SeznamBot',
    'spider',
    'YisouSpider',
    'YandexImages',
    '360Spider',
    'Baiduspider',
    'Mail.RU Bot',
    'MojeekBot',
    'Dalvik',
    '2345Explorer',
    'SurdotlyBot',
    'trendiction',
    'survey',
    'CFNetwork',
    'Unknown robot identified by \*bot',
    'yacybot',
    'Screaming Frog SEO Spider',
    'Wget',
    'Seobility',
    'libwww-perl',
    'Validator.nu',
    'BLEXBot',
    'yak-linkfluence',
    'blog',
];


if(isset($_SERVER['HTTP_USER_AGENT'])){
   $agent = $_SERVER['HTTP_USER_AGENT'];
}

// print($agent);

if(in_array($agent, $agentsToDeny)){ //preg_match('/^Googlebot/i',$agent)){
   http_response_code(301);
   header("HTTP/1.1 302 Moved Temporary");
   header("Location: $redirectLocation");
   exit;
}

/*

SOME MORE BOTS AND SPIDERS ....


ABCdatos BotLink
Acme.Spider
Ahoy! The Homepage Finder
Alkaline
Anthill
Walhello appie
Arachnophilia
Arale
Araneo
AraybOt
ArchitextSpider
Aretha
ARIADNE
arks
AskJeeves
ASpider (Associative Spider)
ATN Worldwide
Atomz.com Search Robot
AURESYS
BackRub
Bay Spider
Big Brother
Bjaaland
BlackWidow
Die Blinde Kuh
Bloodhound
Borg-Bot
BoxSeaBot
bright.net caching robot
BSpider
CACTVS Chemistry Spider
Calif
Cassandra
Digimarc Marcspider/CGI
Checkbot
ChristCrawler.com
churl
cIeNcIaFiCcIoN.nEt
CMC/0.01
Collective
Combine System
Conceptbot
ConfuzzledBot
CoolBot
Web Core / Roots
XYLEME Robot
Internet Cruiser Robot
Cusco
CyberSpyder Link Test
CydralSpider
Desert Realm Spider
DeWeb(c) Katalog/Index
DienstSpider
Digger
Digital Integrity Robot
Direct Hit Grabber
DNAbot
DownLoad Express
DragonBot
DWCP (Dridus' Web Cataloging Project)
e-collector
EbiNess
EIT Link Verifier Robot
ELFINBOT
Emacs-w3 Search Engine
ananzi
esculapio
Esther
Evliya Celebi
FastCrawler
Fluid Dynamics Search Engine robot
Felix IDE
Wild Ferret Web Hopper #1, #2, #3
FetchRover
fido
HÃ¤mÃ¤hÃ¤kki
KIT-Fireball
Fish search
Fouineur
Robot Francoroute
Freecrawl
FunnelWeb
gammaSpider, FocusedCrawler
gazz
GCreep
GetBot
GetURL
Golem
Googlebot
Grapnel/0.01 Experiment
Griffon
Gromit
Northern Light Gulliver
Gulper Bot
HamBot
Harvest
havIndex
HI (HTML Index) Search
Hometown Spider Pro
ht://Dig
HTMLgobble
Hyper-Decontextualizer
iajaBot
IBM_Planetwide
Popular Iconoclast
Ingrid
Imagelock
IncyWincy
Informant
InfoSeek Robot 1.0
Infoseek Sidewinder
InfoSpiders
Inspector Web
IntelliAgent
I, Robot
Iron33
Israeli-search
JavaBee
JBot Java Web Robot
JCrawler
Jeeves
JoBo Java Web Robot
Jobot
JoeBot
The Jubii Indexing Robot
JumpStation
image.kapsi.net
Katipo
KDD-Explorer
Kilroy
KO_Yappo_Robot
LabelGrabber
larbin
legs
Link Validator
LinkScan
LinkWalker
Lockon
logo.gif Crawler
Lycos
Mac WWWWorm
Magpie
marvin/infoseek
Mattie
MediaFox
MerzScope
NEC-MeshExplorer
MindCrawler
mnoGoSearch search engine software
moget
MOMspider
Monster
Motor
MSNBot
Muncher
Muninn
Muscat Ferret
Mwd.Search
Internet Shinchakubin
NDSpider
Nederland.zoek
NetCarta WebMap Engine
NetMechanic
NetScoop
newscan-online
NHSE Web Forager
Nomad
The NorthStar Robot
nzexplorer
ObjectsSearch
Occam
HKU WWW Octopus
OntoSpider
Openfind data gatherer
Orb Search
Pack Rat
PageBoy
ParaSite
Patric
pegasus
The Peregrinator
PerlCrawler 1.0
Phantom
PhpDig
PiltdownMan
Pimptrain.com's robot
Pioneer
html_analyzer
Portal Juice Spider
PGP Key Agent
PlumtreeWebAccessor
Poppi
PortalB Spider
psbot
GetterroboPlus Puu
The Python Robot
Raven Search
RBSE Spider
Resume Robot
RoadHouse Crawling System
RixBot
Road Runner: The ImageScape Robot
Robbie the Robot
ComputingSite Robi/1.0
RoboCrawl Spider
RoboFox
Robozilla
Roverbot
RuLeS
SafetyNet Robot
Scooter
Sleek
Search.Aus-AU.COM
SearchProcess
Senrigan
SG-Scout
ShagSeeker
Shai'Hulud
Sift
Simmany Robot Ver1.0
Site Valet
Open Text Index Robot
SiteTech-Rover
Skymob.com
SLCrawler
Inktomi Slurp
Smart Spider
Snooper
Solbot
Spanner
Speedy Spider
spider_monkey
SpiderBot
Spiderline Crawler
SpiderMan
SpiderView(tm)
Spry Wizard Robot
Site Searcher
Suke
suntek search engine
Sven
Sygol
TACH Black Widow
Tarantula
tarspider
Tcl W3 Robot
TechBOT
Templeton
TeomaTechnologies
TITAN
TitIn
The TkWWW Robot
TLSpider
UCSD Crawl
UdmSearch
UptimeBot
URL Check
URL Spider Pro
Valkyrie
Verticrawl
Victoria
vision-search
void-bot
Voyager
VWbot
The NWI Robot
W3M2
WallPaper (alias crawlpaper)
the World Wide Web Wanderer
w@pSpider by wap4.com
WebBandit Web Spider
WebCatcher
WebCopy
webfetcher
The Webfoot Robot
Webinator
weblayers
WebLinker
WebMirror
The Web Moose
WebQuest
Digimarc MarcSpider
WebReaper
webs
Websnarf
WebSpider
WebVac
webwalk
WebWalker
WebWatch
Wget
whatUseek Winona
WhoWhere Robot
Wired Digital
Weblog Monitor
w3mir
WebStolperer
The Web Wombat
The World Wide Web Worm
WWWC Ver 0.2.5
WebZinger
XGET
*/
?>