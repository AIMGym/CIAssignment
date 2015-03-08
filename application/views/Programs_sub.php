<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
?>

<!-- load lightbox scripts -->
<link href="/assets/css/lightbox.css" rel="stylesheet"/>
<script src="/assets/js/jquery-1.11.0.min.js"></script>
<script src="/assets/js/lightbox.min.js"></script>

<div class="row">
    
    <!-- main content -->
    <div id="start" class="span12">
        <h2>{name}</h2>
        <p>{description}<br/><br/>
            <strong>Telephone:</strong> {contact}<br/>
            <strong>Address:</strong> {location}</br>
            <strong>Price:</strong> {price}<br/>
        </p>
        <table>
            <tr>
                <td>
                    <!-- set of images -->
                    <a href="{image}" data-lightbox="programs" data-title="{name}">
                        <img class="img-polaroid" src="{image}" width="200"/></a>
                </td>
            </tr>
        </table>
    </div>
    <!-- end main content-->

</div>