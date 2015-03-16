<?php

namespace MyProject;

function output() {
    # Output HTML page
    echo 'HTML!<br/>';
}

output();

namespace RSSLibrary;

function output(){
    # Output RSS feed
    echo 'RSS! <br/>';
}

output();

\MyProject\output();