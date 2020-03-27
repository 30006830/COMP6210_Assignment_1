<?php include 'data.php'; ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="container">  
  <div class="row">
    <div class="col">
      <form action="data.php" name="form" method="POST">
        <div class="form-group">
          <label class="text-white">Item #</label>
          <br>
          <input type="text" name="itemNo" placeholder="Enter Item # Here.." required class="form-control">
          <br>
          <label class="text-white">Object Class:</label>
          <br>
          <input type="text" name="objectClass" placeholder="Enter Object Class Here.." required class="form-control">
          <br>
          <label class="text-white">Required Special Procedure for Subject:</label>
          <br>
          <textarea type="text" name="objectProcedure" placeholder="Enter Procedure Here.." required class="form-control" rows="5"></textarea>
          <br>
          <label class="text-white">Description:</label>
          <br>
          <textarea type="text" name="explanation" placeholder="Enter Description Here.." required class="form-control" rows="5"></textarea>
          <br><br>
          <button type="submit" onclick="return validate()" class="btn text-white bg-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<div class="container-fluid text-white">
<h2 class="h2 font-weight-bold text-light text-center">SCP: Data Table</h2>
  <table class="table table-responsive">
  <thead><tr><th>Item #:</th><th>Object Class:</th><th>Procedure:</th><th>Description:</th><th>Actions:</th></tr></thead>
  <?php while($row = $result->fetch_assoc()): ?>
  <tr>
    <td><?php echo $row['itemNo']?></td>
    <td><?php echo $row['objectClass']?></td>
    <td><?php echo $row['objectProcedure']?></td>
    <td><?php echo $row['explanation']?></td>
    <td>
      <a href="data.php?delete=<?php echo $row['id']; ?>" class="btn btn-warning">Delete</a>
    </td>
  </tr>
  <?php endwhile; ?>
  </table>
</div>

<script>
function validate() {
  valid = true;

  if(document.form.itemNo.value == "")
  {
    alert("Please enter the Subjects number.");
    valid = false;
  }
  else if(document.form.objectClass.value == "")
  {
    alert("Please enter the Subjects class.");
    valid = false;
  }
  else if(document.form.objectProcedure.value == "")
  {
    alert("Please enter the Subjects required procedure.");
    valid = false;
  }
  else if(document.form.explanation.value == "")
  {
    alert("Please enter the Subjects description");
    valid = false;
  }
  else
  alert("Data uploaded to Database Successfully.");

  return valid;
}
</script>