#!/bin/awk

BEGIN {}

{
if(NF!=0) {blank = 0;} 
else if (blank == 0) {para+=1;blank=1;}
   
for(w=1;w<=NF;w++)
    {wcount++}
    
gsub(/[ ]*/,"",$0);
{char = char+length($0)}
 }

END {	para=para+1;
       printf "Number of Characters:"char"\tNumber of Words:"wcount"\tNumber of Lines:"FNR"\tNumber of Paragraphs:"para"\n";
     }

