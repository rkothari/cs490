<!doctype php>
<php class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cs490 Project</title>
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">
      <div class="large-12 large-centered columns">
        <h1 class="titlecenter">Project: CS 101</h1>
      </div>
    </div>
    <form>
      <div class="row collapse">
        <div class="small-12 columns collapsed">
          <div class="row collapse">
            <div class="small-6 columns">
              <label>Username</label>
            </div>
            <div class="small-6 columns">
              <input type="text" id="user" placeholder="Enter Username">
            </div>

          </div>
          <div class="row collapse">
            <div class="small-4 columns">
              <label>Password</label>
            </div>
            <div class="small-6 columns">
              <input type="text" id="pass" placeholder="Enter Password">
            </div>
            <div class="small-2 columns">
              <button href="#" class="button postfix" onclick="dblogin(user,pass)">Login</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</php>
