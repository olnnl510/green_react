<?php
/*
    구구단
*/
    for ($i=2; $i<10; $i++) //시(천천히도는)
    {
        for ($z=1; $z<10; $z++) //분(빠르게도는)
        {
            $result = $i * $z ;
            print "$i x $z = $result <br>" ;
        }
        print "----------<br>" ;
    }

    



    for ($i=2; $i<10; $i++)
    {
        if($i >2) { print "----------<br>" ;}
        for ($z=1; $z<10; $z++)
        {
            $result = $i * $z ;
            print "$i x $z = $result <br>" ;
        }
    }
?>




