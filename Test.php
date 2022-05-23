<?php
/**
* @param {string} $username
* @param {string} $title
* @return {string}
*/
function buildWhereCondition( $username = null, $title = null ) {
    if(is_null($username) || is_null($title)){
        return "true";
    }
    return
        <<<TEXT
username = '$username' AND title > '$title'
OR
username > '$username'
TEXT;
}
echo ("default condition\n");
echo buildWhereCondition();
echo("\n");
echo ("sample data\n");
echo buildWhereCondition("UserB","Carrots")

?>