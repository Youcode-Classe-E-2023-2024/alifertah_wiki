
<div class="container">
        <table class="table table-striped table-sm table-bordered">
            <thead>
            <tr class="text-center ">
                <th class="text-center text-white font-weight-bold bg-dark">id</th>
                <th class="text-center text-white font-weight-bold bg-dark">tag</th>
                <th class="text-center text-white font-weight-bold bg-dark">Action</th>
            </tr>
        </thead>
        <tbody>
    <?php
        show_all($db);
    ?>
    <tr class="text-center ">
   <td>
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoryModal">
    Add
   </button>

<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoryModalLabel">Add New tag</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="tagName">tag Name</label>
            <input type="text" name='tagName' class="form-control" id="tagName" placeholder="Enter tag name">
          </div>
          <button type="submit" name='newTag' class="btn btn-primary">Add tag</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
   </td>     
    </tr>
</tbody>
    </table>
</div>