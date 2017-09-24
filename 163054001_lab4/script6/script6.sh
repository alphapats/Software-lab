ls -l | while read LINE
do
echo $LINE > temp.tmp
var1=$(cut -d ' ' -f9 temp.tmp)
var2=$(cut -d ' ' -f8 temp.tmp)
var3=$(cut -d ' ' -f1 temp.tmp)
echo -e "$var1 \t $var2 \t $var3">>ls_sort.tmp
done
echo -e "File Name \t Time \t Permission" >ls_sort.txt
tail -n+2 ls_sort.tmp >>ls_sort.txt
rm temp.tmp
rm ls_sort.tmp
