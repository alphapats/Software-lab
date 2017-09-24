#!/bin/bash
cat $1 > $3
grep -v '^$' $2 |while read LINE
do
echo $LINE > temp.tmp
var1=$(cut -d ' ' -f2 temp.tmp)
var2=$(cut -d ' ' -f3 temp.tmp)
sed -i s/"$var1"/"$var2"/Ig $3 
done
rm temp.tmp

#!/bin/bash
#cat $1 > $3
#cut -d ' ' -f2,3 $2|grep -v '^$' |while read var1 var2 
#do 
#sed -i s/"$var1"/"$var2"/Ig $3 
#done



