<?php
//------------------------------------------------------------------------------------------------------------------
//Esse arquivo tem a logica para carregar paginas dentro do arquivo layout.php
//--------------------- NÃO MEXER -----------------------------------------------------------------------------------

ob_start();
$request_uri = isset($_SERVER["REQUEST_URI"]) && trim($_SERVER["REQUEST_URI"]) ? trim($_SERVER["REQUEST_URI"]) : "";
$document_root = isset($_SERVER["DOCUMENT_ROOT"]) && trim($_SERVER["DOCUMENT_ROOT"]) ? trim($_SERVER["DOCUMENT_ROOT"]) : "";

if (preg_match("/\s*(.*?)\/*\?|\s*(.+)/i", $request_uri, $match)) {
    $request_uri = trim($match[1]).trim($match[2])."";
}
else {
    $request_uri = "";
}

$request_uri = $request_uri && $request_uri != "/" ? $request_uri : "/index";

if (!preg_match("/\.\w+$/i", $request_uri)) {
    $request_uri .= ".php";
}

$page_file = $document_root.$request_uri;
$page_file = realpath($document_root.$request_uri);
$page_file = $page_file ? $page_file : realpath("{$document_root}/404.php");

ob_end_clean();

define("PAGE_FILE_PHP", $page_file);
require_once "./layout.php";