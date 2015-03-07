<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
?>
<div class="row">
    
    <!-- main content -->
    <div id="home-main" class="span12">
        <table class="table-condensed">
            <tr style="border-top: thick solid grey">
                <td rowspan="2">
                    <img src="{image_url}" class ="img-rounded" width="240px" height="160px"/>
                </td>
                <td>
                    <strong>{name}</strong>
                </td>
                 <td>
                    &nbsp;&nbsp;&nbsp;<strong>Price: </strong> {price}
                </td>
            </tr>
            <tr>
                <td>
                    {caption} 
                </td>
                <td>
                        &nbsp;&nbsp;&nbsp;<a class="btn btn-small" href="/program/getOne/{_id}">See Details</a><br/>&nbsp;
                </td>
            </tr>
    </div>
    <!-- end main content-->
</div>