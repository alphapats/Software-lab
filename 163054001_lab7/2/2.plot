set term png size 600,400
set output "2.png"
set yrange [-5:5]
set zrange [0:1000]
set xrange [-5:5]

func(x,y) = (x+y) * (x+y) * (x+y)
set ticslevel 0
set xtics 1
set ytics 1 #to set y-axis intervals

set pm3d

splot func(x,y) linecolor rgb "orange"
