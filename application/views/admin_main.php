<p class="lead">
    Admin - program Maintenance
</p>
<table class="table">
    <tr>
        <th>ID Number</th>
        <th>Name</th>
        <th>Caption</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    {tablerows}
</table>
<a class="btn btn-primary" href="/admin/add">Add a New Attraction</a>

<!-- script to catch all the confirmation dialog events to see if delete should occur -->
<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure you want to delete this attraction?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>