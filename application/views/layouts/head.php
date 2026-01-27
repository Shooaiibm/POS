<!DOCTYPE html>
<!-- 
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.0.2
Author: Sunnyat Ahmmed
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?Php echo Base_CompanyName; ?>
    </title>
    <meta name="description" content="Marketing Dashboard">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/vendors.bundle.css">
    <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/app.bundle.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo Base_logo; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo Base_logo; ?>">
    <link rel="mask-icon" href="<?php echo Base_logo; ?>" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/datagrid/datatables/datatables.bundle.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/Select/select2.min.css">
    <link rel="shortcut icon" href="<?php echo Base_logo; ?>" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/iziToast.min.css">
    <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/notifications/toastr/toastr.css">
    <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>assets/css/page-login.css">
    <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
<style>
    #footer {
   position:fixed;
   bottom:0;
   width:100%;
   height:30px;   /* Height of the footer */
   background:#6cf;
}
.page-logo {
    height: 4.125rem;
    width: 16.875rem;
    -webkit-box-shadow: 0px 0px 28px 0px rgba(0, 0, 0, 0.13);
    box-shadow: 0px 0px 28px 0px rgba(0, 0, 0, 0.13);
    overflow: hidden;
    text-align: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: flex-start;
    -ms-flex-positive: 0;
    -webkit-box-flex: 0;
    flex-grow: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    min-height: 1px;
    padding: 0px;
}
thead {
        background: linear-gradient(to right, #a8e063, #56ab2f); /* fresh green gradient */
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: bold;
    }

    thead th {
        padding: 12px 10px;
        border-right: 1px solid rgba(255, 255, 255, 0.2);
    }

    thead th:last-child {
        border-right: none;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }
    .panel-hdr {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(to right,rgb(117, 89, 202),rgb(88, 19, 152)); /* professional blue gradient */
        color: white;
        padding: 15px 20px;
        border-radius: 8px 8px 0 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .panel-hdr h2 {
        margin: 0;
        font-size: 1.4rem;
        font-weight: 600;
    }

    .panel-toolbar {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .ml-2 {
        margin-left: 0.5rem;
    }

    .mr-2 {
        margin-right: 0.5rem;
    }
</style>
</head>

<body class="mod-bg-1 " style="background-color:light blue">
    <!-- DOC: script to save and load page settings -->
    <script>
        /**
         *	This script should be placed right after the body tag for fast execution 
         *	Note: the script is written in pure javascript and does not depend on thirdparty library
         **/
        'use strict';

        var classHolder = document.getElementsByTagName("BODY")[0],
            /** 
             * Load from localstorage
             **/
            themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) : {
                themeOptions: "mod-bg-1 nav-function-top"
            },
            themeURL = themeSettings.themeURL || '',
            themeOptions = themeSettings.themeOptions || '';
        /** 
         * Load theme options
         **/
        if (themeSettings.themeOptions) {
            classHolder.className = themeSettings.themeOptions;
            console.log("%c✔ Theme settings loaded", "color: #148f32");
        } else {
            // alert("CAlled");
            console.log("Heads up! Theme settings is empty or does not exist, loading default settings...");
        }
        if (themeSettings.themeURL && !document.getElementById('mytheme')) {
            var cssfile = document.createElement('link');
            cssfile.id = 'mytheme';
            cssfile.rel = 'stylesheet';
            cssfile.href =  themeURL;
            document.getElementsByTagName('head')[0].appendChild(cssfile);
    
        }
        /** 
         * Save to localstorage 
         **/
        var saveSettings = function() {
            themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item) {
                return /^(nav|header|mod|display)-/i.test(item);
            }).join(' ');
            if (document.getElementById('mytheme')) {
                
                themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
                $('#mytheme').attr('href', themeSettings.themeURL );
            };
            localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
        }
        /** 
         * Reset settings
         **/
        var resetSettings = function() {
            localStorage.setItem("themeSettings", "");
        }
    </script>