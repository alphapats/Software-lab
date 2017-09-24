sum=0
count=0
for var in $(find $1 -maxdepth 1 -type f)
do
count=$(grep -wc "if" $var)
sum=`expr $count + $sum`
done
echo $sum

