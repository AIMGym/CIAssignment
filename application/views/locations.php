<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');

?>
<div class="row">
    <!-- main content -->
    <div id="start" class="span12">
        {location}
        <div class="col-md-3">
            <div class="link-block">
                <br/>
                <strong>{name}</strong><br/><br/>
                <img src="{image1}" width="240px" height="160px"/><br/></br>
                <a class="btn btn-small" href="/Location/getOne/{id}">See Details</a><br/>&nbsp;
            </div>
        </div>
        {/location}
    </div>
    <!-- end main content-->
</div>