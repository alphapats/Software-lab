set term png 
set output "6.png"
set size 1,1
TITLE="FREQUENCY COUNT"
set yrange [0:8]
set xtics rotate rotate by 45 right
set bmargin 8
set ytics 1
# Give the bars a plain fill pattern, and draw a solid line around them.
set style fill solid border

set style data histograms

plot 'out' using 1:xtic(2) title "Frequency count" linecolor rgb "violet"
replot
