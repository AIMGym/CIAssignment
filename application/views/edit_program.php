

  <link href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/lightbox.css" rel="stylesheet" type="text/css"/>
    <script src="../../assets/js/lightbox.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>

<h2> Admin - Adding A new Program</h2>
<!-- form to add a new attraction item -->
<div class="errors">{message}</div>
<form action="/admin/confirm" method="post" enctype="multipart/form-data">
     {fid}
     {fname}     
     {fcaption}
     {fdescription}
     {flocation}
     {fprice}
     <div class="alert-info">At least 1 image required (better if all 4)</div>
     {fimage1}
     {fimage2}
     {fimage3}
     {fimage4}
     {fsubmit}
</form>

     <table>
         <tr>
             <td>
                 <a class="btn btn-danger" href="/admin">Cancel</a>
             </td>                 
         </tr>
     </table>     
</form>
