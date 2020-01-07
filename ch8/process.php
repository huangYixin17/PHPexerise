<?php
    class DividByZeroException extends Exception{};
    class DividByNegativeException extends Exception{};
    function process($denominator){
        try{
            if($denominator == 0){
                throw new DividByZeroException();
            }else if($denominator < 0){
                throw new DividByNegativeException();
            }else{
                echo 25/ $denominator;
            }   
        }catch (DividByZeroException $ex){
            echo "DICIDE BY ZERO EXCEPTION!";
        }catch(DividByNegativeException $ex){
            echo "DIVIDE BY NEGATIVE NUMBER EXCEPTION!";
        }catch (Exception $x){
            echo "UNKNOWN EXCEPTION!";
        }
    }
    process(0);
?>