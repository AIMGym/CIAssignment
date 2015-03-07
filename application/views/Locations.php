<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');

?>
<div class="row">
    
    <!-- main content -->
    <div id="home-main" class="span12">

        <div class="col-md-3">
            <div class="link-block">
                <br/>
                <strong>{name}</strong><br/><br/>
                <img src="{image_url}" width="240px" height="160px"/><br/></br>
                <a class="btn btn-small" href="/locations/getOne/{_id}">See Details</a><br/>&nbsp;
            </div>
        </div>
    </div>
    <!-- end main content-->
</div>