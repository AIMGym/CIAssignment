

<p class="lead">
    Admin - program Maintenance
</p>
<table class="table">
    <tr>
        <th>ID Number</th>
        <th>Name</th>
        <th>Caption</th>
        <th>Delete</th>
    </tr>
    {programs}
    <tr>
        <td>{id}</td>
        <td>{name}</td>
        <td>{caption}</td>
        <?php

        echo  '<td><a class="btn btn-danger" href="/admin/delete/{id}" onclick="return confirm(\'Are you sure you want to Remove it?\')" >Delete</a></td>';
         ?>
    </tr>
    {/programs}
</table>
<a class="btn btn-primary" href="/admin/add">Add a New Program</a>

<!-- script to catch all the confirmation dialog events to see if delete should occur -->
    
    