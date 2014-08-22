<?php

function any_string() {

    return rtrim( base64_encode( md5( microtime() ) ), '=' );

}