<div class="container" style="width: 80%; margin: 0 auto;">
  <h4>Add Users</h4>
  <form>
    <div class="form-group">
      <label for="">Name:</label>
      <input class="form-control" type="text" name='UserPersonName'>
    </div>
    <div class="form-group">
      <label for="">User Name:</label>
      <input class="form-control" type="text" name='UserName'>
    </div>
    <div class="form-group">
      <label for="">Email:</label>
      <input class="form-control" type="text" name='UserEmail'>
    </div>
    <div class="form-group">
      <label for="">Password:</label>
      <input class="form-control" type="text" name='UserPass'>
    </div>
    <div class="form-group">
      <label for="">Repassword:</label>
      <input class="form-control" type="text" name='UserRepass'>
    </div>
    <div class="form-group">
      <label for="category">User Role:</label>
      <select class="form-control" id="category" name='UserRole'>
        <option value="">---Select One---</option>
        <option value="">Admin</option>
        <option value="">Admin</option>
        <option value="">Super </option>
      </select>
    </div>
    <div class="form-group">
      <label for="">Photo:</label>
      <input class="form-control" type="file" name='UserPhoto'>
    </div>
    <br>
    <input type="hidden" name="AddUser">
    <input type="submit" class="btn mybtn-hightlight" value="Add User">
  </form>
</div>
</div>