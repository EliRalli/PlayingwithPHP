<html>
<body>

<h2> My Second PHP Webpage testing exceptions </h2>

<?php
    function throw_exception() {
        throw new  Exception("Exception!");
    }
    try {
        throw_exception();
    }   catch(Exception $e) {
        echo "Exception caught! \n";    
    }   finally {
        echo "Done!";
    }





?>





</body>
</html>