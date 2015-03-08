<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');

?>

<!-- load lightbox scripts -->
    <link href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/lightbox.css" rel="stylesheet" type="text/css"/>
    <script src="../../assets/js/lightbox.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    

<div class="row">
    
    <!-- main content -->
    <div id="start" class="span12">
        <h2>{name}</h2>
            {description}<br/>
            <strong>Telephone:</strong> {contact}<br/>
            <strong>Address:</strong> {address}</br>
        </p>
        <table>
            <tr>
                <td>
                    <!-- set of images -->
                    <a href="{image1}" data-lightbox="membership" data-title="{name}">
                        <img class="img-polaroid" src="{image1}" width="200"/></a>
                </td>
                <td>
                    <!-- set of images -->
                    <a href="{image2}" data-lightbox="membership" data-title="{name}">
                        <img class="img-polaroid" src="{image2}" width="200"/></a>
                </td>
                <td>
                    <!-- set of images -->
                    <a href="{image3}" data-lightbox="membership" data-title="{name}">
                        <img class="img-polaroid" src="{image3}" width="200"/></a>
                </td>
                <td>
                    <!-- set of images -->
                    <a href="{image4}" data-lightbox="membership" data-title="{name}">
                        <img class="img-polaroid" src="{image4}" width="200"/></a>
                </td>
            </tr>
        </table>
    </div>
    <!-- end main content-->

</div>
    
    



