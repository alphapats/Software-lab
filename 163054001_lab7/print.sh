#!/bin/bash


#find  -type f -name 's*.sh' -print -exec cat >>allscript.txt {} \;
#result=$(find -type f -name 's*.sh')

#cat $result>>allscript.txt
find . -type f -name '*.plot' -print | while read filename; do
    echo -------------------"$filename"---------------------------------------------------
    echo $'\n'
    cat "$filename"
    echo $'\n'
    echo -------------------------------------------------------------------------------------------
done > outputplot.txt
