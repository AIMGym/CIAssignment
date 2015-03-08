<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
?>
<div class="row">
    <!-- main content -->
    <div id="start" class="span12">
       {program}
        <table class="table-condensed">
            <tr style="border-top: thick solid grey">
                <td rowspan="2">
                    <img src="{image1}" class ="img-rounded" width="240px" height="160px"/>
                </td>
                <td>
                 <strong>{name}</strong>
                </td>
                <td>
               <strong>Price: </strong> {price}
                </td>
            </tr>
            <tr>
                <td>
                    {caption} 
                </td>
                <td>
                <a class="btn btn-small" href="/Program/getOne/{id}">See Details</a><br/>&nbsp;
                </td>
            </tr>
        </table>
       {/program}
    </div>
    <!-- end main content-->
</div>