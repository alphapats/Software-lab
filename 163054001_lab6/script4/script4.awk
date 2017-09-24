BEGIN{print "Team\tPlayed\tWins\tTied\tPoints"}
{print $0"\t"$3*4+$4*2}
