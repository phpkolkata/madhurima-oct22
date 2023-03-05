<?php
extract($_POST);

print "Data submitted!, please click the button to see the data";

// method one
print "
    <form action='25.php' method='post'>
        <input type='hidden' name='nm' value='$nm'>
        <button>click here</button>
    </form>
";


// method two
print"<a href='25.php?nm=$nm'> <button>click here</button> </a>";

