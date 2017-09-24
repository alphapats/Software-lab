{if (NF!=0)
{
{gsub ("^[ \t]+","")}
{gsub ("[ \t]+$","")}
{gsub ("[ \t]+"," ")}
print $0;
}}
