<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
?>
<div class="row">
    <!-- main content -->
    <div id="start" class="span12">
        {membership}
        <div class="col-md-3">
            <div class="link-block">
                <br/>
                <strong>{name}</strong><br/><br/>
                <img src="{image1}" width="150px" height="80px"/><br/></br>
                <a class="btn btn-small" href="/Membership/getOne/{id}">See Details</a><br/>&nbsp;
            </div>
        </div>
        {/membership}
    </div>
    <!-- end main content-->
</div>
            
