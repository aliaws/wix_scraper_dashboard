<?php
/**
 * This method is used for get .env file data
 */
function getEnvData() {
    $envFile = __DIR__ . '/.env';
    if (file_exists($envFile)) {
        return parse_ini_file($envFile);
    } else {
        return "";
    }
}
/**
 * Constant
 */
$env_data = getEnvData();
define("DB_NAME", $env_data['DB_NAME']);
define("DB_USER", $env_data['DB_USER']);
define("DB_PASS", $env_data['DB_PASS']);
define("DB_HOST", $env_data['DB_HOST']);
define("DASH_PASS", $env_data['DASH_PASS']);
/**
 * This method is used for create DB connection
 */
function db_connection(){
    $_host = DB_HOST;
    $_username = DB_USER;
    $_password = DB_PASS;
    $_database = DB_NAME;
    $connection =  new mysqli($_host, $_username, $_password,$_database);
    if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        return $connection;
    }
}
/**
 * This method is used for get all result order by descending
 */

function get_all_scraper(){
    $sql = "SELECT * FROM scrape_requests ORDER BY id DESC";
    $result = db_connection()->query($sql);
    return $result;
}

/**
 * This method is used for count the result dynmically 
 */

function count_result($param_first = null,$param_second = null){
    $sql = "SELECT COUNT(*) as count FROM scrape_requests ";
    $current_date = date('Y-m-d');
    if($param_first == 'today' AND $param_second == null){
        $sql_query = $sql."WHERE DATE(created_at)  = '$current_date'";
    }elseif(($param_first == "processing" || $param_first == "processed") && $param_second == null){
        $sql_query = $sql."WHERE  status  = '$param_first'";

    }elseif(($param_first == "processing" || $param_first == "processed") && $param_second == 'today'){
        $sql_query = $sql."WHERE status  = '$param_first' AND  DATE(created_at)  = '$current_date'";
    }elseif($param_first == "all"){
        $sql_query = $sql;
    }
    else{
        return die("Please Enter column Corect value");
    }
    $result = db_connection()->query($sql_query);
    return $result->fetch_assoc();
}



