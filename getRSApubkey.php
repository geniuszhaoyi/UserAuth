<?php
    $p=49991;
    $q=46271;
    $e=9;    //public
    
    $n=$p*$q;  //public
    $etfn=$n-($p+$q-1); // 2313037300
    $d=514008289;    // d*e = 1 (mod etfn)
    
    print '{"e"='.$e.',"n"='.$n.'}';
?>
