#! /bin/bash
sum=0
i=0
while [ $i -le $1 ] 
do
sum=`expr $sum + $i`
i=`expr 1 + $i`
#i=$(($i + 1 ))
done
echo $sum
