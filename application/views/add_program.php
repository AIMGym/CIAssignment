<h2> Admin - Adding A new Program</h2>
<!-- form to add a new attraction item -->
<div class="errors">{message}</div>
<form action="/admin/confirm" method="post">
     {fname}     
     {fcaption}
     {fdescription}
     {flocation}
     {fprice}
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
