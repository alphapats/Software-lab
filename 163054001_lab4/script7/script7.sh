head -1 ls_sort.txt > a.tmp; 
tail -n+2 ls_sort.txt | sort -r -k$1 >> a.tmp;
cat a.tmp > ls_sort.txt;
echo -n > a.tmp;
rm -f a.tmp;
