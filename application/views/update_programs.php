
<h2> Admin - Updating Program: {attname}  </h2>
<!-- form to edit an attraction item -->
{fmultiform}
     {fname}     
     {fcaption}
     {fdescription}
     {fcontact}
     {flocation}
     {fprice}
     {fagegroup}
     <table class="table-condensed">
         <tr>
             <td>
                {fimage_url} 
             </td>
             <td>
                 {fimage_url_up}
             </td>
         </tr>
         <tr>
             <td>
                {fimage_url1} 
             </td>
             <td>
                 {fimage_url1_up}
             </td>
         </tr>
         <tr>
             <td>
                {fimage_url2} 
             </td>
             <td>
                 {fimage_url2_up}
             </td>
         </tr>
         <tr>
             <td>
                {fimage_url3} 
             </td>
             <td>
                 {fimage_url3_up}
             </td>
         </tr>
     </table>
     <table>
         <tr>
             <td>{fsubmit}</td>
             <td><a class="btn btn-danger" href="/admin">Cancel</a></td>
         </tr>
     </table>          
</form>