set term png size 600,400
set yrange [-10:10]
set size 1,1
set output "1.png"

poly(x) = 0
poly1 (x) = (x-1)*(x-1) -1
poly2(x) = (x-2)*(x-2) -4
poly3(x) = (x-3)*(x-3) -9

plot [-10:10] poly(x) linetype 0, poly1(x) linetype 4 linewidth 2,poly2(x) linetype 2 linewidth 2,poly3(x) linetype 3 linewidth 2
