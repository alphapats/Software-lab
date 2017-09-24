#!/bin/bash
sed -e 's/ [a-z][a-z]*//g'\
      -e 's/[\.\"\,\;\!\?\:\\\/><]//g' \
    -e 's/[A-Z][a-z][a-z]*/\n&/g'\
    -e 's/ [A-Z] //g' $1 >tmp
grep -v '^$' $2 |while read var
do
sed -i "s/\<$var\>//Ig" tmp 
done
sed 's/^ *//; s/ *$//; /^$/d' tmp > $3
rm tmp
