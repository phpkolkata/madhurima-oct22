<?php

interface test{
    const name = "raj";
    function hi();
    function bye();
}

class mydb implements test{
    function hi(){
        echo "hi";
    }
    function bye(){
        echo "bye";
    }
}