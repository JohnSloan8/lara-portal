<?php
/**
 * Created by PhpStorm.
 * User: habibih
 * Date: 9/28/2019
 * Time: 09:48 PM
 */
session_start();
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}


define("LaraEnv", "LARA='/home/john/johnsHDD/work/LARA/LARA-source/callector-lara-svn/trunk'");
define("TreeTaggerEnv", "TREETAGGER='/usr/local/TreeTagger'");
define("PythonCmnd", "python3.7");
define("MorfeuszEnv", "MORFEUSZPYTHON='python3.5'");
define("concraft", "/usr/local/concraft-pl/bin/concraft-pl");
define("concraftModel", "models/concraft-pl-model-SGJP-20200818.gz");
define("WelcomeMsg", "Welcome to LARA portal");
define("LogoutMsg", "You have successfully logged out");

define("ContentRelatedPage", "content");
define("ImportRelatedPage", "import");
define("ResourceRelatedPage", "resource");
define("HistoryRelatedPage", "history");
define("HistoryResourceRelatedPage", "hResource");
define("LanguageRelatedPage", "language");
define("FlashcardRelatedPage", "flashcard");

define("SessionIndex", array (
    'UserID' => 'UserID',
    'UserName' => 'UserName'
));

define("LaraDB", array("driver" => 'mysql',
    "host" => '127.0.0.1',
    "user" => 'root',
    "pass" => '',
    "database" => 'LARA-portal'));

define("LaraLDT", array (
    'grant_type' => 'password',
    'username' => 'lara',
    'password' => 'blahblah'
));

define("ROOT", "/opt/lampp/htdocs/lara-portal/");
define("PythonDir","/home/john/johnsHDD/work/LARA/LARA-source/callector-lara-svn/trunk/Code/Python/");

define("LaraContentDir","/export/data/www/LARA-data/");
define("SnContentDir","/export/data/www/callector-community-data/lara-content-files/");
define("WorkingTmpDirectory", LaraContentDir . "WorkingTmpDirectory/");
define("ContentTmpDirectory", LaraContentDir . "ContentTmpDirectory/");
define("ExternalResourceDirectory", LaraContentDir . "ExternalResourceDirectory/");
define("ImportContentsDirectory", LaraContentDir . "ImportContentsDirectory/");

define("CallectorDir","/export/data/www/issco-site/en/research/projects/callector/");
define("DistributedDir", CallectorDir . "LaraResourceContent/");
define("ReadingHistoryDir", CallectorDir . "LaraReadingHistories/");

define("PortalReadingHistoryDir","https://www.issco.unige.ch/en/research/projects/callector/LaraReadingHistories/");

define("WebRoot", "https://www.issco.unige.ch/en/research/projects/callector/");
define("DistributedWebRoot", WebRoot . "LaraResourceContent/");

define("SubDirNames", array("audio" => "audio",
    "corpus" => "corpus",
    "images" => "images",
    "translations" => "translations"));

define("SubDirNamesContentTmp", array("compiled" => "compiled",
    "laraTmpDirectory" => "laraTmpDirectory",
    "resourcesDir" => "resourcesDir",
    "resourcesBackup" => "resourcesBackup"));

define("EmbeddedItemsTypes", array("Image" => "Image",
    "Audio" => "Audio",
    "CSS" => "CSS",
    "Script" => "Script"));

define("WebAddress", "https://lara-portal.unige.ch/");

define("RowPerPage", 15);
