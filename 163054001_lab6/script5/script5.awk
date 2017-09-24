BEGIN { print "<style>table, th, td { border: 1px solid black;align=\"center\"}</style>" ;print "<table border: 1px solid black;>"; print "<tr><th align=\"center\">Team</th><th>Played</th><th>Wins</th><th>Tied</th><th>Points</th></tr>"}
      {print "<tr>";print "<tr><td align=\"center\">" $1 "</td><td align=\"center\">" $2 "</td><td align=\"center\">" $3 "</td><td align=\"center\">" $4 "</td><td align=\"center\">" $3*4+$4*2"</td>" ;
print "</tr>";}
END   { print "</table>" } 
