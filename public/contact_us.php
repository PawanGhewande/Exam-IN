<!DOCTYPE html>
<html>
  <head>
    <?php include '../include/meta_include.php' ?>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <?php include '../include/css_include.php' ?>
  </head>
  <body>
    <div class="container m-5">
      <h2>Contact Us</h2>
      <form action="" method="">
        <div class="form-group">
          <label>Name</label>
          <input class="form-control" type="text" name="name" placeholder="name"/>
          <label>Email</label>
          <input class="form-control" type="text" name="email" placeholder="email"/>
          <label>Subject</label>
          <select id="inputStream" class="form-control" name="test_s">
              <option selected>Choose Subjects...</option>
              <option>Profile</option>
              <option>Accessability</option>
              <option>Others</option>
              <option>...</option>
              <option>...</option>
          </select>
          <label>Description</label>
          <textarea class="form-control" type="text" name="message" placeholder="Discribe your issue" rows="10"></textarea>
          <br>
          <button class="btn btn-dark" type="submit">Submit</button>
        </div>    
      </form>
    </div>
    <?php include '../include/js_include.php' ?>
  </body>
</html>
