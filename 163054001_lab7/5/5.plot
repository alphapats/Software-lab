set term png size 600,400
set output "5.png"

TITLE="GRADECHART"
XLABEL="Roll No --->"
YLABEL="Grade --->"
set xtics 1 

#set title TITLE font "Courier new,18" textcolor rgbcolor "violet" 
set xlabel XLABEL
set ylabel YLABEL
set key autotitle columnhead
#set noautotile columnhead
set xtics rotate rotate by 45 right
set bmargin 3
set grid
set yrange[3:10.5]
set offset 1,2,0,0
#set offset graph 0,.2

grade(x)= (int(x)<=39) ? 4 : (int(x)<=44) ? 5 : (int(x)<=49) ? 6 : (int(x)<=54) ? 7 : (int(x)<=59) ? 8 : (int(x)<=69) ? 9: 10 

plot 'inputdata5' using 1:(grade($2)):0 with lines linewidth 2 linecolor rgb "violet"  title "Grade Chart",\
'inputdata5' using 1:(grade($2)) :2 with labels boxed notitle




