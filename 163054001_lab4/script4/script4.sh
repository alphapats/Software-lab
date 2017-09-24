#! /bin/bash
for file in *.$1
do
convert "$file" "${file%$1}$2"
done
