<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* **************************
	BUTTONS
************************** */

.elgg-button {
	display: inline-block;
	outline: none;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
    width: auto;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	cursor: pointer;
    
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

    -webkit-box-shadow: inset 0 1px 0 #ffffff;
    -moz-box-shadow: inset 0 1px 0 #ffffff;
    box-shadow: inset 0 1px 0 #ffffff;
}
.elgg-button:hover {
	text-decoration: none;
}
.elgg-button:active {
	position: relative;
}

/* **************************
	SUBMIT, ACTION
************************** */
.elgg-button-submit,
.elgg-button-action {
	color: #222;
    border: 1px solid #D1D7DB;
    
    background-color: #fbfbfb;
    background-image: -moz-linear-gradient(top, #ffffff, #EBEFF1);
    background-image: -ms-linear-gradient(top, #ffffff, #EBEFF1);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#EBEFF1));
    background-image: -webkit-linear-gradient(top, #ffffff, #EBEFF1);
    background-image: -o-linear-gradient(top, #ffffff, #EBEFF1);
    background-image: linear-gradient(top, #ffffff, #EBEFF1);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#EBEFF1', GradientType=0);
}
.elgg-button-submit:hover,
.elgg-button-action:hover {
    background: -moz-linear-gradient(100% 100% 90deg, #FFFFFF, #EEEEEE) repeat scroll 0 0 transparent;
	box-shadow: inset 1px 0 0 #FFFFFF;
}
.elgg-button-submit:active,
.elgg-button-action:active {
    background: -moz-linear-gradient(100% 100% 90deg, #FFFFFF, #EEEEEE) repeat scroll 0 0 transparent;
	box-shadow: inset 1px 0 0 #FFFFFF;
}
.elgg-button-submit.elgg-state-disabled {
	cursor: default;
	color: #CCC;
    background: -moz-linear-gradient(100% 100% 90deg, #FFFFFF, #EEEEEE) repeat scroll 0 0 transparent;
	box-shadow: inset 1px 0 0 #FFFFFF;
}
/* **************************
	CANCEL
************************** */
.elgg-button-cancel {
	color: #FFF;
    border: 1px solid #ad6704;
    
    background-color: #faa732;
    background-image: -moz-linear-gradient(top, #fbb450, #f89406);
    background-image: -ms-linear-gradient(top, #fbb450, #f89406);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
    background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
    background-image: -o-linear-gradient(top, #fbb450, #f89406);
    background-image: linear-gradient(top, #fbb450, #f89406);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fbb450', endColorstr='#f89406', GradientType=0);
    
    -webkit-box-shadow: inset 0 1px 0 #FBCC89;
    -moz-box-shadow: inset 0 1px 0 #FBCC89;
    box-shadow: inset 0 1px 0 #FBCC89;
}
.elgg-button-cancel:hover {
	color: #FFF;
    background: -moz-linear-gradient(100% 100% 90deg, #fbb450, #f89406) repeat scroll 0 0 transparent;    
	box-shadow: inset 1px 0 0 #FBCC89;
}
/* **************************
	DELETE
************************** */
.elgg-button-delete {
	color: #FFF;
    border: 1px solid #802420;
    
    background-color: #da4f49;
    background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
    background-image: -ms-linear-gradient(top, #ee5f5b, #bd362f);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
    background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
    background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
    background-image: linear-gradient(top, #ee5f5b, #bd362f);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ee5f5b', endColorstr='#bd362f', GradientType=0);
    
    -webkit-box-shadow: inset 0 1px 0 #F38F8B;
    -moz-box-shadow: inset 0 1px 0 #F38F8B;
    box-shadow: inset 0 1px 0 #F38F8B;
}
.elgg-button-delete:hover {
    background: -moz-linear-gradient(100% 100% 90deg, #ee5f5b, #bd362f) repeat scroll 0 0 transparent;    
	box-shadow: inset 1px 0 0 #F38F8B;
}

.elgg-button-dropdown {
	text-decoration:none;
	position:relative;
    padding: 5px 0 8px;
	margin-left:0;
	color: #999;
    	
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	
	-webkit-box-shadow: 0 0 0;
	-moz-box-shadow: 0 0 0;
	box-shadow: 0 0 0;
}

.elgg-button-dropdown:after {
	content: " \25BC ";
	font-size:smaller;
}

.elgg-button-dropdown:hover {
	color: #FFF;
	text-decoration:none;
}

.elgg-button-dropdown.elgg-state-active {
	background: none;
	outline: none;
	color: #FFF;
    	
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
