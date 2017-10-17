<?
require_once __DIR__ . '/config.php';

$dbConn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName) or die('DB ERROR');
// DB 연결을 UTF-8 모드로 설정
mysqli_query($dbConn, "SET NAMES utf8;");

require_once __DIR__ . '/lib.php';
require_once __DIR__ . '/model/autoload.php';
require_once __DIR__ . '/business.php';
