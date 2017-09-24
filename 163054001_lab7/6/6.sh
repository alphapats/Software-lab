sort inputdata6 | uniq -c | sed -e 's/^[ ]*//g' >out
gnuplot 6.plot
rm out
