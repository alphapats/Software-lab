set term png size 600,400
set output "4_3.png"

set parametric

f(t)= cos(2*t) 
g(t)= sin(5*t) - cos(3*t)

plot [0:2*pi] f(t),g(t) linecolor rgb "blue" linewidth 2
