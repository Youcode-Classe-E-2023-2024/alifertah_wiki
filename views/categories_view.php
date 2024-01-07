
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
while($category = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo("
    <tr class='text-center text-secondary'>
    <td>$category[category_id]</td>
    <td>$category[category_name]</td>
<td>
<a href='#'><i class='fa-solid fa-trash'></i></a>
<a href='#'><i class='fa-solid fa-pen-to-square'></i></i></a>
</td>
</tr>
    ");
}
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