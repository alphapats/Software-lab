#!/bin/bash
var1=$(ls -dl */ | wc -l)
var2=$(ls -dl */ |cut -d' ' -f1| grep -e rwx------| wc -l)
if [ $var1 -eq $var2 ]; then
echo "OK"
fi
