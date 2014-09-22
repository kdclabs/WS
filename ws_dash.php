<?php
/*
Plugin Name: WS Dash
Plugin Author: Vachan Kudmule (_KDC-Labs)
Description: White Shadows - Analytical Intelligence : A client dashboard for White Shadow clients.
Version: 1.0
*/ 

// changing the login page URL
function ws_login_logo() {
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url('https://ws.ai/img/wp/ws-login-logo.png?ver=20140922');
            background-image: none, url('https://ws.ai/img/wp/ws-login-logo.svg?ver=20140922');
        }
    </style>
}
add_action( 'login_enqueue_scripts', 'ws_login_logo' );

// changing the login page URL
function ws_login_logo_url() {
    return 'https://ws.ai';
}
add_filter( 'login_headerurl', 'ws_login_logo_url' );

// changing the login page URL hover text
function ws_login_logo_url_title() {
    return 'webWorks by: WhiteShadows - WS.ai';
}
add_filter( 'login_headertitle', 'ws_login_logo_url_title' );

// add login message
function ws_login_message() {
    return 'For assistance please call WhiteShadows helpline<br/><strong>1800 200 2442</strong> <em>{ext# 14}</em>';
}
add_filter( 'login_message', 'ws_login_message' );
