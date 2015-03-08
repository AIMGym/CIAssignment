<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
?>
<div class="row">
    
    <!-- main content -->
    <div id="start" class="span12">
        <h2>{name}</h2>
        <p>{description}<br/><br/>
            <strong>Price:</strong> {price}<br/>
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