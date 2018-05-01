<div class="page-header">
    <div class="row">
        <div class="col-lg-6">
            <h3>Events</h3>
        </div>
        <div class="col-6 text-right">
            <a href="<?= $this->Url->build('events/add')?>" class="btn btn-secondary">New</a>
            <button class="btn btn-secondary" id="del-user">Remove</button>
        </div>
    </div>
</div>


<?php

    //echo $this->Tree->toHtmlByUl($events);
?>
<div class="block margin-bottom-sm">
  <div class="table-responsive">

    <table class="table" id="event-table">
      <thead>
      <tr>
        <th>#</th>
        <th>Event Name</th>
        <th>Started</th>
        <th>Ended</th>
        <th>Team A</th>
        <th>Team B</th>
        <th>Division</th>
        <th>Field</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
      <?php $this->Tree->toHtmlAsCallback($events, [], function($row, $deep, $index) {
          ?>
          <tr>
              <th scope="row"><?= $this->Form->checkbox('chk_users[]', ['value' => $row->id]) ?><?=$index?></th>
              <td><?php /*if ($deep != 0) :
                      echo str_repeat('&nbsp;&nbsp;&nbsp;', $deep) . '|' . str_repeat('---', $deep);
                      endif;
                      */?>
                <?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $deep) . $row['name']?></td>
              <td><?=$row['started']?></td>
              <td><?=$row['ended']?></td>
              <td>Hanao</td>
              <td>Karmen</td>
              <td>19</td>
              <td>Field 23</td>
              <td><a class="btn btn-secondary" href="<?=$this->Url->build(['controller' => 'events','action' => 'edit', $row['id']])?>">Edit</a>
                  &nbsp;&nbsp;<a class="btn btn-secondary">Delete</a></td>
          </tr>
          <?php
      })?>
      </tbody>
    </table>
  </div>
</div>

<script>
    $(function() {
        $('#event-table').DataTable();

        $('#del-user').click(function() {
            var result = confirm('Are you sure to delete selected users?');
            if(result) {
                $('#user-form').submit();
            }

        });
    });
</script>