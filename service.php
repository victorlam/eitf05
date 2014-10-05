<?php

foreach (glob("c:/wamp/tmp/sess_*") as $filename) {
@unlink($filename);
}

?>
