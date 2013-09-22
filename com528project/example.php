<?php include "includes/header.html"; ?>
<body>

<div id="mybook">
    <div> 
        <h3>Yay, Page 1!</h3>
    </div>
    <div> 
        <h3>Yay, Page 2!</h3>
    </div>
    <div> 
        <h3>Yay, Page 3!</h3>
    </div>
    <div> 
        <h3>Yay, Page 4!</h3>
    </div>
</div>

  <script>
    $(document).ready(function() {
        //single book
        initBook('#mybook');
    });    
  </script>    
</body>
</html>