
<?php

    switch($rating){
        case 1:
            echo '
            <i class=" fa fa-star"></i>   
            <i class=" fa fa-star-o"></i>
            <i class=" fa fa-star-o"></i>
            <i class=" fa fa-star-o"></i>
            <i class=" fa fa-star-o"></i>
            ';
            break;

        case 1.5:
            echo '
            <i class=" fa fa-star"></i>   
            <i class=" fa fa-star-half-full"></i>
            <i class=" fa fa-star-o"></i>
            <i class=" fa fa-star-o"></i>
            <i class=" fa fa-star-o"></i>
            ';
            break;

        case 2:
            echo '
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star-o"></i>
            <i class=" fa fa-star-o"></i>
            <i class=" fa fa-star-o"></i>
            ';
            break;

        case 2.5:
            echo '
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star-half-full"></i>
            <i class=" fa fa-star-o"></i>
            <i class=" fa fa-star-o"></i>
            ';
            break;

        case 3:
            echo '
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star-o"></i>
            <i class=" fa fa-star-o"></i>
            ';
            break;

        case 3.5:
            echo '
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star-half-full"></i>
            <i class=" fa fa-star-o"></i>
            ';
            break;

        case 4:
            echo '
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star-o"></i>            
            ';
            break;

        case 4.5:
            echo '
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star-half-full"></i>          
            ';
            break;

        case 5:
            echo '
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>
            <i class=" fa fa-star"></i>          
            ';
            break;

        default:
        echo '
        <i class=" fa fa-star-o"></i>           
        <i class=" fa fa-star-o"></i>           
        <i class=" fa fa-star-o"></i>           
        <i class=" fa fa-star-o"></i>           
        <i class=" fa fa-star-o"></i>           
        ';
    }

    ?>
