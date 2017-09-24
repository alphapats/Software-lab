#!/bin/bash


#find  -type f -name 's*.sh' -print -exec cat >>allscript.txt {} \;
#result=$(find -type f -name 's*.sh')

#cat $result>>allscript.txt
find . -type f -name 's*.s*' -print | while read filename; do
    echo "$filename"
    cat "$filename"
    echo $'\n'
done > output.txt
