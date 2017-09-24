#! /bin/bash
now=$(date +"%m-%d-%Y")
for file in *.$1
do
convert $file "${file%.$1}$now.$1"
rm $file
done
