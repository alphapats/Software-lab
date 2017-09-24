set term png size 600,400
set output "4_2.png"

set parametric

f(t)=cos(5*t)
g(t)=sin(3*t)

plot [0:2*pi] f(t),g(t) linecolor rgb "red" linewidth 2
