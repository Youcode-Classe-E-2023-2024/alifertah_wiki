<div class="container">
        <table class="table table-striped table-sm table-bordered">
            <thead>
            <tr class="text-center ">
                <th class="text-center text-white font-weight-bold bg-dark">id</th>
                <th class="text-center text-white font-weight-bold bg-dark">Category</th>
                <th class="text-center text-white font-weight-bold bg-dark">Action</th>
            </tr>
        </thead>
        <tbody>
    <?php
        show_all($db);
    ?>
    <tr class="text-center ">
   <td>
    <a href="index.php?page=new_category">
        new
    </a>
   </td>     
    </tr>
</tbody>
    </table>
</div>