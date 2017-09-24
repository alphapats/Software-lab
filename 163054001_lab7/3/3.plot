set term png size 600,400
set output "3.png"
set yrange [0:3]
set zrange [0:70]
set xrange [0:3]

set title "Ackermann function"

ack(x,y) = (int(x==0)) ? y+1 : (int(y)==0) ? ack(int(x)-1,1) : ack(int(x)-1,ack(int(x),int(y)-1))

set ticslevel 1
set xtics .5
set ytics .5 #to set y-axis intervals
set samples 4
set isosamples 4
#set pm3d

splot ack(x,y) linecolor rgb "green" linewidth 2
